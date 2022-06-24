-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 juin 2022 à 12:14
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
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article` text,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `article`, `id_utilisateur`, `id_categorie`, `date`) VALUES
(79, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 12, 4, '2023-06-22 09:36:49'),
(80, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 12, 4, '2024-06-22 07:58:46'),
(78, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 12, 1, '2023-06-22 06:24:35'),
(81, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 12, 2, '2024-06-22 08:17:59'),
(77, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 12, 2, '2023-06-22 06:19:41'),
(82, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 21, 4, '2024-06-22 07:58:46'),
(83, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 21, 4, '2024-06-22 07:58:46'),
(84, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 21, 4, '2024-06-22 07:58:46'),
(85, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 21, 4, '2024-06-22 07:58:46'),
(86, 'Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab Ut odit necessitatibus ea nisi sunt aut alias velit. A nobis similique ea possimus dolores non voluptatem expedita. Quo enim accusamus qui ducimus dolore eos omnis quaerat cum totam numquam. Est Quis voluptatem et rerum neque ut numquam similique aut eius molestias! Qui quasi delectus qui sint lab...', 21, 4, '2024-06-22 07:58:46');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(3, 'Séries'),
(2, 'Cinéma'),
(1, 'Tous'),
(4, 'Anims');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(150) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_article`, `id_utilisateur`, `date`) VALUES
(51, 'azdazdadadada', 1, 12, '2022-06-22 08:37:33'),
(49, 'je suis albert et je souhaite mettre un commentaire ', 3, 21, '2022-06-21 23:01:47'),
(50, 'très bonne article qui permet de se rendre compte des dangers du lorem ipsum ! Je partage à tout mes proche. :)  ', 2, 12, '2022-06-22 04:14:36'),
(57, 'ijzdioajzdioazdazdazda', 78, 12, '2023-06-22 09:37:48'),
(58, 'zefzefze', 77, 12, '2023-06-22 04:22:19'),
(59, 'génial cet article ! ', 86, 12, '2024-06-22 08:28:06'),
(60, 'je suis un commentaire', 86, 12, '2024-06-22 08:28:20'),
(61, 'je suis un commentaire', 86, 12, '2024-06-22 08:28:22'),
(62, 'je suis un commentaire', 86, 12, '2024-06-22 08:28:24'),
(63, 'je suis un commentaire', 86, 12, '2024-06-22 08:28:26'),
(64, 'je suis un commentaire', 86, 12, '2024-06-22 08:28:27');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id`, `nom`) VALUES
(1, 'utilisateur'),
(42, 'moderateur'),
(1337, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `src` varchar(1024) NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `src`, `id_article`) VALUES
(28, '/upload/cinema.jpg', 77),
(29, '/upload/8414216_hand-holding-plug-for-charging-of-an-electric-car-750x410.jpg', 78),
(30, '/upload/Capture.PNG', 79),
(31, '/upload/porsche-4795517_150.jpg', 80),
(32, '/upload/Bienvenue.jpg', 81),
(33, '/upload/Bienvenue.jpg', 82),
(34, '/upload/Bienvenue.jpg', 83),
(35, '/upload/Bienvenue.jpg', 84),
(36, '/upload/Bienvenue.jpg', 85),
(37, '/upload/Bienvenue.jpg', 86);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_droits` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_droits` (`id_droits`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `id_droits`) VALUES
(16, 'test4', 'f0f5a997d1989792669861758ace216ebf1b48587376b7cc5e6b59cc8180cda3', 'test4@gmail.com', 1),
(12, 'criss', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'crissledreams@gmail.com', 1),
(15, 'test2', 'f0f5a997d1989792669861758ace216ebf1b48587376b7cc5e6b59cc8180cda3', 'test2@gmail.com', 1),
(17, 'test6', 'f0f5a997d1989792669861758ace216ebf1b48587376b7cc5e6b59cc8180cda3', 'test6gmail.com', 1),
(19, 'test8', 'f0f5a997d1989792669861758ace216ebf1b48587376b7cc5e6b59cc8180cda3', 'test5@gmail.com', 1),
(20, 'test9', 'f0f5a997d1989792669861758ace216ebf1b48587376b7cc5e6b59cc8180cda3', 'test5@gmail.com', 1),
(21, 'albert', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', 'crissledreams41@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
