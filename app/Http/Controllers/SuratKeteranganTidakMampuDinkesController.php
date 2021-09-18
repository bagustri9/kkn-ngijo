<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganTidakMampuDinkes;
use Illuminate\Http\Request;

class SuratKeteranganTidakMampuDinkesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratKeteranganTidakMampuDinkes::get();
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
        return SuratKeteranganTidakMampuDinkes::count() > 0 ? SuratKeteranganTidakMampuDinkes::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratKeteranganTidakMampuDinkes::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeteranganTidakMampuDinkes  $suratKeteranganTidakMampuDinkes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratKeteranganTidakMampuDinkes::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeteranganTidakMampuDinkes  $suratKeteranganTidakMampuDinkes
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganTidakMampuDinkes $suratKeteranganTidakMampuDinkes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeteranganTidakMampuDinkes  $suratKeteranganTidakMampuDinkes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganTidakMampuDinkes $suratKeteranganTidakMampuDinkes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeteranganTidakMampuDinkes  $suratKeteranganTidakMampuDinkes
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeteranganTidakMampuDinkes $suratKeteranganTidakMampuDinkes)
    {
        //
    }
}
