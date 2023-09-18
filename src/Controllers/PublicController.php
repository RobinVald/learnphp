<?php
namespace App\Controllers;

use App\DB;
use App\Models\User;

class PublicController{
    public function home(){
        $db = new DB();
        $result = User::all();
        var_dump($result);
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