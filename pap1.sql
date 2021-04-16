-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2021 às 15:30
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `designacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `designacao`) VALUES
(1, 'Motores'),
(2, 'Suspensões'),
(3, ''),
(4, 'Volantes'),
(5, 'detalhes_interiror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(1, 'BMW'),
(2, 'NISSAN'),
(3, 'HONDA'),
(4, 'AP'),
(5, 'OMP'),
(6, 'SPARCO'),
(7, 'RECARO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `preco` int(50) NOT NULL,
  `observacoes` varchar(50) NOT NULL,
  `info` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `produto` varchar(100) NOT NULL,
  `review` varchar(9999) DEFAULT NULL,
  `contacto` int(9) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `id_marca`, `preco`, `observacoes`, `info`, `updated_at`, `created_at`, `produto`, `review`, `contacto`, `id`) VALUES
(1, 1, 2, 480, 'A primeira geração 1JZ-GTE emprega dois turbocompr', '300 CV', NULL, NULL, '1JZ', 'Motor teste', 910685977, 5),
(2, 1, 2, 550, 'O 2JZ é uma linha-disposição , seis cilindros , ac', '700 CV', NULL, NULL, '2JZ', '', NULL, 0),
(3, 1, 2, 479, 'O SR Nissan motor é um 1,6 L (1596 cc), 1,8 L (183', '316 CV', NULL, NULL, 'SR-20', '', NULL, 0),
(4, 4, 5, 100, 'descrição completea', 'resumo', NULL, NULL, 'teste22', '', NULL, 0),
(5, 1, 2, 55, 'descrição completea', 'resumo', NULL, NULL, 'teste33', '', NULL, 0),
(17, 1, 1, 3332, 'tessssss', 'teste', '2021-04-16 12:42:01', '2021-04-16 12:42:01', 'aere', NULL, NULL, 6),
(18, 1, 1, 888, 'fff', 'ff', '2021-04-16 12:43:03', '2021-04-16 12:43:03', 'tetes', NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal' COMMENT 'admin ou normal',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_user`, `remember_token`, `created_at`, `updated_at`, `contacto`) VALUES
(1, 'Daniel', 'a16636@aedah.pt', NULL, '$2y$10$HrFjdfp1Cc67B.BCXuPMEOXQ8TIEBOfFpWIBqgYcBGuPczH4GEhtW', 'normal', NULL, '2021-02-01 13:53:56', '2021-02-01 13:53:56', 0),
(5, 'dani', 'dani@gmail.com', NULL, '$2y$10$sbqW889JfXn5/dRVUt7Blelh89sQHHQT2e.Vk20pEp1xQy/yqdd7u', 'admin', NULL, '2021-03-02 20:59:27', '2021-03-02 20:59:27', 910685977),
(6, 'joao', 'joao@gmail.com', NULL, '$2y$10$9iOpPTSmq7B3ZqmPbbK7/u/rEkVQy3wsMqnRSR5esyH47FE.55JPi', 'normal', NULL, '2021-04-16 10:11:42', '2021-04-16 10:11:42', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
