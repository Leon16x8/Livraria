<?php
    require_once("Endereco.php");

    class Cliente extends Cadastro{

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            parent::__construct($cpf,$nome,$telefone,$endereco);//Chame a classe Pessoa
        }//fim do construtor
    }//fim da classe
?>