# KAMPUS MAGANG HUB — Complete Design & Implementation Specification

> **Purpose:** This document is a complete blueprint for recreating the visual design and interaction model of the supplied Kampus Magang Hub website as a production-ready web application.
>
> The specification is based on the provided screen recording and observed UI states. It describes the design system, page structure, components, interactions, responsive behavior, content model, and implementation guidance.
>
> **Important:** Treat the supplied website as a design reference. Use original assets/content where appropriate and do not copy proprietary branding, images, or code without permission.

---

## 1. Product Overview

### Product name

**KAMPUSMAGANG**

Subtitle:

**PUSAT KARIER & KEMITRAAN**

### Product purpose

KampusMagang is a career and internship platform connecting:

- university students,
- internship opportunities,
- educational institutions,
- and industry partners.

The landing page should communicate three core ideas:

1. **Career readiness** — students should discover relevant internship opportunities.
2. **AI-assisted discovery** — students can describe interests and skills to receive relevant recommendations.
3. **Industry network** — partner companies provide real-world learning opportunities.

### Primary audiences

#### Student

Needs:

- discover internship opportunities,
- search by position/company,
- filter opportunities,
- understand internship details,
- submit an application,
- receive AI-based recommendations.

#### Industry partner

Needs:

- understand the platform,
- become a partner,
- publish internship opportunities,
- access student talent.

#### University / career center

Potential future audience:

- connect students with opportunities,
- monitor participation,
- facilitate career readiness.

---

# 2. Visual Direction

The supplied design uses a clean editorial / institutional technology aesthetic.

The visual personality is:

- modern,
- academic,
- trustworthy,
- structured,
- spacious,
- professional,
- human,
- slightly editorial,
- technology-enabled.

It should **not** look like:

- a generic job board,
- a colorful startup dashboard,
- a conventional university portal,
- a dense SaaS admin interface.

The key design principle is:

> **Large typography + generous whitespace + thin borders + cyan accent + editorial information architecture.**

---

# 3. Core Design Tokens

## 3.1 Color palette

Primary background:

```css
--color-white: #ffffff;
--color-background: #ffffff;
```

Very light blue section background:

```css
--color-section: #f1fbfc;
```

Primary dark text:

```css
--color-ink: #09242b;
```

Secondary text:

```css
--color-muted: #61747a;
```

Border:

```css
--color-border: #d8e0e2;
```

Soft border:

```css
--color-border-soft: #e9eeee;
```

Primary cyan:

```css
--color-primary: #25b1ba;
```

Primary cyan hover:

```css
--color-primary-hover: #1d9fa7;
```

Very light cyan:

```css
--color-primary-soft: #e8f8f9;
```

Dark overlay:

```css
--color-overlay: rgba(6, 22, 28, 0.70);
```

### Visual rule

Use cyan sparingly.

Cyan should primarily identify:

- primary buttons,
- important labels,
- active states,
- icons,
- selected UI,
- information highlights.

Do not make the entire page cyan.

---

# 4. Typography

The visual style uses a geometric / modern sans-serif appearance.

Recommended font:

```text
Inter
```

Alternative:

```text
Plus Jakarta Sans
```

For an even closer visual character, use a modern geometric sans-serif with:

- strong bold weights,
- rounded forms,
- compact headings.

### Font weights

```text
400 — body
500 — labels
600 — UI
700 — headings
```

### Body

```css
font-size: 16px;
line-height: 1.7;
```

### Small labels

Use uppercase / technical labels.

Example:

```text
02 // REKOMENDASI AI
```

Recommended:

```css
font-size: 12px;
letter-spacing: 0.04em;
text-transform: uppercase;
```

### Hero / section headings

Use large responsive typography.

```css
font-size: clamp(3.2rem, 6.2vw, 6.8rem);
line-height: 0.98;
letter-spacing: -0.055em;
font-weight: 700;
```

The heading should feel large without becoming decorative.

---

# 5. Layout System

Use a maximum content width.

```css
--container: 1400px;
```

Recommended container:

```css
.container {
  width: min(100% - 48px, 1400px);
  margin-inline: auto;
}
```

Desktop:

```text
max-width: 1400px
padding: 24px
```

Tablet:

```text
padding: 32px
```

Mobile:

```text
padding: 20px
```

---

# 6. Spacing System

Use an 8px base rhythm.

```text
4
8
12
16
24
32
40
48
64
80
96
120
160
```

Large section spacing:

```text
120px–180px
```

Mobile section spacing:

```text
72px–100px
```

Avoid tightly stacking sections.

The supplied design relies heavily on whitespace.

---

# 7. Border System

Use thin borders.

Primary:

```css
border: 1px solid #d8e0e2;
```

Subtle:

```css
border: 1px solid #e9eeee;
```

Avoid heavy shadows.

Preferred card treatment:

```css
background: #fff;
border: 1px solid #d8e0e2;
box-shadow: none;
```

If a shadow is required for modal/dialog:

