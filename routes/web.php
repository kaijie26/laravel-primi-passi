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

// Route della homepage
Route::get('/', function () {

    $anonymous = [
        'name' => 'John',
        'lastname' => 'Doe',
        'undersecretaries' => ['PincoPallo', 'Mario Bianchi', 'Giuseppe Verdi'],

    ];

    return view('home', $anonymous);
})->name('homepage');

// Route about-us
Route::get('/about', function () {

    return view('about-us');
})->name('our-team');


// Route our-goals
Route::get('/goals', function () {

    return view('goals');
})->name('our-goals');


// Route join-us
Route::get('/join', function () {

    return view('join-us');
})->name('join-us');




