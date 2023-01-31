<?php
require_once("Cliente.php");
require_once("Livros.php");
class LoginADM{
    private string $login;
    private string $senha;
    private Cliente $cliente;
    private Livro $livro;

    private int $quantidadedeLivro;

    public function __construct(string $login, string $senha, Cliente $cliente, Livro $livro, int $quantidadedeLivro){
            $this->login = $login;
            $this->senha = $senha;
            $this->cliente = $cliente;
            $this->livro = $livro;
            $this->quantidadedeLivro = $quantidadedeLivro;
        }

        public function getLogin() : string{
            return $this->login;
        }
        public function getSenha() : string{
            return $this->senha;
        }

        public function setLogin(string $login) : void{
            $this->login = $login;
        }
        public function setSenha(string $senha) : void{
            $this->senha = $senha;
        }

        public function AcessarConta(loginADM $loginADM, string $login, string $senha, Livro $livro, int $quantidadedeLivro)
        {           
            if ($loginADM->getLogin() == $login && $loginADM->getSenha() == $senha)
            {
                echo("Logado com Sucesso");
                echo $livro->imprimir($livro);
                echo $livro->comprar($livro, $quantidadedeLivro);
                return;
            }   
            echo("Login e senha incorretos, digite corretamente.");       
        }

}
?>