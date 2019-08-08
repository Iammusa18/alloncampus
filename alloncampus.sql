-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2018 at 03:16 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alloncampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` smallint(5) UNSIGNED NOT NULL,
  `onDate` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status_check` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category`, `onDate`, `title`, `subtitle`, `content`, `image`, `status_check`) VALUES
(1, 1, '2018-05-15', 'Football', NULL, '<div class=\"row\">\r\n                        <div class=\"section-title text-center\">\r\n                            <h3>THE ESSEX BLADES MEN\'S FOOTBALL CLUB</h3>\r\n                            <p>Football (or soccer) is a team sport played between 2 teams of 11 players and is one of the world\'s most popular sports. The game is played on a rectangular field with a goal at each end. The object of the game is to score by getting the ball into the opposing goal, and the team that scores the most goals by the end of the match wins.\r\n<h4>HOW MANY TEAMS DO WE HAVE?</h4>\r\n<ul>\r\n<li>1st team (BUCS South East 1B)</li>\r\n<li>2nd team (BUCS South East 2B)</li>\r\n<li>3rd team (BUCS South East 4D)</li>\r\n<li>4th team (BUCS South East 5B)</li>\r\n<li>5th team - Southend (BUCS South East 7B)</li>\r\n</ul>\r\n<br>\r\n<h4>RECENT HONOURS?</h4>\r\n<ul>\r\n<li>BUCS National Trophy Runners-Up 2015/16 (1st team)</li>\r\n<li>BUCS South Eastern 6B League Champions 2015/16 (4th team)</li>\r\n</ul>\r\n<br>\r\n<table class=\"table table-bordered table-striped table-hover\">\r\n<thead>\r\n<th class=\"text-center\">Date</th>\r\n<th class=\"text-center\">Teams</th>\r\n<th class=\"text-center\">Result</th>\r\n<th class=\"text-center\">Venue</th>\r\n</thead>\r\n<tbody>\r\n<tr><td>Wednesday, 31 January 2018</td><td>University of Essex Mens 1st  -  University College London Mens 1st</td><td>3  -  2</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 24 January 2018</td><td>University of Essex Mens 1st  -  London School of Economics Mens 1st</td><td>3  -  1</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 17 January 2018</td><td>University of Essex Mens 2nd  -  University of Essex Mens 1st</td><td>1  -  1</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 06 December 2017</td><td>London School of Economics Mens 1st  -  University of Essex Mens 1st</td><td>3  -  0</td><td>Berrylands (LSE Sportsground)</td></tr>\r\n</tbody>\r\n</table>\r\n\r\n</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/14883696_10153975309996517_2320221360666646145_o[1].jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/14902713_10153975308111517_8784545112952383660_o[1].jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>\r\n<div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/Football(1)[1].jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/Football[1].jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>', 'images/portfolio/football3.jpg', 'pending'),
(2, 1, '2018-04-09', 'Baketball', NULL, '<div class=\"row\">\r\n                        <div class=\"section-title text-center\">\r\n                            <h3>THE ESSEX BLADES MEN\'S BASKETBALL CLUB</h3>\r\n                            <p>Basketball is a fast paced team sport played with 5 players on each side. The aim of the game is to score more points than the other team in 4 x 10 minute periods by shooting the ball into the basket 10feet above the ground. You can dribble and pass to keep the ball moving and help you to get past opponents trying to stop you from scoring.\r\n<h4>HOW MANY TEAMS DO WE HAVE?</h4>\r\n<ul>\r\n<li>Men\'s 1st team (BUCS Premier South)</li>\r\n<li>Men\'s 2nd team (BUCS South East 3B)</li>\r\n</ul>\r\n<br>\r\n<h4>RECENT HONOURS?</h4>\r\n<ul>\r\n<li>Men\'s 1st team - BUCS National Trophy Winners 2016/17</li>\r\n<li>Men\'s 1st team - BUCS Premier South Playoff Winners 2017</li>\r\n<li>Men\'s 1st team - BUCS South East 1A Winners 2015/16 & 2016/17</li>\r\n<li>Essex Blades Coach of the Year 2015/16 - Mark Lloyd</li>\r\n</ul>\r\n<br>\r\n<table class=\"table table-bordered table-striped table-hover\">\r\n<thead>\r\n<th class=\"text-center\">Date</th>\r\n<th class=\"text-center\">Teams</th>\r\n<th class=\"text-center\">Result</th>\r\n<th class=\"text-center\">Venue</th>\r\n</thead>\r\n<tbody>\r\n<tr><td>Wednesday, 14 February 2018</td><td>London School of Economics Mens 1st  -  University of Essex Mens 2nd</td><td>92  -  77</td><td>Mossbourne Community Academy</td></tr>\r\n<tr><td>Wednesday, 07 February 2018</td><td>University of Essex Mens 1st  -  Oxford University Mens 1st</td><td>83  -  61</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 07 February 2018</td><td>University of Essex Mens 2nd  -  University College London Mens 2nd</td><td>76  -  32</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 31 January 2018</td><td>University of Essex Mens 1st  -  University of the West of England (UWE) Mens 1st</td><td>42  -  54</td><td>University of Essex Sports Centre</td></tr>\r\n</tbody>\r\n</table>\r\n\r\n</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/1.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/2.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>\r\n<div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/7.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/29.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>', 'images/portfolio/basketball.jpg', 'active'),
(3, 1, '2018-05-15', 'Volleyball', NULL, '<div class=\"row\">                         <div class=\"section-title text-center\">                             <h3>THE ESSEX BLADES VOLLEYBALL CLUB</h3>                             <p>Volleyball is essentially a more complicated game of \"donâ€™t let the balloon touch the floor\". Both teams can have up to 12 players within the squad, with 6 players on the court at a time. To win, you have to beat the opposition within 5 sets. In each set, you have to be the first to 25 points, ensuring you beat the opponent with 2 clear points. You can win points through serving, spiking, blocking and also making errors. <h4>HOW MANY TEAMS DO WE HAVE?</h4> <ul> <li>Men\'s 1st team (BUCS Premier South)</li> <li>Women\'s 1st team (BUCS Premier South)</li> <li>Men\'s 2nd team (BUCS South East 1A)</li> <li>Women\'s 2nd team (BUCS South East 2B)</li> </ul> <br> <h4>RECENT HONOURS?</h4> <ul> <li>Men\'s 1st team - BUCS Premier South Winners 2016/17</li> <li>Men\'s 1st team - Volleyball England Student Cup Winners 2016/17</li> <li>Women\'s 1st team - BUCS Premier South Runners-Up 2016/17</li> <li>Women\'s 1st team - Volleyball England Student Cup Runners-Up 2016/17</li> <li>Men\'s 2nd team - BUCS South East 2B Winners 2016/17</li> <li>Men\'s 2nd team - BUCS South East Conference Cup Winners 2016/17</li> <li>Essex Blades Bronze Standard Club - 2016/17</li> <li>Essex Blades Team of the Year 2016/17 - Men\'s Volleyball 2nd team</li> </ul> <br> <table class=\"table table-bordered table-striped table-hover\"> <thead> <th class=\"text-center\">Date</th> <th class=\"text-center\">Teams</th> <th class=\"text-center\">Result</th> <th class=\"text-center\">Venue</th> </thead> <tbody> <tr><td>Wednesday, 14 February 2018</td><td>University of Essex Womens 2nd  -  Queen Mary University of London Womens 1st</td><td>3  -  2</td><td>University of Essex Sports Centre</td></tr> <tr><td>Sunday, 11 February 2018</td><td>University of Essex Mens 2nd  -  Royal Holloway, University of London Mens 1st</td><td>0  -  3</td><td>University of Essex Sports Centre</td></tr> <tr><td>Wednesday, 07 February 2018</td><td>University of Essex Mens 1st  -  University of East London Mens 1st</td><td>3  -  1</td><td>University of Essex Sports Centre</td></tr> <tr><td>Wednesday, 07 February 2018</td><td>University of Essex Womens 1st  -  University of East London Womens 1st</td><td>3  -  2</td><td>University of Essex Sports Centre</td></tr> </tbody> </table>  </p>                         </div>                     </div>                     <div class=\"row\">                                                  <div class=\"col-md-6\">                             <img src=\"images/uploads/29.jpg\" class=\"img-responsive\" alt=\"..\">                         </div>                         <div class=\"col-md-6\">                             <img src=\"images/uploads/4.jpg\" class=\"img-responsive\" alt=\"..\">                         </div>                                              </div> <div class=\"row\">                                                  <div class=\"col-md-6\">                             <img src=\"images/uploads/15.jpg\" class=\"img-responsive\" alt=\"..\">                         </div>                         <div class=\"col-md-6\">                             <img src=\"images/uploads/10.jpg\" class=\"img-responsive\" alt=\"..\">                         </div>                                              </div>', 'images/portfolio/volleyball2.jpg', 'active'),
(4, 1, '2018-05-01', 'Hockey', NULL, '<div class=\"row\">\r\n                        <div class=\"section-title text-center\">\r\n                            <h3>THE ESSEX BLADES HOCKEY CLUB</h3>\r\n                            <p>Hockey is a team sport played between 2 teams of 11 players. The game is played on a rectangular pitch and involves players using sticks to hit a ball and score in opposing goals. The game consists of 2 halves lasting 35 minutes each half with 10 minute break in between. The only way to score is by being within an area around the goal called the D. Whoever scores the most goals at the end of the game is the winner.\r\n<h4>HOW MANY TEAMS DO WE HAVE?</h4>\r\n<ul>\r\n<li>Men\'s 1st team (BUCS South East 3B)</li>\r\n<li>Women\'s 1st team (BUCS South East 3B)</li>\r\n<li>Men\'s and Women\'s 2nd teams competing locally</li>\r\n</ul>\r\n<br>\r\n<h4>RECENT HONOURS?</h4>\r\n<ul>\r\n<li>Essex Blades Club of the Year 2016/17</li>\r\n<li>Essex Blades Social Club of the Year 2016/17</li>\r\n<li>Essex Blades Gold Standard Club - 2015/16 & 2016/17</li>\r\n</ul>\r\n<br>\r\n<table class=\"table table-bordered table-striped table-hover\">\r\n<thead>\r\n<th class=\"text-center\">Date</th>\r\n<th class=\"text-center\">Teams</th>\r\n<th class=\"text-center\">Result</th>\r\n<th class=\"text-center\">Venue</th>\r\n</thead>\r\n<tbody>\r\n<tr><td>Wednesday, 07 February 2018</td><td>Queen Mary University of London Womens 2nd	  -  University of Essex Womens 1st</td><td>5  -  1</td><td>Lee Valley Hockey and Tennis Centre</td></tr>\r\n<tr><td>Wednesday, 31 January 2018</td><td>Queen Mary Mens 1st (Barts and The London SMD)  -  University of Essex Mens 1st</td><td>1  -  3</td><td>Lee Valley Hockey and Tennis Centre</td></tr>\r\n<tr><td>Wednesday, 31 January 2018</td><td>University of Essex Womens 1st  -  University College London Womens 3rd</td><td>1  -  2</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 06 December 2017</td><td>King\'s College London Womens 3rd (GKT)  -  University of Essex Womens 1st</td><td>1  -  1</td><td>Honor Oak Park</td></tr>\r\n</tbody>\r\n</table>\r\n\r\n</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/h4.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/h2.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>\r\n<div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/h3.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/h1.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>', 'images/portfolio/hockey.jpg', 'active'),
(5, 1, '2018-05-01', 'Rugby', NULL, '<div class=\"row\">\r\n                        <div class=\"section-title text-center\">\r\n                            <h3>THE ESSEX BLADES MEN\'S RUGBY CLUB</h3>\r\n                            <p>Rugby Union is a 15-a-side game played on a 100m long pitch with 2 sets of posts and a dead-ball area at each end. The objective of the game is to cross the oppositionâ€™s try line and score a \'try\' worth 5 points and then take a \'conversion\' over the posts for an additional 2 points. In both attack and defence you are using means of a physical nature against your opponents, in attack trying to gain ground and in defence give them as little ground to play with. The winner is simply the team with the most points at the end of an 80-minute game.<br><br>\r\nRugby League is a full contact sport played by 2 teams of 13 players on a rectangular field. Points are scored by carrying the ball and touching it to the ground beyond the opposing team\'s goal line; scoring a try. The opposing team attempts to stop the attacking side scoring points by tackling the player carrying the ball. Points can also be scored by kicking goals. After each try, the scoring team gains a free kick to try at goal with a conversion for further points. Kicks at goal may also be awarded for penalties, and field goals can be attempted at any time.\r\n<h4>HOW MANY TEAMS DO WE HAVE?</h4>\r\n<ul>\r\n<li>Men\'s Rugby Union 1st team (BUCS South East 2B)</li>\r\n<li>Men\'s Rugby Union 2nd team (BUCS South East 5B)</li>\r\n<li>Men\'s Rugby League 1st team (BUCS South East Tier 1A)</li>\r\n</ul>\r\n<br>\r\n<h4>RECENT HONOURS?</h4>\r\n<ul>\r\n<li>Men\'s Rugby Union 1st team - BUCS South East 3B Champions 2016/17</li>\r\n<li>Men\'s Rugby Union 2nd team - BUCS South East 5B Runners-Up 2015/16 & 2016/17</li>\r\n<li>Essex Blades Coach of the Year 2016/17 - Sam Edwards</li>\r\n<li>Essex Blades Gold Standard Club - 2016/17</li>\r\n<li>Essex Blades Bronze Standard Club - 2015/16</li>\r\n</ul>\r\n<br>\r\n<table class=\"table table-bordered table-striped table-hover\">\r\n<thead>\r\n<th class=\"text-center\">Date</th>\r\n<th class=\"text-center\">Teams</th>\r\n<th class=\"text-center\">Result</th>\r\n<th class=\"text-center\">Venue</th>\r\n</thead>\r\n<tbody>\r\n<tr><td>Wednesday, 14 February 2018</td><td>University of Essex Mens 1st  -  Queen Mary University of London Mens 2nd</td><td>25  -  11</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 14 February 2018</td><td>University of Essex Mens 2nd  -  Queen Mary University of London Mens 3rd</td><td>51  -  22</td><td>University of Essex Sports Centre</td></tr>\r\n<tr><td>Wednesday, 07 February 2018</td><td>Imperial College London Mens 2nd (Medics)  -  University of Essex Mens 1st</td><td>19  -  49</td><td>Harlington Sports Ground</td></tr>\r\n<tr><td>Wednesday, 31 January 2018</td><td>Canterbury Christ Church University Mens 1st  -  University of Essex Mens 1st</td><td>36  -  21</td><td>Stodmarsh</td></tr>\r\n</tbody>\r\n</table>\r\n\r\n</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/1 (1).jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/4_5.png\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>\r\n<div class=\"row\">\r\n                        \r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/3.jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <img src=\"images/uploads/2 (1).jpg\" class=\"img-responsive\" alt=\"..\">\r\n                        </div>\r\n                        \r\n                    </div>', 'images/portfolio/rugby2.jpg', 'active'),
(15, 4, NULL, 'Square 1', '', 'This is where the psychology building is and is a popular route for on campus students', 'images/testimonial/face_1.png', 'active'),
(16, 4, NULL, 'Square 2', '', 'This is the computer science department and the employability team. There is also a shelter here with a TV and occasionally food is served here during freshers', 'images/testimonial/face_1.png', 'active'),
(17, 4, NULL, 'Square 3', '', 'This is the main sqaure where you will find everything you need for campus life', 'images/testimonial/face_1.png', 'active'),
(18, 4, NULL, 'Square 4', '', 'Shops and diners', 'images/testimonial/face_1.png', 'active'),
(19, 4, NULL, 'Square 5', '', 'The library, ivor crewe lecture hall and student support centre alongside the theatre amongst many attractions.', 'images/testimonial/face_1.png', 'active'),
(31, 3, '1970-01-01', 'Essex European', 'European Art Competition', '21st January 8pm - 15th February midnight\nMake artwork that addresses the question \"What does it mean to be European?\' and you could win our CASH PRIZE! Memes, painting, sculpture, rap. Whether you feel apart of it or not. Whether you agree or not. HAVE YOUR SAY!', 'images/uploads/26219305_1845492532182036_5211664082110656615_n[1].jpg', 'active'),
(32, 3, '1970-01-01', 'Chinese Student Scholars', 'Chinese Workshop-every Thursday', '25th January 6pm - 22nd March midnight\n5N3.9\nEvery Thursday, from 18:00 to 20:00, we will have Mandarin workshop in 5N3.9.If you want to learn Mandarin, come to our Chinese workshop for free!', 'images/uploads/25446015_321186948287510_7137676242500135065_n[1].jpg', 'active'),
(33, 3, '1970-01-01', 'Catholic', 'Retreat at Downside Abbey', '2nd February 6pm - 4th February 10pm\nDownside Abbey\nStep away from daily stresses and join us for a religious retreat to reconnect with God. Details to be announced after Mass on Sunday. Tickets starting at Â£20 will be on sale on Jumblebee.', 'images/uploads/History1[1].jpg', 'active'),
(34, 3, '1970-01-01', 'Show Choir', 'Study like a Barden Bella', '3rd February noon - 4th February midnight\nThe SU bar\nAfter the success of our last study session, we have decided to make it a monthly thing.', 'images/uploads/D98F3997-8D2F-4AD5-90AC-9C2AD9235812[1].png', 'active'),
(35, 2, '2018-02-03', 'Ministry of Sound Club Tour Feat\' DJ SKT and 99 Souls 11pm - 3am @ Sub Zero', '', 'Ministry of Sound are coming to Sub Zero with DJ STK & House duo 99 Souls playing nothing but but the best of house music. Get your tickets today!', 'images/uploads/ministry-of-sound-club-open-graph-1[1].png', 'active'),
(36, 2, '2018-02-04', 'NFL Super Bowl - New England Patriots vs Philadelphia Eagles 10pm - 3am @ SU Bar', '', 'It\'s time for the next NFL Superbowl this year it\'s going to be the New England Patriots vs Philadelphia Eagles! Head on over to the SU Bad treat yourself to a', 'images/uploads/superboel2018_Screen[1].jpg', 'active'),
(37, 2, '2018-02-05', 'Milk It 9pm - 1:30am @ SU Bar', '', 'It\'s Monday night which can only mean one thing! It\'s time for the cheesiest night on campus.. Milk It. Get ready to sing your heart out at our karaoke, all the classic pop hits, 00\'s to 90\'s and more its a do not miss!', 'images/uploads/Milk_it_thumbnail_yearly[1].jpg', 'active'),
(38, 2, '2018-02-07', 'Sports FED - One Of Essex\'s Biggest Nights Out 11pm - 2:30am @ Sub Zero', '', 'Join us for the weekly Sports night out! Fed is one of the biggest nights out on campus.Come and help celebrate all those famous Essex Blades wins with your team or just come down for an amazing night out with loads of fancy dress! Last Entry 12:30am', 'images/uploads/FED17[1].jpg', 'active'),
(39, 2, '2018-02-08', 'BEYONCE vs DRAKE - FREE ENTRY 11am - 2:30am @ Sub Zero', '', 'CALLING ALL BEYHIVE! OVO SQUAD!! BEYONCE AND DRAKE BATTLE IT OUT TO SEE WHO IS THE REAL KING OR QUEEN OF THE CHARTS! *FREE ENTRY*', 'images/uploads/sub-zero-cp2[1].jpg', 'active'),
(40, 2, '2018-02-10', 'VK Party with Special Guest - Danny Howard (BBC Radio 1) 11pm - 3am @ Sub Zero', '', 'SUb Zero has a massive VK Party with BBC Radio 1 and Ibiza legend \"Danny Howard\" dropping some massive dance anthems. Open to the Public.', 'images/uploads/dannyhoward[1].jpg', 'active'),
(41, 2, '2018-02-12', 'Milk It 9pm - 1:30am @ SU Bar', '', 'It\'s Monday night which can only mean one thing! It\'s time for the cheesiest night on campus.. Milk It. Get ready to sing your heart out at our karaoke, all the classic pop hits, 00\'s to 90\'s and more its a do not miss!', 'images/uploads/Milk_it_thumbnail_yearly[1].jpg', 'active'),
(42, 2, '2018-02-13', 'Coko - RB, Hip Hop, Bashment and Grime. 11pm - 2:30am @ Sub Zero', '', 'Get your ticket to Coko here! Coko is the SU\'s premier Urban night with resident djs playing the freshest in Commercial R&B, Hip Hop, Bashment and Grime. This event is for current university of Essex Students only.', 'images/uploads/Coko17[1].jpg', 'active'),
(43, 2, '2018-02-14', 'Sports FED - One Of Essex\'s Biggest Nights Out 11pm - 2:30am @ Sub Zero', '', 'Join us for the weekly Sports night out! Fed is one of the biggest nights out on campus.Come and help celebrate all those famous Essex Blades wins with your team or just come down for an amazing night out with loads of fancy dress! Last Entry 12:30am', 'images/uploads/FED17[1].jpg', 'active'),
(53, 3, '1970-01-01', 'Essex European', 'JOG FOR EUROPE', '4th February 1pm - 2:30pm\nEddington Tower\n6km Jog starting from Eddington Tower. We start the jog together and we end it together. All you need to bring is a bottle of water!', 'images/uploads/Running-Poster[1].png', 'active'),
(54, 3, '1970-01-01', 'Music', 'Jam Night (Part 3: Jam With A Vengeance)', '4th February 7pm - 10pm\nThe Hexagon\nJam night with free entry, amps provided, just bring your own instrument. Great opportunity to meet other musicians and have fun.', 'images/uploads/23434981_1444664015641002_8606096984599511453_n[1].jpg', 'active'),
(56, 1, '2018-05-02', 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'images/portfolio/rugby2.jpg', 'active'),
(57, 2, '2018-05-26', 'asdasdas', 'asdasd', 'asdasddasdasdasdasdasd', 'asdasd', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `type`) VALUES
(1, 'mainadmin', 'abc@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'mubashir', 'mu@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(47, 'shah', 'abcc@gmail.com', '17fca64fec69750fdaa9a8b906e0cb57', 'user'),
(45, 'musa18', 'musa19@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL),
(46, 'musa12', 'musa12@gmail.com', '2f12864daf642c78cd0f34c112553bd4', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
