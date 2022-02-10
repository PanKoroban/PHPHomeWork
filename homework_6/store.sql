-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2022 г., 01:50
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
(22, '44inft0vnb0crctufmgobjsh30n26l77', 3, 2);

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
(1, 'Товар 1', 'Описание товара', 1, 1, 100, 'image.jpg'),
(2, 'Товар 2', 'Описание второго товара', 1, 1, 200, ''),
(3, 'Товар 3', 'Описание Третьего товара', 1, 1, 10, '');

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
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `surname`, `address`, `goods_id`, `status`) VALUES
(1, '1111', '123121', '1231231', 2, 0),
(2, '1111', '123121', '1231231', 3, 0),
(3, '1111', '123121', '1231231', 3, 0),
(4, 'Имяa', 'Фамилияa', 'Адресa', 1, 0),
(5, 'Имяa', 'Фамилияa', 'Адресa', 2, 0),
(6, 'Имяa', 'Фамилияa', 'Адресa', 3, 0);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
