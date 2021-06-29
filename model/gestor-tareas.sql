CREATE DATABASE IF NOT EXISTS `gestor-tareas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gestor-tareas`;

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL AUTO_INCREMENT,
`nombre` varchar(50) NOT NULL DEFAULT '',
`paterno` varchar(50) NOT NULL DEFAULT '',
`materno` varchar(50) NOT NULL DEFAULT '',
`sexo` varchar(50) NOT NULL DEFAULT '',
`nacimiento` date NOT NULL,
`email` varchar(50) NOT NULL DEFAULT '',
`contrasenia` varchar(50) NOT NULL DEFAULT '',
PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;