```css
box-shadow: 0 24px 70px rgba(5, 25, 32, 0.14);
```

---

# 8. Border Radius

Use restrained rounding.

Inputs:

```text
4px–6px
```

Cards:

```text
4px–8px
```

Buttons:

```text
4px–6px
```

Images:

```text
6px–8px
```

The overall interface should feel structured rather than overly rounded.

---

# 9. Global Navigation

## Desktop structure

```text
┌──────────────────────────────────────────────────────────────┐
│ [ICON] KAMPUSMAGANG                  01 Profil Kampus         │
│        PUSAT KARIER & KEMITRAAN       02 Rekomendasi AI       │
│                                        03 Slot Magang          │
│                                        04 Mitra      [JADI MITRA →]
└──────────────────────────────────────────────────────────────┘
```

### Logo block

Left:

- cyan square icon,
- graduation-cap icon,
- brand name,
- subtitle.

Example:

```text
[🎓]  KAMPUSMAGANG
      PUSAT KARIER & KEMITRAAN
```

### Brand typography

Brand:

```text
KAMPUSMAGANG
```

Use:

```text
font-weight: 700;
letter-spacing: 0.02em;
```

Subtitle:

```text
PUSAT KARIER & KEMITRAAN
```

Small uppercase.

---

# 10. Navbar Behavior

Desktop:

- sticky,
- white background,
- subtle bottom border,
- height around 72px,
- content aligned to max-width container.

When scrolling:

- retain white background,
- optionally add a very subtle shadow/border emphasis.

Navigation links:

```text
01 Profil Kampus
02 Rekomendasi AI
03 Slot Magang
04 Mitra
```

Use anchor navigation.

Example:

```html
<a href="#profil">01 Profil Kampus</a>
```

Active navigation may use darker text or a small cyan indicator.

---

# 11. Primary Navbar CTA

Text:

```text
JADI MITRA →
```

Style:

```css
background: var(--color-primary);
color: var(--color-ink);
```

Button dimensions:

```text
height: ~40px
padding-inline: 20px
```

Arrow should move slightly right on hover.

---

# 12. Mobile Navigation

On mobile:

```text
[ICON] KAMPUSMAGANG                         [MENU]
```

Use a compact menu button.

Menu opens as:

- full-screen overlay, or
- full-width dropdown.

Navigation items become large.

Example:

```text
01
Profil Kampus

02
Rekomendasi AI

03
Slot Magang

04
Mitra

[JADI MITRA →]
```

Requirements:

- keyboard accessible,
- Escape closes menu,
- body scroll locked while open,
- visible focus states.

---

# 13. Hero / Landing Section

The top hero should communicate the value proposition immediately.

Recommended copy structure:

```text
PROGRAM MAGANG YANG
MEMBENTUK TALENTA,
BUKAN SEKADAR SIAP
MELAMAR.
```

The supplied design uses a large headline with supporting explanatory text and imagery.

### Hero layout

Desktop:

```text
┌───────────────────────────────┬──────────────────────────────┐
│                               │                              │
│ Large headline               │ Supporting copy / visual     │
│                               │                              │
│ Supporting paragraph          │                              │
│                               │                              │
│ [CTA]                         │                              │
└───────────────────────────────┴──────────────────────────────┘
```

Use a strong asymmetric layout.

---

# 14. Hero Image Composition

The supplied design uses real-world student / workplace imagery.

Use images showing:

- students collaborating,
- university students,
- internship environments,
- mentors,
- professional workplaces.

Avoid:

- generic corporate stock photos,
- overly staged handshakes,
- unrelated office imagery.

### Hero image treatment

Use:

```css
border-radius: 6px;
overflow: hidden;
```

Optional dark/cyan overlay.

---

# 15. Hero Supporting Blocks

The visual system uses a large image plus supporting information cards.

Example:

```text
┌──────────────────────────┐
│ VISI PROGRAM             │
│                          │
│ Menjadi penghubung       │
│ terpercaya antara        │
│ talenta kampus dan       │
│ pertumbuhan industri     │
│ Indonesia.               │
└──────────────────────────┘
```

Background:

```text
light cyan
```

This block should feel like an editorial callout rather than a generic card.

---

# 16. Image Grid Section

Recommended layout:

```text
┌──────────────────────────┬───────────────────────┐
│                          │ Visi program          │
│ Large student image      │ Text                  │
│                          ├───────────────────────┤
│ Caption overlay          │ Secondary image       │
└──────────────────────────┴───────────────────────┘
```

Large image approximately 60%.

Right column approximately 40%.

On mobile:

```text
Large image
Vision card
Secondary image
```

---

# 17. Statistics / Trust Section

After the introductory area, use a structured statistics strip.

Example:

```text
01
06+
POSISI AKTIF

02
12+
MITRA INDUSTRI

03
100+
PELUANG BELAJAR
```

Do not invent values.

Use placeholders if real numbers are unavailable.

Layout:

