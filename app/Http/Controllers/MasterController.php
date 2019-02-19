<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Validator;
use carbon\Carbon;
use Yajra\Datatables\Datatables;

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
    public function list_dataproduk()
    {
      // start: get data from db and return it using DataTable
      $datas = DB::table('m_item')->orderBy('i_name', 'asc')->where('i_isactive', 'Y')->get();
      return Datatables::of($datas)
        ->addColumn('type', function($datas) {
          if ($datas->i_type == 'BB') {
            return '<td>Bahan Baku</td>';
          } elseif ($datas->i_type == 'BP') {
            return '<td>Barang Produksi</td>';
          } elseif ($datas->i_type == 'BJ') {
            return '<td>Barang Jualan</td>';
          } else {
            return '<td>Lain-lain</td>';
          }
        })
        ->addColumn('action', function($datas) {
          return '<div class="btn-group btn-group-sm">
          <button class="btn btn-warning" onclick="EditDataproduk('.$datas->i_id.')" rel="tooltip" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger" onclick="DeleteDataproduk('.$datas->i_id.')" rel="tooltip" data-placement="top" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
          </div>';
        })
        ->rawColumns(['type', 'action'])
        ->make(true);
        // end: return DataTable
    }
    public function create_dataproduk()
    {
      return view('masterdatautama.produk.create');
    }
    public function get_codedataproduk()
    {
      // start: get max nota for add another 'perencanaan'
      $det = DB::table('m_item')->select('i_code')->first();
      if (empty($det)) {
        $id = 1;
      } else {
        $biggest = 0;
        $baseCodes = DB::table('m_item')->select('i_code')->get();
        foreach ($baseCodes as $baseCode) {
          $temp = explode('/', $baseCode->i_code, 3);
          // var_dump($temp);
          // dd($det);
          if($temp[2] > $biggest) {
            $biggest = (int)$temp[2];
          }
        }
        $id = $biggest + 1;
      }
      $code = 'IP/' . Session::get('code_comp') . '/' . $id;

      return $code;
      // end: return new code agen
    }
    public function store_dataproduk(Request $request)
    {
      // start: validate data before execute
      $messages = [
        'dataproduk_name.required' => 'Nama produk masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'dataproduk_name' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // end: validate
      // start: execute insert data
      DB::beginTransaction();
      try {
        $id = DB::table('m_item')->max('i_id') + 1;
        $code = $this->get_codedataproduk();

        DB::table('m_item')
          ->insert([
            'i_id' => $id,
            'i_code' => $code,
            'i_type' => $request->dataproduk_type,
            'i_codegroup' => null,
            'i_name' => $request->dataproduk_name,
            'i_unit1' => $request->dataproduk_satuanutama,
            'i_unit2' => $request->dataproduk_satuanalt1,
            'i_unit3' => $request->dataproduk_satuanalt2,
            'i_unitcompare1' => $request->dataproduk_isisatuanutama,
            'i_unitcompare2' => $request->dataproduk_isisatuanalt1,
            'i_unitcompare3' => $request->dataproduk_isisatuanalt2,
            'i_price' => null,
            'i_det' => $request->dataproduk_ket,
            'i_isactive' => "Y",
            'i_created_at' => Carbon::now(),
            'i_update_at' => Carbon::now(),
            'i_insert_by' => Session::get('code_comp'),
            'i_updated_by' => Session::get('code_comp')
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
      // end: execute insert data
    }
    public function edit_dataproduk($id)
    {
      $data['dataproduk'] = DB::table('m_item')
      ->where('i_id', $id)
      ->first();
      return view('masterdatautama.produk.edit', compact('data'));
    }
    public function update_dataproduk(Request $request, $id)
    {
        // start: validate data before execute
        $messages = [
          'dataproduk_name.required' => 'Nama produk masih kosong, silahkan isi terlebih dahulu !'
        ];
        $validator = Validator::make($request->all(), [
          'dataproduk_name' => 'required'
        ], $messages);
        if($validator->fails())
        {
          $errors = $validator->errors()->first();
          return response()->json([
            'status' => 'invalid',
            'message' => $errors
          ]);
        }
        // end: validate
        // start: execute update data
        DB::beginTransaction();
        try {
          DB::table('m_item')
            ->where('i_id', $id)
            ->update([
              'i_type' => $request->dataproduk_type,
              'i_codegroup' => null,
              'i_name' => $request->dataproduk_name,
              // 'i_unit1' => $request->dataproduk_satuanutama,
              'i_unit2' => $request->dataproduk_satuanalt1,
              'i_unit3' => $request->dataproduk_satuanalt2,
              // 'i_unitcompare1' => $request->dataproduk_isisatuanutama,
              'i_unitcompare2' => $request->dataproduk_isisatuanalt1,
              'i_unitcompare3' => $request->dataproduk_isisatuanalt2,
              'i_price' => null,
              'i_det' => $request->dataproduk_ket,
              'i_isactive' => "Y",
              'i_created_at' => Carbon::now(),
              'i_update_at' => Carbon::now(),
              'i_insert_by' => Session::get('code_comp'),
              'i_updated_by' => Session::get('code_comp')
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
        // end: execute update data
    }
    public function delete_dataproduk($id)
    {
      // start: execute update data (delete)
      DB::beginTransaction();
      try {
        DB::table('m_item')
          ->where('i_id', $id)
          ->update([
            'i_isactive' => "N",
            'i_update_at' => Carbon::now(),
            'i_updated_by' => Session::get('code_comp')
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
      // end: execute update data (delete)
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
    public function list_cabang()
    {
      // start: get data from db and return it using DataTable
      $datas = DB::table('m_company')->orderBy('c_nama', 'asc')->get();
      return Datatables::of($datas)
        ->addColumn('action', function($datas) {
          return '<div class="btn-group btn-group-sm">
          <button class="btn btn-warning" onclick="EditCabang('.$datas->c_id.')" rel="tooltip" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger" onclick="DeleteCabang('.$datas->c_id.')" rel="tooltip" data-placement="top" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
          </div>';
        })
        ->rawColumns(['action'])
        ->make(true);
        // end: return DataTable
    }
    public function get_codecabang()
    {

    }
    public function create_cabang()
    {
      $id = DB::table('m_company')->max('c_id') + 1;
      return view('masterdatautama.cabang.create', compact('id'));
    }
    public function store_cabang(Request $request)
    {
      // \LogActivity::addToLog('store-datasatuan');
      // start: validate data before execute
      $messages = [
        'cabang_name.required' => 'Nama cabang masih kosong, silahkan isi terlebih dahulu !',
        'cabang_address.required' => 'Alamat cabang masih kosong, silahkan isi terlebih dahulu !',
        'cabang_telp.required' => 'Nomor telp masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'cabang_name' => 'required',
        'cabang_address' => 'required',
        'cabang_telp' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // end: validate
      // start: execute insert data
      DB::beginTransaction();
      try {
        $id = DB::table('m_company')->max('c_id') + 1;
        DB::table('m_company')
          ->insert([
            'c_id' => $id,
            'c_nama' => $request->cabang_name,
            'c_alamat' => $request->cabang_address,
            'c_no_telp' => $request->cabang_telp,
            'c_type' => $request->cabang_type,
            'c_insert' => Carbon::now(),
            'c_update' => Carbon::now()
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
      // end: execute insert data
    }
    public function edit_cabang($id)
    {
      $data['cabang'] = DB::table('m_company')
      ->where('c_id', $id)
      ->first();
      return view('masterdatautama.cabang.edit', compact('data'));
    }
    public function update_cabang(Request $request, $id)
    {
      // start: validate data before execute
      $messages = [
        'cabang_name.required' => 'Nama cabang masih kosong, silahkan isi terlebih dahulu !',
        'cabang_address.required' => 'Alamat cabang masih kosong, silahkan isi terlebih dahulu !',
        'cabang_telp.required' => 'Nomor telp masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'cabang_name' => 'required',
        'cabang_address' => 'required',
        'cabang_telp' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // end: validate
      // start: execute update data
      DB::beginTransaction();
      try {
        DB::table('m_company')
          ->where('c_id', $id)
          ->update([
            'c_nama' => $request->cabang_name,
            'c_alamat' => $request->cabang_address,
            'c_no_telp' => $request->cabang_telp,
            'c_type' => $request->cabang_type,
            'c_update' => Carbon::now()
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
      // end: execute update data
    }
    public function delete_cabang($id)
    {
      // start: execute delete data
      DB::beginTransaction();
      try {
        DB::table('m_company')
          ->where('c_id', $id)
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
      // end: execute delete data
    }

    // * Master Agen

    public function agen()
    {
        return view('masterdatautama.agen.index');
    }
    public function list_agen()
    {
      // start: get data from db and return it using DataTable
      $datas = DB::table('m_agen')->orderBy('a_name', 'asc')->get();
      return Datatables::of($datas)
        ->addColumn('type', function($datas) {
          if ($datas->a_type == 'RT') {
            return '<td>Retail</td>';
          } elseif ($datas->a_type == 'GR') {
            return '<td>Grosir</td>';
          }
        })
        ->addColumn('action', function($datas) {
          return '<div class="btn-group btn-group-sm">
          <button class="btn btn-warning" onclick="EditAgen('.$datas->a_id.')" rel="tooltip" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger" onclick="DeleteAgen('.$datas->a_id.')" rel="tooltip" data-placement="top" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
          </div>';
        })
        ->rawColumns(['type', 'action'])
        ->make(true);
        // end: return DataTable
    }
    public function get_code_agen()
    {
      // start: get max nota for add another 'perencanaan'
      $det = DB::table('m_agen')->select('a_code')->first();
      if (empty($det)) {
        $id = 1;
      } else {
        $biggest = 0;
        $baseCodes = DB::table('m_agen')->select('a_code')->get();
        foreach ($baseCodes as $baseCode) {
          $temp = explode('/', $baseCode->a_code, 3);
          if($temp[2] > $biggest) {
            $biggest = (int)$temp[2];
          }
        }
        $id = $biggest + 1;
      }
      $code = 'AG/' . Session::get('code_comp') . '/' . $id;

      return $code;
      // end: return new code agen
    }
    public function create_agen()
    {
      $code = $this->get_code_agen();
      return view('masterdatautama.agen.create', compact('code'));
    }
    public function store_agen(Request $request)
    {
      // \LogActivity::addToLog('store-datasatuan');
      // start: validate data before execute
      $messages = [
        'agen_name.required' => 'Nama agen masih kosong, silahkan isi terlebih dahulu !',
        // 'agen_email.email' => 'Format email tidak valid, silahkan perbaiki terlebih dahulu !',
        'agen_telp.required' => 'Nomor telp masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'agen_name' => 'required',
        // 'agen_email' => 'email',
        'agen_telp' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // end: validate
      // start: execute insert data
      DB::beginTransaction();
      try {
        $id = DB::table('m_agen')->max('a_id') + 1;
        DB::table('m_agen')
          ->insert([
            'a_id' => $id,
            'a_code' => $request->agen_code,
            'a_name' => $request->agen_name,
            'a_birthday' => Carbon::parse($request->agen_birthday),
            'a_email' => $request->agen_email,
            'a_no_telp' => $request->agen_telp,
            'a_address' => $request->agen_address,
            // 'a_class' => $request->agen_class,
            'a_type' => $request->agen_type,
            'a_insert' => Carbon::now(),
            'a_update' => Carbon::now()
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
      // end: execute insert data
    }
    public function edit_agen($id)
    {
      $data['agen'] = DB::table('m_agen')
      ->where('a_id', $id)
      ->first();
      return view('masterdatautama.agen.edit', compact('data'));
    }
    public function update_agen(Request $request, $id)
    {
      // \LogActivity::addToLog('store-datasatuan');
      // start: validate data before execute
      $messages = [
        'agen_name.required' => 'Nama agen masih kosong, silahkan isi terlebih dahulu !',
        // 'agen_email.email' => 'Format email tidak valid, silahkan perbaiki terlebih dahulu !',
        'agen_telp.required' => 'Nomor telp masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'agen_name' => 'required',
        // 'agen_email' => 'email',
        'agen_telp' => 'required'
      ], $messages);
      if($validator->fails())
      {
        $errors = $validator->errors()->first();
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // end: validate
      // start: execute update data
      DB::beginTransaction();
      try {
        DB::table('m_agen')
          ->where('a_id', $id)
          ->update([
            'a_name' => $request->agen_name,
            'a_birthday' => Carbon::parse($request->agen_birthday),
            'a_email' => $request->agen_email,
            'a_no_telp' => $request->agen_telp,
            'a_address' => $request->agen_address,
            // 'a_class' => $request->agen_class,
            'a_type' => $request->agen_type,
            'a_update' => Carbon::now()
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
      // end: execute insert data
    }
    public function delete_agen($id)
    {
      // start: execute delete data
      DB::beginTransaction();
      try {
        DB::table('m_agen')
          ->where('a_id', $id)
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
      // end: execute delete data
    }

    // * Master Satuan

    public function datasatuan()
    {
      return view('masterdatautama/datasatuan/index');
    }
    public function list_datasatuan()
    {
      $datas = DB::table('m_unit')->orderBy('u_name', 'asc')->get();
      return Datatables::of($datas)
        ->addColumn('action', function($datas) {
          return '<div class="btn-group btn-group-sm">
          <button class="btn btn-warning" onclick="EditDatasatuan('.$datas->u_id.')" rel="tooltip" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger" onclick="DeleteDatasatuan('.$datas->u_id.')" rel="tooltip" data-placement="top" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
          </div>';
        })
        ->rawColumns(['action'])
        // ->addIndexColumn()
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
      // start: validate data before execute
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
      // end: validate
      // start: execute insert data
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
      // end: execute insert data
    }
    public function edit_datasatuan($id)
    {
      $data['datasatuan'] = DB::table('m_unit')
      ->where('u_id', $id)
      ->first();
      return view('masterdatautama/datasatuan/edit', compact('data'));
    }
    public function update_datasatuan(Request $request, $id)
    {
      // \LogActivity::addToLog('store-datasatuan');
      // start: validate data before execute
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
      // end: validate
      // start: execute update data
      DB::beginTransaction();
      try {
        DB::table('m_unit')
          ->where('u_id', $id)
          ->update([
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
      // end: execute insert data
    }
    public function delete_datasatuan($id)
    {
      // start: execute delete data
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
      // end: execute delete data
    }


    // =================================== End Master Data Utama ===================================


}
