<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function order_produksi()
    {
    	return view('produksi/orderproduksi/index');
    }
    public function tambah_produksi()
    {
        return view('produksi/orderproduksi/create');
    }
    public function edit_produksi()
    {
        return view('produksi/orderproduksi/edit');
    }
    public function penerimaan_barang()
    {
    	return view('produksi/penerimaanbarang/index');
    }
    public function tambah_penerimaan_barang()
    {
        return view('produksi/penerimaanbarang/tambah_penerimaanbarang');
    }    
    public function pembayaran()
    {
    	return view('produksi/pembayaran/index');
    }
    public function return_produksi()
    {
    	return view('produksi/returnproduksi/index');
    }
    public function tambah_return_produksi()
    {
        return view('produksi/returnproduksi/tambah_returnproduksi');
    }
}
