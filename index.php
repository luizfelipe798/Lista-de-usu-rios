<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/body_index.css">
    <link rel="stylesheet" href="css/rodape.css">

    <title>Lista de usuários</title>
</head>
<body>
    <?php 
        include 'paginas/menu.php'; 
    ?>

    <div class="conteudoprincipal-container">
        <div class="titulo_e_botao-container">
            <div class="titulo-container">
                <h1>Lista de usuários</h1>
            </div>
            <div class="btn_adicionar-container">
                <a href="paginas/cadastrar.php">Adicionar</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de nascimento</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Luiz</td>
                    <td>luiz@gmail.com</td>
                    <td>29/03/2008</td>
                    <td>Masculino</td>
                    <td>
                        <a href="" class="btn-acao edicao">Editar</a>
                        <a href="" class="btn-acao exclusao">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
        include "paginas/rodape.php";
    ?>
</body> 
</html> 