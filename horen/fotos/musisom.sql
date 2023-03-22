CREATE SCHEMA `musisom` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE musisom;
CREATE TABLE IF NOT EXISTS cadastro (
  codigo int(3) NOT NULL auto_increment,
  tipo varchar(70) ,
  marca varchar(70) ,
  descricao varchar(100) ,
  valor varchar(70),
  qtd_estoque varchar(10) ,
  PRIMARY KEY (codigo),
   KEY codigo (codigo)
);
