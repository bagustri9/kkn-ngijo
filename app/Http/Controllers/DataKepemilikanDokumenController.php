<?php

namespace App\Http\Controllers;

use App\Models\DataKepemilikanDokumen;
use Illuminate\Http\Request;

class DataKepemilikanDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataKepemilikanDokumen::get();
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
        $data = DataKepemilikanDokumen::create($request->all());
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKepemilikanDokumen  $dataKepemilikanDokumen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataKepemilikanDokumen::where('no_surat', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKepemilikanDokumen  $dataKepemilikanDokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKepemilikanDokumen $dataKepemilikanDokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKepemilikanDokumen  $dataKepemilikanDokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKepemilikanDokumen $dataKepemilikanDokumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKepemilikanDokumen  $dataKepemilikanDokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKepemilikanDokumen $dataKepemilikanDokumen)
    {
        //
    }
}
