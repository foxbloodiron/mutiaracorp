<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function pembuatan_order()
    {
    	return view('produksi/orderproduksi/pembuatanorder/index');
    }
    public function penentuan_termin()
    {
        return view('produksi/orderproduksi/penentuantermin/index');
    }
    public function histori_order()
    {
        return view('produksi/orderproduksi/historiorder/index');
    }
    public function data_penerimaan()
    {
        return view('produksi/penerimaanbarang/datapenerimaan/index');
    }
    public function histori_penerimaan()
    {
        return view('produksi/penerimaanbarang/historipenerimaan/index');
    }
    public function pencatatan_pembayaran()
    {
        return view('produksi/pembayaran/pencatatanpembayaran/index');
    }
    public function histori_pembayaran()
    {
        return view('produksi/pembayaran/historipembayaran/index');
    }
    public function pencatatan_return()
    {
        return view('produksi/returnproduksi/pencatatanreturn/index');
    }
    public function perlakuan_return()
    {
        return view('produksi/returnproduksi/perlakuanreturn/index');
    }
    public function histori_return()
    {
        return view('produksi/returnproduksi/historireturn/index');
    }
}
