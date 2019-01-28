<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function manajemenhakakses()
    {
    	return view('system/manajemenhakakses/manajemenhakakses
    		');
    }
    public function manajemenuser()
    {
    	return view('system/manajemenuser/manajemenuser
    		');
    }
    public function profilperusahaan()
    {
    	return view('system/profilperusahaan/profilperusahaan
    		');
    }
    public function tahunfinansial()
    {
    	return view('system/tahunfinansial/tahunfinansial
    		');
    }
}
