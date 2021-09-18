<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganBedaNama;
use Illuminate\Http\Request;

class SuratKeteranganBedaNamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganBedaNama::get();
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
    public function getNosurat()
    {
        return SuratKeteranganBedaNama::count() > 0 ? SuratKeteranganBedaNama::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganBedaNama::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBedaNama  $suratKeteranganBedaNama
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganBedaNama::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBedaNama  $suratKeteranganBedaNama
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganBedaNama $suratKeteranganBedaNama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganBedaNama  $suratKeteranganBedaNama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganBedaNama $suratKeteranganBedaNama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganBedaNama  $suratKeteranganBedaNama
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganBedaNama $suratKeteranganBedaNama)
    {
        //
    }
}
