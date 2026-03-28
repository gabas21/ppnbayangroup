# HANDOFF.md — Jembatan Antar AI

> File ini diinisialisasi otomatis saat `/init` dan diupdate otomatis setiap fase selesai.
> **Cara pakai:** Lampirkan file ini setiap kali pindah AI (Claude → Gemini atau sebaliknya).
> AI yang menerima handoff wajib baca file ini dari atas ke bawah sebelum melakukan apapun.

---

## 🗺️ BLUEPRINT PROYEK
> ⚠️ Bagian ini JANGAN dihapus atau diubah. Ini fondasi permanen dari `/init`.

```
Proyek   : [diisi otomatis saat /init]
Jenis    : [diisi otomatis saat /init]
Client   : [diisi otomatis saat /init]
Stack    : TALL — Tailwind · Alpine · Laravel 11 · Livewire v3
Auth     : Laravel Breeze (Blade)
```

### Database — Tabel & Kolom Kunci:
```
[diisi otomatis saat /init]
Contoh:
• users         : id, name, email, role, timestamps
• products      : id, name, category_id, price, stock, image, timestamps
• orders        : id, user_id, total, status, payment_method, timestamps
```

### Relasi Penting:
```
[diisi otomatis saat /init]
Contoh:
• Order    hasMany   OrderItem
• OrderItem belongsTo Product
• User     hasMany   Order
```

### Keputusan Arsitektur Awal:
```
[diisi otomatis saat /init]
Contoh:
• QRIS: manual konfirmasi, tanpa payment gateway
• Keranjang: disimpan di session (bukan DB) selama transaksi berlangsung
• Soft delete untuk produk agar data histori transaksi tetap utuh
```

### Roadmap Lengkap:
```
[diisi otomatis saat /init]
Contoh:
• Fase 1: Setup + Auth + DB (Hari 1-5)     | Migration, Breeze, layout utama
• Fase 2: CRUD Produk & Kategori (Hari 6-12) | Livewire components, upload gambar
• ⚠️ Fase 3: Transaksi KRITIS (Hari 13-22)  | Keranjang, pembayaran, struk
• Fase 4: Laporan & Dashboard (Hari 23-28)  | Chart, export Excel/PDF
• Fase 5: Testing + Deploy (Hari 29-30)     | Bug fix, hosting
```

---

## 📌 FASE AKTIF

```
Fase   : — (belum dimulai — jalankan /init dulu)
Status : ⏳ Menunggu
```

---

## 📦 STATUS FASE TERAKHIR
> Diisi otomatis setiap fase selesai. Ini yang dibaca AI pertama kali saat pindah.

```
Fase Selesai    : —
Tanggal         : —
Dikerjakan oleh : —
```

### File Dibuat/Diubah:
```
(belum ada)
```

### Keputusan Arsitektur Tambahan:
```
(belum ada)
```

### Yang Belum Selesai + Alasan:
```
(belum ada)
```

### Next Step — Fase Berikutnya:
```
(lihat roadmap di atas)
```

---

## 📝 LOG PERUBAHAN ANTAR FASE
> Entri terbaru selalu di paling atas. Entri lama tidak dihapus.

```
(kosong — akan terisi otomatis setiap fase selesai)
```

---

## 💬 CATATAN UNTUK AI PENERIMA HANDOFF

Saat kamu (Claude atau Gemini) membuka file ini untuk melanjutkan:

1. Baca **BLUEPRINT PROYEK** → pahami struktur dan keputusan yang sudah dibuat
2. Baca **STATUS FASE TERAKHIR** → tahu persis di mana proyek berhenti
3. Baca **LOG PERUBAHAN** → lihat perjalanan fase sebelumnya
4. Konfirmasi ke user: *"Saya sudah baca HANDOFF.md. Melanjutkan [nama fase] dari [titik terakhir]. Siap lanjut?"*
5. Jangan ubah apapun di **BLUEPRINT PROYEK** — itu referensi permanen

> Prinsip: Setiap AI yang masuk harus bisa langsung kerja tanpa perlu penjelasan ulang dari user.
