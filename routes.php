<?php
use App\Router;
use App\Controllers\PublicController;
Router::addRoute('GET', '/', [PublicController::class, 'home']);

Router::addRoute('GET','/about', [PublicController::class, 'about']);
Router::addRoute('GET','/test', [PublicController::class, 'test']);
Router::addRoute('POST','/test', [PublicController::class, 'testanswer']);