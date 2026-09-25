import { ArrowUpRight, BookOpenCheck, Handshake, Route, ShieldCheck } from "lucide-react";
import workshopImage from "@/assets/campus-industry-workshop.jpg";
import visitImage from "@/assets/campus-company-visit.jpg";

const values = [
  { icon: BookOpenCheck, title: "Relevansi pembelajaran", text: "Pengalaman di industri dipadukan dengan capaian pembelajaran program studi." },
  { icon: Handshake, title: "Kemitraan berkelanjutan", text: "Kampus dan perusahaan menyusun kebutuhan talenta, proyek, serta evaluasi bersama." },
  { icon: ShieldCheck, title: "Pendampingan terukur", text: "Mahasiswa didampingi sejak persiapan, pelaksanaan, hingga konversi hasil belajar." },
];

const journey = [
  ["01", "Kurasi peluang", "Tim kampus memeriksa mitra, deskripsi peran, durasi, dan kesesuaian bidang studi."],
  ["02", "Persiapan mahasiswa", "Peserta mendapat pembekalan CV, komunikasi profesional, dan kesiapan kerja."],
  ["03", "Magang & pendampingan", "Dosen pembimbing dan mentor industri memantau progres serta pengalaman belajar."],
  ["04", "Evaluasi & rekognisi", "Capaian mahasiswa dinilai dan dapat direkognisi sesuai ketentuan akademik kampus."],
];

export function ProfilKampus() {
  return (
    <section id="profil-kampus" className="scroll-mt-20 border-b border-border bg-background py-20 md:py-28">
      <div className="mx-auto max-w-[1400px] px-5 md:px-8">
        <div className="grid gap-10 lg:grid-cols-[0.82fr_1.18fr] lg:gap-20">
          <div>
            <div className="section-index">01 // PROFIL &amp; ARAH KEMITRAAN</div>
            <h2 className="mt-5 font-display text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Menyiapkan lulusan yang siap berkarya, bukan sekadar siap melamar.</h2>
          </div>
          <div className="grid gap-7 text-base leading-8 text-muted-foreground sm:grid-cols-2">
            <p>KampusMagang merupakan pusat kolaborasi kampus dan dunia industri untuk membuka akses pengalaman kerja yang relevan bagi mahasiswa. Setiap peluang dihimpun dalam satu sistem agar proses pencarian, seleksi, dan pendampingan lebih jelas.</p>
            <p>Program ini dirancang untuk mempertemukan kompetensi akademik dengan kebutuhan nyata perusahaan. Mitra memperoleh talenta potensial, sementara mahasiswa membangun portofolio, jejaring profesional, dan pemahaman budaya kerja.</p>
          </div>
        </div>

        <div className="mt-14 grid gap-5 lg:grid-cols-12">
          <div className="relative min-h-[420px] overflow-hidden rounded-lg lg:col-span-7">
            <img src={workshopImage} alt="Mahasiswa mengembangkan proyek bersama di laboratorium inovasi" loading="lazy" width={1600} height={1000} className="absolute inset-0 size-full object-cover" />
            <div className="image-scrim absolute inset-0" />
            <p className="absolute bottom-6 left-6 max-w-sm text-xl font-semibold text-brand-foreground sm:bottom-8 sm:left-8">Pembelajaran kolaboratif yang membawa teori ke persoalan nyata.</p>
          </div>
          <div className="grid gap-5 sm:grid-cols-2 lg:col-span-5 lg:grid-cols-1">
            <div className="rounded-lg border border-border bg-secondary p-7">
              <span className="text-sm font-bold text-primary">Visi program</span>
              <p className="mt-4 text-2xl font-semibold leading-snug">Menjadi penghubung terpercaya antara talenta kampus dan pertumbuhan industri Indonesia.</p>
            </div>
            <div className="relative min-h-[250px] overflow-hidden rounded-lg">
              <img src={visitImage} alt="Mahasiswa mengikuti kunjungan dan pengarahan dari mitra industri" loading="lazy" width={1600} height={1000} className="absolute inset-0 size-full object-cover" />
            </div>
          </div>
        </div>

        <div className="mt-16 grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-3">
          {values.map(({ icon: Icon, title, text }) => (
            <article key={title} className="bg-background p-7 md:p-8"><Icon className="size-6 text-primary" /><h3 className="mt-7 text-xl font-bold">{title}</h3><p className="mt-3 text-sm leading-6 text-muted-foreground">{text}</p></article>
          ))}
        </div>

        <div className="mt-20 grid gap-10 lg:grid-cols-[0.7fr_1.3fr] lg:gap-20">
          <div><div className="section-index">ALUR PROGRAM</div><h3 className="mt-5 text-3xl font-bold tracking-tight md:text-4xl">Dari peluang hingga pengalaman yang diakui.</h3><a href="#slot-magang" className="mt-7 inline-flex items-center gap-2 text-sm font-bold text-primary">Lihat peluang tersedia <ArrowUpRight className="size-4" /></a></div>
          <div className="grid gap-px overflow-hidden rounded-lg border border-border bg-border sm:grid-cols-2">
            {journey.map(([number, title, text]) => <article key={number} className="bg-background p-7"><span className="font-mono text-xs font-bold text-primary">{number}</span><h4 className="mt-8 flex items-center gap-2 text-lg font-bold"><Route className="size-4 text-primary" />{title}</h4><p className="mt-3 text-sm leading-6 text-muted-foreground">{text}</p></article>)}
          </div>
        </div>
      </div>
    </section>
  );
}