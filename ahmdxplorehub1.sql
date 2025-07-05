-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 01:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmdxplorehub1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `Booking_ID` int(6) NOT NULL,
  `User_ID` int(6) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Booking_Date` datetime NOT NULL,
  `No_of_Attendees` int(100) NOT NULL,
  `Booking_Amount` float(7,2) NOT NULL,
  `Total_Amount` float(9,2) NOT NULL,
  `Service_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`Booking_ID`, `User_ID`, `Name`, `Booking_Date`, `No_of_Attendees`, `Booking_Amount`, `Total_Amount`, `Service_ID`) VALUES
(1, 111, 'Aangi Shah', '2024-04-17 16:24:31', 8, 50.00, 400.00, 5),
(2, 105, 'Aangi Shah', '2024-04-18 05:22:07', 5, 6000.00, 30000.00, 4),
(3, 102, 'Aangi Shah', '2024-03-21 10:56:55', 4, 380.00, 1520.00, 16),
(4, 108, 'Aanya Ahuja', '2024-01-24 11:12:50', 2, 3500.00, 7000.00, 15),
(5, 102, 'Aangi Shah', '2024-04-22 04:42:24', 20, 10.00, 200.00, 7),
(6, 102, 'Aangi Shah', '2024-05-15 19:27:12', 7, 100.00, 700.00, 10),
(8, 104, 'Raj Patel', '2024-03-12 17:31:16', 3, 20000.00, 60000.00, 3),
(12, 111, 'Dipti Jain', '2024-05-22 04:35:33', 10, 30.00, 300.00, 1),
(21, 109, 'Rahul Verma', '2024-04-03 04:37:20', 5, 250.00, 1250.00, 11);

-- --------------------------------------------------------

--
-- Table structure for table `category_master_tbl`
--

