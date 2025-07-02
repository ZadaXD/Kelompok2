<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeRuang extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'deskripsi'];
}

