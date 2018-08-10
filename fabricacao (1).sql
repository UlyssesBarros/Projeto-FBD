-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Ago-2018 às 04:43
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabricacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `composicao`
--

CREATE TABLE `composicao` (
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_COMPONENTE` int(11) NOT NULL,
  `QUANTIDADE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `composicao`
--

INSERT INTO `composicao` (`COD_PRODUTO`, `COD_COMPONENTE`, `QUANTIDADE`) VALUES
(10, 1, 2),
(10, 3, 1),
(11, 1, 2),
(11, 5, 1),
(12, 2, 2),
(12, 3, 1),
(13, 2, 2),
(13, 4, 1),
(13, 8, 1),
(14, 9, 2),
(14, 6, 1),
(14, 8, 1),
(15, 9, 2),
(16, 1, 1),
(16, 2, 1),
(16, 7, 1),
(17, 9, 2),
(17, 8, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprado_no`
--

CREATE TABLE `comprado_no` (
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_FORNECEDOR` int(11) NOT NULL,
  `PRAZO_ENTREGA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comprado_no`
--

INSERT INTO `comprado_no` (`COD_PRODUTO`, `COD_FORNECEDOR`, `PRAZO_ENTREGA`) VALUES
(1, 1, '13/09/2019'),
(2, 1, '13/09/2019'),
(3, 2, '01/12/2018'),
(4, 2, '01/12/2018'),
(5, 2, '01/12/2018'),
(6, 2, '01/12/2018'),
(7, 2, '01/12/2018'),
(8, 2, '01/12/2018'),
(9, 3, '30/08/2018');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `COD_FORNECEDOR` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`COD_FORNECEDOR`, `NOME`) VALUES
(3, 'CEASA'),
(2, 'UFRPE aromatizantes e corantes'),
(1, 'Zé Fornecedor de Grãos LTDA');

-- --------------------------------------------------------

--
-- Stand-in structure for view `insumo_fornecedor`
-- (See below for the actual view)
--
CREATE TABLE `insumo_fornecedor` (
`produto` varchar(30)
,`fornecedor` varchar(30)
,`prazo` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ordem`
-- (See below for the actual view)
--
CREATE TABLE `ordem` (
`processo` varchar(30)
,`tarefa` varchar(30)
,`ordem` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_execucao`
--

CREATE TABLE `ordem_execucao` (
  `COD_PROCESSO` int(11) NOT NULL,
  `COD_TAREFA` int(11) NOT NULL,
  `ORDEM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem_execucao`
--

INSERT INTO `ordem_execucao` (`COD_PROCESSO`, `COD_TAREFA`, `ORDEM`) VALUES
(1, 4, 2),
(1, 5, 3),
(1, 7, 4),
(1, 8, 5),
(1, 10, 6),
(1, 9, 7),
(2, 2, 1),
(2, 3, 2),
(2, 6, 3),
(2, 11, 4),
(2, 5, 5),
(2, 8, 6),
(2, 10, 7),
(2, 9, 8),
(4, 2, 1),
(4, 16, 2),
(4, 17, 3),
(4, 10, 4),
(4, 9, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE `processo` (
  `COD_PROCESSO` int(11) NOT NULL,
  `NOME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`COD_PROCESSO`, `NOME`) VALUES
(2, 'Salgadinhos fritos'),
(3, 'Batatas fritas'),
(1, 'Salgadinhos assados'),
(4, 'Salgadinhos extrusados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE `producao` (
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_PROCESSO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `producao`
--

INSERT INTO `producao` (`COD_PRODUTO`, `COD_PROCESSO`) VALUES
(10, 1),
(11, 1),
(12, 2),
(13, 2),
(16, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `COD_PRODUTO` int(11) NOT NULL,
  `DESCRICAO` varchar(30) NOT NULL,
  `TIPO` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`COD_PRODUTO`, `DESCRICAO`, `TIPO`) VALUES
(1, 'Milho', 'I'),
(2, 'Trigo', 'I'),
(3, 'Aromatizante queijo', 'I'),
(4, 'Aromatizante bacon', 'I'),
(5, 'Aromatizante presunto', 'I'),
(6, 'Aromatizante churrasco', 'I'),
(7, 'Aromatizante requeijão', 'I'),
(8, 'Corante Marrom', 'I'),
(9, 'Batata', 'I'),
(10, 'Fandangos Queijo', 'P'),
(11, 'Fandangos Presunto', 'P'),
(12, 'Doritos', 'P'),
(13, 'Baconzitos', 'P'),
(14, 'Ruffles Churrasco', 'P'),
(15, 'Ruffles Tradicional', 'P'),
(16, 'Cheetos Requeijão', 'P'),
(17, 'Sensações', 'P'),
(18, 'Pingo de ouro bacon', 'P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE `tarefa` (
  `COD_TAREFA` int(11) NOT NULL,
  `TEMPO` double NOT NULL,
  `NOME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tarefa`
--

INSERT INTO `tarefa` (`COD_TAREFA`, `TEMPO`, `NOME`) VALUES
(1, 240, 'Cozinhar o milho'),
(2, 60, 'Misturar trigo e água'),
(3, 15, 'Esticar a massa'),
(4, 30, 'Moer grãos de milho'),
(5, 10, 'Cortar a massa'),
(6, 5, 'Receber coloração'),
(7, 10, 'Assar a massa'),
(8, 5, 'Fritar em oléo vegetal'),
(9, 2, 'Empacotar'),
(10, 10, 'Aromatizar'),
(11, 45, 'Secar massa'),
(12, 10, 'Lavar batatas'),
(13, 5, 'Descascar batatas'),
(14, 5, 'Cortar batatas'),
(15, 10, 'Cozinhar batatas'),
(16, 5, 'Prensar massa'),
(17, 5, 'Esfriar massa');

-- --------------------------------------------------------

--
-- Structure for view `insumo_fornecedor`
--
DROP TABLE IF EXISTS `insumo_fornecedor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `insumo_fornecedor`  AS  (select `i`.`DESCRICAO` AS `produto`,`f`.`NOME` AS `fornecedor`,`c`.`PRAZO_ENTREGA` AS `prazo` from ((`produto` `i` join `fornecedor` `f`) join `comprado_no` `c`) where ((`c`.`COD_PRODUTO` = `i`.`COD_PRODUTO`) and (`c`.`COD_FORNECEDOR` = `f`.`COD_FORNECEDOR`))) ;

-- --------------------------------------------------------

--
-- Structure for view `ordem`
--
DROP TABLE IF EXISTS `ordem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordem`  AS  (select `p`.`NOME` AS `processo`,`t`.`NOME` AS `tarefa`,`o`.`ORDEM` AS `ordem` from ((`processo` `p` join `tarefa` `t`) join `ordem_execucao` `o`) where ((`p`.`COD_PROCESSO` = `o`.`COD_PROCESSO`) and (`t`.`COD_TAREFA` = `o`.`COD_TAREFA`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `composicao`
--
ALTER TABLE `composicao`
  ADD KEY `COD_PRODUTO` (`COD_PRODUTO`),
  ADD KEY `COD_COMPONENTE` (`COD_COMPONENTE`);

--
-- Indexes for table `comprado_no`
--
ALTER TABLE `comprado_no`
  ADD KEY `COD_PRODUTO` (`COD_PRODUTO`),
  ADD KEY `COD_FORNECEDOR` (`COD_FORNECEDOR`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`COD_FORNECEDOR`),
  ADD UNIQUE KEY `NOME` (`NOME`);

--
-- Indexes for table `ordem_execucao`
--
ALTER TABLE `ordem_execucao`
  ADD KEY `COD_PROCESSO` (`COD_PROCESSO`),
  ADD KEY `COD_TAREFA` (`COD_TAREFA`);

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`COD_PROCESSO`),
  ADD UNIQUE KEY `NOME` (`NOME`);

--
-- Indexes for table `producao`
--
ALTER TABLE `producao`
  ADD KEY `COD_PROCESSO` (`COD_PROCESSO`),
  ADD KEY `COD_PRODUTO` (`COD_PRODUTO`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`COD_PRODUTO`),
  ADD UNIQUE KEY `DESCRICAO` (`DESCRICAO`);

--
-- Indexes for table `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`COD_TAREFA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `COD_FORNECEDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `processo`
--
ALTER TABLE `processo`
  MODIFY `COD_PROCESSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `COD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tarefa`
--
ALTER TABLE `tarefa`
  MODIFY `COD_TAREFA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `composicao`
--
ALTER TABLE `composicao`
  ADD CONSTRAINT `composicao_ibfk_1` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produto` (`COD_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `composicao_ibfk_2` FOREIGN KEY (`COD_COMPONENTE`) REFERENCES `produto` (`COD_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `comprado_no`
--
ALTER TABLE `comprado_no`
  ADD CONSTRAINT `comprado_no_ibfk_1` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produto` (`COD_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comprado_no_ibfk_2` FOREIGN KEY (`COD_FORNECEDOR`) REFERENCES `fornecedor` (`COD_FORNECEDOR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `ordem_execucao`
--
ALTER TABLE `ordem_execucao`
  ADD CONSTRAINT `ordem_execucao_ibfk_1` FOREIGN KEY (`COD_PROCESSO`) REFERENCES `processo` (`COD_PROCESSO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ordem_execucao_ibfk_2` FOREIGN KEY (`COD_TAREFA`) REFERENCES `tarefa` (`COD_TAREFA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `producao`
--
ALTER TABLE `producao`
  ADD CONSTRAINT `producao_ibfk_1` FOREIGN KEY (`COD_PROCESSO`) REFERENCES `processo` (`COD_PROCESSO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producao_ibfk_2` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produto` (`COD_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
