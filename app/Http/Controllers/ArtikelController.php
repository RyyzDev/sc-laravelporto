<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    private static $artikels = [
        1 => [
            'id' => 1,
            "title" => "Citra 8 Sunset Avenue",
            "slug" => "citra-8-sunset-avenue",
            "comment" => "Menikmati syahdunya danau cipan",
            "img" => "images/cipan1.jpeg",
            "images" => [
            "images/cipan1.jpeg",
            "images/cipan2.jpeg",
            "images/cipan3.jpeg"
        ],
            'content' => 'Laravel adalah framework PHP yang sangat populer...',
            'author' => 'Admin',
            'category' => 'place',
            'created_at' => '2025-08-25 10:00:00'
        ],
        2 => [
            'id' => 2,
            "title" => "MRT Jakarta",
            "slug" => "mrt-jakarta",
            "comment" => "The quiet of MRT mungkin judul yang cocok",
            "img" => "images/mrt1.jpeg",
            "images" => [
            "images/mrt1.jpeg",
            "images/mrt2.jpeg",
            "images/mrt3.jpeg"
        ],
            'content' => 'CRUD (Create Read Update Delete) adalah konsep dasar...',
            'author' => 'Ryyz',
            'category' => 'Tutorial',
            'created_at' => '2025-08-26 14:30:00'
        ],
        3 => [
            'id' => 3,
            "title" => "Tips Belajar PHP untuk Pemula",
            "slug" => "tips-belajar-php-pemula", // ✅ tambahkan slug
            "comment" => "Tips dasar sebelum masuk ke Laravel",
            "img" => "images/php.jpeg",
            'content' => 'Sebelum masuk Laravel, sebaiknya kuasai dulu dasar-dasar PHP...',
            'author' => 'Guest Writer',
            'category' => 'PHP',
            'created_at' => '2025-08-27 09:00:00'
        ],
    ];

    // daftar artikel
    public function index()
    {
        $artikels = self::$artikels; // ✅ pakai self::
        return view('blog', compact('artikels'));
    }

    // detail artikel berdasarkan slug
    public function show($slug)
    {
        // karena static, akses array dengan self::
        $artikel = collect(self::$artikels)->firstWhere('slug', $slug);

        if (!$artikel) {
            abort(404, 'Artikel tidak ditemukan');
        }

        return view('artikel', compact('artikel'));
    }
}
