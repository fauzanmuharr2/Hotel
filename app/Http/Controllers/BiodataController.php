<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $biodata = Biodata::all();
        return view('biodata.create' ,compact('biodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodata = new Biodata;
        $biodata->nama = $request->nama;
        $biodata->noktp = $request->noktp;
        $biodata->alamat = $request->alamat;
        $biodata->agama = $request->agama;
        $biodata->email = $request->email;
        $biodata->telepon = $request->telepon;
        $biodata->save();
        return redirect()->route('biodata.index')->with(['message' => 'Bioadata Berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->nama = $request->nama;
        $biodata->noktp = $request->noktp;
        $biodata->alamat = $request->alamat;
        $biodata->agama = $request->agama;
        $biodata->email = $request->email;
        $biodata->telepon = $request->telepon;
        $biodata->save();
        return redirect()->route('biodata.index')->with(['message' => 'Data biodata Berhasil disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        return redirect()->route('biodata.index')->with(['message' => 'Data biodata Berhasil dihapus']);
    }
}
