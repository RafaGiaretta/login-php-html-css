<?php

    $conn = mysqli_connect("localhost", "rafae", "1234") or die ("FALHA");
    mysqli_select_db($conn, "usuarios") or die ("FALHA 2 ");
    $idn = $_POST['id'];
    $nomen = $_POST['name'];
    $psn = $_POST['password'];
    $nvn = $_POST['nivel'];
    $query = "INSERT INTO `usuario` (`ID`, `NOME`, `SENHA`, `NIVEL`) VALUES ('$idn', '$nomen', md5('$psn'), '$nvn')";
    $result = mysqli_query($conn, $query);

    if ($result)
        header ("Location:autentificacao.html");
    else 
        echo 'erro';

?>


