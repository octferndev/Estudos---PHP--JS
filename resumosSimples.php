<?php

No terminal, php-a entra no modo interativo

1. Variável
Uma variável é como uma "caixa" que armazena dados que podem ser utilizados e manipulados durante a execução do programa. Em PHP, as variáveis sempre começam com o símbolo $. Por exemplo:

php
Copiar código
$nome = "João";
$idade = 25;
Aqui, $nome armazena o texto "João", e $idade armazena o número 25.

2. Função
Uma função é um bloco de código que realiza uma tarefa específica e pode ser chamado em várias partes do programa. Em PHP, uma função pode ser criada com a palavra-chave function, e ela pode ou não retornar um valor. Exemplo:

php
Copiar código
function saudacao($nome) {
    return "Olá, " . $nome;
}

echo saudacao("Maria"); // Saída: Olá, Maria
Essa função saudacao recebe um parâmetro $nome e retorna uma saudação personalizada.

3. Método
Um método é como uma função, mas é específico de uma classe (conceito usado em programação orientada a objetos - OOP). No PHP, um método é uma função dentro de uma classe e geralmente realiza operações relacionadas aos dados daquela classe.

php
Copiar código
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
echo $pessoa->getNome(); // Saída: Carlos
Aqui, setNome e getNome são métodos da classe Pessoa.

4. Classe
Uma classe é um "molde" para criar objetos em programação orientada a objetos. Em PHP, uma classe é definida com a palavra-chave class e pode conter propriedades (variáveis) e métodos (funções).

php
Copiar código
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
echo $meuCarro->buzinar(); // Saída: Bip Bip!
5. Objeto
Um objeto é uma instância de uma classe, ou seja, é uma "cópia" da classe com valores específicos. No exemplo acima, $meuCarro é um objeto da classe Carro.

6. Biblioteca
Uma biblioteca é um conjunto de funções, classes e rotinas reutilizáveis que ajudam a resolver problemas específicos. PHP possui várias bibliotecas internas para manipulação de strings, arrays, conexão com banco de dados, entre outras. Exemplo de uso da biblioteca DateTime em PHP:

php
Copiar código
$data = new DateTime();
echo $data->format('Y-m-d'); // Exibe a data atual no formato ano-mês-dia
7. Framework
Um framework é um conjunto de bibliotecas e padrões que fornece uma estrutura para o desenvolvimento de aplicações. No PHP, frameworks como Laravel, Symfony e CodeIgniter facilitam a construção de aplicações web ao incluir estruturas de segurança, gerenciamento de rotas, e acesso a banco de dados.

8. Banco de Dados
Um banco de dados armazena e organiza dados de forma estruturada, e um programa em PHP pode interagir com ele para salvar, buscar, atualizar e excluir dados. O MySQL é um dos bancos de dados mais comuns usados com PHP. Para conectar e usar um banco de dados MySQL em PHP:

php
Copiar código
$conn = new mysqli("localhost", "usuario", "senha", "meu_banco");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
9. Array
Um array é uma estrutura de dados que armazena múltiplos valores em uma única variável. Em PHP, arrays podem ser indexados por número ou por chave associativa.

php
Copiar código
// Array indexado
$frutas = ["maçã", "banana", "laranja"];

// Array associativo
$pessoa = ["nome" => "João", "idade" => 30];
10. Estruturas de Controle
Estruturas de controle permitem que o programa tome decisões ou repita ações. Em PHP, os exemplos mais comuns são if, else, while, for e foreach.

php
Copiar código
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
11. Operadores
Operadores em PHP são símbolos usados para realizar operações. Eles incluem:

Aritméticos: +, -, *, /
Comparação: ==, !=, >, <
Lógicos: &&, ||, !
Exemplo de uso de operadores:

php
Copiar código
$a = 10;
$b = 20;

if ($a < $b && $a != 0) {
    echo "$a é menor que $b e diferente de zero";
}
//12. Comentários
//Comentários são usados para documentar o código e não são executados pelo PHP. Há dois tipos principais de comentários:

// Comentário de linha única
/* Comentário
   de múltiplas linhas */
