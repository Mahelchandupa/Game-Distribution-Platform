-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 09:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `player2pleyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `Aemail` varchar(255) NOT NULL,
  `Apassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `Aemail`, `Apassword`) VALUES
(1, 'admin123@gmail.com', 'admin123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `browsetb`
--

CREATE TABLE `browsetb` (
  `gameId` int(255) NOT NULL,
  `gameName` varchar(255) NOT NULL,
  `gameImage` varchar(255) NOT NULL,
  `gameDescription` varchar(500) NOT NULL,
  `gamePrice` varchar(255) NOT NULL,
  `mProcessor` varchar(255) NOT NULL,
  `mCPU` varchar(255) NOT NULL,
  `mMemory` varchar(255) NOT NULL,
  `mStorage` varchar(255) NOT NULL,
  `Developer` varchar(255) NOT NULL,
  `ReleaseDate` varchar(255) NOT NULL,
  `Platform` varchar(255) NOT NULL,
  `rProcessor` varchar(255) NOT NULL,
  `rCPU` varchar(255) NOT NULL,
  `rMemory` varchar(255) NOT NULL,
  `rStorage` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `gameVideo` varchar(255) NOT NULL,
  `small_img1` varchar(255) NOT NULL,
  `small_img2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browsetb`
--

INSERT INTO `browsetb` (`gameId`, `gameName`, `gameImage`, `gameDescription`, `gamePrice`, `mProcessor`, `mCPU`, `mMemory`, `mStorage`, `Developer`, `ReleaseDate`, `Platform`, `rProcessor`, `rCPU`, `rMemory`, `rStorage`, `Publisher`, `gameVideo`, `small_img1`, `small_img2`) VALUES
(47, 'FALLOUT 76', 'Fallout-76.jpg', ' Fallout 76 is an online action role-playing game developed by Bethesda Game Studios and published by Bethesda Soft works. Released for Microsoft Windows, PlayStation 4, and Xbox One on November 14, 2018, it is an installment in the Fallout series and a prequel to previous entries. Fallout 76 is Bethesda Game Studios’s first multiplayer game; players explore the open world, which has been torn apart by nuclear war, with others.', '4.99', 'Intel Core i5-6600K / AMD Ryzen 3 1300X', 'NVIDIA GTX 780 / AMD Radeon R9 285', '8 GB', '60 GB', 'Bethesda Game Studios', 'November 14, 2018', 'Other', 'Intel Core i7-4790 / AMD Ryzen 5 1500X', 'Nvidia GTX 970 / AMD R9 290X', '8 GB', '60 GB', 'Bethesda Softworks', 'https://www.youtube.com/embed/M9FGaan35s0\" title=\"YouTube video player', 'fallout-small-1.jpg', 'fallout-small-2.jpg'),
(4, 'A PLAGUE TALE: REQUIEM', 'A-Plague-Tale-Requiem-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' A Plague Tale: Requiem Game is an upcoming action, adventure, and stealth video Game. The Game was developed by Asobo Studio and published by Focus Entertainment. It is a sequel to A Plague Tale: Innocence. Developers plan to release the Game on 18 October 2022 for Microsoft Windows, Nintendo Switch, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X/S.', '25.76', 'Intel Core i3-2120 Or AMD FX 4100', 'Nvidia GTX 660 Or AMD Radeon HD 7870', '5GB', '50GB', 'Asobo Studio', 'October 18, 2022', 'Microsoft', 'Intel Core i5-4690 Or AMD Ryzen FX 8300', 'Nvidia GTX 970 Or AMD Radeon RX 480', '16GB', '50GB', 'Focus Entertainment', 'https://www.youtube.com/embed/qIbzwb8vzNI\" title=\"YouTube video player', 'A-PLAGUE-TALE-REQUIEM-small-1.jpg', 'A-PLAGUE-TALE-REQUIEM_small-2.jpg'),
(5, 'SCORN', 'Scorn-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Scorn Game is an upcoming adventure, and horror video Game. The Game was developed by Ebb Software and published by Microsoft. Developers plan to release the Game on 14 October 2022 for Microsoft Windows, Xbox One, and Xbox Series X/S. Now, You can pre-order the Scorn- Steam Offline Activation for the cheapest price from Buycheapplaycheap.com.', '34.55', 'Intel Core i5-8400 Or AMD Ryzen 3 3300X', 'Nvidia GTX 1060 Or AMD Radeon RX 480', '8GB', '50GB', 'Ebb Software', 'October 14, 2022', 'Steam', 'Intel Core i7-3600 Or AMD Ryzen 5 3600', 'Nvidia RTX 2070 Or AMD Radeon RX 6600', '16GB', '50GB', 'Kepler Interactive', 'https://www.youtube.com/embed/qVrfvIbJkqg\" title=\"YouTube video player', 'SCORN-small-1.jpg', 'SCORN-small-2.jpg'),
(6, 'NEW TALES FROM THE BORDERLANDS', 'New-Tales-From-The-Borderlands-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' New Tales From The Borderlands Game is an upcoming action and adventure video Game. It is a spin-off of the Borderlands series. The Game was developed by Gearbox Studio QuÃ©bec and published by 2K. Developers plan to release the Game on 21 October 2022 for Microsoft Windows, Nintendo Switch, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X and S.', '11.34', 'Intel Core i5-4690K Or AMD Ryzen 3 1300X', 'Nvidia GTX 960 Or AMD Radeon RX 470', '8GB', '30GB', 'Gearbox Software\r\n', 'October 21, 2022', 'Steam', 'Intel Core i7-4770 Or AMD Ryzen 5 2600', 'Nvidia GTX 1060 Or AMD Radeon RX 590', '8GB', '30GB', '2K', 'https://www.youtube.com/embed/TpuAum84drU\" title=\"YouTube video player', 'NEW TALES FROM THE BORDERLANDS-small-1.jpg', 'NEW TALES FROM THE BORDERLANDS-small-2.jpeg'),
(7, 'VICTORIA 3', 'Victoria-3-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Victoria 3 Game is an upcoming grand strategy video Game. It is a sequel to the Victoria 2 Game. The Game was developed and published by Paradox Interactive. The Game focuses on world history from 1836 to 1936 . Developers plan to release the Game on 25 October 2022 for Steam. Unfortunately, Game will not be available on Game Pass or Microsoft Store.', '12.33', 'Intel Core i3-3250 Or AMD FX 8370', 'Nvidia GTX 660 Or AMD Radeon R7 370', '8 GB', '10 GB', 'Paradox Development Studio', 'October 25, 2022', 'Steam', 'Intel Core i5-6600K Or AMD Ryzen 5 2600X', 'Nvidia GTX 1660 Or AMD Radeon RX 590', '16GB', '10GB', 'Paradox Interactive', 'https://www.youtube.com/embed/5ftmdd1g4hE\" title=\"YouTube video player', 'VICTORIA 3-small-1.jpg', 'VICTORIA 3-small-2.jpg'),
(8, 'GHOSTBUSTERS: SPIRITS UNLEASHED', 'Ghostbusters-Spirits-Unleashed-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Ghostbusters: Spirits Unleashed Game is an upcoming action and horror video game based on the Ghostbusters media franchise. The Game was developed and published by IllFonic. It is the 19th installment of the Ghostbusters Games series. Developers plan to release the Game on 18 October 2022 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One and Xbox Series X/S.  The Game features four-player cooperative gameplay where players can control ghosts or Ghostbusters characters to defeat enem', '4.99', 'Intel Core i5-2550K Or AMD Fx-8350', 'Nvidia GTX 670 Or AMD Radeon HD 7970', '8 GB', '15 GB', 'IllFonic', 'October 18, 2022', ' Epic Games', 'Intel Core i7-5820K Or AMD Ryzen 5 1500', 'Nvidia GTX 970 Or AMD Radeon RX 570', '16 GB', '15 GB', 'IllFonic', 'https://www.youtube.com/embed/imK4c8dLTj4\" title=\"YouTube video player', 'GHOSTBUSTERS SPIRITS UNLEASHED-small-1.png', 'GHOSTBUSTERS SPIRITS UNLEASHED-small-2.jpg'),
(9, 'UNCHARTED: LEGACY OF THIEVES COLLECTION', 'Uncharted-Legacy-Of-Thieves-Collection-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Uncharted: Legacy Of Thieves Collection Game is an upcoming action and adventure video game. The Game was developed by Naughty Dog and published by Sony Interactive Entertainment. Uncharted: Legacy Of Thieves Collection is the 10th installment of the Uncharted Games series. Developers plan to release the Game on 19 October 2022 for PC.  The Uncharted Games series is about treasure hunters who travel worldwide to seek various historical mysteries. Uncharted: Legacy Of Thieves Collection includes', '3.99', 'Intel Core i5-4430 Or AMD Ryzen 3 1200', 'Nvidia GTX 960 Or AMD Radeon R9 290X', '8 GB', '125 GB', 'Naughty Dog LLC, Iron Galaxy Studios', 'October 19, 2022', 'Steam', 'Intel Core i7-4770 Or AMD Ryzen 5 1500X', 'Nvidia GTX 1060 Or AMD Radeon RX 570', '16 GB', '125 GB', 'PlayStation PC LLC', 'https://www.youtube.com/embed/F3Wl-OiZCO4\" title=\"YouTube video player', 'UNCHARTED LEGACY OF THIEVES COLLECTION-small-2.jpg', 'UNCHARTED LEGACY OF THIEVES COLLECTION-small-3.jpg'),
(10, 'DYING LIGHT 2 STAY HUMAN', 'Dying-Light-2-Stay-Human-Bloody-Ties-Buy-Cheap-Play-Cheap-Cover-Arts.jpg', ' Dying Light 2 Stay Human Game is an action, adventure, and role-playing Game developed and published by Techland. It is the second installment of the Dying Light series. The developers released the Game on February 4, 2022, for Nintendo Switch, PlayStation 4, PlayStation 5, Microsoft Windows, Xbox One, and Xbox Series X/S.', '39.99', 'Intel Core i3-9100 / AMD Ryzen 3 2300X', 'NNVIDIA GTX 1050 Ti / AMD Radeon RX 560', '8 GB', '60GB', 'Techland', 'November 10, 2022', 'Steam', 'AMD Ryzen 5 3600X / Intel i5-8600K', 'NVIDIA GeForce RTX 2060 6GB / AMD RX Vega 56', '16 GB', '60GB', 'Techland', 'https://www.youtube.com/embed/2MD4gTitmzw', 'DYING-LIGHT-2-STAY-HUMAN-small-1.jpg', 'DYING-LIGHT-2-STAY-HUMAN-small-2.jpg'),
(11, 'THE SIMS 4', 'The-Sims-4-4.jpg', ' The Sims 4 is a video game developed by the Redwood Shores studio of Maxis and published by Electronic Arts. It is the fourth major title in The Sims series and was originally announced on May 6, 2013. It was released in North America on September 2, 2014, for Microsoft Windows. The Sims 4 is the first PC game to top all-format charts in two years.   The Sims 4 is a life simulation game, similar to its predecessors. Players create a Sim character and control their life to explore different pers', '5.99', 'Intel Core 2 Duo E4300 / AMD Athlon 64 X2 4000+', 'NVIDIA GeForce 6600 / ATI Radeon X1300', '2 GB', '10GB', 'Maxis', 'September 2, 2014', 'Windows', 'Intel Core i5-750 / AMD Athlon X4', 'NVIDIA GeForce GTX 650', '4GB', '10GB', 'Electronic Arts', 'https://www.youtube.com/embed/GJENRAB4ykA\" title=\"YouTube video player', 'THE SIMS 4-small-2.jpg', 'THE SIMS 4-small-3.jpg'),
(12, 'GOTHAM KNIGHTS', 'Gotham-Knights-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Gotham Knights Game is an upcoming action and role-playing video Game. It is a sequel to the Batman: Gotham Knights Game. The Game was developed by WB Games Montréal Ward and published by Warner Bros Interactive Entertainment. The Game focuses on the characters Nightwing, Batgirl, Robin, and Red Hood as they try to restore justice to Gotham City during a period of decline in the immediate aftermath of Batman’s death. Developers plan to release the Game on 21 October 2022 for Microsoft Windows, ', '59.99', 'Intel Core i5-2500K Or AMD Ryzen 3 1200', 'Nvidia GTX 750 Ti Or AMD Radeon HD 7850', '8 GB', '45GB', 'Warner Bros. Games Montreal | QLOC', ' October 21, 2022', 'Steam', 'Intel Core i5-7600K Or AMD Ryzen 5 3500', 'Nvidia GTX 970 Or AMD Radeon R9 290', '16 GB', '45GB', 'Warner Bros. Games', 'https://www.youtube.com/embed/wIXJAqs9dG4\" title=\"YouTube video player', 'GOTHAM-KNIGHTS-small-1.jpg', 'GOTHAM-KNIGHTS-small-2.jpg'),
(13, 'THE CALLISTO PROTOCOL', 'The-Callisto-Protocol-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' The Callisto Protocol Game is an upcoming horror and survival video Game. The Game was developed by Striking Distance Studios and published by Krafton. Game is directed by Glen Schofield, who had previously co-created the Dead Space series. Developers plan to release the Game on 02 December 2022 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X and S.', '15.10', 'Intel Core i5-8400 Or AMD Ryzen 5 2600', 'Nvidia GTX 1060 Or AMD Radeon RX 580', '8 GB', '75GB', 'Striking Distance Studios', 'December 02, 2022', 'Steam', 'Intel Core i7-8700 Or AMD Ryzen 5 3600', 'Nvidia GTX 1070 Or AMD Radeon RX 5700 XT', '16GB', '75GB', 'Krafton', 'https://www.youtube.com/embed/iGQTa16PqjE\" title=\"YouTube video player', 'THE-CALLISTO-PROTOCOL-small-1.jpg', 'THE-CALLISTO-PROTOCOL-small-2.jpg'),
(14, 'CALL OF DUTY : MODERN WARFARE 2019', 'Call-Of-Duty-Modern-Warfare.jpg', ' Call of Duty: Modern Warfare is a 2019 first-person shooter video game developed by Infinity Ward and published by Activision. Serving as the sixteenth overall installment in the Call of Duty series, as well as a reboot of the Modern Warfare sub-series, it was released on October 25, 2019, for Microsoft Windows, PlayStation 4, and Xbox One.  The game takes place in a realistic and modern setting. The campaign follows a CIA officer and British SAS forces as they team up with rebels from the fict', '38.45', 'Intel Core i3-4340 or AMD FX-6300', 'NVIDIA GeForce GTX 670 or AMD Radeon HD 7950', '8 GB', '175GB', ' Infinity Ward', 'October 25, 2019', 'Steam', 'Intel Core i5-2500K or AMD Ryzen R5 1600X', 'Nvidia GeForce GTX 970 or AMD Radeon R9 390', '12 GB', '175 GB', 'Activision', 'https://www.youtube.com/embed/r72GP1PIZa0\" title=\"YouTube video player', 'call_of_duty_modern_warfare_small_1.jpg', 'call_of_duty_modern_warfare_small_2.jpg'),
(15, 'GHOST RECON : WILDLANDS', 'Wild-Lands.jpg', ' Tom Clancy’s Ghost Recon Wildlands is a third person tactical shooter video game developed by Ubisoft Paris and Ubisoft Milan and published by Ubisoft. It was released worldwide on March 7, 2017, for Microsoft Windows, PlayStation 4 and Xbox One.  Tom Clancy’s Ghost Recon Wildlands is a tactical cover based shooter game set in an open world environment and played from a third-person perspective with an optional first person view for gun aiming. Players play as members of the Delta Company, Firs', '13.99', 'Intel Core i5-2400S or AMD FX-4320', 'NVIDIA GeForce GTX660 or AMD HD7870', '6GB', '24GB', 'Ubisoft', 'March 7, 2017', 'Windows', 'Intel Core i7-3770 or AMD FX-8350', 'NVIDIA GeForce GTX 1060 or AMD R9 290X', '8 GB', '24 GB', 'Ubisoft', 'https://www.youtube.com/embed/WdJub3Kz2wI\" title=\"YouTube video player', 'GHOST-RECON-WILDLANDS-small-1.jpg', 'GHOST-RECON-WILDLANDS-small-2.jpg'),
(16, 'WATCH DOGS : LEGION', 'Watch-Dogs-Legion-4.jpg', ' Watch Dogs : Legion is a 2020 action-adventure game published by Ubisoft and developed by its Toronto studio. It is the third installment in the Watch Dogs series, and the sequel to 2016’s Watch Dogs 2. Set within a fictionalized representation of the near future, dystopian London, the game’s story focuses on the hacker group DedSec as they seek to clear their names for a series of bombings they have been framed for, as well as liberate London’s citizens from the control of Albion, an oppressiv', '25.33', 'Intel Core i5-4460 / AMD Ryzen 5 1400', 'NVIDIA GeForce GTX 970 or AMD Radeon R9 290X', '4 GB', '45 GB', 'Ubisoft Toronto', 'November 12, 2020', 'Windows', 'Intel Core i7-7700 / Ryzen 5 2600', 'NVIDIA GeForce RTX 2060 / AMD Radeon RX 5700', '16 GB', '45 GB', 'Ubisoft', 'https://www.youtube.com/embed/L20nioDjCxU\" title=\"YouTube video player', 'WATCH-DOGS-LEGION-small-1.png', 'WATCH-DOGS-LEGION-small-2.jpg'),
(17, 'THE CREW', 'The-Crew.jpg', ' The Crew is an online-only racing video game developed by Ivory Tower and Ubisoft Reflections and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One, with an Xbox 360 port developed by Asobo Studio. It features a persistent open world environment for free-roaming across a scaled-down recreation of the United States and includes both role-playing and large-scale multiplayer elements.', '4.99', 'Intel Core 2 Quad Q9300 / AMD Athlon II X4 620', 'NVIDIA GeForce GTX 260 / AMD Radeon HD 4870', '4 GB', '30 GB', 'Lvory Tower, Ubisoft Reflection ', 'December 2, 2014', 'Ubisoft', 'NVIDIA GeForce GTX 580 / AMD Radeon HD 6870', 'NVIDIA GeForce GTX 580 / AMD Radeon HD 6870', '8 GB', '30 GB', 'Ubisoft', 'https://www.youtube.com/embed/d4JnshyKOOQ\" title=\"YouTube video player', 'THE-CREW-small-1.jpg', 'THE-CREW-small-2.jpg'),
(18, 'FAR CRY 6', 'Far-Cry-6.jpg', ' Far Cry 6 is an upcoming first-person shooter game. It is the sixth main installment in the Far Cry series. It was developed by Ubisoft Toronto and published by Ubisoft. Developers plan to release the game on the 7th of October 2021 for Microsoft Windows, PS4 and PS5, Xbox One, Xbox Series X|S, and Stadia.', '16.56', 'AMD Ryzen 3 1200 or Intel Core i5-4460', 'AMD Radeon RX 460 or Nvidia GeForce GTX 960', '8 GB', '60 GB', 'Ubisoft Toronto', 'October 7, 2021', 'Ubisoft', 'AMD Ryzen 5 3600X or Intel Core i7-9700', 'AMD Radeon RX 5700 XT or Nvidia GeForce RTX 2070', '16 GB', '60 GB', 'Ubisoft', 'https://www.youtube.com/embed/-IJuKT1mHO8\" title=\"YouTube video player', 'Far-Cry-6-small_1.jpg', 'Far-Cry-6-small_2.jpg'),
(19, 'NEED FOR SPEED UNBOUND', 'Need-for-Speed-Unbound-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Need for Speed Unbound Game is an upcoming action and racing video Game. The Game was developed by Criterion Games and published by Electronic Arts. It is the twenty-fifth installment in the series. Above that, It is the first mainly developed Game of the Criterion Games. Developers plan to release the Game on 02 December 2022 for Microsoft Windows, PlayStation 5, and Xbox Series X and S.', '5.99', 'Intel Core i5-8600 Or AMD Ryzen 5 2600', 'Nvidia GTX 1050 Ti Or AMD Radeon RX 570', '8 GB', '50 GB', 'Criterion Games', 'December 02, 2022', 'Steam', 'Intel Core i7-8700 Or AMD Ryzen 5 3600', 'Nvidia RTX 2070 Or AMD Radeon RX 5700', '16 GB', '50 GB', 'Electronic Arts', 'https://www.youtube.com/embed/H2Y8XCe7F9E\" title=\"YouTube video player', 'NEEDFORSPEEDUNBOUND-small-1.png', 'NEEDFORSPEEDUNBOUND-small-2.jpg'),
(20, 'CYBERPUNK 2077', 'Cyberpunk-2077.jpg', ' Cyberpunk 2077 is a 2020 action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe. Players assume the first-person perspective of a customizable mercenary known as V, who can acquire skills in hacking and machinery with options for melee and ranged combat.  After several years of heavy anticipation, CD Projekt released Cyberpunk 2077 for PlayStation 4, Stadia, Windows, and Xbox One on 10 December 2020,', '8.99', 'Intel Core i5-2500K 3.3GHz / AMD FX-8320', 'AMD Radeon R9 380 or NVIDIA GeForce GTX 960', '8 GB', '70 GB', 'CD Projekt Red', 'February 15, 2022', 'Steam', 'Intel Core i5-4670K / AMD Ryzen R5 1600', 'AMD Radeon RX Vega / NVIDIA GeForce GTX 1070', '16 GB', '70 GB', 'CD Projekt', 'https://www.youtube.com/embed/8X2kIfS6fb8\" title=\"YouTube video player', 'CYBERPUNK2077-small-1.jpg', 'CYBERPUNK2077-small-2.jpg'),
(21, 'THE MEDIUM', 'The-Medium-4.jpg', ' The Medium is a psychological horror video game developed by Bloober Team that was released for Microsoft Windows and Xbox Series X/S on January 28, 2021.  The Medium is a psychological horror game played in third-person as Marianne, a medium who can travel into the spirit realm. Being able to inhabit both worlds aids puzzle solving. Her psychic abilities may also be used against hostile forces and are recharged by interacting with energy spots called spirit wells.', '3.99', 'Intel Core i5-6600 / AMD Ryzen 5 2500X', 'NVIDIA GeForce GTX 1060 / AMD Radeon R9 390X', '8 GB', '30 GB', 'Bloober Team', 'January 28, 2021', 'Epic', 'NVIDIA GeForce GTX 1660 Ti / Radeon RX Vega 56', 'NVIDIA GeForce GTX 1660 Ti / Radeon RX Vega 56', '16 GB', '80 GB', 'Bloober Team SA', 'https://www.youtube.com/embed/ve5QM0d9fP4\" title=\"YouTube video player', 'the-medium-small_1.jpg', 'the-medium-small_2.jpg'),
(22, 'DARK PICTURES ANTHOLOGY: THE DEVIL IN ME', 'The-Dark-Pictures-Anthology-The-Devil-in-Me-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Dark Pictures Anthology: The Devil In Me Game is an upcoming horror and survival video Game. The Game was developed by Supermassive Games and published by Bandai Namco entertainment. It is the fourth and final installment of season one in The Dark Pictures Anthology Game. Developers plan to release the Game on 18 November 2022 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X and S.', '6.99', 'Intel Core i5-3470 Or AMD FX-8350', 'Nvidia GTX 970 Or AMD Radeon R9 290X', '8 GB', '65 GB', 'Supermassive Games', 'November 18, 2022', 'Steam', 'Intel Core i5-8400 Or AMD Ryzen 5 1600', 'Nvidia GTX 1070 Or AMD Radeon RX Vega 56', '16 GB', '65 GB', 'Bandai Namco', 'https://www.youtube.com/embed/Nn5dK65VugY\" title=\"YouTube video player', 'DARK PICTURES ANTHOLOGY THE DEVIL IN ME-small-1.png', 'DARK PICTURES ANTHOLOGY THE DEVIL IN ME-small-2.jpg'),
(23, 'SPIDER MAN: MILES MORALES', 'Spider-Man-Miles-Morales-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Spider Man: Miles Morales Game is an upcoming action and adventure video game. The Game was developed by Insomniac Games and published by PlayStation. It is based on the Marvel Comics Character “Miles Morales. “ The Game is a spin-off and successor to the Spider Man Remastered Game. It is the second installment in the Spider Man series. Developers already released the Game for PlayStation 5 on November 12, 2020. However, They recently decided to release the Game on PC. They plan to release this', '4.99', 'Intel Core i3-4160 Or AMD Ryzen 3 1200', 'Nvidia GTX 950 Or AMD Radeon RX 470', '8 GB', '75 GB', 'Insomniac Games', 'November 18, 2022', 'Steam', 'Intel Core i5-4670 Or AMD Ryzen 5 1600', 'Nvidia GTX 1060 Or AMD Radeon RX 580', '16 GB', '75 GB', 'Sony Interactive Entertainment', 'https://www.youtube.com/embed/NTunTURbyUU\" title=\"YouTube video player', 'spider_man_MilesMorales_Venom_small_1_.jpg', 'spider_man_MilesMorales_Venom_small_2_.jpg'),
(24, 'EVIL WEST', 'Evil-West-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Evil West Game is an upcoming action, third-person shooter video game. The Game was developed by Flying Wild Hog and published by Focus Entertainment. Players can control Jessie Rentier in the Game. Developers plan to release the Game on 22 November 2022 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X and S.', '12.99', 'Intel Core i5-2500K Or AMD FX-6300', 'Nvidia GTX 960 Or AMD Radeon R9 380', '8 GB', '50 GB', 'Flying Wild Hog', 'November 22, 2022', 'Steam', 'Intel Core i7-6700K Or AMD Ryzen R5 1600', 'Nvidia GTX 1070 Or AMD Radeon RX Vega 56', '16 GB', '50 GB', 'Focus Entertainment', 'https://www.youtube.com/embed/2hP6IVcHRnQ\" title=\"YouTube video player', 'EVIL-WEST-small-1.jpg', 'EVIL-WEST-small-2.jpg'),
(25, 'STRAY PC', 'Stray-PC-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Stray Game is an upcoming adventure video game. The Game developed by BlueTwelve Studio and published by Annapurna Interactive. The developers are planning to release this game for Windows, PlayStation4, and PlayStation 5 on July 19, 2022.', '2.99', 'Intel Core i5-2550K Or AMD Fx-8350', 'Nvidia GTX 650 Ti Or AMD Radeon R7 360', '8 GB', '10 GB', 'BlueTwelve Studio', ' July 19, 2022', 'Steam', 'Intel Core i5-8400 Or AMD Ryzen 5 2600', 'Nvidia GTX 780 Or AMD Radeon R9 290X', '12 GB', '10 GB', 'Annapurna Interactive', 'https://www.youtube.com/embed/kJawWyRUOBM\" title=\"YouTube video player', 'stray_small_1.jpg', 'stray_small_2.jpg'),
(26, 'WEREWOLF : THE APOCALYPSE – EARTHBLOOD', 'Werewolf-The-Apocalypse.jpg', ' Werewolf: The Apocalypse – Earthblood is an action role-playing video game developed by Cyanide and published by Nacon. It is based on White Wolf Publishing’s tabletop role-playing game Werewolf: The Apocalypse, and is part of the larger World of Darkness series. The game was released on February 4, 2021 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X.  The story follows Cahal, an eco-terrorist werewolf who has been banished from his werewolf tribe, and who figh', '10.99', 'Intel Core i5-3470 / AMD FX-8370', 'AMD Radeon HD 7790 / NVIDIA GeForce GTX 650', '4 GB', '20 GB', 'Cyanide', 'February 4, 2021', ' Epic', 'Intel Core i7-8700 / AMD Ryzen 5 3600X', 'AMD Radeon R9 290 / NVIDIA GeForce GTX 780', '8 GB', '20 GB', 'Nacon', 'https://www.youtube.com/embed/cZLePWORfNM\" title=\"YouTube video player', 'WEREWOLFTHEAPOCALYPSE – EARTHBLOOD_small-1.jpg', 'WEREWOLFTHEAPOCALYPSE – EARTHBLOOD_small-2.jpg'),
(27, 'GRAND THEFT AUTO V', 'Grand-Theft-Auto-V.jpg', ' Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008’s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber Michael De Santa, street gangster Franklin Clinton, and drug dealer and arms smuggler Trevor Philips—and their efforts to commit heists while under', '45.99', 'Intel Core 2 Quad CPU Q6600 / AMD Phenom 9850', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB', '4 GB', '72 GB', 'Rockstar North', 'September 17, 2013', 'Rockstar', 'Intel Core i5 3470 / AMD X8 FX-8350', 'NVIDIA GTX 660 2GB / AMD HD 7870 2GB', '8 GB', '72 GB', 'Rockstar Games', 'https://www.youtube.com/embed/hvoD7ehZPcM\" title=\"YouTube video player', 'GRAND-THEFT-AUTO-V-small-1.jpg', 'GRAND-THEFT-AUTO-V-small-2.jpg'),
(28, 'GTA TRILOGY REMASTERED', 'GTA-Trilogy-Cover-Art.jpg', ' Grand Theft Auto: The Trilogy – The Definitive Edition contains three games in the Grand Theft Auto series: Grand Theft Auto III (2001), Grand Theft Auto: Vice City (2002), and Grand Theft Auto: San Andreas (2004). They are action-adventure games played from a third-person perspective wherein players complete missions—linear scenarios with set objectives—to progress through the story. Outside of missions, players can freely roam the  open world and have the ability to complete optional side mis', '6.99', 'Intel Core i5-6600K / AMD FX-6300', 'GeForce GTX 760 / AMD Radeon R9 280', '8 GB', '45 GB', 'Grove Street Games', 'November 11, 2021', 'Rockstar', 'Intel Core i7-2700K / AMD Ryzen 5 2600', 'Nvidia GeForce GTX 970 or AMD Radeon RX 570', '16 GB', '45 GB', 'Rockstar Games', 'https://www.youtube.com/embed/4E7bJOdiQiE\" title=\"YouTube video player', 'GTA TRILOGY REMASTERED-small-1.jpg', 'GTA TRILOGY REMASTERED-small-2.jpg'),
(29, 'RED DEAD REDEMPTION 2', 'Red-Dead-Redemption-2.jpg', ' Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption. The story is set in 1899 in a fictionalized representation of the Western, Midwestern, and Southern United States and follows outlaw Arthur Morgan, a member of the Van der Linde gang. Arthur must deal with the decline of the Wild West whilst attempting to survive against government forces, rival', '4.99', 'Intel Core i5-2500K / AMD FX-6300', 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280', '8 GB', '150 GB', 'Rockstar Studios', 'November 5, 2019', 'Rockstar', 'Intel Core i7-4770K / AMD Ryzen 5 1500X', 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB', '16 GB', '150 GB', 'Rockstar Games', 'https://www.youtube.com/embed/eaW0tYpxyp0\" title=\"YouTube video player', 'RED DEAD REDEMPTION 2_small_1.jpg', 'RED DEAD REDEMPTION 2_small_3.jpg'),
(30, 'F1 22', 'F1-22-Steam-Offline-Buy-Cheap-Play-Cheap.jpg', ' F1 22 Game is a sports and racing video game. The Game was developed by Codemasters and published by EA Sports. The developers released this game for Windows, PlayStation4, PlayStation 5 and Xbox Series X on July 01, 2022.F1 22 is the fifteenth entry in the F1 Game series by Codemasters. The game holds an official license of the 2022 Formula One and Formula 2 Championships. In our opinion, It will be a huge success for EA Sports.', '7.99', 'Intel Core i3-2130 Or AMD Fx-4300', 'Nvidia GTX 1050 Ti Or AMD Radeon RX 470', '8 GB', '80 GB', 'Codemasters', 'July 1, 2022', 'Origin', 'Intel Core i5-9600K Or AMD Ryzen 5 2600X', 'Nvidia GTX 1660 Ti Or AMD Radeon RX 590', '16 GB', '80 GB', 'EA Sports', 'https://www.youtube.com/embed/YgOi41qmlc4\" title=\"YouTube video player', 'F1-22-small-1.jpg', 'F1-22-small-2.jpg'),
(31, 'FIFA 22', 'FIFA-22.jpg', ' FIFA 22 is a football simulation video game published by Electronic Arts as part of the FIFA series. It is the 29th installment in the FIFA series, and Developers released it on the 1st of October 2021 for Microsoft Windows, Nintendo Switch, PlayStation 4, and Xbox One. They also released the Enhanced versions for the PlayStation 5 and Xbox Series X and Series S on the 1st of October 2021.The FIFA 22 game developers focus on new mechanical upgrades and new animations rather than upgrading the g', '16.56', 'Athlon FX-8320 / Core i3-7300', 'Radeon HD 7950 / GeForce GTX 670', '8 GB', '50 GB', 'EA Vancouver, EA Romania', 'October 1, 2021', 'Origin', 'AMD FX-9370 / Core i5-4570', 'Radeon R9 290 / GeForce GTX 760 Ti', '12 GB', '50 GB', 'EA Sports', 'https://www.youtube.com/embed/SYsi5QuOJNE\" title=\"YouTube video player', 'FIFA22_small_1.jpg', 'FIFA22_small_2.jpg'),
(32, 'BATTLEFIELD 5', 'Battlefield-5-4.jpg', ' Battlefield V is a first-person shooter video game developed by EA DICE and published by Electronic Arts. Battlefield V is the sixteenth installment in the Battlefield series. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 20, 2018. Those who pre-ordered the Deluxe Edition of the game were granted early access to the game on November 15, 2018, and Origin Access Premium subscribers on PC received access to the game on November 9, 2018. The game is based ', '5.99', 'Core i5 6600K / AMD FX-8350', 'AMD Radeon HD 7850 / Nvidia GeForce GTX 660', '8 GB', '50 GB', 'DICE', 'November 20, 2018', 'Origin', 'Intel Core i7 4790 / AMD Ryzen 3 1300X', 'AMD Radeon RX 580 /  Nvidia GeForce GTX 1060', '12 GB', '50 GB', 'Electronic Arts', 'https://www.youtube.com/embed/LCZLabOywYU\" title=\"YouTube video player', 'battlefield_5_small_1.jpg', 'battlefield_5_small_2.jpg'),
(33, 'BATTLEFIELD 4', 'Battlefield-4-2.jpg', ' Battlefield 4 is a first-person shooter video game developed by video game developer EA DICE and published by Electronic Arts. It is a sequel to 2011’s Battlefield 3 and was released in October 2013 for Microsoft Windows, PlayStation 3, and Xbox 360; then later in November for PlayStation 4 and Xbox One.', '3.99', 'Intel Core 2 Duo 2.4 GHz / AMD Athlon X2 2.8 GHz', 'AMD Radeon HD 3870 / NVIDIA GeForce 8800 GT', '4 GB', '30 GB', 'DICE', 'October 29, 2013', 'Origin', 'Intel Core i7 4790 / AMD Ryzen 3 1300X', 'AMD Radeon HD 7870 / NVIDIA Geforce GTX 660', '8 GB', '30 GB', 'Electronic Arts', 'https://www.youtube.com/embed/CrtwqDt0IEk\" title=\"YouTube video player', 'battlefield_4_small_1.jpg', 'battlefield_4_small_2.jpg'),
(34, 'BATTLEFIELD 1', 'Battlefield-1-4.jpg', ' Battlefield 1 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. Battlefield 1 is the fifteenth installment in the Battlefield series, and the first main entry in the series since Battlefield 4. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 21, 2016.', '2.99', 'Core i5 6600K / AMD FX-6350', 'AMD Radeon HD 7850 / Nvidia GeForce GTX 660', '8 GB', '50 GB', 'DICE', 'October 21, 2016', 'Origin', 'Intel Core i7 4790 / AMD FX 8350', 'AMD Radeon RX 480 4GB / Nvidia GeForce GTX 1060 3GB', '16 GB', '50 GB', 'Electronic Arts', 'https://www.youtube.com/embed/c7nRTF2SowQ\" title=\"YouTube video player', 'battlefield_1_small_1.jpg', 'battlefield_1_small_2.jpg'),
(35, 'STAR WARS : BATTLEFRONT 2', 'Star-Wars-Battlefront-2.jpg', ' Star Wars Battlefront II is a 2017 action shooter video game based on the Star Wars franchise. It is the fourth main installment of the Star Wars: Battlefront series, and a sequel to the 2015 reboot of the series. It was developed by EA DICE, in collaboration with Criterion Games and Motive Studios, and published by Electronic Arts.  The game was released worldwide on November 17, 2017 for the PlayStation 4, Xbox One, and Microsoft Windows. It features both single-player and multiplayer game mo', '5.99', 'AMD FX-6350 or Intel Core i5 6600K', 'AMD Radeon HD 7850 2GB / NVIDIA GeForce GTX 660', '8 GB', '22 GB	', 'DICE', 'November 17, 2017', 'Origin', 'AMD FX 8350 Wraith / Intel Core i7 6700', 'AMD Radeon RX 480 4GB / NVIDIA GeForce GTX 1060', '8 GB', '22 GB	', 'Electronic Arts', 'https://www.youtube.com/embed/_q51LZ2HpbE\" title=\"YouTube video player', 'STAR-WARS-BATTLEFRONT-small-1.jpg', 'STAR-WARS-BATTLEFRONT-small-2.jpg'),
(36, 'NEED FOR SPEED HEAT', 'Need-For-Speed-Heat.jpg', 'Need for Speed Heat is a racing video game developed by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One. It was released on November 8, 2019.\r\n\r\nNeed for Speed Heat is a racing game set in an open world environment called Palm City, a fictionalized version of the city Miami, Florida and its surrounding area. The in-game map features diverse geography, including mountainous areas and open fields. Unlike Need for Speed Payback, the game does not inclu', '14.99', 'Intel Core i5 3570 / AMD FX 6350', 'AMD Radeon HD 7970 / NVIDIA GeForce GTX 760', '8 GB', '50 GB', 'Ghost Games', 'November 8, 2019', 'Origin', 'Core i7-4790 / Ryzen 3 1300X', 'AMD Radeon RX 480 / NVIDIA GeForce GTX 1060', '16 GB', '50 GB', 'Electronic Arts', 'https://www.youtube.com/embed/9ewiJJe_nYI\" title=\"YouTube video player', 'NEED-FOR-SPEED-HEAT-small-1.jpg', 'NEED-FOR-SPEED-HEAT-small-2.jpg'),
(37, 'STAR WARS : JEDI FALLEN', 'Star-Wars-Jedi-Fallen.jpg', ' Star Wars Jedi: Fallen Order is an action-adventure game developed by Respawn Entertainment and published by Electronic Arts. It was released for Windows, PlayStation 4, and Xbox One on November 15, 2019.  The story, set in the Star Wars universe five years after Star Wars: Episode III – Revenge of the Sith, follows Jedi Padawan Cal Kestis, who becomes a target of the Galactic Empire and is hunted throughout the galaxy by two Inquisitors while attempting to complete his training, escape his tro', '3.99', 'Intel Core i3-3220 / AMD FX-6100', 'NVIDIA GeForce GTX 650 / AMD Radeon HD 7750', '8 GB', '55 GB	', 'Respawn Entertainment', 'November 15, 2019', 'Origin', 'Intel Core i7-6700K / AMD Ryzen 7 1700', 'NVIDIA GeForce GTX 1070 / AMD Radeon RX Vega 56', '16 GB', '55 GB', 'Electronic Arts', 'https://www.youtube.com/embed/0GLbwkfhYZk\" title=\"YouTube video player', 'STAR WARS  JEDI FALLEN-small-1.jpg', 'STAR WARS  JEDI FALLEN-small-2.jpg'),
(39, 'ASSASSINS CREED ODYSSEY', 'Assassins-Creed-Odyssey.jpg', 'Assassin’s Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the eleventh major installment, and 21st overall, in the Assassin’s Creed series and the successor to 2017’s Assassin’s Creed Origins. Set in the years 431–422 BC, the plot tells a mythological history of the Peloponnesian War between Athens and Sparta. Players control a male or female mercenary who fights on both sides of the conflict as they attempt to find their family.\r\n\r', '20.99', 'AMD FX 6300 @ 3.8 GHz / Ryzen 3 / Intel Core i5 2400', 'AMD Radeon R9 285 / NVIDIA GeForce GTX 660', '8 GB', '46 GB', 'Ubisoft Quebec', 'October 5, 2018', 'Ubisoft', 'AMD FX-8350 @ 4.0 GHz / Ryzen 5 / Intel Core i7-3770 @ 3.5 GHz', 'AMD Radeon R9 290 or NVIDIA GeForce GTX 970', '8 GB', '46 GB', 'Ubisoft', 'https://www.youtube.com/embed/s_SJZSAtLBA\" title=\"YouTube video player', 'ASSASSINS-CREED-ODYSSEY-small-1.jpg', 'ASSASSINS-CREED-ODYSSEY-small-2.jpg'),
(40, 'ASSASSIN\'S CREED VALHALLA', 'Assassins-Creed-Valhalla-Complete-Edition-Buy-Cheap-Play-Cheap-Cover.jpg', 'Assassin’s Creed Valhalla is an action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth major installment and the twenty-second release in the Assassin’s Creed series, and a successor to the 2018’s Assassin’s Creed Odyssey. Set in the years 872–878 AD, the game recounts a fictional story during the Viking invasion of Britain. The player controls Eivor, a Viking raider who becomes embroiled in the conflict between the Brotherhood of Assassins and t', '34.99', 'Intel Core i5-4460 / AMD Ryzen 3 1200 ', 'AMD Radeon R9 380 / NVIDIA GeForce GTX 960', '8 GB', '50 GB', 'Ubisoft Montreal', 'November 10, 2020', 'Ubisoft', 'AMD Ryzen 7 1700 / Intel Core i7-6700', 'AMD Vega 64  / GeForce GTX 1080', '16 GB', '50 GB', 'Ubisoft', 'https://www.youtube.com/embed/ssrNcwxALS4\" title=\"YouTube video player', 'ASSASSIN\'S-CREED-VALHALLA-small-1.jpg', 'ASSASSIN\'S-CREED-VALHALLA-small-3.jpg'),
(42, 'SNIPER ELITE 5', 'Sniper-Elite-5-Buy-Cheap-Play-Cheap-Cover-Art.jpg', ' Sniper Elite is a tactical third-person shooter video game. Sniper Elite 5’s Game Developer is Rebellion Developments. It is the 5th installment of the Sniper Elite game series. It is also a sequel to Sniper Elite 4. The Game was released on 26 May 2022 for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One and Xbox Series X/S.', '3.99', 'Intel Core i3-8100', 'Intel Iris Plus 640', '8 GB', '85 GB', 'Rebellion Developments', 'May 26, 2022', 'Microsoft', 'Intel Core i5-8400', 'AMD Radeon R5 M335', '16 GB', '85 GB', 'Rebellion Developments', 'https://www.youtube.com/embed/kcQX1djYtQw\" title=\"YouTube video player', 'SNIPER-ELITE-5-small-1.jpg', 'SNIPER-ELITE-5-small-2.jpg'),
(43, 'AGE OF EMPIRES 4', 'Age-Of-Empire-4-Cover-Art.jpg', 'On August 21, 2017, Microsoft announced Age of Empires IV, developed by Relic Entertainment.', '5.99', 'Intel Core i5-6300U / AMD Ryzen 5 2400G', 'Intel HD 520 / AMD Radeon RX Vega 11', '8 GB', '50 GB', 'Relic Entertainment World\'s Edge', 'October 28, 2021', 'Microsoft', 'Intel i5-8400 or AMD Ryzen 5 1600', 'Nvidia GeForce 970 / AMD Radeon RX 570', '16 GB', '50 GB', 'Xbox Game Studios', 'https://www.youtube.com/embed/5TnynE3PuDE\" title=\"YouTube video player', 'AGE-OF-EMPIRES-4-small-1.jpg', 'AGE-OF-EMPIRES-4-small-2.jpg'),
(44, 'MINECRAFT\r\n', 'Minecraft-4.jpg', 'Minecraft is a sandbox video game developed by Mojang. The game was created by Markus Notch Persson in the Java programming language. Following several early test versions, it was released as a paid public alpha for personal computers in 2009 before releasing in November 2011, with Jens Bergensten taking over development.', '22.12', 'Intel Core i3-3210 / AMD A8-7600 ', 'Intel HD 4000', '2 GB', '4 GB', 'Mojang Studios', '18 November 2011', 'Other', 'Intel Core i5-4690 3.5GHz / AMD A10-7800', 'AMD Radeon R7 360', '4 GB', '4 GB', 'Mojang Studios\r\nXbox Game Studios\r\nSony Interactive Entertainment', 'https://www.youtube.com/embed/lw6f-tJKoao\" title=\"YouTube video player', 'minecraft-small-1.jpg', 'minecraft-small-2.jpg'),
(46, 'OVERWATCH', 'Overwatch-1.jpg', 'Overwatch is a 2016 team-based multiplayer first-person shooter developed and published by Blizzard Entertainment. Described as a hero shooter, Overwatch assigns players into two teams of six, with each player selecting from a large roster of characters, known as heroes, with unique abilities. Teams work to complete map-specific objectives within a limited period of time.', '27.99', 'Intel Core i3 / AMD Phenom X3 8650', 'Nvidia GeForce GTX 460 / Intel HD Graphics 4400', '4 GB', '30 GB', 'Blizzard Entertainment', 'May 24, 2016', 'Other', 'Intel Core i5 or AMD Phenom II X3', 'Nvidia GeForce GTX 660 / ATI Radeon HD 7950', '6 GB', '30 GB', 'Blizzard Entertainment', 'https://www.youtube.com/embed/LGgqyer-qr4\" title=\"YouTube video player', 'overwatch-small-1.jpg', 'overwatch-small-2.jpg'),
(48, 'DOOM ETERNAL', 'Doom-Eternal.jpg', ' Doom Eternal is a first-person shooter game developed by id Software and published by Bethesda Soft works. The sequel to Doom (2016), and the fifth main game in the Doom series, it was released on March 20, 2020, for Windows. ', '6.99', 'Intel Core i5-2500K 3.3GHz / AMD Ryzen 3 2200G', 'AMD Radeon R9 280 / NVIDIA GeForce GTX 1050 Ti', '8 GB', '50 GB', 'Id Software', 'March 20, 2020', 'Other', 'Intel Core i7-6700K / AMD Ryzen R7 1700', 'Nvidia GeForce GTX 660 / ATI Radeon HD 7950', '8 GB', '50 GB', 'Bethesda Softworks', 'https://www.youtube.com/embed/_oVwrpfo_QA\" title=\"YouTube video player', 'doom-eternal-small-1.jpg', 'doom-eternal-small-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerbillingdetails`
--

CREATE TABLE `customerbillingdetails` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerbillingdetails`
--

INSERT INTO `customerbillingdetails` (`id`, `fname`, `lname`, `company`, `country`, `address`, `city`, `zip`, `phone`, `email`, `customerId`) VALUES
(3, 'Mahel', 'Chandupa', 'player', 'Sri Lanka', 'damasak Stores,8th Mile Post,hanayapalama,Aralaganwila', 'Polonnaruwa', 51098, 789092063, 'mahel@gmail.com', 1),
(5, 'Pasindu', 'Akalanka', 'AKL', 'Sri Lanka', 'damasak Stores,8th Mile Post,hansayapalama,Aralaganwila,Polonnarwa', 'Polonnaruwa', 51098, 782020455, 'pasindu@gmail.com', 2),
(6, 'Mahel', 'Chandupa', 'GAMES', 'Sri Lanka', 'damasak Stores,8th Mile Post,hanayapalama,Aralaganwila', 'Polonnaruwa', 51098, 705596067, 'mahelchandupa1013@gmail.com', 4),
(7, 'Bhanuka', 'Senevirathna', 'BHA', 'Sri Lanka', 'Kandy', 'Kandy', 51096, 776726034, 'bhanuka76@gmail.com', 5),
(8, 'bhanuka', 'bhanukas', 'ggg', 'Sri Lanka', 'damasak Stores,8th Mile Post,hanayapalama,Aralaganwila', 'Polonnaruwa', 51098, 789092063, 'bhanuka768@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `gameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `gameId`) VALUES
(11, 1, 4),
(12, 1, 8),
(13, 1, 9),
(14, 1, 10),
(15, 1, 43),
(16, 1, 21),
(17, 1, 26),
(18, 1, 25),
(26, 1, 31),
(27, 2, 42),
(28, 2, 7),
(37, 1, 16),
(38, 1, 27),
(40, 1, 40),
(61, 2, 30),
(62, 4, 16),
(63, 4, 44),
(64, 4, 20),
(65, 4, 11),
(66, 4, 23),
(67, 4, 10),
(68, 4, 4),
(69, 4, 9),
(70, 4, 8),
(71, 4, 7),
(72, 5, 16),
(73, 5, 44),
(74, 2, 32),
(75, 2, 5),
(76, 4, 46),
(77, 5, 21),
(78, 6, 11),
(79, 6, 29),
(80, 6, 44),
(81, 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `proId` int(11) NOT NULL,
  `cuName` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `subtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `proId`, `cuName`, `review`, `subtime`, `stars`) VALUES
(6, 4, 'Akila', 'This game has Amazing Characters', '2022-12-05 08:06:33', 3),
(7, 5, 'Akila', 'This game has Amazing Characters', '2022-12-05 08:08:49', 2),
(8, 10, 'Akila', 'This game has Inclusive Character Customization', '2022-12-05 08:14:52', 5),
(9, 8, 'Mahel', 'This game is Highly Recommended.', '2022-12-05 08:50:29', 1),
(10, 5, 'Pasindu Akalanka', 'I think this game is great! The most alien looking / feeling game I ever played.', '2022-12-05 11:17:24', 1),
(11, 5, 'Dark Star', 'This is a game to either love it or hate it. I have just completed it, and I really liked it.', '2022-12-05 11:19:50', 2),
(12, 3, 'Hasindu', 'I think this game is great!', '2022-12-05 12:29:58', 3),
(13, 6, 'Bankai', 'Supiri. patta game aka', '2022-12-09 04:15:09', 4),
(14, 7, 'Hasindu', 'Supiriyak tama. buy karalama gahnn one a.', '2022-12-09 04:18:28', 5),
(15, 5, 'Tharindi Dissanayake QA', 'Niceeeeeeee  ;)', '2022-12-18 14:12:51', 4),
(16, 5, 'Lochana ', 'Waiting ......\r\n', '2022-12-18 14:13:34', 4),
(17, 46, 'Dark Star', 'Nice Game', '2023-01-31 15:02:31', 3),
(18, 36, 'Mahel', 'Woow', '2023-01-31 15:58:19', 3),
(19, 21, 'Akila', 'good', '2023-02-02 08:19:50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `country`, `pw`) VALUES
(1, 'mahel', 'chandupa', 'mahel@gmail.com', 'Sri lanka', '12345'),
(2, 'pasindu', 'akalanka', 'pasindu@gmail.com', 'India', 'pasindu'),
(3, 'Hasindu', 'mediwaka', 'hasindu@gmail.com', 'America', 'hasindu'),
(4, 'Mahel', 'Chandupa', 'mahelchandupa1013@gmail.com', 'Sri Lanka', '12345'),
(5, 'Bhanuka', 'Senevirathna', 'bhanuka76@gmail.com', 'Sri Lanka', 'bhanuka'),
(6, 'Achala', 'Bhanuka', 'bhanuka768@gmail.com', 'Sri Lanka', 'peeps');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `gameid`, `userid`) VALUES
(12, 43, 1),
(13, 40, 1),
(15, 40, 4),
(16, 39, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browsetb`
--
ALTER TABLE `browsetb`
  ADD PRIMARY KEY (`gameId`);

--
-- Indexes for table `customerbillingdetails`
--
ALTER TABLE `customerbillingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `browsetb`
--
ALTER TABLE `browsetb`
  MODIFY `gameId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `customerbillingdetails`
--
ALTER TABLE `customerbillingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
