# Introduction

This is the practical week in which you are going to demonstrate PHP 7 lessons that you have learned including its best practices, this template is `pre-configured` to use [PDO queries](http://zetcode.com/php/pdo/) and have some examples that you can use to help you build this application from scratch.


# Installation

Run `./install.sh` to install the project dependencies and dump autoloader.


# Objects

`index.php` = The main landing page of the application

`pages/example_page.php` = Example page template

`interface/IExample.php` = Example interface class

`abstract/AExample.php` = Example abstract class

`interface/IDbCredentials.php ` = Stores the database configuration

`classes/Connection.php` = Singleton database class connection of the application

`models/Contacts.php` = The data layer of the application


# Design Constraints

- Bootstrap or any CSS framework you prefer, having a responsive design is a plus.


# Database  

<details>
<summary>  contacts_db.sql </summary>
<br></br>

```
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2020 at 06:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```
</details>

#  Requirements

* [ ] Source code should be organized
* [ ] Use of PHP 7 new syntax
* [ ] Use of Polymorphism (Interface and Abtract class)
* [ ] Atleast one of these methods (Overriding, Overloading or Method Chaining)
* [x] Implementation of PDO connection class
* [x] Implementation of namespace and autoloader class
* [ ] Dependency injection

### Features

* A home Page
* A way to Login/Logout a user
* A way to display a list of contacts
* A way to CREATE,UPDATE and DELETE a contact

# Finished 

Submit a link to your fork of this repository to the Google Classroom assignment related to this project.
