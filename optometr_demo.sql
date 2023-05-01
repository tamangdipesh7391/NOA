-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2023 at 07:17 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optometr_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 2, 'Message from the President and Secretary', 'message-from-the-president-and-secretary', 1, 'Message from the President and Secretary', 'Message from the President and Secretary', NULL, '<p>Message from the President and Secretary&nbsp;</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'uploads/about/cbb2e705d19c99e41e04ac279fdddcca.jpg', '2023-02-21 16:23:41', '2023-05-01 02:11:33'),
(8, 2, 'Current Executive Committee', 'current-executive-committee', 1, 'Current Executive Committee of NAO', 'Current Executive Committee of NAO', NULL, '<p><strong>Eighth committee:</strong></p>\r\n\r\n<table border=\"0\" cellpadding=\"10\" cellspacing=\"10\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"Niraj Dev Joshi\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/4957287dc1831fc3c6f31d09187a2c77.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>President</strong><br />\r\n			Niraj Dev Joshi<br />\r\n			nirajdevjoshi@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><strong>Vice President</strong><br />\r\n			Raju Kaiti</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"text-align:center\"><strong>Secretary</strong><br />\r\n			Deepak Kumar Sah&nbsp;</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p style=\"text-align:center\"><img alt=\"Mukesh Kumar Jha\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/464175f046be4f8e4afbaf0e52caaaea.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>Joint Secretary&nbsp;</strong><br />\r\n			Mukesh Kumar Sah</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p style=\"text-align:center\"><img alt=\"Junu Shrestha\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/b224eacf21eee1af01de588709aebb9e.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>Treasurer&nbsp;</strong><br />\r\n			Junu Shrestha<br />\r\n			shresthajunoo@gmail.com</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Members:</h3>\r\n\r\n<table border=\"0\" cellpadding=\"10\" cellspacing=\"10\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Binesh Gautam\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/90dffddb04829e7814d2cf06de9beb13.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Binesh Gautam<br />\r\n			alwaysbg@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Krishna Kumar Dhankhoti\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/8798bb93b36d9176c4cd882b500b5011.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Krishna Kumar Dhankhoti<br />\r\n			ky558746@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Monika Mandal\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/91a9909cbcbb148755dfd1c67ac445d5.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Monika Mandal<br />\r\n			monika.opto@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Puspa Khadka\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/d66ddbb2cad47a46c8b2838f4dd1512c.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Puspa Khadka<br />\r\n			pusakhadka@gmail.com</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Jay sundar Sunrait\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/27752667f9aebc86750fab43530c7cba.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Jay sundar Sunrait<br />\r\n			jaysundar.vision@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Niranjan Sharan\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/94e54749edee7157f73e1f1fe673de53.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Niranjan Sharan<br />\r\n			niranjansharan09@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Stuti Acharya\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/42975b3eb6a5bcc41e26764d2e96d333.jpg\" style=\"height:200px; width:200px\" /></p>\r\n\r\n			<p>Monika Mandal<br />\r\n			monika.opto@gmail.com</p>\r\n			</td>\r\n			<td style=\"text-align:center\">Suraj chhetri</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', NULL, '2023-02-21 16:24:49', '2023-02-21 17:12:21'),
(9, 2, 'Past Executive Committee', 'past-executive-committee', 1, 'Past Executive Committee of NAO', 'Past Executive Committee of NAO', NULL, '<table border=\"0\" cellpadding=\"10\" cellspacing=\"10\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"Niraj Dev Joshi\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/4957287dc1831fc3c6f31d09187a2c77.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>President</strong><br />\r\n			Niraj Dev Joshi</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Prithvi Thapaliya\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/cd29e9ba3f37351c349975827ddd594c.jpg\" /></p>\r\n\r\n			<p><strong>Vice President</strong><br />\r\n			Prithvi Thapaliya</p>\r\n			</td>\r\n			<td>\r\n			<p style=\"text-align:center\"><img alt=\"Gyan Bahadur Basnet\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/f25beffaee680790d0962f830fd36a84.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>Secretary</strong><br />\r\n			Gyan Bdr. Basnet&nbsp;</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p style=\"text-align:center\"><img alt=\"Mukesh Kumar Jha\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/53f314c3ea67199d0d9859c0157d3405.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>Joint Secretary</strong><br />\r\n			Mukesh Kumar Jha</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p style=\"text-align:center\"><img alt=\"Junu Shrestha\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/b224eacf21eee1af01de588709aebb9e.jpg\" /></p>\r\n\r\n			<p style=\"text-align:center\"><strong>Treasurer</strong><br />\r\n			Junu Shrestha</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Members:</h3>\r\n\r\n<table border=\"0\" cellpadding=\"10\" cellspacing=\"10\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Amit KC\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/c1a290c89a5ac07b6dc8a22d93b2bc98.jpg\" /></p>\r\n\r\n			<p>Amit K.C</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Panjak Ray Adhikari\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/f6bf45627dc0b7bfdc73d44a67770040.jpg\" /></p>\r\n\r\n			<p>Pankaj Ray Adhikari</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Prateeva Devkota\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/d1682a832b815ced3d1ac934e507b6e1.jpg\" /></p>\r\n\r\n			<p>Prateeva Devkota</p>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<p><img alt=\"Hira Nath Dahal\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/3667bf40e50d0a65ce5e772167725307.jpg\" /></p>\r\n\r\n			<p>Hira Nath Dahal</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2023-02-21 16:38:05', '2023-02-21 16:52:48'),
(10, 2, 'Provincial Committee', 'provincial-committee', 1, 'Provincial Committee of NAO', 'Provincial Committee of NAO', NULL, '<p>Provincial Committee of NAO</p>', NULL, '2023-02-21 17:13:07', '2023-02-21 17:13:07'),
(12, 2, 'Special Committee', 'special-committee', 1, NULL, NULL, '<p>test</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, '2023-05-01 02:12:49', '2023-05-01 03:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(21, 3, 'Past Activities', 'past-activities', 1, NULL, NULL, NULL, '<p>The association is committed to assisting optometrists deliver quality eye and vision care services across Nepal. Special focus has been given to children realizing their greater vulnerability due to poor decision making power and access to resources. Regular conduct of school screening camps and community eye camps by the association has served thousands of children restore their eye health. While health promotion activities have made another thousands of people in the rural communities aware of the health conditions that can disrupt from seeing well. Coordination and partnership among stakeholders from central to grass root level has remained the major thrust for success in projects carried out by the association so far.</p>\r\n\r\n<p><strong>Past:</strong></p>\r\n\r\n<ul>\r\n	<li>Nepalese Association of Optometrists (NAO) was registered at District Administration Office, Kathmandu on 16<sup>th</sup>&nbsp;June, 2003.</li>\r\n	<li>NAO became the member of World Council of Optometry (WCO) in 2004 and Asia Pacific Council of Optometry (APCO) in 2007.</li>\r\n	<li>Code of Ethics for practice of optometry in Nepal was developed on May 2008 and has been sent to Nepal Health Professional Council (NHPC) for approval.</li>\r\n	<li>About 100 street children from Kathmandu valley were screened for their eye health problems&nbsp; by a team of optometrists in 2008. Almost 20% children were assisted with medical and optical helps on site free of cost.</li>\r\n	<li>An Optometry Bulletin was published on Feb, 2008. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Facebook page of NAO has been created in 2011 as &ldquo;Nepalese Association of Optometrists&rdquo;.</li>\r\n	<li>NAO in coordination with B P Eye Foundation conducted several eye camps, programs for capacity building of health system and eye health awareness raising activities in 2010-2011.</li>\r\n	<li>NAO organized an Eye Camp in Falebaas, Parbat district of Nepal in collaboration with Volunteering Optometric Services to Humanity (VOSH, USA), B.P. Eye Foundation and B.P. Koirala Lions Center for Ophthalmic Studies from 14-19 September 2011</li>\r\n	<li>NAO contributed in the Mid Term Review of Vision 2020: The Right to Sight program of Ministry of Health and Population, Nepal in 2011. Please click the link below to see the report. &nbsp;<a href=\"http://bpeyefoundation.org/downloads/Publication/MTR%20Vision%202020%20Report.pdf\">http://bpeyefoundation.org/downloads/Publication/MTR%20Vision%202020%20Report.pdf</a></li>\r\n</ul>', NULL, '2023-02-21 17:49:48', '2023-02-21 17:49:48'),
(22, 3, 'Present Activities', 'present-activities', 1, NULL, NULL, NULL, '<ul>\r\n	<li>NAO is publishing an annual journal of optometry &ldquo;The Sight&rdquo; in association with Nepal Optometry Students&rsquo; society (NOSS).</li>\r\n	<li>Lobbying is being made by the association to have a representation at Apex Body for Eye Health, Ministry of Health &amp; Population. The profession is increasingly being recognized among other eye health professionals and the professionals are being recruited by different Government/ Non Government Organizations delivering eye health services in Nepal.</li>\r\n	<li>Lobbying is being made to regularize the profession in coordination with Nepal Health Professionals Council (NHPC). Proposal for conducting licencing exam by the association and provision of NHPC registration upon the recommendation of NAO is being drafted.</li>\r\n	<li>NAO with support from Optometry Giving Sight and in partnership with BP Eye Foundation successfully hold three eye camps targeted to marginalized children from rural communities one each in Dolakha, Sindhupalchok and Kavrepalanchok districts of Nepal. &nbsp;A total of 2,122 children and 544 adults from three rural communities of Nepal have received eye care services from qualified eye health professionals during one year project period. For many of them this was the first time they got their eyes examined and possibly for many of the adults this could have been the last as people from many rural parts of Nepal are not aware on eye health, the services are not close to the people and people do not often get services from a qualified health personnel.</li>\r\n	<li>&ldquo;Nepal Optometry International Travel&rdquo; has been established for providing travel grants to optometrists and optometry students participating in international scientific meetings, seminars, conferences, workshops, CME programs etc. Support is being received from Nepalese optometrists practicing abroad and international optometrists and optometry related organizations.</li>\r\n</ul>', NULL, '2023-02-21 17:51:06', '2023-02-21 17:51:17'),
(23, 3, 'Planned Activities', 'planned-activities', 1, NULL, NULL, NULL, '<p><strong>Planned:</strong></p>\r\n\r\n<ul>\r\n	<li>NAO will work to start higher education of Optometry within Nepal in cooperation with different universities.</li>\r\n	<li>NAO plans to publish its own&nbsp; Journal of Optometry soon.</li>\r\n</ul>', NULL, '2023-02-21 17:52:52', '2023-02-21 17:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','superadmin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `login_status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `gender`, `role`, `status`, `login_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$8KEGVoDM62j37KaG2OJvx.QeMlOhL/ZJP8ZWB4NsGK/2wQf4OAQue', 'male', 'superadmin', 0, 1, NULL, '2023-02-20 07:01:29', '2023-05-01 02:09:14'),
(2, 'user', 'user', 'user@gmail.com', '$2y$10$DdDH6QP1g2WNti1QleFhduni.ulWJdl6yCwk8N6mJ84JMZ7wFLUKu', 'male', 'admin', 0, 0, NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin_galleries`
--

CREATE TABLE `admin_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(22, 7, 'Travel grant award', 'travel-grant-award', 1, 'Travel grant award', 'Travel grant award', NULL, '<p>Travel grant award</p>', NULL, '2023-03-04 09:23:00', '2023-03-04 09:23:00'),
(23, 7, 'Recipient of the travel grant award till date', 'recipient-of-the-travel-grant-award-till-date', 1, 'Recipient of the travel grant award till date', 'Recipient of the travel grant award till date', NULL, '<p>We are pleased to congratulate the receipeints of Nepalese Association of Optometrists travel grants receipents who received to support their travel to international conferences and forums in 2019</p>\r\n\r\n<p><strong>The receipents are</strong></p>\r\n\r\n<ol>\r\n	<li>Arun Dhungana (Optometrist, Nepal Eye Hospital) USD 150&nbsp; Travel to AMICON , New Delhi</li>\r\n	<li>Anish Kharal ( Optometrist, Kathmandu Eye Centre) USD 300&nbsp; Travel to Asia Pacific Optometry Congress Phillipines</li>\r\n	<li>Dr. Gyan Bahadur Basnet ( Optometrist, Himalaya Eye Hospital, Pokhaka University) USD 300 travel to Asia Pacific Optometric Congress Phillipines</li>\r\n	<li>Niraj Dev Joshi (Optometrist, Institute of Medicine) USD 300 Travel to Americal Academy of Optometry / World Council of Optometry Conference Orlando USA</li>\r\n	<li>Raju Kaiti (Optometrist, Nepal Eye Hospital )&nbsp; USD 150&nbsp; Travel to International Conference on Medical and Health, Royal University of Bhutan, Thimpu, Bhutan</li>\r\n</ol>\r\n\r\n<p>These travel grants are distributed to&nbsp; members of Nepalese Association of Optometrists. We encourage our members to apply for travel grants for the conferences approved by our Association.</p>', 'uploads/awards/6326bd57ea82e1550ed7e3690ea44453.jpg', '2023-03-04 09:23:57', '2023-03-13 06:11:08'),
(24, 7, 'Apply for travel grant', 'apply-for-travel-grant', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-12 15:30:52', '2023-03-12 15:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `link` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `status`, `link`, `description`, `image`, `order`, `created_at`, `updated_at`) VALUES
(27, 'AGM NAO', 'agm-nao', 1, '#', NULL, 'uploads/banners/8e5c97645231d1fa9416fc75faa917bc.jpg', 0, '2023-02-21 16:14:14', '2023-02-21 16:14:14'),
(28, 'First Optometry Conference', 'first-optometry-conference', 1, '#', NULL, 'uploads/banners/a98e205bc2fbff650b5041b9f1434079.jpg', 0, '2023-02-21 16:15:23', '2023-02-21 16:15:23'),
(29, 'World Sight Day', 'world-sight-day', 1, '#', NULL, 'uploads/banners/74d3aca0c3d9bfe590c9774da1097bd6.jpg', 0, '2023-02-22 09:02:25', '2023-02-22 09:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id`, `menu_id`, `title`, `slug`, `status`, `date`, `end_date`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, NULL, 'First annual conference', 'first-annual-conference', 1, '2023-05-10', '2023-05-12', NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '0', NULL, '2023-05-01 02:14:30', '2023-05-01 02:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `conference_forms`
--

CREATE TABLE `conference_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conference_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `municipality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `content_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Vision', 'vision', 0, NULL, NULL, NULL, '<p>No Nepalese remains needlessly blind</p>', NULL, 1, '2023-02-20 07:01:30', '2023-02-22 08:47:43'),
(2, 'Mission', 'mission', 0, NULL, NULL, NULL, '<p>To increase the access of quality eye health services to people in need and increase eye health awareness among people</p>', NULL, 1, '2023-02-20 07:01:30', '2023-02-22 08:47:52'),
(3, 'Objectives', 'objectives', 0, NULL, NULL, NULL, '<p>a. To strive to develop and extend high-level optometric care and make it accessible to the general population b. To increase the demand for eye care services among people by increasing eye health awareness c. To innovate and implement ideas for sustainable eye care in the country d. To strive to uplift the academic level and skills of eye care practitioners. e. To devote for the rights, welfare, security and protection of its members.</p>', NULL, 1, '2023-02-20 07:01:30', '2023-02-22 08:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `content_types`
--

CREATE TABLE `content_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_types`
--

INSERT INTO `content_types` (`id`, `title`, `slug`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'welcome', '<h3>Optometry</h3>\r\n\r\n<p>The World Council of Optometry (WCO) defines optometry as &ldquo;A healthcare profession that is autonomous, educated and regulated (licensed/ registered), and optometrists are the primary healthcare practitioners of the eye and visual system who provide comprehensive eye and vision care, which includes refraction and dispensing, detection/diagnosis and management of disease in the eye, and the rehabilitation of conditions of the visual system.&ldquo;1</p>\r\n\r\n<h3>Optometry in Nepal</h3>\r\n\r\n<p>Optometry education began in Nepal in 1997 with the establishment of a Bachelor of Optometry program at the Institute of Medicine, Tribhuvan University.2;<br />\r\nSince the inception of the optometry program in Nepal, the growth in optometry is minimal due to several challenges. In many settings, the optometrist&#39;s role is poorly recognized and is limited to providing refraction services. The reason for the poor recognition could be that optometrists are not currently providing a full spectrum of specialty services such as low vision rehabilitation, contact lens, and occupational lens design largely due to a lack of resources.3<br />\r\nPerhaps, providing specialized services would enable wider recognition of optometry as an independent profession among other healthcare professionals and the general public. Specialized optometric services, besides refraction, can be provided to fellow optometrists through training and workshops. The professional body should take responsibility for introducing specialized optometric services so that the standard of eye care would be optimum for the general public.<br />\r\nThe Nepalese Association of Optometrists (NAO) should initiate specific Continuing Professional Development (CPD) for general optometrists so that new techniques can be gradually introduced in practice.&nbsp;</p>\r\n\r\n<h3>Nepalese Association of Optometrists (NAO)</h3>\r\n\r\n<p>Nepalese Association of Optometrists (NAO) was Established in 2004 AD, The Nepalese Association of Optometrists (NAO) is a not-for-profit NGO (Non-Governmental Organization) formed by the optometrist of Nepal. The Nepalese Association of Optometrists is registered as NGO in District Administration Office.</p>\r\n\r\n<h3>Scope of Optometric practice internationally</h3>\r\n\r\n<p>The scope of practice of the Optometry profession worldwide has continually evolved over the past centuries. The scope of practice in each nation can vary widely from that of its neighbors. The role of optometry in different countries is more variable than the roles of either ophthalmologists or opticians.</p>\r\n\r\n<p>Different disciplines have contributed to the development of Optometry&rsquo;s role in primary eye care, so today Optometrists diagnose, manage and treat a range of eye diseases and visual disorders, in addition to prescribing optical appliances such as spectacles and contact lenses.</p>\r\n\r\n<p>The role of Optometrists varies depending on local regulations. Optometrists in Australia, New Zealand, certain states of the USA, and the United Kingdom practice in a similar fashion. In many countries, Optometry is not a recognized profession with optical correction provided by Ophthalmic technicians or dispensing Opticians. In other countries such as regions of Europe, Optometry is restricted to the correction of refractive error and contact lens fitting, with Ophthalmology providing diagnosis and management of ocular pathology. However, Optometrists have expanded roles in some states of the USA and Canada where the scope of practice includes the prescription of oral medications, the delivery of laser procedures, and in a small number of states some minor surgical procedures (Harper et al. 2016; Kiely et al. 2017; Stein et al. 2018).&nbsp;</p>\r\n\r\n<p>In most countries, optometrists provide all the services except for surgery, foreign body removals, and treatment of disease with pharmaceutical drugs. Most optometrists, along with most ophthalmologists, provide vision therapy/orthoptics for the world. Optometry&#39;s role, as far as the use of diagnostic pharmaceuticals is concerned, is not as clear-cut. Only a few percent of responding countries&rsquo; optometrists use diagnostic pharmaceuticals. This scope of practice topic is still being debated in many countries. There appears to be a strong relationship between the likelihood of a profession being licensed/registered by a governmental agency and the responsibilities given to that profession.&nbsp;</p>\r\n\r\n<h3>Important Qualities for Optometrists</h3>\r\n\r\n<p>Decisionmaking skills: Optometrists must evaluate the results of a variety of diagnostic tests and decide on the best course of treatment for a patient.<br />\r\n<strong>Detail oriented:</strong> Optometrists must ensure that patients receive appropriate treatment and that medications and prescriptions are accurate. They must also monitor and record various pieces of information related to patient care.<br />\r\n<strong>Interpersonal skills:</strong> Optometrists spend most of their time examining patients, so they must be at ease interacting with patients and must make them feel comfortable during treatment.<br />\r\nSpeaking skills. Optometrists must clearly explain eye care instructions to their patients, as well as answer patients&#39; questions.</p>\r\n\r\n<h3>Duties of Optometrists</h3>\r\n\r\n<p>Optometrists typically do the following:</p>\r\n\r\n<ul>\r\n	<li>Perform vision tests and analyze results</li>\r\n	<li>Diagnose sight problems, such as nearsightedness or farsightedness, and eye diseases, such as glaucoma</li>\r\n	<li>Prescribe eyeglasses, contact lenses, and other visual aids, and if state law permits, medications</li>\r\n	<li>Perform minor surgical procedures to correct or treat visual or eye health issues</li>\r\n	<li>Provide treatments such as vision therapy or low-vision rehabilitation</li>\r\n	<li>Provide pre-and postoperative care to patients undergoing eye surgery&mdash;for example, examining a patient&#39;s eyes the day after surgery</li>\r\n	<li>Evaluate patients for the presence of other diseases and conditions, such as diabetes or hypertension, and refer patients to other healthcare providers as needed</li>\r\n	<li>Promote eye and general health by counseling patients</li>\r\n</ul>\r\n\r\n<h3>How to develop an adequate eye care workforce</h3>\r\n\r\n<p>To provide the world with the necessary eye care workforce, we need to do the following:</p>\r\n\r\n<ul>\r\n	<li>Governments need to recognize the optometry profession and legalize or regulate it as required.</li>\r\n	<li>More universities need to establish programs to train optometrists to support populations around the world.</li>\r\n	<li>Governments need to create a just working environment for optometrists with safe staffing levels and fair salaries.</li>\r\n	<li>Key members of eye-care teams should receive specific training to state and present the case for eye health succinctly.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>World Council of Optometry . Who is an optometrist? St. Louis, US.: [Google Scholar]</li>\r\n	<li>Kandel H, Murthy G, Bascaran C. Human resources for refraction services in Central Nepal. Clin Exp Optom. 2015;98(4):335&ndash;41. [PubMed] [Google Scholar]</li>\r\n	<li>Kandel H. Situational Analysis of Refractive Error Services in the Central Region of Nepal. London: University of London; 2013.</li>\r\n	<li>Bleything WB. A perspective on the international optometry scene. J Optom Ed 1990; 16:4.&nbsp;</li>\r\n	<li>Pickwell D. The challenges of international optometry. J Am Optom Assoc 1984; 55(9):659-64.</li>\r\n	<li>Baldwin WR. Optometry worldwide: an educator&#39;s perspective. J Am Optom Assoc 1984; 55(9):677-80.</li>\r\n</ol>', 1, NULL, '2023-02-20 07:01:30', '2023-05-01 02:10:45'),
(2, 'About Optometry', 'about-optometry', '<p><strong>History:</strong>&nbsp;Established in 2004, the Nepalese Association of Optometrists (NAO) is a not for profit national non government organization formed by the professionals in optometry from Nepal.</p>\r\n\r\n<p><strong>Registration:&nbsp;</strong>The association is formally registered to the chief district office of the government of Nepal. Constitution of NAO</p>\r\n\r\n<p><strong>Regulation:&nbsp;</strong>The regulating body for Nepalese Optometrists is Nepal Health Professionals Council (NHPC).</p>\r\n\r\n<p><a href=\"https://nhpc.gov.np/\" rel=\"nofollow\" target=\"_blank\">https://nhpc.gov.np/</a></p>\r\n\r\n<p><strong>Members:&nbsp;</strong>NAO has over 250 members dully registered so far. Membership can be general, affiliate or honorary</p>\r\n\r\n<p><strong>Role of NAO:</strong></p>\r\n\r\n<ul>\r\n	<li>representation of optometrists and their interests to government and other bodies;</li>\r\n	<li>practice management;</li>\r\n	<li>financial, marketing and legal services</li>\r\n	<li>information and services to the public</li>\r\n</ul>\r\n\r\n<p><strong>Executive Body of NAO:&nbsp;</strong>An 9 membered executive body is formed through Annual General Meeting (AGM) of the association. The body has a tenure of 3 &nbsp;years.</p>', 1, '0', '2023-04-24 21:22:24', '2023-04-25 05:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'NP', 'Nepal', '2023-02-20 07:01:29', '2023-02-20 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Bhojpur', 1, NULL, NULL),
(2, 'Dhankuta', 1, NULL, NULL),
(3, 'Ilam', 1, NULL, NULL),
(4, 'Jhapa', 1, NULL, NULL),
(5, 'Khotang', 1, NULL, NULL),
(6, 'Morang', 1, NULL, NULL),
(7, 'Okhaldhunga', 1, NULL, NULL),
(8, 'Panchthar', 1, NULL, NULL),
(9, 'Sankhuwasabha', 1, NULL, NULL),
(10, 'Solukhumbu', 1, NULL, NULL),
(11, 'Sunsari', 1, NULL, NULL),
(12, 'Taplejung', 1, NULL, NULL),
(13, 'Terhathum', 1, NULL, NULL),
(14, 'Udayapur', 1, NULL, NULL),
(15, 'Saptari', 2, NULL, NULL),
(16, 'Siraha', 2, NULL, NULL),
(17, 'Dhanusha', 2, NULL, NULL),
(18, 'Mahottari', 2, NULL, NULL),
(19, 'Sarlahi', 2, NULL, NULL),
(20, 'Bara', 2, NULL, NULL),
(21, 'Parsa', 2, NULL, NULL),
(22, 'Rautahat', 2, NULL, NULL),
(23, 'Sindhuli', 3, NULL, NULL),
(24, 'Ramechhap', 3, NULL, NULL),
(25, 'Dolakha', 3, NULL, NULL),
(26, 'Bhaktapur', 3, NULL, NULL),
(27, 'Dhading', 3, NULL, NULL),
(28, 'Kathmandu', 3, NULL, NULL),
(29, 'Kavrepalanchowk', 3, NULL, NULL),
(30, 'Lalitpur', 3, NULL, NULL),
(31, 'Nuwakot', 3, NULL, NULL),
(32, 'Rasuwa', 3, NULL, NULL),
(33, 'Sindhupalchok', 3, NULL, NULL),
(34, 'Chitwan', 3, NULL, NULL),
(35, 'Makwanpur', 3, NULL, NULL),
(36, 'Baglung', 4, NULL, NULL),
(37, 'Gorkha', 4, NULL, NULL),
(38, 'Kaski', 4, NULL, NULL),
(39, 'Lamjung', 4, NULL, NULL),
(40, 'Manang', 4, NULL, NULL),
(41, 'Mustang', 4, NULL, NULL),
(42, 'Myagdi', 4, NULL, NULL),
(43, 'Nawalpur', 4, NULL, NULL),
(44, 'Parbat', 4, NULL, NULL),
(45, 'Syangja', 4, NULL, NULL),
(46, 'Tanahun', 4, NULL, NULL),
(47, 'Kapilvastu', 5, NULL, NULL),
(48, 'Parasi', 5, NULL, NULL),
(49, 'Rupandehi', 5, NULL, NULL),
(50, 'Arghakhanchi', 5, NULL, NULL),
(51, 'Gulmi', 5, NULL, NULL),
(52, 'Palpa', 5, NULL, NULL),
(53, 'Dang', 5, NULL, NULL),
(54, 'Pyuthan', 5, NULL, NULL),
(55, 'Rolpa', 5, NULL, NULL),
(56, 'Eastern Rukum', 5, NULL, NULL),
(57, 'Banke', 5, NULL, NULL),
(58, 'Bardiya', 5, NULL, NULL),
(59, 'Western Rukum', 6, NULL, NULL),
(60, 'Salyan', 6, NULL, NULL),
(61, 'Dolpa', 6, NULL, NULL),
(62, 'Humla', 6, NULL, NULL),
(63, 'Jumla', 6, NULL, NULL),
(64, 'Kalikot', 6, NULL, NULL),
(65, 'Mugu', 6, NULL, NULL),
(66, 'Surkhet', 6, NULL, NULL),
(67, 'Dailekh', 6, NULL, NULL),
(68, 'Jajarkot', 6, NULL, NULL),
(69, 'Kailali', 7, NULL, NULL),
(70, 'Achham', 7, NULL, NULL),
(71, 'Doti', 7, NULL, NULL),
(72, 'Bajhang', 7, NULL, NULL),
(73, 'Bajura', 7, NULL, NULL),
(74, 'Kanchanpur', 7, NULL, NULL),
(75, 'Dadeldhura', 7, NULL, NULL),
(76, 'Baitadi', 7, NULL, NULL),
(77, 'Darchula', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `status`, `date`, `end_date`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(21, 'Workshop on customized Ocular Prosthesis', 'workshop-on-customized-ocular-prosthesis', 1, '2023-02-22', '2023-02-22', 'Workshop on customized Ocular Prosthesis', 'Workshop on customized Ocular Prosthesis', NULL, '<p>A two days workshop was organized by Nepalese Association of Optometrist in collaboration with Drishti Eye centre Kalanki.&nbsp;</p>\r\n\r\n<p>Twenty four participants received a two days hands on training on customized ocular prostheis.</p>', 'uploads/events/4b2f97102155889555eca06c3faed84b.jpg', '2023-02-22 06:12:06', '2023-02-22 06:12:06'),
(22, 'Contact lens workshop', 'contact-lens-workshop', 1, '2023-02-22', '2023-02-22', 'Two day contact lens workshop was jointly organized by NAO and B.P. Koirala Lions Centre for Ophthalmic Studies', 'Two day contact lens workshop was jointly organized by NAO and B.P. Koirala Lions Centre for Ophthalmic Studies', NULL, '<p>A two day contact lens workshop was jointly organized by Nepalese Association of Optometrists and B.P. Koirala Lions Centre for Ophthalmic Studies in association with Bausch+ Lomb on 26th and 27th Nov 2019. Total of 70 optometry students and optometrist from different hospitals attended the session and hands on training regarding recent advancements in contact lens.</p>', 'uploads/events/2f6ae3632fd15120b3a68cb981e6df38.jpg', '2023-02-22 06:55:12', '2023-02-22 06:55:12'),
(23, '15th Annual General Meeting Concluded', '15th-annual-general-meeting-concluded', 1, '2023-02-22', '2023-02-22', '15th Annual General Meeting Concluded', '15th Annual General Meeting Concluded', NULL, '<p>Recently 15<sup>th</sup>&nbsp;&nbsp;Annual General Meeting(AGM) was held at Moonlight Cafe. The meeting was chaired by President Sanjeeb Kumar Mishra where Nepal Health Professional Council(NHPC) Chairman was our Chief guest.&nbsp; The general activities of the Association was presented by Secretary Dr. Gyan Bahadur Basnet while Treasurer Niraj Dev Joshi presented the financial activities of&nbsp; the Association.</p>\r\n\r\n<p>The AGM elected new executive committe&nbsp; for next three years. The newly formed body is as follows.</p>\r\n\r\n<p>President: Niraj Dev Joshi</p>\r\n\r\n<p>Vice President: Prithivi Thapaliya</p>\r\n\r\n<p>Secretary: Gyan Bahadur Basnet</p>\r\n\r\n<p>Treasurer: Junu Shrestha</p>\r\n\r\n<p>Joint Secretary: Mukesh Kumar Jha</p>\r\n\r\n<p>Members:</p>\r\n\r\n<p>Amit K.C.</p>\r\n\r\n<p>Pankaj Ray Adhikari</p>\r\n\r\n<p>Prateeva Devkota</p>\r\n\r\n<p>Hira Nath Dahal</p>\r\n\r\n<p>We Congratulate and Wish Successful tenure for the elected committee.&nbsp;</p>', 'uploads/events/554bfe5308313b544fd19d537e5f4451.jpg', '2023-02-22 06:56:18', '2023-02-22 06:57:05'),
(24, '2nd Continuing Optometry Education (COE) on Advancing Optics and Ophthalmic Dispensing', '2nd-continuing-optometry-education-coe-on-advancing-optics-and-ophthalmic-dispensing', 1, '2023-02-22', '2023-02-22', '2nd Continuing Optometry Education (COE) on Advancing Optics and Ophthalmic Dispensing', '2nd Continuing Optometry Education (COE) on Advancing Optics and Ophthalmic Dispensing', NULL, '<p>NAO is organising second COE and sharing of advancement in the field of optics and ophthalmic dispensing. Presentations &nbsp;will cover various practical aspects of dispensing. We are honoured to have Chairman Of <strong>Nepal Netra Jyoti Sangh</strong><em> Prof. Dr. Tirtha Prasad Mishra</em> as Chief Guest. The program will also be attended by represetatives of&nbsp;<strong>Nepal Health Professional Council and Apex body for Eye Health.&nbsp;</strong></p>\r\n\r\n<p>We request all the members of NAO to present at the program to share our knowledge and views on the different topics. The program is on 9th July 2016 saturday &nbsp;in Moon Light Cafe and Party Palace ,Dhumbarahi Chowk. Please call 9841406785 regarding any queries. Thank you.</p>\r\n\r\n<p>Organising Comittee</p>\r\n\r\n<p>2<sup>nd </sup>COE</p>', 'uploads/events/a4584bf50f4264d970201d5bf685c964.jpg', '2023-02-22 07:12:24', '2023-02-22 07:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `f_r_a_f_s`
--

CREATE TABLE `f_r_a_f_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_r_a_f_s`
--

INSERT INTO `f_r_a_f_s` (`id`, `title`, `slug`, `status`, `date`, `end_date`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Magnam aliquam officiis deleniti ad est delectus.', 'et-saepe-ea-quod-cum-quibusdam', 1, '2014-10-17', '1996-06-26', 'Incidunt magni ab assumenda quasi non vitae ipsam et.', 'Consequatur et et illum fugit.', 'Omnis quaerat in voluptas non fuga pariatur.', 'Voluptas quo laborum vel similique omnis numquam.', 'https://via.placeholder.com/640x480.png/003333?text=voluptatem', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(2, 'Aut repellendus sunt reiciendis molestiae perferendis sed sit impedit.', 'dolorem-fugit-consequatur-omnis-autem-ut-ipsa', 0, '2017-07-29', '1992-06-05', 'Qui maxime fugiat dolor illo sed autem.', 'Consequatur nemo quasi mollitia inventore aut earum ipsum.', 'Perferendis aut natus et in inventore libero exercitationem voluptatem.', 'Voluptatem qui qui quas neque.', 'https://via.placeholder.com/640x480.png/0011ff?text=ex', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(3, 'Quibusdam beatae aut sit sint eos.', 'quae-aut-veniam-ut-quia-expedita-sed-delectus', 1, '2013-04-03', '2003-04-25', 'Vero corporis in quae maiores facere voluptas aliquid.', 'Debitis et dolorem totam.', 'Aspernatur beatae enim sed rerum aut ipsa.', 'Asperiores consequatur distinctio amet.', 'https://via.placeholder.com/640x480.png/00ffdd?text=voluptates', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(4, 'A rerum quae et nihil.', 'aperiam-quaerat-nesciunt-voluptates-nihil-ut-dolorem-incidunt', 1, '1985-07-05', '2013-07-16', 'Consequatur voluptatum quibusdam et neque ea molestiae eaque.', 'Eum sed voluptatem nisi dolorem.', 'Vero et minus reiciendis qui.', 'Sint ab odit et distinctio omnis quo.', 'https://via.placeholder.com/640x480.png/004499?text=ut', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(5, 'Nesciunt quasi et quas qui.', 'voluptate-sapiente-quod-non', 0, '1970-05-23', '1992-08-31', 'Vitae est nemo commodi iusto.', 'Quia eaque voluptas laudantium aspernatur harum.', 'Ut sequi possimus et adipisci veritatis earum.', 'Quos ut quis reprehenderit consectetur.', 'https://via.placeholder.com/640x480.png/0000aa?text=voluptatibus', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(6, 'Enim dolorem et nulla architecto est fugiat.', 'eligendi-nihil-impedit-ea-vitae', 1, '2000-01-06', '1986-06-07', 'Itaque adipisci quo blanditiis deleniti asperiores.', 'Sequi velit modi ab quis in ea.', 'Dolorem maiores aliquam quia officia.', 'Et expedita eaque dolores aut aut sed recusandae dicta.', 'https://via.placeholder.com/640x480.png/006699?text=natus', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(7, 'Aut modi nam dolor quae eum officia explicabo.', 'iusto-magnam-mollitia-et-voluptatem-quisquam-natus', 0, '2008-06-03', '2022-05-07', 'Qui quia ut id incidunt ipsa et voluptatibus illo.', 'Qui eum blanditiis odio qui explicabo eaque.', 'Hic suscipit molestiae eius consequatur commodi consectetur rerum.', 'Dolorem animi maxime repudiandae est nesciunt voluptas explicabo cupiditate.', 'https://via.placeholder.com/640x480.png/00aa77?text=hic', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(8, 'Molestias laboriosam expedita repellat veritatis.', 'ab-recusandae-possimus-ut-optio-doloribus-et', 1, '2005-08-01', '1995-12-02', 'Vero et est omnis omnis est.', 'Autem provident doloremque nam ad nam eos quia.', 'Molestiae atque qui aut ducimus.', 'Dolore odio neque nulla.', 'https://via.placeholder.com/640x480.png/00aa55?text=qui', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(9, 'Iusto illo doloremque dolorum beatae voluptate in.', 'accusantium-iste-et-dolorem-eveniet-animi-voluptatibus-unde', 0, '2003-12-21', '1985-10-23', 'Non est sunt quia numquam.', 'Corrupti ut qui molestiae aut dolorum asperiores quae.', 'Quos corrupti qui porro sunt.', 'Ea rerum dolores et minima porro quas.', 'https://via.placeholder.com/640x480.png/00ee66?text=repudiandae', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(10, 'Corrupti quis dignissimos quasi velit magni enim.', 'quae-sed-ea-nobis-autem-perspiciatis-tempora-at-ipsum', 0, '1997-05-07', '2008-08-31', 'Repudiandae id minus eum sit quis quos.', 'Qui accusantium repellat sint dicta.', 'At quidem sed recusandae velit qui.', 'Ipsam officia et veritatis aliquid voluptatem.', 'https://via.placeholder.com/640x480.png/0066cc?text=iusto', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(11, 'Labore illum deleniti nemo cumque necessitatibus.', 'et-sint-minus-sit-ratione', 1, '1974-12-28', '1998-07-14', 'Enim beatae sequi velit et est.', 'Sed dolorum quia a excepturi.', 'Id sed sed dignissimos tenetur.', 'Voluptate vitae dolorem vero odit.', 'https://via.placeholder.com/640x480.png/00dddd?text=culpa', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(12, 'Inventore cumque omnis in aut ut rem quo.', 'accusantium-natus-ut-non-ut-nisi-quasi-ab-tempora', 0, '2017-11-26', '2012-01-04', 'Aut iste tempore nihil eum harum vero quis a.', 'Facilis qui ratione quia.', 'Rerum et pariatur magni.', 'Quisquam et omnis iusto consequatur eos.', 'https://via.placeholder.com/640x480.png/00ddff?text=consequatur', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(13, 'Ullam corporis ullam eligendi reprehenderit.', 'sunt-quos-unde-explicabo-et', 1, '1986-06-25', '2014-06-17', 'Ad amet qui aliquam beatae accusamus.', 'Quis voluptate aut sed rerum.', 'Mollitia temporibus corrupti aut.', 'Et aliquid aut perferendis omnis.', 'https://via.placeholder.com/640x480.png/000033?text=dolores', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(14, 'Et voluptatibus praesentium sit modi.', 'neque-eum-et-libero-minus-maxime-exercitationem-et-est', 0, '1987-09-07', '2016-12-16', 'Exercitationem perferendis est voluptas aut et.', 'Facilis est consequatur architecto dignissimos non ut quia.', 'Voluptatum aut quasi delectus sed ut.', 'Consequatur dignissimos enim ea et tenetur quos corrupti inventore.', 'https://via.placeholder.com/640x480.png/006655?text=amet', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(15, 'Animi quisquam ex esse asperiores quis.', 'molestiae-non-temporibus-repellat-est-veniam-voluptatibus-mollitia', 0, '1979-05-29', '1983-02-19', 'Fugit quis enim quia qui ducimus.', 'Id expedita ex nam animi vero earum.', 'Voluptas et saepe voluptatem.', 'Quo eum facere optio voluptas rem eius.', 'https://via.placeholder.com/640x480.png/009900?text=ut', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(16, 'Quo occaecati in praesentium eaque consequatur minus.', 'minima-ut-sunt-ducimus-sed-ipsum-beatae-voluptates-voluptatem', 0, '2004-01-03', '2012-08-24', 'Aut accusamus quibusdam tempore.', 'Ea ipsam ipsa quos illum odio cupiditate sed.', 'Beatae minima praesentium rerum sit cum.', 'Excepturi id provident molestiae magni placeat.', 'https://via.placeholder.com/640x480.png/004466?text=quo', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(17, 'Pariatur ad a occaecati culpa velit.', 'ut-molestiae-ut-at-et', 0, '1993-02-23', '1981-05-25', 'Qui dolor voluptatem sed est saepe enim.', 'Odio rem quis et suscipit sint veniam repudiandae.', 'Consequuntur vitae veritatis soluta labore tenetur.', 'Non quia quo quia autem mollitia dolor magni.', 'https://via.placeholder.com/640x480.png/005500?text=dolores', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(18, 'Et voluptate id voluptatum.', 'autem-tempore-dolores-esse-et-recusandae-qui-in', 1, '1980-06-30', '1972-05-31', 'Est et nisi ipsa culpa aut occaecati modi aperiam.', 'Sit quia ipsum illo non possimus autem.', 'Provident ut nulla odit esse eligendi est.', 'Repellat delectus dolorum rerum ut voluptatem veniam.', 'https://via.placeholder.com/640x480.png/009900?text=qui', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(19, 'Consequatur aut accusantium cum reprehenderit saepe.', 'fugit-corrupti-delectus-eum-voluptas', 0, '1984-10-06', '2006-07-31', 'Aut hic maiores aperiam quis molestiae quia sunt.', 'Amet autem quidem amet aut iste.', 'Et natus fuga omnis cupiditate ipsa quibusdam velit.', 'Expedita consectetur quidem sit quisquam voluptatem.', 'https://via.placeholder.com/640x480.png/00ff00?text=corporis', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(20, 'Deleniti qui id et natus.', 'ratione-voluptatem-illo-accusantium-reiciendis-esse', 0, '1995-05-03', '2012-08-20', 'Eius odio consectetur ut et.', 'Officia provident asperiores nemo molestias nesciunt.', 'Sequi ipsa eum et molestiae sit qui.', 'Molestiae sit saepe eius.', 'https://via.placeholder.com/640x480.png/0022dd?text=error', '2023-02-20 07:01:29', '2023-02-20 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Events by NAO', 'events-by-nao', 0, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(2, 'test', 'test', 0, '2023-05-01 03:37:39', '2023-05-01 03:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `image_name`, `gallery_id`, `created_at`, `updated_at`) VALUES
(1, 'uploads/gallery/696740779f0ecac00fbc9d0fbdff3e3f.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(2, 'uploads/gallery/17ec05d4681fb0926de5ddd707366a0b.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(3, 'uploads/gallery/4dc2960c484694212c4af14a1151c890.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(4, 'uploads/gallery/86e0809f13ed656a3f5eea24bda5372e.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(5, 'uploads/gallery/cbe91714f87ba2b1a8ab46e6fa2d6799.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(6, 'uploads/gallery/948bf36445bf658cd6610799d13f564c.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(7, 'uploads/gallery/895e80be7613478cda43232a74dde01d.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(8, 'uploads/gallery/747e304524a1d56af08e21cacc3a4472.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(9, 'uploads/gallery/54c822331ec1069bd264cc18210c0588.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(10, 'uploads/gallery/f2087b539d96971c13424caadac5ea92.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(11, 'uploads/gallery/f3dc5ecaad605cc1e8d0d8ecae76689d.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(12, 'uploads/gallery/ff1e0a0c533b10f2f0dd1be782744825.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(13, 'uploads/gallery/0ba94b180d971371b91659407617e93b.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(14, 'uploads/gallery/0d2c6b5c6bcd8f7da8d38caad5687345.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(15, 'uploads/gallery/4e329ccb0dc63f7b0a40320393431f24.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(16, 'uploads/gallery/7f5fae14eb2cdff529c967e2b2b7cebc.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(17, 'uploads/gallery/42bbb6f4a95a4e846221af93f9869bc5.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(18, 'uploads/gallery/d6cec7deffcc90a75ee119625f353296.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11'),
(19, 'uploads/gallery/a57ea51d5e5a8941f7f968630f6b0523.jpg', 1, '2023-02-22 08:59:11', '2023-02-22 08:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `membership_types`
--

CREATE TABLE `membership_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_types`
--

INSERT INTO `membership_types` (`id`, `type`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yearly', 1000, '', 1, '2023-02-20 07:01:30', '2023-02-20 07:01:30'),
(2, 'Life time	', 10000, '', 1, '2023-02-20 07:01:30', '2023-02-20 07:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `order`, `url`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 1, 'home', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:14:40'),
(2, 'About us', 'about-us', 2, 'about-us', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:14:51'),
(3, 'Activities', 'activities', 3, 'activities', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:15:18'),
(4, 'Publication', 'publication', 4, 'publication', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:15:28'),
(5, 'Conference', 'conference', 5, 'conference', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:15:39'),
(6, 'Our Projects', 'our-projects', 6, 'conference', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:15:52'),
(7, 'Awards', 'awards', 7, 'conference', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:16:06'),
(8, 'Financial Reports & Funding', 'financial-reports-funding', 8, 'financial-reports-funding', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:16:26'),
(9, 'Gallery', 'gallery', 9, 'gallery', NULL, 1, '2023-02-20 07:01:29', '2023-04-24 21:16:35'),
(10, 'Video', 'video', 10, 'video', NULL, 0, '2023-02-20 07:01:29', '2023-04-24 21:16:46'),
(11, 'rewards', 'rewards', 11, 'rewards', '', 0, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(12, 'Travel Grant ', 'travel-grant', 12, 'travel-grant ', '', 0, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(13, 'Events', 'events', 13, 'events', NULL, 0, '2023-02-22 07:47:53', '2023-02-22 07:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_06_03_171456_create_settings_table', 1),
(3, '2022_07_08_161136_create_content_types_table', 1),
(4, '2022_07_08_161150_create_contents_table', 1),
(5, '2022_07_10_041416_create_news_table', 1),
(6, '2022_09_15_054722_create_admins_table', 1),
(7, '2022_09_15_140000_create_admin_galleries_table', 1),
(8, '2022_09_30_183134_create_f_r_a_f_s_table', 1),
(9, '2023_02_04_034254_create_menus_table', 1),
(10, '2023_02_04_060100_create_abouts_table', 1),
(11, '2023_02_04_081754_create_events_table', 1),
(12, '2023_02_06_070906_create_publications_table', 1),
(13, '2023_02_06_070921_create_publication_files_table', 1),
(14, '2023_02_12_143155_create_banners_table', 1),
(15, '2023_02_13_031047_create_countries_table', 1),
(16, '2023_02_13_031146_create_provinces_table', 1),
(17, '2023_02_13_031218_create_districts_table', 1),
(18, '2023_02_13_031244_create_municipalities_table', 1),
(19, '2023_02_13_074700_create_projects_table', 1),
(20, '2023_02_13_085956_create_activities_table', 1),
(21, '2023_02_13_093120_create_awards_table', 1),
(22, '2023_02_13_095411_create_conferences_table', 1),
(23, '2023_02_13_095429_create_conference_forms_table', 1),
(24, '2023_02_13_121456_create_membership_types_table', 1),
(25, '2023_02_14_054730_create_users_table', 1),
(26, '2023_02_14_062644_create_user_addresses_table', 1),
(27, '2023_02_14_072433_create_user_documents_table', 1),
(28, '2023_02_14_112300_create_partners_table', 1),
(29, '2023_02_14_141351_create_rewards_table', 1),
(30, '2023_02_19_185912_create_travel_grants_table', 1),
(31, '2023_02_19_190034_create_travel_grant_forms_table', 1),
(32, '2023_02_19_192949_create_user_payments_table', 1),
(33, '2023_03_14_235943_create_galleries_table', 1),
(34, '2023_03_14_235953_create_gallery_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipality_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `municipality_name`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Aamargadhi', 75, NULL, NULL),
(2, 'Aathabis', 67, NULL, NULL),
(3, 'Aathabiskot', 59, NULL, NULL),
(4, 'Arjundhara', 4, NULL, NULL),
(5, 'Aurahi', 18, NULL, NULL),
(6, 'Badimalika', 73, NULL, NULL),
(7, 'Bagchaur', 60, NULL, NULL),
(8, 'Baglung', 36, NULL, NULL),
(9, 'Bagmati', 19, NULL, NULL),
(10, 'Bahudarmai', 21, NULL, NULL),
(11, 'Balara', 19, NULL, NULL),
(12, 'Balawa', 18, NULL, NULL),
(13, 'Banepa', 29, NULL, NULL),
(14, 'Bangad Kupinde', 60, NULL, NULL),
(15, 'Banganga', 47, NULL, NULL),
(16, 'Bansgadhi', 58, NULL, NULL),
(17, 'Barahachhetra', 11, NULL, NULL),
(18, 'Barahathawa', 19, NULL, NULL),
(19, 'Barbardiya', 58, NULL, NULL),
(20, 'Bardghat', 48, NULL, NULL),
(21, 'Bardibas', 18, NULL, NULL),
(22, 'Barhabise', 33, NULL, NULL),
(23, 'Baudhimai', 22, NULL, NULL),
(24, 'Bedkot', 74, NULL, NULL),
(25, 'Belaka', 14, NULL, NULL),
(26, 'Belauri', 74, NULL, NULL),
(27, 'Belbaari', 6, NULL, NULL),
(28, 'Belkotgadhi', 31, NULL, NULL),
(29, 'Beni', 42, NULL, NULL),
(30, 'Besishahar', 39, NULL, NULL),
(31, 'Bhadrapur', 4, NULL, NULL),
(32, 'Bhajani', 69, NULL, NULL),
(33, 'Bhaktapur', 26, NULL, NULL),
(34, 'Bhangaha', 18, NULL, NULL),
(35, 'Bhanu', 46, NULL, NULL),
(36, 'Bharatpur', 34, NULL, NULL),
(37, 'Bheemdatta', 74, NULL, NULL),
(38, 'Bheerkot', 45, NULL, NULL),
(39, 'Bheri', 68, NULL, NULL),
(40, 'Bheriganga', 66, NULL, NULL),
(41, 'Bhimad', 46, NULL, NULL),
(42, 'Bhimeshwar', 25, NULL, NULL),
(43, 'Bhojpur', 1, NULL, NULL),
(44, 'Bhumikasthan', 50, NULL, NULL),
(45, 'Bideha', 17, NULL, NULL),
(46, 'Bidur', 31, NULL, NULL),
(47, 'Biratnagar', 6, NULL, NULL),
(48, 'Birendranagar', 66, NULL, NULL),
(49, 'Birgunj', 21, NULL, NULL),
(50, 'Birtamod', 4, NULL, NULL),
(51, 'Bode Barsain', 15, NULL, NULL),
(52, 'Brindaban', 22, NULL, NULL),
(53, 'Buddhabhumi', 47, NULL, NULL),
(54, 'Budhanilkantha', 28, NULL, NULL),
(55, 'Budhiganga', 73, NULL, NULL),
(56, 'Budhinanda', 73, NULL, NULL),
(57, 'Bungal', 72, NULL, NULL),
(58, 'Butwal', 49, NULL, NULL),
(59, 'Chainpur', 9, NULL, NULL),
(60, 'Chamunda Bindrasaini', 67, NULL, NULL),
(61, 'Chandannath', 63, NULL, NULL),
(62, 'Chandragiri', 28, NULL, NULL),
(63, 'Chandrapur', 22, NULL, NULL),
(64, 'Changunarayan', 26, NULL, NULL),
(65, 'Chapakot', 45, NULL, NULL),
(66, 'Chaudandigadhi', 14, NULL, NULL),
(67, 'Chaurjahari', 59, NULL, NULL),
(68, 'Chautara Sangachowkgadhi', 33, NULL, NULL),
(69, 'Chhayanath Rara', 65, NULL, NULL),
(70, 'Chhedagad', 68, NULL, NULL),
(71, 'Dakneshwari', 15, NULL, NULL),
(72, 'Damak', 4, NULL, NULL),
(73, 'Dasharath Chand', 76, NULL, NULL),
(74, 'Daxinkaali', 28, NULL, NULL),
(75, 'Deumai', 3, NULL, NULL),
(76, 'Devchuli', 43, NULL, NULL),
(77, 'Devdaha', 49, NULL, NULL),
(78, 'Dewahi Gonahi', 22, NULL, NULL),
(79, 'Dhangadhi', 69, NULL, NULL),
(80, 'Dhangadimai', 16, NULL, NULL),
(81, 'Dhankuta', 2, NULL, NULL),
(82, 'Dhanushadham', 17, NULL, NULL),
(83, 'Dharan', 11, NULL, NULL),
(84, 'Dharmadevi', 9, NULL, NULL),
(85, 'Dhorpatan', 36, NULL, NULL),
(86, 'Dhulikhel', 29, NULL, NULL),
(87, 'Dhunibeshi', 27, NULL, NULL),
(88, 'Diktel Rupakot Majuwagadhi', 5, NULL, NULL),
(89, 'Dipayal Silgadhi', 71, NULL, NULL),
(90, 'Dudhauli', 23, NULL, NULL),
(91, 'Duhabi', 11, NULL, NULL),
(92, 'Dullu', 67, NULL, NULL),
(93, 'Gadhimai', 22, NULL, NULL),
(94, 'Gaindakot', 43, NULL, NULL),
(95, 'Galkot', 36, NULL, NULL),
(96, 'Galyang', 45, NULL, NULL),
(97, 'Ganeshman Charnath', 17, NULL, NULL),
(98, 'Garuda', 22, NULL, NULL),
(99, 'Gaur', 22, NULL, NULL),
(100, 'Gauradaha', 4, NULL, NULL),
(101, 'Gauriganga', 69, NULL, NULL),
(102, 'Gaushala', 18, NULL, NULL),
(103, 'Ghodaghodi', 69, NULL, NULL),
(104, 'Ghorahi', 53, NULL, NULL),
(105, 'Godaita', 19, NULL, NULL),
(106, 'Godawari', 30, NULL, NULL),
(107, 'Godawari, Seti', 69, NULL, NULL),
(108, 'Gokarneshwor', 28, NULL, NULL),
(109, 'Golbazar', 16, NULL, NULL),
(110, 'Gorkha', 37, NULL, NULL),
(111, 'Gujara', 22, NULL, NULL),
(112, 'Gulariya', 58, NULL, NULL),
(113, 'Gurbhakot', 66, NULL, NULL),
(114, 'Halesi Tuwachung', 5, NULL, NULL),
(115, 'Hansapur', 17, NULL, NULL),
(116, 'Hanumannagar Kankalini', 15, NULL, NULL),
(117, 'Haripur', 19, NULL, NULL),
(118, 'Haripurwa', 19, NULL, NULL),
(119, 'Hariwan', 19, NULL, NULL),
(120, 'Hetauda', 35, NULL, NULL),
(121, 'Ilam', 3, NULL, NULL),
(122, 'Inaruwa', 11, NULL, NULL),
(123, 'Ishnath', 22, NULL, NULL),
(124, 'Ishworpur', 19, NULL, NULL),
(125, 'Itahari', 11, NULL, NULL),
(126, 'Jaimini', 36, NULL, NULL),
(127, 'Jaleshwar', 18, NULL, NULL),
(128, 'Janakpur', 17, NULL, NULL),
(129, 'Jaya Prithvi', 72, NULL, NULL),
(130, 'Jiri', 25, NULL, NULL),
(131, 'Jitpur Simara', 20, NULL, NULL),
(132, 'Kabilasi', 19, NULL, NULL),
(133, 'Kageshwori Manohara', 28, NULL, NULL),
(134, 'Kalaiya', 20, NULL, NULL),
(135, 'Kalika', 34, NULL, NULL),
(136, 'Kalyanpur', 16, NULL, NULL),
(137, 'Kamala', 17, NULL, NULL),
(138, 'Kamalamai', 23, NULL, NULL),
(139, 'Kamalbazar', 70, NULL, NULL),
(140, 'Kanchanrup', 15, NULL, NULL),
(141, 'Kankai', 4, NULL, NULL),
(142, 'Kapilvastu', 47, NULL, NULL),
(143, 'Karjanha', 16, NULL, NULL),
(144, 'Katahariya', 22, NULL, NULL),
(145, 'Katari', 14, NULL, NULL),
(146, 'Kathmandu', 28, NULL, NULL),
(147, 'Kawasoti', 43, NULL, NULL),
(148, 'Khadak', 15, NULL, NULL),
(149, 'Khairhani', 34, NULL, NULL),
(150, 'Khandachakra', 64, NULL, NULL),
(151, 'Khandbari', 9, NULL, NULL),
(152, 'Kirtipur', 28, NULL, NULL),
(153, 'Kohalpur', 57, NULL, NULL),
(154, 'Kolhabi', 20, NULL, NULL),
(155, 'Krishnanagar', 47, NULL, NULL),
(156, 'Krishnapur', 74, NULL, NULL),
(157, 'Kshireshwor Nath', 17, NULL, NULL),
(158, 'Kushma', 44, NULL, NULL),
(159, 'Lahan', 16, NULL, NULL),
(160, 'Lalbandi', 19, NULL, NULL),
(161, 'Laligurans', 13, NULL, NULL),
(162, 'Lalitpur', 30, NULL, NULL),
(163, 'Lamahi', 53, NULL, NULL),
(164, 'Lamki Chuha', 69, NULL, NULL),
(165, 'Lekbeshi', 66, NULL, NULL),
(166, 'Letang', 6, NULL, NULL),
(167, 'Loharpatti', 18, NULL, NULL),
(168, 'Lumbini Sanskritik', 49, NULL, NULL),
(169, 'Madhav Narayan', 22, NULL, NULL),
(170, 'Madhuwan', 58, NULL, NULL),
(171, 'Madhya Nepal', 39, NULL, NULL),
(172, 'Madhyabindu', 43, NULL, NULL),
(173, 'Madhyapur Thimi', 26, NULL, NULL),
(174, 'Madi', 34, NULL, NULL),
(175, 'Madi', 9, NULL, NULL),
(176, 'Mahagadhimai', 20, NULL, NULL),
(177, 'Mahakali', 77, NULL, NULL),
(178, 'Mahakali', 74, NULL, NULL),
(179, 'Mahalaxmi', 2, NULL, NULL),
(180, 'Mahalaxmi', 30, NULL, NULL),
(181, 'Maharajgunj', 47, NULL, NULL),
(182, 'Mai', 3, NULL, NULL),
(183, 'Malangwa', 19, NULL, NULL),
(184, 'Manara Shisawa', 18, NULL, NULL),
(185, 'Mandandeupur', 29, NULL, NULL),
(186, 'Mangalsen', 70, NULL, NULL),
(187, 'Manthali', 24, NULL, NULL),
(188, 'Matihani', 18, NULL, NULL),
(189, 'Maulapur', 22, NULL, NULL),
(190, 'Mechinagar', 4, NULL, NULL),
(191, 'Melamchi', 33, NULL, NULL),
(192, 'Melauli', 76, NULL, NULL),
(193, 'Mirchaiya', 16, NULL, NULL),
(194, 'Mithila', 17, NULL, NULL),
(195, 'Mithila Bihari', 17, NULL, NULL),
(196, 'Musikot', 51, NULL, NULL),
(197, 'Musikot', 59, NULL, NULL),
(198, 'Myanglung', 13, NULL, NULL),
(199, 'Nagarain', 17, NULL, NULL),
(200, 'Nagarjun', 28, NULL, NULL),
(201, 'Nalgad', 68, NULL, NULL),
(202, 'Namobuddha', 29, NULL, NULL),
(203, 'Narayan', 67, NULL, NULL),
(204, 'Nepalgunj', 57, NULL, NULL),
(205, 'Nijgadh', 20, NULL, NULL),
(206, 'Nilkantha', 27, NULL, NULL),
(207, 'Pachrauta', 20, NULL, NULL),
(208, 'Pakhribas', 2, NULL, NULL),
(209, 'Palungtar', 37, NULL, NULL),
(210, 'Panchadewal Binayak', 70, NULL, NULL),
(211, 'Panchapuri', 66, NULL, NULL),
(212, 'Panchkhal', 29, NULL, NULL),
(213, 'Panchkhapan', 9, NULL, NULL),
(214, 'Parashuram', 75, NULL, NULL),
(215, 'Paroha', 22, NULL, NULL),
(216, 'Parsagadhi', 21, NULL, NULL),
(217, 'Patan', 76, NULL, NULL),
(218, 'Pathari Shanischare', 6, NULL, NULL),
(219, 'Paunauti', 29, NULL, NULL),
(220, 'Phalewas', 44, NULL, NULL),
(221, 'Phatuwa Bijayapur', 22, NULL, NULL),
(222, 'Phidim', 8, NULL, NULL),
(223, 'Phungling', 12, NULL, NULL),
(224, 'Pokhara', 38, NULL, NULL),
(225, 'Pokhariya', 21, NULL, NULL),
(226, 'Punarbas', 74, NULL, NULL),
(227, 'Purchaundi', 76, NULL, NULL),
(228, 'Putalibaazar', 45, NULL, NULL),
(229, 'Pyuthan', 54, NULL, NULL),
(230, 'Rainas', 39, NULL, NULL),
(231, 'Rajapur', 58, NULL, NULL),
(232, 'Rajbiraj', 15, NULL, NULL),
(233, 'Rajdevi', 22, NULL, NULL),
(234, 'Rajpur', 22, NULL, NULL),
(235, 'Ramdhuni', 11, NULL, NULL),
(236, 'Ramechhap', 24, NULL, NULL),
(237, 'Ramgopalpur', 18, NULL, NULL),
(238, 'Ramgram', 48, NULL, NULL),
(239, 'Rampur', 52, NULL, NULL),
(240, 'Rangeli', 6, NULL, NULL),
(241, 'Rapti', 34, NULL, NULL),
(242, 'Raskot', 64, NULL, NULL),
(243, 'Ratnanagar', 34, NULL, NULL),
(244, 'Ratuwamai', 6, NULL, NULL),
(245, 'Resunga', 51, NULL, NULL),
(246, 'Ropla', 55, NULL, NULL),
(247, 'Sabaila', 17, NULL, NULL),
(248, 'Sainamaina', 49, NULL, NULL),
(249, 'Sandhikharka', 50, NULL, NULL),
(250, 'Saphebagar', 70, NULL, NULL),
(251, 'Saptakoshi', 15, NULL, NULL),
(252, 'Shaarda', 60, NULL, NULL),
(253, 'Shadanand', 1, NULL, NULL),
(254, 'Shahidnagar', 17, NULL, NULL),
(255, 'Shailyashikhar', 77, NULL, NULL),
(256, 'Shambhunath', 15, NULL, NULL),
(257, 'Shankharapur', 28, NULL, NULL),
(258, 'Shikhar', 71, NULL, NULL),
(259, 'Shiva Sataxi', 4, NULL, NULL),
(260, 'Shivaraj', 47, NULL, NULL),
(261, 'Shuklagandaki', 46, NULL, NULL),
(262, 'Shuklaphanta', 74, NULL, NULL),
(263, 'Siddharthanagar', 49, NULL, NULL),
(264, 'Siddhicharan', 7, NULL, NULL),
(265, 'Simraungadh', 20, NULL, NULL),
(266, 'Siraha', 16, NULL, NULL),
(267, 'Sitganga', 50, NULL, NULL),
(268, 'Solu Dudhkunda', 10, NULL, NULL),
(269, 'Sukhipur', 16, NULL, NULL),
(270, 'Sunawarshi', 6, NULL, NULL),
(271, 'Sundar Haraincha', 6, NULL, NULL),
(272, 'Sundarbazar', 39, NULL, NULL),
(273, 'Sunwal', 48, NULL, NULL),
(274, 'Surunga', 15, NULL, NULL),
(275, 'Suryabinayak', 26, NULL, NULL),
(276, 'Suryodaya', 3, NULL, NULL),
(277, 'Swargadwari', 54, NULL, NULL),
(278, 'Tansen', 52, NULL, NULL),
(279, 'Tarakeshor', 28, NULL, NULL),
(280, 'Thaha', 35, NULL, NULL),
(281, 'Thakurbaba', 58, NULL, NULL),
(282, 'Thuli Bheri', 61, NULL, NULL),
(283, 'Tikapur', 69, NULL, NULL),
(284, 'Tilagufa', 64, NULL, NULL),
(285, 'Tilottama', 49, NULL, NULL),
(286, 'Tokha', 28, NULL, NULL),
(287, 'Tribeni', 73, NULL, NULL),
(288, 'Tripura Sundari', 61, NULL, NULL),
(289, 'Triyuga', 14, NULL, NULL),
(290, 'Tulsipur', 53, NULL, NULL),
(291, 'Urlabari', 6, NULL, NULL),
(292, 'Vyas', 46, NULL, NULL),
(293, 'Waling', 45, NULL, NULL),
(294, 'Hatuwagadhi', 1, NULL, NULL),
(295, 'Ramprasad Rai', 1, NULL, NULL),
(296, 'Aamchok', 1, NULL, NULL),
(297, 'Tyamke Maiyunm', 1, NULL, NULL),
(298, 'Arun', 1, NULL, NULL),
(299, 'Pauwadungma', 1, NULL, NULL),
(300, 'Salpasilichho', 1, NULL, NULL),
(301, 'Sangurigadhi', 2, NULL, NULL),
(302, 'Chaubise', 2, NULL, NULL),
(303, 'Khalsa Chhintang Sahidbhumi', 2, NULL, NULL),
(304, 'Chhathar Jorpati', 2, NULL, NULL),
(305, 'Phakphokthum', 3, NULL, NULL),
(306, 'Mai Jogmai', 3, NULL, NULL),
(307, 'Chulachuli', 3, NULL, NULL),
(308, 'Rong', 3, NULL, NULL),
(309, 'Mangsebung', 3, NULL, NULL),
(310, 'Sandakpur', 3, NULL, NULL),
(311, 'Kamal', 4, NULL, NULL),
(312, 'Buddha Shanti', 4, NULL, NULL),
(313, 'Kachankawal', 4, NULL, NULL),
(314, 'Jhapa', 4, NULL, NULL),
(315, 'Barhadashi', 4, NULL, NULL),
(316, 'Gaurigunj', 4, NULL, NULL),
(317, 'Haldibari', 4, NULL, NULL),
(318, 'Khotehang', 5, NULL, NULL),
(319, 'Diprung', 5, NULL, NULL),
(320, 'Aiselukharka', 5, NULL, NULL),
(321, 'Jantedhunga', 5, NULL, NULL),
(322, 'Kepilasgadhi', 5, NULL, NULL),
(323, 'Barahpokhari', 5, NULL, NULL),
(324, 'Lamidanda', 5, NULL, NULL),
(325, 'Sakela', 5, NULL, NULL),
(326, 'Jahada', 6, NULL, NULL),
(327, 'Budi Ganga', 6, NULL, NULL),
(328, 'Katahari', 6, NULL, NULL),
(329, 'Dhanpalthan', 6, NULL, NULL),
(330, 'Kanepokhari', 6, NULL, NULL),
(331, 'Gramthan', 6, NULL, NULL),
(332, 'Kerabari', 6, NULL, NULL),
(333, 'Miklajung', 6, NULL, NULL),
(334, 'Manebhanjyang', 7, NULL, NULL),
(335, 'Champadevi', 7, NULL, NULL),
(336, 'Sunkoshi', 7, NULL, NULL),
(337, 'Molung', 7, NULL, NULL),
(338, 'Chisankhugadhi', 7, NULL, NULL),
(339, 'Khiji Demba', 7, NULL, NULL),
(340, 'Likhu', 7, NULL, NULL),
(341, 'Miklajung', 8, NULL, NULL),
(342, 'Phalgunanda', 8, NULL, NULL),
(343, 'Hilihang', 8, NULL, NULL),
(344, 'Phalelung', 8, NULL, NULL),
(345, 'Yangwarak', 8, NULL, NULL),
(346, 'Kummayak', 8, NULL, NULL),
(347, 'Tumbewa', 8, NULL, NULL),
(348, 'Makalu', 9, NULL, NULL),
(349, 'Silichong', 9, NULL, NULL),
(350, 'Sabhapokhari', 9, NULL, NULL),
(351, 'Chichila', 9, NULL, NULL),
(352, 'Bhot Khola', 9, NULL, NULL),
(353, 'Dudhakaushika', 10, NULL, NULL),
(354, 'Necha Salyan', 10, NULL, NULL),
(355, 'Dudhkoshi', 10, NULL, NULL),
(356, 'Maha Kulung', 10, NULL, NULL),
(357, 'Sotang', 10, NULL, NULL),
(358, 'Khumbu Pasang Lhamu', 10, NULL, NULL),
(359, 'Likhu Pike', 10, NULL, NULL),
(360, 'Koshi', 11, NULL, NULL),
(361, 'Harinagara', 11, NULL, NULL),
(362, 'Bhokraha', 11, NULL, NULL),
(363, 'Dewangunj', 11, NULL, NULL),
(364, 'Gadhi', 11, NULL, NULL),
(365, 'Barju', 11, NULL, NULL),
(366, 'Sirijangha', 12, NULL, NULL),
(367, 'Aathrai Triveni', 12, NULL, NULL),
(368, 'Pathibhara Yangwarak', 12, NULL, NULL),
(369, 'Meringden', 12, NULL, NULL),
(370, 'Sidingwa', 12, NULL, NULL),
(371, 'Phaktanglung', 12, NULL, NULL),
(372, 'Maiwa Khola', 12, NULL, NULL),
(373, 'Mikwa Khola', 12, NULL, NULL),
(374, 'Aathrai', 13, NULL, NULL),
(375, 'Phedap', 13, NULL, NULL),
(376, 'Chhathar', 13, NULL, NULL),
(377, 'Menchayayem', 13, NULL, NULL),
(378, 'Udayapurgadhi', 14, NULL, NULL),
(379, 'Rautamai', 14, NULL, NULL),
(380, 'Tapli', 14, NULL, NULL),
(381, 'Limchungbung', 14, NULL, NULL),
(382, 'Subarna', 20, NULL, NULL),
(383, 'Adarsha Kotwal', 20, NULL, NULL),
(384, 'Baragadhi', 20, NULL, NULL),
(385, 'Pheta', 20, NULL, NULL),
(386, 'Karaiyamai', 20, NULL, NULL),
(387, 'Prasauni', 20, NULL, NULL),
(388, 'Bishrampur', 20, NULL, NULL),
(389, 'Devtal', 20, NULL, NULL),
(390, 'Parawanipur', 20, NULL, NULL),
(391, 'Laksminiya', 17, NULL, NULL),
(392, 'Mukhiyapatti Musaharmiya', 17, NULL, NULL),
(393, 'Janak Nandini', 17, NULL, NULL),
(394, 'Aaurahi', 17, NULL, NULL),
(395, 'Bateshwar', 17, NULL, NULL),
(396, 'Dhanauji', 17, NULL, NULL),
(397, 'Sonama', 18, NULL, NULL),
(398, 'Pipara', 18, NULL, NULL),
(399, 'Samsi', 18, NULL, NULL),
(400, 'Ekdara', 18, NULL, NULL),
(401, 'Mahottari Rural Municipality', 18, NULL, NULL),
(402, 'Sakhuwa Prasauni', 21, NULL, NULL),
(403, 'Jagarnathpur', 21, NULL, NULL),
(404, 'Chhipaharmai', 21, NULL, NULL),
(405, 'Bindabasini', 21, NULL, NULL),
(406, 'Paterwa Sugauli', 21, NULL, NULL),
(407, 'Jeera Bhavani', 21, NULL, NULL),
(408, 'Kalikamai', 21, NULL, NULL),
(409, 'Pakaha Mainpur', 21, NULL, NULL),
(410, 'Thori', 21, NULL, NULL),
(411, 'Dhobini', 21, NULL, NULL),
(412, 'Durga Bhagawati', 22, NULL, NULL),
(413, 'Yamunamai', 22, NULL, NULL),
(414, 'Tilathi Koiladi', 15, NULL, NULL),
(415, 'Belhi Chapena', 15, NULL, NULL),
(416, 'Chhinnamasta', 15, NULL, NULL),
(417, 'Mahadeva', 15, NULL, NULL),
(418, 'Aagnisaira Krishnasawaran', 15, NULL, NULL),
(419, 'Rupani', 15, NULL, NULL),
(420, 'Balan-Bihul', 15, NULL, NULL),
(421, 'Bishnupur', 15, NULL, NULL),
(422, 'Tirhut', 15, NULL, NULL),
(423, 'Chandranagar', 19, NULL, NULL),
(424, 'Bramhapuri', 19, NULL, NULL),
(425, 'Ramnagar', 19, NULL, NULL),
(426, 'Chakraghatta', 19, NULL, NULL),
(427, 'Kaudena', 19, NULL, NULL),
(428, 'Dhankaul', 19, NULL, NULL),
(429, 'Bishnu', 19, NULL, NULL),
(430, 'Basbariya', 19, NULL, NULL),
(431, 'Parsa', 19, NULL, NULL),
(432, 'Laksmipur Patari', 16, NULL, NULL),
(433, 'Bariyarpatti', 16, NULL, NULL),
(434, 'Aaurahi', 16, NULL, NULL),
(435, 'Arnama', 16, NULL, NULL),
(436, 'Bhagawanpur', 16, NULL, NULL),
(437, 'Naraha', 16, NULL, NULL),
(438, 'Nawarajpur', 16, NULL, NULL),
(439, 'Sakhuwanankarkatti', 16, NULL, NULL),
(440, 'Bishnupur', 16, NULL, NULL),
(441, 'Ichchhakamana', 34, NULL, NULL),
(442, 'Thakre', 27, NULL, NULL),
(443, 'Benighat Rorang', 27, NULL, NULL),
(444, 'Galchhi', 27, NULL, NULL),
(445, 'Gajuri', 27, NULL, NULL),
(446, 'Jwalamukhi', 27, NULL, NULL),
(447, 'Siddhalekh', 27, NULL, NULL),
(448, 'Tripura Sundari', 27, NULL, NULL),
(449, 'Gangajamuna', 27, NULL, NULL),
(450, 'Netrawati Dabjong', 27, NULL, NULL),
(451, 'Khaniyabas', 27, NULL, NULL),
(452, 'Ruby Valley', 27, NULL, NULL),
(453, 'Kalinchok', 25, NULL, NULL),
(454, 'Melung', 25, NULL, NULL),
(455, 'Shailung', 25, NULL, NULL),
(456, 'Baiteshwar', 25, NULL, NULL),
(457, 'Tamakoshi', 25, NULL, NULL),
(458, 'Bigu', 25, NULL, NULL),
(459, 'Gaurishankar', 25, NULL, NULL),
(460, 'Roshi', 29, NULL, NULL),
(461, 'Temal', 29, NULL, NULL),
(462, 'Chaunri Deurali', 29, NULL, NULL),
(463, 'Bhumlu', 29, NULL, NULL),
(464, 'Mahabharat', 29, NULL, NULL),
(465, 'Bethanchok', 29, NULL, NULL),
(466, 'Khanikhola', 29, NULL, NULL),
(467, 'Bagmati', 30, NULL, NULL),
(468, 'Konjyosom', 30, NULL, NULL),
(469, 'Mahankal', 30, NULL, NULL),
(470, 'Bakaiya', 35, NULL, NULL),
(471, 'Manhari', 35, NULL, NULL),
(472, 'Bagmati', 35, NULL, NULL),
(473, 'Raksirang', 35, NULL, NULL),
(474, 'Makawanpurgadhi', 35, NULL, NULL),
(475, 'Kailash', 35, NULL, NULL),
(476, 'Bhimphedi', 35, NULL, NULL),
(477, 'Indrasarowar', 35, NULL, NULL),
(478, 'Kakani', 31, NULL, NULL),
(479, 'Dupcheshwar', 31, NULL, NULL),
(480, 'Shivapuri', 31, NULL, NULL),
(481, 'Tadi', 31, NULL, NULL),
(482, 'Likhu', 31, NULL, NULL),
(483, 'Suryagadhi', 31, NULL, NULL),
(484, 'Panchakanya', 31, NULL, NULL),
(485, 'Tarkeshwar', 31, NULL, NULL),
(486, 'Kispang', 31, NULL, NULL),
(487, 'Myagang', 31, NULL, NULL),
(488, 'Khandadevi', 24, NULL, NULL),
(489, 'Likhu Tamakoshi', 24, NULL, NULL),
(490, 'Doramba', 24, NULL, NULL),
(491, 'Gokulganga', 24, NULL, NULL),
(492, 'Sunapati', 24, NULL, NULL),
(493, 'Umakunda', 24, NULL, NULL),
(494, 'Naukunda', 32, NULL, NULL),
(495, 'Kalika', 32, NULL, NULL),
(496, 'Uttargaya', 32, NULL, NULL),
(497, 'Gosaikund', 32, NULL, NULL),
(498, 'Aamachodingmo', 32, NULL, NULL),
(499, 'Tinpatan', 23, NULL, NULL),
(500, 'Marin', 23, NULL, NULL),
(501, 'Hariharpurgadhi', 23, NULL, NULL),
(502, 'Sunkoshi', 23, NULL, NULL),
(503, 'Golanjor', 23, NULL, NULL),
(504, 'Phikkal', 23, NULL, NULL),
(505, 'Ghyanglekh', 23, NULL, NULL),
(506, 'Indrawati', 33, NULL, NULL),
(507, 'Panchpokhari Thangpal', 33, NULL, NULL),
(508, 'Jugal', 33, NULL, NULL),
(509, 'Balephi', 33, NULL, NULL),
(510, 'Helambu', 33, NULL, NULL),
(511, 'Bhotekoshi', 33, NULL, NULL),
(512, 'Sunkoshi', 33, NULL, NULL),
(513, 'Lisankhu Pakhar', 33, NULL, NULL),
(514, 'Tripura Sundari', 33, NULL, NULL),
(515, 'Badigad', 36, NULL, NULL),
(516, 'Kathekhola', 36, NULL, NULL),
(517, 'Nisikhola', 36, NULL, NULL),
(518, 'Bareng', 36, NULL, NULL),
(519, 'Tarakhola', 36, NULL, NULL),
(520, 'Tamankhola', 36, NULL, NULL),
(521, 'Shahid Lakhan', 37, NULL, NULL),
(522, 'Barpak Sulikot', 37, NULL, NULL),
(523, 'Aarughat', 37, NULL, NULL),
(524, 'Siranchok', 37, NULL, NULL),
(525, 'Gandaki', 37, NULL, NULL),
(526, 'Bhimsen Thapa', 37, NULL, NULL),
(527, 'Ajirkot', 37, NULL, NULL),
(528, 'Dharche', 37, NULL, NULL),
(529, 'Chum Nubri', 37, NULL, NULL),
(530, 'Annapurna', 38, NULL, NULL),
(531, 'Machhapuchhre', 38, NULL, NULL),
(532, 'Madi', 38, NULL, NULL),
(533, 'Rupa', 38, NULL, NULL),
(534, 'Marsyangdi', 39, NULL, NULL),
(535, 'Dordi', 39, NULL, NULL),
(536, 'Dudhpokhari', 39, NULL, NULL),
(537, 'Kwaholasothar', 39, NULL, NULL),
(538, 'Manang Disyang', 40, NULL, NULL),
(539, 'Nason', 40, NULL, NULL),
(540, 'Chame', 40, NULL, NULL),
(541, 'Narpa Bhumi', 40, NULL, NULL),
(542, 'Gharpajhong', 41, NULL, NULL),
(543, 'Thasang', 41, NULL, NULL),
(544, 'Baragung Muktichhetra', 41, NULL, NULL),
(545, 'Lomanthang', 41, NULL, NULL),
(546, 'Lo-Thekar Damodarkunda', 41, NULL, NULL),
(547, 'Malika', 42, NULL, NULL),
(548, 'Mangala', 42, NULL, NULL),
(549, 'Raghuganga', 42, NULL, NULL),
(550, 'Dhaulagiri', 42, NULL, NULL),
(551, 'Annapurna', 42, NULL, NULL),
(552, 'Hupsekot', 43, NULL, NULL),
(553, 'Binayi Triveni', 43, NULL, NULL),
(554, 'Bulingtar', 43, NULL, NULL),
(555, 'Baudikali', 43, NULL, NULL),
(556, 'Jaljala', 44, NULL, NULL),
(557, 'Modi', 44, NULL, NULL),
(558, 'Painyu', 44, NULL, NULL),
(559, 'Bihadi', 44, NULL, NULL),
(560, 'Mahashila', 44, NULL, NULL),
(561, 'Kaligandaki', 45, NULL, NULL),
(562, 'Biruwa', 45, NULL, NULL),
(563, 'Harinas', 45, NULL, NULL),
(564, 'Aandhikhola', 45, NULL, NULL),
(565, 'Arjun Chaupari', 45, NULL, NULL),
(566, 'Phedikhola', 45, NULL, NULL),
(567, 'Rishing', 46, NULL, NULL),
(568, 'Myagde', 46, NULL, NULL),
(569, 'Aanbu Khaireni', 46, NULL, NULL),
(570, 'Bandipur', 46, NULL, NULL),
(571, 'Ghiring', 46, NULL, NULL),
(572, 'Devghat', 46, NULL, NULL),
(573, 'Malarani', 50, NULL, NULL),
(574, 'Pandini', 50, NULL, NULL),
(575, 'Chhatradev', 50, NULL, NULL),
(576, 'Raptisonari', 57, NULL, NULL),
(577, 'Baijnath', 57, NULL, NULL),
(578, 'Khajura', 57, NULL, NULL),
(579, 'Janaki', 57, NULL, NULL),
(580, 'Duduwa', 57, NULL, NULL),
(581, 'Narainapur', 57, NULL, NULL),
(582, 'Badhaiyatal', 58, NULL, NULL),
(583, 'Geruwa', 58, NULL, NULL),
(584, 'Rapti', 53, NULL, NULL),
(585, 'Gadhawa', 53, NULL, NULL),
(586, 'Babai', 53, NULL, NULL),
(587, 'Shantinagar', 53, NULL, NULL),
(588, 'Rajpur', 53, NULL, NULL),
(589, 'Banglachuli', 53, NULL, NULL),
(590, 'Dangisharan', 53, NULL, NULL),
(591, 'Satyawati', 51, NULL, NULL),
(592, 'Dhurkot', 51, NULL, NULL),
(593, 'Gulmi Durbar', 51, NULL, NULL),
(594, 'Madane', 51, NULL, NULL),
(595, 'Chandrakot', 51, NULL, NULL),
(596, 'Malika', 51, NULL, NULL),
(597, 'Chhatrakot', 51, NULL, NULL),
(598, 'Isma', 51, NULL, NULL),
(599, 'Kaligandaki', 51, NULL, NULL),
(600, 'Ruru', 51, NULL, NULL),
(601, 'Mayadevi', 47, NULL, NULL),
(602, 'Shuddhodhan', 47, NULL, NULL),
(603, 'Yasodhara', 47, NULL, NULL),
(604, 'Bijaynagar', 47, NULL, NULL),
(605, 'Triveni Susta', 48, NULL, NULL),
(606, 'Pratappur', 48, NULL, NULL),
(607, 'Sarawal', 48, NULL, NULL),
(608, 'Palhi Nandan', 48, NULL, NULL),
(609, 'Rainadevi Chhahara', 52, NULL, NULL),
(610, 'Mathagadhi', 52, NULL, NULL),
(611, 'Nisdi', 52, NULL, NULL),
(612, 'Bagnaskali', 52, NULL, NULL),
(613, 'Rambha', 52, NULL, NULL),
(614, 'Purbakhola', 52, NULL, NULL),
(615, 'Tinau', 52, NULL, NULL),
(616, 'Ribdikot', 52, NULL, NULL),
(617, 'Naubahini', 54, NULL, NULL),
(618, 'Jhimaruk', 54, NULL, NULL),
(619, 'Gaumukhi', 54, NULL, NULL),
(620, 'Airawati', 54, NULL, NULL),
(621, 'Sarumarani', 54, NULL, NULL),
(622, 'Mallarani', 54, NULL, NULL),
(623, 'Mandavi', 54, NULL, NULL),
(624, 'Sunil Smriti', 55, NULL, NULL),
(625, 'Runtigadhi', 55, NULL, NULL),
(626, 'Lungri', 55, NULL, NULL),
(627, 'Triveni', 55, NULL, NULL),
(628, 'Paribartan', 55, NULL, NULL),
(629, 'Gangadev', 55, NULL, NULL),
(630, 'Madi', 55, NULL, NULL),
(631, 'Sunchhahari', 55, NULL, NULL),
(632, 'Thawang', 55, NULL, NULL),
(633, 'Bhume', 56, NULL, NULL),
(634, 'Putha Uttarganga', 56, NULL, NULL),
(635, 'Sisne', 56, NULL, NULL),
(636, 'Gaidhawa', 49, NULL, NULL),
(637, 'Mayadevi', 49, NULL, NULL),
(638, 'Kotahimai', 49, NULL, NULL),
(639, 'Marchawarimai', 49, NULL, NULL),
(640, 'Siyari', 49, NULL, NULL),
(641, 'Sammarimai', 49, NULL, NULL),
(642, 'Rohini', 49, NULL, NULL),
(643, 'Shuddhodhan', 49, NULL, NULL),
(644, 'Om Satiya', 49, NULL, NULL),
(645, 'Kanchan', 49, NULL, NULL),
(646, 'Gurans', 67, NULL, NULL),
(647, 'Bhairabi', 67, NULL, NULL),
(648, 'Naumule', 67, NULL, NULL),
(649, 'Mahabu', 67, NULL, NULL),
(650, 'Thantikandh', 67, NULL, NULL),
(651, 'Bhagawatimai', 67, NULL, NULL),
(652, 'Dungeshwar', 67, NULL, NULL),
(653, 'Mudkechula', 61, NULL, NULL),
(654, 'Kaike', 61, NULL, NULL),
(655, 'She Phoksundo', 61, NULL, NULL),
(656, 'Jagadulla', 61, NULL, NULL),
(657, 'Dolpo Buddha', 61, NULL, NULL),
(658, 'Chharka Tangsong', 61, NULL, NULL),
(659, 'Simkot', 62, NULL, NULL),
(660, 'Sarkegad', 62, NULL, NULL),
(661, 'Adanchuli', 62, NULL, NULL),
(662, 'Kharpunath', 62, NULL, NULL),
(663, 'Tanjakot', 62, NULL, NULL),
(664, 'Chankheli', 62, NULL, NULL),
(665, 'Namkha', 62, NULL, NULL),
(666, 'Junichande', 68, NULL, NULL),
(667, 'Kuse', 68, NULL, NULL),
(668, 'Barekot', 68, NULL, NULL),
(669, 'Shivalaya', 68, NULL, NULL),
(670, 'Tatopani', 63, NULL, NULL),
(671, 'Patarasi', 63, NULL, NULL),
(672, 'Tila', 63, NULL, NULL),
(673, 'Kanaka Sundari', 63, NULL, NULL),
(674, 'Sinja', 63, NULL, NULL),
(675, 'Hima', 63, NULL, NULL),
(676, 'Guthichaur', 63, NULL, NULL),
(677, 'Narharinath', 64, NULL, NULL),
(678, 'Palata', 64, NULL, NULL),
(679, 'Shubha Kalika', 64, NULL, NULL),
(680, 'Sanni Triveni', 64, NULL, NULL),
(681, 'Pachaljharana', 64, NULL, NULL),
(682, 'Mahawai', 64, NULL, NULL),
(683, 'Khatyad', 65, NULL, NULL),
(684, 'Soru', 65, NULL, NULL),
(685, 'Mugum Karmarong', 65, NULL, NULL),
(686, 'Sani Bheri', 59, NULL, NULL),
(687, 'Triveni', 59, NULL, NULL),
(688, 'Banphikot', 59, NULL, NULL),
(689, 'Kumakh', 60, NULL, NULL),
(690, 'Kalimati', 60, NULL, NULL),
(691, 'Chhatreshwari', 60, NULL, NULL),
(692, 'Darma', 60, NULL, NULL),
(693, 'Kapurkot', 60, NULL, NULL),
(694, 'Triveni', 60, NULL, NULL),
(695, 'Siddha Kumakh', 60, NULL, NULL),
(696, 'Barahatal', 66, NULL, NULL),
(697, 'Simta', 66, NULL, NULL),
(698, 'Chaukune', 66, NULL, NULL),
(699, 'Chingad', 66, NULL, NULL),
(700, 'Ramaroshan', 70, NULL, NULL),
(701, 'Chaurpati', 70, NULL, NULL),
(702, 'Turmakhand', 70, NULL, NULL),
(703, 'Mellekh', 70, NULL, NULL),
(704, 'Dhankari', 70, NULL, NULL),
(705, 'Bannigadi Jayagad', 70, NULL, NULL),
(706, 'Dogdakedar', 76, NULL, NULL),
(707, 'Dilashaini', 76, NULL, NULL),
(708, 'Sigas', 76, NULL, NULL),
(709, 'Pancheshwar', 76, NULL, NULL),
(710, 'Surnaya', 76, NULL, NULL),
(711, 'Shivanath', 76, NULL, NULL),
(712, 'Kedarsyu', 72, NULL, NULL),
(713, 'Thalara', 72, NULL, NULL),
(714, 'Bitthadchir', 72, NULL, NULL),
(715, 'Chhabis Pathibhera', 72, NULL, NULL),
(716, 'Chhanna', 72, NULL, NULL),
(717, 'Masta', 72, NULL, NULL),
(718, 'Durgathali', 72, NULL, NULL),
(719, 'Talkot', 72, NULL, NULL),
(720, 'Surma', 72, NULL, NULL),
(721, 'Saipal', 72, NULL, NULL),
(722, 'Khaptad Chhededaha', 73, NULL, NULL),
(723, 'Swami Kartik Khapar', 73, NULL, NULL),
(724, 'Jagannath', 73, NULL, NULL),
(725, 'Himali', 73, NULL, NULL),
(726, 'Gaumul', 73, NULL, NULL),
(727, 'Navadurga', 75, NULL, NULL),
(728, 'Aalitaal', 75, NULL, NULL),
(729, 'Ganyapadhura', 75, NULL, NULL),
(730, 'Bhageshwar', 75, NULL, NULL),
(731, 'Ajaymeru', 75, NULL, NULL),
(732, 'Naugad', 77, NULL, NULL),
(733, 'Malikarjun', 77, NULL, NULL),
(734, 'Marma', 77, NULL, NULL),
(735, 'Lekam', 77, NULL, NULL),
(736, 'Duhu', 77, NULL, NULL),
(737, 'Vyans', 77, NULL, NULL),
(738, 'Api Himal', 77, NULL, NULL),
(739, 'Aadarsha', 71, NULL, NULL),
(740, 'Purbichauki', 71, NULL, NULL),
(741, 'K.I. Singh', 71, NULL, NULL),
(742, 'Jorayal', 71, NULL, NULL),
(743, 'Sayal', 71, NULL, NULL),
(744, 'Bogatan', 71, NULL, NULL),
(745, 'Badikedar', 71, NULL, NULL),
(746, 'Janaki', 69, NULL, NULL),
(747, 'Kailari', 69, NULL, NULL),
(748, 'Joshipur', 69, NULL, NULL),
(749, 'Bargagoriya', 69, NULL, NULL),
(750, 'Mohanyal', 69, NULL, NULL),
(751, 'Chure', 69, NULL, NULL),
(752, 'Laljhadi', 74, NULL, NULL),
(753, 'Beldandi', 74, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_visit` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `date`, `status`, `meta_title`, `link`, `meta_description`, `description`, `image`, `page_visit`, `created_at`, `updated_at`) VALUES
(21, 'Glaucoma', 'glaucoma', NULL, 1, 'glaucoma eye disease', NULL, 'Glaucoma is an eye disease in which the optic nerve is damaged in a characteristic pattern.', '<p>Glaucoma is an eye disease in which the optic nerve is damaged in a characteristic pattern. This can permanently damage vision in the affected eye(s) and lead to blindness if left untreated. It is normally associated with increased fluid pressure in the eye (aqueous humour). The term &quot;ocular hypertension&quot; is used for people with consistently raised intraocular pressure (IOP) without any associated optic nerve damage. Conversely, the term &#39;normal tension&#39; or &#39;low tension&#39; glaucoma is used for those with optic nerve damage and associated visual field loss, but normal or low IOP.</p>\r\n\r\n<p>The nerve damage involves loss of retinal ganglion cells in a characteristic pattern. The many different subtypes of glaucoma can all be considered to be a type of optic neuropathy. Raised intraocular pressure (above 21 mmHg or 2.8 kPa) is the most important and only modifiable risk factor for glaucoma. However, some may have high eye pressure for years and never develop damage, while others can develop nerve damage at a relatively low pressure. Untreated glaucoma can lead to permanent damage of the optic nerve and resultant visual field loss, which over time can progress to blindness.</p>\r\n\r\n<p>Glaucoma has been called the &quot;silent thief of sight&quot; because the loss of vision often occurs gradually over a long period of time, and symptoms only occur when the disease is quite advanced. Once lost, vision cannot normally be recovered, so treatment is aimed at preventing further loss. Worldwide, glaucoma is the second-leading cause of blindness after cataracts. It is also the leading cause of blindness among African Americans. Glaucoma affects one in 200 people aged 50 and younger, and one in 10 over the age of eighty. If the condition is detected early enough, it is possible to arrest the development or slow the progression with medical and surgical means. Screening for glaucoma in the general population is however unsupported by the evidence.</p>\r\n\r\n<p><strong>There are two main types of glaucoma</strong>,&nbsp;<em>open angle</em>&nbsp;and&nbsp;<em>closed angle (angle closure)</em>&nbsp;glaucoma. The fluid in the eye flows through an area between the iris and cornea, where it escapes via the trabecular meshwork - &quot;angle&quot; refers to this area. The trabecular meshwork is made of sponky tissue lined by trabeculocytes. Fluid drains into s set of tubes, known as Schlemm&#39;s canal, from which they flow into the blood system.</p>\r\n\r\n<p><br />\r\n<strong>Closed Angle Glaucoma</strong>&nbsp;(acute angle-closure glaucoma) can come on suddenly, and the patient commonly experiences pain and rapid vision loss. Fortunately, the symptoms of pain and discomfort make the sufferer seek medical help, resulting in prompt treatment which usually prevents any permanent damage from occurring.<br />\r\n<br />\r\n<strong>Primary Open Angle Glaucoma</strong>&nbsp;(chronic glaucoma) - progresses very slowly. The patient may not feel any symptoms; even slight loss of vision may go unnoticed. In this type of glaucoma, many people don&#39;t get medical help until some permanent damage has already occurred.<br />\r\n<br />\r\n<strong>Low-tension glaucoma</strong>&nbsp;- this is another form that experts do not fully understand. Even though eye pressure is normal, optic nerve damage still occurs. Perhaps the optic nerve is over-sensitive or there is atherosclerosis in the blood vessel that supplies the optic nerve.<br />\r\n<br />\r\n<strong>Pigmentary glaucoma</strong>&nbsp;- this type generally develops during early or middle adulthood. Pigment granules, which arise from the back of the iris, are dispersed within the eye. If these granules build up in the trabecular meshwork, they can undermine the flow of fluids in the eye, leading to a rise in eye pressure. Running and some other sports can unsettle the granules, which get into the trabecular meshwork.</p>', 'uploads/news/915db87eca78dd7d8c94f67940376906.jpg', 1, '2023-02-22 05:37:45', '2023-02-22 05:37:45'),
(22, 'Refractive Error', 'refractive-error', NULL, 1, 'Refractive Error of eye', NULL, 'Refractive Error of eye', '<p>Refractive error occurs when the eye cannot clearly focus the images from the outside world. The result of refractive errors is blurred vision, which is sometimes so severe that it causes visual impairment.</p>\r\n\r\n<p>The three most common refractive errors are:</p>\r\n\r\n<p>1. <strong>myopia </strong>(nearsightedness): difficulty in seeing distant objects clearly</p>\r\n\r\n<p>2. <strong>hyperopia </strong>(farsightedness): difficulty in seeing close objects clearly</p>\r\n\r\n<p>3. <strong>astigmatism</strong>: distorted vision resulting from an irregularly curved cornea, the clear covering of the eyeball.</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-4\">\r\n<p><img alt=\"far sightedness\" src=\"http://localhost/optometry/resources/ckfinder/userfiles/images/far-sightedness.jpg\" style=\"width:100%\" /></p>\r\n</div>\r\n\r\n<div class=\"col-sm-4\">\r\n<p><img alt=\"near sightedness\" src=\"http://localhost/optometry/resources/ckfinder/userfiles/images/near-sightedness.jpg\" style=\"width:100%\" /></p>\r\n</div>\r\n\r\n<div class=\"col-sm-4\">\r\n<p><img alt=\"astigmatism\" src=\"http://localhost/optometry/resources/ckfinder/userfiles/images/astigmatism.jpg\" style=\"width:100%\" /></p>\r\n</div>\r\n</div>\r\n\r\n<p>A fourth condition is presbyopia, which leads to difficulty in reading or seeing at arm&#39;s length. It differs from the other disorders in that it is linked to ageing and occurs almost universally.</p>\r\n\r\n<p>Refractive errors cannot be prevented, but they can be diagnosed by an eye examination and treated with corrective glasses, contact lenses or refractive surgery.</p>\r\n\r\n<p><em><strong>Facts on Refractive Error</strong></em></p>\r\n\r\n<ul>\r\n	<li>WHO estimates that 153 million people worldwide live with visual impairment due to uncorrected refractive errors.</li>\r\n	<li>Refractive error is the leading cause of visual impairment and second major cause of treatable blindness worldwide.</li>\r\n	<li>Almost 6 million (26%) Nepali people are living with uncorrected refractive errors.</li>\r\n	<li>Uncorrected refractive errors are known cause of poor performance in and high dropout rates from schools among children.</li>\r\n	<li>There is a huge shortage of manpower to provide quality refraction services and dispensing of glasses in Nepal.</li>\r\n	<li>Existing stigma, ignorance and negative attitude among people contribute for refractive error to remain uncorrected.</li>\r\n</ul>', 'uploads/news/d407419b7e8e03b90e88845ad6369f6f.jpg', 1, '2023-02-22 05:39:49', '2023-02-22 05:50:44'),
(23, 'Cataract', 'cataract', NULL, 1, NULL, NULL, NULL, '<p>A cataract is a clouding of the lens inside the eye which leads to a decrease in vision. It is the most common cause of blindness and is conventionally treated with surgery. Visual loss occurs because opacification of the lens obstructs light from passing and being focused on to the retina at the back of the eye.</p>\r\n\r\n<p>It is most commonly due to biological aging but there are a wide variety of other causes. Over time, yellow-brown pigment is deposited within the lens and this, together with disruption of the normal architecture of the lens fibers, leads to reduced transmission of light, which in turn leads to visual problems.</p>\r\n\r\n<p>Those with cataract commonly experience difficulty appreciating colors and changes in contrast, driving, reading, recognizing faces, and experience problems coping with glare from bright lights.&nbsp;</p>', 'uploads/news/a310ff641c7cfd6232e2e946b659935b.jpg', 1, '2023-02-22 05:43:48', '2023-02-22 05:43:48'),
(24, 'Astigmatism', 'astigmatism', NULL, 1, 'Astigmatism', NULL, 'Astigmatism', '<p>Astigmatism is an optical defect in which vision is blurred due to the inability of the optics of the eye to focus a point object into a sharp focused image on the retina. This may be due to an irregular or toric curvature of the cornea or lens. The two types of astigmatism are regular and irregular. Irregular astigmatism is often caused by a corneal scar or scattering in the crystalline lens, and cannot be corrected by standard spectacle lenses, but can be corrected by contact lenses. The more common regular astigmatism arising from either the cornea or crystalline lens can be corrected by eyeglasses or toric lenses. A &#39;toric&#39; surface resembles a section of the surface of a Rugby ball or a doughnut where there are two regular radii, one smaller than the other one. This optical shape gives rise to astigmatism in the eye.</p>\r\n\r\n<p>The refractive error of the astigmatic eye stems from a difference in degree of curvature refraction of the two different meridians (i.e., the eye has different focal points in different planes). For example, the image may be clearly focused on the retina in the horizontal plane, but not in the vertical plane. Astigmatism causes difficulties in seeing fine detail or blurred vision. Three options exist for the treatment of astigmatism: spectacles, contact lenses (either hard contact lenses or toric contact lenses), and refractive surgery.</p>', 'uploads/news/0badc835fc220cddb157d51fe4e08c2b.jpg', 1, '2023-02-22 05:46:50', '2023-02-22 05:46:50'),
(25, 'Eye Health Awareness', 'eye-health-awareness', NULL, 1, 'Eye Health Awareness', NULL, 'Eye Health Awareness', '<p><strong>Eye Donation</strong><br />\r\nEye donation is donating the eyes after a person&rsquo;s death. Eyes are very valuable part of a human being, which should not be wasted either by burning or burying the body.<br />\r\nDonation of the eyes gives sight to TWO Corneally blind persons, enabling them to come out of their dark and dreary life into a life full of colors, a life where they can see and enjoy this beautiful world!</p>\r\n\r\n<p>Cornea, the outermost part of the eye, when becomes cloudy due to injury or infection, light cannot penetrate the eye to reach the light-sensitive retina as a result of which poor vision or blindness may result. A corneal transplant involves replacing a diseased or scarred cornea with a new one.</p>\r\n\r\n<p>The great thing about corneal tissue is that everyone is a universal donor. Your blood type does not have to match. It doesn&rsquo;t matter how old you are, what color your eyes are or how good your eyesight is. Aside from those suffering from infections or a few highly communicable diseases such as HIV or hepatitis, most people are suitable donors.</p>', 'uploads/news/d83a6cdf58964eca914c055f04f773c0.jpg', 1, '2023-02-22 05:49:45', '2023-02-22 05:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE `news_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `link`, `image`, `status`, `order`, `created_at`, `updated_at`) VALUES
(21, 'https://bpeyefoundation.org/', 'uploads/partners/7ffa66064eec5bb94e664721c90702ed.jpg', 1, 0, '2023-02-21 17:26:16', '2023-02-21 17:26:16'),
(22, 'https://nhpc.gov.np/', 'uploads/partners/7b05b24501d8525aa5127e24ee5fdeaa.jpg', 1, 0, '2023-02-21 17:30:06', '2023-02-21 17:30:06'),
(23, 'https://vosh.org/', 'uploads/partners/ac4b64581f74b393ed7f0ad98d35424a.jpg', 1, 0, '2023-02-21 17:32:06', '2023-02-21 17:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(21, NULL, 'Helping earthquake victims restore their eye health', 'helping-earthquake-victims-restore-their-eye-health', 1, 'Helping earthquake victims restore their eye health', 'Helping earthquake victims restore their eye health', NULL, '<p>1. The Problem</p>\r\n\r\n<p>On 25<sup>th</sup> April 2015 a devastating earthquake of 7.8 on Richter scale struck three districts of Kathmandu (KTM) Valley and 11 districts of mountainous and hilly areas of Nepal. Over 8,660 people are reported to have died, the number of injured has been exceeded 22, 000 and many have become disabled. Over 600,000 houses have been destroyed or are unlivable. Roads and infrastructure (government offices, health facilities, schools) are badly damaged.</p>\r\n\r\n<p>Another major earthquake of 6.8 struck on 12 May 2015 with epicenter on the border between Dolakha and Sindhupalchowk districts. As of 26 June 2015, 488 intermediate and over 4100 minor aftershocks have been reported.</p>\r\n\r\n<p>Dolkha district which had already suffered heavy loss of life and property due to first earthquake was further damaged with this onslaught. Dolakha district, 180 KMs east and north of Kathmandu, has continued to suffer from after-shocks day in day out. 68 epicenters have been reported from this district next only to highest reported district of Sindhupalchowk (75 epicenters). While Sindhupalchowk has hit the global earthquake map, Dolakha is not on the radar of aid agencies. Dead bodies have been seen but due to difficulty of access are yet to be removed and to be handed over to relatives or buried (<u>http://www.ekantipur.com/2015/05/17/top-story/over-100-bodies-lying-under-rubble-in-singati-bazaar/405337.html</u>). &nbsp;Public facilities such as schools are closed for the last one month, health facilities are working in make-shift tents. Thousands of people have been rendered homeless and living inside tents, with fear of another earthquake striking any moment. Untimely storms and rain are making a miserable life almost intolerable. Closure of schools has caused serious educational and psychological impact on students. Future of a whole generation of children is under threat.</p>\r\n\r\n<p>The human eye is vulnerable to this type of disaster. People may have injury to their eyes or acquire infections following entry of hazardous substances into their eyes. Most common eye hazards are dust, concrete and metal particles, falling or shifting debris, building materials, pieces of glass, smoke and noxious or poisonous gases, chemicals (acids, bases, fuels, solvents, lime, and wet or dry cement powder), cutting or welding light and electrical arcing, thermal hazards and fires etc. Many people may have lost their eyeglasses and have not had chance or resource to get a new one.</p>\r\n\r\n<p>In the aftermath of the earthquakes, concerns are raised about the transmission of infectious diseases across Nepal. Population displacement, crowding, limited quantities of safe water, inadequate hygiene and toilet facilities, and unsafe practices in handling and preparing food are all associated with disease transmission. There is a risk of an increase in communicable diseases, including diarrhoea, respiratory infections, and mosquito borne diseases, particularly when the rainy season has just started. There is an immediate need of effective public health promotion activities and intervention.</p>\r\n\r\n<p>2. The Solution</p>\r\n\r\n<p>Nepalese Association of Optometrists envisions a health support program in four village development committees of Dolakha district (Lamidanda, Pawati, Sahare, Kabre).&nbsp; &nbsp;In 2012 -2013, we had worked in these village development committees by holding mobile eye health camps. Because of our earlier work with these communities and their acute need, we feel it a moral duty to help the people of these areas by providing eye care services above other equally pressing needs. With our previous work in these communities and our relationship with the community we are better placed than others to help these communities.</p>\r\n\r\n<p>3. Scope of work:</p>\r\n\r\n<p>Organize four health camps, one in each VDC; Lamidanda, Pawati, Sahare and Kabre within one year- provide medicines or glasses to the needy people, refer cases needing surgery<br />\r\nSupport families with sanitary goods (&quot;Family sanitary pack&quot; comprising 2 pc each of soap, toothbrush, toothpaste, comb, towel, hair oil, razor, shaving cream, sanitary pads, water purifier solution)<br />\r\nAwareness raising program for people on the themes&quot; Risk of Infection After Earthquake&quot; and &quot;Maintaining environmental/ personal Hygiene&quot;.</p>\r\n\r\n<p>4. Outputs of the project</p>\r\n\r\n<p>1,200 people screened for eye health problems (300 people/ camp x 4 camps)<br />\r\n480 people provided with medicines and 240 with glasses (estimated 40% people will require a medicines and 20% will require glasses), 60 people referred for surgery<br />\r\n150 families identified to be very poor will be provided with Family sanitary pack<br />\r\n6 sets of health awareness materials developed<br />\r\n800 people with increased level of health awareness</p>\r\n\r\n<p>5. Work Plan</p>\r\n\r\n<p>Project Duration: One year</p>\r\n\r\n<table border=\"0\" cellpadding=\"10\" cellspacing=\"10\" class=\"table-bordered\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Activity</th>\r\n			<th scope=\"col\">Oct - Dec 2015</th>\r\n			<th scope=\"col\">Jan - March 2016</th>\r\n			<th scope=\"col\">April - June 2016</th>\r\n			<th scope=\"col\">July - Sept 2016</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Coordination visit at proposed camp sites, planning meeting with local stakeholders</td>\r\n			<td style=\"background-color:#b8cce4\">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Development of health awareness materials</td>\r\n			<td style=\"background-color:#b8cce4\">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Holding eye camps, providing medicines, glasses, family sanitary pack and health awareness</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"background-color:#b8cce4\">&nbsp;</td>\r\n			<td style=\"background-color:#b8cce4\">&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Data entry, analysis and report writing</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td style=\"background-color:#b8cce4\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>5. Implementing Organization:</p>\r\n\r\n<p>Nepalese Association of Optometrists</p>\r\n\r\n<p>Established in 2004, the Nepalese Association of Optometrists (NAO) is a not for profit national non government organization formed by the professionals in optometry. The association is formally registered to the chief district office of the government of Nepal. With over 100 members registered, the association has been working in the areas of primary eye health care, health promotion and rehabilitation from its beginning. Special focus has been given to people who have poor access to eye health services. Regular conduct of school screening camps and community eye camps by the association has served thousands of people restore their eye health. While health promotion activities have made another thousands of people in the rural communities aware of the health conditions that can disrupt from seeing well. The association has a wide network throughout the country through its regional representatives. Coordination and partnership with stakeholders from central to grass root level has remained the major thrust for success in projects carried out by the association so far.</p>', NULL, '2023-02-27 06:50:47', '2023-02-27 07:07:28'),
(22, NULL, 'Vision Screening March Month 2020', 'vision-screening-march-month-2020', 1, NULL, NULL, NULL, '<p><strong>Introduction</strong><br />\r\nEstablished in 2004, Nepalese Association of Optometrist (NAO) is a not for profit national non-government and professional organization working to uplift eye care services in Nepal. The association is formally registered to the chief district office of the government of Nepal. With over 300 members optometrist registered, the association has been working in the areas of primary eye health care, health promotion and rehabilitation from its beginning. Special focus has been given to people who have poor access to eye health services. Regular conduct of school screening camps and community eye camps by the association has served thousands of people restore their eye health. While health promotion activities have made another thousands of people in the rural communities aware of the health conditions that can disrupt from seeing well. The association has a wide network throughout the country through its regional representatives. Coordination and partnership with stakeholders from central to grass root level has remained the major thrust for success in projects carried out by the association so far.</p>\r\n\r\n<table border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Vision Screening March Month\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/478c7b668deda74fda23f8be3bd108b5.jpg\" style=\"height:236px; width:235px\" /></td>\r\n<td>&nbsp;</td>\r\n			<td><img alt=\"NAO Logo\" src=\"http://demo.optometrynepal.org/uploads/ckeditor-image/e1b6e5b550b52c0b73086fb2c78eedef.jpg\" style=\"height:137px; width:134px\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>NAO provides platform for professional development for Optometrist so that common Nepali people will get quality eye service with licensed and skilled Optometrist. NAO has been helping rural and unreached population with Ocular screening from 2004 since our establishment. NAO has taken lead in for eye care service to the needy affected during Earthquake 2015.It has always advocated in the favor of government owned eye care policy and service in Nepal.</p>\r\n\r\n<p>Ocular Morbidity is increasing in school children with increase in near work and digital gadget use. In elderly population there is a huge chunk of presbyopia and other ocular pathology like Cataract, Glaucoma, Diabetic Retinopathy etc. In the recent Report on Vision by WHO 2019, 50% of the world population will be myopic by 2050. The number of people with myopia will increase from 1.95 billion in 2010 to 3.36 billion in 2030. The number of people with high myopia, often associated with severe complications, is projected to increase from 277.2 million in 2010 to 516.7 million in 2030. Three Asian regions alone (representing 51% of the world&rsquo;s population) account for 62% of the estimated 216.6 million people in the world with moderate and severe bilateral presenting distance vision impairment: South Asia (61.2 million); East Asia (52.9 million); and South-East Asia (20.8 million). The prevalence of bilateral blindness in low- and middle-income regions of western and eastern sub-Saharan Africa (5.1%) and South Asia (4.0%) are reported to be eight times higher than in all high-income countries (&lt;0.5%). It is expected that average ocular morbidity of Nepal is 20% and 10% of school children need spectacle corrections.&nbsp;</p>\r\n\r\n<p>Eye care is not adequately integrated in basic health service by GON that&rsquo;s why all the eye service is delivered by NGO i.e., NNJS, Tilganga, Bp eye foundation, Reiyekai and few private hospital and eye center. The burden of increased myopia if not addressed on time will have devastating effect on the overall performance of the child. People are scared of screening their eyes as they have fear of wearing Spectacle. If not screened and treated on time they may increase comorbidity associated and decrease the quality of life of the people.</p>\r\n\r\n<p><strong>Rationale</strong><br />\r\nVisual Acuity less that 20/20 in children can be an indication of Ocular morbidity associated with refractive error like myopia, hypermetropia, astigmatism, and amblyopia, which has significant affect in children learning abilities and intellectual development. In adult it can be indicative of refractive error, ocular pathology associated with cataract, glaucoma, retinopathy and many more. Less than N6 in near vision is indicative of Presbyopia which can have significant effect on the quality of life of general people.&nbsp;<br />\r\nAs refractive error is increasing day to day in children and they are more involved in household games which has increased the risk of amblyopia, if not treated on time, it can have significant effect on the ocular health, it can promote deviation of eye and may be unilateral or bilateral blindness and can affect the overall performance of the children. In Adult near and distance visual acuity can have significant effect on the quality of life of adult. Maximum people are unaware about the ocular problem they have because they are afraid of ocular checkup and fear of Spectacle wear. Ocular health screening can be the first tool to diagnose some of the Non communicable disease like hypertensive and diabetic cases. There is the need of awareness about vision screening among common people so that regular vision screening will help them to combat ocular as well as some of the systemic comorbidity.</p>\r\n\r\n<p><strong>Objective</strong><br />\r\n<strong>General Objective</strong><br />\r\nTo Screen Visual Acuity of child from Age 5 to Adult of all the age group.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Specific Objective</strong><br />\r\n&bull;&nbsp;&nbsp; &nbsp;To screen at least 1, 00,000 people, child from age 5 to adult of all the age groups.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To provide awareness about the effect of vision in quality of life.<br />\r\n&bull;&nbsp;&nbsp; &nbsp; To provide advice on how best correction of vision can be helpful to increase quality of life.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To use the data for policy evidence to motivate governments for improving local screening facilities thereby reducing burden of ocular disease and treatment of ocular disease on time.</p>\r\n\r\n<p><strong>Method<br />\r\nSampling Technique</strong><br />\r\nNon-random, opportunistic<br />\r\n<strong>Sample size</strong><br />\r\nApproximately 100,000 population<br />\r\n<strong>Number of participants and Justification:</strong><br />\r\nThis is a non-random sampling unit based on our previous vision screening experiences.<br />\r\n<strong>Criteria for sample selection</strong><br />\r\nChild from Age 5 to Adult of all the age group.<br />\r\n<strong>Data Collection Technique</strong><br />\r\nInterview and Vision Screening</p>\r\n\r\n<p><strong>Description of research design</strong><br />\r\nThis will be a cross-sectional study to create awareness of Vision screening. The collected data will be used to estimate the proportion of Vision Morbidity of Patients.</p>\r\n\r\n<p><strong>Process</strong><br />\r\nFollowing steps will be followed:-<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Coordination with the schools and local body in case of community screening for fixing time and date for Vision Screening.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Taking a brief eye awareness presentation by Optometrist and Optometry students.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Teaching and training two student and two teacher how to carry out vision screening.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Taking consent from school administration and informed consent from participant.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Asking few question based on our tool.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Taking Visual Acuity of people and children.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Differentiating healthy and morbid patient.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Vision Acuity less than 6/6 patient will be referred for further evaluation in nearby by hospital.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Motivate teachers and Seniors students who were trained how to take vision screening to do vision screening in three months and refer to hospital in case of vision less than 6/6.</p>\r\n\r\n<p><strong>Tool</strong><br />\r\nVision Screening will be one by Snellen Vision Acuity Chart. The questionnaire will be asked to collect information from an interview.<br />\r\nThe questionnaire is developed by Nepalese Association of Optometrist will be validated by pre-testing.<br />\r\nPlan for supervision and monitoring<br />\r\nAn advisory board and organizing board will be established under the leadership of principal investigator for proper supervision and monitoring.<br />\r\nPlan for data management and analysis<br />\r\nData will be collected using pen and paper method. The collected data will be transported to our field office in Maharajgunj then, data&rsquo;s collected will be entered in our database. The data will be utilized to prepare a separate paper and to prepare a global paper.</p>\r\n\r\n<p><strong>Ethical Approval</strong><br />\r\n&bull;&nbsp;&nbsp; &nbsp;Informed consent will be taken from School for screening school children.<br />\r\n&bull;&nbsp;&nbsp; &nbsp; Informed consent will be taken from Adult population.<br />\r\n&bull;&nbsp;&nbsp; &nbsp; Ethical Approval will be taken from NHRC.</p>\r\n\r\n<p><strong>Expected Outcome</strong><br />\r\nThe project will create awareness about the Vision Screening in general public, especially in schools where they should screen their children vision before taking admissions and regularly in three months&rsquo; time. Our Volunteer will teach two students and two teachers how they can carry&nbsp;</p>', NULL, '2023-02-27 07:16:43', '2023-02-27 07:20:58'),
(23, NULL, 'Eye teaming and focusing disorders among school children', 'eye-teaming-and-focusing-disorders-among-school-children', 1, 'Eye teaming and focusing disorders among school children', 'Eye teaming and focusing disorders among school children', NULL, '<p>Binocular Single Vision may be defined as the state of simultaneous vision, which is achieved by the coordinated use of both eyes, so that separate and slightly dissimilar images arising in each eye are appreciated as a single image by the process of fusion.(1) Eye teaming or binocular vision is a visual efficiency skill that allows both eyes to work together in a precise and coordinated way. Two eyes must work together as a team to give us one image. Eye focusing is a visual efficiency skill that allows the images of objects at sharp focus regardless of the distance.(3)&nbsp;<br />\r\nEye teaming disorders or Vergence dysfunction involves disjunctive eye movements in which the visual axes move toward each other(convergence) or away from each other (divergence), resulting in the inability of the eyes to accurately fixate and stabilise a retinal image(3).&nbsp;</p>\r\n\r\n<p>An accommodative and vergence dysfunction can have negative effect on a child&#39;s school performance, especially after third grade when he must read smaller print and reading demand increase. The child may not be able to complete reading or home assignments and may be easily distracted in presence of eye teaming and eye focusing disorders(5). &nbsp;&nbsp;<br />\r\nThe most widely accepted classification is the Duke-Elder classification of accommodative dysfunction. These include accommodative insufficiency, ill-sustained accommodation, accommodative infacility, paralysis of accommodation and spasm of accommodation. (6)</p>\r\n\r\n<p>a.&nbsp;&nbsp; &nbsp;Accommodative Insufficiency: &nbsp;It is the condition in which the patient has difficulty stimulating accommodation. The amplitude of accommodation (AA) is lower than expected for the patient&#39;s age.<br />\r\nb.&nbsp;&nbsp; &nbsp;Ill- Sustained Accommodation: It is the condition in which the AA is normal, but fatigue occurs with repeated accommodative stimulation.<br />\r\nc.&nbsp;&nbsp; &nbsp;Accommodative Infacility: &nbsp;Accommodative infacility or accommodative inertia occurs when the accommodative system is slow in making a change or when there is a considerable lag between the stimulus to accommodation and the accommodative response. The patient often reports blurred distance vision immediately following sustained near work. &nbsp;<br />\r\nd.&nbsp;&nbsp; &nbsp;Paralysis of Accommodation: &nbsp;It is the condition in which the accommodative system fails to respond to any stimulus. It can be caused by the use of cycloplegic drugs or by trauma, ocular or systemic disease, toxicity or poisoning. The condition, which can be unilateral or bilateral, may be associated with a fixed, dilated pupil.<br />\r\na.&nbsp;&nbsp; &nbsp;Spasm of Accommodation: &nbsp;It is a condition caused by an over action of the ciliary muscle or excessive flexibility of the lens. Spasm or excess occurs when the accommodative response is greater than required for a given stimulus. In case of Accommodative spasm the patient cannot relax the accommodation properly. (Evans 1999, Griffin 2002)&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>2. Vergence Dysfunction</strong><br />\r\nVergence eye movements (both convergence and divergence) are prerequisite of normal binocular vision. Vergence eye movements minimise retinal disparity and place the two retinal images of a single object on corresponding retinal points. The term initial convergence is used to describe the movement of the eyes from the physiological position of rest to the position of single binocular fixation of a distance object.(7)<br />\r\nThe vergence dysfunction is classified into different categories. It was first developed by Duane for strabismus which was then modified for the classification of heterophoria and intermittent strabismus. These categories include convergence insufficiency, divergence excess, basic exophoria, convergence excess, divergence insufficiency and basic esophoria.<br />\r\na.&nbsp;&nbsp; &nbsp;Convergence Insufficiency<br />\r\nIt is diagnosed as a condition based on the finding of a remote near point of convergence and decreased fusional convergence at near fixation.(4) It is the most common vergence dysfunction.<br />\r\nb.&nbsp;&nbsp; &nbsp;Divergence Excess<br />\r\nDivergence excess can be described clinically as exophoria or exotropia at far greater than the near deviation by at least 10 prism diopters (&Delta;D). Divergence excess can be further divided into true or simulated DE on the basis of responses to occlusion. In simulated DE, occlusion dramatically affects slow vergence, increasing the angle of deviation slightly at distance and significantly at near. Occlusion does not affect true DE.<br />\r\nc.&nbsp;&nbsp; &nbsp;Basic Exophoria<br />\r\nThe patient with basic exophoria has a deviation of similar magnitude at both distance and near.<br />\r\nd.&nbsp;&nbsp; &nbsp;Convergence Excess<br />\r\nThe patient with convergence excess has a near deviation at least 3 &Delta;D more esophoric than the distance deviation. The etiology of the higher esodeviation at near most commonly is indicated by a high accommodative convergence/accommodation (AC/A) ratio.</p>\r\n\r\n<p>e.&nbsp;&nbsp; &nbsp;Divergence Insufficiency<br />\r\nIn a patient with divergence insufficiency, tonic esophoria is high when measured at distance but less at near. Symptomatic patients usually have low fusional divergence amplitudes at distance and low AC/A ratios.<br />\r\nf.&nbsp;&nbsp; &nbsp;Basic Esophoria<br />\r\nThe patient with basic esophoria has high tonic esophoria at distance, a similar degree of esophoria at near, and a normal AC/A ratio.<br />\r\nConvergence &nbsp;Insufficiency is reported to be prevalent in 17.3% of school children in a study conducted by Borsting et al.(10) The CIRS group reported 13% of fifth and sixth graders to have CI.(11) In elementary school children the prevalence of CI was 2.25% as reported by Letourneau and Duci.(12) The prevalence of accommodative insufficiency in school children is reported to be 17.3% by Borsting et al and 9.9% by CIRS group.(8,9)<br />\r\nThere is less number of studies concerning accommodation and vergence disorder among school children. Prevalence of other binocular vision disorders is reported only in adults or in optometry clinic. The prevalence from those studies varies from 1.5-15% for Convergence Excess, 0.1-0.7% for Divergence Insufficiency, 0.8% for Divergence Excess, 0.3-3.1% for Basic Exophoria and 0.6- 0.9% for Basic Esophoria.(13, 14)</p>\r\n\r\n<p><strong>1.3 Rationale</strong><br />\r\nIf only vision is tested, a significant number of children with binocular vision anomalies will go undiagnosed. Good visual acuity alone will not ensure optimal functioning in school children. Performing visual screening tests that only evaluate VA &nbsp;is inadequate and often misleading, in that passing the test leads both parents and teachers into believing that the child&#39;s visual system is functioning normally and should not be contributing to any visual difficulties experienced in the classroom. The visual system is considered normal even if the child displays symptoms like blur, loosing place while reading, headache, etc.&nbsp;<br />\r\nThough there are several eye health programs being run, emphasis is not being laid on the need of ruling out eye focusing and eye teaming problems. Certain behavioural problems affecting school performance such as inattention, avoiding reading and studying, and difficulty finishing assignments are observed by parents and teacher. A comprehensive visual examination often reveals that the child has a visual anomaly even in the presence of normal VA. &nbsp;So, this study will help to rule out those sources of problems.</p>\r\n\r\n<p><strong>General Objective</strong><br />\r\n&bull;&nbsp;&nbsp; &nbsp;To determine the prevalence of &nbsp;eye focusing and eye teaming disorders among school children between age 6- 16 years</p>\r\n\r\n<p><strong>Specific Objective</strong><br />\r\n&bull;&nbsp;&nbsp; &nbsp;To determine the distribution of convergence insufficiency in school children<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To determine the prevalence of fusional vergence deficits in school children<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To determine the prevalence of accommodative lag, insufficiency, infacility and abnormal relative accommodation<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To find out the correlation in vergence dysfunctions<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To find out the correlation in accommodative dysfunctions<br />\r\n&bull;&nbsp;&nbsp; &nbsp;To determine the interrelation between eye teaming and eye focusing disorders.</p>', NULL, '2023-02-27 07:26:19', '2023-02-27 07:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Province 1', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(2, 'Province 2', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(3, 'Province 3', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(4, 'Province 4', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(5, 'Province 5', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(6, 'Province 6', 1, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(7, 'Province 7', 1, '2023-02-20 07:01:30', '2023-02-20 07:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('normal','advanced') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `type`, `created_at`, `updated_at`) VALUES
(2, 4, 'Optometry Education in Nepal', 'optometry-education-in-nepal', 1, 'Optometry Education in Nepal', 'Optometry Education in Nepal', NULL, '<p>Optometry Education&nbsp;in Nepal: Current development and trends of service delivery by Prakash Paudel, Gauri Shankar Shrestha, Prakash Adhikari, Subodh Gnyawali</p>\r\n\r\n<p><a href=\"http://demo.optometrynepal.org/uploads/publication/files/8bba093f64999df85d04efcfd994412b.pdf\">Download</a></p>', 'uploads/publication/2df8398fdce40de7497c9da2cd94ed65.jpg', 'normal', '2023-02-21 18:01:17', '2023-02-21 18:14:06'),
(3, NULL, 'Helping earthquake victims restore their eye health', 'helping-earthquake-victims-restore-their-eye-health', 1, 'Helping earthquake victims restore their eye health ( A Project Supported by Optometry Giving Sight (OGS)', 'Helping earthquake victims restore their eye health ( A Project Supported by Optometry Giving Sight (OGS)', NULL, '<p>On 25<sup>th</sup>&nbsp;April 2015 a devastating earthquake of 7.8 on Richter scale struck three districts of Kathmandu (KTM) Valley and 11 districts of mountainous and hilly areas of Nepal. Over 8,660people are reported to have died, the number of injured has been exceeded 22, 000 and many have become disabled. Over 600,000 houses have been destroyed or are unlivable. Roads and infrastructure (government offices, health facilities, schools) were&nbsp; badly damaged.&nbsp;</p>\r\n\r\n<p>The human eye is vulnerable to this type of disaster. People may have injury to their eyes or acquire infections following entry of hazardous substances into their eyes. Most common eye hazards are dust, concrete and metal particles, falling or shifting debris, building materials, pieces of glass, smoke and noxious or poisonous gases, chemicals (acids, bases, fuels, solvents, lime, and wet or dry cement powder), cutting or welding light and electrical arcing, thermal hazards and fires etc. Many people may have lost their eyeglasses and have not had chance or resource to get a new one.</p>\r\n\r\n<p>Nepalese Association of Optometrists envisions a health support program in four village development committees of Dolakha district (Lamidanda, Pawati, Sahare, Kabre).&nbsp; &nbsp;In 2012 -2013, we had worked in these village development committees by holding mobile eye health camps. &nbsp;Because of our earlier work with these communities and their acute need, we feel it a moral duty to help the people of these areas by providing eye care services above other equally pressing needs. With our previous work in these communities and our relationship with the community we are better placed than others to help these communities.</p>\r\n\r\n<p><a href=\"http://demo.optometrynepal.org/uploads/publication/files/a5fedcbf08f8122617148dde4ad276ef.pdf\" target=\"_blank\">Download report</a></p>', NULL, 'normal', '2023-02-21 18:15:59', '2023-02-21 18:16:42'),
(4, NULL, 'Code of Ethics for Optometrist in Nepal', 'code-of-ethics-for-optometrist-in-nepal', 1, 'Code of Ethics for Optometrist in Nepal published by Nepal Health Professional Council (N.H.P.C)', 'Code of Ethics for Optometrist in Nepal published by Nepal Health Professional Council (N.H.P.C)', NULL, '<p>The purpose of this document is to provide health professionals and the general public with an overview of the practice activities of the optometrists and how they relate to the needs of the public and to the activities of other health care providers.</p>\r\n\r\n<p>An Optometrist is an independent eye care professional who specializes in the examination, diagnosis, treatment, management and prevention of diseases and disorders of the visual system, the eye and associated structures.</p>\r\n\r\n<p>Optometry is a healthcare profession that is autonomous, educated, and regulated (licensed/registered), and optometrists are the primary healthcare practitioners of the eye and visual system who provide comprehensive eye and vision care, which includes refraction and dispensing, detection/diagnosis and management of disease in the eye, and the rehabilitation of conditions of the visual system.</p>\r\n\r\n<p><a href=\"http://demo.optometrynepal.org/uploads/publication/files/622db7c4596d6bbbbd8b2a63a8852405.pdf\">Download Code of Ethics for Optometrist by NHPC</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://nhpc.gov.np/\" target=\"_blank\">https://nhpc.gov.np/</a></p>\r\n\r\n<p><a href=\"https://worldcouncilofoptometry.info/concept-of-optometry/\" target=\"_blank\">https://worldcouncilofoptometry.info/concept-of-optometry/</a></p>', 'uploads/publication/1d08904bcadb870da0b10e0878eeb888.jpg', 'normal', '2023-02-21 18:22:42', '2023-02-21 18:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `publication_files`
--

CREATE TABLE `publication_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publication_files`
--

INSERT INTO `publication_files` (`id`, `name`, `file`, `publication_id`, `created_at`, `updated_at`) VALUES
(1, 'Optom edu Nepal', 'uploads/publication/files/8bba093f64999df85d04efcfd994412b.pdf', 2, '2023-02-21 18:01:17', '2023-02-21 18:01:17'),
(2, 'publications_Report I- NAO to OGS', 'uploads/publication/files/a5fedcbf08f8122617148dde4ad276ef.pdf', 3, '2023-02-21 18:15:59', '2023-02-21 18:15:59'),
(3, 'publications_Code Of Ethics_ Optometrists', 'uploads/publication/files/622db7c4596d6bbbbd8b2a63a8852405.pdf', 4, '2023-02-21 18:22:42', '2023-02-21 18:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `register_travel_grants`
--

CREATE TABLE `register_travel_grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL DEFAULT '2023-03-05',
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_grant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_number` int(11) NOT NULL,
  `grant_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_travel_grants`
--

INSERT INTO `register_travel_grants` (`id`, `reason`, `date`, `venue`, `expected_grant`, `membership_number`, `grant_status`, `created_at`, `updated_at`) VALUES
(1, 'test', '2023-03-18', 'asd', '2323', 222, 'apply_for_elsewhere', '2023-03-18 14:05:53', '2023-03-18 14:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `menu_id`, `title`, `slug`, `status`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Necessitatibus omnis id.', 'rerum-maiores-voluptates-sit-quis-numquam-maxime', 1, 'Porro neque qui.', 'Id adipisci.', 'Voluptatum sed dolorum.', 'Aut quia nostrum sequi.', 'https://via.placeholder.com/640x480.png/008877?text=sed', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(2, NULL, 'Repudiandae quod ipsa mollitia.', 'eos-facere-quibusdam-est-et-qui', 1, 'In soluta harum esse animi.', 'Necessitatibus voluptatem recusandae rerum odit.', 'Qui quisquam voluptatem.', 'Ratione expedita sunt.', 'https://via.placeholder.com/640x480.png/00bbcc?text=aut', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(3, NULL, 'Ratione porro placeat quis illum.', 'magni-rerum-voluptatum-iusto-sed', 1, 'Dolorem perspiciatis omnis iusto.', 'Officiis natus.', 'Eos ut quia.', 'Deserunt necessitatibus fuga mollitia.', 'https://via.placeholder.com/640x480.png/00bb77?text=magni', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(4, NULL, 'Possimus sed fuga numquam.', 'inventore-cum-dignissimos-et-pariatur-architecto-ut-fuga-dolorum', 1, 'Voluptatibus hic quidem.', 'Officiis temporibus laboriosam et.', 'Earum at.', 'Suscipit at qui architecto.', 'https://via.placeholder.com/640x480.png/0077cc?text=aspernatur', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(5, NULL, 'Aspernatur qui eligendi alias.', 'rerum-sit-maiores-ut-nisi-quae-aut', 0, 'Ut enim exercitationem repellat.', 'Molestias dolor est.', 'Nihil fuga nisi dicta.', 'Quia mollitia dolor voluptatem.', 'https://via.placeholder.com/640x480.png/005588?text=enim', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(6, NULL, 'Recusandae magnam blanditiis libero.', 'et-sit-inventore-eum-illum-cum-omnis', 1, 'Nemo et sunt qui.', 'Enim earum excepturi.', 'Autem sit et.', 'Quasi eligendi corporis.', 'https://via.placeholder.com/640x480.png/000088?text=atque', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(7, NULL, 'Id similique et.', 'odio-provident-sit-aperiam-quibusdam-ut-vero', 1, 'Quasi consectetur asperiores.', 'Autem sit est.', 'Odit quos pariatur.', 'Eum corrupti aut.', 'https://via.placeholder.com/640x480.png/003366?text=qui', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(8, NULL, 'Pariatur iusto.', 'aut-architecto-doloribus-porro-blanditiis', 0, 'Quod beatae occaecati maiores.', 'Et minima magnam.', 'Et et quam.', 'Distinctio repellat ut aut.', 'https://via.placeholder.com/640x480.png/001144?text=et', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(9, NULL, 'Voluptatem sequi velit sequi.', 'ratione-labore-aut-cumque', 1, 'Itaque asperiores natus sed.', 'Quo sed.', 'Soluta laboriosam magni eveniet.', 'Unde sunt consequuntur.', 'https://via.placeholder.com/640x480.png/00aa22?text=velit', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(10, NULL, 'Eos ut tempora.', 'et-dolorem-adipisci-maiores-repudiandae-quia-suscipit-itaque', 0, 'Unde sapiente distinctio.', 'Vel asperiores occaecati.', 'Omnis unde consequatur.', 'Odio iusto porro consequatur.', 'https://via.placeholder.com/640x480.png/002211?text=harum', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(11, NULL, 'Veniam autem earum.', 'ut-et-sequi-non-et-expedita-assumenda', 1, 'Placeat sunt molestiae quos perferendis.', 'Unde aut in.', 'Distinctio maiores a.', 'Dolores autem repudiandae.', 'https://via.placeholder.com/640x480.png/0055ee?text=molestias', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(12, NULL, 'Doloremque unde qui quas totam.', 'ut-ut-molestiae-et', 0, 'Et veritatis ea expedita.', 'Voluptas dignissimos itaque.', 'Quo corporis voluptas voluptatum.', 'Voluptatem impedit officiis omnis.', 'https://via.placeholder.com/640x480.png/00aa00?text=facilis', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(13, NULL, 'Sit molestias beatae maxime quo.', 'porro-vitae-rerum-laboriosam-assumenda-dolorem', 1, 'Inventore iusto maiores ut voluptates.', 'Est aut et.', 'Nostrum omnis quaerat ipsa.', 'Enim harum cum ut.', 'https://via.placeholder.com/640x480.png/0022bb?text=quis', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(14, NULL, 'A provident rerum qui.', 'non-ut-molestiae-laudantium-consectetur-consequatur-et', 0, 'Dolorem id.', 'Asperiores magni autem.', 'Quam mollitia est quo.', 'Veritatis perferendis consequuntur.', 'https://via.placeholder.com/640x480.png/0099dd?text=consequuntur', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(15, NULL, 'A repudiandae enim molestiae.', 'consequatur-commodi-et-inventore', 0, 'Nisi architecto sed ut est.', 'Odio ipsa praesentium molestiae.', 'Quis distinctio et.', 'Sunt qui beatae modi.', 'https://via.placeholder.com/640x480.png/00dd99?text=velit', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(16, NULL, 'Iusto dolore sit.', 'ipsum-libero-et-atque-quidem-quibusdam-iste', 0, 'Voluptatem enim rerum.', 'Ut consectetur voluptates.', 'Dicta qui expedita.', 'Repudiandae architecto animi sunt.', 'https://via.placeholder.com/640x480.png/00ee00?text=aut', '2023-02-20 07:01:28', '2023-02-20 07:01:28'),
(17, NULL, 'Non ipsam enim.', 'eos-quis-id-cumque-id', 1, 'Fuga eum vel sed et.', 'In ipsum et aut.', 'Beatae at doloribus voluptas.', 'Quibusdam dignissimos ipsum porro.', 'https://via.placeholder.com/640x480.png/00cc66?text=iure', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(18, NULL, 'Voluptas incidunt est.', 'pariatur-quos-possimus-itaque-quo-minus', 0, 'Maxime expedita quis dolorem.', 'Aut sapiente quam.', 'Quo totam.', 'Non similique voluptas eligendi.', 'https://via.placeholder.com/640x480.png/0022bb?text=pariatur', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(19, NULL, 'Laboriosam sit est ratione.', 'nostrum-repellendus-qui-voluptate-amet', 1, 'Distinctio sed porro.', 'Nostrum sequi magnam dolorem.', 'Qui incidunt sed ipsum.', 'Rerum est rerum dolore.', 'https://via.placeholder.com/640x480.png/0000cc?text=illo', '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(20, NULL, 'Omnis sunt quia.', 'tenetur-ut-culpa-quia-ullam-eaque-libero-aspernatur', 1, 'Ratione rerum dolorum et.', 'Et et voluptate libero.', 'Ut sit sint culpa eius.', 'Eligendi soluta quis quasi.', 'https://via.placeholder.com/640x480.png/0000bb?text=fugiat', '2023-02-20 07:01:29', '2023-02-20 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `address`, `phone`, `mobile`, `image`, `icons`, `fax`, `post_box`, `website`, `meta_keywords`, `meta_title`, `meta_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nepalese Association of <br> Optometrists (NAO)', 'info@optometrynepal.org, naonepal@yahoo.com', 'BP Koirala Lions Center for Ophthalmic Studies, Maharajgunj, Kathmandu, Nepal', '+9779841406785 / +9779841754931', '+977-2345654', 'uploads/logo/logo.png', 'uploads/logo/logo.png', '', '', '', '', '', '', 'The education of optometry started in 1998 to meet the shortage of\r\n             eye health professionals in Nepal. The course started with a three\r\n             years program which was upgraded to four years in 2005.\r\n              With increasing number of graduates in optometry in Nepal,\r\n              the optometrists felt the need of an association to maintain\r\n              solidarity among fellow professionals and fight for the right\r\n               of its members', '2023-02-20 07:01:30', '2023-02-20 07:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `travel_grants`
--

CREATE TABLE `travel_grants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_grants`
--

INSERT INTO `travel_grants` (`id`, `menu_id`, `title`, `slug`, `status`, `date`, `end_date`, `meta_title`, `meta_description`, `intro_text`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'In numquam molestiae veritatis nihil eligendi maiores fuga.', 'sed-consectetur-repudiandae-veniam-minima', 0, '1999-01-30', '1983-12-19', 'Voluptatibus laboriosam voluptate et deleniti.', 'Ut placeat et sunt asperiores quia.', 'Officiis et neque iusto doloribus.', 'Rerum molestias aspernatur et occaecati sed debitis magni.', 'https://via.placeholder.com/640x480.png/008855?text=dolorem', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(2, NULL, 'Dolorem distinctio tempore ipsa est corporis ipsum.', 'est-et-ut-provident-placeat-voluptatem', 0, '1970-08-18', '1977-02-26', 'At repellendus quia et odio.', 'Repellat quidem provident suscipit vero doloribus vel recusandae.', 'In et ipsa nemo quasi.', 'Odio nemo non voluptas et vero.', 'https://via.placeholder.com/640x480.png/00eecc?text=at', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(3, NULL, 'Ea enim et ut itaque ut incidunt.', 'in-est-ipsum-necessitatibus-quia', 0, '1999-10-11', '2000-01-20', 'Magni optio ullam temporibus et est ut et est.', 'Consequatur dolor dolorem itaque et corrupti occaecati ut.', 'Reprehenderit error eos maxime accusamus ea distinctio cum.', 'Et et et et.', 'https://via.placeholder.com/640x480.png/003333?text=saepe', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(4, NULL, 'Quisquam vero vero quo et sed.', 'sed-eum-temporibus-suscipit-ut', 0, '2007-11-20', '2022-05-12', 'Laudantium consequatur suscipit ut illum.', 'Nesciunt ipsam porro fugiat.', 'Reprehenderit laboriosam voluptatum rerum adipisci.', 'Aut eveniet cupiditate quod.', 'https://via.placeholder.com/640x480.png/0022dd?text=sint', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(5, NULL, 'Ut aut dolores unde placeat.', 'dolores-accusamus-et-quaerat-non-suscipit', 0, '1983-12-13', '1978-03-12', 'Repellat quis eius magnam quod molestiae officiis fuga.', 'Sed odit qui perspiciatis et quo vel odit.', 'Recusandae est deleniti earum a distinctio.', 'Quos consequatur libero voluptas error.', 'https://via.placeholder.com/640x480.png/006677?text=blanditiis', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(6, NULL, 'Earum debitis eum quis mollitia aut vero.', 'accusamus-aperiam-est-distinctio-omnis-voluptas-dolorem', 0, '2008-07-22', '1999-02-20', 'Voluptatem sint quo molestias perspiciatis quod.', 'Quae aut molestias culpa sit fuga illo eum doloremque.', 'Qui quae quas quis nulla qui amet.', 'Neque provident repudiandae soluta facere ut quis.', 'https://via.placeholder.com/640x480.png/005500?text=assumenda', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(7, NULL, 'Dolores quae quae autem harum veritatis cupiditate nisi unde.', 'aut-corporis-incidunt-voluptate-dolore-quia-rerum-labore-sunt', 0, '1971-12-15', '2015-10-02', 'Ea sit et fugit impedit voluptatem et aut odit.', 'Vel asperiores praesentium impedit esse totam et voluptate.', 'Deleniti similique et commodi.', 'Necessitatibus earum reiciendis error et dolorum voluptatem.', 'https://via.placeholder.com/640x480.png/000022?text=quos', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(8, NULL, 'Atque et modi quis nesciunt sed.', 'ad-voluptatem-doloribus-fugit', 0, '1978-03-10', '1992-12-15', 'Inventore et nemo nulla iste veniam ratione rem dolorem.', 'Aut sit ut deleniti.', 'Voluptatibus provident quia veniam earum.', 'Alias in et molestias eum quisquam maiores.', 'https://via.placeholder.com/640x480.png/00ee22?text=et', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(9, NULL, 'Rem qui et dicta et necessitatibus tempora ipsum.', 'placeat-sed-consequatur-incidunt-quidem-nam-eveniet-quos', 0, '1979-02-18', '1970-09-17', 'Neque ullam odio sequi sit.', 'Culpa eveniet voluptate sit voluptate odit debitis.', 'Possimus earum iure laboriosam consectetur neque quis quasi animi.', 'Aut occaecati nulla vero labore.', 'https://via.placeholder.com/640x480.png/0066cc?text=repellendus', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(10, NULL, 'Neque porro repellendus temporibus vel repellendus.', 'cum-optio-officiis-et-iusto-exercitationem-distinctio-ut-quae', 0, '1984-04-28', '1993-10-28', 'Nam debitis nam vel pariatur eius hic.', 'Et ut alias ullam molestiae.', 'Quibusdam perferendis vel sint quam fuga.', 'Accusamus dolores et qui omnis totam dolores quaerat.', 'https://via.placeholder.com/640x480.png/00aa88?text=qui', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(11, NULL, 'Facilis neque harum molestiae et nihil.', 'maxime-qui-consectetur-aut-aliquid-hic', 0, '1997-11-26', '2007-08-28', 'Dolorem ut incidunt laborum laboriosam.', 'Error suscipit aut nesciunt molestiae quo optio perspiciatis.', 'Autem dolorem voluptas omnis voluptas hic aliquam.', 'Quo nihil nihil amet laboriosam ducimus sunt.', 'https://via.placeholder.com/640x480.png/0011bb?text=odio', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(12, NULL, 'Odit porro impedit ea mollitia quas.', 'et-ut-aut-repudiandae-qui-quia-nulla', 0, '1981-05-28', '1989-06-14', 'Iste ut eos rerum quisquam.', 'Molestias placeat ex veniam ratione eveniet aut.', 'Recusandae molestias quis tempora nulla.', 'Corrupti eligendi et quod ut.', 'https://via.placeholder.com/640x480.png/009944?text=quidem', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(13, NULL, 'Quis occaecati aut dolores qui nam sunt.', 'error-laudantium-laboriosam-omnis-velit-voluptas', 0, '2019-06-03', '2007-03-08', 'Repellendus pariatur ullam quidem.', 'Ad sunt voluptas aut aperiam veniam eaque cumque.', 'In tempore delectus laboriosam ut aliquam.', 'Quis fugit natus non sed.', 'https://via.placeholder.com/640x480.png/007766?text=tempore', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(14, NULL, 'Iusto aut ratione iure enim et.', 'ut-provident-harum-saepe-voluptatem-quidem', 0, '2018-11-19', '2017-04-10', 'Cupiditate adipisci ut nisi quibusdam omnis.', 'Non sed iusto eveniet enim eveniet molestiae modi.', 'Qui neque mollitia consequatur dolor.', 'Sit beatae earum ut vel.', 'https://via.placeholder.com/640x480.png/009922?text=aut', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(15, NULL, 'Deserunt voluptas omnis nemo et suscipit odit.', 'est-dolor-ratione-esse-blanditiis', 0, '1994-03-09', '1976-05-09', 'Voluptatum repudiandae et cupiditate voluptatum.', 'Iusto explicabo est vel rerum voluptatum facere.', 'Quia nulla omnis ut quo dolores sed sapiente.', 'Adipisci cum asperiores praesentium et et numquam sit.', 'https://via.placeholder.com/640x480.png/0033dd?text=magni', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(16, NULL, 'Sunt quia distinctio tempora ea pariatur et iure.', 'quis-nisi-deserunt-porro-et-commodi-maiores-quibusdam', 0, '2017-08-20', '1993-03-02', 'Dolor adipisci a atque architecto saepe.', 'Nihil minus sapiente nulla et.', 'A illum nesciunt doloremque velit veniam minus beatae explicabo.', 'Et quaerat tenetur est consectetur quis porro.', 'https://via.placeholder.com/640x480.png/00cc77?text=ipsa', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(17, NULL, 'Perspiciatis non voluptatem perferendis non magnam deserunt.', 'soluta-dolorem-maxime-ea-et-nisi-assumenda-harum', 0, '1993-02-05', '2013-07-23', 'Est deleniti nobis perspiciatis molestiae et sunt aut.', 'At assumenda similique dolor sint iusto eos ea.', 'Asperiores ut saepe ut sint sit.', 'Dicta sed nisi ea minus sint.', 'https://via.placeholder.com/640x480.png/005566?text=iusto', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(18, NULL, 'Velit commodi eligendi quisquam nisi.', 'quia-fugit-harum-voluptatem-nesciunt-ducimus', 0, '2003-11-10', '2012-08-18', 'Adipisci maxime debitis inventore eum rerum.', 'Natus non error et ut voluptatem.', 'At vitae molestiae quo perferendis assumenda magni necessitatibus.', 'Est aliquam eius aperiam neque dignissimos voluptatem.', 'https://via.placeholder.com/640x480.png/006655?text=consectetur', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(19, NULL, 'Reprehenderit quas distinctio sed et est.', 'necessitatibus-repellendus-nulla-voluptatum', 0, '2004-05-08', '1994-02-24', 'Architecto architecto aut occaecati aliquid.', 'Repellat aut vitae deserunt alias eos.', 'Aliquid quos et et dolor quam consequuntur.', 'Fuga quos perspiciatis sed quas tempora quae.', 'https://via.placeholder.com/640x480.png/00aa99?text=molestiae', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29'),
(20, NULL, 'Est omnis corporis et velit.', 'sint-animi-iusto-provident-voluptates', 0, '2021-10-16', '2021-05-14', 'Adipisci quisquam nemo sed ipsum culpa laborum quia ea.', 'Enim beatae qui fuga quisquam et corporis.', 'Dolorum ut ut veniam voluptates placeat et.', 'Perferendis ut accusantium qui quo.', 'https://via.placeholder.com/640x480.png/00ee77?text=sit', NULL, '2023-02-20 07:01:29', '2023-02-20 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `travel_grant_forms`
--

CREATE TABLE `travel_grant_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_grant_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `municipality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_status` enum('pending','active','suspended','deleted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `voucher_file` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `password_reset_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_password_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `membership_type_id`, `name`, `email`, `gender`, `phone`, `password`, `date_of_birth`, `account_status`, `voucher_file`, `voucher_status`, `password_reset_token`, `is_password_reset`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shailendra Basnet', 'shailendra.basnet@gmail.com', 'male', '9801169141', '$2y$10$BxZXzYzopE7/yszhxQWBDOmwjSA7jw2LYNhduZz9an/1F9RhPVeju', '1980-01-03', 'active', 'public/users/voucher/otAeCxtcwSR7O55d3vNk9mlBs7sqGvwDBWggwi3j.jpg', 'pending', 'xdXPTtEFZNexLZWwM7mA97wrq0C7a4FEbWDXfQMPDTIaFpa0dSUg9dMuP2cS', 0, '2023-02-28 07:37:33', '2023-04-04 12:39:34'),
(2, 1, 'Prashant Khanal', 'prashantkhanal379@gmail.com', 'male', '9814785699', '$2y$10$.8.ArBayEBWCroceYUrYm.RUsULd3wMNjfs0W5EeTIjYqEOoQVxqW', '1997-01-17', 'pending', NULL, 'pending', NULL, 0, '2023-03-15 10:49:27', '2023-03-15 10:49:27'),
(3, 1, 'pratiksha khatiwada', 'pratikshakhatiwada06@gmail.com', 'female', '+9779866470624', '$2y$10$eyi4Rd2vH5vH25LA86u5qObgqMbxz481qaZPFC8wS.AY/8IU3URJa', '1999-11-11', 'pending', NULL, 'pending', NULL, 0, '2023-03-15 11:55:38', '2023-03-15 11:55:38'),
(4, 1, 'ram dhital', 'eprabidhi@gmail.com', 'male', '9851105974', '$2y$10$8Sct3E3CKwi5FSPjVo3rFOZq5SUNNnfZTbx27iMKKSSlz4ohmtpFK', '2023-05-01', 'active', 'public/users/voucher/nHj5rd0QEiTODagcpAKz7mqY2BdR7tzfBRoMoxs4.jpg', 'pending', NULL, 0, '2023-05-01 01:09:48', '2023-05-01 02:04:37'),
(5, 2, 'Santosh Shrestha', 'n@gmail.com', 'male', '78997979897', 'testing', '2023-04-04', 'pending', NULL, 'pending', NULL, 0, '2023-05-01 03:43:16', '2023-05-01 04:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_country` bigint(20) UNSIGNED NOT NULL,
  `permanent_province` bigint(20) UNSIGNED NOT NULL,
  `permanent_district` bigint(20) UNSIGNED NOT NULL,
  `permanent_municipality` bigint(20) UNSIGNED NOT NULL,
  `permanent_tole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temporary_country` bigint(20) UNSIGNED DEFAULT NULL,
  `temporary_province` bigint(20) UNSIGNED DEFAULT NULL,
  `temporary_district` bigint(20) UNSIGNED DEFAULT NULL,
  `temporary_municipality` bigint(20) UNSIGNED DEFAULT NULL,
  `temporary_tole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `permanent_country`, `permanent_province`, `permanent_district`, `permanent_municipality`, `permanent_tole`, `temporary_country`, `temporary_province`, `temporary_district`, `temporary_municipality`, `temporary_tole`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 28, 62, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-28 07:37:49', '2023-02-28 07:37:49'),
(2, 2, 1, 3, 28, 54, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-15 10:50:03', '2023-03-15 10:50:03'),
(3, 3, 1, 3, 27, 444, 'galchhi', NULL, NULL, NULL, NULL, NULL, '2023-03-15 11:56:06', '2023-03-15 11:56:06'),
(4, 4, 1, 1, 6, 47, NULL, 1, 1, 1, 43, NULL, '2023-05-01 01:10:15', '2023-05-01 02:02:51'),
(5, 5, 1, 2, 17, 82, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-01 04:26:25', '2023-05-01 04:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `front_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_graduation` date DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_registration` date NOT NULL DEFAULT '2023-02-20',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `front_size`, `back_size`, `image`, `citizenship_no`, `qualification`, `year_of_graduation`, `university`, `date_of_registration`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/users/8a85336c0b35685e74b5e0a978e1cdff.jpg', 'uploads/users/80c9ea4c9c426557bccb48515232870b.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-20', '2023-02-28 07:38:32', '2023-02-28 07:38:32'),
(2, 3, 'uploads/users/7b8e73dcdf91b951420f5a7ea8d4ce76.jpg', 'uploads/users/a94461983c3e3b3e351d10bc85cec9b9.jpg', NULL, NULL, NULL, NULL, NULL, '2023-02-20', '2023-03-15 11:56:42', '2023-03-15 11:56:42'),
(3, 4, 'uploads/users/feb9de474967b6dbedec55c7bb819240.jpg', 'uploads/users/ac37bbcbdb93875ddf55beb25ea9e12f.jpg', 'uploads/users/2c33a5f391fb37f9c7c54611592c8df7.jpg', '123132', 'Masters', '2023-05-02', 'test', '2023-02-20', '2023-05-01 01:10:46', '2023-05-01 02:03:53'),
(4, 5, 'uploads/users/349355f284e32b27e8d0729fb8c0f04e.jpg', 'uploads/users/e672a935df6527bb0e66771ad723b92e.png', 'uploads/users/3ed6c4b480d52354b9bc0751cdd1d6ab.jpg', NULL, NULL, NULL, NULL, '2023-02-20', '2023-05-01 04:29:01', '2023-05-01 04:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_title_unique` (`title`),
  ADD UNIQUE KEY `abouts_slug_unique` (`slug`),
  ADD KEY `abouts_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activities_title_unique` (`title`),
  ADD UNIQUE KEY `activities_slug_unique` (`slug`),
  ADD KEY `activities_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_galleries`
--
ALTER TABLE `admin_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_galleries_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `awards_title_unique` (`title`),
  ADD UNIQUE KEY `awards_slug_unique` (`slug`),
  ADD KEY `awards_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_title_unique` (`title`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conferences_title_unique` (`title`),
  ADD UNIQUE KEY `conferences_slug_unique` (`slug`),
  ADD KEY `conferences_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `conference_forms`
--
ALTER TABLE `conference_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conference_forms_conference_id_foreign` (`conference_id`),
  ADD KEY `conference_forms_country_id_foreign` (`country_id`),
  ADD KEY `conference_forms_province_id_foreign` (`province_id`),
  ADD KEY `conference_forms_district_id_foreign` (`district_id`),
  ADD KEY `conference_forms_municipality_id_foreign` (`municipality_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contents_slug_unique` (`slug`),
  ADD KEY `contents_content_type_id_foreign` (`content_type_id`);

--
-- Indexes for table `content_types`
--
ALTER TABLE `content_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `content_types_title_unique` (`title`),
  ADD UNIQUE KEY `content_types_slug_unique` (`slug`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_title_unique` (`title`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `f_r_a_f_s`
--
ALTER TABLE `f_r_a_f_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `f_r_a_f_s_title_unique` (`title`),
  ADD UNIQUE KEY `f_r_a_f_s_slug_unique` (`slug`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_title_unique` (`title`),
  ADD UNIQUE KEY `galleries_slug_unique` (`slug`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `membership_types`
--
ALTER TABLE `membership_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membership_types_type_unique` (`type`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipalities_district_id_foreign` (`district_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_title_unique` (`title`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_title_unique` (`title`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`),
  ADD KEY `projects_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinces_country_id_foreign` (`country_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publications_title_unique` (`title`),
  ADD UNIQUE KEY `publications_slug_unique` (`slug`),
  ADD KEY `publications_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `publication_files`
--
ALTER TABLE `publication_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publication_files_publication_id_foreign` (`publication_id`);

--
-- Indexes for table `register_travel_grants`
--
ALTER TABLE `register_travel_grants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rewards_title_unique` (`title`),
  ADD UNIQUE KEY `rewards_slug_unique` (`slug`),
  ADD KEY `rewards_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_grants`
--
ALTER TABLE `travel_grants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `travel_grants_title_unique` (`title`),
  ADD UNIQUE KEY `travel_grants_slug_unique` (`slug`),
  ADD KEY `travel_grants_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `travel_grant_forms`
--
ALTER TABLE `travel_grant_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `travel_grant_forms_travel_grant_id_foreign` (`travel_grant_id`),
  ADD KEY `travel_grant_forms_country_id_foreign` (`country_id`),
  ADD KEY `travel_grant_forms_province_id_foreign` (`province_id`),
  ADD KEY `travel_grant_forms_district_id_foreign` (`district_id`),
  ADD KEY `travel_grant_forms_municipality_id_foreign` (`municipality_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_membership_type_id_foreign` (`membership_type_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`),
  ADD KEY `user_addresses_permanent_country_foreign` (`permanent_country`),
  ADD KEY `user_addresses_permanent_province_foreign` (`permanent_province`),
  ADD KEY `user_addresses_permanent_district_foreign` (`permanent_district`),
  ADD KEY `user_addresses_permanent_municipality_foreign` (`permanent_municipality`),
  ADD KEY `user_addresses_temporary_country_foreign` (`temporary_country`),
  ADD KEY `user_addresses_temporary_province_foreign` (`temporary_province`),
  ADD KEY `user_addresses_temporary_district_foreign` (`temporary_district`),
  ADD KEY `user_addresses_temporary_municipality_foreign` (`temporary_municipality`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_galleries`
--
ALTER TABLE `admin_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conference_forms`
--
ALTER TABLE `conference_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content_types`
--
ALTER TABLE `content_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `f_r_a_f_s`
--
ALTER TABLE `f_r_a_f_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `membership_types`
--
ALTER TABLE `membership_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=754;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publication_files`
--
ALTER TABLE `publication_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_travel_grants`
--
ALTER TABLE `register_travel_grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_grants`
--
ALTER TABLE `travel_grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `travel_grant_forms`
--
ALTER TABLE `travel_grant_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_galleries`
--
ALTER TABLE `admin_galleries`
  ADD CONSTRAINT `admin_galleries_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conferences`
--
ALTER TABLE `conferences`
  ADD CONSTRAINT `conferences_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `conference_forms`
--
ALTER TABLE `conference_forms`
  ADD CONSTRAINT `conference_forms_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conference_forms_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conference_forms_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conference_forms_municipality_id_foreign` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `conference_forms_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_content_type_id_foreign` FOREIGN KEY (`content_type_id`) REFERENCES `content_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD CONSTRAINT `municipalities_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `publication_files`
--
ALTER TABLE `publication_files`
  ADD CONSTRAINT `publication_files_publication_id_foreign` FOREIGN KEY (`publication_id`) REFERENCES `publications` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `rewards_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `travel_grants`
--
ALTER TABLE `travel_grants`
  ADD CONSTRAINT `travel_grants_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `travel_grant_forms`
--
ALTER TABLE `travel_grant_forms`
  ADD CONSTRAINT `travel_grant_forms_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `travel_grant_forms_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `travel_grant_forms_municipality_id_foreign` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `travel_grant_forms_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `travel_grant_forms_travel_grant_id_foreign` FOREIGN KEY (`travel_grant_id`) REFERENCES `travel_grants` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_membership_type_id_foreign` FOREIGN KEY (`membership_type_id`) REFERENCES `membership_types` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_permanent_country_foreign` FOREIGN KEY (`permanent_country`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_permanent_district_foreign` FOREIGN KEY (`permanent_district`) REFERENCES `districts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_permanent_municipality_foreign` FOREIGN KEY (`permanent_municipality`) REFERENCES `municipalities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_permanent_province_foreign` FOREIGN KEY (`permanent_province`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_temporary_country_foreign` FOREIGN KEY (`temporary_country`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_temporary_district_foreign` FOREIGN KEY (`temporary_district`) REFERENCES `districts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_temporary_municipality_foreign` FOREIGN KEY (`temporary_municipality`) REFERENCES `municipalities` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_temporary_province_foreign` FOREIGN KEY (`temporary_province`) REFERENCES `provinces` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD CONSTRAINT `user_documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
