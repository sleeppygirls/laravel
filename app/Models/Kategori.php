<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';             // memanggil nama table

    protected $primarykey = 'kode_kategori';    // primary key ny

    protected $fillable = [                     // nama kolom yang dapat di edit
        'kode_kategori',
        'nama',
        'ket',
    ];
}
