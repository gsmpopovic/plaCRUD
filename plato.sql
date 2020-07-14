-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 04:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plato`
--

-- --------------------------------------------------------

--
-- Table structure for table `meno`
--

CREATE TABLE `meno` (
  `id` int(11) NOT NULL,
  `idiom` text NOT NULL,
  `occurence` int(27) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meno`
--

INSERT INTO `meno` (`id`, `idiom`, `occurence`) VALUES
(1, 'ἀλλὰ μὴν', 5),
(2, 'οὐ δῆτα', 7),
(3, 'τί δή', 4),
(4, 'πάνυ γε', 27),
(5, 'πάνυ μὲν οὖν', 6),
(7, 'καὶ μὴν', 5),
(8, 'τί δέ;', 4),
(9, 'τί γὰρ ἄλλο;', 1),
(10, 'μάλιστα', 10),
(11, 'οὐκ ἔμοιγε', 7),
(12, 'οἷον ', 18),
(13, 'εἰ βούλει', 2),
(14, 'πῶς γὰρ οὔ;', 2),
(15, 'πῶς λέγεις', 2),
(16, 'ἔστι ταῦτα', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meno`
--
ALTER TABLE `meno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meno`
--
ALTER TABLE `meno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
