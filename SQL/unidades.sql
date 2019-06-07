/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-05 19:06:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for unidades
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provedor` int(10) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `economico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguro` date NOT NULL,
  `verificacion` date NOT NULL,
  `fm` date NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unidades_provedor_foreign` (`provedor`),
  CONSTRAINT `unidades_provedor_foreign` FOREIGN KEY (`provedor`) REFERENCES `provedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES ('1', '4', 'Monroe Bruen', 'Harrison Wisozk', 'Demario Gaylord Sr.', 'Harry Jones', 'Sabina Weber', 'Yasmine Keeling PhD', 'June Price Jr.', 'Randy Mraz', '2018-07-03', '1979-03-23', '1979-08-25', 'Alejandra Heller', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('2', '9', 'Mr. Gustave Tillman', 'Isobel Bauch', 'Modesta Gutkowski DDS', 'Tania Cronin', 'Prof. Keshawn Lindgren', 'Jaleel Deckow V', 'Santino Thompson', 'Urban Hermiston', '2006-05-20', '2002-10-13', '2010-07-18', 'Leta Hills DDS', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('3', '4', 'Naomie Dare', 'Fanny Schoen DVM', 'Kim Jacobs', 'Prof. Montana McGlynn', 'Dr. Silas Johnson', 'Barney Fay Sr.', 'Deangelo O\'Conner', 'Mr. Philip Jerde', '1989-04-01', '1988-06-16', '2019-04-05', 'Prof. Geoffrey Schinner IV', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('4', '3', 'Ms. Kacie McDermott', 'Giovani Rutherford DVM', 'Cleo Kohler', 'Jaylon Schneider', 'Justyn Fisher', 'Leonie Will', 'Armand Bartoletti', 'Marietta Lehner', '1997-06-01', '1995-05-31', '1971-10-08', 'Mateo Grant', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('5', '1', 'Dr. Delpha Rempel', 'Darrell Murray', 'Mr. Efren Rice Jr.', 'Kari Leannon', 'Itzel Johns', 'Helena Hagenes', 'Emil Heaney', 'Vivian Armstrong', '1970-11-19', '2002-08-08', '2013-02-23', 'Theresa Miller', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('6', '3', 'Nikko Ratke', 'Dr. Maeve Johnston PhD', 'Ms. Sarina O\'Hara III', 'Antonette Herzog', 'Prof. Rocky Moore DDS', 'Drake McCullough', 'Nash West', 'Juwan Volkman', '1995-08-28', '1993-05-28', '1990-11-12', 'Karen Mayer', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('7', '2', 'Keyon Hane PhD', 'Nola Hamill Sr.', 'Marjory Boyle', 'Ethyl Block III', 'Prof. Wilfredo Boehm DDS', 'Colton Wunsch Jr.', 'Prof. Loma Murphy PhD', 'Dr. Hilbert Rosenbaum DDS', '2007-05-26', '2013-02-10', '1996-11-16', 'Gennaro Kulas', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('8', '9', 'Prof. Chelsea Wisozk', 'Marcos Batz', 'Leonor O\'Hara I', 'Rashad Sauer IV', 'Prof. Alec West MD', 'Beulah Schiller', 'Prof. Camren Simonis', 'Dr. Sam Dietrich II', '2016-11-17', '1992-11-14', '2016-09-04', 'Mr. Jerald Rodriguez V', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('9', '9', 'Zena Legros', 'Ramona Metz', 'Myrtice Mayert', 'Dr. Schuyler Collier', 'Adrien Stiedemann', 'Cecilia Quigley', 'Reanna Gulgowski', 'Miss Vanessa Blanda II', '1991-02-20', '1996-03-08', '1997-03-19', 'Birdie Wuckert III', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('10', '1', 'Miss Anika Kilback V', 'Lacey Lindgren PhD', 'Dr. Terrance Yost', 'Lowell Turcotte', 'Sophia Osinski', 'Prof. Vicky McKenzie Sr.', 'Anna Hermiston', 'Ada Hettinger', '2013-04-18', '1973-09-14', '2015-08-22', 'Mr. Travon Hirthe PhD', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('11', '6', 'Mr. Cesar McCullough', 'Hulda Bins', 'Mr. Brock Graham DVM', 'Carolina Cormier', 'Stacy Wintheiser', 'Jerome Purdy', 'Westley Mayert I', 'Sedrick Maggio', '1978-08-23', '2004-04-20', '2007-05-05', 'Dr. Toni Gaylord III', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('12', '7', 'Gregory Kling', 'Emery Stehr', 'Alvera Abbott', 'Zoe Konopelski', 'Kassandra Stokes', 'Prof. Hilma Von', 'Zander Hermiston', 'Jeremie Kuphal', '1972-12-09', '1995-02-25', '1999-12-26', 'Casandra Steuber DVM', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('13', '1', 'Torrance Boyer', 'Mrs. Hulda Kuhn', 'Wyatt Koss', 'Alan Will II', 'Dr. Torrance Skiles', 'Mr. Boris Kiehn', 'Rosendo Dare', 'Karl Muller', '1989-09-05', '2002-08-29', '1977-04-29', 'Ms. Lyda Schaden', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('14', '4', 'Dr. Lizeth Veum', 'Dudley Bogan', 'Dr. Arnoldo Hintz', 'Christ Beer', 'Ellsworth Gerhold', 'Oscar Mosciski Sr.', 'Kaia Welch', 'Daisy Bartell', '2015-08-13', '2003-06-11', '1995-04-09', 'Dr. Kennedy Carter', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('15', '8', 'Trent Wuckert', 'Abbie Konopelski', 'Asa Mayert', 'Prof. Paolo Grady Sr.', 'Raymond Pagac', 'Colby Wilderman', 'Anissa Paucek', 'Vernie Stanton', '1986-04-23', '2001-09-23', '1990-10-25', 'Kendall McKenzie Jr.', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('16', '9', 'Dr. Nina Tromp', 'Deja Balistreri', 'Tremaine Reynolds', 'Loren O\'Connell II', 'Baylee Rogahn DVM', 'Dr. Retta Hoppe', 'Dayna Macejkovic', 'Trace Padberg', '1987-03-21', '1985-08-18', '2004-05-25', 'Mariah Kub', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('17', '6', 'Jayce Lemke', 'Leanne Bashirian', 'Jodie Bartell', 'Reva Beier', 'Mckayla Lemke', 'Mr. Nicklaus Roob DDS', 'Everardo Corkery II', 'Mr. Anderson Block V', '2011-08-26', '2008-03-03', '1990-03-09', 'Tillman Bernhard', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('18', '2', 'Miss Cara Dooley', 'Maureen Considine', 'Sammy Cassin', 'Americo Muller', 'Edd Osinski', 'Lee Welch Sr.', 'Alisha McLaughlin', 'Helena Langosh', '1994-11-19', '1997-09-02', '2007-02-11', 'Tremaine Weissnat IV', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('19', '7', 'Miss Carole Breitenberg IV', 'Miss Cayla Mertz I', 'Miss Margie Hyatt DVM', 'Cordie Bergstrom', 'Kendra Bayer', 'Roscoe Oberbrunner DVM', 'Leland Pfannerstill', 'Althea Bednar', '2002-07-07', '1988-01-01', '1990-12-06', 'Alexandro Walker', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('20', '8', 'Ezequiel Lebsack', 'Dr. Meredith Robel PhD', 'Carroll Casper', 'Dangelo Heller', 'Wellington O\'Keefe', 'Mr. Efrain Block III', 'Wilburn Green DVM', 'Llewellyn Lockman', '1988-01-21', '1978-08-15', '2002-10-23', 'Raphael Eichmann V', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('21', '8', 'Sylvester Wunsch', 'Prof. Marisa Schuster', 'Thaddeus Casper III', 'Meghan Mann IV', 'Ronny Gislason', 'Joanny Wunsch III', 'Destany Bartoletti', 'Mr. Johnpaul Dickinson', '1998-08-22', '2012-09-10', '1992-10-29', 'Santina Blick', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('22', '10', 'Shayna Smith', 'Colt Lynch', 'Oleta Mante', 'Ludwig Boyle', 'Prof. Ashleigh Kassulke MD', 'Dr. Ulices Hamill', 'Mr. Akeem Bins Sr.', 'Dr. Viviane Olson V', '2010-07-09', '2003-05-27', '1982-11-17', 'Johnathan Lang I', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('23', '7', 'Alan Schoen', 'Miss Maybelle Fritsch DDS', 'Gerda Ratke PhD', 'Dena Baumbach', 'Coby Jenkins', 'Alexander Dach', 'Lafayette Mante', 'Golden Denesik', '1982-11-14', '1975-10-10', '1970-10-27', 'Zion Little', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('24', '10', 'Mariah Schultz', 'Mrs. Ellen Krajcik', 'Alysa Harris', 'Arianna Torphy', 'Keegan Kilback', 'Dr. Wyatt Ryan Sr.', 'Alek Hickle III', 'Everett Larkin', '2001-07-16', '1971-07-28', '1997-04-09', 'Daniella Goodwin', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('25', '6', 'Mr. Terrill Rogahn V', 'Dayana Lowe DDS', 'Deanna Fisher', 'Terry Wiza', 'Hardy Gislason', 'Adan Gerlach', 'Jules Stanton', 'Hollis Hilpert Jr.', '1974-06-10', '2002-06-07', '2017-06-23', 'Dr. Alfonzo Gleason', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('26', '5', 'Christop Terry', 'Sherman West', 'Dr. Valentin Sanford Sr.', 'Zita Emard', 'Elza Waelchi', 'Mario Bode', 'Nels Wolff', 'Miss Daphnee Hoppe IV', '1975-04-20', '2014-04-04', '1977-04-06', 'Justine Schaden', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('27', '9', 'Ryann Wuckert', 'Johnpaul Schmitt', 'Alvah Lockman', 'Jade Schmeler', 'Mr. William Cormier', 'Dolly Cremin', 'Mrs. Estelle Schmitt I', 'Blanca Hudson', '1984-06-22', '2011-04-14', '2016-10-28', 'Ana Wilderman', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('28', '2', 'Dorthy Kerluke', 'Moises Maggio DVM', 'Mr. Donnell Zulauf', 'August Beer I', 'Amparo Jacobi', 'Ramiro Davis I', 'Chesley Nader IV', 'Shannon Stark', '1987-11-05', '2006-04-12', '1980-11-20', 'Devyn Morar', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('29', '7', 'Kennedy Schroeder V', 'Alfreda Runolfsdottir', 'Ms. Annetta Mann II', 'Anastacio Heathcote', 'Nolan Dibbert PhD', 'Prof. Cayla Beier PhD', 'Jolie Kilback', 'Sonia Johnston', '1976-05-21', '1991-05-21', '2002-03-20', 'Sheldon Parker', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('30', '4', 'Shawna O\'Connell', 'Dr. Andy Schiller DVM', 'Elisha Dicki', 'Mr. Ola Reichert Sr.', 'Miss Leora Weimann', 'Mr. Cody Rippin Sr.', 'Colleen McKenzie', 'Max Larkin IV', '1970-09-20', '1974-03-12', '2018-05-30', 'Ernesto VonRueden', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('31', '10', 'Miss Edythe Torphy', 'Gerry Koelpin Sr.', 'Ike Nienow', 'Matteo Goldner DDS', 'Declan Dietrich', 'Teagan Schmidt', 'Lavonne Harber Jr.', 'Chad Howe', '1998-10-14', '1970-06-10', '2001-07-03', 'Dr. Braulio Langosh', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('32', '2', 'Jaydon Aufderhar I', 'Eulah Nolan', 'Miss Pasquale Rogahn', 'Dr. Orval Gulgowski', 'Maxie Stracke', 'Miss Raquel Steuber III', 'Ernesto Mann', 'Abbie Wintheiser', '1991-12-12', '1996-07-18', '1981-10-06', 'Gina O\'Conner', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('33', '5', 'Alberta Wehner', 'Dr. Ruby Maggio', 'Dr. Mohammed Kihn III', 'Veronica Cartwright', 'Fabiola Greenfelder', 'Jalen Vandervort', 'Noah Auer MD', 'Barrett Glover', '1979-11-17', '1998-01-15', '2012-07-29', 'Russ Mueller', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('34', '6', 'Retta Brakus DVM', 'Jamel Hane', 'Sally Bashirian V', 'Lisa Mills', 'Mrs. Jacklyn Kessler IV', 'Tiana Reinger', 'Prof. Amparo Lakin V', 'Dr. Brendon Ruecker DDS', '1972-11-25', '2001-10-18', '1970-10-05', 'Ms. Betsy Dare', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('35', '6', 'Edythe Leuschke', 'Dr. Jamir Kris MD', 'Macey Kautzer', 'Luigi Ruecker II', 'Odessa Crooks', 'King Spinka', 'Judy Donnelly', 'Clemmie Kunze I', '2011-07-20', '1994-12-09', '1976-06-26', 'Etha Prosacco', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('36', '9', 'Dr. Stuart Berge', 'Amari Nienow', 'Stacey Schowalter', 'Herman Corkery', 'Minerva Kub', 'Alvena Weissnat DDS', 'River Harvey', 'Charles Sanford', '2003-12-28', '2003-11-02', '2005-07-06', 'Dr. Jayde Beer I', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('37', '5', 'Mrs. Chloe Parker', 'Verla Little', 'Gerhard Feil', 'Phyllis O\'Keefe', 'Garrick Brown', 'Prof. Elody Lang', 'Nettie Herman', 'Dortha Kihn III', '2011-12-23', '1985-03-06', '2016-02-07', 'Rita Lehner', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('38', '9', 'Carmine Kohler II', 'Eleonore Turcotte', 'Willow Rempel', 'Maddison Lang', 'Napoleon Cassin', 'Elliot Wiegand', 'Duncan Hand', 'Dr. Hazle Schiller V', '1972-01-14', '1999-08-03', '1999-05-12', 'Miss Kasey Littel', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('39', '6', 'Prof. Joshua Bernier', 'Prof. Brain Keeling', 'Mrs. Mariana Schultz II', 'Danyka Okuneva III', 'Maximillian Marquardt', 'Miss Winifred Lakin DVM', 'Roselyn Fisher', 'Isobel O\'Keefe I', '1979-01-15', '2012-06-14', '1998-09-12', 'Anthony Ebert', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('40', '9', 'Else Pacocha MD', 'Mr. Presley Ryan', 'Etha Hegmann', 'Uriah Stokes', 'Janessa Johns II', 'Reanna Waters', 'Juvenal Hettinger', 'Asa Schaefer', '1971-11-19', '1971-09-25', '1999-09-03', 'Dr. Orville Dare', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('41', '6', 'Sandra Denesik', 'Mr. Virgil Hill Jr.', 'Prof. Bernard Kirlin', 'Dedrick Pacocha', 'Myrtice Marks', 'Eveline Brekke V', 'Maryam Pouros', 'Mrs. Arvilla Metz II', '1984-07-28', '1991-01-21', '2011-05-28', 'Kamron Harris', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('42', '5', 'Cyril Hayes DVM', 'Nicklaus Erdman', 'Frederique Langosh', 'Prof. Tiara Moen DVM', 'Mr. Kris Herman', 'Kelli Conroy', 'Mr. Isaiah Gulgowski II', 'Vicenta Feest', '2018-03-24', '2018-06-24', '1992-01-19', 'Miss Kayli Hoppe Sr.', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('43', '5', 'Theodora Blick', 'Amani Parker', 'Adelbert Homenick', 'Braeden Lind', 'Miss Lenora Yost', 'Malachi Carroll', 'Amie Kulas', 'Dr. Johathan Abbott', '1978-09-10', '1981-09-08', '1984-02-17', 'Damaris Lockman', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('44', '5', 'Aaron Schmitt', 'Gideon Monahan', 'Mr. Fern Johnston DDS', 'Magnolia Kirlin', 'Flavio Schuster', 'Trisha Barton', 'Agnes Little', 'Charlotte Mante', '2006-03-03', '1973-10-23', '2011-09-16', 'Opal Hoppe IV', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('45', '4', 'Webster Jacobs', 'Estel Orn', 'D\'angelo Waelchi', 'Salma Runolfsson MD', 'Clifford Fahey', 'Luis Tremblay PhD', 'Magnolia Larkin', 'Johnson Fay', '1971-06-14', '1974-05-22', '1973-01-19', 'Courtney Batz', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('46', '8', 'Lewis Reinger', 'Merritt Gusikowski', 'Russell Torphy', 'Hettie Becker', 'Dr. Constance Schimmel V', 'Elizabeth Auer III', 'Joany Labadie', 'Miss Ressie Moen', '1979-01-22', '1997-01-10', '1986-08-21', 'Emmalee Williamson Sr.', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('47', '2', 'Ms. Adah Schoen', 'Dr. Erin Runolfsdottir II', 'Rebeca DuBuque III', 'Everett Gerhold', 'Deborah Dooley', 'Katherine Schmeler', 'Prof. Kamron King MD', 'Mr. Odell Feil DDS', '2017-03-11', '1991-04-10', '1994-06-21', 'Destiney VonRueden', '2019-06-05 22:55:55', '2019-06-05 22:55:55');
INSERT INTO `unidades` VALUES ('48', '4', 'Carli Hilpert', 'Dewitt Schulist', 'Liana Cartwright', 'Dr. Henderson Dietrich', 'Alba Beier', 'Dr. Bobbie Bosco', 'Prof. Ken McClure', 'Gregoria Connelly', '1981-08-07', '1984-12-21', '1977-08-09', 'Prof. Jonatan Will PhD', '2019-06-05 22:55:56', '2019-06-05 22:55:56');
INSERT INTO `unidades` VALUES ('49', '4', 'Dr. Donavon Kassulke IV', 'Sigrid Weber DDS', 'Juston Homenick', 'Gunner Romaguera MD', 'Casey Abshire', 'Ed Boehm', 'Shanon Swaniawski', 'Mr. Carmelo Huels', '1971-02-15', '2010-08-13', '2017-10-25', 'Prof. Angelica Vandervort', '2019-06-05 22:55:56', '2019-06-05 22:55:56');
INSERT INTO `unidades` VALUES ('50', '3', 'Waylon Orn', 'Rex Denesik', 'Mr. Lon Wyman III', 'Justice Swaniawski PhD', 'Kirsten Metz', 'Harley Brown', 'Norene Russel', 'Justina Pfeffer', '2001-12-28', '2004-09-20', '2009-04-10', 'Johnny Gislason', '2019-06-05 22:55:56', '2019-06-05 22:55:56');
INSERT INTO `unidades` VALUES ('51', '12', 'George X', 'si', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', '2019-06-04', '2019-06-05', '2019-06-06', 'weee', null, '2019-06-05 23:56:02');
INSERT INTO `unidades` VALUES ('52', '8', 'dos', 'dos', 'dos', 'dos', 'dos', 'dos', 'dos', 'dos', '2019-06-01', '2019-06-02', '2019-06-03', '23', null, null);
