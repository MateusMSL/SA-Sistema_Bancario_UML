<?php

 $login = new Login;

 $login->setCPF("123.456.789.10");
 $login->setSenha("abc123");
 $login->setTentativas(4);

 $usuario = new Usuario;

 $usuario->setCPF("123.456.789.10");
 $usuario->setSenha("abc123");

 ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>SA Banco</title>
    </head>
    <body>
        <!-- LOGIN -->
        <div class="div1">
            <h2 class="h2">Relacionamento Concede Acesso</h2>
            <p class="p1"><strong>Validação de Login:</strong> <?= $login->ValidarLogin($usuario, $login) ?></p>
            <p class="p1"><strong>Quantidade de tentativas:</strong> <?= $login->getTentativas() ?></p>
            <p class="p1"><strong>Limite de tentativas:</strong> <?= $login->LimitarTentativas($login) ?> </p>
            <p class="p1"><strong>Status do sistema:</strong> <?= $login->BloquearAcesso($login) ?></p>
        </div>
    </body>
</html>




