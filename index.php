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

$nome= 'Rebeca'; //criei uma variavel nome.

if($nome == 'Rebeca'){ 
echo 'Seja Bem-Vinda!';
}else{ 
echo 'Nome não encontrado.';
}//coloquei o if e else para testar se a variavel é verdadeira.
//for igual, ela vai retonar "Seja Bem-Vinda!", senão, "Nome não encontrado". 

?>
<p> </p>
<?php 
$nome= 'Ana'; //criei uma variavel nome.

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
  }//Se a idade for superior a 18, retornar que "Você é maior de idade", ou o contrário.
?>
<p> </p>
<?php
  $idade = 16;

  if($idade < 17) {
    echo 'Você é menor de idade.';
  } else {
    echo 'Você é maior de idade';
  }//Se a idade foi inferior a 17, retornar que "Você é menor de idade", ou o contrário.
?>

</h1>

</body>

</html>
