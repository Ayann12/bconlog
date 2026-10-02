<?php

namespace App\Http\Controllers;

use App\Models\KategoryProduk;
use Illuminate\Http\Request;

class KategoryProdukController extends Controller
{
    public $pageTitle ='Kategory Produk';
    public function index(){
        $pageTitle = $this->pageTitle;
        $query = KategoryProduk::query();
        $kategory = $query->paginate(10);
        return view('kategory-produk.index', compact('pageTitle', 'Kategory'));
    }
}
