<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return '
            <h1>Halaman Product</h1>

            <h3>Pilih Salah satu product pada menu dibawah ini:</h3>
            <li><a href="/product/marble-edu-games">marbel-edu-games</a></li>
            <li><a href="/product/marble-and-friends-kids-games">marbel-and-friends-kids-games</a></li>
            <li><a href="/product/riri-story-books">riri-story-books</a></li>
            <li><a href="/product/kolak-kids-songs">kolak-kids-songs</a></li>
        ';
    }

    public function marble_edu_games(){
        return '
            <h1>Halaman Product Marble Edu Games</h1>
            Klik <a href="https://www.educastudio.com/category/marbel-edu-games" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }

    public function marble_and_friends_kids_games(){
        return '
            <h1>Halaman Product Marble and Friends Kids Games</h1>
            Klik <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }

    public function riri_story_books(){
        return '
            <h1>Halaman Product Riri Story Books</h1>
            Klik <a href="https://www.educastudio.com/category/riri-story-books" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }

    public function kolak_kids_songs(){
        return '
            <h1>Halaman Product Kolak Kids Songs</h1>
            Klik <a href="https://www.educastudio.com/category/kolak-kids-songs" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
        
}
