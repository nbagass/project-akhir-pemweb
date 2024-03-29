<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable=['kode_matkul','nama_matkul','nama_prodi','jumlah_sks'];
}
