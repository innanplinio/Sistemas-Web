<?php

    //Configuração
    $database = "academico";

    $dbuser = "root";
    $dbpassword = "";
    $dbhost = "127.0.0.1";


    $strConn = "mysql:host=$dbhost;dbname=$database";

    $connection = new PDO($strConn, $dbuser, $dbpassword);

    //var_dump($connection);

    //Controller -> Model
    $estados = $connection -> query("SELECT * FROM estados");

    //var_dump($estados);

    include 'view_estados.php';

    //View
    /*echo "<ol>";
    while($e = $estados->fetch()){
        //var_dump($e)
        echo "<li>" . $e["nome"]."</li>\n";
    }
    echo"</ol>";*/

