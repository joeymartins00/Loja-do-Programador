<!DOCTYPE html>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja do Dev</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <a href="index.php"><img src="Dev/logo.png" alt="logo" id="logo"></a>
    
</head>
<body>

    <header class="header">
        <nav class="barra">
            <ul class="nav-menu">
                <li class="item"><a href="index.php" class="nav-link">HOME</a></li>
                <li class="item"><a href="produtos.php" class="nav-link">PRODUTOS</a></li>    
                <li class="item"><a href="#" class="nav-link">CADASTRO</a>
                    <ul class="nav-menu lista2">
                        <li class="item"><a class="nav-link" href="cadastro_usuarios.php">CADASTRO DE USUÁRIOS</a></li>
                        <li class="item"><a class="nav-link" href="cadastro_produtos.php">CADASTRO DE PRODUTOS</a></li>
                        <li class="item"><a class="nav-link" href="cadastro_produtos.php">CADASTRO ENILDA</a></li>
                    </ul>
                </li>
                <li class="item"><a href="tela_login.php" class="nav-link">LOGIN</a></li>
            </ul>
        </nav>
    </header>
    <section> 
        <h1>CADASTRO DE PRODUTO</h1>
        <form class="form_cad"> 
            <input class="input_cad" type="text" placeholder="Código do Produto">
            <input class="input_cad" type="text" placeholder="Nome do Produto">
            <input class="input_cad" type="text" placeholder="Preço do Produto">
            <input class="submit_cad" type="submit" value="Cadastrar">
        </form>
    </section>
    
    
</body>
</html>