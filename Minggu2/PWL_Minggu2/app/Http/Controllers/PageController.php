<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 244107020085 <br> Nama : Raihan Nur Pratama';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID '.$id;
    }
}
