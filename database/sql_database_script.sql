-- MYSQL Script ---

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `default_database`
CREATE DATABASE `hng`;

-- Select database
USE default_database;


-- Table structure for table `user`
CREATE TABLE `user` (
  `_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 

-- Indexes for table `user`
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

COMMIT;