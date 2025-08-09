<?php

use Illuminate\Support\Facades\Route;
use App\Models\Artikel;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return view('home', ['title' => 'Fachryyz Corporation']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Saya']);
});

Route::get('/project', function (){
    return view('project', ['title' => 'Proyek Saya']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Kontak Saya']);
});

Route::get('/blog', [ArtikelController::class, 'index']);


//single artikel

Route::get('artikel/{slug}', function($slug){
    return view('artikel',
    [  'posts' => Artikel::find($slug),
       'title' => Artikel::titles($title),
    ]); 

});