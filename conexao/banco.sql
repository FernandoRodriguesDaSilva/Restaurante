create database if not exists restaurante;

create table if not exists tb_reserva(
id int auto_increment not null primary key,
nome varchar(30)not null,
email varchar(100)not null,
telefone varchar(100)not null,
mensagem varchar(255)not null,
data date not null,
num_pessoa int(100)not null
)default character set utf8 default collate utf8_general_ci;