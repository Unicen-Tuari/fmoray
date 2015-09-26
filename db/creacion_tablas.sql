create table categoria (

  id_categoria integer not null AUTO_INCREMENT,
  nombre_categoria varchar (30) not null,
  constraint pk_Categoria primary key(id_categoria)
  
);

create table producto (

  id_producto integer not null AUTO_INCREMENT,
  id_categoria integer not null,
  nombre varchar (40) not null,
  descripcion varchar(200) not null,
  precio numeric(7,2) not null,
  ruta_imagen varchar(100) null,
  constraint pk_Producto primary key(id_producto)

);

ALTER TABLE `producto`
ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE RESTRICT ON UPDATE CASCADE;
