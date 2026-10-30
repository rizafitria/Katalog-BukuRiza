@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="page-title">
        <span class="tag">KOLEKSI RUANGBACA</span>
        <h1>Jelajahi Buku</h1>
        <p class="muted">Pilih buku dan temukan informasi lengkapnya.</p>
    </div>

    <div class="grid">
        @foreach ($buku as $item)
            <article class="card">
                <div class="book-cover">📚</div>

                <span class="tag">{{ $item['kategori'] }}</span>

                <h3>{{ $item['judul'] }}</h3>
                <p class="muted">Penulis: {{ $item['penulis'] }}</p>
                <p class="muted">Tahun: {{ $item['tahun'] }}</p>

                <a href="{{ route('buku.detail', $item['id']) }}" class="button">
                    Lihat Detail
                </a>
            </article>
        @endforeach
    </div>
@endsection