```text
┌──────────────┬──────────────┬──────────────┐
│ statistic 01 │ statistic 02 │ statistic 03 │
└──────────────┴──────────────┴──────────────┘
```

Use thin borders between columns.

---

# 18. AI Recommendation Section

Section label:

```text
02 // REKOMENDASI AI
```

Headline:

```text
Temukan peluang
yang paling cocok
untukmu.
```

Supporting copy:

```text
Ceritakan arah karier dan kemampuanmu.
AI akan membandingkannya dengan slot aktif,
lalu menjelaskan alasan kecocokannya.
```

---

# 19. AI Recommendation Layout

Desktop:

```text
┌─────────────────────────┬──────────────────────────────┐
│                         │                              │
│ Large headline          │ Recommendation form         │
│                         │                              │
│ Description             │                              │
│                         │                              │
│ Privacy note             │                              │
└─────────────────────────┴──────────────────────────────┘
```

Background:

```text
#f1fbfc
```

---

# 20. AI Recommendation Form

Fields:

### Interest

Label:

```text
Minat bidang atau posisi
```

Textarea placeholder:

```text
Contoh: pengembangan web, analisis data, desain produk
```

### Skills / experience

Label:

```text
Keahlian dan pengalaman
```

Placeholder:

```text
Contoh: React dasar, Figma, Excel, organisasi kampus
```

### Work type

Select:

```text
Tipe kerja
```

Options:

```text
Bebas
WFO
WFH
Hybrid
```

### Location

Label:

```text
Preferensi lokasi
```

Placeholder:

```text
Contoh: Jakarta atau Remote
```

---

# 21. AI Recommendation CTA

Button:

```text
[AI ICON] Buat rekomendasi →
```

Full width.

Color:

```text
cyan
```

Height:

```text
48–54px
```

Loading state:

```text
Menganalisis kecocokan...
```

Do not freeze the interface.

---

# 22. AI Privacy Notice

Small informational block:

```text
✧
Isian digunakan hanya untuk membuat
rekomendasi saat ini dan tidak disimpan.
```

Use:

- light background,
- left cyan border,
- small icon.

The exact privacy statement must match the actual data-handling behavior of the application.

Never claim that data is not stored if it actually is.

---

# 23. AI Recommendation Results

After submission, display a recommendation list.

Example:

```text
REKOMENDASI UNTUKMU

01
Frontend Developer Intern
PT Nusantara Digital

Kecocokan
92%

Alasan:
Pengalaman React dan minat web development
selaras dengan kebutuhan posisi ini.

[LIHAT DETAIL →]
```

Each recommendation should show:

- opportunity,
- company,
- match score,
- explanation,
- relevant skills,
- location,
- work type.

Avoid presenting an AI score as objective truth. Label it as an estimated match.

---

# 24. Internship Opportunities Section

Section label:

```text
03 // SLOT MAGANG
```

Headline:

```text
Temukan pengalaman yang
selaras dengan bidangmu.
```

Right-side status:

```text
● 06 POSISI AKTIF
```

The number must be dynamically calculated.

---

# 25. Internship Search Bar

Desktop:

```text
┌────────────────────────────┬───────────────────┬──────────────────┐
│ 🔍 Cari posisi/perusahaan  │ Semua Bidang      │ Semua Tipe       │
└────────────────────────────┴───────────────────┴──────────────────┘
```

Search should filter:

- title,
- company,
- optionally category.

---

# 26. Opportunity Filters

### Search

Placeholder:

```text
Cari posisi atau perusahaan
```

### Category

Default:

```text
Semua Bidang
```

Examples:

```text
Teknologi
Keuangan
Marketing
Desain
Operasional
Data
```

### Work type

Default:

```text
Semua Tipe
```

Options:

```text
WFO
WFH
Hybrid
```

---

# 27. Opportunity Card Grid

Desktop:

```text
3 columns
```

Tablet:

```text
2 columns
```

Mobile:

```text
1 column
```

Each card is bordered and spacious.

---

# 28. Opportunity Card

Structure:

```text
OPPORTUNITY / 01                         HYBRID

[TEKNOLOGI INFORMASI]

Frontend Developer Intern

PT Nusantara Digital

────────────────────────────────────────

KUOTA                  DURASI
5 MAHASISWA            6 BULAN

LOKASI
JAKARTA SELATAN

────────────────────────────────────────

Detail & Daftar                         →
```

---

# 29. Opportunity Card Details

Required fields:

```text
number
workType
category
title
company
quota
duration
location
description
requirements
```

Optional:

```text
deadline
stipend
skills
logo
applicationUrl
```

Do not display empty fields.

---

# 30. Opportunity Card Interaction

Hover:

- subtle background shift,
- border becomes darker,
- arrow translates right.

Do not animate the entire card dramatically.

Clicking:

```text
Detail & Daftar
```

opens the opportunity detail / application dialog.

---

# 31. Opportunity Detail Modal

The supplied UI uses a large centered modal with a dimmed backdrop.

Structure:

