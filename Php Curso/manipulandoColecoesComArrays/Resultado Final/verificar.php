<?php

$notas =[
    'vinicius' =>6,
    'Allef'=>null,
    'Sabrinna'=> 8,
    'Antonio'=>9,
    'Magaly'=>10,
    'Joao'=> 5
];

echo gettype($notas);

if (gettype($notas) === 'array') {
    echo 'Sim é um array'.PHP_EOL;
}
$notas2 = 2;

// is_tipoDeVariavel($variavel) - se sim exibe echo
if (is_int($notas2)) {
    echo 'Sim é um Inteiro'.PHP_EOL;
}


// array_is_list($variavel) Função de verificar se um array é númerico e está em ordem 
// crescente e também se ele não pula nenhum número começando do Zero se sim retorne verdadeiro
// com isso posso utilizar para fazer um contatador ou alguma coisa do tipo

var_dump(array_is_list($notas));

foreach($notas as $nome => $nota){
    if($nome === 'Allef'){
        echo $nome.'- Fez a prova'.PHP_EOL;
    }else{
        echo "$nome - Não fez a prova".PHP_EOL;
    }
}
// array_key_exists = verifica se a chave existe
// funcao array_key_exists('indice',$array) verifica se existe valor nesse indice ex: Número,Letras,null, etc..
// caso esteja em branco retorna false
var_dump(array_key_exists('Allef',$notas));// somente indices
// isset = verifica se a chave existe e não é nula
// funcao isset($array['indice']) verifica se é diferente de null ou sem dados, se não for null
// ou o campo estiver vazio ele retorna verdadeiro
var_dump(isset($notas['Allef']));

// in_array(valor,$array) = verifica se o valor existe nesse array
var_dump(in_array(8,$notas)); //somente valores dentro de indices. ==
var_dump(in_array(10,$notas,true));//in_array(valor,$array,utiliza verificação mais restrita ===)
// oque isso quer dizer?
// == semelhante(10 pode ser igual a '10'string) === precisa ser exatamente oque eu informei 

echo 'Quem tirou 10?'.PHP_EOL;
// array_seach(valor,$array):int|String|false informa de qual indice é esse valor. 
echo array_search(8,$notas);//==
echo array_search('10',$notas,true);//===

