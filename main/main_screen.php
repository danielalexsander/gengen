
<?php

    include '../classes/gengen.php';

    $con = new bancoDados;

    $teste = $con->atualiza("UPDATE tab_tabela SET campo = askjhdkjahdjkah");
    echo $teste;
?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>