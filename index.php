<?php 

/*

$nome = "wesley";
$cargo = "montador de persiana junior";
$salario = 2000.00;
$idade = 67;

echo("")

echo("Nome: $nome <br>
    Cargo: $cargo <br>
    Salário: $salario <br>
    Idade: $idade <br>
    ")*/

////////////////////////////////////////////////////

/* $nota = 50;

if($nota >= 50) {

    print_r("CONCEITO A");
}

elseif ($nota >= 70) {
    
    print_r("CONCEITO B");

}

elseif ($nota >= 90) {
    
    print_r("CONCEITO C");
}

elseif ($nota <= 49) {
    
    print_r("REPROVADO");

}*/

////////////////////////////////////////////////////

/* $estado = "SP";

switch($estado) {
    case "SP" :
        print_r("Os DDS são 11,12,13,14,15,16,17,18 e 19");
        break;
    case "RJ" :
        print_r("Os DDS são 21,21 e 24");
        break;
    case 'MG':
        print_r("Os DDS são ...");
        break;
}

*/

////////////////////////////////////////////////////



?>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Busca</title>
</head>
<body>
   <h1>Formulário para cadastro de usuário</h1>
   <form action="processa.php" method= "post"></form>
   
   <label for="nome">Nome:</label>
   <input type="text" name="nome" id="nome" placeholder="Digite seu nome..." require>
    
<br>
<br>

   <label for="nome">Email:</label>
   <input type="text" name="email" id="email" placeholder="Digite seu email..." require>
<br>
<br>
   <button type="submit">Enviar</button>
</body>
</html> -->

 


<!-- ************DESAFIO CLIMA************ -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climas</title>
</head>
<body>

<h1>Digite o clima meu fi</h1>

<form action="processa.php" method="POST"> 
    
    <label for="clima">Clima:</label>
    
    <input type="text" name="clima" id="clima" placeholder="Clima..." required>
    
    <button type="submit" value="Enviar">Enviar</button>
</form>
</body>
</html>