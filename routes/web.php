<?php

use Illuminate\Support\Facades\Route;
use App\Models\Artikel;
use App\Http\Controllers\ArtikelController;



Route::get('/', function () {
    return view('home', ['title' => 'Fachryyz Corporation']);
});

Route::get('/facebook', function () {
    return redirect()->away('https://facebook.com/Fachryy');
});

Route::get('/linkedin', function (){
    return redirect()->away('https://www.linkedin.com/in/fachri-akbar-kutubi-b4b89a310/');
});

Route::get('/instagram', function () {
    return redirect()->away('https://instagram.com/fachryyz');
});

Route::get('/github', function () {
    return redirect()->away('https://github.com/RyyzDev');
});


Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Saya']);
});

Route::get('/projects', function (){
    return view('project', ['title' => 'Proyek Saya']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Kontak Saya']);
});

Route::get('/blog', [ArtikelController::class, 'index']);
Route::get('/artikel/{slug}', [ArtikelController::class, 'show']);
