<?php
   require "src/conecao.php";
   require "src/modelo/Produto.php";
   require "src/Repositorio/ProdutoRepositorio.php";

   $produtosRepositorio = new ProdutoRepositorio($pdo);
   $dadosLanches = $produtosRepositorio->opcoesLanches();
   $dadosBebidas = $produtosRepositorio->opcoesBebidas();

   
?>


<!doctype html>
<html lang="pt-br   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Lanchonete</title>
</head>
<body>
    <main>
        
        <h2>Cardápio Digital</h2>


        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções para o Lanches </h3>
                
            </div>
            <div class="container-almoco-produtos">

                <?php foreach($dadosLanches as $produto):?>
               
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?=$produto->getImagemDiretorio()?>">
                        </div>
                        <p><?=$produto->getNome()?></p>
                        <p><?=$produto->GetDescricao()?></p>
                        <p><?=$produto->getPreco()?></p>
                       
                    </div>
                <?php endforeach;?>

            </div>
        </section>

        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções de Bebidas</h3>
            </div>
            <div class="container-almoco-produtos">
                <?php foreach($dadosBebidas as $produto):?>
                <?php if($produto->getTipo() == "Bebida"):?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src=" <?=$produto->getImagemDiretorio()?> ">
                    </div>
                    <p><?=$produto->getNome()?></p>
                    <p><?=$produto->GetDescricao()?></p>
                    <p><?=$produto->getPreco()?></p>
                </div>
                <?php endif;?>
               <?php endforeach;?>
            </div>
        </section>
    </main>
</body>
</html>