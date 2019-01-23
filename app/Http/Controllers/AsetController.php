<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function pengadaan()
    {
    	return view('aset/pengadaan/pengadaan');
    }
    public function penyusutan()
    {
    	return view('aset/penyusutan/penyusutan');
    }
}
