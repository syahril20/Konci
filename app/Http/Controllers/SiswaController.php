<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //
    public function index(){
        $Siswa = DB::table('Siswa')->get();
            return view('index', ['Siswa' => $Siswa]);
        }
}
