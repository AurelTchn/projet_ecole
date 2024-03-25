-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 05 mars 2024 à 15:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Webschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `titre_admin` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `passwordd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `titre_admin`, `username`, `passwordd`) VALUES
(1, 'Directeur', 'Pierre Simon', '\'(-è_ij'),
(2, 'Censeur', 'David GUIDISSOU', '(-è_à)é74'),
(3, 'Surveillant', 'Messah OSIMEN', '\'àénfke)'),
(4, 'Enseignant', 'Olivier MELGAN', '=)àç_è\"3+/*/'),
(5, 'Enseignant', 'MINTCHE Eduard', '\'(-è_çà853'),
(6, 'Censeur', 'Samuel VITCHE', 'é\"\'(-è_çà452'),
(11, 'Enseignant', 'Dossou Jean', '(-)enfp+32&'),
(21, 'Censeur', 'ZANNOU Edouard', '(\'-\"84+-'),
(22, 'Enseignant', 'TAYLOR Victor', 'èu\"7;6-+*ekfn'),
(23, 'Enseignant', 'TAYLOR Victor', 'èu\"7;6-+*ekfn'),
(24, 'Secrétaire', 'IMOLO Bertrand', '-è_à)9\"é5\'3'),
(25, 'Enseignant', 'IMOLO Bertrand', '-è_à)9\"é5\'3'),
(26, 'Secrétaire', 'POLO Jean', '_èé\"ç\"5é3d'),
(27, 'Secrétaire', 'POLO Jean', '_èé\"ç\"5é3d'),
(28, 'Secrétaire', 'POLO Jean', '_èé\"ç\"5é3d'),
(29, 'Secrétaire', 'POLO Jean', '_èé\"ç\"5é3d');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `annee` varchar(10) NOT NULL,
  `code_classe` varchar(32) NOT NULL,
  `serie` varchar(32) NOT NULL,
  `groupe` varchar(10) NOT NULL,
  `nom_classe` varchar(120) DEFAULT NULL,
  `cycle` varchar(32) DEFAULT NULL,
  `numordre` int(11) DEFAULT NULL,
  `examen` int(11) DEFAULT NULL,
  `max_eff` int(11) DEFAULT NULL,
  `scolarite` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`annee`, `code_classe`, `serie`, `groupe`, `nom_classe`, `cycle`, `numordre`, `examen`, `max_eff`, `scolarite`) VALUES
('2024', 'CI', 'NA', '', 'Cours d\'Initiation', 'Primaire', 1, 0, 40, 35000),
('2024', 'CP', 'NA', '', 'Cours Préparatoire', 'Primaire', 2, 0, 40, 45000),
('2024', 'CE1', 'NA', '', 'Cours Elementaire 1', 'Primaire', 3, 0, 40, 50000),
('2024', 'CE2', 'NA', '', 'Cours Elementaire 2', 'Primaire', 4, 0, 40, 55000),
('2024', 'CM1', 'NA', '', 'Cours Moyen 1', 'Primaire', 5, 0, 40, 65000),
('2024', 'CM2', 'NA', '', 'Cours Moyen 2', 'Primaire', 6, 1, 40, 70000),
('2024', '6eme', 'NA', '', 'Sixième', 'College', 7, 0, 40, 70000),
('2024', '5eme', 'NA', '', 'Cinquième', 'College', 8, 0, 40, 80000),
('2024', '4eme', 'ML', '', 'Quatrième', 'Moderne Long', 9, 0, 40, 85000),
('2024', '4eme', 'MC', '', 'Quatrième', 'Moderne Court', 9, 0, 40, 85000),
('2024', '4eme', 'NA', '', 'Quatrième', 'Moderne Court', 9, 0, 40, 85000),
('2024', '3eme', 'ML', '', 'Troisième', 'Moderne Long', 10, 1, 40, 90000),
('2024', '3eme', 'NA', '', 'Troisième', 'College', 10, 1, 40, 90000),
('2024', '3eme', 'MC', '', 'Troisième ', 'Moderne Court', 10, 1, 40, 90000),
('2024', '2dne', 'AB', '', 'Seconde AB', 'College', 11, 0, 40, 95000),
('2024', '2dne', 'CD', '', 'Seconde CD', 'College', 11, 0, 40, 95000),
('2024', '1ere', 'A1', '', 'Première A1', 'College', 12, 0, 40, 100000),
('2024', '1ere', 'A2', '', 'Première A2', 'College', 12, 0, 40, 100000),
('2024', '1ere', 'B', '', 'Première B', 'College', 12, 0, 40, 100000),
('2024', '1ere', 'C', '', 'Première C', 'College', 12, 0, 40, 100000),
('2024', '1ere', 'D', '', 'Première D', 'College', 12, 0, 40, 100000),
('2024', 'Tle', 'A1', '', 'Terminale A1', 'College', 13, 1, 40, 120000),
('2024', 'Tle', 'A2', '', 'Terminale A2', 'College', 13, 1, 40, 120000),
('2024', 'Tle', 'B', '', 'Terminale B', 'College', 13, 1, 40, 120000),
('2024', 'Tle', 'C', '', 'Terminale C', 'College', 13, 1, 40, 120000),
('2024', 'Tle', 'D', '', 'Terminale D', 'College', 49, 1, 40, 120000);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `annee` varchar(10) NOT NULL,
  `mat_eleve` varchar(15) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `code_classe` varchar(10) DEFAULT NULL,
  `serie` varchar(10) DEFAULT NULL,
  `groupe` varchar(10) DEFAULT NULL,
  `num_parent` varchar(20) DEFAULT NULL,
  `email_parent` varchar(50) DEFAULT NULL,
  `nom_parent` varchar(130) DEFAULT NULL,
  `profession_parent` varchar(40) DEFAULT NULL,
  `statut_parent` varchar(40) DEFAULT NULL,
  `date_de_naissance` varchar(20) DEFAULT NULL,
  `adresse_eleve` varchar(40) DEFAULT NULL,
  `ecole_de_provenance` varchar(40) DEFAULT NULL,
  `prenom_parent` varchar(40) NOT NULL,
  `apte_sport` varchar(10) NOT NULL,
  `personne_contacter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`annee`, `mat_eleve`, `nom`, `prenom`, `sexe`, `code_classe`, `serie`, `groupe`, `num_parent`, `email_parent`, `nom_parent`, `profession_parent`, `statut_parent`, `date_de_naissance`, `adresse_eleve`, `ecole_de_provenance`, `prenom_parent`, `apte_sport`, `personne_contacter`) VALUES
