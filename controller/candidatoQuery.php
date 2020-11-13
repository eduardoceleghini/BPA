<?php
    $iddemanda = $_GET["iddemanda"];

    include_once('../db/connection.php');
    $idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);

    $query = "UPDATE demanda SET status='concluido' WHERE iddemanda = $iddemanda";

    $resposta = mysqli_query($conn,$query);

    if($resposta){
        echo("OK!");
        header("location:../../bpa-main/view/cliente/candidato.php");
    }else{
        echo("ERRO: ".mysqli_errno($conn)."<br>".mysqli_error($conn));
    }
    
    mysqli_close($conn);

?>