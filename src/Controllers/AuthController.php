<?php

namespace App\Controllers;
use App\Models\User;

class AuthController {
    public function register(){
        if($_POST['password'] == $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('location: /login');
        } else{
            header('location: /register');
        }
    }
    public function registerForm(){
        view('auth/register');
    }
    public function login(){
        
    }
    public function loginForm(){
        view('auth/login');
    }
}