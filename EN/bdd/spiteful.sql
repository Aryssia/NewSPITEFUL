-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 12:31 PM
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
-- Database: `spiteful`
--

-- --------------------------------------------------------

--
-- Table structure for table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `nomanim_1` varchar(255) NOT NULL,
  `nomanim_2` varchar(255) NOT NULL,
  `habitat_1` varchar(255) NOT NULL,
  `habitat_2` varchar(255) NOT NULL,
  `peptide` varchar(255) NOT NULL,
  `probleme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `nomanim_1`, `nomanim_2`, `habitat_1`, `habitat_2`, `peptide`, `probleme`) VALUES
(1, 'Mamba vert', 'Squamates', 'Afrique de l\'Est', '+/- 20m2', 'La mambaquarétine', 'Les polykystoses rénales'),
(2, 'Chironex Fleckeri', 'Chirodropida', 'Océan Pacifique (Côtes Australiennes)', 'Océan Indien', 'CRISPR-Cas9', 'Problème de Cholestérol'),
(3, 'Palythoa', 'Zoantharie', 'Amérique', 'Floride', 'Palytoxine', 'Cancer'),
(4, 'Conus Mage', 'Neogastropoda', 'Océan Pacifique', 'Océan Indien', 'Zicontide', 'Douleurs diverses'),
(5, 'Mamba Noir', 'Squamates', 'Afrique', '+/-20m2', 'Mambalgine', 'Douleurs diverses'),
(6, 'Araignée banane', 'Phoneutria nigriventer', 'Amérique du Sud', 'Australie', 'PnPP-19', 'Problèmes érectiles');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mess` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `mail`, `mess`, `date`) VALUES
(1, 'Durieu', 'Marie', 'email@gmail.com', 'Bonjour, je voudrais...', '2021-03-11'),
(2, 'Durieu', 'Marie', 'email@gmail.com', 'Bonjour, je voudrais...', '2021-06-19'),
(3, 'Flament', 'Marie', 'aryssiaphoenix@gmail.com', 'TEST', '2021-06-19');

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
-- Table structure for table `medocs`
--

CREATE TABLE `medocs` (
  `id` int(11) NOT NULL,
  `nomedoc` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `pourc` varchar(255) NOT NULL,
  `maladie` varchar(255) NOT NULL,
  `imagemed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medocs`
--

INSERT INTO `medocs` (`id`, `nomedoc`, `numero`, `pourc`, `maladie`, `imagemed`) VALUES
(1, 'Q-Mamba', '- 01 -', '3%', 'Cardio-vasculaire', 'Q-Mmba.png'),
(2, 'Ex-Cura', '- 02 -', '1.3%', 'Cholestérol', 'Ex-Cura.png'),
(3, 'Paly-pharmakon', '- 03 -', '2%', 'Cancer', 'Paly-pharmakon.png'),
(4, 'Conufren', '- 04 -', '2.5%', 'Douleurs diverses', 'Conufren.png'),
(5, 'Mambalgine', '- 05 -', '3%', 'Douleurs diverses', 'Mambalgine.png'),
(6, 'Ba-Sex', '- 69 -', '1.5%', 'Problèmes érectiles', 'Ba-Sex.png');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `nompho` varchar(255) NOT NULL,
  `slidepho` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dossier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `nompho`, `slidepho`, `image`, `dossier`) VALUES
(8, 'Mamba vert', 'Slide Produit', 'Green_Mamba_ret.png', 'PNG'),
(9, 'Cuboméduse', 'Slide Produit', 'Chironex_Fleckeri.png', 'PNG'),
(10, 'Palythoa', 'Slide Produit', 'palyhtoa.png', 'PNG'),
(11, 'Conus Mage', 'Slide Produit', 'Conus_marmoreus.png', 'PNG'),
(12, 'Mamba noir', 'Slide Produit', 'Black_Mamba.png', 'PNG'),
(13, 'Araignée Banane', 'Slide Produit', 'Araignée_banane.png', 'PNG'),
(14, 'Mamba vert bl', 'Modifier', 'mambavert.png', 'Illu'),
(15, 'Méduse bl', 'Modifier', 'meduse.png', 'Illu'),
(16, 'Palythoa bl', 'Modifier', 'paly.png', 'Illu'),
(17, 'Cone mage bl', 'Modifier', 'Conemage.png', 'Illu'),
(18, 'Mamba noir bl', 'Modifier', 'Mamban.png', 'Illu'),
(19, 'Araignée bl', 'Modifier', 'araignee.png', 'Illu'),
(20, 'Mamba vert n', 'Ajouter', 'mambavertbis.png', 'Illu'),
(21, 'Méduse n', 'Ajouter', 'medusebis.png', 'Illu'),
(22, 'Palythoa n', 'Ajouter', 'palybis.png', 'Illu'),
(23, 'Cone mage n', 'Ajouter', 'conemagebis.png', 'Illu'),
(24, 'Mamba noir n', 'Ajouter', 'mambanbis.png', 'Illu'),
(25, 'Araignée n', 'Ajouter', 'araigneebis.png', 'Illu');

-- --------------------------------------------------------

--
-- Table structure for table `sci`
--

CREATE TABLE `sci` (
  `id` int(11) NOT NULL,
  `nomsci` varchar(255) NOT NULL,
  `prenomsci` varchar(255) NOT NULL,
  `textsci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sci`
--

INSERT INTO `sci` (`id`, `nomsci`, `prenomsci`, `textsci`) VALUES
(2, 'Felice Gaspard Ferdinando', 'FONTANA', 'Felice Gaspard Ferdinando Fontana est un physicien et naturaliste italien né le 15 avril 1730 à Pomarolo dans le Tyrol et est décédé le 10 mars 1805 à Florence.');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nomvid` varchar(255) NOT NULL,
  `slidevid` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `dossier` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `nomvid`, `slidevid`, `video`, `dossier`, `poster`) VALUES
(1, 'Charte graph FR', 'Vidéo', 'Charte graphique.mp4', 'FR', 'CGF.jpg'),
(3, 'Graphic Design EN', 'Video', 'Charte graphique EN.mp4', 'EN', 'CGE.jpg'),
(4, 'Pres Spiteful EN', 'Video', 'Présentation SPITEFUL En.mp4', 'EN', 'PS.jpg'),
(5, 'Logo', 'Video', 'LOGO FI.mp4', 'vidéos', 'PS.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medocs`
--
ALTER TABLE `medocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sci`
--
ALTER TABLE `sci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medocs`
--
ALTER TABLE `medocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sci`
--
ALTER TABLE `sci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
