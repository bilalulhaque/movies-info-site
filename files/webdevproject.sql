-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 07:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdevproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminloginform`
--

CREATE TABLE `adminloginform` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminloginform`
--

INSERT INTO `adminloginform` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `releasedate` date NOT NULL,
  `director` text NOT NULL,
  `cast` text NOT NULL,
  `category` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `releasedate`, `director`, `cast`, `category`, `poster`, `trailer`) VALUES
(44, 'Bajirao Mastani', 'Bajirao 1, who fought over 41 major battles and many others, was reputed never to have lost a single one of them. \r\nBajirao is described as \"RANMARD\" a man made of and for the battlefield. \" \r\nA born cavalry leader Bajirao was unequaled for the daring and originality of his genius. \r\nMastani, the fabled warrior princess was the daughter of Raja Chattrasal and his Persian wife Roohani Begum.\r\nAn expert dancer, singer and warrior, Mastani is sent to battle at the head of the Bundelkhand army. \r\nA chance meeting on a war field where they fight on the same side, puts Bajirao and Mastani on a course of passionate love- that is unstoppable by either of their families, by war or by death itself.', '2015-12-18', 'Sanjay Leela Bhansali', 'Ranveer Singh, Deepika Padukone, Priyanka Chopra', 'Action', 'mastani.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(45, 'CHENNAI EXPRESS', 'Rahul embarks on a journey to a small town in Tamil Nadu to fulfill the last wish of his grandfather: to have his ashes immersed in the Holy water of Rameshwaram. \r\nEn route, he meets a woman hailing from a unique family down South. \r\nAs they find love through this journey in the exuberant lands of South India, an unanticipated drive awaits them.\r\n', '2013-08-09', 'Rohit Shetty', 'Deepika Padukone, Shah Rukh Khan, Sathyaraj', 'Action', 'chennaiexpress.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(47, 'JOHN WICK 3', 'Description', '2019-05-19', 'Description', 'Description', 'Action', 'johnwick.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(48, 'LOGAN', 'Description', '2021-01-01', 'Description', 'Description', 'Action', 'logan.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(49, 'BARFI', 'Description', '2019-11-30', 'Description', 'Description', 'Comedy', 'barfi.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(50, 'BRIDE MAIDS', 'Description', '2017-10-30', 'Description', 'Description', 'Comedy', 'bridesmaid.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(51, 'JOHNNY ENGLISH', 'Description', '2019-11-29', 'Description', 'Description', 'Comedy', 'johnnyenglish.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(52, 'SONU KE TITTU KI SWEETY', 'Description', '2014-08-28', 'Description', 'Description', 'Comedy', 'sonu.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(53, 'WE ARE THE MILLERS', 'Description', '2019-11-29', 'Description', 'Description', 'Comedy', 'millers.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(54, 'BOHEMIAN', 'Description', '2019-11-30', 'Description', 'Description', 'Drama', 'bohemian.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(55, 'DEAR ZINDAGI', 'Description', '2020-11-30', 'Description', 'Description', 'Drama', 'dearzindagi.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(56, 'ROCKSTAR', 'Description', '2016-09-25', 'Description', 'Description', 'Drama', 'rockstar.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(57, 'THE IRISHMAN', 'Description', '2020-11-29', 'Description', 'Description', 'Drama', 'the_irishman.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(58, 'THE PIANIST', 'Description', '2019-11-30', 'Description', 'Description', 'Drama', 'pianist.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(59, 'ALADDIN', 'Description', '2020-11-29', 'Description', 'Description', 'Fantasy', 'aladdin.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(60, 'AVENGERS END GAME', 'Description', '2019-10-29', 'Description', 'Description', 'Fantasy', 'avengers.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(61, 'BEAUTY AND THE BEAST', 'Description', '2010-08-21', 'Description', 'Description', 'Fantasy', 'beautyandbeast.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(62, 'BHOOTNATH', 'Description', '2014-06-23', 'Description', 'Description', 'Fantasy', 'bhootnath.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(63, 'LITTLE WOMEN', 'Description', '2017-08-28', 'Description', 'Description', 'Fantasy', 'little_women.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(64, 'A QUIET PLACE PART 2', 'Description', '2020-10-29', 'Description', 'Description', 'Horror', 'quietplace.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(65, 'IT CHAPTER TWO', 'Description', '2019-10-28', 'Description', 'Description', 'Horror', 'IT.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(66, 'PARI', 'Description', '2020-11-28', 'Description', 'Description', 'Horror', 'pari.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(67, 'THE CONJURING', 'Description', '2018-08-27', 'Description', 'Description', 'Horror', 'theconjuring.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(68, 'WRONG TURN', 'Description', '2020-10-29', 'Description', 'Description', 'Horror', 'wrongturn.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(69, 'BADLA', 'Description', '2018-10-29', 'Description', 'Description', 'Mystery', 'badla.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(70, 'MURDER MYSTERY', 'Description', '2018-11-28', 'Description', 'Description', 'Mystery', 'murdermystery.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(71, 'PARASITE', 'Description', '2019-11-29', 'Description', 'Description', 'Mystery', 'parasite.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(72, 'WAZIR', 'Description', '2018-11-27', 'Description', 'Description', 'Mystery', 'wazir.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(73, 'KAL HO NA HO', 'Description', '2018-05-31', 'Description', 'Description', 'Romance', 'khnh.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(74, 'MARRIAGE STORY', 'Description', '2017-10-29', 'Description', 'Description', 'Romance', 'marriage_story.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(75, 'ME BEFORE YOU', 'Description', '2018-11-29', 'Description', 'Description', 'Romance', 'mebeforeyou.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(76, 'YE JAWAANI HAI DEWAANI', 'Description', '2019-11-29', 'Description', 'Description', 'Romance', 'yjhd.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(77, 'JAB WE MET', 'Aditya, a heartbroken business tycoon, aimlessly boards a train to escape his depressing life. He meets Geet, a bubbly Punjabi girl, and gets pulled into her crazy life.', '2020-10-01', 'Imtiaz Ali', 'Shahid Kapoor, Kareena Kapoor', 'Romance', 'jabwemet.jpg', 'yt1s.com - Jab we met trailer_v240P.mp4'),
(78, 'GONE GIRL', 'Description', '2019-09-28', 'Description', 'Description', 'Thriller', 'gonegirl.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(79, 'JOKER', 'Description', '2012-10-27', 'Description', 'Description', 'Thriller', 'Poster.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(80, 'KNIVES OUT', 'Description', '2019-10-14', 'Bilal', 'Leonardo, Dicaprio', 'Thriller', 'knivesout.jpg', 'yt1s.com - Knives Out 2019 Movie Final Trailer  Daniel Craig Chris Evans Ana de Armas_v240P.mp4'),
(81, 'MALAANG', 'Description', '2017-10-28', 'Description', 'Description', 'Thriller', 'malaang.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(82, 'ANT MAN', 'Scott, a master thief, gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.', '2019-11-29', 'Bilal', 'Bilal', 'Action', 'antman.jpg', 'yt1s.com - 1st HumanSized Look at AntMan  Marvels AntMan Teaser Preview_v240P.mp4'),
(83, 'TALAASH', 'Description', '2017-10-29', 'Description', 'Description', 'Thriller', 'talaash.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(84, 'Notting Hill', 'Description', '2014-11-22', 'Description', 'Description', 'Romance', 'nottinghill.jpg', 'yt1s.com - AWESOME 4K VIDEO 1 MINUTE DEMO TEST_v240P.mp4'),
(87, 'Black Panther', 'Description', '2020-10-30', 'Description', 'Description', 'Action', 'black-panther-stance-i56196.jpg', 'yt1s.com - NOISES  OneMinute Student Short Film  FIlmstro x Filmstro Competition 2017_360p.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tvshows`
--

CREATE TABLE `tvshows` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `releasedate` date NOT NULL,
  `director` text NOT NULL,
  `cast` text NOT NULL,
  `category` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tvshows`
--

INSERT INTO `tvshows` (`id`, `title`, `description`, `releasedate`, `director`, `cast`, `category`, `poster`, `trailer`) VALUES
(30, 'MONEY HEIST', 'Description', '2020-11-30', 'Description', 'Description', 'Sports', 'money heist.jpg', 'yt1s.com - NOISES  OneMinute Student Short Film  FIlmstro x Filmstro Competition 2017_360p.mp4'),
(31, 'BREAKING BAD', 'Description', '2020-11-29', 'Description', 'Description', 'Sitcom', 'breaking bad.jpg', 'yt1s.com - Granite Slate Teaser  Breaking Bad_v144P.mp4'),
(32, 'Stranger Things', 'Description', '2019-11-29', 'Description', 'Description', 'Adventure', 'strangerthings.jpg', 'yt1s.com - NOISES  OneMinute Student Short Film  FIlmstro x Filmstro Competition 2017_360p.mp4'),
(33, 'PEAKY BLINDERS', 'Description', '2020-11-29', 'Description', 'Description', 'Sitcom', 'peaky blinders.jpg', 'yt1s.com - NOISES  OneMinute Student Short Film  FIlmstro x Filmstro Competition 2017_360p.mp4'),
(34, 'RIVER DALE', 'Riverdale is the story of a small American town rocked by the murder of a high school student. Archie Andrews is a football player-slash-aspiring musician, the heartthrob counterpart to the perfect girl-next-door Betty and the sultry new girl, Veronica.', '2021-02-01', 'Bilal', 'Cole, Lily, KJ', 'Adventure', 'RIVERDALE.jpg', 'yt1s.com - Riverdale  Official Trailer HD  Netflix_v144P.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminloginform`
--
ALTER TABLE `adminloginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvshows`
--
ALTER TABLE `tvshows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminloginform`
--
ALTER TABLE `adminloginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tvshows`
--
ALTER TABLE `tvshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
