-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: personaconsola
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `infoconsola`
--

DROP TABLE IF EXISTS `infoconsola`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `infoconsola` (
  `id_solicitud` int NOT NULL,
  `nombre_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre_consola` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ano_consola` int NOT NULL,
  `desarrolladora` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `generacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infoconsola`
--

LOCK TABLES `infoconsola` WRITE;
/*!40000 ALTER TABLE `infoconsola` DISABLE KEYS */;
INSERT INTO `infoconsola` VALUES (3,'Maria','DSi',2009,'Nintendo','XL','Portatil','Septima'),(28,'Pedro','Playstation 2',1998,'Sony','Estandar','Sobremesa','7ma'),(37,'Juan','Playstation 4',2013,'Sony','Slim','Sobremesa','Octava'),(41,'Dixon','Playstation 1',1998,'Sony','Estandar','Sobremesa','quinta'),(58,'Angel','Xbox series',2020,'Microsoft','Series S','sobremesa','novena'),(59,'Antonio','Playstation 3',2006,'Sony','Lite','sobremesa','Septima'),(75,'Andres','Playstation 3',2006,'Sony','Estandar','Sobremesa','septima'),(80,'Fernando','Playstation2',2000,'Sony','estandar','sobremesa','sexta'),(87,'Daniel','xbox 360',2006,'Microsoft','Estandar','Sobremesa','quinta'),(99,'Juan','Playstation 5',2020,'Sony','Estandar','Sobremesa','Novena ');
/*!40000 ALTER TABLE `infoconsola` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=879 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'angel@gmail.com','angel410','1234'),(2,'prueba@yahoo.com','andres111','4321'),(527,'dixon@une.edu.ve','dixon123','1234'),(578,'prueba@hotmail.com','prueba123','1234'),(878,'segundaprueba@une.edu.ve','smartinez','9876');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-22 16:59:29
