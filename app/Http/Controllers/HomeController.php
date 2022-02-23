<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return '
        <h1>Hi! Selamat Datang di Website Educa Studio.</h1>
        
        <h3>Pilih Salah satu halaman menu dibawah ini:</h3>
        <li><a href="/product">Product</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/program">Program</a></li>
        <li><a href="/about">About Us</a></li>
        ';
    }
}
