<?php
    $servidor = "localhost";
    $nomebanco = "lista_de_usuarios";
    $porta = 3306;
    $senha = "815674815";
    $usuario = "root";

    $conexao = new mysqli($servidor, $nomebanco, $porta, $senha, $usuario);

    if($conexao->connect_error)
    {
        echo "Erro de conexão: " . $conexao->connect_error;
        exit;
    }
?>