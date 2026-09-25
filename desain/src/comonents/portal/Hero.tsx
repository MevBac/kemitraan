import { useEffect, useState } from "react";
import { ArrowLeft, ArrowRight } from "lucide-react";
import programLaunch from "@/assets/campus-program-launch.jpg";
import industryWorkshop from "@/assets/campus-industry-workshop.jpg";
import companyVisit from "@/assets/campus-company-visit.jpg";

const stats = [
  { angka: "120+", label: "Perusahaan mitra" },
  { angka: "850", label: "Slot / tahun" },
  { angka: "92%", label: "Terserap kerja" },
];

const slides = [
  { image: programLaunch, title: "Pelepasan peserta magang bersama mitra industri", meta: "Program Kampus–Industri / Angkatan 2026" },
  { image: industryWorkshop, title: "Pembelajaran berbasis proyek di laboratorium inovasi", meta: "Kolaborasi Akademik / Pengembangan Kompetensi" },
  { image: companyVisit, title: "Kunjungan industri dan pengenalan lingkungan kerja", meta: "Eksposur Industri / Persiapan Karier" },
];

export function Hero() {
  const [active, setActive] = useState(0);

  useEffect(() => {
    const timer = window.setInterval(() => setActive((current) => (current + 1) % slides.length), 6000);
    return () => window.clearInterval(timer);
  }, []);

  const move = (direction: number) => setActive((current) => (current + direction + slides.length) % slides.length);
  const activeSlide = slides[active] ?? slides[0];

  if (!activeSlide) return null;

  return (
    <section id="beranda" className="border-b border-border bg-secondary/45 px-5 py-8 md:px-8 md:py-12">
      <div className="mx-auto grid min-h-[700px] max-w-[1400px] overflow-hidden rounded-lg border border-border bg-background shadow-hero lg:grid-cols-[0.78fr_1.22fr]">
        <div className="flex flex-col justify-between p-7 sm:p-10 lg:p-14">
          <div>
            <div className="section-index"><span className="status-dot" /> PROGRAM KEMITRAAN KAMPUS–INDUSTRI</div>
            <h1 className="mt-10 max-w-xl font-display text-[clamp(3rem,5.4vw,5.5rem)] font-bold leading-[0.98] tracking-tighter">
              Belajar di kampus. <span className="text-primary">Bertumbuh di industri.</span>
            </h1>
            <p className="mt-7 max-w-xl text-base leading-7 text-muted-foreground md:text-lg">
              KampusMagang menghubungkan pembelajaran akademik dengan pengalaman kerja nyata melalui program magang yang terarah, terverifikasi, dan didampingi kampus.
            </p>
            <div className="mt-9 flex flex-col gap-3 sm:flex-row">
              <a href="#slot-magang" className="group inline-flex items-center justify-center gap-3 rounded-md bg-primary px-5 py-3.5 text-sm font-bold text-primary-foreground transition-colors hover:bg-brand">
                Temukan slot magang <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
              </a>
              <a href="#profil-kampus" className="inline-flex items-center justify-center rounded-md border border-border bg-background px-5 py-3.5 text-sm font-bold transition-colors hover:bg-secondary">Kenali program kami</a>
            </div>
          </div>
          <dl className="mt-12 grid grid-cols-3 border-t border-border pt-7">
            {stats.map((stat) => <div key={stat.label}><dt className="text-2xl font-bold text-brand sm:text-3xl">{stat.angka}</dt><dd className="mt-1 text-[11px] leading-4 text-muted-foreground sm:text-xs">{stat.label}</dd></div>)}
          </dl>
        </div>

        <div className="relative min-h-[480px] overflow-hidden bg-muted lg:min-h-full" aria-live="polite">
          {slides.map((slide, index) => (
            <img key={slide.title} src={slide.image} alt={slide.title} width={1600} height={1000} className={`absolute inset-0 size-full object-cover transition-all duration-700 ${index === active ? "scale-100 opacity-100" : "scale-[1.03] opacity-0"}`} />
          ))}
          <div className="image-scrim absolute inset-0" />
          <div className="absolute left-6 right-6 top-6 flex items-center justify-between sm:left-9 sm:right-9 sm:top-9">
            <span className="rounded-md border border-background/40 bg-background/90 px-3 py-2 text-[10px] font-bold uppercase text-brand backdrop-blur">Dokumentasi kegiatan</span>
            <div className="flex gap-2">{slides.map((slide, index) => <button key={slide.title} type="button" onClick={() => setActive(index)} aria-label={`Tampilkan kegiatan ${index + 1}`} className={`h-1.5 rounded-full transition-all ${index === active ? "w-10 bg-background" : "w-5 bg-background/45"}`} />)}</div>
          </div>
          <div className="absolute inset-x-0 bottom-0 p-6 text-brand-foreground sm:p-10">
            <p className="text-xs font-semibold uppercase opacity-80">{activeSlide.meta}</p>
            <div className="mt-3 flex items-end justify-between gap-5">
              <h2 className="max-w-2xl text-2xl font-bold leading-tight sm:text-3xl">{activeSlide.title}</h2>
              <div className="flex shrink-0 gap-2">
                <button type="button" onClick={() => move(-1)} aria-label="Kegiatan sebelumnya" className="flex size-11 items-center justify-center rounded-full border border-background/40 bg-overlay/20 transition-colors hover:bg-background hover:text-brand"><ArrowLeft className="size-5" /></button>
                <button type="button" onClick={() => move(1)} aria-label="Kegiatan berikutnya" className="flex size-11 items-center justify-center rounded-full border border-background/40 bg-overlay/20 transition-colors hover:bg-background hover:text-brand"><ArrowRight className="size-5" /></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}