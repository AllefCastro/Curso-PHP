<?php

$nome = 'Allef de Castro';
//str_contarins($variavel,'oque você procura')
$ehDaMinhaFamilia = str_contains($nome,'Castro');
//
if($ehDaMinhaFamilia){
    echo "$nome é da minha família". PHP_EOL;
}   else{
    echo "$nome não é da minha família". PHP_EOL;
}

