@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <div class="page-title">
        <span class="tag">JELAJAHI</span>
        <h1>Kategori Buku</h1>
        <p class="muted">
            Kenali berbagai kategori yang tersedia di RuangBaca.
        </p>
    </div>

    <div class="grid">
        @foreach ($kategori as $itemKategori)
            <section class="card">
                <div class="book-cover">📚</div>

                <h3>{{ $itemKategori }}</h3>

                <p class="muted">
                    Buku dalam kategori {{ $itemKategori }}.
                </p>

                <h4 style="margin-top: 15px;">Koleksi kategori ini</h4>

                @foreach ($buku as $itemBuku)
                    @if ($itemBuku['kategori'] === $itemKategori)
                        <p style="margin-top: 8px;">
                            <a href="{{ route('buku.detail', $itemBuku['id']) }}">
                                {{ $itemBuku['judul'] }}
                            </a>
                        </p>
                    @endif
                @endforeach
            </section>
        @endforeach
    </div>
@endsection