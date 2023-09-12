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
    public function test(){
        view('form');
        var_dump($_POST);
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}