```text
┌──────────────────────────────────────────────┐
│ APPLICATION / 02                         ×   │
│                                              │
│ Data Analyst Intern                          │
│ Bank Sentosa Mandiri                         │
│                                              │
│ ──────────────────────────────────────────── │
│                                              │
│ [KUOTA] [DURASI] [LOKASI] [TIPE]             │
│                                              │
│ Description                                  │
│                                              │
│ PERSYARATAN                                  │
│ — Menguasai SQL & Excel                      │
│ — Familiar dengan Python/R                   │
│ — Teliti dan analitis                        │
│                                              │
│ [Nama lengkap]       [NIM]                   │
│ [Email kampus]                               │
│                                              │
│ [Kirim Pendaftaran →]                        │
└──────────────────────────────────────────────┘
```

---

# 32. Modal Behavior

Backdrop:

```css
background: rgba(7, 21, 28, 0.70);
backdrop-filter: blur(5px);
```

Modal:

```text
max-width: 760–900px
max-height: 90vh
overflow-y: auto
```

Close options:

- X button,
- Escape,
- backdrop click.

Do not close when clicking inside the dialog.

---

# 33. Modal Metadata Grid

Four columns desktop:

```text
KUOTA
3 mahasiswa

DURASI
4 bulan

LOKASI
Surabaya

TIPE
WFO
```

On mobile:

```text
2 × 2 grid
```

Each metadata cell has a border.

Use icons:

- Users
- Calendar
- MapPin
- Briefcase

Use Lucide icons.

---

# 34. Requirements List

Label:

```text
PERSYARATAN
```

Use simple horizontal list markers:

```text
— Menguasai SQL & Excel
— Familiar dengan Python/R
— Teliti dan analitis
```

Do not use large bullet icons.

---

# 35. Application Form

Fields:

```text
Nama lengkap
NIM
Email kampus
```

Optional:

```text
No. WhatsApp
Universitas
CV / portfolio URL
Motivation
```

The supplied visual currently emphasizes a compact form.

Keep the default form compact.

---

# 36. Submit Application Button

Text:

```text
Kirim Pendaftaran →
```

Full width.

States:

```text
Default
Submitting...
Success
Error
```

Success:

```text
Pendaftaran berhasil dikirim.
```

Error:

```text
Pendaftaran gagal. Silakan coba lagi.
```

Do not claim success before the backend confirms it.

---

# 37. Industry Partner Section

Section label:

```text
03 // MITRA INDUSTRI
```

Headline:

```text
Jejaring mitra yang membuka
ruang belajar nyata.
```

Supporting copy:

```text
Jaringan perusahaan yang telah menandatangani
kerja sama resmi untuk pengembangan talenta mahasiswa.
```

Background:

```text
light cyan
```

---

# 38. Partner Logo / Name Strip

Create a horizontal partner list.

Example:

```text
[BS] Bank Sentosa Mandiri
[KS] Kreasi Studio
[CK] Cipta Karya Retail
[BP] Baja Perkasa
[SC] Sinergi Cloud
[AL] Adiwangsa Logistik
```

Use actual partner data in production.

Do not fabricate partnerships.

---

# 39. Partner Strip Behavior

Desktop:

- horizontal row,
- bordered cells,
- equal-height cells.

Mobile:

Option A:

- horizontally scrollable.

Option B:

- 2-column grid.

If there are many partners, horizontal scroll is preferable.

---

# 40. Alumni Testimonials

Section label:

```text
04 // TESTIMONI ALUMNI
```

Headline:

```text
Pengalaman magang yang
membawa teori ke dunia nyata.
```

Testimonial layout:

```text
┌────────────────────────────────────────────┐
│                                            │
│ “Quote testimonial...”                     │
│                                            │
│ NAMA                                       │
│ Posisi / Universitas                      │
│                                            │
└────────────────────────────────────────────┘
```

Use real testimonials only.

---

# 41. Testimonial Card

Recommended data:

```ts
{
  quote: string;
  name: string;
  role: string;
  university?: string;
  company?: string;
  image?: string;
}
```

Do not invent testimonials.

If none exist, hide the section rather than filling it with fake content.

---

# 42. Footer / Closing CTA

The supplied visual language should finish with a strong but clean closing section.

Example:

```text
SIAP MEMULAI
LANGKAH BERIKUTNYA?

Temukan pengalaman yang
membantu kariermu berkembang.

[CARI SLOT MAGANG →]
```

For companies:

```text
Punya peluang untuk mahasiswa?

[JADI MITRA →]
```

---

# 43. Footer

Structure:

```text
KAMPUSMAGANG
PUSAT KARIER & KEMITRAAN

Untuk Mahasiswa
Slot Magang
Rekomendasi AI

Untuk Mitra
Jadi Mitra
Tentang Program

Kontak
Email
Instagram
LinkedIn

© 2026 KampusMagang
```

Keep the footer clean.

---

# 44. Page Sections Summary

Homepage order:

