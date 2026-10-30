@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <span>SELAMAT DATANG DI RUANGBACA</span>
        <h1>Setiap Buku Membuka<br>Dunia Baru.</h1>

        <p>
            Temukan berbagai buku pilihan untuk menambah pengetahuan,
            mendapatkan inspirasi, dan menemani perjalanan belajarmu.
        </p>

        <a href="{{ route('buku.index') }}" class="button">
            Jelajahi Koleksi Buku &rarr;
        </a>
    </section>

    <section>
        <h2 class="section-title">Tentang Koleksi Kami</h2>

        <div class="grid">
            <div class="card">
                <h3>{{ $jumlahBuku }} Buku Pilihan</h3>
                <p class="muted">Koleksi buku dari berbagai bidang dan tema.</p>
            </div>

            <div class="card">
                <h3>Beragam Kategori</h3>
                <p class="muted">Novel, fantasi, sejarah, dan pengembangan diri.</p>
            </div>

            <div class="card">
                <h3>Mudah Dijelajahi</h3>
                <p class="muted">Temukan informasi buku melalui halaman katalog dan detail.</p>
            </div>
        </div>
    </section>
@endsection