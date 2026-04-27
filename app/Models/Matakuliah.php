<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'table_matakuliah';

     protected $fillable = [
        'Jurusan',
        'KodeMK',
        'NamaMK'
    ];
}