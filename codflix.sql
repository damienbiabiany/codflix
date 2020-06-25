-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2020 at 06:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `episode_num` int(11) NOT NULL,
  `release_date` int(11) NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'Science-Fiction'),
(4, 'Comédie'),
(5, 'Biopic');

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

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `media_id`, `start_date`, `finish_date`, `watch_duration`) VALUES
(2, 6, 3, '2020-06-17 10:52:06', '2020-06-30 10:52:06', 159),
(22, 12, 5, '2020-06-10 03:06:11', '2020-06-10 14:07:25', 45),
(23, 12, 8, '2020-06-10 14:07:25', '2020-06-10 14:07:25', 333);

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
(7, 2, 'Us', 'film', 'Média publié', '2019-03-21', 'A family\'s serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.\r\n', 'https://www.youtube.com/embed/hNCmb-4oXJA?autoplay=true'),
(8, 3, 'Locke & Key', 'serie', 'Média publié', '2020-02-07', 'After their father is murdered under mysterious circumstances, the three Locke siblings and their mother move into their ancestral home, Keyhouse, which they discover is full of magical keys that may be connected to their father\'s death.', 'https://www.youtube.com/embed/Gc4iXDmSC_E?autoplay=true'),
(9, 1, 'Peaky Blinders', 'serie', 'Média publié', '2013-09-13', 'A gangster family epic set in 1919 Birmingham, England; centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby.', 'https://www.youtube.com/embed/oVzVdvGIC7U?autoplay=true'),
(10, 3, 'Game of Thrones', 'serie', 'Média publié', '2011-04-17', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 'https://www.youtube.com/embed/gcTkNV5Vg1E?autoplay=true'),
(11, 2, 'The WALKING DEAD', 'serie', 'Média publié', '2010-10-31', 'Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins and must lead a group of survivors to stay alive.\r\n', 'https://www.youtube.com/embed/An0bZpuhiBE?autoplay=true');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `season_num` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `media_id`, `season_num`, `release_date`, `trailer_url`) VALUES
(1, 10, 1, '2011-03-04', 'https://www.youtube.com/embed/gcTkNV5Vg1E?autoplay=true'),
(2, 10, 2, '2012-02-02', 'https://www.youtube.com/embed/AlhHGUfCYw4?autoplay=true'),
(3, 8, 1, '2020-01-02', 'https://www.youtube.com/embed/svnAD0TApb8?autoplay=true'),
(4, 9, 1, '2013-06-13', 'https://www.youtube.com/embed/oVzVdvGIC7U?autoplay=true'),
(5, 9, 2, '2014-06-03', 'https://www.youtube.com/embed/vgK33pJp4zc?autoplay=true'),
(6, 11, 1, '2011-06-04', 'https://www.youtube.com/embed/AbtiqJGhWyY?autoplay=true'),
(7, 11, 2, '2012-06-04', 'https://www.youtube.com/embed/fXxhTs6fETw?autoplay=true'),
(8, 10, 1, '2011-03-04', 'https://www.youtube.com/embed/gcTkNV5Vg1E?autoplay=true'),
(9, 10, 2, '2012-02-02', 'https://www.youtube.com/embed/AlhHGUfCYw4?autoplay=true'),
(10, 8, 1, '2020-01-02', 'https://www.youtube.com/embed/svnAD0TApb8?autoplay=true'),
(11, 9, 1, '2013-06-13', 'https://www.youtube.com/embed/oVzVdvGIC7U?autoplay=true'),
(12, 9, 2, '2014-06-03', 'https://www.youtube.com/embed/vgK33pJp4zc?autoplay=true'),
(13, 11, 1, '2011-06-04', 'https://www.youtube.com/embed/AbtiqJGhWyY?autoplay=true'),
(14, 11, 2, '2012-06-04', 'https://www.youtube.com/embed/fXxhTs6fETw?autoplay=true');

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
(4, 'vvv@gmail.com', 'ccc'),
(5, 'aaazzzzz@gmail.com', 'zzzzzz'),
(6, 'mmmm@gmail.com', 'vert'),
(7, 'assqs@gmail.com', 'test'),
(8, 'azaza@gmail.com', 'aza'),
(9, 'ssssss@gmail.fr', 'sart'),
(10, 'sssa@gmail.fr', 'aaa'),
(11, 'ssssqsqs@gmail.fr', 'avoir'),
(12, 'coding@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_id` (`media_id`),
  ADD KEY `season_id` (`season_id`);

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
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `episode_ibfk_2` FOREIGN KEY (`season_id`) REFERENCES `season` (`id`);

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

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);
