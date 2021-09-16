<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function toExport($surat, $id)
    {
        switch ($surat) {
            case 'surat-pengantar-pindah':
                return redirect('api/surat-pengantar-pindah/' . $id);
        }
    }
}
