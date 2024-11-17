<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    public function index()
    {
        $krsGrouped = KRS::with(['mahasiswa', 'mataKuliah'])
            ->get()
            ->groupBy('nim');

        return view('krs.index', compact('krsGrouped'));
    }

    public function print($nim)
    {
        $krs = KRS::with(['mahasiswa', 'mataKuliah'])->where('nim', $nim)->get();
        if ($krs->isEmpty()) {
            return redirect()->route('krs.index')->with('error', 'Data KRS tidak ditemukan.');
        }
        return view('krs.print', compact('krs', 'nim'));
    }
}
