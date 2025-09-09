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


<!-- <!DOCTYPE html>
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
</html> -->

<!-- <?php
// if ($_GET) {
//     $nome = $_GET['nome'];
//     $email = $_GET['email'];

//     echo("O nome inserido é $nome e o email inserido é $email !");
// }

?> -->


<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<h1>Buscar</h1>

<form action="index.php" method="get">

<label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Digite seu nome..." required>
<br>
<br>
   <label for="nome">Email:</label>
   <input type="text" name="email" id="email" placeholder="Digite seu email..." required>
<br>
<br>
<button type="submit" value="Enviar">Enviar</button>
</form>


</body>

</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h2>Tabuada</h2>
 
    <form method="post">
        <label for="numero">Número:</label>
        <select name="numero" id="numero">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Mostrar</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        
        $numero = $_POST["numero"];
 
        echo "<h3>Tabuada do $numero</h3>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
    ?>
</body>
</html>
