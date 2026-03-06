<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário Completo</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

<h2>Cadastro</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Nome">

<input type="email" name="email" placeholder="Email">

<input type="password" name="senha" placeholder="Senha">

<input type="number" name="idade" placeholder="Idade">

<div class="radio-group">
<p>Sexo:</p>

<label>
<input type="radio" name="sexo" value="Masculino"> Masculino
</label>

<label>
<input type="radio" name="sexo" value="Feminino"> Feminino
</label>

<label>
<input type="radio" name="sexo" value="Outro"> Outro
</label>
</div>

<select name="cidade">
<option value="">Selecione uma cidade</option>
<option value="Sapucaia">Sapucaia</option>
<option value="Esteio">Esteio</option>
<option value="São Leopoldo">São Leopoldo</option>
<option value="Porto Alegre">Porto Alegre</option>
</select>

<div class="checkbox-group">
<p>Linguagens favoritas:</p>

<label><input type="checkbox" name="linguagens[]" value="HTML"> HTML</label>
<label><input type="checkbox" name="linguagens[]" value="CSS"> CSS</label>
<label><input type="checkbox" name="linguagens[]" value="JavaScript"> JavaScript</label>
<label><input type="checkbox" name="linguagens[]" value="PHP"> PHP</label>
<label><input type="checkbox" name="linguagens[]" value="Java"> Java</label>

</div>

<button type="submit">Cadastrar</button>

</form>

<?php

if(isset($_POST["nome"])){

    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);
    $idade = htmlspecialchars($_POST["idade"]);
    $sexo = isset($_POST["sexo"]) ? htmlspecialchars($_POST["sexo"]) : "";
    $cidade = htmlspecialchars($_POST["cidade"]);
    $linguagens = isset($_POST["linguagens"]) ? $_POST["linguagens"] : [];

    if(empty($nome) || empty($email) || empty($senha) || empty($idade) || empty($sexo) || empty($cidade)){
        echo "<p class='erro'>Preencha todos os campos obrigatórios</p>";
    } else {

        echo "<div class='resultado'>";
        echo "<p><strong>Cadastro realizado com sucesso</strong></p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>Cidade: $cidade</p>";

        if(!empty($linguagens)){
            echo "<p><strong>Linguagens favoritas:</strong></p>";

            foreach($linguagens as $ling){
                echo "<p>" . htmlspecialchars($ling) . "</p>";
            }
        }

        echo "</div>";
    }

}

?>

</div>

</body>
</html>