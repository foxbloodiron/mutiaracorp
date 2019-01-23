<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function perencanaanpengiriman()
    {
    	return view('pengiriman/perencanaanpengiriman/perencanaanpengiriman');
    }
    public function suratjalan()
    {
    	return view('pengiriman/suratjalan/suratjalan');
    }
    public function upahboronganpengiriman()
    {
    	return view('pengiriman/upahboronganpengiriman/upahboronganpengiriman');
    }
    public function proses_upahboronganpengiriman()
    {
        return view('pengiriman/upahboronganpengiriman/proses_upahboronganpengiriman');
    }
}
