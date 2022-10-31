<?php

 $conta1 = new Conta;
 $conta2 = new Conta;

 $conta1->setSaldo(1000);
 $conta1->setNumero_conta("1234 1234 1234 1234");

 $conta2->setSaldo(1000);
 $conta2->setNumero_conta("4321 4321 4321 4321");

 $usuario1 = new Usuario;
 $usuario2 = new Usuario;

 $usuario1->setID(10);
 $usuario1->setNome("Joaquim Ferreira dos Santos");
 $usuario1->setIdade(63);
 $usuario1->setCPF("986.546.732-98");
 $usuario1->setSenha("Cavalo123");
 $usuario1->setNumero_conta($conta1->getNumero_conta());
 $usuario1->setValorSaque(500);
 $usuario1->setValorDeposito(20);
 $usuario1->setValorTransferencia(100);
 $usuario1->setLimite(1000);
 $usuario1->setDataExtrato("28/10/2022");

 $usuario2->setID(11);
 $usuario2->setNome("Julia Meira Vitoria");
 $usuario2->setIdade(22);
 $usuario2->setCPF("876.354.698-45");
 $usuario2->setSenha("Vacalo321");
 $usuario2->setNumero_conta($conta2->getNumero_conta());
 $usuario2->setValorSaque(400);
 $usuario2->setValorDeposito(30);
 $usuario2->setDataExtrato("28/10/2022");

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
        <!-- SAQUE -->
        <div class="div1">
            <h2 class="h2">Realizar Saque</h2>
            <p class="p1"><strong>ID:</strong> <?= $usuario1->getID() ?> </p>
            <p class="p1"><strong>Nome do cliente:</strong> <?= $usuario1->getNome() ?> </p>
            <p class="p1"><strong>Idade do cliente:</strong> <?= $usuario1->getIdade() ?>  </p>
            <p class="p1"><strong>CPF do cliente:</strong> <?= $usuario1->getCPF() ?> </p>
            <p class="p1"><strong>Número da conta:</strong> <?= $usuario1->getNumero_conta() ?> </p>
            <p class="p1"><strong>Saldo Atual: </strong>R$ <?= $conta1->getSaldo() ?> </p>
            <p class="p1"><strong>Valor do Saque: </strong>R$ <?= $usuario1->getValorSaque() ?> </p>
            <p class="p1"><strong>Saldo após o Saque: </strong>R$ <?= $usuario1->RealizarSaque($usuario1, $conta1) ?> </p>
        </div>
        <!-- DEPÓSITO -->
        <div class="div1">
            <h2 class="h2">Realizar Depósito</h2>
            <p class="p1"><strong>ID:</strong> <?= $usuario2->getID() ?></p>
            <p class="p1"><strong>Nome do cliente:</strong> <?= $usuario2->getNome() ?> </p>
            <p class="p1"><strong>Idade do cliente:</strong> <?= $usuario2->getIdade() ?>  </p>
            <p class="p1"><strong>CPF do cliente:</strong> <?= $usuario2->getCPF() ?> </p>
            <p class="p1"><strong>Número da conta:</strong> <?= $usuario2->getNumero_conta() ?> </p>
            <p class="p1"><strong>Saldo Atual: </strong>R$ <?= $usuario2->VisualizarSaldo($conta2) ?> </p>
            <p class="p1"><strong>Valor do Depósito: </strong>R$ <?= $usuario2->getValorDeposito() ?> </p>
            <p class="p1"><strong>Saldo após o depósito: </strong>R$ <?= $usuario2->RealizarDeposito($usuario2, $conta2) ?> </p>
        </div>
        <!-- TRANSFERÊNCIA -->
        <div class="div1">
            <h2 class="h2">Realizar Transferência</h2>
            <p class="p1"><strong>Valor da transferência: </strong>R$ <?= $usuario1->getValorTransferencia() ?> </p>
            <p class="p1"><strong>Transferência Cliente 1 para Cliente 2:</strong> <?= $usuario1->RealizarTransferencia($usuario1, $conta1, $usuario2, $conta2) ?></p>
        </div>
        <!-- EXTRATO -->
        <div class="div1">
            <h2 class="h2">Exibir Extrato</h2>
            <p class="p1"><strong>Extrato do Usuário: </strong> <?= $usuario2->getNome() ?> </p>
            <?php echo $usuario2->EmitirExtrato();  ?>
        </div>


    </body>
</html>








