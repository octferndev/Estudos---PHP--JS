<?php


$nome = 'João Octávio';
$idade = 18;
$sexo = 'F';
$acompanhado = 'false';

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver apartir de 18 anos e for do sexo masculino ou se tiver 16 e estiver acompanhado de um maior de idade\n";

if ($idade >= 18 && $sexo == 'M'){
    echo "Você tem $idade anos e é do sexo masculino." . PHP_EOL;
    echo "\t Pode entrar";
}else if ($idade >= 16 && $acompanhado == 'true'){
    echo "Você tem pelo menos 16 e esta acomapanhado.\n";
    echo "\t Pode entrar";
}else {
    echo "\t TODO ERRADO AMIGO!!\n";
    echo "\t VAZAAA!!!";
}
echo "Adeus!\n";




$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;




/* 
&&
||
and
or

Os operadores de comparação (<, >, ==, !=) têm a mesma precedência, logo, serão avaliados da esquerda para direita. 
*/
