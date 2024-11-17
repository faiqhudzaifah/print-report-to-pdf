<?php

namespace App\Imports;

use App\Models\MataKuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MataKuliahImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new MataKuliah([
            'kode_mk' => $row['kode_mk'],
            'mata_kuliah' => $row['mata_kuliah'],
            'sks' => $row['sks'],
            'dosen_pengampu' => $row['dosen_pengampu'],
        ]);
    }
}
