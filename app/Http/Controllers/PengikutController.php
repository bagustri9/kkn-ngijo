<?php

namespace App\Http\Controllers;

use App\Models\Pengikut;
use Illuminate\Http\Request;

class PengikutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengikut::get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $nosurat)
    {
        Pengikut::create(array_merge($request->all(), ['surat_keterangan_pindah_no_surat' => $nosurat]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pengikut::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengikut $pengikut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengikut $pengikut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengikut $pengikut)
    {
        //
    }
}
