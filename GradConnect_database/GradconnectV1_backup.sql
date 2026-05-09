-- MySQL dump 10.13  Distrib 9.6.0, for macos26.3 (arm64)
--
-- Host: localhost    Database: GradconnectV1
-- ------------------------------------------------------
-- Server version	9.6.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '69b29854-4889-11f1-b535-d665782c73bc:1-181';

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `address_id` int NOT NULL AUTO_INCREMENT,
  `graduate_id` int NOT NULL,
  `street_address` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city_municipality` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`address_id`),
  UNIQUE KEY `graduate_id` (`graduate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_logs`
--

DROP TABLE IF EXISTS `audit_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audit_logs` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `action` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `table_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `record_id` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_logs`
--

LOCK TABLES `audit_logs` WRITE;
/*!40000 ALTER TABLE `audit_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `civil_status`
--

DROP TABLE IF EXISTS `civil_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `civil_status` (
  `civil_status_id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`civil_status_id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `civil_status`
--

LOCK TABLES `civil_status` WRITE;
/*!40000 ALTER TABLE `civil_status` DISABLE KEYS */;
INSERT INTO `civil_status` VALUES (4,'Divorced'),(2,'Married'),(1,'Single'),(3,'Widowed');
/*!40000 ALTER TABLE `civil_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employment_proofs`
--

DROP TABLE IF EXISTS `employment_proofs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employment_proofs` (
  `proof_id` int NOT NULL AUTO_INCREMENT,
  `session_id` int NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `file_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`proof_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employment_proofs`
--

