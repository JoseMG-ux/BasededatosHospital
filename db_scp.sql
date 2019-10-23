-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla db_csp.ingresopaciente: 2 rows
/*!40000 ALTER TABLE `ingresopaciente` DISABLE KEYS */;
INSERT INTO `ingresopaciente` (`id`, `nombre`, `apellido`, `cedula`, `habitacion`, `cama`, `fecha`, `medico`) VALUES
	(1, 'Fulano', 'Mengano', '6-711-569', 'p2p4', '20', '10/23/2019', 'FF15'),
	(2, 'Geronimo', 'Doble', '9-8625', 'ERF', '5', '10/22/2019', '45');
/*!40000 ALTER TABLE `ingresopaciente` ENABLE KEYS */;

-- Volcando datos para la tabla db_csp.medicos: 8 rows
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` (`id`, `codigo`, `nombre`, `apellido`, `telefono`, `especialidad`) VALUES
	(1, 'FF15', 'Jose Salvador', 'Lopez', '7899', 'Hidrologia'),
	(2, '123', 'Jose Salvador', 'Lopez', '4455', 'Hidrologia'),
	(3, '159', 'Juan', 'Ramirez', '7899', 'Urologia'),
	(4, '45', 'Maria', 'Delgado', '77889', 'Gastroenterologia'),
	(5, 'M89', 'Jose', 'Moreno', '99966', 'Traumologia'),
	(6, 'JE', 'Jorge', 'Angel', '7779', 'Hidrologia'),
	(7, 'Gang', 'Guillermo', 'Navarro', '55678', 'Reumatologia'),
	(8, 'D69', 'Dani Ja', 'Dimartino', '66396969', 'Infectologia');
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;

-- Volcando datos para la tabla db_csp.pacientes: 8 rows
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`cedula`, `nombre`, `apellido`) VALUES
	('6-711-569', 'Fulanito', 'Pepito'),
	('8898', 'menganito', 'loquesea');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando datos para la tabla db_csp.usuario: 1 rows
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `login`, `clave`, `nombre`) VALUES
	(1, 'admin', 'admin', 'Jose');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
