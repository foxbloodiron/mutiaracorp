<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Session;
use Validator;
use carbon\Carbon;
use CodeGenerator;
use Yajra\DataTables\DataTables;

class AgenController extends Controller
{
    /**
     * Validate request before execute command.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return 'error message' or '1'
     */
    public function validate_req(Request $request)
    {
      // start: validate data before execute
      $messages = [
        'name.required' => 'Nama agen masih kosong, silahkan isi terlebih dahulu !',
        'area_city.required' => 'Area Kota masih kosong, silahkan isi terlebih dahulu !',
        'telp.required' => 'No Telp masih kosong, silahkan isi terlebih dahulu !'
      ];
      $validator = Validator::make($request->all(), [
        'area_city' => 'required',
        'name' => 'required',
        'telp' => 'required'
      ], $messages);
      if($validator->fails())
      {
        return $validator->errors()->first();
      }
      else
      {
        return '1';
      }
    }

    /**
     * Return list of provinces.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProvinces()
    {
      $provinces = DB::table('m_wil_provinsi')
        ->orderBy('wp_name', 'asc')
        ->get();
      return $provinces;
    }

    /**
     * Return list of cities based on provinces.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCities($id)
    {
      $cities = DB::table('m_wil_kota')
        ->where('wc_provinsi', $id)
        ->orderBy('wc_name', 'asc')
        ->get();
      return $cities;
    }

    /**
     * Return list of districts based on cities.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDistricts($id)
    {
      $districts = DB::table('m_wil_kecamatan')
        ->where('wk_kota', $id)
        ->orderBy('wk_name', 'asc')
        ->get();
      return $districts;
    }

    /**
     * Return list of villages based on districts.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVillages($id)
    {
      $villages = DB::table('m_wil_desa')
        ->where('wd_kecamatan', $id)
        ->orderBy('wd_name', 'asc')
        ->get();
      return $villages;
    }

    /**
     * Return new code for item.
     *
     * @return String (code item)
     */
    public function getCode()
    {
      $basecode = DB::table('m_agen')
        ->orderBy('a_insert', 'desc')
        ->select('a_code')
        ->first();
      if (empty($basecode)) {
        $id = '0001';
      } else {
        $basecode = substr($basecode->a_code, -4, 4);
        $id = (int)$basecode + 1;
        $id = str_pad((string)$id, 4, '0', STR_PAD_LEFT);
      }
      $code = 'AG' . $id;

      return $code;
    }

    /**
     * Return DataTable list for view.
     *
     * @return Yajra/DataTables
     */
    public function getList()
    {
      $datas = DB::table('m_agen')->orderBy('a_name', 'asc')->get();
      return Datatables::of($datas)
        ->addIndexColumn()
        ->addColumn('action', function($datas) {
          return '<div class="btn-group btn-group-sm">
          <button class="btn btn-warning" onclick="EditAgen('.$datas->a_id.')" rel="tooltip" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button class="btn btn-danger" onclick="DeleteAgen('.$datas->a_id.')" rel="tooltip" data-placement="top" data-original-title="Hapus"><i class="fa fa-trash-o"></i></button>
          </div>';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('masterdatautama.agen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['code'] = $this->getCode();
      $data['provinces'] = $this->getProvinces();
      return view('masterdatautama.agen.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate request
      $isValidRequest = $this->validate_req($request);
      if ($isValidRequest != '1') {
        $errors = $isValidRequest;
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // start: execute insert data
      DB::beginTransaction();
      try {
        $id = DB::table('m_agen')->max('a_id') + 1;
        DB::table('m_agen')
          ->insert([
            'a_id' => $id,
            'a_code' => $request->code,
            'a_area' => $request->area_city,
            'a_name' => $request->name,
            'a_birthday' => Carbon::parse($request->birthday),
            'a_email' => $request->email,
            'a_telp' => $request->telp,
            'a_provinsi' => $request->address_prov,
            'a_kabupaten' => $request->address_city,
            'a_kecamatan' => $request->address_district,
            'a_desa' => $request->address_village,
            'a_address' => $request->address,
            'a_type' => $request->type,
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['agen'] = DB::table('m_agen')
        ->where('a_id', $id)
        ->first();
      $data['provinces'] = $this->getProvinces();
      return view('masterdatautama.agen.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // validate request
      $isValidRequest = $this->validate_req($request);
      if ($isValidRequest != '1') {
        $errors = $isValidRequest;
        return response()->json([
          'status' => 'invalid',
          'message' => $errors
        ]);
      }
      // start: execute update data
      DB::beginTransaction();
      try {
        DB::table('m_agen')
          ->where('a_id', $id)
          ->update([
            'a_area' => $request->area_city,
            'a_name' => $request->name,
            'a_birthday' => Carbon::parse($request->birthday),
            'a_email' => $request->email,
            'a_telp' => $request->telp,
            'a_address' => $request->address,
            'a_type' => $request->type,
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
    }
}
