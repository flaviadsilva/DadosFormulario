<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Escolha de Linguagens</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Escolha as linguagens</h2>

<form method="POST">

<div class="checkbox-group">

<label>
<input type="checkbox" name="linguagens[]" value="HTML">
HTML
</label>

<label>
<input type="checkbox" name="linguagens[]" value="CSS">
CSS
</label>

<label>
<input type="checkbox" name="linguagens[]" value="JavaScript">
JavaScript
</label>

<label>
<input type="checkbox" name="linguagens[]" value="PHP">
PHP
</label>

<label>
<input type="checkbox" name="linguagens[]" value="Java">
Java
</label>

</div>

<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["linguagens"])){

    $linguagens = $_POST["linguagens"];

    echo "<div class='resultado'>";
    echo "<p><strong>Linguagens escolhidas:</strong></p>";

    foreach($linguagens as $ling){
        echo "<p>$ling</p>";
    }

    echo "</div>";
}

?>

</div>

</body>
</html>