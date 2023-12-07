-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2023 г., 21:14
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `AriAna`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(12, 'Кольцо из серебра с топазами и фианитами', ' 50000 ', ' 01.jpg', 3),
(13, 'Серебряный браслет', ' 45000 ', ' 002.jpg', 2),
(15, 'Серебряные серьги', ' 74000 ', ' 0001.jpg', 1),
(16, 'jjjjj', ' 4444444 ', ' 30.gif', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(8, 'gttgyguy', '5454615645', '20.gif'),
(9, 'gttgyguy', '5454615645', '20.gif'),
(10, 'jjjjj', '4444444', '30.gif'),
(11, 'jjjjj', '4444444', '30.gif'),
(12, 'jjjjj', '4444444', '30.gif'),
(13, 'jjjjj', '4444444', '30.gif'),
(14, 'Серебряные серьги', '3500', '0001.jpg'),
(15, 'Кольцо из серебра с топазами и фианитами', '50000', '01.jpg'),
(16, 'Кольцо из серебра с топазами и фианитами', '25000', '02.jpg'),
(17, 'Серебряные серьги', '45000', '0003.jpg'),
(18, 'Серебряные серьги', '45000', '0002.jpg'),
(19, 'Серебряные серьги', '74000', '0001.jpg'),
(20, 'Кольцо из серебра с топазами и фианитами', '78700', '03.jpg'),
(21, 'Серебряный браслет', '45000', '002.jpg'),
(22, 'Серебряный браслет', '12000', '003.jpg'),
(23, 'Серебряный браслет', '77000', 'm003.jpg'),
(24, 'Серебряный браслет', '95000', 'm001.jpg'),
(25, 'Серебряный браслет', '45000', 'm002.jpg'),
(26, 'Серебряные серьги', '78700', '01С1211854.gif'),
(27, 'Серебряный браслет', '45000', '001.jpg'),
(28, 'Серебряный браслет', '151000', 'm003.jpg'),
(29, 'oooooooooo', '44444', 'f26a7e5bbec1e013af4ee98985fc8b046ed2c51e.png'),
(30, 'cccccccccccc', '454545', 'f26a7e5bbec1e013af4ee98985fc8b046ed2c51e.png'),
(32, 'lllllll', '4444444444', 'f26a7e5bbec1e013af4ee98985fc8b046ed2c51e.png'),
(34, 'lllllll', '444444444', ' default-avatar.png'),
(35, 'lllllll', '222222', 'f26a7e5bbec1e013af4ee98985fc8b046ed2c51e.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user_form`
--

CREATE TABLE `user_form` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'lia', 'lia342@sdja.ad', 'b0baee9d279d34fa1dfd71aadb908c3f', '1f3352a1c16e049f5da3004058452e9a.jpeg'),
(2, 'dia', 'dia@fhks.ru', 'b0baee9d279d34fa1dfd71aadb908c3f', 'bf363922f105fac51edab668820ed66d.jpeg'),
(3, 'kia', 'kira@gh.yt', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Без названия.jpg'),
(4, 'joli', 'joli22@ksd.eu', 'b0baee9d279d34fa1dfd71aadb908c3f', 'c406e071138dc4ee1a5122364c71ddfe.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
