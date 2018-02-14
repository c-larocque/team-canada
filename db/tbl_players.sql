-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 14, 2018 at 04:53 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_players`
--

INSERT INTO `tbl_players` (`players_id`, `players_card_desktop`, `players_card_desktop_back`, `players_card_mobile`, `players_name`, `players_position`, `players_hometown`, `players_number`, `players_description`, `players_career_totals`) VALUES
(1, '1-johnston.png', '1-johnston-back.png', '1-johnston-mobile.png', 'Ed Johnston', 'Goaltender', 'Montreal, QC', '1', 'Ed was the team’s third goalie dressing as the backup for most of the series and starting the second game in Stockholm.', '<li>592 games played</li>\r\n<li>0.897 save&#37;</li>\r\n<li>3.25 goals against average</li>\r\n<li>32 shut outs</li>'),
(3, '2-bergman.png', '2-bergman-back.png', '2-bergman-mobile.png', 'Gary Bergman', 'Defence', 'Kenora, ON', '2', 'Gary played all eight games of the series and is widely regarded as the most solid defenceman the team had.', '<li>838 games played</li>\r\n<li>68 goals scored</li>\r\n<li>299 assists</li>\r\n<li>367 points</li>\r\n<li>1249 penalty minutes</li>'),
(4, '3-stapleton.png', '3-stapleton-back.png', '3-stapleton-mobile.png', 'Pat Stapleton', 'Defence', 'Sarnia, ON', '3', 'Pat appeared in the last seven games against the Soviets and ended the series with a plus-six rating.', '<li>635 games played</li>\r\n<li>43 goals scored</li>\r\n<li>294 assists</li>\r\n<li>337 points</br>\r\n<li>353 penalty minutes</li>'),
(6, '4-orr.png', '4-orr-back.png', '4-orr-mobile.png', 'Bobby Orr', 'Defence', 'Parry Sound, ON', '4', 'Bobby travelled with the team, though injured; the Soviets allowed Canada an extra roster spot if he recovered in time.', '<li>1144 games played</li>\r\n<li>358 goals scored</li>\r\n<li>852 assists</li>\r\n<li>1210 points</li>\r\n<li>1453 penalty minutes</li>'),
(7, '5-park.png', '5-park-back.png', '5-park-mobile.png', 'Brad Park', 'Defence', 'Toronto, ON', '5', 'Brad played every game against the Soviets (totalling five points) and collected co-MVP honours in Game Eight.', '<li>1113 games played</li>\r\n<li>213 goals scored</li>\r\n<li>683 assists</li>\r\n<li>8965 points</li>\r\n<li>1429 penalty minutes</li>'),
(8, '6-ellis.png', '6-ellis-back.png', '6-ellis-mobile.png', 'Ron Ellis', 'Right Wing', 'Lindsay, ON', '6', 'Ron skated in all eight games of the series, while picking up points in Montreal, Winnipeg, and Moscow (Game Six).', '<li>1034 games played</li>\r\n<li>332 goals scored</li>\r\n<li>308 assists</li>\r\n<li>640 points</li>\r\n<li>207 penalty minutes</li>'),
(11, '7-esposito.png', '7-esposito-back.png', '7-esposito-mobile.png', 'Phil Esposito', 'Centre', 'Sault Ste. Marie, ON', '7', 'Phil was an alternate captain, lead the series in scoring, and lifted Team Canada to victory with four points in Game Eight.', '<li>1282 games played</li>\r\n<li>717 goals scored</li>\r\n<li>873 assists</li>\r\n<li>1590 points</li>\r\n<li>910 penalty minutes</li>'),
(12, '8-gilbert.png', '8-gilbert-back.png', '8-gilbert-mobile.png', 'Rod Gilbert', 'Right Wing', 'Montreal, QC', '8', 'Rod had four points in six games against the Soviets, including an important goal in the third period of Game Seven.', '<li>1065 games played</li>\r\n<li>406 goals scored</li>\r\n<li>615 assists</li>\r\n<li>1021 points</li>\r\n<li>508 penalty minutes</li>'),
(15, '9-goldsworthy.png', '9-goldsworthy-back.png', '9-goldsworthy-mobile.png', 'Bill Goldsworthy', 'Right wing', 'Kitchener, ON', '9', 'Bill had a two-point night in Vancouver and also played in Stockholm, Moscow (Game Seven) and Prague.', '<li>771 games played</li>\r\n<li>283 goals scored</li>\r\n<li>258 assists</li>\r\n<li>541 points</li>\r\n<li>793 penalty minutes</li>'),
(16, '10-hull.png', '10-hull-back.png', '10-hull-mobile.png', 'Dennis Hull', 'Left Wing', 'Pointe Anne, ON', '10', 'Dennis appeared in four games, notching a point in each (including in all three victories in Moscow).', '<li>959 games played</li>\r\n<li>303 goals scored</li>\r\n<li>351 assists</li>\r\n<li>654 points</li>\r\n<li>261 penalty minutes</li>'),
(19, '11-hadfield.png', '11-hadfield-back.png', '11-hadfield-mobile.png', 'Vic Hadfield', 'Left Wing', 'Oakville, ON', '11', 'Vic played for Team Canada in Montreal and Vancouver against the Soviets, as well as in both Stockholm games.', '<li>1002 games played</li>\r\n<li>323 goals scored</li>\r\n<li>389 assists</li>\r\n<li>712 points</li>\r\n<li>1154 penalty minutes</li>'),
(20, '12-cournoyer.png', '12-cournoyer-back.png', '12-cournoyer-mobile.png', 'Yvan Cournoyer', 'Right Wing', 'Drummondville, QC', '12', 'Yvan picked up five points in eight games, including the tying goal in the third period of Game Eight.', '<li>968 games played</li>\r\n<li>428 goals scored</li>\r\n<li>435 assists</li>\r\n<li>863 points</li>\r\n<li>255 penalty minutes</li>'),
(23, '14-cashman.png', '14-cashman-back.png', '14-cashman-mobile.png', 'Wayne Cashman', 'Right Wing', 'Kingston, ON', '14', 'Wayne had a point in Toronto and in Winnipeg, but had his series ended due to an injury received in Stockholm.', '<li>1027 games played</li>\r\n<li>277 goals scored</li>\r\n<li>516 assists</li>\r\n<li>793 points</li>\r\n<li>1041 penalty minutes</li>'),
(24, '15-berenson.png', '15-berenson-back.png', '15-berenson-mobile.png', 'Red Berenson', 'Centre', 'Regina, SK', '15', 'Red was one of three players not from Ontario or Quebec and suited up in Montreal, Stockholm, and Moscow (Game six).', '<li>987 games played</li>\r\n<li>261 goals scored</li>\r\n<li>397 assists</li>\r\n<li>658 points</li>\r\n<li>305 penalty minutes</li>'),
(27, '16-seiling.png', '16-seiling-back.png', '16-seiling-mobile.png', 'Rod Seiling', 'Defence', 'Elmira, ON', '16', 'Rod dressed for the team in three games against the Soviets, as well as playing in Stockholm and Prague.', '<li>979 games played</li>\r\n<li>62 goals scored</li>\r\n<li>269 assists</li>\r\n<li>331 points</li>\r\n<li>603 penalty minutes</li>'),
(28, '17-white.png', '17-white-back.png', '17-white-mobile.png', 'Bill White', 'Defence', 'Toronto, ON', '17', 'Bill played in seven games (as well as as in Stockholm), with a plus-seven rating and a goal in Game Eight.', '<li>604 games played</li>\r\n<li>50 goals scored</li>\r\n<li>215 assists</li>\r\n<li>265 points</li>\r\n<li>495 penalty minutes</li>'),
(31, '18-ratelle.png', '18-ratelle-back.png', '18-ratelle-mobile.png', 'Jean Ratelle', 'Centre', 'Lac St.-Jean, QC', '18', 'Jean had four points in six games (three of which came in Moscow, two in Game Eight) and was an alternate captain.', '<li>1281 games played</li>\r\n<li>491 goals scored</li>\r\n<li>776 assists</li>\r\n<li>1267 points</li>\r\n<li>276 penalty minutes</li>'),
(32, '19-henderson.png', '19-henderson-back.png', '19-henderson-mobile.png', 'Paul Henderson', 'Right Wing', 'Kincardine, ON', '19', 'Paul collected seven of his 10 points in Moscow, including winning goals in the last three games of the series.', '<li>707 games played</li>\r\n<li>236 goals scored</li>\r\n<li>241 assists</li>\r\n<li>477 points</li>\r\n<li>304 penalty minutes</li>'),
(35, '20-mahovlich.png', '20-mahovlich-back.png', '20-mahovlich-mobile.png', 'Peter Mahovlich', 'Centre', 'Timmins, ON', '20', 'Peter appeared in seven games against the Soviets, notably scoring a dramatic short-handed goal in Toronto.', '<li>884 games played</li>\r\n<li>288 goals scored</li>\r\n<li>485 assists</li>\r\n<li>773 points</li>\r\n<li>916 penalty minutes</li>'),
(36, '21-mikita.png', '21-mikita-back.png', '21-mikita-mobile.png', 'Stan Mikita', 'Centre', 'Sokice, Slovakia', '21', 'Stan was an alternate captain, playing for the team in Toronto, winnipeg, Stockholm and (most memorably) in Prague.', '<li>1394 games played</li>\r\n<li>541 goals scored</li>\r\n<li>926 assists</li>\r\n<li>1467 points</li>\r\n<li>1270 penalty minutes</li>'),
(39, '22-parise.png', '22-parise-back.png', '22-parise-mobile.png', 'Jean-Paul Parise', 'Left Wing', 'Smooth Rock Falls, ON', '22', 'JP had four points in six games against the Soviets and lead the Summit Series in penalty minutes (with 28).', '<li>890 games played</li>\r\n<li>238 goals scored</li>\r\n<li>356 assists</li>\r\n<li>594 points</li>\r\n<li>706 penalty minutes</li>'),
(40, '23-savard.png', '23-savard-back.png', '23-savard-mobile.png', 'Serge Savard', 'Defence', 'Landrienne, QC', '23', 'Serge played in games Two, Three, Six, Seven and Eight; Team Canada didn''t lose any of those games.', '<li>1040 games played</li>\r\n<li>106 goals scored</li>\r\n<li>333 assists</li>\r\n<li>439 points</li>\r\n<li>592 penalty minutes</li>'),
(43, '24-redmond.png', '24-redmond-back.png', '24-redmond-mobile.png', 'Mickey Redmond', 'Right Wing', 'Kirkland Lake, ON', '24', 'Mickey appeared in the opening game in the series (Montreal), and also plaed in Stockholm and Prague.', '<li>538 games played</li>\r\n<li>233 goals scored</li>\r\n<li>195 assists</li>\r\n<li>428 points</li>\r\n<li>219 penalty minutes</li>'),
(44, '25-lapointe.png', '25-lapointe-back.png', '25-lapointe-mobile.png', 'Guy Lapointe', 'Defence', 'Montreal, QC', '25', 'Guy played for the team in seven games against the Soviets, picking up a point in Moscow (Game Five).', '<li>894 games played</li>\r\n<li>171 goals scored</li>\r\n<li>451 assists</li>\r\n<li>622 points</li>\r\n<li>893 penalty minutes</li>'),
(47, '26-awrey.png', '26-awrey-back.png', '26-awrey-mobile.png', 'Don Awrey', 'Defence', 'Kitchener, ON', '26', 'Don skated against the Soviets in Montreal and Vancouver, and also played in Stockholm and Prague.', '<li>969 games played</li>\r\n<li>31 goals scored</li>\r\n<li>158 assists</li>\r\n<li>189 points</li>\r\n<li>1065 penalty minues</li>'),
(48, '27-mahovlich.png', '27-mahovlich-back.png', '27-mahovlich-mobile.png', 'Frank Mahovlich', 'Left Wing', 'Timmins, ON', '27', 'Frank was an alternate captain, collecting a point in both Game One (Montreal) and Game Eight (Moscow).', '<li>1181 games played</li>\r\n<li>533 goals scored</li>\r\n<li>570 assists</li>\r\n<li>1103 points</li>\r\n<li>1056 penalty minutes</li>'),
(49, '28-clarke.png', '28-clarke-back.png', '28-clarke-mobile.png', 'Bobby Clarke', 'Centre', 'Flin Flon, MB', '28', 'Bobby collected six points over eight games (including three in Game Five) and was also strong defensively.', '<li>1144 games played</li>\r\n<li>358 goals scored</li>\r\n<li>852 assists</li>\r\n<li>1210 points</li>\r\n<li>1453 penalty minutes</li>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`players_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `players_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
