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

    // =============================== Master Data Utama ===============================

    //  * Master Data Pegawai

    public function kelolapegawai()
    {
        return view('masterdatautama.datapegawai.kelolapegawai');
    }
    public function edit_kelolapegawai()
    {
        return view('masterdatautama.datapegawai.edit_kelolapegawai');
    }    
    public function tambah_kelolapegawai()
    {
        return view('masterdatautama.datapegawai.tambah_kelolapegawai');
    }     

    // * Master Data Produk

    public function dataproduk()
    {   
        return view('masterdatautama.produk.dataproduk');
    }    

    public function tambah_dataproduk()
    {   
        return view('masterdatautama.produk.tambah_dataproduk');
    }    

    // * Master Harga

    public function dataharga()
    {   
        return view('masterdatautama.harga.harga');
    }

    public function edit_dataharga()
    {   
        return view('masterdatautama.harga.edit_harga');
    }

    // * Master Suplier

    public function suplier()
    {   
        return view('masterdatautama.suplier.index');
    }

    public function tambah_suplier()
    {   
        return view('masterdatautama.suplier.tambah_suplier');
    }

    public function edit_suplier()
    {   
        return view('masterdatautama.suplier.edit_suplier');
    }

    public function produkpersuplier()
    {   
        return view('masterdatautama.suplier.produkpersuplier.index');
    }

    // * Master Cabang

    public function cabang()
    {   
        return view('masterdatautama.cabang.index');
    }
    public function tambah_cabang()
    {   
        return view('masterdatautama.cabang.tambah_cabang');
    }
    public function edit_cabang()
    {   
        return view('masterdatautama.cabang.edit_cabang');
    }

    // * Master Agen

    public function agen()
    {   
        return view('masterdatautama.agen.index');
    }
    public function tambah_agen()
    {   
        return view('masterdatautama.agen.tambah_agen');
    }
    public function edit_agen()
    {   
        return view('masterdatautama.agen.edit_agen');
    }

    public function datasatuan()
    {
        return view('masterdatautama/datasatuan/datasatuan');
    }
    public function tambah_datasatuan()
    {
        return view('masterdatautama/datasatuan/tambah_datasatuan');
    }
    public function edit_datasatuan()
    {
        return view('masterdatautama/datasatuan/edit_datasatuan');
    }


    // =================================== End Master Data Utama ===================================


}

