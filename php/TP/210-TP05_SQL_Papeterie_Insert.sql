-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 avr. 2021 à 12:21
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `libelle_cat`) VALUES
(1, 'Ecriture'),
(2, 'Papeterie');

-- --------------------------------------------------------

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_art`, `libelle_art`, `prix_ht_art`, `code_art`, `promo_art`, `id_cat`) VALUES
(1, 'Classeur à anneaux', 3.5, '0019', 0, 2),
(2, 'Sous chemises', 1.45, '0010', 1, 2),
(3, 'Couvertures transparentes pour dossiers', 4.5, '0003', 0, 2),
(4, 'Stylos', 1.5, '0025', 1, 1),
(5, 'Gommes', 0.45, '0011', 0, 1),
(6, 'Boîte de 10 feutres', 4.25, '0005', 1,1);

-- --------------------------------------------------------

COMMIT;
