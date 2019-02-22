<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;

class CodeGenerator extends Controller
{
    public static function code($table, $field, $mulai, $panjang, $lebar, $awalan, $separator)
    {
        $code = DB::table($table)->where(DB::raw('substr(' . $field . ', ' . $mulai . ', ' . $panjang . ')'), '=', Carbon::now('Asia/Jakarta')->format('d/m/Y'));

        $countData = $code->count();

        $nomor = $countData + 1;


        if ($lebar > 0) {
            $angka = $awalan . $separator . str_pad($nomor, $lebar, "0", STR_PAD_LEFT) . '/' . date('d/m/Y');
        } else {
            $angka = $awalan . $separator . $nomor . '/' . date('d/m/Y');
        }

        return $angka;
    }
}
