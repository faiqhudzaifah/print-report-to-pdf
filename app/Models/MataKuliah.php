<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliahs'; 
    protected $primaryKey = 'kode_mk'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'kode_mk',
        'mata_kuliah',
        'sks',
        'dosen_pengampu',
    ];

    public function krs()
    {
        return $this->hasMany(KRS::class, 'kode_mk', 'kode_mk');
    }
}
