<?php

//var_dump($_SERVER);
switch($_SERVER['REQUEST_URI']) {
    case'/':
        echo 'home page';
        break;
    case'/about':
        echo 'about';
        break;
    default:
        echo '404 error, hehehehe get shafted';
        break;
}