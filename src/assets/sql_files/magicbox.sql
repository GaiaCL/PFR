-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 mars 2023 à 14:58
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `magicbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `mail`, `password`) VALUES
(1, 'Gaia', 'gaia.coelsch@gmail.com', '$2y$10$KYrs5BEsyxSG/YFFsd0eauyEMIPL1Hq6/aHcCoAATGVxlbZwWTP8S');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `article` text NOT NULL,
  `author` text NOT NULL,
  `date_add` datetime NOT NULL,
  `date_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `identifier_order` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_customer` (`id_customer`),
  KEY `id_products` (`id_products`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_categorie` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name_categorie`, `description`) VALUES
(2, 'Incense & Plant', 'Find all of our Incense & Smudge plants here !'),
(3, 'Candles & Rituals', 'A large choice of candles for all of your rituals and spells.'),
(4, 'Divination', 'Tarot Cards, Cristal Balls and more !'),
(5, 'Cristals', 'From Amethysts to Quartz find all of our cristals here !'),
(6, 'Library', 'Every knowledge starts with a good book !'),
(7, 'Infos', 'All informations about us are available here !');

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `type`, `is_enabled`) VALUES
(1, 'Red', 1),
(2, 'Blue', 1),
(3, 'Green', 1),
(4, 'Orange', 1),
(5, 'Pink', 1),
(6, 'Brown', 1),
(7, 'Black', 1),
(8, 'White', 1),
(9, 'Yellow', 1),
(10, 'Purple', 1),
(11, 'Grey', 1),
(12, 'Gold', 1),
(13, 'Silver', 1),
(14, 'Magenta', 1),
(15, 'Dark Pink', 1),
(16, 'Light Blue', 1);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `adress` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  `city` text NOT NULL,
  `mail` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `illustrate_blogs`
--

DROP TABLE IF EXISTS `illustrate_blogs`;
CREATE TABLE IF NOT EXISTS `illustrate_blogs` (
  `id_pictures` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  PRIMARY KEY (`id_pictures`,`id_blog`),
  KEY `id_blog` (`id_blog`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `illustrate_products`
--

DROP TABLE IF EXISTS `illustrate_products`;
CREATE TABLE IF NOT EXISTS `illustrate_products` (
  `id_products` int(11) NOT NULL,
  `id_pictures` int(11) NOT NULL,
  PRIMARY KEY (`id_products`,`id_pictures`),
  KEY `id_pictures` (`id_pictures`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `illustrate_products`
--

INSERT INTO `illustrate_products` (`id_products`, `id_pictures`) VALUES
(87, 25),
(88, 26),
(89, 27),
(19, 28),
(20, 29),
(21, 30),
(22, 31),
(23, 32),
(24, 33),
(25, 34),
(26, 35),
(27, 36),
(28, 37),
(29, 38),
(30, 39),
(31, 40),
(32, 41),
(33, 42),
(34, 43),
(35, 44),
(36, 45),
(37, 46),
(38, 47),
(39, 48),
(40, 49),
(41, 50),
(42, 51),
(117, 52),
(100, 53),
(45, 54),
(44, 55),
(48, 56),
(49, 57),
(52, 58),
(55, 59),
(58, 60),
(63, 61),
(64, 62),
(70, 63),
(71, 64),
(72, 65),
(73, 66),
(65, 67),
(66, 68),
(67, 69),
(68, 70),
(69, 71),
(74, 72),
(75, 73),
(76, 74),
(77, 75),
(78, 76),
(79, 77),
(80, 78),
(81, 79),
(82, 80),
(83, 81),
(84, 82),
(85, 83),
(90, 84),
(91, 85),
(92, 86),
(93, 87),
(94, 88),
(95, 89),
(98, 90),
(99, 91),
(101, 92),
(102, 93),
(104, 94),
(105, 95),
(107, 96),
(112, 97),
(114, 98),
(115, 99),
(116, 100),
(118, 101),
(120, 102),
(103, 103),
(108, 104),
(109, 105),
(110, 106),
(111, 107),
(119, 108),
(113, 109),
(43, 110),
(46, 111),
(47, 112),
(50, 113),
(51, 114),
(53, 115),
(54, 116),
(56, 117),
(57, 118),
(59, 119),
(60, 120),
(62, 121),
(61, 122),
(96, 123),
(97, 124),
(122, 125),
(121, 126),
(123, 127),
(124, 128),
(125, 129),
(126, 130),
(127, 131),
(128, 132),
(129, 133),
(130, 134),
(131, 135),
(132, 137),
(133, 138),
(134, 139),
(135, 140),
(136, 141),
(137, 142),
(140, 143),
(141, 144),
(142, 145),
(161, 146),
(162, 147),
(154, 148),
(155, 149),
(156, 150),
(157, 151),
(164, 152),
(158, 153),
(165, 154),
(159, 155),
(160, 156),
(163, 157),
(138, 158),
(139, 159),
(143, 160),
(144, 161),
(146, 162),
(145, 163),
(148, 164),
(147, 165),
(149, 166),
(151, 167),
(150, 168),
(152, 169),
(153, 170),
(167, 171),
(168, 172),
(169, 173),
(170, 174),
(166, 175),
(171, 176),
(172, 177),
(173, 178),
(174, 179),
(175, 180),
(176, 181),
(177, 182),
(178, 183),
(179, 184),
(180, 185),
(181, 186),
(182, 187),
(183, 188),
(185, 189),
(189, 190),
(192, 191),
(197, 192),
(205, 193),
(215, 194),
(184, 195),
(186, 196),
(187, 197),
(188, 198),
(191, 199),
(190, 200),
(193, 201),
(194, 202),
(195, 203),
(196, 204),
(198, 205),
(218, 206),
(199, 207),
(200, 208),
(203, 209),
(204, 210),
(206, 211),
(207, 212),
(208, 213),
(209, 214),
(211, 215),
(212, 216),
(213, 217),
(214, 218),
(216, 219),
(217, 220),
(219, 221),
(201, 222),
(202, 223),
(210, 224),
(223, 225),
(224, 226),
(225, 227),
(222, 228),
(226, 229),
(228, 230),
(227, 231),
(229, 232),
(220, 233),
(221, 234),
(230, 235),
(231, 236);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifier_product` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `description_product` text NOT NULL,
  `price_product` int(11) NOT NULL,
  `price_cart` int(11) NOT NULL,
  `quantity_cart` int(11) NOT NULL,
  `comment_cart` varchar(50) NOT NULL,
  `identifier_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_pictures` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `name_pictures`, `description`, `path`) VALUES
