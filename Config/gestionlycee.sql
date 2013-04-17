-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 17 Avril 2013 à 08:35
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionlycee`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE IF NOT EXISTS `absences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Justification_Absences` varchar(500) NOT NULL,
  `IdEleves_Absences` int(11) NOT NULL,
  `IdCreneaux_Absences` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdEleves_Absences` (`IdEleves_Absences`),
  KEY `IdCreneaux_Absences` (`IdCreneaux_Absences`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Admins` varchar(200) NOT NULL,
  `Prenom_Admins` varchar(200) NOT NULL,
  `IdUtilisateurs_Admins` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdUtilisateurs_Admins` (`IdUtilisateurs_Admins`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `Nom_Admins`, `Prenom_Admins`, `IdUtilisateurs_Admins`) VALUES
(1, 'mounjib', 'souhail', 3),
(2, 'mougeot', 'maxime', 4);

-- --------------------------------------------------------

--
-- Structure de la table `autorisations`
--

CREATE TABLE IF NOT EXISTS `autorisations` (
  `id` int(11) NOT NULL,
  `IdTypeUtilisateurs_Autorisations` int(11) NOT NULL,
  `IdEcrans_Autorisations` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdTypeUtilisateurs_Autorisations` (`IdTypeUtilisateurs_Autorisations`),
  KEY `IdEcrans_Autorisations` (`IdEcrans_Autorisations`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Classes` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`id`, `Nom_Classes`) VALUES
(1, 'Seconde A'),
(2, 'Premiere A'),
(3, 'Terminale A');

-- --------------------------------------------------------

--
-- Structure de la table `controles`
--

CREATE TABLE IF NOT EXISTS `controles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Sujet_Controles` varchar(300) NOT NULL,
  `Coef_Controles` int(11) NOT NULL,
  `Descr_Controles` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `controles`
--

INSERT INTO `controles` (`id`, `Sujet_Controles`, `Coef_Controles`, `Descr_Controles`) VALUES
(1, 'Verbes irréguliers - 1 ', 1, 'Verbes irréguliers (20 premiers)'),
(2, 'Verbes irréguliers - 2', 4, 'Verbes irréguliers (20 suivants)'),
(3, 'Grammaire', 2, 'Le COD'),
(4, 'Les probabilités', 2, 'Probabilités premier devoir'),
(5, 'Les vecteurs', 2, 'Comprendre les vecteurs'),
(6, 'Les graphes orientés', 1, 'Identifier les cycles dans un graphe orienté');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL,
  `IdCreneaux_Cours` int(11) NOT NULL,
  `IdProfs_Cours` int(11) NOT NULL,
  `IdMatieres_Cours` int(11) NOT NULL,
  `IdClasses_Cours` int(11) NOT NULL,
  `IdControles_Cours` int(11) DEFAULT NULL,
  KEY `IdSalles_Cours` (`id`),
  KEY `IdCreneaux_Cours` (`IdCreneaux_Cours`),
  KEY `IdProfs_Cours` (`IdProfs_Cours`),
  KEY `IdMatieres_Cours` (`IdMatieres_Cours`),
  KEY `IdClasses_Cours` (`IdClasses_Cours`),
  KEY `IdControles_Cours` (`IdControles_Cours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `IdCreneaux_Cours`, `IdProfs_Cours`, `IdMatieres_Cours`, `IdClasses_Cours`, `IdControles_Cours`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 2, 1, 2, 6, 1),
(1, 2, 1, 1, 1, 2),
(1, 3, 4, 2, 1, 1),
(5, 4, 4, 3, 3, 5),
(6, 4, 3, 4, 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `creneaux`
--

CREATE TABLE IF NOT EXISTS `creneaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date_Creneaux` date NOT NULL,
  `HeureDeb_Creneaux` time NOT NULL,
  `HeureFin_Creneaux` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `creneaux`
--

INSERT INTO `creneaux` (`id`, `Date_Creneaux`, `HeureDeb_Creneaux`, `HeureFin_Creneaux`) VALUES
(1, '2013-04-09', '10:00:00', '12:00:00'),
(2, '2013-04-18', '15:00:00', '16:00:00'),
(3, '2013-06-05', '08:00:00', '12:00:00'),
(4, '2013-05-15', '10:00:00', '11:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `ecrans`
--

CREATE TABLE IF NOT EXISTS `ecrans` (
  `id` int(11) NOT NULL,
  `Descr_Ecrans` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Eleves` varchar(200) NOT NULL,
  `Prenom_Eleves` varchar(200) NOT NULL,
  `DateNaiss_Eleves` date NOT NULL,
  `LieuNaiss_Eleves` varchar(200) NOT NULL,
  `Adresse_Eleves` varchar(500) NOT NULL,
  `CP_Eleves` int(11) NOT NULL,
  `Ville_Eleves` varchar(200) NOT NULL,
  `IdClasses_Eleves` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdClasses_Eleves` (`IdClasses_Eleves`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`id`, `Nom_Eleves`, `Prenom_Eleves`, `DateNaiss_Eleves`, `LieuNaiss_Eleves`, `Adresse_Eleves`, `CP_Eleves`, `Ville_Eleves`, `IdClasses_Eleves`) VALUES
(1, 'lafitte', 'claire', '1997-04-01', 'agadir', '13 rue des miskins', 33260, 'Agadir', 3),
(2, 'Lambda', 'Alphomega', '1995-01-08', 'Marseille', '7 avenue de l''eglise', 33072, 'Bordeaux', 2),
(3, 'Malard', 'Camille', '1995-04-03', 'Rouen', '15 rue des mistraux', 45000, 'Orleans', 3),
(4, 'Carasco', 'Emilie', '1998-04-18', '750009', '15 Bd Louis XIV', 33150, 'Cenon', 1),
(5, 'Rasiomi', 'Laure', '1997-09-03', 'Venise', '15 rue de la perdition', 33700, 'Floirac', 2),
(6, 'McGarett', 'Steve', '2000-12-24', 'Hawai', '30 rue des marinières', 33400, 'Talence', 3),
(7, 'Verlet', 'Marie pierre', '1996-02-12', 'Charente', '9 Route de cachoute', 33800, 'Bordeaux', 1),
(8, 'Crobe', 'Jean Marie', '1997-07-08', 'Caen', '18 avenue de âmes fromagères', 33600, 'Pessac', 2),
(9, 'avalisse', 'Adeline', '1999-06-18', 'Bourail', '17 avenue des gourmandises', 33170, 'Gradignan', 1),
(10, 'Guichon', 'Thibault', '1997-05-03', 'Cannes', '48 avenue des neuvaines', 33600, 'Pessac', 1),
(11, 'matata', 'Fatoumata hakuna', '1994-08-20', 'Corse', '1 rue de la savane', 33000, 'Bordeaux', 2);

-- --------------------------------------------------------

--
-- Structure de la table `eleves_parents`
--

CREATE TABLE IF NOT EXISTS `eleves_parents` (
  `IdEleves_EP` int(11) NOT NULL,
  `IdParents_EP` int(11) NOT NULL,
  KEY `IdEleves_EP` (`IdEleves_EP`),
  KEY `IdParents_EP` (`IdParents_EP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eleves_parents`
--

INSERT INTO `eleves_parents` (`IdEleves_EP`, `IdParents_EP`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE IF NOT EXISTS `matieres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Matieres` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`id`, `Nom_Matieres`) VALUES
(1, 'Français'),
(2, 'Mathematiques'),
(3, 'Physique'),
(4, 'SVT'),
(5, 'Histoire '),
(6, 'Géographie'),
(7, 'Anglais'),
(8, 'Espagnol'),
(9, 'Allemand'),
(10, 'Musique '),
(11, 'Arts Plastiques');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdControles_Notes` int(11) NOT NULL,
  `IdEleves_Notes` int(11) NOT NULL,
  `Note` float DEFAULT NULL,
  `Appreciation_Notes` varchar(500) DEFAULT NULL,
  `EstValide_Notes` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IdEleves_Notes` (`IdEleves_Notes`),
  KEY `IdControles_Notes` (`IdControles_Notes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`id`, `IdControles_Notes`, `IdEleves_Notes`, `Note`, `Appreciation_Notes`, `EstValide_Notes`) VALUES
(1, 2, 2, 19, NULL, 0),
(2, 1, 2, 14, NULL, 0),
(3, 1, 3, 15, NULL, 0),
(4, 1, 1, 10, NULL, 0),
(5, 1, 4, 17.8, NULL, 0),
(6, 1, 5, 14.5, NULL, 0),
(7, 2, 1, 12, NULL, 0),
(8, 2, 3, 19.6, NULL, 0),
(9, 1, 1, 19.6, NULL, 0),
(10, 2, 5, 19.9, 'excellent travail', 0),
(11, 2, 4, 19.9, 'excellent travail', 0),
(12, 2, 6, 19.9, 'excellent travail', 0);

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Parents` varchar(200) NOT NULL,
  `Prenom_Parents` varchar(200) NOT NULL,
  `Email_Parents` varchar(200) NOT NULL,
  `Tel_Parents` int(11) NOT NULL,
  `Adresse_Parents` varchar(200) NOT NULL,
  `CP_Parents` int(11) NOT NULL,
  `Ville_Parents` varchar(200) NOT NULL,
  `IdUtilisateurs_Parents` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdUtilisateurs_Parents` (`IdUtilisateurs_Parents`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `parents`
--

INSERT INTO `parents` (`id`, `Nom_Parents`, `Prenom_Parents`, `Email_Parents`, `Tel_Parents`, `Adresse_Parents`, `CP_Parents`, `Ville_Parents`, `IdUtilisateurs_Parents`) VALUES
(1, 'Guichard', 'Thibaut', 'thibaut@test.fr', 606060601, '1 rue test', 33000, 'Bordeaux', 2),
(2, 'Dioume', 'Fatou', 'fatou@test.fr', 606060602, '2 rue test', 33000, 'Bordeaux', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE IF NOT EXISTS `profs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Profs` varchar(200) NOT NULL,
  `Prenom_Profs` varchar(200) NOT NULL,
  `IdUtilisateurs_Profs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdUtilisateurs_Profs` (`IdUtilisateurs_Profs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `profs`
--

INSERT INTO `profs` (`id`, `Nom_Profs`, `Prenom_Profs`, `IdUtilisateurs_Profs`) VALUES
(1, 'Villain', 'Margot', 5),
(2, 'Kayungu', 'Simone', 6),
(3, 'Hamlett', 'Jeanne', 7),
(4, 'Nicoleau', 'Enrico', 8);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Objet_RDV` varchar(500) NOT NULL,
  `IdEleves_RDV` int(11) NOT NULL,
  `IdProf_RDV` int(11) NOT NULL,
  `IdCreneaux_RDV` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdEleves_RDV` (`IdEleves_RDV`),
  KEY `IdProf_RDV` (`IdProf_RDV`),
  KEY `IdCreneaux_RDV` (`IdCreneaux_RDV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Salles` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `salles`
--

INSERT INTO `salles` (`id`, `Num_Salles`) VALUES
(1, 101),
(2, 102),
(3, 103),
(4, 104),
(5, 105),
(6, 201),
(7, 202),
(8, 203),
(9, 204),
(10, 205);

-- --------------------------------------------------------

--
-- Structure de la table `typeutilisateurs`
--

CREATE TABLE IF NOT EXISTS `typeutilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_TypeUtilisateurs` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `typeutilisateurs`
--

INSERT INTO `typeutilisateurs` (`id`, `Nom_TypeUtilisateurs`) VALUES
(1, 'Profs'),
(2, 'Admins'),
(3, 'Parents');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Login_Utilisateurs` varchar(200) NOT NULL,
  `Mdp_Utilisateurs` varchar(200) NOT NULL,
  `IdTypeUtilisateurs_Utilisateurs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdTypeUtilisateurs_Utilisateurs` (`IdTypeUtilisateurs_Utilisateurs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `Login_Utilisateurs`, `Mdp_Utilisateurs`, `IdTypeUtilisateurs_Utilisateurs`) VALUES
(1, 'dioume', 'azerty', 3),
(2, 'guichard', 'azerty', 3),
(3, 'mounjib', 'azerty', 2),
(4, 'mougeot', 'azerty', 2),
(5, 'villain', 'azerty', 1),
(6, 'kayungu', 'azerty', 1),
(7, 'Hamlett', 'azerty', 1),
(8, 'Nicoleau', 'azerty', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
