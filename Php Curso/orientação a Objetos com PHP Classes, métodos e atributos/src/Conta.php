<?php


class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}



$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Vinicius Dias';
var_dump($primeiraConta); // Verifique que o objeto já possui os dados necessários de uma conta criada
$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;
var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada

$a = 4;
$b = $a;
$b++;
echo $b;
echo $a;

$c = $segundaConta;
$c->saldo = 2000;
var_dump($segundaConta);