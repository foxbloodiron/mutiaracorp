<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function marketing()
    {
    	return view('marketing/manajemenmarketing/index');
    }
    
    public function year_promotion_create()
    {
        return view('marketing/manajemenmarketing/tahunan/create');
    }

    public function year_promotion_edit()
    {
        return view('marketing/manajemenmarketing/tahunan/edit');
    }

    public function month_promotion_create()
    {
        return view('marketing/manajemenmarketing/bulanan/create');
    }

    public function month_promotion_edit()
    {
        return view('marketing/manajemenmarketing/bulanan/edit');
    }

    public function targetrealisasi()
    {
        return view('marketing/targetrealisasipenjualan/index');
    }

    public function targetrealisasi_create()
    {
        return view('marketing/targetrealisasipenjualan/targetrealisasi/create');
    }
    
    public function status_target()
    {
        return view('marketing/targetrealisasipenjualan/targetrealisasi/status');
    }

    public function penjualan()
    {
    	return view('marketing/penjualanpusat/index');
    }

    public function returnpenjualanagen_create()
    {
        return view('marketing/penjualanpusat/returnpenjualan/create');
    }

    public function konsinyasipusat()
    {
    	return view('marketing/konsinyasipusat/index');
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
