<?php

    //Conexão para concluir o cadastro
    include_once("../connection/conexao.php");
    session_start();

    $local = mysqli_real_escape_string($conn, $_POST['local']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $servicos = mysqli_real_escape_string($conn, $_POST['servicos']);

    $query = "INSERT INTO demanda(local, descricao, data, categoria, servico)
                VALUES('$local', '$descricao', CURDATE(), '$categoria', '$servicos')";

    if(!mysqli_query($conn, $query)){
        die("$query <br> Falha na Execução da Query"
        ."<br>".mysqli_errno($conn)
        ." -> ".mysqli_error($conn)
        );
        mysqli_close($conn);
        

    }else{
        $_SESSION['obg'] = "Deu certo a Inserção! ";

        mysqli_close($conn);
    }
header('location:../view/area-cliente/demanda.php');
?>