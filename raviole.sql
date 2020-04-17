-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 avr. 2020 à 13:15
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `recettes_cuisine`
--

-- --------------------------------------------------------

--
-- Structure de la table `raviole`
--

DROP TABLE IF EXISTS `raviole`;
CREATE TABLE IF NOT EXISTS `raviole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_principal` varchar(250) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `recette` text DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `raviole_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `raviole`
--

INSERT INTO `raviole` (`id`, `ingredient_principal`, `titre`, `recette`, `file`) VALUES
(2, 'Saumon', 'Salade de ravioles au saumon', '1/ Assaisonner la salade, couper le saumon en petites lamelles.\r\n\r\n2/ PrÃ©parer directement dans les assiettes : la salade verte assaisonnÃ©e, dÃ©poser dessus les lamelles de saumon.\r\n\r\n3/ Faire chauffer de l\'huile d\'olive dans une poÃªle et y faire rissoler les plaques de ravioles dÃ©faites en petits morceaux dÃ¨s leur sortie du congÃ©lateur, pour qu\'elles ne se ramollissent pas.\r\n\r\n4/DÃ¨s qu\'elles sont dorÃ©es, rÃ©partir les ravioles dans les assiettes Ã  cÃ´tÃ© de la salade, parsemer de parmesan rÃ¢pÃ© ou Ã©mincÃ© et servir aussitÃ´t.', '5e9989ce2a59d.png'),
(3, 'champignons', 'Gratin de ravioles aux champignons', '1/ DÃ©gorgez 450g de champignons dans une poÃªle, ajoutez de l\'ail et des fines herbes, attendez que les champignons aient rendu toute leur eau.\r\n\r\n2/ Recouvrez de vin blanc et ajoutez un bouillon de boeuf. Attendez que le vin blanc se soit presque totalement Ã©vaporÃ©. Coupez le feu et ajoutez 4 grosses cuillÃ¨res de crÃ¨me fraÃ®che Ã©paisse.\r\n\r\n3/ Beurrez le plat\r\n\r\n4/ Ajouter 2 plaques de ravioles recouvrez avec 1/3 du mÃ©lange de champignons Ã  la crÃ¨me. Remettez 2 plaques de ravioles et ainsi de suite. Sur la derniÃ¨re couche, recouvrez juste de crÃ¨me fraÃ®che et parsemez assez de comtÃ© rÃ¢pÃ© de maniÃ¨re Ã  ce que la crÃ¨me ne se voie plus.\r\n\r\n5/ Laissez gratiner 20 minutes environ dans un four prÃ©chauffÃ© Ã  200Â°C.', '5e99a4ed8e4cf.jpeg'),
(4, 'ravioles', 'PIZZA aux ravioles', '1/ Ã‰taler la pÃ¢te Ã  pizza sur la plaque de cuisson en gardant le papier sulfurisÃ©.\r\n\r\n2/ MÃ©langer dans un bol la crÃ¨me fraÃ®che avec la ciboulette rincÃ©e et ciselÃ©e. Saler et poivrer.\r\n\r\n3/ Ã‰taler 1/3 de cette crÃ¨me sur la pÃ¢te Ã  pizza. RÃ©partir les ravioles surgelÃ©es. Ajouter le reste de la crÃ¨me fraÃ®che et saupoudrer de gruyÃ¨re rÃ¢pÃ©. \r\n\r\n4/Enfourner une vingtaine de minutes Ã  180Â°C (Ã€ adapter en fonction de la pÃ¢te Ã  pizza utilisÃ©e).', '5e99a330ac09c.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
