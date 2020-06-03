-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 jun 2020 om 15:15
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aanmelden`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `email`, `wachtwoord`) VALUES
(1, 'test@test.com', '$2y$10$vThvi9qa/QX.TYTc0zjo9ukZktJEm7Hertu.qvogNaXcRnGDGsADK'),
(2, 'testers@gmail.com', '$2y$10$.XpU0.RNCHiaUBlGpCSP8e2IzunR/u62otqxk4UvB0vGmOCwSfQny'),
(3, 'teste@test.com', '$2y$10$zLDlhASSR5G/kuVPYjrHeeSl5EZdkR2TDgBN.0nPClVN3iibjkJzO'),
(4, 'asdf@gmail.com', '$2y$10$ZP2vQ0mCdRlH7LeO6G2ate0Lbmx6C.Oh5NmrXxO6MQgD9YTitLtcK'),
(5, 'nogeens@gmail.com', '$2y$10$5c.PhXa7Y/5oQsxRiXmIKeFIm5Ybjs4ziWCVNacddE.cEjCk4KA1m'),
(6, 'adsfasdf@gmail.com', '$2y$10$ZLrucZidl1R1n0A1gB.GT.ihwWn3..hOO9zv9t//3TGlfH/OjG7/u');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
