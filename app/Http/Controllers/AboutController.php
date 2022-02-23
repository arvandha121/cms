<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "
        NIM     : 2041720134
        Nama    : Arief Nauvan Ramadha
        Kelas   : TI - 2G";
    }
}
