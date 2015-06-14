-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Iun 2015 la 21:30
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobsboard`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Turism'),
(3, 'Construction'),
(4, 'Accounting');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Salvarea datelor din tabel `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `user_id`, `type_id`, `company_name`, `title`, `description`, `city`, `state`, `contact_email`, `created`) VALUES
(1, 1, 1, 1, 'FutureComp', 'CEO', 'he Bucharest Global Technical Support Centre offers many opportunities for specialization and advancement – our professionals receive world-class training in order to stay on top of emerging technologies. Team members can pursue training in new products to expand their skills and plan the advancement of their careers. \n\n\n\nMicrosoft support facilities are equipped with high speed IT infrastructure which supports our operations seamlessly across international boundaries and enables collaboration with engineers across Europe and the world.\n\n\n\nOur Values :\n\nAs a company, and as individuals, we value integrity, honesty, openness, personal excellence, constructive self-criticism, continual self-improvement, and mutual respect. We are committed to our customers and partners and have a passion for technology. We take on big challenges, and pride ourselves on seeing them through. We hold ourselves accountable to our customers, shareholders, partners, and employees by honouring our commitments, providing results, and striving for the highest quality.', 'Timisoara', 'Timis', 'boss@gmail.com', '2015-04-08 06:25:47'),
(2, 2, 3, 2, 'PastComp', 'worker', 'he Bucharest Global Technical Support Centre offers many opportunities for specialization and advancement – our professionals receive world-class training in order to stay on top of emerging technologies. Team members can pursue training in new products to expand their skills and plan the advancement of their careers. \n\n\n\nMicrosoft support facilities are equipped with high speed IT infrastructure which supports our operations seamlessly across international boundaries and enables collaboration with engineers across Europe and the world.\n\n\n\nOur Values :\n\nAs a company, and as individuals, we value integrity, honesty, openness, personal excellence, constructive self-criticism, continual self-improvement, and mutual respect. We are committed to our customers and partners and have a passion for technology. We take on big challenges, and pride ourselves on seeing them through. We hold ourselves accountable to our customers, shareholders, partners, and employees by honouring our commitments, providing results, and striving for the highest quality.', 'Timisoara', 'Timis', 'past@gmail.com', '2015-06-02 20:12:37'),
(3, 1, 3, 3, 'Space-Z', 'astronaut', 'The criteria for what constitutes human spaceflight vary. The Fédération Aéronautique Internationale (FAI) Sporting Code for astronautics recognizes only flights that exceed an altitude of 100 kilometers (62 mi).[3] In the United States, professional, military, and commercial astronauts who travel above an altitude of 50 miles (80 km)[4] are awarded astronaut wings.\r\n\r\nAs of 8 June 2013, a total of 532 people from 36 countries have reached 100 km (62 mi) or more in altitude, of which 529 reached low Earth orbit or beyond.[5][6] Of these, 24 people have traveled beyond Low Earth orbit, to either lunar or trans-lunar orbit or to the surface of the moon; three of the 24 did so twice: Jim Lovell, John Young and Eugene Cernan.[7] The three astronauts who have not reached low Earth orbit are spaceplane pilots Joe Walker, Mike Melvill, and Brian Binnie.\r\n\r\nAs of 20 June 2011, under the U.S. definition 538 people qualify as having reached space, above 50 miles (80 km) altitude. Of eight X-15 pilots who exceeded 50 miles (80 km) in altitude, only one exceeded 100 kilometers (about 62 miles).[8] Space travelers have spent over 41,790 man-days (114.5 man-years) in space, including over 100 astronaut-days of spacewalks.[8][9] As of 2008, the man with the longest cumulative time in space is Sergei K. Krikalev, who has spent 803 days, 9 hours and 39 minutes, or 2.2 years, in space.[10][11] Peggy A. Whitson holds the record for the most time in space by a woman, 377 days.[12]', 'Arad', 'Arad', 'astro_alex@gmail.com', '2015-06-11 12:40:24'),
(4, 1, 3, 1, 'SuperComputer', 'C/C++ Software Developer', '-> Use the latest technologies in color imaging and digital printing and high-speed, multi-functional printing equipment.\r\n-> Apply the latest technologies in an energetic, team-based culture, using state-of-the-art tools and equipment.\r\n-> Work in modern labs and in a development environment designed especially for Software professionals!\r\n\r\nBe an active member of a high-energy software development team! This team designs, develops and maintains software applications for complex, high-performance printing and document processing and finishing environments, designed for Linux operating systems, using C/C++ programming languages.\r\n\r\nRequirements:\r\n\r\n*University Degree - Computer Science or related;\r\n*Good C/C++ programming skills;\r\n*Familiar with applications designed for Linux environment (make, gcc, shell);\r\n*Process/Threads synchronization and Network programming experience is a plus;\r\n*Good written and spoken English skills;\r\n*Strong team orientation.', 'Timisoara', 'Timis', 'supercomp@gmail.com', '0000-00-00 00:00:00'),
(5, 3, 4, 1, 'AlexOnMars', 'Mars Colonist', 'Permanent Settlement\n\nThe most complex, expensive, and risky part of a mission to Mars is the return trip. It requires developing bigger rockets that need a larger landing systems and launch capability on Mars. Permanent settlement is not easy but it is far less complex and requires much less infrastructure sent to Mars than return missions. Mars One has already started contracting established aerospace companies to work on the required systems. All systems require design, construction, and testing, but no scientific breakthroughs are required to send humans to Mars and to sustain life there.\n\nMission Design\n\nA habitable settlement will await the first crew before they depart Earth. The hardware needed will be sent to Mars in the years ahead of the humans. This unmanned mission is currently scheduled for 2024.', 'Timisoara', 'Timis', 'alex.tenche@gmail.com', '0000-00-00 00:00:00'),
(6, 4, 3, 3, 'test 2', 'test 2', 'test 2', 'Timisoara', 'Timis', 'test2@gmail.com', '2015-06-14 21:25:19');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Salvarea datelor din tabel `types`
--

INSERT INTO `types` (`id`, `name`, `color`) VALUES
(1, 'full time', '#81b800'),
(2, 'part time', '#4c9ef1'),
(3, 'freelance', '#d4d4d4');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `role`, `created`) VALUES
(3, 'Alexone', 'Italione', 'alexone', 'alexone@gmail.com', 'c97ace36eac1ca6f9bb37bfbd4061cf2e584d94a', 'job seeker', '2015-06-14 19:14:08'),
(4, 'Alex', 'Tenche', 'alextenche', 'alex.tenche@gmail.com', 'c97ace36eac1ca6f9bb37bfbd4061cf2e584d94a', 'employer', '2015-06-14 21:11:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
