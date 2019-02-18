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
    public function list_agen()
    {
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
        // ->addIndexColumn()
        ->make(true);
    }
    function get_code_agen()
    {
      // get max nota for add another 'perencanaan'
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
      // dd($id);
      $code = 'AG/' . Session::get('code_comp') . '/' . $id;

      return $code;
    }
    public function create_agen()
    {
      $code = $this->get_code_agen();
      return view('masterdatautama.agen.create', compact('code'));
    }
    public function store_agen(Request $request)
    {
      // \LogActivity::addToLog('store-datasatuan');
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

      // start insert data
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
            'a_insert' => Carbon::now()
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
    public function edit_agen()
    {
        return view('masterdatautama.agen.edit');
    }
    public function update_agen()
    {

    }
    public function delete_agen()
    {

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
