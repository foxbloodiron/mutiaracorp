<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function databarang()
    {
    	return view('master/databarang/databarang');
    }
    public function tambah_databarang()
    {
        return view('master/databarang/tambah_databarang');
    }
    public function edit_databarang()
    {
        return view('master/databarang/edit_databarang');
    }
    public function datasuplier()
    {
    	return view('master/datasuplier/datasuplier');
    }
    public function tambah_datasuplier()
    {
        return view('master/datasuplier/tambah_datasuplier');
    }
    public function edit_datasuplier()
    {
        return view('master/datasuplier/edit_datasuplier');
    }
    public function datacustomer()
    {
    	return view('master/datacustomer/datacustomer');
    }
    public function tambah_datacustomer()
    {
        return view('master/datacustomer/tambah_datacustomer');
    }
    public function edit_datacustomer()
    {
        return view('master/datacustomer/edit_datacustomer');
    }    
    public function datacustomerkontraktor()
    {
    	return view('master/datacustomerkontraktor/datacustomerkontraktor');
    }
    public function datapegawai()
    {
    	return view('master/datapegawai/datapegawai');
    }
    public function tambah_datapegawai()
    {
        return view('master/datapegawai/tambah_datapegawai');
    }
    public function edit_datapegawai()
    {
        return view('master/datapegawai/edit_datapegawai');
    }
    public function dataarmada()
    {
    	return view('master/dataarmada/dataarmada');
    }
    public function tambah_dataarmada()
    {
        return view('master/dataarmada/tambah_dataarmada');
    }
    public function edit_dataarmada()
    {
        return view('master/dataarmada/edit_dataarmada');
    }
    public function modal_dataarmada()
    {
        return view('master/dataarmada/modal_dataarmada');
    }
    public function datasatuan()
    {
        return view('master/datasatuan/datasatuan');
    }
    public function tambah_datasatuan()
    {
        return view('master/datasatuan/tambah_datasatuan');
    }
    public function edit_datasatuan()
    {
        return view('master/datasatuan/edit_datasatuan');
    }
}

