<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return '
            <h1>Halaman News</h1>

            <h3>Pilih Salah satu berita pada menu dibawah ini:</h3>
            <li><a href="/news/educastudio">educastudio</a></li>
            <li><a href="/news/educastudio-berbagi">educastudio-berbagi-dampak-covid</a></li>
        ';
    }

    public function news(){
        return '
            <h1>Halaman News Educa Studio</h1>
            Klik <a href="https://www.educastudio.com/news" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
    public function berbagi(){
        return '
            <h1>Halaman News Educa Studio Berbagi Yang Terdampak Covid</h1>
            Klik <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
}
