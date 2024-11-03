# Projeto Avaliativo de Web-III

Crud com imagens feito em php 

## Requisitos para rodar a aplicacao 
- PHP8.0 ou superior 
- Composer 
- POSTGRES SQL 




## Instrucoes para banco de dados 

```crie o banco de dados lanchonete
CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    img VARCHAR(255) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    tipo VARCHAR(50) NOT NULL
);

# crie a inserção de dados do Lanches
INSERT INTO produtos (img, nome, descricao, valor, tipo) VALUES 
('hamburguer1.jpg', 'Hambúrguer Clássico', 'Delicioso hambúrguer com carne, queijo e alface.', 19.99, 'Hambúrguer'),
('hamburguer2.jpg', 'Hambúrguer Vegano', 'Saboroso hambúrguer à base de plantas.', 17.50, 'Hambúrguer'),
('hamburguer3.jpg', 'Cheeseburguer', 'Hambúrguer com queijo cheddar e bacon crocante.', 22.00, 'Hambúrguer'),
('hamburguer4.jpg', 'Produto 4', 'loremmmmm', 18.59, 'Hambúrguer');

# crie a inserção de dados do Bebidas

INSERT INTO produtos (img, nome, descricao, valor, tipo) VALUES 
('suco_laranja.jpg', 'Suco de Laranja', 'Suco natural de laranja 400ml', 5.90, 'Bebida'),
('suco_abacaxi.jpg', 'Suco Abacaxi com Hortelã', 'Suco natural de abacaxi com hortelã 400ml', 5.90, 'Bebida'),
('torre.jpg', 'Torre de Chopp', 'Torre de cerveja 3,5l', 20.00, 'Bebida'),
('cerveja.jpg', 'Copo de Cerveja', 'Copo de cerveja 400ml', 8.50, 'Bebida');

```

## Instrucoes para conecao no PHP com banco de dados 
- Configuracao padrao do projeto 
```
$endereco = 'localhost'; 
$banco = 'lanchonete';
$usuario = 'postgres';
$senha = 'root';
$porta = 5432;



```


## baixe o projeto 
- rode com o comando 


```
php -S localhost:8080 -t publico
```

