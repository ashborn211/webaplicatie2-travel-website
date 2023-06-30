-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2023 om 08:45
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-menu`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminaccount`
--

CREATE TABLE `adminaccount` (
  `username` varchar(255) NOT NULL,
  `emailadress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `adminaccount`
--

INSERT INTO `adminaccount` (`username`, `emailadress`, `password`, `id`) VALUES
('admin', 'admin@gmail.com', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeken`
--

CREATE TABLE `boeken` (
  `username` varchar(255) NOT NULL,
  `countryname` varchar(255) NOT NULL,
  `placename` varchar(255) NOT NULL,
  `startdatum` date NOT NULL,
  `tijd` time NOT NULL,
  `price` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `aprove` varchar(255) NOT NULL,
  `einddatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `boeken`
--

INSERT INTO `boeken` (`username`, `countryname`, `placename`, `startdatum`, `tijd`, `price`, `id`, `aprove`, `einddatum`) VALUES
('velican009', 'japan', 'tokyo', '2023-06-01', '12:02:00', '199', 4, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Netherlands'),
(2, 'China'),
(3, 'japan'),
(4, 'France');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destinations`
--

CREATE TABLE `destinations` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prijs` float NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `prijs`, `date`, `path`, `country`) VALUES
(3, 'amsterdam', 199.23, '2023-06-30', 'amsterdam.png', 'nederland'),
(4, 'tokyo', 345678, '2023-06-27', 'tokyo.png', 'japan');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destination_users`
--

CREATE TABLE `destination_users` (
  `destination_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `persons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `destination_users`
--

INSERT INTO `destination_users` (`destination_id`, `users_id`, `datum`, `persons`) VALUES
(1, 1, '2023-06-09', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `places`
--

CREATE TABLE `places` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `places`
--

INSERT INTO `places` (`id`, `name`, `country_id`) VALUES
(1, 'Nijmegen', 1),
(2, 'Wuhan', 2),
(3, 'Tokyo', 3),
(4, 'Paris', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `emailadress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`username`, `emailadress`, `password`, `id`) VALUES
('josh123', 'josh@gmail.com', 'josh009@', 1),
('admin', 'admin@gmail.com', 'admin1234', 2),
('admin@gmail.com', 'jake@gmail.com', '12345', 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `boeken`
--
ALTER TABLE `boeken`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `places`
--
ALTER TABLE `places`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
