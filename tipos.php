<?php

$idade = 21; /* - intege - inteiro r */
$salario = 5875.54;  /* double - decimal - ponto flutuante - float (sinonimo) */

$divisao = 24 / 9;
$texto = "Texto";

$verdadeiro = "true";
$falso = "false";

echo $divisao;
echo gettype($falso);

/*

   - Uma vari�vel guarda um valor
   - Uma vari�vel tem um $ na frente e para atribuir um valor usamos =
   - O nome da vari�vel n�o deve usar caracteres especiais
   - Para imprimir o valor de uma vari�vel tamb�m usamos o comando echo
   - PHP d� suporte �s opera��es matem�ticas atrav�s dos seguintes operadores:
    -    Soma: +
    -    Subtra��o: -
    -    Multiplica��o: *
    -    Divis�o: /
    -    Resto da divis�o (m�dulo): %
    -    Pot�ncia: ** 
    -PHP possui tipos de dados como integer, double, string ou boolean (tipos primitivos)
    -PHP descobre os tipos de vari�veis dinamicamente (tipagem din�mica)
    -Utilizando gettype conseguimos descobrir o tipo de uma vari�vel

    */