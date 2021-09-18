<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganManual;
use Illuminate\Http\Request;

class SuratKeteranganManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganManual::get();
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
        return SuratKeteranganManual::count() > 0 ? SuratKeteranganManual::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganManual::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganManual  $suratKeteranganManual
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganManual::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganManual  $suratKeteranganManual
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganManual $suratKeteranganManual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganManual  $suratKeteranganManual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganManual $suratKeteranganManual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganManual  $suratKeteranganManual
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganManual $suratKeteranganManual)
    {
        //
    }
}
