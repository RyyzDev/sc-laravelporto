<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        return view('blog', [
            'title' => 'Artikel',
            'posts' => Artikel::all()
        ]);
    }
}
