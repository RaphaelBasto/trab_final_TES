
--
-- Current Database: `web`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `raphaelbasto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `raphaelbasto`;

--
-- Table structure for table `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidatos` (
  `idcandidatos` int NOT NULL AUTO_INCREMENT,
  `quantidade_votos` int DEFAULT NULL,
  `numero_candidato` int DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `partido` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcandidatos`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos`
--

LOCK TABLES `candidatos` WRITE;
/*!40000 ALTER TABLE `candidatos` DISABLE KEYS */;
INSERT INTO `candidatos` VALUES (2,0,12008,0,'Agnus Do Povo','PDT','cv1.jpg'),(3,0,25255,0,'Carlos Augusto Da Cidade','DEM','cv2.jpg'),(4,0,35773,0,'Fuluya Yara Casaes Dutra','PMB','cv3.jpg'),(5,0,19171,0,'Guinho Sigilião','PODE','cv4.jpg'),(6,0,27321,0,'Jeronimo Do Carmo Telles','DC','cv5.jpg'),(7,0,25003,0,'Zila Castro','DEM','cv6.jpg'),(8,0,14,1,'Tatiana Negreiros','PTB','cp3.jpg'),(9,0,70,1,'Teka Pierrout','AVANTE','cp2.jpg'),(10,0,36,1,'Servilho','PTC','cp1.jpg'),(11,0,19,1,'Romarinho','PODE','cp4.jpg'),(12,0,11,1,'Ronaldinho Da Van','PP','cp5.jpg');
/*!40000 ALTER TABLE `candidatos` ENABLE KEYS */;
UNLOCK TABLES;

