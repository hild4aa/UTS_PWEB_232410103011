<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    // Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // Pengelolaan
    public function pengelolaan(Request $request)
    {

        $dataList = [
            [
                'id' => 1,
                'nama' => 'Shinseiki Evangelion',
                'judul_inggris' => 'Neon Genesis Evangelion',
                'genre' => 'Action, Avant Garde, Award Winning, Drama, Sci-Fi, Suspense',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/1314/108941.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'Shinseiki Evangelion Movie: Air/Magokoro wo, Kimi ni',
                'judul_inggris' => 'Neon Genesis Evangelion: The End of Evangelion',
                'genre' => 'Action, Avant Garde, Drama, Sci-Fi, Suspense',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/1404/98182.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Kidou Shinseiki Gundam X',
                'judul_inggris' => 'After War Gundam X',
                'genre' => 'Action, Adventure, Drama, Sci-Fi',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/10/16054.jpg'
            ],
            [
                'id' => 4,
                'nama' => 'Zoids Shinseiki/Zero',
                'judul_inggris' => 'Zoids: New Century',
                'genre' => 'Adventure, Comedy, Sci-Fi, Sports',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/1159/133229.jpg'
            ],
            [
                'id' => 5,
                'nama' => 'Future GPX Cyber Formula',
                'judul_inggris' => null,
                'genre' => 'Adventure, Sci-Fi',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/1653/140355.jpg'
            ],
            [
                'id' => 6,
                'nama' => 'SF Shinseiki Lensman',
                'judul_inggris' => null,
                'genre' => 'Action, Adventure, Sci-Fi',
                'gambar' => 'https://cdn.myanimelist.net/images/anime/4/35347.jpg'
            ],
        ];


        return view('pengelolaan', compact('dataList'));
    }
}
