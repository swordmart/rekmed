<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekmed;

class IndexController extends Controller
{
    public function index()
    {
        $rekmeds = Rekmed::where('stage', 1)->get();
        $rekmeds2 = Rekmed::where('stage', 2)->get();
        return view('index')->with('rekmeds', $rekmeds)->with('rekmeds2', $rekmeds2);
    }

    public function proses(Request $request, $id)
    {
        $rekmed = Rekmed::where('id', $id)->get()->first();
        return view('proses')->with('rekmed', $rekmed);
    }

    public function prosesdata(Request $request, $id)
    {
        $rekmed = Rekmed::where('id', $id)->get()->first();
        $rekmed->diagnosa = $request->get('diagnosa');
        $rekmed->poli = $request->get('poli');
        $rekmed->dokter = $request->get('dokter');
        $rekmed->stage = $rekmed->stage+1;
        $rekmed->save();
        return redirect('/');
    }

    public function prosesdokter(Request $request, $id)
    {
        $rekmed = Rekmed::where('id', $id)->get()->first();
        return view('prosesdokter')->with('rekmed', $rekmed);
    }

    public function prosesdatadokter(Request $request, $id)
    {
        $rekmed = Rekmed::where('id', $id)->get()->first();
        $rekmed->diagnosa = $request->get('diagnosa');
        $rekmed->resep = $request->get('resep');
        $rekmed->stage = $rekmed->stage+1;
        $rekmed->save();
        return redirect('/');
    }
}
