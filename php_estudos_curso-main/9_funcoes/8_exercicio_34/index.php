<?php

  function parOuImpar($num) {

    if($num % 2 == 0){
      echo "O número $num é um número par<br>";
    } else {
      echo "O número $num é um número Impar<br>";
    }
  }

  parOuImpar(22);
  parOuImpar(7);