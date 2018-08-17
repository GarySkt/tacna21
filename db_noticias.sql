CREATE DATABASE tacna21;
	USE tacna21;

	CREATE TABLE autor
		(
			idautor int(5) NOT NULL AUTO_INCREMENT,
			nombre varchar(40) NOT NULL,
			apellidos varchar(50) NOT NULL,
			correo varchar(50) NOT NULL,
			PRIMARY KEY (idautor)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4;
	
	CREATE TABLE categoria
		(
			idcategoria int(5) NOT NULL,
			descripcion varchar(100) COLLATE utf8_spanish_ci NOT NULL,
			PRIMARY KEY (idcategoria)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6;
		
	CREATE TABLE noticias
		(
			id int(5) NOT NULL AUTO_INCREMENT,
			titulo varchar(100) NOT NULL,
			texto text NOT NULL,
			idcategoria int(5) NOT NULL,
			fecha date NOT NULL,
			imagen varchar(100) DEFAULT NULL,
			idautor int(5) DEFAULT NULL,
			PRIMARY KEY (id)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23;
		
	CREATE TABLE usuario
		(
			idusuario int(5) NOT NULL AUTO_INCREMENT,
			usuario varchar(40) NOT NULL,
			nombre varchar(40) NOT NULL,
			apellidos varchar(50) NOT NULL,
			pass varchar(6) NOT NULL,
			email varchar(50) NOT NULL,
			PRIMARY KEY (idusuario)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1;

insert into autor (idautor,nombre,apellidos,correo) values (1,'Gary','Calle','gcalle@gmail.com'),
(2,'Juan','Calle','gcalle@gmail.com'),
(3,'Percy','Calle','gcalle@gmail.com'),
(4,'Joel','Calle','gcalle@gmail.com'),
(5,'Piere','Calle','gcalle@gmail.com');

INSERT INTO categoria (idcategoria, descripcion) VALUES
		(1, 'politica'),
		(2, 'policial'),
		(3, 'tecnologia'),
		(4, 'social'),
		(5, 'deportes');
			
insert into noticias values (1,'titulo 1','texto 1',1,'2017-04-05','imagens/foto1.jpg',1)		

		
select titulo,texto,descripcion,fecha,imagen,concat(nombre,' ',apellidos) as nombres
from categoria as c inner join noticias as n
on c.idcategoria=n.idcategoria
inner join autor as a
on n.idautor=a.idautor
order by fecha desc