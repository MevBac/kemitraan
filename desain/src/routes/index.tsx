import { createFileRoute } from "@tanstack/react-router";
import { Header } from "@/components/portal/Header";
import { Hero } from "@/components/portal/Hero";
import { ProfilKampus } from "@/components/portal/ProfilKampus";
import { RekomendasiAI } from "@/components/portal/RekomendasiAI";
import { SlotMagang } from "@/components/portal/SlotMagang";
import { Mitra } from "@/components/portal/Mitra";
import { Testimoni } from "@/components/portal/Testimoni";
import { Footer } from "@/components/portal/Footer";

const title = "KampusMagang — Portal Slot Magang Kemitraan Kampus & Industri";
const description =
  "Profil program kemitraan kampus dan industri untuk pembelajaran berbasis pengalaman, slot magang terverifikasi, serta pengembangan karier mahasiswa.";

export const Route = createFileRoute("/")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { name: "twitter:card", content: "summary_large_image" },
    ],
  }),
  component: Index,
});

function Index() {
  return (
    <div className="min-h-screen bg-background font-sans text-foreground">
      <Header />
      <main>
        <Hero />
        <ProfilKampus />
        <RekomendasiAI />
        <SlotMagang />
        <Mitra />
        <Testimoni />
      </main>
      <Footer />
    </div>
  );
}
