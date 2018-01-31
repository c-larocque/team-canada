-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 31, 2018 at 05:00 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_team_canada`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_players`
--

CREATE TABLE `tbl_players` (
  `players_id` smallint(5) unsigned NOT NULL,
  `players_card_desktop` varchar(100) NOT NULL,
  `players_card_desktop_back` varchar(100) NOT NULL,
  `players_card_mobile` varchar(100) NOT NULL,
  `players_name` varchar(120) NOT NULL,
  `players_position` varchar(100) NOT NULL,
  `players_hometown` varchar(120) NOT NULL,
  `players_number` varchar(10) NOT NULL,
  `players_description` text NOT NULL,
  `players_career_totals` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_players`
--

INSERT INTO `tbl_players` (`players_id`, `players_card_desktop`, `players_card_desktop_back`, `players_card_mobile`, `players_name`, `players_position`, `players_hometown`, `players_number`, `players_description`, `players_career_totals`) VALUES
(1, '1-johnston.png', '1-johnston-back.png', '1-johnston-mobile.png', 'Ed Johnston', 'Goaltender', 'Montreal, QC', '1', 'Ed was the team’s third goalie dressing as the backup for most of the series and starting the second game in Stockholm.', '<li>592 games played</li>\r\n<li>0.897save&#37;</li>\r\n<li>3.25 goals against average</li>\r\n<li>32 shoot outs</li>'),
(3, '2-bergman.png', '2-bergman-back.png', '2-bergman-mobile.png', 'Gary Bergman', 'Defence', 'Kenora, ON', '2', 'Gary played all eight games of the series and is widely regarded as the most solid defenceman the team had.', '<li>838 games played</li>\r\n<li>68 goals scored</li>\r\n<li>299 assists</li>\r\n<li>367 points</li>\r\n<li>1249 penalty minutes</li>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_id` tinyint(3) unsigned NOT NULL,
  `team_name` varchar(75) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `team_name`) VALUES
(1, 'Team Canada'),
(2, 'Soviet National Team');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`players_id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `players_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
