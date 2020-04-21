DROP TABLE IF EXISTS 'tipo_plano'
CREATE TABLE
IF NOT EXISTS 'tipo_plano'(
'id' INTEGER UNSIGNED NOT NULL,
'tipo' VARCHAR
(50) NOT NULL,
PRIMARY KEY
('id')
);

INSERT INTO 'tipo_plano' ('id','tipo')
VALUES
    (1, 'Diario'),
    (2, 'Semanal'),
    (3, 'Mensal'),
    (4, 'Anual'),
    (5, 'Livre'),
    (6, 'Colaborador'),
    (7, 'Sem Plano');




DROP TABLE IF EXISTS 'plano';
CREATE TABLE
IF NOT EXISTS 'plano'
(
    
'id' INT UNSIGNED NOT NULL,
'tipo_plano' INTEGER UNSIGNED NOT NULL,
'nome' VARCHAR
(50) NOT NULL,
'quantidade' INT NOT NULL,
'valor' REAL NOT NULL,
'tolerancia' INT NOT NULL,

PRIMARY KEY
('id'),
FOREIGN KEY
('tipo_plano') REFERENCES 'id'
('tipo_plano')
);



DROP TABLE IF EXISTS 'usuario';
CREATE TABLE
IF NOT EXISTS 'usuario' (

'matricula' INTEGER NOT NULL,
'plano_id' INT UNSIGNED NOT NULL,
'email' VARCHAR
(50) NOT NULL, 
'nome' VARCHAR
(50) NOT NULL,
'senha' VARCHAR
(50) NOT NULL, 
'telefone' VARCHAR
(50) NOT NULL,
'endereco' VARCHAR
(50) NOT NULL,
'data_de_nascimento' DATE NOT NULL,
'cpf' VARCHAR
(50) UNIQUE,
'observacoes' VARCHAR
(250),
'instagram' VARCHAR
(50),
'facebook' VARCHAR
(50),
'twitter' VARCHAR
(50),
PRIMARY KEY
('matricula'),
FOREIGN KEY
('plano_id') REFERENCES 'plano'
('id')
);



DROP TABLE IF EXISTS 'administrador';
CREATE TABLE 'administrador'
(

'id' INTEGER NOT NULL,
'email' VARCHAR
(50) NOT NULL, 
'nome' VARCHAR
(50) NOT NULL,
'senha' VARCHAR
(50) NOT NULL,
PRIMARY KEY
('id')
);


DROP TABLE IF EXISTS 'adimplencia';
CREATE TABLE
IF NOT EXISTS 'adimplencia'
(
  
'matricula' INTEGER NOT NULL,
'ano_mes' DATE NOT NULL,
'pagamento' INTEGER ,

CONSTRAINT FOREIGN KEY
( 'matricula' ) REFERENCES 'usuario'
( 'matricula' )

);

DROP TABLE IF EXISTS 'entrada_usuario';
CREATE TABLE
IF NOT EXISTS 'entrada_usuario'
(
'matricula' INTEGER NOT NULL,
'ano' INTEGER NOT NULL,
'mes' INTEGER NOT NULL,
'semana' INTEGER NOT NULL,
'dia' INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY
('matricula') REFERENCES 'usuario'
('matricula')
);

DROP TABLE IF EXISTS 'frequencia';
CREATE TABLE
IF NOT EXISTS 'frequencia'
(
'matricula' INTEGER NOT NULL,
'data_freq' DATE NOT NULL,
'contador' INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY
('matricula') REFERENCES 'usuario'
('matricula')

);

 


