-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2017 at 06:34 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ufxstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BlogName` varchar(255) NOT NULL,
  `BlogDate` varchar(255) NOT NULL,
  `BlogIn` varchar(255) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Discription` text NOT NULL,
  `ImgPath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `BlogName`, `BlogDate`, `BlogIn`, `Tag`, `Date`, `Year`, `Discription`, `ImgPath`) VALUES
(8, 'Living with or LEAVING THALASSEMIA - by Kaustav biswas', '13-05-2017', 'HEALTH & CARE | MEDICAL | APPOLO HOSPITAL | THALASSEMIA', 'All', '08', 'May', '<p class="MsoNormal">Md Faisal Hussain, stays in Bangladesh his Daughter , WARAKA</p>\r\n<p class="MsoNormal">She is a THALASSEMIA patient&hellip;&hellip;..</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">When she is 7 months old she was having severe Diarrhoea, they took her to hospital and waraka was recommended a blood test doctors diagnosed as THALASSEMIA...</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">when waraka was 7 months old her parents found she was not walking properly</p>\r\n<p class="MsoNormal">She was not having proper growth She was unable to play like other kids&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p class="MsoNormal">they feel so bad ,and were upset about her daughter situation they &nbsp;feel like crying&hellip;..</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Then they &nbsp;asked their local doctor about the solution about what to do to cure her , ask him to show them a path to cure her, an address where we can help our daughter</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">The doctor said "yes I know a doctor in Kolkata she cured a thalassemia patient of mine . The patient name was Aamira" , then waraka''s parents contacted Aamira&rsquo;s mother and went to her home&hellip;they discussed and she told that</p>\r\n<p>&nbsp;</p>\r\n<p class="MsoNormal">She is Dr SHILPA BHARTIA from Apollo Gleneagles Hospital , Kolkata is the best Dr to treat Thalassemia...If you go there you can have proper treatment.</p>\r\n<p class="MsoNormal">Waraka ,a 4 year old girl</p>\r\n<p class="MsoNormal">who was sitting along with her parents</p>\r\n<p class="MsoNormal">In the hope of expecting a miracle</p>\r\n<p class="MsoNormal">Listening to the story of Aamira,</p>\r\n<p class="MsoNormal">Waraka&rsquo;s parents also had a new ray of hope in their eyes.</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Waraka has got Thalassemia Major ,</p>\r\n<p class="MsoNormal">It is a genetic blood disorder</p>\r\n<p class="MsoNormal">In which there is an inability to make blood.</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">When we met Waraka&rsquo;s parents for the 1<sup>st</sup> time they had many questions to Dr Shilpa Bhatiya...</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Will their daughter be cured ?</p>\r\n<p class="MsoNormal">Is there any risk of death during procedure ?</p>\r\n<p class="MsoNormal">What if the procedure failes ?</p>\r\n<p class="MsoNormal">What are the cost of procedure ?</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">So they discussed in detail that</p>\r\n<p class="MsoNormal">The BONE MARROW TRANSPLANT is the only known cure for&nbsp; thalassemia</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">The treatment started from 21<sup>st</sup> November 2016 in the hospital</p>\r\n<p class="MsoNormal">Her pain was unbearable.</p>\r\n<p class="MsoNormal">Doctor said that she will be given high dose chemo</p>\r\n<p class="MsoNormal">And entire marrow count will be brought down to zero</p>\r\n<p class="MsoNormal">Then Amina&rsquo;s bone marrow will be transplanted</p>\r\n<p class="MsoNormal">Doctor mam told me ,</p>\r\n<p class="MsoNormal">Just after 10 days of transplant ,</p>\r\n<p class="MsoNormal">every blood count started to rise</p>\r\n<p class="MsoNormal">On 27 th we got a report and a call from Doctor</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Saying that &ldquo; waraka is now completely cured ..</p>\r\n<p class="MsoNormal">The report is so good &ldquo;</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">I cried out of joy,</p>\r\n<p class="MsoNormal">I cant express my emotion right now &hellip;</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Apollo Gleneagles Hospital in Kolkata provides</p>\r\n<p class="MsoNormal">an excellent facility for doing the Bone marrow transplantation.</p>\r\n<p class="MsoNormal">We have a dedicated Bone marrow transplant unit.</p>\r\n<p class="MsoNormal">And despite being a private hospital ,</p>\r\n<p class="MsoNormal">The total&nbsp; cost of waraka&rsquo;s treatment</p>\r\n<p class="MsoNormal">Was Rs 9 Lacks for an Allogenic Bone Marrow transplant.</p>\r\n<p class="MsoNormal">It has been an immense effort on the team</p>\r\n<p class="MsoNormal">to try and help the needy patients.</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">We are proud to be the part of the institute.</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">&nbsp;</p>\r\n<p class="MsoNormal">Here in this short docu fiction we have bring out the story of waraka and her parents struggle to cure her from thalassemia major and how her elder daughter suported her sister in her struggle...</p>\r\n<p class="MsoNormal">Please follow the link given below to get to know the story of Waraka a bangladesi residence. Who came to Kolkata with a hope to get cure.</p>\r\n<p class="MsoNormal">https://www.youtube.com/watch?v=7qrzyeE4fSg</p>\r\n<p class="MsoNormal">&nbsp;</p>', 'b767eda212b452301a9b2095cf1f4f5e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career`
--

CREATE TABLE IF NOT EXISTS `tbl_career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Application For` varchar(255) NOT NULL,
  `Exp` varchar(255) NOT NULL,
  `Qulification` varchar(255) NOT NULL,
  `Institute` varchar(255) NOT NULL,
  `PassingYear` varchar(255) NOT NULL,
  `Percentage` varchar(225) NOT NULL,
  `PreviousCompany` varchar(255) NOT NULL,
  `JobRole` varchar(255) NOT NULL,
  `AdditionalMassage` text NOT NULL,
  `cvlink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_career`
--

