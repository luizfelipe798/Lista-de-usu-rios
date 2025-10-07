<?php
    $servidor = "localhost";
    $nomebanco = "lista_de_usuarios";
    $porta = 3306;
    $senha = "815674815";
    $usuario = "root";

    $conexao = new mysqli_connect($servidor, $nomebanco, $porta, $senha, $usuario);

    if($conexao->erros)
?>