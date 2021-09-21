-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 mei 2021 om 13:40
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitacademy`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactgegevens`
--

CREATE TABLE `contactgegevens` (
  `id` int(11) NOT NULL,
  `Naam` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Bericht` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `reactie` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `reactie`) VALUES
(10, 'Mijn ervaring is pefect'),
(11, 'het was leuk\r\n'),
(12, '<p>het was leuk</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(13, '<p>het was leuk</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(14, '<p>het was leuk</p>\r\n\r\n<p>&nbsp;</p>\r\n');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactgegevens`
--
ALTER TABLE `contactgegevens`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactgegevens`
--
ALTER TABLE `contactgegevens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
