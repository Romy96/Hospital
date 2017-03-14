-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 mrt 2017 om 13:28
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `hospital`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Gegevens worden geëxporteerd voor tabel `client`
--

INSERT INTO `client` (`id`, `name`) VALUES
(1, 'Bobbie'),
(6, 'Kees'),
(2, 'Minoes'),
(22, 'Thomas');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_pet` varchar(50) DEFAULT NULL,
  `name_client` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `status` text,
  PRIMARY KEY (`id`),
  KEY `species` (`species`),
  KEY `name_client` (`name_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden geëxporteerd voor tabel `patient`
--

INSERT INTO `patient` (`id`, `name_pet`, `name_client`, `gender`, `species`, `status`) VALUES
(1, 'Bobbie', NULL, 'man', 'hond', 'Koorts, eet slecht, blaft veel te veel'),
(2, 'Minoes', NULL, 'vrouw', 'kat', 'Drinkt niet, haaruitval, mager'),
(3, 'Kees', NULL, 'man', 'hond', 'Eet te veel, vetzucht, jankt en kotst');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `species`
--

CREATE TABLE IF NOT EXISTS `species` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `species` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `species` (`species`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `species`
--

INSERT INTO `species` (`id`, `species`) VALUES
(1, 'hond'),
(2, 'kat'),
(5, 'reptiel');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_patient_client` FOREIGN KEY (`name_client`) REFERENCES `client` (`name`),
  ADD CONSTRAINT `FK_patient_species` FOREIGN KEY (`species`) REFERENCES `species` (`species`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
