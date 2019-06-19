<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat'];
}
