<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganPindah;
use Illuminate\Http\Request;

class SuratKeteranganPindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganPindah::get();
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
    public function store(Request $request)
    {
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganPindah  $suratKeteranganPindah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganPindah::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganPindah  $suratKeteranganPindah
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganPindah $suratKeteranganPindah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganPindah  $suratKeteranganPindah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganPindah $suratKeteranganPindah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganPindah  $suratKeteranganPindah
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganPindah $suratKeteranganPindah)
    {
        //
    }
}
