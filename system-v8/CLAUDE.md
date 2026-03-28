# CLAUDE.md v8 — TALL Stack Universal System + Pencil.dev Design Flow
> File ini dibaca oleh **Claude** sebagai panduan utama coding.
> **Gemini & AI lain** cukup baca bagian `🤝 UNTUK GEMINI / AI LAIN` untuk handoff.
> Lampirkan file ini + `PROJECT.md` di setiap sesi. Ketik `/init` untuk mulai.

---

## ⚡ MULAI CEPAT

**Proyek baru:** Lampirkan `CLAUDE.md` + `PROJECT.md` → ketik `/init`
**Sesi lanjutan:** Lampirkan `CLAUDE.md` + `PROJECT.md` + `HANDOFF.md` → ketik `/next`
**Ada error:** Lampirkan file yang error → ketik `/stuck [paste error]`
**Pindah ke Gemini:** Ketik `/handoff` → lampirkan `HANDOFF.md` + `DESIGN-SYSTEM.md` ke Gemini

---

## 📂 PETA FILE

| File | Dibaca oleh | Isi |
|---|---|---|
| `CLAUDE.md` | Claude (+ Gemini bagian handoff) | Panduan utama — ini file-nya |
| `PROJECT.md` | Claude & Gemini | Identitas proyek + progress |
| `HANDOFF.md` | Claude & Gemini | Blueprint dikunci + log fase |
| `DESIGN-SYSTEM.md` | Claude & Gemini | Warna, font, komponen |
| `tasks/lessons.md` | Claude & Gemini | Error & keputusan teknis lama |
| `tasks/progress.md` | Claude & Gemini | Checklist progress per fase |
| `.claude/commands/` | Claude | Detail instruksi slash commands |

**Hierarki otoritas (tertinggi ke terendah):**
`HANDOFF.md` → `DESIGN-SYSTEM.md` → `PROJECT.md` → kode yang jalan → opini AI

---

## ⚙️ STACK

- **TALL**: Tailwind CSS v3 · Alpine.js v3 · Laravel 11 · Livewire v3
- **Template**: Blade | **Build**: Vite | **Auth**: Laravel Breeze (Blade)
- **Role user**: Frontend awam — berikan penjelasan singkat sebelum kode

```bash
php artisan serve                        # Server lokal
npm run dev                              # Vite dev server (jalankan bersamaan)
php artisan migrate                      # Jalankan migrasi
php artisan optimize:clear               # Bersihkan semua cache
php artisan livewire:make NamaKomponen   # Buat komponen Livewire
```

---

## 📐 STRUKTUR FOLDER

```
resources/views/
  components/   ← Blade UI reusable (card, button, modal)
  livewire/     ← Template Livewire (halaman dinamis)
  layouts/      ← Layout utama (app.blade.php)
app/Livewire/   ← Class PHP Livewire
app/Http/Requests/ ← FormRequest validasi
```

---

## 📏 ATURAN CODING

**Livewire**
- `wire:model.live` → search/filter real-time | `wire:model.lazy` → form biasa
- Selalu tambahkan `wire:loading` pada setiap tombol aksi
- Satu komponen = satu tanggung jawab

**Tailwind**
- Dilarang CSS kustom jika ada utility class yang bisa dipakai
- `@apply` hanya di `resources/css/app.css` untuk komponen berulang
- Warna dari `tailwind.config.js` — tidak boleh hardcode hex
- Mobile-first: tanpa prefix → `sm:` → `md:` → `lg:`

**Alpine.js**
- Hanya untuk interaksi client-side: dropdown, modal, toggle, tab
- Data yang perlu ke database → **Livewire**, bukan Alpine
- Sinkronisasi → `$wire.entangle('property')`

**Laravel**
- Validasi → wajib `FormRequest`, jangan `$request->all()`
- Relasi Eloquent → wajib `with()`, hindari N+1
- URL/path → `asset()`, `route()`, `vite()` — jangan hardcode

---

## 🔧 TOOLS — Context7

> Context7 menyuplai dokumentasi library **versi terbaru** langsung ke konteks AI.
> Ini mencegah Claude menggunakan API yang sudah outdated.

