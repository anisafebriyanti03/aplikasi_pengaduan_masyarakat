<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    protected $table = 'masyarakats';

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'telp',
        'jenkel',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'province_id',
        'regency_id',
        'district_id',
        'village_id'
    ];

    protected $primaryKey = "nik";

    protected $hidden = "password";

    protected $guard ="masyarakat";

    public $incrementing = false;

    public function pengaduans()
    {
    	return $this->hasMany('App\Pengaduan');
    }
}
