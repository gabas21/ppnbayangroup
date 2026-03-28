# 🚀 system-v8
### *The TALL Stack TA Framework that actually slaps*

> Framework berbasis markdown buat kamu yang lagi ngerjain **Tugas Akhir** pake TALL Stack
> (Tailwind · Alpine.js · Laravel · Livewire) — dibantu AI biar gak muter-muter sendiri.

---

```
  ████████╗ █████╗ ██╗     ██╗
  ╚══██╔══╝██╔══██╗██║     ██║      v8 — leaner. smarter. no cap.
     ██║   ███████║██║     ██║
     ██║   ██╔══██║██║     ██║
     ██║   ██║  ██║███████╗███████╗
     ╚═╝   ╚═╝  ╚═╝╚══════╝╚══════╝
```

---

## ✨ Ini apaan sih?

Bayangin kamu lagi ngerjain TA, bukanya VS Code tapi malah nge-chat sama Claude/Gemini yang tiap sesi **lupa semuanya**. Nyebelin banget kan?

**system-v8 fix itu semua.**

Ini adalah sekumpulan file `.md` yang dikasih ke AI di awal sesi, supaya Claude/Gemini langsung ngerti:
- Proyek kamu itu apa
- Udah sampe mana progressnya
- Aturan coding yang harus diikutin
- Keputusan-keputusan teknis yang udah dibuat sebelumnya

Basically, **memori permanen buat AI yang pelupa.** 🧠

---

## 🆕 Apa yang baru di v8?

| | v7 | v8 |
|---|---|---|
| CLAUDE.md | v5, belum sinkron | v8 — sinkron dengan semua file ✅ |
| Command /desain | Belum ada | **Pencil.dev integration** — desain dulu, baru coding 🔥 |
| Registry Komponen | Kosong, tanpa contoh | Ada contoh format bawaan |
| Lessons.md | 7 pola error umum | **11 pola** — termasuk Livewire v3 specific |
| Progress template | Generic untuk semua proyek | **Adaptif per jenis proyek** — kasir, company-profile, portal-berita |

---

## 📁 Struktur File

```
system-v8/
│
├── 📄 CLAUDE.md          ← Otak utama sistem (baca ini duluan)
├── 📄 CONTEXT.md         ← Pintu masuk setiap sesi
├── 📄 PROJECT.md         ← Data proyek kamu (isi sekali, update tiap sesi)
├── 📄 HANDOFF.md         ← Jembatan antar AI & antar sesi
├── 📄 DESIGN-SYSTEM.md   ← Token warna, font, komponen
│
├── 📁 tasks/
│   ├── lessons.md        ← Error & solusinya (auto-update)
│   └── progress.md       ← Checklist progress per fase
│
└── 📁 .claude/commands/  ← 22 slash commands
    ├── init.md
    ├── next.md
    ├── desain.md         ← 🆕 Pencil.dev integration
    ├── tiru-design.md
    └── ... (18 lainnya)
```

---

## ⚡ Quick Start — Literally 3 Langkah

### Langkah 1 — Isi PROJECT.md
Buka `PROJECT.md`, isi bagian **IDENTITAS PROYEK**:
```
Nama Proyek   : Kasir Cafe Bunda
Jenis Web     : kasir
Target Selesai: 30 hari
Client        : cafe kecil 2 kasir
```
> ⚠️ Ini diisi **SEKALI** aja di awal. Jangan hapus-hapus.

### Langkah 2 — Lampirkan File ke Claude
```
Lampirkan: CONTEXT.md + PROJECT.md
```
> Di Claude.ai: klik ikon attachment → pilih kedua file itu

### Langkah 3 — Ketik Command Pertama
```
/init
```
Claude akan baca semua file, bikin roadmap proyek kamu, dan siap mulai coding. **That's it.**

> 💡 **Opsional:** Mau lihat desain dulu sebelum coding? Ketik `/desain [nama halaman]` — Claude akan buatkan mockup di Pencil.dev.

---

## 🔄 Alur Kerja Sehari-hari

```
HARI PERTAMA
    Isi PROJECT.md
         ↓
    Lampirkan CONTEXT.md + PROJECT.md
         ↓
    /init → Claude bikin roadmap otomatis
         ↓
    Mulai coding! 🎉


SESI BERIKUTNYA (hari ke-2, ke-3, dst)
    Lampirkan CONTEXT.md + PROJECT.md + HANDOFF.md
         ↓
    /next → Claude langsung tau harus ngapain
         ↓
    Lanjut dari titik terakhir tanpa penjelasan ulang


MINTA BANTUAN GEMINI
    /handoff → Claude isi HANDOFF.md
         ↓
    Lampirkan HANDOFF.md + DESIGN-SYSTEM.md ke Gemini
         ↓
    Gemini baca bagian "🤝 UNTUK GEMINI" di CLAUDE.md
         ↓
    Gemini langsung nyambung, gak perlu explain ulang


ADA ERROR
    Lampirkan file yang error
         ↓
    /stuck [paste errornya]
         ↓
    Claude cek lessons.md dulu → debug → catat solusi
```

