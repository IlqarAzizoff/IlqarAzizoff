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

Route::get('/welcome', function(){
    return "Welcome";
});

Route::get('/api/v1/welcome', function(){
    return ['mesaj'=>'welcome'];
});

Route::get('/mehsul/{mehsuladi}/{id?}', function($mehsuladi, $id=0){
    return "Mehsul adi: $id $mehsuladi";
})->name('mehsul_etrafli');

Route::get('/kampanya', function(){
    return redirect()->route('mehsul_etrafli', ['ad'=>'alma', 'id'=>'5']);
});