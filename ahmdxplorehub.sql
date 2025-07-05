-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 05:00 PM
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
(2, 102, 'John Doe', '2024-03-01 05:22:07', 5, 6000.00, 30000.00, 4);

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
(1, 102, 8),
(2, 102, 2);

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
(6, 102, 'f7.jpg', 'Ahmedabad One mall had everything at once place . High end to normal, the food court was a added advantage. Will visit the place again next time.');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master_tbl`
--

CREATE TABLE `payment_master_tbl` (
  `Payment_ID` int(6) NOT NULL,
  `Amount` float(9,2) NOT NULL,
  `Booking_ID` int(6) NOT NULL,
  `Payment_Mode` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_master_tbl`
--

INSERT INTO `payment_master_tbl` (`Payment_ID`, `Amount`, `Booking_ID`, `Payment_Mode`) VALUES
(1, 30000.00, 2, 1);

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
(1, 'Fun Blast', 'A Next-Generation Fun Destination', 'Fun Blast provides additional entertainment, excitement, rides, games, and food for people of all ages. For adults only, there is a trampoline park there.', 'The Fun Blast which provides sports arena gaming and go-to destinations for rides, games, food, and excitement.\r\nINDOOR GAMES:\r\nTrampoline\r\nBowling\r\nLucky Fish Frenzy\r\nBlizzarnd Blast\r\nZombie Out Beark Water\r\nOUTDOOR GAMES:\r\nSky Cycling\r\nMini Appu\r\nMerry-Go Round\r\nRocket Injection\r\nGyroscope Ride', 'funblast.jpg', 'funblast1.jpg', 'funblast2.jpg', 'Sindhu Bhavan Road, PRL Colony, Bopal, Ahmedabad, Gujarat 380058.', '11:00 AM - 11:00 PM', 9586601007, NULL, 30.00, 1, NULL, 106),
(2, 'Vintage Vibes', 'All Things Vintage! Delve into an era of architectural bliss and flavoursome food!', 'Vintage Vibes Restro most popular for its authentic Punjabi restaurant. With its unwavering quality & delicious recipes, Vintage Vibes Restro Multi-Cuisine has become one of the best and most famous restaurants.\r\n\r\nOur loyal customers believe it’s among the topmost restaurants to enjoy authentic vegetarian food in India and a must-visit.', 'Vintage Vibes in Thaltej, Ahmedabad Restaurants in Ahmedabad provide various cuisines with an aesthetic seating arrangement and the best services. Restaurants act as great places for many situations. From team meetings to family dinners, it can help serve a wide range of audiences.\r\nFOOD MENU\r\n\r\nBurmese Pepper Soup\r\nQueso Cheese Balls\r\nGunpowder Hummus\r\nFusion Ratatouille\r\nAvacado Filo Cups\r\nIndonesian Lumpia\r\nMexican Chaat\r\nTurkish Kunafa', 'vintage.jpg', 'vintage1.jpg', 'vintage2.jpg', 'Dada Nu Farm, Chhanalal Joshi Marg, opposite Jajarman Restuarant, off Sindhubhavan Marg, PRL Colony, Thaltej, Ahmedabad, Gujarat 380054, India.', '12:00 AM - 11:00 PM', 7567715000, NULL, NULL, 3, NULL, 103),
(3, 'ITC Narmada', 'A Luxury Collection Hotel', 'Architecturally inspired by the stepwells of Gujarat and the traditional ‘toran’ gateways adorning its façade, ITC Narmada welcomes you with regal splendour. In keeping with the philosophy of ITC Hotels, ITC Narmada is a glowing celebration of the culture, arts and crafts of the region. A prime location and luxurious facilities make each stay memorable.\r\n\r\nUndeniably luxurious, with décor that celebrates the vibrant arts and crafts of Gujarat, these beautiful rooms are instantly appealing. Hand-picked amenities and a marvellous ambience are backed by efficient service.', 'Inspired by the erstwhile royal kitchens of India, this exclusive vegetarian restaurant offers a fine collection of timeless delicacies, based on the ancient Indian system of seasonal cooking & decades of culinary research.\r\nRESTAURANTS\r\n\r\nPeshawri\r\nAdalaj Pavilion\r\nYi Jing\r\nRoyal Vega\r\nFabelle - The Chocolate Boutique', 'itc.jpg', 'itc1.jpg', 'itc2.jpg', 'Judges Bunglow Rd, Vastrapur, Ahmedabad, Gujarat-380015.', '10:00 AM - 12:00 PM', 7969664000, NULL, 20000.00, 2, 1, 106),
(4, 'Hotel Accolade', 'Enjoy upscale amenities and a brilliant location', 'Hotel Accolade is located in the heart of the most happening city of Gujarat, which is known as a Manchester. Yes, it is Ahmedabad.\r\n\r\nLocated at an easy to reach distance, the hotel Accolade which is known for its structural design and eminence. Reaching any corner of the city is not a headache, if you have confirmed your stay at Hotel Accolade. You can find infinite modes of transportation to reach any niche of the city. Being located in the city centre, the hotel has become an ultimate choice of business travelers and NRI guests.', 'A modern cooking technique where elements of a traditional dish are presented separately or in a novel way.', 'accolade.jpg', 'accolade1.jpg', 'accolade2.jpg', 'Opp. Gujarat College, Ellisbridge, Ahmedabad, India', '07:00 AM - 09:00 PM', 7926561016, NULL, 6000.00, 2, 3, 103),
(5, 'Science City', 'Discover, Innovate, Thrive: Science City Ahmedabad, Where Curiosity Meets Creativity.', 'Science City is an innovative science and technology center located in Ahmedabad, India. Established in 1960, Science City covers an expansive area and offers a variety of interactive exhibits, demonstrations, and activities related to science and technology. It serves as a dynamic hub for science enthusiasts, students, and families, providing a hands-on learning experience in areas such as physics, biology, astronomy, and more. It offers interactive exhibits, demonstrations, and educational programs, making science engaging for visitors of all ages. With its planetarium shows and workshops, Science City serves as a hub for curiosity and learning.', 'Beyond science exhibits, Science City Ahmedabad offers a spectrum of extra activities, ensuring an all-encompassing experience that caters to diverse interests and ages.\r\nMission To Mars Ride\r\nEarthquake Experience Ride\r\nCoal Mine\r\n4D Theatre\r\nMusical Fountain\r\nThrill Ride\r\nPlanetarium\r\nIMAX Theatre\r\nElectrodome\r\nHall of Space & Science\r\nAmphitheatre\r\nExpo Ground\r\nChildren Activity Centre\r\nRestaurants\r\nPlanet Earth\r\nLife Science Park\r\nEnergy Park\r\nMusical Fountain\r\nThrill Ride\r\nAuda Garden', 'sciencecity3.jpeg', 'sciencecity2.jpeg', 'sciencecity1.jpeg', 'Science City Road, Off the Sarkhej Gandhinagar Highway, Ahmedabad 380060, India', '10:00 AM - 07:00 PM', 9909991361, NULL, 50.00, 4, NULL, 106),
(6, 'Sabarmati Riverfront', 'Reconnecting Ahmedabad to its River', 'This project aims to provide Ahmedabad with a meaningful waterfront environment along the banks of the Sabarmati River and to redefine an identity of Ahmedabad around the river. The project has reconnected the city with the river and has positively transformed the neglected aspects of the riverfront.\r\n\r\nIt has long been acknowledged that appropriate development of Ahmedabad’s riverfront and the building of adequate infrastructure can turn the Sabarmati River into a major asset for the city and significantly improve the quality of life for all sections of its citizens.', 'Places and facilities at Sabarmati Riverfront are:\r\nRiver Promenade\r\nFlower Park\r\nAtal Bridge\r\nBiodiversity Park\r\nStreets\r\nMultilevel Car Parking\r\nGeneral Facilities', 'rf.jpg', 'rf1.jpg', 'rf2.jpg', '2nd Floor, “Riverfront House”, B/h. H.K. Arts College, Between Gandhi & Nehru Bridge, Pujya Pramukh Swami Marg (River Front Road – West) Ahmedabad – 380009.', '09:00 AM - 09:00 PM', 26580430, NULL, NULL, 8, NULL, 106),
(7, 'Hutheesing Ni Vadi', 'The Jain Temple', 'Hutheesing Ni Vadi is characterized by its elegant and detailed architecture, featuring a traditional ornate design with finely carved pillars, arches, and domes.\r\n\r\nThe temple complex includes a large courtyard, numerous shrines dedicated to different Tirthankaras, and a central dome that adds to the grandeur of the structure.\r\n\r\nThe intricate marble work and delicate sculptures throughout the temple showcase the craftsmanship of artisans from that era. Hutheesing Ni Vadi continues to be a place of religious reverence and a cultural treasure, drawing visitors for both its spiritual significance and architectural beauty.', 'A splendid 19th-century Jain temple in Ahmedabad, showcasing intricate architectural details and ornate craftsmanship.\r\nDedication to Lord Dharmanatha\r\nReligious Reverence\r\nMultiple Shrines\r\nCentral Dome\r\nEntrance Gate\r\nJali Work\r\nSeth Hutheesing Memorial Temple', 'hutheesing.jpg', 'hutheesing1.jpg', 'hutheesing2.jpg', 'Hutheesing Jain Temple, Camp Rd., Bardolpura, Madhupura, Ahmedabad, Gujarat 380004.', '07:00 AM - 08:00 PM', 22180774, NULL, 10.00, 7, NULL, 107),
(8, 'Ahmedabad One', 'World of Authenticity & Design', 'Ahmedabad One Mall, located in Ahmedabad, Gujarat, is a prominent shopping and entertainment destination in the city. The mall is situated in the Vastrapur area and offers a diverse range of retail outlets, including national and international brands, providing shoppers with a wide variety of options for fashion, electronics, and more.\r\n\r\nIn addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike.', 'Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.\r\nBRANDS\r\n\r\nPantaloons\r\nTrends\r\nShoppers Stop\r\nLifestyle\r\nH&M\r\nFOOD COURT\r\n\r\nTaco Bell\r\nPizza Hut\r\nMcDonald\'s\r\nKFC\r\nStarbucks', 'ahmdone.jpg', 'ahmdone1.jpg', 'ahmdone2.jpg', 'Nexus Ahmedabad One, Plot No. 216, T.P. Scheme 1, Near Vastrapur Lake, Vastrapur, Ahmedabad - 380054, Gujarat, India.', '10:00 AM - 10:00 PM', 7940193672, NULL, NULL, 6, NULL, 103),
(9, 'FrizBee', 'Ahmedabad\'s newest place to chill & hangout with your love ones.', 'With food stalls and exciting features like discotheque, VIP lounge, shopping & flea market, game zone, projection screen and live performance stage.\r\n\r\nFrizBee is an exciting, high-energy spot that can be enjoyed by people of all ages and who do not mind a little running and a lot of fun.', 'Frizbee is a great destination for families and friends to enjoy their weekends while enjoying quality food.\r\nBRANDS\r\n\r\n9834(The Fruit Truck)\r\nJashuben Shah Old Pizza\r\n4 Cofee\r\nMaharaj Dosa\r\nMama Mia Cotton Candy\r\nOTHER ATTRACTIONS\r\n\r\nHoney Bee\r\nFLEA Bee\r\nVRZ\r\nPocoloco', 'frizbee.jpg', 'frizbee1.jpg', 'frizbee2.jpg', 'Frizbee, opp. Tea Post, near Hotel Taj Skyline, Bodakdev, Ahmedabad, Gujarat 380059.', '05:30 PM - 01:00 AM', 7043442222, NULL, NULL, 9, NULL, 107),
(10, 'Carnival Utopia 2024', NULL, 'Get ready for the most thrilling and exciting event of the year! The Carnival Utopia is back in Ahmedabad, promising a month-long extravaganza filled with fun, entertainment, and unforgettable memories.', 'Dive into a world of enchantment as the Carnival Utopia brings together a spectacular array of activities and attractions for all ages. From heart-pounding rides to mouth-watering treats, there\'s something for everyone:\r\nRides and Attractions: Experience the adrenaline rush with our thrilling rides and attractions that cater to adventure seekers of all ages.\r\nLive Performances: Be mesmerized by live performances from talented artists and entertainers. From music and dance to magic shows, the carnival stage is set to dazzle.\r\nGourmet Delights: Indulge your taste buds in a culinary journey with a diverse range of food stalls offering delicious treats and local delicacies.', 'event1.jpg', 'event1.1.jpg', 'event1.2.jpg', 'GMDC Ground', '11:00 AM - 11:00 PM', NULL, 'May 10, 2024 - June 10, 2024', 100.00, 5, NULL, 105),
(11, 'Flavor Fiesta', NULL, 'Prepare your taste buds for a culinary journey like never before as Flavor Fiesta returns to Ahmedabad! This gastronomic extravaganza promises a celebration of flavors, aromas, and mouthwatering delights that will tantalize your senses.', 'Dive into a world of culinary wonders with an array of food stalls showcasing a diverse range of cuisines. From local street food to international delicacies, Flavor Fiesta brings together the best of Ahmedabad\'s vibrant food scene.\r\nIndulge your palate with gourmet delights crafted by renowned chefs and culinary artisans. From exquisite desserts to savory treats, each dish is a masterpiece, promising a symphony of flavors.\r\n\r\nWitness culinary magic unfold as expert chefs take the stage for live cooking demonstrations. Learn the secrets behind your favorite dishes and get inspired to recreate them in your own kitchen.\r\n\r\nEmbark on a global culinary adventure with a section dedicated to international flavors. Immerse yourself in the tastes of different cultures, all within the vibrant atmosphere of Ahmedabad.', 'event2.jpg', 'event2.1.jpg', 'event2.2.jpg', 'Sabarmati Riverfront', '6:00 PM - 12:00 PM', NULL, 'June 11, 2024 - June 15, 2024', 250.00, 5, NULL, 106),
(12, 'Groove Gala', NULL, 'Get ready for a musical journey that transcends boundaries as the sensational Darshan Raval takes center stage at \"Groove Gala\" in Ahmedabad! This one-of-a-kind music concert promises an unforgettable evening filled with soulful tunes, electrifying performances, and an atmosphere that will make you want to dance the night away.', 'Known for his soul-stirring voice and heartfelt lyrics, Darshan Raval has carved a niche for himself in the music industry. \"Groove Gala\" is not just a concert; it\'s a celebration of emotions, love, and the power of music to connect us all.\r\nWitness a musical extravaganza as Darshan Raval takes you on a journey through his chart-topping hits and soulful melodies.\r\nFrom romantic ballads to foot-tapping numbers, the concert promises a diverse repertoire that caters to every musical palate.\r\nPrepare to be mesmerized by Darshan Raval\'s on-stage charisma and energy.\r\nThe concert will feature unforgettable performances, collaborations, and surprises that will keep you on the edge of your seat.', 'event3.jpg', 'event3.1.jpg', 'event3.2.jpg', ' Narendra Modi Stadium', '9:00 PM - 12:00 PM', NULL, 'June 20, 2024', 700.00, 5, NULL, 105),
(13, 'Ahmedabad Book Fair', NULL, 'Discover the enchanting world of literature at the Ahmedabad Book Fair, where pages come to life and every book becomes a doorway to a new adventure. This annual literary extravaganza is a celebration of words, ideas, and the joy of reading, bringing together authors, publishers, and avid readers from all walks of life.', 'Step into a bibliophile\'s paradise as the Ahmedabad Book Fair unfolds its chapters. Rows of book stalls beckon with a diverse array of genres, from timeless classics to the latest bestsellers. Whether you\'re a seasoned reader or a newcomer to the world of books, there\'s something for everyone.\r\nAttend book signings, panel discussions, and author talks, gaining insights into the creative minds behind your favorite stories.\r\nExplore literature from different cultures, discover regional gems, and immerse yourself in the rich tapestry of storytelling that transcends boundaries.\r\nParticipate in engaging workshops and sessions that cater to all ages.\r\nFrom storytelling for children to writing workshops for aspiring authors, the fair is a hub of creativity and learning.', 'event4.jpg', 'event4.1.jpg', 'event4.2.jpg', 'Seema Hall', '9:00 AM - 9:00 PM', NULL, 'June 05, 2024 - June 12, 2024', NULL, 5, NULL, 103),
(14, 'Flea Fantasia', NULL, 'Embark on a delightful journey of discovery at Flea Fantasia, Ahmedabad\'s premier flea market extravaganza. This vibrant event promises more than just shopping; it\'s a kaleidoscope of colors, flavors, and unique finds that turns every visit into a magical experience.', 'Flea Fantasia is a shopper\'s paradise, where every corner unveils a treasure waiting to be found. From vintage trinkets to handmade crafts, and eclectic fashion to gourmet delights, the market is a true reflection of Ahmedabad\'s diverse and artistic spirit.\r\nSatisfy your taste buds with a culinary journey at Flea Fantasia.\r\nLocal vendors and gourmet artisans come together, offering a delectable array of street food, international flavors, and sweet treats that make this flea market a feast for foodies.\r\nImmerse yourself in the lively atmosphere with live entertainment at Flea Fantasia.\r\nFrom street performers to live music, the event is not just about shopping; it\'s a celebration of arts, culture, and community.', 'event5.jpg', 'event5.1.jpg', 'event5.2.jpg', 'Gujarat University', '6:30 PM - 11:00 PM', NULL, 'August 05, 2024 - August 07, 2024', 350.00, 5, NULL, 107),
(15, 'IPL Cricket Match - MI vs CSK', NULL, 'Cricket aficionados, mark your calendars! The highly anticipated clash between two cricketing giants, Mumbai Indians (MI) and Chennai Super Kings (CSK), is set to unfold in Ahmedabad as part of the Indian Premier League (IPL) extravaganza. Here\'s everything you need to know about this thrilling encounter.', 'MI vs CSK is more than a cricket match; it\'s a storied rivalry that has produced some of the most memorable moments in IPL history. Both teams boast a stellar lineup of international and domestic talent, promising a contest that will keep fans on the edge of their seats.\r\nAs the teams gear up for this clash, cricket enthusiasts are eager to see how MI\'s power-packed lineup, featuring stalwarts like Rohit Sharma and Jasprit Bumrah, will fare against the seasoned attack of CSK, led by the evergreen MS Dhoni.\r\nThe iconic Narendra Modi Stadium in Ahmedabad, also known as Motera Stadium, will play host to this IPL showdown.\r\nWith state-of-the-art facilities and a seating capacity that ensures an electric atmosphere, the stadium is the perfect setting for this marquee event.', 'event6.jpg', 'event6.1.jpg', 'event6.2.jpg', 'Narendra Modi Stadium', '7:30 PM - 11:00 PM', NULL, 'August 25, 2024', 3500.00, 5, NULL, 104),
(16, 'Bounce Up', 'Immerse yourself in the thrill of interactive bowling and other exciting activities', 'Get ready to jump for joy on our trampolines, dive into a virtual world with our cutting-edge VR games, test your skills at our interactive bowling lanes, and indulge your inner gamer at our arcade and when you\'ve worked up an appetite, our delicious restaurants will provide the perfect fuel for your next adventure.\r\n\r\nWe\'re thrilled to introduce our family entertainment zone, where the fun never stops and the memories never fade.', 'Ahmedabad One mall contains vivid brands that promise you a mix of luxury, classic, playful and delightful moments.\r\nACTIVITIES:\r\n\r\nTrampoline\r\nAirpark\r\nInteractive Bowling\r\nArcvade & VR Games\r\nMultisports Simulator\r\nSoftplay & Todlers Area\r\nHollogate Arena\r\nGlow in the dark nights', 'bounceup.jpg', 'bounceup1.jpg', 'bounceup2.jpg', 'Nr Jayantilal park,B.R.T.S. Bus Stop, Ambli Bopal Road,Ahmedabad,Gujarat 380058.', '11:00 AM - 11:00 PM', 9033503604, NULL, 380.00, 1, NULL, 104),
(17, 'Shott', 'Immerse yourself in the world of Shott', 'Shott is the place for every age who wants to have fun. Here many games are available like Go-karting, Bowling, Net Cricket, Rope Course, a children’s play area, and much more.\r\n\r\nPlay Arcade Games at Shott that are worth spending a whole day and beyond. Filled with thrill, action and exciting arcade games are for every age.', 'Spend the liveliest time of your life with your family and friends at the arcade games zone.\r\nGAME ZONE\r\n\r\nBowling\r\nArcade Games\r\nGo-Karting\r\nLaser War\r\nTrampoline', 'shott.jpg', 'shott1.jpg', 'shott2.jpg', 'Shott, Opp Saket-3, next to Sankalp Square, On Sindhubhavan Marg, Thaltej, Ahmedabad, Gujarat 380059', '11:00 AM - 11:30 PM', 7069007685, NULL, NULL, 1, NULL, 103),
(18, 'Mocha', 'A decent place with some good ambiance', 'Mocha is the country\'s first completely indigenous and eclectic café chain, known not just for its menu, but the varied experiences it brought to 20 outlets in 18 cities to expand the cafe culture.\r\n\r\nIn addition to shopping, Ahmedabad One Mall features entertainment options such as a multiplex cinema, creating a well-rounded experience for visitors. The mall is known for its modern architecture, spacious interiors, and a vibrant atmosphere that attracts locals and tourists alike.', 'Mocha has influenced the world-view of an entire generation, to stir a social revolution.\r\nFOOD:\r\n\r\nCRISPY KANDA PAO SLIDER\r\nMEZZE PLATTER\r\nLEBANESE KEBAB PLATTER\r\nMULTI GRAIN KHICHDI\r\nPENNE PASTA IN A CHEESY ALFREDO SAUCE\r\nDESERTS & SHAKES\r\n\r\nSTRAWBERRY CHEESECAKE SHAKE\r\nCHOCOLATE FUDGE CAKE\r\nKIWI BANANA HONEY SMOOTHIE\r\nNUTELLA PRETZEL FREAK SHAKE\r\nCOUNTRY LEMONADE', 'mocha.jpg', 'mocha1.jpg', 'mocha2.jpg', 'Mocha, 10 Vasantbaug Society, Opp. IDBI Bank, Gulbai Tekra Road, Navrangpura, Ahmedabad-380006', '11:00 AM - 11:00 PM', 7600160000, NULL, NULL, 3, NULL, 103),
(19, 'Unlocked', '\'Unlocked Cafe\' in Ahmedabad is our first space with cozy geometric interiors and a board game cafe.', 'Unlocked is the first of its kind space with a craft cocktail bar, an international cuisine restaurant, one of India\'s largest library of board games and a real life gaming experience. Inspired by geometric shapes, illusionary puzzle games and MC Esher style branding, our space pulls you in to Unlock your inner child.\r\n\r\nOur food menu is inspired by our founder\'s travels and culinary trends in global cuisine. We source the freshest produce to serve you authentic flavours, all made from scratch in-house.', 'Our selection of small and large plates bring together a range of classics and some creative avant-garde cuisine from our chef.\r\nUNLOCKED COMFORT ZONE:\r\n\r\nTrue & parmesan fries\r\nClassic french fries\r\nDuet BBQ paneer tikka\r\nFish n chips with tartar sauce\r\nChef special crispy waterchestnuts\r\nGAMES:\r\n\r\nPicitionary\r\nScrabble\r\nCluedo\r\nBattleship\r\nMonopoly Deal', 'unlocked.jpg', 'unlocked1.jpg', 'unlocked2.jpg', 'Umashankar Joshi Marg, near Girish Cold Drinks, Vasant Vihar, Navrangpura, Ahmedabad, Gujarat 380009', '12:00 AM - 11:00 PM', 7948900165, NULL, NULL, 3, NULL, 105);

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
(1, 'luxury hotels', 2),
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
(101, 'Meet Vaghani', 1, 'meetvaghani63@gmal.com', '9865565654', NULL, '$2y$10$eIBplXJ8AABnwarLDWQbkO..D0kJNM0wElDILyhgFJHQ7k8sgUgE2', NULL, '2024-03-04'),
(102, 'John Doe', 1, 'john12@gmail.com', '9876543210', NULL, '$2y$10$sFntt1CJSMBmgYezwN7EzOnuj9FaaQpcKCgFnvTQVSvRYeBbalDdu', NULL, '2024-02-08'),
(103, 'Emma Monroe', 2, 'emma12@gmail.com', '8556301785', NULL, '$2y$10$jCGpzTxCl1urFyZlD28suekogQDTOzlyhQb0fSs8.YEm7M/ipJOMe', NULL, '2024-01-08'),
(104, 'Raj Patel', 1, 'raj12@gmail.com', '7655413008', NULL, '$2y$10$BUIq6lal2NZ1mq7PYGlwMO1mkn4Qom5HeZ6K168//eVpRyAb7W1iu', NULL, NULL),
(105, 'Mahendra Patel', 2, 'mahendra12@gmail.com', '9644555701', NULL, '$2y$10$2IVykVgROx6K2T9TzGim7On2.6hQ.lGnSmASlme7fIHFq/.aIfw7K', NULL, NULL),
(106, 'Chintan Shah', 2, 'chintan12@gmail.com', '8333269705', NULL, '$2y$10$43rluwOxDyrD96YdjxENh.9qTjQMz/7ieIhINpkf66lL.gZMeT4SC', NULL, NULL),
(107, 'Rishi Shah', 2, 'rishi12@gmail.com', '9632555897', NULL, '$2y$10$ss8CPd6fCnM9D70L/uWqYugGzbcuT19BgjeLXqsGoIKuYASRsWGTi', NULL, NULL),
(108, 'Aanya Ahuja', 1, 'aanya12@gmail.com', '8666695127', NULL, '$2y$10$dcBz0cVI5SfkCBZ1zNQAnO8m8ZbJvo4PB9uFbCl00ylilQ2V/dbM6', NULL, NULL),
(109, 'Rahul Verma', 1, 'rahul12@gmail.com', '7665980214', NULL, '$2y$10$.nR/ByHZKX.LCnFNfRh3Z.MNoe7wLKzbA4htULhMQKcSxkNgMWhGK', NULL, NULL),
(111, 'Aangi Shah', 1, 'shahaangi26@gmail.com', '7984544515', NULL, '$2y$10$zAUBuvS4ufFBC3WAuFc01..S1.1Kckp5JKJv1453WezQ7bZgIvJKa', NULL, NULL);

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
  MODIFY `Booking_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_master_tbl`
--
ALTER TABLE `category_master_tbl`
  MODIFY `Category_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favourite_tbl`
--
ALTER TABLE `favourite_tbl`
  MODIFY `Favourite_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `Feedback_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_master_tbl`
--
ALTER TABLE `payment_master_tbl`
  MODIFY `Payment_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refund_tbl`
--
ALTER TABLE `refund_tbl`
  MODIFY `Refund_ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `Service_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  MODIFY `Sub_Category_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

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
