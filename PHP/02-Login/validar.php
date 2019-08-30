<?php

    $user = $_POST['usuario'];
    $psw = $_POST['senha'];

    /*
    echo "POST";
    var_dump($_POST);

    echo "GET";
    var_dump($_GET);
    */

    if($user == "admin" && $psw == "12345"){
        echo "<h1>Seja Bem Vindo echo $user!</h1>";
        echo"<p>Senha $psw!</p>";
        echo "<a href=\"index.php\">Voltar</a>";
    }else{
        echo"<h1>Usuario e senha invalidos</h1>";
        echo "<a href=\"index.php\">Voltar</a>";
    }