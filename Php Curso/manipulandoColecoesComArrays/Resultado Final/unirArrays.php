<?php

    $turma2021 = [
        'Allef',
        'Sabrina',
        'Antonio',
        'Magaly',
        'joao'=>'Jonas'
    ];
    $turmaNovosAlunos = [
        'joao'=>'Jamile',
        'Pedro',
        'Henrique',
        'Marilene',
        'Laura'
    ];
    // cuidado essa função não é muito recomendada, ela ignora valores de chaves já existente
    // se já existe um indice 0 então caso no segundo array tiver o indice 0 ele vai ignorar

    //$turma2022 = $turma2021 +   $turmaNovosAlunos;

    // unir array, caso já exista uma chave string no array1 ele pega o valor do array2 e coloca no array 1
    // sobrepondo o valor do array1
    $turma2022 = array_merge($turma2021,$turmaNovosAlunos);


    // essa valor e mais utilizada para unir array e também você pode inserir novos valores se quiser
    // você precisa utilizar o ... isso valor com que ele envie somente os valores parecendo que ele não é mais array
    $turma2023 = [...$turma2021,'Teste',...$turmaNovosAlunos];

    var_dump($turma2022);
    var_dump($turma2023);

    // esse ... significa que ele pode enviar varios parametros de uma vez para função spread operator 
    //teste(...[1,2,3]);
    
    // esse ... significa que ele pode receber varios parametros de uma vez e colocar no array unpacking operator
    //function teste(array ...$test){};

    // array_push($array,'valorInserido','valorInserido) - Valor inserido finaldo do array
    array_push($turma2022,'teste02','teste03');
    $turma2022[]='teste04';

    // array_push($array,'valorInserido','valorInserido) - Valor inserido no começo do array, 
    array_unshift($turma2022,'Stephanie','Teste2202');
    var_dump($turma2022);

    // ele pega o array e tira o ultimo valor
    $teste=array_pop($turma2022);
    var_dump($teste);
    var_dump($turma2022);

    // tira o primeiro array e redefine as chaves para esquerda
    array_shift( $turma2022 );

