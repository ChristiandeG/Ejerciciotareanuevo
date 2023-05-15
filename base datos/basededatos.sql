CREATE DATABASE base_datos_login;
CREATE TABLE users(
	id_users INT(11) PRIMARY KEY AUTO_INCREMENT,
    correo VARCHAR(255) NOT NULL,
    contrena VARCHAR(255)NOT NULL
    );

CREATE TABLE task(
  id_task INT(11) PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  descripcion TEXT,
  id_users_task INT(11) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_users_task) REFERENCES users(id_users)
);