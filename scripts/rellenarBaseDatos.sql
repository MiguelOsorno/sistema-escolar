use sistemaescolar;

insert into maestro 
values(1,'miguel','lopez');

insert into maestro
values(2,'angel','torrez');

insert into maestro
values(3,'luis','torrez');

insert into maestro
values(4,'ricardo','mendez');

insert into materia
values(1,'programacion');

insert into materia
values(2,'derecho');

insert into materia
values(3,'matematicas');

insert into materia
values(4,'ingles');

insert into carrera
values(1,'ingenieria en sistemas');

insert into carrera
values(2,'licenciatura en psicologia');

insert into carrera
values(3,'licenciatura en derecho');

insert into carrera
values(4,'licenciatura en mercadotecnia');

insert into grupo
values(1,'A','matutino',1);

insert into clase
values(1,1,1,'7:00am-8:00am',1);

insert into clase
values(2,1,2,'8:00am-9:00am',2);

insert into clase
values(3,1,3,'9:00am-10:00am',3);

insert into clase
values(4,1,4,'10:00am-11:00am',4);

insert into alumno
values(1,'juan','lopez',1);

insert into alumno
values(2,'miguel','jimenez',1);

insert into alumno
values(3,'mario','lopez',1);

insert into alumno
values(4,'jose','lopez',1);


insert into calificacion
values(1,1,1,1,5,'reprobado');


insert into calificacion
values(2,2,1,2,6,'aprobado');

insert into calificacion
values(3,3,1,3,6,'aprobado');

insert into calificacion
values(4,4,1,4,5,'reprobado');

///////////////////
