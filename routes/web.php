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
    return view('h');
});


Route::post('/add', function () {
    $viesis = new \App\viesu;

    $viesis->username = \Request('username');
    $viesis->email    = 'EMail';
    $viesis->link     = 'Link';
    $viesis->message  = 'Message';

    $viesis->save();

    return redirect('/');
});

Route::any('/table', function () {
    $viesi = \App\viesu::get();

    // $viesis->username = \Request('username');
    // $viesis->email    = 'EMail';
    // $viesis->link     = 'Link';
    // $viesis->message  = 'Message';

    // $viesis->output_add_rewrite_var('id','username','Email','Link','Message');

    return view('h2', [
        'viesi' => $viesi,
    ]);
});