INSERT INTO `tbl_career` (`id`, `Name`, `Email`, `Phone`, `Application For`, `Exp`, `Qulification`, `Institute`, `PassingYear`, `Percentage`, `PreviousCompany`, `JobRole`, `AdditionalMassage`, `cvlink`) VALUES
(1, 'Test Name', 'Test Email', 'Test Phone', 'Web Designer', '1 Year+', 'BSC', 'Test Inst', '0', 'Test Percentige', 'Test Company', 'Test Job Role', 'Test Message', 'fcklfgdlghsjhlsjdfjfshd.pdf'),
(2, 'Saikat Bhadury', 'info2programmer@gmail.com', '954776398', 'Maya Animator', '4 Years+ ', 'BA', 'BITM', '2016', '54', 'Null', 'Null', ' Hello', 'Chrysanthemum.jpg'),
(3, 'Shayak Ghosh', 'shayak2@gmail.com', '8961274574', 'Video Editor', '4 Years+ ', 'MA', 'Satyajit Ray Film and Televison Institute, Kolkata', '2016', '75', 'Freelancer', 'Editor/Director', ' Being from a media background, I have an all round idea of different media formats (from scriptwriting to visualising, directing and editing) and how to get the most effective and impactful product.\r\nMaking a no of films, both fiction and nonfiction has given me the ability to work in any sort of creative team or environment to achieve desired goals.\r\n\r\nHere are a few samples of my work :\r\n\r\nhttp://shayak2.wixsite.com/esgi', 'shayak resume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `image`) VALUES
(12, 'e416d4848e9d19832bfdc26a8dfbdcd9.jpg'),
(20, 'abd53f128b6fa54c38a772ee857e8daa.jpg'),
(21, '31f3f3f186b5be10d2c3b77bbfe8a84a.jpg'),
(22, '8160685a6e7f880e256d01856eb76e61.jpg'),
(23, '1944f8014826219bfda7a59f65cae816.jpg'),
(25, '38fea3cc4f01176af8472b73924748c3.jpg'),
(26, '3b8d369c86c12c0e1dce227d6f20db67.jpg'),
(27, '93d09c2b429a9d160e08b4375a6a183b.jpg'),
(28, 'afaddf1c6618b5e67e93297325dd2a80.jpg'),
(29, '0b09041a303f50469114dc5400caec25.jpg'),
(30, '3f7a82dad4d25fed8e69b408b3acb468.jpg'),
(31, 'bf31ec188ccc9a4f0f0fb05f8dee5ac0.jpg'),
(33, '175665faa635722e12ea55edecf1a51d.jpg'),
(34, 'd16633ef8aa8eb4a660929c4d8e21068.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `reqfor` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imageslider`
--

CREATE TABLE IF NOT EXISTS `tbl_imageslider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(500) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin@ufxstudio.com', 'ed4760e62f3655bd3a40c6d83ab74f2e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE IF NOT EXISTS `tbl_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=217 ;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `email`, `datetime`) VALUES
(1, 'admin@storehopp.com', '17-09-2016 16:56'),
(2, 'admin@storehopp.com', '17-09-2016 16:58'),
(3, 'asdadas@zfsdf.com', '17-09-2016 17:00'),
(4, 'admin@ufxstudio.com', '17-09-2016 17:06'),
(5, '', '30-03-2017 14:43'),
(6, 'ricardoacf@gmail.com', '14-04-2017 20:33'),
(7, 'mkmastin@yahoo.com', '14-04-2017 20:37'),
(8, 'don@autodoctormn.com', '14-04-2017 22:08'),
(9, 'jimmybleep@aol.com', '14-04-2017 22:59'),
(10, 'hector.perez@sevilleclassics.com', '15-04-2017 00:13'),
(11, 'dklesk@yahoo.com', '15-04-2017 02:14'),
(12, 'carbafos68@mail.ru', '15-04-2017 02:59'),
(13, 'carbafos68@mail.ru', '15-04-2017 02:59'),
(14, 'smidget1212@yahoo.com', '15-04-2017 03:06'),
(15, 'mindyrowan@yahoo.com', '15-04-2017 04:01'),
(16, 'amg8042@aol.com', '15-04-2017 07:32'),
(17, 'michellehewitson@hotmail.co.uk', '15-04-2017 10:36'),
(18, 'frontiertier@yahoo.com', '15-04-2017 11:02'),
(19, 'dklesk@yahoo.com', '15-04-2017 13:05'),
(20, 'pearleta.woolery@yahoo.com', '15-04-2017 17:17'),
(21, 'bjhoffman00@gmail.com', '16-04-2017 00:27'),
(22, 'giles_howson@yahoo.com', '16-04-2017 01:03'),
(23, 'mikebeary@gmail.com', '16-04-2017 01:45'),
(24, 'caschozen@yahoo.com', '16-04-2017 02:01'),
(25, 'suprfrog@yahoo.com', '16-04-2017 02:44'),
(26, 'mikebeary@gmail.com', '16-04-2017 03:27'),
(27, 'beacetz1@yahoo.com', '16-04-2017 04:15'),
(28, 'childress_wes@yahoo.com', '16-04-2017 06:44'),
(29, 'judybriody@aol.com', '16-04-2017 07:11'),
(30, 'urbransignatureclothing@yahoo.com', '16-04-2017 07:21'),
(31, 'cesar_villegas1@yahoo.com', '16-04-2017 07:33'),
(32, 'paulettethomas1@aol.com', '16-04-2017 10:42'),
(33, 'giles_howson@yahoo.com', '16-04-2017 10:55'),
(34, 'cesar_villegas1@yahoo.com', '16-04-2017 11:42'),
(35, 'dklesk@yahoo.com', '16-04-2017 11:43'),
(36, 'henrynieves2002@yahoo.com', '16-04-2017 14:32'),
(37, 'parker_crew@yahoo.com', '16-04-2017 14:50'),
(38, 'cesar_villegas1@yahoo.com', '16-04-2017 16:45'),
(39, 'stanstokes@gmail.com', '16-04-2017 18:54'),
(40, 'doubledprints@gmail.com', '01-05-2017 00:50'),
(41, 'lespesjulien33@gmail.com', '01-05-2017 07:05'),
(42, 'andidenton@gmail.com', '01-05-2017 19:47'),
(43, 'rommelhale@yahoo.com', '01-05-2017 22:49'),
(44, 'jfonsecas10@yahoo.com', '01-05-2017 22:49'),
(45, 'greatestplayeralive1@yahoo.com', '04-05-2017 03:54'),
(46, 'g_arnold@cox.net', '04-05-2017 10:06'),
(47, 'snazzer1984@msn.com', '04-05-2017 15:05'),
(48, 'mag_game6@yahoo.com', '04-05-2017 22:49'),
(49, 'j-massey2@sky.com', '05-05-2017 05:20'),
(50, 'drone1238@yahoo.com', '05-05-2017 06:44'),
(51, 'matthewhouseknecht@yahoo.com', '05-05-2017 12:24'),
(52, 'mkl786@hotmail.co.uk', '05-05-2017 20:32'),
(53, 'mary.buttler.64@gmail.com', '05-05-2017 20:39'),
(54, 'mtlam_2000@yahoo.com', '05-05-2017 21:19'),
(55, 'kalabt0402@yahoo.com', '06-05-2017 01:20'),
(56, 'buttons13@hotmail.com', '07-05-2017 05:05'),
(57, 'support@analyticalbio.com', '07-05-2017 11:19'),
(58, 'dustin_eagans@yahoo.com', '07-05-2017 22:28'),
(59, 'think4125@yahoo.com', '08-05-2017 12:51'),
(60, 'tyronejohnson77@yahoo.com', '09-05-2017 01:06'),
(61, 'sslaton@scsd2.k12.in.us', '10-05-2017 06:11'),
(62, 'klchristiano@sbcglobal.net', '10-05-2017 13:43'),
(63, 'tmapalo21@yahoo.com', '10-05-2017 18:05'),
(64, 'tbellhelpsyousell@gmail.com', '11-05-2017 00:55'),
(65, 'charityj1981@yahoo.com', '11-05-2017 04:44'),
(66, 'rimster101@gmail.com', '11-05-2017 06:12'),
(67, 'adammosk@gmail.com', '11-05-2017 06:51'),
(68, 'amendolia2016@gmail.com', '11-05-2017 23:16'),
(69, 'taylemond@hotmail.com', '11-05-2017 23:49'),
(70, 'lynnabaden@gmail.com', '12-05-2017 04:23'),
(71, 'rosie.craven@att.net', '12-05-2017 05:11'),
(72, 'apierre911@gmail.com', '13-05-2017 10:34'),
(73, 'kschwoer@gmail.com', '14-05-2017 15:25'),
(74, 'dvk.admins@gmail.com', '14-05-2017 15:59'),
(75, 'docstacia@gmail.com', '15-05-2017 16:09'),
(76, 'blgfagan@yahoo.com', '15-05-2017 20:45'),
(77, 'moeeternal@yahoo.com', '15-05-2017 22:55'),
(78, 'bpopa205@gmail.com', '16-05-2017 00:38'),
(79, '1dbillips@gmail.com', '16-05-2017 02:01'),
(80, 'syamir.mirza@gmail.com', '16-05-2017 04:00'),
(81, 'bobdav3@gmail.com', '16-05-2017 06:51'),
(82, 'albert.jacqueline@yahoo.com', '16-05-2017 07:42'),
(83, 'genemhays@gmail.com', '16-05-2017 14:38'),
(84, 'bjmoses5@gmail.com', '16-05-2017 18:02'),
(85, 'gina@ibisbayresort.com', '16-05-2017 18:20'),
(86, 'blakice509@gmail.com', '16-05-2017 23:31'),
(87, 'jdgstat@yahoo.com', '16-05-2017 23:35'),
(88, 'bjmoses5@gmail.com', '17-05-2017 00:41'),
(89, 'cyy@orange.fr', '17-05-2017 01:47'),
(90, 'froddey@yahoo.com', '17-05-2017 11:44'),
(91, 'dtachandlon@yahoo.com', '17-05-2017 15:10'),
(92, 'hema@iffelinternational.com', '17-05-2017 15:56'),
(93, 'winchesterdavewalker@gmail.com', '17-05-2017 17:52'),
(94, 'christicavness@gmail.com', '17-05-2017 18:35'),
(95, 'triciastaple1@gmail.com', '17-05-2017 18:40'),
(96, 'triciastaple1@gmail.com', '17-05-2017 18:46'),
(97, 'christicavness@gmail.com', '17-05-2017 18:51'),
(98, 'marylou.elizabeth@gmail.com', '17-05-2017 19:31'),
(99, 'molinamargie2@gmail.com', '17-05-2017 19:34'),
(100, 'kyong.park2009@gmail.com', '17-05-2017 20:32'),
(101, 'edgarhaimerl@gmail.com', '17-05-2017 20:42'),
(102, 'lauraenglish124@gmail.com', '17-05-2017 21:12'),
(103, 'molinamargie2@gmail.com', '17-05-2017 21:48'),
(104, 'brooklynntennelle@gmail.com', '17-05-2017 22:05'),
(105, 'tampwn@gmail.com', '17-05-2017 22:05'),
(106, 'lauraenglish124@gmail.com', '17-05-2017 22:34'),
(107, 'adamhirshman@gmail.com', '17-05-2017 22:38'),
(108, 'kyong.park2009@gmail.com', '17-05-2017 22:49'),
(109, 'lauraenglish124@gmail.com', '17-05-2017 23:00'),
(110, 'taylor.r.hobbs@gmail.com', '17-05-2017 23:25'),
(111, 'rafaanda2@gmail.com', '17-05-2017 23:35'),
(112, 'yocusm1@gmail.com', '17-05-2017 23:37'),
(113, 'esperonoelle@gmail.com', '18-05-2017 01:30'),
(114, 'meefeb@gmail.com', '18-05-2017 01:38'),
(115, 'meefeb@gmail.com', '18-05-2017 01:51'),
(116, 'gamboa507@gmail.com', '18-05-2017 02:47'),
(117, 'drfmsf@gmail.com', '18-05-2017 03:47'),
(118, 'chrmayr@gmail.com', '18-05-2017 04:13'),
(119, 'aabeyta1988@gmail.com', '18-05-2017 04:25'),
(120, 'anika.art@gmail.com', '18-05-2017 04:31'),
(121, 'celine.sandoval13@gmail.com', '18-05-2017 05:24'),
(122, 'ryankmason@gmail.com', '18-05-2017 05:32'),
(123, 'nazishbana@gmail.com', '18-05-2017 06:43'),
(124, 'celine.sandoval13@gmail.com', '18-05-2017 07:37'),
(125, 'julialee131@gmail.com', '18-05-2017 09:00'),
(126, 'bzerkle@gmail.com', '18-05-2017 09:17'),
(127, 'tmartinfinancial@gmail.com', '18-05-2017 10:18'),
(128, 'tc.calvert@gmail.com', '18-05-2017 10:25'),
(129, 'anika.art@gmail.com', '18-05-2017 11:28'),
(130, 'debmolusky@gmail.com', '18-05-2017 12:24'),
(131, 'julialee131@gmail.com', '18-05-2017 12:37'),
(132, 'jeffmparsons@yahoo.com', '19-05-2017 21:25'),
(133, 'diane4118@yahoo.com', '19-05-2017 23:54'),
(134, 'bervana@yahoo.com', '20-05-2017 02:32'),
(135, 'lisa6819@verizon.net', '20-05-2017 18:56'),
(136, 'grimm.bordesholm@t-online.de', '20-05-2017 18:57'),
(137, 'ictorcuba54@yahoo.ca', '20-05-2017 18:58'),
(138, 'deeanna@fairwaymgmt.com', '20-05-2017 18:58'),
(139, 'shayrun.ali@sarens.com', '20-05-2017 18:58'),
(140, 'manonfaure@free.fr', '20-05-2017 19:01'),
(141, 'escott@3day.com', '20-05-2017 19:01'),
(142, 'hymango@comcast.net', '20-05-2017 19:03'),
(143, 'itatstill@yeah.net', '20-05-2017 19:03'),
(144, 'caroline@eliteconsultants.com', '20-05-2017 19:04'),
(145, 'dawn_michalsky@sbcglobal.net', '20-05-2017 19:05'),
(146, 'cliniquill@optonline.net', '20-05-2017 19:05'),
(147, '7325998942@vtext.com', '20-05-2017 19:06'),
(148, 'ulrike.schneider@arcelormittal.com', '20-05-2017 19:06'),
(149, 'kpthornton@cox.net', '20-05-2017 19:07'),
(150, 'escott@3day.com', '20-05-2017 19:09'),
(151, 'lisa6819@verizon.net', '20-05-2017 19:09'),
(152, 'bill.caldwell@blueyonder.co.uk', '20-05-2017 19:09'),
(153, 'deeanna@fairwaymgmt.com', '20-05-2017 19:10'),
(154, 'shayrun.ali@sarens.com', '20-05-2017 19:11'),
(155, 'bwallick@comcast.net', '20-05-2017 19:11'),
(156, 'mary@fairwaymgmt.com', '20-05-2017 19:12'),
(157, 'manonfaure@free.fr', '20-05-2017 19:12'),
(158, 'meggs97@ymail.com', '20-05-2017 19:13'),
(159, 'vshames@juno.com', '20-05-2017 19:13'),
(160, 'abuse@chase.com', '20-05-2017 19:14'),
(161, 'hymango@comcast.net', '20-05-2017 19:14'),
(162, 'caroline@eliteconsultants.com', '20-05-2017 19:15'),
(163, 'volleygirl2spike@q.com', '20-05-2017 19:15'),
(164, 'cliniquill@optonline.net', '20-05-2017 19:17'),
(165, '7325998942@vtext.com', '20-05-2017 19:17'),
(166, 'dtdowns@att.net', '20-05-2017 19:17'),
(167, 'dawn_michalsky@sbcglobal.net', '20-05-2017 19:17'),
(168, 'ulrike.schneider@arcelormittal.com', '20-05-2017 19:18'),
(169, 'lisa6819@verizon.net', '20-05-2017 19:20'),
(170, 'bill.caldwell@blueyonder.co.uk', '20-05-2017 19:20'),
(171, 'shayrun.ali@sarens.com', '20-05-2017 19:23'),
(172, 'manonfaure@free.fr', '20-05-2017 19:24'),
(173, 'mary@fairwaymgmt.com', '20-05-2017 19:25'),
(174, 'vshames@juno.com', '20-05-2017 19:25'),
(175, 'lupold@comcast.net', '20-05-2017 19:26'),
(176, 'volleygirl2spike@q.com', '20-05-2017 19:27'),
(177, 'jsmo11@me.com', '20-05-2017 19:27'),
(178, 'dawn_michalsky@sbcglobal.net', '20-05-2017 19:28'),
(179, 'cliniquill@optonline.net', '20-05-2017 19:28'),
(180, 'dtdowns@att.net', '20-05-2017 19:29'),
(181, 'snyoung@wideorbit.com', '20-05-2017 19:29'),
(182, 'csmklyon@yahoo.com', '22-05-2017 20:21'),
(183, 'johnjoseph_altman@yahoo.com', '23-05-2017 09:29'),
(184, 'stephenhoyuen@gmail.com', '23-05-2017 11:45'),
(185, 'pittsm93@yahoo.com', '23-05-2017 13:23'),
(186, 'twmitd@gmail.com', '23-05-2017 14:46'),
(187, 'm_b_maxwell@yahoo.com', '23-05-2017 20:53'),
(188, 'devynlmcnichol@gmail.com', '29-05-2017 12:16'),
(189, 'andrewlgordon@gmail.com', '29-05-2017 14:39'),
(190, 'kumaravell@gmail.com', '30-05-2017 02:48'),
(191, 'sniagrab@gmail.com', '30-05-2017 05:05'),
(192, 'jerryllee@gmail.com', '30-05-2017 06:37'),
(193, 'lalindab@gmail.com', '30-05-2017 14:05'),
(194, 'chuckcu269@yahoo.com', '30-05-2017 17:21'),
(195, 'claudiatymejackson@gmail.com', '30-05-2017 21:50'),
(196, 'thendrix28de@gmail.com', '31-05-2017 02:27'),
(197, 'rkhessibi@gmail.com', '31-05-2017 03:30'),
(198, 'falonsolaich@gmail.com', '31-05-2017 03:41'),
(199, 'bahramdavani@gmail.com', '31-05-2017 05:41'),
(200, 'musclepuppy201@gmail.com', '31-05-2017 09:13'),
(201, 'cktwallis@gmail.com', '31-05-2017 18:21'),
(202, 'rickeygodbold@yahoo.com', '31-05-2017 18:26'),
(203, 'almao76@yahoo.com', '31-05-2017 23:35'),
(204, 'jvan08@gmail.com', '01-06-2017 07:00'),
(205, 'emilysfaithallen@yahoo.com', '01-06-2017 10:13'),
(206, 'billing@albanycdmt.com', '01-06-2017 21:13'),
(207, 'ellen.dubelt@utoronto.ca', '01-06-2017 23:24'),
(208, 'bcfiller@umich.edu', '02-06-2017 04:56'),
(209, 'ariane@storymixmedia.com', '03-06-2017 04:54'),
(210, 'account.verify@airbnb.com', '03-06-2017 19:36'),
(211, 'beaver.1996@gmail.com', '03-06-2017 20:41'),
(212, 'kenny@coastaero.com', '04-06-2017 14:45'),
(213, 'carolyn.kelly@wingo-nylander.com', '05-06-2017 03:06'),
(214, 'brent_moe@yahoo.com', '05-06-2017 13:53'),
(215, '', '12-06-2017 22:26'),
(216, '', '14-07-2017 04:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `imgpath` text NOT NULL,
  `youtubelink` text NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `category`, `type`, `imgpath`, `youtubelink`, `datetime`) VALUES
(58, 'video', 'Video', '291f240288b09b6cf59df46016ad2ec1.jpg', 'https://www.youtube.com/watch?v=2gYFYhS9dFs', '18-07-2017 00:22'),
(62, 'video', 'Video', '0b9dd0d667accb51918af54e0871b119.jpg', 'https://www.youtube.com/watch?v=cEE4-MuA7Fg', '18-07-2017 00:28'),
(63, '3d', 'Video', 'ad31ad97072875cdf39185f1e201ae1c.jpg', 'https://www.youtube.com/watch?v=7qrzyeE4fSg', '18-07-2017 00:34'),
(65, 'infogr', 'Video', '11dc21fd4385fb5ced86570328ad7e19.jpg', 'https://www.youtube.com/watch?v=fZEycu5Mp_U', '18-07-2017 00:41'),
(66, '3d', 'Video', 'd3f9832571c24aff2a56e31fdb13dd2b.jpg', 'https://www.youtube.com/watch?v=wsI3hx4z5rI', '18-07-2017 00:44'),
(67, 'video', 'Video', '8a582bbb7f5209025a4064ee56d67da3.jpg', 'https://www.youtube.com/watch?v=UkEDpj6Xk14', '18-07-2017 00:45'),
(68, 'video', 'Video', '6f8d8b22e4eaee4dff97639b993328c1.jpg', 'https://www.youtube.com/watch?v=rG7GYp1jDpU', '18-07-2017 00:47'),
(69, 'infogr', 'Video', 'e491a3b0adcb6da518250e8e2d50f879.jpg', 'https://www.youtube.com/watch?v=eIHlcFkKeT4', '18-07-2017 00:53'),
(70, '3d', 'Video', '0026a470ec387ed0549bc8c2017e3d57.jpg', 'https://www.youtube.com/watch?v=GYlERTiHOnw&t=21s', '18-07-2017 06:50'),
(71, 'video', 'Video', '1176cff158d1689ec8fd90e6b8ac7874.jpg', 'https://www.youtube.com/watch?v=ChvVXcBWnEE', '18-07-2017 06:52'),
(72, 'video', 'Video', 'd18111cfec2359b3edfe5c0298c2084d.jpg', 'https://www.youtube.com/watch?v=2bwwq9ZJVmc', '18-07-2017 06:55'),
(73, '3d', 'Video', 'c1cf2b80faefbe2f4822f49b3565420a.jpg', 'https://www.youtube.com/watch?v=Pxel0gDCbZU&t=8s', '18-07-2017 06:58'),
(74, 'video', 'Video', '86b22c10135ac3d1f157295196a1466f.jpg', 'https://www.youtube.com/watch?v=Ufmc0U72GVM', '18-07-2017 07:02'),
(75, '3d', 'Video', 'eac3cfb324eed14491a143946cc52aa6.jpg', 'https://www.youtube.com/watch?v=y07Niitq5Qc', '18-07-2017 07:03'),
(76, 'video', 'Video', '8a0bd19c738deb8a8efcaea401e14715.jpg', 'https://www.youtube.com/watch?v=84UD0oFtmOo&t=7s', '18-07-2017 07:04'),
(77, '3d', 'Video', '8d07626ffda16350e2fd15502bafa09d.jpg', 'https://www.youtube.com/watch?v=ou1t5F1tJkU', '18-07-2017 07:06'),
(80, 'graphics', 'Image', 'c5bc435f12d0666cc8cdd3648b81e05d.jpg', 'N/A', '21-07-2017 00:36'),
(81, 'graphics', 'Image', '2e2182f815374dcc9bab3ae9c43628ce.jpg', 'N/A', '21-07-2017 00:39'),
(83, 'graphics', 'Image', '3f80ea214a5522ef4b16f675a8bb1b29.jpg', 'N/A', '21-07-2017 18:04'),
(84, 'graphics', 'Image', '8e0437c06bb4eb61901415b4eec0c6e2.jpg', 'N/A', '21-07-2017 18:06'),
(85, 'graphics', 'Image', 'ddd9af9f1f8096864bec8c22419af803.jpg', 'N/A', '21-07-2017 18:12'),
(86, 'graphics', 'Image', '109b0bc8a666a471d5ca60e11e0f477d.jpg', 'N/A', '21-07-2017 18:14'),
(87, 'graphics', 'Image', '3bba22f8cb79a63800e071e2a2a5b772.jpg', 'N/A', '21-07-2017 18:15'),
(88, 'graphics', 'Image', 'c403c703ee264261baa6f9b88b00f340.jpg', 'N/A', '21-07-2017 18:16'),
(89, 'branding', 'Image', '4fd44ab1b6b23ff14e98a7c471a36a4c.jpg', 'N/A', '22-07-2017 15:56'),
(90, 'branding', 'Image', '9ec21c50e22ab194ed1d60370462d734.jpg', 'N/A', '22-07-2017 15:57'),
(91, 'branding', 'Image', 'fe7ccd3c0dc8d781ce65ea86876ca414.jpg', 'N/A', '22-07-2017 16:03'),
(92, 'branding', 'Image', 'cfa5fe7c0e13b59e89464e20366e57f1.jpg', 'N/A', '22-07-2017 16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicesimg`
--

CREATE TABLE IF NOT EXISTS `tbl_servicesimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgPath` varchar(255) NOT NULL,
  `Services_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tbl_servicesimg`
--

INSERT INTO `tbl_servicesimg` (`id`, `imgPath`, `Services_id`) VALUES
(6, 'f54b03e4f11c8bd9920741657069c6b6.jpg', 5),
(7, '970b609f5323a8d2c83a555d39242bb9.jpg', 5),
(8, 'd99fa3a9dd5df426e62b19597322920a.jpg', 5),
(9, 'a90f92d5609224ee7112c1f5d99f7e5f.jpg', 5),
(10, '7cbeb964f1961a132a36052748a10320.jpg', 5),
(11, '0f542615d6c3ceb0f8bb299b1a9fe396.jpg', 5),
(12, '38398fab1dd3cccf0f624d935a57898d.jpg', 6),
(13, 'f6a4f71e72dfe084f2d4b5bf96963e02.jpg', 6),
(14, 'debe236f3c30658190a8fe363a2b5cc0.jpg', 6),
(15, 'ec6ecdc8e04d45830fd347dd0622d829.jpg', 6),
(16, 'c227f70597a4381bfb7e18a535028faa.jpg', 6),
(17, '02ae6a786bbf135d3d223cbc0e770b6e.jpg', 6),
(18, '74b4db7ecf4ff1770156d20fd45a7a6e.jpg', 7),
(19, '76edf3aeec7870bdbf0d146a95e611cc.jpg', 7),
(20, '30d4acd988cebcb9d2142e2af7a9dbaf.jpg', 7),
(21, 'ded081fcbbe6cda656e5bc51dfc6bbfa.jpg', 7),
(22, 'b8ddd4e23c3d98fe4c4c61177afffac2.jpg', 7),
(23, '0496604c1d80f66fbeb963c12e570a26.jpg', 7),
(24, 'd28a3097fa7cf63ad01c4f328314e2f2.jpg', 8),
(25, '39d4b545fb02556829aab1db805021c3.jpg', 8),
(26, '392eb1b988bc2beaacc2b67cbcf9a58d.jpg', 8),
(27, 'b344953b75615eb41588c6753a3899e9.jpg', 8),
(28, '4490759a6b69ecb7c170d8e1476be569.jpg', 8),
(29, 'dd14fcb4232caeda4d922db41d6174df.jpg', 8),
(30, '2fb795a41461f9664f41efb0c07e9461.jpg', 9),
(31, 'f5b1211c3952ce30f829cd3c757a1a7f.jpg', 9),
(32, 'c2b0e140029533c81a1793e5930e29ed.jpg', 9),
(33, 'b73ce398c39f506af761d2277d853a92.jpg', 9),
(34, '7cf68b210274ef46d38b0cd76e059af6.jpg', 9),
(35, '65b0df23fd2d449ae1e4b2d27151d73b.jpg', 9),
(36, '350a3797caea1668d227c8cbe52c793e.jpg', 10),
(37, '98a733901e53052474f2320d0a3a9473.jpg', 10),
(38, '63cbf554a9356c3e430e16dbafb1a6db.jpg', 10),
(39, 'bea5955b308361a1b07bc55042e25e54.jpg', 10),
(40, '9c99222b30e0425ea2f141f9e364d793.jpg', 10),
(41, '7580584dbb499d1e2a45411a0cc7fa23.jpg', 10),
(42, 'b96fab78f4c997de5d5fa8621625e8b4.jpg', 11),
(43, '6f737abf3f6bb5f84a1ad1dc0be05ab8.jpg', 11),
(44, '3499738f724b2ae08a1871b6a0a7d175.jpg', 11),
(45, '046ddf96c233a273fd390c3d0b1a9aa4.jpg', 11),
(46, '4cd31d31e16ac873f5f421d5880e88d6.jpg', 11),
(47, '98dce83da57b0395e163467c9dae521b.jpg', 11),
(48, 'e9433fc14b27c2c907dad393b9c2626d.jpg', 12),
(49, '170821fbe11a68684fba8a7ef705d2e9.jpg', 12),
(50, '0ccb9c4f617f6da1b237ad8302672d3a.jpg', 12),
(51, '5d4d48d0359e45e4fdf997818d6407fd.jpg', 12),
(52, '402b0702500cd47ff36e689465afd783.jpg', 12),
(53, 'c052e590b0d2cc3863f42d501d7d4856.jpg', 12),
(54, 'c9db8f9fa9b8bccb28acb108e1d07a3c.jpg', 13),
(55, '3cb255927d4edc581f4ce3dd813e4e1b.jpg', 13),
(56, '790bad29083dd884a9d9381fd2d7c645.jpg', 13),
(57, 'a15df7c1b8c9dc6c8a9104c74df2a191.jpg', 13),
(58, '8d56f73cb2ee64adf1c0a24a0cd432f5.jpg', 13),
(59, 'a63b1fc98c883b99e342088cabec8439.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sevices`
--

CREATE TABLE IF NOT EXISTS `tbl_sevices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `ShortDiscription` text NOT NULL,
  `ImgPath` varchar(255) NOT NULL,
  `Discription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_sevices`
--

INSERT INTO `tbl_sevices` (`id`, `Name`, `ShortDiscription`, `ImgPath`, `Discription`) VALUES
(5, '3D Architectural Visualizati', 'We help you visualize your architectural projects with detailed and believable 3D visuals. We supply images and animations. We design floor plan in 3d and in 2d we provide you with a rough design of a building or the floor and then we provide you with the final product this saves time and bring a perfection in our work and thus this way we provide you a satisfactory output to our client. ', 'ff096d0e005a8c794b6c1da7c0fd662e.jpg', '<p>\r\n                                            We help you visualize your architectural projects with detailed and believable 3D visuals.\r\n											We supply images and animations. We design floor plan in 3d and in 2d we provide you with a \r\n											rough design of a building or the floor and then we provide you with the final product this \r\n											saves time and bring a perfection in our work and thus this way we provide you a satisfactory \r\n											output to our client\r\n                                        \r\n							<br><br>			\r\n                                       \r\n                                            Ufx Studio provides online and offline supersonic way to turn your plan into 3D Pictures & animation for showing others what exactly what you have imagined\r\n											its easy to accessible, simply email us your plan and our 3d team will turns your plan into 3D masterpiece which you have visualize.\r\n											ufx studio have rapidly become the hub for architecture, real estate''s developers infrastructure company decor shops interior designers.\r\n											you can be at any  part of the globe and can connects with us easily and our professional 3D team so effectively our 3d team will become your 3d team\r\n											Ufx studio delivers your project into a very short period of time and you will have your image ready to use for print digital release marketing presentation and ad campaign \r\n\r\n                                        </p>\r\n                                        <p>\r\n                                            We are fast we are affordable and we are reliable to work with . just a mail to get your master piece done in a short span of time.\r\n                                        <br><br>\r\n										\r\n										â€¢	interior<br>\r\n										â€¢	Exterior<br>\r\n										â€¢	Floor Planning<br>\r\n										â€¢	Logo animation & design<br>\r\n										â€¢	Walk Through<br>\r\n										â€¢	Holo-ad/ 3D projection advertisement (along with the device with warranty)</p>'),
(6, 'Graphics & Design', 'Graphics design for us is a creative process that conveys a specific message to a target audience for us design is not only to look pretty we take it more than that it''s about purposeful use of pictures, illustrations, and layouts to sell ideas, products, and services', 'a78482ce76496fcf49085f2190e675b4.jpg', '   Graphics design for us is a creative process that conveys a specific message to a target audience \r\n											for us design is not only to look pretty we take it more than that\r\n											it''s about purposeful use of pictures, illustrations, and layouts to sell ideas, products, and services.\r\n\r\n                                      <br><br>\r\n										\r\n                                        \r\n                                            Our design process:\r\n                                        </p>\r\n                                       \r\n										<p>\r\n										Identify the purpose of collateral <br>  \r\n										Discovery Phase<br> \r\n										Research both to gain a focused understanding<br> \r\n										Develop custom images and graphics<br> \r\n										Convey your message and philosophy\r\n										</p>\r\n										<p>Placement Brochures /Corporate Presentations/ Visual Merchandising/ Invitations/ Interactive Media Presentations\r\nContent Development/ Corporate Identity/ Branding/ E-Brochures/ Photography/  Packaging/ Illustrations / dangler\r\nMagazine Design/ Calendars/ Flyers/ Posters/ Corporate Gifts/ Logo Design/ Diaries/ Corporate Brochures/ Website Design \r\nE-Pub/ Placement Cloud/ Ad Campaigns/ t-shirt design/ invitation.\r\n</p>'),
(7, 'Audio Production', 'Audio production is the process of creating sound for moving images. A great commercial or corporate video uses audio production to set the mood and tone, and can have a powerful effect on the viewer. Great sound and music can evoke strong emotions and make the viewer pay closer attention to the production, which helps with customer retention. Levy Production Group offers ProTools, the industry standard for audio sweetening. We cater to advertising agencies, video and film producers, corporate producers, web designers and a wide variety of musical artists. ', 'b8c55b4de0a7321787335bfe85ce8256.jpg', ' <p>\r\n                                          Audio production is the process of creating sound for moving images. A great commercial or \r\n										  corporate video uses audio production to set the mood and tone, and can have a powerful effect on\r\n										  the viewer. Great sound and music can evoke strong emotions and make the viewer pay closer attention \r\n										  to the production, which helps with customer retention.\r\n<br><br>\r\n                                       \r\n										\r\n                                        \r\n                                           UFX Studio offers ProTools, the industry standard for audio sweetening. We cater to advertising agencies, \r\n										   video and film producers, corporate producers, web designers and a wide variety of musical artists.\r\n											Depending on budget, UFX Studio can provide licensed music and sound effects, or original music using a team \r\n											of professional musicians. Below are some of the audio production services we offer:\r\n\r\n                                        </p>\r\n										<p>Sound Design and Editing<br>\r\n										Sound Effects Scoring<br>\r\n										Voice Record And Mix<br>\r\n										Foley Mixing and Editing<br>\r\n										Production Dialogue Editing<br>\r\n										Automated Dialogue Replacement or Looping<br>\r\n										Post scores<br>\r\n										Jingles<br>\r\n										Post scores<br>\r\n										Voice Casting<br>\r\n										</p>'),
(8, 'Photography', 'Photography captures everything and allows you to share. Whether your project calls for company portraits, product photography, corporate and brand photography, lifestyle, or an on-location documentation of your company or corporate event, Media Productions brings creative techniques and an attentive eye to find a style thatâ€™s completely your own. ', 'dcb2916ea7214b98b5cf5ae7e02777d3.jpg', ' <p> \r\n                                          Photography captures everything and allows you to share. Whether your project calls for company portraits,\r\n										  product photography, corporate and brand photography, lifestyle, or an on-location documentation of your company or \r\n										  corporate event, Media Productions brings creative techniques and an attentive eye to find a style thatâ€™s completely\r\n										  your own.\r\n\r\n                                    \r\n										<br><br>\r\n                                     \r\n                                          Of course, the pictures say more than we can. See for yourself in our portfolio.\r\n                                        </p>\r\n										<p>\r\n										Photography and Editing Capabilities <br>    \r\n										Photography, direction and creative<br>\r\n										Versatile style capabilities<br>\r\n										Artificial or natural lighting<br>\r\n										Studio availability or on site<br>\r\n										Full editing and complex composite creation<br>\r\n										Color correction/manipulation/prepress expertise<br>\r\n										Image fulfillment<br>\r\n										Photography captures everything and allows you to share. Whether your project \r\n										calls for company portraits, product photography, corporate and brand photography, lifestyle, \r\n										or an on-location documentation of your company or corporate event, Media Productions brings\r\n										creative techniques and an attentive eye to find a style thatâ€™s completely your own.<br>\r\n										Of course, the pictures say more than we can. See for yourself in our portfolio.<br>\r\n										Photography and Editing Capabilities<br>\r\n										Photography, direction and creative<br>\r\n										Versatile style capabilities<br>\r\n										Artificial or natural lighting<br>\r\n										Studio availability or on site<br>\r\n										Full editing and complex composite creation<br>\r\n										Color correction/manipulation/prepress expertise<br>\r\n										Image fulfillment<br>\r\n										</p>'),
(9, 'Video & Animation', 'Ufx studio also produce video in forming connections through visual storytelling. Inspired by your ideas and goals, we craft explainer videos, film logo animation, brand videos, commercials, and just about any type of video your company needs. Our team thrives on giving you tools that drive measurable success. ', '88fb5550341fd3bb49edeb9c7a006747.jpg', ' <p>\r\n                                           Ufx studio also produce video  in forming connections through visual storytelling. Inspired by your ideas and goals, \r\n										   we craft explainer videos, film logo animation, brand videos, commercials, and just about any type of video your company needs. \r\n										   Our team thrives on giving you tools that drive measurable success. </br>\r\n\r\n                                        \r\n										 </br>\r\n                                       \r\n                                           <b> CREATIVE :</b>\r\n                                        \r\n                                        </br>\r\n										\r\n										Strategy<br>\r\n										Brand Messaging<br>\r\n										Storytelling<br>\r\n										Content Distribution<br>\r\n										Multimedia Campaigns<br>\r\n										Demographic Targeting<br>\r\n										<br>\r\n										<b>VIDEO</b><br>\r\n										<br>\r\n										Full-Service Production<br>\r\n										Scriptwriting<br>\r\n										4K Production<br>\r\n										Editing<br>\r\n										Audio Mixing<br>\r\n										Color Grading<br>\r\n										<br>\r\n										\r\n										<b>ANIMATION</b><br>\r\n										<br>\r\n										2D animation <br>\r\n										3D animation<br>\r\n										Motion Graphics<br>\r\n										Explainer Videos<br>\r\n										Logo Animations<br>\r\n										Graphics Packages<br>\r\n										Lower Thirds<br>\r\n										Visual Effects\r\n										</p>'),
(10, 'EVENT', 'The stage belongs to you. Your company. Your product. Youâ€™re at center stage, about to give your audience a presentation that will have tremendous impact. With Media Productions in command behind the scenes, you can be confident that you will communicate effectively with everyone attending your event, whether live in your venue or on-line in a remote location. ', '0ac04853f8058f61af1ca7630e786d22.jpg', '<p>\r\n                                          The stage belongs to you. Your company. Your product. Youâ€™re at center stage, about to give your audience a presentation that will have tremendous impact. \r\n										  With Media Productions in command behind the scenes, you can be confident that you will communicate effectively with everyone attending your event, whether \r\n										  live in your venue or on-line in a remote location. \r\n                                        </p>\r\n                                        <br>\r\n										\r\n                                        <p>\r\n                                          Master the art of live communication.\r\n                                        </p>\r\n										<p>The most effective way to impress prospects, customers, vendors or employees is to present them with a show theyâ€™ll never forget. \r\n										Give them goose bumps. Leave them wanting more. Most importantly, send them home with your message firmly planted in their minds.</p>\r\n										<p>Media Productions knows how to make your message the star of the show. We uncover your objectives, develop strategies, and implement \r\n										creative solutions with one goal in mind: a spectacular, entertaining, informative production that sparks the imagination of your audience.</p>\r\n										<p>Imagination and Experience</p>\r\n										<p>Our production team has worked coast-to-coast, from Orlando to Vancouver, Palm Springs to Toronto, New York to Las Vegas and Minneapolis to Nashville.\r\n										Weâ€™re known across the country for producing main-stage productions with concert-quality sound, creative staging environments, multiscreen image projection \r\n										and exciting lighting and special effects.</p>\r\n										\r\n										<p>\r\n										Event Production</br>\r\n										Complete stage and room design</br>\r\n										Creative planning and concepting</br>\r\n										On-screen graphics and video development and production</br>\r\n										Writing</br>\r\n										Speaker support</br>\r\n										Technical management for concurrent and breakout sessions</br>\r\n										Live webcasting  </p>\r\n										\r\n										<p><b>Execution of major corporate events:</b></P>\r\n										</br>\r\n										Conventions</br>\r\n										Annual meetings</br>\r\n										Seminars</br>\r\n										Training sessions</br>\r\n										Rallies</br>\r\n										Recognition and awards events</br>\r\n										Kickoffs and product introductions</br>\r\n										Company meetings</br>\r\n										Public relations events</br>\r\n										Trade shows</br>\r\n										Franchise meetings</br>\r\n										Event Management</br>\r\n										Site selection</br>\r\n										Venue contract negotiation</br>\r\n										Registration services</br>\r\n										Food and beverage</br>\r\n										Staff management</br>\r\n										Logistics management</br>\r\n										Trade show booth design and construction</br>\r\n										Banner design</br>\r\n										Promotional materials</br>\r\n										Complete on-site event coordination</br>\r\n										</p>'),
(11, 'Corporate sector Business & Marketing', 'Marketing is only effective if it sells your products and services. We keep this concept top-of-mind and think of ourselves as your partners in making and keeping your business a success.Whether you just need to spruce up your logo or need a full website and marketing plan, we can help. At Creative Marketing and Design we work within your budget and your timeline. ', '66637b9fbf69eec9ed685f6d3c86a072.jpg', ' <p>\r\n                                          Marketing is only effective if it sells your products and services. We keep this concept top-of-mind and think of ourselves as your\r\n										  partners in making and keeping your business a success.\r\n\r\n                                        </p>\r\n										<p>Whether you just need to spruce up your logo or need a full website and marketing plan, we can help. At Creative Marketing and Design \r\n										we work within your budget and your timeline.</p>\r\n                                        <p>\r\n                                           <b> Market research and planning :</b>\r\n                                        </p>\r\n										<p>The marketing plan may be the most important document a company possesses. A marketing plan assembles all the pertinent facts about your\r\n										company, the market it serves and its products, services, customers and competition. It sets goals and objectives for a specified period of \r\n										time and lays out precise strategies and tactics to achieve them. The plan contains four principle sections: situation analysis, marketing \r\n										objectives, marketing strategies and tactics. The situation analysis presents all relevant facts about the companyâ€™s history, growth, products \r\n										and services, sales volume, share of market, competitive status, markets served, distribution system, past advertising programs, results of \r\n										marketing research studies, company capabilities, strengths and weaknesses. A companyâ€™s marketing objectives should be logical deductions from \r\n										an analysis of its current situation and its prediction of future trends. To develop the marketing strategy, the target market must be selected,\r\n										the productâ€™s positioning determined and a cost-effective marketing mix for each target market must be constructed. The tactics, or short-term \r\n										actions to be taken, are then established.</p>\r\n                                        </br>\r\n										<p>\r\n										Having a marketing plan will better help you focus on your target audience and determine any gaps in the market that could provide new opportunities\r\n										for your company. Your marketing plan will also enable you to measure how your company is progressing and determine strategies that are working for \r\n										you and those that are not. Your marketing plan should be reassessed annually, revising your situation analysis, analyzing and updating your goals \r\n										and objectives, incorporating new advertising strategies and eliminating those proved unsuccessful.\r\n										</p>\r\n										<p><b>Step 1: </b> Determine your objectives and goals</p>\r\n										<p>If you donâ€™t have a goal, how do you know what to do? This is one of the basic first questions\r\n										to ask before beginning a marketing program. As your marketing company, weâ€™ll help you\r\n										answer it.\r\n										</p>\r\n										<p><b>Step 2: </b> Strategize and draft a budget</p>\r\n										<p> Once youâ€™ve settled on a goal, determining how to get there with your budget is the next step.\r\n											As your marketing company, weâ€™ll help you decide on the best balance between costs and\r\n											returns as it relates to achieving your goal.\r\n\r\n										</p>\r\n										<p><b>Step 3: </b> Develop your marketing plan</p>\r\n										<p> From the results of 1 and 2, Creative Marketing & Design will devise a plan of action to reach\r\n											your goals successfully and on budget.\r\n										</p>\r\n										<p><b>Step 4: </b> Execute marketing plan</p>\r\n										<p> We are a fully capable creative shop with the best people in place to turn ideas into direct\r\n										mail pieces, ads, brochures or whatever you might need.\r\n										</p>\r\n										<p><b>Step 5: </b> </p>\r\n										<p> Creative Marketing & Design is a marketing company that satisfies its clients from\r\nbeginning to end. In this last step, we evaluate results of the marketing effort and create a\r\nreport for you to inspect.\r\n\r\n										</p></br>\r\n										<b>Marketing message x Credibility x Visibility = Marketing Success</b></br>\r\n										\r\n										<p><b>BRANDING</b></p>\r\n										<p>Having a strong visual brand and brand strategy is vital to your companyâ€™s long term success.</p>\r\n										<p>Visual Brand Identity</p>\r\n										<p>The ArtVersion team developed a unique method that helps define your brand identity, truly and clearly. \r\n										We design creative solutions for visual and narrative identity that speak to your audience by articulating your \r\n										corporate culture, style, and philosophy.</p>\r\n										<p>Brand Strategy</p>\r\n										<p>When developing your brand strategy itâ€™s important to be consistent and authentic from the inside-out.\r\n										In todayâ€™s market itâ€™s also important that you are engaging your community. Combining traditional and new media \r\n										is an essential part of any strategic marketing today.</p>\r\n										<p>Fusing Traditional and New Media</p>\r\n										<p>For years, brands have been creatively using traditional media such as print, TV, radio, and film to raise awareness\r\n										for their products. With the invention of the consumer Internet over 15 years ago, brands now have to extend their traditional\r\n										media on these new media platforms such as YouTube, Facebook, Twitter, and more.  The ArtVersion team can teach you how to\r\n										communicate effectively in todayâ€™s emerging media.</p>\r\n										<p>Context</p>\r\n										<p>Brands no longer exist in a static market place. In todayâ€™s digital world, brands have to evolve and react faster than ever before.\r\n										ArtVersion uses brand context to unlock key market insights. With our deep understanding and experience in both, we can quickly help you \r\n										overcome this obstacle- we have helped many brands catch up to these new trends.</p>\r\n										\r\n										<p><b>Public relations</b></p>\r\n										<p>We are outgoing, we are popular ,we are innovative, we love pop culture ,we are not afraid to talk about our client, we tell them what actually\r\n										and exactly they want, we always think about how to convey your message to the audiences</p>\r\n							\r\n										<p><b>Social Media & Online Marketing</b></p>\r\n										<p>Over the last few years social media have completely change the internet. and also the world of marketing, So its very important for your business to\r\n										start this new form of communication. </p>\r\n										<p>Showcase your brand. it create and offers another marketing channel Brand Awareness </p>\r\n										<p>build a pro active community. as people enjoys being a part of the pro active and lively community which helps to establish connection and emotion between \r\n										the company and the prospects thus is a center for your long term success</p>\r\n										<p>Improve customer service as its a great feedback source enabling your company to greatly improve your customer service</p>\r\n										<p>it also increase digital exposure as interacting with social media increase your orbit presence and also boost traffic in search engine optimizing </p>\r\n										<p>it helps reduce your marketing cost compare to all other forms of ad campaign and marketing social media marketing is affordable for any business as the \r\n										channel itself is free.</p>\r\n										\r\n										<p><b>Website Building and development</b></p>\r\n										<p>It is important to grab the attention of viewers to your website with dynamic design as you have only a few seconds to maintain their interest.\r\n										Itâ€™s also important to be sure that your website represents who you really are as a company. Our goal is to draw the viewer in and explore all that \r\n										your company has to offer by presenting a visually appealing, inviting website with clear navigation. Through professional and creative website design, \r\n										we extend your brand into the online world.</p>\r\n										<p>We build interactive websites with client goals in mind, ensuring that products and services offered are displayed correctly and focus on key advantages\r\n										that separate our clients from their competition.</p>\r\n										\r\n										\r\n										<p>\r\n										website design</br>\r\n										website building</br>\r\n										website development</br>\r\n										Interactive website</br>\r\n									</p>'),
(12, 'Hologram Pyramid Advertisements', 'Our unique, ultra-definition holography systems, projectors & units, allowing three-dimensional imaging broadcast, offer an astounding experience for potential consumers and can be installed permanently or temporarily in a wide range of environments A new medium of advertisement holo ad which is used as a 3d display product in open air without any AR/VR transparent medium in stores events offices malls and even at home. it is normal interactive and customizable and is available in different and customizable size. presenting product advertisement periodic offers etc placing a holo pyramid in the store attracts huge customers and also upgrade the company brand to a next level. ', '4b86521fb429633d44697456d41ac4e5.jpg', '<p><b>Future of advertisement IS HERE</b></p>\r\n                                        <p>\r\n                                          Our unique, ultra-definition holography systems, projectors & units, allowing three-dimensional imaging broadcast, offer \r\n										  an astounding experience for potential consumers and can be installed permanently or temporarily in a wide range of environments\r\n											A new medium of advertisement holo ad which is used as a 3d display product in open air without any AR/VR transparent medium \r\n											in stores events offices malls and even at home. it is normal interactive and customizable and is available in different and\r\n											customizable size. presenting product advertisement periodic offers etc placing a holo pyramid in the store attracts huge customers\r\n											and also upgrade the company brand to a next level.\r\n\r\n\r\n                                        </p>\r\n										<p>Holo-box catches the consumers attention immediately and leaves an irreplaceable impression on their minds more than any other existence \r\n										communication medium. It has unprecedented clarity and resolution, with microscopic detail to work in training applications. Consumers today \r\n										are bombarded with thousands of advertising messages. Holo-box allows retailer to break through the competitive clutter in a memorable and compelling \r\n										way.</p>\r\n                                        <p>\r\n                                           <b>Show off your product or messages as a 3D holographic projection, viewable from all angles. </b>\r\n                                        </p>\r\n										<p>OFFER  a holographic experience based on revolving 3D animations or special film video sequences. Advertise products, messages, \r\n										or presentations using our cutting edge 3D hologram displays. Our 3D Holographic Showcase is a real crowd drawer. </p>\r\n                                        </br>\r\n										<p>\r\n										 Based on three-dimensional(3D) projection mirror imaging  principle, the machine  can display 3D light and shadow imaging floated in the \r\n										 air under treatment of 3D imaging device. The 3D images can be static pictures or consequent ones, and also high-quality videos through 3D \r\n										 treatment. Viewers  can walk a  circle around the four-dimensional imaging system to watch the  mirror image projection suspended in the air.\r\n										</p>\r\n										\r\n										<p>Hologram pyramid brings in a new era of presenting your advertisement in a holographic form instead of putting it in television and playing \r\n										in a loop we can place the hardware in a prime place. Being it a new customer will get attract to it and via hologram pyramid we can demonstrate\r\n										a advertisement related to offers and other necessary information related to product or store or brand. this will improve the brand identity also\r\n										as new innovation is always welcome. A whats better than presenting your advertisement in a futuristic manner, giving it a stereoscopic projection\r\n										and feel.\r\n										</p>\r\n										\r\n										<p>We''re a team of 3D artists with a passion for visualizing spaces and places. We''ll turn your architectural drawings into compelling CGIs, flythrough \r\n										and interactive apps that make your proposals feel real long before you''ve laid the first stone\r\n\r\n										</p>\r\n										<p><b>about the product:</b></p>\r\n										\r\n										\r\n										<p>\r\n										Views: 180,270 and 360 degree views are available<br>\r\n										full HD <br>\r\n										available in different sized and also in customizable size<br>\r\n										build in speakers<br>\r\n										normal and interactive<br>\r\n										also available as touch screen for conference Service include:<br>\r\n										Installation and support <br>\r\n										3d Modeling and creative''s<br>\r\n										personalized interactivity<br>\r\n										we are here to provide you with the product and also with the creative''s for the device.<br>\r\n									\r\n										</p>'),
(13, 'Web Solution', 'We provide end-to-end solutions that cater to the entire enterprise. Compared to traditional consulting firms that focus solely on delivering low-cost services, UFX STUDIO has the technology and management depth to extend, enhance, and deliver new and existing IT services.', '38ccdf8d538de2d6a6deb2ed17d1f873.jpg', '<p>\r\n                                            The company provides end to end solution in the field of website designing, web application development, web & network security, online marketing & branding, ecommerce application, customized MIS applications etc. With more than a decade of dedicated work and know how. Our team is proficient enough to handle projects on Windows / Linux platforms. Dedication and efficiency is the motto of all our team members. Our clients have shown their complete trust in us, which has made it possible for us to complete such a long journey. Jobs have been done in almost all business sectors, the prime being export houses, social welfare organizations, trading houses, manufacturing companies, event management groups, print houses, service providers, educational institutions, real estate builders, hotels and many more.</p>\r\n\r\n<p>We provide end-to-end solutions that cater to the entire enterprise. Compared to traditional consulting firms that focus solely on delivering low-cost services, UFX STUDIO  has the technology and management depth to extend, enhance, and deliver new and existing IT services.\r\n</p>\r\n<p>Our goal is to deliver technology solutions offering value to clientâ€™s enterprise. It starts with program management skills and architectural expertise to ensure that projects remain aligned with enterprise goals. Our program and technology management team works to ensure that the solution is deployed with the right products, future-proofed with the right architecture, and implemented with our best practices. We manage your technology projects through the full life cycle, ensuring that they meet required service levels and provide headroom for future growth once they enter production</p>\r\n\r\n<p>â€¢    service provided :<br>\r\nresponsive<br>\r\ncms based website<br>\r\nmultiple sliders<br>\r\nstatic website<br>\r\nsingle page website<br>\r\ndynamic ebsite<br>\r\n<br>\r\nWEB APPLICATIONS DEVELOPMENT<br>\r\nâ€¢   CUSTOMIZED MIS SOLUTIONS<br>\r\nâ€¢   E-COMMERCE APPLICATIONS<br>\r\nâ€¢   SEARCH ENGINE OPTIMIZATION<br>\r\nâ€¢   SAVES TIME & MONEY<br>\r\nâ€¢   IMPROVES COMPETITIVE EDGE OVER YOUR COMPETITORS<br>\r\nâ€¢   ENHANCE SALES<br>\r\nâ€¢   EXPAND CUSTOMER BASE ALONG WITH TARGET AUDIENCE<br>\r\n<br>\r\nO   SOCIAL MEDIA MARKETING<br>\r\nO   GAIN TRAFFIC<br>\r\nO   DIGITAL MARKETING<br>\r\nO   INCREASED BUSINESS<br>\r\nâ€¢   <br>\r\n  BULK EMAIL MARKETING SOLUTION<br>\r\n EFFECTIVE PROMOTIONS<br>\r\n CUSTOMIZED HEADERS<br>\r\n EASE OF NAVIGATION<br>\r\n TARGET AUDIENCE<br>\r\n\r\n\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `designation`, `image`) VALUES
(2, 'Kaustav Biswas', 'Proprietor', '82b60ebc1f563a465b46c8e4cb4d9bd5.jpg'),
(3, 'Payel Agarwal', 'HR & Executive', '57791dafaced2f9e29a2a2b94694767e.jpg'),
(4, 'Subrata Sarkar', 'D.O.P', '0b3f8545c164cd59bf91078486aa5a81.jpg'),
(5, 'Sourabh Mukherjee', 'Sr. Marketing Executive', '279b9e2c3edea1bfc9692fd5fe1583ab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonial` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutorlas`
--

CREATE TABLE IF NOT EXISTS `tbl_tutorlas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgLink` varchar(500) NOT NULL,
  `youtube` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_tutorlas`
--

INSERT INTO `tbl_tutorlas` (`id`, `imgLink`, `youtube`) VALUES
(4, '62215e329e1d50806a62b9a12f5bf35b.jpg', 'https://youtu.be/cTkdNEikGBE'),
(5, '05ed62b68a8b0ebf883f4ab08f794927.jpg', 'https://www.youtube.com/watch?v=ChvVXcBWnEE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
