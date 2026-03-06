<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Verificador de Número</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Verificar número</h2>

<form method="POST">

<input type="number" name="numero" placeholder="Digite um número" required>

<button type="submit">Verificar</button>

</form>

<?php

if(isset($_POST["numero"])){

    $numero = $_POST["numero"];

    if($numero % 2 == 0){
        echo "<p class='resultado'>O número $numero é par</p>";
    } else {
        echo "<p class='resultado'>O número $numero é ímpar</p>";
    }

}

?>

</div>

</body>
</html>