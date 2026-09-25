import { mitra } from "@/data/portal";

function initials(name: string) {
  return name.split(" ").slice(0, 2).map((word) => word[0]).join("").toUpperCase();
}

export function Mitra() {
  const daftar = [...mitra, ...mitra];

  return (
    <section id="mitra" className="border-b border-border bg-secondary/70 py-20 md:py-28">
      <div className="mx-auto max-w-[1400px] px-5 md:px-8">
        <div className="flex flex-col justify-between gap-6 md:flex-row md:items-end">
          <div>
            <div className="section-index">03 // MITRA INDUSTRI</div>
            <h2 className="mt-5 text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Jejaring mitra yang membuka ruang belajar nyata.</h2>
          </div>
          <p className="max-w-md text-sm leading-6 text-muted-foreground">Jaringan perusahaan yang telah menandatangani kerja sama resmi untuk pengembangan talenta mahasiswa.</p>
        </div>
      </div>
      <div className="marquee-mask mt-14 overflow-hidden border-y border-border bg-background">
        <div className="marquee-track flex w-max">
          {daftar.map((nama, index) => (
            <div key={`${nama}-${index}`} className="group flex h-28 w-64 shrink-0 items-center gap-4 border-r border-border px-6 opacity-55 grayscale transition-all hover:opacity-100 hover:grayscale-0">
              <span className="flex size-10 items-center justify-center rounded-md border border-border font-mono text-xs font-bold">{initials(nama)}</span>
              <span className="text-sm font-semibold leading-tight">{nama}</span>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}