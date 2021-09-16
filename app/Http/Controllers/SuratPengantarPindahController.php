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
    public function store(Request $request)
    {
        $surat = SuratPengantarPindah::count();
        $nosurat = 0;
        if ($surat > 0) {
            $nosurat = SuratPengantarPindah::max('no_surat');
        }
        $data = SuratPengantarPindah::create([
            "no_surat" => ++$nosurat,
            "warga_nik" => $request->warga_nik,
            "asal_desa" => $request->asal_desa,
            "kecamatan" => $request->kecamatan,
            "kabupaten_kota" => $request->kabupaten_kota,
            "provinsi" => $request->provinsi,
            "banyaknya" => $request->banyaknya,
            "keterangan" => $request->keterangan
        ]);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPengantarPindah  $suratPengantarPindah
     * @return \Illuminate\Http\Response
     */
    public function show(SuratPengantarPindah $suratPengantarPindah)
    {
        //
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
