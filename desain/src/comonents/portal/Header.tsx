import { useState } from "react";
import { ArrowUpRight, GraduationCap, Menu, X } from "lucide-react";

const navItems = [
  { href: "#profil-kampus", label: "Profil Kampus" },
  { href: "#rekomendasi-ai", label: "Rekomendasi AI" },
  { href: "#slot-magang", label: "Slot Magang" },
  { href: "#mitra", label: "Mitra" },
];

export function Header() {
  const [open, setOpen] = useState(false);

  return (
    <header className="sticky top-0 z-50 border-b border-border bg-background/95 shadow-sm backdrop-blur-xl">
      <div className="mx-auto flex max-w-[1400px] items-center justify-between px-5 py-4 md:px-8">
        <a href="#beranda" className="flex items-center gap-3" aria-label="KampusMagang — Beranda">
            <span className="flex size-9 items-center justify-center rounded-md bg-primary text-primary-foreground">
            <GraduationCap className="size-[18px]" />
          </span>
          <span>
            <span className="block text-sm font-bold uppercase tracking-[0.08em]">KampusMagang</span>
            <span className="block text-[9px] font-semibold uppercase text-muted-foreground">Pusat Karier &amp; Kemitraan</span>
          </span>
        </a>

        <nav className="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
          {navItems.map((item, index) => (
            <a key={item.href} href={item.href} className="group flex items-center gap-2 text-xs font-medium text-muted-foreground transition-colors hover:text-foreground">
              <span className="font-mono text-[9px] text-subtle">0{index + 1}</span>
              {item.label}
            </a>
          ))}
        </nav>

        <a href="#daftar-mitra" className="group hidden items-center gap-2 rounded-md bg-primary px-4 py-2.5 text-xs font-bold uppercase text-primary-foreground transition-colors hover:bg-primary/85 lg:flex">
          Jadi Mitra <ArrowUpRight className="size-3.5 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
        </a>

        <button type="button" aria-label={open ? "Tutup menu" : "Buka menu"} onClick={() => setOpen((value) => !value)} className="flex size-9 items-center justify-center rounded-md border border-border text-foreground lg:hidden">
          {open ? <X className="size-4" /> : <Menu className="size-4" />}
        </button>
      </div>

      {open && (
        <div className="border-t border-border bg-background px-5 py-5 lg:hidden">
          <nav className="mx-auto flex max-w-[1400px] flex-col">
            {navItems.map((item, index) => (
              <a key={item.href} href={item.href} onClick={() => setOpen(false)} className="flex items-center gap-3 border-b border-border py-4 text-sm font-medium">
                <span className="font-mono text-[10px] text-subtle">0{index + 1}</span>{item.label}
              </a>
            ))}
            <a href="#daftar-mitra" onClick={() => setOpen(false)} className="mt-5 flex items-center justify-center gap-2 rounded-md bg-primary px-4 py-3 text-xs font-bold uppercase text-primary-foreground">
              Jadi Mitra <ArrowUpRight className="size-4" />
            </a>
          </nav>
        </div>
      )}
    </header>
  );
}