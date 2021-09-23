<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganBiodataPenduduk;
use App\Http\Controllers\DataKepemilikanDokumenController;
use Illuminate\Http\Request;

class SuratKeteranganBiodataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganBiodataPenduduk::get();
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
        return SuratKeteranganBiodataPenduduk::count() > 0 ? SuratKeteranganBiodataPenduduk::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganBiodataPenduduk::create(array_merge($request->all(), ['no_surat' => ++$nosurat], ['keterangan' => "-"]));
        $dkd = new DataKepemilikanDokumenController();
        $request->request->add(['surat_keterangan_biodata_penduduk_no_surat' => $nosurat]);
        $dkd->store($request);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBiodataPenduduk  $suratKeteranganBiodataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganBiodataPenduduk::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganBiodataPenduduk  $suratKeteranganBiodataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganBiodataPenduduk $suratKeteranganBiodataPenduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganBiodataPenduduk  $suratKeteranganBiodataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganBiodataPenduduk $suratKeteranganBiodataPenduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganBiodataPenduduk  $suratKeteranganBiodataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganBiodataPenduduk $suratKeteranganBiodataPenduduk)
    {
        //
    }
}
