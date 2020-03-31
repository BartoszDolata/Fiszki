-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Mar 2020, 21:00
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

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
  `tlumaczenie` varchar(80) COLLATE utf8mb4_polish_ci NOT NULL,
  `zestaw_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `fiszki`
--

INSERT INTO `fiszki` (`id_fiszki`, `tekst_fiszki`, `tlumaczenie`, `zestaw_id`) VALUES
(11, 'strona', 'website', 7),
(12, 'sieć', 'network', 7),
(13, 'światłowód', 'fibre', 7),
(18, 'sprzęt komputerowy', 'hardware', 6),
(19, 'interfejs graficzny', 'GUI', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `funkcja`
--

CREATE TABLE `funkcja` (
  `id_funkcji` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `funkcja`
--

INSERT INTO `funkcja` (`id_funkcji`, `nazwa`) VALUES
(1, 'administator'),
(2, 'nauczyciel'),
(3, 'uczen');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyk`
--

CREATE TABLE `jezyk` (
  `jezyk_id` int(11) NOT NULL,
  `jezyk_nazwa` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `jezyk`
--

INSERT INTO `jezyk` (`jezyk_id`, `jezyk_nazwa`) VALUES
(1, 'Angielski'),
(2, 'Niemiecki'),
(3, 'Francuski'),
(4, 'Hiszpański');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id_klasy` int(11) NOT NULL,
  `symbol_klasy` varchar(6) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`id_klasy`, `symbol_klasy`) VALUES
(1, 'Brak'),
(2, '1A'),
(3, '2A'),
(4, '2B'),
(5, '3A'),
(6, '3B');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status`
--

CREATE TABLE `status` (
  `id_statusu` int(11) NOT NULL,
  `nazwa_statusu` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `status`
--

INSERT INTO `status` (`id_statusu`, `nazwa_statusu`) VALUES
(1, 'aktywny'),
(2, 'nieaktywny'),
(3, 'usuniety');

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

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`login`, `haslo`, `imie`, `nazwisko`, `funkcja_id`, `status_id`, `klasa_id`) VALUES
('administrator', '$argon2id$v=19$m=65536,t=4,p=1$R2ZFeGF3ckZUc0JXbGVPdA$P3BsWYktPRCiPKBOndPxfDE+DMZ+lyDBqUVj6Pvyn7c', 'Jan', 'Ważny', 1, 1, 1),
('nauczyciel', '$argon2id$v=19$m=65536,t=4,p=1$RFROcXNnakV3ejM4VVFnQw$6Qa02K6sKo9OO1ggPNVTm8wH8jS/PahhbBp+BzIrkMs', 'Jan', 'Kowalski', 2, 1, 1),
('uczen', '$argon2id$v=19$m=65536,t=4,p=1$elcuaXVFUWcvQ2FjT1FINw$qV3Djo3JYGz6qvknq6bZg0D8EYvY7uLeib4M82+l4do', 'Jan', 'Kowalski', 3, 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zestaw`
--

CREATE TABLE `zestaw` (
  `id_zestawu` int(11) NOT NULL,
  `nazwa_zestawu` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `jezyk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zestaw`
--

INSERT INTO `zestaw` (`id_zestawu`, `nazwa_zestawu`, `jezyk_id`) VALUES
(6, 'Komputer', 1),
(7, 'Sieci', 1);

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
  ADD PRIMARY KEY (`jezyk_id`);

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
-- AUTO_INCREMENT dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  MODIFY `id_fiszki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `funkcja`
--
ALTER TABLE `funkcja`
  MODIFY `id_funkcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `jezyk`
--
ALTER TABLE `jezyk`
  MODIFY `jezyk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `zestaw`
--
ALTER TABLE `zestaw`
  MODIFY `id_zestawu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `Zestaw_fk0` FOREIGN KEY (`jezyk_id`) REFERENCES `jezyk` (`jezyk_id`);

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
