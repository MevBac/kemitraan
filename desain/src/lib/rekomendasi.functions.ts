import { createServerFn } from "@tanstack/react-start";
import { streamText, Output, NoObjectGeneratedError } from "ai";
import { z } from "zod";
import { slots } from "@/data/portal";
import { createLovableResponsesProvider } from "@/lib/ai-gateway.server";

const inputSchema = z.object({
  minat: z.string().trim().min(2),
  keahlian: z.string().trim().min(2),
  tipe: z.enum(["Bebas", "WFH", "WFO", "Hybrid"]),
  lokasi: z.string().trim(),
});

const outputSchema = z.object({
  ringkasan: z.string(),
  rekomendasi: z.array(z.object({
    slotId: z.string(),
    skor: z.number(),
    alasan: z.string(),
    sorotan: z.array(z.string()),
  })),
});

type RawOutput = z.infer<typeof outputSchema>;

function normalize(output: RawOutput) {
  const availableIds = new Set(slots.map((slot) => slot.id));
  return {
    ringkasan: output.ringkasan.trim(),
    rekomendasi: output.rekomendasi
      .filter((item) => availableIds.has(item.slotId))
      .slice(0, 3)
      .map((item) => ({
        ...item,
        skor: Math.max(0, Math.min(100, Math.round(item.skor))),
        alasan: item.alasan.trim(),
        sorotan: item.sorotan.slice(0, 3).map((value) => value.trim()).filter(Boolean),
        slot: slots.find((slot) => slot.id === item.slotId),
      }))
      .filter((item) => item.slot !== undefined),
  };
}

export const rekomendasikanMagang = createServerFn({ method: "POST" })
  .inputValidator((input: unknown) => inputSchema.parse(input))
  .handler(async ({ data }) => {
    const apiKey = process.env["LOVABLE_API_KEY"];
    if (!apiKey) throw new Error("Layanan rekomendasi AI belum dikonfigurasi.");

    const lovable = createLovableResponsesProvider(apiKey);
    const katalog = slots.map(({ id, posisi, perusahaan, bidang, tipe, lokasi, durasi, deskripsi, syarat }) => ({
      id, posisi, perusahaan, bidang, tipe, lokasi, durasi, deskripsi, syarat,
    }));

    try {
      const result = streamText({
        model: lovable.responses("openai/gpt-6-astra"),
        output: Output.object({ schema: outputSchema }),
        system: "Anda adalah konselor karier kampus. Pilih maksimal 3 slot hanya dari katalog. Nilai kecocokan secara jujur dari minat, keahlian, tipe kerja, lokasi, dan persyaratan. Jangan mengarang slot atau kualifikasi. Tulis ringkas dalam bahasa Indonesia.",
        prompt: `Profil mahasiswa:\n${JSON.stringify(data)}\n\nKatalog slot aktif:\n${JSON.stringify(katalog)}\n\nBerikan skor 0-100, alasan spesifik, dan maksimal 3 sorotan singkat untuk setiap rekomendasi.`,
        providerOptions: {
          openai: {
            forceReasoning: true,
            reasoningEffort: "low",
            reasoningSummary: "auto",
            store: false,
            include: ["reasoning.encrypted_content"],
          },
        },
      });

      const output = await result.output;
      return normalize(output);
    } catch (error) {
      if (NoObjectGeneratedError.isInstance(error)) {
        throw new Error("AI belum dapat menyusun rekomendasi yang valid. Silakan perjelas minat dan keahlian Anda.");
      }
      const message = error instanceof Error ? error.message : "Rekomendasi AI tidak dapat diproses.";
      throw new Error(message);
    }
  });