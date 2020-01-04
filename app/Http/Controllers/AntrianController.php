<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian;
use App\Pasien;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    private function getAntrian()
    {
        $antrian = Antrian::all();
        return $antrian[0]->antrian;
    }

    public function index()
    {
        return view('antrian.index')->with('antrian', $this->getAntrian());
    }

    public function antri(Request $request)
    {
        $antrian = $this->getAntrian();
        $nik = $request->nik;
        $pasien = Pasien::where('nik', $nik);
        if (!$pasien) {
            return redirect(url('/pasien/register?nik=', $nik));
        } else {
            DB::table('antrians')
                ->update(['antrian'=>$antrian+1]);
        }
    }
}
