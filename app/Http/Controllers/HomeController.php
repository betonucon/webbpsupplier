<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class HomeController extends Controller
{
    
    public function index()
    {
        $data=Barang::where('aktive',1)->where('sts_gambar',1)->orderBy('nama_barang','Asc')->paginate(16);
        return view('home',compact('data'));
    }
}
