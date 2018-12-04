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
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('/pages.welcome');
});
Route::get('/Home', function () {
    $data = array(
        'title'=>'Services',
        'services' =>['About','Store','Home']
    );
    $iCoffee = array(
        'title'=>'Items',
        'items' =>['About','Store','Home']
    );
    return view('pages.welcome')->with($data);
});
Route::get('/Store', function () {
    $data = array(
        'title'=>'Services',
        'services' =>['About','Store','Home']
    );
    $iCoffee = array(
        'title'=>'Items',
        'items' =>['About','Store','Home']
    );
    return view('pages.about')->with($data);;
});
Route::get('/About', function () {
    $data = array(
        'title'=>'Services',
        'services' =>['About','Store','Home']
    );
    return view('pages.about')->with($data);;
});
