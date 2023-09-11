-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lut 2023, 10:34
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `biblia`
--

CREATE TABLE `biblia` (
  `autor` varchar(30) NOT NULL,
  `tytul` varchar(30) NOT NULL,
  `dostepnosc` varchar(1) NOT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `biblia`
--

INSERT INTO `biblia` (`autor`, `tytul`, `dostepnosc`, `cena`) VALUES
('Krzysiek Briks', 'Honorowi bohaterowie', 'T', 8),
('Krzysiek Briks', 'placze', 'N', 8),
('Nikko Nikkowski', 'Swajskie opowieści', 'T', 69.99),
('Nikko Nikkowski', 'Jak dbać o uszy', 'T', 6.9),
('Nikko Nikkowski', 'Przygody uszatka', 'N', 16.13),
('Dajwajo Matelski', 'CANTER STRIKO', 'T', 16.9),
('Dajwajo Matelski', 'Techniki klikania', 'T', 36.66),
('Dajwajo Matelski', 'Kolcki', 'N', 72.47);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
