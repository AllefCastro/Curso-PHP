<?php
$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}

// extract($array) - ela tranforma todas as chaves em variavel e atribui o valor a elas
// utiliza somente em dados que você confia
extract($contas);
var_dump($titular, $saldo);

// compact('variavel','variavel2') Ele faz um array com as variaveis e os valores dela 
// ex [variavel=>5,variavel2='teste'];
$teste = compact('titular','saldo');
var_dump($teste);