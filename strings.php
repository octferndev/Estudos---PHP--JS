<?php

$nome = 'Jo�o Oct�vio';
$idade = 21;
$email =  'teste123@gmail.com';

echo "\t Ol� mundo (meu nome � \"$nome\")" . PHP_EOL; //PHP END OF LINE
echo "\t Ol� mundo (minha idade � $idade)\n";
echo "\t Ol� mundo (meu email � $email)\n";

echo PHP_EOL . PHP_EOL;

echo "Voc� s� pode entrar, se tiver mais de 18 anos\n";

echo "Voc� tem $idade anos. Pode entrar";


// \"algo"\ (zz caracter de escape)
// . PHP_EOL
// \n quebra linha
// \t executa um tab

/* echo 'Ol� mundo (minha idade �,',$idade,')'; //funciona
echo 'Ol� mundo (minha idade � $idade)'; //nao funciona */