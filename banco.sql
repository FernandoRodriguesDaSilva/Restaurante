create database if not exists restaurante;

create table if not exists pratos(
codigo int(30) auto_increment primary key not null,
nome varchar(50) not null,
categoria varchar(50) not null,
descricao varchar(500) not null,
preco float() not null,
calorias int() not null,
destaque boolean()not null,


)default character set utf8 default collate utf8_general_ci;