**Aturan penggunaan Context7:**
- Setiap kali menulis kode yang melibatkan **Laravel, Livewire, Alpine.js, atau Tailwind** → gunakan Context7 untuk verifikasi API terbaru
- Cara panggil: `use context7` di akhir prompt, atau otomatis aktif via rule ini
- Tools tersedia: `resolve-library-id` → `query-docs`

**Library yang selalu dicek via Context7:**
`laravel/laravel` · `livewire/livewire` · `alpinejs/alpine` · `tailwindlabs/tailwindcss`

---

## 🎨 TOOLS — Pencil.dev (Desain UI)

> Pencil.dev adalah tool desain visual yang terhubung langsung ke AI via MCP.
> Claude bisa **membuat, membaca, dan mengubah** desain di canvas Pencil.dev secara real-time.

**Kapan pakai Pencil.dev:**
- User minta lihat tampilan dulu sebelum dikoding → pakai `/desain [nama halaman]`
- User kirim referensi visual → analisis dulu, baru generate ke Pencil
- User minta revisi tampilan yang sudah jadi → buka di Pencil, edit, codingkan ulang

**Aturan wajib sebelum desain:**
- Claude **harus tanya dulu** — jangan langsung generate tanpa tahu kebutuhan user
- Pertanyaan wajib: untuk siapa, fungsinya apa, nuansa yang diinginkan
- Setelah user jawab → tampilkan ringkasan dulu, tunggu konfirmasi, baru generate
- Desain mengikuti warna & font dari `DESIGN-SYSTEM.md`

**Alur lengkap:**
```
/desain [nama] → Claude tanya kebutuhan → user jawab
→ Claude konfirmasi ringkasan → user setuju
→ Claude generate desain ke Pencil.dev
→ User edit/improvisasi di canvas
→ User ketik "codingkan"
→ Claude baca desain terbaru → generate Blade + Livewire + Tailwind
```

**Pencil.dev BUKAN keharusan** — user yang tidak mau desain dulu bisa langsung pakai `/new-page`.

---

## 🧠 TIGA MODE AI

| Mode | Aktif Saat | Yang Dilakukan |
|---|---|---|
| 🎨 UI Designer | `/new-page`, `/fix-ui` | Baca DESIGN-SYSTEM.md → tawarkan pilihan estetik |
| 🔧 Debug | `/stuck`, `/review` | Cek lessons.md dulu → cari root cause, bukan patch |
| 🧠 Advisor | Sepanjang waktu | `💡 SARAN:` untuk improvement · `⚠️ PERINGATAN:` untuk bahaya |

---

## 📋 SLASH COMMANDS

| Command | Fungsi |
|---|---|
| `/init` | ⭐ Blueprint session — gambaran lengkap proyek |
| `/next` | Lanjut dari sesi terakhir |
| `/fase` | Progress fase saat ini |
| `/new-page [nama]` | Buat halaman Blade baru |
| `/new-component [nama]` | Buat Blade component atau Livewire |
| `/form [deskripsi]` | Buat form Livewire + validasi |
| `/desain [nama]` | ⭐ Desain UI dulu di Pencil.dev — Claude tanya kebutuhan, generate desain, kamu edit, baru dikoding |
| `/fix-ui [file]` | Perbaiki tampilan |
| `/stuck [error]` | Debug dengan konteks proyek |
| `/review [file]` | Review kode + saran |
| `/tambah-fitur [deskripsi]` | Impact analysis sebelum coding |
| `/deploy` | Checklist deploy |
| `/deploy-check` | Audit kesiapan hosting |
| `/maintenance` | Mode konservatif untuk proyek live |
| `/siap-client` | Checklist sebelum serahkan ke client |
| `/analisis-referensi [url]` | Analisis referensi visual — ekstrak design DNA |
| `/tiru-design [url]` | ⭐ Bedah & tiru referensi secara menyeluruh — layout, font, card, spacing, micro-interaction → adaptasi ke brand proyek |
| `/export-docs` | Generate draft dokumen TA |
| `/buat-manual [fitur]` | Generate draft manual user |
| `/handoff` | Siapkan pindah ke Gemini → isi HANDOFF.md |

> Detail instruksi tiap command ada di `.claude/commands/`

**Prosedur otomatis (tanpa perlu diketik):**

