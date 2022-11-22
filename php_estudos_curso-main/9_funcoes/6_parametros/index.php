<?php

  function velocidadeMaxima($vel) {

    if(is_int($vel)) {
    echo "O carro atinge a valocidade máxima de $vel km/h <br>";
    } else {
      echo "Por favor, passe um numero inteiro <br>";
    }
  }

  velocidadeMaxima(200);
  velocidadeMaxima(300);
  velocidadeMaxima(400);
  
  // Não pode executar funcoes que exijam parametros sem parametros
  // Exemplo :velocidadeMaxima();

  echo "Teste continuando <br>";

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  // PHP ignora parâmetro desnecessário
  velocidadeMaxima(250, "teste");

  velocidadeMaxima("teste");

  function descreverAnimal($nome, $raca) {

    echo "O $nome é da $raca <br>";
  }

  descreverAnimal("Bobby", "Vira lata");
  descreverAnimal("Thor", "Shih Tzu");