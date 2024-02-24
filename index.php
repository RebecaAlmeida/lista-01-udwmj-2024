<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro</title>
</head>
<body>

<h1> 

<?php 

$nome= 'Rebeca'; //criei uma variável nome.

  if($nome == 'Rebeca'){ 
   echo 'Seja Bem-Vinda!';
  }else{ 
   echo 'Nome não encontrado.';
  }//coloquei o if e else para testar se a variável é verdadeira.
  //se for igual, ela vai retornar "Seja Bem-Vinda!", senão, "Nome não encontrado". 

?>
<p> </p>

<?php 

  $nome= 'Ana';

  if($nome == 'Rebeca'){ 
   echo 'Seja Bem-Vinda!';
  }else{ 
  echo 'Nome não encontrado.';
  }//Nesse caso a sentaça era falsa, e retornou "Nome não encontrado".

?>
<p> </p>

<?php

  $idade = 20;

  if($idade > 18) {
    echo 'Você é maior de idade.';
  } else {
    echo 'Você é menor de idade';
  }//Se a idade for superior a 18, retornar que "Você é maior de idade".
<p> </p>

<?php

  $idade = 16;

  if($idade < 17) {
    echo 'Você é menor de idade.';
  } else {
    echo 'Você é maior de idade';
  }//Se a idade foi inferior a 17, retornar que "Você é menor de idade".

?>

</h1>

</body>
</html>
