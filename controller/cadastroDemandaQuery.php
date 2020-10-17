<?php

    //Conexão para concluir o cadastro
    session_start();
    include_once("../connection/conexao.php");

    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $servicos = mysqli_real_escape_string($conn, $_POST['servicos']);
    $idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);


    //Precisa pegar o Id do usuario e inserir junto com a demanda para ficar lá
    $query_cadastro = "INSERT INTO demanda( descricao, data, categoria, servico, idusuario)
                VALUES( '$descricao', CURDATE(), '$categoria', '$servicos', '$idusuario' )";

    if(!mysqli_query($conn, $query_cadastro)){
        die("$query_cadastro <br> Falha na Execução da Query"
        ."<br>".mysqli_errno($conn)
        ." -> ".mysqli_error($conn)
        );
        mysqli_close($conn);
        

    }else{
        $query_cadastro1 = "INSERT INTO profissional (iddemanda) SELECT MAX(iddemanda) FROM demanda;";

        if(!mysqli_query($conn, $query_cadastro1)){
            die("$query_cadastro1 <br> Falha na Execução da Query"
            ."<br>".mysqli_errno($conn)
            ." -> ".mysqli_error($conn)
            );
            mysqli_close($conn);
            
    
        }else{
            mysqli_close($conn);
        }

        mysqli_close($conn);
    }
header('location:../view/area-cliente/dashboard.php');
?>