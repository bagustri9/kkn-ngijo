<?php

namespace App\Http\Controllers;

use App\Models\SuratPengantarPindah;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuratPengantarPindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratPengantarPindah::get();
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
        return SuratPengantarPindah::count() > 0 ? SuratPengantarPindah::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratPengantarPindah::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPengantarPindah  $suratPengantarPindah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratPengantarPindah::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPengantarPindah  $suratPengantarPindah
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratPengantarPindah $suratPengantarPindah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratPengantarPindah  $suratPengantarPindah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratPengantarPindah $suratPengantarPindah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPengantarPindah  $suratPengantarPindah
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratPengantarPindah $suratPengantarPindah)
    {
        //
    }
}