CREATE TABLE `category_master_tbl` (
  `Category_ID` int(6) NOT NULL,
  `Category_Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_master_tbl`
--

INSERT INTO `category_master_tbl` (`Category_ID`, `Category_Name`) VALUES
(1, 'Things to do'),
(2, 'Hotels'),
(3, 'Restaurants'),
(4, 'Attractions'),
(5, 'Events'),
(6, 'Malls & Markets'),
(7, 'Heritage'),
(8, 'Local Insights'),
(9, 'Food Parks');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_id` int(1) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `query` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`contact_id`, `name`, `email`, `query`, `User_Id`) VALUES
(1, 0, 0, 0, 111),
(2, 0, 0, 0, 111),
(3, 0, 0, 0, 111);

-- --------------------------------------------------------

--
-- Table structure for table `favourite_tbl`
--

CREATE TABLE `favourite_tbl` (
  `Favourite_ID` int(6) NOT NULL,
  `User_ID` int(6) NOT NULL,
  `Service_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourite_tbl`
--

INSERT INTO `favourite_tbl` (`Favourite_ID`, `User_ID`, `Service_ID`) VALUES
(6, 111, 10),
(7, 111, 5),
(8, 102, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `Feedback_ID` int(6) NOT NULL,
  `User_ID` int(6) NOT NULL,
  `Image` varchar(30) DEFAULT NULL,
  `Detail` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`Feedback_ID`, `User_ID`, `Image`, `Detail`) VALUES
(1, 108, 'f1.jpg', 'Kankaria Lake: A serene oasis in Ahmedabad, offering picturesque surroundings and diverse recreational activities.'),
(2, 104, 'f2.jpg', 'Taj Hotel: Exuding luxury and timeless elegance, a beacon of hospitality in the heart of Ahmedabad.'),
(3, 103, 'f4.jpg', 'AhmdXploreHub: Simple, informative, and visually appealing for exploring Ahmedabad.'),
(4, 109, 'f5.jpg', 'Law Garden: A vibrant haven in Ahmedabad, blending greenery with cultural charm, perfect for leisurely strolls and local delights.'),
(5, 106, 'f6.jpg', 'AhmdXploreHub excels with its sleek design, vibrant imagery, and practical details.'),
(6, 102, 'f7.jpg', 'Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.'),
(12, 111, 'new_photo.jpg', 'Vintage Vibes has positive and great vibes place, amazing place to visit with friends and family!');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master_tbl`
--

CREATE TABLE `payment_master_tbl` (
  `Payment_ID` int(6) NOT NULL,
  `Amount` float(9,2) NOT NULL,
  `Booking_ID` int(6) NOT NULL,
  `Payment_Mode` int(1) NOT NULL,
  `Payment_Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_master_tbl`
--

INSERT INTO `payment_master_tbl` (`Payment_ID`, `Amount`, `Booking_ID`, `Payment_Mode`, `Payment_Status`) VALUES
(1, 30000.00, 2, 2, 1),
(2, 400.00, 1, 1, 2),
(3, 1520.00, 3, 3, 1),
(4, 7000.00, 4, 2, 1),
(5, 700.00, 6, 3, 1),
(6, 200.00, 5, 1, 2),
(8, 300.00, 12, 1, 2),
(9, 60000.00, 8, 2, 1),
(11, 1250.00, 21, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `refund_tbl`
--

CREATE TABLE `refund_tbl` (
  `Refund_ID` int(6) NOT NULL,
  `Payment_ID` int(6) NOT NULL,
  `Refund_Amount` float(6,2) NOT NULL,
  `Refund_Status` int(1) NOT NULL,
  `Request_Date` datetime NOT NULL,
  `Refund_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `Service_ID` int(6) NOT NULL,
  `Service_Name` varchar(30) NOT NULL,
  `Tagline` varchar(150) DEFAULT NULL,
  `About` varchar(700) NOT NULL,
  `Key_Features` varchar(1000) NOT NULL,
  `Image` varchar(35) NOT NULL,
  `Image1` varchar(35) NOT NULL,
  `Image2` varchar(35) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Timings` varchar(20) NOT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Price` float(7,2) DEFAULT NULL,
  `Category_ID` int(6) NOT NULL,
  `Sub_Category_ID` int(6) DEFAULT NULL,
  `User_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`Service_ID`, `Service_Name`, `Tagline`, `About`, `Key_Features`, `Image`, `Image1`, `Image2`, `Address`, `Timings`, `Phone`, `Date`, `Price`, `Category_ID`, `Sub_Category_ID`, `User_ID`) VALUES
(1, 'Fun Blast', 'A Next-Generation Fun Destination', 'Fun Blast provides additional entertainment, excitement, rides, games, and food for people of all ages. For adults only, there is a trampoline park there.\r\nYou can opt for enjoyable indoor activities which include bowling and virtual reality games to pump your blood. The little ones can get the taste of adventure and outdoor sports where the fun doesn\'t stop at the horror house where the spine-tingling excitement never stops.', 'The Fun Blast which provides sports arena gaming and go-to destinations for rides, games, food, and excitement.\r\nINDOOR GAMES:\r\nTrampoline\r\nBowling\r\nLucky Fish Frenzy\r\nBlizzarnd Blast\r\nZombie Out Beark Water\r\nOUTDOOR GAMES:\r\nSky Cycling\r\nMini Appu\r\nMerry-Go Round\r\nRocket Injection\r\nGyroscope Ride', 'funblast.jpg', 'funblast1.jpg', 'funblast2.jpg', 'Sindhu Bhavan Road, PRL Colony, Bopal, Ahmedabad, Gujarat 380058.', '11:00 AM - 11:00 PM', 9586601007, NULL, 30.00, 1, NULL, 106),
(2, 'Vintage Vibes', 'All Things Vintage! Delve into an era of architectural bliss and flavoursome food!', 'Vintage Vibes Restro most popular for its authentic Punjabi restaurant. With its unwavering quality & delicious recipes, Vintage Vibes Restro Multi-Cuisine has become one of the best and most famous restaurants.\r\n\r\nOur loyal customers believe it’s among the topmost restaurants to enjoy authentic vegetarian food in India and a must-visit.', 'Vintage Vibes in Thaltej, Ahmedabad Restaurants in Ahmedabad provide various cuisines with an aesthetic seating arrangement and the best services. Restaurants act as great places for many situations. From team meetings to family dinners, it can help serve a wide range of audiences.\r\nFOOD MENU\r\n\r\nBurmese Pepper Soup\r\nQueso Cheese Balls\r\nGunpowder Hummus\r\nFusion Ratatouille\r\nAvacado Filo Cups\r\nIndonesian Lumpia\r\nMexican Chaat\r\nTurkish Kunafa', 'vintage.jpg', 'vintage1.jpg', 'vintage2.jpg', 'Dada Nu Farm, Chhanalal Joshi Marg, opposite Jajarman Restuarant, off Sindhubhavan Marg, PRL Colony, Thaltej, Ahmedabad, Gujarat 380054, India.', '12:00 AM - 11:00 PM', 7567715000, NULL, NULL, 3, NULL, 103),
(3, 'ITC Narmada', 'A Luxury Collection Hotel', 'Architecturally inspired by the stepwells of Gujarat and the traditional ‘toran’ gateways adorning its façade, ITC Narmada welcomes you with regal splendour. In keeping with the philosophy of ITC Hotels, ITC Narmada is a glowing celebration of the culture, arts and crafts of the region. A prime location and luxurious facilities make each stay memorable.\r\n\r\nUndeniably luxurious, with décor that celebrates the vibrant arts and crafts of Gujarat, these beautiful rooms are instantly appealing. Hand-picked amenities and a marvellous ambience are backed by efficient service.', 'Inspired by the erstwhile royal kitchens of India, this exclusive vegetarian restaurant offers a fine collection of timeless delicacies, based on the ancient Indian system of seasonal cooking & decades of culinary research.\r\nRESTAURANTS\r\n\r\nPeshawri\r\nAdalaj Pavilion\r\nYi Jing\r\nRoyal Vega\r\nFabelle - The Chocolate Boutique', 'itc.jpg', 'itc1.jpg', 'itc2.jpg', 'Judges Bunglow Rd, Vastrapur, Ahmedabad, Gujarat-380015.', '10:00 AM - 12:00 PM', 7969664000, NULL, 20000.00, 2, 1, 106),
(4, 'Hotel Accolade', 'Enjoy upscale amenities and a brilliant location', 'Hotel Accolade is located in the heart of the most happening city of Gujarat, which is known as a Manchester. Yes, it is Ahmedabad.\r\n\r\nLocated at an easy to reach distance, the hotel Accolade which is known for its structural design and eminence. Reaching any corner of the city is not a headache, if you have confirmed your stay at Hotel Accolade. You can find infinite modes of transportation to reach any niche of the city. Being located in the city centre, the hotel has become an ultimate choice of business travelers and NRI guests.', 'A modern cooking technique where elements of a traditional dish are presented separately or in a novel way.', 'accolade.jpg', 'accolade1.jpg', 'accolade2.jpg', 'Opp. Gujarat College, Ellisbridge, Ahmedabad, India', '07:00 AM - 09:00 PM', 7926561016, NULL, 6000.00, 2, 3, 103),
(5, 'Science City', 'Discover, Innovate, Thrive: Science City Ahmedabad, Where Curiosity Meets Creativity.', 'Science City is an innovative science and technology center located in Ahmedabad, India. Established in 1960, Science City covers an expansive area and offers a variety of interactive exhibits, demonstrations, and activities related to science and technology. It serves as a dynamic hub for science enthusiasts, students, and families, providing a hands-on learning experience in areas such as physics, biology, astronomy, and more. It offers interactive exhibits, demonstrations, and educational programs, making science engaging for visitors of all ages. With its planetarium shows and workshops, Science City serves as a hub for curiosity and learning.', 'Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.\r\nMission To Mars Ride\r\nEarthquake Experience Ride\r\nCoal Mine\r\n4D Theatre\r\nMusical Fountain\r\nThrill Ride\r\nPlanetarium\r\nIMAX Theatre\r\nElectrodome\r\nHall of Space & Science\r\nAmphitheatre\r\nExpo Ground\r\nChildren Activity Centre\r\nRestaurants\r\nPlanet Earth\r\nLife Science Park\r\nEnergy Park\r\nMusical Fountain\r\nThrill Ride\r\nAuda Garden', 'sciencecity3.jpeg', 'sciencecity2.jpeg', 'sciencecity1.jpeg', 'Science City Road, Off the Sarkhej Gandhinagar Highway, Ahmedabad 380060, India', '10:00 AM - 07:00 PM', 9909991361, NULL, 50.00, 4, NULL, 106),
(6, 'Sabarmati Riverfront', 'Reconnecting Ahmedabad to its River', 'This project aims to provide Ahmedabad with a meaningful waterfront environment along the banks of the Sabarmati River and to redefine an identity of Ahmedabad around the river. The project has reconnected the city with the river and has positively transformed the neglected aspects of the riverfront.\r\nIt has long been acknowledged that appropriate development of Ahmedabad’s riverfront and the building of adequate infrastructure can turn the Sabarmati River into a major asset for the city and significantly improve the quality of life for all sections of its citizens.', 'Places and facilities at Sabarmati Riverfront are:\r\nRiver Promenade\r\nFlower Park\r\nAtal Bridge\r\nBiodiversity Park\r\nStreets\r\nMultilevel Car Parking\r\nGeneral Facilities', 'rf3.jpg', 'rf1.jpg', 'rf2.jpg', '2nd Floor, “Riverfront House”, B/h. H.K. Arts College, Between Gandhi & Nehru Bridge, Pujya Pramukh Swami Marg (River Front Road – West) Ahmedabad – 380009.', '09:00 AM - 09:00 PM', 26580430, NULL, NULL, 8, NULL, 103),
(7, 'Hutheesing Ni Vadi', 'The Jain Temple', 'Hutheesing Ni Vadi is a historic mansion located in Ahmedabad which features intricate carvings, ornate balconies, and a central courtyard typical of traditional Indian havelis (mansions). The entrance gate, adorned with detailed carvings, leads to a beautifully crafted interior with jali work, sculptures, and cultural motifs. It reflects the cultural and architectural heritage of Ahmedabad\'s mercantile community from the 19th century.', 'A splendid 19th-century Jain temple in Ahmedabad, showcasing intricate architectural details and ornate craftsmanship.\r\nDedication to Lord Dharmanatha\r\nReligious Reverence\r\nMultiple Shrines\r\nCentral Dome\r\nEntrance Gate\r\nJali Work\r\nSeth Hutheesing Memorial Temple', 'hutheesing.jpg', 'hutheesing1.jpg', 'hutheesing2.jpg', 'Hutheesing Jain Temple, Camp Rd., Bardolpura, Madhupura, Ahmedabad, Gujarat 380004.', '07:00 AM - 08:00 PM', 22180774, NULL, 10.00, 7, NULL, 107),
(9, 'FrizBee', 'Ahmedabad\'s newest place to chill & hangout with your love ones.', 'FrizBee is an exciting, high-energy spot that can be enjoyed by people of all ages and who do not mind a little running and a lot of fun.', 'Frizbee is a great destination for families and friends to enjoy their weekends while enjoying quality food.\r\nBRANDS\r\n\r\n9834(The Fruit Truck)\r\nJashuben Shah Old Pizza\r\n4 Cofee\r\nMaharaj Dosa\r\nMama Mia Cotton Candy\r\nOTHER ATTRACTIONS\r\n\r\nHoney Bee\r\nFLEA Bee\r\nVRZ\r\nPocoloco', 'frizbee.jpg', 'frizbee1.jpg', 'frizbee2.jpg', 'Frizbee, opp. Tea Post, near Hotel Taj Skyline, Bodakdev, Ahmedabad, Gujarat 380059.', '05:30 PM - 01:00 AM', 7043442222, NULL, NULL, 9, NULL, 107),
(10, 'Carnival Utopia 2024', NULL, 'Get ready for the most thrilling and exciting event of the year! The Carnival Utopia is back in Ahmedabad, promising a month-long extravaganza filled with fun, entertainment, and unforgettable memories.', 'Dive into a world of enchantment as the Carnival Utopia brings together a spectacular array of activities and attractions for all ages. From heart-pounding rides to mouth-watering treats, there\'s something for everyone:\r\nRides and Attractions: Experience the adrenaline rush with our thrilling rides and attractions that cater to adventure seekers of all ages.\r\nLive Performances: Be mesmerized by live performances from talented artists and entertainers. From music and dance to magic shows, the carnival stage is set to dazzle.\r\nGourmet Delights: Indulge your taste buds in a culinary journey with a diverse range of food stalls offering delicious treats and local delicacies.', 'event1.jpg', 'event1.1.jpg', 'event1.2.jpg', 'GMDC Ground', '11:00 AM - 11:00 PM', NULL, 'May 10, 2024 - June 10, 2024', 100.00, 5, NULL, 105),
(11, 'Flavor Fiesta', NULL, 'Prepare your taste buds for a culinary journey like never before as Flavor Fiesta returns to Ahmedabad! This gastronomic extravaganza promises a celebration of flavors, aromas, and mouthwatering delights that will tantalize your senses.', 'Dive into a world of culinary wonders with an array of food stalls showcasing a diverse range of cuisines. From local street food to international delicacies, Flavor Fiesta brings together the best of Ahmedabad\'s vibrant food scene.\r\nIndulge your palate with gourmet delights crafted by renowned chefs and culinary artisans. From exquisite desserts to savory treats, each dish is a masterpiece, promising a symphony of flavors.\r\n\r\nWitness culinary magic unfold as expert chefs take the stage for live cooking demonstrations. Learn the secrets behind your favorite dishes and get inspired to recreate them in your own kitchen.\r\n\r\nEmbark on a global culinary adventure with a section dedicated to international flavors. Immerse yourself in the tastes of different cultures, all within the vibrant atmosphere of Ahmedabad.', 'event2.jpg', 'event2.1.jpg', 'event2.2.jpg', 'Sabarmati Riverfront', '6:00 PM - 12:00 PM', NULL, 'June 11, 2024 - June 15, 2024', 250.00, 5, NULL, 106),
(12, 'Groove Gala', NULL, 'Get ready for a musical journey that transcends boundaries as the sensational Darshan Raval takes center stage at \"Groove Gala\" in Ahmedabad! This one-of-a-kind music concert promises an unforgettable evening filled with soulful tunes, electrifying performances, and an atmosphere that will make you want to dance the night away.', 'Known for his soul-stirring voice and heartfelt lyrics, Darshan Raval has carved a niche for himself in the music industry. \"Groove Gala\" is not just a concert; it\'s a celebration of emotions, love, and the power of music to connect us all.\r\nWitness a musical extravaganza as Darshan Raval takes you on a journey through his chart-topping hits and soulful melodies.\r\nFrom romantic ballads to foot-tapping numbers, the concert promises a diverse repertoire that caters to every musical palate.\r\nPrepare to be mesmerized by Darshan Raval\'s on-stage charisma and energy.\r\nThe concert will feature unforgettable performances, collaborations, and surprises that will keep you on the edge of your seat.', 'event3.jpg', 'event3.1.jpg', 'event3.2.jpg', ' Narendra Modi Stadium', '9:00 PM - 12:00 PM', NULL, 'June 20, 2024', 700.00, 5, NULL, 105),
(13, 'Ahmedabad Book Fair', NULL, 'Discover the enchanting world of literature at the Ahmedabad Book Fair, where pages come to life and every book becomes a doorway to a new adventure. This annual literary extravaganza is a celebration of words, ideas, and the joy of reading, bringing together authors, publishers, and avid readers from all walks of life.', 'Step into a bibliophile\'s paradise as the Ahmedabad Book Fair unfolds its chapters. Rows of book stalls beckon with a diverse array of genres, from timeless classics to the latest bestsellers. Whether you\'re a seasoned reader or a newcomer to the world of books, there\'s something for everyone.\r\nAttend book signings, panel discussions, and author talks, gaining insights into the creative minds behind your favorite stories.\r\nExplore literature from different cultures, discover regional gems, and immerse yourself in the rich tapestry of storytelling that transcends boundaries.\r\nParticipate in engaging workshops and sessions that cater to all ages.\r\nFrom storytelling for children to writing workshops for aspiring authors, the fair is a hub of creativity and learning.', 'event4.jpg', 'event4.1.jpg', 'event4.2.jpg', 'Seema Hall', '9:00 AM - 9:00 PM', NULL, 'June 05, 2024 - June 12, 2024', NULL, 5, NULL, 103),
(14, 'Flea Fantasia', NULL, 'Embark on a delightful journey of discovery at Flea Fantasia, Ahmedabad\'s premier flea market extravaganza. This vibrant event promises more than just shopping; it\'s a kaleidoscope of colors, flavors, and unique finds that turns every visit into a magical experience.', 'Flea Fantasia is a shopper\'s paradise, where every corner unveils a treasure waiting to be found. From vintage trinkets to handmade crafts, and eclectic fashion to gourmet delights, the market is a true reflection of Ahmedabad\'s diverse and artistic spirit.\r\nSatisfy your taste buds with a culinary journey at Flea Fantasia.\r\nLocal vendors and gourmet artisans come together, offering a delectable array of street food, international flavors, and sweet treats that make this flea market a feast for foodies.\r\nImmerse yourself in the lively atmosphere with live entertainment at Flea Fantasia.\r\nFrom street performers to live music, the event is not just about shopping; it\'s a celebration of arts, culture, and community.', 'event5.jpg', 'event5.1.jpg', 'event5.2.jpg', 'Gujarat University', '6:30 PM - 11:00 PM', NULL, 'August 05, 2024 - August 07, 2024', 350.00, 5, NULL, 107),
(15, 'IPL Cricket Match - MI vs CSK', NULL, 'Cricket aficionados, mark your calendars! The highly anticipated clash between two cricketing giants, Mumbai Indians (MI) and Chennai Super Kings (CSK), is set to unfold in Ahmedabad as part of the Indian Premier League (IPL) extravaganza. Here\'s everything you need to know about this thrilling encounter.', 'MI vs CSK is more than a cricket match; it\'s a storied rivalry that has produced some of the most memorable moments in IPL history. Both teams boast a stellar lineup of international and domestic talent, promising a contest that will keep fans on the edge of their seats.\r\nAs the teams gear up for this clash, cricket enthusiasts are eager to see how MI\'s power-packed lineup, featuring stalwarts like Rohit Sharma and Jasprit Bumrah, will fare against the seasoned attack of CSK, led by the evergreen MS Dhoni.\r\nThe iconic Narendra Modi Stadium in Ahmedabad, also known as Motera Stadium, will play host to this IPL showdown.\r\nWith state-of-the-art facilities and a seating capacity that ensures an electric atmosphere, the stadium is the perfect setting for this marquee event.', 'event6.jpg', 'event6.1.jpg', 'event6.2.jpg', 'Narendra Modi Stadium', '7:30 PM - 11:00 PM', NULL, 'August 25, 2024', 3500.00, 5, NULL, 104),
(16, 'Bounce Up', 'Immerse yourself in the thrill of interactive bowling and other exciting activities', 'Get ready to jump for joy on our trampolines, dive into a virtual world with our cutting-edge VR games, test your skills at our interactive bowling lanes, and indulge your inner gamer at our arcade and when you\'ve worked up an appetite, our delicious restaurants will provide the perfect fuel for your next adventure.\r\n\r\nWe\'re thrilled to introduce our family entertainment zone, where the fun never stops and the memories never fade.', 'Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.\r\nACTIVITIES:\r\n\r\nTrampoline\r\nAirpark\r\nInteractive Bowling\r\nArcvade & VR Games\r\nMultisports Simulator\r\nSoftplay & Todlers Area\r\nHollogate Arena\r\nGlow in the dark nights', 'bounceup.jpg', 'bounceup1.jpg', 'bounceup2.jpg', 'Nr Jayantilal park,B.R.T.S. Bus Stop, Ambli Bopal Road,Ahmedabad,Gujarat 380058.', '11:00 AM - 11:00 PM', 9033503604, NULL, 380.00, 1, NULL, 104),
(17, 'Shott', 'Immerse yourself in the world of Shott', 'Shott is the place for every age who wants to have fun. Here many games are available like Go-karting, Bowling, Net Cricket, Rope Course, a children’s play area, and much more.\r\n\r\nPlay Arcade Games at Shott that are worth spending a whole day and beyond. Filled with thrill, action and exciting arcade games are for every age.', 'Spend the liveliest time of your life with your family and friends at the arcade games zone.\r\nGAME ZONE\r\n\r\nBowling\r\nArcade Games\r\nGo-Karting\r\nLaser War\r\nTrampoline', 'shott.jpg', 'shott1.jpg', 'shott2.jpg', 'Shott, Opp Saket-3, next to Sankalp Square, On Sindhubhavan Marg, Thaltej, Ahmedabad, Gujarat 380059', '11:00 AM - 11:30 PM', 7069007685, NULL, NULL, 1, NULL, 103),
(18, 'Mocha', 'A decent place with some good ambiance', 'Mocha is the country\'s first completely indigenous and eclectic café chain, known not just for its menu, but the varied experiences it brought to 20 outlets in 18 cities to expand the cafe culture.\r\n\r\nIn addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike.', 'Mocha has influenced the world-view of an entire generation, to stir a social revolution.\r\nFOOD:\r\n\r\nCRISPY KANDA PAO SLIDER\r\nMEZZE PLATTER\r\nLEBANESE KEBAB PLATTER\r\nMULTI GRAIN KHICHDI\r\nPENNE PASTA IN A CHEESY ALFREDO SAUCE\r\nDESERTS & SHAKES\r\n\r\nSTRAWBERRY CHEESECAKE SHAKE\r\nCHOCOLATE FUDGE CAKE\r\nKIWI BANANA HONEY SMOOTHIE\r\nNUTELLA PRETZEL FREAK SHAKE\r\nCOUNTRY LEMONADE', 'mocha.jpg', 'mocha1.jpg', 'mocha2.jpg', 'Mocha, 10 Vasantbaug Society, Opp. IDBI Bank, Gulbai Tekra Road, Navrangpura, Ahmedabad-380006', '11:00 AM - 11:00 PM', 7600160000, NULL, NULL, 3, NULL, 103),
(19, 'Unlocked', '\'Unlocked Cafe\' in Ahmedabad is our first space with cozy geometric interiors and a board game cafe.', 'Unlocked is the first of its kind space with a craft cocktail bar, an international cuisine restaurant, one of India\'s largest library of board games and a real life gaming experience. Inspired by geometric shapes, illusionary puzzle games and MC Esher style branding, our space pulls you in to Unlock your inner child.\r\n\r\nOur food menu is inspired by our founder\'s travels and culinary trends in global cuisine. We source the freshest produce to serve you authentic flavours, all made from scratch in-house.', 'Our selection of small and large plates bring together a range of classics and some creative avant-garde cuisine from our chef.\r\nUNLOCKED COMFORT ZONE:\r\n\r\nTrue & parmesan fries\r\nClassic french fries\r\nDuet BBQ paneer tikka\r\nFish n chips with tartar sauce\r\nChef special crispy waterchestnuts\r\nGAMES:\r\n\r\nPicitionary\r\nScrabble\r\nCluedo\r\nBattleship\r\nMonopoly Deal', 'unlocked.jpg', 'unlocked1.jpg', 'unlocked2.jpg', 'Umashankar Joshi Marg, near Girish Cold Drinks, Vasant Vihar, Navrangpura, Ahmedabad, Gujarat 380009', '12:00 AM - 11:00 PM', 7948900165, NULL, NULL, 3, NULL, 105),
(24, 'Kankaria Lake', 'Heart Of Ahmedabad', 'Kankaria Lake spans an area of about 34 acres and has become a popular recreational spot in Ahmedabad. It offers a peaceful retreat with its scenic beauty and well-maintained promenades. Boasting a rich cultural history, it\'s a popular destination for leisurely walks, boat rides, and family outings.', 'Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.\r\n\r\nBoating & Water Balloon Arena\r\nChildren\'s Park & Garden Picnics\r\nFood Stalls & Cultural Exhibits\r\nZoo Exploration', 'kankaria.jpg', 'kankaria1.jpg', 'kankaria2.jpg', 'Kankaria, Maninagar, Ahmedabad, Gujarat, India.', '09:00 AM - 10:00 PM', 25463415, NULL, 25.00, 4, NULL, 105),
(25, 'Adalaj Stepwell', 'Indo-Islamic Fusion Architecture', 'The Adalaj Stepwell, constructed in 1499 near Ahmedabad, Gujarat, is a stunning example of medieval Indian architecture. Commissioned by Queen Rudabai, the stepwell served both as a functional water storage system and a masterpiece of artistic expression. Today, the Adalaj Stepwell stands as a well-preserved heritage site, attracting visitors with its unique blend of utility and aesthetic appeal.', 'Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.\r\n\r\nArchitectural Marvel\r\nFive Stories Deep\r\nArtistic Carvings\r\nCultural Heritage Site', 'adalaj.jpg', 'adalaj1.jpg', 'adalaj2.jpg', 'Adalaj Rd, Adalaj, Gujarat 382421', '08:00 AM - 06:00 PM', 23977229, NULL, 25.00, 4, NULL, 103),
(26, 'Auto World Vintage Car Museum', 'High-End Vintage Automobiles', 'Auto World Vintage Car Museum is a wonderful collection of vintage cars, motorcycles and carts manufactured by well known automobile companies. The museum focuses on stimulating the interest and knowledge of motor enthusiasts to learn about vintage and classic cars. An impressive collection of vintage cars, antique and utility vehicles, motorcycles and horse carriages is worth a visit.', 'Car enthusiasts would be delighted viewing the diverse range of the four wheeled vehicles and other fetaures as:\r\n\r\nExhibition Display\r\nEducational Information\r\nInteractive Exhibits\r\nRestoration Workshops\r\nVintage Memorabilia\r\nGuided Tours', 'car.jpeg', 'car1.jpg', 'car2.jpg', 'Dastan Estate, Sardar Patel Ring Road, Kathwada, New India Colony, Nikol, Ahmedabad, Gujarat, 382430, India', '08:00 AM - 09:00 PM', 22820699, NULL, 50.00, 8, NULL, 107),
(27, 'Ahmedabad Ni Gufa', 'Beneath the Surface, Beyond the Ordinary: Ahmedabad Ni Gufa Experience', 'Ahmedabad Ni Gufa, also known as Hussain-Doshi Gufa, is an underground art gallery located in Ahmedabad, India. Designed by the renowned architect Balkrishna Doshi in collaboration with the artist M.F. Hussain, the Gufa is a unique architectural marvel that blends art and architecture seamlessly. The design encourages visitors to experience art in a distinctive setting.', 'Here are some key features of Ahmedabad Ni Gufa:\r\n\r\nUnderground Structure\r\nOrganic Design\r\nIntegration of Art and Architecture\r\nCave-Like Interiors\r\nCultural Landmark\r\nExhibition Space', 'gufa.jpg', 'gufa1.jpg', 'gufa2.jpg', 'Lalbhai Dalpatbhai Campus, near CEPT University, opp. Gujarat University, University Road, Ahmedabad.', '04:00 PM - 08:00 PM', 26308698, NULL, NULL, 8, NULL, 105),
(28, 'Gandhi Ashram', 'A Living Testament to Mahatma Gandhi', 'The Gandhi Ashram, also known as Sabarmati Ashram, is a historic site located in Ahmedabad, Gujarat, India. It holds great significance in the life of Mahatma Gandhi, the leader of India\'s non-violent independence movement against British rule.It continues to attract visitors who seek to understand and appreciate the life and legacy of one of the most influential figures in India\'s history.', 'Gandhi Ashram continues to attract visitors who seek to understand and appreciate the life and legacy of one of the most influential figures in India\'s history with its main features:\r\n\r\nGandhi\'s Living Quarters\r\nMuseum and Exhibits\r\nHriday Kunj\r\nLibrary\r\nVinoba Kutir\r\nMagan Niwas\r\nGandhi Smarak Sangrahalaya\r\nGandhi\'s Office\r\nPrayer Ground', 'gandhiashram3.jpeg', 'gandhiashram1.jpg', 'gandhiashram2.jpg', 'Gandhi Smarak Sangrahalaya, Ashram Rd, Ahmedabad, Gujarat 380027', '08:30 AM - 05:30 PM', 27557277, NULL, 50.00, 7, NULL, 105),
(29, 'Sidi Saiyyed Ni Jali', 'A mesmerizing lattice masterpiece showcasing exquisite craftsmanship in Ahmedabad.', 'Sidi Saiyyed Ni Jali, located in Ahmedabad, Gujarat, India, is a famous architectural marvel known for its intricately carved stone lattice window, or jali. The delicately perforated stone screen is popularly known as the \"Tree of Life\". It is not only a testament to the skill of medieval Indian artisans but also stands as a significant historical and cultural attraction in Ahmedabad, drawing visitors and admirers from around the world.', 'The mosque itself is a historical structure built in 1573. It is a small but elegant mosque that reflects the architectural styles of its time.\r\n\r\nJali (Lattice) Work\r\nTree of Life Motif\r\nArchitectural Heritage', 'sidi.jpg', 'sidi1.jpg', 'sidi2.jpg', 'Bhadra Rd, Opposite Electricity House, Old City, Gheekanta, Lal Darwaja, Ahmedabad, Gujarat 380001', '07:00 AM - 06:00 PM', 25391811, NULL, 10.00, 7, NULL, 107),
(30, 'Nexus Ahmedabad One Mall', 'World of Authenticity & Design', 'Ahmedabad One Mall, located in Ahmedabad, Gujarat, is a prominent shopping and entertainment destination in the city. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike. The mall is situated in the Vastrapur area and offers a diverse range of retail outlets, including national and international brands, providing shoppers with a wide variety of options for fashion, electronics, and more.\r\nIn addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors.', 'Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.\r\nBRANDS\r\n\r\nPantaloons\r\nTrends\r\nShoppers Stop\r\nLifestyle\r\nH&M\r\nFOOD COURT\r\n\r\nTaco Bell\r\nPizza Hut\r\nMcDonald\'s\r\nKFC\r\nStarbucks', 'ahmdone3.jpg', 'ahmdone1.jpg', 'ahmdone2.jpg', 'Nexus Ahmedabad One, Plot No. 216, T.P. Scheme 1, Near Vastrapur Lake, Vastrapur, Ahmedabad - 380054, Gujarat, India.', '10:00 AM - 10:00 PM', 7940193672, NULL, NULL, 6, NULL, 105),
(31, 'Agora Mall', 'High-end Destination', 'The Shree Balaji Agora Mall, a commercial shopping and entertainment mall in Ahmedabad, is a part of the Shree Balaji Group of Companies. It has a great number of Anchor Shops as well as small Retail Outlets, a 4-Screen Multiplex, Kids Gaming Zone, Restaurants, a Bowling Alley, Food Court and more.\r\n\r\nThe entire mall is centrally air-conditioned and is made beautiful with lovely landscapes, huge fountains and a well-architected contemporary structure.', 'They entertain you not only with play and game zones but also lovely food served at roof-top restaurants.\r\nRESTAURANTS\r\n\r\nAagrah Banquet Hall\r\nBake O Zone\r\nKaffe Mast Hai\r\nSizzling Shihai,\r\nThe Masala County\r\nGAMING ZONE\r\n\r\nTrribecca\r\nSB Multiplex\r\nHummer Video Game\r\nDirty Driving\r\nWater Shooting', 'agora.jpg', 'agora1.jpg', 'agora2.jpg', 'Shree Balaji Group, 4th Floor, Shree Balaji Mall, Visat to Gandhinagar Highway, Ahmedabad. 382424. Gujarat, India', '09:30 AM - 11:00 PM', 9227464610, NULL, NULL, 6, NULL, 103),
(32, 'Law Garden Market', 'Lot of variety for Indian tradition and ethnic cholis', 'A beautiful garden bustling with life from the lush greenery and budding vibrant flowers with a joyful market full of colors, chaos, and charm, the Law Garden is an ideal place to relax in the peaceful environment surrounded by nature while also being close to a fun filled exotic market place. The Law Garden is renowned for its night market which is always hoarded by tourists and locals to find jaw-dropping deals on various traditional and craft items.', 'Law Garden Market is an ocean of beautiful clothes and accessories that will compel you to lose your pocket even if you didn’t plan on buying anything.\r\nSHOPPING\r\n\r\nKutchi Embroidery items\r\nChaniya Choli\r\nColorful lehengas\r\nBandhani saree\r\nZari work\r\nFOOD\r\n\r\nMouthwatering chaats\r\nGolgappas\r\nDosa\r\nDabeli\r\nIce cream', 'lawgarden2.jpg', 'lawgarden1.jpg', 'lawgarden.jpg', 'Near Law Garden, Opp GLS University', '10:00 AM - 11:00 PM', NULL, NULL, NULL, 6, NULL, 107),
(33, 'Tutorial Market', 'Three Gate has a wide range of products and services to cater to the varied requirements of their customers.', 'Tutorial Market is one of the oldest and busiest shopping places in Ahmedabad and you simply can\'t afford to miss this amazing place on your shopping spree in the city. It is one of the most popular shopping places in Ahmedabad.It market is known for traditional wear sarees, bed sheets, gourmet material, handicrafts, footwear, dresses for sofa etc. at very affordable prices.', 'Market in Ahmedabad to famous Saree Market, Ahmedabad shopping speciality will amaze you.\r\nSHOPPING\r\n\r\nKutchi Embroidery items\r\nChaniya Choli\r\nColorful lehengas\r\nBandhani saree\r\nZari work', 'tutorial.jpg', 'tutorial1.jpg', 'tutorial2.jpg', 'Gandhi Rd, Old City, Dhalgarwad, Khadia, Ahmedabad, Gujarat 380001', '11:00 AM - 10:00 PM', NULL, NULL, NULL, 6, NULL, 106),
(34, 'Manek Chowk', 'The place is a paradise for food enthusiasts.', 'As night falls, this market changes into a food market with stalls selling delicious street food of Gujarat and the best part is that you can have food here till as late as one in the night.\r\nThe market serves only vegetarian food.', 'Then there is the lure of the gathiya, fafda and thepla that are some of the lip-smacking delights of Gujarati street food, which is almost irresistible.\r\nFOOD ITEMS\r\n\r\nIce Cream Sandwich\r\nSev Puri\r\nMasala dosa\r\nPav bhaji\r\nKulfi', 'manek chowk.jpg', 'manekchok1.jpg', 'manekchok2.jpg', 'Khadia, Ahmedabad, Gujarat, 380001, India', '8:00 PM - 11:45 PM', NULL, NULL, NULL, 9, NULL, 106),
(35, 'Boxpark', 'FUN | FOOD | FASHION', 'Boxpark is a place where you will get curated food options from top leading brands from ahmedabad.It has something to offer everyone, from classic Indian dishes to international cuisines. Boxpark is the place to be. Located at the heart of the city, it is Ahmedabad’s premier destination for fine dining.', 'Ahmedabad, in the state of Gujarat, India, is renowned for its vibrant street food scene. From hot and spicy chaat to delicious dishes.\r\nFOOD SHOPS\r\n\r\nBiryani Box\r\nHungry Foods\r\nThe Bowls Affair\r\nSmoky BBQ\r\nCoffee Carnival', 'Boxpark.jpg', 'boxpark1.jpg', 'boxpark2.jpg', 'Opp. Jaguar Car Showroom, Gota, Ahmedabad, Gujarat 382481.', '10:30 AM - 01:00 PM', NULL, NULL, NULL, 9, NULL, 107);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tbl`
--

CREATE TABLE `sub_category_tbl` (
  `Sub_Category_ID` int(6) NOT NULL,
  `Sub_Category_Name` varchar(30) NOT NULL,
  `Category_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category_tbl`
--

INSERT INTO `sub_category_tbl` (`Sub_Category_ID`, `Sub_Category_Name`, `Category_ID`) VALUES
(1, 'Luxury Hotels', 2),
(2, 'Business Hotels', 2),
(3, 'Budget Hotels', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `User_ID` int(6) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `User_Type` int(1) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `Phone_No` text NOT NULL,
  `date` date DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `expire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_ID`, `User_Name`, `User_Type`, `Email_ID`, `Phone_No`, `date`, `Password`, `resettoken`, `expire`) VALUES
(101, 'Meet Vaghani', 1, 'meetvaghani63@gmail.com', '9865565654', '2024-01-11', '$2y$10$eIBplXJ8AABnwarLDWQbkO..D0kJNM0wElDILyhgFJHQ7k8sgUgE2', NULL, '2024-03-04'),
(102, 'John Doe', 1, 'john12@gmail.com', '9876543210', '2024-02-16', '$2y$10$sFntt1CJSMBmgYezwN7EzOnuj9FaaQpcKCgFnvTQVSvRYeBbalDdu', NULL, '2024-02-08'),
(103, 'Emma Monroe', 2, 'emma12@gmail.com', '8556301785', '2024-03-23', '$2y$10$jCGpzTxCl1urFyZlD28suekogQDTOzlyhQb0fSs8.YEm7M/ipJOMe', NULL, '2024-01-08'),
(104, 'Raj Patel', 1, 'raj12@gmail.com', '7655413008', '2024-04-01', '$2y$10$BUIq6lal2NZ1mq7PYGlwMO1mkn4Qom5HeZ6K168//eVpRyAb7W1iu', NULL, NULL),
(105, 'Mahendra Patel', 2, 'mahendra12@gmail.com', '9644555701', '2024-03-04', '$2y$10$2IVykVgROx6K2T9TzGim7On2.6hQ.lGnSmASlme7fIHFq/.aIfw7K', NULL, NULL),
(106, 'Chintan Shah', 2, 'chintan12@gmail.com', '8333269705', '2024-02-05', '$2y$10$eEC0Oqxve4FTluGwO/RWi.4v1xC03NM5PRBrgPRvNeOibGnVT0eiq', NULL, NULL),
(107, 'Rishi Shah', 2, 'rishi12@gmail.com', '9632555897', '2024-01-26', '$2y$10$ss8CPd6fCnM9D70L/uWqYugGzbcuT19BgjeLXqsGoIKuYASRsWGTi', NULL, NULL),
(108, 'Aanya Ahuja', 1, 'aanya12@gmail.com', '8666695127', '2024-01-02', '$2y$10$dcBz0cVI5SfkCBZ1zNQAnO8m8ZbJvo4PB9uFbCl00ylilQ2V/dbM6', NULL, NULL),
(109, 'Rahul Verma', 1, 'rahul12@gmail.com', '7665980214', '2024-03-19', '$2y$10$.nR/ByHZKX.LCnFNfRh3Z.MNoe7wLKzbA4htULhMQKcSxkNgMWhGK', NULL, NULL),
(111, 'Aangi Shah', 1, 'shahaangi26@gmail.com', '7984544515', '2024-04-01', '$2y$10$MvL1ga8fVTzDJe2WNvksxeTMiG5eF.OpZcwl1NGqHTBO.bdAf2kQa', NULL, NULL),
(113, 'Dipti Jain', 1, 'diptijain701@gmail.com', '9832004577', '2024-04-02', '$2y$10$GRUhayaI5Lunv68pqMB4s.z5DFywtB5ZSs8p7cw44ERsNfml4BAz.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Service_ID` (`Service_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `category_master_tbl`
--
ALTER TABLE `category_master_tbl`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `favourite_tbl`
--
ALTER TABLE `favourite_tbl`
  ADD PRIMARY KEY (`Favourite_ID`),
  ADD KEY `Service_ID` (`Service_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `payment_master_tbl`
--
ALTER TABLE `payment_master_tbl`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Booking_ID` (`Booking_ID`);

--
-- Indexes for table `refund_tbl`
--
ALTER TABLE `refund_tbl`
  ADD PRIMARY KEY (`Refund_ID`),
  ADD KEY `Payment_ID` (`Payment_ID`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`Service_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Sub_Category_ID` (`Sub_Category_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  ADD PRIMARY KEY (`Sub_Category_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `Booking_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `category_master_tbl`
--
ALTER TABLE `category_master_tbl`
  MODIFY `Category_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `contact_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourite_tbl`
--
ALTER TABLE `favourite_tbl`
  MODIFY `Favourite_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `Feedback_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment_master_tbl`
--
ALTER TABLE `payment_master_tbl`
  MODIFY `Payment_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `refund_tbl`
--
ALTER TABLE `refund_tbl`
  MODIFY `Refund_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `Service_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  MODIFY `Sub_Category_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD CONSTRAINT `booking_tbl_ibfk_1` FOREIGN KEY (`Service_ID`) REFERENCES `service_tbl` (`Service_ID`),
  ADD CONSTRAINT `booking_tbl_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_tbl` (`User_ID`);

--
-- Constraints for table `favourite_tbl`
--
ALTER TABLE `favourite_tbl`
  ADD CONSTRAINT `favourite_tbl_ibfk_1` FOREIGN KEY (`Service_ID`) REFERENCES `service_tbl` (`Service_ID`),
  ADD CONSTRAINT `favourite_tbl_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_tbl` (`User_ID`);

--
-- Constraints for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD CONSTRAINT `feedback_tbl_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_tbl` (`User_ID`);

--
-- Constraints for table `payment_master_tbl`
--
ALTER TABLE `payment_master_tbl`
  ADD CONSTRAINT `payment_master_tbl_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `booking_tbl` (`Booking_ID`);

--
-- Constraints for table `refund_tbl`
--
ALTER TABLE `refund_tbl`
  ADD CONSTRAINT `refund_tbl_ibfk_1` FOREIGN KEY (`Payment_ID`) REFERENCES `payment_master_tbl` (`Payment_ID`);

--
-- Constraints for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD CONSTRAINT `service_tbl_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category_master_tbl` (`Category_ID`),
  ADD CONSTRAINT `service_tbl_ibfk_2` FOREIGN KEY (`Sub_Category_ID`) REFERENCES `sub_category_tbl` (`Sub_Category_ID`),
  ADD CONSTRAINT `service_tbl_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `user_tbl` (`User_ID`);

--
-- Constraints for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  ADD CONSTRAINT `sub_category_tbl_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category_master_tbl` (`Category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
