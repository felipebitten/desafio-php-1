-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Ago-2019 às 05:49
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `starwars`
--

CREATE TABLE `starwars` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `height` float NOT NULL,
  `mass` float NOT NULL,
  `hair_color` varchar(100) NOT NULL,
  `skin_color` varchar(100) NOT NULL,
  `eye_color` varchar(100) NOT NULL,
  `birth_year` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `homeworld` varchar(100) NOT NULL,
  `films` varchar(800) NOT NULL,
  `species` varchar(200) NOT NULL,
  `vehicles` varchar(600) NOT NULL,
  `starships` varchar(600) NOT NULL,
  `created` varchar(100) NOT NULL,
  `edited` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `starwars`
--

INSERT INTO `starwars` (`id`, `name`, `height`, `mass`, `hair_color`, `skin_color`, `eye_color`, `birth_year`, `gender`, `homeworld`, `films`, `species`, `vehicles`, `starships`, `created`, `edited`, `url`) VALUES
(1, 'Luke Skywalker', 172, 77, 'blond', 'fair', 'blue', '19BBY', 'male', 'Tatooine', 'The Empire Strikes Back, Revenge of the Sith, Return of the Jedi, A New Hope, The Force Awakens', 'Human', 'Snowspeeder, Imperial Speeder Bike', 'X-wing, Imperial shuttle', '2014-12-10T15:10:51.357000Z', '2014-12-20T21:17:56.891000Z', 'http://invalid.com/'),
(2, 'R2-D2', 96, 32, 'n/a', 'white, blue', 'red', '33BBY', 'n/a', 'Naboo', 'The Empire Strikes Back, Revenge of the Sith, Return of the Jedi, A New Hope, The Force Awakens', 'Droid', 'Não possui', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `starwars`
--
ALTER TABLE `starwars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `starwars`
--
ALTER TABLE `starwars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