('2024', '00000001', 'MINTCHÉ', 'Féridma', 'Feminin', '1ere', 'C', 'A', '92717080', 'mintche1@yahoo.fr', 'MINTCHE', 'Programmeur', 'Maman', '2004-06-20', 'Vèdokô', 'CS les Pyramides', 'Salvana', 'Oui', 97601470),
('2024', '00000002', 'TASHU', 'Prunel', 'Masculin', 'Tle', 'C', 'A', '97009670', 'tashuala4@gmail.com', 'TASHUALA', 'Médécin', 'Tutrice', '2008-05-14', 'Viêtnam', 'CS les travailleurs', 'Bilganie', 'Oui', 92717080),
('2024', '00000003', 'SALVATOR', 'Kévin', 'Masculin', '2nde', 'A', 'A', '60211418', 'dalmine@gmail.com', 'SALVATOR', 'Enseignante', 'Maman', '2006-02-12', 'Godomey', 'CS La Plénitude', 'Dalmine', 'Non', 60211418),
('2024', '00000004', 'MOUSTAPHA', 'Eddy', 'Masculin', '3eme', 'ML', 'A', '98765211', 'abdul@gmail.com', 'MOUSTAPHA', 'Programmeur', 'Papa', '2008-05-12', 'Cocotomey', '', 'Elon', 'Oui', 97648240),
('2024', '00000005', 'SILVABOUM', 'Belnadonar', 'Masculin', '5eme', 'NA', 'A', '97855658', 'salvaro@gmail.com', 'SHAFT', 'Musicien', 'Papa', '1999-03-15', 'Zinflou', 'CS Amen', 'Salvaro', 'Oui', 98855112),
('2024', '00000006', 'XAMVIDI', 'Mélodie', 'Feminin', '1ere', 'A', 'A', '97451226', 'panamolin@gmail.com', 'XAMVIDI', 'Vendeur', 'Papa', '2003-08-14', 'Calavi', '', 'Panamolin', 'Oui', 68521412),
('2024', '00000007', 'TASHUALA', 'Yémila', 'Feminin', 'CE2', 'NA', 'A', '98585652', 'holigami@gmail.com', 'MILADIE', 'Gendarme', 'Tuteur', '2008-05-14', 'Bruxelle', 'CS La Racine', 'Holigami', 'Non', 61121418),
('2024', '00000008', 'KAMARINA', 'Malinarie', 'Feminin', 'CE2', 'NA', 'A', '98585652', 'fulle@gmail.com', 'LADINOU', 'Gendarme', 'Tuteur', '2008-05-14', 'Bruxelle', 'CS La Racine', 'Holigami', 'Non', 61121418),
('2024', '00000009', 'SIVALAN', 'Premael', 'Feminin', 'CP', 'NA', 'A', '98744112', 'julienne@gmail.com', 'SIVALAN', 'Styliste', 'Maman', '2008-02-17', 'Atrokpocodji', '', 'Julienne', 'Oui', 98144526),
('2024', '00000010', 'MELANIE', 'Primaelle', 'Masculin', '2dne', 'AB', 'A', '97020145', 'yehilan@gmail.com', 'YEHILAN', 'Programmeur', 'Papa', '12/08/2004', 'Cococodji', 'CEG Godomey', 'Xavier', 'Oui', 98856221),
('2024', '00000011', 'THEOU', 'Elie', 'Masculin', '3eme', 'MC', 'A', '62258559', 'oline@gmail.com', 'Olidia', 'Médecine', 'Papa', '2006-08-17', 'Cocotomey', 'CS Les Pyramides', 'Olinie', 'Oui', 68744112),
('2024', '00000013', 'GODO', 'Primaella', 'Feminin', 'CM1', 'NA', 'A', '58477541', 'elodie@gmail.com', 'kentin', 'sage femme', 'Maman', '2009-07-14', 'Cococodji', '', 'elodie', 'Oui', 69854241),
('2024', '00000018', 'Dossou', 'Zita', 'Feminin', '6eme', 'NA', 'A', '95565254', 'xavier@gmail.com', 'Dossou', 'Cultivateur', 'Papa', '2008-06-14', 'Lobozounkpa', 'CS La Plénitude', 'Xavier', 'Oui', 96857414),
('2024', '00000019', 'TCHANKPANA', 'Elon', 'Masculin', '2dne', 'CD', 'A', '66987456', 'raymond@gmail.com', 'TCHANKPANA', 'Designer', 'Papa', '2006-09-15', 'Cocotomey', 'CS Les Méridens', 'Raymond', 'Oui', 98855212),
('2024', '00000020', 'TOM', 'Larry', 'Masculin', '4eme', 'MC', 'A', '98857441', 'tomjerry@gmail.com', 'TOM', 'Infographe', 'Directeur', '2008-08-26', 'Fidjrossè', '0', 'Jerry', 'Oui', 96854112);

