<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // BARANG MASUK
    public function barangmasuk_index()
    {
        return view('inventory/barangmasuk/index');
    }

    public function barangmasuk_create()
    {
        return view('inventory/barangmasuk/create');
    }

    public function barangmasuk_edit()
    {
        return view('inventory/barangmasuk/edit');
    }
    // BARANG KELUAR

    public function barangkeluar_index()
    {
        return view('inventory/barangkeluar/index');
    }

    public function barangkeluar_create()
    {
        return view('inventory/barangkeluar/create');
    }

    public function barangkeluar_edit()
    {
        return view('inventory/barangkeluar/edit');
    }
    // DISTRIBUSI BARANG

    public function distribusibarang_index()
    {
        return view('inventory/distribusibarang/index');
    }

    public function distribusibarang_create()
    {
        return view('inventory/distribusibarang/create');
    }

    public function distribusibarang_edit()
    {
        return view('inventory/distribusibarang/edit');
    }
    // MANAJEMEN STOK

    public function manajemenstok_index()
    {
        return view('inventory/manajemenstok/index');
    }
    
    public function manajemenstok_create()
    {
        return view('inventory/manajemenstok/create');
    }

    public function manajemenstok_edit()
    {
        return view('inventory/manajemenstok/edit');
    }
    
       
}
