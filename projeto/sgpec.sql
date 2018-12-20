-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2018 às 13:43
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgpec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `saldo` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(3, 'Serviço ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `cpf`, `nome`, `rua`, `bairro`, `cidade`, `numero`, `datanascimento`) VALUES
(1, '111.111.111-11', 'Rafael Ramos Alves', 'João Francisco de Lima', 'Jadete', 'Januária', 340, '1997-03-03'),
(2, '333.333.333-33', 'Teste', 'Av. Itapiraçaba', 'Centro', 'Januária', 250, '1997-06-06'),
(3, '222.222.222-22', 'Ramiro', 'rua cinquenta', 'Jadete', 'Januária ', 240, '1991-03-20'),
(4, '238.748.237-48', 'Diogo', '34', 'Jussara', 'Januária', 345, '1995-07-13'),
(5, '123.456.789-87', 'Cliente tese', 'Av. Itapiraçaba', 'Centro', 'Januária', 123, '1985-07-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `quantidade`, `data`, `valor`, `descricao`, `usuario_id`) VALUES
(1, 1, '2018-12-12', '10.00', 'Envelopes', 1),
(2, 2, '2018-02-02', '15.00', 'Grampeador', 1),
(3, 2, '2018-12-11', '20.00', 'Caixa de Elásticos', 1),
(4, 3, '2018-12-25', '30.00', 'papel', 1),
(6, 1, '2018-12-27', '43434.00', 'fgdg', 1),
(7, 1, '2018-12-27', '43434.00', 'fgdg', 1),
(8, 15, '1997-03-03', '25.00', 'teste data', 1),
(9, 3, '2018-12-12', '35.00', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `created_date`) VALUES
(1, 'Primeiro compromisso', 'Inserção de primeiro compromisso no BD', '2018-12-12 16:15:14'),
(7, 'Virada do ano', 'Festa do revéillon 2019', '2018-12-31 23:55:00'),
(8, 'Projeto', 'Apresentar o Projeto de Arquitetura', '2018-12-19 15:25:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notafiscalsaida`
--

CREATE TABLE `notafiscalsaida` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `datapagamento` date DEFAULT NULL,
  `formapagamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` decimal(9,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `preco`, `categoria_id`) VALUES
(1, 'IRPF 2018', '70.00', 3),
(3, 'Contrato de Locação', '40.00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtosaida`
--

CREATE TABLE `produtosaida` (
  `produto_id` int(11) NOT NULL,
  `notafiscal_id` int(11) NOT NULL,
  `qnt` decimal(9,2) NOT NULL,
  `preco_venda` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rest`
--

CREATE TABLE `rest` (
  `id` int(11) NOT NULL,
  `nome_test` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rest`
--

INSERT INTO `rest` (`id`, `nome_test`, `status`, `data`) VALUES
(1, 'Primeiro teste API', 1, '2018-12-19'),
(2, 'Segundo Teste Api', 2, '2018-12-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `cpf`, `nome`, `rua`, `bairro`, `cidade`, `numero`, `datanascimento`) VALUES
(1, 'rrafael', 'rrafael97', '111.111.111-11', 'Rafael Ramos Alves', 'João Francisco de Lima', 'Jadete', 'Januária', 340, '1997-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notafiscalsaida`
--
ALTER TABLE `notafiscalsaida`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num` (`num`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `produtosaida`
--
ALTER TABLE `produtosaida`
  ADD PRIMARY KEY (`produto_id`,`notafiscal_id`),
  ADD KEY `notafiscal_id` (`notafiscal_id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notafiscalsaida`
--
ALTER TABLE `notafiscalsaida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `notafiscalsaida`
--
ALTER TABLE `notafiscalsaida`
  ADD CONSTRAINT `notafiscalsaida_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `notafiscalsaida_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `produtosaida`
--
ALTER TABLE `produtosaida`
  ADD CONSTRAINT `produto_saida_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `produto_saida_ibfk_2` FOREIGN KEY (`notafiscal_id`) REFERENCES `notafiscalsaida` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
