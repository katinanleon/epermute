-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 mai 2021 à 11:10
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `permute`
--

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `idp` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `annonceur` varchar(30) NOT NULL,
  `ecoleS` varchar(100) NOT NULL,
  `filiereS` varchar(50) NOT NULL,
  `villeS` varchar(20) NOT NULL,
  `statut` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`idp`, `description`, `date`, `annonceur`, `ecoleS`, `filiereS`, `villeS`, `statut`) VALUES
(2, 'Je suis Mike, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '0000-00-00 00:00:00', 'M. MIKE', 'Université de Cocody', 'Droit des affaires', 'Bouaké', ''),
(3, 'Je suis Berangé, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '0000-00-00 00:00:00', 'M.Beranger', 'université de bouaké', 'Droit', 'Abidjan', ''),
(4, 'Je suis EDOUARD, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '0000-00-00 00:00:00', 'M. EDOUARD', 'Je suis Mike, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout', 'ertyu', 'ertuyiu', ''),
(5, 'Je suis VARLEY, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '0000-00-00 00:00:00', 'M. PEGO', ' Je suis PEGO, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tou', ' Science', 'Korhogo', ''),
(6, 'Je suis ALEX, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '0000-00-00 00:00:00', 'M. ALEX', 'PIGIER', 'Finance', 'Daloa', ''),
(7, 'Je suis Katinan, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:14:02', 'M. Klinang', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(8, 'Je suis Constant, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Constant', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(9, 'Je suis Delphin, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Delphin', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(10, 'Je suis Constant, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Constant', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(11, 'Je suis Delphin, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Delphin', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(12, 'Je suis Constant, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Constant', 'Université de Bouaké', 'Science Economie', 'Bouaké', ''),
(13, 'Je suis Delphin, orienté en droit des affaires à l\'université de Bouaké, je souhaite permuter avec tout étudiant orienté en droit des affaires à Cocody.', '2021-05-26 17:15:55', 'M. Delphin', 'Université de Bouaké', 'Science Economie', 'Bouaké', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idu` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `ecole` varchar(100) NOT NULL,
  `ville` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idu`, `nom`, `prenom`, `email`, `telephone`, `ecole`, `ville`) VALUES
(22, 'Sako', 'Mike', 'mike@gmail.com', 2147483647, 'UCA', 'Abidjan'),
(24, 'Dupon', 'Alex', 'alex@gmail.com', 547483647, 'UCAO', 'Abidjan'),
(27, 'Kate', 'Mike', 'mike@gmail.com', 451478960, 'UCA', 'Abidjan'),
(28, 'Konan', 'Alex', 'mike@gmail.com', 251478963, 'PIGIER', 'Bouaké'),
(29, 'Kone', 'Pego', 'mike@gmail.com', 251478945, 'UCA', 'Abidjan'),
(30, 'Kassi', 'Christ', 'kass@gmail.com', 2147483647, 'UCAO', 'Daloa'),
(31, 'Pego', 'Constant', 'pego@gmail.com', 2147483647, 'EMAN', ''),
(32, 'Pego', 'Constant', 'pego@gmail.com', 2147483647, 'EMAN', ''),
(33, 'Pego', 'Constant', 'pego@gmail.com', 2147483647, 'EMAN', ''),
(34, 'Pego', 'Constant', 'pego@gmail.com', 2147483647, 'EMAN', ''),
(35, 'ENOK', 'ALI', 'ali@gmail.com', 888888888, 'AERTY', 'Bouaké');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idv` int(11) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idv`, `nom_ville`, `statut`) VALUES
(1, 'Abidjan', 0),
(2, 'Bouaké', 0),
(3, 'Korhogo', 0),
(4, 'Daloa', 0),
(5, 'San pedro', 0),
(6, 'Man', 0),
(7, 'Yamoussokro', 0),
(8, 'Bondoukou', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idu`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
