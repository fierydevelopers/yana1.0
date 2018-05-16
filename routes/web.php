<?php

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
    return view('testhome');
});

Route::get('policePP',function (){
    return view('policePP');
});

Route::get('unified',function (){
    return view('unified');
});

Route::get('courtPP',function (){
    return view('courtPP');
});

//Route::get('oldsupport', function () {
//    return \App\Http\Controllers\TestController::check();
//});

Route::get('support', function () {
    return \App\Http\Controllers\TestController::gmaps();
});

Route::get('loadsupport', function () {
    return view('loadsupport');
});
Route::get('loadpolice', function () {
    return view('loadpolice');
});
Route::get('loadhome', function () {
    return view('loadhome');
});
Route::get('loaduni', function () {
    return view('loaduni');
});

Route::get('loadcourt', function () {
    return view('loadcourt');
});

Route::get('loadami', function () {
    return view('loadami');
});

Route::get('loadreport', function () {
    return view('loadreport');
});

Route::get('testhome',function (){
    return view('testhome');
});


Route::get('report',function (){
    return view('report');
});
Route::get('ami',function (){
    return view('ami');
});
