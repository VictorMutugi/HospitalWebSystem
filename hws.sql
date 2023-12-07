-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hws
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `Full_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Medic` varchar(44) NOT NULL,
  `Issue` text NOT NULL,
  `AIndex` varchar(255) NOT NULL,
  `UIIndex` varchar(255) NOT NULL,
  PRIMARY KEY (`AIndex`),
  KEY `UIIndex` (`UIIndex`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES ('Theril ttopg','tttopg@gmail.com','2023-12-07','10:30:00','clinical officer','Headache','6570b4914326e','some_value'),('Juan Thomas','jthomas@gmail.com','2023-12-15','13:30:00','Counselor/Psychologist','Some issues in my mind, which I will discuss in person','6570b6e86d5d9','some_value'),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570bdaa5bc98','some_value'),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570be431a261','some_value'),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570befd6432c',''),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570c0b02ca31',''),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570c0e31f242',''),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570c177c204a',''),('','','0000-00-00','00:00:00','','','6570c17a54c22',''),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570c1bead29f',''),('Andrew Kibabi','andkbab@gmail.com','2023-12-11','15:30:00','Dental Surgeon','Some serious checkup on my teeth','6570c32f99a7e','');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `findadoctor`
--

DROP TABLE IF EXISTS `findadoctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `findadoctor` (
  `Specialty` varchar(44) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Call_Hours` time NOT NULL,
  `FADIndex` varchar(255) NOT NULL,
  PRIMARY KEY (`FADIndex`),
  KEY `DocIndex` (`FADIndex`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `findadoctor`
--

LOCK TABLES `findadoctor` WRITE;
/*!40000 ALTER TABLE `findadoctor` DISABLE KEYS */;
INSERT INTO `findadoctor` VALUES ('Clinical Officer','Dre GT',734565478,'doubledr@gmail.com','15:00:00','001'),('Clinical Officer','Turbo CBT',798076590,'cbt@gmail.com','15:30:00','002'),('Clinical Officer','Qashqai Nimerc',113421378,'qnmerc@gmail.com','15:30:00','003'),('Clinical Officer','Victor Onyango',116671378,'vonyash@gmail.com','15:30:00','004'),('Clinical Officer','Vincent Murimi',716671376,'mvinny@gmail.com','16:00:00','005'),('Clinical Officer','Victoria Kawira',789453210,'vickywira@gmail.com','16:30:00','006'),('Clinical Officer','Sweetheart Karembo ',734687901,'aggierembo@gmail.com','17:00:00','007'),('Clinical Officer','Vicky Atoti',743509102,'vatoty@gmail.com','17:30:00','008'),('Colon and Rectal Surgeon','Simon Kiugi',798971345,'brainybrights@gmail.com','12:00:00','CNRS1'),('Colon and Rectal Surgeon','Judith Mukristo',110432567,'jchristian@gmail.com','14:30:00','CNRS2'),('Counselor/Psychologist','John Kiruja',111034567,'jk@gmail.com','07:00:00','CP1'),('Counselor/Psychologist','Gina Gakii',788909899,'gg@gmail.com','17:00:00','CP2'),('Dermatologist','Sean Kiara',110234906,'ski@gmail.com','15:00:00','DM1'),('Dermatologist','Lilian Latosha',798460980,'llatosha@gmail.com','12:00:00','DM2'),('Dietician/Nutritionist','Fridah Kanini',789654345,'fknn90@gmail.com','11:00:00','DN1'),('Dietician/Nutritionist','Janet Karia',112211890,'jkaria@gmail.com','12:00:00','DN2'),('Dietician/Nutritionist','Rodger Kiria',745655590,'rkia@gmail.com','14:45:00','DN3'),('Dental Surgeon','David Githongo',112399990,'gits@gmail.com','19:00:00','DS1'),('Dental Surgeon','Riley Kathongi',788867891,'rkath@gmail.com','13:00:00','DS2'),('Otolaryngologist/ENT(Ear,Nose,Throat)Surgeon','Jane Masumbwi',734649000,'jmboat@gmail.com','21:00:00','ENT1'),('Otolaryngologist/ENT(Ear,Nose,Throat)Surgeon','Jayden Kirima',794692312,'jkhill@gmail.com','18:00:00','ENT2'),('Gynecologist','Gina Gatwiri',798234127,'dabog@gmail.com','14:30:00','G1'),('Gynecologist','James Alubaka',110911234,'jal@gmail.com','15:30:00','G2'),('General Surgeon','Julius Mutua',78898909,'jmtush@gmail.com','19:00:00','GS1'),('General Surgeon','Steve Okoth',118887960,'stok@gmail.com','17:00:00','GS2'),('General Surgeon','Jamleck Mutwiri',789546333,'jmtwiri@gmail.com','20:00:00','GS3'),('General Surgeon','Shanice Kanene',110432488,'shankn@gmail.com','21:30:00','GS4'),('Obstetrician','Sam Kapito',1111111111,'saka@gmail.com','15:30:00','O1'),('Obstetrician','Sharline Sembu',798767891,'ssembu@gmail.com','16:30:00','O2'),('Orthopedic Surgeon','Justus Kinyua',777123900,'jkin@gmail.com','07:00:00','OS1'),('Orthopedic Surgeon','Aisha Mwadema',799996577,'aish@gmail.com','09:00:00','OS2'),('Orthopedic Surgeon','Letisha Sulleiman',110223344,'letts@gmail.com','11:00:00','OS3'),('Pediatrician','Alex Kimenyi',789555534,'aka@gmail.com','13:45:00','P1'),('Pediatrician','Max Kimani',769555534,'mxa@gmail.com','13:55:00','P2'),('Podiatric Surgeon','Sun Mifine',110333789,'sunny@gmail.com','23:00:00','POS1'),('Podiatric Surgeon','George Chopper',711123477,'helichop@gmail.com','22:00:00','POS2'),('Physiotherapist','Sharon Akinyi',766731249,'shark@gmail.com','14:45:00','PP1'),('Physiotherapist','Johnny Kibaya',1112345120,'jki@gmail.com','16:45:00','PP2'),('Psychiatrist','Thor Odin',788988907,'thorodin@gmail.com','12:00:00','PS1'),('Psychiatrist','Loki Odin',2147483647,'lokiodin@gmail.com','14:00:00','PS2'),('Radiologist','Alex Kumarr',788833310,'akum@gmail.com','15:00:00','R1'),('Radiologist','Alexis Mwende',790933314,'amwesh@gmail.com','16:00:00','R2');
/*!40000 ALTER TABLE `findadoctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `ID` int(8) NOT NULL,
  `Preferred_Payment_Method` varchar(9) NOT NULL,
  `UIIndex` varchar(255) NOT NULL,
  PRIMARY KEY (`UIIndex`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES ('Dude','The man','',0,'',0,'Mpesa','65718b236dec8');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-07 14:17:36
