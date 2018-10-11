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
    return view('home');
})->name('home');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('parameter/{id}', function($id){
    return "Nilai Parameter ID : ".$id;
});

Route::get('parameter-default/{id?}', function($id=1){
    return "Nilai Parameter ID : ".$id;
});

Route::get('parameter-where/{id?}', function($id=1){
    return "Nilai Parameter ID : ".$id;
})->where('id','[0-9+]');

Route::get('parameter-where-2/{id?}', function($id="KuhaKu 8"){
    return "Nilai Parameter ID : ".$id;
})->where('id','[a-zA-z]');

Route::get('product', function(){
    $title = "Data Product";
    $product = ['VGA Card','Monitor','Motherboard'];
    return view('product', compact('title','product'));
})->name('product');

Route::prefix('default')->group(function(){
    Route::get('/','DefaultController@index');
    Route::get('/private','DefaultController@private');
});

Route::resource('resource','ResourceController');