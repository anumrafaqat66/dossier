-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 09:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dossier`
--
CREATE DATABASE IF NOT EXISTS `dossier` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dossier`;

-- --------------------------------------------------------

--
-- Table structure for table `academic_records`
--

CREATE TABLE `academic_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_records`
--

INSERT INTO `academic_records` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `do_id`, `phase`, `phase3_type`, `term`, `doc_name`, `doc_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed8493a34453uniformpic2019-10-21at5.21.46PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5ed8493a34453uniformpic2019-10-21at5.21.46PM.jpeg', '66.802 kb', 1, 3, 'Phase 1', NULL, 'Term I', 'result', 'Result', '2020-06-03 20:07:06', '2020-06-03 20:07:06', NULL),
(2, '5ed849581fc76BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/academic_record/5ed849581fc76BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', NULL, 'Term II', 'result', 'Result', '2020-06-03 20:07:36', '2020-06-03 20:07:36', NULL),
(3, '5ed84971bba98BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/academic_record/5ed84971bba98BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', NULL, 'Term III', 'result', 'Result', '2020-06-03 20:08:01', '2020-06-03 20:08:01', NULL),
(4, '5ed849933b921BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/academic_record/5ed849933b921BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', NULL, 'Term II', 'sea training result', 'Sea Training Report', '2020-06-03 20:08:35', '2020-06-03 20:08:35', NULL),
(5, '5ed8513ba9311BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/academic_record/5ed8513ba9311BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 2', NULL, 'Term IV', 'result', 'Result', '2020-06-03 20:41:15', '2020-06-03 20:41:15', NULL),
(6, '5edb918ea9e91WhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb918ea9e91WhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 2', NULL, 'Term IV', 'midshipman result', 'Result', '2020-06-06 07:52:30', '2020-06-06 07:52:30', NULL),
(7, '5edb98f5e3e2bWhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb98f5e3e2bWhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-III', '3me', 'Result', '2020-06-06 08:24:05', '2020-06-06 08:24:05', NULL),
(8, '5edb9916e4084WhatsAppImage2020-06-04at08.29.14.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb9916e4084WhatsAppImage2020-06-04at08.29.14.jpeg', '47.478 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-IV', '4ME', 'Result', '2020-06-06 08:24:38', '2020-06-06 08:24:38', NULL),
(9, '5edb993ab5fd6WhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb993ab5fd6WhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-V', '5ME', 'Result', '2020-06-06 08:25:14', '2020-06-06 08:25:14', NULL),
(10, '5edb99563f04bWhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb99563f04bWhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-VI', '6ME', 'Result', '2020-06-06 08:25:42', '2020-06-06 08:25:42', NULL),
(11, '5edb9970bcc79WhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb9970bcc79WhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-VIII', '7ME', 'Result', '2020-06-06 08:26:08', '2020-06-06 08:26:08', NULL),
(12, '5edb998810a41WhatsAppImage2020-06-04at08.28.55.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb998810a41WhatsAppImage2020-06-04at08.28.55.jpeg', '45.837 kb', 1, 3, 'Phase 3', 'pnec', 'Semester-VIII', '8ME', 'Result', '2020-06-06 08:26:32', '2020-06-06 08:26:32', NULL),
(13, '5edb99c472fd1WhatsAppImage2020-06-04at08.29.14.jpeg', 'jpeg', 'http://localhost/dossier/attachments/academic_record/5edb99c472fd1WhatsAppImage2020-06-04at08.29.14.jpeg', '47.478 kb', 1, 3, 'Phase 3', 'pnec', NULL, 'Basic managment course', 'Additional Courses', '2020-06-06 08:27:32', '2020-06-06 08:27:32', NULL),
(14, '5ee50d0cc60efWhatsApp.exe', 'exe', 'http://localhost/dossier/attachments/academic_record/5ee50d0cc60efWhatsApp.exe', '679.344 kb', 4, 1, 'Phase 1', NULL, 'Term I', 'result', 'Result', '2020-06-13 12:29:48', '2020-06-13 12:29:48', NULL),
(15, '5ee5b14fbbd20UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b14fbbd20UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 1', NULL, 'Term I', 'result', 'Result', '2020-06-14 00:10:39', '2020-06-14 00:10:39', NULL),
(16, '5ee5b19a3ee1fUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b19a3ee1fUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 1', NULL, 'Term II', 'result', 'Result', '2020-06-14 00:11:54', '2020-06-14 00:11:54', NULL),
(17, '5ee5b1a9929b9UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b1a9929b9UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 1', NULL, 'Term III', 'result', 'Result', '2020-06-14 00:12:09', '2020-06-14 00:12:09', NULL),
(18, '5ee5b1c173713UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b1c173713UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 1', NULL, 'Term II', 'result', 'Sea Training Report', '2020-06-14 00:12:33', '2020-06-14 00:12:33', NULL),
(19, '5ee5b54b2f3c5UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b54b2f3c5UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 2', NULL, 'Term IV', 'result', 'Result', '2020-06-14 00:27:39', '2020-06-14 00:27:39', NULL),
(20, '5ee5b815464c0UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b815464c0UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-III', 'result', 'Result', '2020-06-14 00:39:33', '2020-06-14 00:39:33', NULL),
(21, '5ee5b826265bbUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b826265bbUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-IV', 'result', 'Result', '2020-06-14 00:39:50', '2020-06-14 00:39:50', NULL),
(22, '5ee5b86b2ea85UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b86b2ea85UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-V', 'result', 'Result', '2020-06-14 00:40:59', '2020-06-14 00:40:59', NULL),
(23, '5ee5b886734b2UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b886734b2UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-VI', 'result', 'Result', '2020-06-14 00:41:26', '2020-06-14 00:41:26', NULL),
(24, '5ee5b8a48edacUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b8a48edacUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-VI', 'result', 'Result', '2020-06-14 00:41:56', '2020-06-14 00:41:56', NULL),
(25, '5ee5b8bb6a987UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b8bb6a987UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-VII', 'result', 'Result', '2020-06-14 00:42:19', '2020-06-14 00:42:19', NULL),
(26, '5ee5b8ca2c413UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b8ca2c413UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-VIII', 'result', 'Result', '2020-06-14 00:42:34', '2020-06-14 00:42:34', NULL),
(27, '5ee5b8da8d2d6UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b8da8d2d6UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-IX', 'result', 'Result', '2020-06-14 00:42:50', '2020-06-14 00:42:50', NULL),
(28, '5ee5b8e9e5d8aUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b8e9e5d8aUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-IX', 'result', 'Result', '2020-06-14 00:43:05', '2020-06-14 00:43:05', NULL),
(29, '5ee5b90438a4fUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b90438a4fUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-X', 'result', 'Result', '2020-06-14 00:43:32', '2020-06-14 00:43:32', NULL),
(30, '5ee5b91381ec8UndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b91381ec8UndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', 'Semester-XI', 'result', 'Result', '2020-06-14 00:43:47', '2020-06-14 00:43:47', NULL),
(31, '5ee5b92d970beUndergraduateAdmission2015.png', 'png', 'http://localhost/dossier/attachments/academic_record/5ee5b92d970beUndergraduateAdmission2015.png', '36.126 kb', 4, 1, 'Phase 3', 'pnec', NULL, 'sea training result', 'Additional Courses', '2020-06-14 00:44:13', '2020-06-14 00:44:13', NULL),
(32, '5fc7de2506e44GeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fc7de2506e44GeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 10, NULL, 'Phase 2', NULL, 'Term IV', 'vv', 'Result', '2020-12-02 13:34:13', '2020-12-02 13:34:13', 1),
(33, '5fd8cc0bd684daron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fd8cc0bd684daron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Term I', 'Term1result', 'Result', '2020-12-15 09:45:32', '2020-12-15 09:45:32', NULL),
(34, '5fd8cc19d6f19aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fd8cc19d6f19aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Term II', 'Term2result', 'Result', '2020-12-15 09:45:45', '2020-12-15 09:45:45', NULL),
(35, '5fd8cc27c46aaaron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fd8cc27c46aaaron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Term III', 'Term3result', 'Result', '2020-12-15 09:45:59', '2020-12-15 09:45:59', NULL),
(36, '5fd8cc28608d0aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fd8cc28608d0aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Term III', 'Term3result', 'Result', '2020-12-15 09:46:00', '2020-12-15 09:46:00', NULL),
(37, '5fd8cc3746fc4aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/academic_record/5fd8cc3746fc4aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Term II', 'searesult', 'Sea Training Report', '2020-12-15 09:46:15', '2020-12-15 09:46:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_allocations`
--

CREATE TABLE `branch_allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_recommended` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_allocated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_allocations`
--

INSERT INTO `branch_allocations` (`id`, `p_id`, `option1`, `option2`, `option3`, `branch_recommended`, `branch_allocated`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 'OPS', 'WE', 'LOG', 'OPS', 'OPS', 3, 'Phase 1', '2020-06-03 20:25:43', '2020-06-03 20:25:43', NULL),
(2, 2, 'LOG', 'LOG', 'LOG', 'LOG', 'LOG', 4, 'Phase 1', '2020-06-04 00:34:53', '2020-06-04 00:34:53', NULL),
(3, 4, 'ME', 'ME', 'WE', 'ME', 'ME', 1, 'Phase 1', '2020-06-14 00:17:37', '2020-06-14 00:17:37', NULL),
(4, 6, 'LOG', 'OPS', 'OPS', 'OPS', 'OPS', 1, 'Phase 1', '2020-06-14 01:28:38', '2020-06-14 01:28:38', NULL),
(5, 10, 'LOG', 'OPS', 'WE', 'LOG', 'OPS', 1, 'Phase 1', '2020-06-16 22:02:56', '2020-06-16 22:02:56', NULL),
(6, 22, 'WE', 'WE', 'WE', 'we', 'we', 3, 'Phase 1', '2020-11-21 08:32:15', '2020-11-21 08:32:15', NULL),
(7, 3, 'OPS', 'OPS', 'OPS', 'ops', 'ops', 3, 'Phase 1', '2020-12-12 08:54:24', '2020-12-12 08:54:24', NULL),
(8, 7, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 3, 'Phase 1', '2020-12-13 12:37:35', '2020-12-13 12:37:35', NULL),
(9, 9, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 3, 'Phase 1', '2020-12-14 02:07:56', '2020-12-14 02:07:56', NULL),
(10, 11, 'OPS', 'OPS', 'OPS', 'ops', 'ops', 3, 'Phase 1', '2020-12-14 02:21:43', '2020-12-14 02:21:43', NULL),
(11, 17, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 3, 'Phase 1', '2020-12-14 04:46:31', '2020-12-14 04:46:31', NULL),
(12, 23, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 3, 'Phase 1', '2020-12-14 12:13:01', '2020-12-14 12:13:01', NULL),
(13, 28, 'WE', 'WE', 'WE', 'WE', 'WE', 3, 'Phase 1', '2020-12-14 12:38:07', '2020-12-14 12:38:07', NULL),
(14, 29, 'WE', 'WE', 'WE', 'WE', 'WE', 3, 'Phase 1', '2020-12-14 12:44:49', '2020-12-14 12:44:49', NULL),
(15, 33, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 1, 'Phase 1', '2020-12-15 09:52:45', '2020-12-15 09:52:45', NULL),
(16, 38, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 1, 'Phase 1', '2020-12-15 11:17:41', '2020-12-15 11:17:41', NULL),
(17, 39, 'OPS', 'OPS', 'OPS', 'OPS', 'OPS', 1, 'Phase 1', '2020-12-15 11:36:56', '2020-12-15 11:36:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cadets_autobiographies`
--

CREATE TABLE `cadets_autobiographies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cadets_autobiographies`
--

