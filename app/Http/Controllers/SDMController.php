<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SDMController extends Controller
{
    public function proses_rekruitmen()
    {
    	return view('sdm/prosesrekruitmen/index');
    }
    public function process()
    {
        return view('sdm/prosesrekruitmen/process');
    }
    public function preview()
    {
        return view('sdm/prosesrekruitmen/preview');
    }
    public function kinerja()
    {
    	return view('sdm/kinerjasdm/index');
    }
    public function absensi()
    {
    	return view('sdm/absensisdm/index');
    }
    public function penggajian()
    {
    	return view('sdm/penggajian/index');
    }
}
