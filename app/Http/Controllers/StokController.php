<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokController extends Controller
{
    public function dataadonan()
    {
    	return view('stok/dataadonan/dataadonan');
    }
    public function tambah_dataadonan()
    {
        return view('stok/dataadonan/tambah_dataadonan');
    }
    public function edit_dataadonan()
    {
        return view('stok/dataadonan/edit_dataadonan');
    }
    public function opnamebahanbaku()
    {
    	return view('stok/opnamebahanbaku/opnamebahanbaku');
    }
    public function pencatatanbarangmasuk()
    {
    	return view('stok/pencatatanbarangmasuk/pencatatanbarangmasuk');
    }
    public function tambah_pencatatanbarangmasuk()
    {
        return view('stok/pencatatanbarangmasuk/tambah_pencatatanbarangmasuk');
    }
    public function penggunaanbahanbaku()
    {
    	return view('stok/penggunaanbahanbaku/penggunaanbahanbaku');
    }
    public function tambah_penggunaanbahanbaku()
    {
        return view('stok/penggunaanbahanbaku/tambah_penggunaanbahanbaku');
    }
    public function tipemenghitunghpp()
    {
    	return view('stok/tipemenghitunghpp/tipemenghitunghpp');
    }
}
