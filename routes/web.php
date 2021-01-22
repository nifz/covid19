<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $update_url = HTTP::get('https://data.covid19.go.id/public/api/update.json');
    $update = json_decode($update_url);
    $prov_url = HTTP::get('https://data.covid19.go.id/public/api/prov.json');
    $prov = json_decode($prov_url);
    return view('welcome',['update'=>$update,'data'=>$prov]);
});
Route::get('/dd', function () {
    $update_url = HTTP::get('https://data.covid19.go.id/public/api/prov.json');
    $update = json_decode($update_url);
    dd($update);
    return view('welcome',['update'=>$update]);
});
