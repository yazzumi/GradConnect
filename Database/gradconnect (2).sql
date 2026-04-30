-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2026 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `street_address` varchar(150) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `city_municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `log_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `record_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `civil_status`
--

CREATE TABLE `civil_status` (
  `civil_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_proofs`
--

CREATE TABLE `employment_proofs` (
  `proof_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_status`
--

CREATE TABLE `employment_status` (
  `employment_status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experience_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `company_address` varchar(200) DEFAULT NULL,
  `company_type` varchar(100) DEFAULT NULL,
  `position` varchar(100) NOT NULL,
  `job_description` text DEFAULT NULL,
  `employment_type` varchar(50) DEFAULT NULL,
  `is_current_job` tinyint(1) NOT NULL DEFAULT 0,
  `date_started` date DEFAULT NULL,
  `date_ended` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `graduate_id` int(11) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `graduation_year` year(4) NOT NULL,
  `program_id` int(11) NOT NULL,
  `civil_status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduate_skills`
--

CREATE TABLE `graduate_skills` (
  `graduate_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_codes`
--

CREATE TABLE `otp_codes` (
  `otp_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `otp_code` char(6) NOT NULL,
  `expires_at` datetime NOT NULL,
  `is_used` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `program_code` varchar(20) NOT NULL,
  `program_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `option_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_text` varchar(150) NOT NULL,
  `option_value` varchar(100) NOT NULL,
  `display_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `report_type` varchar(100) NOT NULL,
  `date_generated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session_profile_updates`
--

CREATE TABLE `session_profile_updates` (
  `profile_update_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `civil_status_id` int(11) DEFAULT NULL,
  `street_address` varchar(150) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `city_municipality` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `answer_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `question_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `field_key` varchar(100) NOT NULL,
  `question_type` varchar(50) NOT NULL COMMENT 'Text, textarea, radio, checkbox, select, date, etc.',
  `employment_status_id` int(11) DEFAULT NULL COMMENT 'Nullable; question shown only for a certain employment status if needed',
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `display_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_sessions`
--

CREATE TABLE `survey_sessions` (
  `session_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `survey_year` year(4) NOT NULL,
  `submission_type` varchar(20) NOT NULL COMMENT 'Initial or Update',
  `based_on_session_id` int(11) DEFAULT NULL COMMENT 'Nullable; previous session if this is an update',
  `employment_status_id` int(11) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `verification_method` varchar(50) DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `is_current` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Only one approved current session per graduate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `update_requests`
--

CREATE TABLE `update_requests` (
  `update_request_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `old_session_id` int(11) NOT NULL,
  `new_session_id` int(11) NOT NULL,
  `request_status` varchar(20) NOT NULL DEFAULT 'Pending' COMMENT 'Pending, Approved, Rejected',
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reviewed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reviewed_by` int(11) DEFAULT NULL COMMENT 'Admin who reviewed the request',
  `review_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD UNIQUE KEY `graduate_id` (`graduate_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `civil_status`
--
ALTER TABLE `civil_status`
  ADD PRIMARY KEY (`civil_status_id`),
  ADD UNIQUE KEY `status_name` (`status_name`);

--
-- Indexes for table `employment_proofs`
--
ALTER TABLE `employment_proofs`
  ADD PRIMARY KEY (`proof_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `employment_status`
--
ALTER TABLE `employment_status`
  ADD PRIMARY KEY (`employment_status_id`),
  ADD UNIQUE KEY `status_name` (`status_name`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `session_id` (`session_id`);

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`graduate_id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `civil_status_id` (`civil_status_id`);

--
-- Indexes for table `graduate_skills`
--
ALTER TABLE `graduate_skills`
  ADD PRIMARY KEY (`graduate_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `otp_codes`
--
ALTER TABLE `otp_codes`
  ADD PRIMARY KEY (`otp_id`),
  ADD KEY `graduate_id` (`graduate_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`),
  ADD UNIQUE KEY `program_code` (`program_code`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`option_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `session_profile_updates`
--
ALTER TABLE `session_profile_updates`
  ADD PRIMARY KEY (`profile_update_id`),
  ADD UNIQUE KEY `session_id` (`session_id`),
  ADD KEY `civil_status_id` (`civil_status_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD UNIQUE KEY `skill_name` (`skill_name`);

--
-- Indexes for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD UNIQUE KEY `field_key` (`field_key`),
  ADD KEY `employment_status_id` (`employment_status_id`);

--
-- Indexes for table `survey_sessions`
--
ALTER TABLE `survey_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `based_on_session_id` (`based_on_session_id`),
  ADD KEY `employment_status_id` (`employment_status_id`);

--
-- Indexes for table `update_requests`
--
ALTER TABLE `update_requests`
  ADD PRIMARY KEY (`update_request_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `old_session_id` (`old_session_id`),
  ADD KEY `new_session_id` (`new_session_id`),
  ADD KEY `reviewed_by` (`reviewed_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `civil_status`
--
ALTER TABLE `civil_status`
  MODIFY `civil_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_proofs`
--
ALTER TABLE `employment_proofs`
  MODIFY `proof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_status`
--
ALTER TABLE `employment_status`
  MODIFY `employment_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `graduate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_codes`
--
ALTER TABLE `otp_codes`
  MODIFY `otp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session_profile_updates`
--
ALTER TABLE `session_profile_updates`
  MODIFY `profile_update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_sessions`
--
ALTER TABLE `survey_sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_requests`
--
ALTER TABLE `update_requests`
  MODIFY `update_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD CONSTRAINT `audit_logs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `employment_proofs`
--
ALTER TABLE `employment_proofs`
  ADD CONSTRAINT `employment_proofs_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `survey_sessions` (`session_id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `survey_sessions` (`session_id`);

--
-- Constraints for table `graduates`
--
ALTER TABLE `graduates`
  ADD CONSTRAINT `graduates_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`program_id`),
  ADD CONSTRAINT `graduates_ibfk_2` FOREIGN KEY (`civil_status_id`) REFERENCES `civil_status` (`civil_status_id`),
  ADD CONSTRAINT `graduates_ibfk_3` FOREIGN KEY (`graduate_id`) REFERENCES `addresses` (`graduate_id`);

--
-- Constraints for table `graduate_skills`
--
ALTER TABLE `graduate_skills`
  ADD CONSTRAINT `graduate_skills_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduates` (`graduate_id`),
  ADD CONSTRAINT `graduate_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`skill_id`);

--
-- Constraints for table `otp_codes`
--
ALTER TABLE `otp_codes`
  ADD CONSTRAINT `otp_codes_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduates` (`graduate_id`);

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `survey_questions` (`question_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `session_profile_updates`
--
ALTER TABLE `session_profile_updates`
  ADD CONSTRAINT `session_profile_updates_ibfk_1` FOREIGN KEY (`civil_status_id`) REFERENCES `civil_status` (`civil_status_id`);

--
-- Constraints for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD CONSTRAINT `survey_answers_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `survey_sessions` (`session_id`),
  ADD CONSTRAINT `survey_answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `survey_questions` (`question_id`);

--
-- Constraints for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD CONSTRAINT `survey_questions_ibfk_1` FOREIGN KEY (`employment_status_id`) REFERENCES `employment_status` (`employment_status_id`);

--
-- Constraints for table `survey_sessions`
--
ALTER TABLE `survey_sessions`
  ADD CONSTRAINT `survey_sessions_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduates` (`graduate_id`),
  ADD CONSTRAINT `survey_sessions_ibfk_2` FOREIGN KEY (`based_on_session_id`) REFERENCES `survey_sessions` (`session_id`),
  ADD CONSTRAINT `survey_sessions_ibfk_3` FOREIGN KEY (`employment_status_id`) REFERENCES `employment_status` (`employment_status_id`),
  ADD CONSTRAINT `survey_sessions_ibfk_4` FOREIGN KEY (`session_id`) REFERENCES `session_profile_updates` (`session_id`);

--
-- Constraints for table `update_requests`
--
ALTER TABLE `update_requests`
  ADD CONSTRAINT `update_requests_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduates` (`graduate_id`),
  ADD CONSTRAINT `update_requests_ibfk_2` FOREIGN KEY (`old_session_id`) REFERENCES `survey_sessions` (`session_id`),
  ADD CONSTRAINT `update_requests_ibfk_3` FOREIGN KEY (`new_session_id`) REFERENCES `survey_sessions` (`session_id`),
  ADD CONSTRAINT `update_requests_ibfk_4` FOREIGN KEY (`reviewed_by`) REFERENCES `admins` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
