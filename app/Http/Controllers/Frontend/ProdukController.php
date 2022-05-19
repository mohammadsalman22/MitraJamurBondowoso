<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Gallery;

class ProdukController extends Controller
{
    public function index()
    {
        $this->param['produk'] = Produk::all();
        $this->param['gallery'] = Gallery::all();

        return view('frontend.pages.produk.index', $this->param);
    }
}
