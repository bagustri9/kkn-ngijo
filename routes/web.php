<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return '<pre>
    +--------+-------------------------------------------+------------+----------------------------------------------------------------+----------+------------+
    | Verb   | Path                                      | NamedRoute | Controller                                                     | Action   | Middleware |
    +--------+-------------------------------------------+------------+----------------------------------------------------------------+----------+------------+
    | GET    | /                                         |            | None                                                           | Closure  |            |
    | GET    | /api/warga                                |            | App\Http\Controllers\WargaController                           | index    |            |
    | GET    | /api/warga/{warga}                        |            | App\Http\Controllers\WargaController                           | show     |            |
    | POST   | /api/warga                                |            | App\Http\Controllers\WargaController                           | store    |            |
    | POST   | /api/warga/{warga}                        |            | App\Http\Controllers\WargaController                           | update   |            |
    | DELETE | /api/warga/{warga}/delete                 |            | App\Http\Controllers\WargaController                           | destroy  |            |
    | POST   | /api/api/blangko-kk                       |            | App\Http\Controllers\BlangkoKKController                       | store    |            | field : &quot;warga_nik&quot;,&quot;jenis_permohonan&quot;,&quot;nama_kepala_keluarga&quot;,&quot;nomor_kartu_keluarga&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;jalan&quot;,&quot;desa_kelurahan&quot;,&quot;kecamatan&quot;,&quot;kabupaten_kota&quot;,&quot;jumlah_keluarga&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;hubungan_keluarga&quot;,&quot;anak_ke&quot;,&quot;nomor_akta&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;status_kawin&quot;,&quot;nomor_tangal_akta_kawin_cerai&quot;,&quot;agama&quot;,&quot;golongan_darah&quot;,&quot;pendidikan_terakhir&quot;,&quot;tempat_tanggal_lahir&quot;,&quot;nomor_dan_tanggal_surat_pindah&quot;,&quot;kelainan_khusus&quot;,&quot;akseptor_KB&quot;,&quot;nama_ibu&quot;,&quot;nik_ibu&quot;,&quot;nama_ayah&quot;,&quot;nik_ayah&quot;,&quot;tempat_tinggal&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/blangko-kk/{id}                  |            | App\Http\Controllers\BlangkoKKController                       | show     |            |
    | POST   | /api/api/surat-ket-beda-nama              |            | App\Http\Controllers\SuratKeteranganBedaNamaController         | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&#39;tanggal_lahir&#39;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-beda-nama/{id}         |            | App\Http\Controllers\SuratKeteranganBedaNamaController         | show     |            |
    | POST   | /api/api/surat-ket-belum-menikah          |            | App\Http\Controllers\SuratKeteranganBelumMenikahController     | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-belum-menikah/{id}     |            | App\Http\Controllers\SuratKeteranganBelumMenikahController     | show     |            |
    | POST   | /api/surat-ket-biodata                    |            | App\Http\Controllers\SuratKeteranganBiodataPendudukController  | store    |            | field : &#39;warga_nik&#39;,&#39;no_kartu_keluarga&#39;,&#39;nama&#39;,&#39;jenis_kelamin&#39;,&#39;tempat_lahir&#39;,&#39;tanggal_lahir&#39;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;hubungan_dalam_keluarga&quot;,&quot;penyandang_disabilitas&quot;,&quot;nama_lengkap_ibu&quot;,&quot;nik_ibu&quot;,&quot;nama_lengkap_ayah&quot;,&quot;nik_ayah&quot;,&quot;keterangan&quot;,&#39;no_paspor&#39;,&#39;tanggal_berakhir_paspor&#39;,&#39;no_akta_kelahiran&#39;,&#39;tanggal_cetak_akta_kelahiran&#39;,&#39;no_akta_perkawinan&#39;,&#39;tanggal_cetak_akta_perkawinan&#39;,&#39;no_akta_cerai&#39;,&#39;tanggal_cetak_akta_cerai&#39;,
    | GET    | /api/surat-ket-biodata/{id}               |            | App\Http\Controllers\SuratKeteranganBiodataPendudukController  | show     |            |
    | POST   | /api/api/surat-ket-domisili-dinsos        |            | App\Http\Controllers\SuratKeteranganDomisiliController         | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;pekerjaan&quot;,&quot;kewarganegaraan&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-domisili-dinsos/{id}   |            | App\Http\Controllers\SuratKeteranganDomisiliController         | show     |            |
    | POST   | /api/api/surat-ket-domisili               |            | App\Http\Controllers\SuratKeteranganDomisiliPendudukController | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,&quot;status_perkawinan&quot;,
    | GET    | /api/api/surat-ket-domisili/{id}          |            | App\Http\Controllers\SuratKeteranganDomisiliPendudukController | show     |            |
    | POST   | /api/api/surat-ket-manual                 |            | App\Http\Controllers\SuratKeteranganManualController           | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&#39;tanggal_lahir&#39;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-manual/{id}            |            | App\Http\Controllers\SuratKeteranganManualController           | show     |            |
    | POST   | /api/api/surat-ket-penghasilan            |            | App\Http\Controllers\SuratKeteranganPenghasilanController      | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&#39;tanggal_lahir&#39;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-penghasilan/{id}       |            | App\Http\Controllers\SuratKeteranganPenghasilanController      | show     |            |
    | POST   | /api/api/surat-ket-pindah                 |            | App\Http\Controllers\SuratKeteranganPindahController           | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;jalan&quot;,&quot;desa_kelurahan&quot;,&quot;kecamatan&quot;,&quot;kabupaten_kota&quot;,&quot;provinsi&quot;,&quot;kode_pos&quot;,&quot;alasan_pindah&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-pindah/{id}            |            | App\Http\Controllers\SuratKeteranganPindahController           | show     |            |
    | POST   | /api/api/surat-ket-tidakmampu             |            | App\Http\Controllers\SuratKeteranganTidakMampuController       | store    |            |field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&#39;tanggal_lahir&#39;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-tidakmampu/{id}        |            | App\Http\Controllers\SuratKeteranganTidakMampuController       | show     |            |
    | POST   | /api/api/surat-ket-tidakmampu-dinsos      |            | App\Http\Controllers\SuratKeteranganTidakMampuDinsosController | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;pekerjaan&quot;,&quot;kewarganegaraan&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-tidakmampu-dinsos/{id} |            | App\Http\Controllers\SuratKeteranganTidakMampuDinsosController | show     |            |
    | POST   | /api/api/surat-ket-usaha                  |            | App\Http\Controllers\SuratKeteranganUsahaController            | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;pekerjaan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-ket-usaha/{id}             |            | App\Http\Controllers\SuratKeteranganUsahaController            | show     |            |
    | POST   | /api/surat-pengantar-pindah               |            | App\Http\Controllers\SuratPengantarPindahController            | store    |            | field : &quot;warga_nik&quot;,&nbsp;&quot;nama&quot;,&nbsp;&quot;asal_desa&quot;,&nbsp;&quot;kecamatan&quot;,&nbsp;&quot;kabupaten_kota&quot;,&nbsp;&quot;provinsi&quot;,&nbsp;&quot;banyaknya&quot;,&nbsp;&quot;keterangan&quot;
    | GET    | /api/surat-pengantar-pindah/{id}          |            | App\Http\Controllers\SuratPengantarPindahController            | show     |            |
    | POST   | /api/api/surat-pernyataan                 |            | App\Http\Controllers\SuratPernyataanController                 | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;pekerjaan&quot;,&quot;kewarganegaraan&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-pernyataan/{id}            |            | App\Http\Controllers\SuratPernyataanController                 | show     |            |
    | POST   | /api/api/surat-rekomendasi                |            | App\Http\Controllers\SuratRekomendasiController                | store    |            | field : &quot;warga_nik&quot;,&quot;nama&quot;,&quot;jenis_kelamin&quot;,&quot;tempat_lahir&quot;,&quot;tanggal_lahir&quot;,&quot;agama&quot;,&quot;status_perkawinan&quot;,&quot;alamat&quot;,&quot;RT&quot;,&quot;RW&quot;,&quot;dusun&quot;,&quot;pekerjaan&quot;,&quot;kewarganegaraan&quot;,&quot;perihal&quot;,&quot;keterangan&quot;,
    | GET    | /api/api/surat-rekomendasi/{id}           |            | App\Http\Controllers\SuratRekomendasiController                | show     |            |
    | GET    | /api/to-export/{surat}/{id}               |            | App\Http\Controllers\SuratController                           | toExport |            | surat : blangko-kk, surat-ket-beda-nama, surat-ket-belum-menikah, surat-ket-biodata, surat-ket-domisili-dinsos, surat-ket-domisili, surat-ket-manual, surat-ket-penghasilan, surat-ket-pindah, surat-ket-tidakmampu, surat-ket-tidakmampu-dinsos, surat-ket-usaha, surat-pengantar-pindah, surat-pernyataan, surat-rekomendasi
    +--------+-------------------------------------------+------------+----------------------------------------------------------------+----------+------------+</pre>      
    ';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    /* Route Warga */
    $router->get('warga/', ['uses' => 'WargaController@index']);
    $router->get('warga/{warga}', ['uses' => 'WargaController@show']);
    $router->post('warga/', ['uses' => 'WargaController@store']);
    $router->post('warga/{warga}', ['uses' => 'WargaController@update']);
    $router->delete('warga/{warga}/delete', ['uses' => 'WargaController@destroy']);

    /* Route Blangko KK */
    $router->post('api/blangko-kk', ['uses' => 'BlangkoKKController@store']);
    $router->get('api/blangko-kk/{id}', ['uses' => 'BlangkoKKController@show']);

    /* Route Surat Keterangan Beda Nama */
    $router->post('api/surat-ket-beda-nama', ['uses' => 'SuratKeteranganBedaNamaController@store']);
    $router->get('api/surat-ket-beda-nama/{id}', ['uses' => 'SuratKeteranganBedaNamaController@show']);

    /* Route Surat Keterangan Belum Menikah */
    $router->post('api/surat-ket-belum-menikah', ['uses' => 'SuratKeteranganBelumMenikahController@store']);
    $router->get('api/surat-ket-belum-menikah/{id}', ['uses' => 'SuratKeteranganBelumMenikahController@show']);

    /* Route Surat Keterangan Biodata Penduduk */
    $router->post('surat-ket-biodata/', ['uses' => 'SuratKeteranganBiodataPendudukController@store']);
    $router->get('surat-ket-biodata/{id}', ['uses' => 'SuratKeteranganBiodataPendudukController@show']);

    /* Route Surat Keterangan Domisili Dinsos */
    $router->post('api/surat-ket-domisili-dinsos', ['uses' => 'SuratKeteranganDomisiliController@store']);
    $router->get('api/surat-ket-domisili-dinsos/{id}', ['uses' => 'SuratKeteranganDomisiliController@show']);

    /* Route Surat Keterangan Domisili */
    $router->post('api/surat-ket-domisili', ['uses' => 'SuratKeteranganDomisiliPendudukController@store']);
    $router->get('api/surat-ket-domisili/{id}', ['uses' => 'SuratKeteranganDomisiliPendudukController@show']);

    /* Route Surat Keterangan Manual */
    $router->post('api/surat-ket-manual', ['uses' => 'SuratKeteranganManualController@store']);
    $router->get('api/surat-ket-manual/{id}', ['uses' => 'SuratKeteranganManualController@show']);

    /* Route Surat Keterangan Penghasilan */
    $router->post('api/surat-ket-penghasilan', ['uses' => 'SuratKeteranganPenghasilanController@store']);
    $router->get('api/surat-ket-penghasilan/{id}', ['uses' => 'SuratKeteranganPenghasilanController@show']);

    /* Route Surat Keterangan Pindah */
    $router->post('api/surat-ket-pindah', ['uses' => 'SuratKeteranganPindahController@store']);
    $router->get('api/surat-ket-pindah/{id}', ['uses' => 'SuratKeteranganPindahController@show']);

    /* Route Surat Keterangan TidakMampu */
    $router->post('api/surat-ket-tidakmampu', ['uses' => 'SuratKeteranganTidakMampuController@store']);
    $router->get('api/surat-ket-tidakmampu/{id}', ['uses' => 'SuratKeteranganTidakMampuController@show']);

    /* Route Surat Keterangan TidakMampu Dinsos */
    $router->post('api/surat-ket-tidakmampu-dinsos', ['uses' => 'SuratKeteranganTidakMampuDinsosController@store']);
    $router->get('api/surat-ket-tidakmampu-dinsos/{id}', ['uses' => 'SuratKeteranganTidakMampuDinsosController@show']);

    /* Route Surat Keterangan Usaha */
    $router->post('api/surat-ket-usaha', ['uses' => 'SuratKeteranganUsahaController@store']);
    $router->get('api/surat-ket-usaha/{id}', ['uses' => 'SuratKeteranganUsahaController@show']);

    /* Route Surat Pengantar Pindah */
    $router->post('surat-pengantar-pindah/', ['uses' => 'SuratPengantarPindahController@store']);
    $router->get('surat-pengantar-pindah/{id}', ['uses' => 'SuratPengantarPindahController@show']);

    /* Route Surat Pernyataan */
    $router->post('api/surat-pernyataan', ['uses' => 'SuratPernyataanController@store']);
    $router->get('api/surat-pernyataan/{id}', ['uses' => 'SuratPernyataanController@show']);

    /* Route Surat Rekomendasi */
    $router->post('api/surat-rekomendasi', ['uses' => 'SuratRekomendasiController@store']);
    $router->get('api/surat-rekomendasi/{id}', ['uses' => 'SuratRekomendasiController@show']);

    /* Route Export */
    $router->get('to-export/{surat}/{id}', ['uses' => 'SuratController@toExport']);
});
