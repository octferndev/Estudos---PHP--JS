<?php


$nome = 'Jo�o Oct�vio';
$idade = 18;
$sexo = 'F';
$acompanhado = 'false';

echo PHP_EOL . PHP_EOL;

echo "Voc� s� pode entrar, se tiver apartir de 18 anos e for do sexo masculino ou se tiver 16 e estiver acompanhado de um maior de idade\n";

if ($idade >= 18 && $sexo == 'M'){
    echo "Voc� tem $idade anos e � do sexo masculino." . PHP_EOL;
    echo "\t Pode entrar";
}else if ($idade >= 16 && $acompanhado == 'true'){
    echo "Voc� tem pelo menos 16 e esta acomapanhado.\n";
    echo "\t Pode entrar";
}else {
    echo "\t TODO ERRADO AMIGO!!\n";
    echo "\t VAZAAA!!!";
}
echo "Adeus!\n";




$mensagem = $idade < 18 ? 'Voc� � menor de idade' : 'Voc� � maior de idade';
echo $mensagem;




/* 
&&
||
and
or

Os operadores de compara��o (<, >, ==, !=) t�m a mesma preced�ncia, logo, ser�o avaliados da esquerda para direita. 
*/
