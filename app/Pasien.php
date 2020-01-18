<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function _rekmeds()
    {
        return $this->hasMany('App\Rekmed', 'pasien', 'nik');
    }
}
