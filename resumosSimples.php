<?php

No terminal, php-a entra no modo interativo

1. Vari�vel
Uma vari�vel � como uma "caixa" que armazena dados que podem ser utilizados e manipulados durante a execu��o do programa. Em PHP, as vari�veis sempre come�am com o s�mbolo $. Por exemplo:

php
Copiar c�digo
$nome = "Jo�o";
$idade = 25;
Aqui, $nome armazena o texto "Jo�o", e $idade armazena o n�mero 25.

2. Fun��o
Uma fun��o � um bloco de c�digo que realiza uma tarefa espec�fica e pode ser chamado em v�rias partes do programa. Em PHP, uma fun��o pode ser criada com a palavra-chave function, e ela pode ou n�o retornar um valor. Exemplo:

php
Copiar c�digo
function saudacao($nome) {
    return "Ol�, " . $nome;
}

echo saudacao("Maria"); // Sa�da: Ol�, Maria
Essa fun��o saudacao recebe um par�metro $nome e retorna uma sauda��o personalizada.

3. M�todo
Um m�todo � como uma fun��o, mas � espec�fico de uma classe (conceito usado em programa��o orientada a objetos - OOP). No PHP, um m�todo � uma fun��o dentro de uma classe e geralmente realiza opera��es relacionadas aos dados daquela classe.

php
Copiar c�digo
class Pessoa {
    public $nome;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->setNome("Carlos");
echo $pessoa->getNome(); // Sa�da: Carlos
Aqui, setNome e getNome s�o m�todos da classe Pessoa.

4. Classe
Uma classe � um "molde" para criar objetos em programa��o orientada a objetos. Em PHP, uma classe � definida com a palavra-chave class e pode conter propriedades (vari�veis) e m�todos (fun��es).

php
Copiar c�digo
class Carro {
    public $marca;
    public $cor;

    public function buzinar() {
        return "Bip Bip!";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->cor = "Azul";
echo $meuCarro->buzinar(); // Sa�da: Bip Bip!
5. Objeto
Um objeto � uma inst�ncia de uma classe, ou seja, � uma "c�pia" da classe com valores espec�ficos. No exemplo acima, $meuCarro � um objeto da classe Carro.

6. Biblioteca
Uma biblioteca � um conjunto de fun��es, classes e rotinas reutiliz�veis que ajudam a resolver problemas espec�ficos. PHP possui v�rias bibliotecas internas para manipula��o de strings, arrays, conex�o com banco de dados, entre outras. Exemplo de uso da biblioteca DateTime em PHP:

php
Copiar c�digo
$data = new DateTime();
echo $data->format('Y-m-d'); // Exibe a data atual no formato ano-m�s-dia
7. Framework
Um framework � um conjunto de bibliotecas e padr�es que fornece uma estrutura para o desenvolvimento de aplica��es. No PHP, frameworks como Laravel, Symfony e CodeIgniter facilitam a constru��o de aplica��es web ao incluir estruturas de seguran�a, gerenciamento de rotas, e acesso a banco de dados.

8. Banco de Dados
Um banco de dados armazena e organiza dados de forma estruturada, e um programa em PHP pode interagir com ele para salvar, buscar, atualizar e excluir dados. O MySQL � um dos bancos de dados mais comuns usados com PHP. Para conectar e usar um banco de dados MySQL em PHP:

php
Copiar c�digo
$conn = new mysqli("localhost", "usuario", "senha", "meu_banco");

if ($conn->connect_error) {
    die("Conex�o falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
9. Array
Um array � uma estrutura de dados que armazena m�ltiplos valores em uma �nica vari�vel. Em PHP, arrays podem ser indexados por n�mero ou por chave associativa.

php
Copiar c�digo
// Array indexado
$frutas = ["ma��", "banana", "laranja"];

// Array associativo
$pessoa = ["nome" => "Jo�o", "idade" => 30];
10. Estruturas de Controle
Estruturas de controle permitem que o programa tome decis�es ou repita a��es. Em PHP, os exemplos mais comuns s�o if, else, while, for e foreach.

php
Copiar c�digo
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
11. Operadores
Operadores em PHP s�o s�mbolos usados para realizar opera��es. Eles incluem:

Aritm�ticos: +, -, *, /
Compara��o: ==, !=, >, <
L�gicos: &&, ||, !
Exemplo de uso de operadores:

php
Copiar c�digo
$a = 10;
$b = 20;

if ($a < $b && $a != 0) {
    echo "$a � menor que $b e diferente de zero";
}
//12. Coment�rios
//Coment�rios s�o usados para documentar o c�digo e n�o s�o executados pelo PHP. H� dois tipos principais de coment�rios:

// Coment�rio de linha �nica
/* Coment�rio
   de m�ltiplas linhas */
