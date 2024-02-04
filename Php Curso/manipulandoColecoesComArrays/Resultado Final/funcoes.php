<?php

//Função de ordem decrescente para ARRAY utilizando usort- ordenar utilizando metodo do usuario
function ordenarNotas(array $nota1, array $nota2):int
{  
     // EXEMPLO 1 Decrescente maior nota para menor nota
    // // para que a nota 1 venha primeiro utilizamos -1 ou número negativo.
    // if($nota1['nota'] > $nota2['nota']){
    //     return -1;
    // }//caso queria colocar a nota1(primeiro parâmetro) depois utilize número possitivo;
    // else if($nota1['nota'] < $nota2['nota']){
    //     return 1;
    // }//caso queria que não faça nada utilize o 0
    // return 0;


    // EXEMPLO 2 - Crescente
    //return $nota1['nota'] <=> $nota2['nota'];
    // EXEMPLO 3 - Decrescente
    return $nota2['nota'] <=> $nota1['nota'];



   
};
function ordenarNot($nota1,$nota2):int
{   
    // // EXEMPLO 1 Decrescente maior nota para menor nota
    // // para que a nota 1 venha primeiro utilizamos -1 ou número negativo.
    // if($nota1 > $nota2){
    //     return -1;
    // }//caso queria colocar a nota1(primeiro parâmetro) depois utilize número possitivo;
    // else if($nota1 < $nota2){
    //     return 1;
    // }//caso queria que não faça nada utilize o 0
    // return 0;


    //EXEMPLO 2 - Crescente
     return $nota1<=> $nota2;
    //EXEMPLO 3 - Decrescente
    
    }
    

  