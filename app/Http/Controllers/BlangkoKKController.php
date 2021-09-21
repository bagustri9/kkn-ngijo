<?php

namespace App\Http\Controllers;

use App\Models\BlangkoKK;
use Illuminate\Http\Request;

class BlangkoKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BlangkoKK::leftJoin('anggota_k_k_s', 'blangko_k_k_s.nomor_kartu_keluarga', '=', 'anggota_k_k_s.nomor_kartu_keluarga')->get();
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
        $data = BlangkoKK::create($request->all());
        for ($i = 0; $i < count($request->anggota); $i++) {
            $req = new Request();
            $req->replace($request->anggota[$i]);
            $anggota = new AnggotaKKController();
            $anggota->store($req, $request->nomor_kartu_keluarga);
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlangkoKK  $blangkoKK
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BlangkoKK::where('nomor_kartu_keluarga', $id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlangkoKK  $blangkoKK
     * @return \Illuminate\Http\Response
     */
    public function edit(BlangkoKK $blangkoKK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlangkoKK  $blangkoKK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlangkoKK $blangkoKK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlangkoKK  $blangkoKK
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlangkoKK $blangkoKK)
    {
        //
    }
}
