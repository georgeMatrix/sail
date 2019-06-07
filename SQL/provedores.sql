/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-04 23:39:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for provedores
-- ----------------------------
DROP TABLE IF EXISTS `provedores`;
CREATE TABLE `provedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credito` int(11) NOT NULL,
  `saldo` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of provedores
-- ----------------------------
INSERT INTO `provedores` VALUES ('1', 'Sam Johnston', 'Amelia McLaughlin MD', 'Dr. Marcel Spinka', 'Murl Roob', 'Prof. Marilyne Bergnaum V', 'Murl Sipes', '8996', '13286', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('2', 'Prof. Ransom Blick PhD', 'Miss Rahsaan Marks DVM', 'Derick Towne', 'London Hartmann Sr.', 'Megane Cruickshank I', 'Bennett Wintheiser V', '3050', '62623', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('3', 'Prof. Coy Heaney I', 'Cali Hessel', 'Mr. Sean Vandervort MD', 'Dovie Lowe', 'Dr. Minerva Gleichner IV', 'Michael Strosin', '5259', '15256', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('4', 'Roger Adams', 'Jayne Schoen', 'Valentine Kuphal', 'Prof. Thomas Boyle', 'Fannie Osinski', 'Mrs. Colleen Rodriguez V', '1744', '49148', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('5', 'Mr. Maurice Kiehn DVM', 'Agnes Veum', 'Hollis Watsica', 'Litzy Cummerata', 'Mr. Ruben Christiansen', 'Dr. Macey Feeney', '9335', '51852', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('6', 'Constantin Klein', 'Francisca Hilpert', 'Ms. Ursula Beer MD', 'Jaqueline Greenfelder', 'Jett Schimmel I', 'Dannie Walsh', '7734', '12742', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('7', 'Ms. Dolores Abshire', 'Jeff Ferry', 'Candido Pagac', 'Ms. Matilda Blick V', 'Hermina Brown V', 'Mr. Bradford Littel V', '9762', '40439', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('8', 'Clark Dibbert', 'Prof. Berta Gottlieb IV', 'Shakira Lueilwitz', 'Alana Kilback', 'Prof. Mable Koss', 'Prof. Flavio Murray II', '7551', '108671', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('9', 'Kareem Parker', 'Ms. Kyla Jerde', 'Esmeralda Zemlak', 'Esta Kilback', 'Dr. Damian Miller', 'Jenifer Gerlach', '7607', '41245', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('10', 'Ila Fadel', 'Miss Kariane Kilback DDS', 'Katlynn Parisian', 'Ms. Vesta Harber I', 'Liza Graham', 'Kiara Fahey', '9100', '111738', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('11', 'Kaycee Leannon', 'Tillman Rath', 'Margot Hegmann', 'Roel Friesen', 'Marilou Schneider', 'Baron Bechtelar DVM', '7107', '79856', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('12', 'Alda Paucek', 'Eulalia Herman', 'Clark Kuhlman MD', 'David Brown', 'Marjorie Luettgen', 'Prudence Schultz', '2799', '112690', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('13', 'Mr. Scotty Huels', 'Cyrus Hansen Sr.', 'Vicky O\'Kon', 'Ms. Marjolaine Predovic', 'Virginia Swaniawski', 'Bette Schiller', '4860', '58939', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('14', 'Javier Schoen', 'Elmo Harber', 'Reyna Flatley PhD', 'Linda Altenwerth', 'Ricky Jenkins', 'Aracely Tremblay', '3847', '74471', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('15', 'Annamae Bartoletti I', 'Vivienne Willms', 'Linda Kovacek III', 'Pedro Homenick', 'Prof. Jodie Smitham Jr.', 'Cecil Kautzer', '4433', '61377', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('16', 'Eduardo Zulauf II', 'Laron Pfeffer', 'Ari Prosacco', 'Madge Paucek', 'Annamae Berge IV', 'Prof. Carmen Ledner DVM', '3369', '15415', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('17', 'Kaylah Predovic', 'Dr. Darien Cole', 'Dr. Santos Gleason', 'Llewellyn Osinski', 'Dr. Blake Hamill PhD', 'Vicky Cummings', '9492', '121415', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('18', 'Antwon Zemlak', 'Darryl Waelchi', 'Dr. Amalia Keebler II', 'Dorcas Kassulke Jr.', 'Alia Gerhold', 'Emerald Hamill', '2545', '11788', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('19', 'Dora Marks', 'Liza Rippin DDS', 'Kristy O\'Connell', 'Adan Bogan', 'Kendra Raynor PhD', 'Daphne Marks', '3559', '76597', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('20', 'Rubye Cruickshank DDS', 'Kyra Ondricka', 'Prof. Chelsea Moen', 'Ezekiel Mayert', 'Burley Wunsch', 'Anabelle Kirlin', '7819', '84812', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('21', 'Dr. Gabe White', 'Therese Hansen', 'Tavares Kuphal DDS', 'Jennyfer Friesen', 'Annamarie Streich', 'Ruby Satterfield', '3565', '26485', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('22', 'Kade Simonis', 'Dr. Jailyn Halvorson DDS', 'Dejah Johnston', 'Rhett McKenzie', 'Prof. Henriette Rath', 'Clemens Schoen', '8381', '37455', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('23', 'Dr. Dion White', 'Daron Feest MD', 'Adriana Yundt MD', 'Dr. Anabelle Hill', 'Dejon Towne I', 'Dr. Harvey Mayer PhD', '7555', '32476', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('24', 'Rosalyn Steuber', 'Mr. Darian Stanton V', 'Kassandra Effertz', 'Dolores Gulgowski IV', 'Joe Kessler', 'Prof. Ryley Dibbert IV', '1121', '69719', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('25', 'Willis Farrell', 'Tevin Harvey', 'Giles Muller', 'Shirley Nikolaus PhD', 'Mr. Timothy Wehner', 'Josiah Simonis', '1592', '66773', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('26', 'Dr. Francesco Kirlin', 'Candelario Beier', 'Neil Schmitt', 'Prof. Keanu Bogan I', 'Rashawn Bins', 'Prof. Timmothy Rogahn', '7413', '7342', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('27', 'Miss Sister Stanton', 'Tia McGlynn', 'Dejuan Bednar Sr.', 'Mrs. Simone Harber', 'Damion Purdy', 'Walton Upton', '2746', '96872', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('28', 'Estel Kling', 'Tessie Wisoky', 'Mr. Mitchel O\'Hara II', 'Mrs. Daniela Price Sr.', 'Alycia Langworth Sr.', 'Mrs. Michaela Cremin', '7855', '2619', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('29', 'Ms. Stella Buckridge', 'Trey Corwin', 'Connie Ward', 'Miss Pascale Maggio II', 'Ernie DuBuque', 'Mr. Dan Herman', '4079', '58772', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('30', 'Bertha Rau', 'Maximus Wisoky', 'Maggie Ortiz', 'Anika Ernser', 'Ashley Bergstrom', 'Stephen Wilkinson', '4758', '27179', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('31', 'Tate Schuster', 'Royal Kessler', 'Tate Muller', 'Jonathan Armstrong', 'Prince Block', 'Kennedy Hirthe Sr.', '7732', '106536', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('32', 'Mrs. Sarah Becker MD', 'Kamren Gusikowski II', 'Omer O\'Keefe', 'Bettye O\'Conner', 'Mr. Dale Heller', 'Carmine Stoltenberg', '6030', '30878', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('33', 'Ms. Katelynn Fay', 'Prof. Jeffery Mraz', 'Enrico Orn', 'Harold Okuneva', 'Dr. Callie Lang PhD', 'Paige Thiel', '9660', '62495', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('34', 'Arnaldo Stiedemann', 'Janelle Sporer', 'Forrest Goldner MD', 'Dariana Koepp', 'Lori Dickens', 'Dr. Rossie Murazik III', '1335', '27591', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('35', 'Ebony Mann', 'Winona Grant', 'Arnaldo Weissnat', 'Caleigh Emmerich', 'Herbert Dare', 'Kimberly Krajcik', '2276', '120846', '2019-06-05 03:44:05', '2019-06-05 03:44:05');
INSERT INTO `provedores` VALUES ('36', 'Paris Dooley', 'Ms. Velma Hammes II', 'Ellie Nitzsche DDS', 'Melany Kerluke', 'Alejandrin Smitham', 'Kyra Aufderhar', '9915', '23875', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('37', 'Rocio Johnston', 'Dr. Milford Bednar', 'Annetta Lynch IV', 'Wilber Lebsack', 'Mr. Dagmar Weber', 'Raphaelle Willms', '8908', '19950', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('38', 'Bethel Veum', 'Ms. Neva Moen I', 'Shaina Lindgren', 'Alexis Gerhold', 'Shana Rowe', 'Rosario Gulgowski DDS', '5579', '15320', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('39', 'Theresia Botsford V', 'Dr. Ryan Mann', 'Israel Kuvalis', 'Gideon Steuber PhD', 'Jake Cremin', 'Aurelie Christiansen', '1330', '34445', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('40', 'Nathanael Welch', 'Waino Keebler', 'April Towne', 'Dr. Tyler Corwin', 'Pablo Keeling', 'Abner Denesik', '3149', '84154', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('41', 'Asa Pouros IV', 'Dr. Hilton Muller I', 'Jacynthe Flatley V', 'Francisca Walker', 'Ignacio Marquardt', 'Dr. Edwin Wisozk Sr.', '7662', '112404', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('42', 'Ottis Grimes', 'Elijah Moen', 'Clotilde Bernier', 'Monte Auer DDS', 'Ofelia Lebsack', 'Nadia Kunze', '7959', '62966', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('43', 'Dr. Clair Kulas', 'Dudley Tromp', 'Bonnie Romaguera', 'Margaret Bahringer', 'Ezekiel Kuphal', 'Hildegard Bayer', '6833', '102579', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('44', 'Mr. Hollis Roberts', 'Robb Witting', 'Prof. Elfrieda Vandervort IV', 'Bradley O\'Keefe', 'Gust Moore', 'Brandi Schamberger', '3592', '61078', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('45', 'Luz Bednar Sr.', 'Roxane Marvin', 'Mollie Feeney', 'Mariela Abbott', 'Hattie Ebert', 'Kurtis Morissette', '1372', '78311', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('46', 'Ozella Anderson II', 'Prof. Ward Nienow', 'Eulah Leannon', 'Derrick D\'Amore', 'Tristian Durgan', 'Dr. Uriah Marquardt', '4611', '18217', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('47', 'Reuben Bosco Sr.', 'Hailee Hettinger', 'Wilhelmine Jenkins', 'Maeve Friesen', 'Nathan Ebert', 'Owen Kuhic', '9801', '49242', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('48', 'Mortimer Stoltenberg', 'Blair Leffler', 'Bret Schroeder', 'Ms. Alexandrea Padberg', 'Alexandra Pfeffer', 'Kirstin Osinski', '9664', '77857', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('49', 'Aaliyah Hermiston', 'Miss Alvena Zboncak', 'Aida Blanda', 'Jefferey Corwin', 'Dr. Linda Rice I', 'Richard Feil Sr.', '3918', '7741', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('50', 'Kassandra Schmeler', 'Marcella Kunde', 'Chanelle Buckridge', 'Mrs. Connie Kemmer III', 'Elyssa O\'Connell', 'Luisa Langosh DVM', '4318', '77083', '2019-06-05 03:44:06', '2019-06-05 03:44:06');
INSERT INTO `provedores` VALUES ('51', 'enrique', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '1000', '1000', null, '2019-06-05 04:35:01');
