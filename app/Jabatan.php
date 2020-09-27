<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{   
    protected $table = 'jabatan';
    public $timestamp = false;
    protected $fillable = [
        'j_id',
        'j_nama_jabatan',
        'j_unit',
        'j_detail',
        'j_hak_akses',
        'j_active',
        'j_dibuat_oleh',
        'j_dibuat_pada',
        'j_diubah_oleh',
        'j_diubah_pada'
    ];
}
