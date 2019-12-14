-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 01:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinf`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`) VALUES
('0002', 'Relogio reading'),
('0003', 'Alameda reading'),
('0004', 'Catarina reading'),
('INDIF', 'Cliente Indiferenciado');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `saft` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `saft`, `customer`, `product`, `number`, `quantity`) VALUES
(6, 20, '0002', 'METALLICAPOSTERS', 'FA 2019/3', 10),
(7, 20, 'INDIF', 'NBAPOSTERS', 'FA 2019/4', 7),
(8, 21, '0002', 'GAMEINFORMER', '3', 3),
(9, 21, '0002', 'METALLICAPOSTERS', '7', 7),
(10, 21, '0003', 'METALLICAPOSTERS', '4', 4),
(11, 21, '0003', 'NBAPOSTERS', '15', 15),
(12, 21, '0003', 'PRIDEANDPREJUDICE', '3', 3),
(13, 21, '0004', 'OSMAIAS', '5', 5),
(14, 21, '0004', 'METALLICAPOSTERS', '1', 1),
(15, 21, '0004', 'PCGAMER', '20', 20),
(16, 21, '0003', 'THEHUNGERGAMES', '7', 7),
(17, 22, '0002', 'TIMES', '5', 5),
(18, 22, '0002', 'TOKILLAMOCKINGBIR', '8', 8),
(19, 22, '0003', 'NATIONALGEOGRAPHIC', '3', 3),
(20, 22, '0003', 'NATIONALGEOGRAPHIC', '9', 9),
(21, 22, '0003', 'NATIONALGEOGRAPHIC', '9', 9),
(22, 22, '0003', 'THEHUNGERGAMES', '4', 4),
(23, 23, '0004', 'TIMES', '2', 2),
(24, 24, '0002', 'NATIONALGEOGRAPHIC', '5', 5),
(25, 24, '0002', 'TOKILLAMOCKINGBIR', '5', 5),
(26, 24, '0003', 'WRCPOSTERS', '7', 7),
(27, 24, '0003', 'PRIDEANDPREJUDICE', '7', 7),
(28, 24, '0004', 'GAMEINFORMER', '2', 2),
(29, 24, '0004', 'METALLICAPOSTERS', '5', 5),
(30, 25, '0004', 'NATIONALGEOGRAPHIC', '12', 12),
(31, 25, '0004', 'GAMEINFORMER', '9', 9),
(32, 25, 'INDIF', 'NATIONALGEOGRAPHIC', '13', 13),
(33, 25, 'INDIF', 'METALLICAPOSTERS', '1', 1),
(34, 25, 'INDIF', 'OSMAIAS', '3', 3),
(35, 25, 'INDIF', 'THEHUNGERGAMES', '7', 7),
(36, 21, 'INDIF', 'NATIONALGEOGRAPHIC', '10', 10),
(37, 21, 'INDIF', 'TIMES', '9', 9),
(38, 21, 'INDIF', 'GAMEINFORMER', '2', 2),
(39, 22, 'INDIF', 'THEHUNGERGAMES', '7', 7),
(40, 22, 'INDIF', 'WRCPOSTERS', '3', 3),
(41, 22, 'INDIF', 'TOKILLAMOCKINGBIR', '4', 4),
(42, 23, 'INDIF', 'TIMES', '19', 19),
(43, 23, 'INDIF', 'PCGAMER', '4', 4),
(44, 23, 'INDIF', 'PRIDEANDPREJUDICE', '1', 1),
(45, 23, 'INDIF', 'TOKILLAMOCKINGBIR', '1', 1),
(46, 24, 'INDIF', 'NBAPOSTERS', '8', 8),
(47, 24, 'INDIF', 'PCGAMER', '5', 5),
(48, 24, 'INDIF', 'GAMEINFORMER', '2', 2),
(49, 24, 'INDIF', 'NATIONALGEOGRAPHIC', '8', 8),
(50, 25, 'INDIF', 'NATIONALGEOGRAPHIC', '4', 4),
(51, 25, 'INDIF', 'OSMAIAS', '2', 2),
(52, 25, 'INDIF', 'PCGAMER', '4', 4),
(53, 25, 'INDIF', 'PRIDEANDPREJUDICE', '1', 1),
(54, 25, 'INDIF', 'THEHUNGERGAMES', '6', 6),
(55, 25, 'INDIF', 'TIMES', '6', 6),
(56, 26, '0002', 'METALLICAPOSTERS', '1', 1),
(57, 26, '0002', 'NATIONALGEOGRAPHIC', '7', 7),
(58, 26, '0002', 'OSMAIAS', '3', 3),
(59, 26, '0003', 'PRIDEANDPREJUDICE', '9', 9),
(60, 26, '0003', 'WRCPOSTERS', '1', 1),
(61, 26, '0003', 'OSMAIAS', '4', 4),
(62, 26, '0003', 'GAMEINFORMER', '3', 3),
(63, 26, '0004', 'GAMEINFORMER', '5', 5),
(64, 26, '0004', 'NATIONALGEOGRAPHIC', '4', 4),
(65, 26, '0004', 'OSMAIAS', '5', 5),
(66, 26, '0004', 'THEHUNGERGAMES', '6', 6),
(67, 26, 'INDIF', 'GAMEINFORMER', '9', 9),
(68, 26, 'INDIF', 'NATIONALGEOGRAPHIC', '11', 11),
(69, 26, 'INDIF', 'PRIDEANDPREJUDICE', '6', 6),
(70, 26, 'INDIF', 'THEHUNGERGAMES', '5', 5),
(71, 27, '0002', 'GAMEINFORMER', '3', 3),
(72, 27, '0002', 'NATIONALGEOGRAPHIC', '6', 6),
(73, 27, '0003', 'NATIONALGEOGRAPHIC', '6', 6),
(74, 27, '0003', 'NBAPOSTERS', '4', 4),
(75, 27, '0003', 'PCGAMER', '2', 2),
(76, 27, '0004', 'GAMEINFORMER', '2', 2),
(77, 27, '0004', 'OSMAIAS', '4', 4),
(78, 27, '0004', 'THEHUNGERGAMES', '3', 3),
(79, 27, '0004', 'WRCPOSTERS', '4', 4),
(80, 27, 'INDIF', 'GAMEINFORMER', '13', 13),
(81, 27, 'INDIF', 'NATIONALGEOGRAPHIC', '9', 9),
(82, 27, 'INDIF', 'OSMAIAS', '4', 4),
(83, 27, 'INDIF', 'PCGAMER', '6', 6),
(84, 27, 'INDIF', 'TOKILLAMOCKINGBIR', '1', 1),
(85, 27, 'INDIF', 'METALLICAPOSTERS', '8', 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `extended_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `extended_description`) VALUES
('GAMEINFORMER', 'Game Informer', 'Game Informer (GI) is an American monthly video game magazine featuring articles, news, strategy, and reviews of video games and associated consoles. It debuted in August 1991 when FuncoLand started publishing a six-page magazine.[2][3] The publication is owned and published by GameStop Corp., the parent company of the video game retailer of the same name, who bought FuncoLand in 2000. Due to this, a large amount of promotion is done in-store, which has contributed to the success of the magazine; it is now the 4th most popular magazine by copies circulated.[4][5] Game Informer has since become an important part of GameStop\'s customer loyalty program, PowerUp Rewards, which offers subscribers access to special content on the official website.'),
('METALLICAPOSTERS', 'Metallica Rock Band', 'Posters From Metallica Rock Band.'),
('NATIONALGEOGRAPHIC', 'National Geographic Magazine', 'National Geographic (formerly the National Geographic Magazine and branded also as NAT GEO) is the official magazine of the National Geographic Society. It has been published continuously since its first issue in 1888, nine months after the Society itself was founded. It primarily contains articles about science, geography, history, and world culture. The magazine is known for its thick square-bound glossy format with a yellow rectangular border and its extensive use of dramatic photographs. Controlling interest in the magazine has been held by The Walt Disney Company since 2019.\r\n\r\nThe magazine is published monthly, and additional map supplements are also included with subscriptions. It is available in a traditional printed edition and through an interactive online edition. On occasion, special editions of the magazine are issued.\r\n\r\nAs of 2015, the magazine was circulated worldwide in nearly 40 local-language editions and had a global circulation of approximately 6.5 million per month according to data published by The Washington Post (down from about 12 million in the late 1980s) or 6.7 million according to National Geographic. This includes a US circulation of 3.5 million.[6][7]'),
('NBAPOSTERS', 'National Basketball Association Posters', 'National Basketball Association Posters.'),
('OSMAIAS', 'Os Maias', 'Os Maias: Episódios da Vida Romântica (\"The Maias: Episodes of Romantic Life\") is a realist novel by Portuguese author José Maria de Eça de Queiroz, also known under the modernized spelling Eça de Queirós. Maia is the name of a fictional family, although some episodes fit into the history of the real Maia family.\r\n\r\nAs early as 1878, while serving in the Portuguese consulate at Newcastle upon Tyne, Eça had at least given a name to this book and had begun working on it. It was mainly written during his residence in Bristol, and it was first published in 1888.\r\n\r\nThe book largely concerns the life of young aristocrat Carlos da Maia in 1870s Portugal, when along with his best friend João da Ega he spends his time making witticisms about society and having affairs. The novel uses the Monarchy\'s decline in Portugal (late 19th century), as a predominant theme, reflecting its author\'s own regret at his country\'s slow decay.\r\n\r\nThe analysis of the book is compulsory for year 11 students in Portugal.'),
('PCGAMER', 'PC Gamer Magazine', 'PC Gamer reviews are written by the magazine\'s editors and freelance writers, and rate games on a percent scale. In the UK edition, no game has yet been awarded more than 96% (Kerbal Space Program, Civilization II, Half-Life, Half-Life 2, Minecraft, Spelunky and Quake II). In the US edition, no game has yet received a rating higher than 98% (Sid Meier\'s Alpha Centauri, Half-Life 2, and Crysis).[3]\r\n\r\nIn the UK edition, the lowest numerical score was 2%, awarded to The 4th Golden Satellite Awards for Interactive Media Winner Big Brother 1. The sequel, Big Brother 2, was given an even lower score of N/A%, the review explaining that \"[PC Gamer] put as much effort into reviewing it as they did in making the game\". In issue 255, August 2013, the score of 2% was matched by the review of the re-released Leisure Suit Larry: Magna Cum Laude, originally given 3% when it first launched. In the US edition, the lowest score awarded was 4%, given to Mad Dog McCree, unseating the previously lowest-rated game, Skydive!, given 5%.'),
('PRIDEANDPREJUDICE', 'Pride and Prejudice', 'Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work \"her own darling child\" and its vivacious heroine, Elizabeth Bennet, \"as delightful a creature as ever appeared in print.\" The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen\'s radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.'),
('THEHUNGERGAMES', 'The Hunger Games', 'In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV. Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she is forced to represent her district in the Games. But Katniss has been close to dead before - and survival, for her, is second nature. Without really meaning to, she becomes a contender. But if she is to win, she will have to start making choices that weigh survival against humanity and life against love.'),
('TIMES', 'Time Magazine', 'Time is an American weekly news magazine and news website published in New York City. It was founded in 1923 and originally run by Henry Luce. A European edition (Time Europe, formerly known as Time Atlantic) is published in London and also covers the Middle East, Africa, and, since 2003, Latin America. An Asian edition (Time Asia) is based in Hong Kong. The South Pacific edition, which covers Australia, New Zealand, and the Pacific Islands, is based in Sydney. In December 2008, Time discontinued publishing a Canadian advertiser edition.[2]\r\n\r\nTime has the world\'s largest circulation for a weekly news magazine. The print edition has a readership of 26 million, 20 million of whom are based in the United States. In mid-2012, its circulation was over 3 million,[1][3] which fell to 2 million by late 2017.[4]\r\n\r\nFormerly published by Time Inc., since November 2018 Time has been published by TIME USA, LLC, owned by Marc Benioff.[5]'),
('TOKILLAMOCKINGBIR', 'To Kill a Mockingbird', 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it, To Kill A Mockingbird became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.'),
('WRCPOSTERS', 'World Rally Championship Posters', 'World Rally Championship Posters');

-- --------------------------------------------------------

--
-- Table structure for table `saft`
--

CREATE TABLE `saft` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saft`
--

INSERT INTO `saft` (`id`, `start_date`, `end_date`) VALUES
(20, '2019-12-01', '2019-12-31'),
(21, '2019-05-01', '2019-05-31'),
(22, '2019-06-01', '2019-05-30'),
(23, '2019-07-01', '2019-07-31'),
(24, '2019-08-01', '2019-08-31'),
(25, '2019-09-01', '2019-09-30'),
(26, '2019-10-01', '2019-10-31'),
(27, '2019-11-01', '2019-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saft_fk` (`saft`),
  ADD KEY `customer_fk` (`customer`),
  ADD KEY `product_fk` (`product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saft`
--
ALTER TABLE `saft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `saft`
--
ALTER TABLE `saft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `saft_fk` FOREIGN KEY (`saft`) REFERENCES `saft` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;