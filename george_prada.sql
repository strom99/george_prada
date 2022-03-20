DROP DATABASE IF EXISTS george_prada;

CREATE DATABASE george_prada;

USE george_prada;


CREATE TABLE rol (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE persona (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NULL,
    fecha_nacimiento DATE NULL,
    apellido_1 VARCHAR(100) NULL,
    apellido_2 VARCHAR(100) NULL,
    telefono VARCHAR(100) NULL,
    direccion VARCHAR(100) NULL
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

INSERT INTO productos VALUES(null, 'zapatillas nike','zapatillas-nike.png', 'nike', 34.99 ,'calzados',21,'Unisex','<p>Zapatillas europeras</p> <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquid facere nemo incidunt,
                    quasi delectus vero enim voluptatem asperiore.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquid facere nemo incidunt,
                    quasi delectus vero enim voluptatem asperiore.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquid facere nemo incidunt,
                    quasi delectus vero enim voluptatem asperiore.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, aliquid facere nemo incidunt,
                    quasi delectus vero enim voluptatem asperiore.</li>
            </ul>');


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

INSERT INTO rol (nombre) VALUES('Admin');
INSERT INTO rol (nombre) VALUES('Usuario');
