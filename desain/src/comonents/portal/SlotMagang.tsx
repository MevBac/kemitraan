import { useMemo, useState } from "react";
import { ArrowRight, Briefcase, CalendarDays, MapPin, Search, Users2, X } from "lucide-react";
import { bidangList, slots, tipeList, type Slot } from "@/data/portal";

const inputClass = "w-full rounded-md border border-border bg-surface px-4 py-3 text-sm text-foreground outline-none transition-shadow placeholder:text-subtle focus:border-ring focus:ring-2 focus:ring-ring/25";

export function SlotMagang() {
  const [query, setQuery] = useState("");
  const [bidang, setBidang] = useState(bidangList[0]);
  const [tipe, setTipe] = useState<string>(tipeList[0]);
  const [detail, setDetail] = useState<Slot | null>(null);

  const hasil = useMemo(() => slots.filter((slot) => {
    const pencarian = query.trim().toLowerCase();
    return (!pencarian || slot.posisi.toLowerCase().includes(pencarian) || slot.perusahaan.toLowerCase().includes(pencarian) || slot.bidang.toLowerCase().includes(pencarian))
      && (bidang === bidangList[0] || slot.bidang === bidang)
      && (tipe === tipeList[0] || slot.tipe === tipe);
  }), [query, bidang, tipe]);

  return (
    <section id="slot-magang" className="scroll-mt-20 border-b border-border py-20 md:py-28">
      <div className="mx-auto max-w-[1400px] px-5 md:px-8">
        <div className="flex flex-col justify-between gap-8 md:flex-row md:items-end">
          <div>
             <div className="section-index">03 // SLOT MAGANG TERSEDIA</div>
            <h2 className="mt-5 max-w-3xl text-4xl font-bold leading-tight tracking-tighter md:text-6xl">Temukan pengalaman yang selaras dengan bidangmu.</h2>
          </div>
          <div className="flex items-center gap-3 font-mono text-[10px] uppercase text-muted-foreground"><span className="status-dot" />{hasil.length.toString().padStart(2, "0")} posisi aktif</div>
        </div>

        <div className="mt-14 grid gap-px border border-border bg-border md:grid-cols-[1.6fr_1fr_1fr]">
          <label className="relative bg-background">
            <Search className="pointer-events-none absolute left-4 top-1/2 size-4 -translate-y-1/2 text-subtle" />
             <input value={query} onChange={(event) => setQuery(event.target.value)} placeholder="Cari posisi atau perusahaan" aria-label="Cari slot magang" className="w-full bg-transparent py-4 pl-11 pr-4 text-sm outline-none placeholder:text-subtle focus:ring-2 focus:ring-inset focus:ring-ring/25" />
          </label>
           <select value={bidang} onChange={(event) => setBidang(event.target.value)} aria-label="Filter bidang" className="bg-background px-4 py-4 text-sm text-muted-foreground outline-none focus:ring-2 focus:ring-inset focus:ring-ring/25">
            {bidangList.map((item) => <option key={item}>{item}</option>)}
          </select>
           <select value={tipe} onChange={(event) => setTipe(event.target.value)} aria-label="Filter tipe kerja" className="bg-background px-4 py-4 text-sm text-muted-foreground outline-none focus:ring-2 focus:ring-inset focus:ring-ring/25">
            {tipeList.map((item) => <option key={item}>{item === "Semua Tipe" ? item : `Tipe ${item}`}</option>)}
          </select>
        </div>

        {hasil.length === 0 ? (
          <p className="mt-8 border border-dashed border-border p-12 text-center text-sm text-muted-foreground">Tidak ada slot magang yang cocok dengan pencarian Anda.</p>
        ) : (
          <div className="mt-8 grid gap-px border border-border bg-border md:grid-cols-2 lg:grid-cols-3">
            {hasil.map((slot, index) => (
              <article key={slot.id} className="group flex min-h-[390px] flex-col bg-card p-6 transition-all hover:bg-secondary hover:shadow-card md:p-7">
                <div className="flex items-center justify-between font-mono text-[9px] uppercase text-subtle"><span>Opportunity / {String(index + 1).padStart(2, "0")}</span><span>{slot.tipe}</span></div>
                <div className="mt-8"><span className="rounded-sm border border-border px-2 py-1 font-mono text-[9px] uppercase text-muted-foreground">{slot.bidang}</span><h3 className="mt-5 text-2xl font-bold leading-tight tracking-tight">{slot.posisi}</h3><p className="mt-2 text-sm text-muted-foreground">{slot.perusahaan}</p></div>
                <dl className="mt-8 grid grid-cols-2 gap-y-4 border-t border-border pt-5 font-mono text-[10px] uppercase text-muted-foreground">
                  <div><dt className="text-subtle">Kuota</dt><dd className="mt-1 text-foreground">{slot.kuota} mahasiswa</dd></div>
                  <div><dt className="text-subtle">Durasi</dt><dd className="mt-1 text-foreground">{slot.durasi}</dd></div>
                  <div className="col-span-2"><dt className="text-subtle">Lokasi</dt><dd className="mt-1 text-foreground">{slot.lokasi}</dd></div>
                </dl>
                <button type="button" onClick={() => setDetail(slot)} className="mt-auto flex items-center justify-between border-t border-border pt-5 text-sm font-bold transition-colors group-hover:text-foreground">
                  Detail &amp; Daftar <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
                </button>
              </article>
            ))}
          </div>
        )}
      </div>
      {detail && <DetailModal slot={detail} onClose={() => setDetail(null)} />}
    </section>
  );
}

