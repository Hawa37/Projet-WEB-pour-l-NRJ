-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 mars 2022 à 12:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tutosite`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `categorie` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `categorie`) VALUES
(1, 'Panneaux solaire pour s1600 et s2600', 149, 'solaire'),
(2, 'ECO-WORTHY Ponocristallin ', 20.14, 'solaire'),
(3, 'Eolienne Lanterne 400w 12v Generateur De Vent Electromagnetique 5 Lames', 131.99, 'eolienne'),
(24, 'Wind Turbine Eolienne Generateur De Vent Durable 15 Ans 400w 12v Faible Bruit', 111.99, 'eolienne'),
(25, 'Panneau Solaire SONALI Solaire PolyVerrelin 10W 36 Cellules (12V)', 29.34, 'solaire'),
(26, 'Eolienne solaire plastique 30 cm a construire', 20.5, 'eoliennesolaire'),
(27, 'Kit eolienne solaire en bois - 35 cm', 32, 'eoliennesolaire'),
(28, 'Panneau solaire UNISUN 110.12BC - UNITECK', 299, 'solaire'),
(29, 'Eolienne 500W 12V/24V/48V 6 pales moulin a vent Kit de generateur de vent - 110V a 24V', 354.25, 'eolienne');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`) VALUES
(2, 'testdb', 'testdb@gmail.com', '$2y$10$73TPeakFSUj7ihb169TDUeeuJ/miJYlKRF.oi/.DZcF86FfxwwQeW', NULL, NULL),
(3, 'marion', 'marion@gmail.fr', '$2y$10$73TPeakFSUj7ihb169TDUeeuJ/miJYlKRF.oi/.DZcF86FfxwwQeW', 'VvZg7PYpbOQ2wIVKXiLQ0HxzIvrNPrdbPKFB1GyxSmGhCaxNPEhoJkGHCUCK', '2022-03-19 21:39:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
