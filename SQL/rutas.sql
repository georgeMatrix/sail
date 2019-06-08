/*
Navicat MySQL Data Transfer

Source Server         : localhost2018
Source Server Version : 100136
Source Host           : localhost:3306
Source Database       : sial

Target Server Type    : MYSQL
Target Server Version : 100136
File Encoding         : 65001

Date: 2019-06-08 16:43:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for rutas
-- ----------------------------
DROP TABLE IF EXISTS `rutas`;
CREATE TABLE `rutas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clientes` int(10) unsigned NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar_exp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remitente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_remitente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recoge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_declarado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destinatario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dom_destinatario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_entrega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embalaje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concepto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_peligroso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indemnizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias_re` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rutas_clientes_foreign` (`clientes`),
  CONSTRAINT `rutas_clientes_foreign` FOREIGN KEY (`clientes`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rutas
-- ----------------------------
INSERT INTO `rutas` VALUES ('1', '8', 'Clementine Kris', 'Miss Eldridge Farrell', 'Prof. Tyra Rippin', 'Karli Miller', 'Dr. Seamus Wisozk III', 'Amara Block', 'Ms. Summer Ratke Jr.', 'Gracie Green', 'Saige Schmitt', 'Dee Hegmann', 'Elenora Brakus', 'Dr. Kaitlin Gorczany III', 'Marcelina Walker DVM', 'Odessa Goyette', 'Albert Carter', 'Miss Zora Crona Jr.', 'Prof. Alexis Reynolds DDS', 'Prof. Casper Mosciski DVM', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('2', '9', 'Leilani Hodkiewicz DVM', 'Alysa Bergstrom', 'Bruce McCullough', 'Linnea Robel', 'Ms. Adelia Ritchie', 'Ms. Martina Goldner', 'Alexzander Huels III', 'Mrs. Krista Lang', 'Mariela Brown', 'Guido Glover', 'Audie Wilkinson', 'Mr. Kiley Rath PhD', 'Prof. Hazle Bechtelar', 'Dana Zulauf', 'Earl Wisoky II', 'Josianne Cassin', 'Prof. Elian Mitchell', 'Favian Lubowitz', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('3', '9', 'Marlen Raynor', 'Duane Bayer', 'Elyssa Purdy', 'Pierce Moore', 'Mr. Edison McClure', 'Prof. Laury Mraz', 'Dr. Osvaldo Quitzon', 'Ferne Gulgowski PhD', 'Haylie Koelpin', 'Willow Wehner', 'Nat Koss I', 'Adan Koepp', 'Olin Bauch', 'Mr. Francis Schamberger', 'Valerie Rice', 'Adele Towne', 'Dedric O\'Reilly', 'Jamir Haag', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('4', '3', 'Mohammed Thompson', 'Prof. Emiliano Klein V', 'Prof. Elvis Huels PhD', 'Mattie Koch', 'Prof. Travis Bailey', 'Miss Geraldine Jacobson', 'Ms. Cayla Shields', 'Frederic Abbott', 'Eleonore Towne', 'Dr. Broderick Stroman MD', 'Randall Daugherty', 'Mr. Isaac McGlynn', 'Prof. Hector Pagac', 'Alia Botsford', 'Eve Maggio II', 'Madelynn Mueller', 'Dr. Candida Powlowski', 'Mandy Von Jr.', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('5', '1', 'Warren Schuster', 'Curtis Barton', 'Nina Heathcote', 'Brenna Bahringer', 'Telly Kling Sr.', 'Gonzalo Mraz', 'Hollis White', 'Jewell Wunsch', 'Gloria O\'Hara', 'Arch Pacocha', 'Cleveland Swaniawski', 'Kiarra Parker', 'Dr. Marjory Dicki', 'Obie Rohan', 'Evan Hartmann', 'Ruby Haley', 'Prof. Karine Johnson DVM', 'Miss Bridgette Upton DVM', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('6', '3', 'Mr. Malachi Heller Sr.', 'Hilton DuBuque', 'Lorna Hintz', 'Ms. Eldora Schmitt I', 'Aryanna Erdman', 'Keaton Kirlin I', 'Kiara Farrell', 'Prof. Modesto Terry', 'Mr. Arvid Ward', 'Hilario Schamberger', 'Itzel Abshire', 'Brannon Wisoky', 'Marjorie Osinski', 'Jameson Howell', 'Kennedy Paucek', 'Martine Kautzer Jr.', 'Prof. Abraham Boyle', 'Felicia Schumm DDS', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('7', '2', 'Dr. Andrew Braun', 'Alfonzo Murphy', 'Genoveva Cronin', 'Luna Rosenbaum', 'Waylon Rogahn', 'Ms. Gilda Ruecker', 'Meghan Yundt', 'Prof. Lucienne Heaney', 'Alvena Reichel', 'Gaetano Waelchi', 'Glen Lakin', 'Zechariah Friesen', 'Ocie Wisoky', 'Dr. Jocelyn Bayer II', 'Hayden O\'Kon', 'Miss Flavie Reichert', 'Erna Cormier', 'Friedrich Waters', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('8', '3', 'Margret Champlin', 'Mr. Lazaro Lindgren I', 'Trace Ratke V', 'Markus Kirlin DVM', 'Jermaine Bauch', 'Alexandria Ruecker II', 'Demetrius Upton', 'Prof. Jerome Walker PhD', 'Esperanza Steuber', 'Ceasar Doyle', 'Mrs. Eulah Blanda PhD', 'Prof. Antone Marvin Sr.', 'Kim Raynor', 'Carlo Gislason', 'Mollie Cummerata', 'Everett Parker', 'Aric Prohaska', 'Laurie Abernathy', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('9', '7', 'Reymundo Lubowitz', 'Prof. Johnson Schuster V', 'Isadore Morar', 'Hilario Nolan', 'Glenna Okuneva', 'Arlie Dooley', 'Miss Estel Keeling DDS', 'Clark Kutch', 'Sheila Bartoletti', 'Mrs. Courtney Brekke Jr.', 'Prof. Cierra Gorczany DDS', 'Manley Metz', 'Green Bogisich Sr.', 'Dr. Heath Grady III', 'Trace Rath', 'Prof. Zola Bosco IV', 'Mr. Cleve Robel MD', 'Idella Bergstrom', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('10', '9', 'Amelia Skiles', 'Angela O\'Reilly Jr.', 'Prof. Esther Hettinger', 'Arjun Howell PhD', 'Jaiden Leannon', 'Mr. Lucious Oberbrunner', 'Prof. Lucious Hessel', 'Ryley Connelly', 'Hillard Nikolaus', 'Prof. Lewis Powlowski', 'Jed Wehner', 'Columbus Raynor', 'Leonora Weimann Sr.', 'Jadyn Green Jr.', 'Edwardo Quitzon Sr.', 'Prof. Wendell Pfeffer', 'Josefina Conroy III', 'Zachariah Ebert', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('11', '5', 'Noemi Mayert', 'Stefanie Fisher', 'Giovanni White DVM', 'Jazmin Stiedemann', 'Prof. Caitlyn Lindgren I', 'Mr. Reilly Prosacco', 'Nicole Hackett', 'Dr. Darrin Mann II', 'Dr. Kennith Koelpin', 'Hellen Lubowitz', 'Eugene Lindgren', 'Dortha Roberts IV', 'Jeffrey Kiehn', 'Prof. Thomas Hand', 'Laurel Schmidt', 'Elias Wisozk Sr.', 'Samson Stehr', 'Chasity Wunsch', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('12', '7', 'Mr. Mackenzie Renner PhD', 'Doyle Ziemann', 'Humberto Herzog', 'Miss Virgie Bauch', 'Elbert Oberbrunner', 'Leila Wisoky', 'Dr. Dominic Sipes', 'Avery Blick', 'Cassidy Pfeffer', 'Mr. Crawford Johnson', 'Lyric Heidenreich', 'Joanne Hirthe', 'Megane Reichert', 'Jeramy Quigley', 'Josefina Haag', 'Mr. Carmine Little', 'Miss Meaghan Howell III', 'Dasia Satterfield', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('13', '1', 'Dr. Shaylee Moen', 'Talon Gusikowski', 'Miss Arielle Grimes', 'Sienna Hane', 'Dudley Rowe PhD', 'Evert McLaughlin', 'Lucas Dicki V', 'Alfonzo Cruickshank MD', 'Jerome Mayer', 'Colleen Spinka', 'Dr. Hazel Cruickshank', 'Elisha Berge', 'Daphne Considine', 'Dr. Jerod Moen DVM', 'Miss Viva Aufderhar', 'Kade Denesik', 'Garth Abshire', 'Clementine Harvey', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('14', '10', 'Marvin Wiza', 'Alan Wehner', 'Lavina Russel', 'Blair Rath DVM', 'Miss Elisha Beier II', 'Monty Ruecker', 'Kailyn Schiller', 'Lionel Pouros', 'Vernie Goldner', 'Prof. Raleigh Rolfson', 'Henriette Prosacco', 'Ms. Reina Hackett Sr.', 'Prof. Eldon Dickens', 'Diana Stark', 'Miss Elda Bruen III', 'Cary Spencer', 'Miss Darby Blanda', 'Laverna Medhurst', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('15', '4', 'Melvin Beier', 'Prof. Adan Rowe III', 'Dr. Logan Oberbrunner', 'Anna Jakubowski', 'Daphnee Mayert', 'Prof. Bryon Williamson', 'Dr. Brendan Mante', 'Jarrell Fritsch', 'Oliver Bosco', 'Leif Kassulke', 'Al Rath MD', 'Annie Ferry', 'Kaitlin Kerluke', 'Maureen Tillman', 'Charles Murazik', 'Mr. Tito Willms', 'Mrs. Tess Littel', 'Ms. Magdalen Stokes DDS', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('16', '8', 'Fermin Hermiston', 'Prof. Jamal Hammes DDS', 'Madyson Casper', 'Greta Christiansen', 'Hettie Koepp', 'Retta Swaniawski V', 'Emie Rolfson', 'Elizabeth O\'Kon DDS', 'Arlie Lynch', 'Dr. Lela Larson DVM', 'Mr. Sage Bashirian', 'Arthur Carroll', 'Amelia Schimmel', 'Ophelia Auer', 'Kiana Beer', 'Braeden Mitchell', 'Mrs. Adrianna O\'Kon', 'Prof. Jean Corkery III', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('17', '5', 'Dr. Lorine Heidenreich DVM', 'Sigurd Waters Jr.', 'Jazmyne Mills', 'Mr. Darrel Collins', 'Josiane Torp', 'Miss Adrienne Runolfsdottir', 'Gino Ferry', 'Madilyn Upton', 'Ms. Maribel Harber', 'Emmalee Bashirian', 'Prof. Birdie Doyle I', 'Willy Miller', 'Mrs. Jennie Mann', 'Miss Gloria Heidenreich DVM', 'Madison Schuster', 'Dr. Emerald Kreiger I', 'Mr. Juvenal McKenzie', 'Alfredo Aufderhar', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('18', '3', 'Ladarius Reichert', 'Jocelyn Collins', 'Mrs. Eve Zieme MD', 'Diego Nitzsche', 'Bret Mraz', 'Miss Izabella Brekke III', 'Viviane Mayer Sr.', 'Nat Zulauf III', 'Avery Goodwin', 'Ms. Constance Anderson Jr.', 'Prof. Jack Barrows', 'Miss Aylin VonRueden', 'Mrs. Adelia Langworth III', 'Ellie Nader', 'Nikita Veum', 'Prof. Torrance Wuckert', 'Dr. Chesley Gerhold', 'Margaretta Rutherford II', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('19', '8', 'Miss Euna Yundt PhD', 'Jackie Smitham', 'Marjorie Davis', 'Kole Trantow', 'Seamus Schmidt', 'Ludwig Pfeffer', 'Prof. Kenneth Runte', 'Erika McLaughlin', 'June Hayes DVM', 'Michale Runolfsson', 'Kade Daugherty', 'Herminio Gerhold', 'Veda Ferry', 'Prof. Ollie Berge', 'Sam Donnelly', 'Dr. Adolphus Graham III', 'Milo Hand', 'Clementine McGlynn PhD', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('20', '5', 'Jeanne O\'Hara', 'Rodger Funk', 'Makenzie Ferry', 'Jacklyn Blanda', 'Sandrine Bashirian', 'Ernesto Shanahan', 'Maci Keeling', 'Mr. Gavin Hagenes', 'Rosa Williamson', 'Daniela Zboncak', 'Dr. Arvilla Yundt', 'Brady Wisoky', 'Freda Konopelski DDS', 'Jazmyn Rohan', 'Ike Vandervort', 'Dr. Micah D\'Amore', 'Josue Koelpin', 'Zachary Feeney', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('21', '1', 'Kristopher Littel', 'Brandon Schoen', 'Eleanore Kautzer', 'Mrs. Nola Bartoletti MD', 'Ara Wilkinson', 'Lincoln Stanton Jr.', 'Miss Carli Bradtke Sr.', 'Mr. Stone Robel', 'Miss Marta Haag DVM', 'Mariane Stroman', 'Ed Grady', 'Liam Corwin', 'Matilda Cremin', 'Dr. Edmund Koelpin II', 'Billy Larkin', 'Mrs. Jude Adams', 'Prof. Haley Ebert', 'Prof. Ludie Hauck', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('22', '7', 'Una Gislason', 'Dewayne Frami', 'Marques Strosin', 'Yasmeen Crist', 'Dr. Helene Cartwright', 'Miss Zelma Eichmann PhD', 'Zoie Daugherty PhD', 'Mr. Wilhelm Wuckert', 'Daisy Strosin', 'Mrs. Mayra Stanton Jr.', 'Hosea Langworth II', 'Rollin Lockman PhD', 'Dr. Madyson Morar', 'Layne Cole', 'Dr. Nelson Price Jr.', 'Alexzander Brown', 'Allie Dietrich', 'Josephine Labadie', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('23', '6', 'Jalyn Kshlerin I', 'Alda Pollich I', 'Jailyn Schulist V', 'Antwan Kemmer', 'Isaias Skiles', 'Abraham O\'Hara Sr.', 'Mason Lueilwitz', 'Genevieve Waelchi DVM', 'Ashlynn Greenfelder', 'Benjamin Bailey', 'Ms. Nina Mann', 'Dell Dooley', 'Mya Nikolaus', 'Claudine Wilkinson', 'Ona Mann Sr.', 'Gloria Keebler', 'Ms. Kenyatta Champlin', 'Annabell Toy', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('24', '3', 'Grady Wilkinson', 'Gianni Corwin', 'Austyn Cummings', 'Kamryn Wolf', 'Kory Rice DVM', 'Maya Hintz', 'Gennaro Nikolaus', 'Helmer Hahn', 'Bailee Runolfsdottir', 'Dr. Ophelia Upton PhD', 'Manuel Kreiger', 'Jarrett Thiel', 'Ms. Cecile Ruecker PhD', 'Robert Boyle', 'Mrs. Leanna Balistreri', 'Mr. Jerad Harris', 'Madonna Heidenreich Sr.', 'Cyril Kassulke I', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('25', '9', 'Prof. Anais Von', 'Arianna Ferry PhD', 'Prof. Blaze Stokes', 'Zoe Osinski', 'Isaiah Tremblay Sr.', 'Prof. Delaney Schaden I', 'Seth Leuschke', 'Allen Breitenberg', 'Leonel Hickle V', 'Finn VonRueden', 'Ms. Leatha Howell I', 'Marquise Bruen', 'Clementine Keeling', 'Lisa Murray', 'Idella Mueller DDS', 'Hipolito Ankunding', 'Camren Hodkiewicz Jr.', 'Jeff Gibson', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('26', '8', 'Maeve Strosin', 'Freeda Ondricka', 'Mrs. Margarett VonRueden', 'Roger Strosin', 'Catalina Jakubowski', 'Vanessa Kris DDS', 'Dr. Roel Fahey IV', 'Monty Hayes V', 'Forrest Corwin', 'Prof. Dixie Stroman DDS', 'Dr. Petra Champlin Jr.', 'Billie Daugherty', 'Theresa Botsford Jr.', 'Ms. Skyla Kovacek III', 'Mrs. Nelle Berge', 'Prof. Faye Reilly', 'Letitia Bruen', 'Keshaun Bahringer', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('27', '1', 'Chaim Fay', 'Max Green Sr.', 'Aliza Robel', 'Sim Simonis', 'Miss Virginie Goodwin', 'Prof. Viola Lebsack', 'Miss Edwina Gottlieb', 'Pearlie Goodwin', 'Dr. Moshe Kub', 'Mrs. Virginie Lowe I', 'Eduardo O\'Conner PhD', 'Gerda Herman', 'Maggie Gerlach', 'Isobel Turner', 'Mr. Mustafa Johnston MD', 'Elsa Predovic', 'Monserrat Rau DVM', 'Suzanne Cronin', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('28', '2', 'Serenity Sauer', 'Dr. Dax Macejkovic', 'Ms. Rita Kilback', 'Waino Purdy', 'Roselyn Beatty', 'Mr. Monserrat Mante', 'Cornell DuBuque', 'Harvey Miller', 'Asia Quigley', 'Ashlynn Weimann', 'Lacey Hoppe', 'Leon Bailey', 'Carlo Satterfield', 'Joannie Thompson Sr.', 'Gia Bergstrom', 'Kenneth Weber', 'Josephine O\'Hara', 'Stewart Pfannerstill III', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('29', '8', 'Miss Oceane Hill I', 'Hobart Hudson', 'Alexis Stracke', 'Mose Kshlerin', 'Hobart Bartell', 'Mr. Clifton Koelpin DDS', 'Dr. Tanner Schroeder', 'Mrs. Dakota Koss PhD', 'Arvel Ruecker', 'Trevor Parker', 'Elissa Nitzsche', 'Breana Bogan', 'Samir McDermott', 'Taryn Pfeffer', 'Gertrude Lynch', 'Reina Satterfield', 'Dr. Clinton Hoppe', 'Kaleigh Stracke', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('30', '6', 'Dr. Dean Jenkins', 'Lyla Torphy', 'Davion Predovic', 'Raymond Russel', 'Austen Gleason', 'Edyth Towne', 'Dr. Noah Gusikowski III', 'Odie Koss', 'Kennith Franecki', 'Dr. Thaddeus Blanda II', 'Adolf Langosh', 'Dr. Marquise Wilderman II', 'Susan Friesen', 'Dr. Emory Vandervort III', 'Estelle Schmitt DVM', 'Shayne Walker', 'Selena Bahringer', 'Mr. Pedro Tromp DDS', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('31', '1', 'Prof. Alanna Wyman', 'Sadye Kunze', 'Prof. Jacey Osinski', 'Dr. Thad Kassulke PhD', 'Dr. Ryann Beier DDS', 'Mrs. Emmy Cartwright', 'Mohammed Cummings', 'Mr. Hector Nienow Jr.', 'Libby Kirlin', 'Dr. Karli Conn I', 'Prof. Faustino Sawayn I', 'Verda Russel', 'Shaylee Bartoletti DVM', 'Conor Treutel', 'Charlene Leannon IV', 'Dr. Camilla Dooley Jr.', 'Raquel Bernhard Jr.', 'Federico Rippin', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('32', '5', 'Mr. Wiley Howell', 'Cheyanne Lebsack', 'Marion Cummings', 'Leila Schimmel', 'Matilda Little II', 'Charley Hodkiewicz', 'Mr. Cristian Bins IV', 'Minerva Rath', 'Prof. Bianka Schroeder', 'Christina Swift', 'Shakira Kris', 'Matilde Orn', 'Beth Wyman', 'Prof. Henderson Howell', 'Ms. Kaylie O\'Reilly II', 'Ms. Shanel Wiza', 'Dr. Helmer Johnson', 'Prof. Rachael Lind Sr.', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('33', '7', 'Green Powlowski I', 'Mrs. Palma Yost', 'Grace Ankunding', 'Micaela Brekke PhD', 'Dr. Lyda Lockman', 'Mrs. Nikita Okuneva DVM', 'Clarabelle Tromp', 'Violet Hill', 'Mrs. Rosalee Treutel III', 'Ferne Hansen', 'Loma Schiller DVM', 'Arch Tromp', 'Ms. Viviane Kulas', 'Prof. Gavin Kulas MD', 'Brandi Larson', 'Bernhard Rau', 'Andres Marks', 'Myrtie Reinger V', '5', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('34', '1', 'Giovani Rowe', 'Heidi Jakubowski', 'Prof. Donna Rippin', 'Donna Parisian', 'Vada Lynch', 'Terrance Rolfson V', 'Dr. Pietro Koepp Sr.', 'Kelli Bauch', 'Anibal Jaskolski DVM', 'Elvera Christiansen V', 'Ross Parisian', 'Winona Kautzer', 'Wyman Cummings DDS', 'Eusebio Ratke', 'Mrs. Jacky Nader', 'Dr. Giovanni Howell', 'Raquel Kertzmann', 'Dr. Frederik Mante', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('35', '1', 'Misael Legros', 'Prof. Alyce Hyatt Jr.', 'Dr. Terrill Gulgowski', 'Iliana Spencer', 'Heidi Fritsch', 'Waldo Wisozk II', 'Elinore Gulgowski V', 'Prof. Stacey Kuhlman', 'Philip Gaylord II', 'Caesar Heller', 'Dr. Percy Hegmann II', 'Gerard Langworth IV', 'Mr. Rashawn Tillman', 'Mr. Jonathon Greenfelder', 'Vince Sawayn Sr.', 'Hector Bechtelar', 'Mr. Montana Mraz Jr.', 'Prof. Myrtle Cruickshank I', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('36', '6', 'Alek Dooley', 'Edison Terry MD', 'Prof. Blake Runolfsson', 'Flossie Moen', 'Chasity Mayert', 'Herbert Ebert I', 'Lucio Smitham', 'Brad Mueller', 'Prof. Berry King', 'Gustave Waelchi', 'Lucious Reinger', 'Prof. Chet Bergnaum', 'Mrs. Marielle Murphy', 'Mr. Ruben Altenwerth', 'Miss Kellie Wintheiser', 'Rosalee Huel I', 'Raheem Swift', 'Halle Strosin', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('37', '5', 'Lester Schroeder I', 'Christopher Yundt', 'Dr. Curtis O\'Hara', 'Walter Quitzon', 'Dr. Desiree Kreiger', 'Magdalen Effertz', 'Ervin Wehner DVM', 'Prof. Gonzalo Thompson', 'Dr. Lawson Mosciski', 'Ms. Dana Flatley DVM', 'Prof. Chesley Bogan V', 'Minerva Ryan', 'Daisha Howe', 'Dr. Annabelle Rau', 'Stephon Brown', 'Dr. Alexane Beahan IV', 'Prof. Cleve Schuster', 'Prof. Maud Leannon', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('38', '10', 'Clement Walker', 'Dr. Jesus Carter II', 'Prof. Jesus Conn', 'Ms. Lulu Hessel', 'Dr. Skylar Volkman', 'Jarret VonRueden', 'Callie Murazik', 'Corine Collins', 'Dr. Gail Deckow DDS', 'Ariel Turcotte', 'Dr. Freida Kuphal', 'Esmeralda Ebert', 'Ryley Parker', 'Prof. Lazaro Schaden', 'Kiana Gutkowski', 'Dr. Bennie Hane IV', 'Sabina Ernser', 'Norene Bashirian', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('39', '10', 'Prof. Tracey Green', 'Ari Cremin', 'Gladys Sipes', 'Matilde Treutel', 'Ashtyn Auer', 'Shakira Kirlin', 'Prof. Lenna Deckow V', 'Heber Howe', 'Marianna Predovic', 'Arvel Stamm DDS', 'Elwin Johns PhD', 'Dr. Adella VonRueden III', 'Tess Deckow', 'Hertha Mohr Jr.', 'Quincy Bernier', 'Ms. Kayli Schimmel IV', 'Elena Gutkowski DDS', 'Prof. Hiram Christiansen', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('40', '2', 'Genevieve Kutch II', 'Luz Crooks', 'Frank Stracke', 'Jalyn Stoltenberg', 'Pierre Rohan', 'Selina Herzog IV', 'Abigayle Schuster', 'Gus Kuvalis', 'Ali Dooley', 'Nyasia Kertzmann', 'Joanne Rowe V', 'Vivianne Wintheiser', 'Ivory Pfannerstill', 'Jazlyn Bogisich', 'Art Bernhard', 'Raphael Reichel', 'Ms. Mona Cartwright Sr.', 'Dr. Reyes Fritsch MD', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('41', '9', 'Taurean Nicolas I', 'Wilbert Crist', 'Korbin Rolfson', 'Deborah Willms', 'Gracie Glover Jr.', 'Edna Doyle', 'Patricia Raynor', 'Emely Trantow PhD', 'Sally Leffler', 'Eddie Bahringer DDS', 'Prof. Paxton Sauer Jr.', 'Mabel Haag', 'Emmett Turner', 'Xander Barton', 'Joanne Eichmann DDS', 'Audra Bogan', 'Ms. Ona Feil II', 'Rhoda Reinger', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('42', '4', 'Quinn Schroeder', 'Clarissa Swift', 'Nya Rau', 'Miller D\'Amore', 'Jaleel Gulgowski', 'Milford Powlowski PhD', 'Grover Leannon Sr.', 'Dr. Palma Hills', 'Serena Kohler', 'Mrs. Brittany Kuvalis', 'Theodora Johnston IV', 'Ludie Schamberger', 'Prof. Jose Heidenreich', 'Ibrahim Greenholt', 'Tierra Ondricka DDS', 'Dr. Amalia Johns', 'Mariane McGlynn', 'Lue Fahey', '1', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('43', '7', 'Mr. Barry Runte', 'Chesley Gislason', 'Prof. Alda Waters IV', 'Connor Harvey', 'Miss Felicity Pfeffer PhD', 'Camille Hahn', 'Hector Kohler MD', 'Prof. Rogelio O\'Kon III', 'Alfred Padberg', 'Aurelia Considine', 'Jaqueline Wisozk', 'Prof. Viola Barrows DDS', 'Tania Morar', 'Mariah Kling', 'Prof. Rebecca Sipes', 'Chauncey Ruecker', 'Dr. John Pollich', 'Zachary Turner', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('44', '9', 'Cora Gleichner PhD', 'Abelardo Weimann Sr.', 'Noemy Hoeger', 'Oswaldo Donnelly', 'Vernon Lubowitz PhD', 'Jaren Deckow', 'Travis Hintz', 'Shane Carter', 'Cordell Fahey DDS', 'Aric Altenwerth I', 'Mireya Kuhn', 'Daniela Willms', 'Giovani Harber', 'Dr. Russell Ortiz III', 'Izaiah Ledner', 'Daniella Collins', 'Clarissa Bechtelar II', 'Ms. Laila Rogahn MD', '2', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('45', '6', 'Gideon Gaylord', 'Wade Lubowitz', 'Vergie Rogahn', 'Miss Veronica Walter IV', 'Tina Runolfsdottir', 'Miss Adriana Gaylord', 'Brannon Wehner', 'Mattie Connelly', 'Jan Rogahn', 'Stephanie Greenfelder DDS', 'Dr. Mozell Romaguera', 'Rosalyn DuBuque', 'Kristofer Moore DVM', 'Kolby Mohr', 'Skyla Dickinson', 'Mr. Obie Kuphal DVM', 'Reba Kemmer III', 'Casimir Heathcote Jr.', '3', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('46', '8', 'Dianna Hodkiewicz', 'Guy Nicolas Jr.', 'Cecile Feeney', 'Prof. Hiram Hodkiewicz Jr.', 'Elizabeth Beatty', 'Shaun Weber', 'Immanuel Runte PhD', 'Florencio Legros', 'Margret Yost', 'Herta Farrell', 'Rebecca Feest IV', 'Dr. Camilla Dietrich V', 'Marie Willms', 'Prof. Boyd Rohan I', 'Rebekah Cartwright', 'Lincoln Schinner', 'Harry Daugherty DDS', 'Darlene Schmeler I', '4', '2019-06-08 18:13:02', '2019-06-08 18:13:02');
INSERT INTO `rutas` VALUES ('47', '4', 'Aylin Fisher', 'Gunner Kuhic', 'Bryce Jacobi IV', 'Hardy Kub', 'Norwood Franecki', 'Ariel King MD', 'Rosella Douglas', 'Meta Marvin', 'Miss Blanca Leuschke II', 'Lurline Spencer Jr.', 'Johathan Williamson', 'Lavina Konopelski', 'Fredrick Hickle', 'Kelley Rolfson', 'Libbie Aufderhar', 'Vivien Bogisich', 'Willie Cassin', 'Caroline Boyle', '4', '2019-06-08 18:13:03', '2019-06-08 18:13:03');
INSERT INTO `rutas` VALUES ('48', '3', 'Burley White', 'Laron Dach', 'Jennifer Bartell IV', 'Prof. Peggie Grant Jr.', 'Lavina Schoen', 'Ashton Bins', 'Mr. Nicholaus Bartoletti I', 'Efrain Wiegand', 'Kameron Koss', 'Ms. Vergie Moore', 'Alexis Bode', 'Quinton Abbott', 'Dr. Wyman Kihn MD', 'Ms. Anne Flatley', 'Roselyn Pagac', 'Willy Turcotte', 'Mr. Sherwood Flatley', 'Elvie Larkin', '1', '2019-06-08 18:13:03', '2019-06-08 18:13:03');
INSERT INTO `rutas` VALUES ('49', '3', 'Waylon Ullrich', 'Emmet McCullough', 'Mr. Elmo McClure DDS', 'Mrs. Lorine Goodwin DVM', 'Trystan Reynolds', 'Mrs. Cindy Gottlieb', 'Rodrick O\'Keefe', 'Ms. Cayla Marvin', 'Brycen Gleason PhD', 'Zora Cronin', 'Caitlyn Hoeger PhD', 'Miss Mae King', 'Eliezer Hagenes', 'Nola Greenfelder IV', 'Dr. Darrel Ferry DVM', 'Mr. Harold Lockman PhD', 'Mrs. Myrtis Langworth MD', 'Geovanni Herman', '3', '2019-06-08 18:13:03', '2019-06-08 18:13:03');
INSERT INTO `rutas` VALUES ('50', '9', 'Blaise Wisoky', 'Jayde Rowe', 'Amparo McClure', 'Jordane Simonis', 'Bertha Grimes', 'Amalia Wiza', 'Nikko Purdy', 'Asia Abbott', 'Miss Brandy Herman III', 'Amparo Ziemann', 'Presley Kunde', 'Daron Kihn I', 'Sallie Davis', 'Mr. Grant Yundt DVM', 'Prof. Gregory Conroy', 'Prof. Tomas Satterfield DDS', 'Mr. Erwin Berge', 'Sylvester Davis', '1', '2019-06-08 18:13:03', '2019-06-08 18:13:03');
INSERT INTO `rutas` VALUES ('51', '5', 'rico', 'ok', 'o', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'o', 'k', 'ok', 'ok', 'ok', 'o', 'k', 'ok', 'ok', '3', null, null);
INSERT INTO `rutas` VALUES ('52', '1', 'GEORGE EL RICO', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '4', null, null);
INSERT INTO `rutas` VALUES ('53', '1', 'TUPPER', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '45', null, null);
INSERT INTO `rutas` VALUES ('54', '1', 'THE CRAN', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'O', 'K', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '10', null, null);
INSERT INTO `rutas` VALUES ('55', '1', 'ORIGEN', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', 'OK', '4', null, null);
INSERT INTO `rutas` VALUES ('56', '1', 'don mergas', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', '5', null, null);