function DetailModal({ slot, onClose }: { slot: Slot; onClose: () => void }) {
  const [terkirim, setTerkirim] = useState(false);
  return (
    <div className="fixed inset-0 z-[60] flex items-end justify-center bg-overlay p-0 backdrop-blur-sm sm:items-center sm:p-5" onMouseDown={(event) => { if (event.target === event.currentTarget) onClose(); }}>
      <div role="dialog" aria-modal="true" aria-label={slot.posisi} className="max-h-[92vh] w-full max-w-2xl overflow-y-auto border border-border bg-card p-6 sm:rounded-md sm:p-8">
        <div className="flex items-start justify-between gap-4 border-b border-border pb-6"><div><div className="section-index">APPLICATION / {slot.id.padStart(2, "0")}</div><h3 className="mt-4 text-2xl font-bold tracking-tight sm:text-3xl">{slot.posisi}</h3><p className="mt-2 text-sm text-muted-foreground">{slot.perusahaan}</p></div><button type="button" onClick={onClose} aria-label="Tutup" className="flex size-9 shrink-0 items-center justify-center rounded-md border border-border hover:bg-secondary"><X className="size-4" /></button></div>
        <div className="mt-6 grid grid-cols-2 gap-px border border-border bg-border sm:grid-cols-4">
          <Info icon={Users2} label="Kuota" value={`${slot.kuota} mahasiswa`} /><Info icon={CalendarDays} label="Durasi" value={slot.durasi} /><Info icon={MapPin} label="Lokasi" value={slot.lokasi} /><Info icon={Briefcase} label="Tipe" value={slot.tipe} />
        </div>
        <p className="mt-7 text-sm leading-6 text-muted-foreground">{slot.deskripsi}</p>
        <h4 className="mt-7 font-mono text-[10px] uppercase text-subtle">Persyaratan</h4>
        <ul className="mt-3 space-y-2 text-sm">{slot.syarat.map((syarat) => <li key={syarat} className="flex gap-3"><span className="text-subtle">—</span>{syarat}</li>)}</ul>
        {terkirim ? <p className="mt-8 border border-border bg-secondary p-5 text-sm leading-6">Pendaftaran Anda tercatat. Tim kerja sama kampus akan menghubungi lewat email kampus dalam 3 hari kerja.</p> : (
          <form className="mt-8 grid gap-3 sm:grid-cols-2" onSubmit={(event) => { event.preventDefault(); setTerkirim(true); }}>
            <input required placeholder="Nama lengkap" className={inputClass} /><input required placeholder="NIM" className={inputClass} /><input required type="email" placeholder="Email kampus" className={`${inputClass} sm:col-span-2`} />
            <button type="submit" className="group flex items-center justify-center gap-3 rounded-md bg-primary px-5 py-3.5 text-sm font-bold text-primary-foreground transition-colors hover:bg-primary/85 sm:col-span-2">Kirim Pendaftaran <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" /></button>
          </form>
        )}
      </div>
    </div>
  );
}

function Info({ icon: Icon, label, value }: { icon: typeof Users2; label: string; value: string }) {
  return <div className="bg-background p-4"><Icon className="size-4 text-subtle" /><span className="mt-4 block font-mono text-[9px] uppercase text-subtle">{label}</span><span className="mt-1 block text-xs font-semibold">{value}</span></div>;
}