<?php

  $x = 4;

  while($x < 30) {

    echo "Valor de X é $x <br>";

    if($x === 24) {
      echo "Terminando o loop<br>";
      break;
    }

    $x += 2;
  }

  echo "Saiu do loop <br>";