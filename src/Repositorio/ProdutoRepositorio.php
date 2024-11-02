<?php 

class ProdutoRepositorio
{
   private PDO $pdo;

   /**
     * @param PDO $pdo
     */

public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
}




public function opcoesLanches(): array
 {    
$sql = "select * from produtos where tipo = 'Hambúrguer'";
$statement = $this->pdo->query($sql);
$Produtoslanches = $statement->fetchAll(PDO::FETCH_ASSOC);   

   $dadosLanche = array_map(function ($lanches){
     return $this->formarObjeto($lanches);
  },$Produtoslanches);

  return $dadosLanche;


   }


public function buscarDados(): array 
{
   $sqlBuscar = "select * from  produtos";
   $statement = $this->pdo->query($sqlBuscar);
   $todosProdotudos = $statement->fetchAll(PDO::FETCH_ASSOC);

   $dadosGeral = array_map(function ($bebidas){
      return $this->formarObjeto($bebidas);
   },$todosProdotudos);

   return $dadosGeral;

}



public function deletar(int $id)
{
    $sql = "DELETE FROM produtos WHERE id = ?";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1,$id);
    $statement->execute();

} 


// public function buscar(int $id)
// {

//      $sql = "SELECT * FROM produtos WHERE id = ?";
    
//     // Preparar a declaração
//     $statement = $this->pdo->prepare($sql);
    
//     // Associar o valor do ID
//     $statement->bindValue(1, $id, PDO::PARAM_INT);
    
//     // Executar a SQL
//     $statement->execute();
    
//     // Buscar o resultado
//     $produto = $statement->fetchAll(PDO::FETCH_OBJ);

   

//    return $this->formarObjeto($produto);



// }


public function buscar(int $id)
{
    $sql = "SELECT * FROM produtos WHERE id = ?";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $id);
    $statement->execute();

    $dados = $statement->fetch(PDO::FETCH_ASSOC);

    return $this->formarObjeto($dados);
}



public function opcoesBebidas(): array 
{
    $sql1 = "select * from  produtos where tipo = 'Bebida' ";
$statement = $this->pdo->query($sql1);
$ProdutosBebidas = $statement->fetchAll(PDO::FETCH_ASSOC);   

   $dadosbebidas = array_map(function ($bebidas){
     return $this->formarObjeto($bebidas);
  },$ProdutosBebidas);

  return $dadosbebidas;

}

public function salvar(Produto $produto)
{
    $sql = "INSERT INTO produtos (img, nome, descricao, valor, tipo) VALUES (?,?,?,?,?)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $produto->getImagem());
    $statement->bindValue(2, $produto->getNome());
    $statement->bindValue(3, $produto->getDescricao());
    $statement->bindValue(4,$produto->getPreco());
    $statement->bindValue(5, $produto->getTipo());
    $statement->execute();
}


public function atualizar(Produto $produto)
    {
        $sql = "UPDATE produtos SET img = ?, nome = ?, descricao = ?, valor = ?, tipo = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getImagem());
        $statement->bindValue(2, $produto->getNome());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4,$produto->getPreco());
        $statement->bindValue(5, $produto->getTipo());
        $statement->bindValue(6, $produto->getId());
        $statement->execute();
    }



   private function formarObjeto($dados)
   {
       return new Produto($dados['id'],
           $dados['tipo'],
           $dados['nome'],
           $dados['descricao'],
           $dados['valor'],
           $dados['img']);
   }



}


