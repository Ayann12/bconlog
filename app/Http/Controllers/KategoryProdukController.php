<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoryProdukController extends Controller
{
    public function index(){
    return view('kategory-produk.index');
    }
}
