-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2022 г., 14:11
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
(10, 'Вася', 'Vasy', '$2y$10$cNLTKF2bWFPdP.tLA.aZ9eksYze2CyCrsVkXNh.TPYHBySgsBxpmi'),
(11, '', 'fhgjkhdkj', '41546876'),
(12, '', 'ghjj', '$2y$10$R7li3sY1M8sfSHPfdnsZOO7ZyNzmVl1AJR3MAqfEQwwU93L.NGgz.'),
(13, '', 'gfjhgfj', '$2y$10$41psyV6NgWp90HxPHt0gMu/TxPRwdS3lIwOS33yIFtnuiSN.a2eiO'),
(14, '', 'petr', '$2y$10$ekkVQmpJp4SnX7OMU519O.M6B/rfLEcshuy464b3KoDz1rAJuvliu'),
(15, '', 'masha', '$2y$10$1CL.InagBAJuMVeXwTScO.T3bz8YqkBhyqzv92NCXayRAAoKsEuue'),
(16, '', 'oly', '$2y$10$VtH7TJW/piTefL82AOfe9eU9HqEFoBppwdLi6fMf6sQ9m84tZq/u6'),
(17, '', 'misha', '$2y$10$bIILf.q5cB/TrUYQ9q00zuduSXKDGqR9YezcdTAg3cH63qC215ofO');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
