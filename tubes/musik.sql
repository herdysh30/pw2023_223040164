-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 05:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musik`
--

-- --------------------------------------------------------

--
-- Table structure for table `nama_category`
--

CREATE TABLE `nama_category` (
  `id_category` int NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nama_category`
--

INSERT INTO `nama_category` (`id_category`, `category`) VALUES
(1, 'kpop'),
(2, 'pop'),
(3, 'jpop'),
(4, 'populer');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penyanyi` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `img`, `judul`, `penyanyi`, `file`, `id_category`) VALUES
(1, '647d88579d506.png', 'Cupid', 'FIFTY FIFTY', 'cupid.mp3', 4),
(2, 'angelly.jpeg', 'Angel Like You', 'Miley Cyrus', 'angellikeyou.mp3', 4),
(3, 'thoseeyes.jpeg', 'Those Eyes', 'New West', 'thoseeyes.mp3', 4),
(5, 'rightnow.jpg', 'Right Now', 'One Direction', '', 4),
(6, 'sial.jpg', 'Sial', 'Mahalini', 'sial.mp3', 4),
(7, 'taksegampangitu.jpeg', 'Tak Segampang Itu', 'Anggi Marito', 'taksegampangitu.mp3', 4),
(12, 'flower.jpg', 'FLOWER', 'JISOO', 'flower.mp3', 4),
(22, 'lemon.png', 'Lemon', 'Kenshi Yonezu', '', 3),
(23, 'shinu.jpeg', 'Shinunoga E-Wa', 'Fujii Kaze', '', 3),
(24, 'pretender.png', 'Pretender', 'Official Hige Dandism', '', 3),
(25, 'yoru.jpg', 'Yoru ni Kakeru', 'YOASOBI', '', 3),
(26, 'flower.jpg', 'FLOWER', 'JISOO', '', 1),
(27, 'shutdown.jpeg', 'Shut Down', 'BLACKPINK', '', 1),
(28, 'seven.jpg', '손오공', 'SEVENTEEN', '', 1),
(29, 'hypeboy.jpg', 'Hype Boy', 'NewJeans', '', 1),
(30, 'lantas.jpeg', 'Lantas', 'Juicy Juicy', '', 2),
(31, 'sangdewi.jpeg', 'Sang Dewi', 'Lyodra & Andi Rianto', '', 2),
(32, 'mesinwaktu.jpeg', 'Mesin Waktu', 'Budi Doremi', '', 2),
(33, 'takinginusai.jpg', 'Tak Ingin Usai', 'Keiysa Levronka', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `password`, `email`, `role`) VALUES
(1, 'admin', '$2y$10$FLeKkmXouSYp5kMcoIknh.YA74IoBdRzJAHv/HDrIhUhKMU9ede..', 'admin@admin', 'admin'),
(20, 'herdy', '$2y$10$Y8LiI/lcTfnKT7CVhn7xBO/PvCOBbajK9wUPfJc3LVp3do9UbSvCG', 'herdysh30@gmail.com', 'admin'),
(21, 'herdy', '$2y$10$c9ml1eVru2GXj4q89v4icuK27wsOwOVov6.taes2HCaW00zaJXreW', 'herdy.syaban@gmail.com', 'user'),
(22, 'herdy', '$2y$10$IZ04FQdcjbHzSpVGvnQ7b.TbDJJp8cfmAftlxPV/Iz8qxQbAIZ/li', 'herdy@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nama_category`
--
ALTER TABLE `nama_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `id_category_2` (`id_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nama_category`
--
ALTER TABLE `nama_category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `nama_category` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
