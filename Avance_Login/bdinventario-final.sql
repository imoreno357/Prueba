create database bdinventario;

use bdinventario;

create table usuario
(
	usuario varchar(120),
	clave varchar(120)
);

insert into usuario values('barrial','123');
insert into usuario values('moreno','123');

create table categoria_producto
(
	catprod_cod char(5) primary key,
	catprod_nom varchar(50)
);

insert into categoria_producto values('P0001','Escritorio');
insert into categoria_producto values('P0002','Portatil');
insert into categoria_producto values('P0003','Electrodomestico');
insert into categoria_producto values('P0004','Accesorios');
insert into categoria_producto values('P0005','Printers');

create table articulos
(
	art_cod int primary key AUTO_INCREMENT,
	art_nom varchar(50),
	art_uni varchar(10),
	art_pre numeric(10, 2) ,
	art_stk int,
    catprod_cod char(5)
);

insert into articulos values('','MOUSE GENIOUS','UNI', 25,235,'P0004');
insert into articulos values('','PENTIUM III 600','UNI',150,220,'P0001');
insert into articulos values('','PENTIUM IV 2.5 GB','UNI',150,220,'P0001');
insert into articulos values('','FUNDAS NAYLON','MTS', 40, 35,'P0004');
insert into articulos values('','MEMORIA ZIP 32','UNI', 60, 80,'P0004');
insert into articulos values('','TINTA BJC21 B/N','CAJA', 20, 20,'P0004');
insert into articulos values('','IMPRESORA EPSON 1234','UNI',355,120,'P0005');
insert into articulos values('','MONITOR SYNMASTER 3N','UNI',300, 33,'P0004');
insert into articulos values('','MONITOR VIEWSONIC','UNI',450, 92,'P0004');
insert into articulos values('','PENTIUM MMX 260','UNI',120, 97,'P0001');
insert into articulos values('','MOUSE MICROSOFT','UNI', 50,320,'P0004');
insert into articulos values('','MEMORIA DIMM 64','UNI', 60, 25,'P0004');
insert into articulos values('','MEMORIA DIMM 128','UNI', 82, 25,'P0004');
insert into articulos values('','IMPRESORA CANON 1000','UNI',205,200,'P0005');
insert into articulos values('','IMPRESORA Sansung Laser','UNI',1805,200,'P0005');
insert into articulos values('','TINTA BJC21 COLOR','UNI', 20,120,'P0004');
insert into articulos values('','TINTA B/n 484','UNI', 20,120,'P0004');
insert into articulos values('','TINTA Color 624','UNI', 20,120,'P0004');
insert into articulos values('','TECLADO EPSON 102','UNI', 75,122,'P0004');
insert into articulos values('','MOUSE TECH','UNI', 30,190,'P0004');
insert into articulos values('','USB KISTON 128','UNI',160, 97,'P0004');
insert into articulos values('','USB DE 256','UNI',220, 20,'P0004');
insert into articulos values('','USB DE 512','UNI',260, 25,'P0004');
insert into articulos values('','AMPLIFICADOR TRINITON','UNI',100,20,'P0004');
insert into articulos values('','PARLANTES DE 50 watss','UNI', 70,12,'P0004');
insert into articulos values('','TECLADO EPSON 102','UNI', 75,122,'P0004');
insert into articulos values('','MOUSE TECH','UNI', 30,190,'P0004');

create table cat_empleado
(
    cod_cat char(5) primary key,    
    nom_cat varchar(50)
);    
     
insert into cat_empleado values('C0001','almacenero');
insert into cat_empleado values('C0002','jefe almacen');

create table empleado
(
	emp_cod char (5) Primary Key,
	emp_nom varchar (35),
	emp_tel char(8),
	emp_cor varchar(30),
	emp_dir varchar (30),
    nom_cat char(5)
);      

insert into empleado values('E0001','Alvarez PeÃ±a,Angel','123-4567','importa@hotmail.com','Av. La Marina 1234','C0001');
insert into empleado values('E0002','Ponte Gomez, ALEJANDRO','658-4503','alex@yahoo.com','Av. Pardo 456','C0002');
insert into empleado values('E0003','ZuÃ±iga Mateo,Carlos','567-4566',null,'Av. Principal 123','C0001');
insert into empleado values('E0004','Tucto de Souza,Bernardo','567-4566',null,'Av. Principal 123','C0001');
insert into empleado values('E0005','Vilela Bustamante,Percy', null    , 'obando@hotmail.com','Calle San Pedro 134','C0001');
insert into empleado values('E0007','Montes Diaz, MIGUEL','567-8356','importa02@hotmail.com','Jr. Naranjos 5689','C0001');
insert into empleado values('E0008','Rojas Gallo, Jorge','789-4568','importa22@yahoo.com','Av. Habich 543','C0001');
insert into empleado values('E0009','Garcia La Riva,Guiliana','789-4073','conde@idat.com','Av. Iquitos 228','C0001');
insert into empleado values('E0011','Wong Atoccsa, Isarrael','768-5704',null,'Calle Cueva 432','C0001');
insert into empleado values('E0012','LiÃ±an Arias, FERNANDO',null     ,'redondo@hotmail.com','Av. Javier Prado 114','C0001');
insert into empleado values('E0013','Vergara Hidalgo, Jose','567-8466','importa03@hotmail.com','Jr. Pio XII 112','C0001');
insert into empleado values('E0014','Bustamante Moptta, Diego','567-4566',null,'Av. Principal 123','C0001');
insert into empleado values('E0015','Alvarado Cueva, Guiliana','456-3457','campos@yahoo.com','Jr. Dominico 554','C0001');
insert into empleado values('E0016','Antero Flores, Gregorio','746-0647','ramirez@idat.com','Jr. Salavery 876','C0001');
insert into empleado values('E0017','Diaz Mal Partida,Jose','567-4566',null,'Av. Guardia Civil 123','C0001');
insert into empleado values('E0018','Gutierrez Pazos , Mauricio','897-5783','importa04@hotmail.com','Av. Habich 4567','C0001');
insert into empleado values('E0019','Mendoza Ramirez, Ester','958-3569','importa05@yahoo.com','Av. Wilson 678','C0001');
insert into empleado values('E0020','Salazar Santiago, Merlo','654-6534','pardo@walla.com','Av. Pardo 567','C0001');
insert into empleado values('E0021','Carrasco Lee, Laura','267-8958','importa05@hotmail.com','Av. Wilson 1267','C0001');

create table proveedor
(
	prov_cod int primary key AUTO_INCREMENT ,
	prov_nom varchar(100),
	prov_telf varchar(10),
	prov_dir varchar(100)
);

insert into proveedor values('','Rosas Roblez Juan','354-4578','av.marina 150');
insert into proveedor values('','Florez Estrada Maria','314-2112','av.san martin 350');
insert into proveedor values('','Cordova  Ruiz Alberto','304-6584','av.arequipa 800');
insert into proveedor values('','Montero Rojas Antony','351-4000','av.san luis 520');

alter table articulos add foreign key (catprod_cod) references categoria_producto(catprod_cod);
alter table empleado add foreign key (nom_cat) references cat_empleado(cod_cat);

select * from  articulos;
select * from  cat_empleado;
select * from  categoria_producto;
select * from  empleado;
select * from  usuario;
select * from  proveedor;




