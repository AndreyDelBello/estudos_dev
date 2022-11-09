<?php

  //Operador igualdade --> Compara a igualdade somente do valor.
  if(5 == "5"){
    echo "5 é igual a 5 1<br>";
  }

  //Operador Identico --> O tipo de dado também deve ser igual.
  //Compara igualdade de tudo para ser verdadeiro.

  if(5 === "5"){  //False pois o tipo de dado é diferente.
    echo "5 é igual a 5 2<br>";
  }

  if(5 === 5){   //True o valor e tipo de dado sao identicos.
    echo "5 é igual a 5 3<br>";
  }

  $a = 4;
  $b = 4;
  $c = "4";

  if($a === $b){   //True
    echo "A é igual a B <br>";
  }

  if($a === $c){   //False Tipo de dado diferente.
    echo "A é igual a C <br>";
  }


