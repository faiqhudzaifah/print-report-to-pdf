<?php

namespace App\Imports;

use App\Models\KRS;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KRSImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Debug: tampilkan isi dari $row
        // dd($row);

        $mahasiswa = Mahasiswa::where('nim', $row['nim'])->first();
        if (!$mahasiswa) {
            throw new \Exception('Mahasiswa dengan NIM ' . $row['nim'] . ' tidak ditemukan.');
        }

        $mataKuliah = MataKuliah::where('kode_mk', $row['kode_mk'])->first();
        if (!$mataKuliah) {
            throw new \Exception('Mata Kuliah dengan kode MK ' . $row['kode_mk'] . ' tidak ditemukan.');
        }

        return new KRS([
            'nim' => $mahasiswa->nim,
            'kode_mk' => $mataKuliah->kode_mk,
            'mata_kuliah' => $mataKuliah->mata_kuliah, // Pastikan ini diisi dengan nama mata kuliah
            'sks' => $mataKuliah->sks,
            'kelas' => $row['kelas'],
            'dosen_pengampu' => $row['dosen_pengampu'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
