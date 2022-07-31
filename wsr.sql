-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 31 2022 г., 22:31
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wsr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `password`) VALUES
(2, '', 'fdfdf', '2542'),
(3, '', 'admin', '$2y$10$2qldAmhoHrzmT/yMfKwKiunsfvwyC0K5s8tHRY1TRUcJzgxPlY2cK'),
(4, '', 'login1', '$2y$10$T1SckzRmoeRCCGIT5tL9MOw9BNXRFP6JNWy1vf4sm6YpC2H.2NxEu'),
(5, '', 'login2', '$2y$10$SM5zEXJLgMozvVpphZR5I.6IR.5okcmLytEc9rm0hDKHV0EeQX93W'),
(6, '', 'login5', '$2y$10$8yQZiS9n3ESqMZyPxkESCOj6OsDIcxUU7HkLzA8jRroZOHxGS/HSG'),
(7, '', 'login3', '$2y$10$L9h5qliy7VHW4HgERUmQJ.ncB7EqRr0X6XFtQxsKS8yejSbSs744q'),
(8, '', 'login8', '$2y$10$0WAWSsm4wN/juJWDFGJ45OP2285FvJETs0mAH7daouIoMBrBgCs9.'),
(9, 'Svetik', 'svetik', '$2y$10$EkX/wNRCPUB58zKFAm3xd.oo7D5pbUaj1lFVXBR.n9ALkloYkiyRK'),
(10, 'Вася', 'Vasy', '$2y$10$cNLTKF2bWFPdP.tLA.aZ9eksYze2CyCrsVkXNh.TPYHBySgsBxpmi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
