<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanUser extends Model
{
    protected $table = 'jabatan_user';
    public $timestamp = false;
    protected $fillable = [
    'ju_id',
    'ju_jabatan_id',
    'ju_user_id',
    'ju_active',
    'ju_dibuat_oleh',
    'ju_dibuat_pada',
    'ju_diubah_oleh',
    'ju_diubah_pada'
    ];
}
