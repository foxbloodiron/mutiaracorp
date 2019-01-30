<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function barangmasuk()
    {
        return view('inventory/barangmasuk/barangmasuk');
    }

    public function barangkeluar()
    {
        return view('inventory/barangkeluar/barangkeluar');
    }
    public function distribusibarang()
    {
        return view('inventory/distribusibarang/distribusibarang');
    }
    public function manajemenstok()
    {
        return view('inventory/manajemenstok/manajemenstok');
    }
    
    
       
}
