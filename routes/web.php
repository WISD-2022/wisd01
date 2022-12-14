<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//路由aa
Route::get('/aa/a1',function (){
    return view('aa.a1');
});
Route::get('/aa/a2',function (){
    return view('aa.a2');
});
Route::get('/cc/c1',function (){
    return view('cc.c1');
});
Route::get('/cc/c2',function (){
    return view('cc.c2');
});

//路由bb
Route::get('bb/b1', function (){
    return view('bb.b1');
});

Route::get('bb/b2', function (){
    return view('bb.b2');
});

Route::get('bb/d1', function (){
    return view('bb.d1');
});

Route::get('bb/d2', function (){
    return view('bb.d2');
});


Route::get('/ee/e1',function (){
    return view('ee.e1');
});

Route::get('/ee/e2',function (){
    return view('ee.e2');
});

//路由ff
Route::get('ff/f1', function () {
    return view('ff.f1');
});

Route::get('ff/f2', function () {
    return view('ff.f2');
});

//路由hh
Route::get('hh/h1', function () {
    return view('hh.h1');
});

Route::get('hh/h2', function () {
    return view('hh.h2');
});

Route::get('gg/g1', function () {
    return view('gg.g1');
});

Route::get('gg/g2', function () {
    return view('gg.g2');
});
