<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>view_estados</title>
</head>
<body>

<?php
//View
echo "<ol>";
    while($e = $estados->fetch()){
    //var_dump($e)
    echo "<li>" . $e["nome"]."</li>\n";
    }
    echo"</ol>";

?>

</body>
</html>