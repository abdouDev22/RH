-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 17 déc. 2023 à 15:55
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rh`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id_absences` int(11) NOT NULL,
  `id_type_absences` int(11) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `T_manager` enum('En-attente','Valide','Refuse') NOT NULL DEFAULT 'En-attente',
  `dateCreation` datetime NOT NULL DEFAULT current_timestamp(),
  `id_employe` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `ID_Manager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`id_absences`, `id_type_absences`, `date_debut`, `date_fin`, `T_manager`, `dateCreation`, `id_employe`, `description`, `ID_Manager`) VALUES
(1, 3, '2023-03-03', '2023-04-04', 'En-attente', '2023-06-10 15:42:04', 3, 'En-attente', 8),
(2, 3, '2023-10-10', '2023-10-11', 'En-attente', '2023-06-11 02:49:15', 3, 'En-attente', 8),
(3, 3, '2023-05-05', '2023-06-07', 'En-attente', '2023-06-11 02:50:39', 8, 'En-attente', 8),
(8, 3, '2023-11-10', '2023-11-10', 'En-attente', '2023-11-10 00:00:00', 8, 'pouopoiuooii', 8),
(13, 2, '2023-11-17', '2023-11-30', 'En-attente', '2023-11-17 00:00:00', 3, 'aden', 8),
(14, 1, '2023-12-22', '2023-12-22', 'En-attente', '2023-12-22 00:00:00', 3, 'vite', 8),
(15, 3, '2023-12-22', '2023-12-22', 'En-attente', '2023-12-22 00:00:00', 3, 'vite', 8),
(16, 1, '2023-12-29', '2023-12-29', 'En-attente', '2023-12-29 00:00:00', 10, 'justifi votre absence', 8);

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id_affectation` int(11) NOT NULL,
  `id_employe` int(11) DEFAULT NULL,
  `id_type_affectation` int(255) DEFAULT NULL,
  `ancien_departement` varchar(255) DEFAULT NULL,
  `nouveau_departement` varchar(255) DEFAULT NULL,
  `date_affectation` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`id_affectation`, `id_employe`, `id_type_affectation`, `ancien_departement`, `nouveau_departement`, `date_affectation`) VALUES
