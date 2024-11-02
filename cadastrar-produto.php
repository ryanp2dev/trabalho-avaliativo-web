<?php 
require "src/conecao.php";
require "src/modelo/Produto.php";
require "src/Repositorio/ProdutoRepositorio.php";

 if (isset($_POST['cadastro'])){
        $produto = new Produto(null,
            $_POST['tipo'],
            $_POST['nome'],
            $_POST['descricao'],
            $_POST['preco']
        );

        if (isset($_FILES['imagem'])){
            $produto->setImagem(uniqid() . $_FILES['imagem']['name']);
            move_uploaded_file($_FILES['imagem']['tmp_name'], $produto->getImagemDiretorio());
        }
       
        $produtoRepositorio = new ProdutoRepositorio($pdo);
        $produtoRepositorio->salvar($produto);

        header("Location: admin");
    }
?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cadastrar Produto</title>
</head> 
<body>
<main>
    <section class="container-admin-banner">
        <img src="img/logo.png" class="logo-admin" alt="logo-serenatto">
        <h1>Cadastro de Produtos</h1>
        <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
    </section>
    <section class="container-form">
        <form action="cadastrar" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>
            <div class="container-radio">
                <div>
                    <label for="cafe">Hambúrguer</label>
                    <input type="radio" id="cafe" name="tipo" value="Hambúrguer" checked>
                </div>
                <div>
                    <label for="almoco">Bebida</label>
                    <input type="radio" id="almoco" name="tipo" value="Bebida">
                </div>
            </div>
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" required>

            <label for="preco">Preço</label>
            <input type="text" id="preco" name="preco" placeholder="Digite uma descrição" required>

            <label for="imagem">Envie uma imagem do produto</label>
            <input type="file" name="imagem" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar produto"/>
        </form>
    
    </section>
</main>
<?php
require_once("fim-html.php");

