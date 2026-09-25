export type Slot = {
  id: string;
  posisi: string;
  perusahaan: string;
  bidang: string;
  tipe: "WFH" | "WFO" | "Hybrid";
  kuota: number;
  durasi: string;
  lokasi: string;
  deskripsi: string;
  syarat: string[];
};

export const bidangList = [
  "Semua Bidang",
  "Teknologi Informasi",
  "Desain & Kreatif",
  "Bisnis & Marketing",
  "Keuangan",
  "Teknik",
];

export const tipeList = ["Semua Tipe", "WFH", "WFO", "Hybrid"] as const;

export const slots: Slot[] = [
  {
    id: "1",
    posisi: "Frontend Developer Intern",
    perusahaan: "PT Nusantara Digital",
    bidang: "Teknologi Informasi",
    tipe: "Hybrid",
    kuota: 5,
    durasi: "6 bulan",
    lokasi: "Jakarta Selatan",
    deskripsi:
      "Membangun antarmuka aplikasi web internal bersama tim produk menggunakan React dan TypeScript.",
    syarat: ["Mahasiswa semester 5+", "Menguasai HTML, CSS, JavaScript", "Portofolio proyek web"],
  },
  {
    id: "2",
    posisi: "Data Analyst Intern",
    perusahaan: "Bank Sentosa Mandiri",
    bidang: "Keuangan",
    tipe: "WFO",
    kuota: 3,
    durasi: "4 bulan",
    lokasi: "Surabaya",
    deskripsi:
      "Mengolah data transaksi nasabah dan menyusun laporan visual untuk mendukung keputusan bisnis.",
    syarat: ["Menguasai SQL & Excel", "Familiar dengan Python/R", "Teliti dan analitis"],
  },
  {
    id: "3",
    posisi: "UI/UX Designer Intern",
    perusahaan: "Kreasi Studio",
    bidang: "Desain & Kreatif",
    tipe: "WFH",
    kuota: 4,
    durasi: "3 bulan",
    lokasi: "Remote",
    deskripsi:
      "Merancang alur pengguna dan prototipe produk digital klien dari riset hingga desain akhir.",
    syarat: ["Menguasai Figma", "Memahami design system", "Portofolio desain produk"],
  },
  {
    id: "4",
    posisi: "Digital Marketing Intern",
    perusahaan: "PT Cipta Karya Retail",
    bidang: "Bisnis & Marketing",
    tipe: "Hybrid",
    kuota: 6,
    durasi: "5 bulan",
    lokasi: "Bandung",
    deskripsi:
      "Menjalankan kampanye media sosial, menulis konten, dan menganalisis performa iklan digital.",
    syarat: ["Kreatif menulis konten", "Paham Meta & Google Ads", "Komunikatif"],
  },
  {
    id: "5",
    posisi: "Quality Engineering Intern",
    perusahaan: "PT Baja Perkasa Industri",
    bidang: "Teknik",
    tipe: "WFO",
    kuota: 2,
    durasi: "6 bulan",
    lokasi: "Cikarang",
    deskripsi:
      "Mendampingi tim QC dalam pengujian material dan penyusunan dokumen standar mutu produksi.",
    syarat: ["Teknik Mesin/Industri", "Memahami K3", "Bersedia kerja di pabrik"],
  },
  {
    id: "6",
    posisi: "Backend Developer Intern",
    perusahaan: "Sinergi Cloud Indonesia",
    bidang: "Teknologi Informasi",
    tipe: "WFH",
    kuota: 4,
    durasi: "6 bulan",
    lokasi: "Remote",
    deskripsi:
      "Mengembangkan layanan API dan integrasi basis data untuk platform SaaS perusahaan.",
    syarat: ["Menguasai Node.js atau Go", "Paham REST API", "Familiar dengan Git"],
  },
];

export const mitra = [
  "Nusantara Digital",
  "Bank Sentosa Mandiri",
  "Kreasi Studio",
  "Cipta Karya Retail",
  "Baja Perkasa",
  "Sinergi Cloud",
  "Adiwangsa Logistik",
  "Mitra Sehat Farma",
  "Garuda Telekom",
  "Samudra Energi",
];

export const testimoni = [
  {
    nama: "Rani Puspitasari",
    prodi: "Sistem Informasi 2021",
    perusahaan: "PT Nusantara Digital",
    kutipan:
      "Dulu saya bingung cari magang ke mana. Lewat portal kampus ini saya hanya perlu satu kali daftar, dan dua minggu kemudian sudah wawancara.",
  },
  {
    nama: "Bagas Ardiansyah",
    prodi: "Teknik Industri 2020",
    perusahaan: "PT Baja Perkasa Industri",
    kutipan:
      "Slot magangnya jelas: kuota, durasi, sampai lokasi. Setelah magang saya langsung ditawari kontrak kerja penuh waktu.",
  },
  {
    nama: "Nadia Kusuma",
    prodi: "Desain Komunikasi Visual 2021",
    perusahaan: "Kreasi Studio",
    kutipan:
      "Portofolio saya berkembang pesat selama tiga bulan magang. Prosesnya transparan dan dibimbing langsung oleh dosen pembimbing kampus.",
  },
];
