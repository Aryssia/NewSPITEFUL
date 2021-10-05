-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2021 at 06:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spiteful_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `namanim_1` varchar(255) NOT NULL,
  `namanim_2` varchar(255) NOT NULL,
  `house_1` varchar(255) NOT NULL,
  `house_2` varchar(255) NOT NULL,
  `peptide` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `remedy` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `namanim_1`, `namanim_2`, `house_1`, `house_2`, `peptide`, `problem`, `remedy`, `video`, `description`, `imgdesc`) VALUES
(1, 'Green Mamba', 'Squamates', 'East Africa', '+/-20m²', 'The mambaqueratine', 'The polycystic kidney disease', 'Q-Mamba', '', 'The Green Mamba is a snake of African origin. Scientists have found a peptide in its venom that could potentially lead to the creation of a cure for renal polykystosis. A therapeutic hope and an extraordinary advance in medicinal science!', 'GreenMamba.png'),
(2, 'Chirone Fleckeri', 'Chirodropida', 'Pacific Ocean (Australian Coasts)', 'Indian Ocean', 'CRISPR-Cas9', 'Cholesterol problem', 'Ex-Cura', '', 'The Chironex Fleckeri is one of the deadliest jellyfish in the world. Yet this animal could soothe certain ailments such as cholesterol problems that have increased in recent years.', 'ChironexFleckeri.png'),
(3, 'Palythoa', 'Zoantharie', 'America', 'Florida', 'Palytoxine', 'Cancer', 'Paly-pharmakon', '', 'Palythoa as hypnotizing as it is with all these wavy branches. This little animal produces a toxin that, based on its composition, we could create a cure for cancer.', 'palyhtoa.png'),
(4, 'Conus Mage', 'Neogastropoda', 'Pacific Ocean', 'Indian Ocean', 'Zicontide', 'Painkillers', 'Conufren', '', 'This large shell called the Cone Mage bears his name. Mage because thanks to a molecule coming from its venom, it could do miracles! To erase the various pains that our body makes us feel.', 'Conusmarmoreus.png'),
(5, 'Black Mamba', 'Squamates', 'Africa', '+/-20m²', 'Mambalgine', 'Painkillers', 'Mambalgine', '', 'Just like its cousin the black mamba is an extraordinary supplier of venom. But it will be put in the same field as the Cone Mage. The venom of the black mamba, will allow us to create a remedy just like the Cone Mage; a pain reliever.', 'BlackMamba.png'),
(6, 'Banana Spider', 'Phoneutria nigriventer', 'Sud America', 'Australia', 'PnPP-19', 'Erectils problems', 'Ba-Sex', '', 'This spider is nicknamed banana spider for 2 things: the fact that it hides in the bunch of bananas and the fact that it will give the banana back to these gentlemen who have trouble lifting theirs! Life and its hazard of things!', 'araignee.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mess` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imgvideo`
--

CREATE TABLE `imgvideo` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `imgvid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imgvideo`
--

INSERT INTO `imgvideo` (`id`, `nom`, `imgvid`) VALUES
(1, 'Green Mamba', 'mambva.jpg'),
(2, 'Chironex Fleckeri', 'Méduse.jpg'),
(3, 'Palythoa', 'Palythoa.jpg'),
(4, 'Conus Mage', 'Conus.jpg'),
(5, 'Black Mamba', 'BlackMamba.jpg'),
(6, 'Banana Spider', 'AraigneeBanane.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `admin`, `password`) VALUES
(2, 'Aryssia', '$2y$10$6LeohMBe3p9s8jjXodc1ueLyRSJiKSL8VHLP55rDyIyCEevx3pz0i'),
(3, 'Profs', '$2y$10$fa77zrZYqKmF0Se7yUTqF.16k1JMxBeMRkDE9JkBL..o6qSo19E.O');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `nammedi` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `pourcentage` varchar(255) NOT NULL,
  `sickness` varchar(255) NOT NULL,
  `imgmedicine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `nammedi`, `number`, `pourcentage`, `sickness`, `imgmedicine`) VALUES
(1, 'Q-Mamba', '-01-', '3%', 'Cardio-vascular', 'Q-Mmba.png'),
(2, 'Ex-Cura', '-02-', '1.3%', 'Cholesterol', 'Ex-Cura.png'),
(3, 'Paly-pharmakon', '-03-', '2%', 'Cancer', 'Paly-pharmakon.png'),
(4, 'Conufren', '-04-', '2.5%', 'Painkillers', 'Conufren.png'),
(5, 'Mambalgine', '-05-', '3%', 'Painkillers', 'Mambalgine.png'),
(6, 'Ba-Sex', '-69-', '1.5%', 'Erectils problems', 'Ba-Sex.png');

-- --------------------------------------------------------

--
-- Table structure for table `scien`
--

CREATE TABLE `scien` (
  `id` int(11) NOT NULL,
  `namesci` varchar(255) NOT NULL,
  `surnamesci` varchar(255) NOT NULL,
  `textscien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scien`
--

INSERT INTO `scien` (`id`, `namesci`, `surnamesci`, `textscien`) VALUES
(2, 'Fontana', 'Felice Gaspard Ferdinando', 'Felice Gaspard Ferdinando Fontana is an Italian physicist and naturalist born on 15 April 1730 in Pomarolo in Tyrol and died on 10 March 1805 in Florence.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgvideo`
--
ALTER TABLE `imgvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scien`
--
ALTER TABLE `scien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgvideo`
--
ALTER TABLE `imgvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
