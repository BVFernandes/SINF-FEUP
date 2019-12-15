-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 06:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
(1, 33, 'INDIF', 'GAMEINFORMER', 'FA 2019/1', 2),
(2, 33, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/1', 5),
(8, 35, '0002', 'METALLICAPOSTERS', 'FA 2019/5', 4),
(9, 35, '0002', 'THEHUNGERGAMES', 'FA 2019/5', 5),
(10, 35, '0003', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 5),
(11, 35, '0003', 'OSMAIAS', 'FA 2019/6', 7),
(12, 35, '0003', 'THEHUNGERGAMES', 'FA 2019/6', 1),
(14, 36, '0004', 'THEHUNGERGAMES', 'FA 2019/5', 3),
(15, 36, 'INDIF', 'WRCPOSTERS', 'FA 2019/6', 11),
(16, 36, 'INDIF', 'TIMES', 'FA 2019/6', 7),
(17, 36, 'INDIF', 'PCGAMER', 'FA 2019/6', 7),
(18, 36, '0004', 'GAMEINFORMER', 'FA 2019/7', 3),
(19, 36, '0004', 'OSMAIAS', 'FA 2019/7', 2),
(20, 36, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/8', 2),
(31, 38, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(32, 38, '0004', 'PCGAMER', 'FA 2019/5', 9),
(33, 38, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(34, 38, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(35, 38, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(36, 38, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(37, 38, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(38, 38, '0004', 'TIMES', 'FA 2019/8', 7),
(39, 38, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(40, 38, '0004', 'WRCPOSTERS', 'FA 2019/8', 2),
(41, 39, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 3),
(42, 39, '0004', 'PCGAMER', 'FA 2019/5', 11),
(43, 39, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 7),
(44, 39, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(45, 39, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 6),
(46, 39, '0002', 'GAMEINFORMER', 'FA 2019/7', 6),
(47, 39, '0002', 'OSMAIAS', 'FA 2019/7', 1),
(48, 39, '0004', 'TIMES', 'FA 2019/8', 10),
(49, 39, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 3),
(50, 39, '0004', 'NBAPOSTERS', 'FA 2019/8', 2),
(51, 40, '0003', 'NATIONALGEOGRAPHIC', 'FA 2019/5', 4),
(52, 40, '0003', 'THEHUNGERGAMES', 'FA 2019/5', 5),
(53, 40, 'INDIF', 'NBAPOSTERS', 'FA 2019/6', 11),
(54, 40, 'INDIF', 'OSMAIAS', 'FA 2019/6', 7),
(55, 40, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 2),
(56, 40, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(57, 40, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(58, 40, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/8', 2),
(69, 42, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(70, 42, '0004', 'PCGAMER', 'FA 2019/5', 9),
(71, 42, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(72, 42, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(73, 42, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(74, 42, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(75, 42, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(76, 42, '0004', 'TIMES', 'FA 2019/8', 7),
(77, 42, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(78, 42, '0004', 'WRCPOSTERS', 'FA 2019/8', 2),
(79, 43, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(80, 43, '0004', 'PCGAMER', 'FA 2019/5', 9),
(81, 43, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(82, 43, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(83, 43, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(84, 43, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(85, 43, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(86, 43, '0004', 'TIMES', 'FA 2019/8', 7),
(87, 43, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(88, 43, '0004', 'WRCPOSTERS', 'FA 2019/8', 2),
(99, 45, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(100, 45, '0004', 'PCGAMER', 'FA 2019/5', 9),
(101, 45, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(102, 45, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(103, 45, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(104, 45, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(105, 45, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(106, 45, '0004', 'TIMES', 'FA 2019/8', 7),
(107, 45, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(108, 45, '0004', 'WRCPOSTERS', 'FA 2019/8', 2),
(109, 46, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 1),
(110, 46, '0004', 'PCGAMER', 'FA 2019/5', 4),
(111, 46, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 4),
(112, 46, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 2),
(113, 46, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 4),
(114, 46, '0002', 'GAMEINFORMER', 'FA 2019/7', 7),
(115, 46, '0002', 'OSMAIAS', 'FA 2019/7', 1),
(116, 46, '0004', 'TIMES', 'FA 2019/8', 10),
(117, 46, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 2),
(118, 46, '0004', 'NBAPOSTERS', 'FA 2019/8', 2),
(119, 47, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(120, 47, '0004', 'PCGAMER', 'FA 2019/5', 9),
(121, 47, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(122, 47, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(123, 47, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(124, 47, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(125, 47, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(126, 47, '0004', 'TIMES', 'FA 2019/8', 7),
(127, 47, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(128, 47, '0004', 'WRCPOSTERS', 'FA 2019/8', 2),
(129, 48, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 1),
(130, 48, '0004', 'PCGAMER', 'FA 2019/5', 4),
(131, 48, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 4),
(132, 48, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 2),
(133, 48, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 4),
(134, 48, '0002', 'GAMEINFORMER', 'FA 2019/7', 7),
(135, 48, '0002', 'OSMAIAS', 'FA 2019/7', 1),
(136, 48, '0004', 'TIMES', 'FA 2019/8', 10),
(137, 48, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 2),
(138, 48, '0004', 'NBAPOSTERS', 'FA 2019/8', 2),
(149, 50, '0004', 'PRIDEANDPREJUDICE', 'FA 2019/5', 7),
(150, 50, '0004', 'PCGAMER', 'FA 2019/5', 9),
(151, 50, 'INDIF', 'NATIONALGEOGRAPHIC', 'FA 2019/6', 14),
(152, 50, 'INDIF', 'PRIDEANDPREJUDICE', 'FA 2019/6', 9),
(153, 50, 'INDIF', 'THEHUNGERGAMES', 'FA 2019/6', 7),
(154, 50, '0002', 'GAMEINFORMER', 'FA 2019/7', 3),
(155, 50, '0002', 'OSMAIAS', 'FA 2019/7', 2),
(156, 50, '0004', 'TIMES', 'FA 2019/8', 7),
(157, 50, '0004', 'THEHUNGERGAMES', 'FA 2019/8', 5),
(158, 50, '0004', 'WRCPOSTERS', 'FA 2019/8', 2);

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
  `end_date` date NOT NULL,
  `total_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saft`
--

INSERT INTO `saft` (`id`, `start_date`, `end_date`, `total_price`) VALUES
(33, '2019-12-01', '2019-12-31', 34.35),
(35, '2019-12-01', '2019-12-31', 166.58),
(36, '2019-08-01', '2019-08-31', 142.58),
(38, '2019-09-01', '2019-09-30', 499.65),
(39, '2019-10-01', '2019-10-31', 396.38),
(40, '2019-07-01', '2019-07-31', 174.6),
(42, '2019-05-01', '2019-05-30', 315.27),
(43, '2019-03-01', '2019-03-30', 399.65),
(45, '2019-02-01', '2019-02-28', 150.61),
(46, '2019-01-01', '2019-01-31', 137.99),
(47, '2019-04-01', '2019-04-30', 232.27),
(48, '2019-11-01', '2019-11-30', 181.38),
(50, '2019-06-01', '2019-06-30', 315.27);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `saft`
--
ALTER TABLE `saft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
