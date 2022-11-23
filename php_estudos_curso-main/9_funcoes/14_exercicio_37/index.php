<?php

  //Definindo a cor no parametro
  function defineCorCarro($cor = "vermelha") {

    return "A cor do carro é: $cor";

  }

  $carroVermelho =  defineCorCarro();
  echo $carroVermelho . "<br>";

  //retorno personalizado de parametro
  $carroAzul = defineCorCarro("Azul");
  echo $carroAzul . "<br>";
