<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'email','alamat', 'no_hp', 'prodi', 'semester'];

    public function mataKuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'K_r_s');
    }
}

