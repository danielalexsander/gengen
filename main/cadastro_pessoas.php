
<?php

    include './connection.php';

    if($_POST['nome'] <> '') {

        $insert = "INSERT INTO tab_pessoas SET 
            nome            = '" . $_POST['nome'] . "',
            classificacao   = '" . $_POST['classificacao'] . "'
        ";
        mysqli_query($conn, $insert);
    }
?>

<h1>Bem vindo ao cadastro de pessoas!!</h1>

<form action="cadastro_pessoas.php" method="POST">

    <label for="nome">Nome:</label>
    <input type="text" name="nome"><br>

    <label for="classificacao">Escolha uma classificação:</label>
    <select name="classificacao" id="classificacao">
        <option value="aluno">Aluno</option>
        <option value="professor">Professor</option>
    </select>
    <input type="submit">
</form>