```text
01 Navbar

02 Hero / Intro

03 Program Vision / Image Grid

04 Statistics / Trust

05 AI Recommendation

06 Internship Opportunities

07 Industry Partners

08 Alumni Testimonials

09 CTA

10 Footer
```

---

# 45. Data Architecture

The UI should be data-driven.

Recommended structure:

```text
src/
├── data/
│   ├── opportunities.ts
│   ├── partners.ts
│   ├── testimonials.ts
│   └── statistics.ts
```

---

# 46. Opportunity Data Model

```ts
export type Opportunity = {
  id: string;
  number: string;
  title: string;
  company: string;
  category: string;
  workType: "WFO" | "WFH" | "Hybrid";
  quota: number;
  duration: string;
  location: string;
  description: string;
  requirements: string[];
  skills?: string[];
  deadline?: string;
  isActive: boolean;
};
```

---

# 47. Partner Data Model

```ts
export type Partner = {
  id: string;
  name: string;
  initials: string;
  logo?: string;
  website?: string;
};
```

---

# 48. Recommendation Data Model

```ts
export type Recommendation = {
  opportunityId: string;
  matchScore: number;
  reasons: string[];
  matchedSkills: string[];
};
```

Important:

The score is an estimate generated by the recommendation system.

Do not present it as a guaranteed probability of success.

---

# 49. Application Data Model

```ts
export type Application = {
  opportunityId: string;
  fullName: string;
  studentId: string;
  campusEmail: string;
  university?: string;
  phone?: string;
  portfolioUrl?: string;
  createdAt: string;
};
```

---

# 50. Recommended Tech Stack

Use:

```text
Next.js
React
TypeScript
Tailwind CSS
Lucide React
Framer Motion
```

Backend options:

```text
Supabase
```

Recommended Supabase responsibilities:

- opportunities,
- partners,
- applications,
- testimonials,
- analytics,
- optional authentication.

---

# 51. Suggested Database Schema

## opportunities

```text
id
title
company
category
work_type
quota
duration
location
description
requirements
skills
deadline
is_active
created_at
updated_at
```

## partners

```text
id
name
initials
logo_url
website
is_active
created_at
```

## applications

```text
id
opportunity_id
full_name
student_id
campus_email
university
phone
portfolio_url
created_at
```

## testimonials

```text
id
name
role
university
company
quote
image_url
is_published
created_at
```

---

# 52. Search / Filtering Logic

Search should be client-side for small datasets.

Search fields:

```text
title
company
category
location
```

Pseudo logic:

```ts
const filtered = opportunities.filter((item) => {
  const matchesSearch =
    item.title.toLowerCase().includes(query) ||
    item.company.toLowerCase().includes(query) ||
    item.location.toLowerCase().includes(query);

  const matchesCategory =
    category === "all" ||
    item.category === category;

  const matchesType =
    workType === "all" ||
    item.workType === workType;

  return matchesSearch && matchesCategory && matchesType;
});
```

For large datasets, move filtering to the backend.

---

# 53. Empty State

If no internship matches:

```text
TIDAK ADA PELUANG YANG COCOK

Coba ubah kata pencarian
atau filter yang kamu gunakan.
```

CTA:

```text
RESET FILTER →
```

Do not show an empty page.

---

# 54. Loading State

Use lightweight skeletons.

Opportunity skeleton:

```text
┌───────────────────────┐
│ ░░░░░░░░      ░░░░    │
│                       │
│ ░░░░░░░░░░░░░░░░      │
│                       │
│ ░░░░░░░               │
│                       │
│ ░░░░    ░░░░          │
└───────────────────────┘
```

Avoid excessive shimmer.

---

# 55. Error State

Example:

```text
TERJADI KESALAHAN

Data peluang magang tidak dapat
dimuat saat ini.

[COBA LAGI →]
```

Keep the error calm and informative.

---

# 56. Animation System

Animations should be subtle.

Use:

```text
opacity
translateY
translateX
scale
```

Avoid:

```text
bounce
spin
large rotations
constant floating
```

### Section reveal

```text
from:
opacity: 0
transform: translateY(24px)

to:
opacity: 1
transform: translateY(0)
```

Duration:

```text
500–700ms
```

---

# 57. Hero Animation

Animate headline line-by-line.

Example:

```text
PROGRAM MAGANG YANG
→
MEMBENTUK TALENTA,
→
BUKAN SEKADAR SIAP
→
MELAMAR.
```

Stagger:

```text
80–120ms
```

---

# 58. Opportunity Animation

When filters change:

- update results immediately,
- optionally fade the result grid,
- do not animate every card excessively.

Card hover:

```text
translateY(-2px)
```

or:

```text
background-color: #f8fbfb
```

---

# 59. Modal Animation

Open:

```text
backdrop opacity 0 → 1
modal opacity 0 → 1
modal scale 0.98 → 1
```

Close reverses the animation.

Duration:

```text
180–250ms
```

Respect reduced motion.

---

# 60. Responsive Design

## Desktop ≥ 1200px

