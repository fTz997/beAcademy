-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar o banco de dados --
USE db_escola;

-- Excluir uma tabela -- 
DROP TABLE tb_professor;

-- Criar uma tabela -- 
CREATE TABLE tb_professor (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) UNIQUE NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE tb_aluno (
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL,
  email VARCHAR(255) NOT NULL,
  matricula INT UNIQUE
);

-- Inserir dados -- 
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
  'Victor', "victor2@email.com", 22312312312
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES (
  'Feitoza', "feitoza2@email.com", 21122233344
);