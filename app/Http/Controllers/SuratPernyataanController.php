<?php

namespace App\Http\Controllers;

use App\Models\SuratPernyataan;
use Illuminate\Http\Request;

class SuratPernyataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SuratPernyataan::get();
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
        return SuratPernyataan::count() > 0 ? SuratPernyataan::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = SuratPernyataan::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratPernyataan  $suratPernyataan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuratPernyataan::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratPernyataan  $suratPernyataan
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratPernyataan $suratPernyataan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratPernyataan  $suratPernyataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratPernyataan $suratPernyataan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratPernyataan  $suratPernyataan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratPernyataan $suratPernyataan)
    {
        //
    }
}
