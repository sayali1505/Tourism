-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 05:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `iternary`
--

CREATE TABLE IF NOT EXISTS `iternary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(20) NOT NULL,
  `p_desc` text NOT NULL,
  `pac_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `iternary`
--

INSERT INTO `iternary` (`id`, `day`, `p_desc`, `pac_name`) VALUES
(83, 'Day1', 'Except Nasik Departure Office, Pilgrims Should Be Reached At Nasik With Help Of Available Vehicle.', 'Exoitic Maharashtra Darshan'),
(84, 'Day2', 'At Morning 05 Am, Depart From Nasik To Shirdi, At Shirdi Saint Sadguru Saibaba Samadhi Temple Darshan, After Depart To Shanishinganapur For Shani-Temple Darshan, At Paithan Shri. Saint Eknath Maharaj Samadhi Temple Darshan, 1st Stay At Paithan.', 'Exoitic Maharashtra Darshan'),
(85, 'Day3', 'Morning 06 Am, Depart To Verul, At Verul Ghrushneshwar Jyotirling Temple Darshan (1 Of 12 Jyotirlings),Then Visit Kailas Caves, After Bhadra-Maruti Darshan, Depart To Shegaon , At Shegaon Visit Anandsagar Park & Saint Sadguru Gajanan Maharaj Temple Darshan, 2nd Stay At Shegaon.', 'Exoitic Maharashtra Darshan'),
(86, 'Day4', 'At Morning Depart To Mahurgadh, At Mahurgadh Shakti-Pith Aai Renuka Temple Darshan,3rd Stay At Mahurgadh.', 'Exoitic Maharashtra Darshan'),
(87, 'Day5', 'At Morning Aoundha (1 Of 12 Jyotirlings) Nagnath Jyotirling Darshan, After At Parali (1 Of 12 Jyotirlings) Vaijyanath Jyotirling Darshan, 4th Stay At Parali.', 'Exoitic Maharashtra Darshan'),
(88, 'Day6', 'At Morning In Ambejogai, Shakti-Pith Maa Yogehswari Temple Darshan, After In Tuljapur Shakti-Pith Aai Tuljabhavani Temple Darshan, Later In Akkalkot, Shri Swami Samarth Maharaj Temple Darshan, Then Depart To Pandharpur For Darshan To Vitthal-Rukmini Temple, 5th Stay At Pandharpur.', 'Exoitic Maharashtra Darshan'),
(89, 'Day7', 'At Morning Depart To Kolhapur, Darshan For Shakti-Pith Mahalaxmi Temple, After That Yatra Concludes And Departs To Preferred Locations.', 'Exoitic Maharashtra Darshan'),
(90, 'Day1', 'From The Related Departure Office…………..AM/PM, Depart To Nasik.At Evening 06 Pm From Nasik & From Pune At 11 Pm Depart To Kolhapur.', 'Kokan Darshan'),
(91, 'Day2', 'At Morning In Kolhapur Mahalaxmi Temple Darshan Then Stay At Malvan/Kankavali.', 'Kokan Darshan'),
(92, 'Day3', 'Morning At Tarkarli Sightseeing For The Confluence Of The Creek Water (Khadi-Samudra Sangam), Back Waters, After At Malvan Visit Sindhu-Durga Fort & Then Stay At Ganapatipule.', 'Kokan Darshan'),
(93, 'Day4', 'In Ganapatipule At Morning Ganesh Temple Darshan & Sightseeing For Ganpatipule Beach, After That Darshan For Velaneshwar Shiv Temple, Then Sightseeing For Guhagar Beach & Stay At Chipalun/Mahad.', 'Kokan Darshan'),
(94, 'Day5', 'At Morning Visit Shivtharghal For Ramadas Swami Ghali, After That Visit Raigadh For Sightseeing (Capital Of Chatrapati Shivaji Maharaj) Raigadh Fort, Then Stay At Mahad.', 'Kokan Darshan'),
(95, 'Day6', 'At Morning In Mahabaleshwar Make Local Sightseeing & Then Yatra Concludes With Old Mahabaleshwar Temple Darshan And Departs To Preferred Locations.', 'Kokan Darshan'),
(96, 'Day1', 'From The Related Departure Office…………..AM/PM, Depart To Nasik. At Evening 06 Pm From Nasik & From Pune At 11 Pm Depart To Kolhapur.', 'Scenic Places'),
(97, 'Day2', 'At Morning In Kolhapur Mahalaxmi Temple Darshan Then Stay At Kolhapur.', 'Scenic Places'),
(98, 'Day3', 'At Morning Sightseeing in kolhapur, Then Depart To Ganapatipule & After Reaching Stay At Ganapatipule.', 'Scenic Places'),
(99, 'Day 4', 'At Morning Darshan For Ganesh Temple & Sightseeing For Beach, Then Depart To Mahabaleshwar & After Reaching Stay At Mahabaleshwar.', 'Scenic Places'),
(100, 'Day 5', 'At Morning In Mahabaleshwar Make Local Sightseeing & Then Yatra Concludes With Old Mahabaleshwar Temple Darshan And Departs To Preferred Locations.', 'Scenic Places'),
(101, 'Day 1', 'From The Related Departure Office…………..AM/PM, Depart To Nasik. At Evening 06 Pm From Nasik & From Pune At 11 Pm Depart To Mahabaleshwar.', 'Hilly Places'),
(102, 'Day 2', 'At Morning Sightseeing in mahabaleshwar, Then Depart To Lonavala & After Reaching Stay At Lonavala.', 'Hilly Places'),
(103, 'Day 3', 'At Morning  Sightseeing in lonavala, Then Depart To Khandala & sightseeing in khandala. Then Yatra Concludes With khandala And Departs To Preferred Locations.', 'Hilly Places'),
(104, 'Day 1', 'From The Related Departure Office…………..AM/PM,  Depart To Kolhapur.', 'Family Holiday'),
(105, 'Day 2', 'At Morning Sightseeing in kolhapur, Then Depart To panhala & After Reaching Stay At Panhala.', 'Family Holiday'),
(106, 'Day 3', 'At Morning  Sightseeing in panhala, Then Depart To ganpatipule & sightseeing in ganpatipule and stay at ganpatipule.', 'Family Holiday'),
(107, 'Day 4', 'At Morning Depart To Dervan & sightseeing in dervan and stay at dervan.', 'Family Holiday'),
(108, 'Day 5', 'At Morning  Depart To mahabaleshwar & sightseeing in mahabaleshwar and Then Yatra Concludes With mahabaleshwar And Departs To Preferred Locations.', 'Family Holiday'),
(109, 'Day 1', 'From The Related Departure Office…………..AM/PM,  Depart To Kolhapur.', 'Weekend Masti'),
(110, 'Day 2', 'At Morning Sightseeing in kolhapur, Then Depart To tarkarli & After Reaching Stay At tarkarli.', 'Weekend Masti'),
(111, 'Day 3', 'At Morning  Sightseeing in tarkarli, Then Depart To malvan & sightseeing in malvan and sindhudurg and stay at malvan.', 'Weekend Masti'),
(112, 'Day 4', 'At Morning Depart To ganpatipule & sightseeing in ganpatipule and stay at ganpatipule.', 'Weekend Masti'),
(113, 'Day 5', 'At Morning  Depart To raigad & sightseeing in raigad and then dept. To mahabaleshwar and stay.', 'Weekend Masti'),
(114, 'Day 6', 'At Morning sightseeing in mahabaleshwar and then Yatra Concludes With mahabaleshwar And Departs To Preferred Locations.', 'Weekend Masti'),
(115, 'Day 1', 'On arrival at Mumbai, meet our ihpl representative who will help you take a transfer to Matheran. Matheran is a popular destination in the Raigad district of Maharashtra. The place offers a serene environment to the tourists. After you reach Matheran, check-in to the hotel and spend the rest of the sightseeing at Alexander Point, Echo Point and Panorama Point. Have a comfortable stay at night in the hotel.', 'Hillstation Refreshment'),
(116, 'Day 2', 'Have delicious breakfast in the morning and go for a walk. Enjoy those scenic locations and capture some memorable moments. Visit famous attractions like Charlotte Lake and Panthers Caves. You can also enjoy horse riding at Matheran. After sightseeing at these places, leave for the next destination, Lonavala. Stay overnight at the hotel in Lonavala.', 'Hillstation Refreshment'),
(117, 'Day 3', 'Munch healthy breakfast and leave for sightseeing at famous attractions like Karla Caves, Visapur Fort, Walwan Dam and Lonavala Lake.  After sightseeing at Lonavala, leave for Alibagh. On your way to Alibagh, stopover at Khandala and enjoy the views from those scenic locations in pleasant weather. On reaching Alibagh, check-in to the hotel. Go for a long walk at Nagaon beach in the evening and enjoy the beautiful weather. Stay overnight at the hotel.', 'Hillstation Refreshment'),
(118, 'Day 4', 'In the morning, you can visit Kihim Beach, Janjira Fort, Alibagh Beach and Kulaba Fort. Enjoy sightseeing at these places and head back to Mumbai. After reaching Mumbai, take a transfer to the airport/railway station. Finally, this beautiful tour comes to an end. Take back all your lovely memories and cherish them always.', 'Hillstation Refreshment'),
(119, 'Day 1', 'On arrival at Nagpur airport/railway station at 12.00 pm you will transferred to Tadoba National Park. After reaching at caravan parking area meet & greet our representative. Evening is at leisure. In the evening you will have bonfire followed by dinner (On Direct Payment Basis). Overnight in Caravan at Tadoba National Park.', 'Tadoba National Park'),
(120, 'Day 2', ' Today early morning 5.00 am you will proceed to First Jungle Safari in open gypsy along with forest guide at Tadoba National Park. After lunch proceed for second jungle safari at 14.30 pm to return back to your resort at 17.30 pm. Evening is at leisure. Overnight in Caravan at Tadoba National Park.', 'Tadoba National Park'),
(121, 'Day 3', 'This morning walk to sunrise point & yoga followed by breakfast. Later you will be transferred to Nagpur airport / railway station via Anandvan for your flight / train back home or your next destination.', 'Tadoba National Park'),
(122, 'Day 1', 'On arrival at Nagpur airport/railway station at 12.00 pm you will transferred to Pench National Park Maharashtra. After reaching at caravan parking area meet & greet our representative. Evening is at leisure. In the evening you will have bonfire followed by dinner (On Direct Payment Basis). Overnight in Caravan at Pench National Park Maharashtra.', 'Pench National Park'),
(123, 'Day 2', 'Today early morning 5.00 am you will proceed to First Jungle Safari in open gypsy along with forest guide at Pench National Park Maharashtra. After lunch proceed for second jungle safari at 14.30 pm to return back to your resort at 17.30 pm. Evening is at leisure. Overnight in Caravan at Pench National Park Maharashtra.', 'Pench National Park'),
(124, 'Day 3', 'This morning walk to sunrise point & yoga followed by breakfast. Later you will be transferred to Nagpur airport / railway station for your flight / train back home or your next destination.', 'Pench National Park'),
(125, 'Day 1', 'Morning depature from Mumbai. Diveaagar : Unique Golden idol of Ganpati known as Ganesh of Diveaagar. Shreewardhan – A place with inborn beauty known for its temple. Harihareshwar famous as Dakshin Kashi. ', 'Shivshahi Raigad'),
(126, 'Day 2', 'Raigad Fort : The Gibraltar of the East Rairi hill near Mahad – selected as the preferable capital by shahaji Bhosale father of Shivaji Maharaj and also used for the Samadhi of Shivaji Maharaj. Night arrival at Dadar. ', 'Shivshahi Raigad'),
(127, 'Day 1', 'On arrival at Mumbai airport/ railway station,you will transferred to the Mahabaleshwar. Overnight at in Mahabaleshwar.', 'Short break mahabaleshwar'),
(128, 'Day 2', 'Today enjoy half day sightseeing tour. Rest of the day is at leisure. Overnight at in Mahabaleshwar.', 'Short break mahabaleshwar'),
(129, 'Day 3', 'Today enjoy half day sightseeing tour. We suggest you to experience activities at the Hotel.Overnight at in Mahabaleshwar.', 'Short break mahabaleshwar'),
(130, 'Day 4', 'This morning you will be transferred to Mumbai airport/ railway station for your flight / train back home or your next destination. ', 'Short break mahabaleshwar'),
(131, 'Day 1', 'Today morning we proceed to Kolhapur from Mumbai by coach. En-route visit Shivaji Maharaja Museum at Satara.', 'Kolhapur Tour'),
(132, 'Day 3', 'Today we visit Panhala fort – famous for Battle of Pavan Khind. Then we visit Jyotiba temple. In the evening, we have some free time for shopping at Kolhapur.', 'Kolhapur Tour'),
(133, 'Day 4', 'Today we proceed to Amba Ghat - is well known for its beautiful verdant surroundings and cool weather. Visit Manoli Dam and Pawankhind and Vishalgarh. Overnight stay at Kolhapur.', 'Kolhapur Tour'),
(134, 'Day 5', 'Today morning visit Siddhagiri museum – It’s a sculpture museum. This museum showcases different aspects of Gramjivan (village life). Later Guests will proceed to Mumbai by Bus.', 'Kolhapur Tour'),
(135, 'Day 1', 'On arrival at Mumbai, meet our ihpl representative who will help you take a transfer to Matheran. Matheran is a popular destination in the Raigad district of Maharashtra. The place offers a serene environment to the tourists. After you reach Matheran, check-in to the hotel and spend the rest of the sightseeing at Alexander Point, Echo Point and Panorama Point. Have a comfortable stay at night in the hotel.', 'Alluring Maharashtra Tour'),
(136, 'Day 2', 'Have delicious breakfast in the morning and go for a walk. Enjoy those scenic locations and capture some memorable moments. Visit famous attractions like Charlotte Lake and Panthers Caves. You can also enjoy horse riding at Matheran. After sightseeing at these places, leave for the next destination, Lonavala. Stay overnight at the hotel in Lonavala.', 'Alluring Maharashtra Tour'),
(137, 'Day 3', 'Munch healthy breakfast and leave for sightseeing at famous attractions like Karla Caves, Visapur Fort, Walwan Dam and Lonavala Lake. After sightseeing at Lonavala, leave for Alibagh. On your way to Alibagh, stopover at Khandala and enjoy the views from those scenic locations in pleasant weather. On reaching Alibagh, check-in to the hotel. Go for a long walk at Nagaon beach in the evening and enjoy the beautiful weather. Stay overnight at the hotel.', 'Alluring Maharashtra Tour'),
(138, 'Day 4', 'In the morning, you can visit Kihim Beach, Janjira Fort, Alibagh Beach and Kulaba Fort. Enjoy sightseeing at these places and head back to Mumbai. After reaching Mumbai, take a transfer to the airport/railway station. Finally, this beautiful tour comes to an end. Take back all your lovely memories and cherish them always.', 'Alluring Maharashtra Tour'),
(139, 'Day 1', 'Morning arrival at Mahabaleshwar. On arrival transfer to Hotel. Free for Leisure. Stay at Hotel.  ', 'Classic Mahabaleshwar'),
(140, 'Day 2', 'After Breakfast visit Half Day Local Sightseeing by Sharing Vehicle of Mahabaleshwar covering Mahabaleshwar Darshan, Old Mahabaleshwar, PanchGanga Temple, Lovers Point, Kate’s Point, Monkey Point, Bombay Point, Echo Point. Evening free for Leisure. Stay at Hotel.', 'Classic Mahabaleshwar'),
(141, 'Day 3', 'After breakfast visit Fort Pratapgad, Panchgani Market,Mala Factory Outlet, Table Land Caves, Parsi Point, Needle O Garden,Elephant Point. Evening free for Shopping. Stay at Hotel. ', 'Classic Mahabaleshwar'),
(142, 'Day 4', 'After breakfast check out from Hotel. Evening arrival at Mumbai. ', 'Classic Mahabaleshwar'),
(143, 'Day 2', 'Post an early breakfast, is scheduled for a wildlife safari inside the national park. During the safari, some of the species that you would spot here in abundance include jackals, sloth bears, tigers, hyenas, panthers, nil gai, bison, sambar, wild dogs and cheetal. The oldest and largest national park of Maharashtra, Tadoba is also home to around 195 avifauna and 74 butterfly species. Spend a thrilling day here. Overnight stay at the resort.', 'Maharashtra National Parks'),
(144, 'Day 3', 'After breakfast, get transferred to Nagzira Wildlife Sanctuary, by road. After reaching, check-in at the wildlife resort. This wildlife sanctuary is home to around 4 amphibian species, 34 mammal species, 36 reptile species, and 166 species of birds. It receives around 30,000 visitors every year. The rest of the day is at leisure. One of the nearby attractions is Itiadoh dam (65 km), which is worth-visiting. This dam is built in Garvi River. If you wish you can embark on a wildlife safari inside the park, late afternoon. Stay Overnight.', 'Maharashtra National Parks'),
(145, 'Day 4', 'After an early morning breakfast, embark on morning wildlife safari inside the park. Spot animals roaming freely. Some of the animals and birds that can normally be seen here include sloth bears, panthers, leopards, chital, tiger, bisons, jackals, mouse deers, jungle cat, hare, barking deer, civet cats, four-headed antelopes, grey jungle fowl, peafowl and more. Later in the day, get transferred to Nagpur, by road. Complete the check-in formalities. The evening is at leisure. You can explore the nearby surroundings on-foot, visit the popular attractions, shop in the popular markets, and taste the local delicacies and more. Stay Overnight.', 'Maharashtra National Parks'),
(146, 'Day 5', 'Post breakfast, complete the check-out formalities and get transferred to Nagpur airport/railway station to board a flight or a train for your onward destination.', 'Maharashtra National Parks'),
(147, 'Day 1', 'On reaching Mumbai  leave for sightseeing around the place. You can visit different attractions which this beautiful city offers including Gateway of India, Shree Siddhivinayak Temple, Juhu Beach and Prince of Wales Museum. In the evening, you can go for a stroll around the place. Later, come back to the hotel for dinner. Stay overnight at the hotel.', 'Ajanta Ellora tour'),
(148, 'Day 2', 'This morning, you take a transfer to you next destination, Aurangabad. Take a transfer to the airport for your flight to Aurangabad. On reaching Aurangabad, check-in to the hotel. Later, drive towards the star attraction of the city, Ajanta Caves. Ajanta Caves is a UNESCO World Heritage Site which houses 30 rock-cut Buddhist Caves. The caves have beautiful paintings and sculptures which are rightly called the Buddhist masterpieces. After sightseeing around the place, drive back to the hotel for dinner. Have a comfortable overnight stay in the hotel.', 'Ajanta Ellora tour'),
(149, 'Day 3', 'After having your breakfast, leave for a sightseeing tour around the place. Visit the famous Ellora Caves and Daulatabad Fort. Ellora Caves is one attraction which represents the spectacular workmanship behind its exquisite carving and paintings. The caves also reflect the religious harmony which was there during the 5th to 11th century in India. Also visit the Daulatabad Fort which was built by the Yadavas. Initially, the fort acted as a southern military base. After having a glimpse of the glorious past of the country, leave for the hotel. Stay overnight.', 'Ajanta Ellora tour'),
(150, 'Day 4', 'Munch your breakfast in the morning and then leave for Nasik which is around 181 kms from Aurangabad. On reaching Nasik, check-in to the hotel and take some rest. Later, leave for a short sightseeing tour around Nasik. You can begin by seeking blessings of Lord Shiva with a visit to Trimbakeshwar jyotirlinga which is a famous pilgrimage site of Nasik. Later, you can visit Pandava Caves which house a group of 24 Buddhist Caves and were excavated in 1 CE. Spend the evening at leisure. Later, have your dinner and stay overnight at the hotel.', 'Ajanta Ellora tour'),
(151, 'Day 5', 'After having your breakfast, leave Nasik and head towards Mumbai. On reaching Mumbai, take a transfer to the railway station/airport and carry on with your onward journey. The tour ends here.', 'Ajanta Ellora tour'),
(152, 'Day 3', 'Today, in the morning, you will be transferred to the nearby Railway Station/Airport for your onwards journey.', 'Explore Mumbai'),
(155, 'Day1', 'Upon arrival at the Mumbai airport, our tour representative will meet you and assist you in smooth transfer to the hotel. Stay overnight in the hotel.', 'Mumbai Darshan'),
(156, 'Day3', 'In the morning, enjoy a full day excursion to the Ajanta Caves. 30 in number, the Ajanta Caves is a group of Buddhist monasteries and houses a vast collection of art, paintings and scriptures. Stay overnight in the hotel.', 'Mumbai Darshan'),
(157, 'Day4', 'Post breakfast in the morning, embark on a sightseeing tour of Ellora Caves, Aurangabad Caves and Daulatabad Fort. 34 in number, the Ellora Caves represent three different religions such as Buddhism, Hinduism and Jainism. On the other hand, the 9 Buddhist caves and Viharas at the Aurangabad Caves are known for Tantric influences. Stay overnight in the hotel.', 'Mumbai Darshan'),
(158, 'Day5', 'Today, you will be transferred to the airport to board flight to Mumbai. Upon arrival, you will be transferred to the hotel. Later, proceed on a sightseeing excursion to the Elephanta Caves. Stay overnight in the hotel.', 'Mumbai Darshan');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(20) NOT NULL,
  `loc_state_id` int(11) NOT NULL,
  PRIMARY KEY (`loc_id`),
  KEY `fk` (`loc_state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc_id`, `loc_name`, `loc_state_id`) VALUES
