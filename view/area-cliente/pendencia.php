<?php
    session_start();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/pendencia.css">
        <title>Document</title>
    </head>

    <body>
    
    <header>
        <div class="titulotopo">
            <h1>Pendente</h1>
        </div>
    </header>  

    <div class="text">
        <h2>Suas Solicitações por Profissionais Pendentes</h2>
    </div>
    <table class="container">

        <thead>
            <tr>
                <th>
                 <h2>Serviço</h2>
                </th>

                <th>
                 <h2>Categoria</h2>
                </th>
        
                <th>
                    <h2>Data</h2>
                </th>

                <th>
                    <h2>Ação</h2>
                </th>
             <tr>
        <?php 
            include_once("../../connection/conexao.php");

            $query = "SELECT * FROM demanda";

            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                //Leitura de varios itens do banco
                while($retornoDoSelect = mysqli_fetch_array($result)){
                    
                    ?><tr>
                    <td><?php echo $retornoDoSelect['categoria'].'<br>'; ?></td>
                    <td><?php echo $retornoDoSelect['servico'].'<br>'; ?></td>
                    <td><?php echo $retornoDoSelect['data'].'<br>'; ?></td>
                    <td><a href="../../controller/pendencia.php?iddemanda=<?php echo ($retornoDoSelect["iddemanda"]); ?> 
                    "style="color: black; text-decoration: none; border-radius: 10px solid black; cursor: pointer;">Concluído</a></style></td>
                    </tr><?php
                }  
            }else{
                echo("Erro nenhum dado");
            }
          
            mysqli_close($conn);
        ?>
    </body>
</html>