<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Validator;

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

    // Master Variasi Satuan Produk

    public function variasisatuanproduk()
    {
        return view('masterdatautama.variasisatuan.index');
    }

    public function create_variasisatuanproduk()
    {
        return view('masterdatautama.variasisatuan.create');
    }

    public function edit_variasisatuanproduk()
    {
        return view('masterdatautama.variasisatuan.edit');
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

    // * Master Satuan

    public function datasatuan()
    {
        return view('masterdatautama/datasatuan/index');
    }
    public function list_datasatuan()
    {
      $datas = DB::table('m_unit')->get();
      return Datatables::of($datas)
        ->make(true);
    }
    public function create_datasatuan()
    {
      $id = DB::table('m_unit')->max('u_id') + 1;
      return view('masterdatautama/datasatuan/create', compact('id'));
    }
    public function store_datasatuan(Request $request)
    {
      // \LogActivity::addToLog('store-datasatuan');
      $messages = [
        'satuan_name.required' => 'Nama satuan masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'satuan_name' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }

      // start insert data
      DB::beginTransaction();
      try {
        DB::table('m_unit')
          ->insert([
            'u_id' => $request->satuan_id,
            'u_name' => $request->satuan_name
          ]);

        DB::commit();
        return response()->json([
          'status' => 'berhasil'
        ]);
      } catch (\Exception $e) {
        DB::rollback();
        return response()->json([
          'status' => 'gagal',
          'message' => $e
        ]);
      }
    }
    public function edit_datasatuan()
    {
      $data['data_satuan']
      return view('masterdatautama/datasatuan/edit');
    }
    public function update_datasatuan()
    {
      // \LogActivity::addToLog('store-datasatuan');
      $messages = [
        'satuan_name.required' => 'Nama satuan masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'satuan_name' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }

      // start insert data
      DB::beginTransaction();
      try {
        DB::table('m_unit')
          ->insert([
            'u_id' => $request->satuan_id,
            'u_name' => $request->satuan_name
          ]);

        DB::commit();
        return response()->json([
          'status' => 'berhasil'
        ]);
      } catch (\Exception $e) {
        DB::rollback();
        return response()->json([
          'status' => 'gagal',
          'message' => $e
        ]);
      }
    }
    public function delete_datasatuan($id)
    {
      // start insert data
      DB::beginTransaction();
      try {
        DB::table('m_unit')
          ->where('u_id', $id)
          ->delete();

        DB::commit();
        return response()->json([
          'status' => 'berhasil'
        ]);
      } catch (\Exception $e) {
        DB::rollback();
        return response()->json([
          'status' => 'gagal',
          'message' => $e
        ]);
      }
    }


    // =================================== End Master Data Utama ===================================


}
