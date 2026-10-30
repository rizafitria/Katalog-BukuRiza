<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2005,
                'deskripsi' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan dan mengejar impian.'
            ],
            [
                'id' => 2,
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2014,
                'deskripsi' => 'Petualangan Raib dan teman-temannya dalam dunia paralel yang penuh misteri.'
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Inspirasi',
                'tahun' => 2009,
                'deskripsi' => 'Perjalanan enam sahabat yang mengejar cita-cita dengan semangat dan keyakinan.'
            ],
            [
                'id' => 4,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'deskripsi' => 'Pengenalan filsafat Stoisisme untuk membantu menghadapi kehidupan sehari-hari.'
            ],
            [
                'id' => 5,
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'kategori' => 'Sejarah',
                'tahun' => 1980,
                'deskripsi' => 'Kisah kehidupan Minke di tengah masyarakat Hindia Belanda.'
            ],
            [
                'id' => 6,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'deskripsi' => 'Panduan membangun kebiasaan baik melalui perubahan kecil yang konsisten.'
            ],
        ];
    }

    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku.index', compact('buku'));
    }

    public function detail($id)
    {
        $buku = collect($this->dataBuku())->firstWhere('id', (int) $id);

        if (!$buku) {
            abort(404);
        }

        return view('buku.detail', compact('buku'));
    }

    public function kategori()
    {
        $buku = $this->dataBuku();

        $kategori = collect($buku)
            ->pluck('kategori')
            ->unique()
            ->values();

        return view('kategori', compact('kategori', 'buku'));
    }
}