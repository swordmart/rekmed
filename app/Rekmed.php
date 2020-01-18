<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekmed extends Model
{
    public function _pasien()
    {
        return $this->belongsTo('App\Pasien', 'pasien', 'nik');
    }

    public function _dokter()
    {
        return $this->belongsTo('App\Dokter', 'dokter', 'nip');
    }
}
