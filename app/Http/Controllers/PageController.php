<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama : Ravsanjani Rafli Arafat <br>NIM : 2241720121';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id '. $id;
    }
}
