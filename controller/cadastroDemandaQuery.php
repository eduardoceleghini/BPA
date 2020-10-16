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
        $_SESSION['obg'] = "Deu certo a Inserção! ";

        mysqli_close($conn);
    }
header('location:../view/area-profissional/pedidos-profissional.php');
?>