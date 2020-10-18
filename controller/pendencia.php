<?php
    $iddemanda = $_GET["iddemanda"];

    include_once('../connection/conexao.php');
    $query = "DELETE FROM demanda WHERE iddemanda = $iddemanda";

    $resposta = mysqli_query($conn,$query);

    if($resposta){
        echo("OK");
        header("location:../view/area-cliente/pendencia.php");
    }else{
        echo("ERRO: ".mysqli_errno($conn)."<br>".mysqli_error($conn));
    }
    
    mysqli_close($conn);

?>