- full navigation,
- 2-column hero,
- 3-column opportunities,
- 4-column metadata,
- large typography.

## Tablet 768–1199px

- slightly smaller typography,
- 2-column opportunities,
- 2-column metadata,
- hero remains two-column where possible.

## Mobile < 768px

- mobile navigation,
- one-column hero,
- one-column opportunities,
- one-column content,
- metadata becomes 2×2,
- modal becomes nearly full-screen,
- partner strip becomes horizontal scroll.

---

# 61. Mobile Hero

Recommended:

```text
PROGRAM MAGANG YANG
MEMBENTUK TALENTA,
BUKAN SEKADAR SIAP
MELAMAR.
```

Then:

```text
Supporting copy
```

Then:

```text
Primary CTA
```

Then:

```text
Image
```

Do not force the desktop image grid on small screens.

---

# 62. Mobile Opportunity Cards

Card:

```text
OPPORTUNITY / 01
HYBRID

[TEKNOLOGI INFORMASI]

Frontend Developer Intern
PT Nusantara Digital

KUOTA
5 mahasiswa

DURASI
6 bulan

LOKASI
Jakarta Selatan

Detail & Daftar →
```

Make the entire card clickable if appropriate.

---

# 63. Mobile Modal

On mobile:

```text
width: 100%;
height: 100%;
border-radius: 0;
```

or:

```text
width: calc(100% - 24px);
max-height: calc(100vh - 24px);
```

The application form must remain usable with the mobile keyboard.

---

# 64. Accessibility

Requirements:

- semantic HTML,
- keyboard navigation,
- visible focus,
- `aria-label` for icon-only buttons,
- dialog semantics,
- focus trap in modal,
- Escape to close,
- screen-reader labels,
- sufficient color contrast,
- reduced motion.

Modal:

```html
role="dialog"
aria-modal="true"
aria-labelledby="dialog-title"
```

---

# 65. Forms Accessibility

Every input must have a proper `<label>`.

Do not rely only on placeholder text.

Example:

```html
<label for="fullName">Nama lengkap</label>
<input id="fullName" />
```

Error:

```text
Email kampus wajib diisi.
```

Use `aria-describedby` for validation messages.

---

# 66. SEO

Homepage title:

```text
KampusMagang — Pusat Karier & Kemitraan
```

Description:

```text
Temukan peluang magang yang relevan dengan bidangmu
dan terhubung dengan mitra industri untuk pengalaman
belajar nyata.
```

Use:

- Open Graph,
- canonical URL,
- sitemap,
- robots,
- semantic headings.

---

# 67. Performance

Target:

```text
Performance: 90+
Accessibility: 95+
Best Practices: 95+
SEO: 95+
```

Requirements:

- Next/Image,
- WebP/AVIF,
- lazy-loading,
- compressed images,
- minimal JS,
- server components where possible,
- avoid unnecessary animation libraries,
- avoid large video backgrounds.

---

# 68. Image Requirements

Images should be:

- compressed,
- responsive,
- appropriate aspect ratio,
- descriptive alt text.

Hero images:

```text
16:10
```

Opportunity images, if later introduced:

```text
4:3
```

Do not ship 5MB+ images.

---

# 69. Recommended Component Tree

```text
App
│
├── Navbar
│
├── HeroSection
│
├── ProgramOverview
│   ├── ImageFeature
│   ├── VisionCard
│   └── SecondaryImage
│
├── StatisticsSection
│
├── AIRecommendation
│   ├── RecommendationIntro
│   ├── RecommendationForm
│   └── RecommendationResults
│
├── OpportunitiesSection
│   ├── SectionHeader
│   ├── OpportunityFilters
│   ├── OpportunityGrid
│   │   └── OpportunityCard
│   └── OpportunityDialog
│
├── PartnersSection
│   └── PartnerStrip
│
├── TestimonialsSection
│   └── TestimonialCard
│
├── FinalCTA
│
└── Footer
```

---

# 70. Suggested Folder Structure

```text
src/
├── app/
│   ├── layout.tsx
│   ├── page.tsx
│   ├── globals.css
│   ├── robots.ts
│   └── sitemap.ts
│
├── components/
│   ├── layout/
│   │   ├── Navbar.tsx
│   │   └── Footer.tsx
│   │
│   ├── hero/
│   │   └── HeroSection.tsx
│   │
│   ├── overview/
│   │   ├── ProgramOverview.tsx
│   │   ├── VisionCard.tsx
│   │   └── StatisticsSection.tsx
│   │
│   ├── recommendation/
│   │   ├── AIRecommendation.tsx
│   │   ├── RecommendationForm.tsx
│   │   └── RecommendationResults.tsx
│   │
│   ├── opportunities/
│   │   ├── OpportunitiesSection.tsx
│   │   ├── OpportunityFilters.tsx
│   │   ├── OpportunityCard.tsx
│   │   └── OpportunityDialog.tsx
│   │
│   ├── partners/
│   │   └── PartnersSection.tsx
│   │
│   ├── testimonials/
│   │   └── TestimonialsSection.tsx
│   │
│   ├── cta/
│   │   └── FinalCTA.tsx
│   │
│   └── ui/
│       ├── Button.tsx
│       ├── Input.tsx
│       ├── Select.tsx
│       ├── Textarea.tsx
│       ├── SectionLabel.tsx
│       └── Modal.tsx
│
├── data/
│   ├── opportunities.ts
│   ├── partners.ts
│   ├── testimonials.ts
│   └── statistics.ts
│
├── lib/
│   ├── utils.ts
│   ├── recommendation.ts
│   └── validations.ts
│
└── types/
    └── index.ts
│
public/
├── images/
├── partners/
└── icons/
```

