<?php

  $a = 12;
  $b = 52;
  $c = "Andrey";

  if(is_int($a) || is_float($c)) {

    $atrib = $a * 2;

    if($atrib > 100) {

      echo "O novo número é maior que 100! <br>";

    } else {

      echo "O novo número é menor que 100 <br>";

    }
  }

  if(is_int($b) || is_float($c)) {

    $atrib2 = $b * 2;

    if($atrib2 > 100) {

      echo "O novo número é maior que 100! <br>";

    } else {
      
      echo "O novo número é menor que 100 <br>";

    }
  }

  if(is_int($c) || is_float($c)) {

    $atrib2 = $c * 2;

    if($atrib3 > 100) {

      echo "O novo número é maior que 100! <br>";

    } else {
      
      echo "O novo número é menor que 100 <br>";

    }
  }