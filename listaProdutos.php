<?php 

$listaProdutos = [
    [
        'img' => 'img/hamburguer1.jpg',
        'nome' => 'Produto 1',
        'descricao' => 'loremmmmm',
        'valor' => 18.59,
     
    ],
    [
        'img' => 'img/hamburguer2.jpg',
        'nome' => 'Produto 2',
        'descricao' => 'loremmmmm',
        'valor' => 18.59,
     
    ],
    [
        'img' => 'img/hamburguer3.jpg',
        'nome' => 'Produto 3',
        'descricao' => 'loremmmmm',
        'valor' => 18.59,
     
    ],
    [
        'img' => 'img/hamburguer4.jpg',
        'nome' => 'Produto 4',
        'descricao' => 'loremmmmm',
        'valor' => 18.59,
     
    ],
];
echo "<pre>";
print_r($listaProdutos);


foreach($listaProdutos as $produtos) {
   echo $produtos['img'];
}   