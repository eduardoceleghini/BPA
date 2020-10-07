<?php?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cadastro-profissional.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <header>

            <div class="desc-text">
                <h1>Realialize seu Cadastro para Receber Pedidos!</h1>
            </div>

        </header>


        <div class="card-center">

            <div class="img-center-cad">
                <img src="../../img/Security On-bro.png">
            </div>

            <form action="action" method="post">

                <div class="titulo">
                    <h2>Preencha os Campos com seus dados para Avançar para próxima etapa!</h2>
                </div>

                <div class="Cadastro-Profissional">

                    <label for="nome"></label>
                    <input type="text" placeholder="Nome" name="nome" required>

                    <label for="email"></label>
                    <input type="text" placeholder="Email" name="email" required>

                    <label for="telefone"></label>
                    <input type="tel" placeholder="Telefone" name="telefone">

                    <label for="senha"></label>
                    <input type="password" placeholder="Senha" name="senha" required>

                    <div class="button-avan-prof">
                        <input type="submit" class="btn" value="Avançar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>