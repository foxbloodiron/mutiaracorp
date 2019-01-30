<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function marketing()
    {
    	return view('marketing/manajemenmarketing/index');
    }
    public function penjualan()
    {
    	return view('marketing/penjualanpusat/index');
    }
    public function kosinyasi()
    {
    	return view('marketing/kosinyasipusat/index');
    }
    public function marketing_area()
    {
    	return view('marketing/marketingarea/index');
    }
    public function agen()
    {
    	return view('marketing/agen/index');
    }
}
