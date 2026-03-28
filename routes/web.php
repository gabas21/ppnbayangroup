<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kunjungan;
use App\Models\Berita;

Route::get('/', function () {
    try {
        $today = date('Y-m-d');
        $kunjungan = Kunjungan::firstOrCreate(
            ['tanggal' => $today],
            ['jumlah' => 0]
        );
        $kunjungan->increment('jumlah');
    } catch (\Exception $e) {}
    return view('welcome');
});

// Berita routes
Route::get('/berita', function () {
    $beritas = Berita::with('kategori')->latest('published_at')->paginate(9);
    return view('berita.index', compact('beritas'));
})->name('berita.index');

Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::with('kategori')->where('slug', $slug)->firstOrFail();
    $related = Berita::with('kategori')
        ->where('id', '!=', $berita->id)
        ->where('kategori_id', $berita->kategori_id)
        ->latest('published_at')
        ->take(3)
        ->get();
    return view('berita.show', compact('berita', 'related'));
})->name('berita.show');

require __DIR__.'/auth.php';