(3, 9, 5, 'Développement Organisationnel', 'Développement Organisationnel', '2023-12-14'),
(8, 1, 3, 'Formation et Développement', 'Gestion des Performances', '2023-12-14'),
(9, 3, 5, 'Développement Organisationnel', 'Développement Organisationnel', '2023-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `avantages_sociaux`
--

CREATE TABLE `avantages_sociaux` (
  `id_avantages_sociaux` int(11) NOT NULL,
  `id_types_avantages` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `commentaire` varchar(200) DEFAULT NULL,
  `id_employe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avantages_sociaux`
--

INSERT INTO `avantages_sociaux` (`id_avantages_sociaux`, `id_types_avantages`, `date_debut`, `date_fin`, `commentaire`, `id_employe`) VALUES
(1, 4, '2023-11-03', '2023-11-10', 'aboubaker', 3);

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id_candidats` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `cv` blob NOT NULL,
  `lettre_motivation` blob NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id_candidats`, `nom`, `prenom`, `date_de_naissance`, `adresse`, `telephone`, `email`, `poste`, `cv`, `lettre_motivation`, `id_utilisateur`) VALUES
(2, 'sahal', 'aden', '2023-12-13', 'Q7', '77865451', 'abou@gmail.com', 'required', '', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `Nom`, `Email`, `Message`) VALUES
(1, 'Ayman', 'Ayman12@gmail.com', ''),
(3, 'ismail', 'aboubakeradenomar@gmail.com', 'lgbt');

-- --------------------------------------------------------

--
-- Structure de la table `demande_congé`
--

CREATE TABLE `demande_congé` (
  `id_congé` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `date_début` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_type_conge` int(11) NOT NULL,
  `statut` enum('En-attente','Validé','Refusé') DEFAULT 'En-attente',
  `motif` varchar(255) NOT NULL,
  `DateCreation` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demande_congé`
--

INSERT INTO `demande_congé` (`id_congé`, `id_employe`, `date_début`, `date_fin`, `id_type_conge`, `statut`, `motif`, `DateCreation`) VALUES
(160, 3, '2023-09-20', '2023-09-18', 3, 'Refusé', ' desole', '2023-09-14'),
(162, 2, '2023-08-11', '2023-08-30', 3, 'Refusé', 'salutxx', '2023-09-15'),
(163, 2, '2023-08-27', '2023-09-06', 3, 'En-attente', 'salut', '2023-09-27'),
(165, 3, '2002-01-31', '2023-10-31', 3, 'En-attente', '  description', '2023-10-03'),
(166, 3, '2002-01-31', '2023-11-08', 1, 'En-attente', 'description', '2023-10-08'),
(167, 2, '2002-01-13', '2023-11-24', 3, 'En-attente', 'desole mais un des mes frere viens de mourir donc accepte cette demande de conge', '2023-11-12'),
(168, 1, '2002-01-02', '2023-11-14', 3, 'En-attente', 'navre Mr je eu un probleme tres grave', '2023-11-12'),
(169, 1, '2002-01-02', '2023-12-08', 2, 'En-attente', 'salutx', '2023-12-02'),
(170, 8, '2002-01-11', '2023-12-01', 3, 'En-attente', '   salutxxxxxxxxxxx', '2023-12-02'),
(171, 8, '2002-01-31', '2024-01-17', 2, 'En-attente', 'je eu une dueil', '2023-12-05'),
(172, 3, '2002-01-24', '2023-12-20', 1, 'En-attente', 'salut', '2023-12-10');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id_employe` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_embauche` datetime NOT NULL,
  `departement` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id_employe`, `nom`, `prenom`, `date_de_naissance`, `adresse`, `telephone`, `email`, `date_embauche`, `departement`, `poste`, `id_utilisateur`) VALUES
(1, 'Kamil', 'Mohamed ', '2000-07-22', 'Gabode Lot: 124', '77841384', 'abdo_med12@hotmail.fr', '2023-05-01 00:00:00', '2', 'développeur adjoint', 3),
(2, 'ali', 'Mohamed', '2000-07-22', 'Gabode Lot: 124', '77841384', 'abdo_med12@hotmail.fr', '2000-02-29 00:00:00', '2', 'développeur adjoint', 4),
(3, 'omar', 'Mohamed', '2000-07-22', 'Gabode Lot: 124', '77841384', 'abdo_med12@hotmail.fr', '2022-05-02 00:00:00', 'Développement Organisationnel', 'développeur adjoint', 5),
(8, 'aden', 'Mohamed', '2000-07-22', 'Gabode Lot: 124', '77841384', 'abdo_med12@hotmail.fr', '2023-05-01 00:00:00', '2', 'développeur adjoint', 6),
(9, 'yacin', 'ABDI', '2000-05-01', 'Q6', '77457965', 'yacin@gmail.com', '0000-00-00 00:00:00', '1', 'ingenieur', 1),
(10, 'Marwo', 'Ahmed', '1998-05-01', 'Balbala', '77462992', 'Marwo@gmail.com', '0000-00-00 00:00:00', '4', 'comptable', 7);

-- --------------------------------------------------------

--
-- Structure de la table `justificatifs`
--

CREATE TABLE `justificatifs` (
  `ID_Justificatif` int(11) NOT NULL,
  `id_absences` int(11) NOT NULL,
  `Description_Justificatif` varchar(255) DEFAULT NULL,
  `Chemin_Fichier` varchar(90) DEFAULT NULL,
  `Statut_Justificatif` enum('En-attente','justifié','Non-justifié') NOT NULL DEFAULT 'En-attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `justificatifs`
--

INSERT INTO `justificatifs` (`ID_Justificatif`, `id_absences`, `Description_Justificatif`, `Chemin_Fichier`, `Statut_Justificatif`) VALUES
(1, 3, 'yess', 'C:/xampp/htdocs/RH/RH/document/657d57dc7ac5f_3d-skhema-chip-detal-metall-kompyuter-makro-5', 'justifié'),
(11, 8, 'abou', 'C:/xampp/htdocs/RH/RH/document/657da09241abf_3d-skhema-chip-detal-metall-kompyuter-makro-5', 'justifié'),
(12, 14, 'salut', 'C:/xampp/htdocs/RH/RH/document/657f08f7c4350_English for Information Technology 1.pdf', 'justifié'),
(13, 15, 'salutxx', '657f098a72dc1_English for Information Technology 1.pdf', 'justifié'),
(14, 16, NULL, NULL, 'En-attente');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `id_offres` int(11) NOT NULL,
  `titre_offre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_publication` date NOT NULL,
  `date_limite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`id_offres`, `titre_offre`, `description`, `date_publication`, `date_limite`) VALUES
(1, 'comptable', '<style>\n  \n\n  ul {\n    list-style-type: square;\n    left: 90px;\n    color:white;\n  }\n\n  li {\n    margin-bottom: 10px;\n    font-family: \'Times New Roman\', Times, serif;\n    left: 90px;\n  }\n\n  h3 {\n    color:silver;\n  }\n\n  p {\n    color:white;\n  }\n\n\n  \n</style>\n<br><br>\n<h3>Fonctionnalités d\'un post manager :</h3><br><br>\n<ul>\n  <li>Création de publications : Il permet aux utilisateurs d\'écrire et de publier de nouveaux articles en fournissant un éditeur de texte ou un formulaire de saisie.</li>\n  <li>Modification de publications : Il permet de modifier les articles existants, que ce soit pour corriger des erreurs, ajouter du contenu supplémentaire ou mettre à jour les informations.</li>\n  <li>Suppression de publications : Il offre la possibilité de supprimer des publications indésirables ou obsolètes.</li>\n  <li>Gestion des catégories et des balises : Il permet d\'organiser les publications en catégories ou en utilisant des balises pour une meilleure classification et une navigation plus facile.</li>\n  <li>Fonctionnalités d\'édition avancées : Il peut offrir des options d\'édition avancées telles que la mise en forme du texte, l\'ajout d\'images, de vidéos ou d\'autres médias, l\'insertion de liens, etc.</li>\n  <li>Gestion des commentaires : Dans certains cas, un post manager peut également prendre en charge la gestion des commentaires associés à chaque publication, permettant aux utilisateurs de modérer les commentaires ou d\'y répondre.</li>\n  <li>Fonctionnalités de recherche et de filtrage : Il peut fournir des fonctionnalités de recherche pour trouver rapidement des publications spécifiques, ainsi que des options de filtrage pour afficher des publications en fonction de critères spécifiques tels que la date, l\'auteur, les catégories, les balises, etc.</li>\n</ul><br><br>\n\n<h3>Compétences requises :</h3><br><br>\n<ul>\n  <li>Connaissance en gestion des ressources humaines : Une solide compréhension des principes et des pratiques de la gestion des ressources humaines est essentielle.</li>\n  <li>Cela comprend la connaissance des lois du travail, des politiques et des procédures relatives à l\'embauche, à la formation, à la rémunération, à la gestion des performances, à la résolution des conflits, etc.</li>\n  <li>Compétences en recrutement et sélection : La capacité à mener des processus de recrutement efficaces, à évaluer les candidats, à mener des entrevues, à effectuer des vérifications des antécédents et à prendre des décisions éclairées sur les nouvelles embauches.</li>\n  <li>Compétences en formation et développement : La capacité à identifier les besoins de formation, à concevoir et à fournir des programmes de formation adaptés, à évaluer l\'efficacité de la formation et à soutenir le développement professionnel des employés.</li>\n</ul>', '2020-02-10', '2020-02-08'),
(2, 'ingenieur', '<style>\n  \n\n  ul {\n    list-style-type: square;\n    left: 90px;\n    color:white;\n  }\n\n  li {\n    margin-bottom: 10px;\n    font-family: \'Times New Roman\', Times, serif;\n    left: 90px;\n  }\n\n  h3 {\n    color:silver;\n  }\n\n  p {\n    color:white;\n  }\n\n\n  \n</style>\n<br><br>\n<h3>Fonctionnalités d\'un post manager :</h3><br><br>\n<ul>\n  <li>Création de publications : Il permet aux utilisateurs d\'écrire et de publier de nouveaux articles en fournissant un éditeur de texte ou un formulaire de saisie.</li>\n  <li>Modification de publications : Il permet de modifier les articles existants, que ce soit pour corriger des erreurs, ajouter du contenu supplémentaire ou mettre à jour les informations.</li>\n  <li>Suppression de publications : Il offre la possibilité de supprimer des publications indésirables ou obsolètes.</li>\n  <li>Gestion des catégories et des balises : Il permet d\'organiser les publications en catégories ou en utilisant des balises pour une meilleure classification et une navigation plus facile.</li>\n  <li>Fonctionnalités d\'édition avancées : Il peut offrir des options d\'édition avancées telles que la mise en forme du texte, l\'ajout d\'images, de vidéos ou d\'autres médias, l\'insertion de liens, etc.</li>\n  <li>Gestion des commentaires : Dans certains cas, un post manager peut également prendre en charge la gestion des commentaires associés à chaque publication, permettant aux utilisateurs de modérer les commentaires ou d\'y répondre.</li>\n  <li>Fonctionnalités de recherche et de filtrage : Il peut fournir des fonctionnalités de recherche pour trouver rapidement des publications spécifiques, ainsi que des options de filtrage pour afficher des publications en fonction de critères spécifiques tels que la date, l\'auteur, les catégories, les balises, etc.</li>\n</ul><br><br>\n\n<h3>Compétences requises :</h3><br><br>\n<ul>\n  <li>Connaissance en gestion des ressources humaines : Une solide compréhension des principes et des pratiques de la gestion des ressources humaines est essentielle.</li>\n  <li>Cela comprend la connaissance des lois du travail, des politiques et des procédures relatives à l\'embauche, à la formation, à la rémunération, à la gestion des performances, à la résolution des conflits, etc.</li>\n  <li>Compétences en recrutement et sélection : La capacité à mener des processus de recrutement efficaces, à évaluer les candidats, à mener des entrevues, à effectuer des vérifications des antécédents et à prendre des décisions éclairées sur les nouvelles embauches.</li>\n  <li>Compétences en formation et développement : La capacité à identifier les besoins de formation, à concevoir et à fournir des programmes de formation adaptés, à évaluer l\'efficacité de la formation et à soutenir le développement professionnel des employés.</li>\n</ul>', '2021-10-20', '2022-01-22'),
(3, 'manageur', '<style>\n  \n\n  ul {\n    list-style-type: square;\n    left: 90px;\n    color:white;\n  }\n\n  li {\n    margin-bottom: 10px;\n    font-family: \'Times New Roman\', Times, serif;\n    left: 90px;\n  }\n\n  h3 {\n    color:silver;\n  }\n\n  p {\n    color:white;\n  }\n\n\n  \n</style>\n<br><br>\n<h3>Fonctionnalités d\'un post manager :</h3><br><br>\n<ul>\n  <li>Création de publications : Il permet aux utilisateurs d\'écrire et de publier de nouveaux articles en fournissant un éditeur de texte ou un formulaire de saisie.</li>\n  <li>Modification de publications : Il permet de modifier les articles existants, que ce soit pour corriger des erreurs, ajouter du contenu supplémentaire ou mettre à jour les informations.</li>\n  <li>Suppression de publications : Il offre la possibilité de supprimer des publications indésirables ou obsolètes.</li>\n  <li>Gestion des catégories et des balises : Il permet d\'organiser les publications en catégories ou en utilisant des balises pour une meilleure classification et une navigation plus facile.</li>\n  <li>Fonctionnalités d\'édition avancées : Il peut offrir des options d\'édition avancées telles que la mise en forme du texte, l\'ajout d\'images, de vidéos ou d\'autres médias, l\'insertion de liens, etc.</li>\n  <li>Gestion des commentaires : Dans certains cas, un post manager peut également prendre en charge la gestion des commentaires associés à chaque publication, permettant aux utilisateurs de modérer les commentaires ou d\'y répondre.</li>\n  <li>Fonctionnalités de recherche et de filtrage : Il peut fournir des fonctionnalités de recherche pour trouver rapidement des publications spécifiques, ainsi que des options de filtrage pour afficher des publications en fonction de critères spécifiques tels que la date, l\'auteur, les catégories, les balises, etc.</li>\n</ul><br><br>\n\n<h3>Compétences requises :</h3><br><br>\n<ul>\n  <li>Connaissance en gestion des ressources humaines : Une solide compréhension des principes et des pratiques de la gestion des ressources humaines est essentielle.</li>\n  <li>Cela comprend la connaissance des lois du travail, des politiques et des procédures relatives à l\'embauche, à la formation, à la rémunération, à la gestion des performances, à la résolution des conflits, etc.</li>\n  <li>Compétences en recrutement et sélection : La capacité à mener des processus de recrutement efficaces, à évaluer les candidats, à mener des entrevues, à effectuer des vérifications des antécédents et à prendre des décisions éclairées sur les nouvelles embauches.</li>\n  <li>Compétences en formation et développement : La capacité à identifier les besoins de formation, à concevoir et à fournir des programmes de formation adaptés, à évaluer l\'efficacité de la formation et à soutenir le développement professionnel des employés.</li>\n</ul>', '2023-02-10', '2023-07-10'),
(9, 'aboubaker', 'salut', '2023-11-24', '2023-11-11');

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `id_postuler` int(4) NOT NULL,
  `id_candidats` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `date_postulation` datetime NOT NULL DEFAULT current_timestamp(),
  `cv` longblob NOT NULL,
  `lettre` longblob NOT NULL,
  `chemin_fichier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role1`
--

CREATE TABLE `role1` (
  `id_role` int(100) NOT NULL DEFAULT 1,
  `nom_role` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role1`
--

INSERT INTO `role1` (`id_role`, `nom_role`) VALUES
(1, 'candidat'),
(2, 'employer'),
(3, 'manageur'),
(1, 'candidat'),
(2, 'employer'),
(3, 'manageur');

-- --------------------------------------------------------

--
-- Structure de la table `salaires`
--

CREATE TABLE `salaires` (
  `id_salaires` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `commentaire` varchar(200) DEFAULT NULL,
  `statut` enum('En attente','pris') DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salaires_employes`
--

CREATE TABLE `salaires_employes` (
  `id_salaires` int(11) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `mois` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salaires_employes`
--

INSERT INTO `salaires_employes` (`id_salaires`, `id_employe`, `mois`) VALUES
(1, 1, '2023-10-16');

-- --------------------------------------------------------

--
-- Structure de la table `sanctions`
--

CREATE TABLE `sanctions` (
  `id_sanctions` int(11) NOT NULL,
  `id_type_sanctions` int(11) NOT NULL,
  `date_sanction` date NOT NULL,
  `commentaire` varchar(200) DEFAULT NULL,
  `id_employe` int(11) DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sanctions`
--

INSERT INTO `sanctions` (`id_sanctions`, `id_type_sanctions`, `date_sanction`, `commentaire`, `id_employe`, `date_fin`) VALUES
(3, 1, '2023-11-02', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 3, '2023-11-03'),
(4, 5, '2023-11-10', 'aboubaker', 3, '2023-12-01');

-- --------------------------------------------------------

--
-- Structure de la table `types_avantages`
--

CREATE TABLE `types_avantages` (
  `id_types_avantages` int(11) NOT NULL,
  `type_avantage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `types_avantages`
--

INSERT INTO `types_avantages` (`id_types_avantages`, `type_avantage`) VALUES
(1, 'Promotion'),
(2, 'Assurances santé'),
(3, 'congés payés'),
(4, 'Prime');

-- --------------------------------------------------------

--
-- Structure de la table `type_absences`
--

CREATE TABLE `type_absences` (
  `id_type_absences` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_absences`
--

INSERT INTO `type_absences` (`id_type_absences`, `titre`) VALUES
(1, 'Malade'),
(2, 'Cas personnel'),
(3, 'Mariage'),
(1, 'Malade'),
(2, 'Cas personnel'),
(3, 'Mariage');

-- --------------------------------------------------------

--
-- Structure de la table `type_affectation`
--

CREATE TABLE `type_affectation` (
  `id_type_affectation` int(11) NOT NULL,
  `departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_affectation`
--

INSERT INTO `type_affectation` (`id_type_affectation`, `departement`) VALUES
(1, 'Recrutement et Acquisition de Talents '),
(2, 'Formation et Développement'),
(3, 'Gestion des Performances'),
(4, 'Santé et Sécurité au Travail'),
(5, 'Développement Organisationnel');

-- --------------------------------------------------------

--
-- Structure de la table `type_conge`
--

CREATE TABLE `type_conge` (
  `id_type_conge` int(11) NOT NULL,
  `type_conge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_conge`
--

INSERT INTO `type_conge` (`id_type_conge`, `type_conge`) VALUES
(1, 'malade'),
(2, 'Deuil'),
(3, 'Probleme'),
(1, 'malade'),
(2, 'Deuil'),
(3, 'Probleme');

-- --------------------------------------------------------

--
-- Structure de la table `type_sanctions`
--

CREATE TABLE `type_sanctions` (
  `id_type_sanctions` int(11) NOT NULL,
  `type_sanction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_sanctions`
--

INSERT INTO `type_sanctions` (`id_type_sanctions`, `type_sanction`) VALUES
(1, 'Avertissement ou blâme'),
(2, 'Mise à pied'),
(3, 'Mutation'),
(4, 'Rétrogradation'),
(5, 'Licenciement');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `id_role` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `nom_utilisateur`, `mot_de_passe`, `id_role`) VALUES
(1, 'yacin', '12345678', 2),
(2, 'sahal', '1234', 1),
(3, 'Kamil', '11111111', 2),
(4, 'Ali', '65543', 2),
(5, 'omar', '11111111', 2),
(6, 'aden', '12345', 3),
(7, 'marwo', '12345', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id_absences`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `ID_Manager` (`ID_Manager`);

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id_affectation`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `id_type_affectation` (`id_type_affectation`);

--
-- Index pour la table `avantages_sociaux`
--
ALTER TABLE `avantages_sociaux`
  ADD PRIMARY KEY (`id_avantages_sociaux`),
  ADD KEY `id_types_avantages` (`id_types_avantages`),
  ADD KEY `id_employe` (`id_employe`);

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id_candidats`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande_congé`
--
ALTER TABLE `demande_congé`
  ADD PRIMARY KEY (`id_congé`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `id_type_conge` (`id_type_conge`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id_employe`),
  ADD UNIQUE KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `justificatifs`
--
ALTER TABLE `justificatifs`
  ADD PRIMARY KEY (`ID_Justificatif`),
  ADD KEY `id_absences` (`id_absences`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id_offres`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id_postuler`),
  ADD KEY `id_candidats` (`id_candidats`),
  ADD KEY `id_offre` (`id_offre`);

--
-- Index pour la table `salaires`
--
ALTER TABLE `salaires`
  ADD PRIMARY KEY (`id_salaires`);

--
-- Index pour la table `salaires_employes`
--
ALTER TABLE `salaires_employes`
  ADD PRIMARY KEY (`id_salaires`,`id_employe`),
  ADD KEY `id_employe` (`id_employe`);

--
-- Index pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id_sanctions`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `id_type_sanctions` (`id_type_sanctions`);

--
-- Index pour la table `types_avantages`
--
ALTER TABLE `types_avantages`
  ADD PRIMARY KEY (`id_types_avantages`);

--
-- Index pour la table `type_affectation`
--
ALTER TABLE `type_affectation`
  ADD PRIMARY KEY (`id_type_affectation`);

--
-- Index pour la table `type_sanctions`
--
ALTER TABLE `type_sanctions`
  ADD PRIMARY KEY (`id_type_sanctions`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id_absences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id_affectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `avantages_sociaux`
--
ALTER TABLE `avantages_sociaux`
  MODIFY `id_avantages_sociaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `demande_congé`
--
ALTER TABLE `demande_congé`
  MODIFY `id_congé` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `justificatifs`
--
ALTER TABLE `justificatifs`
  MODIFY `ID_Justificatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `id_offres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id_postuler` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id_sanctions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `types_avantages`
--
ALTER TABLE `types_avantages`
  MODIFY `id_types_avantages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_affectation`
--
ALTER TABLE `type_affectation`
  MODIFY `id_type_affectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employes` (`id_employe`),
  ADD CONSTRAINT `absences_ibfk_2` FOREIGN KEY (`ID_Manager`) REFERENCES `employes` (`id_employe`);

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `affectation_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employes` (`id_employe`),
  ADD CONSTRAINT `affectation_ibfk_2` FOREIGN KEY (`id_type_affectation`) REFERENCES `type_affectation` (`id_type_affectation`);

--
-- Contraintes pour la table `justificatifs`
--
ALTER TABLE `justificatifs`
  ADD CONSTRAINT `justificatifs_ibfk_1` FOREIGN KEY (`id_absences`) REFERENCES `absences` (`id_absences`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
