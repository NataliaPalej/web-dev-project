-- MySQL dump 10.13  Distrib 5.5.15, for osx10.6 (i386)
--
-- Host: localhost    Database: makeup
-- ------------------------------------------------------
-- Server version	5.5.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `makeupInventory`
--

CREATE DATABASE IF NOT EXISTS `makeup`;
USE `makeup`;

DROP TABLE IF EXISTS `makeupInventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `makeupInventory` (
	`productID` int(11) NOT NULL AUTO_INCREMENT,
	`productName` VARCHAR(255) DEFAULT NULL,
	`productCategory` ENUM("face", "eyes", "lips", "brows") DEFAULT NULL,
	`productDescription` VARCHAR(255) DEFAULT NULL,
	`company` VARCHAR(255) DEFAULT NULL,
	`price` DOUBLE,
	`stock` INT,
	`onSale` ENUM("yes", "no"),
	`discontinued` ENUM("yes", "no"),
	PRIMARY KEY (makeupID)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wine`
--

LOCK TABLES `makeupInventory` WRITE;
/*!40000 ALTER TABLE `makeupInventory` DISABLE KEYS */;

INSERT INTO `makeupInventory` VALUES 
(null, "NATURAL RADIANT LONGWEAR FOUNDATION", "face", "Light-as-air yet full luminous wear, perfectly balanced, buildable, breathable and fade-resistant formula offers medium-to-full coverage its perfect for normal, combination and oily skin types.", "NARS", 48.00, 150, "no", "no"),
(null,"SOFT MATTE COMPLETE CONCEALER", "face", "Concealing dark spots, under-eye circles, redness and breakouts to smoothing out uneven texture.", "NARS", 31.00, 80, "no", "no"),
(null,"LIQUID BLUSH", "face", "Buildable, blendable and incredibly long-lasting, just one pump of this luscious liquid delivers perfect, uplifting colour and a gorgeous glow.", "NARS", 33.00, 50, "no", "no"),
(null,"CLIMAX MASCARA - EXPLICIT BLACK", "eyes", "NARS’ innovative new mascara is the perfect way to fake your fullest, most fluttery eye looks ever.", "NARS", 26.50, 80, "no", "no"),
(null,"ENDLESS NIGHTS EYESHADOW PALETTE", "eyes", "Featuring everything from shimmering neutrals and matte pink tones, to pops of iridescent lilac and metallic purples, each lustrous shade.", "NARS", 58.76, 40, "no", "no"),
(null,"LAGUNA QUAD EYESHADOW", "eyes", "Featuring three light-catching shimmers in nude, ginger and copper tones, the shadows ignite the eyes.", "NARS", 48.59, 30, "no", "no"),
(null,"AFTERGLOW LIP BALM", "lips", "Now available in eight shades from the iconic Orgasm to Turbo and Wicked ways, this beautiful balm is a must-have.", "NARS", 28.00, 90, "no", "no"),
(null,"EXCLUSIVE POWERMATTE LIPSTICK", "lips", "In just one swipe it glides on bold colour that lasts for 10 hours and sets to a smooth, matte finish.",  "NARS", 29.95, 90, "no", "no"),
(null,"Gimme Brow+ Volumising Eyebrow Gel", "brows", "Volumizing eyebrow gel, for visibly thicker-looking eyebrows.",  "Benefit", 29.50, 200, "no", "no"),
(null,"Goof Proof Brow Pencil", "brows", "Features a custom, non-sharpen goof-proof tip, soft colour and a glide-on formula for easy & fast brow filling.",  "Benefit", 29.50, 80, "no", "no"),
(null,"Precisely, My Brow Pencil", "brows", "Ultra-fine eyebrow pencil which draws incredibly natural-looking, hair-like strokes that last 12 budge-proof hours.",  "Benefit", 29.50, 200, "no", "no"),
(null,"The Great Brow Basics", "brows", "Trio of Benefit bestsellers that features 2 brow pencils and 1 brow gel at a MAJOR value!",  "Benefit", 41.50, 50, "yes", "yes"),
(null,"SKIN FROST", "face", "An incredibly pigmented highlight ideal for creating an eye-catching luminous finish.", "Jeffree Star", 31.50, 180, "no", "no"),
(null,"MAGIC STAR CONCEALER", "face", "A full-coverage concealer.", "Jeffree Star", 25.50, 500, "no", "no"),
(null,"MAGIC STAR SETTING POWDER", "face", "An ultra-fine setting powder. Creasing? Can’t relate. ", "Jeffree Star", 27.75, 80, "no", "no"),
(null,"JAWBREAKER PALETTE", "eyes", "A twenty-four-colour pressed pigment palette. This palette is next level rainbow. ", "Jeffree Star", 66.50, 100, "no", "no"),
(null, "PRICKED PALETTE", "eyes", "An eighteen-colour eyeshadow palette. ", "Jeffree Star", 62.95, 80, "no", "no");

/*!40000 ALTER TABLE `wine` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-12-01  9:22:24

CREATE TABLE `users` (
	`userID` int(11) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`firstName` VARCHAR(255) NOT NULL,
	`lastName` VARCHAR(255) NOT NULL,
	`address` VARCHAR(255) NOT NULL,
	`phoneNo` VARCHAR(255) DEFAULT NULL,
	`email` VARCHAR(255) DEFAULT NULL,
	PRIMARY KEY (userID)
);

INSERT INTO `users` VALUES 
(null, "Lilly", "admin", "Lilly", "Lola", "Athlone", "089 897 3456", "LillyLola@gmail.com"), 
(null, "Adrian", "admin2", "Adrian", "Black", "Athlone", "089 899 0098", "AdrianBlack@gmail.com"), 
(null, "Kochatek", "admin3", "Kochatek", "Skarb", "Dublin", "087 111 2366", "KochatekSkarb@gmail.com"), 
(null, "Lidia", "admin4", "Lidia", "Dadal", "Galway", "087 677 9899", "LidiaDadal@gmail.com"), 
(null, "Kasia", "admin5", "Kasia", "Blue", "Tullamore", "086 112 3343", "KasiaBlue@gmail.com"), 
(null, "Dominik", "admin6", "Dominik", "Blue", "Tullamore", "086 555 7878", "DominikBlue@gmail.com");