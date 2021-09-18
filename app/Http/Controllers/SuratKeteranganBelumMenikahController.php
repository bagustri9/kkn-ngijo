<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganBelumMenikah;
use Illuminate\Http\Request;

class SuratKeteranganBelumMenikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganBelumMenikah::get();
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
        return SuratKeteranganBelumMenikah::count() > 0 ? SuratKeteranganBelumMenikah::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganBelumMenikah::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBelumMenikah  $suratKeteranganBelumMenikah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganBelumMenikah::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBelumMenikah  $suratKeteranganBelumMenikah
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganBelumMenikah $suratKeteranganBelumMenikah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganBelumMenikah  $suratKeteranganBelumMenikah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganBelumMenikah $suratKeteranganBelumMenikah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganBelumMenikah  $suratKeteranganBelumMenikah
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganBelumMenikah $suratKeteranganBelumMenikah)
    {
        //
    }
}
