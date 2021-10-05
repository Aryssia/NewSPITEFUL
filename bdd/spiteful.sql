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
  `probleme` varchar(255) NOT NULL,
  `remede` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `nomanim_1`, `nomanim_2`, `habitat_1`, `habitat_2`, `peptide`, `probleme`, `remede`, `video`, `description`, `imgdesc`) VALUES
(1, 'Mamba vert', 'Squamates', 'Afrique de l\'Est', '+/- 20m2', 'La mambaquarétine', 'La polykystose rénale', 'Q-Mamba', 'PresSPITEFULen.mp4', 'La Mamba vert est un serpent d\'origine africaine.\r\n\r\nDes chercheurs scientifiques ont trouvés dans son venin un peptide qui pourrait éventuellement aboutir à la création d\'un remède contre la polykystose rénale.\r\n\r\nUn espoir thérapeutique et une avancée extraordinaire dans la science médicinale!', 'GreenMamba.png'),
(2, 'Chironex Fleckeri', 'Chirodropida', 'Océan Pacifique (Côtes Australiennes)', 'Océan Indien', 'CRISPR-Cas9', 'Problème de Cholestérol', 'Ex-Cura', 'PresSPITEFULfr.mp4', 'La Chironex Fleckeri est l\'une des méduse les plus mortelle au monde.\r\n\r\nPourtant cet animal pourrait apaiser certains maux tels que les problèmes de cholestérol qui ont augmenté ces dernières années.', 'ChironexFleckeri.png'),
(3, 'Palythoa', 'Zoantharie', 'Amérique', 'Floride', 'Palytoxine', 'Cancer', 'Paly-pharmakon', '', 'Le Palythoa aussi hypnotisant qu\'il soit avec toutes ces branches ondulantes.\r\n\r\nCe petit animal produit une toxine qui d\'après sa composition, nous pourrions créer un remède contre la cancer.', 'palyhtoa.png'),
(4, 'Conus Mage', 'Neogastropoda', 'Océan Pacifique', 'Océan Indien', 'Zicontide', 'Douleurs diverses', 'Conufren', '', 'Ce grand coquillage qu\'on appelle le Cône Mage porte bien son nom.\r\n\r\nMage car grâce à une molécule provenant de son venin, il pourrait faire des miracles!\r\nEffacer les douleurs diverses que notre corps nous fait ressentir.', 'Conusmarmoreus.png'),
(5, 'Mamba Noir', 'Squamates', 'Afrique', '+/-20m2', 'Mambalgine', 'Douleurs diverses', 'Mambalgine', '', 'Tout comme son cousin le mamba noir est un fournisseur de venin extraordinaire.\r\n\r\nMais il sera mis dans le même domaine que le Cône Mage. Le venin du mamba noir, nous permettra de créer une remède tout comme le Cône Mage; un antidouleur.', 'BlackMamba.png'),
(6, 'Araignée banane', 'Phoneutria nigriventer', 'Amérique du Sud', 'Australie', 'PnPP-19', 'Problèmes érectiles', 'Ba-Sex', '', 'Cette araignée est surnommée araignée banane pour 2 choses: le fait qu\'elle se cache dans les bouquet de bananes et le fait qu\'elle redonnerai la banane à ces messieurs qui ont du mal à lever la leur!\r\n\r\nLa vie et son hazard des choses!', 'araignee.png');

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
(1, 'Mamba vert', 'mambva.jpg'),
(2, 'Chironex Fleckeri', 'Méduse.jpg'),
(3, 'Palythoa', 'Palythoa.jpg'),
(4, 'Cône Mage', 'Conus.jpg'),
(5, 'Mamba noir', 'BlackMamba.jpg'),
(6, 'Araignée Banane', 'AraigneeBanane.jpg');

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
-- Indexes for table `medocs`
--
ALTER TABLE `medocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sci`
--
ALTER TABLE `sci`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- AUTO_INCREMENT for table `medocs`
--
ALTER TABLE `medocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sci`
--
ALTER TABLE `sci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