---

## 📋 Semua Slash Commands

> Ketik command ini di chat Claude. Detail instruksinya ada di `.claude/commands/`

### 🎬 Sesi & Navigation
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/init` | ⭐ Setup awal proyek | Hari pertama, proyek baru |
| `/next` | Lanjut dari sesi terakhir | Awal setiap sesi baru |
| `/fase` | Lihat progress fase saat ini | Mau tau udah sampe mana |
| `/handoff` | Pindah ke Gemini | Mau minta bantuan desain ke Gemini |

### 🔨 Coding
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/new-page [nama]` | Buat halaman Blade baru | Mau mulai halaman baru |
| `/new-component [nama]` | Buat Blade/Livewire component | Bikin komponen reusable |
| `/form [deskripsi]` | Buat form + validasi lengkap | Butuh form Livewire |
| `/tambah-fitur [deskripsi]` | Impact analysis sebelum coding | Sebelum tambah fitur baru |

### 🎨 Design & UI
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/desain [nama]` | 🔥 Desain UI di Pencil.dev dulu, baru coding | Mau lihat tampilan sebelum ngoding |
| `/fix-ui [file]` | Perbaiki & upgrade tampilan | UI jelek / mau dipercantik |
| `/tiru-design [url]` | 🔥 Bedah & tiru website referensi | Mau tampilan kayak website X |
| `/analisis-referensi [url]` | Ekstrak design DNA | Cari inspirasi dari referensi |

### 🐛 Debug & Review
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/stuck [error]` | Debug dengan konteks proyek | Ada error yang gak kelar-kelar |
| `/review [file]` | Review kode + saran perbaikan | Mau cek kualitas kode |
| `/konflik` | Protokol kalau ada konflik keputusan | Claude vs Gemini beda pendapat |

### 🚀 Deploy & Maintenance
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/deploy` | Panduan deploy sesuai hosting kamu | Mau upload ke hosting |
| `/deploy-check` | Audit kesiapan sebelum deploy | Sebelum deploy ke production |
| `/maintenance` | Mode konservatif untuk proyek live | Proyek udah live, mau update |
| `/siap-client` | Checklist sebelum serahkan ke client | Mau submit TA / serahkan ke client |

### 📄 Dokumentasi TA
| Command | Fungsi | Kapan dipakai |
|---|---|---|
| `/export-docs` | Generate draft dokumen TA | Mau mulai nulis laporan |
| `/buat-manual [fitur]` | Generate draft manual user | Butuh buku panduan fitur |

### ⚙️ Internal (jalan otomatis, gak perlu diketik)
| Command | Fungsi |
|---|---|
| `/cek-fase` | Checkpoint test saat fase selesai |
| `/fase-selesai` | Update HANDOFF.md saat fase selesai |

---

## 🔧 Context7 — Kenapa Penting?

Salah satu fitur baru di v7 adalah integrasi **Context7 MCP**.

**Masalah tanpa Context7:**
```
Kamu  : "Buatkan komponen Livewire untuk search"
Claude: *nulis kode pake API Livewire v2 yang udah deprecated*
Kamu  : ???
```

**Dengan Context7:**
```
Kamu    : "Buatkan komponen Livewire untuk search"
Context7: *kasih docs Livewire v3 terbaru ke Claude*
Claude  : *nulis kode yang bener dan up-to-date*
Kamu    : nice 🔥
```

**Setup Context7 (sekali aja):**

1. Buka Claude → Settings → MCP Servers
2. Tambahkan server baru:
```json
{
  "mcpServers": {
    "context7": {
      "serverUrl": "https://mcp.context7.com/mcp"
    }
  }
}
```
3. Done. Claude sekarang otomatis cek docs terbaru setiap coding Laravel, Livewire, Alpine, atau Tailwind.

> Library yang selalu dicek: `laravel/laravel` · `livewire/livewire` · `alpinejs/alpine` · `tailwindlabs/tailwindcss`

---

## 🤝 Handoff ke Gemini — Gimana Caranya?

Di v7, **gak ada lagi GEMINI.md terpisah.** Semua yang Gemini perlu tahu sudah ada di bagian bawah `CLAUDE.md`.

**Langkah handoff:**
```
1. Di Claude → ketik /handoff
   Claude akan isi HANDOFF.md dengan status terkini

