<?php
require_once("Cliente.php");
require_once("Livros.php");

class LoginADM{
    private string $login;
    private string $senha;
    private Cliente $cliente;

    public function __construct(string $login, string $senha, Cliente $cliente)
        {
            $this->login = $login;
            $this->senha = $senha;
            $this->cliente = $cliente;
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

        public function AcessarConta(loginADM $loginADM, string $login, string $senha)
        {           
            if ($loginADM ->getLogin() == $login && $loginADM->getSenha() == $senha)
            {
                echo("Logado com Sucesso");
                return;
            }   
            echo("Login e senha incorretos, digite corretamente.");       
        }



}
?>