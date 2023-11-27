
create database bd_produtos;

use bd_produtos;


CREATE TABLE tb_produtos (
   id_produto INT (11) not null auto_increment primary key,
   nome_produto varchar(45) NOT NULL,
   descricao_produto varchar(7) NOT NULL,
   valor_produto DECIMAL (10,2) NOT NULL,
 );


ALTER TABLE tb_produtos
ADD COLUMN disponibilidade varchar(3) NOT NULL;
