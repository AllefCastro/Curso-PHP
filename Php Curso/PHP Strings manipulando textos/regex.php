<?php

$telefones = ['(22) 98979 - 5689', ' (55) 98 658 - 5665', '(11) 5669 - 5998'];

// Para informa que começa ^ Inicio $ Final

foreach ($telefones as $telefone) {
    $regex =  '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/';
    $telefoneValidos = preg_match(
        $regex,
        $telefone,
        $correspondencia
        // aqui vai armazenar resultado se for positivo e também se 
        // tiver grupo de captura em um array
    );

    var_dump($correspondencia);

    if ($telefoneValidos) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone não válido' . PHP_EOL;
    }


    echo preg_replace($regexcla,
        '(xx) \2',
        $telefone
    )  . PHP_EOL;
}
;