(25, '1677145297', 'Green Tree 7 Chakras', 'src/assets/pictures/encens-7-chakras-green-tree-echoppe-esoterique-big.jpg'),
(26, '1677145360', 'Green Tree Angel Dust', 'src/assets/pictures/encens-angel-dust-green-tree-echoppe-esoterique-big.jpg'),
(27, '1677145404', 'Green Tree Angel Healing', 'src/assets/pictures/encens-angel-healing-green-tree-echoppe-esoterique-big.jpg'),
(28, '1677145448', 'Ayurvedic Incense AgarWood', 'src/assets/pictures/encens-ayurvedic-agarwood-echoppe-de-gaia-big.jpg'),
(29, '1677145479', 'Ayurvedic Incense Amber', 'src/assets/pictures/Encens-Ayurvedic---Ambre-Ayurvedic-AYU-AMB-2674.jpg'),
(30, '1677145497', 'Ayurvedic Incense Basil', 'src/assets/pictures/encens-ayurvedic-basil-basilic-echoppe-de-gaia-big.jpg'),
(31, '1677145514', 'Ayurvedic Incense Chakra', 'src/assets/pictures/encens-ayurvedic-chakra-echoppe-de-gaia-big.jpg'),
(32, '1677145538', 'Ayurvedic Incense Chandan', 'src/assets/pictures/encens-ayurvedic-chandan-echoppe-de-gaia-big.jpg'),
(33, '1677145557', 'Ayurvedic Incense Cinnamon', 'src/assets/pictures/encens-ayurvedic-cinnamon-cannelle-echoppe-de-gaia-big.jpg'),
(34, '1677145578', 'Ayurvedic Incense Dragon Blood', 'src/assets/pictures/Encens-Ayurvedic---Dragon-Blood---Sang-Dragon-Ayurvedic-AYU-DBL-2698.jpg'),
(35, '1677145642', 'Ayurvedic Incense Jasmine', 'src/assets/pictures/encens-ayurvedic-jasmine-jasmin-echoppe-de-gaia-big.jpg'),
(36, '1677145667', 'Ayurvedic Incense Katsuri', 'src/assets/pictures/encens-ayurvedic-kasturi-echoppe-de-gaia-big.jpg'),
(37, '1677145686', 'Ayurvedic Incense Lavender', 'src/assets/pictures/encens-ayurvedic-lavande-echoppe-de-gaia-big.jpg'),
(38, '1677145705', 'Ayurvedic Incense Meditation', 'src/assets/pictures/encens-ayurvedic-meditation-echoppe-de-gaia-big.jpg'),
(39, '1677145730', 'Ayurvedic Incense Nag Champa', 'src/assets/pictures/encens-ayurvedic-nag-champa-echoppe-de-gaia-big.jpg'),
(40, '1677145749', 'Ayurvedic Incense Nature Fresh', 'src/assets/pictures/encens-ayurvedic-nature-fresh-echoppe-de-gaia-big.jpg'),
(41, '1677145772', 'Ayurvedic Incense Opium', 'src/assets/pictures/Encens-Ayurvedic---Opium-Ayurvedic-AYU-OPI-2650.jpg'),
(42, '1677145790', 'Ayurvedic Incense Oudh', 'src/assets/pictures/encens-ayurvedic-oudh-echoppe-de-gaia-big.jpg'),
(43, '1677145812', 'Ayurvedic Incense Palo Santo', 'src/assets/pictures/encens-ayurvedic-palo-santo-echoppe-de-gaia-big.jpg'),
(44, '1677145850', 'Ayurvedic Incense Patchouli', 'src/assets/pictures/encens-ayurvedic-patchouli-echoppe-de-gaia-big.jpg'),
(45, '1677145871', 'Ayrvedic Incense Relaxation', 'src/assets/pictures/encens-ayurvedic-relaxation-echoppe-de-gaia-big.jpg'),
(46, '1677145885', 'Ayurvedic Incense Rose', 'src/assets/pictures/encens-ayurvedic-rose-echoppe-de-gaia-big.jpg'),
(47, '1677145910', 'Ayurvedic Incense Saffron', 'src/assets/pictures/encens-ayurvedic-saffron-safran-echoppe-de-gaia-big.jpg'),
(48, '1677145937', 'Ayurvedic Incense Stress Relief', 'src/assets/pictures/encens-ayurvedic-stress-relief-echoppe-de-gaia-big.jpg'),
(49, '1677146058', 'Ayurvedic Incense Vanilla', 'src/assets/pictures/encens-ayurvedic-vanille-echoppe-de-gaia-big.jpg'),
(50, '1677146079', 'Ayurvedic Incense White sage', 'src/assets/pictures/encens-ayurvedic-white-sage-echoppe-de-gaia-big.jpg'),
(51, '1677146110', 'Ayurvedic Incense Yoga', 'src/assets/pictures/encens-ayurvedic-yoga-echoppe-de-gaia-big.jpg'),
(52, '1677146173', 'Green Tree Buddhist tantra', 'src/assets/pictures/encens-buddhist-tantra-green-tree-echoppe-esoterique-big.jpg'),
(53, '1677146245', 'Green Tree Dragon Blood', 'src/assets/pictures/encens-dragons-blood-green-tree-echoppe-esoterique-big.jpg'),
(54, '1677146298', 'Golden Incense Nag Buddha', 'src/assets/pictures/encens-golden-buddha-echoppedegaia-big.jpg'),
(55, '1677146362', 'Golden Incense Nag Breuzinho', 'src/assets/pictures/Encens-Golden-Nag-Breuzinho---Benjoin-Vijayshree-Golden-GOLDNC1679.jpg'),
(56, '1677146390', 'Golden Incense Nag Cinnamon', 'src/assets/pictures/Encens-Golden-Nag-Cinnamon---Cannelle---Pack-de-12-Vijayshree-Golden-.jpg'),
(57, '1677146563', 'Golden Incense Nag Darshan', 'src/assets/pictures/encens-golden-nag-darshan-echoppedegaia-big.jpg'),
(58, '1677146586', 'Golden Incense Nag Lavender', 'src/assets/pictures/Encens-Golden-Nag-Lavender---Lavande-Vijayshree-Golden-GOLDNC1532.jpg'),
(59, '1677146604', 'Golden Incense Nag Olibanum', 'src/assets/pictures/Encens-Golden-Nag-Olibanum---Oliban-Vijayshree-Golden-GOLNC1655.jpg'),
(60, '1677146637', 'Golden Incense Nag Reiki Energy', 'src/assets/pictures/Encens-Golden-Nag-Reiki-Energy-Vijayshree-Golden-GOLDN1716.jpg'),
(61, '1677146677', 'Goloka Aromatherapy Incense Cucumber', 'src/assets/pictures/Encens-goloka-aromatherapy-cucumber-boutique-esoterique-echoppe-gaia-big.jpg'),
(62, '1677146716', 'Goloka Aromatherapy Incense Nutmeg', 'src/assets/pictures/Encens-goloka-aromatherapy-nutmeg-noix-muscade-boutique-esoterique-echoppe-g.jpg'),
(63, '1677146763', 'Goloka Incense Organica Astagandha', 'src/assets/pictures/encens-goloka-astagandha-organica-boutique-esoterique-big.jpg'),
(64, '1677146790', 'Goloka Incense Organica Davanam', 'src/assets/pictures/encens-goloka-davanam-organica-boutique-esoterique-big.jpg'),
(65, '1677146816', 'Goloka Incense Organica Frangipani', 'src/assets/pictures/encens-goloka-frangipani-organica-boutique-esoterique-big.jpg'),
(66, '1677146844', 'Goloka Organica Kastoori', 'src/assets/pictures/encens-goloka-kastoori-organica-boutique-esoterique-big.jpg'),
(67, '1677146871', 'Goloka Nagchampa Agarbathi', 'src/assets/pictures/encens-goloka-nagchampa-boutique-esoterique-echoppedegaia-big.jpg'),
(68, '1677146906', 'Goloka Natural Dragon Blood', 'src/assets/pictures/encens-goloka-natural-dragon-blood-boutique-esoterique-echoppedegaia-big.jpg'),
(69, '1677146925', 'Goloka Natural Fresh Mint', 'src/assets/pictures/encens-goloka-natural-fresh-mint-menthe-fraiche-boutique-esoterique-echopped.jpg'),
(70, '1677146952', 'Goloka Natural Palo Santo', 'src/assets/pictures/encens-goloka-natural-palo-santo-boutique-esoterique-echoppedegaia-big.jpg'),
(71, '1677146993', 'Goloka Natural White Sage', 'src/assets/pictures/encens-goloka-natural-white-sage-boutique-esoterique-echoppedegaia-big.jpg'),
(72, '1677147059', 'Goloka Pure Aura', 'src/assets/pictures/encens-goloka-pure-aura-boutique-esoterique-big.jpg'),
(73, '1677147082', 'Goloka Pure Darshana', 'src/assets/pictures/encens-goloka-pure-darshana-boutique-esoterique-big.jpg'),
(74, '1677147115', 'Goloka Pure Happiness', 'src/assets/pictures/encens-goloka-pure-happiness-boutique-esoterique-big.jpg'),
(75, '1677147132', 'Goloka Pure Herbal', 'src/assets/pictures/encens-goloka-pure-herbal-boutique-esoterique-big.jpg'),
(76, '1677147148', 'Goloka Pure Life', 'src/assets/pictures/encens-goloka-pure-life-boutique-esoterique-big.jpg'),
(77, '1677147163', 'Goloka Pure Love', 'src/assets/pictures/encens-goloka-pure-love-boutique-esoterique-big.jpg'),
(78, '1677147192', 'Goloka Reiki Cho Ku Rei', 'src/assets/pictures/encens-goloka-reiki-cho-ku-rei-boutique-esoterique-echoppedegaia-big.jpg'),
(79, '1677147217', 'Goloka Reiki Dai Ko Myo', 'src/assets/pictures/encens-goloka-reiki-dai-ko-myo-boutique-esoterique-echoppedegaia-big.jpg'),
(80, '1677147269', 'Goloka Reiki Hon Sha Ze Sho Nen', 'src/assets/pictures/encens-goloka-reiki-hon-sha-ze-sho-nen-boutique-esoterique-echoppedegaia-big.jpg'),
(81, '1677147292', 'Goloka Reiki Raku', 'src/assets/pictures/encens-goloka-reiki-raku-boutique-esoterique-echoppedegaia-big.jpg'),
(82, '1677147318', 'Goloka Yoga Mantra Meditation', 'src/assets/pictures/encens-goloka-yoga-series-mantra-meditation-boutique-esoterique-echoppedegai.jpg'),
(83, '1677147352', 'Goloka Yoga Spiritual Energy', 'src/assets/pictures/encens-goloka-yoga-series-spiritual-energy-esoterique-echoppedegaia-big.jpg'),
(84, '1677147441', 'Green Tree Angel Love', 'src/assets/pictures/encens-green-tree-angel-love-echoppe-esoterique-big.jpg'),
(85, '1677147466', 'Green Tree Angel Protection', 'src/assets/pictures/encens-green-tree-angel-protection-echoppe-esoterique-big.jpg'),
(86, '1677147494', 'Green Tree Aqua Sagrados', 'src/assets/pictures/encens-green-tree-aqua-sagrados-echoppe-esoterique-big.jpg'),
(87, '1677147550', 'Green Tree Chakra Angel', 'src/assets/pictures/encens-green-tree-chakra-angel-echoppe-esoterique-big.jpg'),
(88, '1677147573', 'Green Tree Chakra Lotus', 'src/assets/pictures/encens-green-tree-chakra-lotus-echoppe-esoterique-big.jpg'),
(89, '1677147609', 'Green Tree Chi Force', 'src/assets/pictures/encens-green-tree-chi-force-echoppe-esoterique-big.jpg'),
(90, '1677147654', 'Green Tree Divine Eye', 'src/assets/pictures/encens-green-tree-divine-eye-echoppe-esoterique-big.jpg'),
(91, '1677147699', 'Green Tree Divine Lama', 'src/assets/pictures/encens-green-tree-divine-lama-echoppe-esoterique-big.jpg'),
(92, '1677147724', 'Green Tree Dream Spirit', 'src/assets/pictures/encens-green-tree-dream-spirit-boutique-esoterique-big.jpg'),
(93, '1677147756', 'Green Tree Flower of Life', 'src/assets/pictures/encens-green-tree-flower-of-life-echoppe-esoterique-big.jpg'),
(94, '1677147784', 'Green Tree Happy Yoga', 'src/assets/pictures/encens-green-tree-happy-yoga-boutique-esoterique-big.jpg'),
(95, '1677147811', 'Green Tree Kabbalah', 'src/assets/pictures/encens-green-tree-kabbalah-echoppe-esoterique-big.jpg'),
(96, '1677147841', 'Green Tree Kundalini', 'src/assets/pictures/encens-green-tree-kundalini-echoppe-esoterique-big.jpg'),
(97, '1677147866', 'Green Tree Sacred Purification', 'src/assets/pictures/encens-green-tree-sacred-purification-echoppe-esoterique-big.jpg'),
(98, '1677147929', 'Green Tree Spiritual Yoga', 'src/assets/pictures/encens-green-tree-spiritual-yoga-echoppe-esoterique-big.jpg'),
(99, '1677147962', 'Green Tree Surya Namaskar', 'src/assets/pictures/encens-green-tree-surya-namaskar-echoppe-esoterique-big.jpg'),
(100, '1677147987', 'Green Tree Tibetan Flowers', 'src/assets/pictures/encens-green-tree-tibetan-flowers-echoppe-esoterique-big.jpg'),
(101, '1677148021', 'Green Tree White Magic', 'src/assets/pictures/encens-green-tree-white-magic-echoppe-esoterique-big.jpg'),
(102, '1677148051', 'Green Tree Yoga Tree', 'src/assets/pictures/encens-green-tree-yoga-tree-echoppe-esoterique-big.jpg'),
(103, '1677148086', 'Green Tree Hand of Fatima', 'src/assets/pictures/encens-hand-of-fatima-green-tree-echoppe-esoterique-big.jpg'),
(104, '1677148110', 'Green Tree Mantra', 'src/assets/pictures/encens-mantra-green-tree-echoppe-esoterique-big.jpg'),
(105, '1677148136', 'Green Tree Mayan Prophecies', 'src/assets/pictures/encens-mayan-prophecies-green-tree-echoppe-esoterique-big.jpg'),
(106, '1677148157', 'Green Tree Palo Santo', 'src/assets/pictures/encens-palo-santo-green-tree-echoppe-esoterique-big.jpg'),
(107, '1677148192', 'Green Tree Reiki Energy', 'src/assets/pictures/encens-reiki-energy-green-tree-echoppe-esoterique-big.jpg'),
(108, '1677148232', 'Green Tree White Sage', 'src/assets/pictures/encens-sauge-blanche-white-sage-green-tree-echoppe-esoterique-big.jpg'),
(109, '1677148303', 'Green Tree Shambala Path', 'src/assets/pictures/encens-shambhala-path-green-tree-echoppe-esoterique-big.jpg'),
(110, '1677148355', 'Golden Incense Hit', 'src/assets/pictures/golden-hit-encens-vijayshree-golden-unite-boutique-esoterique-echoppedegaia-.jpg'),
(111, '1677148382', 'Golden Nag Champa', 'src/assets/pictures/golden-nag-champa-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(112, '1677148406', 'Golden Nag Chandan', 'src/assets/pictures/golden-nag-chandan-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(113, '1677148469', 'Golden Nag Forest', 'src/assets/pictures/golden-nag-forest-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(114, '1677148498', 'Golden Nag Himaalaya', 'src/assets/pictures/golden-nag-himaalaya-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(115, '1677149295', 'Golden Nag Mantra', 'src/assets/pictures/golden-nag-mantra-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(116, '1677149326', 'Golden Nag Meditation', 'src/assets/pictures/golden-nag-meditation-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(117, '1677149350', 'Golden Nag Palo Santo', 'src/assets/pictures/golden-nag-palo-santo-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(118, '1677149370', 'Golden Nag Patchouli', 'src/assets/pictures/golden-nag-patchouli-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(119, '1677149398', 'Golden Nag Seven Chakra', 'src/assets/pictures/golden-nag-seven-chakra-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(120, '1677149418', 'Golden Nag Temple', 'src/assets/pictures/golden-nag-temple-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(121, '1677149440', 'Golden Nag White Sage', 'src/assets/pictures/golden-nag-white-sage-encens-unite-boutique-esoterique-echoppedegaia-big.jpg'),
(122, '1677149499', 'Golden Nag Vanilla', 'src/assets/pictures/golden-vanilla-encens-vijayshree-golden-unite-boutique-esoterique-echoppedeg.jpg'),
(123, '1677149538', 'Green Tree Collection Purification', 'src/assets/pictures/green-tree-encens-collection-purification-recto-echoppe-de-gaia-big.jpg'),
(124, '1677149586', 'Green Tree Collection Yoga', 'src/assets/pictures/green-tree-encens-collection-yoga-recto-echoppe-de-gaia-big.jpg'),
(125, '1677149625', 'Hem Seven African Powers', 'src/assets/pictures/hem-encens-7-pouvoirs-africains-echoppedegaia-big.jpg'),
(126, '1677149644', 'Hem Seven Powers', 'src/assets/pictures/hem-encens-7-powers-7-pouvoirs-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(127, '1677149661', 'Hem Aloe Vera', 'src/assets/pictures/hem-encens-aloe-echoppedegaia-big.jpg'),
(128, '1677149685', 'Hem Amber SandalWood', 'src/assets/pictures/hem-encens-ambre-santal-echoppedegaia-big.jpg'),
(129, '1677149842', 'Hem Angel De Mi Guarda', 'src/assets/pictures/Hem-encens-angel-de-mi-guarda-big.jpg'),
(130, '1677149856', 'Hem Benzoin', 'src/assets/pictures/hem-encens-bejoin-benzoin-echoppedegaia-big.jpg'),
(131, '1677149875', 'Hem Siam Benzoin', 'src/assets/pictures/hem-encens-benjoin-de-siam-echoppedegaia-boutique-esoterique-big.jpg'),
(132, '1677149891', 'Hem Black Magic', 'src/assets/pictures/hem-encens-black-magic-magie-noire-echoppedegaia-big.jpg'),
(133, '1677149911', 'Hem Black Opium', 'src/assets/pictures/hem-encens-black-opium-boutique-esoterique-echoppedegaia-big.jpg'),
(134, '1677149929', 'Hem Buddha', 'src/assets/pictures/hem-encens-buddha-echoppedegaia-big.jpg'),
(135, '1677158691', 'Holy Wood - Palo Santo', 'src/assets/pictures/Bois-sacre-palo-santo-cones-echoppedegaia-boutique-esoterique-big.jpg'),
(137, '1677158975', 'Golden Nag Champa Cones', 'src/assets/pictures/encens-cone-golden-nag-champa-echoppedegaia-big.jpg'),
(138, '1677159072', 'Golden Nag Chandan Cones', 'src/assets/pictures/encens-cone-golden-nag-chandan-echoppedegaia-big.jpg'),
(139, '1677159104', 'Golden Nag Darshan Cones', 'src/assets/pictures/encens-cone-golden-nag-darshan-echoppedegaia-big.jpg'),
(140, '1677159123', 'Golden Nag Forest Cones', 'src/assets/pictures/encens-cone-golden-nag-forest-echoppedegaia-big.jpg'),
(141, '1677159158', 'Golden Nag Himaalaya Cones ', 'src/assets/pictures/encens-cone-golden-nag-himaalaya-echoppedegaia-big.jpg'),
(142, '1677159184', 'Golden Nag Mantra Cones', 'src/assets/pictures/encens-cone-golden-nag-mantra-echoppedegaia-big.jpg'),
(143, '1677159210', 'Golden Nag Temple Cones', 'src/assets/pictures/encens-cone-golden-nag-temple-echoppedegaia-big.jpg'),
(144, '1677159232', 'Golden Nag Vanilla Cones', 'src/assets/pictures/encens-cone-golden-nag-vanilla-echoppedegaia-big.jpg'),
(145, '1677159300', 'Golden Nag White Sage Cones', 'src/assets/pictures/encens-cone-golden-nag-white-sage-echoppedegaia-big.jpg'),
(146, '1677159341', 'Satya Dhoop Cones Rose', 'src/assets/pictures/Encens-cone-rose-shrinivas-sugandhalaya-satya-boutique-esoterique-echoppe-ga.jpg'),
(147, '1677159371', 'Satya Dhoop Cones Super Hit', 'src/assets/pictures/Encens-cone-super-hit-shrinivas-sugandhalaya-satya-boutique-esoterique-echop.jpg'),
(148, '1677159451', 'Green Tree 7 Chakras Cones', 'src/assets/pictures/encens-green-tree-7-chakras-cones-echoppedegaia-big.jpg'),
(149, '1677159480', 'Green Tree Dream Spirit Cones', 'src/assets/pictures/encens-green-tree-cones-dream-spirit-echoppe-esoterique-big.jpg'),
(150, '1677159520', 'Green Tree Buddhist Tantra Cones', 'src/assets/pictures/encens-green-tree-cones-tantra-echoppe-esoterique-big.jpg'),
(151, '1677159916', 'Green Tree White Sage Cones', 'src/assets/pictures/encens-green-tree-white-sage-cones-echoppedegaia-big.jpg'),
(152, '1677159998', 'Satya Nag Champa Dhoop Cones', 'src/assets/pictures/encens-nag-champa-dhoop-cones-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(153, '1677160048', 'Saty Dhoop Cones Lemongrass', 'src/assets/pictures/encens-satya-cone-citronnelle-big.jpg'),
(154, '1677160074', 'Satya Dhoop Cones Sandalwood', 'src/assets/pictures/encens-satya-cone-sandal-echoppedegaia-big.jpg'),
(155, '1677160106', 'Satya Dhoop Cones Dragon\'s Blood', 'src/assets/pictures/Encens-Satya-Dhoop-Cones---Dragon-s-Blood-Satya-Shrinivas-Sugandhalay.jpg'),
(156, '1677160134', 'Satya Dhoop Cones Palo Santo', 'src/assets/pictures/Encens-Satya-Dhoop-Cones---Palo-Santo-Satya-Shrinivas-Sugandhalaya-SA.jpg'),
(157, '1677160155', 'Satya Dhoop Cones White Sage', 'src/assets/pictures/Encens-Satya-Dhoop-Cones---White-Sage-Satya-Shrinivas-Sugandhalaya-SA.jpg'),
(158, '1677160188', 'Golden Nag Meditation Cones', 'src/assets/pictures/golden-nag-meditation-encens-cones-boutique-esoterique-echoppedegaia-big.jpg'),
(159, '1677160216', 'Golden Nag Palo Santo Cones', 'src/assets/pictures/golden-nag-palo-santo-encens-cones-boutique-esoterique-echoppedegaia-big.jpg'),
(160, '1677160255', 'Goloka Backflow Cones Buddha', 'src/assets/pictures/goloka-backflow-budhha-echoppe-de-gaia-big.jpg'),
(161, '1677160471', 'Goloka Backflow Cones Chakras', 'src/assets/pictures/goloka-backflow-chakra-echoppe-de-gaia-big.jpg'),
(162, '1677160711', 'Goloka Backflow Cones Nag Champa', 'src/assets/pictures/goloka-backflow-champa-echoppe-de-gaia-big.jpg'),
(163, '1677160746', 'Goloka Backflow Cones Dragon Blood', 'src/assets/pictures/goloka-backflow-dragon-blood-echoppe-de-gaia-big.jpg'),
(164, '1677160789', 'Goloka Backflow Cones Nature\'s Lavander', 'src/assets/pictures/goloka-backflow-lavande-echoppe-de-gaia-big.jpg'),
(165, '1677160821', 'Goloka Backflow Cones Nature\'s Jasmine', 'src/assets/pictures/goloka-backflow-nature-s-jasmine-echoppe-de-gaia-big.jpg'),
(166, '1677160853', 'Goloka Backflow Cones Nature\'s Nest', 'src/assets/pictures/goloka-backflow-nature-s-nest-echoppe-de-gaia-big.jpg'),
(167, '1677160882', 'Goloka Backflow Cones Rose', 'src/assets/pictures/goloka-backflow-nature-s-rose-echoppe-de-gaia-big.jpg'),
(168, '1677160906', 'Goloka Backflow Cones Palo Santo', 'src/assets/pictures/goloka-backflow-palo-santo-echoppe-de-gaia-big.jpg'),
(169, '1677160929', 'Goloka Backflow Cones Sandalwood', 'src/assets/pictures/goloka-backflow-sandalwood-echoppe-de-gaia-big.jpg'),
(170, '1677160949', 'Goloka Backflow Cones White Sage', 'src/assets/pictures/goloka-backflow-sauge-blanche-echoppe-de-gaia-big.jpg'),
(171, '1677752081', 'Sandalwood Red', 'src/assets/pictures/bois-de-santal-rouge-plante-esoterique-magique-boutique-esoterique-big.jpg'),
(172, '1677752115', 'Palo santo chips', 'src/assets/pictures/Bois-sacre-palo-santo-copeaux-echoppedegaia-boutique-esoterique-big.jpg'),
(173, '1677752141', 'Palo Santo Powder', 'src/assets/pictures/Bois-sacre-palo-santo-poudre-echoppedegaia-boutique-esoterique-big.jpg'),
(174, '1677752166', 'Cap Aloe Powder', 'src/assets/pictures/Encens---Aloes-Du-Cap-en-Poudre---Sachet-de-100g-Clea-Holistic-Pro-DG.jpg'),
(175, '1677752191', 'Amber Resin', 'src/assets/pictures/encens-ambre-morceau-echoppe-de-gaia-big.jpg'),
(176, '1677752219', 'Astrological Incense - Libra', 'src/assets/pictures/Encens-Astrologique-Balance---Creation-Originale-Clea-Holistic-Pro-CL.jpg'),
(177, '1677752236', 'Astrological Incense - Aries', 'src/assets/pictures/Encens-Astrologique-Belier---Creation-Originale-Clea-Holistic-Pro-CLE.jpg'),
(178, '1677752254', 'Astrological Incense - Cancer', 'src/assets/pictures/Encens-Astrologique-Cancer---Creation-Originale-Clea-Holistic-Pro-CLE.jpg'),
(179, '1677752278', 'Astrological Incense - Capricorn', 'src/assets/pictures/Encens-Astrologique-Capricorne---Creation-Originale-Clea-Holistic-Pro.jpg'),
(180, '1677752452', 'Astrological Incense - Gemini', 'src/assets/pictures/Encens-Astrologique-Gemeaux---Creation-Originale-Clea-Holistic-Pro-CL.jpg'),
(181, '1677752472', 'Astrological Incense - Leo', 'src/assets/pictures/Encens-Astrologique-Lion---Creation-Originale-Clea-Holistic-Pro-CLEA06.jpg'),
(182, '1677752490', 'Astrological Incense - Pisces', 'src/assets/pictures/Encens-Astrologique-Poisseau---Creation-Originale-Clea-Holistic-Pro-C.jpg'),
(183, '1677752514', 'Astrological Incense - Sagittarius', 'src/assets/pictures/Encens-Astrologique-Sagittaire---Creation-Originale-Clea-Holistic-Pro.jpg'),
(184, '1677752536', 'Astrological Incense - Scorpio', 'src/assets/pictures/Encens-Astrologique-Scorpion---Creation-Originale-Clea-Holistic-Pro-C.jpg'),
(185, '1677752552', 'Astrological Incense - Taurus', 'src/assets/pictures/Encens-Astrologique-Taureau---Creation-Originale-Clea-Holistic-Pro-CL.jpg'),
(186, '1677752573', 'Astrological Incense - Aquarius', 'src/assets/pictures/Encens-Astrologique-Verseau---Creation-Originale-Clea-Holistic-Pro-CL.jpg'),
(187, '1677752590', 'Astrological Incense - Virgo', 'src/assets/pictures/Encens-Astrologique-Vierge---Creation-Originale-Clea-Holistic-Pro-CLE.jpg'),
(188, '1677752661', 'Abbé Julio', 'src/assets/pictures/encens-en-grain-abbe-julio-echoppedegaia-big.jpg'),
(189, '1677752711', 'Baltic Yellow Amber', 'src/assets/pictures/encens-en-grain-ambre-resine-echoppe-de-gaia-big.jpg'),
(190, '1677752731', 'White Benzoin', 'src/assets/pictures/encens-en-grain-benjoin-blanc-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(191, '1677752867', 'Siam Benzoin', 'src/assets/pictures/encens-en-grain-benjoin-siam-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(192, '1677752901', 'Cathedrales', 'src/assets/pictures/encens-en-grain-cathedrales-encens-esoterique-echoppe-de-gaia-big.jpg'),
(193, '1677752926', 'Jasmine', 'src/assets/pictures/encens-en-grain-jasmin-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(194, '1677752949', 'Pink Nazareth', 'src/assets/pictures/encens-en-grain-nazareth-rose-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(195, '1677753052', 'Citrus', 'src/assets/pictures/Encens-en-grains-agrumes-boutique-esoterique-echoppe-gaia-big.png'),
(196, '1677753084', 'Silver', 'src/assets/pictures/Encens-en-grains-argent-boutique-esoterique-echoppe-gaia-big.jpg'),
(197, '1677753106', 'Asa Foetida', 'src/assets/pictures/encens-en-grains-asa-foetida-boutique-esoterique-echoppe-de-gaia-big.jpg'),
(198, '1677753125', 'Basilica', 'src/assets/pictures/encens-en-grains-basilica-boutique-esoterique-echoppe-de-gaia-big.jpg'),
(199, '1677753232', 'Dragon Fly Benzoin ', 'src/assets/pictures/Encens-en-grains-benjoin-boutique-esoterique-echoppe-gaia-big.jpg'),
(200, '1677753256', 'Sumatra Benzoin', 'src/assets/pictures/encens-en-grains-benjoin-de-sumatra-echoppedegaia-big.jpg'),
(201, '1677753275', 'Bergamot', 'src/assets/pictures/encens-en-grains-bergamote-echoppe-de-gaia-big.jpg'),
(202, '1677753291', 'Bethleem', 'src/assets/pictures/encens-en-grains-bethleem-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(203, '1677753314', 'Campher', 'src/assets/pictures/Encens-en-grains-camphre-boutique-esoterique-echoppe-gaia-big.jpg'),
(204, '1677753330', 'Cinnamon', 'src/assets/pictures/Encens-en-grains---Cannelle---Songe--Joie--Prosperite---Sachet-de-100.jpg'),
(205, '1677753356', 'Copal', 'src/assets/pictures/Encens-en-grains-copal-boutique-esoterique-echoppe-gaia-big.jpg'),
(206, '1677753381', 'Miracles Notre-Dame', 'src/assets/pictures/encens-en-grains-dame-des-miracles-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(207, '1677753422', 'Dammar', 'src/assets/pictures/encens-en-grains-dammar-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(208, '1677753442', 'Black Djaoui', 'src/assets/pictures/encens-en-grains-djaoui-noir-echoppe-de-gaia-big.jpg'),
(209, '1677753460', 'Arabic Gum', 'src/assets/pictures/Encens-en-grains-gomme-arabique-boutique-esoterique-echoppe-gaia-big.jpg'),
(210, '1677753505', 'Elemi ', 'src/assets/pictures/encens-en-grains-gomme-elemi-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(211, '1677753533', 'Jerusalem', 'src/assets/pictures/encens-en-grains-jerusalem-echoppe-de-gaia-boutique-esoterique-big.jpg'),
(212, '1677753559', 'Jesus', 'src/assets/pictures/Encens-en-grains-jesus-boutique-esoterique-echoppe-gaia-big.jpg'),
(213, '1677753584', 'Somalia\'s Tears', 'src/assets/pictures/encens-en-grains-larmes-de-somalie-echoppedegaia-big.jpg'),
(214, '1677753603', 'Lavander', 'src/assets/pictures/encens-en-grains-lavande-boutique-esoterique-echoppe-de-gaia-big.jpg'),
(215, '1677753628', 'Undo the knots Mary', 'src/assets/pictures/Encens-en-grains-marie-defait-noeuds-boutique-esoterique-echoppe-gaia-big.jpg'),
(216, '1677753646', 'Mastic', 'src/assets/pictures/Encens-en-grains---Mastic---Sachet-de-50g-Clea-Holistic-Pro-ENGRMAST50.jpg'),
(217, '1677753662', 'Red Myrrh', 'src/assets/pictures/Encens-en-grains-myrrhe-rouge-boutique-esoterique-echoppe-gaia-big.jpg'),
(218, '1677753683', 'Nazareth', 'src/assets/pictures/Encens-en-grains-nazareth-boutique-esoterique-echoppe-gaia-big.jpg'),
(219, '1677753700', 'Green Nazareth', 'src/assets/pictures/encens-en-grains-nazareth-vert-encens-boutique-esoterique-echoppe-de-gaia-bi.jpg'),
(220, '1677753720', 'Victory Notre-Dame', 'src/assets/pictures/encens-en-grains-notre-dame-des-victoires-echoppe-de-gaia-boutique-esoteriqu.jpg'),
(221, '1677753740', 'Fatima Notre-Dame', 'src/assets/pictures/encens-en-grains-notre-dame-fatima-echoppedegaia-big.jpg'),
(222, '1677753763', 'Holy Mary', 'src/assets/pictures/encens-en-grains-vierge-marie-encens-boutique-esoterique-echoppe-de-gaia-big.jpg'),
(223, '1677753777', 'Moreneta', 'src/assets/pictures/encens-en-grain-vierge-noire-encens-esoterique-echoppe-de-gaia-big.jpg'),
(224, '1677753796', 'Manna', 'src/assets/pictures/encens-grains-manne-encens-manne-boutique-esoterique-echoppe-de-gaia-big.jpg'),
(225, '1677764016', '3 Goddesses', 'src/assets/pictures/baton-purificateur-3-deesses-echoppedegaia-boutique-esoterique-big.jpg'),
(226, '1677764026', '3 Kings', 'src/assets/pictures/baton-purificateur-3-rois-echoppedegaia-boutique-esoterique-big.jpg'),
(227, '1677764037', '4 Directions', 'src/assets/pictures/baton-purificateur-4-directions-echoppedegaia-boutique-esoterique-big.jpg'),
(228, '1677764051', 'White Sage', 'src/assets/pictures/baton-purificateur-sauge-blanche-salvia-apiana-echoppe-esoterique-big.jpg'),
(229, '1677764067', 'Sage & Cedar', 'src/assets/pictures/baton-purificateur-sauge-et-cedre-echoppedegaia-boutique-esoterique-big.jpg'),
(230, '1677764080', 'Sage & Juniper', 'src/assets/pictures/baton-purificateur-sauge-et-genevrier-echoppedegaia-boutique-esoterique-big.jpg'),
(231, '1677764097', 'Sage & Palo Santo', 'src/assets/pictures/baton-purificateur-sauge-et-palo-santo-echoppedegaia-boutique-esoterique-big.jpg'),
(232, '1677764106', 'Visions', 'src/assets/pictures/baton-purificateur-vision-echoppedegaia-boutique-esoterique-big.jpg'),
(233, '1677764130', 'Cedar - 3 Sticks', 'src/assets/pictures/baton-purification-cedre-smudge-cedar-echoppe-de-gaia-2-big.jpg'),
(234, '1677764180', 'Mugwort', 'src/assets/pictures/baton-sauge-armoise-mini-echoppe-de-gaia-big.jpg'),
(235, '1677764195', 'Sage & Dragon\'s Blood', 'src/assets/pictures/baton-sauge-sang-dragon-mini-echoppe-de-gaia-big.jpg'),
(236, '1677764211', 'Yerba santa', 'src/assets/pictures/baton-smudge-yerba-santa-echoppe-de-gaia-boutique-esoterique-big.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` int(11) NOT NULL,
  `name_products` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `date_ajout` date DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `id_sub_categories` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sub_categories` (`id_sub_categories`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `identifier`, `name_products`, `description`, `price`, `date_ajout`, `is_enabled`, `id_sub_categories`) VALUES
(19, 1677059958, 'Ayurvedic Incense - Agarwood', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - AgarWood has a powerful sent, Woody and Musky. It apease insomnia and is often used for love and spirituality.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !\r\n', '1.50', '2023-03-07', 1, 2),
(20, 1677061065, 'Ayurvedic Incense - Amber', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Amber is deliciously aromatic, thrilling your senses with his beautifully rich perfume.From his divine Perfume, it is considered \r\na Temple powder also called \"Gods Nectar\".\r\nSpiritualy, Amber is used for meditation, healing properties, purification, luck, love, emotionnal and spiritual balance and also as an aphrodisiac.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(21, 1677062047, 'Ayurvedic Incense - Basil', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nGive yourself up to the penetrating and spicy aroma of Basil Ayurvedic Incense. Apeasinf effects of this well known scent will help you meditate, relax and sleep well.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(22, 1677063109, 'Ayurvedic Incense - Chakra', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nChakras are considered as the center of Vital Forces. Ayurvedic Incense - Chakra are deeply connected to the 7 Chakras and his soft perfumes creates harmony and balance between your spirit, your body and your soul.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(23, 1677063399, 'Ayurvedic Incense - Chandan', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Chandan gives a feeling of peace and calm. The scent is a mix of SandalWood, Benzoin and other spices, to fill your space with an \r\napeasing and ancored fragrance that will bring a perfect sens of meditation.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(24, 1677063699, 'Ayurvedic Incense - Cinnamon', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nBring a spiritual atmosphere and enhance divination. It bring warmth to love, remove negative vibrations and lead to success.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(25, 1677064275, 'Ayurvedic Incense - Dragon Blood', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Dragon Blood unveil a soft and woody perfume, it\'s made for a similar named tree. It\'s  used to enhance the power of love spells, protection spells, banishing spells and sexual spells.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(26, 1677069787, 'Ayurvedic Incense - Jasmine', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nSweet Jasmine scent is a classic, it will embelish your mood and your space with a soft aroma.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(27, 1677069921, 'Ayurvedic Incense - Kasturi', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Katsuri, handmade in India, offers a variety of scents to enhance your mood and space.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(28, 1677069995, 'Ayurvedic Incense - Lavander', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nLavender incense is a must have to relax and apease your spirit and mind.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(29, 1677070099, 'Ayurvedic Incense - Méditation', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAromatic Incense for meditation and yoga, made with plant based substance. \r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(30, 1677070156, 'Ayurvedic Incense - Nag Champa', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(31, 1677070205, 'Ayurvedic Incense - Nature Fresh', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(32, 1677070359, 'Ayurvedic Incense - Opium', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Opium brings an heavy floral scent with soft notes of black musk and spices. Opium is well known to induce sleeps, dreams and visions.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(33, 1677070746, 'Ayurvedic Incense - Oudh', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nPerfect for meditation, prayer, relaxation or yoga training, because it give a feeling of peace, brings a no-stress effect and allows spirit elevation.\r\nOudh wood is also known for his aphrodisiac vertue.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(34, 1677070875, 'Ayurvedic Incense - Palo Santo', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nPalo Santo is often used to favorise the body energetic flux flow, to fight against bad energies,to purify atmosphere and meditation.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(35, 1677071105, 'Ayurvedic Incense - Patchouli', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Patchouli with his woody, warm, dark and deep notes, often brings a determination, sensuality and energy feeling. Patchouli removes our fear, regulate emotions and allows to move on our path with pride.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(36, 1677071218, 'Ayurvedic Incense - Relaxation', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nRelaxation incense sticks can be used to create a perfect mood for yoga or meditation. The light scent revigorate mind and body and relax the muscles.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(37, 1677071524, 'Ayurvedic Incense - Rose', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAurvedic Incense - Rose has a soft and trusting scent bringing a deeper element to our emotions. The scent of rose enhance love, compassion and devotion\r\nqnd gives a safety feeling and spiritual harmony. It favorise sleep, reduce anger, has a light anti-depressant effect, calm conflicts and induce a peace, happiness and trust feeling.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(38, 1677071700, 'Ayurvedic Incense - Saffron', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nBurning an Ayurvedic Incense with a powerful and sensual scent like safran fill the space with a healing prayer. This cans help dissipating all negative energies and can help you establish a positive space for meditation.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(39, 1677071834, 'Ayurvedic Incense - Stress Relief', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Stress Relief is the perfect way to recenter yourself, no matter if you are feeling exhausted or just needs time for yourself.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(40, 1677071976, 'Ayurvedic Incense - Vanilla', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Vanilla gives you the fresh and apeasing vanilla scent that will elevate you beyond your dreams. It caress your mind and your soul with his vanilla flavor all day. It touches your senses and creates a dream.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(41, 1677072247, 'Ayurvedic Incense - White Sage', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - White Sage combustion fill the space with a divine healing aroma, specifically healing your energetic field. This can help to remove every negative energy and can help you build a positive space for meditation and rituals.\r\nBy Sage healing nature properties , it\'s good to use it when you are feeling stressed and can enhance your energy level everytime you feel exhausted.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(42, 1677072368, 'Ayurvedic Incense - Yoga', 'This 100% superior quality natural incense, is created following a unique Masala Method. Mixed between rare Herbs, Flowers, Honey, Resin and Oils,\r\nour incense is Handmade in the traditional Indian Way. Without charcoal, it doesn\'t contain any chemical substance.\r\n\r\nAyurvedic Incense - Yoga give you the refreshing and apeasing scent of Yoga, brings you beyong the realms of dreams. Connect to your trueself, and heal from the inside by practicing yoga and meditation.\r\n\r\nDetails : \r\n- Not Edible\r\n- Keep it from children and pets\r\n- 15g Boxes, 13 to 15 sticks per articles.\r\n- Burn your incense in a holder made for it and keep it under suveillance.\r\n\r\nLet yourself bath into the magical and apeasing sents and just Let it Go !', '1.50', '2023-03-07', 1, 2),
(43, 1677072628, 'Golden Incense - Hit', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(44, 1677072901, 'Golden Incense - Nag Breuzinho', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nThese Golden Incense are the most popular in the world because of their captivating and fascinating aromas. Full of healing ingredients.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(45, 1677072943, 'Golden Incense - Nag Buddha', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(46, 1677073160, 'Golden Incense - Nag Champa', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense - Nag Champa are filled with Plumeria Extract, also known as Frangipani. They\'re made from semi-liquid resin from the tree \"Alianthus Malabarica\", giving a creamy texture and color. Also called Happiness Incense.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(47, 1677073404, 'Golden Incense - Nag Chandan', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense - Nag Chandan are mostly made of SandalWood oils that is very expensive as a pure ingredient. This incense is popular from his very known scent and fit to every occasions. \r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(48, 1677073463, 'Golden Incense - Nag Cinnamon', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(49, 1677073512, 'Golden Incense -  Nag Darshan', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(50, 1677073594, 'Golden Incense - Nag Forest', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(51, 1677073628, 'Golden Incense -  Nag Himaalaya', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(52, 1677073660, 'Golden Incense - Nag Lavender', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(53, 1677073692, 'Golden Incense - Nag Mantra', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(54, 1677073868, 'Golden Incense - Nag Meditation', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(55, 1677073900, 'Golden Incense - Nag Olibanum', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(56, 1677073931, 'Golden Incense - Nag Palo Santo', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(57, 1677073961, 'Golden Incense - Nag Patchouli', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(58, 1677073994, 'Golden Incense - Nag Reiki Energy', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(59, 1677074024, 'Golden Incense - Nag Seven Chakra', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(60, 1677074054, 'Golden Incense - Nag Temple', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(61, 1677074087, 'Golden Incense - Nag Vanilla', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(62, 1677074118, 'Golden Incense - Nag White Sage', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n15 sticks boxes(15g)', '1.50', '2023-03-07', 1, 2),
(63, 1677074416, 'Goloka Incense - Aromatherapy - Cucumber', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(64, 1677075914, 'Goloka Incense - Aromatherapy - Nutmeg', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(65, 1677076002, 'Goloka Incense - Nagchampa Agarbathi', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(66, 1677076061, 'Goloka Incense - Natural - Dragon Blood', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(67, 1677076092, 'Goloka Incense - Natural - Fresh Mint', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(68, 1677076212, 'Goloka Incense - Natural - Palo Santo', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(69, 1677076244, 'Goloka Incense - Natural - White Sage', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(70, 1677076272, 'Goloka Incense - Organica - Astagandha', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(71, 1677076302, 'Goloka Incense - Organica - Davanam', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(72, 1677076337, 'Goloka Incense - Organica - Frangipani', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(73, 1677076367, 'Goloka Incense - Organica - Kastoori', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.60', '2023-03-07', 1, 2),
(74, 1677076400, 'Goloka Incense - Pure Aura', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.95', '2023-03-07', 1, 2),
(75, 1677076447, 'Goloka  Incense - Pure Darshana', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(76, 1677076482, 'Goloka Incense - Pure Happiness', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(77, 1677076525, 'Goloka Incense - Pure Herbal', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(78, 1677076560, 'Goloka Incense - Pure Life', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(79, 1677076591, 'Goloka Incense - Pure Love', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.95', '2023-03-07', 1, 2),
(80, 1677076621, 'Goloka Incense - Reiki Série - Cho Ku Rei', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(81, 1677076649, 'Goloka Incense - Reiki Série - Dai Ko Myo', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(82, 1677076681, 'Goloka Incense - Reiki Série - Hon Sha Ze Sho Nen', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(83, 1677076715, 'Goloka Incense - Reiki Série - Raku', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.96', '2023-03-07', 1, 2),
(84, 1677076748, 'Goloka Incense - Yoga Series - Mantra Meditation', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.50', '2023-03-07', 1, 2),
(85, 1677076775, 'Goloka Incense - Yoga Series - Spiritual Energy', 'These Incense are 100% Natural and are made following the Masala Method. This method consist in making incense without using any charcoal, with a mixing of Ghee(shea butter), Herbs, Wood Powder(Neem); Plant Based resin, Honey and Natural Oils.\r\n\r\nHandMade, in pure Indian Tradition.\r\n\r\nGoloka Incense :\r\n- Handmade, better quality.\r\n- 15 to 20 stick per box(15g)', '1.50', '2023-03-07', 1, 2),
(86, 1677076928, 'Green Tree Incense - 7 Angels', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(87, 1677076968, 'Green Tree  Incense - 7 Chakras', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(88, 1677076992, 'Green Tree Incense - Angel Dust', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(89, 1677077017, 'Green Tree Incense - Angel Healing', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(90, 1677077050, 'Green Tree Incense - Angel Love', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(91, 1677077076, 'Green Tree Incense - Angel Protection', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(92, 1677077103, 'Green Tree Incense - Aqua Sagrados', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(93, 1677077129, 'Green Tree Incense - Chakra Angel', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(94, 1677077153, 'Green Tree Incense - Chakra Lotus', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(95, 1677077177, 'Green Tree Incense - Chi Force', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '1.80', '2023-03-07', 1, 2),
(96, 1677077342, 'Green Tree Incense - Collection Purification', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\nFind in this Gift Box :\r\n- 1 White Sage Box\r\n- 1 Palo Santo Box\r\n- 1 Call of the Shaman Box\r\n- 1 Sacred Purification Box\r\n- 1 Aqua Sagrados Box\r\n- 1 Reiki Energy Box\r\n\r\n6 boxes of 12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '10.20', '2023-03-07', 1, 2),
(97, 1677077438, 'Green Tree Incense - Collection Yoga', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\nFind in this Gift Box :\r\n- 1 Happy Yoga Box\r\n- 1 Spiritual Yoga Box\r\n- 1 Chakra Lotus Box\r\n- 1 Surya Namaskar Box\r\n- 1 7 Chakras Box\r\n- 1 Yoga Tree Box\r\n\r\n6 boxes of 12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tea Incense.', '10.20', '2023-03-07', 1, 2),
(98, 1677077525, 'Green Tree  Incense - Divine Eye', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(99, 1677077556, 'Green Tree Incense - Divine Lama', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(100, 1677077583, 'Green Tree Incense - Dragon\'s Blood', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(101, 1677077608, 'Green Tree Incense - Dream Spirit', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(102, 1677077637, 'Green Tree Incense - Flower of Life', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(103, 1677077683, 'Green Tree Incense - Hand Of Fatima', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(104, 1677077710, 'Green Tree Incense - Happy Yoga', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(105, 1677077740, 'Green Tree Incense - Kabbalah', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(106, 1677077774, 'Green Tree Incense - Kundalini', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(107, 1677077800, 'Green Tree Incense - Kundalini', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(108, 1677077825, 'Green Tree Incense - Mantra', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(109, 1677077857, 'Green Tree Incense - Mayan Prophecies', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(110, 1677077898, 'Green Tree Incense - Palo Santo', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(111, 1677077927, 'Green Tree Incense - Reiki Energy', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(112, 1677077962, 'Green Tree Incense - Sacred Purification', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(113, 1677077987, 'Green Tree Incense - Shambhala Path', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(114, 1677078013, 'Green Tree Incense - Spiritual Yoga', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(115, 1677078045, 'Green Tree Incense - Surya Namaskar', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(116, 1677078079, 'Green Tree Incense - Tibetan Flowers', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(117, 1677078110, 'Green Tree Incense - Vajrayana Buddhist Tantra', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(118, 1677078136, 'Green Tree Incense - White Magic', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(119, 1677078163, 'Green Tree Incense - White Sage ', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(120, 1677078202, 'Green Tree Incense - Yoga Tree', 'Quality Incense, made from Natural Oils.\r\nTraditionnaly HandMade.\r\nNo Animal Testing.\r\n\r\n12 to 15 sticks per box (15g), Recycling Wrapping.\r\n\r\nGreen Tree Incense.', '1.80', '2023-03-07', 1, 2),
(121, 1677078418, 'Hem Incense - 7 Powers', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.40', '2023-03-07', 1, 2),
(122, 1677078458, 'Hem Incense - 7 African Powers', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(123, 1677078500, 'Hem Incense - Aloe vera', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.40', '2023-03-07', 1, 2),
(124, 1677078549, 'Hem Incense - Sandalwood & Amber', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(125, 1677078584, 'Hem Incense - Angel De Mi Guarda', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.50', '2023-03-07', 1, 2),
(126, 1677078620, 'Hem Incense - Benzoin', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(127, 1677078656, 'Hem Incense - Siam Benzoin', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(128, 1677078684, 'Hem Incense - Black Magic', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(129, 1677078715, 'Hem Incense - Black Opium', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2);
INSERT INTO `products` (`id`, `identifier`, `name_products`, `description`, `price`, `date_ajout`, `is_enabled`, `id_sub_categories`) VALUES
(130, 1677078744, 'Hem Incense - Buddha', 'Indian Hem Incense 95% natural.\r\n\r\nHandmade, in pure traditional Indian way, from floral resin and natural oils, rolled on a bamboo stick.\r\n\r\n20 sticks per Box.', '1.30', '2023-03-07', 1, 2),
(131, 1677151483, 'Holy Wood Incense - Palo Santo', '20 Cones Box. (40g)\r\n\r\nPalo Santo (Holy Wood, in spanish) is a sacred tree from the South-American Pacific Coast. It\'s called this way because the tree\'s flowers burst during the Christmas Celebrations and is caracterised by his strong natural aroma. Palo Santo is often used to favorise Energetic Flow, to fight against negative energies and purify any space but is also used for meditation. These Wood\'s Chunks are naturals, pure and untreated.\r\n\r\nPalo Santo is harvested by the South-American Jungle\'s resident under Government surveillance. This wood is only harvested  4 to 10 years after the branches naturally bows down. No trees are destroyed and killed during the Harvest.\r\n\r\nHow to Use Holy Wood Incense - Palo Santo :\r\n\r\n- Light the cone\'s tip, let it burn for a few second before blowing the flame. Let the combustion continue without any flame, then ventilate the smoke towards your body or objects that you wish to purify, by exemple, your bedroom, your house or your car.\r\n\r\n- Palo Santo spreads a soft and sweet aroma, identical to Olibano and Neroli\'s aromas. Many people are seeing the purification\'s benefits and effects for a long time\'s period, even if you don\'t perceive many energies.', '15.60', '2023-03-07', 1, 3),
(132, 1677151618, 'Golden Incense - Nag Champa - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(133, 1677151671, 'Golden Incense - Nag Chandan - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(134, 1677151711, 'Golden Incense -  Nag Darshan - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(135, 1677151739, 'Golden Incense - Nag Forest - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(136, 1677151765, 'Golden Incense -  Nag Himaalaya - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(137, 1677151798, 'Golden Incense - Nag Mantra - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(138, 1677151828, 'Golden Incense - Nag Meditation - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(139, 1677156174, 'Golden Incense - Nag Palo Santo - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.50', '2023-03-07', 1, 3),
(140, 1677156213, 'Golden Incense - Nag Temple - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(141, 1677156242, 'Golden Incense - Nag Vanilla - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(142, 1677156277, 'Golden Incense - Nag White Sage - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. Apeasing Indian Scent.\r\n\r\nGolden Incense are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.', '1.70', '2023-03-07', 1, 3),
(143, 1677156590, 'Goloka Incense - Backflow Cones - Buddha', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.45', '2023-03-07', 1, 3),
(144, 1677156618, 'Goloka Incense - Backflow cones - Chakra', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(145, 1677156648, 'Goloka Incense - Backflow cones - Dragon Blood', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.45', '2023-03-07', 1, 3),
(146, 1677156688, 'Goloka Incense - Backflow cones - Nag Champa', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(147, 1677156719, 'Goloka Incense - Backflow cones - Nature\'s Jasmine', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(148, 1677157304, 'Goloka Incense - Backflow cones - Nature\'s Lavander', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(149, 1677157473, 'Goloka Incense - Backflow cones - Nature\'s Nest', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(150, 1677157553, 'Goloka Incense - Backflow cones - Palo Santo', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(151, 1677157575, 'Goloka Incense - Backflow cones - Rose', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(152, 1677157604, 'Goloka Incense - Backflow cones - SandalWood', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.30', '2023-03-07', 1, 3),
(153, 1677157638, 'Goloka Incense - Backflow cones - White Sage', 'Traditional Masala type Incense (Spices Mix). Handmade.\r\n100% Natural cones incense, pierced at the base to allow the \"Backflow\" effect, smoke backflowon the precise incense holder.\r\n\r\nConbustion time around 20mn.\r\n\r\n24 cones per box.', '3.45', '2023-03-07', 1, 3),
(154, 1677157805, 'Green Tree  Incense - 7 Chakras - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. No animal testing.\r\n\r\nGreen Tree are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.\r\n1 Metal Support furnished.', '1.80', '2023-03-07', 1, 3),
(155, 1677157837, 'Green Tree Incense - Dream Spirit - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. No animal testing.\r\n\r\nGreen Tree are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.\r\n1 Metal Support furnished.', '1.80', '2023-03-07', 1, 3),
(156, 1677157915, 'Green Tree Incense - Buddhist Tantra - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. No animal testing.\r\n\r\nGreen Tree are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.\r\n1 Metal Support furnished.', '1.80', '2023-03-07', 1, 3),
(157, 1677157940, 'Green Tree Incense - White Sage - Cones', 'Made from herbs, spices, floral extracts, exotic oils and other natural ingredients, these Indian Hit Incense are handmade. No animal testing.\r\n\r\nGreen Tree are exposed in a recyclable wrapping, contains no chemical substance.\r\n\r\nCombustion time : 30 minutes.\r\n\r\n10 cones per box.\r\n1 Metal Support furnished.', '1.80', '2023-03-07', 1, 3),
(158, 1677158179, 'Satya Incense - Dhoop Cones - Lemongrass', 'Fresh summer notes for this cone incense based on LemonGrass Satya Shrinivas Sugandhalaya.\r\nSlowly releasing their scent through combustion, these incense will bring summery and wellness perfumes inside your home.\r\n\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(159, 1677158208, 'Satya Incense - Dhoop Cones - Dragon\'s Blood', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(160, 1677158239, 'Satya Incense - Dhoop Cones - Palo Santo', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(161, 1677158345, 'Satya Incense - Dhoop Cones - Rose', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(162, 1677158386, 'Satya Incense - Dhoop Cones - Super Hit', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(163, 1677158416, 'Satya Incense - Dhoop Cones - White Sage', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(164, 1677158441, 'Satya Incense - Dhoop Cones - Nag Champa', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(165, 1677158466, 'Satya Incense - Dhoop Cones - Sandalwood', 'Indian incense Handmade.\r\n12 cones per box.\r\nHeight : 3cm.', '1.60', '2023-03-07', 1, 3),
(166, 1677162818, 'Resin - Amber', 'An authentic scent !\r\nFrom an Ancestral Recipe, created without synthetic preservatives, no colorant and no alcohol.\r\nThis resin is a plant based reconstitution of Grey Amber.\r\nIndian Handmade Product.\r\n\r\nUse as an ambiance perfume for your home, your clothes, car or as a body perfume.\r\nDon\'t burn the resin at all.\r\n\r\nKeep it in a dry place.\r\n\r\n10g Labeled Bags.\r\n', '6.00', '2023-03-07', 1, 4),
(167, 1677163016, 'Red Sandalwood - Fine Chips - 100g', 'Red Sandalwood - Fine Chips \r\n\r\n100g Labeled Bags.\r\n\r\nSymbols : Love, Protection, Healing, Spirituality, Sensuality and Sexuality.\r\n\r\nUsed for traditionnal rituals and incense composition.', '4.25', '2023-03-07', 1, 4),
(168, 1677163167, 'Palo Santo - Chips - 25g', 'Palo Santo - Chips \r\n\r\n25g Labeled Bags.\r\n\r\nUsed for traditionnal rituals and incense composition.', '2.95', '2023-03-07', 1, 4),
(169, 1677163225, 'Palo Santo - Powder - 25g', 'Palo Santo - Powder\r\n\r\n25g Labeled Bags.\r\n\r\nUsed for traditionnal rituals and incense composition.', '2.50', '2023-03-07', 1, 4),
(170, 1677163443, 'Cap Aloe - Powder - 100g', 'Cap Aloe - Powder\r\n\r\n100g Labeled Bags.\r\n\r\nSymbols : Exorcism, Disenchanting Incense and remove Evil Spirits\r\n\r\nUsed for traditionnal rituals and incense composition.', '9.16', '2023-03-07', 1, 4),
(171, 1677576400, 'Astrological Incense - Libra - Original Creation', '- September 24 - October 23\r\n- Air Element\r\n- Associated Color (ex: candle) : Sky blue\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Opoponax and Jasmine, aromatic Plants and natural Resins. Libra\'s Astrological Incense enhance Harmony and Balance, also develop love capacity. It exhale a warming and sweet scent.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(172, 1677576735, 'Astrological Incense - Aries - Original Creation', '- March 21 - April 20\r\n- Fire Element\r\n- Associated Color (ex: candle) : Red\r\n\r\nMagic Box Original Creation :\r\nIncense Mix based on Cinnamon, aromatic Plants and natural Resins. Aries\'s Astrological Incense develop a warm, soft and sweet scent. It\'s perfect for harmonisation and wellness rituals. It favorise strength, ambition and courage.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(173, 1677576942, 'Astrological Incense - Cancer - Original Creation', '- June 22 - July 21\r\n- Water Element\r\n- Associated Color (ex: candle) : White\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Camphor, aromatic Plants and natural Resins. Cancer\'s Astrological Incense, for the artistic souls, favorise creativity, intuition and sensitivity. Sweet Scent.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(174, 1677577246, 'Astrological Incense - Capricorn - Original Creation', '- December 22 - January 19\r\n- Earth Element\r\n- Associated Color (ex: candle) : Brown\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Benzoin, aromatic Plants and natural Resins. Capricorn\'s Astrological Incense has a noble scent, help to find joy of living, favorise a global vision, calm and spiritual thoughts. Allows to fight shynness for people with public contact.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(175, 1677577446, 'Astrological Incense - Gemini - Original Creation', '- May 22 - June 21\r\n- Air Element\r\n- Associated Color (ex: candle) : Grey\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Dammar and Lavander, aromatic Plants and natural Resins. Gemini\'s Astrological Incense favorise happinness, joy and enthousiasm. It reveals a light and bright scent, helps with communication and divination. \r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(176, 1677577624, 'Astrological Incense - Leo - Original Creation', '- July 23 - August 23\r\n- Fire Element\r\n- Associated Color (ex: candle) : Yellow\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Olibanum, aromatic Plants and natural Resins. Leo\'s Astrological Incense, the highest sun sign, has a strong balsamic scent. Helps self-confidence, progress and ambition\'s success.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(177, 1677578121, 'Astrological Incense - Pisces - Original Creation', '- February 20 - March 20\r\n- Water Element\r\n- Associated Color (ex: candle) : Purple, Turquoise\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Storax, aromatic Plants and natural Resins. Pisces\'s Astrological Incense is sensual and mysterious. His scent enhance associations, intuition and dream\'s Faculty.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(178, 1677578368, 'Astrological Incense - Sagittarius - Original Creation', '- November 23 - December 21\r\n- Fire Element\r\n- Associated Color (ex: candle) : Purple\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Benzoin, aromatic Plants and natural Resins. Sagittarius\'s Astrological Incense has an intense fire scent, it favorise determination, expansion. It brings help to Professionnal Initiatives and admin tasks.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(179, 1677579357, 'Astrological Incense - Scorpio - Original Creation', '- October 24 - November 22\r\n- Water Element\r\n- Associated Color (ex: candle) : Black\r\n\r\nMagic Box Original Creation :\r\nIncense Mix based on Somalian Red Myrr, aromatic Plants and natural Resins. Scorpio\'s Astrological Incense exhale an unknown and penetrating scent, enhance strength and vitality, reinforce attraction.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(180, 1677579509, 'Astrological Incense - Taurus - Original Creation', '- April 21 - May 21\r\n- Earth Element\r\n- Associated Color (ex: candle) : Green\r\n\r\nMagic Box Original Creation :\r\nIncense Mix base on Storax and Rose, aromatic Plants and natural Resins. Taurus\'s Astrological Incense diffuse a warm and earthy scent. It brings stability, organisation and solidity against all tests.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(181, 1677579696, 'Astrological Incense - Aquarius - Original Creation', '- January 21 - February 19\r\n- Water Element\r\n- Associated Color (ex: candle) : Night blue\r\n\r\nMagic Box Original Creation :\r\nIncense Mix based on Dammar, aromatic Plants and natural Resins. Aquarius\'s Astrological Incense diffuse a spacing and lively scent. It push the curiosity and spiritual aspiration. Helps Projects realisation.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(182, 1677580271, 'Astrological Incense - Virgo - Original Creation', '- August 24 - September 23\r\n- Earth Element\r\n- Associated Color (ex: candle) : Blue\r\n\r\nMagic Box Original Creation :\r\nIncense Mix based on Benzoin, aromatic Plants and natural Resins. Virgo\'s Astrological Incense exhale a nice sensation of clarity and invite a pure feeling. Favorise rigor and organisation, develop financial entries.\r\nBurn it with Blue sky Candles.\r\n\r\nEach Mix is created with care and each ingredient is traditionnaly associated to one of the four elements, to a planet or a zodiac sign. \r\nA smudge made with the holder\'s astrological sign allow an harmony with it, develop his positive aspects and fortify him.\r\n\r\nHow to use this mix : \r\nCrush  Resins and Plants into a mortar .\r\nBurn it into an Abalon\'s shell, in a cauldron or on Burning Charcoal with one or more lighted candles. \r\nTo purify a person or an object, spread the smoke from top to bottom and from front to back.', '6.50', '2023-03-07', 1, 4),
(183, 1677583819, 'Grain Incense - Abbé Julio - 100g', 'Can be used alone or as a base Incense for some mixing.\r\nGood protection, brings wellness and enhance psychic reception.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.\r\n\r\n', '4.80', '2023-03-07', 1, 4),
(184, 1677584003, 'Grain Incense - Citrus - 100g', 'Can be used alone or as a base Incense for some mixing.\r\n\r\nMix of lemon and clementine.\r\nThis incense is calming, relaxing and purifying.\r\nHelps to destroy negative vibrations.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.30', '2023-03-07', 1, 4),
(185, 1677588804, 'Grain Incense - Baltic Yellow Amber - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nPower and Strength Incense Symbol.\r\nRepresent solar, divine, spiritual attraction.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.70', '2023-03-07', 1, 4),
(186, 1677588907, 'Grain Incense - Silver - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nWealth, Honnor and Consideration.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.40', '2023-03-07', 1, 4),
(187, 1677589104, 'Grain Incense - Asa Foetida - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nGood protection, hunt the ennemies, demons and avoid those who wants to hurt us. \r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.20', '2023-03-07', 1, 4),
(188, 1677589493, 'Grain Incense - Basilica - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps for Profound Contemplation, blessing.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.80', '2023-03-07', 1, 4),
(189, 1677589577, 'Grain Incense - White Benzoin - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nIntense Purification, Home protection.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.75', '2023-03-07', 1, 4),
(190, 1677589668, 'Grain Incense - Sumatra Benzoin - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nIntense Purification, Home protection. \r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.90', '2023-03-07', 1, 4),
(191, 1677589913, 'Grain Incense - Dragon Fly Benzoin - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nIntense Purification, Home Protection. \r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '2.80', '2023-03-07', 1, 4),
(192, 1677590027, 'Grain Incense - Siam Benzoin - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nLove, artistic creativity, draws money.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '16.96', '2023-03-07', 1, 4),
(193, 1677590349, 'Grain Incense - Bergamot - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nRelaxing effect, act on emotions. Bring Financial Help and draws the good people around you.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.\r\n', '5.40', '2023-03-07', 1, 4),
(194, 1677590599, 'Grain Incense - Bethleem - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelping incense for Autel Invocation and prayers.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '2.95', '2023-03-07', 1, 4),
(195, 1677590693, 'Grain Incense - Campher - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nPlace purification and psychic protection, health.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '12.55', '2023-03-07', 1, 4),
(196, 1677590826, 'Grain Incense - Cinnamon - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps Psychic Developpement, draws prosperity.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.40', '2023-03-07', 1, 4),
(197, 1677590904, 'Grain Incense - Cathedrals - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nPrayers spiritual power.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.80', '2023-03-07', 1, 4),
(198, 1677591019, 'Grain Incense - Copal - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nOften used for his purifying vertues on affection, for protection and also helps spirituality.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.00', '2023-03-07', 1, 4),
(199, 1677591132, 'Grain Incense - White Dammar - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps Spirit Clarification, draws luck during travels and draws good nature spirits.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.00', '2023-03-07', 1, 4),
(200, 1677591487, 'Grain Incense - Black Djaoui - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nEnhance Hasard Games Luck and gains. Arab Magic.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '2.90', '2023-03-07', 1, 4),
(201, 1677592195, 'Grain Incense - Holy Mary - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nOpens mind, boost miracles and brings peace into the world.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.80', '2023-03-07', 1, 4),
(202, 1677596293, 'Grain Incense - Moreneta - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHome protection, protection for related people against evil, jealousy, protect against trap and demons.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '2.45', '2023-03-07', 1, 4),
(203, 1677596483, 'Grain Incense - Arabic Gum - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nPower, Blessing incense that will protect you against evil eye.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.96', '2023-03-07', 1, 4),
(204, 1677596725, 'Grain Incense - Malaysian Elemy Gum - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nPurificative incense, nice scent that will favorise meditation and wellness.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '7.12', '2023-03-07', 1, 4),
(205, 1677596841, 'Grain Incense - Jasmine - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nFavorise Love, money and money earnings.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.90', '2023-03-07', 1, 4),
(206, 1677596910, 'Grain Incense - Jerusalem - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps to fight difficulties.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.20', '2023-03-07', 1, 4),
(207, 1677597017, 'Grain Incense - Jesus - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nFights Evil and apease the nervous system.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.80', '2023-03-07', 1, 4),
(208, 1677597294, 'Grain Incense - Somalia\'s Tears - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nFavorise Family relationship, bring joy to your home.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '6.20', '2023-03-07', 1, 4),
(209, 1677750815, 'Grain Incense - Lavander - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps elimnating negative vibrations, protect the family and divination\'s developpement. \r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.60', '2023-03-07', 1, 4),
(210, 1677750910, 'Grain Incense - Manna - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps drawing money, material properity, game earnings and opportunities in business.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '15.50', '2023-03-07', 1, 4),
(211, 1677751032, 'Grain Incense - Undo the knots Mary - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nUndo the most inextricable situations.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.80', '2023-03-07', 1, 4),
(212, 1677751121, 'Grain Incense - Mastic - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nEnhance clairvoyance and intuitions.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '13.40', '2023-03-07', 1, 4),
(213, 1677751212, 'Grain Incense - Red Myrrh - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nLunar incense, Family\'s happiness and health, divination.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '5.30', '2023-03-07', 1, 4),
(214, 1677751283, 'Grain Incense - Nazareth - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nSales activities and work.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '2.80', '2023-03-07', 1, 4),
(215, 1677751332, 'Grain Incense - Pink Nazareth - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nGood decision taking.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.85', '2023-03-07', 1, 4),
(216, 1677751400, 'Grain Incense - Green Nazareth - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps with good work and business relationships.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '3.80', '2023-03-07', 1, 4),
(217, 1677751507, 'Grain Incense - Victory Notre-Dame - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps being victorious from every fight on projects and ambitions.\r\nFamily protection.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.90', '2023-03-07', 1, 4),
(218, 1677751612, 'Grain Incense - Miracles Notre-Dame - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nHelps wishes come true, situations without hope or places purification.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.81', '2023-03-07', 1, 4),
(219, 1677751683, 'Grain Incense - Fatima Notre-Dame - 100g', 'Can be used alone or as a base Incense for some mixing. \r\n\r\nFamily\'s protection and peace, helps realise some miracles.\r\n\r\nFor Grain incense smudging use burning charcoal or incense burners.', '4.80', '2023-03-07', 1, 4),
(220, 1677755324, 'Smudge Stick - Thuya Cedar - 3 sticks', 'Size : 12x3 cm \r\nWeight : +/- 20g\r\n3 Sticks packages\r\nPremium Quality\r\n\r\nNatural Cedar from Canada, good for purification.\r\nCanadian Cedar(Thuya) also called Peace Tree, creates the links to our Mother Earth.\r\n\r\nHow to use : \r\nLight the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.\r\n', '16.95', '2023-03-07', 1, 6),
(221, 1677762971, 'Smudge Stick - Mugwort', 'Size : 12x3 cm \r\nWeight : +/- 20g\r\nPremium Quality\r\n\r\nMugwort or Black Sage is a white sage variation. For a long time called a \'magical plant\' this sage has convinced for her smudging vertue. \r\n\r\nHow to use : \r\nLight the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.\r\n', '7.20', '2023-03-07', 1, 6),
(222, 1677763127, 'Smudge Stick - White Sage ', 'Size : 17x3 cm \r\nWeight : +/- 70g\r\nPremium Quality\r\n\r\nWhite sage (Salvia Apiana) is the more masculine type of incense. This high quality incense is a powerful purifiyer.\r\nHow to use : \r\nLight the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.\r\n', '11.90', '2023-03-07', 1, 6),
(223, 1677763313, 'Smudge Stick - 3 Goddesses', 'Size : 18x3 cm \r\nWeight : +/- 40g\r\nPremium Quality\r\n\r\nMade with Sage, Mugwort and Motherwort.\r\nOrigin : Grand Mesa, Colorado\r\nFor places, people, souls and objects purification.\r\n\r\nHow to use : \r\nLight the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.\r\n', '9.00', '2023-03-07', 1, 6),
(224, 1677763456, 'Smudge Stick - 3 Kings', 'Size : 17x2.5 cm \r\nWeight : +/- 30g\r\nPremium Quality\r\n\r\nMade with Sage, Olibanum and Natural Myrrh.\r\nOrigin: Grand Mesa, Colorado\r\n\r\nHow to use : \r\nLight the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.\r\n', '8.30', '2023-03-07', 1, 6),
(225, 1677763566, 'Smudge Stick - 4 Directions', 'Size : 19x2.5 cm \r\nWeight : +/- 40g \r\nPremium Quality \r\n\r\nMade with Sage, Juniper and hay. \r\nOrigin : Grand Mesa, Colorado \r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '10.50', '2023-03-07', 1, 6),
(226, 1677763663, 'Smudge Stick - Sage & Cedar', 'Size : 18x3 cm \r\nWeight : +/- 30g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '8.00', '2023-03-07', 1, 6),
(227, 1677763697, 'Smudge Stick - Sage & Palo Santo', 'Size : 17x3 cm \r\nWeight : +/- 30g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '8.00', '2023-03-07', 1, 6),
(228, 1677763742, 'Smudge Stick - Sage & Juniper', 'Size : 16x3 cm \r\nWeight : +/- 30g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '9.60', '2023-03-07', 1, 6),
(229, 1677763776, 'Smudge Stick - Visions', 'Size : 18x3 cm \r\nWeight : +/- 40g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '9.00', '2023-03-07', 1, 6),
(230, 1677763821, 'Smudge Stick - Sage & Dragon\'s Blood', 'Size : 10x3 cm \r\nWeight : +/- 20g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '7.50', '2023-03-07', 1, 6),
(231, 1677763876, 'Smudge Stick - Yerba Santa', 'Size : 19x4 cm \r\nWeight : +/- 100g \r\nPremium Quality \r\n\r\nFor places, people, souls and objects purification. \r\n\r\nHow to use : Light the stick, turn off the flamme, you can let the herbs consume themself on an Abalon Shell, or on a heat resistant holder. You can also hold the smudge stick and shake the smoke around someone, or an object to purify it.', '14.50', '2023-03-07', 1, 6),
(232, 1677832705, 'Electrical Charcoal Burner ', 'Medium size / Color: White\r\nUsed to light natural charcoals, coco charcoals or Bamboos.\r\n1000 watts\r\nOn/Off switch with Power management 1 to 5.\r\n\r\nHow to use : \r\n- Plug the Burner\r\n- Setup the thermostat to max power and put your charcoal on the heat resistance.\r\nWait 2 to 3 minutes and do the same with the other side of the charcoal. After this your charcoal will be ready to burn for a long  time.\r\n', '21.50', '2023-03-07', 1, 8),
(233, 1677832900, 'Flam\'Up Diva Matches - 40 Matches', '40 Matches (28 cm)  per Box  without sulfer.\r\nStandard complying EN 1783:1997.\r\nBoxes certified FSC.', '3.46', '2023-03-07', 1, 8),
(234, 1677833040, 'Flam\'Up Big Comfort - 70 Matches', '40 Matches (28 cm) per Box without sulfer. \r\nStandard complying EN 1783:1997. \r\nBoxes certified FSC.', '2.60', '2023-03-07', 1, 8),
(235, 1677833187, 'Flam\'Up Fuego', '40 Matches (28 cm)  per Box  without sulfer.\r\nStandard complying EN 1783:1997.\r\nBoxes certified FSC.', '5.00', '2023-03-07', 1, 8),
(236, 1677833555, 'Incense Holder - Sheesham Carved Wood - Tree of Life', 'Each Incense Holder are made with Sheesham Wood.\r\nSheesham Wood is an Indian rosewood coming from Culture.\r\nEngraved with a Tree of Life.\r\n\r\nOn some models an opening is made on the side to fit the Sticks Incense  and also one opening for the Cones Incense.\r\n\r\nLength : 31cm, Height : 5.5cm', '10.00', '2023-03-07', 1, 8),
(237, 1677833611, 'Incense Holder - Sheesham Carved Wood - Pentacle', 'Each Incense Holder are made with Sheesham Wood.\r\nSheesham Wood is an Indian rosewood coming from Culture.\r\nEngraved with a Pentacle.\r\n\r\nOn some models an opening is made on the side to fit the Sticks Incense  and also one opening for the Cones Incense.\r\n\r\nLength : 31cm, Height : 5.5cm', '9.60', '2023-03-07', 1, 8),
(238, 1677835152, 'Incense Burner - Hanging Black Metal Sphere', 'The sphere-shaped hanging censer is an elegant and versatile object that can be used for aesthetic or spiritual reasons.\r\n\r\n● Height 25cm, Diameter 13cm at the base.\r\n● Color: Black\r\n● Perfect for burning charcoal with herbs, resins, powders, or for use with cones.\r\n\r\nThe Sphere Hanging Censer is a decorative and functional item that adds a touch of sophistication and spirituality to any space. The sphere, considered the most perfect and harmonious form in geometry, symbolizes unity, balance and infinity.\r\n\r\nCrafted from metal, this censer is suspended by a chain, allowing the incense smoke to diffuse airily and creating a calming and mystical atmosphere.\r\n\r\nIt can be used for religious ceremonies, for meditation, relaxation or simply to perfume your home with pleasant scents.\r\n\r\nPrecaution for use:\r\n\r\n● Place out of the reach of children and pets.\r\n● Do not place in drafts.\r\n● Do not leave a flame burning unattended.\r\n● Place on a heat resistant surface.', '42.00', '2023-03-07', 1, 8),
(239, 1677835356, 'Incense Burner - Silver & Engraved', 'Ideal to safely burn cone incense, grain or powder incense, cube incense...\r\nNice finish and quality.\r\n \r\nPatterns may change depending on availability.\r\n \r\nDiameter: 6.5 cm - Height: 4.6 cm', '15.99', '2023-03-07', 1, 8),
(240, 1677835449, 'Incense Burner - Brass Silver Cup', 'Silver brass incense burner, cup shape\r\nIdeal to burn cone incense, grain or powder incense, cube incense...\r\nNice finish and quality.\r\n \r\nPatterns may change depending on availability.\r\n \r\nHeight 2.8cm\r\nDiameter: 7cm', '10.80', '2023-03-07', 1, 8),
(241, 1677835523, 'Incense Burner - Brass Black & Gold Cup', 'Black & Gold brass incense burner, cup shape\r\nIdeal to burn cone incense, grain or powder incense, cube incense...\r\nNice finish and quality.\r\n \r\nPatterns may change depending on availability.\r\n \r\nHeight 2.8cm\r\nDiameter: 7cm', '11.00', '2023-03-07', 1, 8),
(242, 1677835636, ' Incense Burner - Black, Burgundy & Gold Brass inlay', 'Incense burner in black and burgundy brass, with golden inlays.\r\nIdeal to safely burn cone incense, grain or powder incense, cube incense...\r\nNice finish and quality.\r\n \r\nPatterns and effects may change depending on availability.\r\n \r\nHeight 4.5cm\r\nDiameter: 5.5cm', '12.00', '2023-03-07', 1, 8),
(243, 1677835780, 'Incense Burner - Gold & Black inlay', 'Ideal to burn cone incense, grain or powder incense, cube incense...\r\nNice finish and quality.\r\n \r\nPatterns and effects may change depending on availability.\r\n \r\nSize: about 7.5x5.5cm', '16.00', '2023-03-07', 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `stars` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_products` (`id_products`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `size`
--

INSERT INTO `size` (`id`, `type`, `is_enabled`) VALUES
(1, 'S', 1),
(2, 'M', 1),
(3, 'L', 1),
(6, 'XL', 1);

-- --------------------------------------------------------

--
-- Structure de la table `specs`
--

DROP TABLE IF EXISTS `specs`;
CREATE TABLE IF NOT EXISTS `specs` (
  `id_products` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_colors` int(11) NOT NULL,
  PRIMARY KEY (`id_products`,`id_size`,`id_colors`),
  KEY `id_size` (`id_size`),
  KEY `id_colors` (`id_colors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_sub_categorie` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name_sub_categorie`, `description`, `id_categorie`) VALUES
(2, 'Stick Incense', 'Incense sticks are aromatic biotic material (combustible material coated in aromatic essential oils) that allow fragrant smoke to fill a room when burned. You can choose incense for simple scent pleasure, or seek out specific incense scents that can aid meditative practice and relaxation.', 2),
(3, 'Cone incense', 'The incense cone has no supporting centre, instead the fragrant material is pressed into a small cone shape so that it can sit upright. The dense area of fragrant material is good for producing a strong scent, although it doesn’t last as long as a stick.\r\n\r\n', 2),
(4, 'Resin & Powder  Incense', 'Resins are aromatic saps from trees and bushes which we burn on incense charcoal disks for their pleasant fragrance. \r\n\r\nPowders are simply powdered resins and herbs blended together for burning on charcoal disks.  ', 2),
(6, 'Smudge Sticks', 'A smudge stick is a bundle of dried herbs, usually bound with string into a small bundle. The herbs are later burned as part of a ritual or ceremony. Plants that are often used include sage and cedar. Smudge sticks were used in North American Native sacred ceremonies.', 2),
(8, 'Accessories', 'Find all of our accessories for your Incense and Smudge Sticks. Holders, Burners and more !', 2),
(9, 'Candles ', 'A candle is an ignitable wick embedded in wax, or another flammable solid substance such as tallow, that provides light, and in some cases, a fragrance. A candle can also provide heat or a method of keeping time.', 3),
(10, 'Special Candles', 'Find here our handcrafted ritual candles for precise spells and rituals.', 3),
(11, 'Purification', 'Purify your home, clean your soul and eliminate all negative energies with our Purification Materials.', 3),
(12, 'Magick Writing ', 'Enhance the power of your rituals with our special magical inks and feathers.', 3),
(13, 'Accessories', 'All of our accessories for your candles and rituals are available here !', 3),
(14, 'Tarot Cards', 'Every Tarot card in the deck has its own unique meaning. When you know what each Tarot card means, you can understand the messages and advice they are trying to send you !', 4),
(15, 'Cristal Balls', '“Seeing” into the ball is known as scrying, which means a gifted psychic has the ability to see images in crystals and then interprets them to provide helpful information that can help one make an important life decision. This could be anything pertaining to matters of the heart, career, financial outlook — anything goes. ', 4),
(16, 'Pendulum', 'A pendulum is a small weight attached to a length of chain or thread. When someone holds it by the thread and asks a question, the weight moves and provides the answer. It is an amazing tool that can be used for many different purposes.', 4),
(17, 'OuiJa', 'A Ouija board is a parlor game of slumber party fame. It facilitates automatic writing, which many believe is a means of channeling answers to questions from the spiritual realm.', 4),
(18, 'Runes', 'Runic inscriptions held magical powers. With the aid of inscriptions, you could predict the future, protect a person against misfortune, imbue objects with different qualities, or you could write down conjurations, curses, and spells.', 4),
(19, 'Rough Cristals', 'Pure and untouched cristals for the most powerful Rituals.', 5),
(20, 'Himalayan Salt', 'Himalayan salt is rock salt (halite) mined from the Punjab region of Pakistan. The salt, which often has a pinkish tint due to trace minerals, is primarily used as a food additive to replace refined table salt but is also used for cooking and food presentation, decorative lamps and spa treatments.', 5),
(21, 'Jewelry', 'Find our most beautiful Magic Jewelry pieces available used for protection, power and more !', 5),
(22, 'Herbs and Plants Books', 'All books available concerning Medicinal Herbs, Magical Plants and all about the Green Magick !', 6),
(23, 'Divination Books', 'Learn to read into the lines and more with all of our books about Divination Art !', 6),
(24, 'Lithotherapy', 'All of the books you can find about the power of the stones and cristals.', 6),
(25, 'Spell & Rituals Books', 'Grimoires, spellbooks and rituals books are avaiable for you here !', 6),
(26, 'Gift Cards', 'Want to offer a beautiful and magical gift ? Find our different Giftcards available here !', 7),
(27, 'Contact', 'Contact-us here !', 7),
(28, 'Orders', 'Follow, check and track your orders !', 7),
(29, 'Loyalty Program', 'Check our Loyalty Program section to known all about it !', 7);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `illustrate_blogs`
--
ALTER TABLE `illustrate_blogs`
  ADD CONSTRAINT `illustrate_blogs_ibfk_1` FOREIGN KEY (`id_pictures`) REFERENCES `pictures` (`id`),
  ADD CONSTRAINT `illustrate_blogs_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id`);

--
-- Contraintes pour la table `illustrate_products`
--
ALTER TABLE `illustrate_products`
  ADD CONSTRAINT `illustrate_products_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `illustrate_products_ibfk_2` FOREIGN KEY (`id_pictures`) REFERENCES `pictures` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_sub_categories`) REFERENCES `sub_categories` (`id`);

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `specs`
--
ALTER TABLE `specs`
  ADD CONSTRAINT `specs_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `specs_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `specs_ibfk_3` FOREIGN KEY (`id_colors`) REFERENCES `colors` (`id`);

--
-- Contraintes pour la table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
