-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: May 9 2018 г., 16:31
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kitob`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bolimlar`
--

CREATE TABLE IF NOT EXISTS `bolimlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `bolimlar`
--

INSERT INTO `bolimlar` (`id`, `name`) VALUES
(111, 'Fairy-tales'),
(222, 'Story'),
(333, 'Folktale'),
(444, 'World Literature'),
(555, 'Uzbek Liturature'),
(666, 'New Uzbek Literature'),
(777, 'Electronic textbooks'),
(888, 'Folklore creativity');

-- --------------------------------------------------------

--
-- Структура таблицы `kitoblar`
--

CREATE TABLE IF NOT EXISTS `kitoblar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `nomi` varchar(200) NOT NULL,
  `mualif` varchar(100) NOT NULL,
  `short` varchar(300) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `yil` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `read` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `kitoblar`
--

INSERT INTO `kitoblar` (`id`, `url`, `nomi`, `mualif`, `short`, `text`, `img`, `yil`, `b_id`, `read`) VALUES
(111, 'fayl_Malikai_ayyor_-_21.02.2014_16-29-02.pdf', 'Malikai ayyor', 'Aliev T', 'Chambil says the land of Gurgaon. What is a tambourine? Chambil is like Chambil: sixty oblongs, seventy-eighths, eighty cranes, and nine-sided Chambil.', 'Chambil says the land of Gurgaon. What is a tambourine? Chambil is like Chambil: sixty oblongs, seventy-eighths, eighty cranes, and nine-sided Chambil. In Cambil there are a number of Grooglu, Forty-six captains, four-quadruple hawkish hawks, and Sokibulbul. The gourmet was considered as a mustard, and the shot went through the stone.\r\n', '1.jpg', 2015, 8, 7),
(222, 'fayl_Manas_-_12.02.2014_9-41-25.pdf', 'Manas', 'Suyunov M', 'Manas is name is always blessed for the Kurds. Manas is the great epic of sacred words.', 'Manas is name is always blessed for the Kurds. Manas is the great epic of sacred words. The history, joy and affluence of the hand, the well-being and the evil, the beautiful fate are reflected in it. The dreams, the wishes that have not come to an end, the pain of the elite, are like a spoonful of spells,', '2.jpg', 2015, 8, 2),
(333, 'fayl_tishing_-_19.11.2015_16-30-55.pdf', 'Tishing sog` vaqting chog`', 'M. Miryoqubov', 'This book, Mirjamol Miryokubov, is a product of the dentist, in which he talked about the most important person - the teeth.', ' This book, Mirjamol Miryokubov, is a product of the dentist, in which he talked about the most important person - the teeth.', '3.jpg', 2015, 6, 0),
(444, 'fayl_bolalar_uchun.pdf', 'Bolalar uchun she''rlar', 'Olqor Damin', 'Men salomman, Salomman.\r\nOlamday keng Olamman.', 'Men salomman, Salomman.\r\nOlamday keng Olamman.\r\nMeni aytib Yurganni\r\nOdam qila Olaman!', '4.jpg', 2014, 6, 0),
(555, 'fayl_Arvona_-_13.02.2014_10-29-45.pdf', 'Arvona', 'Yo''q', 'There are many works about native land, the Motherland. But her motherland was the home of Camila Arvon.', 'There are many works about native land, the Motherland. But her motherland was the home of Camila Arvon. A reader who reads the spittle of the Arden into the heart falls into the eye of the reader two tears. The famous Kazakh writer Thobo Do`sanov is Arvona prose is in the heart of the country.', '5.jpg', 1995, 3, 1),
(666, 'fayl_Konfutsiy_-_05.09.2013_15-02-33.pdf', 'Muhokama va bayon', 'Konfutsiy', 'Confucius is one of the globally recognized geniuses of humanity. ', 'Confucius is one of the globally recognized geniuses of humanity. Although a Chinese philosopher and thinker has been trained and established on the soil of his homeland, years will have a profound effect on the socio-political, literary-cultural and moral-philosophical thinking of many nations around the world.\r\n', '6.jpg', 2015, 3, 0),
(777, 'fayl_qambar_ota1_-_27.10.2015_12-03-47.pdf', 'Toshpolvon va Ishpolvon haqida ertak', 'Qambar ota', 'Kambar Ata is childhood is much closer to children than "father". Because all the poetry rhythms in the heart of the childhood were matured by the spontaneous childhood', 'Kambar Ata is childhood is much closer to children than "father". Because all the poetry rhythms in the heart of the childhood were matured by the spontaneous childhood. That is why her poems are fast-hearted. Long stored in memory. It extends the imagination of children. He remembers the forgotten childhood of adults. Forget about a momentary moments of life, drown in poetry, strengthen your spirit.', '76411.jpg', 2015, 5, 1),
(888, 'fayl_rumiy.docx', 'Amir Arslon Rumiy', 'Xalq', 'The poem "Amir Arslon Rumi" is from Arabic in the Fifth to the nineteenth century in Arabic, Turkish, Persian', 'The poem "Amir Arslon Rumi" is a story about love and devotion that has been widespread among the Arab, Turkish, Persian-speaking peoples from the seventeenth to the nineteenth century. Historical events in the game are mixed with fantastic events.\r\n', '9001rumiy.png', 2015, 5, 1),
(999, 'fayl_krilov_-_12.10.2015_15-55-58.pdf', 'Ninachi bilan chumoli', 'Krilov I', 'In this book, translations of I.Krilov is "Ninja and Ant", all of which are well-known, have been translated from Uzbek literature.', 'This book contains translations from Uzbek writers, which are well-known to all of us, Krylov, "The Ninja and the Ant." We hope that this book will appeal to our readers.', '21721.jpg', 1990, 4, 0),
(899, 'fayl_gena_-_28.09.2015_15-53-49.pdf', 'Gena degan timsoh', 'Uspenskiy E', 'Did you hear that a crocodile is a friend of children and animals, and a puppet has experienced some awesome adventures?', 'Did you hear that a crocodile is a friend of children and animals, and a puppet has experienced some awesome adventures? Here are some interesting, exciting stories in this book. Well, lets go together in the world of these wonderful things..', '34IMG.jpg', 2015, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
