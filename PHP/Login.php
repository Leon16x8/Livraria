<?php
require_once("Cliente.php");
require_once("Livros.php");
require_once("DAO/Conexao.php");
require_once("DAO/Inserir.php");
require_once("DAO/Consultar.php");
require_once("DAO/Atualizar.php");
require_once("DAO/Excluir.php");

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Inserir;
use PHP\Modelo\DAO\Consultar;
use PHP\Modelo\DAO\Atualizar;
use PHP\Modelo\DAO\Excluir;
class LoginADM{
    private string $login;
    private string $senha;
    private Cliente $cliente;
    private Consultar $consultar;
    private Inserir $inserir;
    private Excluir $excluir;
    private Atualizar $atualizar;

    public function __construct(string $login, string $senha, Cliente $cliente, Consultar $consultar, Inserir $inserir, Excluir $excluir, Atualizar $atualizar){
            $this->login = $login;
            $this->senha = $senha;
            $this->cliente = $cliente;
            $this->consultar = $consultar;
            $this->inserir = $inserir;
            $this->excluir = $excluir;
            $this->atualizar = $atualizar;
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

        public function Comprar(Consultar $consultar, int $quantidadeLivro, int $codigo){
            $conexao = new Conexao();
            $conexao->Conectar();
            if($quantidadeLivro <= $consultar->consultarEstoque($conexao, 'livros', '2')){
                try{
                $conn = $conexao->Conectar();
                $sql = "update livros set estoque = estoque - '$quantidadeLivro' where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);
                echo "<br><br>|------------COMPRA EFETUADA COM SUCESSO------------|";
                }catch(Exception $erro){
                    return $erro;
                }
                return;          
            }
            echo "COMPRA NÃO EFETUADA, ENVIADO PARA RESERVA";
        }

        public function AcessarConta(loginADM $loginADM, string $login, string $senha, Consultar $consultar, Inserir $inserir, Excluir $excluir, Atualizar $atualizar)
        {           
            if ($loginADM->getLogin() == $login && $loginADM->getSenha() == $senha)
            {
                echo("Logado com Sucesso");
                $conexao = new Conexao();
                $conexao->Conectar();
                echo "<br><br>|----------- Livros -----------|";
                echo $consultar->consultarTudo($conexao, 'livros');
                echo "<br>".$inserir->Cadastrar($conexao, 'livros', 'Amilton Neves', 200, 100, 2005, 'SemCao', 'A vida dos artista');
                echo "<br>". $excluir->excluir($conexao, 'livros', 12);
                echo "<br>" . $atualizar->atualizar($conexao, 'valor', '500', 10, 'livros');
                echo "<br><br> Livro Escolhido Para Compra " . $consultar->consultarIndividual($conexao, 'livros', '2');
                echo "<br>" . $loginADM->Comprar($consultar, 1, 2);
                return;
            }   
            echo("Login e senha incorretos, digite corretamente.");       
        }
}
?>