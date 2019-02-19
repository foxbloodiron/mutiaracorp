<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    //Input Transaksi
    public function index()
    {
        return view('keuangan/inputtransaksi/index');
    }

    public function create_transaksikas()
    {
        return view('keuangan/inputtransaksi/transaksikas/create');
    }

    public function create_transaksibank()
    {
        return view('keuangan/inputtransaksi/transaksibank/create');
    }
    
    public function create_transaksimemorial()
    {
        return view('keuangan/inputtransaksi/transaksimemorial/create');
    }
}
