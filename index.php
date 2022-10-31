<?php

require_once('Classes/conta.php');
require_once('Classes/login.php');
require_once('Classes/usuario.php');


$usuario = new Usuario;
$usuario->setID("1001");
$usuario->setNome("Nome 1");
$usuario->setIdade("00");
$usuario->setCPF("000.000.000-00");

$conta = new Conta;
$conta->setSaldo("4000");
$conta->setNumero_conta("0239 0412 1245 9234");




?>


<!------------------------- CLASSES E OBJETOS ------------------------->

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
        

        <!-- USUARIO -->
        <div class="div1">
            <h2 class="h2">Classes e Objetos</h2>
            <h3 class="p1" style="text-align:center;">Usuario</h3>
            <p class="p1"><strong>ID:</strong> <?= $usuario->getID() ?></p>
            <p class="p1"><strong>Nome do cliente:</strong> <?= $usuario->getNome() ?></p>
            <p class="p1"><strong>Idade do cliente:</strong> <?= $usuario->getIdade() ?>  </p>
            <p class="p1"><strong>CPF do cliente:</strong> <?= $usuario->getCPF() ?></p>
        </div>

        <!-- CONTA -->
        <div class="div1">
            <h2 class="h2">Classes e Objetos</h2>
            <h3 class="p1" style="text-align:center;">Conta</h3>
            <p class="p1"><strong>Saldo da Conta:</strong> R$ <?= $conta->getSaldo() ?></p>
            <p class="p1"><strong>Número da Conta:</strong> <?= $conta->getNumero_conta() ?></p>
        </div>
    </body>
</html>

<?php

//------------------------- Relacionamento: Acessa --------------------

include "Relacionamento/acessa.php";


//------------------------- Relacionamento: Concede Acesso -----------------

include "Relacionamento/concedeacesso.php";

//---------------------------------------------------------------------------

?>