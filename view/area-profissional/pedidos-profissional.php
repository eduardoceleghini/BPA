<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Profissional</title>

    <link rel="stylesheet" href="../../css/pedidos-profissional.css">
</head>
<body>

<?php
include_once("../../connection/conexao.php");
session_start();
$idusuario = mysqli_real_escape_string($conn, $_SESSION['idusuario']);
$query_select = "SELECT categoria, servico FROM usuario WHERE idusuario = $idusuario ";
$result = mysqli_query($conn, $query_select);

$retornoDoSelect = mysqli_fetch_array($result);

$_SESSION['categoria'] = $retornoDoSelect['categoria'];
$_SESSION['servico'] = $retornoDoSelect['servico'];

$categoria = mysqli_real_escape_string($conn, $_SESSION['categoria']);
$servico = mysqli_real_escape_string($conn, $_SESSION['servico']);
?>
<div class="container">
    <header id="titulo">
        <div class="desc-text">
            <h1>Veja seus pedidos</h1>

        </div>
    </header>
    <div class="sub-container">
        <?php
            $query = "SELECT *
            FROM demanda
            INNER JOIN usuario ON demanda.idusuario = usuario.idusuario
            WHERE tipo = 0 AND demanda.categoria = '$categoria' AND demanda.servico = '$servico' ";
            $result = mysqli_query($conn, $query );
            if($result){
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="caixa">';
                        echo '<form action="../../controller/pedidosProfissionalQuery.php" id="form1" method="post">';
                            echo '<h4>Nome</h4>';
                            echo $row['nome'].'<br>';
                            echo '<h4>Data</h4>';
                            echo $row['data'].'<br>';
                            echo '<h4>Descrição</h4>';
                            echo $row['descricao'].'<br>';
                            echo'<input type="submit" value="Aceitar" class="button-enviar">';
                        echo'</form>';
                    echo '</div>';
                }
            }else{
                trigger_error('Invalid query: ' . $conn->error);
            }
        ?>
    </div>
            
        
</div>
    
</body>
</html>