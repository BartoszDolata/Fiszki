-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lis 2019, 13:31
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `database`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki`
--

CREATE TABLE `fiszki` (
  `id_fiszki` int(11) NOT NULL,
  `tekst_fiszki` varchar(80) COLLATE utf8mb4_polish_ci NOT NULL,
  `tłumaczenie` varchar(80) COLLATE utf8mb4_polish_ci NOT NULL,
  `zestaw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `funkcja`
--

CREATE TABLE `funkcja` (
  `id_funkcji` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyk`
--

CREATE TABLE `jezyk` (
  `jezyki_id` int(11) NOT NULL,
  `jezyk_nazwa` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id_klasy` int(11) NOT NULL,
  `symbol_klasy` varchar(6) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `id_statusu` int(11) NOT NULL,
  `nazwa_statusu` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `login` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `imie` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `funkcja_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `klasa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestaw`
--

CREATE TABLE `zestaw` (
  `id_zestawu` int(11) NOT NULL,
  `nazwa_zestawu` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `jezyk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestaw_klasy`
--

CREATE TABLE `zestaw_klasy` (
  `klasa_id` int(11) NOT NULL,
  `zestaw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD PRIMARY KEY (`id_fiszki`),
  ADD KEY `Fiszki_fk0` (`zestaw_id`);

--
-- Indeksy dla tabeli `funkcja`
--
ALTER TABLE `funkcja`
  ADD PRIMARY KEY (`id_funkcji`);

--
-- Indeksy dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  ADD PRIMARY KEY (`jezyki_id`);

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id_klasy`);

--
-- Indeksy dla tabeli `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_statusu`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`login`),
  ADD KEY `Uzytkownik_fk0` (`funkcja_id`),
  ADD KEY `Uzytkownik_fk1` (`status_id`),
  ADD KEY `Uzytkownik_fk2` (`klasa_id`);

--
-- Indeksy dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  ADD PRIMARY KEY (`id_zestawu`),
  ADD KEY `Zestaw_fk0` (`jezyk_id`);

--
-- Indeksy dla tabeli `zestaw_klasy`
--
ALTER TABLE `zestaw_klasy`
  ADD PRIMARY KEY (`klasa_id`,`zestaw_id`),
  ADD KEY `Zestaw_klasy_fk1` (`zestaw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `funkcja`
--
ALTER TABLE `funkcja`
  MODIFY `id_funkcji` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  MODIFY `jezyki_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  MODIFY `id_zestawu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD CONSTRAINT `Fiszki_fk0` FOREIGN KEY (`zestaw_id`) REFERENCES `zestaw` (`id_zestawu`);

--
-- Ograniczenia dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD CONSTRAINT `Uzytkownik_fk0` FOREIGN KEY (`funkcja_id`) REFERENCES `funkcja` (`id_funkcji`),
  ADD CONSTRAINT `Uzytkownik_fk1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_statusu`),
  ADD CONSTRAINT `Uzytkownik_fk2` FOREIGN KEY (`klasa_id`) REFERENCES `klasa` (`id_klasy`);

--
-- Ograniczenia dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  ADD CONSTRAINT `Zestaw_fk0` FOREIGN KEY (`jezyk_id`) REFERENCES `jezyk` (`jezyki_id`);

--
-- Ograniczenia dla tabeli `zestaw_klasy`
--
ALTER TABLE `zestaw_klasy`
  ADD CONSTRAINT `Zestaw_klasy_fk0` FOREIGN KEY (`klasa_id`) REFERENCES `klasa` (`id_klasy`),
  ADD CONSTRAINT `Zestaw_klasy_fk1` FOREIGN KEY (`zestaw_id`) REFERENCES `zestaw` (`id_zestawu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
