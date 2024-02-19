<?php

// <!-- A orientação a objetos em PHP é uma abordagem de programação que organiza o código em classes e objetos. Uma classe é um modelo para criar objetos, definindo suas propriedades (variáveis) e métodos (funções). Os objetos são instâncias das classes, cada um com seu próprio estado (valores das propriedades) e comportamento (métodos). Isso promove a reutilização de código, encapsulamento de dados e facilita a manutenção e expansão do software. Em PHP, você pode definir classes usando a palavra-chave class, criar objetos usando o operador new e acessar propriedades e métodos usando a notação de seta (->). A orientação a objetos em PHP permite criar aplicações mais organizadas, modulares e escaláveis. -->

class Pessoa
{
    // Propriedades
    public $nome;
    public $idade;

    // Método construtor
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método para exibir uma saudação
    public function saudacao()
    {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos!";
    }
}

// Criando um objeto Pessoa
$joao = new Pessoa("João", 30);

// Chamando o método saudacao()
echo $joao->saudacao(); // Saída: "Olá, meu nome é João e tenho 30 anos!"
