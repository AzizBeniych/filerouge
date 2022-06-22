-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `code` varchar(110) NOT NULL,
  `title` varchar(110) DEFAULT NULL,
  `author` varchar(110) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `dateOfPublication` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `priceOffer` float DEFAULT NULL,
  `stock` varchar(11110) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookId`, `categoryId`, `code`, `title`, `author`, `description`, `dateOfPublication`, `price`, `priceOffer`, `stock`, `image`) VALUES
(100, 202, 'A1', 'Cars', 'Disney', 'Children will love learning their ABC with this brilliant workbook. Every page features colorful illustrations, writing practice, sticker activities and fun exercises to complete!   ', '2012-06-01', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904229.jpg'),
(101, 202, 'A2', 'Spider-Man', 'Marvel', NULL, '2012-06-01', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904214.jpg'),
(102, 202, 'A3', 'activities Brave', 'Marvel', 'Games and activities Brave', '2012-01-01', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904210.jpg'),
(103, 202, 'A4', 'Games and activities Princess', 'Disney', '48 pages of full-color activities featuring the wonderful Disney characters.', '2012-06-02', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904209.jpg'),
(104, 202, 'A5', 'Planes', 'Marvel', 'Games and activities Brave', '2012-01-01', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904212.jpg'),
(105, 202, 'A6', 'Games and activities Princess', 'Disney', '48 pages of full-color activities featuring the wonderful Disney characters.', '2012-06-02', 129, NULL, '500', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904209.jpg'),
(106, 202, 'A7', 'Iron Man 3 with stickers', 'Disney', 'Handy coloring  Iron Man 3 with stickers', '2017-06-08', 400, 20, '1999', 'https://www.tirryaq.com/wp-content/uploads/2020/06/ANT-870-5.jpg'),
(107, 202, 'A8', 'The Avengers ', 'Marvel', 'Find all your favorite super heroes inside. Just color and stick away!', '2015-06-03', 129, NULL, '250', 'https://www.tirryaq.com/wp-content/uploads/2020/06/3094192-1.jpg'),
(108, 202, 'A9', 'Where’s Toto', 'Elizabeth Laird', 'Susie veut aller au cirque avec Simon et Julie. Elle insiste et prend son chiot Toto avec elle mais il n’en résulter que des ennuis !\r\n', '2014-06-04', 129, NULL, '400', 'https://www.tirryaq.com/wp-content/uploads/2020/06/Where-s-Toto-Ayna-khtafa-Toto-.jpg'),
(109, 202, 'A10', 'Princess', 'Disney', '48 pages of full-color activities featuring the wonderful Disney characters.', '2012-06-02', 129, 59, '200', 'https://www.tirryaq.com/wp-content/uploads/2020/06/30904209.jpg'),
(110, 201, 'A11', 'THE ARTS OF ERUDITION', 'Shihab al-Din al-Nuwayri', 'An astonishing record of the knowledge of a civilization', '2013-06-12', 299, NULL, '400', 'https://m.media-amazon.com/images/I/51+T8rFwx+L.jpg'),
(111, 201, 'A12', 'Nineteen Eighty-Four', 'George Orwell', 'Nineteen Eighty-Four is a dystopian social science fiction novel and cautionary tale written by English writer George Orwell. It was published on 8 June 1949 by Secker & Warburg as Orwell\'s ninth and final book completed in his lifetime.', '2013-06-12', 499, NULL, '170', 'https://www.tirryaq.com/wp-content/uploads/2022/01/0cfffafc8a4bac44fbb100afe66b61b2.jpg.jpg'),
(112, 201, 'A13', 'The Pillars of the Earth', 'Ken Follett', 'The Pillars of the Earth is a historical novel by Welsh author Ken Follett published in 1989 about the building of a cathedral in the fictional town of Kingsbridge, England. Set in the 12th century, the novel covers the time between the sinking of the White Ship and the murder of Thomas Becket, but focuses primarily on the Anarchy. The book traces the development of Gothic architecture out of the preceding Romanesque architecture, and the fortunes of the Kingsbridge priory and village against the backdrop of historical events of the time.', '1989-06-12', 489, 250, '192', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM-bbs610LpEjX6nLC32td_Gs892guwe2ksgAI8RqVcLf0TTDp'),
(113, 201, 'A14', 'The Pillars of the Earth', 'Ken Follett', 'The Pillars of the Earth is a historical novel by Welsh author Ken Follett published in 1989 about the building of a cathedral in the fictional town of Kingsbridge, England. Set in the 12th century, the novel covers the time between the sinking of the White Ship and the murder of Thomas Becket, but focuses primarily on the Anarchy. The book traces the development of Gothic architecture out of the preceding Romanesque architecture, and the fortunes of the Kingsbridge priory and village against the backdrop of historical events of the time.', '1989-06-12', 489, NULL, '192', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQM-bbs610LpEjX6nLC32td_Gs892guwe2ksgAI8RqVcLf0TTDp'),
(114, 201, 'A15', 'Guns, Germs, and Steel', 'Jared Diamond', 'Guns, Germs, and Steel: The Fates of Human Societies (subtitled A Short History of Everybody for the Last 13,000 Years in Britain) is a 1997 transdisciplinary non-fiction book by Jared Diamond. In 1998, it won the Pulitzer Prize for general nonfiction and the Aventis Prize for Best Science Book. A documentary based on the book, and produced by the National Geographic Society, was broadcast on PBS in July 2005.[1]', '1997-06-12', 339, NULL, '29', 'https://upload.wikimedia.org/wikipedia/en/f/fc/Ggas_human_soc.jpg'),
(115, 201, 'A16', 'LOST ISLAMIC HISTORY', 'Firas Alkhateeb', 'Islam has been one of the most powerful religious, social and political forces in history. Over the last 1400 years, from origins in Arabia, a succession of Muslim polities and later empires expanded to control territories and peoples that ultimately stretched from southern France to East\r\nAfrica and South East Asia.\r\nYet many of the contributions of Muslim thinkers, scientists and theologians, not to mention rulers, statesmen and soldiers, have been occluded. This book rescues from oblivion and neglect some of these personalities and institutions while offering the reader a new narrative of this lost Islamic\r\nhistory. The Umayyads, Abbasids, and Ottomans feature in the story, as do Muslim Spain, the savannah kingdoms of West Africa and the Mughal Empire, along with the later European colonization of Muslim lands and the development of modern nation-states in the Muslim world. Throughout, the impact of\r\nIslamic belief on scientific advancement, social structures, and cultural development is given due prominence, and the text is complemented by portraits of key personalities, inventions and little known historical nuggets. The history of Islam and of the world\'s Muslims brings together diverse\r\npeoples, geographies and states, all interwoven into one narrative that begins with Muhammad and continues to this day.', '2014-01-09', 299, NULL, '234', 'https://images-na.ssl-images-amazon.com/images/I/51mh7IBupPL._SX316_BO1,204,203,200_.jpg'),
(116, 201, 'A17', 'THE GARDEN OF TRUTH', 'Seyyed Hossein Nasr', 'The headlines are filled with the politics of Islam, but there is another side to the world\'s fastest-growing religion. Sufism is the poetry and mysticism of Islam. This mystical movement from the early ninth century rejects worship motivated by the desire for heavenly reward or the fear of punishment, insisting rather on the love of God as the only valid form of adoration. Sufism has made significant contributions to Islamic civilization in music and philosophy, dance and literature. The Sufi poet Rumi is the bestselling poet in America. But in recent centuries Sufism has been a target for some extremist Islamic movements as well as many modernists. The Garden of Truth presents the beliefs and vision of the mystical heart of Islam, along with a history of Sufi saints and schools of thought.', '2007-09-18', 299, 149, '100', 'https://images-na.ssl-images-amazon.com/images/I/51taTepZFmL._SX326_BO1,204,203,200_.jpg'),
(117, 201, 'A18', 'David Copperfield', 'Charles Dickens', 'The Personal History, Adventures, Experience and Observation of David Copperfield the Younger of Blunderstone Rookery (Which He Never Meant to Publish on Any Account), commonly known as David Copperfield,[N 1] is a novel in the bildungsroman genre by Charles Dickens, narrated by the eponymous David Copperfield, detailing his adventures in his journey from infancy to maturity. It was first published as a serial in 1849 and 1850 and as a book in 1850.\r\n', '1850-06-01', 599, NULL, '40', 'https://upload.wikimedia.org/wikipedia/commons/5/50/Copperfield_cover_serial.jpg'),
(118, 201, 'A19', 'The Book Thief', 'Markus Zusak', 'The Book Thief is a novel by the Australian author Markus Zusak, and is his most popular book. Published in 2005, The Book Thief became an international bestseller and was translated into 63 languages and sold 16 million copies. It was adapted into the 2013 feature film, The Book Thief.\r\n\r\nThe novel is about the adventures of Liesel Meminger in Germany during a time of war. By personifying \"Death\" as a tangible thing, the novel narrates a unique perspective into the world of the victims of the war.', '2005-06-01', 120, NULL, '400', 'https://upload.wikimedia.org/wikipedia/en/8/8f/The_Book_Thief_by_Markus_Zusak_book_cover.jpg'),
(119, 203, 'A20', 'Crushing it', 'Gary Vaynerchuk', 'Four-time New York Times bestselling author Gary Vaynerchuk offers new lessons and inspiration drawn from the experiences of dozens of influencers and entrepreneurs who rejected the predictable corporate path in favor of pursuing their dreams by building thriving businesses and extraordinary personal brands.\r\n\r\nIn his 2009 international bestseller Crush It, Gary insisted that a vibrant personal brand was crucial to entrepreneurial success, In Crushing It!, Gary explains why that’s even more true today, offering his unique perspective on what has changed and what principles remain timeless. He also shares stories from other entrepreneurs who have grown wealthier—and not just financially—than they ever imagined possible by following Crush It principles. The secret to their success (and Gary’s) has everything to do with their understanding of the social media platforms, and their willingness to do whatever it took to make these tools work to their utmost potential. That’s what Crushing It! teaches readers to do.\r\n\r\nIn this lively, practical, and inspiring book, Gary dissects every current major social media platform so that anyone, from a plumber to a professional ice skater, will know exactly how to amplify his or her personal brand on each. He offers both theoretical and tactical advice on how to become the biggest thing on old standbys like Twitter, Facebook, YouTube, Instagram, Pinterest, and Snapchat; podcast platforms like Spotify, Soundcloud, iHeartRadio, and iTunes; and ', '2017-06-21', 388, 250, '344', 'https://www.tirryaq.com/wp-content/uploads/2021/02/crushing-it-website-270x408.jpg'),
(120, 203, 'A21', 'Good to great', 'Jim Collins', 'After a five-year research project, Jim Collins concludes that good to great can and does happen. In this book, he uncovers the underlying variables that enable any type of organisation to make the leap from good to great while other organisations remain only good. Rigorously supported by evidence, his findings are surprising – at times even shocking – to the modern mind.\r\n\r\n', '2001-06-06', 278, NULL, '230', 'https://www.tirryaq.com/wp-content/uploads/2020/10/61YfNhp-6uL-270x416.jpg'),
(121, 203, 'A22', 'the apple Revolution', 'Luke Dormehl', 'This is the story of how the sex, drugs, and rock ‘n’ roll generation changed the world forever. Meet the crazy ones who created Silicon Valley—the hippies who started the Homebrew Computer Club, the young ad executive who first sketched out Apple’s iconic logo, and the engineers who met lying down in a cardboard geodesic dome at Stanford University. From Steve Wozniak, who built the first breakthrough Apple computers, to Jony Ive, who imagined the iPod, the designers and programmers, the geeks, creatives, and dreamers, are all here. And at the center of it all, a bearded and barefoot Steve Jobs, whose singular vision would will Apple Inc. into a future that it would come to own.\r\n\r\n', '2013-06-08', 164, NULL, '233', 'https://www.tirryaq.com/wp-content/uploads/2020/10/81FuFyg8QlL-270x424.jpg'),
(122, 203, 'A23', 'The personal MBA', 'JOSH KAUFMAN', 'This revised and expanded edition of the bestselling book, The Personal MBA by Josh Kaufman, gives you everything you need to transform your business, your career or your working life forever.\r\n\r\nAn MBA at a top school is an enormous investment in time, effort and cold, hard cash. And if you don’t want to work for a consulting firm or an investment bank, the chances are it simply isn’t worth it.\r\n\r\nJosh Kaufman is the rogue professor of modern business education. Feted by everyone from the business media to Seth Godin and David Allen, he’s torn up the rulebook and given thousands of people worldwide the tools to teach themselves everything they need to know.\r\n\r\n', '2010-09-30', 139, NULL, '122', 'https://www.tirryaq.com/wp-content/uploads/2020/08/the-personal-mba-a-world-class-business-education-in-a-single-volume-josh-kaufman-270x270.jpg'),
(123, 203, 'A24', 'What They Teach You ', 'Philip Delves Broughton', 'The candid and entertaining memoir What They Teach You at Harvard Business School by Philip Delves Broughton, author of Life’s a Pitch, is essential reading for anyone thinking that Harvard Business School is the place to sit out the recession.What DO they teach you at Harvard Business School?Graduates at Harvard Business School run many of the world’s biggest and most influential banks, companies and countries. But what kind of person does it take to succeed at HBS? And what do they learn there?Philip Delves Broughton’s thrilling and hilarious memoir of his two years at Harvard takes us from first class to graduation, encompassing the case studies, the guest lectures, the Apprentice-style tasks, the booze-luge, the burn-outs and high flyers, as well as all the advice, wisdom and folly he found in this ‘factory for unhappy people’. If you’ve always wanted to know hoe to get to the top, but wondered what it takes and exactly what it costs, this book will tell you.’An engaging, insightful portrait of HBS life and an excellent layman’s guide’ Economist’A particularly absorbing and entertaining read’ Financial Times’A funny and revealing insider’s view. . . his fascination is infectious’ Sunday Times Philip Delves Broughton has served as New York and Paris bureau chief for the Daily Telegraph and led its coverage of the 9/11 attacks on New York. He has also written for the FT, the Wall Street Journal, The Times and Spectator. In 2006, he received an MBA from Harvard Business Scho', '0000-00-00', 299, NULL, '123', 'https://www.tirryaq.com/wp-content/uploads/2020/12/81elX7I1qFL-270x414.jpg'),
(124, 203, 'A25', 'Who Moved My Cheese', 'Dr Spencer Johnson', '\r\nWith over 2.5 million copies sold worldwide, Who Moved My Cheese? is a simple parable that reveals profound truths\r\n\r\nIt is the amusing and enlightening story of four characters who live in a maze and look for cheese to nourish them and make them happy. Cheese is a metaphor for what you want to have in life, for example a good job, a loving relationship, money or possessions, health or spiritual peace of mind. The maze is where you look for what you want, perhaps the organisation you work in, or the family or community you live in. The problem is that the cheese keeps moving.\r\n\r\n', '1989-06-13', 139, NULL, '12', 'https://www.tirryaq.com/wp-content/uploads/2020/06/9780091816971-270x425.jpg'),
(125, 203, '', 'One Click', 'Richard L. Brandt', '\r\nAmazon’s business model is deceptively simple: Make online shopping so easy and convenient that customers won’t think twice. It almost can be summed up by the button on every page: “Buy now with one click.”\r\n\r\nWhy has Amazon been so successful? Much of it has to do with Jeff Bezos, the founder and CEO, whose unique combination of character traits and business strategy has driven Amazon to the top of the online retail world. Richard Brandt charts Bezos’s rise from computer nerd to world-changing entrepreneur.\r\nThrough interviews with Amazon employees, competitors, and observers, Brandt has deciphered how Bezos makes decisions. The story of Amazon’s ongoing evolution is a case study in how to reinvent an entire industry, and one that businesses today ignore at their peril.', '2012-06-08', 299, NULL, '56', 'https://www.tirryaq.com/wp-content/uploads/2020/10/11223478._SY475_-270x408.jpg'),
(126, 203, '', 'The Impulse Society', 'Paul Roberts', 'What do soaring debt, endemic narcissism, road rage, political attack ads and killer drones share in common? All are symptoms of a society that moves, reflexively and relentlessly, to exploit the fastest, most efficient means to any end, without regard to cost. This is the ‘impulse society’ in which we live.In every facet of postindustrial society – the way we eat, the way we communicate and entertain, the way we work, the way we court lovers and raise children, educate and govern – technology and affluence has let us reach our goals with a speed and efficiency unimaginable even a generation ago.But the result is not all milk, honey, and gold. Companies now reflexively maximise short-term gain at the expense of long-term success. Politicians resort with ever-greater speed to nasty campaign tactics, and can count on their damaging claims to spread before the facts catch up with them. Consumers engage in serial over-indulgence and pursue instant gratification of every whim with speed and greed. The costs of living this way are substantial: financial volatility, health epidemics, environmental exhaustion and political paralysis, to say nothing of a growing, gnawing dissatisfaction.In this epoch-defining book, Paul Roberts traces the roots of this problem, damningly revealing how it has permeated society, and cogently argues how it may, perhaps, still be reversed.\r\n\r\n', '2015-06-10', 145, NULL, '129', 'https://www.tirryaq.com/wp-content/uploads/2020/10/41w4-Gy3PcL._SX326_BO1204203200_-270x411.jpg'),
(127, 203, '', 'David And Goliath', 'Malcolm Gladwell', 'Explore the power of the underdog in Malcolm Gladwell’s dazzling examination of success, motivation, and the role of adversity in shaping our lives.\r\nThree thousand years ago on a battlefield in ancient Palestine, a shepherd boy felled a mighty warrior with nothing more than a stone and a sling, and ever since then the names of David and Goliath have stood for battles between underdogs and giants. David’s victory was improbable and miraculous. He shouldn’t have won', '2016-06-15', 134, NULL, '176', 'https://www.tirryaq.com/wp-content/uploads/2020/08/41H9ZCmjenL._SX331_BO1204203200_-270x405.jpg'),
(128, 203, '', 'The Persuaders', 'James Garvey', 'Almost every hour of every day, people will try to change your mind — and they don’t want you to notice, because none of it consists in giving you good reasons. You are nudged, anchored, and incentivized. Products are designed with the help of neuromarketing to appeal to unconscious minds; the taste of food is improved merely by brand association. Covert PR can start wars — the emotional testimony of fifteen year-old Nayirah which helped the case for the first Gulf War was assembled by PR firm Hill and Knowlton. Book covers adorned with favorable quotes are a powerful ‘social proof’, whether the quotes are real or bogus.\r\n\r\n', '2016-06-16', 257, NULL, '213', 'https://www.tirryaq.com/wp-content/uploads/2020/08/81lpl9QQlL-270x419.jpg'),
(129, 203, '', 'China’s Disruptors', 'Edward Tse', 'Alibaba wasn’t an outlier—it’s one of a rising tide of thriving Chinese companies, mostly but not exclusively in the technology sector. Overnight, its founder, Jack Ma, appeared on the same magazine covers as American entrepreneurial icons like Mark Zuckerberg. Ma was quickly followed by the founders of other previously little-known companies, such as Baidu, Tencent, and Xiaomi.\r\n\r\n', '2014-06-04', 139, NULL, '234', 'https://www.tirryaq.com/wp-content/uploads/2020/10/81ux4w04vGL-270x408.jpg'),
(130, 203, '', 'This Is Marketing', 'Seth Godin', 'Seth Godin has taught and inspired millions of entrepreneurs, marketers, leaders, and fans from all walks of life, via his blog, online courses, lectures, and bestselling books. He is the inventor of countless ideas that have made their way into mainstream business language, from Permission Marketing to Purple Cow to Tribes to The Dip.\r\n\r\n', '2016-06-01', 129, NULL, '89', 'https://www.tirryaq.com/wp-content/uploads/2021/01/71vseaezFCL-270x382.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`) VALUES
(201, 'History'),
(202, 'Kids'),
(203, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientId` int(11) NOT NULL,
  `firstName` char(110) DEFAULT NULL,
  `lastName` char(110) DEFAULT NULL,
  `email` char(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientId`, `firstName`, `lastName`, `email`, `password`, `adress`) VALUES
