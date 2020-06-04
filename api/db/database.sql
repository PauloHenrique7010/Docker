CREATE DATABASE IF NOT EXISTS banco;
use banco;

create table produto(
    cod_produto int primary key auto_increment,
    nome_produto varchar(100)

);

insert into produto (nome_produto) values ('Produto 1'), ('Produto 2');