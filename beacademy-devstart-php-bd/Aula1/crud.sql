USE db_escola;

-- Inserir 1 registro --
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('victor', 'victor@email.com', 12312312312);

-- Inserir mais de 1 registro
INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Zezim das rapaduras', "zezim@email.com", '12312311111'), ('Maria das rapaduras', "maria@email.com", '12312311122'), ('Luiza das rapaduras', "lulu@email.com", '12312311123');

-- Excluir 1 registro --
DELETE FROM tb_professor WHERE id='1';

-- Excluir todos --
DELETE FROM tb_professor;

-- Editar dados de 1 registro 
UPDATE tb_professor SET nome="Luiza" WHERE cpf=12312311123;

-- Editar dados de todos os registros --
UPDATE tb_professor SET nome="Francico"; 

-- Selecionar todos dados de todos os professores--
SELECT * FROM tb_professor;

-- Selecionar todos os dados do professor de id=5;
SELECT * FROM tb_professor WHERE id =5;

-- Selecionar alguns dados de todos os professores -- 
SELECT nome, cpf FROM tb_professor;
