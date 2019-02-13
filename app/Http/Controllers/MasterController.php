<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    // =============================== Master Data Utama ===============================

    //  * Master Data Pegawai

    public function kelolapegawai()
    {
        return view('masterdatautama.datapegawai.index');
    }
    public function edit_kelolapegawai()
    {
        return view('masterdatautama.datapegawai.edit');
    }    
    public function create_kelolapegawai()
    {
        return view('masterdatautama.datapegawai.create');
    }     

    // * Master Data Produk

    public function dataproduk()
    {   
        return view('masterdatautama.produk.index');
    }    

    public function create_dataproduk()
    {   
        return view('masterdatautama.produk.create');
    }    

    public function edit_dataproduk()
    {   
        return view('masterdatautama.produk.edit');
    }  

    // * Master Harga

    public function dataharga()
    {   
        return view('masterdatautama.harga.index');
    }

    public function create_dataharga()
    {   
        return view('masterdatautama.harga.create');
    }

    public function edit_dataharga()
    {   
        return view('masterdatautama.harga.edit');
    }

    // * Master Suplier

    public function suplier()
    {   
        return view('masterdatautama.suplier.index');
    }

    public function create_suplier()
    {   
        return view('masterdatautama.suplier.create');
    }

    public function edit_suplier()
    {   
        return view('masterdatautama.suplier.edit');
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
    public function create_cabang()
    {   
        return view('masterdatautama.cabang.create');
    }
    public function edit_cabang()
    {   
        return view('masterdatautama.cabang.edit');
    }

    // * Master Agen

    public function agen()
    {   
        return view('masterdatautama.agen.index');
    }
    public function create_agen()
    {   
        return view('masterdatautama.agen.create');
    }
    public function edit_agen()
    {   
        return view('masterdatautama.agen.edit');
    }

    public function datasatuan()
    {
        return view('masterdatautama/datasatuan/index');
    }
    public function create_datasatuan()
    {
        return view('masterdatautama/datasatuan/create');
    }
    public function edit_datasatuan()
    {
        return view('masterdatautama/datasatuan/edit');
    }


    // =================================== End Master Data Utama ===================================


}

