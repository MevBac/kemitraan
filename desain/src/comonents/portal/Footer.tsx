import { useState } from "react";
import { ArrowRight, Facebook, GraduationCap, Instagram, Linkedin, Mail, MapPin, Phone } from "lucide-react";

const fieldClass = "w-full rounded-md border border-border bg-background px-4 py-3 text-sm text-foreground outline-none transition-shadow placeholder:text-subtle focus:border-ring focus:ring-2 focus:ring-ring/25";

export function Footer() {
  const [terkirim, setTerkirim] = useState(false);

  return (
    <footer id="daftar-mitra" className="bg-background">
      <div className="mx-auto max-w-[1400px] border-x border-border px-5 py-20 md:px-8 md:py-28">
        <div className="section-index">05 // KERJASAMA</div>
        <div className="mt-6 grid gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
          <div className="flex flex-col justify-between rounded-lg bg-brand p-7 text-brand-foreground sm:p-10">
            <div>
              <h2 className="text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Bangun talenta masa depan bersama kami.</h2>
              <p className="mt-6 max-w-lg text-sm leading-6 text-brand-foreground/75">Buka akses magang untuk mahasiswa kami. Tim kerja sama kampus akan menghubungi Anda untuk proses berikutnya.</p>
            </div>
            <div className="mt-12 space-y-5 border-t border-brand-foreground/20 pt-7 text-sm text-brand-foreground/80">
              <p className="flex items-start gap-3"><MapPin className="mt-0.5 size-4 shrink-0" />Jl. Pendidikan No. 12, Gedung Rektorat Lt. 3</p>
              <p className="flex items-center gap-3"><Mail className="size-4" />kerjasama@kampus.ac.id</p>
              <p className="flex items-center gap-3"><Phone className="size-4" />(021) 5550 1234</p>
            </div>
          </div>

          <div className="border border-border bg-card p-5 sm:p-8">
            <div className="flex items-center justify-between border-b border-border pb-5">
              <h3 className="text-lg font-bold">Formulir Kemitraan</h3>
              <span className="font-mono text-[9px] uppercase text-subtle">Response / 3 hari kerja</span>
            </div>
            {terkirim ? (
              <div className="mt-8 border border-border bg-secondary p-6 text-sm leading-6">Terima kasih. Pengajuan kerja sama Anda sudah kami terima dan akan ditindaklanjuti dalam 3 hari kerja.</div>
            ) : (
              <form className="mt-7 grid gap-4 sm:grid-cols-2" onSubmit={(event) => { event.preventDefault(); setTerkirim(true); }}>
                <label className="space-y-2"><span className="field-label">Nama perusahaan</span><input required placeholder="PT Nama Perusahaan" className={fieldClass} /></label>
                <label className="space-y-2"><span className="field-label">Penanggung jawab</span><input required placeholder="Nama lengkap" className={fieldClass} /></label>
                <label className="space-y-2 sm:col-span-2"><span className="field-label">Email perusahaan</span><input required type="email" placeholder="nama@perusahaan.com" className={fieldClass} /></label>
                <label className="space-y-2 col-span-full"><span className="field-label">Rencana kerja sama</span><textarea rows={6} placeholder="Ceritakan kebutuhan dan slot magang yang ditawarkan" className={fieldClass} /></label>
                <button type="submit" className="group mt-1 inline-flex items-center justify-center gap-3 rounded-md bg-primary px-5 py-3.5 text-sm font-bold text-primary-foreground transition-colors hover:bg-primary/85 sm:col-span-2">
                  Ajukan Kerja Sama <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
                </button>
              </form>
            )}
          </div>
        </div>

        <div className="mt-20 flex flex-col gap-6 border-t border-border pt-7 sm:flex-row sm:items-center sm:justify-between">
          <div className="flex items-center gap-3"><GraduationCap className="size-5" /><span className="text-sm font-bold uppercase tracking-[0.08em]">KampusMagang</span></div>
          <p className="font-mono text-[9px] uppercase text-subtle">© {new Date().getFullYear()} Bagian Kerja Sama &amp; Karier Kampus</p>
          <div className="flex gap-2">
            {[Instagram, Linkedin, Facebook].map((Icon, index) => <a key={index} href="#" aria-label="Media sosial kampus" className="flex size-9 items-center justify-center rounded-md border border-border text-muted-foreground transition-colors hover:bg-secondary hover:text-foreground"><Icon className="size-3.5" /></a>)}
          </div>
        </div>
      </div>
    </footer>
  );
}