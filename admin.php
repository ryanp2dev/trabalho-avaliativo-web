<?php 
 require "src/conecao.php";
 require "src/modelo/Produto.php";
 require "src/Repositorio/ProdutoRepositorio.php";

 $produtosRepositorio = new ProdutoRepositorio($pdo);
 $todosProdutos = $produtosRepositorio->buscarDados();


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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Serenatto - Admin</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo.png" class="logo-admin" alt="logo">
    <h1>Admistração </h1>
   
  </section>
  <h2>Lista de Produtos</h2>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($todosProdutos as $produto):?>
          <tr>
            
            <td><?=$produto->GetNome()?></td>
            <td><?=$produto->getTipo()?></td>
            <td><?=$produto->GetDescricao()?></td>
            <td><?=$produto->GetPreco()?></td>
            <td>
            <form action="/editar-produto" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$produto->getId()?>">
                <button class ="botao-editar">Editar</button>
              </form>
            </td>
            <td>
              <form action="/excluir" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$produto->getId()?>">
                <button class ="botao-excluir">Excluir</button>
              </form>
            </td> 
          </tr>
          <?php endforeach?>
      </tbody>
    </table>
  <a class="botao-cadastrar" href="cadastrar">Cadastrar produto</a>
  <form action="gerador-pdf" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>
</main>
</body>
</html>