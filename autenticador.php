<?php



    $conn = mysqli_connect("localhost", "rafae", "1234") or die ("FALHA");
    mysqli_select_db($conn, "usuarios") or die ("FALHA 2 ");
    $idc = $_POST['id'];
    $psc = $_POST ['password'];
    $query = "SELECT * FROM usuario where id = $idc";
    $query = "SELECT * FROM usuario where senha = md5($psc)";
    $result = mysqli_query($conn, $query);


    if ($result) {
        while ($row = mysqli_fetch_array($result)){
            if ($id = $row ['ID'])
            {
                if ($senha = $row ['SENHA'])
                {
                    header ("Location:pagina1.html");                  
                }
                else {
                    echo  "<script>alert('Senha Incorreta!');</script>";
                    header ("Location:Autentificacao.html");
                }
            }
            else 
            {
                echo  "<script>alert('Usuário Incorreto!);</script>";
                header ("Location:Autentificacao.html");
            }
        }   
    }

?>