(2028, 'anas', 'beniycvh', 'anas@ben.com', 'gdrgfsdgv', 'maiami'),
(2054, 'Stella', 'Wise', 'zixo@mailinator.com', 'Pa$$w0rd!', 'Dolorum vel voluptat'),
(2051, 'Martena', 'Finley', 'nuqehop@mailinator.com', 'Pa$$w0rd!', 'Expedita dolor optio'),
(2052, 'Tallulah', 'Kidd', 'wycyhoza@mailinator.com', 'Pa$$w0rd!', 'Sit cupiditate laud'),
(2053, 'Hall', 'Marquez', 'gaty@mailinator.com', 'Pa$$w0rd!', 'Eum qui quam quod sa'),
(2050, 'Sara', 'Baldwin', 'byly@mailinator.com', 'Pa$$w0rd!', 'Ratione est officia'),
(2049, 'Natalie', 'House', 'rexoxudyxa@mailinator.com', 'Pa$$w0rd!', 'Ad sint praesentium');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `Email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(110) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `subject`, `message`) VALUES
('Rama Sutton', 'wavysupado@mailinator.com', 'In mollit minima con', 'Optio animi illo r'),
('Celeste Zamora', 'nuse@mailinator.com', 'Quis reprehenderit e', 'Consequuntur officia'),
('Ina Klein', 'hiqa@mailinator.com', 'Ea a sunt sunt ex id', 'Odit aut magni labor'),
('Ina Klein', 'hiqa@mailinator.com', 'Ea a sunt sunt ex id', 'Odit aut magni labor'),
('Hoyt York', 'huwitepuka@mailinator.com', 'Ex expedita voluptat', 'Mollitia quo deserun'),
('Jaime Ayers', 'tytyjy@mailinator.com', 'Minim vitae est et s', 'Ex cumque in at ad e'),
('Mikayla Lindsey', 'vaxi@mailinator.com', 'Duis laborum sint q', 'Natus atque voluptas');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `clientId` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `adress` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookId`),
  ADD KEY `FK_association3` (`categoryId`),
  ADD KEY `FKCode` (`code`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `FK_association1` (`clientId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderId`,`bookId`),
  ADD KEY `FK_association2` (`bookId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2055;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
