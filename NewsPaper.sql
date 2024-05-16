-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 10:39 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NewsPaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `date` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `time`, `title`, `abstract`, `text`, `image`, `category`, `storage`) VALUES
(2, '02.05.2021.', '12:09', 'Hundreds arrested at Turkish May Day gatherings', 'Turkish police detained 212 protesters after riots broke out in the middle of curfew on Saturday.', 'Riot police and civilian police clashed with union leaders and other protesters, throwing them to the ground before detaining dozens near Istanbul\'s Taksim Square, Reuters video and photos show.\r\n<br/><br/>\r\nThe governor\'s office said some unions were allowed to hold annual Labor Day memorials, while those who \"gathered unlawfully,\" violating lockdown measures and ignoring calls to disperse, were arrested.\r\n<br/><br/>\r\nTo combat the coronavirus, Turkey adopted a 17-day partial lockdown this week, with stay-at-home orders and the closure of schools and certain businesses.\r\n<br/><br/>\r\nLocal media reported on the efforts of the police in Istanbul and Ankara to prevent journalists from filming the May Day demonstrations and arrests.', 'image_11.jpg', 'world', 0),
(3, '02.05.2021.', '18:01', 'Negotiations in Vienna on the Iranian nuclear program', 'Seyed Abbas Araghchi announced that Iran will leave the negotiations.', 'The Iran nuclear deal, officially called the Joint Comprehensive Plan of Action (JCPOA), has been taking place behind closed doors in Vienna for almost a month. Participants are China, EU, Russia, Iran, UK, France and Germany. Iran did not want direct contact with the US negotiators because it claims that they have hurt its people badly. For these reasons, the method of indirect diplomacy was used to revive the 2015 agreement, which was abandoned by the Trump administration, and which Iran then began to violate. US negotiators are housed in a hotel across the street from the Grand Hotel Vienna where the negotiations are taking place and to get the message to them quickly.\r\n<br/><br/>\r\n- We expect that the conclusion will be reached quickly, very quickly. We meet again next Friday. The writing of the draft started a month ago - the Russian permanent representative in international organizations in Vienna, Mihail Uljanov, told 24 Hours.', 'image_9.jpg', 'world', 0),
(4, '03.05.2021.', '02:49', '30 people died in the car bomb explosion', 'The car exploded in the town of Pul-e Alam near the house of the former head of the provincial council', 'A powerful car bomb explosion killed at least 30 people and wounded dozens more in eastern Afghanistan\'s Logar province on Friday, officials said.\r\n<br/><br/>\r\nThe car exploded in the provincial capital of Logar, Pul-e Alam, near the home of a former provincial council chief and not far from a hospital, said Didar Lawang, the governor\'s spokesman.\r\n<br/><br/>\r\nFor now, it is not known who is responsible for the explosion.\r\n<br/><br/>\r\nViolence has escalated in recent weeks after US President Joe Biden announced the withdrawal of US troops by September 11, ending two decades of foreign military presence.\r\n<br/><br/>\r\nThat decision enraged the Taliban, who signed an agreement with previous President Donald Trump to withdraw troops by May 1, with security guarantees.\r\n<br/><br/>\r\nInterior Ministry spokesman Tarik Arian said the death toll in the explosion could rise.\r\n<br/><br/>\r\nAbout 60 people were wounded, according to the head of the provincial council. A spokesman for the Ministry of Health said that about 40 people were hospitalized, some of them in critical condition.', 'image_13.jpg', 'world', 0),
(5, '03.05.2021.', '09:37', 'China will become the world\'s largest economy in 2028', 'In 2028, China will overtake the US to become the world\'s largest economy, earlier than previously predicted.', 'For some time now, the main theme of the world economy has been the struggle for the economic supremacy of the USA and China. The covid-19 pandemic and the resulting economic downturn have played in China\'s favor in that rivalry, the Center for Economic and Business Research (CEBR) said in its annual report, released on Saturday.\r\n<br/><br/>\r\nCEBR argues that China\'s \"successful management of the pandemic\", which imposed a strict full lockdown early on, and blows to the West\'s long-term economic growth prospects, have led to an improvement in China\'s economic position. The Asian country should achieve an average annual growth of 5.7 percent in the period from 2021 to 2025, and 4.5 percent in the period from 2026 to 2030.\r\n<br/><br/>\r\nAlthough the US is expected to have a strong economic recovery in 2021, growth will slow to 1.9 percent from 2022 to 2024 and then to 1.6 percent.\r\n<br/><br/>\r\nJapan will remain the world\'s third largest economy, claims CEBR, until the early 2030s, when it will be overtaken by India, which will push Germany from fourth to fifth place.\r\n<br/><br/>\r\nThe United Kingdom, today the world\'s fifth largest economy, will become the sixth in 2024. But despite the shocks expected in 2021 from leaving the EU\'s single market, Britain\'s GDP is forecast to be 23 percent higher than France\'s by 2035, thanks to Britain\'s digital economy.\r\n<br/><br/>\r\nEuropean manufacturing accounts for 19 percent of the economic activity of the world\'s ten largest economies, but this could fall to 12 percent or lower by 2035, in the event of a messy EU-Britain split.', 'image_14.jpg', 'economic', 0),
(6, '03.05.2021.', '09:54', 'Through the new measures', 'Vizek says that the decree regulating the payment of money from the Fund has not yet been adopted.', 'Economic expert Maruška Vizek commented on the new measures adopted by the Government to preserve jobs. He says that they are the expected continuation of already adopted measures, writes Dnevnik.hr.\r\n<br/><br/>\r\nHe believes that they are \"somewhat modified, in such a way that we have a certain amount of gradation in these measures\". He adds that through the new measures, \"perhaps there is some preparation for a future lockdown, if there is a need.\"\r\n<br/><br/>\r\nWhen asked when Croatia, as well as other members of the European Union, can expect aid money from the EU at the earliest, Vizek says that the regulation regulating the payment of money from the Recovery Fund has not yet been adopted.\r\n<br/><br/>\r\n- It is expected by the end of the year. Ideally, that first advance of 10 percent that we have to receive should be in the spring - adds the expert.', 'image_2.jpg', 'economic', 0),
(7, '03.05.2021.', '10:05', 'Big drop in GDP', 'Economists warned of the fact that the decline will not be a disaster if lessons are learned from it.', 'The fall in GDP in the second quarter, compared to the same quarter last year, amounts to 15.1 percent. Since it has been measured by national accounts statistics for the past 25 years, this is the biggest quarterly decline ever recorded in Croatia, said Finance Minister Zdravko Marić.\r\n<br/><br/>\r\n- Considering the circumstances, it is not a big surprise, but it should be said that it is a higher drop than it was during the last crisis, when the biggest drop was around 9 percent - said Marić and emphasized that the government did everything in this the moment she could.\r\n<br/><br/>\r\n- Let\'s keep in mind that we had a situation that we did not have even in the Homeland War. However, we entered this crisis more prepared than in 2008. If we had not reacted to it as the Government, these figures, which are difficult, would have been even worse, and even more dangerous, that the trends of the decline in employment would have been even worse. We also expect a decline for the third quarter, but we hope it will be a little smaller - said Marić and pointed out that there are no layoffs.\r\n<br/><br/>\r\n- The decline in the second quarter is at the level of the Eurozone. When looking at individual countries, there are countries that have a higher rate of decline, Italy, Spain, Portugal... We also made an analysis with the first quarter included, there is a 7.8 percent decline - said Marić.\r\nHowever, the Bureau of Statistics also announced that in the second quarter, government spending increased by 0.7 percent on an annual basis.', 'image_3.jpg', 'economic', 0),
(8, '03.05.2021.', '10:08', 'Ocean food production could increase', 'Annual global seafood production could increase by 21 to 44 million tons by 2050.', 'Achieving such an increase in sustainable food production will depend on a variety of factors, including policy reforms, technological innovation and future demand. Food from the sea is highly nutritious, contains essential vitamins, minerals and fatty acids.\r\n<br/><br/>\r\nWhile the world\'s demand for food is increasing, it is uncertain whether the supply can be increased without compromising other ecosystem services. Food from the sea, fish and seafood fishing and farming, accounts for only 17 percent of current meat production worldwide, but could play an important role in global food security.\r\n<br/><br/>\r\nChristopher Costello, a professor of environmental economics, says the ocean has great, undiscovered potential to help feed the world for decades to come, and this can be done with a smaller footprint than other food sources.\r\n<br/><br/>\r\nIf rapid and far-reaching changes are implemented in the way we manage the marine exploitation industry and at the same time preserve its ecosystems, we can strengthen the long-term food security and livelihood of millions of people, he believes.', 'image_4.jpg', 'economic', 0),
(9, '12.06.2021.', '19:31', 'Cuba expanded private entrepreneurship through reform', 'Cuba announced on Saturday that private entrepreneurship is being allowed in most sectors.', 'The measure, announced in August by Labor Minister Marta Elena Feito, was approved on Friday during a session of the Council of Ministers, the Granma newspaper, the official newspaper of the ruling Communist Party, announced.\r\n<br/><br/>\r\nPrivate entrepreneurship in Cuba has been allowed since 2010, but limited to only a few sectors designated by the state. Great growth of entrepreneurship has been recorded since 2014, after the historic improvement of relations between Cuba and the USA under the rule of Barack Obama, reports the France Presse agency.\r\n<br/><br/>\r\n- The previous list of 127 permitted activities has been eliminated - the minister said.\r\n<br/><br/>\r\nFrom now on, instead of permitted activities, only sectors reserved for the state will be on the list.\r\n<br/><br/>\r\nCurrently, more than 600,000 Cubans work in the private sector, that is, 13 percent of the workforce of the island nation with a population of 11.2 million. The majority are employed in hospitality, transport and tourism, the sectors most strongly affected by the sanctions of former US President Donald Trump and the coronavirus pandemic.', 'image_5.jpg', 'economic', 0),
(10, '12.06.2021.', '19:34', 'Saving the economy: should we save or spend?', 'At the moment, it is likely that we will be hit by a recession, caused by a drop in GDP.', 'In times of recession, it is customary to say that what is good for the individual is not good for the economy. In the current macroeconomic conditions, it is advisable to save if the savings are used to finance investments.\r\n<br/><br/>\r\nBut should citizens, and how much, care at all about the macroeconomic consequences of their decisions and how to achieve a balance between savings and consumption in these stormy economic times?\r\n<br/><br/>\r\nWe talked about the issue of today\'s economic trends with Zdenko Adrović, director of the Croatian Association of Banks, a respected economic expert, who explained the current situation to us.\r\n<br/><br/>\r\nIn a recession, from a macroeconomic perspective, consumption is welcome because it also means the circulation of money, which stimulates economic activity.\r\n<br/><br/>\r\n- In addition to financing investments, savings are used to approve loans. But if loans are not approved and if citizens do not invest in securities, then the money circulation slows down - explained our interlocutor.\r\n<br/><br/>\r\nHowever, citizens should not care too much about the macroeconomic consequences of their decisions. Everyone should decide for himself how much to spend and how much to save.\r\n<br/><br/>\r\n- Saving is always a responsible act and everyone should set aside part of their income for future purposes: for an apartment, for retirement, for security. With adequate savings, we will feel calmer and safer - continues Adrović.', 'image_6.jpg', 'economic', 0),
(11, '12.06.2021.', '19:42', 'In Croatia, GDP will fall by more than 10 percent', 'The survey was conducted by the consulting agency EQUESTRIS and business radio \"poslovniFM\".', 'Croatian GDP will fall by more than 10 percent in 2020, and the economy is entering a period of sudden recession and a long recovery that will last significantly longer than the world\'s, according to the \"Business Executives\' Quarterly Outlook (BEQO)\" survey on the expectations of the business community.\r\n<br/><br/>\r\nThe survey was conducted by the consulting agency EQUESTRIS and the business radio \"poslovniFM\", and it was conducted electronically on a sample of 200 entrepreneurs, owners and directors of companies, in the period from April 30 to May 6. Among the included entrepreneurs, 55 percent are primarily focused on services, 23 percent on production, and there are as many who are engaged in both production and services. Entrepreneurs from 18 industries are included.\r\n<br/><br/>\r\nA quarter of entrepreneurs expect a drop in GDP of 10 percent, while 21 percent believe it will be greater than 30 percent. As many as 75 percent of entrepreneurs expect a drop in tourism of more than 30 percent. In addition, 46 percent predict a drop in exports by 10 to 30 percent, while 25 percent predict a drop in exports of more than 30 percent.\r\n<br/><br/>\r\nEntrepreneurs believe that all this will lead to a drop in real estate prices, industrial production, average net wages, and foreign investments. They warn that the unemployment rate will rise up to 30 percent, and that the corruption index may increase by 20 to 30 percent.', 'image_7.jpg', 'economic', 0),
(12, '13.06.2021.', '17:56', 'At least 12 people died in the gas pipe explosion', 'A total of 150 people were evacuated after the accident in the city of Shiyan, and 37 people are in critical condition.', 'A gas pipe explosion in a residential area in the Chinese city of Shiyan killed 12 people and injured 138, reports CNN.\r\n<br/><br/>\r\nA total of 150 people were evacuated after the accident in the city of Shiyan in Hubei province by 3 a.m. CET. Among the injured, 37 are in critical condition.\r\n<br/><br/>\r\nIn the explosion, the building in which the grocery store is located collapsed, local media reported.\r\n<br/><br/>\r\nFootage from China\'s CCTV shows rubble and glass shards covering the first floor of the collapsed building, where people were having breakfast and buying groceries when the explosion occurred.\r\n<br/><br/>\r\nHospitals in Shiyan are asking residents to donate blood.', 'image_8.jpg', 'world', 0),
(13, '13.06.2021.', '17:58', 'At least 13 people wounded in a shooting in Texas', 'The person suspected of the attack has not yet been arrested.', 'At least 13 people were wounded in a shooting in the Texas city of Austin, according to the US police.\r\n<br/><br/>\r\nThey add that the person suspected of the attack has not yet been arrested. Two people are in critical condition due to their wounds.\r\n<br/><br/>\r\nThe incident happened around half past two in the morning in a part of the city with cafes, bars, restaurants, and clubs. For now, there are no reports of deaths.\r\n<br/><br/>\r\nPolice commented that it was currently \"unclear what prompted\" the incident, but said they had been notified of the incident by the FBI\'s terrorism division.', 'image_15.jpg', 'world', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `user_name`, `password`, `level`) VALUES
(8, 'an', 'nguyen', 'nguyenan01', '$2y$10$.EXUi3hzIGpJ0PrBRVWh4OdcM14o9mt46wz9gsUZOkJDeBL92jdj.', 1),
(9, 'an', 'nguyen', 'nguyenan02', '$2y$10$ODdmA1JRIscz6qpcfGWhaeAQA4fH5Z0Ccf9gt0QTCL2OQWur.OIYi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
