<?php

$nome = 'Allef de Castró';
$email = 'allefcastro@gmail.com.br';
$senha = 'ÂÍãçã';

// strler trabalha com bit então letra == 1, com acento á == 2 ou ´ == 1 a == 1
echo strlen($senha) . PHP_EOL;
if(strlen($senha)>8){
    echo 'Senha é segura'.PHP_EOL;
} else{
    echo 'Não é segura'.PHP_EOL;
}


// String position strpos($variavel,'possição da string')
$posicaoDoArroba = strpos($email,'@');

$usuario = substr($email,0,$posicaoDoArroba);
// substr($variavel,aonde inicia,até aonde vai) - caso não coloque nada depois do inicio ele vai até o final
echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email,$posicaoDoArroba+1).PHP_EOL;



[$nome, ,$sobrenome] = explode(' ',$nome);

echo 'nome: '. $nome . PHP_EOL; 
echo 'Sobrenome: '. $sobrenome . PHP_EOL; 