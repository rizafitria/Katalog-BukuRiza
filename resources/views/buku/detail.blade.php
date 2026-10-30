@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="detail-box">
        <a href="{{ route('buku.index') }}">← Kembali ke Daftar Buku</a>

        <div class="card" style="margin-top: 25px;">
            <div class="book-cover" style="min-height: 220px;">
                📖
            </div>

            <span class="tag">{{ $buku['kategori'] }}</span>

            <h1>{{ $buku['judul'] }}</h1>

            <p class="muted">
                Penulis: {{ $buku['penulis'] }}
            </p>

            <p class="muted">
                Tahun terbit: {{ $buku['tahun'] }}
            </p>

            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #e4ebe6;">

            <h3>Deskripsi Buku</h3>

            <p>{{ $buku['deskripsi'] }}</p>
        </div>
    </div>
@endsection