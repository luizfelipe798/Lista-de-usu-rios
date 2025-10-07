<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">

    <title>Lista de usuários</title>
</head>
<body>
    <?php 
        include 'menu.php'; 
    ?>

    <div class="conteudoprincipal-container">
        <div class="titulo-container">
            <h1>Lista de usuários</h1>
        </div>
        <div class="btn_adicionar-container">
            <a href="">Adicionar</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de nascimento</th>
                    <th>Sexo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Luiz</td>
                    <td>luiz@gmail.com</td>
                    <td>29/03/2008</td>
                    <td>Masculino</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body> 
</html> 