(1, 'Mumbai', 1),
(2, 'Panji', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text,
  `pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Email`, `pass`) VALUES
(1, 'sayalipatil1505@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `pac_id` int(11) NOT NULL AUTO_INCREMENT,
  `pac_name` varchar(50) NOT NULL,
  `cities` text NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `cost` float NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`pac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pac_id`, `pac_name`, `cities`, `days`, `nights`, `cost`, `description`) VALUES
(3, 'Maharashtra Darshan', 'Pandharpur, Tuljapur, Kolhapur', 7, 6, 8400, 'Day1\nExcept Nasik Departure Office, Pilgrims Should Be Reached At Nasik With Help Of Available Vehicle.\n\nDay2\nAt Morning 05 Am, Depart From Nasik To Shirdi, At Shirdi Saint Sadguru Saibaba Samadhi Temple Darshan, After Depart To Shanishinganapur For Shani-Temple Darshan, At Paithan Shri. Saint Eknath Maharaj Samadhi Temple Darshan, 1st Stay At Paithan.\n\nDay3\nMorning 06 Am, Depart To Verul, At Verul Ghrushneshwar Jyotirling Temple Darshan (1 Of 12 Jyotirlings),Then Visit Kailas Caves, After Bhadra-Maruti Darshan, Depart To Shegaon , At Shegaon Visit Anandsagar Park & Saint Sadguru Gajanan Maharaj Temple Darshan, 2nd Stay At Shegaon.\n\nDay4\nAt Morning Depart To Mahurgadh, At Mahurgadh Shakti-Pith Aai Renuka Temple Darshan,3rd Stay At Mahurgadh.\n\nDay5\nAt Morning Aoundha (1 Of 12 Jyotirlings) Nagnath Jyotirling Darshan, After At Parali (1 Of 12 Jyotirlings) Vaijyanath Jyotirling Darshan, 4th Stay At Parali.\n\nDay6\nAt Morning In Ambejogai, Shakti-Pith Maa Yogehswari Temple Darshan, After In Tuljapur Shakti-Pith Aai Tuljabhavani Temple Darshan, Later In Akkalkot, Shri Swami Samarth Maharaj Temple Darshan, Then Depart To Pandharpur For Darshan To Vitthal-Rukmini Temple, 5th Stay At Pandharpur.\n\nDay7\nAt Morning Depart To Kolhapur, Darshan For Shakti-Pith Mahalaxmi Temple, After That Yatra Concludes And Departs To Preferred Locations.\n\n'),
(4, 'Kokan Darshan', 'Ganpatipule, Raigad, Sindhudurg, Tarkarli', 6, 5, 8500, 'Day1\nFrom The Related Departure Office…………..AM/PM, Depart To Nasik.At Evening 06 Pm From Nasik & From Pune At 11 Pm Depart To Kolhapur.\n\nDay2\nAt Morning In Kolhapur Mahalaxmi Temple Darshan Then Stay At Malvan/Kankavali.\n\nDay3\nMorning At Tarkarli Sightseeing For The Confluence Of The Creek Water (Khadi-Samudra Sangam), Back Waters, After At Malvan Visit Sindhu-Durga Fort & Then Stay At Ganapatipule.\n\nDay4\nIn Ganapatipule At Morning Ganesh Temple Darshan & Sightseeing For Ganpatipule Beach, After That Darshan For Velaneshwar Shiv Temple, Then Sightseeing For Guhagar Beach & Stay At Chipalun/Mahad.\n\nDay5\nAt Morning Visit Shivtharghal For Ramadas Swami Ghali, After That Visit Raigadh For Sightseeing (Capital Of Chatrapati Shivaji Maharaj) Raigadh Fort, Then Stay At Mahad.\n\nDay6\nAt Morning In Mahabaleshwar Make Local Sightseeing & Then Yatra Concludes With Old Mahabaleshwar Temple Darshan And Departs To Preferred Locations.\n\n\n\n\n'),
(5, 'Scenic Maharashtra', 'Goa,Ganpatipule,Mahabaleshwar,kolhapu', 7, 6, 11950, 'Day1\nFrom The Related Departure Office…………..AM/PM, Depart To Nasik. At Evening 06 Pm From Nasik & From Pune At 11 Pm Depart To Kolhapur.\n\nDay2\nAt Morning In Kolhapur Mahalaxmi Temple Darshan Then Stay At Kolhapur.\n\nDay3\nAt Morning In Goa, Local Sightseeings Like, Saint Francis Church, Dona-Paula Beach & Miramar Beach, Then Stay At Goa.\n\nDay4\nAt Morning Sightseeing For Dudh-Sagar Falls & Cruise Ship Sailing, Then Stay At Goa.\n\nDay5\nAt Morning Sightseeing For Calangute Beach, Then Depart To Ganapatipule & After Reaching Stay At Ganapatipule.\n\nDay6\nAt Morning Darshan For Ganesh Temple & Sightseeing For Beach, Then Depart To Mahabaleshwar & After Reaching Stay At Mahabaleshwar.\n\nDay7\nAt Morning In Mahabaleshwar Make Local Sightseeing & Then Yatra Concludes With Old Mahabaleshwar Temple Darshan And Departs To Preferred Locations.\n\n\n'),
(6, 'Spiritual Sojourn - Maharashtra Jyotirlinga', ' Aurangabad,pune,nashik', 3, 2, 9750, 'Day 1 - Pune to Nashik (111 Km / 3 hours)\nOn reaching Pune, leave early in the morning for darshan at Bhimashankar Jyotirlinga Temple. After this, journey towards Nashik, situated at a distance of about 220 kilometres and takes about 5.5 hours to reach. On arrival, check in at the hotel near Trimbakeshwar Temple. Enjoy a delicious dinner and overnight stay at the hotel.\n\nDay 2 - A Day Filled with Devotion\nAfter a delicious breakfast, leave for Trimbakeshwar Jyotirlinga darshan at Trimbakeshwar Temple. After this, return to the hotel and relax for some time. Check out from the hotel and enjoy a drive to Saptashrungi, a Hindu pilgrimage site. Go for a darshan at Saptashrungi Temple. Later, head to the hotel in Aurangabad, situated at a distance of 210 kilometres and will take about 4.5 hours to reach. On arrival, check in at the hotel and enjoy a scrumptious dinner.\n\nDay 3 - Aurangabad to Pune (235 Km / 5 hours)\nAfter having breakfast, leave for a Darshan at Grishneshwar Jyotirlinga. Visit the famous Ellora Caves. Later, drive to the hotel and check out. Head towards Pune International Airport or Pune railway station for your journey back home.\n'),
(7, '', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pac_cities`
--

CREATE TABLE IF NOT EXISTS `pac_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pac_name` varchar(50) NOT NULL,
  `cities` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `pac_cities`
--

INSERT INTO `pac_cities` (`id`, `pac_name`, `cities`) VALUES
(63, 'Exoitic Maharashtra Darshan', 'Pandharpur'),
(64, 'Exoitic Maharashtra Darshan', 'Tuljapur'),
(65, 'Exoitic Maharashtra Darshan', 'Kolhapur'),
(66, 'Kokan Darshan', 'Raigad'),
(67, 'Kokan Darshan', 'Sindhudurg'),
(68, 'Kokan Darshan', 'Tarkarli'),
(69, 'Kokan Darshan', 'Ganpatipule'),
(71, 'Scenic Places', 'Mahabaleshwar'),
(72, 'Scenic Places', 'Ganpatipule'),
(73, 'Scenic Places', 'Kolhapur'),
(75, 'Hilly Places', 'Mahabaleshwar'),
(76, 'Hilly Places', 'Lonavla'),
(77, 'Hilly Places', 'Khandala'),
(78, 'Family Holiday', 'Mahabaleshwar'),
(79, 'Family Holiday', 'Ganpatipule'),
(80, 'Family Holiday', 'Kolhapur'),
(81, 'Family Holiday', 'Panhala'),
(82, 'Family Holiday', 'Dervan'),
(83, 'Weekend Masti', 'Raigad'),
(84, 'Weekend Masti', 'Sindhudurg'),
(85, 'Weekend Masti', 'Mahabaleshwar'),
(86, 'Weekend Masti', 'Tarkarli'),
(87, 'Weekend Masti', 'Ganpatipule'),
(88, 'Weekend Masti', 'Kolhapur'),
(89, 'Weekend Masti', 'Marleshwar'),
(90, 'Weekend Masti', 'Shivthargal'),
(91, 'Hillstation Refreshment', 'Mumbai'),
(92, 'Hillstation Refreshment', 'Lonavla'),
(93, 'Hillstation Refreshment', 'Khandala'),
(94, 'Hillstation Refreshment', 'Matheran'),
(95, 'Tadoba National Park', 'Nagpur'),
(96, 'Pench National Park', 'Nagpur'),
(97, 'Shivshahi Raigad', 'Raigad'),
(98, 'Shivshahi Raigad', 'Diveaagar'),
(99, 'Shivshahi Raigad', 'Shriwardhan'),
(100, 'Shivshahi Raigad', 'Harihareshwar'),
(101, 'Short break mahabaleshwar', 'Mahabaleshwar'),
(102, 'Kolhapur Tour', 'Kolhapur'),
(103, 'Alluring Maharashtra Tour', 'Mumbai'),
(104, 'Alluring Maharashtra Tour', 'Lonavla'),
(105, 'Alluring Maharashtra Tour', 'Khandala'),
(106, 'Alluring Maharashtra Tour', 'Matheran'),
(107, 'Alluring Maharashtra Tour', 'Alibagh'),
(108, 'Classic Mahabaleshwar', 'Mahabaleshwar'),
(109, 'Classic Mahabaleshwar', 'Pachagani'),
(110, 'Classic Mahabaleshwar', 'Pratapgad'),
(111, 'Maharashtra National Parks', 'Nagpur'),
(112, 'Ajanta Ellora tour', 'Aurangabad'),
(113, 'Ajanta Ellora tour', 'Nashik'),
(114, 'Explore Mumbai', 'Mumbai'),
(118, 'Mumbai Darshan', 'Mumbai'),
(119, 'Mumbai Darshan', 'Aurangabad');

-- --------------------------------------------------------

--
-- Table structure for table `pac_cost`
--

CREATE TABLE IF NOT EXISTS `pac_cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `Non_AC` float NOT NULL,
  `AC` float NOT NULL,
  `Other` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `pac_cost`
--

INSERT INTO `pac_cost` (`id`, `p_id`, `Non_AC`, `AC`, `Other`) VALUES
(1, 37, 1000, 1500, 9000),
(15, 51, 1000, 1500, 11100),
(16, 52, 1000, 1500, 13800),
(89, 40, 1000, 1500, 12000),
(90, 38, 1000, 1500, 10100),
(91, 39, 1000, 1500, 9465),
(92, 41, 1000, 1500, 10800),
(93, 42, 700, 1000, 4500),
(94, 45, 800, 1000, 4300),
(95, 44, 400, 300, 5500),
(96, 43, 600, 1000, 8500),
(97, 46, 500, 700, 10000),
(98, 47, 1000, 1500, 7000),
(99, 48, 600, 500, 8900),
(100, 49, 650, 1000, 9600);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `Email` text,
  `c_number` text,
  `pass` varchar(10) DEFAULT NULL,
  `c_pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `dob`, `Email`, `c_number`, `pass`, `c_pass`) VALUES
(1, 'Sayali', 'patil', '1997-05-15', 'sayalipatil1505@gmail.com', '9075247676', 'sayali@123', 'sayali@123'),
(2, 'Swara', 'Sharma', '1980-05-07', 'Swara@gmail.com', '7898090988', 'Swara@123', 'Swara@123'),
(3, 'Nisha', 'Malage', '1997-06-10', 'nisha@gmail.com', '8989898989', 'nisha@123', 'nisha@123'),
(4, 'Priya', 'Patil', '1990-11-07', 'Priya_patil@gmail.com', '8798564534', 'Priya@123', 'Priya@123'),
(5, 'Aishwarya', 'Khotlande', '1988-10-23', 'Aishu_k45@gmail.com', '9809762311', 'Aishu@123', 'Aishu@123'),
(6, 'Riya', 'Sharma', '1999-05-03', 'riya@gmail.com', '9090909090', '5ee907831f', 'riya1234'),
(7, 'Pratiksha', 'Ingule', '1997-02-15', 'pratiksha123@gmail.com', '9098909890', 'f8f09fb552', 'pratiksha1'),
(8, 'Aditi', 'Parate', '1984-05-11', 'Aditip84@yahoo.com', '8976453211', 'Aditi@123', 'Aditi@123'),
(9, 'Divya', 'Makhija', '1998-11-07', 'divyamakhija@gmail.com', '89090954322', 'divya123', 'divya123');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`) VALUES
(1, 'Maharashtra'),
(2, 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adults`
--

CREATE TABLE IF NOT EXISTS `tbl_adults` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_adults`
--

INSERT INTO `tbl_adults` (`id`, `fname`, `lname`, `dob`, `email`, `mobno`, `package_id`, `user_email`) VALUES
(2, 'Riya', 'Sharma', '0000-00-00', 'priyasharma@gmail.com', 8978909890, 42, 'sayalipatil1505@gmail.com'),
(3, 'Riya', 'Sharma', '0000-00-00', 'priyasharma@gmail.com', 8978909890, 42, 'sayalipatil1505@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE IF NOT EXISTS `tbl_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `total` double NOT NULL,
  `bdate` date NOT NULL,
  `u_email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `package_id`, `adult`, `children`, `total`, `bdate`, `u_email`) VALUES
(1, 42, 6, 4, 121500, '1981-03-07', 'uemail@gmail.com'),
(2, 39, 6, 5, 133500, '1980-11-03', 'uemail@gmail.com'),
(4, 40, 2, 0, 25500, '2018-01-11', 'nisha@gmail.com'),
(5, 40, 2, 0, 25500, '2018-03-02', 'nisha@gmail.com'),
(6, 40, 2, 0, 25500, '2018-03-02', 'nisha@gmail.com'),
(7, 42, 1, 1, 25500, '0000-00-00', 'Priya_patil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(600) NOT NULL,
  `cat_desc` text,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'Family', 'India truly is an extraordinary and colorful destination, and what greater idea than to explore it with your family members. 1Tourism of India has meticulously-crafted Family Holidays in India including a variety of memorable experiences, destinations and attractions, which harmonizes with the preferences of family members with different tastes.\r\n\r\nThe list of experiences and family destinations in India is never ending and includes themes like beaches, exotic wildlife, rich history, tranquil beaches and hill towns, cultural heritage, adventure activities, pilgrimage and even more. Take a pick as per your choice.\r\nGlance through our family holiday packages in India now:\r\n\r\n'),
(2, 'Beach Holidays', ' These locales are ideal for balmy holidays of sun, sand and sea. The sandy shorelines are complete with adventure water sports include surfing, parasailing, canoeing, catamaran & yatch rides, scuba diving and snorkeling.\r\n\r\nExplore the pleasures of Maharashtra shores, grab attractive deals with us. Relaxing, adventure, fun and more are accessible with beach tour packages.'),
(3, 'Adventure Holidays', 'India rewards its adventure enthusiast visitors with incredible options to get a dose of adrenalin rush. The snowcapped peaks, depths of azure waters, fast flowing rivers, verdant forests offers a great scope for adventures. Go trekking, camping, river rafting, hiking, scuba divining, snorkeling, surfing, paragliding, bungee jumping, adventure escapades of bike tours, jeep safari tours, elephant safari and other thrilling activities.\r\n\r\nChoose Adventure Tour Packages with us. Plan to explore the dizzying heights of the Himalayas, the lush environs of Western Ghats, frozen treks to the hike to valley of flowers, fast rivers of Ganga, Indus and Beas have white river rafting thrills, crystal clear waters of Andaman, Goa and Lakshadweep or the forests are a good place for safaris and getting to view wildlife in their natural form. Enjoy the thrills and get away from the hustle-bustle of cities.\r\n\r\n'),
(4, 'Chota Break', 'Chota break tours are an exclusively designed tour package for quick weekend getaways. In today’s busy world people often skip taking a holiday, which is very essential for maintaining a healthy work life balance. That’s precisely why we have designed short break tours, which will ensure you get an escape from your busy work schedule and you’re well rejuvenated. So, look no further and book short break tour today to get the best travel experiences. Beaches or mountains, adventures or relaxation, Break tours are here to spoil you with its amazing variety.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_children`
--

CREATE TABLE IF NOT EXISTS `tbl_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_children`
--

INSERT INTO `tbl_children` (`id`, `fname`, `lname`, `dob`, `package_id`, `user_email`) VALUES
(1, 'Riya', 'Sharma', '0000-00-00', 42, 'sayalipatil1505@gmail.com'),
(2, 'Riya', 'Sharma', '0000-00-00', 42, 'sayalipatil1505@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_create_package`
--

CREATE TABLE IF NOT EXISTS `tbl_create_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` varchar(20) NOT NULL,
  `pac_name` varchar(50) DEFAULT NULL,
  `cat_name` varchar(40) NOT NULL,
  `days` int(11) NOT NULL,
  `night` int(11) NOT NULL,
  `cost` float NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`package_id`),
  UNIQUE KEY `pac_name` (`pac_name`),
  KEY `s_id` (`s_id`),
  KEY `ls_id` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tbl_create_package`
--

INSERT INTO `tbl_create_package` (`package_id`, `s_id`, `pac_name`, `cat_name`, `days`, `night`, `cost`, `image`) VALUES
(37, 'MH', 'Exoitic Maharashtra Darshan', '1', 7, 6, 10500, 0x6d6168616c616b73686d695f74656d706c655f6b6f6c68617075722e6a7067),
(38, 'MH', 'Kokan Darshan', '2', 6, 5, 11600, 0x6d616c76616e2e6a7067),
(39, 'MH', 'Scenic Places', '1', 5, 4, 10965, 0x67616e7061746970756c655f74656d706c652e6a7067),
(40, 'MH', 'Hilly Places', '3', 3, 2, 13500, 0x76656e6e615f6c616b65312e6a7067),
(41, 'MH', 'Family Holiday', '1', 5, 4, 12300, 0x70616e68616c612e6a7067),
(42, 'MH', 'Weekend Masti', '3', 6, 5, 7800, 0x76656e6e615f6c616b65322e6a7067),
(43, 'MH', 'Hillstation Refreshment', '4', 4, 3, 13600, 0x6d6174686572616e2e6a7067),
(44, 'MH', 'Tadoba National Park', '3', 3, 2, 8900, 0x7461646f62615f616e64686172695f7061726b312e6a7067),
(45, 'MH', 'Pench National Park', '3', 3, 2, 9700, 0x70656e63685f6e6174696f6e616c5f7061726b312e6a7067),
(46, 'MH', 'Shivshahi Raigad', '3', 2, 1, 14000, 0x7072617461706761645f666f72742e6a7067),
(47, 'MH', 'Short break mahabaleshwar', '4', 4, 3, 10400, 0x76656e6e615f6c616b652e6a7067),
(48, 'MH', 'Kolhapur Tour', '4', 5, 4, 11750, 0x4b6f6c68617075722e6a7067),
(49, 'MH', 'Alluring Maharashtra Tour', '4', 4, 3, 15500, 0x4d756d626169312e6a7067),
(50, 'MH', 'Classic Mahabaleshwar', '4', 4, 3, 11500, 0x7072617461706761645f666f7274312e6a7067),
(51, 'MH', 'Maharashtra National Parks', '4', 5, 4, 12600, 0x7461646f62612d616e64686172695f74696765722e6a7067),
(52, 'MH', 'Ajanta Ellora tour', '1', 5, 4, 15300, 0x617572616e67616261642e6a7067),
(53, 'MH', 'Explore Mumbai', '1', 3, 2, 16000, 0x6d756d626169332e6a7067),
(55, 'MH', 'Mumbai Darshan', '1', 6, 5, 6500, 0x6d756d6261692e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `days` int(11) NOT NULL,
  `requirements` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`id`, `name`, `address`, `number`, `email`, `state`, `city`, `days`, `requirements`) VALUES
(1, 'Riya Sharma', 'F104 DS Park,Kolhapur', 7689098789, 'riyasharma@gmail.com', 'Maharashtra', 'Pune, mumabai', 6, 'A well organized tour of 6 days.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotels`
--

CREATE TABLE IF NOT EXISTS `tbl_hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hotels`
--

INSERT INTO `tbl_hotels` (`hotel_id`, `hotel_name`) VALUES
(2, 'Sengage');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE IF NOT EXISTS `tbl_location` (
  `loc_id` int(11) NOT NULL,
  `loc_name` varchar(40) DEFAULT NULL,
  `loc_state_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`loc_id`),
  KEY `fk_loc_state_id` (`loc_state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`loc_id`, `loc_name`, `loc_state_id`) VALUES
(1, 'Mumbai', 'MH'),
(2, 'Thane', 'MH'),
(3, 'Palghar', 'MH'),
(4, 'Raigad', 'MH'),
(5, 'Ratnagiri', 'MH'),
(6, 'Sindhudurg', 'MH'),
(7, 'Mahabaleshwar', 'MH'),
(8, 'Pachagani', 'MH'),
(9, 'Tarkarli', 'MH'),
(10, 'Ganpatipule', 'MH'),
(11, 'Karnala', 'MH'),
(12, 'Lonavla', 'MH'),
(13, 'Khandala', 'MH'),
(14, 'Dapoli', 'MH'),
(60, 'Bhimashankar', 'MH'),
(61, 'Jejuri', 'MH'),
(62, 'Dehu', 'MH'),
(63, 'Alandi', 'MH'),
(64, 'Nagpur', 'MH'),
(65, 'Pandharpur', 'MH'),
(66, 'Tuljapur', 'MH'),
(67, 'Kolhapur', 'MH'),
(68, 'Panhala', 'MH'),
(69, 'Dervan', 'MH'),
(70, 'Marleshwar', 'MH'),
(71, 'Shivthargal', 'MH'),
(72, 'Matheran', 'MH'),
(73, 'Diveaagar', 'MH'),
(74, 'Shriwardhan', 'MH'),
(76, 'Alibagh', 'MH'),
(77, 'Pratapgad', 'MH'),
(78, 'Aurangabad', 'MH'),
(79, 'Nashik', 'MH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loc_spots`
--

CREATE TABLE IF NOT EXISTS `tbl_loc_spots` (
  `loc_spot_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_spot_name` varchar(40) NOT NULL,
  `loc_spot_desc` text,
  `loc_spot_location_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`loc_spot_id`),
  KEY `loc_spot_location_id` (`loc_spot_location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_loc_spots`
--

INSERT INTO `tbl_loc_spots` (`loc_spot_id`, `loc_spot_name`, `loc_spot_desc`, `loc_spot_location_id`) VALUES
(1, 'Gateway', 'The Gateway of India is, without doubt, one of the most popular tourist hotspots of Mumbai. It is located at Apollo Bunder Waterfront and overlooks the Arabian Sea in the most beautiful way. One of the most distinguished monuments in Mumbai, it was built in the year 1924 by famous architect George Wittet as a commemoration of the visit of King George V and Queen Mary to Mumbai. The imposing structure of the monument is a beautiful confluence of Indian, Arabic and Western architecture and has become a popular tourist hub in the city.\r\n', 1),
(2, 'Chowpatty Beach', 'Chowpatty is a major tourist attraction in Mumbai. The charm of Chwpatti Beach gets increased much more during the annual Ganesh Chatturathi Festival. A visit to this beach provides an interesting outing with many permanent little kiosks. Chowpatty acts as a base "station between" leading upto Malabar Hill as it is linked to Malabar Hill, Girgaum, Gamdeviand Khetwadi.\r\nIn the evening the atmosphere is more like a carnival. At one end is a row of bhelpuri shops hawking Mumbai''s most popular snack: crisp puffed rice and semolina doused in pungent chutneys, all scooped up with a flat, fried puri. One might even catch a film shoot or a street play. In short, for most tourists Chowpatty is where the action is. It has rich historical links to the freedom movement; several important meetings were organized here during the freedom struggle. Though the beaches remain empty throughout the day, it is a hub of activity in the evenings. On the beach itself is a small colony of the original inhabitants of Mumbai, the Koli fishermen who can be seen drying their catch or mending their nets. Chowpatty beach is in the heart of Mumbai.\r\n', 1),
(3, 'Haji Ali''s Mosque', 'The majestic mosque is located in the middle of the sea and there is a narrow path built to pave the way to Mosque. The Mosque was built in honour of the Muslim saint Haji Ali. The Mosque is set at 500 yards into the sea and can be reached only in low tide. The Haji Ali mausoleum is located offshore, opposite the Mahalaxmi racecourse. During the high tides the connecting causeway get submerged into water making the impression that the mosque and the tomb are floating in water. \r\nThe Mosque is a Tomb of Muslim Saint Haji Ali. The saint is believed to have been a wealthy Businessman who later renounced the materialistic world and became a saint who meditated on a nearby headland and later headed for Mecca. It is said that he died on a pilgrimage to Mecca and miraculously his casket floated back to Mumbai. There was a note attached to his dead body that it should be buried wherever it lands. The body landed at the rock island, thus the tomb was built by the devotees of Saint Haji Ali. \r\nThe mosque can be reached only during low tides. During high tides crossing the causeway could be very risky.\r\n', 1),
(4, 'Marine Drive', 'Marine Drive, officially named "Netaji Subhash Chandra Bose Road’ is a 3 km long road in Mumbai. Stretched along the coastline, forming a natural bay, this road is one of the beautiful tourist attractions of Mumbai. The road links Nariman Point to Babulnath, and is situated at the foot of Malabar Hill. Marine Drive is a part of the famous skyline of Mumbai. It is also the site some of the major corporate centers, recreation activities and also places of entertainment.\r\nLarge crowds of people visiting or staying in Mumbai come to Marine Drive to walk along the beautiful walkway. The area is a stunning sight at dusk. The perfectly lined palm trees offers visitors an enthralling experience. The road is also referred to as ''Queen''s necklace''. The street lights make the stretch appear like a string of pearls and create an illusion of a necklace, when viewed from any elevated point.\r\nThe Marine Drive leads to one of the oldest seafronts called Chowpatty Beach. The shores are ideal for a scenic walk. Weekends witness heavy crowds. Stalls featuring Mumbai’s delicious snacks such as Bhel Puri, Paav Bhaji, etc. are set up in the area every single day. In order to see the utmost celebration spirit of the Mumbai, visit this beach during Ganesh Chathurthi.\r\n', 1),
(5, 'Juhu Beach ', 'Juhu Beach is one of the popular shores along the Arabian Sea in Mumbai. The sandy coast stretches for six kilometers up to Versova. The Juhu beach is a popular tourist attraction throughout the year. It is also a sought after destination for shooting films.\r\nTourists visit Juhu beach to enjoy its scenic beauty. The shores are ideal to relax and enjoy after a long, tedious day. Watching the sun set over the glittering waters of Arabian is a soothing sight.\r\nJuhu beach generally gets more crowded on weekends. The food court here is famous for its ''Mumbai style'' street food. Do try the mouthwatering delicacies notably Bhelpuri, Pani Puri and Sevpuri. There are numerous Horse pulled carriages offering joyrides to tourists for a small fee. The mix of acrobats, dancing monkeys, cricket matches, toy sellers create a carnival like setting. You can walk on the sand or indulge in frolicking in the sea. Stop for plane-spotting as a portion of the beach is covered by departure path from Runway of Mumbai Airport.\r\nJuhu beach is among the most popular places in Mumbai to visit during the annual Ganesh Chaturthi celebrations. The shores witness thousands of devotees arriving in grand processions, carrying idols of the Lord Ganesh of various sizes, to be immersed in the water at the beach.\r\n', 1),
(6, 'Essel World', 'EsselWorld is an amusement located in Gorai, Mumbai and established in 1989.\r\nThe park is owned by Pan India Paryatan Pvt. Ltd. (PIPPL). EsselWorld along with its counterparts, Water Kingdom are stretched over 64 acres of land. Together, they are recognised as one of the largest Amusement and Water Park EsselWorld is one of the largest amusement park in the country, along with Adlabs Imagica. It draws in an estimated 1.8 million visitors annually, of which approximately 300,000 are students.\r\n', 1),
(7, 'Kanheri Caves', 'The Kanheri Caves are a group of caves and rock-cut monuments cut into a massive basalt outcrop in the forests of the Sanjay Gandhi National Park, on the island of Salsette in the western outskirts of Mumbai, India. They contain Buddhist sculptures and relief carvings, paintings and inscriptions, dating from the 1st century BCE to the 10th century CE. Kanheri comes from the Sanskrit Krishnagiri, which means black mountain. \r\nThe site is on a hillside, and is accessed via rock-cut steps. The cave complex comprises one hundred and nine caves, carved from the basalt rock and dating from the 1st century BCE to the 10th century CE. The oldest are relatively plain and unadorned, in contrast to later caves on the site, and the highly embellished Elephanta Caves of Mumbai. Each cave has a stone plinth that functioned as a bed. A congregation hall with huge stone pillars contains a stupa (a Buddhist shrine). Rock-cut channels above the caves fed rainwater into cisterns, which provided the complex with water.Once the caves were converted to permanent monasteries, their walls were carved with intricate reliefs of Buddha and the Bodhisattvas. Kanheri had become an important Buddhist settlement on the Konkan coast by the 3rd century CE.\r\n', 1),
(8, 'Taraporewala Aquarium', 'Taraporewala Aquarium is India''s oldest aquarium and one of the city''s main attractions.It hosts marine and freshwater fishes. The aquarium is located on Marine Drive in Mumbai.\r\nIt was re-opened after renovation on March 3, 2015.The renovated aquarium has a 12-feet long and 180 degree acrylic glass tunnel. Another attraction is the special pools, where children can touch fish which are harmless. The fish will be kept in large glass tanks, which will be lit with LED lights. \r\n2,000 fishes of over 400 species and has been renovated at a cost of Rs.22 crore (approx Rs 7.5 crore for aquariums and Rs. 16.5 crore for construction work done by Public Works department) The exotic fish from overseas has been introduced at the new aquarium the number of new varieties of marine fish at 70. Helicopter, Arowana, Gruppen, yellow-striped tang, blue-spotted stingray, star, clown, hark, trigger, Grouper, Moorish idol, Azure Damsel, Blueline Demoiselle, Purple Firefish, Cloudy Damsel, Copperband Butterflyfish, Schooling Bannerfish, Raccoon Butterflyfish, White Tail Trigger, Clown Triggerfish and Blue Ribbon Eel. The 40 new varieties of freshwater fish would include Red Devil, Jaguar, Electric Blue Jack Dempsey,Frontosa and Catfish. These fishes will be housed in larger tanks than before with imported flexi glass for better visibility. It also has sharks, turtles, rays, moray eels, sea turtles, small starfish and stingrays.\r\nThe Aquarium is maintained by Department of Fisheries itself. In the aquarium''s 16 sea water tanks and nine sweet water tanks, there are 31 types of fish, while 32 tropical tanks contains 54 kind of fishes.The tropical section of the aquarium already feature different ecosystems such as the “moss aquarium” for pregnant fishes, “plantation aquarium” that features imported varieties of water lilies and other aquatic plants and “island aquarium”.\r\n', 1),
(9, 'Jijamata Udyaan', 'Jijamata Udyaan formerly called Ranichi Baag (meaning Queen''s Gardens) after the original British name Victoria Gardens, and now also known as Veermata Jijabai Bhosale Udyan & Zoo, is a zoo and garden located at Byculla, in the heart of Mumbai, India. It was laid out in 1861 and is one of the oldest zoos in India. Originally named for Queen Victoria, it is now named after Jijabai, mother of Shivaji Maharaj.', 1),
(10, 'Shree Siddhivinayak Ganapati Mandir', 'The Shree Siddhivinayak Ganapati Mandir is a Hindu temple dedicated to Lord Shri Ganesh. It is located in Prabhadevi, Mumbai, Maharashtra.It was originally built by Laxman Vithu and Deubai Patil on 19 November 1801.It is one of the richest temples in Mumbai.\r\nThe temple has a small mandap with the shrine for Siddhi Vinayak ("Ganesha who grants your wish"). The wooden doors to the sanctum are carved with images of the Ashtavinayak (the eight manifestations of Ganesha in Maharashtra). The inner roof of the sanctum is plated with gold, and the central statue is of Ganesha. In the periphery, there is a Hanuman temple as well.', 1),
(11, 'Kamala Nehru Park', 'Kamala Nehru Park is a park in India covering an area of 4,000 square feet (370 m2). Located at the top of Mumbai''s Malabar Hill, it is named after Kamala Nehru, the wife of India''s first Prime Minister.  A place frequently visited by schoolchildren. It has little to offer by way of entertainment  apart from a structure shaped like a shoe. The shoe structure is inspired by the nursery rhyme There was an Old Woman Who Lived in a Shoe. \r\nFrom the garden, one can see the city, Chowpatty Beach, and Queen''s Necklace (Marine Drive).', 1),
(12, 'Dr. Bhau Daji Lad Mumbai City Museum', 'The Dr. Bhau Daji Lad Mumbai City Museum (formerly the Victoria and Albert Museum) is the oldest museum in Mumbai. Situated in Byculla East, it was originally established in 1855 as a treasure house of the decorative and industrial arts, and was later renamed in honour of Bhau Daji.', 1),
(13, 'Mahalaxmi Temple', 'Mahalaxmi temple is devoted to the Goddess of wealth - Mahalaxmi. A famous temple of Mumbai located at the seashore on the northern side of malabar hills. There are effigies of goddesses Mahalaxmi, Mahakali and Maha Saraswathi in the temple. Beyond the ornate gate is the shrine wherein resides the buxom goddess of Lucre - Laxmi. The compound of this temple is abuzz with stalls selling flower garlands and pious paraphernalia', 1),
(14, 'Elephanta Caves', 'The Elephanta Caves are a site of ancient cave temples on Elephanta Island, off the shore of Mumbai. From the city of Dreams it is a one hour ferry ride away as the island lies in the middle of Arabian Sea. The mystical caves were listed in UNESCO World Heritage Sites since 1987. The caves are full of Hindu rock art and the Buddhist rock Art. Lord Shiva is seen worshipped in the form of engraved art. There are various majestic figurines and carvings dedicated to the Hindu Lord as well as the pantheon form mythology. Various tales have been narrated through the sculptures in the caves. It is one of India’s most prized sites.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_num`
--

CREATE TABLE IF NOT EXISTS `tbl_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=406 ;

--
-- Dumping data for table `tbl_num`
--

INSERT INTO `tbl_num` (`id`, `adults`, `child`, `Email`) VALUES
(399, 1, 0, 'nisha@gmail.com'),
(400, 1, 0, 'nisha@gmail.com'),
(401, 0, 0, 'nisha@gmail.com'),
(402, 1, 1, 'Priya_patil@gmail.com'),
(403, 1, 1, 'Priya_patil@gmail.com'),
(404, 1, 1, 'Priya_patil@gmail.com'),
(405, 1, 0, 'Priya_patil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE IF NOT EXISTS `tbl_states` (
  `state_id` varchar(20) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`state_id`, `state_name`) VALUES
('MH', 'Maharashtra');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `fk` FOREIGN KEY (`loc_state_id`) REFERENCES `states` (`state_id`);

--
-- Constraints for table `tbl_create_package`
--
ALTER TABLE `tbl_create_package`
  ADD CONSTRAINT `tbl_create_package_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD CONSTRAINT `fk_loc_state_id` FOREIGN KEY (`loc_state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_loc_spots`
--
ALTER TABLE `tbl_loc_spots`
  ADD CONSTRAINT `tbl_loc_spots_ibfk_1` FOREIGN KEY (`loc_spot_location_id`) REFERENCES `tbl_location` (`loc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
