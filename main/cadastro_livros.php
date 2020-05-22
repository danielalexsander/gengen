<?php
    include './connection.php';

    if($_POST['titulo'] <> '') {

        $insert = "INSERT INTO tab_livros SET 
            titulo          = '" . $_POST['titulo'] . "',
            autor           = '" . $_POST['autor'] . "',
            editora         = '" . $_POST['editora'] . "',
            ano             = '" . $_POST['ano'] . "',
            classificacao   = '" . $_POST['classificacao'] . "'
        ";
        mysqli_query($conn, $insert);
    }
?>

<h1>Bem vindo ao cadastro de livros!!</h1>

<form action="cadastro_livros.php" method="POST">

    <label for="titulo">Título:</label>
    <input type="text" name="titulo"><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor"><br>

    <label for="editora">Editora:</label>
    <input type="text" name="editora"><br>

    <label for="ano">Ano de Publicação:</label>
    <input type="date" name="ano"><br>

    <label for="classificacao">Escolha uma classificação:</label>
    <select name="classificacao" id="classificacao">
        <option value="livro">Livro</option>
        <option value="periodico">Periódico</option>
    </select>
    <input type="submit">
</form>