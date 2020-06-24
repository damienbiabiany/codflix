-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 24, 2020 at 10:05 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`) VALUES
(1, 2, 'Alien Covenant', 'film', 'Média publié', '2017-05-10', 'Almost eleven years after the disastrous expedition to the distant moon LV-223, the deep-space colonisation vessel Covenant, with more than 2,000 colonists in cryogenic hibernation, is on course for the remote planet Origae-6 with the intention to build a new world. Instead, a rogue transmission entices the crew to a nearby habitable planet which resembles Earth. The unsuspecting crewmembers of the Covenant will have to cope with biological foes beyond human comprehension. Ultimately, what was intended as a peaceful exploratory mission, will soon turn into a desperate rescue operation in uncharted space.\r\n', 'https://www.youtube.com/embed/svnAD0TApb8?autoplay=true\r\n'),
(2, 3, 'Avengers: Endgame', 'film', 'Média publié', '2019-04-24', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.\r\n', 'https://www.youtube.com/embed/TcMBFSGVi1c?autoplay=true'),
(3, 1, 'Dangerous lies', 'film', 'Média publié', '2020-04-30', 'When a wealthy elderly man dies and unexpectedly leaves his estate to his new caregiver, she\'s drawn into a web of deception and murder. If she\'s going to survive, she\'ll have to question everyone\'s motives - even the people she loves.', 'https://www.youtube.com/embed/EzJJo0whbJ4?autoplay=true'),
(4, 1, 'Ip Man 3', 'film', 'Média publié', '2015-12-16', 'When a band of brutal gangsters led by a crooked property developer make a play to take over a local school, Master Ip is forced to take a stand.', 'https://www.youtube.com/embed/_wUcbN34leM?autoplay=true'),
(5, 2, 'A Quiet Place', 'film', 'Média publié', '2018-06-20', 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.', 'https://www.youtube.com/embed/p9wE8dyzEJE?autoplay=true'),
(6, 1, 'Kingsman', 'film', 'Média publié', '2015-02-18', 'A spy organisation recruits a promising street kid into the agency\'s training program, while a global threat emerges from a twisted tech genius.', 'https://www.youtube.com/embed/kl8F-8tR8to?autoplay=true'),
(7, 2, 'Us', 'film', 'Média publié', '2019-03-21', 'A family\'s serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.\r\n', 'https://www.youtube.com/embed/hNCmb-4oXJA?autoplay=true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'coding@gmail.com', '123456'),
(2, 'test@gmail.com', 'eeee'),
(3, 'aaaa@gmail.com', 'com'),
(4, 'vvv@gmail.com', 'ccc'),
(5, 'aaazzzzz@gmail.com', 'zzzzzz'),
(6, 'mmmm@gmail.com', 'vert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);
