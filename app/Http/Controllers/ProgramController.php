<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return '
            <h1>Halaman Program</h1>

            <h3>Pilih Salah satu program pada menu dibawah ini:</h3>
            <li><a href="/program/karir">karir</a></li>
            <li><a href="/program/magang">magang</a></li>
            <li><a href="/program/kunjungan-industri">kunjungan-industri</a></li>
        ';
    }

    public function karir(){
        return '
            <h1>Halaman Program Karir</h1>
            Klik <a href="https://www.educastudio.com/program/karir" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
    public function magang(){
        return '
            <h1>Halaman Program Magang</h1>
            Klik <a href="https://www.educastudio.com/program/karir" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
    public function kunjungan_industri(){
        return '
            <h1>Halaman Program Kunjungan Industri</h1>
            Klik <a href="https://www.educastudio.com/program/kunjungan-industri" target="_blank">disini</a> untuk melanjutkan kehalaman selanjutnya
        ';
    }
}
