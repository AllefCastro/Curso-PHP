<?php

    require 'funcoes.php';

$notas=[
    10,
    8,
    9,
    7
];
$turma8=[
    8=>['nome'=>'Allef','nota'=> 8],
    5=>['nome'=> 'Sabrinna','nota' => 10],
    4=>['nome'=> 'joao', 'nota'=> 7]
];

$turma=[8,5,4];
$notasOrdenadas = $notas;

// ordenar em ordem crescente por letra e número
sort($notasOrdenadas);
// ordenar por função  usort($array,'function')
uksort($turma8,'ordenarNot');

var_dump($turma8);
// echo "Desordenadas";
// var_dump($notas);
// echo "Ordenadas";
// var_dump($notasOrdenadas);

// foreach($turma8 as $key => $value){

//     echo $key;

// };
