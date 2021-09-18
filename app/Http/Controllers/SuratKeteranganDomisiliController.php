<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganDomisili;
use Illuminate\Http\Request;

class SuratKeteranganDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganDomisili::get();
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
        return SuratKeteranganDomisili::count() > 0 ? SuratKeteranganDomisili::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganDomisili::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganDomisili::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganDomisili $suratKeteranganDomisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganDomisili $suratKeteranganDomisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganDomisili $suratKeteranganDomisili)
    {
        //
    }
}
