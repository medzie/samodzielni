-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2021, 22:20
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `samodzielni`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zbiorki`
--

CREATE TABLE `zbiorki` (
  `id` int(11) NOT NULL,
  `cel` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `opis` varchar(1000) COLLATE utf8mb4_polish_ci NOT NULL,
  `zebrano` int(11) NOT NULL,
  `potrzeba` double NOT NULL,
  `procent` int(11) NOT NULL,
  `brakuje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zbiorki`
--

INSERT INTO `zbiorki` (`id`, `cel`, `opis`, `zebrano`, `potrzeba`, `procent`, `brakuje`) VALUES
(1, 'Rehabilitacja Tomka', 'Tomek jest po wypadku i potrzebuje dobrze działających nóg bo wtedy może chodzić a tak to nie może chodzić.', 100, 1000, 10, 900);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zbiorki`
--
ALTER TABLE `zbiorki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `zbiorki`
--
ALTER TABLE `zbiorki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
