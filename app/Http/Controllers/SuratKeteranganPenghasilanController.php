<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganPenghasilan;
use Illuminate\Http\Request;

class SuratKeteranganPenghasilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganPenghasilan::get();
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
        return SuratKeteranganPenghasilan::count() > 0 ? SuratKeteranganPenghasilan::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganPenghasilan::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganPenghasilan  $suratKeteranganPenghasilan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganPenghasilan::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganPenghasilan  $suratKeteranganPenghasilan
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganPenghasilan $suratKeteranganPenghasilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganPenghasilan  $suratKeteranganPenghasilan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganPenghasilan $suratKeteranganPenghasilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganPenghasilan  $suratKeteranganPenghasilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganPenghasilan $suratKeteranganPenghasilan)
    {
        //
    }
}
