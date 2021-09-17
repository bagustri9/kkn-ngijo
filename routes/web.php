<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\WargaController;

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
    +--------+----------------------------------+------------+-----------------------------------------------------+----------+------------+
    | Verb &nbsp; | Path &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | NamedRoute | Controller &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| Action &nbsp; | Middleware |
    +--------+----------------------------------+------------+-----------------------------------------------------+----------+------------+
    | GET &nbsp; &nbsp;| / &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| None &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| Closure &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | GET &nbsp; &nbsp;| /api/warga &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| index &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | GET &nbsp; &nbsp;| /api/warga/{warga} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| show &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/warga &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| store &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/warga/{warga} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| update &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | DELETE | /api/warga/{warga}/delete &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| destroy &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/surat-pengantar-pindah &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\SuratPengantarPindahController | store &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| field : &quot;no_surat&quot;,&nbsp;&quot;warga_nik&quot;,&nbsp;&quot;nama&quot;,&nbsp;&quot;asal_desa&quot;,&nbsp;&quot;kecamatan&quot;,&nbsp;&quot;kabupaten_kota&quot;,&nbsp;&quot;provinsi&quot;,&nbsp;&quot;banyaknya&quot;,&nbsp;&quot;keterangan&quot;
    | GET &nbsp; &nbsp;| /api/surat-pengantar-pindah/{id} | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\SuratPengantarPindahController | show &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| 
    | GET &nbsp; &nbsp;| /api/to-export/{surat}/{id} &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\SuratController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| toExport | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| surat : surat-pengantar-pindah
    +--------+----------------------------------+------------+-----------------------------------------------------+----------+------------+
    </pre>
       
    ';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    /* Route Warga */
    $router->get('warga/', ['uses' => 'WargaController@index']);
    $router->get('warga/{warga}', ['uses' => 'WargaController@show']);
    $router->post('warga/', ['uses' => 'WargaController@store']);
    $router->post('warga/{warga}', ['uses' => 'WargaController@update']);
    $router->delete('warga/{warga}/delete', ['uses' => 'WargaController@destroy']);

    /* Route Surat Pengantar Pindah */
    $router->post('surat-pengantar-pindah/', ['uses' => 'SuratPengantarPindahController@store']);
    $router->get('surat-pengantar-pindah/{id}', ['uses' => 'SuratPengantarPindahController@show']);

    /* Route Export */
    $router->get('to-export/{surat}/{id}', ['uses' => 'SuratController@toExport']);
});
