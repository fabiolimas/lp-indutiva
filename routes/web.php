<?php

use Illuminate\Support\Str;
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

Route::get('/teste', function () {

    // return view('teste');

    // $xx = 'Se você usa planilhas do Excel ou papéis e caneta para gerenciar sua empresa, você precisa de um';
    // return Str::slug($xx, '_');
    $text = [
        'Olá, meu nome é Ana Paula! Sou uma'
    ];

    foreach ($text as $key => $value) {
        echo "'" . Str::slug($value, '_') . "' => '" . $value . "', <br>";
    }
})->name('home');

Route::get('/{lg?}', function () {
    return view('home');
})->name('home');
