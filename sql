CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    img VARCHAR(255) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    tipo VARCHAR(50) NOT NULL
);


INSERT INTO produtos (img, nome, descricao, valor, tipo) VALUES 
('img/hamburguer1.jpg', 'Hambúrguer Clássico', 'Delicioso hambúrguer com carne, queijo e alface.', 19.99, 'Hambúrguer'),
('img/hamburguer2.jpg', 'Hambúrguer Vegano', 'Saboroso hambúrguer à base de plantas.', 17.50, 'Hambúrguer'),
('img/hamburguer3.jpg', 'Cheeseburguer', 'Hambúrguer com queijo cheddar e bacon crocante.', 22.00, 'Hambúrguer'),
('img/hamburguer4.jpg', 'Produto 4', 'loremmmmm', 18.59, 'Hambúrguer');



INSERT INTO produtos (img, nome, descricao, valor, tipo) VALUES 
('img/suco_laranja.jpg', 'Suco de Laranja', 'Suco natural de laranja 400ml', 5.90, 'Bebida'),
('img/suco_abacaxi.jpg', 'Suco Abacaxi com Hortelã', 'Suco natural de abacaxi com hortelã 400ml', 5.90, 'Bebida'),
('img/torre.jpg', 'Torre de Chopp', 'Torre de cerveja 3,5l', 20.00, 'Bebida'),
('img/cerveja.jpg', 'Copo de Cerveja', 'Copo de cerveja 400ml', 8.50, 'Bebida');