INSERT INTO `cadets_autobiographies` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed8458edfa09BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/cadets_autobiography/5ed8458edfa09BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', '2020-06-03 19:51:26', '2020-06-03 19:51:26', NULL),
(2, '5ee457b62933dWhatsAppImage2019-10-07at4.00.56PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/cadets_autobiography/5ee457b62933dWhatsAppImage2019-10-07at4.00.56PM.jpeg', '81.274 kb', 4, 1, 'Phase 1', '2020-06-12 23:36:06', '2020-06-12 23:36:06', NULL),
(3, '5fd4baa3a7ea4GeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/cadets_autobiography/5fd4baa3a7ea4GeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 3, 9, 'Phase 1', '2020-12-12 07:42:11', '2020-12-12 07:42:11', NULL),
(4, '5fd8cb70f1161aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/cadets_autobiography/5fd8cb70f1161aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', '2020-12-15 09:42:57', '2020-12-15 09:42:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `captain_trainings`
--

CREATE TABLE `captain_trainings` (
  `captain_training_id` int(11) NOT NULL,
  `captain_training_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `captain_training_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navy_unit_id` int(191) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `captain_trainings`
--

INSERT INTO `captain_trainings` (`captain_training_id`, `captain_training_name`, `captain_training_rank`, `p_no`, `navy_unit_id`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`) VALUES
(1, 'captainrahbar', 'Captain', '1234', 1, 'captainrahbar@gmail.com', 'ctrahbar', '2ce6400b8383af3b1b46173b968f6596', 'Approved', '2020-12-15 09:04:52', '2020-12-15 09:04:52'),
(2, 'ctjauhar', 'Captain', '1897', 3, 'ctjauhar@gmail.com', 'ctjauhar', 'd883afd17e8a67c7c6d01a5506a72234', 'Approved', '2020-12-15 09:28:39', '2020-12-15 09:28:39'),
(3, 'ctbahadur', 'Captain', '1111', 2, 'ctbahadur@gmail.com', 'ctbahadur', '503ff161b30f6dd2e864bc193cbf1e40', 'Approved', '2020-12-15 09:30:26', '2020-12-15 09:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `captain_training_dossiers`
--

CREATE TABLE `captain_training_dossiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `captain_training_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `phase1_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase2_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_pnec_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `captain_training_dossiers`
--

INSERT INTO `captain_training_dossiers` (`id`, `captain_training_id`, `p_id`, `phase1_remarks`, `phase2_remarks`, `phase3_pnec_remarks`, `phase3_remarks`, `created_at`, `updated_at`, `joto_id`) VALUES
(12, 1, 33, 'good', NULL, NULL, NULL, '2020-12-15 09:56:46', '2020-12-15 09:57:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commanding_officers`
--

CREATE TABLE `commanding_officers` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navy_unit_id` int(191) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `exo_id` int(11) DEFAULT NULL,
  `ship_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commanding_officers`
--

INSERT INTO `commanding_officers` (`co_id`, `co_name`, `co_rank`, `p_no`, `navy_unit_id`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`, `exo_id`, `ship_name`) VALUES
(1, 'corahabar', 'Commodore', '123', 1, 'corahabar@gmail.com', 'rahbar', 'ea5371666d5c0d8f5aaaf5961da0d1f7', 'Approved', '2020-12-15 09:03:36', '2020-12-18 08:02:09', NULL, NULL),
(2, 'coshamsheer', 'Captain', '34343434343', NULL, 'coshamsheer@gmail.com', 'coshamsheer', 'f0a41df118ef9c4e503bde22cb852e40', 'Approved', '2020-12-15 09:25:34', '2020-12-15 09:25:34', NULL, 'shamsheer'),
(3, 'cojauhar', 'Commodore', '1279', 3, 'cojauhar@gmail.com', 'cojauhar', '1eb577e9cfa838f6ad648d6b0880122d', 'Approved', '2020-12-15 09:27:59', '2020-12-15 09:27:59', NULL, NULL),
(4, 'cobahadur', 'Commodore', '1998', 2, 'cobahadur@gmail.com', 'cobahadur', 'd23471ac3fd9e960f1ce1c7d179a6a4c', 'Approved', '2020-12-15 09:29:53', '2020-12-15 09:29:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commanding_officer_dossiers`
--

CREATE TABLE `commanding_officer_dossiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commanding_officer_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `phase1_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase2_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_pnec_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commanding_officer_dossiers`
--

INSERT INTO `commanding_officer_dossiers` (`id`, `commanding_officer_id`, `p_id`, `phase1_remarks`, `phase2_remarks`, `phase3_pnec_remarks`, `phase3_remarks`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, '2020-06-04 05:03:55', '2020-06-04 05:03:55', NULL),
(2, 1, 4, 'Observed and checked.', 'Observed and checked.', 'Observed and checked.', NULL, '2020-06-14 06:12:33', '2020-06-14 01:12:33', NULL),
(3, 1, 6, NULL, NULL, NULL, NULL, '2020-06-14 01:28:58', '2020-06-14 01:28:58', NULL),
(4, 1, 7, NULL, NULL, NULL, NULL, '2020-06-15 00:42:55', '2020-06-15 00:42:55', NULL),
(5, 1, 8, NULL, NULL, NULL, NULL, '2020-06-15 00:43:28', '2020-06-15 00:43:28', NULL),
(6, 1, 9, NULL, NULL, NULL, NULL, '2020-06-15 00:43:54', '2020-06-15 00:43:54', NULL),
(7, 1, 10, NULL, NULL, NULL, NULL, '2020-06-16 22:15:57', '2020-06-16 22:15:57', NULL),
(8, 1, 13, NULL, NULL, NULL, NULL, '2020-10-08 12:30:57', '2020-10-08 12:30:57', NULL),
(9, 5, 3, NULL, NULL, NULL, NULL, '2020-12-12 08:29:00', '2020-12-12 08:29:00', NULL),
(10, 2, 6, NULL, NULL, NULL, NULL, '2020-12-14 06:48:04', '2020-12-14 06:48:04', NULL),
(13, 6, 20, NULL, NULL, NULL, NULL, '2020-12-14 07:32:43', '2020-12-14 07:32:43', NULL),
(14, 1, 33, 'good', NULL, NULL, NULL, '2020-12-15 15:01:59', '2020-12-15 10:01:59', NULL),
(15, 4, 33, NULL, NULL, NULL, NULL, '2020-12-15 10:15:32', '2020-12-15 10:15:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree_certificates`
--

CREATE TABLE `degree_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `officer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degree_certificates`
--

INSERT INTO `degree_certificates` (`id`, `p_id`, `officer_name`, `p_no`, `degree`, `year`, `cgpa`, `division`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 'shahzad ali', '10302', 'BS MIS', '2020', '3.30', '1st', 'Phase 3', 'pnec', 3, '2020-06-06 09:15:22', '2020-06-06 09:15:22', NULL),
(2, 4, 'Kashif', '10302', 'BS MIS', '2020', '3.30', 'First', 'Phase 3', 'pnec', 1, '2020-06-14 01:03:38', '2020-06-14 01:03:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distinctions_records`
--

CREATE TABLE `distinctions_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `academic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sports` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_curricular_activities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distinctions_records`
--

INSERT INTO `distinctions_records` (`id`, `p_id`, `academic`, `sports`, `extra_curricular_activities`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 'nill;', 'footbal', 'quiz competition', 'Phase 1', NULL, 3, '2020-06-03 20:22:50', '2020-06-03 20:22:50', NULL),
(2, 1, 'nil', 'compak hockey tournament', 'nil', 'Phase 2', NULL, 3, '2020-06-03 20:45:29', '2020-06-03 20:45:29', NULL),
(3, 1, 'nil', 'nil', 'hockey participation', 'Phase 2', NULL, 3, '2020-06-06 08:02:18', '2020-06-06 08:02:18', NULL),
(4, 1, 'nill', 'footbal', 'litrary society head', 'Phase 3', 'pnec', 3, '2020-06-06 09:10:37', '2020-06-06 09:10:37', NULL),
(5, 4, 'CJSCC MEDAL', 'nil', 'nil', 'Phase 1', NULL, 1, '2020-06-14 00:15:54', '2020-06-14 00:15:54', NULL),
(6, 4, 'nil', 'nil', 'nil', 'Phase 2', NULL, 1, '2020-06-14 00:31:33', '2020-06-14 00:31:33', NULL),
(7, 4, 'nil', 'nil', 'nil', 'Phase 3', 'pnec', 1, '2020-06-14 01:00:57', '2020-06-14 01:00:57', NULL),
(8, 10, 'adsfd', 'sdfasd', 'asdf', 'Phase 2', NULL, NULL, '2020-12-02 13:35:17', '2020-12-02 13:35:17', 1),
(9, 10, 'adsfd', 'sdfasd', 'asdf', 'Phase 2', NULL, NULL, '2020-12-02 13:35:17', '2020-12-02 13:35:17', 1),
(10, 33, 'good', 'hockey', 'speech', 'Phase 1', NULL, 1, '2020-12-15 09:51:01', '2020-12-15 09:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `do_accounts`
--

CREATE TABLE `do_accounts` (
  `do_id` int(11) NOT NULL,
  `do_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navy_unit_id` int(191) NOT NULL,
  `profile_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sqc_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqc_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divison_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `do_accounts`
--

INSERT INTO `do_accounts` (`do_id`, `do_name`, `do_rank`, `p_no`, `navy_unit_id`, `profile_pic`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`, `sqc_name`, `sqc_id`, `divison_name`) VALUES
(1, 'raiz', 'Lieutenant commander', '23451', 1, '5fd8c39c150aeWhatsAppImage2020-12-14at2.59.29PM.jpeg', 'hamza@gmail.com', 'hamza', '8950259507cd8ce2a99f8b94674f2b77', 'Approved', '2020-12-15 09:09:32', '2020-12-15 09:09:32', NULL, NULL, 'hamza'),
(2, 'ali', 'Lieutenant commander', '56788', 1, '5fd8c3da19238WhatsAppImage2020-12-14at2.59.29PM.jpeg', 'saif@gmail.com', 'saif', '44c099ff522cd529ade21a9c7aa54ebf', 'Approved', '2020-12-15 09:10:34', '2020-12-15 09:10:34', NULL, NULL, 'saif'),
(3, 'iqbal', 'Lieutenant', '4465767698', 3, '5fd8c4fa17cdcWhatsAppImage2020-12-14at2.59.29PM.jpeg', 'iqbal@gmail.com', 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70', 'Approved', '2020-12-15 09:15:22', '2020-12-15 09:15:22', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `do_records`
--

CREATE TABLE `do_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `rank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `do_records`
--

INSERT INTO `do_records` (`id`, `p_id`, `rank_name`, `period_from`, `period_to`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(3, 4, 'lt cdr ali', '2020-01-13', '2020-06-13', 'Phase 1', '1', '2020-06-12 23:21:55', '2020-06-12 23:21:55', NULL),
(4, 4, 'lt cdr asad', '2020-06-29', '2020-07-08', 'Phase 2', '1', '2020-06-14 00:18:19', '2020-06-14 00:18:19', NULL),
(8, 1, 'Lieutenant commander', NULL, NULL, 'Phase 1', '6', '2020-12-09 09:37:55', '2020-12-09 09:37:55', NULL),
(13, 6, 'Lieutenant commander', NULL, NULL, 'Phase 3', '6', '2020-12-13 11:55:42', '2020-12-13 11:55:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exo_dossiers`
--

CREATE TABLE `exo_dossiers` (
  `id` int(11) NOT NULL,
  `exo_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `phase1_remarks` varchar(191) DEFAULT NULL,
  `phase2_remarks` varchar(191) DEFAULT NULL,
  `phase3_pnec_remarks` text DEFAULT NULL,
  `phase3_remarks` varchar(191) DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exo_dossiers`
--

INSERT INTO `exo_dossiers` (`id`, `exo_id`, `p_id`, `phase1_remarks`, `phase2_remarks`, `phase3_pnec_remarks`, `phase3_remarks`, `joto_id`, `created_at`, `updated_at`) VALUES
(1, 1, 10, NULL, NULL, NULL, NULL, NULL, '2020-12-05 03:24:07', '2020-12-05 03:24:07'),
(2, 1, 1, NULL, NULL, NULL, NULL, 5, '2020-12-05 12:08:20', '2020-12-05 12:08:20'),
(3, 2, 20, NULL, NULL, NULL, NULL, 1, '2020-12-14 07:27:50', '2020-12-14 07:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `exo_officers`
--

CREATE TABLE `exo_officers` (
  `exo_id` int(11) NOT NULL,
  `exo_name` varchar(191) DEFAULT NULL,
  `exo_rank` varchar(191) DEFAULT NULL,
  `p_no` varchar(191) DEFAULT NULL,
  `navy_unit_id` int(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `account_status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ship_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exo_officers`
--

INSERT INTO `exo_officers` (`exo_id`, `exo_name`, `exo_rank`, `p_no`, `navy_unit_id`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`, `ship_name`) VALUES
(1, 'exoshamsheer', 'Commander', '454646412', NULL, 'exoshamsheer@gmail.com', 'exoshamsheer', 'aef5d8666fd2f2f0f14d12f3c4357bf3', 'Approved', '2020-12-15 09:26:51', '2020-12-15 09:26:51', 'shamsheer');

-- --------------------------------------------------------

--
-- Table structure for table `games_proficiencies`
--

CREATE TABLE `games_proficiencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proficiency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `oc_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games_proficiencies`
--

INSERT INTO `games_proficiencies` (`id`, `p_id`, `term`, `game`, `proficiency`, `do_name`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`, `oc_no`) VALUES
(1, 1, 'Term-I', 'foot ball', 'medal', 'LT CDR IOMRAN', 'Phase 1', NULL, 3, '2020-06-03 20:02:25', '2020-06-03 20:02:25', NULL, NULL),
(2, 1, 'Term-II', 'cricket', 'medal', 'LT CDR IMRAN', 'Phase 1', NULL, 3, '2020-06-03 20:02:49', '2020-06-03 20:02:49', NULL, NULL),
(3, 1, 'Term-III', 'foot ball', 'medal', 'LT CDR IMRAN', 'Phase 1', NULL, 3, '2020-06-03 20:03:09', '2020-06-03 20:03:09', NULL, NULL),
(4, 1, '4', 'cricket', 'medal', 'LT CDR IOMRAN', 'Phase 2', NULL, 3, '2020-06-06 07:42:16', '2020-06-06 07:42:16', NULL, NULL),
(5, 4, 'Term-I', 'foot ball', 'medal', 'LT CDR IMRAN', 'Phase 1', NULL, 1, '2020-06-13 12:23:30', '2020-06-13 12:23:30', NULL, NULL),
(6, 4, 'Term-II', 'cricket', 'medal', 'LT CDR IMRAN', 'Phase 1', NULL, 1, '2020-06-13 12:23:42', '2020-06-13 12:23:42', NULL, NULL),
(7, 4, 'Term-III', 'foot ball', 'medal', 'LT CDR IMRAN', 'Phase 1', NULL, 1, '2020-06-13 12:23:53', '2020-06-13 12:23:53', NULL, NULL),
(8, 2, 'Term_I', 'football', 'medal', 'Lt Mushtaq', 'Phase 1', NULL, 2, '2020-11-12 12:53:01', '2020-11-12 12:53:01', NULL, NULL),
(9, 10, 'VI', 'asdf', 'sdfsd', 'adsf', 'Phase 2', NULL, NULL, '2020-12-02 13:29:58', '2020-12-02 13:29:58', 1, NULL),
(10, NULL, 'Term_I', 'football', 'medal', 'Lt Mushtaq', 'Phase 1', NULL, NULL, '2020-12-03 12:15:48', '2020-12-03 12:15:48', NULL, 11),
(11, NULL, 'Term_I', 'football', 'medal', 'Lt Mushtaq', 'Phase 1', NULL, NULL, '2020-12-12 08:18:43', '2020-12-12 08:18:43', NULL, 454),
(12, NULL, 'Term_I', 'football', 'medal', 'Lt Mushtaq', 'Phase 1', NULL, NULL, '2020-12-13 07:05:45', '2020-12-13 07:05:45', NULL, 454),
(13, NULL, 'Term_I', 'football', 'medal', 'Lt Mushtaq', 'Phase 1', NULL, NULL, '2020-12-15 10:05:31', '2020-12-15 10:05:31', NULL, 12349);

-- --------------------------------------------------------

--
-- Table structure for table `general_remarks`
--

CREATE TABLE `general_remarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_remarks`
--

INSERT INTO `general_remarks` (`id`, `p_id`, `term`, `assessment`, `remarks`, `form_type`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 'Term-I', 'Mid-term assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:18:28', '2020-06-03 20:18:28', NULL),
(2, 1, 'Term-II', 'Terminal assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:18:43', '2020-06-03 20:18:43', NULL),
(3, 1, 'Term-II', 'Mid-term assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:18:58', '2020-06-03 20:18:58', NULL),
(4, 1, 'Term-II', 'Terminal assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:19:13', '2020-06-03 20:19:13', NULL),
(5, 1, 'Term-II', 'Terminal assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:19:29', '2020-06-03 20:19:29', NULL),
(6, 1, 'Term-III', 'Mid-term assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:19:41', '2020-06-03 20:19:41', NULL),
(7, 1, 'Term-III', 'Terminal assessment', 'he is good', 'S 1-32', 3, 'Phase 1', NULL, '2020-06-03 20:19:57', '2020-06-03 20:19:57', NULL),
(8, 1, 'Term-IV', 'Mid-term assessment', 'he is good', 'S 1-32', 3, 'Phase 2', NULL, '2020-06-03 20:44:30', '2020-06-03 20:44:30', NULL),
(9, 1, 'Term-IV', 'Terminal assessment', 'he is good', 'S 1-32', 3, 'Phase 2', NULL, '2020-06-03 20:44:51', '2020-06-03 20:44:51', NULL),
(10, 1, 'Term-IV', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 2', NULL, '2020-06-06 07:59:50', '2020-06-06 07:59:50', NULL),
(11, 1, 'Term-IV', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 2', NULL, '2020-06-06 08:00:25', '2020-06-06 08:00:25', NULL),
(12, 1, 'Semester-III', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:02:17', '2020-06-06 09:02:17', NULL),
(13, 1, 'Semester-III', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:02:34', '2020-06-06 09:02:34', NULL),
(14, 1, 'Semester-IV', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:02:51', '2020-06-06 09:02:51', NULL),
(15, 1, 'Semester-IV', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:03:05', '2020-06-06 09:03:05', NULL),
(16, 1, 'Semester-V', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:03:20', '2020-06-06 09:03:20', NULL),
(17, 1, 'Semester-V', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:03:34', '2020-06-06 09:03:34', NULL),
(18, 1, 'Semester-VI', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:03:47', '2020-06-06 09:03:47', NULL),
(19, 1, 'Semester-VI', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:04:12', '2020-06-06 09:04:12', NULL),
(20, 1, 'Semester-VI', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:04:28', '2020-06-06 09:04:28', NULL),
(21, 1, 'Semester-VII', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:04:45', '2020-06-06 09:04:45', NULL),
(22, 1, 'Semester-VII', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:05:00', '2020-06-06 09:05:00', NULL),
(23, 1, 'Semester-VIII', 'Mid-term assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:05:18', '2020-06-06 09:05:18', NULL),
(24, 1, 'Semester-VIII', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:05:34', '2020-06-06 09:05:34', NULL),
(25, 1, 'Semester-VIII', 'Terminal assessment', 'very intelligent,well diciplined and hard working indiviual. possees a good military bearing and is very good in physicals. has sound knowledge of the military and performs well in the assigned tasks', 'S 1-32', 3, 'Phase 3', 'pnec', '2020-06-06 09:05:51', '2020-06-06 09:05:51', NULL),
(26, 4, 'Term-I', 'Mid-term assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:13:40', '2020-06-14 00:13:40', NULL),
(27, 4, 'Term-I', 'Terminal assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:13:51', '2020-06-14 00:13:51', NULL),
(28, 4, 'Term-II', 'Mid-term assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:14:03', '2020-06-14 00:14:03', NULL),
(29, 4, 'Term-II', 'Terminal assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:14:16', '2020-06-14 00:14:16', NULL),
(30, 4, 'Term-III', 'Mid-term assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:14:28', '2020-06-14 00:14:28', NULL),
(31, 4, 'Term-III', 'Terminal assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 1', NULL, '2020-06-14 00:14:38', '2020-06-14 00:14:38', NULL),
(32, 4, 'Term-IV', 'Mid-term assessment', 'Hardworking and motivated towards training', 'S 1-32', 1, 'Phase 2', NULL, '2020-06-14 00:30:34', '2020-06-14 00:30:34', NULL),
(33, 4, 'Term-IV', 'Terminal assessment', 'Punctual,hardworking and motivated towards service.', 'S 1-32', 1, 'Phase 2', NULL, '2020-06-14 00:31:17', '2020-06-14 00:31:17', NULL),
(34, 4, 'Semester-III', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:54:57', '2020-06-14 00:54:57', NULL),
(35, 4, 'Semester-III', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:55:08', '2020-06-14 00:55:08', NULL),
(36, 4, 'Semester-IV', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:55:20', '2020-06-14 00:55:20', NULL),
(37, 4, 'Semester-IV', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:55:30', '2020-06-14 00:55:30', NULL),
(38, 4, 'Semester-V', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:55:47', '2020-06-14 00:55:47', NULL),
(39, 4, 'Semester-V', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:55:57', '2020-06-14 00:55:57', NULL),
(40, 4, 'Semester-VI', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:56:08', '2020-06-14 00:56:08', NULL),
(41, 4, 'Semester-V', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:56:19', '2020-06-14 00:56:19', NULL),
(42, 4, 'Semester-VI', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:56:29', '2020-06-14 00:56:29', NULL),
(43, 4, 'Semester-VI', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:56:43', '2020-06-14 00:56:43', NULL),
(44, 4, 'Semester-VI', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:56:53', '2020-06-14 00:56:53', NULL),
(45, 4, 'Semester-VI', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:57:12', '2020-06-14 00:57:12', NULL),
(46, 4, 'Semester-VI', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:57:23', '2020-06-14 00:57:23', NULL),
(47, 4, 'Semester-VI', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:57:35', '2020-06-14 00:57:35', NULL),
(48, 4, 'Semester-VII', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:57:47', '2020-06-14 00:57:47', NULL),
(49, 4, 'Semester-VII', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:57:58', '2020-06-14 00:57:58', NULL),
(50, 4, 'Semester-VII', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:58:12', '2020-06-14 00:58:12', NULL),
(51, 4, 'Semester-VIII', 'Mid-term assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:58:24', '2020-06-14 00:58:24', NULL),
(52, 4, 'Semester-VIII', 'Terminal assessment', 'Hardworking and motivated throughout the tenure.', 'S 1-32', 1, 'Phase 3', 'pnec', '2020-06-14 00:58:35', '2020-06-14 00:58:35', NULL),
(53, 10, 'Term-IV', 'Mid-term assessment', 'Individual is an overall best cadet.Have high sense of duty and motivated towards training.', 'S 1-32', 1, 'Phase 2', NULL, '2020-06-16 22:24:03', '2020-06-16 22:24:03', NULL),
(54, 10, 'Term-IV', 'Mid-term assessment', 'sadasd', 'S 1-32', NULL, 'Phase 2', NULL, '2020-12-02 13:35:04', '2020-12-02 13:35:04', 1),
(55, 31, NULL, 'rer,a,', 'erer,a,', 'S 1-32', 3, 'Phase 1', NULL, '2020-12-15 06:33:18', '2020-12-15 06:33:18', NULL),
(56, 32, NULL, 'sdfasdfasdfsadf,sdfasdfasdfsadf,', 'asdfasdfasdf,asdfasdfasdf,', 'S 1-32', 3, 'Phase 1', NULL, '2020-12-15 08:02:14', '2020-12-15 08:02:14', NULL),
(57, 32, NULL, '1,1,', '1,1,', 'S 1-32', 3, 'Phase 1', NULL, '2020-12-15 08:02:45', '2020-12-15 08:02:45', NULL),
(58, 32, NULL, '1,1,', '2,2,', 'S 1-32', 3, 'Phase 1', NULL, '2020-12-15 08:07:34', '2020-12-15 08:07:34', NULL),
(59, 32, NULL, '1,2,', '1,2,', 'S 1-32', 3, 'Phase 1', NULL, '2020-12-15 08:07:52', '2020-12-15 08:07:52', NULL),
(60, 33, 'Term-I', 'Mid-term assessment', 'good', 'S 1-32', 1, 'Phase 1', NULL, '2020-12-15 09:49:40', '2020-12-15 09:49:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inspection_records`
--

CREATE TABLE `inspection_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspecting_officer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inspection_records`
--

INSERT INTO `inspection_records` (`id`, `p_id`, `date`, `remarks`, `inspecting_officer_name`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '2019-03-02', 'good', 'lt cdr umair', 'Phase 1', 3, '2020-06-03 19:38:51', '2020-06-03 19:38:51', NULL),
(2, 1, '2019-03-02', 'good', 'lt cdr umair', 'Phase 1', 3, '2020-06-03 19:38:51', '2020-06-03 19:38:51', NULL),
(3, 1, '2018-07-31', 'dressed good', 'lt ali amjad', 'Phase 2', 3, '2020-06-06 07:24:48', '2020-06-06 07:24:48', NULL),
(4, 4, '2020-06-27', 'satisfactory', 'lt cdr umair', 'Phase 1', 1, '2020-06-12 23:21:28', '2020-06-12 23:21:28', NULL),
(5, 4, '2020-06-25', 'good turnout', 'lt ali amjad', 'Phase 2', 1, '2020-06-14 00:18:06', '2020-06-14 00:18:06', NULL),
(6, 23, '2020-12-03', 'ADFASDF', 'ASDFASDF', 'Phase 2', NULL, '2020-12-02 12:39:51', '2020-12-02 12:39:51', NULL),
(7, 23, '2020-12-03', 'EEE', 'EEE', 'Phase 2', NULL, '2020-12-02 12:39:52', '2020-12-02 12:39:52', NULL),
(8, 10, '2020-12-02', 'ADFASDF', 'ASDFASDF', 'Phase 2', NULL, '2020-12-02 12:47:12', '2020-12-02 12:47:12', 1),
(9, 10, '2020-12-02', 'dfgfgfs', 'dfgfdg', 'Phase 2', NULL, '2020-12-02 12:47:13', '2020-12-02 12:47:13', 1),
(10, 3, '2020-12-12', 'ee', 'e', 'Phase 1', 9, '2020-12-12 07:30:17', '2020-12-12 07:30:17', NULL),
(11, 3, '2020-12-12', 'ee', 'e', 'Phase 1', 9, '2020-12-12 07:30:17', '2020-12-12 07:30:17', NULL),
(12, 3, '2020-12-11', 'e', 'e', 'Phase 1', 9, '2020-12-12 07:30:33', '2020-12-12 07:30:33', NULL),
(13, 17, '2020-12-14', 'ADFASDF', 'ASDFASDF', 'Phase 1', 3, '2020-12-14 04:44:55', '2020-12-14 04:44:55', NULL),
(14, 17, '2020-12-14', 'ADFASDF', 'ASDFASDF', 'Phase 1', 3, '2020-12-14 04:44:55', '2020-12-14 04:44:55', NULL),
(15, 23, '2020-12-14', 'good', 'good', 'Phase 1', 3, '2020-12-14 12:12:28', '2020-12-14 12:12:28', NULL),
(16, 23, '2020-12-14', 'good', 'good', 'Phase 1', 3, '2020-12-14 12:12:28', '2020-12-14 12:12:28', NULL),
(17, 33, '2020-12-15', 'good', 'Lt hamaz', 'Phase 1', 1, '2020-12-15 09:34:17', '2020-12-15 09:34:17', NULL),
(18, 33, '2020-12-15', 'good', 'Lt hamaz', 'Phase 1', 1, '2020-12-15 09:34:17', '2020-12-15 09:34:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `joto_accounts`
--

CREATE TABLE `joto_accounts` (
  `joto_id` int(11) NOT NULL,
  `joto_name` varchar(191) DEFAULT NULL,
  `joto_rank` varchar(191) DEFAULT NULL,
  `p_no` varchar(191) DEFAULT NULL,
  `navy_unit_id` int(191) DEFAULT NULL,
  `profile_pic` text DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `account_status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ship_name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joto_accounts`
--

INSERT INTO `joto_accounts` (`joto_id`, `joto_name`, `joto_rank`, `p_no`, `navy_unit_id`, `profile_pic`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`, `ship_name`) VALUES
(1, 'jotosham', 'Lieutenant', '4567890', NULL, '5fd8c42e4f347WhatsAppImage2020-12-14at2.59.29PM.jpeg', 'shamsheer@gmail.com', 'shamsheer', '56d463d0ae542f4e620695e7e426a985', 'Approved', '2020-12-15 09:11:58', '2020-12-15 09:11:58', 'shamsheer'),
(2, 'pnssaif', 'Lieutenant', '3456780', NULL, '5fd8c492749abWhatsAppImage2020-12-14at2.59.29PM.jpeg', 'pnssaif@gmail.com', 'pnssaif', '5445b15a2feba31275fd110e4386b200', 'Approved', '2020-12-15 09:13:38', '2020-12-15 09:13:38', 'pnssaif'),
(3, 'jauhar', 'Lieutenant', '4567913', 3, '5fd8c4cc16642WhatsAppImage2020-12-14at2.59.29PM.jpeg', 'jauhar@gmail.com', 'jauhar', 'feebc8554051e8b0069154847775ac87', 'Approved', '2020-12-15 09:14:36', '2020-12-15 09:14:36', NULL),
(4, 'glops', 'Lieutenant commander', '3456123', 2, '5fd8c53bd59f4WhatsAppImage2020-12-14at2.59.29PM.jpeg', 'glops@gmail.com', 'glops', 'ae8b6e1834136d11bacb88c9019a2416', 'Approved', '2020-12-15 09:16:27', '2020-12-15 09:16:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `joto_records`
--

CREATE TABLE `joto_records` (
  `id` bigint(20) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `rank_name` varchar(191) DEFAULT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `phase` varchar(191) DEFAULT NULL,
  `joto_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joto_records`
--

INSERT INTO `joto_records` (`id`, `p_id`, `rank_name`, `period_from`, `period_to`, `phase`, `joto_id`, `created_at`, `updated_at`) VALUES
(8, 14, NULL, NULL, NULL, 'Phase 3', '2', '2020-11-30 15:48:09', '2020-11-30 15:48:09'),
(17, 6, NULL, NULL, NULL, 'Phase 3', '5', '2020-12-13 11:54:56', '2020-12-13 11:54:56'),
(26, 20, NULL, NULL, NULL, 'Phase 2', '1', '2020-12-14 06:56:14', '2020-12-14 06:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admitted` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist_opinion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructional_loss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `joto_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oc_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`id`, `p_id`, `date`, `term`, `disease`, `admitted`, `mo_remarks`, `specialist_opinion`, `instructional_loss`, `do_remarks`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`, `joto_remarks`, `oc_no`) VALUES
(1, 1, '2018-11-28 19:00:00', 'Term-I', 'nil', 'nil', 'good', 'nil', '0', 'nil', 3, 'Phase 1', NULL, '2020-06-03 20:04:12', '2020-06-03 20:04:12', NULL, NULL, NULL),
(2, 1, '2017-11-29 19:00:00', 'Term-II', 'fever', 'nil', 'good', 'nil', '03days', 'nil', 3, 'Phase 1', NULL, '2020-06-03 20:05:11', '2020-06-03 20:05:11', NULL, NULL, NULL),
(3, 1, '2018-10-29 19:00:00', 'Term-III', 'flu', 'nil', 'he is ok', 'nil', 'nil', 'nil', 3, 'Phase 1', NULL, '2020-06-03 20:06:07', '2020-06-03 20:06:07', NULL, NULL, NULL),
(4, 1, '2018-10-29 19:00:00', '4', 'parkinson', 'admitted in rahat', 'recovered', 'nil', 'nil', 'nil', 3, 'Phase 2', NULL, '2020-06-06 07:44:17', '2020-06-06 07:44:17', NULL, NULL, NULL),
(5, 4, '2020-06-23 19:00:00', 'Term-I', 'fever', 'sickbay pns rahbar', 'bed rest', 'nill', '2 days', 'satisfactory', 1, 'Phase 1', NULL, '2020-06-13 12:24:53', '2020-06-13 12:24:53', NULL, NULL, NULL),
(6, 4, '2020-06-23 19:00:00', 'Term-II', 'fever', 'sickbay pns rahbar', 'attc 2 days', 'nil', '2 days', 'improving', 1, 'Phase 1', NULL, '2020-06-13 12:25:44', '2020-06-13 12:25:44', NULL, NULL, NULL),
(7, 4, '2020-06-24 19:00:00', 'Term-III', 'fever', 'sickbay pns rahbar', 'rest 2 days', 'nill', '2 days', 'improving', 1, 'Phase 1', NULL, '2020-06-13 12:26:14', '2020-06-13 12:26:14', NULL, NULL, NULL),
(8, 4, '2020-06-23 19:00:00', '4', 'fever', 'sickbay pns rahbar', 'rest 2 days', 'nil', '2 days', 'improving', 1, 'Phase 2', NULL, '2020-06-14 00:27:06', '2020-06-14 00:27:06', NULL, NULL, NULL),
(9, 1, '2020-10-15 19:00:00', 'Term-I', 'a', 'a', 'a', 'a', 'a', 'a', 3, 'Phase 1', NULL, '2020-10-16 08:35:19', '2020-10-16 08:35:19', NULL, NULL, NULL),
(10, 1, '2020-10-15 19:00:00', 'Term-II', 'a', 'a', 'a', 'a', 'a', 'a', 3, 'Phase 1', NULL, '2020-10-16 08:35:19', '2020-10-16 08:35:19', NULL, NULL, NULL),
(11, 4, '2020-11-06 17:46:23', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-06 12:46:23', '2020-11-06 12:46:23', NULL, NULL, NULL),
(12, 4, '2020-11-12 15:12:00', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 10:11:59', '2020-11-12 10:11:59', NULL, NULL, NULL),
(13, 4, '2020-11-12 15:13:01', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 10:13:01', '2020-11-12 10:13:01', NULL, NULL, NULL),
(14, 4, '2020-11-12 15:13:11', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 10:13:11', '2020-11-12 10:13:11', NULL, NULL, NULL),
(15, 4, '2020-11-12 16:44:35', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 11:44:35', '2020-11-12 11:44:35', NULL, NULL, NULL),
(16, 4, '2020-11-12 17:12:58', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 12:12:58', '2020-11-12 12:12:58', NULL, NULL, NULL),
(17, 4, '2020-11-12 17:13:20', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 12:13:20', '2020-11-12 12:13:20', NULL, NULL, NULL),
(18, 4, '2020-11-12 17:14:07', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-12 12:14:07', '2020-11-12 12:14:07', NULL, NULL, NULL),
(19, 4, '2020-11-20 12:58:18', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-20 07:58:18', '2020-11-20 07:58:18', NULL, NULL, NULL),
(20, NULL, '2020-11-25 05:12:55', 'Term_9', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, '3', NULL, '2020-11-25 00:12:55', '2020-11-25 00:12:55', NULL, NULL, NULL),
(23, 1, '2020-11-25 05:37:44', 'Term_11', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, 'Phase 1', NULL, '2020-11-25 00:37:44', '2020-11-25 00:37:44', NULL, NULL, NULL),
(24, 1, '2020-11-25 05:37:56', 'Term_11', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, 'Phase 1', NULL, '2020-11-25 00:37:56', '2020-11-25 00:37:56', NULL, NULL, NULL),
(25, 10, '2020-12-02 19:00:00', 'VI', 'asd', 'asd', 'a', 'a', 'a', 'asd', NULL, 'Phase 2', NULL, '2020-12-02 13:32:00', '2020-12-02 13:32:00', 1, NULL, NULL),
(26, 1, '2020-12-03 07:08:20', 'Term_11', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, 'Phase 1', NULL, '2020-12-03 02:08:20', '2020-12-03 02:08:20', NULL, NULL, NULL),
(28, NULL, '2020-12-03 07:22:04', 'Term_11', 'hiv', 'yesterday', 'yeah', 'good condition', 'severe', 'nice', 55, 'Phase 1', NULL, '2020-12-03 02:22:04', '2020-12-03 02:22:04', NULL, NULL, 16135),
(29, NULL, '2020-12-03 07:24:18', 'Term_7', 'aa', 'yesterday', 'yeah aa', 'good condition', 'severe', 'nice', NULL, 'Phase 1', NULL, '2020-12-03 02:24:18', '2020-12-03 02:24:18', NULL, NULL, 16135),
(30, NULL, '2020-12-03 08:07:38', 'Term_7', 'aa', 'yesterday', 'yeah aa', 'good condition', 'severe', 'nice', NULL, 'Phase 1', NULL, '2020-12-03 03:07:38', '2020-12-03 03:07:38', NULL, NULL, 11),
(31, NULL, '2020-12-03 08:33:13', 'Term_7', 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', NULL, 'Phase 1', NULL, '2020-12-03 03:33:13', '2020-12-03 03:33:13', NULL, NULL, 11),
(32, NULL, '2020-12-03 17:06:14', 'Term_6', 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', NULL, 'Phase 1', NULL, '2020-12-03 12:06:14', '2020-12-03 12:06:14', NULL, NULL, 11),
(33, NULL, '2020-12-12 13:15:26', 'Term_6', 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', NULL, 'Phase 1', NULL, '2020-12-12 08:15:26', '2020-12-12 08:15:26', NULL, NULL, 454),
(34, NULL, '2020-12-13 09:34:22', 'Term_6', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', NULL, 'Phase 1', NULL, '2020-12-13 04:34:22', '2020-12-13 04:34:22', NULL, NULL, 454),
(35, NULL, '2020-12-15 15:05:16', 'Term_6', 'cc', 'cc', 'cc', 'cc', 'cc', 'cc', NULL, 'Phase 1', NULL, '2020-12-15 10:05:16', '2020-12-15 10:05:16', NULL, NULL, 12349);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `reciever_id` int(11) DEFAULT NULL,
  `message_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_02_04_102508_create_do_accounts_table', 1),
(6, '2020_02_19_064752_create_nhq_logins_table', 2),
(7, '2020_02_21_053031_create_pn_form1s_table', 3),
(8, '2020_02_21_064434_create_inspection_records_table', 4),
(9, '2020_02_22_062837_create_do_records_table', 5),
(10, '2020_02_22_071144_create_personal_datas_table', 6),
(11, '2020_02_22_071209_create_personal_data_attachments_table', 6),
(12, '2020_02_24_052753_create_obiographies_table', 7),
(13, '2020_02_24_084753_create_cadets_autobiographies_table', 8),
(14, '2020_02_24_090243_create_psychologist_reports_table', 9),
(15, '2020_02_24_100431_create_observation_records_table', 10),
(16, '2020_02_24_110422_create_punishment_records_table', 11),
(17, '2020_02_24_115143_create_observation_slips_table', 12),
(18, '2020_02_25_052417_create_warning_records_table', 13),
(19, '2020_02_25_055231_create_warning_attachments_table', 14),
(20, '2020_02_26_053914_create_saluting_swimming_records_table', 15),
(21, '2020_02_26_063653_create_physical_effeciency_records_table', 16),
(22, '2020_02_26_073330_create_games_proficiencies_table', 17),
(23, '2020_02_26_085751_create_medical_records_table', 18),
(24, '2020_02_27_063608_create_officer_qualities_table', 19),
(25, '2020_02_27_084335_create_general_remarks_table', 20),
(26, '2020_02_27_085347_create_progress_charts_table', 21),
(27, '2020_02_27_095040_create_distinctions_records_table', 22),
(28, '2020_02_28_060157_create_seniority_records_table', 23),
(29, '2020_03_10_054443_create_academic_records_table', 24),
(30, '2020_03_13_053454_create_branch_allocations_table', 25),
(31, '2020_03_20_133156_create_seniority_record_phase2s_table', 26),
(32, '2020_03_20_133607_create_degree_certificates_table', 27),
(33, '2020_03_20_133752_create_seniority_record_phase2s_table', 28),
(34, '2020_03_26_100628_create_seniority_record_phase3s_table', 29),
(35, '2020_03_26_100647_create_overall_seniority_records_table', 29),
(36, '2020_03_28_125231_create_captain_trainings_table', 30),
(37, '2020_03_28_125246_create_commanding_officers_table', 30),
(38, '2020_03_28_134101_create_captain_training_dossiers_table', 31),
(39, '2020_03_28_134110_create_commanding_officer_dossiers_table', 31),
(40, '2020_04_06_124345_create_seniority_record2_phase2s_table', 32),
(41, '2020_04_07_061727_create_seniority_record_phase3_pnecs_table', 33),
(42, '2020_04_10_084013_create_messages_table', 34),
(43, '2020_04_20_113941_create_navy_units_table', 35),
(44, '2020_04_26_103248_create_progress_chart_phase3s_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `navy_units`
--

CREATE TABLE `navy_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navy_units`
--

INSERT INTO `navy_units` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'PNS Rahbar', NULL, NULL),
(2, 'PNS Bahadur', NULL, NULL),
(3, 'PNS Jauhar', NULL, NULL),
(4, 'PNS Karsaz', NULL, NULL),
(5, 'PNSL', NULL, NULL),
(6, 'PN Fleet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhq_dossiers`
--

CREATE TABLE `nhq_dossiers` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `phase1_remarks` varchar(191) DEFAULT NULL,
  `phase2_remarks` varchar(191) DEFAULT NULL,
  `phase3_pnec_remarks` text DEFAULT NULL,
  `phase3_remarks` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `phase` varchar(191) DEFAULT NULL,
  `nhq_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhq_dossiers`
--

INSERT INTO `nhq_dossiers` (`id`, `p_id`, `do_id`, `joto_id`, `phase1_remarks`, `phase2_remarks`, `phase3_pnec_remarks`, `phase3_remarks`, `created_at`, `updated_at`, `phase`, `nhq_id`) VALUES
(18, 33, NULL, 4, NULL, NULL, NULL, NULL, '2020-12-15 16:33:45', '2020-12-15 11:33:45', 'Phase 3', 2),
(19, 37, NULL, 1, NULL, NULL, NULL, NULL, '2020-12-15 16:16:25', '2020-12-15 11:16:25', 'Phase 3', 3),
(20, 37, NULL, 1, NULL, NULL, NULL, NULL, '2020-12-15 16:16:25', '2020-12-15 11:16:25', 'Phase 3', 2),
(21, 38, NULL, 4, NULL, NULL, NULL, NULL, '2020-12-15 16:33:36', '2020-12-15 11:33:36', 'Phase 3', 2),
(22, 39, NULL, 4, NULL, NULL, NULL, NULL, '2020-12-15 16:39:35', '2020-12-15 11:39:35', 'Phase 3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhq_logins`
--

CREATE TABLE `nhq_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nhq_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhq_id` int(11) DEFAULT NULL,
  `nhq_rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhq_logins`
--

INSERT INTO `nhq_logins` (`id`, `username`, `password`, `account_type`, `created_at`, `updated_at`, `nhq_name`, `nhq_id`, `nhq_rank`, `p_no`, `profile_pic`, `email`) VALUES
(2, 'cao', '18452d47d97eb0f306c59ae38087fcb0', 'COA', NULL, '2020-12-17 07:17:35', NULL, 2, NULL, NULL, NULL, NULL),
(3, 'nhq123', 'd31b3e87a57f70194e6d4bdc75b38e2e', NULL, '2020-12-15 09:31:45', '2020-12-21 11:25:36', 'nhq', 3, 'Commodore', '343535', '5fd8c8d13d85eWhatsAppImage2020-12-14at2.59.29PM.jpeg', 'nhq@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `obiographies`
--

CREATE TABLE `obiographies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sect` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_place_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` date NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_held` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matric_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fsc_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fsc_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fsc_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fsc_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_school` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_of_kin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karachi_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karachi_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_early` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_high_school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_college` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unforgettable_moment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `favourite_personality` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `influence_by_whom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disliked_person` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aim` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `good_points` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weak_points` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obiographies`
--

INSERT INTO `obiographies` (`id`, `p_id`, `p_no`, `division`, `religion`, `sect`, `permanent_address`, `telephone`, `identification_mark`, `height`, `weight`, `blood_group`, `date_place_birth`, `joining_date`, `nic`, `not_held`, `previous_service`, `matric_marks`, `matric_division`, `matric_year`, `matric_school`, `fsc_marks`, `fsc_division`, `fsc_year`, `fsc_school`, `other_marks`, `other_division`, `other_year`, `other_school`, `father_name`, `profession`, `next_of_kin`, `relation`, `address`, `karachi_address`, `karachi_phone`, `emergency_contact`, `family_background`, `education_early`, `education_high_school`, `education_college`, `unforgettable_moment`, `favourite_personality`, `influence_by_whom`, `disliked_person`, `achievements`, `aim`, `good_points`, `weak_points`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '9750', 'c', 'islam', 'sunni', 'skardu', 'nil', 'nil', '173', '65', 'a+', '01 02 1997         skardu', '2016-01-31', '1234343 4425 4', 'nil', 'nil', '800', 'a', '2010', 's', '800', 'a', '2012', 'govt', 'nnil', 'nil', 'nil', 'nil', 'khan', 'teacher', 'father', 'father', 'skardu', 'skardu', NULL, 'nil', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'good', 'Phase 1', 3, '2020-06-03 19:49:24', '2020-06-03 19:49:24', NULL),
(2, 4, '16134', 'hamza', 'islam', 'Sunni', 'dalazak road peshawar', '03111931294', 'nil', '173cm', '65kg', 'A+ve', 'peshawar KPK', '2020-07-02', '12343-12334455-7', 'NIL', 'NIL', '800', 'A', '2010', 'aps peshawar', '900', 'A', '2012', 'aps peshawar', 'nil', 'nil', 'nil', 'nil', 'khan', 'teacher', 'Khan', 'father', 'dalazak road peshawar', 'nil', NULL, '03111931294', 'Belong to middle class family. father is teacher.Mother is housewife.', 'From aps peshawar', 'From aps peshawar with ist division', 'From aps peshawar with ist division', 'Father\'s heart operation', 'MY father', 'Father', 'nill', 'ist position in matric in my district', 'To become a proud naval officer', 'honest\r\nhardworking', 'lackness in prayers', 'Phase 1', 1, '2020-06-12 23:32:40', '2020-06-12 23:32:40', NULL),
(3, 3, '3434', 'er', 'islam', 'islam', 'sf', '341', 'sfg', '3', '3', 'n', 'rtr', '2020-12-11', '445', '45', '45', '1', '4', '2002', 'e', '1', '3', '2002', 'e', '1', '3', '2002', 'e', 'sdg', 'sfg', 'gsdfg', 'sfdg', 'sf', 'ssdfg', NULL, '444', 'dfg', 'sdg', 'sdg', 'sdg', 'sdg', 'sdg', 'sdsg', 'sg', 'sdg', 'sdg', 'sg', 'sg', 'Phase 1', 9, '2020-12-12 07:41:21', '2020-12-12 07:41:21', NULL),
(4, 33, '34561', 'hamza', 'islam', 'sunni', 'karachi', '3434', 'nil', '5.7', '65', 'A+', 'Karachi', '2020-12-14', '44444444', 'nil', 'nil', '789', 'A', '2002', 'APS', '1000', 'A+', '2004', 'APS', NULL, NULL, NULL, NULL, 'ali', 'farmar', 'mushtaq', 'brother', 'karachi', 'karachi', NULL, '9999999', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'karachi', 'Phase 1', 1, '2020-12-15 09:42:29', '2020-12-15 09:42:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `observation_records`
--

CREATE TABLE `observation_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `observation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observed_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_taken` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `observation_records`
--

INSERT INTO `observation_records` (`id`, `p_id`, `term`, `date`, `observation`, `observed_by`, `action_taken`, `phase3_type`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 'Term-I', '2018-12-31', 'good', 'LT IMRAN', 'APPRECIATED', NULL, 3, 'Phase 1', '2020-06-03 19:52:43', '2020-06-03 19:52:43', NULL),
(2, 1, 'Term-II', '2019-12-31', 'good', 'lt cdr  umair pn', 'green slip', NULL, 3, 'Phase 1', '2020-06-03 19:53:19', '2020-06-03 19:53:19', NULL),
(3, 1, 'Term-III', '2020-12-31', 'good', 'lt cdr  umair pn', 'green slip', NULL, 3, 'Phase 1', '2020-06-03 19:53:53', '2020-06-03 19:53:53', NULL),
(4, 1, 'Term-IV', '2018-10-31', 'well disciplined food bearing', 'lt cdr  umair pn', 'nill', NULL, 3, 'Phase 2', '2020-06-06 07:34:11', '2020-06-06 07:34:11', NULL),
(5, 1, NULL, '2019-12-31', 'found sleeping in the class', 'LT IMRAN', 'bullshit', 'pnec', 3, 'Phase 3', '2020-06-06 08:20:16', '2020-06-06 08:20:16', NULL),
(6, 4, 'Term-I', '2020-07-03', 'Wearing improper uniform', 'LT IMRAN', 'red slip', NULL, 1, 'Phase 1', '2020-06-12 23:38:38', '2020-06-12 23:38:38', NULL),
(7, 4, 'Term-II', '2020-06-26', 'good dressing and turnout', 'lt cdr  umair pn', 'green slip', NULL, 1, 'Phase 1', '2020-06-12 23:39:14', '2020-06-12 23:39:14', NULL),
(8, 4, 'Term-III', '2020-06-18', 'lieing', 'LT IMRAN', '7 R\'c', NULL, 1, 'Phase 1', '2020-06-12 23:41:03', '2020-06-12 23:41:03', NULL),
(9, 4, 'Term-I', '2020-06-25', 'good dress', 'LT IMRAN', 'green slip', NULL, 1, 'Phase 1', '2020-06-13 12:12:50', '2020-06-13 12:12:50', NULL),
(10, 4, 'Term-II', '2020-06-17', 'lieing', 'lt cdr  umair pn', '7 R\'c', NULL, 1, 'Phase 1', '2020-06-13 12:13:16', '2020-06-13 12:13:16', NULL),
(11, 4, 'Term-III', '2020-06-18', 'lieing', 'LT IMRAN', '7 R\'c', NULL, 1, 'Phase 1', '2020-06-13 12:13:43', '2020-06-13 12:13:43', NULL),
(12, 4, 'Term-IV', '2020-06-23', 'lieing', 'lt cdr  umair pn', '7 R\'c', NULL, 1, 'Phase 2', '2020-06-14 00:20:33', '2020-06-14 00:20:33', NULL),
(13, 4, NULL, '2020-06-23', 'lieing', 'lt cdr  umair pn', '7 R\'c', 'pnec', 1, 'Phase 3', '2020-06-14 00:37:11', '2020-06-14 00:37:11', NULL),
(14, 12, 'Term-I', '2020-11-28', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-28 10:39:00', '2020-11-28 10:39:00', NULL),
(15, 12, 'Term-I', '2020-11-28', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-28 10:39:00', '2020-11-28 10:39:00', NULL),
(16, 12, 'Term-I', '2020-11-28', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-28 10:39:00', '2020-11-28 10:39:00', NULL),
(17, 12, 'Term-I', '2020-11-28', 'Moral Courage and Sense of Pride', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-28 10:39:00', '2020-11-28 10:39:00', NULL),
(18, 12, 'Term-II', '2020-11-29', 'General Discipline', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-29 03:48:44', '2020-11-29 03:48:44', NULL),
(19, 12, 'Term-II', '2020-11-29', 'Fitness', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-11-29 03:48:44', '2020-11-29 03:48:44', NULL),
(20, 24, 'Term-IV', '2020-12-02', 'Integrity', 'hamza', 'bad', NULL, NULL, 'Phase 2', '2020-12-02 13:01:03', '2020-12-02 13:01:03', 1),
(21, 24, 'Term-IV', '2020-12-02', 'Fitness', 'hamza', 'bad', NULL, NULL, 'Phase 2', '2020-12-02 13:01:03', '2020-12-02 13:01:03', 1),
(22, 24, 'Term-IV', '2020-12-02', 'General Discipline', 'hamza', 'bad', NULL, NULL, 'Phase 2', '2020-12-02 13:01:03', '2020-12-02 13:01:03', 1),
(23, 10, 'Term-IV', '2020-12-02', 'Integrity', 'hamza', 'bad', NULL, NULL, 'Phase 2', '2020-12-02 13:12:56', '2020-12-02 13:12:56', 1),
(24, 10, 'Term-IV', '2020-12-02', 'General Discipline', 'hamza', 'bad', NULL, NULL, 'Phase 2', '2020-12-02 13:12:56', '2020-12-02 13:12:56', 1),
(25, 10, 'Term-IV', '2020-12-03', 'Truthfulness', 'hamza', 'hamza', NULL, NULL, 'Phase 2', '2020-12-02 14:32:43', '2020-12-02 14:32:43', 1),
(26, 10, 'Term-IV', '2020-12-03', 'Truthfulness', 'hamza', 'hamza', NULL, NULL, 'Phase 2', '2020-12-02 14:32:43', '2020-12-02 14:32:43', 1),
(27, 10, 'Term-IV', '2020-12-03', 'Reliability', 'hamza', 'hamza', NULL, NULL, 'Phase 2', '2020-12-02 14:32:43', '2020-12-02 14:32:43', 1),
(28, 10, 'Term-IV', '2020-12-03', 'Truthfulness', 'hamza', 'hamza', NULL, NULL, 'Phase 2', '2020-12-02 14:54:37', '2020-12-02 14:54:37', 1),
(29, 3, 'Term-I', '2020-12-12', 'Truthfulness', 'hamza', 'hamza', NULL, 9, 'Phase 1', '2020-12-12 07:48:18', '2020-12-12 07:48:18', NULL),
(30, 3, 'Term-I', '2020-12-12', 'Physical Fitness', 'hamza', 'hamza', NULL, 9, 'Phase 1', '2020-12-12 07:48:19', '2020-12-12 07:48:19', NULL),
(31, 3, 'Term-I', '2020-12-11', 'Truthfulness', 'hamza', 'hamza', NULL, 9, 'Phase 1', '2020-12-12 07:52:48', '2020-12-12 07:52:48', NULL),
(32, 17, 'Term-I', '2020-12-14', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 04:45:56', '2020-12-14 04:45:56', NULL),
(33, 17, 'Term-I', '2020-12-14', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 04:45:56', '2020-12-14 04:45:56', NULL),
(34, 21, 'Term-I', '2020-12-14', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 08:09:37', '2020-12-14 08:09:37', NULL),
(35, 21, 'Term-I', '2020-12-14', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 08:09:37', '2020-12-14 08:09:37', NULL),
(36, 21, 'Term-I', '2020-12-14', 'Integrity', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 08:09:38', '2020-12-14 08:09:38', NULL),
(37, 21, 'Term-I', '2020-12-14', 'Truthfulness', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 09:42:43', '2020-12-14 09:42:43', NULL),
(38, 21, 'Term-I', '2020-12-14', 'Truthfulness', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 09:42:43', '2020-12-14 09:42:43', NULL),
(39, 21, 'Term-I', '2020-12-14', 'Truthfulness', 'hamza', 'bad', NULL, 3, 'Phase 1', '2020-12-14 09:42:43', '2020-12-14 09:42:43', NULL),
(40, 33, 'Term-I', '2020-12-14', 'Truthfulness', 'Lt hamza', 'punishment', NULL, 1, 'Phase 1', '2020-12-15 09:44:01', '2020-12-15 09:44:01', NULL),
(41, 33, 'Term-I', '2020-12-14', 'Integrity', 'Lt hamza', 'punishment', NULL, 1, 'Phase 1', '2020-12-15 09:44:01', '2020-12-15 09:44:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `observation_slips`
--

CREATE TABLE `observation_slips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `observation_slips`
--

INSERT INTO `observation_slips` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed8469b02524BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/observation_slips/5ed8469b02524BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', NULL, '2020-06-03 19:55:55', '2020-06-03 19:55:55', NULL),
(2, '5edb8dad21b7bWhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5edb8dad21b7bWhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 1, 3, 'Phase 1', NULL, '2020-06-06 07:35:57', '2020-06-06 07:35:57', NULL),
(3, '5edb9876d1fbfWhatsAppImage2020-06-04at08.30.31.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5edb9876d1fbfWhatsAppImage2020-06-04at08.30.31.jpeg', '62.942 kb', 1, 3, 'Phase 1', 'pnec', '2020-06-06 08:21:58', '2020-06-06 08:21:58', NULL),
(4, '5ee50a3a13cc5WhatsAppImage2020-06-04at08.30.31.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee50a3a13cc5WhatsAppImage2020-06-04at08.30.31.jpeg', '62.942 kb', 4, 1, 'Phase 1', NULL, '2020-06-13 12:17:46', '2020-06-13 12:17:46', NULL),
(5, '5ee50a5308f0cWhatsAppImage2020-06-04at08.28.29.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee50a5308f0cWhatsAppImage2020-06-04at08.28.29.jpeg', '62.128 kb', 4, 1, 'Phase 1', NULL, '2020-06-13 12:18:11', '2020-06-13 12:18:11', NULL),
(6, '5ee5b4dbd21bdWhatsAppImage2020-06-04at08.28.29.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee5b4dbd21bdWhatsAppImage2020-06-04at08.28.29.jpeg', '62.128 kb', 4, 1, 'Phase 2', NULL, '2020-06-14 00:25:47', '2020-06-14 00:25:47', NULL),
(7, '5ee5b7cc6e0bfWhatsAppImage2020-06-04at08.28.29.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee5b7cc6e0bfWhatsAppImage2020-06-04at08.28.29.jpeg', '62.128 kb', 4, 1, 'Phase 3', 'pnec', '2020-06-14 00:38:20', '2020-06-14 00:38:20', NULL),
(8, '5ee9a3dc55902observationslip.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee9a3dc55902observationslip.jpeg', '106.722 kb', 4, 1, 'Phase 1', NULL, '2020-06-17 00:02:20', '2020-06-17 00:02:20', NULL),
(9, '5ee9a3f8cd320observationslip.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee9a3f8cd320observationslip.jpeg', '106.722 kb', 4, 1, 'Phase 2', NULL, '2020-06-17 00:02:48', '2020-06-17 00:02:48', NULL),
(10, '5ee9a4164a5dbobservationslip.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee9a4164a5dbobservationslip.jpeg', '106.722 kb', 4, 1, 'Phase 3', 'pnec', '2020-06-17 00:03:18', '2020-06-17 00:03:18', NULL),
(11, '5ee9a707634b3observationslip.jpeg', 'jpeg', 'http://localhost/dossier/attachments/observation_slips/5ee9a707634b3observationslip.jpeg', '106.722 kb', 4, 1, 'Phase 3', 'pnec', '2020-06-17 00:15:51', '2020-06-17 00:15:51', NULL),
(12, '5fbd4d812696fGeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fbd4d812696fGeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 1, 3, 'Phase 1', NULL, '2020-11-24 13:14:25', '2020-11-24 13:14:25', NULL),
(13, '5fc7d7b9419d1GeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fc7d7b9419d1GeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 10, NULL, 'Phase 2', NULL, '2020-12-02 13:06:49', '2020-12-02 13:06:49', NULL),
(14, '5fc7d8d88b956GeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fc7d8d88b956GeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 10, NULL, 'Phase 2', NULL, '2020-12-02 13:11:36', '2020-12-02 13:11:36', 1),
(15, '5fcbb473c2795GeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fcbb473c2795GeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 12, 3, 'Phase 1', NULL, '2020-12-05 11:25:24', '2020-12-05 11:25:24', NULL),
(16, '5fd4bd8f8f038integrity.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fd4bd8f8f038integrity.pdf', '942.186 kb', 3, 9, 'Phase 1', NULL, '2020-12-12 07:54:39', '2020-12-12 07:54:39', NULL),
(17, '5fd7640433d95aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/5fd7640433d95aron-smith-CV-financial-manager.pdf', '91.948 kb', 21, 3, 'Phase 1', NULL, '2020-12-14 08:09:24', '2020-12-14 08:09:24', NULL),
(18, 'integrity.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/integrity.pdf', '942.186 kb', 21, 3, 'Phase 1', NULL, '2020-12-14 08:57:57', '2020-12-14 08:57:57', NULL),
(19, 'Truthfulness.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/Truthfulness.pdf', '95.643 kb', 21, 3, 'Phase 1', NULL, '2020-12-14 09:42:24', '2020-12-14 09:42:24', NULL),
(20, 'aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, '2020-12-15 09:44:10', '2020-12-15 09:44:10', NULL),
(21, 'aron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/aron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, '2020-12-15 09:44:20', '2020-12-15 09:44:20', NULL),
(22, 'Truthfulness.pdf', 'pdf', 'http://localhost/dossier/attachments/observation_slips/Truthfulness.pdf', '91.948 kb', 37, 1, 'Phase 1', NULL, '2020-12-21 11:30:03', '2020-12-21 11:30:03', NULL),
(23, 'PIAIC Student Portal.pdf', 'pdf', 'http://localhost:8080/dossier/attachments/observation_slips/PIAIC Student Portal.pdf', '805.566 kb', 37, 1, 'Phase 1', NULL, '2021-06-26 05:23:02', '2021-06-26 05:23:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `officer_qualities`
--

CREATE TABLE `officer_qualities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truthfulness_mid` int(11) NOT NULL,
  `truthfulness_terminal` int(11) DEFAULT NULL,
  `integrity_mid` int(11) NOT NULL,
  `integrity_terminal` int(11) DEFAULT NULL,
  `pride_mid` int(11) NOT NULL,
  `pride_terminal` int(11) DEFAULT NULL,
  `courage_mid` int(11) NOT NULL,
  `courage_terminal` int(11) DEFAULT NULL,
  `confidence_mid` int(11) NOT NULL,
  `confidence_terminal` int(11) DEFAULT NULL,
  `initiative_mid` int(11) NOT NULL,
  `inititative_terminal` int(11) DEFAULT NULL,
  `command_mid` int(11) NOT NULL,
  `command_terminal` int(11) DEFAULT NULL,
  `discipline_mid` int(11) NOT NULL,
  `discipline_terminal` int(11) DEFAULT NULL,
  `duty_mid` int(11) NOT NULL,
  `duty_terminal` int(11) DEFAULT NULL,
  `reliability_mid` int(11) NOT NULL,
  `reliability_terminal` int(11) DEFAULT NULL,
  `appearance_mid` int(11) NOT NULL,
  `appearance_terminal` int(11) DEFAULT NULL,
  `fitness_mid` int(11) NOT NULL,
  `fitness_terminal` int(11) DEFAULT NULL,
  `conduct_mid` int(11) NOT NULL,
  `conduct_terminal` int(11) DEFAULT NULL,
  `cs_mid` int(11) NOT NULL,
  `cs_terminal` int(11) DEFAULT NULL,
  `teamwork_mid` int(11) NOT NULL,
  `teamwork_terminal` int(11) DEFAULT NULL,
  `expression_mid` int(11) NOT NULL,
  `expression_terminal` int(11) DEFAULT NULL,
  `total_mid` int(11) NOT NULL,
  `total_terminal` int(11) DEFAULT NULL,
  `mid_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terminal_marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_marks_date` date NOT NULL,
  `terminal_marks_date` date DEFAULT NULL,
  `do_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officer_qualities`
--

INSERT INTO `officer_qualities` (`id`, `p_id`, `term`, `truthfulness_mid`, `truthfulness_terminal`, `integrity_mid`, `integrity_terminal`, `pride_mid`, `pride_terminal`, `courage_mid`, `courage_terminal`, `confidence_mid`, `confidence_terminal`, `initiative_mid`, `inititative_terminal`, `command_mid`, `command_terminal`, `discipline_mid`, `discipline_terminal`, `duty_mid`, `duty_terminal`, `reliability_mid`, `reliability_terminal`, `appearance_mid`, `appearance_terminal`, `fitness_mid`, `fitness_terminal`, `conduct_mid`, `conduct_terminal`, `cs_mid`, `cs_terminal`, `teamwork_mid`, `teamwork_terminal`, `expression_mid`, `expression_terminal`, `total_mid`, `total_terminal`, `mid_marks`, `terminal_marks`, `mid_marks_date`, `terminal_marks_date`, `do_name`, `form_type`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Term-I', 19, 18, 18, 17, 10, 10, 7, 5, 10, 6, 5, 8, 9, 9, 10, 7, 4, 7, 8, 5, 9, 9, 6, 8, 9, 8, 5, 5, 5, 8, 15, 15, 149, 145, '74.5%', '72.5%', '2018-11-29', '2015-04-03', 'lt cdr hamza pn', 'S 1-27', 3, 'Phase 1', NULL, '2020-06-03 20:12:32', '2020-06-03 20:12:32'),
(2, 1, 'Term-II', 13, 12, 14, 18, 10, 10, 5, 9, 11, 12, 10, 8, 10, 10, 10, 4, 5, 6, 5, 8, 9, 8, 8, 7, 5, 8, 10, 7, 9, 7, 8, 9, 142, 143, '71%', '71.5%', '2017-11-30', '2017-10-29', 'lt cdr hamza pn', 'S 1-28', 3, 'Phase 1', NULL, '2020-06-03 20:15:06', '2020-06-03 20:15:06'),
(3, 1, 'Term-III', 11, 8, 14, 14, 10, 10, 8, 13, 13, 11, 10, 9, 9, 7, 5, 8, 7, 8, 5, 7, 9, 10, 9, 8, 6, 8, 9, 6, 8, 6, 9, 15, 142, 148, '71%', '74%', '2017-10-18', '2017-11-30', 'lt cdr hamza pn', 'S 1-29', 3, 'Phase 1', NULL, '2020-06-03 20:17:31', '2020-06-03 20:17:31'),
(4, 1, 'Term-IV', 17, 13, 17, 19, 10, 10, 14, 12, 11, 14, 10, 10, 7, 0, 7, 7, 4, 5, 7, 7, 6, 5, 3, 5, 6, 8, 8, 10, 4, 6, 8, 12, 139, 143, '69.5%', '71.5%', '2017-03-28', '2016-09-26', 'lt cdr hamza pn', 'S 1-27', 3, 'Phase 2', NULL, '2020-06-03 20:44:04', '2020-06-03 20:44:04'),
(5, 1, 'Term-IV', 18, 10, 13, 16, 9, 10, 10, 12, 11, 11, 10, 9, 8, 9, 7, 8, 9, 8, 9, 10, 9, 10, 10, 9, 10, 10, 8, 7, 9, 10, 11, 13, 161, 162, '80.5%', '81%', '2017-10-29', '2017-08-28', 'lt cdr hamza pn', 'S 1-27', 3, 'Phase 2', NULL, '2020-06-06 07:56:44', '2020-06-06 07:56:44'),
(6, 1, 'Semseter-III', 16, 17, 16, 15, 10, 4, 3, 8, 9, 11, 7, 3, 7, 6, 4, 6, 9, 10, 9, 10, 8, 10, 9, 6, 4, 7, 10, 8, 5, 9, 8, 15, 134, 145, '67%', '72.5%', '2018-06-30', '2015-11-22', 'lt cdr hamza pn', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 08:44:39', '2020-06-06 08:44:39'),
(7, 1, 'Semseter-IV', 8, 15, 11, 13, 10, 10, 8, 8, 10, 9, 10, 7, 6, 7, 7, 7, 8, 9, 8, 9, 8, 9, 9, 9, 8, 7, 9, 9, 7, 10, 9, 8, 136, 146, '68%', '73%', '2018-07-03', '2019-03-07', 'farhat ullah', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 08:47:46', '2020-06-06 08:47:46'),
(8, 1, 'Semseter-V', 15, 15, 15, 11, 7, 10, 9, 11, 10, 8, 9, 9, 10, 3, 10, 7, 10, 7, 5, 10, 8, 6, 8, 7, 7, 10, 8, 10, 10, 6, 5, 8, 146, 138, '73%', '69%', '2015-09-04', '2019-11-29', 'farhat ullah', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 08:50:47', '2020-06-06 08:50:47'),
(9, 1, 'Semseter-VI', 11, 10, 9, 13, 10, 10, 11, 10, 12, 12, 10, 10, 5, 6, 10, 7, 9, 9, 6, 10, 8, 10, 5, 7, 8, 8, 9, 9, 4, 7, 9, 12, 136, 150, '68%', '75%', '2017-05-03', '2018-10-30', 'farhat ullah', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 08:54:35', '2020-06-06 08:54:35'),
(10, 1, 'Semseter-VII', 10, 8, 16, 11, 8, 10, 11, 13, 10, 12, 10, 7, 10, 10, 10, 9, 7, 7, 6, 7, 6, 6, 5, 5, 7, 8, 7, 6, 6, 10, 8, 15, 137, 144, '68.5%', '72%', '2018-10-05', '2017-08-29', 'Kashif', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 08:58:07', '2020-06-06 08:58:07'),
(11, 1, 'Semseter-VIII', 13, 12, 17, 18, 10, 9, 11, 9, 13, 11, 10, 10, 10, 9, 9, 6, 8, 6, 9, 10, 9, 4, 10, 8, 10, 6, 9, 7, 8, 10, 7, 15, 163, 150, '81.5%', '75%', '2019-07-03', '2020-09-02', 'asad', 'S 1-27', 3, 'Phase 3', 'pnec', '2020-06-06 09:00:23', '2020-06-06 09:00:23'),
(12, 4, 'Term-I', 14, 13, 12, 13, 8, 7, 7, 7, 7, 7, 7, 7, 7, 7, 9, 7, 7, 7, 7, 6, 7, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 132, 129, '66%', '64.5%', '2020-06-22', '2020-07-02', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 1', NULL, '2020-06-13 12:31:51', '2020-06-13 12:31:51'),
(13, 4, 'Term-II', 7, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 127, 128, '63.5%', '64%', '2020-06-22', '2020-06-17', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 1', NULL, '2020-06-13 12:32:32', '2020-06-13 12:32:32'),
(14, 4, 'Term-III', 7, 7, 7, 7, 7, 7, 7, 7, 8, 9, 9, 9, 9, 9, 9, 9, 8, 8, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 134, 135, '67%', '67.5%', '2020-06-16', '2020-06-10', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 1', NULL, '2020-06-13 12:33:21', '2020-06-13 12:33:21'),
(15, 4, 'Term-III', 8, 8, 7, 7, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 141, 141, '70.5%', '70.5%', '2020-06-24', '2020-06-11', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 1', NULL, '2020-06-13 12:34:43', '2020-06-13 12:34:43'),
(16, 4, 'Term-IV', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 8, 8, 143, 143, '71.5%', '71.5%', '2020-06-24', '2020-06-24', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 2', NULL, '2020-06-14 00:29:38', '2020-06-14 00:29:38'),
(17, 4, 'Semseter-III', 9, 9, 9, 9, 9, 9, 9, 8, 8, 8, 8, 8, 8, 8, 8, 9, 9, 9, 9, 8, 8, 9, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 134, 134, '67%', '67%', '2020-06-30', '2020-06-24', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:45:44', '2020-06-14 00:45:44'),
(18, 4, 'Semseter-IV', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 112, 112, '56%', '56%', '2020-06-23', '2020-06-25', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:47:08', '2020-06-14 00:47:08'),
(19, 4, 'Semseter-V', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-06-24', '2020-06-23', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:48:38', '2020-06-14 00:48:38'),
(20, 4, 'Semseter-VI', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-06-15', '2020-06-18', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:49:49', '2020-06-14 00:49:49'),
(21, 4, 'Semseter-VI', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 8, 9, 9, 9, 9, 9, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 139, 139, '69%', '69.5%', '2020-06-23', '2020-06-24', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:51:21', '2020-06-14 00:51:21'),
(22, 4, 'Semseter-VII', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 126, 124, '63%', '62%', '2020-06-30', '2020-06-25', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:52:24', '2020-06-14 00:52:24'),
(23, 4, 'Semseter-VIII', 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 111, 112, '55.5%', '56%', '2020-06-02', '2020-06-02', 'lt cdr hamza pn', 'S 1-27', 1, 'Phase 3', 'pnec', '2020-06-14 00:53:36', '2020-06-14 00:53:36'),
(24, 1, 'Term-I', 19, 18, 18, 17, 10, 10, 7, 5, 10, 6, 5, 8, 9, 9, 10, 7, 4, 7, 8, 5, 2, 9, 6, 8, 9, 8, 5, 3, 5, 8, 15, 15, 142, 143, '71%', '71.5%', '2020-11-04', '2020-11-03', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 02:26:50', '2020-11-28 02:26:50'),
(25, 1, 'Term-II', 13, 12, 14, 18, 10, 10, 5, 9, 11, 12, 10, 8, 10, 10, 10, 4, 5, 6, 5, 8, 2, 3, 8, 7, 5, 8, 10, 7, 9, 7, 8, 9, 135, 138, '67.5%', '69%', '2020-11-12', '2020-11-24', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:36:23', '2020-11-28 08:36:23'),
(26, 1, NULL, 19, 18, 18, 17, 10, 10, 7, 5, 10, 6, 5, 8, 9, 9, 10, 7, 4, 7, 8, 5, 1, 2, 6, 8, 9, 8, 5, 3, 5, 8, 15, 11, 141, 132, '70.5%', '66%', '2020-11-28', '2020-11-28', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:37:41', '2020-11-28 08:37:41'),
(27, 3, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 16, 16, '8%', '8%', '2020-11-28', '2020-11-26', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:38:33', '2020-11-28 08:38:33'),
(28, 3, NULL, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 96, 95, '48%', '47.5%', '2020-11-28', '2020-11-28', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:47:12', '2020-11-28 08:47:12'),
(29, 3, 'Term-I', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 9, 112, 114, '56%', '57%', '2020-11-28', '2020-11-28', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:51:23', '2020-11-28 08:51:23'),
(30, 3, 'Term-I', 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 9, 112, 114, '56%', '57%', '2020-11-28', '2020-11-28', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:51:42', '2020-11-28 08:51:42'),
(31, 12, 'Term-I', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 80, 80, '40%', '40%', '2020-11-28', '2020-11-28', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-28 08:56:22', '2020-11-28 08:56:22'),
(32, 12, 'Term-II', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-11-25', '2020-11-26', 'hamazadd', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-29 03:47:26', '2020-11-29 03:47:26'),
(33, 21, 'Term-I', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-11-29', '2020-11-24', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-29 11:08:08', '2020-11-29 11:08:08'),
(34, 21, 'Term-I', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-11-29', '2020-11-24', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-29 11:08:39', '2020-11-29 11:08:39'),
(35, 21, 'Term-II', 8, 8, 8, 8, 8, 7, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 127, '64%', '63.5%', '2020-11-29', '2020-11-29', 'hamaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-11-29 11:10:09', '2020-11-29 11:10:09'),
(36, 12, 'Term-III', 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 6, NULL, 126, NULL, '63%', NULL, '2020-12-01', '2020-12-01', 'Murtaza', 'S 1-27', 3, 'Phase 1', NULL, '2020-12-02 01:25:48', '2020-12-02 01:25:48'),
(37, 14, 'Term-I', 4, NULL, 4, NULL, 3, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 63, NULL, '31.5%', NULL, '2020-12-05', '2020-12-05', 'er', 'S 1-27', 3, 'Phase 1', NULL, '2020-12-05 11:22:51', '2020-12-05 11:22:51'),
(38, 3, 'Term-II', 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 4, NULL, 64, NULL, '32%', NULL, '2020-12-11', '2020-12-11', 'Murtaza', 'S 1-27', 9, 'Phase 1', NULL, '2020-12-12 07:50:20', '2020-12-12 07:50:20'),
(39, 33, 'Term-I', 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 128, NULL, '64%', NULL, '2020-12-14', NULL, 'Lt Hamaza', 'S 1-27', 1, 'Phase 1', NULL, '2020-12-15 09:48:59', '2020-12-15 09:48:59'),
(40, 33, 'Term-I', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 128, 128, '64%', '64%', '2020-12-14', '2020-12-14', 'Lt Hamaza', 'S 1-27', 1, 'Phase 1', NULL, '2020-12-15 10:09:29', '2020-12-15 10:09:29'),
(41, 37, 'Term-I', 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 8, NULL, 7, NULL, 127, NULL, '63.5%', NULL, '2020-12-21', NULL, 'Lt Hamaza', 'S 1-27', 1, 'Phase 1', NULL, '2020-12-21 11:31:32', '2020-12-21 11:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `overall_seniority_records`
--

CREATE TABLE `overall_seniority_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `phase1_seniority_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase1_seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase2_seniority_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase2_seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_seniority_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_seniority_professional_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_seniority_professional_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_gained_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overall_seniority_records`
--

INSERT INTO `overall_seniority_records` (`id`, `p_id`, `phase1_seniority_gained`, `phase1_seniority_lost`, `phase2_seniority_gained`, `phase2_seniority_lost`, `phase3_seniority_gained`, `phase3_seniority_lost`, `phase3_seniority_professional_gained`, `phase3_seniority_professional_lost`, `total_gained`, `total_lost`, `net_gained_lost`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '30', '0', '15', '0', '2', '2', '2', '0', '49', '2', '47', NULL, NULL, 3, '2020-06-03 20:25:11', '2020-12-13 14:08:25', NULL),
(2, 4, '30', '0', '10', '0', '45', '0', NULL, NULL, '85', '0', '85', NULL, NULL, 1, '2020-06-14 00:17:15', '2020-06-14 01:02:55', NULL),
(3, 10, NULL, NULL, '44', '0', NULL, NULL, NULL, NULL, '44', '0', '44', NULL, NULL, NULL, '2020-12-02 13:35:34', '2020-12-02 13:35:34', 1),
(4, 2, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-13 13:53:17', '2020-12-13 14:07:56', NULL),
(5, 7, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-13 13:54:25', '2020-12-13 13:54:25', NULL),
(6, 25, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-14 12:18:41', '2020-12-14 12:18:41', NULL),
(7, 26, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-14 12:25:29', '2020-12-14 12:34:12', NULL),
(8, 28, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-14 12:37:05', '2020-12-14 12:43:14', NULL),
(9, 29, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', '0', NULL, NULL, 3, '2020-12-14 12:44:10', '2020-12-14 12:45:26', NULL),
(10, 33, '45', '10', NULL, NULL, NULL, NULL, NULL, NULL, '45', '10', '35', NULL, NULL, 1, '2020-12-15 09:52:23', '2020-12-15 09:52:23', NULL),
(11, 37, '98', '89', NULL, NULL, NULL, NULL, NULL, NULL, '98', '89', '9', NULL, NULL, 1, '2021-06-26 05:24:24', '2021-06-26 05:24:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_datas`
--

CREATE TABLE `personal_datas` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_army` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_army_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_army_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_of_kin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siblings` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `near_relatives` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identification_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navy_joining_date` date NOT NULL,
  `entry_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karachi_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matric_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_subjects` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediate_college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediate_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diploma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_datas`
--

INSERT INTO `personal_datas` (`id`, `p_id`, `p_no`, `course`, `religion`, `emergency_contact`, `telephone_no`, `ex_army`, `ex_army_from`, `ex_army_to`, `father_name`, `father_occupation`, `next_of_kin`, `siblings`, `near_relatives`, `identification_marks`, `height`, `weight`, `navy_joining_date`, `entry_mode`, `service_id`, `nic`, `blood_group`, `address`, `karachi_address`, `matric_school`, `matric_division`, `matric_subjects`, `intermediate_college`, `intermediate_division`, `diploma`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '9686', '16A', 'islam', '24456', '23456', 'nil', 'nil', 'nil', 'khan', 'teacher', 'father       skardu', 'a\r\na\r\ns\r\nd', 'nil', 'nil', '173', '65', '2020-01-31', 'regular', '12455', '3234 34234 4322', 'a+', 'skardu', 'nil', 'govt school', '1st divison', 'maths physics chemistry  english', 'govt college tanduu allahyar', 'a', 'nill', 'Phase 1', 3, '2020-06-03 19:43:40', '2020-06-03 19:43:40', NULL),
(2, 1, '9750', '16A', 'islam', '24456', 'nil', 'nil', 'nil', 'nil', 'khan', 'teacher', 'khan   skardu', 'shoaib', 'nil', 'nil', '173', '65', '2016-12-01', 'regular', '3543-7654454-7', '1234343 4425 4', 'a+', 'dalazak road peshawar', 'nil', 'junior school', 'a', 'maths physics chemistry  english', 'govt college tanduu allahyar', 'a', 'nill', 'Phase 2', 3, '2020-06-06 07:32:44', '2020-06-06 07:32:44', NULL),
(3, 4, '16134', '16A', 'islam', '24456', '03408846142', 'nil', 'nil', 'nil', 'khan', 'teacher', 'dalazak road peshawar', 'ali\r\nahmed', 'nil', 'nil', '173cm', '65kg', '2020-06-27', 'regular', 'nil', '45237-98766554-1', 'A+VE', 'dalazak road peshawar', 'NIL', 'aps peshawar', 'A', 'science', 'aps peshawar', 'A', 'NIL', 'Phase 1', 1, '2020-06-12 23:25:29', '2020-06-12 23:25:29', NULL),
(4, 4, '16134', '16A', 'islam', '24456', '03408846142', 'nil', 'nil', 'nil', 'khan', 'teacher', 'dalazak road peshawar', 'ali\r\nsara', 'nil', 'nil', '173cm', '65kg', '2020-06-23', 'regular', 'nil', '12343-12334455-7', 'A+ve', 'dalazak road peshawar', 'nil', 'aps peshawar', 'A', 'science', 'govt college tanduu allahyar', 'A', 'nill', 'Phase 2', 1, '2020-06-14 00:20:07', '2020-06-14 00:20:07', NULL),
(5, 10, '3333', '333', 'zcvz', '5555', '454', 'fdg', '03/03/2010', '03/03/2010', 'asdf', 'asfd', 'asd', 'asdf', 'asf', 'adfa', '33', '33', '2020-12-02', '33', '3434', '3434', 'a', 'asdf', 'asdf', '3fdsf', 'a', 'b', 'c', 'de', 'e', 'Phase 2', NULL, '2020-12-02 12:58:03', '2020-12-02 12:58:03', 1),
(6, 3, '44', 'e', 'e', '3', '3', 'sdf', '12/12/2020', '12/12/2020', 'e', 'e', 'e', 'e', 'e', 'e', '444', '4', '2020-12-12', '4', '555', '555', 'rtrtrt', 'rtrt', 'rtrt', 'r', 'a', 'r', 'r', 'r', 'r', 'Phase 1', 9, '2020-12-12 07:33:54', '2020-12-12 07:33:54', NULL),
(7, 33, '34561', 'course', 'islam', '88888', '88888', 'nil', 'nil', 'nil', 'ali', 'farmar', 'mushtaq', 'ali\r\naslam', 'nil', 'ali', '5.7 ft', '65 kg', '2020-12-14', 'Regular', NULL, '4343343434343', 'A+', 'gulshan karachi', 'gulshan karachi', 'APS', 'A', 'Science', 'APS', 'A', 'nil', 'Phase 1', 1, '2020-12-15 09:39:24', '2020-12-15 09:39:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data_attachments`
--

CREATE TABLE `personal_data_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `phase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_data_attachments`
--

INSERT INTO `personal_data_attachments` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed843bc23261uniformpic2019-10-21at5.21.46PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5ed843bc23261uniformpic2019-10-21at5.21.46PM.jpeg', '66.802 kb', 1, 'Phase 1', '2020-06-03 19:43:40', '2020-06-03 19:43:40', NULL),
(2, '5edb8cec85ee0uniformpic2019-10-21at5.21.46PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5edb8cec85ee0uniformpic2019-10-21at5.21.46PM.jpeg', '66.802 kb', 1, 'Phase 2', '2020-06-06 07:32:44', '2020-06-06 07:32:44', NULL),
(3, '5ee45539aadb7uniformpic2019-10-21at5.21.46PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5ee45539aadb7uniformpic2019-10-21at5.21.46PM.jpeg', '66.802 kb', 4, 'Phase 1', '2020-06-12 23:25:29', '2020-06-12 23:25:29', NULL),
(4, '5ee5b387683d7uniformpic2019-10-21at5.21.46PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5ee5b387683d7uniformpic2019-10-21at5.21.46PM.jpeg', '66.802 kb', 4, 'Phase 2', '2020-06-14 00:20:07', '2020-06-14 00:20:07', NULL),
(5, '5fd4b8b299fd5afsf.jpg', 'jpg', 'http://localhost/dossier/attachments/officer_pics/5fd4b8b299fd5afsf.jpg', '214.289 kb', 3, 'Phase 1', '2020-12-12 07:33:54', '2020-12-12 07:33:54', NULL),
(6, '5fd4bb7351f86error404.PNG', 'PNG', 'http://localhost/dossier/attachments/officer_pics/5fd4bb7351f86error404.PNG', '16.214 kb', 3, 'Phase 1', '2020-12-12 07:45:39', '2020-12-12 07:45:39', NULL),
(7, '5fd8ca40bdc73WhatsAppImage2020-12-14at2.59.29PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5fd8ca40bdc73WhatsAppImage2020-12-14at2.59.29PM.jpeg', '43.792 kb', 33, 'Phase 1', '2020-12-15 09:37:53', '2020-12-15 09:37:53', NULL),
(8, '5fd8ca9ca830eWhatsAppImage2020-12-14at2.59.29PM.jpeg', 'jpeg', 'http://localhost/dossier/attachments/officer_pics/5fd8ca9ca830eWhatsAppImage2020-12-14at2.59.29PM.jpeg', '43.792 kb', 33, 'Phase 1', '2020-12-15 09:39:24', '2020-12-15 09:39:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `physical_effeciency_records`
--

CREATE TABLE `physical_effeciency_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mile_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mile_time_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rope_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rope_class_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beam_work` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beam_work_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_ups` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `push_ups_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sprint_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sprint_time_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pet_score_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pet_score_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mini_cross_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_cross_country_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cross_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cross_country_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assault_course_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assault_course_time_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `oc_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physical_effeciency_records`
--

INSERT INTO `physical_effeciency_records` (`id`, `p_id`, `term`, `mile_time`, `mile_time_status`, `rope_class`, `rope_class_status`, `beam_work`, `beam_work_status`, `push_ups`, `push_ups_status`, `sprint_time`, `sprint_time_status`, `pet_score_date`, `pet_score_status`, `mini_cross_country`, `mini_cross_country_status`, `cross_country`, `cross_country_status`, `assault_course_time`, `assault_course_time_status`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`, `oc_no`) VALUES
(1, 1, 'Term-I', '6.18', 'Qualified', 'alpha', 'Qualified', '6', 'Qualified', '40', 'Qualified', '17', 'Qualified', '80', 'Qualified', '119', 'Qualified', '43', 'Qualified', '15 min', 'Qualified', 3, 'Phase 1', '2020-06-03 20:00:05', '2020-06-03 20:00:05', NULL, NULL),
(2, 1, 'Term-II', '6.03', 'Qualified', 'alpha', 'Qualified', '6', 'Qualified', '40', 'Qualified', '11', 'Qualified', '80', 'Qualified', '220', 'Qualified', '122', 'Qualified', '16', 'Qualified', 3, 'Phase 1', '2020-06-03 20:01:06', '2020-06-03 20:01:06', NULL, NULL),
(3, 1, 'Term-III', '6.03', 'Qualified', 'alpha', 'Qualified', '6', 'Qualified', '40', 'Qualified', '15', 'Qualified', '91', 'Qualified', '123', 'Qualified', '21', 'Qualified', '9 min', 'Qualified', 3, 'Phase 1', '2020-06-03 20:01:48', '2020-06-03 20:01:48', NULL, NULL),
(4, 4, 'Term-I', '6.03', 'Qualified', 'A', 'Qualified', '6', 'Disqualified', '40', 'Qualified', '11', 'Qualified', '80', 'Qualified', '12 card', 'Qualified', '13 CARD', 'Qualified', '12MINTS', 'Qualified', 1, 'Phase 1', '2020-06-13 12:22:12', '2020-06-13 12:22:12', NULL, NULL),
(5, 4, 'Term-II', '6.18', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '40', 'Qualified', '15', 'Qualified', '89', 'Qualified', '12 card', 'Qualified', '13 CARD', 'Qualified', '15 min', 'Qualified', 1, 'Phase 1', '2020-06-13 12:22:47', '2020-06-13 12:22:47', NULL, NULL),
(6, 4, 'Term-III', '6.03', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '40', 'Qualified', '15', 'Qualified', '91', 'Qualified', '12 card', 'Qualified', '13 CARD', 'Qualified', '16', 'Qualified', 1, 'Phase 1', '2020-06-13 12:23:16', '2020-06-13 12:23:16', NULL, NULL),
(7, 1, 'Term-II', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', 2, 'Phase 1', '2020-11-13 07:50:38', '2020-11-13 07:50:38', NULL, NULL),
(8, NULL, 'Term-II', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-03 12:31:34', '2020-12-03 12:31:34', NULL, 11),
(9, NULL, 'Term-III', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-03 12:33:43', '2020-12-03 12:33:43', NULL, 11),
(10, NULL, 'Term-III', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-12 08:18:05', '2020-12-12 08:18:05', NULL, 454),
(11, NULL, 'Term-III', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-13 07:05:00', '2020-12-13 07:05:00', NULL, 454),
(12, NULL, 'Term-III', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-13 07:05:00', '2020-12-13 07:05:00', NULL, 454),
(13, NULL, 'Term-III', '6.09', 'Qualified', 'A', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', '6', 'Qualified', 'card', 'Qualified', '17', 'Qualified', NULL, 'Phase 1', '2020-12-15 10:06:00', '2020-12-15 10:06:00', NULL, 12349);

-- --------------------------------------------------------

--
-- Table structure for table `pn_form1s`
--

CREATE TABLE `pn_form1s` (
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `oc_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issb_batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit_id` bigint(20) DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `term` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed` bit(1) NOT NULL DEFAULT b'0',
  `isterminated` bit(1) NOT NULL DEFAULT b'0',
  `relegate` bit(1) NOT NULL DEFAULT b'0',
  `do_nhq` int(11) DEFAULT NULL,
  `nhq_joto` int(11) DEFAULT NULL,
  `joto_nhq` int(11) DEFAULT NULL,
  `do_joto` int(11) DEFAULT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahadur` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relegated_p_id` int(11) DEFAULT NULL,
  `divison_name` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pn_form1s`
--

INSERT INTO `pn_form1s` (`p_id`, `oc_no`, `p_no`, `name`, `class`, `issb_batch`, `do_id`, `created_at`, `updated_at`, `unit_id`, `joto_id`, `term`, `phase`, `completed`, `isterminated`, `relegate`, `do_nhq`, `nhq_joto`, `joto_nhq`, `do_joto`, `category`, `bahadur`, `relegated_p_id`, `divison_name`) VALUES
(1, '16135', '96862', 'shahzad ali', '2016A', 'NKIWs', 3, '2020-06-03 19:37:59', '2020-12-13 14:08:25', 3, 5, 'Term I', 'Phase 1', b'0', b'0', b'0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '12349', '34561', 'Asif', 'ABC', '2019A', 3, '2020-12-15 09:33:13', '2020-12-15 11:33:47', 2, 1, 'Term III', 'Phase 3', b'1', b'0', b'0', 2, 4, 2, NULL, 'PN-Cadet', '2', NULL, NULL),
(34, '11111114', '344', 'sdad', 'asdf', 'asdf', 1, '2020-12-15 10:39:39', '2020-12-15 10:40:01', 1, NULL, 'Term I', 'Phase 1', b'0', b'0', b'1', NULL, NULL, NULL, NULL, 'PN-Cadet', NULL, NULL, NULL),
(35, '11111114', '344', 'sdad', 'asdf', 'asdf', 1, '2020-12-15 10:40:01', '2020-12-15 10:40:01', 1, NULL, 'Term I', 'Phase 1', b'0', b'0', b'0', NULL, NULL, NULL, NULL, 'PN-Cadet', NULL, 34, NULL),
(36, '222222222', '3333333', 'aaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaa', 1, '2020-12-15 10:40:31', '2020-12-15 10:41:01', 1, NULL, 'Term I', 'Phase 1', b'1', b'1', b'0', NULL, NULL, NULL, NULL, 'PN-Cadet', NULL, NULL, NULL),
(37, '18134', NULL, 'Asif', '2016A', '2018B', 1, '2020-12-21 11:29:21', '2020-12-21 11:31:33', 1, NULL, 'Term II', 'Phase 1', b'0', b'0', b'0', NULL, NULL, NULL, NULL, 'PN-Cadet', NULL, NULL, NULL),
(38, '12', NULL, 'sc', 'dc', 'e4', 1, '2020-12-23 07:18:25', '2020-12-23 07:18:25', 1, NULL, 'Term I', 'Phase 1', b'0', b'0', b'0', NULL, NULL, NULL, NULL, 'PN-Cadet', NULL, NULL, 'hmaaza');

-- --------------------------------------------------------

--
-- Table structure for table `progress_charts`
--

CREATE TABLE `progress_charts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) NOT NULL,
  `term1_academics` int(11) DEFAULT NULL,
  `term1_olqs` int(11) DEFAULT NULL,
  `term1_aggregate` int(11) DEFAULT NULL,
  `term2_academics` int(11) DEFAULT NULL,
  `term2_olqs` int(11) DEFAULT NULL,
  `term2_aggregate` int(11) DEFAULT NULL,
  `term3_academics` int(11) DEFAULT NULL,
  `term3_olqs` int(11) DEFAULT NULL,
  `term3_aggregate` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progress_charts`
--

INSERT INTO `progress_charts` (`id`, `p_id`, `do_id`, `term1_academics`, `term1_olqs`, `term1_aggregate`, `term2_academics`, `term2_olqs`, `term2_aggregate`, `term3_academics`, `term3_olqs`, `term3_aggregate`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 3, 67, 81, 74, 64, 84, 77, 75, 80, 76, 'Phase 1', '2020-06-03 20:21:35', '2020-06-03 20:21:35', NULL),
(2, 4, 1, 75, 70, 72, 85, 80, 83, 90, 85, 87, 'Phase 1', '2020-06-14 00:15:16', '2020-06-14 00:15:16', NULL),
(3, 33, 1, 70, 65, 67, 80, 76, 78, 80, 70, 75, 'Phase 1', '2020-12-15 09:50:29', '2020-12-15 09:50:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `progress_chart_phase3s`
--

CREATE TABLE `progress_chart_phase3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term5_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term6_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term6_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term6_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term7_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term7_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term7_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term8_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term8_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term8_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term9_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term9_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term9_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term10_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term10_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term10_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term11_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term11_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `term11_cgpa_olqs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `do_id` int(11) NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase3_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progress_chart_phase3s`
--

INSERT INTO `progress_chart_phase3s` (`id`, `p_id`, `term5_cgpa`, `term5_olqs`, `term5_cgpa_olqs`, `term6_cgpa`, `term6_olqs`, `term6_cgpa_olqs`, `term7_cgpa`, `term7_olqs`, `term7_cgpa_olqs`, `term8_cgpa`, `term8_olqs`, `term8_cgpa_olqs`, `term9_cgpa`, `term9_olqs`, `term9_cgpa_olqs`, `term10_cgpa`, `term10_olqs`, `term10_cgpa_olqs`, `term11_cgpa`, `term11_olqs`, `term11_cgpa_olqs`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '65', '75', '73', '61', '80', '63', '69', '72', '70', '75', '70', '69', '87', '87', '87', '0', '0', '0', '0', '0', '0', 3, 'Phase 3', 'pnec', '2020-06-06 09:08:47', '2020-06-06 09:08:47', NULL),
(2, 4, '74', '70', '72', '76', '74', '75', '76', '73', '75', '80', '75', '77', '80', '74', '76', '89', '85', '83', '90', '85', '87', 1, 'Phase 3', 'pnec', '2020-06-14 01:00:26', '2020-06-14 01:00:26', NULL),
(3, 34, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 1, 'Phase 3', 'pnec', '2020-12-18 09:29:48', '2020-12-18 09:29:48', NULL),
(4, 35, '2', '2', '3', '3', '2', '2', '3', '3', '3', '4', '4', '4', '4', '4', '3.5', '3', '3', '3', '2.5', '2.5', '2.5', 1, 'Phase 3', 'pnec', '2020-12-18 09:37:58', '2020-12-18 09:37:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `psychologist_reports`
--

CREATE TABLE `psychologist_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `psychologist_reports`
--

INSERT INTO `psychologist_reports` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed845b2186ddBIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/psychologist_report/5ed845b2186ddBIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', '2020-06-03 19:52:02', '2020-06-03 19:52:02', NULL),
(2, '5ee457cd22cdaWhatsAppImage2019-06-15at8.16.25PM-Copy.jpeg', 'jpeg', 'http://localhost/dossier/attachments/psychologist_report/5ee457cd22cdaWhatsAppImage2019-06-15at8.16.25PM-Copy.jpeg', '153.611 kb', 4, 1, 'Phase 1', '2020-06-12 23:36:29', '2020-06-12 23:36:29', NULL),
(3, '5faaac1919f3cMedical-CV-template.pdf', 'pdf', 'http://localhost/dossier/attachments/psychologist_report/5faaac1919f3cMedical-CV-template.pdf', '211.885 kb', 1, 3, 'Phase 1', '2020-11-10 10:04:57', '2020-11-10 10:04:57', NULL),
(4, '5faaae0113be1Income-TaxEmployeesCo-operativeHousingSociety-GoogleMaps.pdf', 'pdf', 'http://localhost/dossier/attachments/psychologist_report/5faaae0113be1Income-TaxEmployeesCo-operativeHousingSociety-GoogleMaps.pdf', '1519.695 kb', 1, 3, 'Phase 1', '2020-11-10 10:13:05', '2020-11-10 10:13:05', NULL),
(5, '5fd4babdcd58cGeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/psychologist_report/5fd4babdcd58cGeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 3, 9, 'Phase 1', '2020-12-12 07:42:38', '2020-12-12 07:42:38', NULL),
(6, '5fd7343da00cdintegrity.pdf', 'pdf', 'http://localhost/dossier/attachments/psychologist_report/5fd7343da00cdintegrity.pdf', '942.186 kb', 17, 3, 'Phase 1', '2020-12-14 04:45:34', '2020-12-14 04:45:34', NULL),
(7, '5fd8cb807c4cfaron-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/psychologist_report/5fd8cb807c4cfaron-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', '2020-12-15 09:43:12', '2020-12-15 09:43:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `punishment_records`
--

CREATE TABLE `punishment_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `offence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punishment_awarded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awarded_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `oc_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `punishment_records`
--

INSERT INTO `punishment_records` (`id`, `p_id`, `term`, `date`, `offence`, `punishment_awarded`, `awarded_by`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`, `oc_no`) VALUES
(1, 1, 'Term-I', '2017-12-31', 'absent from classes', '7*RC', 'lt cdr kazim pn', 3, 'Phase 1', NULL, '2020-06-03 19:54:34', '2020-06-03 19:54:34', NULL, NULL),
(2, 1, 'Term-II', '2018-11-22', 'absent from classes', '7 DAYS RC', 'lt cdr kazim pn', 3, 'Phase 1', NULL, '2020-06-03 19:55:00', '2020-06-03 19:55:00', NULL, NULL),
(3, 1, 'Term-III', '2019-12-31', 'absent from classes', 'extra duty', 'lt cdr kazim pn', 3, 'Phase 1', NULL, '2020-06-03 19:55:26', '2020-06-03 19:55:26', NULL, NULL),
(4, 1, 'Term-IV', '2019-11-29', 'absent in both watches', 'red slip', 'exo', 3, 'Phase 2', NULL, '2020-06-06 07:35:12', '2020-06-06 07:35:12', NULL, NULL),
(5, 1, NULL, '2019-10-29', 'found absent from duty station', '7 DAYS RC', 'lt cdr kazim pn', 3, 'Phase 3', 'pnec', '2020-06-06 08:21:15', '2020-06-06 08:21:15', NULL, NULL),
(6, 4, 'Term-I', '2020-06-26', 'absent from classes', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:41:35', '2020-06-12 23:41:35', NULL, NULL),
(7, 4, 'Term-II', '2020-06-23', 'LIEING', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:41:55', '2020-06-12 23:41:55', NULL, NULL),
(8, 4, 'Term-III', '2020-06-24', 'absent from classes', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:42:16', '2020-06-12 23:42:16', NULL, NULL),
(9, 4, 'Term-I', '2020-06-03', 'LIEING', '7 DAYS RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:52:43', '2020-06-12 23:52:43', NULL, NULL),
(10, 4, 'Term-II', '2020-07-10', 'absent from classes', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:53:08', '2020-06-12 23:53:08', NULL, NULL),
(11, 4, 'Term-III', '2020-06-25', 'absent from classes', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-12 23:53:29', '2020-06-12 23:53:29', NULL, NULL),
(12, 4, 'Term-I', '2020-07-01', 'LIEING', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-13 12:14:09', '2020-06-13 12:14:09', NULL, NULL),
(13, 4, 'Term-II', '2020-06-19', 'absent from classes', '7*RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-13 12:14:27', '2020-06-13 12:14:27', NULL, NULL),
(14, 4, 'Term-III', '2020-06-10', 'absent from classes', '7 DAYS RC', 'lt cdr kazim pn', 1, 'Phase 1', NULL, '2020-06-13 12:14:54', '2020-06-13 12:14:54', NULL, NULL),
(15, 4, 'Term-IV', '2020-06-23', 'LIEING', '7*RC', 'lt cdr kazim pn', 1, 'Phase 2', NULL, '2020-06-14 00:20:51', '2020-06-14 00:20:51', NULL, NULL),
(16, 4, NULL, '2020-06-30', 'LIEING', '7*RC', 'lt cdr kazim pn', 1, 'Phase 3', 'pnec', '2020-06-14 00:37:30', '2020-06-14 00:37:30', NULL, NULL),
(17, 10, 'Term-IV', '2020-12-02', 'physical', 'physical', 'jotosham', NULL, 'Phase 2', NULL, '2020-12-02 13:01:45', '2020-12-02 13:01:45', 1, NULL),
(18, NULL, 'Term_II', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-03 13:58:07', '2020-12-03 13:58:07', NULL, 11),
(19, NULL, 'Term-II', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-03 14:27:36', '2020-12-03 14:27:36', NULL, 11),
(20, NULL, 'Term-III', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-03 14:30:52', '2020-12-03 14:30:52', NULL, 11),
(21, 10, 'Term-IV', '2020-12-04', 'physical', 'ere', 'erer', NULL, 'Phase 2', NULL, '2020-12-03 14:42:47', '2020-12-03 14:42:47', 1, NULL),
(22, NULL, 'Term-III', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-12 08:18:22', '2020-12-12 08:18:22', NULL, 454),
(23, NULL, 'Term-III', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-13 07:05:17', '2020-12-13 07:05:17', NULL, 454),
(24, NULL, 'Term-III', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-13 07:05:26', '2020-12-13 07:05:26', NULL, 454),
(25, NULL, 'Term-III', '1970-01-01', 'asdf', 'sdf', 'asdf', NULL, 'Phase 1', NULL, '2020-12-15 10:05:46', '2020-12-15 10:05:46', NULL, 12349);

-- --------------------------------------------------------

--
-- Table structure for table `relegations`
--

CREATE TABLE `relegations` (
  `id` int(11) UNSIGNED NOT NULL,
  `oc_no` varchar(30) NOT NULL,
  `re_p_id` varchar(30) DEFAULT NULL,
  `new_p_id` varchar(30) DEFAULT NULL,
  `p_id` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `reason` varchar(2100) NOT NULL,
  `remarks` varchar(2100) NOT NULL,
  `co_name` varchar(200) NOT NULL,
  `do_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relegations`
--

INSERT INTO `relegations` (`id`, `oc_no`, `re_p_id`, `new_p_id`, `p_id`, `term`, `reason`, `remarks`, `co_name`, `do_name`, `created_at`, `updated_at`) VALUES
(1, '3333333333', NULL, NULL, '11', 'Term-I', 'adfasdf', 'asdfsdfsa', 'rahbharco', 'sabir', '2020-12-14 04:24:30', '2020-12-14 04:24:30'),
(2, '334350', NULL, NULL, '15', 'Term-I', 'efe', 'sdfsdf', 'rahbharco', 'sabir', '2020-12-14 04:29:27', '2020-12-14 04:29:27'),
(3, '232323', NULL, NULL, '17', 'Term-I', 'adfasdf', 'asdfsdfdsf', 'rahbharco', 'sabir', '2020-12-14 04:47:07', '2020-12-14 04:47:07'),
(4, '1234567', NULL, NULL, '23', 'Term-I', 'Reason', 'Reason', 'rahbharco', 'sabir', '2020-12-14 12:13:25', '2020-12-14 12:13:25'),
(5, '11111114', NULL, NULL, '34', 'Term-I', 'aasdf', 'asdf', 'rahbharco', 'dfsdf', '2020-12-15 10:40:01', '2020-12-15 10:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `saluting_swimming_records`
--

CREATE TABLE `saluting_swimming_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `saluting_date` date NOT NULL DEFAULT '0000-00-00',
  `saluting_remarks_attempt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saluting_remarks_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_swimming_date` date NOT NULL DEFAULT '0000-00-00',
  `p_swimming_remarks_attempt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_swimming_remarks_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_swimming_date` date NOT NULL DEFAULT '0000-00-00',
  `s_swimming_remarks_attempt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_swimming_remarks_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `oc_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saluting_swimming_records`
--

INSERT INTO `saluting_swimming_records` (`id`, `p_id`, `saluting_date`, `saluting_remarks_attempt`, `saluting_remarks_status`, `p_swimming_date`, `p_swimming_remarks_attempt`, `p_swimming_remarks_status`, `s_swimming_date`, `s_swimming_remarks_attempt`, `s_swimming_remarks_status`, `do_id`, `phase`, `created_at`, `updated_at`, `joto_id`, `oc_no`) VALUES
(1, 1, '2018-11-29', 'Attempt 5', 'qualified', '2018-11-30', 'Attempt 5', 'qualified', '2019-11-30', 'Attempt 10', 'qualified', 3, 'Phase 1', '2020-06-03 19:58:46', '2020-06-03 19:58:46', NULL, NULL),
(2, 4, '2020-07-01', 'Attempt 5', 'qualified', '2020-06-25', 'Attempt 3', 'qualified', '2020-06-24', 'Attempt 1', 'qualified', 1, 'Phase 1', '2020-06-13 12:21:22', '2020-06-13 12:21:22', NULL, NULL),
(3, 1, '1970-01-01', 'Attempt 3', 'failed', '1970-01-01', 'Attempt 5', 'failed', '1970-01-01', 'Attempt 5', 'pass', 1, 'Phase 1', '2020-12-03 12:49:20', '2020-12-03 12:49:20', NULL, NULL);
-- --------------------------------------------------------

--
-- Table structure for table `security_info`
--

CREATE TABLE `security_info` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_data` timestamp NOT NULL DEFAULT current_timestamp(),
  `acct_type` enum('do','joto','ct','co','exo','sqc','cao','smo','admin') NOT NULL,
  `status` enum('offline','online') NOT NULL,
  `division` varchar(50) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_info`
--

INSERT INTO `security_info` (`id`, `username`, `password`, `reg_data`, `acct_type`, `status`, `division`) VALUES
(1, 'admin', '$2y$10$uVajLuVrXeV2S4TWWuH4a.CLTS4LW92nmGiitB94akkA6pAWMJyI2', '2021-05-21 14:00:00', 'admin', 'offline', NULL),
(2, 'do', '$2y$10$7ht2URnlOaTf4Phga9oWaOd9t5LdtChLLMUVgkzUFhmeRCbZS9Rpe', '2021-06-29 04:10:11', 'do', 'offline', 'Hamza division'),
(3, 'joto', '$2y$10$7ht2URnlOaTf4Phga9oWaOd9t5LdtChLLMUVgkzUFhmeRCbZS9Rpe', '2021-06-29 04:10:11', 'joto', 'offline', 'Hamza division'),
(4, 'cao', '$2y$10$7ht2URnlOaTf4Phga9oWaOd9t5LdtChLLMUVgkzUFhmeRCbZS9Rpe', '2021-06-29 04:10:11', 'cao', 'offline', NULL),
(5, 'smo', '$2y$10$7ht2URnlOaTf4Phga9oWaOd9t5LdtChLLMUVgkzUFhmeRCbZS9Rpe', '2021-06-29 04:10:11', 'smo', 'offline', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seniority_record2_phase2s`
--

CREATE TABLE `seniority_record2_phase2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `marks_obtained` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aggregate_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relegated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_gained_lost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniority_record2_phase2s`
--

INSERT INTO `seniority_record2_phase2s` (`id`, `p_id`, `marks_obtained`, `aggregate_percentage`, `relegated`, `subjects_failed`, `seniority_gained_lost`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '600', '76', 'no', '0', '15', 'Phase 2', 3, '2020-06-03 20:46:18', '2020-06-03 20:46:18', NULL),
(2, 1, '750', '65', 'no', 'no', '10', 'Phase 2', 3, '2020-06-04 00:49:12', '2020-06-04 00:49:12', NULL),
(3, 1, '675', '80', 'no', '0', '15', 'Phase 2', 3, '2020-06-06 08:04:33', '2020-06-06 08:04:33', NULL),
(4, 4, '600', '67%', 'no', 'no', '10', 'Phase 2', 1, '2020-06-14 00:31:55', '2020-06-14 00:31:55', NULL),
(5, 10, '3434', '3343', '343', 'sfdg', '44', 'Phase 2', NULL, '2020-12-02 13:35:34', '2020-12-02 13:35:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seniority_records`
--

CREATE TABLE `seniority_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term1_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term1_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term1_relegated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term1_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term1_seniority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term2_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term2_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term2_relegated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term2_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term2_seniority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term3_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term3_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term3_relegated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term3_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term3_seniority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_gained` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_seniority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniority_records`
--

INSERT INTO `seniority_records` (`id`, `p_id`, `term1_marks`, `term1_percentage`, `term1_relegated`, `term1_subjects_failed`, `term1_seniority`, `term2_marks`, `term2_percentage`, `term2_relegated`, `term2_subjects_failed`, `term2_seniority`, `term3_marks`, `term3_percentage`, `term3_relegated`, `term3_subjects_failed`, `term3_seniority`, `net_percentage`, `seniority_gained`, `seniority_lost`, `net_seniority`, `phase`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '76', '76', 'no', '0', '5', '81', '83', 'no', '0', '15', '76', '77', 'no', '0', '15', '65%', '35', '0', '35', 'Phase 1', 3, '2020-06-03 20:25:11', '2020-06-03 20:25:11', NULL),
(2, 1, '1023', '87', 'no', 'no', '10', '1234', '89', 'no', 'no', '10', '1235', '89', 'no', 'no', '10', '88', '30', '0', '30', 'Phase 1', 3, '2020-06-04 00:48:36', '2020-06-04 00:48:36', NULL),
(3, 4, '1040', '87', 'no', 'no', '10', '1036', '85', 'no', 'no', '10', '1030', '86', 'no', 'no', '10', '86', '30', '0', '30', 'Phase 1', 1, '2020-06-14 00:17:15', '2020-06-14 00:17:15', NULL),
(4, 33, '700', '78', 'no', '0', '10', '700', '78', 'no', '0', '10', '700', '78', 'no', '0', '10', '78', '45', '10', '35', 'Phase 1', 1, '2020-12-15 09:52:23', '2020-12-15 09:52:23', NULL),
(5, 37, '89', '98', '89', '98', '89', '78', '78', '87', '78', '87', '67', '76', '67', '76', '67', '89', '98', '89', '98', 'Phase 1', 1, '2021-06-26 05:24:24', '2021-06-26 05:24:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seniority_record_phase3s`
--

CREATE TABLE `seniority_record_phase3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `marks_obtained` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aggregate_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_failed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_gained_lost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniority_record_phase3s`
--

INSERT INTO `seniority_record_phase3s` (`id`, `p_id`, `marks_obtained`, `aggregate_percentage`, `seniority_lost`, `courses_failed`, `seniority_gained_lost`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '1045', '86', '0', '0', '30', 'Phase 3', 'bahadur', 3, '2020-06-04 00:53:13', '2020-06-04 00:53:13', NULL),
(2, 1, '2', '2', '2', '2', '2', 'Phase 3', 'bahadur', 3, '2020-12-13 14:08:25', '2020-12-13 14:08:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seniority_record_phase3_pnecs`
--

CREATE TABLE `seniority_record_phase3_pnecs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `term3_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term3_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term3_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term3_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term4_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term4_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term4_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term4_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term5_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term6_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term6_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term6_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term6_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term7_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term7_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term7_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term7_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term8_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term8_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term8_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term8_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term9_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term9_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term9_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term9_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term10_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term10_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term10_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term10_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term11_cgpa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term11_relegated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term11_subjects_failed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term11_seniority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_gained` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seniority_lost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_seniority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seniority_record_phase3_pnecs`
--

INSERT INTO `seniority_record_phase3_pnecs` (`id`, `p_id`, `term3_cgpa`, `term3_relegated`, `term3_subjects_failed`, `term3_seniority`, `term4_cgpa`, `term4_relegated`, `term4_subjects_failed`, `term4_seniority`, `term5_cgpa`, `term5_relegated`, `term5_subjects_failed`, `term5_seniority`, `term6_cgpa`, `term6_relegated`, `term6_subjects_failed`, `term6_seniority`, `term7_cgpa`, `term7_relegated`, `term7_subjects_failed`, `term7_seniority`, `term8_cgpa`, `term8_relegated`, `term8_subjects_failed`, `term8_seniority`, `term9_cgpa`, `term9_relegated`, `term9_subjects_failed`, `term9_seniority`, `term10_cgpa`, `term10_relegated`, `term10_subjects_failed`, `term10_seniority`, `term11_cgpa`, `term11_relegated`, `term11_subjects_failed`, `term11_seniority`, `net_percentage`, `seniority_gained`, `seniority_lost`, `net_seniority`, `phase`, `phase3_type`, `do_id`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, '3.7', 'no', 'no', '10', '3,8', 'no', 'no', '10', '3.4', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '88', '40', '0', '40', 'Phase 3', 'pnec', 3, '2020-06-04 00:52:16', '2020-06-04 00:52:16', NULL),
(2, 1, '3.7', 'no', '0', '10', '3,8', 'no', 'no', '12', '3.4', 'no', 'no', '12', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', '3.7', 'no', 'no', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65%', '64', '0', '70', 'Phase 3', 'pnec', 3, '2020-06-06 09:14:04', '2020-06-06 09:14:04', NULL),
(3, 4, '3.7', 'no', 'no', '5', '3,8', 'no', 'no', '5', '3.4', 'no', 'no', '5', '3.7', 'no', 'no', '5', '3.7', 'no', 'no', '5', '3.7', 'no', 'no', '5', '3.7', 'no', 'no', '5', '3.7', 'no', 'no', '5', '3.7', 'no', 'no', '5', '85', '45', '0', '45', 'Phase 3', 'pnec', 1, '2020-06-14 01:02:55', '2020-06-14 01:02:55', NULL),
(4, 1, '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '56', '45', '45', '44', 'Phase 3', 'pnec', 3, '2020-12-13 13:50:29', '2020-12-13 13:50:29', NULL),
(5, 2, '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-13 13:53:16', '2020-12-13 13:53:16', NULL),
(6, 7, '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '22', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-13 13:54:25', '2020-12-13 13:54:25', NULL),
(7, 1, '3.43', 'yes', '2', '2', '3.43', 'yes', '2', '2', '2', 'yes', '2', '2', '2', 'yes', '2', '2', '2', 'yes', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-13 14:06:16', '2020-12-13 14:06:16', NULL),
(8, 1, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-13 14:07:25', '2020-12-13 14:07:25', NULL),
(9, 2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-13 14:07:56', '2020-12-13 14:07:56', NULL),
(10, 25, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:18:41', '2020-12-14 12:18:41', NULL),
(11, 26, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:25:29', '2020-12-14 12:25:29', NULL),
(12, 26, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:27:37', '2020-12-14 12:27:37', NULL),
(13, 26, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:34:12', '2020-12-14 12:34:12', NULL),
(14, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:37:04', '2020-12-14 12:37:04', NULL),
(15, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:39:12', '2020-12-14 12:39:12', NULL),
(16, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:39:58', '2020-12-14 12:39:58', NULL),
(17, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:41:41', '2020-12-14 12:41:41', NULL),
(18, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:42:58', '2020-12-14 12:42:58', NULL),
(19, 28, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:43:13', '2020-12-14 12:43:13', NULL),
(20, 29, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:44:10', '2020-12-14 12:44:10', NULL),
(21, 29, '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', '2', 'Phase 3', 'pnec', 3, '2020-12-14 12:45:26', '2020-12-14 12:45:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sqcs`
--

CREATE TABLE `sqcs` (
  `sqc_id` int(11) NOT NULL,
  `sqc_name` varchar(255) NOT NULL,
  `sqc_rank` varchar(255) DEFAULT NULL,
  `p_no` varchar(191) DEFAULT NULL,
  `navy_unit_id` int(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `account_status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `divison_name` varchar(1191) DEFAULT NULL,
  `divison_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sqcs`
--

INSERT INTO `sqcs` (`sqc_id`, `sqc_name`, `sqc_rank`, `p_no`, `navy_unit_id`, `email`, `username`, `password`, `account_status`, `created_at`, `updated_at`, `divison_name`, `divison_count`) VALUES
(2, 'q/deck', 'Lieutenant commander', '12345', 1, 'deck@gmail.com', 'q/deck', '80940bbbd02a8e1608c7a591f0085d50', 'Approved', '2020-12-15 09:06:25', '2020-12-15 09:06:25', 'hamza,shamsheer,tariq,', 3),
(3, 'foxl', 'Lieutenant commander', '2345', 1, 'foxl@gmail.com', 'foxl', 'fddf720311ba765c9e0e18b9ad00d928', 'Approved', '2020-12-15 09:07:43', '2020-12-15 09:07:43', 'khaild,saif,tipu,', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sqc_dossiers`
--

CREATE TABLE `sqc_dossiers` (
  `id` int(11) NOT NULL,
  `sqc_id` int(11) DEFAULT NULL,
  `p_id` varchar(191) DEFAULT NULL,
  `phase1_remarks` varchar(191) DEFAULT NULL,
  `phase2_remarks` varchar(191) DEFAULT NULL,
  `phase3_pnec_remarks` text DEFAULT NULL,
  `phase3_remarks` varchar(191) DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terminations`
--

CREATE TABLE `terminations` (
  `id` int(11) UNSIGNED NOT NULL,
  `oc_no` varchar(30) NOT NULL,
  `p_id` varchar(30) NOT NULL,
  `reason` varchar(2100) NOT NULL,
  `remarks` varchar(2100) NOT NULL,
  `co_name` varchar(200) NOT NULL,
  `captain_name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminations`
--

INSERT INTO `terminations` (`id`, `oc_no`, `p_id`, `reason`, `remarks`, `co_name`, `captain_name`, `created_at`, `updated_at`) VALUES
(1, '55555555555555555', '7', 'e', 'e', 'exojauhar', 'e', '2020-12-14 03:38:01', '2020-12-14 03:38:01'),
(2, '1234567', '23', 'reason', 'reason', 'reason', 'reason', '2020-12-14 12:14:41', '2020-12-14 12:14:41'),
(3, '222222222', '36', 'aaaaa', 'aaaa', 'a', 'a', '2020-12-15 10:41:01', '2020-12-15 10:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `do_id` int(11) NOT NULL,
  `do_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warning_attachments`
--

CREATE TABLE `warning_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warning_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warning_attachments`
--

INSERT INTO `warning_attachments` (`id`, `file_name`, `file_type`, `file_path`, `file_size`, `p_id`, `do_id`, `phase`, `phase3_type`, `warning_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, '5ed846f8821e0BIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/warnings/5ed846f8821e0BIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 1', NULL, 'Training Commander', '2020-06-03 19:57:28', '2020-06-03 19:57:28', NULL),
(2, '5ed8550c2e13bBIO-DATAFORM.docx', 'docx', 'http://localhost/dossier/attachments/warnings/5ed8550c2e13bBIO-DATAFORM.docx', '17.545 kb', 1, 3, 'Phase 3', 'pnec', 'Training Commander', '2020-06-03 20:57:32', '2020-06-03 20:57:32', NULL),
(3, '5edb8f0a5a210WhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5edb8f0a5a210WhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 1, 3, 'Phase 2', NULL, 'Admin Authority', '2020-06-06 07:41:46', '2020-06-06 07:41:46', NULL),
(4, '5edb98cebf949WhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5edb98cebf949WhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 1, 3, 'Phase 3', 'pnec', 'Training Commander', '2020-06-06 08:23:26', '2020-06-06 08:23:26', NULL),
(5, '5ee50ad2181d2WhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5ee50ad2181d2WhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 4, 1, 'Phase 1', NULL, 'Divisional Officer', '2020-06-13 12:20:18', '2020-06-13 12:20:18', NULL),
(6, '5ee50aec1b737WhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5ee50aec1b737WhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 4, 1, 'Phase 1', NULL, 'Training Commander', '2020-06-13 12:20:44', '2020-06-13 12:20:44', NULL),
(7, '5ee5b501cfdedWhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5ee5b501cfdedWhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 4, 1, 'Phase 2', NULL, 'Training Commander', '2020-06-14 00:26:25', '2020-06-14 00:26:25', NULL),
(8, '5ee5b7f24b522WhatsAppImage2020-06-04at08.27.48.jpeg', 'jpeg', 'http://localhost/dossier/attachments/warnings/5ee5b7f24b522WhatsAppImage2020-06-04at08.27.48.jpeg', '59.072 kb', 4, 1, 'Phase 3', 'pnec', 'Training Commander', '2020-06-14 00:38:58', '2020-06-14 00:38:58', NULL),
(9, '5ee9a4f9ece7awarningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a4f9ece7awarningattachmentt.png', '843.996 kb', 4, 1, 'Phase 1', NULL, 'Admin Authority', '2020-06-17 00:07:06', '2020-06-17 00:07:06', NULL),
(10, '5ee9a51024200warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a51024200warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 1', NULL, 'Commandant', '2020-06-17 00:07:28', '2020-06-17 00:07:28', NULL),
(11, '5ee9a52510701warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a52510701warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 1', NULL, 'Training Commander', '2020-06-17 00:07:49', '2020-06-17 00:07:49', NULL),
(12, '5ee9a537a22b2warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a537a22b2warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 1', NULL, 'Divisional Officer', '2020-06-17 00:08:07', '2020-06-17 00:08:07', NULL),
(13, '5ee9a548825a0warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a548825a0warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 1', NULL, 'Training Commander', '2020-06-17 00:08:24', '2020-06-17 00:08:24', NULL),
(14, '5ee9a56cd4d8ewarningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a56cd4d8ewarningattachmentt.png', '843.996 kb', 4, 1, 'Phase 2', NULL, 'Admin Authority', '2020-06-17 00:09:00', '2020-06-17 00:09:00', NULL),
(15, '5ee9a57e6db7cwarningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a57e6db7cwarningattachmentt.png', '843.996 kb', 4, 1, 'Phase 2', NULL, 'Commandant', '2020-06-17 00:09:18', '2020-06-17 00:09:18', NULL),
(16, '5ee9a59210d5fwarningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a59210d5fwarningattachmentt.png', '843.996 kb', 4, 1, 'Phase 2', NULL, 'Training Commander', '2020-06-17 00:09:38', '2020-06-17 00:09:38', NULL),
(17, '5ee9a5b65c27dwarningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a5b65c27dwarningattachmentt.png', '843.996 kb', 4, 1, 'Phase 2', NULL, 'Training Commander', '2020-06-17 00:10:14', '2020-06-17 00:10:14', NULL),
(18, '5ee9a5ce2f145warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a5ce2f145warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 2', NULL, 'Divisional Officer', '2020-06-17 00:10:38', '2020-06-17 00:10:38', NULL),
(19, '5ee9a6b66f6b3warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a6b66f6b3warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 3', 'pnec', 'Admin Authority', '2020-06-17 00:14:30', '2020-06-17 00:14:30', NULL),
(20, '5ee9a6c35f656warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a6c35f656warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 3', 'pnec', 'Commandant', '2020-06-17 00:14:43', '2020-06-17 00:14:43', NULL),
(21, '5ee9a6d166b99warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a6d166b99warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 3', 'pnec', 'Training Commander', '2020-06-17 00:14:57', '2020-06-17 00:14:57', NULL),
(22, '5ee9a6e68e286warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a6e68e286warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 3', 'pnec', 'Officer In Charge', '2020-06-17 00:15:18', '2020-06-17 00:15:18', NULL),
(23, '5ee9a6f2ef3d9warningattachmentt.png', 'png', 'http://localhost/dossier/attachments/warnings/5ee9a6f2ef3d9warningattachmentt.png', '843.996 kb', 4, 1, 'Phase 3', 'pnec', 'Divisional Officer', '2020-06-17 00:15:31', '2020-06-17 00:15:31', NULL),
(24, '5fc7db80e9e0fGeneralKnowledge2016to20Nov2017.pdf', 'pdf', 'http://localhost/dossier/attachments/warnings/5fc7db80e9e0fGeneralKnowledge2016to20Nov2017.pdf', '942.186 kb', 10, NULL, 'Phase 2', NULL, 'Training Commander', '2020-12-02 13:22:57', '2020-12-02 13:22:57', 1),
(25, '5fd8cbf339f9earon-smith-CV-financial-manager.pdf', 'pdf', 'http://localhost/dossier/attachments/warnings/5fd8cbf339f9earon-smith-CV-financial-manager.pdf', '91.948 kb', 33, 1, 'Phase 1', NULL, 'Divisional Officer', '2020-12-15 09:45:07', '2020-12-15 09:45:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warning_records`
--

CREATE TABLE `warning_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `issued_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reasons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `phase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase3_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `joto_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warning_records`
--

INSERT INTO `warning_records` (`id`, `p_id`, `sno`, `date`, `issued_by`, `reasons`, `do_name`, `do_id`, `phase`, `phase3_type`, `created_at`, `updated_at`, `joto_id`) VALUES
(1, 1, 1, '2018-10-31', 'lt cdr seemab pn', 'failed in aggregate', 'LT CDR IMRAN', 3, 'Phase 1', NULL, '2020-06-03 19:56:36', '2020-06-03 19:56:36', NULL),
(2, 1, 1, '2019-11-29', 'lt cdr seemab pn', 'failed in aggregate', 'LT CDR IOMRAN', 3, 'Phase 2', NULL, '2020-06-06 07:40:52', '2020-06-06 07:40:52', NULL),
(3, 1, 2, '2019-11-02', 'lt cdr seemab pn', 'failed in paper', 'LT CDR IMRAN', 3, 'Phase 3', 'pnec', '2020-06-06 08:22:56', '2020-06-06 08:22:56', NULL),
(4, 4, 1, '2020-06-25', 'lt cdr seemab pn', 'failed in aggregate', 'LT CDR IMRAN', 1, 'Phase 1', NULL, '2020-06-13 12:19:56', '2020-06-13 12:19:56', NULL),
(5, 4, 1, '2020-07-02', 'lt cdr seemab pn', 'failed in aggregate', 'LT CDR IMRAN', 1, 'Phase 2', NULL, '2020-06-14 00:26:08', '2020-06-14 00:26:08', NULL),
(6, 4, 1, '2020-06-17', 'lt cdr seemab pn', 'failed in aggregate', 'LT CDR IMRAN', 1, 'Phase 3', 'pnec', '2020-06-14 00:38:39', '2020-06-14 00:38:39', NULL),
(7, 10, 3434, '2020-12-02', 'ha', 'asdfs', 'sdfa', NULL, 'Phase 2', NULL, '2020-12-02 13:22:37', '2020-12-02 13:22:37', 1),
(8, 33, 1, '2020-12-15', 'Lt Hamza', 'Lie', 'Lt Hamza', 1, 'Phase 1', NULL, '2020-12-15 09:44:55', '2020-12-15 09:44:55', NULL);

--
-- Table structure for table `cadet_club`
--

CREATE TABLE `cadet_club` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadet_club`
--

INSERT INTO `cadet_club` (`id`, `name`, `status`) VALUES
(1, 'club-1', 'Active'),
(2, 'club-2', 'Active'),
(3, 'club-3', 'Active');

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(20) NOT NULL,
  `division_name` varchar(50) NOT NULL,
  `division_officer` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `division_officer`, `status`) VALUES
(1, 'Kashmir division', NULL, NULL),
(2, 'Tariq division', NULL, NULL), 
(3, 'Shamsheer division', NULL, NULL), 
(4, 'Hamza division', NULL, NULL), 
(5, 'Nasr division', NULL, NULL),
(6, 'Khaibar division', NULL, NULL),
(7, 'Saad division', NULL, NULL),
(8, 'Aslat division', NULL, NULL),
(9, 'Zulfiqar division', NULL, NULL), 
(10, 'Yarmook division', NULL, NULL), 
(11, 'Alamgir division', NULL, NULL), 
(12, 'Tabuk division', NULL, NULL), 
(13, 'Saif division', NULL, NULL), 
(14, 'Khalid division', NULL, NULL), 
(15, 'Moawin division', NULL, NULL);


--
-- Table structure for table `quality_list`
--

CREATE TABLE `quality_list` (
  `id` int(20) NOT NULL,
  `quality_name` varchar(50) DEFAULT NULL,
  `max_marks` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quality_list`
--

INSERT INTO `quality_list` (`id`, `quality_name`, `max_marks`) VALUES
(1, 'Truthfulness', 20),
(2, 'Integrity', 25),
(3, 'Sense of Pride', 10),
(4, 'Moral Courage', 15),
(5, 'Confidence and Behviour Under Stress', 15),
(6, 'Initiative', 10),
(7, 'Ability to command,control and Assert', 10),
(8, 'Self and General Discipline', 10),
(9, 'Sense of Duty', 10),
(10, 'Reliability', 10),
(11, 'General Appearance and Bearing', 10),
(12, 'Physical Fitness', 10),
(13, 'Manners and Social Conduct', 10),
(14, 'Intelligence and Common sense', 10),
(15, 'Cooperation Adaptability and Team work', 10),
(16, 'Power of Expression (Written & Oral)', 15);

-- Alter Tables by Awais Ahmad

alter table pn_form1s
add COLUMN club varchar(30) null;

alter table punishment_records
add column start_date date null;

alter table punishment_records
add column end_date date null;

alter table medical_records
add column start_date date;

alter table medical_records
add column end_date date;

alter table observation_records
add column status varchar(50) NOT NULL;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_records`
--
ALTER TABLE `academic_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_allocations`
--
ALTER TABLE `branch_allocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadets_autobiographies`
--
ALTER TABLE `cadets_autobiographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captain_trainings`
--
ALTER TABLE `captain_trainings`
  ADD PRIMARY KEY (`captain_training_id`),
  ADD UNIQUE KEY `captain_trainings_email_unique` (`email`),
  ADD UNIQUE KEY `captain_trainings_username_unique` (`username`);

--
-- Indexes for table `captain_training_dossiers`
--
ALTER TABLE `captain_training_dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commanding_officers`
--
ALTER TABLE `commanding_officers`
  ADD PRIMARY KEY (`co_id`),
  ADD UNIQUE KEY `commanding_officers_email_unique` (`email`),
  ADD UNIQUE KEY `commanding_officers_username_unique` (`username`);

--
-- Indexes for table `commanding_officer_dossiers`
--
ALTER TABLE `commanding_officer_dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_certificates`
--
ALTER TABLE `degree_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distinctions_records`
--
ALTER TABLE `distinctions_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `do_accounts`
--
ALTER TABLE `do_accounts`
  ADD PRIMARY KEY (`do_id`),
  ADD UNIQUE KEY `do_accounts_email_unique` (`email`);

--
-- Indexes for table `do_records`
--
ALTER TABLE `do_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exo_dossiers`
--
ALTER TABLE `exo_dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exo_officers`
--
ALTER TABLE `exo_officers`
  ADD PRIMARY KEY (`exo_id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `games_proficiencies`
--
ALTER TABLE `games_proficiencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_remarks`
--
ALTER TABLE `general_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_records`
--
ALTER TABLE `inspection_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joto_accounts`
--
ALTER TABLE `joto_accounts`
  ADD PRIMARY KEY (`joto_id`);

--
-- Indexes for table `joto_records`
--
ALTER TABLE `joto_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navy_units`
--
ALTER TABLE `navy_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhq_dossiers`
--
ALTER TABLE `nhq_dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhq_logins`
--
ALTER TABLE `nhq_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `obiographies`
--
ALTER TABLE `obiographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observation_records`
--
ALTER TABLE `observation_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observation_slips`
--
ALTER TABLE `observation_slips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer_qualities`
--
ALTER TABLE `officer_qualities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overall_seniority_records`
--
ALTER TABLE `overall_seniority_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_datas`
--
ALTER TABLE `personal_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_data_attachments`
--
ALTER TABLE `personal_data_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_effeciency_records`
--
ALTER TABLE `physical_effeciency_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pn_form1s`
--
ALTER TABLE `pn_form1s`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `progress_charts`
--
ALTER TABLE `progress_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress_chart_phase3s`
--
ALTER TABLE `progress_chart_phase3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psychologist_reports`
--
ALTER TABLE `psychologist_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punishment_records`
--
ALTER TABLE `punishment_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relegations`
--
ALTER TABLE `relegations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saluting_swimming_records`
--
ALTER TABLE `saluting_swimming_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_info`
--
ALTER TABLE `security_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniority_record2_phase2s`
--
ALTER TABLE `seniority_record2_phase2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniority_records`
--
ALTER TABLE `seniority_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniority_record_phase3s`
--
ALTER TABLE `seniority_record_phase3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniority_record_phase3_pnecs`
--
ALTER TABLE `seniority_record_phase3_pnecs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sqcs`
--
ALTER TABLE `sqcs`
  ADD PRIMARY KEY (`sqc_id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `sqc_dossiers`
--
ALTER TABLE `sqc_dossiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminations`
--
ALTER TABLE `terminations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warning_attachments`
--
ALTER TABLE `warning_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warning_records`
--
ALTER TABLE `warning_records`
  ADD PRIMARY KEY (`id`);
  
--
-- Indexes for table `cadet_club`
--
ALTER TABLE `cadet_club`
  ADD PRIMARY KEY (`id`);
  
--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);
  
--
-- Indexes for table `quality_list`
--
ALTER TABLE `quality_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_records`
--
ALTER TABLE `academic_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `branch_allocations`
--
ALTER TABLE `branch_allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cadets_autobiographies`
--
ALTER TABLE `cadets_autobiographies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `captain_training_dossiers`
--
ALTER TABLE `captain_training_dossiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `commanding_officer_dossiers`
--
ALTER TABLE `commanding_officer_dossiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `degree_certificates`
--
ALTER TABLE `degree_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distinctions_records`
--
ALTER TABLE `distinctions_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `do_records`
--
ALTER TABLE `do_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exo_dossiers`
--
ALTER TABLE `exo_dossiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exo_officers`
--
ALTER TABLE `exo_officers`
  MODIFY `exo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games_proficiencies`
--
ALTER TABLE `games_proficiencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `general_remarks`
--
ALTER TABLE `general_remarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `inspection_records`
--
ALTER TABLE `inspection_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `joto_accounts`
--
ALTER TABLE `joto_accounts`
  MODIFY `joto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joto_records`
--
ALTER TABLE `joto_records`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `navy_units`
--
ALTER TABLE `navy_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhq_dossiers`
--
ALTER TABLE `nhq_dossiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nhq_logins`
--
ALTER TABLE `nhq_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obiographies`
--
ALTER TABLE `obiographies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `observation_records`
--
ALTER TABLE `observation_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `observation_slips`
--
ALTER TABLE `observation_slips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `officer_qualities`
--
ALTER TABLE `officer_qualities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `overall_seniority_records`
--
ALTER TABLE `overall_seniority_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_datas`
--
ALTER TABLE `personal_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_data_attachments`
--
ALTER TABLE `personal_data_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `physical_effeciency_records`
--
ALTER TABLE `physical_effeciency_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pn_form1s`
--
ALTER TABLE `pn_form1s`
  MODIFY `p_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `progress_charts`
--
ALTER TABLE `progress_charts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `progress_chart_phase3s`
--
ALTER TABLE `progress_chart_phase3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `psychologist_reports`
--
ALTER TABLE `psychologist_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `punishment_records`
--
ALTER TABLE `punishment_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `relegations`
--
ALTER TABLE `relegations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `saluting_swimming_records`
--
ALTER TABLE `saluting_swimming_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `security_info`
--
ALTER TABLE `security_info`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seniority_record2_phase2s`
--
ALTER TABLE `seniority_record2_phase2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seniority_records`
--
ALTER TABLE `seniority_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seniority_record_phase3s`
--
ALTER TABLE `seniority_record_phase3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seniority_record_phase3_pnecs`
--
ALTER TABLE `seniority_record_phase3_pnecs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sqcs`
--
ALTER TABLE `sqcs`
  MODIFY `sqc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sqc_dossiers`
--
ALTER TABLE `sqc_dossiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terminations`
--
ALTER TABLE `terminations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warning_attachments`
--
ALTER TABLE `warning_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `warning_records`
--
ALTER TABLE `warning_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
  
--
-- AUTO_INCREMENT for table `cadet_club`
--
ALTER TABLE `cadet_club`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  

--
-- AUTO_INCREMENT for table `quality_list`
--
ALTER TABLE `quality_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


--
-- Table structure for table `academic_records`
--

-- physical_milestone 
CREATE TABLE `physical_milestone` (
  `id` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `oc_no` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `PST_result` varchar(200),
  `PST_attempt` varchar(200),
  `SST_result` varchar(200),
  `SST_attempt` varchar(200),
  `PET_I_result` varchar(200),
  `PET_I_attempt` varchar(200),
  `PET_II_result` varchar(200),
  `PET_II_attempt` varchar(200),
  `assault_result` varchar(200),
  `assault_attempt` varchar(200),
  `saluting_result` varchar(200),
  `saluting_attempt` varchar(200),
  `PLX_result` varchar(200),
  `PLX_attempt` varchar(200),
  `long_cross_result` varchar(200),
  `long_cross_card_number` varchar(200),
  `mini_cross_result` varchar(200),
  `mini_cross_card_number` varchar(200),
  `date_added` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Term_I Details  --
CREATE TABLE `term_I_details` (
  `id` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `oc_no` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `mile_time` varchar(200),
  `pushups` varchar(200),
  `chinups` varchar(200),
  `rope` varchar(200),
  `date_added` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Term_II Details  --
CREATE TABLE `term_II_details` (
  `id` bigint(20) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `oc_no` int(11) NOT NULL,
  `do_id` int(11) DEFAULT NULL,
  `mile_time` varchar(200),
  `pushups` varchar(200),
  `chinups` varchar(200),
  `rope` varchar(200),
  `date_added` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

COMMIT;