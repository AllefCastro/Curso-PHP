<?php

$turma1=[
    "Allef"=> 8,
    "Sabrinna"=> 10,
    "Magaly"=> 9,
    "Antonio"=>9,
    "João"=> 7,
];
$turma2=[
    
    "Sabrinna"=> 10,
    "Magaly"=> 7,
    "Antonio"=>8

];

//Verifica a diferença de valores do primeiro array para o restante
var_dump(array_diff($turma1,$turma2));
// Verifica a diferença de chaves do primeiro array para o restante
var_dump(array_diff_key($turma1,$turma2));
//Verifica a diferença de valores e valores do primeiro array para o restante
var_dump(array_diff_assoc($turma1,$turma2));

//pega os indices que não tenha no segundo array
$alunosFaltantes = array_diff_key($turma1,$turma2);

//pega todas as chaves do array array_keys($array,parametro de valor'Valor',true===);
$nomesAlunos = array_keys($alunosFaltantes);
//pega todas os valores do array array_keys($array,parametro de valor'Valor',true===);
$notasAlunos = array_values($alunosFaltantes);
// junta arrays porém precisa ter o mesmo tamanho
var_dump(array_combine($notasAlunos,$nomesAlunos));
// inverter valor por indice - chaves por valor
var_dump(array_flip($alunosFaltantes));

