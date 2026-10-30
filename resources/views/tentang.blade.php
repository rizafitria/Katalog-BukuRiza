@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <section class="hero">
        <span>TENTANG RUANGBACA</span>

        <h1>Membangun Kebiasaan Membaca.</h1>

        <p>
            RuangBaca adalah proyek katalog buku berbasis web yang
            dirancang untuk membantu pengunjung mengenal koleksi buku
            dengan tampilan sederhana, nyaman, dan mudah digunakan.
        </p>
    </section>

    <section class="card">
        <h2>Tujuan Proyek</h2>

        <p>
            Proyek ini dibuat sebagai penerapan konsep routing,
            controller, dan view pada framework Laravel.
            Data buku dikelola menggunakan array PHP dan ditampilkan
            melalui template Blade tanpa menggunakan database.
        </p>

        <h3 style="margin-top: 20px;">Teknologi yang Digunakan</h3>

        <p>Laravel, PHP, Blade Template, HTML, dan CSS.</p>

        <a href="{{ route('buku.index') }}" class="button">
            Lihat Koleksi Buku
        </a>
    </section>
@endsection