2. Buka Gemini

3. Lampirkan:
   - CLAUDE.md         (bagian bawah ada panduan untuk Gemini)
   - PROJECT.md
   - HANDOFF.md
   - DESIGN-SYSTEM.md

4. Gemini akan baca bagian "🤝 UNTUK GEMINI / AI LAIN"
   dan langsung konfirmasi posisi proyek sebelum mulai

5. Mau balik ke Claude? /handoff lagi dari Gemini
```

> 💡 **Pro tip:** Gemini bagus banget buat urusan UI/UX & desain visual.
> Claude lebih kuat di logika backend & debugging.
> Manfaatkan keduanya sesuai keahliannya!

---

## 🎨 Fitur /tiru-design — The Real One

Command terbaru dan terkuat di v7. Kalau kamu nemu website yang tampilannya sick dan mau ditiru buat proyek TA, ini command-nya.

**Cara pakai:**
```
/tiru-design https://contoh-dashboard.com
```

**Yang akan Claude lakukan (6 layer analisis):**
```
Layer 1 — Kesan makro & layout keseluruhan
Layer 2 — Sistem warna lengkap (bg, surface, primary, border, status colors)
Layer 3 — Tipografi (font, weight, line-height, letter-spacing)
Layer 4 — Spacing & border radius
Layer 5 — Komponen detail (navbar, card, button, table, form, sidebar, badge)
Layer 6 — Micro-interaction (hover, loading, animasi, active state)
```

Setelah analisis, Claude **adaptasi** semua itu ke brand proyek kamu — bukan copy mentah, tapi disesuaikan dengan warna dan identitas proyekmu.

Output akhirnya: `DESIGN-SYSTEM.md` terupdate + tawarkan langsung implementasi kode Tailwind.

> ⚠️ **Catatan:** Kalau website butuh login untuk lihat konten, kasih screenshot aja ke Claude.

---

## 📊 Hierarki File — Siapa yang Menang Kalau Ada Konflik?

```
                    👑 HANDOFF.md
                   (blueprint dikunci)
                         ↓
                   DESIGN-SYSTEM.md
                   (otoritas tampilan)
                         ↓
                      PROJECT.md
                  (konteks & progress)
                         ↓
                  Kode yang udah jalan
                         ↓
                      Opini AI  ← paling lemah
