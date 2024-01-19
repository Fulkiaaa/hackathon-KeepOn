-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 jan. 2024 à 13:23
-- Version du serveur : 8.2.0
-- Version de PHP : 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `OFF_ID` int AUTO_INCREMENT,
  `OFF_Entreprise_ID` int DEFAULT NULL,
  `OFF_Titre` varchar(50) DEFAULT NULL,
  `OFF_Description` text,
  `OFF_Domaine_Expertise` varchar(100) DEFAULT NULL,
  `OFF_Remuneration` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`OFF_ID`),
  KEY `OFF_Entreprise_ID` (`OFF_Entreprise_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

DROP TABLE IF EXISTS `contrats`;
CREATE TABLE IF NOT EXISTS `contrats` (
  `CON_ID` int AUTO_INCREMENT,
  `CON_Correspondance_ID` int DEFAULT NULL,
  `CON_DateDebut` date DEFAULT NULL,
  `CON_DateFin` date DEFAULT NULL,
  `CON_Statut_Contrat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CON_ID`),
  KEY `CON_Correspondance_ID` (`CON_Correspondance_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `correspondances`
--

DROP TABLE IF EXISTS `correspondances`;
CREATE TABLE IF NOT EXISTS `correspondances` (
  `COR_ID` int AUTO_INCREMENT,
  `COR_Prestataire_ID` int DEFAULT NULL,
  `COR_Offre_ID` int DEFAULT NULL,
  `COR_EtatCorrespondance` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`COR_ID`),
  KEY `COR_Prestataire_ID` (`COR_Prestataire_ID`),
  KEY `COR_Offre_ID` (`COR_Offre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE IF NOT EXISTS `profils` (
  `PRO_ID` int AUTO_INCREMENT,
  `PRO_Utilisateur_ID` int DEFAULT NULL,
  `PRO_Competences` text,
  `PRO_Experience` text,
  `PRO_Secteurs_Expertise` text,
  PRIMARY KEY (`PRO_ID`),
  KEY `PRO_Utilisateur_ID` (`PRO_Utilisateur_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `UTI_ID` int AUTO_INCREMENT,
  `UTI_Nom` varchar(38) DEFAULT NULL,
  `UTI_Prenom` varchar(38) DEFAULT NULL,
  `UTI_Email` varchar(255) DEFAULT NULL,
  `UTI_MotDePasse` varchar(255) DEFAULT NULL,
  `UTI_TypeUtilisateur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`UTI_ID`),
  UNIQUE KEY `UTI_Email` (`UTI_Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`OFF_Entreprise_ID`) REFERENCES `utilisateurs` (`UTI_ID`);

--
-- Contraintes pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD CONSTRAINT `contrats_ibfk_1` FOREIGN KEY (`CON_Correspondance_ID`) REFERENCES `correspondances` (`COR_ID`);

--
-- Contraintes pour la table `correspondances`
--
ALTER TABLE `correspondances`
  ADD CONSTRAINT `correspondances_ibfk_1` FOREIGN KEY (`COR_Prestataire_ID`) REFERENCES `utilisateurs` (`UTI_ID`),
  ADD CONSTRAINT `correspondances_ibfk_2` FOREIGN KEY (`COR_Offre_ID`) REFERENCES `offres` (`OFF_ID`);

--
-- Contraintes pour la table `profils`
--
ALTER TABLE `profils`
  ADD CONSTRAINT `profils_ibfk_1` FOREIGN KEY (`PRO_Utilisateur_ID`) REFERENCES `utilisateurs` (`UTI_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
