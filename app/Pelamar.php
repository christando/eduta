<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';

    protected $fillable = [
        'nik',
        'nama',
        'gender',
        'tingkat_pendidikan',
        'bidang_keahlian',
    ];
}
