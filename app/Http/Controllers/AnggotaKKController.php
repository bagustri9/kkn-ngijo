<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKK;
use Illuminate\Http\Request;

class AnggotaKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $no_kk)
    {
        AnggotaKK::create(array_merge($request->all(), ['nomor_kartu_keluarga' => $no_kk]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaKK  $anggotaKK
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaKK $anggotaKK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaKK  $anggotaKK
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaKK $anggotaKK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnggotaKK  $anggotaKK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnggotaKK $anggotaKK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaKK  $anggotaKK
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnggotaKK $anggotaKK)
    {
        //
    }
}
