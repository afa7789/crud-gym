
DROP TABLE IF EXISTS `plano`;
CREATE TABLE IF NOT EXISTS `plano`(

`id` INT UNSIGNED NOT NULL,
`tipo` VARCHAR(50),
`nome` VARCHAR (50) NOT NULL,
`quantidade` INT NOT NULL,
`valor` REAL NOT NULL,
`tolerancia` INT NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO `plano` (`id`,`tipo`,`nome`,`quantidade`,`valor`,`tolerancia`) VALUES
(1,'diario','Test',0,0.0,0),
(2,'semanal','Test',0,0.0,0),
(3,'mensal','Test',0,0.0,0),
(4,'bimestral','Test',0,0.0,0),
(5,'trimestral','Test',0,0.0,0),
(6,'semestral','Test',0,0.0,0),
(7,'anual','Test',0,0.0,0),
(8,'colaborador','Test',0,0.0,0),
(9,'livre','Test',0,0.0,0),
(10,'sem plano','Test',0,0.0,0);



DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario`(

`matricula` INTEGER NOT NULL,
`plano_id` INT UNSIGNED NOT NULL,
`email` VARCHAR (50) NOT NULL, 
`nome` VARCHAR (50) NOT NULL,
`senha` VARCHAR (50) NOT NULL, 
`telefone` VARCHAR (50) NOT NULL,
`endereco` VARCHAR (50) NOT NULL,
`data_de_nascimento` DATE NOT NULL,
`cpf` VARCHAR (50) UNIQUE,
`observacoes` VARCHAR (50),
`instagram` VARCHAR (50),
`facebook` VARCHAR (50),
`twitter` VARCHAR (50),
PRIMARY KEY (`matricula`),
FOREIGN KEY (`plano_id`) REFERENCES `plano` (`id`)
);

DROP TABLE IF EXISTS `admnistrador`;
CREATE TABLE `administrador`(

`id` INTEGER NOT NULL,
`email` VARCHAR (50) NOT NULL, 
`nome` VARCHAR (50) NOT NULL,
`senha` VARCHAR (50) NOT NULL,
PRIMARY KEY (`id`)
);


DROP TABLE IF EXISTS `adimplencia`;
CREATE TABLE IF NOT EXISTS `adimplencia`(
  
`matricula` INTEGER NOT NULL,
`ano_mes` DATE NOT NULL,
`pagamento` INTEGER ,

CONSTRAINT FOREIGN KEY ( `matricula` ) REFERENCES `usuario` ( `matricula` )

);

DROP TABLE IF EXISTS `entrada_usuario`;
CREATE TABLE IF NOT EXISTS `entrada_usuario`(
`matricula` INTEGER NOT NULL,
`ano` INTEGER NOT NULL,
`mes` INTEGER NOT NULL,
`semana` INTEGER NOT NULL,
`dia` INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`)
);

DROP TABLE IF EXISTS `frequencia`;
CREATE TABLE IF NOT EXISTS `frequencia`(
`matricula` INTEGER NOT NULL,
`data_freq` DATE NOT NULL,
`contador` INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`)

);

 