| Kondisi | Yang dilakukan otomatis |
|---|---|
| Fase selesai | Jalankan `cek-fase` → `fase-selesai` → update HANDOFF.md |
| Ada konflik dengan keputusan Gemini | Ikuti protokol `konflik.md` |
| Sebelum fase baru | Ingatkan git commit |
| Sebelum `/tambah-fitur` | Git checkpoint dulu |
| Sesi mulai panjang | Tawarkan `/handoff` |
| Ada potensi improvement | Format `💡 SARAN IMPROVEMENT:` |

---

## 💾 MANAJEMEN SESI

- **Satu sesi = satu fitur atau satu halaman**
- Stuck >1 jam → `/stuck [paste error]`
- Sesi panjang → `/handoff` sebelum konteks habis
- Lampirkan **hanya file yang relevan** — jangan dump seluruh codebase

---

## 📊 ANCHOR SESI
> Isi ini di awal setiap sesi setelah baca PROJECT.md dan HANDOFF.md.

```
PROYEK    : [nama proyek]
FASE      : [fase berapa, nama fase]
DIKERJAKAN: [fitur/halaman apa]
TERAKHIR  : [file terakhir yang disentuh]
SEKARANG  : [apa yang dikerjakan sesi ini]
JANGAN    : [hal yang tidak boleh diubah]
```

---

## 📊 PROFIL KOMPLEKSITAS

| Jenis Proyek | Level | Bottleneck |
|---|---|---|
| Company profile / instansi | 🟢 Rendah | Desain & konten |
| Portal berita / absensi / booking | 🟡 Sedang | Logic & state |
| Dashboard admin | 🟡 Sedang | Query kompleks & chart |
| Kasir / POS / Toko online | 🔴 Tinggi | State transaksi atomik |
| Inventaris | 🔴 Tinggi | Mutasi stok & audit trail |

---

---

## 🤝 UNTUK GEMINI / AI LAIN

> Bagian ini khusus untuk Gemini atau AI lain yang menerima handoff dari Claude.
> Baca bagian ini saja — tidak perlu baca seluruh file di atas.

### Apa yang perlu kamu lakukan saat menerima handoff:
1. Baca `HANDOFF.md` → bagian **BLUEPRINT PROYEK** + **FASE AKTIF** + **STATUS FASE TERAKHIR**
2. Baca `PROJECT.md` → bagian **PROGRESS SAAT INI**
3. Baca `DESIGN-SYSTEM.md` → ini otoritas tertinggi soal tampilan
4. Konfirmasi ke user:
   ```
   📋 Saya sudah baca HANDOFF.md
   Blueprint     : [ringkasan arsitektur]
   Fase selesai  : [fase yang sudah done]
   Melanjutkan   : [apa yang akan dikerjakan]
   Siap lanjut?
   ```

### Hierarki yang wajib diikuti:
```
HANDOFF.md (blueprint dikunci) → jangan pernah override
DESIGN-SYSTEM.md               → ikuti semua token warna & komponen
tasks/lessons.md               → cek sebelum buat keputusan teknis baru
```

### Aturan wajib:
- Jangan ubah kode yang sudah jalan kecuali diminta
- Jangan ambil keputusan arsitektur baru tanpa tanya user dulu
- Jika ada perbedaan pendapat dengan keputusan Claude → ikuti `konflik.md`
- Wajib isi Registry di `DESIGN-SYSTEM.md` setiap buat halaman/komponen baru
- Setelah selesai → update `tasks/progress.md` dan `HANDOFF.md`

### Slash commands untuk Gemini:
| Command | Fungsi |
|---|---|
| `/fix-ui [file]` | Perbaiki & tingkatkan tampilan |
| `/new-page [nama]` | Buat halaman Blade baru |
| `/analisis-referensi [url]` | Analisis referensi visual |
| `/handoff` | Serahkan balik ke Claude |

---

## 🤖 UNTUK AI AGENT (Antigravity / Otomatis)

```
MODE              : Review-driven — minta izin sebelum ubah file yang ada
BEBAS             : Buat file BARU tanpa izin
SEBELUM EKSEKUSI  : Tampilkan rencana dulu, tunggu konfirmasi

Sebelum ubah file yang ada:
  → "Saya akan mengubah [file] untuk [alasan]" → tunggu konfirmasi

Sebelum keputusan teknis baru:
  → Cek tasks/lessons.md dulu
  → Jika belum ada → tampilkan opsi ke user

Setelah selesai:
  → Update tasks/progress.md
  → Catat di HANDOFF.md jika menyentuh arsitektur
```
