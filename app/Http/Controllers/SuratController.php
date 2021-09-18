<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function toExport($surat, $id)
    {
        switch ($surat) {
            case 'blangko-kk':
                return redirect('api/blangko-kk/' . $id);
                break;
            case 'surat-ket-beda-nama':
                return redirect('api/surat-ket-beda-nama/' . $id);
                break;
            case 'surat-ket-belum-menikah':
                return redirect('api/surat-ket-belum-menikah/' . $id);
                break;
            case 'surat-ket-biodata':
                return redirect('api/surat-ket-biodata/' . $id);
                break;
            case 'surat-ket-domisili-dinsos':
                return redirect('api/surat-ket-domisili-dinsos/' . $id);
                break;
            case 'surat-ket-domisili':
                return redirect('api/surat-ket-domisili/' . $id);
                break;
            case 'surat-ket-manual':
                return redirect('api/surat-ket-manual/' . $id);
                break;
            case 'surat-ket-penghasilan':
                return redirect('api/surat-ket-penghasilan/' . $id);
                break;
            case 'surat-ket-pindah':
                return redirect('api/surat-ket-pindah/' . $id);
                break;
            case 'surat-ket-tidakmampu':
                return redirect('api/surat-ket-tidakmampu/' . $id);
                break;
            case 'surat-ket-tidakmampu-dinsos':
                return redirect('api/surat-ket-tidakmampu-dinsos/' . $id);
                break;
            case 'surat-ket-usaha':
                return redirect('api/surat-ket-usaha/' . $id);
                break;
            case 'surat-pengantar-pindah':
                return redirect('api/surat-pengantar-pindah/' . $id);
                break;
            case 'surat-pernyataan':
                return redirect('api/surat-pernyataan/' . $id);
                break;
            case 'surat-rekomendasi':
                return redirect('api/surat-rekomendasi/' . $id);
                break;
        }
    }
}
