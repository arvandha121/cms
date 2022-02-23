<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        return "
        <h1>Halaman About Us</h1>
        <h3>About me:</h3>
        NIM     : 2041720134 <br>
        Nama    : Arief Nauvan Ramadha <br>
        Kelas   : TI - 2G";
    }
}
