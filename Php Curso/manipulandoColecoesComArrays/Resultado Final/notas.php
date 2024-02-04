<?php

    require 'funcoes.php';


$notas = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];
$notas2 = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];
$notas3 = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];
$notas4 = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];
$notas5 = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];

$notas6 = [
    'Allef'=> 6,
    'Sabrinna'=> 9,
    'Magaly' => 10,
    'Antonio' => 10,
    'Jose' => 7
];

$turma=[
    ['nome'=>'Allef','nota'=> 8],
    ['nome'=> 'Sabrinna','nota' => 10],
    ['nome'=> 'joao', 'nota'=> 7]
];
$turma2=[
    3=>['nome'=>'Allef','nota'=> 8],
    12=>['nome'=> 'Sabrinna','nota' => 10],
    10=>['nome'=> 'joao', 'nota'=> 7],
    13=>['nome'=> 'Jix', 'nota'=> 9]
];
// exibe de forma crescente, porém os indices não vão junto com o paramêtros
sort($notas);
// exibe de forma Crescente mantendo os indices junto com os paramêtros
asort($notas2);
// exibe de forma descrescente, porém os indices não vão junto com o paramêtros
rsort($notas3);

//   exibe de forma descrescente porém mantém o indices dos paramêtros
arsort($notas4);
// exibe de forma crescente as chaves(indices)
ksort($notas5);
// exibe de forma decrescente as chaves(indices)
krsort($notas6);


usort($turma,'ordenarNotas');


uksort($turma2,'ordenarNotas2');
// Exibe tudo da variavel
var_dump($notas);
var_dump($notas2);
var_dump($notas3);
var_dump($notas4);
var_dump($notas5);
var_dump($notas6);
var_dump($turma);
var_dump($turma2);

