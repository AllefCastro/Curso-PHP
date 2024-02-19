<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$allef = new Titular(new Cpf('111.222.333-55'),'Allef');
$contaUm = new Conta($allef);
$contaDois = new Conta(new Titular(new Cpf('111.222.333-55'),'Sabrinna'));
$contasTres = new Conta(new Titular(new Cpf('555.676.999-88'),'Magaly'));

// echo Conta::recuperaQuantContas();

var_dump($contaUm);

$contaUm->deposite(500);
var_dump($contaUm);

$contaUm->transfere(420,$contaDois);

var_dump($contaUm);

echo $contaUm->recuperaCpfTitular() . PHP_EOL;
// echo $contaUm->recuperaSaldo();
// var_dump($contaUm);
// var_dump($contaDois);