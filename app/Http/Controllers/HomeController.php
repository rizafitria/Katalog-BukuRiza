<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahBuku = 6;

        return view('beranda', compact('jumlahBuku'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}