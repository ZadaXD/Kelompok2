<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeBarang extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'merk', 'lokasi', 'kondisi', 'keterangan'];
}

