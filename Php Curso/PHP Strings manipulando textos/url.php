<?php

$url ='http://alura.com.br/';

//Essa variavel começa com ($variavel,'Contém');

if(str_starts_with($url,'https')){
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}
echo PHP_EOL;
// contém no final
if(str_ends_with($url,'.br')){
    echo 'É um domínio do Brasil';
} else {
    echo 'É não um domínio do Brasil';
}