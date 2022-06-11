-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistema
CREATE DATABASE IF NOT EXISTS `sistema` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistema`;

-- Copiando dados para a tabela sistema.estacionamento: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
REPLACE INTO `estacionamento` (`id_estac`, `nome_estac`, `quant_vaga`) VALUES
	(1, 'Estacione Aqui', 110);
/*!40000 ALTER TABLE `estacionamento` ENABLE KEYS */;

-- Copiando dados para a tabela sistema.usuarios: 5 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
	(3, 'Admin1', 'admin1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin@demo.com.br', 2, 1, '2016-09-13 11:12:00'),
	(5, 'Admin2', 'admin2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin2@mail.com', 3, 1, '2019-04-11 00:00:00'),
	(6, 'Admin3', 'admin3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin3@mail.com', 4, 1, '2019-04-11 00:00:00'),
	(1, 'bia', 'bia', 'bia3', NULL, 2, 1, NULL),
	(2, 'rapha', 'rapha', 'rapha3', NULL, 1, 1, NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
