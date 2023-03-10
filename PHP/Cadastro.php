<?php
    require_once("Endereco.php");

    class Cadastro{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private Endereco $endereco;
        //Inserir a variavel que representa Endereço

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//fim do construtor

        //Metodos Gets e Sets
        public function getCPF() : string{
            return $this->cpf;
        }//fim do getCPF

        public function setCPF(string $cpf) : void{
            $this->cpf = $cpf;
        }//fim do getCPF

        public function getNome() : string{
            return $this->nome;
        }//fim do getNome

        public function setNome(string $nome) : void{
            $this->nome = $nome;
        }//fim do getNome

        public function getTelefone() : string{
            return $this->telefone;
        }//fim do getTelefone

        public function setTelefone(string $telefone) : void{
            $this->telefone = $telefone;
        }//fim do getTelefone
    }//fim da classa Pessoa
?>