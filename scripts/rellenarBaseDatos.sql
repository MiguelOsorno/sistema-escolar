use sistemaescolar;

insert into maestro(clave,nombre,apellido,direccion,telefono)
values(1001,'Juan','Mendez','Col.monterrey','111-111-111');
insert into maestro(clave,nombre,apellido,direccion,telefono)
values(1002,'Enrique','perez','col.manzana','112-112-112');
insert into maestro(clave,nombre,apellido,direccion,telefono)
values(1003,'Luis','Gutierrez','col.limon','113-113-113');


insert into materia(nombre)
values('Español');
insert into materia(nombre)
values('Matematicas');
insert into materia(nombre)
values('Ciencias');


insert into carrera(nombre)
values('Ingenieria en sistemas');
insert into carrera(nombre)
values('Licenciatura en derecho');


insert into cuatrimestre(descripcion)
values ('primer cuatrimestre');
insert into cuatrimestre(descripcion)
values ('segundo cuatrimestre');
insert into cuatrimestre(descripcion)
values ('tercer cuatrimestre');
insert into cuatrimestre(descripcion)
values ('cuarto cuatrimestre');
insert into cuatrimestre(descripcion)
values ('quinto cuatrimestre');
insert into cuatrimestre(descripcion)
values ('sexto cuatrimestre');
insert into cuatrimestre(descripcion)
values ('septimo cuatrimestre');
insert into cuatrimestre(descripcion)
values ('octavo cuatrimestre');

insert into grupo(letra,modalidad,id_carrera,cicloEscolar)
values ('A','Escolarizado',1,'2010-2011');
insert into grupo(letra,modalidad,id_carrera,cicloEscolar)
values ('B','Escolarizado',1,'2010-2011');
insert into grupo(letra,modalidad,id_carrera,cicloEscolar)
values ('A','Escolarizado',2,'2010-2011');
insert into grupo(letra,modalidad,id_carrera,cicloEscolar)
values ('B','Escolarizado',2,'2010-2011');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2001,'Miguel','Lopez',1,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2002,'Humberto','Torrez',1,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2003,'Fernando','Sanchez',1,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2004,'Angela','Jimenez',1,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2005,'Jose','Mendoza',1,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2006,'Diana','Montejo',2,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2007,'Mariana','Diaz',2,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2008,'Pablo','Diaz',2,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2009,'Miguel','Cruz',2,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2010,'Laura','Ruiz',2,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2011,'Ricardo','Perez',3,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2012,'Jenifer','Torrez',3,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2013,'Patricia','Vazquez',3,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2014,'Teresa','Dominguez',3,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2015,'Adriana','Herrera',3,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2016,'Melisa','Herrera',4,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2017,'Mario','Lopez',4,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2018,'Patricio','Chable',4,1,'Hombre');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2019,'Estefania','Mendoza',4,1,'Mujer');

insert into alumno(matricula,nombre,apellido,id_grupo,id_cuatrimestre,sexo)
values(2020,'Leticia','Arcos',4,1,'Mujer');

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,1,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,1,6,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,1,7,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,2,7,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,2,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,2,7,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,3,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,3,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,3,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,4,6,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,4,6,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,4,6,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,5,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,5,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,5,9,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,6,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,6,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,6,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,7,7,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,7,7,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,7,7,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,8,10,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,8,10,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,8,10,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,9,7,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,9,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,9,6,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,10,8,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,10,8,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,10,8,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,11,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,11,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,11,9,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,12,8,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,12,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,12,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,13,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,13,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,13,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,14,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,14,6,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,14,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,15,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,15,7,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,15,6,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,16,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,16,10,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,16,7,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,17,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,17,8,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,17,7,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,18,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,18,5,'Reprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,18,5,'Reprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,19,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,19,9,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,19,9,'Aprobado',1);

insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(1,1,20,10,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(2,2,20,10,'Aprobado',1);
insert into calificacion(id_materia,id_maestro,id_alumno,valor,estado,id_cuatrimestre)
values(3,3,20,10,'Aprobado',1);



insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(1,1,"8:00am-9:00am",1,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(1,2,"9:00am-10:00am",2,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(1,3,"10:00am-11:00am",3,1);

insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(2,1,"9:00am-10:00am",1,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(2,2,"8:00am-9:00am",2,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(2,3,"12:00am-1:00pm",3,1);

insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(3,1,"11:00am-12:00am",1,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(3,2,"10:00am-11:00am",2,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(3,3,"8:00am-9:00am",3,1);

insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(4,1,"10:00am-11:00am",1,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(4,2,"11:00am-12:00am",2,1);
insert into clase(id_grupo,id_materia,horario,id_maestro,id_cuatrimestre)
values(4,3,"9:00am-10:00am",3,1);



