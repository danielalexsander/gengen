<?php

    include './connection.php';

    if($_POST['id'] <> '') {

        $att = "UPDATE tab_livros SET 
                    emprestado = 1,
                    id_pessoa_emprestou = '" . $_POST['id'] . "'
                WHERE
                    tab_livros.id = '" .  . "'
                ";
        $atualizou = mysqli_query($conn, $att);
    }

    $sql = "SELECT
                tab_livros.id,
                tab_livros.titulo
            FROM
                tab_livros
            WHERE
                tab_livros.emprestado = 0 
            ";
    $result = mysqli_query($conn, $sql);

?>

<h1>Bem vindo ao empréstimo de exemplares!!</h1>

<form action="emprestar_livro.php" method="POST">

    <label for="id">Seu ID:</label>
    <input type="text" name="id"><br>

    <label for="livro">Escolha um livro:</label>
    <select name="livro" id="livro">
        <?php
            foreach($result as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['titulo'] . '</option>';
            }
        ?>
    </select>
    <input type="submit">
</form>