---

# 71. Design Rules for AI Coding Agent

The coding agent must follow these rules.

### Rule 1

Do not create generic rounded SaaS cards.

### Rule 2

Do not use gradients as the primary visual language.

### Rule 3

Do not use random icons.

Use Lucide or a consistent icon set.

### Rule 4

Do not overuse cyan.

### Rule 5

Do not make every section centered.

Use editorial left/right compositions.

### Rule 6

Do not use excessive shadows.

### Rule 7

Do not make every component animated.

### Rule 8

Do not invent data.

### Rule 9

Do not use fake testimonials.

### Rule 10

Do not hardcode opportunity cards inside JSX.

Use data arrays / database.

---

# 72. Content Tone

Indonesian copy should feel:

- direct,
- optimistic,
- professional,
- student-friendly,
- credible.

Avoid corporate jargon.

Prefer:

```text
Temukan pengalaman yang selaras dengan bidangmu.
```

over:

```text
Unlock your career potential through our ecosystem.
```

---

# 73. Button Copy

Preferred:

```text
JADI MITRA →
LIHAT DETAIL →
DETAIL & DAFTAR →
BUAT REKOMENDASI →
KIRIM PENDAFTARAN →
CARI SLOT MAGANG →
COBA LAGI →
RESET FILTER →
```

Avoid:

```text
CLICK HERE
SUBMIT
LEARN MORE
```

unless context requires English.

---

# 74. Interaction State Matrix

## Navbar

```text
default
scrolled
mobile-open
mobile-closed
```

## Opportunity

```text
default
hover
filtered
loading
empty
error
```

## Modal

```text
closed
opening
open
submitting
success
error
closing
```

## AI recommendation

```text
idle
typing
submitting
loading
results
empty
error
```

---

# 75. Security / Data Rules

Because the platform accepts student information:

- validate all form inputs,
- sanitize user-controlled content,
- never expose secret API keys in frontend code,
- use server-side validation,
- protect admin endpoints,
- use Row Level Security if using Supabase,
- avoid exposing unnecessary student data,
- do not log sensitive application data in production.

---

# 76. Supabase Security

If Supabase is used:

### Public users can

```text
read active opportunities
read active partners
read published testimonials
```

### Public users can create

```text
applications
```

only with validated fields.

### Admins can

```text
create/update/delete opportunities
manage partners
review applications
manage testimonials
```

Use Supabase Auth + Row Level Security for administrative operations.

---

# 77. AI Recommendation Architecture

Do not place a secret AI API key in the browser.

Architecture:

```text
Browser
   ↓
Next.js API Route / Server Action
   ↓
Recommendation Service
   ↓
Opportunity Dataset
   ↓
AI / Matching Logic
   ↓
Recommendation Results
   ↓
Browser
```

For a first version, deterministic matching can be used.

Example:

```text
interest keywords
+
skills
+
work type
+
location
+
opportunity requirements
```

Then calculate a transparent match score.

---

# 78. Recommendation Explanation

Each recommendation should explain:

```text
Mengapa cocok?

• React termasuk dalam keahlian yang kamu masukkan.
• Posisi membutuhkan frontend development.
• Lokasi sesuai dengan preferensimu.
```

This is better than only showing:

```text
92% cocok
```

---

# 79. Application Flow

```text
Student
  ↓
Search opportunities
  ↓
Open detail
  ↓
Read requirements
  ↓
Click "Detail & Daftar"
  ↓
Fill application
  ↓
Validate
  ↓
Submit
  ↓
Server validation
  ↓
Save application
  ↓
Success confirmation
```

---

# 80. Recommended Validation

Full name:

```text
required
min 2 characters
```

NIM:

```text
required
```

Campus email:

```text
required
valid email format
```

Portfolio:

```text
optional
valid URL
```

Never expose raw backend errors to users.

---

# 81. Final Acceptance Checklist

## Visual

- [ ] White + cyan + dark teal palette.
- [ ] Large editorial headings.
- [ ] Thin borders.
- [ ] Minimal shadows.
- [ ] Generous whitespace.
- [ ] Clean image compositions.
- [ ] Professional student-focused imagery.
- [ ] Cyan used as accent.

## Navbar

- [ ] Brand visible.
- [ ] Subtitle visible.
- [ ] Four navigation items.
- [ ] JADI MITRA CTA.
- [ ] Mobile menu.

