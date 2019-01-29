<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function barangmasuk()
    {
        return view('inventory/barangmasuk/barangmasuk');
    }
}
