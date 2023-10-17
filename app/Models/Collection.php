<?php

namespace App\Models;

// 6706223009 - Muhammad Raihan Fahrifi

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];

    // protected $guarded = ['id'];
}
