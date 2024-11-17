<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nim' => $row[0],
            'nama' => $row[1],
            'email' => $row[2],
            'alamat' => $row[3],
            'no_hp' => $row[4],
            'prodi' => $row[5],
            'semester' => $row[6],
        ]);
    }

}
