<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    $Siswa = DB::table('Siswa')->get();
        return view('index', ['Siswa' => $Siswa]);
}
