//------ Criando tabela
CREATE TABLE db_cursos( id_curso int not null, imagem_curso varchar(100) not null, nome_curso char(50) not null, resumo text null, data_cadastro datetime not null, ativo boolean default true, investimento float(8,2) default 0 )

//------ ALTER TABEL (CHANGE, ADD, DROP)
ALTER TABLE tb_clientes CHANGE idade idade INT(3) NOT NULL;

ALTER TABLE tb_pedidos CHANGE data_hora data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

//------ Inserindo valores
INSERT INTO tb_cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria)VALUES(2, 'curso_javascript.jpg', 'JavaScript Completo', 'Você vai aprender tudo que precisa para se tornar um programador JavaScript', '2020-08-08 10:30:00', 1, 220.25, 9);

//------- filtrando
SELECT id_curso, nome_curso FROM tb_cursos WHERE id_curso = 2;

//------- filtrando tb_alunos
SELECT 
	* 
FROM
	tb_alunos
WHERE 
	idade < 25 AND	interesse = 'Jogos';

//------- filtrando tb_alunos com BETWEEN
SELECT 
	* 
FROM
	tb_alunos
WHERE 
	idade BETWEEN 20 AND 30;

//------- filtrando tb_alunos com IN
SELECT 
	* 
FROM
	tb_alunos
WHERE 
	interesse IN('jogos', 'esporte', 'musica');

//------- filtrando tb_alunos com NOT IN
SELECT 
	* 
FROM
	tb_alunos
WHERE 
	interesse NOT IN('jogos', 'esporte', 'musica');

//------- filtrando tb_alunos com LIKE "%" e "_"
SELECT * FROM tb_alunos WHERE nome LIKE 'br%';

//------- filtrando tb_alunos com ORDER BY "ASC ou DESC"
SELECT 
	* 
FROM
	tb_alunos
WHERE 
	idade BETWEEN 18 AND 70
ORDER BY
	estado ASC, nome ASC, idade ASC;

//------- LIMIT e OFFSET
SELECT * FROM `tb_alunos` LIMIT 5 OFFSET 25;
ou
SELECT * FROM `tb_alunos` LIMIT 25, 5;

//------- MAX, MIN, AVG
SELECT MAX(investimento), FROM tb_cursos;

//------- MAX, MIN, AVG
SELECT MAX(investimento), FROM tb_cursos;

//------- SUM, COUNT
SELECT SUM(investimento), FROM tb_cursos;

//------- GROUP BY
SELECT COUNT(*) AS qtde_interesse, estado FROM `tb_alunos` GROUP BY interesse ORDER BY qtde_interesse DESC;

//------- HAVING
SELECT COUNT(*) AS qtde_uf, estado FROM `tb_alunos` GROUP BY estado HAVING qtde_uf >=5;

//------- UPDATE
UPDATE tb_alunos SET interesse = 'Esporte', estado = 'MG' WHERE id_aluno = 13;

//------- DELETE FROM
DELETE FROM tb_alunos WHERE id_alunos = 101; 

//-------------Relacionando tabelas--------
//------- PRIMARY KEY e FOREIGN KEY
CREATE DATABASE bd_loja_virtual;

CREATE TABLE tb_produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	produto VARCHAR(200) NOT NULL,
	valor FLOAT(8,2) NOT NULL
);

CREATE TABLE tb_descricoes_tecnicas(
	id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_produto INT NOT NULL,
	descricao_tecnica TEXT NOT NULL,
	FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);

//------- JOINING TABLES
SELECT * FROM tb_produtos LEFT JOIN tb_imagens ON(tb_produtos.id_produto = tb_imagens.id_produto);

Outro exemplo
SELECT tb_clientes.id_cliente, tb_clientes.nome, tb_clientes.idade, tb_pedidos.id_pedido, tb_pedidos.data_hora, tb_produtos.produto, tb_produtos.valor FROM tb_clientes LEFT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente) LEFT JOIN tb_pedidos_produtos ON(tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos ON(tb_pedidos_produtos.id_produto = tb_produtos.id_produto)

//------- ALIAS TABLE
SELECT * FROM tb_produtos AS p LEFT JOIN tb_descricoes_tecnicas AS dt ON(p.id_produto = dt.id_produto);

Outro exemplo
SELECT
	p.id_produto,
    p.produto,
    p.valor,
    dt.descricao_tecnica
FROM 
	tb_produtos AS p 
LEFT JOIN 
	tb_descricoes_tecnicas AS dt 
ON(p.id_produto = dt.id_produto);