-- Volcando estructura de base de datos para encuesta
CREATE DATABASE IF NOT EXISTS `encuesta`; 
USE `encuesta`;

-- Volcando estructura para tabla encuesta.encuesta_resultados
CREATE TABLE IF NOT EXISTS `encuesta_resultados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `genero` int NOT NULL,
  `hobby` int NOT NULL,
  `tiempo_mensual_dedicado` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Almacena los resultados de una encuesta de 4 preguntas preestablecidas';

-- Volcando datos para la tabla encuesta.encuesta_resultados: ~1 rows (aproximadamente)
INSERT INTO `encuesta_resultados` (`id`, `fecha`, `nombre`, `genero`, `hobby`, `tiempo_mensual_dedicado`) VALUES
	(1, '2021-10-02 09:19:11', 'Juan', 1, 0, 'No corresponde'),
	(2, '2021-10-02 10:50:02', 'Soraya', 0, 9, '1'),
	(3, '2021-10-02 10:50:27', 'Carlos', 1, 3, '2'),
	(4, '2021-10-02 10:50:27', 'Jose', 1, 10, '3');

