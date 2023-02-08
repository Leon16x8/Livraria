<?php
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Excluir;
    use PHP\Modelo\DAO\Inserir;

    require_once("Endereco.php");
    require_once("Cadastro.php");
    require_once("Cliente.php");
    require_once("Login.php");
    require_once("Livros.php");
    require_once("DAO/Conexao.php");
    require_once("DAO/Inserir.php");
    require_once("DAO/Consultar.php");
    require_once("DAO/Atualizar.php");
    require_once("DAO/Excluir.php");


    $enderecLeo = new Endereco("Avenida Senador Vergueiro", "400", "Senacão", "Centro", "São Bernardo do Campo", "São Paulo", "SP", "Brasil", "02345000");
    $clientLeo = new Cliente("2255555555", "Leonardo", "11945692198", $enderecLeo);
    $livrosLeo = new Livro("DJAZEITONA", "1200", "3", "2023", "Pikanaxereca", "Tortão pra Esquerda");
    $consultar = new Consultar();
    $inserir = new Inserir();
    $excluir = new Excluir();
    $atualizar = new Atualizar();
    $contaLeo = new LoginADM("Leonardo", "23232", $clientLeo, $consultar, $inserir, $excluir, $atualizar);


    echo ("|------------LOGIN------------|");
    echo ("<br>");
    echo $contaLeo->AcessarConta($contaLeo,"Leonardo","23232", $consultar, $inserir, $excluir, $atualizar);
    
    




?>