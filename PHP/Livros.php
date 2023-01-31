<?php

   class Livro{
    private string $autor;
    private string $valor;
    private string $estoque;
    private string $ano;
    private string $editora;
    private string $nomelivro;

   

   public function __construct(string $autor, string $valor,string $estoque,string $ano,string $editora,string $nomelivro){
   $this->autor = $autor;
   $this->valor = $valor;
   $this->estoque = $estoque;
   $this->ano = $ano;
   $this->editora = $editora;
   $this->nomelivro = $nomelivro;
   }//.
        public function getAutor() : string{
            return $this->autor;
        }//fim do getautor

        public function setAutor(string $autor) : void{
            $this->autor = $autor;
        }//fim do setautor

        public function getValor() : string{
            return $this->valor;
        }//fim do getvalor

        public function setValor(string $valor) : void{
            $this->valor = $valor;
        }//fim do setvalor

        public function getEstoque() : string{
            return $this->estoque;
        }//fim do getestoque

        public function setEstoque(string $estoque) : void{
            $this->estoque = $estoque;
        }//fim do setestoque

        public function getAno() : string{
            return $this->ano;
        }//fim do getano

        public function setAno(string $ano) : void{
            $this->ano = $ano;
        }//fim do setano

        public function getEditora() : string{
            return $this->editora;
        }//fim do geteditora

        public function setEditora(string $editora) : void{
            $this->editora = $editora;
        }//fim do seteditora


        public function getNomelivro() : string{
            return $this->nomelivro;
        }//fim do getnomelivro

        public function setNomelivro(string $nomelivro) : void{
            $this->nomelivro = $nomelivro;
        }//fim do setnomelivro
    }
?>