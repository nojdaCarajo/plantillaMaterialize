
create table tusuarios(
iduser serial primary key,
coduser varchar (50),
nombre varchar (50),
apellido varchar (50),
direccion text,
correo varchar (50),
cedula varchar (16),
telefono varchar (50),
password varchar (50),
status integer
);


create table tcartas(
idcartas serial primary key,
codcartas varchar (50),
fecha varchar (50),
hora varchar (50),
titulo text,
descripcion text,
"user" bigint
);


alter table "tcartas" add constraint usercartas foreign key ("user") references tusuarios (iduser)
on delete cascade on update cascade;



INSERT INTO tusuarios(iduser,coduser,nombre,apellido,direccion,correo,cedula,telefono,password,status)VALUES(
1,'USER0001','Josue','Barreto','quinta don barreto, isla flotante de nimmir', 'jd_bg95@hotmail.com','25747486','0251-233-72-66','qwerty',1);

