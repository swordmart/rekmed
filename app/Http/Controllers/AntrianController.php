<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian;
use App\Pasien;
use Illuminate\Support\Facades\DB;
use App\Rekmed;

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
        $nik = $request->get('nik');
        $pasien = Pasien::where('nik', $nik)->get();
        if ($pasien->count() < 1) {
            return redirect(url('/pasien/register?nik='.$nik));
        } else {
            $p = $pasien->first();
            $rekmed = new Rekmed();
            $rekmed->pasien = $p->nik;
            $rekmed->tanggal = date('Y-m-d H:i:s');
            $rekmed->save();
            DB::table('antrians')
                ->update(['antrian'=>$antrian+1]);
            $nomor = $antrian;
            return view('antrian.redirect')->with('nomor', $nomor);
        }
    }
}
