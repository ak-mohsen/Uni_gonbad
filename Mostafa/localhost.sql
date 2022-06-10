-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 26, 2014 at 11:05 AM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `hotel`
-- 
CREATE DATABASE `hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE hotel;

-- --------------------------------------------------------

-- 
-- Table structure for table `log`
-- 

CREATE TABLE `log` (
  `user` text NOT NULL,
  `ps` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `log`
-- 

INSERT INTO `log` VALUES ('admin', '123');

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `counter` int(11) NOT NULL default '0',
  `name` text NOT NULL,
  `price` text NOT NULL,
  `t` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (1, 'ÛŒÚ© ØªØ®ØªÙ‡', '3', 2);
INSERT INTO `product` VALUES (2, 'Ø¯Ùˆ ØªØ®ØªÙ‡', '4', 3);
INSERT INTO `product` VALUES (3, 'Ø¬Ù‡Ø§Ø± ØªØ®ØªÙ‡', '5', 5);
INSERT INTO `product` VALUES (4, 'Ø³ÙˆØ¦ÛŒØª Ø¯ÙˆØ®ÙˆØ§Ø¨Ù‡', '6', 0);
INSERT INTO `product` VALUES (5, 'Ø¯ÙˆØ¨Ù„Ú©Ø³ Ø¯Ùˆ Ø®ÙˆØ§Ø¨Ù‡', '7', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `rezerv`
-- 

CREATE TABLE `rezerv` (
  `vorod` text NOT NULL,
  `out` text NOT NULL,
  `name` text NOT NULL,
  `suit` text NOT NULL,
  `mobile` text NOT NULL,
  `fm` text NOT NULL,
  `suitmulti` text NOT NULL,
  `email` text NOT NULL,
  `val` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `rezerv`
-- 

