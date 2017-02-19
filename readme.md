Thomas Shaddock - PHP TMA Coursework: BBK_SSCS023H5_1617  
  
## Introduction  
Adherence has been made to the Model View Controller architectural style. The project consists of a single PDO driven data model and
a number of controllers to handle the logic within each separate page. Care has been taken not to repeat any code and reuse is a
fundamental part of this project.  
  
Please note that a free for distribution Boostrap template has been used to improve and speed up development of the UI. Whilst
some of the front end makes use of this template, the overall project and ALL of the backend work is custom and to the TMA spec.
  
## Installation:  
  
Deployment of this project is straightforward, simply extract it on a webserver, run the SQL below and you're away!
  
--  
-- Table structure for table `artist`  
--  
CREATE TABLE `artist` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(255) NOT NULL,  
  PRIMARY KEY (`id`)   
);  
  
--  
-- Dumping data for table `artist`  
--  
INSERT INTO `artist` VALUES (1,'Bing Crosby'),(2,'Bill Haley & His Comets'),(3,'Elvis Presley'),(4,'The Beatles'),(5,'Queen'),(6,'Culture Club'),(7,'ABBA'),(8,'The Jackson 5');  
  
--  
-- Table structure for table `song`  
--  
CREATE TABLE `song` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `title` varchar(255) NOT NULL,  
  `artist_id` int(11) NOT NULL,  
  `duration` int(11) NOT NULL,  
  PRIMARY KEY (`id`)  
);  
  
--  
-- Dumping data for table `song`  
--  
INSERT INTO `song` VALUES (1,'Fernando',7,257),(2,'Hound Dog',3,136),(3,'White Christmas',1,186),(4,'I Want to Hold Your Hand',4,148),(5,'Waterloo',7,169),(6,'Rock Around the Clock',2,134),(7,'Blue Suede Shoes',3,118),(8,'She Loves You',4,142),(9,'Bohemian Rhapsody',5,356),(10,'Are You Lonesome Tonight?',3,189),(11,'Hey Jude',4,431),(12,'Another One Bites the Dust',5,216);  
  
  
## Resources used:
- PDO (PHP Data Objects)
- Boostrap theme called 'SB Admin' https://startbootstrap.com/template-overviews/sb-admin/
- Bootstrap CSS library
- Jquery
- Jquery boostrap
