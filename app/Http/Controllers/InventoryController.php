<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function pencatatan_barang_masuk()
    {
        return view('inventory/barangmasuk/pencatatanbarang/index');
    }
}
