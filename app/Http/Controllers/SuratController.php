<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function toExport($surat, $id)
    {
        return response()->json([
            'surat' => $surat,
            'id' => $id
        ]);
    }
}
