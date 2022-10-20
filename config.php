
<?php

$hostname = "localhost";
$bancodedados= "psych";
$usuario= "root";
$senha= "";



$pdo = mysqli_connect ($hostname, $usuario, $senha, $bancodedados);

if (!$pdo) {

    die("houve um erro: ". $mysqli_connect_error ());
    }
    
    else{
    
        header ("Location:index.php");
    }
    ?>



