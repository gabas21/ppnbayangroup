# DESIGN-SYSTEM.md — Sumber Kebenaran Desain
> **Otoritas tertinggi untuk semua keputusan visual.**
> Diisi saat `/init`, diupdate saat komponen baru dibuat.
> Konflik antara file ini dan file lain → FILE INI YANG MENANG.
> Claude & Gemini WAJIB baca sebelum membuat atau mengubah apapun yang visual.

---

## 🎨 PALET WARNA

> Diisi saat /init. Setelah diisi, tidak boleh diubah tanpa konfirmasi user.

```
Primary      : #E8610A — Orange Bayan
Secondary    : #0F2744 — Navy Blue (Eksisting CSR)
Accent       : #c4520a — Dark Orange
Background   : #f7f7f7 — Light Gray
Surface      : #FFFFFF — White (card, panel)
Border       : #E2E8F0 — Slate 200
Text Primary : #1a1a1a — Dark Gray
Text Muted   : #6B7280 — Gray 500
Success      : #10B981 — Emerald
Warning      : #F59E0B — Amber
Danger       : #EF4444 — Red
```

**Token di tailwind.config.js:**
```js
colors: {
  primary:    '[hex]',
  secondary:  '[hex]',
  accent:     '[hex]',
  surface:    '[hex]',
  // dst...
}
```

> ⚠️ Wajib pakai token — DILARANG hardcode hex langsung di Blade/CSS.

---

## 🔤 TIPOGRAFI

```
Font Utama   : Plus Jakarta Sans — untuk heading & body
Font Mono    : ui-monospace — untuk kode (opsional)
Sumber       : Google Fonts

Skala ukuran (gunakan class Tailwind):
  Heading 1  : text-4xl md:text-5xl font-extrabold uppercase tracking-widest
  Heading 2  : text-3xl font-extrabold uppercase tracking-wide
  Heading 3  : text-xl font-bold uppercase tracking-wider
  Body       : text-base font-normal text-gray-700
  Small      : text-sm font-normal
  Tiny/Label : text-xs font-bold uppercase tracking-widest
```

---

## 📐 SPACING & LAYOUT

```
Border radius standar : rounded-lg (8px) untuk card, rounded-md (6px) untuk input
Shadow standar        : shadow-sm untuk card, shadow-md untuk modal/dropdown
Max width konten      : max-w-7xl mx-auto
Padding halaman       : px-4 sm:px-6 lg:px-8
Gap antar section     : space-y-6 atau gap-6
```

---

## 🧩 REGISTRY KOMPONEN

> Diupdate setiap kali komponen baru dibuat. Cek sini dulu sebelum buat komponen baru.

### Blade Components (`<x-nama>`)

| Nama | File | Deskripsi | Props |
|------|------|-----------|-------|
| _contoh:_ | | | |
| `x-card` | `components/card.blade.php` | Card wrapper dengan shadow | `$title`, `$padding='6'` |
| `x-badge` | `components/badge.blade.php` | Status badge (sukses/warning/danger) | `$type`, `$label` |

_(Hapus baris contoh di atas saat komponen pertama dibuat, atau ganti langsung)_

### Livewire Components

| Nama Class | File View | Deskripsi | Properties |
|---|---|---|---|
| _contoh:_ | | | |
| `ProductTable` | `livewire/product-table.blade.php` | Tabel produk + search + filter | `$search`, `$category` |

_(Hapus baris contoh di atas saat komponen pertama dibuat, atau ganti langsung)_

---

## 📄 REGISTRY HALAMAN

> Daftarkan setiap halaman yang sudah dibuat. Cek sini sebelum buat halaman baru.

| Route Name | URL | File Blade | Livewire? | Status |
|---|---|---|---|---|
| _contoh:_ | | | | |
| `dashboard` | `/dashboard` | `livewire/dashboard.blade.php` | ✅ | Selesai |
| `products.index` | `/products` | `livewire/product-table.blade.php` | ✅ | Proses |

_(Hapus baris contoh di atas saat halaman pertama dibuat, atau ganti langsung)_

---

## 🔘 PANDUAN KOMPONEN UI

> Standar tampilan yang harus konsisten di seluruh proyek.
> Diisi saat /init berdasarkan nuansa yang dipilih (formal/modern/friendly/minimalis).

### Button

```html
<!-- Primary -->
<button class="bg-primary text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition">
  Label
</button>

<!-- Secondary / Outline -->
<button class="border border-primary text-primary px-4 py-2 rounded-lg font-medium hover:bg-primary/10 transition">
  Label
</button>

<!-- Danger -->
<button class="bg-danger text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition">
  Label
</button>

<!-- Dengan wire:loading -->
<button wire:click="aksi" wire:loading.attr="disabled" class="...">
  <span wire:loading.remove>Label</span>
  <span wire:loading>Memproses...</span>
</button>
```

### Input / Form

```html
<label class="block text-sm font-medium text-gray-700 mb-1">Label</label>
<input type="text"
  class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm
         focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary"
  placeholder="...">
@error('field') <p class="text-xs text-danger mt-1">{{ $message }}</p> @enderror
```

### Card

```html
<div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
  <!-- konten -->
</div>
```

### Badge / Status

```html
<!-- Sukses -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success">
  Aktif
</span>

<!-- Warning -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-warning/10 text-warning">
  Pending
</span>

<!-- Danger -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-danger/10 text-danger">
  Nonaktif
</span>
```

### Modal (Alpine.js)

```html
<div x-data="{ open: false }">
  <button @click="open = true" class="...">Buka Modal</button>

  <div x-show="open" x-cloak
    class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
    @click.self="open = false">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">
      <h2 class="text-lg font-semibold mb-4">Judul Modal</h2>
      <!-- konten -->
      <div class="flex justify-end gap-3 mt-6">
        <button @click="open = false" class="...">Batal</button>
        <button class="...">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>
```

### Table

```html
<div class="overflow-x-auto rounded-lg border border-gray-200">
  <table class="min-w-full divide-y divide-gray-200 text-sm">
    <thead class="bg-gray-50">
      <tr>
        <th class="px-4 py-3 text-left font-medium text-gray-600">Kolom</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 bg-white">
      <tr class="hover:bg-gray-50 transition">
        <td class="px-4 py-3 text-gray-700">Data</td>
      </tr>
    </tbody>
  </table>
</div>
```

---

## 📝 CATATAN KEPUTUSAN DESAIN

> Catat setiap keputusan desain penting di sini agar tidak berubah-ubah antar sesi.

| Tanggal | Keputusan | Alasan |
|---|---|---|
| - | - | - |

---

## ⚠️ ATURAN PENGGUNAAN FILE INI

1. **Sebelum buat komponen baru** → cek Registry dulu, jangan duplikasi
2. **Setelah buat komponen baru** → tambahkan ke Registry
3. **Warna baru** → tambahkan ke Palet dan tailwind.config.js, jangan hardcode
4. **Konflik desain antara file ini dan file lain** → FILE INI YANG MENANG
5. **Ingin ubah palet/font** → tampilkan alasan ke user, tunggu konfirmasi
