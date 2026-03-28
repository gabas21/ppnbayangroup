# PROJECT.md — Konteks Proyek

> **Isi file ini sekali di awal proyek. Update bagian PROGRESS setiap sesi.**
> Claude akan baca file ini saat `/init` dan adaptasi semua saran sesuai jenis proyek.

---

## 🏷️ IDENTITAS PROYEK

```
Nama Proyek      : [contoh: Kasir Cafe Bunda | Website Dinas Pendidikan]
Jenis Web        : [pilih satu — lihat daftar di bawah]
Target Selesai   : [contoh: 30 hari dari sekarang]
Tanggal Mulai    : [isi tanggal hari ini]
Client / Tujuan  : [contoh: cafe kecil 1-2 kasir | instansi pemerintah kota]
```

**Jenis Web (pilih satu):**
- `kasir` — Sistem kasir / Point of Sale
- `company-profile` — Website perusahaan / corporate profile
- `instansi` — Website instansi / lembaga pemerintah
- `toko-online` — E-commerce / toko dengan keranjang belanja
- `portal-berita` — Portal berita / blog dengan manajemen artikel
- `absensi` — Sistem absensi karyawan / siswa
- `booking` — Sistem reservasi / booking jadwal
- `dashboard-admin` — Panel admin / monitoring data
- `inventaris` — Sistem stok barang / gudang

---

## ✅ FITUR YANG DIBUTUHKAN

> Centang yang sesuai. Hapus yang tidak perlu. Tambah sendiri jika ada.

### Fitur Umum
- [ ] Login & logout (role: admin / user)
- [ ] Dashboard utama
- [ ] Manajemen pengguna (tambah, edit, hapus)
- [ ] Export data ke Excel / PDF
- [ ] Pencarian & filter data

### Fitur Spesifik
```
[Tulis fitur-fitur utama di sini]

Contoh untuk kasir:
- [ ] CRUD menu / produk
- [ ] Keranjang belanja
- [ ] Pembayaran (Cash / QRIS / Transfer)
- [ ] Struk digital
- [ ] Laporan penjualan harian

Contoh untuk company profile / instansi:
- [ ] Halaman Hero / Landing
- [ ] Profil / About
- [ ] Layanan / Services
- [ ] Galeri foto
- [ ] Kontak & formulir pesan
```

---

## 💳 PEMBAYARAN (isi jika proyek kasir/toko)

```
Metode bayar     : [ ] Cash  [ ] QRIS  [ ] Transfer Bank
Integrasi payment: [ ] Manual konfirmasi (tanpa API)
                   [ ] Midtrans  [ ] Xendit
Struk            : [ ] Cetak printer  [ ] Digital saja
```

---

## 🎨 DESAIN & TAMPILAN

```
Palet warna      : [pilih atau tulis hex]
  - Government Clean  : Navy #1E3A5F + Gold #C8973A + Red #E63946
  - Corporate Premium : Dark #0F172A + Blue #3B82F6 + Amber #F59E0B
  - Modern Minimal    : Black #18181B + Indigo #6366F1 + Green #10B981
  - Kasir/POS         : Navy #1E2D4E + Green #16A34A
  - Custom            : [isi warna sendiri]

Font             : [contoh: Inter / Plus Jakarta Sans / default Tailwind]
Nuansa tampilan  : [pilih: formal / modern / friendly / minimalis]
Target perangkat : [ ] Desktop utama  [ ] Mobile utama  [ ] Keduanya
```

---

## 📊 DATABASE

```
Tabel utama      : [contoh: users, products, orders, payments]
Relasi penting   : [contoh: order punya banyak item, item milik satu produk]
```

---

## 📈 PROGRESS SAAT INI

> **Update bagian ini setiap akhir sesi.** Ini yang Claude baca pertama kali di sesi baru.

```
Fase saat ini         : [contoh: Fase 1 — Setup & Login]
Yang sudah jalan      : [contoh: Auth sudah, migration sudah, layout utama sudah]
Yang sedang dikerjakan: [contoh: CRUD produk]
Blocking / stuck      : [contoh: error wire:model di form edit — atau: tidak ada]
Target sesi ini       : [contoh: selesaikan CRUD produk sampai bisa tambah & hapus]
```

---

## 📅 ROADMAP

> Diisi otomatis oleh Claude saat `/init`. Jangan edit manual.

```
[Claude akan isi ini setelah /init]
```

---

## 🗒️ CATATAN TAMBAHAN

```
[Hal-hal khusus yang perlu Claude tahu]
Contoh:
- Server: Niagahoster shared hosting
- PHP: 8.2
- Figma: [link jika ada]
- Deadline presentasi: [tanggal]
```
