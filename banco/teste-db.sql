create database testebanco;

# drop database;

create table clientes(
	id serial PRIMARY KEY,
    nome CHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    cpf varchar(15) NOT NULL,
    telefone varchar(10)
);

INSERT INTO clientes(id, nome, email, cpf, telefone) values ("1","weslo","baino@gmail.com","14783945893","1111111");

ALTER TABLE clientes DROP COLUMN cpf;

ALTER TABLE clientes MODIFY COLUMN nome varchar(100); 

drop table clientes
