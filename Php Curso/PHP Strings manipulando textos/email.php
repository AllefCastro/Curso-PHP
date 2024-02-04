<?php


$nome= 'Allef de Castro';

function email($nome):void{


    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para {motivo do contato} 

    {assinatura}.

    FIM;

    echo $conteudoEmail;
  
};

email($nome);
