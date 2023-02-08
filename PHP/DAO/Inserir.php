<?php
    namespace PHP\Modelo\DAO;

    require_once("Conexao.php");

    use PHP\Modelo\DAO\Conexao;
    
    class Inserir{
        public function Cadastrar(Conexao $conexao, string $nomeDaTabela, string $autor, string $valor, string $estoque, string $ano, string $editora, string $nomedolivro){
            try{
                $conn = $conexao->Conectar();//Abrindo conexao com banco
                $sql = "insert into $nomeDaTabela (codigo, autor, valor, estoque, ano, editora, nomedolivro) values ('', '$autor', '$valor', '$estoque', '$ano', '$editora', '$nomedolivro')";//Escrevi o script
                $result = mysqli_query($conn, $sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    return "<br><br>|-----------ADM ADICIONOU MAIS UM LIVROS PARA VENDA-----------|";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cad

        public function CadastrarCliente(Conexao $conexao, string $nomeDaTabela, string $cpf, string $nome, string $telefone, string $logradouro, string $numero, ){

        }
    }//fim da class
?>