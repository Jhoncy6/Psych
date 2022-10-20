<?php
#Verifica se tem um email para pesquisa
if(isset($_POST['username']));{ 

    #Recebe o Email Postado
    $emailPostado = $_POST['username'];

    #Conecta banco de dados 
    $con = mysqli_connect("localhost", "root", "", "psych");
    $sql = mysqli_query($con, "SELECT * FROM pacientes WHERE emailPA = '{$emailPostado}'");

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
    else 
        echo json_encode(array('email' => 'Usuário valido.' ));
}
