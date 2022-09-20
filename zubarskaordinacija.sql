-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 04:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zubarskaordinacija`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `IDKorisnika` int(5) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  `Ime` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `KorisnickoIme` varchar(30) NOT NULL,
  `Sifra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IDKorisnika`, `Prezime`, `Ime`, `Email`, `KorisnickoIme`, `Sifra`) VALUES
(1, 'nina', 'nina', 'nina', 'nina', 'nina');

-- --------------------------------------------------------

--
-- Table structure for table `lecenje`
--

CREATE TABLE `lecenje` (
  `IDLecenja` int(5) NOT NULL,
  `IDPacijenta` int(5) NOT NULL,
  `IDZubara` int(5) NOT NULL,
  `IDPregleda` int(5) NOT NULL,
  `NazivLecenja` varchar(50) NOT NULL,
  `OpisLecenja` text NOT NULL,
  `Cena` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pacijent`
--

CREATE TABLE `pacijent` (
  `IDPacijenta` int(5) NOT NULL,
  `ImePacijenta` varchar(30) NOT NULL,
  `PrezimePacijenta` varchar(30) NOT NULL,
  `DatumRodjenja` date NOT NULL,
  `TelefonPacijenta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pregleda`
--

CREATE TABLE `pregleda` (
  `IDPregleda` int(5) NOT NULL,
  `IDZubara` int(5) NOT NULL,
  `IDPacijenta` int(5) NOT NULL,
  `Datum` date NOT NULL,
  `Vreme` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zubar`
--

CREATE TABLE `zubar` (
  `IDZubara` int(5) NOT NULL,
  `ImeZubara` varchar(30) NOT NULL,
  `PrezimeZubara` varchar(30) NOT NULL,
  `Specijalizacija` varchar(25) NOT NULL,
  `TelefonZubara` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`IDKorisnika`);

--
-- Indexes for table `lecenje`
--
ALTER TABLE `lecenje`
  ADD PRIMARY KEY (`IDLecenja`),
  ADD KEY `IDPacijenta` (`IDPacijenta`,`IDZubara`,`IDPregleda`),
  ADD KEY `IDZubara` (`IDZubara`),
  ADD KEY `IDPregleda` (`IDPregleda`);

--
-- Indexes for table `pacijent`
--
ALTER TABLE `pacijent`
  ADD PRIMARY KEY (`IDPacijenta`);

--
-- Indexes for table `pregleda`
--
ALTER TABLE `pregleda`
  ADD PRIMARY KEY (`IDPregleda`),
  ADD KEY `IDZubara` (`IDZubara`,`IDPacijenta`),
  ADD KEY `IDPacijenta` (`IDPacijenta`);

--
-- Indexes for table `zubar`
--
ALTER TABLE `zubar`
  ADD PRIMARY KEY (`IDZubara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `IDKorisnika` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecenje`
--
ALTER TABLE `lecenje`
  MODIFY `IDLecenja` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pacijent`
--
ALTER TABLE `pacijent`
  MODIFY `IDPacijenta` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pregleda`
--
ALTER TABLE `pregleda`
  MODIFY `IDPregleda` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zubar`
--
ALTER TABLE `zubar`
  MODIFY `IDZubara` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecenje`
--
ALTER TABLE `lecenje`
  ADD CONSTRAINT `lecenje_ibfk_1` FOREIGN KEY (`IDZubara`) REFERENCES `zubar` (`IDZubara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lecenje_ibfk_2` FOREIGN KEY (`IDPregleda`) REFERENCES `pregleda` (`IDPregleda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pacijent`
--
ALTER TABLE `pacijent`
  ADD CONSTRAINT `pacijent_ibfk_1` FOREIGN KEY (`IDPacijenta`) REFERENCES `lecenje` (`IDPacijenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pregleda`
--
ALTER TABLE `pregleda`
  ADD CONSTRAINT `pregleda_ibfk_1` FOREIGN KEY (`IDZubara`) REFERENCES `zubar` (`IDZubara`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pregleda_ibfk_2` FOREIGN KEY (`IDPacijenta`) REFERENCES `pacijent` (`IDPacijenta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
