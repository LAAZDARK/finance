
--creacion de la tabla departamentos
CREATE TABLE IF NOT EXISTS departamentos (
  idDepartamento INT NOT NULL AUTO_INCREMENT,
  descripcion VARCHAR(100) NOT NULL,
  activo TINYINT NOT NULL DEFAULT 1,
  fechaCreacion DATE NULL DEFAULT CURRENT_TIMESTAMP,
  fechaActualizacion DATE NULL DEFAULT CURRENT_TIMESTAMP,
  idEmpActualiza INT NULL DEFAULT 1,
  PRIMARY KEY (idDepartamento))
ENGINE = InnoDB