<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Warga::paginate(10);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Warga::create($request->all());

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show($warga)
    {
        $data = Warga::whereRaw("UPPER(nik) LIKE '%" . strtoupper($warga) . "%'")
            ->orWhereRaw("UPPER(nama) LIKE '%" . strtoupper($warga) . "%'")
            ->get();
        return response()->json($data);
    }

    public function getWarga($nik)
    {
        $data = Warga::where('nik', $nik)->first();
        return response()->json($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $warga)
    {
        $data = Warga::where('nik', $warga)->update($request->all());
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy($warga)
    {
        $data = Warga::where('nik', $warga)->delete();
        return response()->json($data);
    }
}
