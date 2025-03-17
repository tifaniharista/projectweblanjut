<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', [
            'karyawan' => Karyawan::latest()->get()
        ]);
    }
}
