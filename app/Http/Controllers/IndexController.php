<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        $nama = "Admin";
        // Menampilkan nama ke rout
        // return view('tampilan.index', ['namaOrang' => $nama]);
        // menampilkan nama ke rout mengunakan fungsi compact
        return view('tampilan.index', compact('nama'));
    }
}
