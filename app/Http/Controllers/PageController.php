<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Muhammad Naufal Haidar Setyawan, NIM : 2241720097';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
