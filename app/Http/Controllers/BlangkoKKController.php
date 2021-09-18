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
        $data = BlangkoKK::get();
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
        return BlangkoKK::count() > 0 ? BlangkoKK::max('no_surat') : 0;
    }

    public function store(Request $request)
    {
        $nosurat = $this->getNosurat();
        $data = BlangkoKK::create(array_merge($request->all(), ['no_surat' => ++$nosurat]));
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
        $data = BlangkoKK::where('no_surat', $id)->first();
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
