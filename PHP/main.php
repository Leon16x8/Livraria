<?php
    require_once("Endereco.php");
    require_once("Cadastro.php");
    require_once("Cliente.php");
    require_once("Login.php");
    require_once("Livros.php");

    $enderecLeo = new Endereco("Avenida Senador Vergueiro", "400", "Senacão", "Centro", "São Bernardo do Campo", "São Paulo", "SP", "Brasil", "02345000");
    $clientLeo = new Cliente("2255555555", "Leonardo", "11945692198", $enderecLeo);
    $livrosLeo = new Livro("DJAZEITONA", "1200", "3", "2023", "Pikanaxereca", "Tortão pra Esquerda");
    $contaLeo = new LoginADM("Leonardo", "23232", $clientLeo, $livrosLeo, 2 );

    echo ("|------------LOGIN------------|");
    echo ("<br>");
    echo $contaLeo->AcessarConta($contaLeo,"Leonardo","23232", $livrosLeo, 2);
    
    




?>