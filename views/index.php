<?php
    $num = 1;
    $num++;
    $num -= 10;
    $num *= 2;

    echo $num;
    var_dump($num);
    var_dump(3.9);
    $array = array(1, 2, 3, 4);
    var_dump($array);
    $array = [1, 2, 3, 4];
    var_dump($array);
    $array = ['hello' => 1, 4 => 2, 3, 5=>5, 'food' => 'burks'];
    var_dump($array);
    $hello = 'hello';
    $world = "$hello world";
    $world = $hello . ' world';
    var_dump ($world);