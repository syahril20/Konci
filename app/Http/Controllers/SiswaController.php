<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
    $Siswa = DB::table('Siswa')->get();
        return view('index', ['Siswa' => $Siswa]);
    }
}
