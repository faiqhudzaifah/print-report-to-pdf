<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\MultiSheetImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function importData(Request $request)
    {
        $request->validate(['file' => 'required|mimes:xlsx']);

        // Proses impor menggunakan MultiSheetImport
        Excel::import(new MultiSheetImport, $request->file('file'));

        return back()->with('success', 'Data Mahasiswa dan Mata Kuliah berhasil diimpor!');
    }
}
