<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perawat;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawats = Perawat::all();
        return view('perawat.index')->with('perawats', $perawats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perawat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perawat = new Perawat();
        $perawat->nip = $request->nip;
        $perawat->nama = $request->nama;
        $perawat->alamat = $request->alamat;
        $perawat->jabatan = $request->jabatan;
        $perawat->save();
        return redirect(url('/perawat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perawat = Perawat::find($id);
        return view('perawat.edit')->with('perawat', $perawat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perawat = Perawat::find($id);
        $perawat->nip = $request->nip;
        $perawat->nama = $request->nama;
        $perawat->alamat = $request->alamat;
        $perawat->jabatan = $request->jabatan;
        $perawat->save();
        return redirect(url('/perawat'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perawat::destroy($id);
        return redirect(url('/perawat'));
    }
}
