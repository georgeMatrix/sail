/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-12 23:02:45
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of provedores
-- ----------------------------
INSERT INTO `provedores` VALUES ('1', 'Lacy Kub', 'Kimberly Hansen', 'Prof. Luis Bergstrom Jr.', 'Ruth Runte', 'Prof. Brad Wilkinson', 'Elda Gottlieb', '1939', '7377', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('2', 'Ms. Dina Nitzsche', 'Lilian Larkin', 'Adam Crist', 'Dr. Aniya Mueller DVM', 'Efren Walter', 'Darby Bode PhD', '8953', '121810', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('3', 'Sylvan Cremin Sr.', 'Lenora Schoen', 'Wilton Corkery', 'Camron Farrell III', 'Mrs. Tracy Ruecker', 'Landen Olson', '4823', '39530', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('4', 'Royal Beer IV', 'Ayla Kuhic PhD', 'Tara Koch Jr.', 'Cade Bayer II', 'Lewis Morar V', 'Prof. Armando Borer', '5237', '16680', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('5', 'Vickie Mohr', 'Maximillia Olson', 'Leonor Krajcik', 'Prof. Rylee White', 'Aidan Mueller', 'Marie Mills', '5793', '22865', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('6', 'Savanah Mosciski', 'Asha McKenzie IV', 'Richie Dach', 'Sydnie O\'Reilly', 'Mrs. Esmeralda Hoppe Sr.', 'Effie Gleason', '5708', '91362', '2019-06-13 03:52:27', '2019-06-13 03:52:27');
INSERT INTO `provedores` VALUES ('7', 'Tristin Roob', 'Oral Olson DVM', 'Terrell Graham', 'Prof. Henderson Wunsch', 'Dr. Van Von', 'Shane Paucek DDS', '6774', '122008', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('8', 'Walton Turner', 'Darrell Schmidt', 'Mr. Laverna Wilderman', 'Valentin Hammes', 'Hailie Walker', 'Mr. Olin Ullrich Jr.', '5300', '54567', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('9', 'Lonny Wiegand', 'Miss Isabell Flatley III', 'Magdalen Nader', 'Miss Cleora Murray', 'Dr. Zechariah Schulist DVM', 'Prof. Dallin Schmidt', '5640', '69865', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('10', 'Annetta Kshlerin IV', 'Prof. Dora Krajcik I', 'Taurean Reilly', 'Ms. Amelia Hammes', 'Justine Doyle', 'Tatum Bernier', '2283', '59089', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('11', 'Miss Nellie Huel DDS', 'Eladio Goldner', 'Jeremy Mohr', 'Presley Dare', 'Dorthy Hagenes', 'Marjorie Feest', '6882', '29747', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('12', 'Immanuel Bartell', 'Benedict O\'Keefe PhD', 'Rita Hintz Jr.', 'Dr. Justina Bailey', 'Angelina O\'Hara', 'Ephraim Eichmann', '7891', '78241', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('13', 'Marilou Ward', 'Dr. Jerrold Bashirian', 'Tiara Wehner', 'Dr. Sydnee Beatty', 'Oma Gibson', 'Dr. Dawson Stehr III', '5664', '24184', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('14', 'Troy Becker MD', 'Retta Oberbrunner', 'Mrs. Lilian Wintheiser', 'Torrance Sauer', 'Velva Eichmann', 'Fern VonRueden', '9183', '67270', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('15', 'Arch Pfannerstill', 'Kane Goyette III', 'Janessa Schmidt', 'Zelma Hyatt', 'Abigale Rice', 'Hellen Lueilwitz', '9732', '44456', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('16', 'Jordi Anderson I', 'Jordyn Farrell', 'Krystal Franecki', 'Alivia Gaylord Jr.', 'Samara Parker', 'Prof. Katrina Kilback', '5502', '61555', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('17', 'Dillan Medhurst', 'Reilly Ryan', 'Eldora Stroman', 'Prof. Otilia Goyette DVM', 'Vincenza Dach', 'Adelia Welch III', '8414', '20970', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('18', 'Mr. Irwin Thiel Sr.', 'Prof. Micaela Rodriguez Jr.', 'Dr. Evan Zemlak Sr.', 'Roxanne Prohaska', 'Trever Stroman DDS', 'Prof. Stefan Wiza II', '7431', '40113', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('19', 'Ceasar Schuster', 'Lauretta Welch', 'Prof. Izabella Runolfsdottir PhD', 'Dr. Berenice Waters', 'Paige Reichert', 'Monroe Swaniawski', '8692', '109189', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('20', 'Dr. Justyn Ebert', 'Helena Leuschke', 'Mrs. Willow Price IV', 'Celestine Sauer', 'Josefina Beier', 'Aaliyah Kuphal', '4684', '84297', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('21', 'Prof. Jan Koss', 'Prof. Maryse Daniel MD', 'Eriberto Eichmann Sr.', 'Ms. Estrella Gorczany', 'Marco Wilderman', 'Mr. Jamison Littel', '9818', '94131', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('22', 'Miss Adrienne O\'Keefe', 'Nick Altenwerth', 'Delphine Fahey', 'Kirk Runolfsdottir', 'Ms. Marina Bednar I', 'Nicolette Mertz', '7552', '80504', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('23', 'Gerry Wolf', 'Dr. Juliet Padberg', 'Harry Rohan', 'Mrs. Guadalupe Hauck', 'Rhoda Wilderman', 'Brady Gibson', '6552', '96216', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('24', 'Abel Dooley', 'Dr. Adan Homenick Jr.', 'Prof. Maymie Rogahn', 'Dr. Anne Bruen', 'Edna Volkman', 'Annamarie Johnson', '5200', '11224', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('25', 'Jude Harber', 'June Erdman', 'Alexzander Huels', 'Megane Heathcote', 'Matilde Hyatt', 'Mrs. Athena Mitchell PhD', '4690', '10230', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('26', 'Keegan Hand', 'Thalia Fay PhD', 'Dr. Callie Thiel MD', 'Kellen Nicolas V', 'Darryl Thiel', 'Felicita Pagac', '3008', '64749', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('27', 'Dr. Marcia Schiller IV', 'Pierce Kassulke', 'Gus Mayert', 'Peggie Durgan', 'Prof. Clifton Kiehn', 'Jovani Tromp', '3633', '87744', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('28', 'Laurine Prosacco DDS', 'Mr. Felton Breitenberg', 'Mrs. Danika Keeling MD', 'Mr. Sammie Adams PhD', 'Cristian Vandervort', 'Jairo Gibson', '6783', '3376', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('29', 'Mr. Afton Ward', 'Ollie Hansen', 'Dr. Baron Witting IV', 'Mark Schumm Sr.', 'Vivian O\'Conner', 'Prof. Jacinto Hamill I', '1373', '80778', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('30', 'Rosendo Collier', 'Sigrid Jerde', 'Cullen Hermiston', 'Talia Toy', 'Ethelyn Robel', 'Haley Deckow II', '4876', '122960', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('31', 'Prof. Trey Hagenes', 'Otho Spencer', 'Joana Becker', 'Dr. Antonietta Welch', 'Devonte Cartwright', 'Dr. Joseph Abshire', '6761', '34750', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('32', 'Prof. George Bergstrom', 'Brandy Lebsack', 'Jermaine Macejkovic II', 'Lavada Kiehn', 'Darren Parisian', 'Dion Bosco', '1751', '118056', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('33', 'Dr. Demond Romaguera', 'Pink Boyle', 'Annie Reichert II', 'Mabelle Watsica', 'Britney Kuphal MD', 'Prof. Bo Hartmann', '9731', '16036', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('34', 'Prof. Garrett Lehner', 'Ted Tromp', 'Hanna Veum DVM', 'Jerod Streich', 'Neal Pollich', 'Faye Kling', '4908', '78196', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('35', 'Ava Schumm', 'Ms. Elise Hane III', 'Mr. Milton Boyle Sr.', 'Alanis Stokes', 'Tod Gulgowski', 'Amely Hirthe', '4556', '60269', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('36', 'Ernest Auer Jr.', 'Nathanial Pagac', 'Izabella Leffler IV', 'Adrianna Gislason', 'Jeff Batz DDS', 'Aimee Bruen', '6558', '19142', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('37', 'Jackson Corwin', 'Ms. Octavia Schumm DVM', 'Mr. Colton Wiza DDS', 'Eliane Grant', 'Osborne Roob V', 'Miss Treva Nikolaus', '8538', '118407', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('38', 'Prof. Kailey West I', 'Isaac Mitchell V', 'Prof. Jeramie Medhurst III', 'Octavia Windler', 'Hazle Jakubowski PhD', 'Damion Bode', '4179', '24365', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('39', 'Chaim Quitzon Sr.', 'Genevieve Muller', 'Carli Tillman', 'Dr. Ally Ryan', 'Mekhi Nitzsche III', 'Felipa Fisher', '5434', '112440', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('40', 'Duncan Larkin', 'Kailyn Tremblay III', 'Bret Hettinger', 'Audra Moore', 'Dr. Vincenzo Hermann DDS', 'Eusebio Johnson', '5888', '93047', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('41', 'Demond Considine', 'Paul Herzog DDS', 'Mrs. Josefa Stark', 'Dr. Dorcas Hirthe III', 'Mr. Finn Ritchie Jr.', 'Grover Hirthe', '6552', '14718', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('42', 'Addison Nienow', 'Rodger Auer', 'Dr. Eli Skiles', 'Courtney Kris', 'Mrs. Liza Hand', 'Mr. Wilton Purdy', '3514', '95115', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('43', 'Tad Emard Sr.', 'Salvador Stehr', 'Adelbert McCullough', 'Devante Abbott', 'Rahul White', 'Dr. Dixie Dach Jr.', '6686', '108248', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('44', 'Prof. Rafael Lueilwitz V', 'Myriam Langworth', 'Sylvan Feest', 'Melissa Blick II', 'Arianna McKenzie Jr.', 'Thea Beer', '2550', '91462', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('45', 'Dr. Charlene Gulgowski II', 'Madeline Wilkinson I', 'Ashton Gulgowski', 'Tobin Will', 'Mr. Trenton Boyer', 'Ilene Ferry II', '1719', '82913', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('46', 'Jed Graham', 'Prof. Joaquin Ryan II', 'Dr. Margarita Ledner DVM', 'Hanna Morar', 'Mrs. Jailyn Adams', 'Dr. Lemuel McClure', '2385', '2271', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('47', 'Mr. Nathen Parker II', 'Antwan Maggio', 'Amanda Sawayn DVM', 'Will O\'Reilly', 'Loren Jones V', 'Prof. Chase Larkin', '2449', '19327', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('48', 'Prof. Gerson Roob', 'Jody Haag', 'Mr. Edgar Wyman V', 'Matteo Keebler Sr.', 'Amaya Gleichner', 'Ms. Loren Cummerata PhD', '2983', '77303', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('49', 'Benny Hackett', 'Dr. Nolan O\'Reilly', 'Clementine D\'Amore', 'Prof. Tessie Halvorson III', 'Prof. Ezekiel Mayert I', 'Mrs. Nellie Steuber', '9260', '100847', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
INSERT INTO `provedores` VALUES ('50', 'Leonor Gorczany II', 'Wyman Dach', 'Gregory Grady I', 'Arvilla Ledner', 'Valerie O\'Keefe PhD', 'Carlie Wisoky III', '5373', '51114', '2019-06-13 03:52:28', '2019-06-13 03:52:28');
