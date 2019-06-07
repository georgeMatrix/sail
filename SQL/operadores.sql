/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-05 13:40:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for operadores
-- ----------------------------
DROP TABLE IF EXISTS `operadores`;
CREATE TABLE `operadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido_paterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_corto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vigencia_licencia` date NOT NULL,
  `vigencia_medico` date NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of operadores
-- ----------------------------
INSERT INTO `operadores` VALUES ('1', 'Zoe Dach', 'Jude Hirthe', 'Lacy Lehner', 'Sigrid Kiehn', 'Dr. Nora Conroy', '2019-06-11', '1972-06-16', 'Ezra Konopelski', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('2', 'Samanta Littel DDS', 'Miss Chaya Baumbach Sr.', 'Dashawn Kling', 'Ozella D\'Amore', 'Shane Dickens', '2018-05-05', '2006-01-16', 'Alysson Schimmel', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('3', 'Jazmyne Ferry', 'Prof. Mustafa Nader', 'Maxwell VonRueden', 'Marilyne King', 'Vernie Beatty', '1997-11-27', '2003-10-29', 'Miss Jazmin Johnson I', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('4', 'Prof. Dejah Lowe', 'Ana Kunde', 'Ms. Joelle Lemke Jr.', 'Dr. Adriel Hammes PhD', 'Mr. Efren Weissnat', '1980-01-14', '1971-08-15', 'Pansy Baumbach IV', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('5', 'Ms. Julianne Schroeder Jr.', 'Karianne Klocko', 'Mauricio Bergstrom', 'Aliya Robel', 'Mrs. Kassandra Kunze', '1991-06-04', '1972-06-03', 'Leopoldo Doyle', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('6', 'Eulalia Cronin', 'Jannie Windler', 'Hailee Ward III', 'Scarlett King', 'Justus Hansen', '2016-12-10', '2009-01-24', 'Ms. Carmen Olson V', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('7', 'Angelita McDermott', 'Prof. Marcus Collins', 'Prof. Jonas Quitzon', 'Brian Lesch', 'Alvina Hilpert', '1987-02-14', '1973-01-29', 'Wayne Renner', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('8', 'Dr. Kadin Donnelly', 'Fernando Erdman', 'Prof. Kolby Marquardt III', 'Mr. Hester Hermiston I', 'Dr. Gilberto Labadie DVM', '2000-06-29', '2004-02-01', 'Prof. Talon Koss Jr.', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('9', 'Jolie Hane', 'Mr. Jarvis Volkman', 'Carlos Dach', 'Maxie Kohler MD', 'Derick DuBuque', '1989-10-15', '1976-01-09', 'Helen Hagenes MD', '2019-06-05 05:05:38', '2019-06-05 05:05:38');
INSERT INTO `operadores` VALUES ('10', 'Ahmad Kuvalis', 'Braulio Hartmann', 'Barbara Bruen IV', 'Laurie Smitham', 'Hyman Roob', '1983-04-15', '2019-03-30', 'Brendan Smith', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('11', 'Miss Laney Parker IV', 'Natasha Orn', 'Ms. Eleanora Jacobi', 'Stephon Cartwright', 'Margarette Schmeler', '1999-07-22', '2001-05-16', 'Raphael Rau', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('12', 'Prof. Sigrid Nolan', 'Bennett Berge', 'Addie Watsica', 'Hallie Lueilwitz', 'Mr. Trystan Flatley', '2003-12-25', '1989-02-20', 'Ned Kerluke', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('13', 'Ozella Crist', 'Maggie Von', 'Tanya Reinger', 'Princess Reynolds', 'Mr. Cleve Hegmann PhD', '1999-12-30', '1986-02-18', 'Nathaniel Gerlach IV', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('14', 'Mr. Jasen Jakubowski I', 'Drew Metz', 'Ms. Libbie Waters Jr.', 'Prof. Rylan Herzog Jr.', 'Elinor Wilkinson', '1994-11-04', '2014-01-12', 'Ms. Laury Kohler DVM', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('15', 'Miss Penelope Lehner', 'Doyle Schneider', 'Antonette Miller', 'Prof. Hulda Goyette', 'Brenden Smith DVM', '1997-12-30', '1998-08-23', 'Casimir Runolfsson', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('16', 'Mrs. Brianne Stoltenberg II', 'Earnest Kozey', 'Augustus Champlin', 'Lessie Farrell', 'Dr. Adaline Russel V', '1984-08-10', '1999-01-23', 'Dr. Omer Keeling V', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('17', 'Henry Goyette', 'Ford Kutch', 'Kirk Bosco', 'Jon Ruecker', 'Prof. Margarett Cartwright Jr.', '2017-06-15', '2001-02-25', 'Odell Turcotte', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('18', 'Conner Emard', 'Dannie Roob', 'Abdul Fahey', 'Ms. Lauryn Bernier', 'Nikko Weimann PhD', '1970-02-06', '2007-02-20', 'Greyson Streich', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('19', 'Guido Bailey V', 'Miss Twila Ward MD', 'Edwardo Hermiston', 'Michael Blanda', 'Evelyn Stoltenberg MD', '2018-02-12', '1973-03-21', 'Miss Zelma Hyatt', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('20', 'Onie O\'Keefe', 'Mr. Francesco Turner DVM', 'Serenity Boyer', 'Rozella Swift', 'Lauretta Sauer', '1979-09-18', '2005-04-25', 'Pinkie Wintheiser', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('21', 'Drake Hermann I', 'Jeffery Wunsch', 'Hoyt Lind', 'Reba Vandervort', 'Lorna Schmeler', '1989-08-10', '1973-03-13', 'Ms. Cayla Lind', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('22', 'Ms. Diana Lynch', 'Ms. Polly Jakubowski IV', 'Dr. Flavio Ferry', 'Brendan Wisoky', 'Dr. Zachary Nienow', '1987-07-28', '1984-09-26', 'Lisette Ziemann', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('23', 'Keith Hintz', 'Wilfredo Maggio', 'Dr. Erling Quitzon IV', 'Citlalli Daniel I', 'Elton Torphy', '2014-02-18', '1982-12-28', 'Kamren Feest IV', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('24', 'Julian Cole', 'Vincent Hauck', 'Tanya Nolan', 'Maurice Dare DDS', 'Caleb Douglas', '1973-06-05', '2001-05-27', 'Mrs. Ada Rogahn V', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('25', 'Prof. Ansel Kihn', 'Mrs. Josianne Bahringer MD', 'River Reichert', 'Johnathan Morissette', 'Zena Luettgen MD', '2017-05-01', '1981-01-24', 'Kathlyn Hoppe Jr.', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('26', 'Ewell Beatty I', 'Jackie Rice', 'Evie Lowe Jr.', 'Jennie Ratke', 'Kristin Gerhold', '2010-07-29', '2007-02-07', 'Mrs. Allie Lind', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('27', 'Macy Mante II', 'Mateo Klocko', 'Malcolm Grant', 'Melyna Douglas', 'Mack Lowe', '2004-02-28', '1983-06-29', 'Prof. Faustino D\'Amore', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('28', 'Elnora Mills PhD', 'Holden Hackett', 'Colt Ryan', 'Reese Roob', 'Lowell Hayes', '2017-08-25', '2013-02-28', 'Mrs. Joelle Zieme MD', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('29', 'Rashawn Ward', 'Albert Cummerata', 'Conrad Rempel', 'Mr. Monte Reichel Jr.', 'Martin Kautzer', '1995-01-25', '2003-10-21', 'Rowena Hahn', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('30', 'Miss Talia Nader IV', 'Aniya Moen', 'Alec Keebler', 'Prof. Caleigh Greenholt DDS', 'Ms. Anika Baumbach', '1993-11-14', '1981-01-22', 'Quentin Nader V', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('31', 'Erik Ratke', 'Monserrate Tremblay Sr.', 'Johan Skiles III', 'Yasmin Kiehn', 'Hermann Kerluke', '2016-11-07', '2018-12-21', 'Cortez Smith', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('32', 'Cynthia Luettgen', 'Prof. Kay Kirlin V', 'Lonzo Altenwerth', 'Dr. Fatima Bergnaum DVM', 'Deshaun Buckridge', '2012-12-25', '1979-05-24', 'Jayden Kuphal Jr.', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('33', 'Frederique Brown', 'Markus Bernier II', 'Autumn Stanton', 'Dr. Macie Schoen IV', 'Euna Becker', '2015-08-18', '1991-05-26', 'Ms. Dora Kerluke', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('34', 'Enid Olson', 'Adah Lind', 'Dr. Emanuel Trantow', 'Mandy Lind', 'Prof. Minnie Schimmel', '1976-12-07', '1981-10-05', 'Drake Hills III', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('35', 'Ms. Shirley Gottlieb PhD', 'Alvena Skiles', 'Tatyana Braun', 'Mr. Harrison Torp', 'Prof. Reuben Sanford', '1978-06-21', '2000-07-01', 'Janis Roberts', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('36', 'Ms. Freda Schmidt', 'Keara Rogahn', 'Alexander Altenwerth', 'Prof. Tyrel Waters II', 'Evie Bernier', '1998-01-08', '2010-07-28', 'Leilani Purdy', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('37', 'Sandrine Balistreri', 'Lillie DuBuque', 'Cicero Kutch', 'Joseph Kuhlman', 'Hugh Lesch', '1991-11-09', '2017-05-28', 'Eloisa Stamm', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('38', 'Oscar Schowalter', 'Mrs. Crystel O\'Connell', 'Waylon Schroeder I', 'Jolie Jakubowski', 'Mr. Royal Schulist', '1986-01-03', '1983-12-03', 'Brian Botsford', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('39', 'Crystel Collier', 'Santina Cassin', 'Minerva Quitzon', 'Miss Sarah Schaefer II', 'Antwan Hills', '2001-12-07', '1996-04-05', 'Jimmy Gerlach', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('40', 'Emery Haag DDS', 'Dianna Durgan', 'Pete McKenzie', 'Doug Langosh', 'Dion Jerde', '1999-01-07', '2007-09-25', 'Mary Blick', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('41', 'Myrna Hermann', 'Ms. Maddison Sawayn', 'Edd Sporer', 'Aniya Bogan', 'Liliana Padberg', '2018-07-18', '2014-07-19', 'Dr. Jocelyn Murazik I', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('42', 'Lavinia Mueller', 'Rogers Schowalter PhD', 'Gerhard Padberg', 'Miss Eliza Kub Jr.', 'Mr. Mitchel Thiel', '1994-05-09', '1970-11-08', 'Pablo Runolfsdottir', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('43', 'Leda Terry', 'Mr. Jose Kuhlman Sr.', 'Prof. Jesus Padberg I', 'Verla Rogahn', 'Miss Reyna Bechtelar V', '2015-08-30', '1996-02-19', 'Annie Haley', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('44', 'Prof. Maritza Hickle', 'Dr. Unique Botsford Sr.', 'Mr. Furman Jacobi', 'Grant Ryan DDS', 'Dorian Haag', '2001-10-03', '1976-07-28', 'Antoinette D\'Amore DDS', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('45', 'Keyshawn Jacobs', 'Minerva Kessler', 'Rupert Erdman', 'Miss Rhea Harris', 'Dallas Eichmann V', '1988-09-27', '2017-09-20', 'Laurie Homenick Sr.', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('46', 'Savannah Mills II', 'Leonor Koepp', 'Mathilde Schamberger IV', 'Marina Trantow III', 'Sarina Muller', '2019-04-05', '1978-05-30', 'Anastasia Botsford', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('47', 'Mr. Lemuel Heidenreich', 'Werner Keebler', 'Dr. Kimberly Mante V', 'Eda Doyle', 'Etha Kub', '2008-02-08', '1972-08-16', 'Adrien Stracke', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('48', 'Leilani Reynolds', 'Richard Rohan Sr.', 'Stanford Champlin', 'Rachelle Mante', 'Elta Lakin', '1973-03-20', '2016-03-22', 'Stephan Raynor', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('49', 'Martine Weber', 'Amy Pollich', 'Dr. Connor Heaney', 'Mr. Chester Tillman', 'Clark Emmerich V', '1973-04-20', '1984-01-09', 'Aida Bosco Jr.', '2019-06-05 05:05:39', '2019-06-05 05:05:39');
INSERT INTO `operadores` VALUES ('50', 'Magdalena Cole', 'Axel Turner', 'Lorna Cummings', 'Alana Kiehn', 'Madilyn Romaguera', '2020-02-05', '1993-10-05', 'Cristopher Steuber', '2019-06-05 05:05:39', '2019-06-05 18:30:24');
