import { useState } from "react";
import { useServerFn } from "@tanstack/react-start";
import { ArrowRight, Bot, BriefcaseBusiness, LoaderCircle, MapPin, Sparkles } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Label } from "@/components/ui/label";
import { Textarea } from "@/components/ui/textarea";
import { rekomendasikanMagang } from "@/lib/rekomendasi.functions";

const fieldClass = "mt-2 w-full rounded-md border border-input bg-background px-3 py-3 text-sm outline-none transition-shadow placeholder:text-subtle focus-visible:border-ring focus-visible:ring-2 focus-visible:ring-ring/25";

type Result = Awaited<ReturnType<typeof rekomendasikanMagang>>;

export function RekomendasiAI() {
  const recommend = useServerFn(rekomendasikanMagang);
  const [minat, setMinat] = useState("");
  const [keahlian, setKeahlian] = useState("");
  const [tipe, setTipe] = useState<"Bebas" | "WFH" | "WFO" | "Hybrid">("Bebas");
  const [lokasi, setLokasi] = useState("");
  const [result, setResult] = useState<Result | null>(null);
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(false);

  async function handleSubmit(event: React.FormEvent<HTMLFormElement>) {
    event.preventDefault();
    setLoading(true);
    setError("");
    setResult(null);
    try {
      setResult(await recommend({ data: { minat, keahlian, tipe, lokasi } }));
    } catch (caught) {
      setError(caught instanceof Error ? caught.message : "Rekomendasi AI tidak dapat diproses.");
    } finally {
      setLoading(false);
    }
  }

  return (
    <section id="rekomendasi-ai" className="scroll-mt-20 border-b border-border bg-secondary/55 py-20 md:py-28">
      <div className="mx-auto max-w-[1400px] px-5 md:px-8">
        <div className="grid gap-12 lg:grid-cols-[0.72fr_1.28fr] lg:gap-20">
          <div>
            <div className="section-index">02 // REKOMENDASI AI</div>
            <h2 className="mt-5 font-display text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Temukan peluang yang paling cocok untukmu.</h2>
            <p className="mt-6 max-w-xl text-base leading-7 text-muted-foreground">Ceritakan arah karier dan kemampuanmu. AI akan membandingkannya dengan slot aktif, lalu menjelaskan alasan kecocokannya.</p>
            <div className="mt-8 flex items-start gap-3 border-l-2 border-primary bg-background p-4 text-sm leading-6 text-muted-foreground">
              <Sparkles className="mt-1 size-4 shrink-0 text-primary" />
              Isian digunakan hanya untuk membuat rekomendasi saat ini dan tidak disimpan.
            </div>
          </div>

          <div className="border border-border bg-card p-5 shadow-card sm:p-8">
            <form onSubmit={handleSubmit} className="grid gap-5 sm:grid-cols-2">
              <div className="sm:col-span-2">
                <Label htmlFor="minat">Minat bidang atau posisi</Label>
                <Textarea id="minat" required value={minat} onChange={(event) => setMinat(event.target.value)} placeholder="Contoh: pengembangan web, analisis data, desain produk" className="mt-2 min-h-24 focus-visible:ring-2 focus-visible:ring-ring/25" />
              </div>
              <div className="sm:col-span-2">
                <Label htmlFor="keahlian">Keahlian dan pengalaman</Label>
                <Textarea id="keahlian" required value={keahlian} onChange={(event) => setKeahlian(event.target.value)} placeholder="Contoh: React dasar, Figma, Excel, organisasi kampus" className="mt-2 min-h-24 focus-visible:ring-2 focus-visible:ring-ring/25" />
              </div>
              <div>
                <Label htmlFor="tipe">Tipe kerja</Label>
                <select id="tipe" value={tipe} onChange={(event) => setTipe(event.target.value as typeof tipe)} className={fieldClass}>
                  <option>Bebas</option><option>WFH</option><option>WFO</option><option>Hybrid</option>
                </select>
              </div>
              <div>
                <Label htmlFor="lokasi">Preferensi lokasi</Label>
                <input id="lokasi" value={lokasi} onChange={(event) => setLokasi(event.target.value)} placeholder="Contoh: Jakarta atau Remote" className={fieldClass} />
              </div>
              <Button type="submit" disabled={loading} className="h-12 sm:col-span-2">
                {loading ? <><LoaderCircle className="animate-spin" /> Mencocokkan profil...</> : <><Bot /> Buat rekomendasi <ArrowRight /></>}
              </Button>
            </form>

            {error && <p role="alert" className="mt-6 border border-destructive/30 bg-destructive/5 p-4 text-sm text-destructive">{error}</p>}

            {result && (
              <div className="mt-8 border-t border-border pt-7" aria-live="polite">
                <p className="text-sm leading-6 text-muted-foreground">{result.ringkasan}</p>
                <div className="mt-5 grid gap-4">
                  {result.rekomendasi.map(({ slotId, skor, alasan, sorotan, slot }) => (
                    <article key={slotId} className="border border-border bg-background p-5">
                      <div className="flex flex-wrap items-start justify-between gap-4">
                        <div><span className="font-mono text-[10px] font-bold uppercase text-primary">Kecocokan {skor}%</span><h3 className="mt-2 text-xl font-bold">{slot?.posisi}</h3><p className="mt-1 text-sm text-muted-foreground">{slot?.perusahaan}</p></div>
                        <span className="rounded-sm bg-brand-soft px-2.5 py-1 font-mono text-[10px] font-bold text-brand">{slot?.tipe}</span>
                      </div>
                      <p className="mt-4 text-sm leading-6 text-muted-foreground">{alasan}</p>
                      <div className="mt-4 flex flex-wrap gap-2">{sorotan.map((item) => <span key={item} className="rounded-sm border border-border px-2.5 py-1 text-xs">{item}</span>)}</div>
                      <div className="mt-5 flex flex-wrap items-center gap-5 border-t border-border pt-4 text-xs text-muted-foreground"><span className="flex items-center gap-1.5"><MapPin className="size-3.5 text-primary" />{slot?.lokasi}</span><span className="flex items-center gap-1.5"><BriefcaseBusiness className="size-3.5 text-primary" />{slot?.durasi}</span><a href="#slot-magang" className="ml-auto inline-flex items-center gap-1 font-bold text-brand">Lihat katalog <ArrowRight className="size-3.5" /></a></div>
                    </article>
                  ))}
                </div>
              </div>
            )}
          </div>
        </div>
      </div>
    </section>
  );
}