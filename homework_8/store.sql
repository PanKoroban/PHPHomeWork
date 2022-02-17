-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2022 г., 00:28
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `goods_id` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `goods_id`, `status`) VALUES
(1, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(2, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(3, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(4, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(5, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(6, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(7, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(8, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(9, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(10, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(11, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(12, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(13, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(14, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(15, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(16, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(17, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(18, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(19, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(20, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(21, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(22, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(23, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(24, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(25, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(26, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(27, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(28, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(29, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(30, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(31, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(32, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(33, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(34, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(35, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(54, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(55, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(56, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(57, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(58, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(59, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(60, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(61, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(62, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2),
(65, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(66, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(67, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(68, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(69, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(70, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2),
(71, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(72, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(73, '44inft0vnb0crctufmgobjsh30n26l77', 2, 2),
(79, 'rk7fledtv91df0qncqc7osfcci65nqmr', 1, 2),
(80, 'rk7fledtv91df0qncqc7osfcci65nqmr', 1, 2),
(81, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(82, 'rk7fledtv91df0qncqc7osfcci65nqmr', 3, 2),
(83, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(84, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(85, 'rk7fledtv91df0qncqc7osfcci65nqmr', 3, 2),
(86, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(87, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(88, 'rk7fledtv91df0qncqc7osfcci65nqmr', 2, 2),
(89, 'rk7fledtv91df0qncqc7osfcci65nqmr', 5, 2),
(90, 'rk7fledtv91df0qncqc7osfcci65nqmr', 5, 2),
(91, 'rk7fledtv91df0qncqc7osfcci65nqmr', 5, 2),
(92, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 1, 2),
(93, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 6, 2),
(94, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 6, 2),
(95, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 2, 2),
(96, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 3, 2),
(97, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 5, 2),
(98, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 5, 2),
(99, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 5, 2),
(100, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 2, 2),
(101, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 2, 2),
(102, 'igejdt42ech9a6p3cptopsm4vpc0idn2', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `disc` text NOT NULL,
  `category_id` int NOT NULL,
  `is_activ` tinyint(1) NOT NULL DEFAULT '1',
  `price` int NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `disc`, `category_id`, `is_activ`, `price`, `img_url`) VALUES
(1, 'Товар 1', 'Описание товара', 1, 1, 143, 'images/test.jpg'),
(2, 'Товар 2_New', 'Описание товара New', 1, 1, 250, 'images/test.jpg'),
(3, 'Товар 3', 'Описание Третьего товара', 1, 1, 10, 'images/test.jpg'),
(5, 'Test', 'Test', 1, 1, 300, 'images/test.jpg'),
(6, 'Дорогой товар', 'Стоит много', 1, 1, 10000, 'images/test.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `goods_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `count` int NOT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `surname`, `address`, `goods_id`, `status`, `count`, `user_id`) VALUES
(7, 'Александр', 'Александер', 'Александер', 1, 2, 6, NULL),
(8, 'test', 'test', 'test', 1, 2, 3, NULL),
(9, 'test', 'test', 'test', 2, 2, 1, NULL),
(10, 'Имя', 'Фамилия', 'Адрес', 2, 2, 1, NULL),
(11, 'Имя', 'Фамилия', 'Адрес', 1, 2, 1, NULL),
(12, 'Имя', 'Фамилия', 'Адрес', 2, 2, 1, NULL),
(13, 'Имя', 'Фамилия', 'Адрес', 3, 2, 1, NULL),
(14, 'Имя', 'Фамилия', 'Адрес', 1, 2, 3, NULL),
(15, 'Имя', 'Фамилия', 'Адрес', 1, 2, 3, NULL),
(16, 'Имя', 'Фамилия', 'Адрес', 3, 2, 1, NULL),
(17, 'test', 'test', 'test', 1, 2, 2, NULL),
(18, 'test', 'test', 'test', 1, 2, 1, 9),
(19, 'Имяasdasda', 'asda', 'asdasda', 1, 2, 1, NULL),
(20, 'test', 'test', 'test', 1, 2, 1, 9),
(21, 'test', 'test', 'test', 2, 2, 10, 9),
(22, 'test', 'test', 'test', 3, 2, 4, 9),
(23, 'test', 'test', 'test', 1, 2, 1, 9),
(24, 'test', 'test', 'test', 2, 2, 3, 9),
(25, 'Александр', 'Александр', 'Александр', 1, 2, 2, 12),
(26, 'Александр', 'Александр', 'Александр', 2, 2, 3, 12),
(27, 'Александр', 'Александр', 'Александр', 3, 2, 2, 12),
(28, 'Александр', 'Александр', 'Александр', 2, 2, 3, 12),
(29, 'Александр', 'Александр', 'Александр', 5, 2, 3, 12),
(30, 'test', 'test', 'test', 1, 1, 1, 13),
(31, 'test', 'test', 'test', 6, 2, 2, 13),
(32, 'test', 'test', 'test', 2, 0, 3, 13),
(33, 'test', 'test', 'test', 3, 0, 1, 13),
(34, 'test', 'test', 'test', 5, 0, 3, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `role` int DEFAULT NULL,
  `session_id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `address`, `login`, `role`, `session_id`, `pass`) VALUES
(11, 'root', 'root', 'root', 'root', 1, '', '63a9f0ea7bb98050796b649e85481845'),
(13, 'test', 'test', 'test', 'test', NULL, 'igejdt42ech9a6p3cptopsm4vpc0idn2', '098f6bcd4621d373cade4e832627b4f6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
