-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Kwi 2022, 11:32
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Baza danych: `bet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `qwe`
--

CREATE TABLE `qwe` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `picsum_id` int(11) NOT NULL,
  `imagefile` varchar(500) NOT NULL,
  `author` varchar(30) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `qwe`
--
ALTER TABLE `qwe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `qwe`
--
ALTER TABLE `qwe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
