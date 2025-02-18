<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "2341760068 Jaden Natha Kautsar";
    }

    public function articles($id){
        return "Halaman artikel dengan id ".$id ;
    }
}