LOCK TABLES `employment_proofs` WRITE;
/*!40000 ALTER TABLE `employment_proofs` DISABLE KEYS */;
/*!40000 ALTER TABLE `employment_proofs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employment_status`
--

DROP TABLE IF EXISTS `employment_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employment_status` (
  `employment_status_id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`employment_status_id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employment_status`
--

LOCK TABLES `employment_status` WRITE;
/*!40000 ALTER TABLE `employment_status` DISABLE KEYS */;
INSERT INTO `employment_status` VALUES (1,'Employed'),(4,'OFW'),(3,'Self-Employed'),(2,'Unemployed');
/*!40000 ALTER TABLE `employment_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experiences` (
  `experience_id` int NOT NULL AUTO_INCREMENT,
  `session_id` int NOT NULL,
  `company_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `company_address` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_general_ci,
  `employment_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_current_job` tinyint(1) NOT NULL DEFAULT '0',
  `date_started` date DEFAULT NULL,
  `date_ended` date DEFAULT NULL,
  PRIMARY KEY (`experience_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiences`
--

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduate_skills`
--

DROP TABLE IF EXISTS `graduate_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `graduate_skills` (
  `graduate_id` int NOT NULL,
  `skill_id` int NOT NULL,
  PRIMARY KEY (`graduate_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduate_skills`
--

LOCK TABLES `graduate_skills` WRITE;
/*!40000 ALTER TABLE `graduate_skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `graduate_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduates`
--

DROP TABLE IF EXISTS `graduates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `graduates` (
  `graduate_id` int NOT NULL AUTO_INCREMENT,
  `student_id` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `middle_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `graduation_year` year NOT NULL,
  `program_id` int NOT NULL,
  `civil_status_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `guid` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`graduate_id`),
  UNIQUE KEY `student_id` (`student_id`),
  KEY `program_id` (`program_id`),
  KEY `civil_status_id` (`civil_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduates`
--

LOCK TABLES `graduates` WRITE;
/*!40000 ALTER TABLE `graduates` DISABLE KEYS */;
INSERT INTO `graduates` VALUES (1,'2112994','Ryuta','Villafuerte','Horiuchi','Male','1998-01-01','horiuchiryuta@gmail.com','09611394785',2020,1,1,'2026-05-09 14:06:15','2026-05-09 14:06:15','b1659e7b-0fce-42c2-802e-f9199812040b');
/*!40000 ALTER TABLE `graduates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otp_codes`
--

DROP TABLE IF EXISTS `otp_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otp_codes` (
  `otp_id` int NOT NULL AUTO_INCREMENT,
  `graduate_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `otp_code` char(6) COLLATE utf8mb4_general_ci NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `is_used` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`otp_id`),
  KEY `graduate_id` (`graduate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otp_codes`
--

LOCK TABLES `otp_codes` WRITE;
/*!40000 ALTER TABLE `otp_codes` DISABLE KEYS */;
INSERT INTO `otp_codes` VALUES (1,'20242052332','983792',NULL,0,'2026-05-07 04:53:33'),(2,'20242052332','990345',NULL,0,'2026-05-07 04:58:08'),(3,'20242052332','347038',NULL,0,'2026-05-07 04:59:09'),(4,'20242052332','329464',NULL,0,'2026-05-07 05:05:04'),(5,'20242052332','535153',NULL,0,'2026-05-07 05:18:34'),(6,'20242052332','231870',NULL,0,'2026-05-07 05:19:59'),(7,'1','834071',NULL,1,'2026-05-07 05:29:51'),(8,'1','825916',NULL,1,'2026-05-07 05:30:40'),(9,'1','943531',NULL,1,'2026-05-07 05:31:50'),(10,'1','236710',NULL,1,'2026-05-07 05:36:36'),(11,'1','901177',NULL,1,'2026-05-07 05:41:19'),(12,'1','146505',NULL,1,'2026-05-07 05:43:12'),(13,'1','440794',NULL,1,'2026-05-07 05:45:25'),(14,'1','642920',NULL,1,'2026-05-07 05:48:40'),(15,'1','929107',NULL,1,'2026-05-07 05:49:03'),(16,'1','166404',NULL,1,'2026-05-07 05:51:10'),(17,'1','132456',NULL,1,'2026-05-07 05:53:48'),(18,'1','425294',NULL,1,'2026-05-07 05:56:55'),(19,'1','175926',NULL,1,'2026-05-07 06:10:14'),(20,'1','722098',NULL,0,'2026-05-09 05:22:49'),(21,'1','132494',NULL,0,'2026-05-09 05:23:34'),(22,'1','710528',NULL,0,'2026-05-09 05:23:45'),(23,'1','340960',NULL,0,'2026-05-09 05:26:10'),(24,'1','322016',NULL,0,'2026-05-09 05:27:21'),(25,'1','348257',NULL,0,'2026-05-09 05:29:15'),(26,'1','887906',NULL,0,'2026-05-09 05:32:12'),(27,'1','104155',NULL,1,'2026-05-09 05:34:42'),(28,'1','143764',NULL,1,'2026-05-09 05:47:06'),(29,'1','353437',NULL,1,'2026-05-09 06:03:11'),(30,'1','412698',NULL,0,'2026-05-09 06:05:12'),(31,'1','573429',NULL,1,'2026-05-09 06:05:52');
/*!40000 ALTER TABLE `otp_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programs` (
  `program_id` int NOT NULL AUTO_INCREMENT,
  `program_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `program_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`program_id`),
  UNIQUE KEY `program_code` (`program_code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (1,'BSCE','Bachelor of Science in Civil Engineering'),(2,'BSArch','Bachelor of Science in Architecture'),(3,'BSEE','Bachelor of Science in Electrical Engineering'),(4,'BSIT','Bachelor of Science in Information Technology'),(5,'BSIndT','Bachelor of Science in Industrial Technology'),(6,'BSEd','Bachelor of Secondary Education'),(7,'BSPsy','Bachelor of Science in Psychology'),(8,'BTLED','Bachelor of Technology and Livelihood Education'),(9,'BTVTED','Bachelor of Technical Vocational Teacher Education'),(10,'BPEd','Bachelor of Physical Education'),(11,'BSN','Bachelor of Science in Nursing'),(12,'BSM','Bachelor of Science in Midwifery');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_options`
--

DROP TABLE IF EXISTS `question_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question_options` (
  `option_id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `option_text` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `option_value` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `display_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`option_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_options`
--

LOCK TABLES `question_options` WRITE;
/*!40000 ALTER TABLE `question_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reports` (
  `report_id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `report_type` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date_generated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`report_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_profile_updates`
--

DROP TABLE IF EXISTS `session_profile_updates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session_profile_updates` (
  `profile_update_id` int NOT NULL AUTO_INCREMENT,
  `session_id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `civil_status_id` int DEFAULT NULL,
  `street_address` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city_municipality` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `province` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`profile_update_id`),
  UNIQUE KEY `session_id` (`session_id`),
  KEY `civil_status_id` (`civil_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_profile_updates`
--

LOCK TABLES `session_profile_updates` WRITE;
/*!40000 ALTER TABLE `session_profile_updates` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_profile_updates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `skill_id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`skill_id`),
  UNIQUE KEY `skill_name` (`skill_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_answers`
--

DROP TABLE IF EXISTS `survey_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `survey_answers` (
  `answer_id` int NOT NULL AUTO_INCREMENT,
  `session_id` int NOT NULL,
  `question_id` int NOT NULL,
  `answer_text` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_id`),
  KEY `session_id` (`session_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_answers`
--

LOCK TABLES `survey_answers` WRITE;
/*!40000 ALTER TABLE `survey_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_questions`
--

DROP TABLE IF EXISTS `survey_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `survey_questions` (
  `question_id` int NOT NULL AUTO_INCREMENT,
  `question_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `field_key` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `question_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Text, textarea, radio, checkbox, select, date, etc.',
  `employment_status_id` int DEFAULT NULL COMMENT 'Nullable; question shown only for a certain employment status if needed',
  `is_required` tinyint(1) NOT NULL DEFAULT '0',
  `display_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`question_id`),
  UNIQUE KEY `field_key` (`field_key`),
  KEY `employment_status_id` (`employment_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_questions`
--

LOCK TABLES `survey_questions` WRITE;
/*!40000 ALTER TABLE `survey_questions` DISABLE KEYS */;
INSERT INTO `survey_questions` VALUES (1,'Company Name','employed_company_name','text',1,1,1,1),(2,'Company Address','employed_company_address','text',1,1,2,1),(3,'Type of Company','employed_company_type','text',1,1,3,1),(4,'Job Description','employed_job_description','textarea',1,1,4,1),(5,'Position','employed_position','text',1,1,5,1),(6,'Date Started','employed_date_started','date',1,1,6,1),(7,'Date Ended','employed_date_ended','date',1,0,7,1),(8,'Employment Status','employed_employment_type','radio',1,1,8,1),(9,'Do you have previous work experience?','employed_prev_experience','radio',1,1,9,1),(10,'Employment Proof','employed_employment_proof','file',1,1,10,1),(11,'Do you have previous work experience?','unemployed_prev_experience','radio',2,1,1,1),(12,'Nature of Business','self_employed_nature_of_business','text',3,1,1,1),(13,'Place of Business','self_employed_place_of_business','text',3,1,2,1),(14,'Job Description','self_employed_job_description','textarea',3,1,3,1),(15,'Date Started','self_employed_date_started','date',3,1,4,1),(16,'Date Ended','self_employed_date_ended','date',3,0,5,1),(17,'Do you have previous work experience?','self_employed_prev_experience','radio',3,1,6,1),(18,'Employment Proof','self_employed_employment_proof','file',3,1,7,1),(19,'Company Name','ofw_company_name','text',4,1,1,1),(20,'Company Address','ofw_company_address','text',4,1,2,1),(21,'Type of Company','ofw_company_type','text',4,1,3,1),(22,'Job Description','ofw_job_description','textarea',4,1,4,1),(23,'Position','ofw_position','text',4,1,5,1),(24,'Date Started','ofw_date_started','date',4,1,6,1),(25,'Date Ended','ofw_date_ended','date',4,0,7,1),(26,'Employment Status','ofw_employment_type','radio',4,1,8,1),(27,'Do you have previous work experience?','ofw_prev_experience','radio',4,1,9,1),(28,'Employment Proof','ofw_employment_proof','file',4,1,10,1);
/*!40000 ALTER TABLE `survey_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_sessions`
--

DROP TABLE IF EXISTS `survey_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `survey_sessions` (
  `session_id` int NOT NULL AUTO_INCREMENT,
  `graduate_id` int NOT NULL,
  `survey_year` year NOT NULL,
  `submission_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Initial or Update',
  `based_on_session_id` int DEFAULT NULL COMMENT 'Nullable; previous session if this is an update',
  `employment_status_id` int NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_method` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_current` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Only one approved current session per graduate',
  PRIMARY KEY (`session_id`),
  KEY `graduate_id` (`graduate_id`),
  KEY `based_on_session_id` (`based_on_session_id`),
  KEY `employment_status_id` (`employment_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_sessions`
--

LOCK TABLES `survey_sessions` WRITE;
/*!40000 ALTER TABLE `survey_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `update_requests`
--

DROP TABLE IF EXISTS `update_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `update_requests` (
  `update_request_id` int NOT NULL AUTO_INCREMENT,
  `graduate_id` int NOT NULL,
  `old_session_id` int NOT NULL,
  `new_session_id` int NOT NULL,
  `request_status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending' COMMENT 'Pending, Approved, Rejected',
  `requested_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reviewed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reviewed_by` int DEFAULT NULL COMMENT 'Admin who reviewed the request',
  `review_notes` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`update_request_id`),
  KEY `graduate_id` (`graduate_id`),
  KEY `old_session_id` (`old_session_id`),
  KEY `new_session_id` (`new_session_id`),
  KEY `reviewed_by` (`reviewed_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `update_requests`
--

LOCK TABLES `update_requests` WRITE;
/*!40000 ALTER TABLE `update_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `update_requests` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-09 22:38:21
