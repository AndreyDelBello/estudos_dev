<?php

  $arr = [];
    
  $i = 1;

  for($i = 10; $i <= 20; $i++) {
    
    array_push($arr, $i);
    if($arr[$i] % 2 != 0){
    echo "Numeros: $arr[$i] <br>";
  }
}

  print_r($arr);