-- --------------------------------------------------------

--
-- Structure de la table `enseignement`
--

CREATE TABLE `enseignement` (
  `annee` varchar(10) NOT NULL,
  `code_classe` varchar(10) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `groupe` varchar(10) NOT NULL,
  `code_matiere` varchar(10) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `coefficient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `code_matiere` varchar(32) NOT NULL,
  `nom_matiere` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`code_matiere`, `nom_matiere`) VALUES
('ANG', 'Anglais'),
('PCT', 'Physique Chimie Technologie'),
('HIST-GEO', 'Histoire-Géegraphie'),
('ECM', 'Education Civiique et Morale'),
('MSC', 'Musique'),
('ESP', 'Espagnol'),
('ALL', 'Allemand'),
('FRAN', 'Français'),
('MATHS', 'Mathématiques'),
('SVT', 'Sciences de la Vie et de la Terre'),
('ECO', 'Economie'),
('PHI', 'Philosophie'),
('EPS', 'Education Physique et Sportive'),
('INFO', 'Informatique'),
('LECT', 'Lecture'),
('COMECR', 'Communication Ecrite'),
('CPTA', 'Comptabilité'),
('DSS', 'Dessin'),
('PNT', 'Peinture'),
('ES', 'Education Sociale'),
('EST', 'Education Scientifique et Technologique'),
('EE', 'Expression Ecrite'),
('EA', 'Education Artistique');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `annee` varchar(10) NOT NULL,
  `mat_eleve` int(11) NOT NULL,
  `code_matiere` varchar(10) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_session` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `annee` varchar(10) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `nom_prof` varchar(255) NOT NULL,
  `prenom_prof` varchar(255) DEFAULT NULL,
  `num_prof` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`annee`, `id_prof`, `nom_prof`, `prenom_prof`, `num_prof`, `mail`) VALUES
('2024', 1, 'AGOSSA', 'Léandre', '56577382', 'agoss@gmail.com'),
('2024', 2, 'HANMI', 'Robert', '54783412', 'hanber@gmail.com'),
('2024', 3, 'GOGAGA', 'Samson', '90874563', 'samgo@gmail.com'),
('2024', 4, 'TINKPON', 'Géoffroy', '90086732', 'geotin@gmail.com'),
('2024', 5, 'ZANKPO', 'Isaac', '63458765', 'zisaac@gmail.com'),
('2024', 6, 'MINHOU', 'Jérémie', '65987634', 'minje@gmail.com'),
('2024', 7, 'ASSOGBA ', 'Hubert', '67542390', 'huberass@gmail.com'),
('2024', 8, 'ASSANI', 'Gontran', '94876544', 'assagon@gmail.com'),
('2024', 9, 'DE-SOUZA', 'Bello', '40876534', 'souzabello@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(11) NOT NULL,
  `nom_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id_session`, `nom_session`) VALUES
(1, 'Trimestre 1'),
(2, 'Trimestre 2'),
(3, 'Trimestre 3');

-- --------------------------------------------------------

--
-- Structure de la table `type_notes`
--

CREATE TABLE `type_notes` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_notes`
--

INSERT INTO `type_notes` (`id_type`, `nom_type`) VALUES
(1, 'Interrogation 1'),
(2, 'Interrogation 2'),
(3, 'Interrogation 3'),
(4, 'Devoir 1'),
(5, 'Devoir 2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`annee`,`code_classe`,`serie`,`groupe`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`annee`,`mat_eleve`);

--
-- Index pour la table `enseignement`
--
ALTER TABLE `enseignement`
  ADD PRIMARY KEY (`annee`,`code_classe`,`serie`,`groupe`,`code_matiere`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`code_matiere`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`annee`,`mat_eleve`,`code_matiere`,`id_type`,`id_session`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`annee`,`id_prof`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`);

--
-- Index pour la table `type_notes`
--
ALTER TABLE `type_notes`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
