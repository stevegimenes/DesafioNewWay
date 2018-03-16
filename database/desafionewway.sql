-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2018 às 19:47
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafionewway`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Café', 'category1.jpg', NULL, '2018-03-15 19:46:07', NULL),
(2, 'Sorvete de creme', NULL, NULL, NULL, NULL),
(3, 'Água', 'category3.jpg', NULL, '2018-03-15 20:48:19', NULL),
(4, 'Leite semi-desnatado', 'category4.jpg', NULL, '2018-03-15 20:37:14', NULL),
(5, 'Gelo', 'category5.jpg', NULL, '2018-03-15 20:36:11', NULL),
(6, 'Espuma', 'category6.jpg', NULL, '2018-03-15 20:35:18', NULL),
(7, 'Calda de chocolate', 'category7.jpg', NULL, '2018-03-15 20:31:04', NULL),
(8, 'Chocolate em pó', 'category8.jpg', NULL, '2018-03-15 20:32:53', NULL),
(9, 'Chantilly', 'category9.jpg', NULL, '2018-03-15 20:32:12', NULL),
(10, 'Vodka', NULL, NULL, NULL, NULL),
(11, 'Whiskey Irlandês', NULL, NULL, NULL, NULL),
(12, 'Creme', 'category12.jpeg', NULL, '2018-03-15 20:33:39', NULL),
(13, 'Café orgânico', 'category13.jpg', NULL, '2018-03-15 20:19:27', NULL),
(14, 'Manteiga Ghee', 'category14.jpg', NULL, '2018-03-15 20:38:38', NULL),
(15, 'Óleo de cocô', NULL, NULL, NULL, NULL),
(16, 'Baunilha', 'category16.jpg', '2018-03-15 17:45:24', '2018-03-15 19:47:44', NULL),
(17, 'Run', NULL, '2018-03-15 17:59:33', '2018-03-15 17:59:33', NULL),
(18, 'Mel', 'category18.jpg', '2018-03-15 17:59:54', '2018-03-15 20:39:35', NULL),
(21, 'Café Bourbon', 'category21.jpg', '2018-03-15 19:07:21', '2018-03-15 19:59:52', NULL),
(22, 'Café Kona', 'category22.jpg', '2018-03-15 19:59:42', '2018-03-15 19:59:42', NULL),
(23, 'AAAA', NULL, '2018-03-15 20:25:47', '2018-03-15 20:28:31', '2018-03-15 23:28:31'),
(25, 'BBB', 'category25.jpg', '2018-03-15 20:29:30', '2018-03-15 20:30:01', '2018-03-15 23:30:01'),
(26, 'Leite Integral', 'category26.jpg', '2018-03-16 14:51:01', '2018-03-16 14:51:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` tinyint(1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Espresso', 'Uma dose de espresso', 1, '2018-03-08 03:00:00', '2018-03-16 15:13:30', NULL),
(2, 'Affogato', 'Café espresso derramado sobre uma bola de sorvete de baunilha', 1, '2018-03-08 03:00:00', '2018-03-16 15:09:54', NULL),
(3, 'Americano', '1 dose de espresso e 2/3 da xícara de água quente', 1, '2018-03-08 03:00:00', '2018-03-16 15:10:32', NULL),
(4, 'Breve', 'Café espresso e leite semi-desnatado', 1, '2018-03-08 03:00:00', '2018-03-16 15:11:04', NULL),
(5, 'Caffe Freddo', 'Café com gelo', 1, '2018-03-08 03:00:00', '2018-03-16 15:13:02', NULL),
(6, 'Café com leite', 'Trata-se do café filtrado com leite aquecido ou fervido. Também pode apresentar-se como café expresso com leite vaporizado e uma fina camada de espuma de leite.', 1, '2018-03-16 15:05:49', '2018-03-16 15:11:18', NULL),
(7, 'Duplo', 'Nada mais é que o dobro de um espresso. Aproximadamente 60 ml de café.', 1, '2018-03-16 17:55:39', '2018-03-16 18:57:23', NULL),
(8, 'Mocha', 'Drink que conta com uma calda de chocolate, leite vaporizado, espuma de leite e uma dose de expresso. A mistura pode ser tri-fásica ou uma mistura de café com a calda de chocolate com a crema do leite por cima. Pode também ser conhecido pelo nome de Mocaccino, termo utilizado e criado por uma rede de cafeterias internacional.', 1, '2018-03-16 19:11:10', '2018-03-16 19:11:41', NULL),
(9, 'Cappuccino', 'O verdadeiro cappuccino apresenta 1/3 de expresso, 1/3 de leite vaporizado, 1/3 de espuma de leite na xícara de 150 a 180 ml. A espuma do cappuccino deve ser densa e cremosa, com temperatura de no máximo 60º para se tomar em goles. No Brasil, há o hábito de acrescentar canela ou chocolate.', 1, '2018-03-16 19:58:58', '2018-03-16 19:58:58', NULL),
(10, 'Pingado', 'Um copo de leite quente que recebe uma pequena quantidade de café, ou seja, somente um pingo de café. Bebida bastante popular em botecos e padarias do Brasil e é, geralmente, servido no copo americano.', 1, '2018-03-16 20:00:33', '2018-03-16 20:00:33', NULL),
(11, 'Ristretto', 'Considerado o néctar do café, é bem doce e não possui o sabor forte do grão. Ele é servido em um volume que varia de 15 a 20 ml.', 1, '2018-03-16 20:03:32', '2018-03-16 20:03:32', NULL),
(12, 'AAA', 'BBB', 0, '2018-03-16 20:04:15', '2018-03-16 20:04:46', '2018-03-16 20:04:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_06_054633_create_table_categories', 1),
(4, '2018_03_06_054704_create_table_items', 1),
(5, '2018_03_06_055415_create_table_photos', 1),
(6, '2018_03_06_055429_create_table_tags', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`id`, `category_id`, `item_id`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 26, 6),
(9, 1, 2),
(8, 1, 7),
(10, 2, 2),
(11, 3, 3),
(12, 1, 3),
(13, 1, 4),
(14, 4, 4),
(15, 1, 5),
(16, 5, 5),
(28, 26, 8),
(27, 6, 8),
(26, 7, 8),
(25, 1, 8),
(29, 1, 9),
(30, 6, 9),
(31, 26, 9),
(32, 1, 10),
(33, 26, 10),
(34, 1, 11),
(35, 3, 12),
(36, 16, 12),
(37, 1, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Steve', 'stevegc@gmail.com', '$2y$10$NgVoEsC5B9k274nQESAbzOdA/CQmSTykZRk450WPd5ovD8CS6eY1e', '2PyHSFZzJGGrQe0ELb5QgG0TXEXkP8UHDINfNVoKsbaHERrFryHapPnwhhzX', '2PyHSFZzJGGrQe0ELb5QgG0TXEXkP8UHDINfNVoKsbaHERrFryHapPnwhhzX', '2018-03-07 20:46:50', '2018-03-07 20:46:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_name_index` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_name_index` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_tags_category_id` (`category_id`),
  ADD KEY `IDX_tags_item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
