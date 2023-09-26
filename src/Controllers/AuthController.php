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
            $_SESSION['error'] = 'passwords dont match';
            header('location: /register');
        }
    }
    public function registerForm(){
        view('auth/register');
        unset($_SESSION['error']);
    }
    public function login(){
        $user = User::where('email', $_POST['email']);
        $user = $user[0] ?? null;
        if($user && password_verify($_POST['password'], $user->password)){
            $_SESSION['user'] = $user->id;
            header('location: /');
            } else {
                $_SESSION['error'] = 'wrong email or password';
                header('location: /login');
            }
        }
    public function loginForm(){
        view('auth/login');
        unset($_SESSION['error']);
    }

    public function logout(){
        unset($_SESSION['user']);
        header('location: /');
    }
}