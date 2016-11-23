-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2016 às 20:06
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turing`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelas`
--

CREATE TABLE `tabelas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabelas`
--

INSERT INTO `tabelas` (`id`, `titulo`, `conteudo`) VALUES
(7, 'soma', '{"0:*":":::","0:-":":::","0:ini":"ini:1:D:","1:*":"*:1:D:","1:-":"*:2:D:","1:ini":":::","2:*":"*:2:D:","2:-":"-:3:E:","2:ini":":::","3:*":"-:F::","3:-":":::","3:ini":":::"}'),
(14, 'multiplica', '{"0:*":":::","0:-":":::","0:a":":::","0:b":":::","0:ini":"ini:1:D:","1:*":"*:1:D:","1:-":"-:2:D:","1:a":":::","1:b":":::","1:ini":":::","2:*":"*:2:D:","2:-":"-:3:E:","2:a":"a:3:E:","2:b":":::","2:ini":":::","3:*":"a:4:E:","3:-":"-:9:D:","3:a":"a:3:E:","3:b":":::","3:ini":":::","4:*":"*:4:E:","4:-":"-:4:E:","4:a":"a:4:E:","4:b":"b:5:D:","4:ini":"ini:5:D:","5:*":"b:6:D:","5:-":"-:5:E:","5:a":":::","5:b":"*:5:E:","5:ini":"ini:1:D:","6:*":"*:6:D:","6:-":"-:7:D:","6:a":":::","6:b":":::","6:ini":":::","7:*":"*:7:D:","7:-":"-:8:D:","7:a":"a:7:D:","7:b":":::","7:ini":":::","8:*":"*:8:D:","8:-":"*:4:E:","8:a":":::","8:b":":::","8:ini":":::","9:*":":::","9:-":"-:F:D:","9:a":"*:9:D:","9:b":":::","9:ini":":::"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelas`
--
ALTER TABLE `tabelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelas`
--
ALTER TABLE `tabelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
