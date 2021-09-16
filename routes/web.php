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
    +--------+-----------------------------+------------+-----------------------------------------------------+----------+------------+
    | Verb &nbsp; | Path &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| NamedRoute | Controller &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| Action &nbsp; | Middleware |
    +--------+-----------------------------+------------+-----------------------------------------------------+----------+------------+
    | GET &nbsp; &nbsp;| / &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| None &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| Closure &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | GET &nbsp; &nbsp;| /api/warga &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| index &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | GET &nbsp; &nbsp;| /api/warga/{warga} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| show &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/warga &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| store &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/warga/{warga} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| update &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | DELETE | /api/warga/{warga}/delete &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\WargaController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| destroy &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    | POST &nbsp; | /api/surat-pengantar-pindah | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\SuratPengantarPindahController | store &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| Field : &quot;warga_nik&quot;,&quot;asal_desa&quot;,&quot;kecamatan&quot;,&quot;kabupaten_kota&quot;,&quot;provinsi&quot;,&quot;banyaknya&quot;,&quot;keterangan&quot;
    | GET &nbsp; &nbsp;| /api/to-export/{surat}/{id} | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| App\Http\Controllers\SuratController &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| toExport | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;|
    +--------+-----------------------------+------------+-----------------------------------------------------+----------+------------+
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

    /* Route Export */
    $router->get('to-export/{surat}/{id}', ['uses' => 'SuratController@toExport']);
});
