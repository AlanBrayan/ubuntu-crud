-- Crear la tabla 'empresas'
CREATE TABLE empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Crear la tabla 'productos' con una clave foránea hacia 'empresas'
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL,
    empresa_id INT,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id)
);



-- Crear la tabla 'ventas' con relación a 'productos' y 'empresas'
CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    producto_id INT,
    empresa_id INT,
    cantidad INT NOT NULL,
    precio_total INT NOT NULL,
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    FOREIGN KEY (empresa_id) REFERENCES empresas(id)
);
