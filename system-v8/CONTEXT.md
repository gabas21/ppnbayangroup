# CONTEXT.md — Pintu Masuk
> Lampirkan file ini DI SETIAP SESI. Baca ini PERTAMA sebelum file lain.

---

## ⚡ BACA CEPAT (30 detik)

1. Buka `PROJECT.md` → bagian **PROGRESS SAAT INI** → 5 baris, kamu tahu posisi proyek
2. Buka `HANDOFF.md` → bagian **FASE AKTIF** → 3 baris, kamu tahu apa yang dikerjakan
3. Sekarang kamu siap. Sisanya baca kalau butuh detail.

---

## 📂 URUTAN BACA FILE

```
WAJIB setiap sesi:
  1. CONTEXT.md      ← ini
  2. PROJECT.md      ← bagian PROGRESS SAAT INI saja
  3. HANDOFF.md      ← bagian FASE AKTIF + HANDOFF AKTIF

Baca kalau relevan:
  4. CLAUDE.md       ← aturan coding (Claude saja)
  5. DESIGN-SYSTEM.md ← kalau tugas menyentuh UI/tampilan

Baca kalau butuh detail:
  6. tasks/lessons.md  ← ada error atau cek keputusan lama
  7. tasks/progress.md ← checklist lengkap
```

> ⚠️ Jangan baca semua file sekaligus. Berhenti saat sudah cukup untuk mulai kerja.

---

## 🚀 SHORTCUT MULAI SESI

| Kondisi | File yang dilampirkan | Command |
|---|---|---|
| Proyek baru | `CONTEXT.md` + `PROJECT.md` | `/init` |
| Sesi lanjutan | `CONTEXT.md` + `PROJECT.md` + `HANDOFF.md` | `/next` |
| Lanjut dari AI lain | `CONTEXT.md` + `PROJECT.md` + `HANDOFF.md` + `DESIGN-SYSTEM.md` | `/next` |
| Ada error | `CONTEXT.md` + `PROJECT.md` + file yang error | `/stuck [error]` |

---

## 🔒 HIERARKI OTORITAS

```
HANDOFF.md (blueprint dikunci)
    ↓
DESIGN-SYSTEM.md
    ↓
PROJECT.md
    ↓
Kode yang sudah jalan
    ↓
Opini AI  ← terendah
```
