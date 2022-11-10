<?php

  if(5 > 2 || 3 < 4) { //true e true.
    echo "A operação 1 é verdadeora <br>";
  }

  if(5 > 2 || 30 < 4) { //true e false.
    echo "A operação 2 é verdadeora <br>";
  }

  if(5 > 20 || 3 < 4) {  //false e true.
    echo "A operação 3 é verdadeora <br>";
  }

  if(5 > 20 || 30 < 4) {
    echo "A operação 4 é verdadeora <br>";
  }

  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  if($a > $b || $d > $c) {
    echo "A operação 5 é verdadeora <br>";
  }

  if(($a > $b || $d > $c) && $c < $d) {
    echo "A operação 6 é verdadeora <br>";
  }

  if(($a > $b && $d < $c) || $c < $d) {
    echo "A operação 7 é verdadeora <br>";
  }