## Hero

- [ ] Large statement.
- [ ] Supporting copy.
- [ ] Image composition.
- [ ] Vision card.

## AI

- [ ] Interest field.
- [ ] Skills field.
- [ ] Work type.
- [ ] Location.
- [ ] CTA.
- [ ] Privacy notice.
- [ ] Loading state.
- [ ] Recommendation results.

## Opportunities

- [ ] Search.
- [ ] Category filter.
- [ ] Work-type filter.
- [ ] Active position count.
- [ ] Opportunity grid.
- [ ] Detail dialog.
- [ ] Application form.

## Partners

- [ ] Partner names/logos.
- [ ] Horizontal layout.
- [ ] Responsive behavior.

## Testimonials

- [ ] Real testimonials only.
- [ ] Name.
- [ ] Role / university.
- [ ] Quote.

## Quality

- [ ] Mobile responsive.
- [ ] Tablet responsive.
- [ ] Desktop responsive.
- [ ] Keyboard accessible.
- [ ] Reduced motion.
- [ ] SEO.
- [ ] Lighthouse tested.
- [ ] No console errors.
- [ ] No TypeScript errors.
- [ ] No fake data in production.

---

# 82. Recommended Implementation Order

### Phase 1

Build:

```text
Design tokens
Typography
Container
Navbar
Button
Input
Select
Textarea
```

### Phase 2

Build:

```text
Hero
Program overview
Vision card
Statistics
```

### Phase 3

Build:

```text
AI Recommendation
Recommendation form
Recommendation results
```

### Phase 4

Build:

```text
Opportunity filters
Opportunity cards
Opportunity modal
Application form
```

### Phase 5

Build:

```text
Partners
Testimonials
CTA
Footer
```

### Phase 6

Add:

```text
Animations
Responsive behavior
Accessibility
SEO
Performance optimization
```

---

# 83. Final Agent Prompt

Use this section as the direct instruction for an AI coding agent.

```text
You are a senior product designer and frontend engineer.

Build the KampusMagang website according to this specification.

First inspect the existing repository and identify:
- framework,
- package manager,
- existing components,
- styling system,
- routes,
- assets,
- backend integration.

Do not unnecessarily rewrite existing working infrastructure.

The visual direction must match this specification:
- white editorial interface,
- dark teal typography,
- cyan accent,
- thin borders,
- large geometric typography,
- generous whitespace,
- structured information hierarchy,
- premium institutional technology aesthetic.

Implement the homepage from top to bottom:

1. Navbar
2. Hero
3. Program overview / image composition
4. Statistics
5. AI recommendation
6. Internship opportunities
7. Industry partners
8. Alumni testimonials
9. Final CTA
10. Footer

Then implement:
- opportunity filtering,
- opportunity detail modal,
- application form,
- form validation,
- loading/error/success states,
- responsive navigation,
- responsive layouts.

Use reusable components.

Use data-driven rendering for:
- opportunities,
- partners,
- testimonials,
- statistics.

Do not hardcode repeated opportunity cards.

Do not invent real companies, testimonials, statistics, or partnerships.

Use placeholders where real content is unavailable.

Use TypeScript.

Use semantic HTML.

Use accessible forms.

Use Framer Motion only for meaningful motion.

Use Lucide icons consistently.

If Supabase is already configured, integrate with it.
If it is not configured, create a clean service layer that can be connected later.

For AI recommendations:
- never expose secret API keys in the browser,
- use a server-side endpoint or server action,
- return explanations alongside match scores.

After implementation:

1. Run lint.
2. Run type checking.
3. Run production build.
4. Fix all errors.
5. Test mobile.
6. Test desktop.
7. Test keyboard navigation.
8. Test modal behavior.
9. Test form validation.
10. Check for console errors.

The final website should feel like a polished career platform, not a generic template.

Prioritize:
typography
+
spacing
+
hierarchy
+
content
+
usability
+
performance.

Do not add unnecessary visual effects.
```

---

# 84. Definition of Done

The website is considered complete when a user can:

```text
Open homepage
    ↓
Understand what KampusMagang does
    ↓
Understand the value for students
    ↓
Browse internship opportunities
    ↓
Search opportunities
    ↓
Filter opportunities
    ↓
Open opportunity details
    ↓
Read requirements
    ↓
Submit application
    ↓
Use AI recommendation
    ↓
Understand industry partners
    ↓
Read authentic testimonials
    ↓
Become a partner
```

The visual experience must remain consistent across the entire flow.

---

# 85. Final Design Principle

The most important principle is:

> **Make the interface feel like a career institution redesigned for the modern web.**

It should combine:

```text
Institutional trust
        +
Editorial design
        +
Modern technology
        +
Student accessibility
        +
Real-world career opportunities
```

Do not turn the interface into a conventional job marketplace.

The visual hierarchy should always make the platform feel:

**credible, focused, spacious, modern, and useful.**
