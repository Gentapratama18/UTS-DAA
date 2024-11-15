<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $fillable = [
        'nama',
        'jenis',
        'nominal',
        'deskripsi',
        'tanggal_calon_beasiswa_daftar',
        'jurusan',
        'status'
    ];
}
