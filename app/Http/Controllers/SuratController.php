<?php

namespace App\Http\Controllers;

use App\Models\SuratKeteranganBedaNama;
use Database\Factories\SuratKeteranganBelumMenikahFactory;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function getNoSurat($surat)
    {
        $controller = "";
        switch ($surat) {
            case 'blangko-kk':
                $controller = new BlangkoKKController();
                break;
            case 'surat-ket-beda-nama':
                $controller = new SuratKeteranganBedaNamaController();
                break;
            case 'surat-ket-belum-menikah':
                $controller = new SuratKeteranganBelumMenikahController();
                break;
            case 'surat-ket-biodata':
                $controller = new SuratKeteranganBiodataPendudukController();
                break;
            case 'surat-ket-domisili-dinsos':
                $controller = new SuratKeteranganDomisiliController();
                break;
            case 'surat-ket-domisili':
                $controller = new SuratKeteranganDomisiliPendudukController();
                break;
            case 'surat-ket-manual':
                $controller = new SuratKeteranganManualController();
                break;
            case 'surat-ket-penghasilan':
                $controller = new SuratKeteranganPenghasilanController();
                break;
            case 'surat-ket-pindah':
                $controller = new SuratKeteranganPindahController();
                break;
            case 'surat-ket-tidakmampu':
                $controller = new SuratKeteranganTidakMampuController();
                break;
            case 'surat-ket-tidakmampu-dinsos':
                $controller = new SuratKeteranganTidakMampuDinkesController();
                break;
            case 'surat-ket-usaha':
                $controller = new SuratKeteranganUsahaController();
                break;
            case 'surat-pengantar-pindah':
                $controller = new SuratPengantarPindahController();
                break;
            case 'surat-pernyataan':
                $controller = new SuratPernyataanController();
                break;
            case 'surat-rekomendasi':
                $controller = new SuratRekomendasiController();
                break;
        }
        return $controller->getNosurat() + 1;
    }
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