```

> Kalau Claude/Gemini bilang sesuatu yang bertentangan sama HANDOFF.md
> → **HANDOFF.md yang bener**, bukan AI-nya.

---

## 🧠 Tiga Mode AI

Claude di system-v8 punya 3 mode yang aktif di situasi berbeda:

**🎨 UI Designer Mode**
Aktif otomatis saat `/new-page` atau `/fix-ui`
→ Claude baca DESIGN-SYSTEM.md, ikuti identitas visual, tawarkan pilihan estetik

**🔧 Debug Mode**
Aktif otomatis saat `/stuck` atau `/review`
→ Claude cek lessons.md dulu (siapa tau error ini pernah terjadi), cari root cause bukan patch

**🧠 Advisor Mode**
Aktif **sepanjang waktu tanpa perlu diaktifkan**
→ Claude proaktif kasih:
- `💡 SARAN:` kalau ada cara yang lebih baik
- `⚠️ PERINGATAN:` kalau ada pola yang berbahaya

---

## 📈 Profil Kompleksitas Proyek

Biar ekspektasi realistis dari awal:

| Jenis Proyek | Level | Yang Bikin Ribet |
|---|---|---|
| Company profile / website instansi | 🟢 Santai | Desain & konten aja |
| Portal berita / blog | 🟡 Medium | Manajemen konten |
| Sistem absensi | 🟡 Medium | Logic waktu & laporan |
| Booking / reservasi | 🟡 Medium | State slot & konflik jadwal |
| Dashboard admin | 🟡 Medium | Query kompleks & chart |
| **Kasir / POS** | 🔴 Gas poll | State keranjang + transaksi atomik |
| Toko online | 🔴 Gas poll | Stok, order, payment gateway |
| Inventaris | 🔴 Gas poll | Mutasi stok & audit trail |

---

## 💡 Tips & Tricks

**Satu sesi = satu fitur**
Jangan minta Claude buat 5 hal sekaligus dalam satu sesi. Pecah jadi kecil-kecil, hasilnya lebih clean dan gak overwhelm.

**Jangan dump seluruh codebase**
Lampirkan file yang relevan aja. Kalau lagi debug halaman produk, gak perlu lampirkan file laporan.

**Commit sebelum hal besar**
Claude akan ingatkan ini, tapi biasain sendiri juga:
```bash
git add . && git commit -m "chore: checkpoint sebelum tambah fitur X"
```

**Kalau sesi udah panjang banget → /handoff**
Konteks Claude ada batasnya. Sebelum penuh dan dia mulai lupa, jalanin `/handoff` dulu.

**Stuck lebih dari 1 jam?**
```
/stuck [paste error lengkap]
```
Jangan coba-coba sendiri kelamaan. Claude punya akses ke lessons.md — siapa tau error ini pernah terjadi dan udah ada solusinya.

---

## 🗂️ File Mana yang Dilampirkan Kapan?

| Situasi | File yang dilampirkan |
|---|---|
| Proyek baru, hari pertama | `CONTEXT.md` + `PROJECT.md` |
| Sesi lanjutan (hari biasa) | `CONTEXT.md` + `PROJECT.md` + `HANDOFF.md` |
| Habis dari Gemini, balik ke Claude | + `DESIGN-SYSTEM.md` juga |
| Ada error spesifik | + file yang error-nya |
| Mau fix UI | + `DESIGN-SYSTEM.md` + file blade-nya |

> 💬 **Aturan emas:** Lebih sedikit lebih baik. Lampirkan yang relevan, bukan semua yang ada.

---

## ❓ FAQ

**Q: Harus pakai Claude? Gak bisa Gemini aja?**
A: Bisa dua-duanya! CLAUDE.md untuk Claude, dan Gemini tinggal baca bagian `🤝 UNTUK GEMINI` di file yang sama. Tapi untuk coding TALL Stack, Claude lebih recommended.

**Q: Apakah harus pakai Context7?**
A: Tidak wajib, tapi sangat direkomendasikan. Tanpa Context7 Claude kadang pakai API yang udah deprecated. Setup-nya cuma sekali dan gratis.

**Q: Bagaimana kalau proyek saya bukan kasir/POS?**
A: Tetap bisa! Di `PROJECT.md` ada pilihan jenis web: company-profile, instansi, absensi, booking, dan lainnya. Claude akan adaptasi saran dan roadmap sesuai jenis proyeknya.

**Q: GEMINI.md mana?**
A: Sejak v7 dihapus. Semua info untuk Gemini sudah ada di bagian bawah `CLAUDE.md` — lebih ringkas, gak perlu maintain 2 file terpisah.

**Q: Apa itu /desain dan Pencil.dev?**
A: `/desain` adalah command baru di v8 yang memungkinkan kamu lihat desain visual dulu di canvas Pencil.dev sebelum dikoding. Opsional — kalau gak mau, langsung `/new-page` aja.

**Q: Boleh edit file-file ini?**
A: Boleh, kecuali bagian **BLUEPRINT DIKUNCI** di HANDOFF.md — itu jangan diutak-atik karena jadi referensi permanen selama proyek berlangsung.

**Q: Kenapa ada dua command /analisis-referensi dan /tiru-design?**
A: `/analisis-referensi` buat yang mau ekstrak inspirasi ringan. `/tiru-design` buat yang mau bedah detail dan langsung implementasi — lebih dalam, lebih lengkap.

---

## 🚦 Cheat Sheet — Simpan Ini!

```
╔═══════════════════════════════════════════════════════╗
║           SYSTEM-V7 CHEAT SHEET                      ║
╠═══════════════════════════════════════════════════════╣
║                                                       ║
║  MULAI PROYEK BARU                                   ║
║  → Isi PROJECT.md                                    ║
║  → Lampirkan CONTEXT.md + PROJECT.md                 ║
║  → /init                                             ║
║                                                       ║
║  SESI LANJUTAN                                       ║
║  → Lampirkan CONTEXT.md + PROJECT.md + HANDOFF.md   ║
║  → /next                                             ║
║                                                       ║
║  ADA ERROR                                           ║
║  → /stuck [paste error]                              ║
║                                                       ║
║  PINDAH KE GEMINI                                    ║
║  → /handoff → lampirkan ke Gemini                   ║
║                                                       ║
║  MAU TIRU WEBSITE                                    ║
║  → /tiru-design [url]                               ║
║                                                       ║
║  MAU DEPLOY                                          ║
║  → /deploy-check → /deploy                          ║
║                                                       ║
╚═══════════════════════════════════════════════════════╝
```

---

<div align="center">

**system-v8** · TALL Stack TA Framework

*Built for students who build real things* 🎓

`Tailwind` · `Alpine.js` · `Laravel` · `Livewire`

</div>
