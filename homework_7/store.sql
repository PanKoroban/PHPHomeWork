-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2022 г., 18:11
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
(58, '44inft0vnb0crctufmgobjsh30n26l77', 1, 2);

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
(1, 'Товар 1', 'Описание товара', 1, 1, 100, 'images/test.jpg'),
(2, 'Товар 2', 'Описание второго товара', 1, 1, 200, 'images/test.jpg'),
(3, 'Товар 3', 'Описание Третьего товара', 1, 1, 10, 'images/test.jpg');

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
(7, 'Александр', 'Александер', 'Александер', 1, 0, 6, NULL),
(8, 'test', 'test', 'test', 1, 0, 3, NULL),
(9, 'test', 'test', 'test', 2, 0, 1, NULL),
(10, 'Имя', 'Фамилия', 'Адрес', 2, 0, 1, NULL),
(11, 'Имя', 'Фамилия', 'Адрес', 1, 0, 1, NULL),
(12, 'Имя', 'Фамилия', 'Адрес', 2, 0, 1, NULL),
(13, 'Имя', 'Фамилия', 'Адрес', 3, 0, 1, NULL),
(14, 'Имя', 'Фамилия', 'Адрес', 1, 0, 3, NULL);

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
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
