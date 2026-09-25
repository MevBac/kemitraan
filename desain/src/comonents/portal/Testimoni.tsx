import { ArrowUpRight, Quote } from "lucide-react";
import { testimoni } from "@/data/portal";

export function Testimoni() {
  return (
    <section id="testimoni" className="border-b border-border py-20 md:py-28">
      <div className="mx-auto max-w-[1400px] px-5 md:px-8">
        <div className="section-index">04 // TESTIMONI ALUMNI</div>
        <div className="mt-5 flex flex-col justify-between gap-6 md:flex-row md:items-end">
          <h2 className="max-w-3xl text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Pengalaman magang yang menjadi awal perjalanan karier.</h2>
          <p className="max-w-sm text-sm leading-6 text-muted-foreground">Cerita nyata dari alumni yang memulai perjalanan profesional melalui jaringan mitra kampus.</p>
        </div>

        <div className="mt-14 grid border-l border-t border-border md:grid-cols-3">
          {testimoni.map((item, index) => (
            <figure key={item.nama} className="group flex min-h-[330px] flex-col border-b border-r border-border bg-card p-7 transition-colors hover:bg-secondary md:p-9">
              <div className="flex items-center justify-between">
                <span className="font-mono text-[10px] text-subtle">CASE / 0{index + 1}</span>
                <Quote className="size-5 text-subtle transition-colors group-hover:text-foreground" />
              </div>
              <blockquote className="mt-10 flex-1 text-lg font-medium leading-7">“{item.kutipan}”</blockquote>
              <figcaption className="mt-8 flex items-end justify-between border-t border-border pt-5">
                <span>
                  <span className="block text-sm font-bold">{item.nama}</span>
                  <span className="mt-1 block font-mono text-[10px] uppercase text-muted-foreground">{item.prodi}</span>
                  <span className="mt-1 block text-xs text-muted-foreground">{item.perusahaan}</span>
                </span>
                <ArrowUpRight className="size-4 text-subtle" />
              </figcaption>
            </figure>
          ))}
        </div>
      </div>
    </section>
  );
}