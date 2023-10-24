<?php

namespace App\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class PublicController {
    public function home() {
        $articles = Article::all();
        //dd($articles);
        view('home', compact('articles'));
    }
    public function about() {
        view('about');
    }
    public function test() {
        session_start();
        //setcookie('my_cookie', 'tasty', time() + 60 * 60 * 24 * 30, '', '', false, true);
        //var_dump($_COOKIE);
        var_dump($_SESSION);
    }
    public function testAnswer(){
        var_dump($_POST);
    }
}