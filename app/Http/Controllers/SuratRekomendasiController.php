<?php

namespace App\Http\Controllers;

use App\Models\SuratRekomendasi;
use Illuminate\Http\Request;

class SuratRekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratRekomendasi::get();
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
        return SuratRekomendasi::count() > 0 ? SuratRekomendasi::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratRekomendasi::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratRekomendasi  $suratRekomendasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratRekomendasi::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratRekomendasi  $suratRekomendasi
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratRekomendasi $suratRekomendasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratRekomendasi  $suratRekomendasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratRekomendasi $suratRekomendasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratRekomendasi  $suratRekomendasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratRekomendasi $suratRekomendasi)
    {
        //
    }
}
