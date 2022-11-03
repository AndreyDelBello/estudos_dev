<?php

    $str = "Andrey";
    $idade = 20;

    echo "Olá mundo!";
    echo "<br>";
    echo "Olá $str!";
    echo "<br>";

    if(is_string($str)) {
        echo "O $str tem $idade anos de idade!<br>";
    }

    if(is_string($idade)) {
        echo "O $str tem $idade anos de idade!<br>";
    }

    if(is_string("My name is Andrey!")) {
        echo "O $str tem $idade anos de idade assim como o Harry!<br>";
    }
    