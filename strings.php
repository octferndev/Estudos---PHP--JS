<?php

$nome = 'João Octávio';
$idade = 21;
$email =  'teste123@gmail.com';

echo "\t Olá mundo (meu nome é \"$nome\")" . PHP_EOL; //PHP END OF LINE
echo "\t Olá mundo (minha idade é $idade)\n";
echo "\t Olá mundo (meu email é $email)\n";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";

echo "Você tem $idade anos. Pode entrar";


// \"algo"\ (zz caracter de escape)
// . PHP_EOL
// \n quebra linha
// \t executa um tab

/* echo 'Olá mundo (minha idade é,',$idade,')'; //funciona
echo 'Olá mundo (minha idade é $idade)'; //nao funciona */