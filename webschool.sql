-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 25 mars 2024 à 23:04
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
-- Base de données : `webschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `titre_admin` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passwordd` varchar(40) NOT NULL
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
(24, 'Secrétaire', 'IMOLO Bertrand', '-è_à)9\"é5\'3'),
(29, 'Secrétaire', 'POLO Jean', '_èé\"ç\"5é3d'),
(30, 'Surveillant', 'TASHALA Eddy', '-(_ç\"6854rgn');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `annee` text NOT NULL,
  `code_classe` text NOT NULL,
  `serie` text NOT NULL,
  `groupe` text NOT NULL,
  `nom_classe` text NOT NULL,
  `cycle` text NOT NULL,
  `numordre` text NOT NULL,
  `examen` text NOT NULL,
  `max_eff` text NOT NULL,
  `scolarite` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`annee`, `code_classe`, `serie`, `groupe`, `nom_classe`, `cycle`, `numordre`, `examen`, `max_eff`, `scolarite`, `created_at`, `updated_at`) VALUES
('2024', 'Maternelle', 'NA', 'A', 'Maternelle', 'Primaire', '1', '0', '40', '40000', NULL, NULL),
('2024', 'CI', 'NA', 'A', 'Cours d\'Initiation', 'Primaire', '2', '0', '40', '35000', NULL, NULL),
('2024', 'CP', 'NA', 'A', 'Cours Préparatoire', 'Primaire', '3', '0', '40', '45000', NULL, NULL),
('2024', 'CE1', 'NA', 'A', 'Cours Elementaire 1', 'Primaire', '4', '0', '40', '50000', NULL, NULL),
('2024', 'CE2', 'NA', 'A', 'Cours Elementaire 2', 'Primaire', '5', '0', '40', '55000', NULL, NULL),
('2024', 'CM1', 'NA', 'A', 'Cours Moyen 1', 'Primaire', '6', '0', '40', '65000', NULL, NULL),
('2024', 'CM2', 'NA', 'A', 'Cours Moyen 2', 'Primaire', '7', '1', '40', '70000', NULL, NULL),
('2024', '6eme', 'NA', 'A', 'Sixième', 'College', '8', '0', '40', '70000', NULL, NULL),
('2024', '5eme', 'NA', 'A', 'Cinquième', 'College', '9', '0', '40', '80000', NULL, NULL),
('2024', '4eme', 'ML', 'A', 'Quatrième', 'Moderne Long', '10', '0', '40', '85000', NULL, NULL),
('2024', '4eme', 'MC', 'A', 'Quatrième', 'Moderne Court', '10', '0', '40', '85000', NULL, NULL),
('2024', '4eme', 'NA', 'A', 'Quatrième', 'Moderne Court', '10', '0', '40', '85000', NULL, NULL),
('2024', '3eme', 'ML', 'A', 'Troisième', 'Moderne Long', '11', '1', '40', '90000', NULL, NULL),
('2024', '3eme', 'NA', 'A', 'Troisième', 'College', '11', '1', '40', '90000', NULL, NULL),
('2024', '3eme', 'MC', 'A', 'Troisième ', 'Moderne Court', '11', '1', '40', '90000', NULL, NULL),
('2024', '2dne', 'AB', 'A', 'Seconde AB', 'College', '12', '0', '40', '95000', NULL, NULL),
('2024', '2dne', 'CD', 'A', 'Seconde CD', 'College', '12', '0', '40', '95000', NULL, NULL),
('2024', '1ere', 'A1', 'A', 'Première A1', 'College', '13', '0', '40', '100000', NULL, NULL),
('2024', '1ere', 'A2', 'A', 'Première A2', 'College', '13', '0', '40', '100000', NULL, NULL),
('2024', '1ere', 'B', 'A', 'Première B', 'College', '13', '0', '40', '100000', NULL, NULL),
('2024', '1ere', 'C', 'A', 'Première C', 'College', '13', '0', '40', '100000', NULL, NULL),
('2024', '1ere', 'D', 'A', 'Première D', 'College', '13', '0', '40', '100000', NULL, NULL),
('2024', 'Tle', 'A1', 'A', 'Terminale A1', 'College', '14', '1', '40', '120000', NULL, NULL),
('2024', 'Tle', 'A2', 'A', 'Terminale A2', 'College', '14', '1', '40', '120000', NULL, NULL),
('2024', 'Tle', 'B', 'A', 'Terminale B', 'College', '14', '1', '40', '120000', NULL, NULL),
('2024', 'Tle', 'C', 'A', 'Terminale C', 'College', '14', '1', '40', '120000', NULL, NULL),
('2024', 'Tle', 'D', 'A', 'Terminale D', 'College', '14', '1', '40', '120000', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `annee` varchar(255) NOT NULL,
  `mat_eleve` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_de_naissance` varchar(255) NOT NULL,
  `adresse_eleve` varchar(255) NOT NULL,
  `code_classe` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `groupe` varchar(255) NOT NULL,
  `ecole_de_provenance` varchar(255) DEFAULT NULL,
  `apte_sport` varchar(255) NOT NULL,
  `personne_contacter` varchar(255) NOT NULL,
  `nom_parent` varchar(255) NOT NULL,
  `prenom_parent` varchar(255) NOT NULL,
  `num_parent` varchar(255) NOT NULL,
  `email_parent` varchar(255) NOT NULL,
  `profession_parent` varchar(255) NOT NULL,
  `statut_parent` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`annee`, `mat_eleve`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `adresse_eleve`, `code_classe`, `serie`, `groupe`, `ecole_de_provenance`, `apte_sport`, `personne_contacter`, `nom_parent`, `prenom_parent`, `num_parent`, `email_parent`, `profession_parent`, `statut_parent`, `created_at`, `updated_at`) VALUES
('2024', '00000001', 'SALVATOR', 'Patnel', 'Masculin', '2002-12-14', 'Cocotomey', '4eme', 'NA', 'A', NULL, 'Oui', '98566469', 'SALVATOR', 'Patnel', '96635241', 'aureltchanhouin@gmail.com', 'Programmeur', 'Papa', '2024-03-25 10:07:06', '2024-03-25 10:07:06'),
('2024', '00000002', 'TCHANKPANA', 'Koroko', 'Masculin', '2003-10-15', 'Atrokpocodji', '2dne', 'CD', 'A', NULL, 'Oui', '95858741', 'TCHANKPANA', 'Koroko', '98854142', 'koroko@gmail.com', 'Musicien', 'Papa', '2024-03-25 16:05:59', '2024-03-25 16:05:59');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_23_170219_create_eleves_table', 1),
(6, '2024_03_24_193550_create_classes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`annee`,`mat_eleve`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
