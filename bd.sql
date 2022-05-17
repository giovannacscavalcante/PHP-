
-- Estrutura para tabela 'usuarios'


create table 'usuarios'(
	'id' int(11) not null,
	'nome' varchar(220) not null,
	'email' varchar(220) not null,
	'created'datetime not null,
	'modified' datetime default null,
	ENGINE=MyISAM DEFAULT CHARSET=utf8;
)

--Fazendo dump de dados para tabela 'usuarios'

