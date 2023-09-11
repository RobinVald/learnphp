<?php
namespace App\Controllers;

class PublicController{
    public function home(){
        $num = 10;
        $name = 'Blyaaaaa';
        view('home', compact('name', 'num'));
    }
    public function about(){
        view('about');
    }
}