DROP DATABASE IF EXISTS george_prada;

CREATE DATABASE george_prada;

USE george_prada;

#UPDATE persona SET nombre = "alison", apellido_1 = "choque", apellido_2 = "copajira", telefono = "33232" WHERE id = 6;

CREATE TABLE rol (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    etiqueta VARCHAR(100) NOT NULL
);

CREATE TABLE persona (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NULL,
    apellido_1 VARCHAR(100) NULL,
    apellido_2 VARCHAR(100) NULL,
    telefono VARCHAR(100) NULL,
	fecha_nacimiento DATE NULL,
	ciudad VARCHAR(100) NULL,
    pais VARCHAR(100) NULL
);

CREATE TABLE usuario (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    rol_id INT NULL,
    persona_id INT NOT NULL,
    CONSTRAINT fk_rol FOREIGN KEY(rol_id) REFERENCES rol(id) ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT fk_persona FOREIGN KEY(persona_id) REFERENCES persona(id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE direcciones(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre_completo VARCHAR(250) NULL,
    telefono INT NULL,
    calle VARCHAR(255) NULL,
    numero VARCHAR(255) NULL,
    codigo_postal INT(255) NULL,
    ciudad VARCHAR(255) NULL,
    provincia VARCHAR(255) NULL,
	user_id INT NULL,
	CONSTRAINT fk_usuario FOREIGN KEY (user_id) REFERENCES usuario(id) ON UPDATE CASCADE ON DELETE CASCADE
);
#INSERT INTO direcciones (user_id) VALUES (1);



CREATE TABLE productos(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100),
    imagen VARCHAR(255),
    marca VARCHAR(100) NOT NULL,
    precio DECIMAL(4, 2),
    categoria VARCHAR(50),
    cantidad INT,
    genero ENUM ('Hombre', 'Mujer','Unisex'),
    descripcion TEXT
);

INSERT INTO productos VALUES(NULL , 'ALEATORIO','card8.jpg','nike',23.32,'ropa',31,'Unisex','<p> ropa nueva </p>');
INSERT INTO productos VALUES(NULL , 'ALEATORIO','card11.png','nike',23.32,'ropa',31,'Unisex','<p> ropa nueva </p>');
INSERT INTO productos VALUES(NULL , 'alfa','girl.jpeg','zara',50.32,'ropa',31,'Unisex','<p> ropa nueva </p>');

INSERT INTO productos VALUES(null, 'Top nike','image1.jpg', 'top', 35.99 ,'ropa',11,'Mujer','top top');
INSERT INTO productos VALUES(null, 'camisera','image2.jpg', 'camiseta', 25.99 ,'ropa',11,'Hombre','camiseta');

CREATE TABLE favoritos(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_id INT NOT NULL,
    producto_id INT NOT NULL,
    CONSTRAINT fk_favorito_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT fk_favorito_producto FOREIGN KEY(producto_id) REFERENCES productos(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE compras(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_id INT NOT NULL,
    producto_id INT NOT NULL,
	CONSTRAINT fk_compras_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT fk_compras_producto FOREIGN KEY(producto_id) REFERENCES productos(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE carrito(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
	CONSTRAINT fk_carrito_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT fk_carrito_producto FOREIGN KEY(producto_id) REFERENCES productos(id) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO rol (etiqueta) VALUES('Admin');
INSERT INTO rol (etiqueta) VALUES('Usuario');


