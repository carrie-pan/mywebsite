--
-- Database: `sortable`
--
CREATE DATABASE `sortable` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sortable`;

-- --------------------------------------------------------

--
-- Table structure for table `immediate_update`
--

CREATE TABLE IF NOT EXISTS `immediate_update` (
  `idimmediate_update` int(11) NOT NULL AUTO_INCREMENT,
  `pin` varchar(32) NOT NULL,
  `name` varchar(60) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sdesc` varchar(500) NOT NULL,
  PRIMARY KEY (`idimmediate_update`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `immediate_update`
--

INSERT INTO `immediate_update` (`idimmediate_update`, `pin`, `name`, `title`, `sdesc`) VALUES
(1, '5a7142c0ba97315957cbe01b7c4e4844', 'name.5', 'title', 'sdesc');

-- --------------------------------------------------------

--
-- Table structure for table `interface`
--

CREATE TABLE IF NOT EXISTS `interface` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pin` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `interface`
--

INSERT INTO `interface` (`id`, `pin`, `name`, `position`) VALUES
(1, 'asdasdasdasddas', 'apple', 1),
(2, 'gfffhdffsdfsdsdf', 'orange', 2),
(3, 'asdasdasffsrrt', 'banana', 3),
(4, 'asdasffgtyy', 'grape', 4),
(5, '098F6BCD4621D373CADE4E832627B4F6', '測試', 5);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_title` varchar(50) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'test', 'test', 'test'),
(2, 'test1', 'test1', 'test1'),
(3, 'test2', 'test2', 'test2');
--
-- Database: `test`
--
CREATE DATABASE `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Sex` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`Id`, `Name`, `Sex`) VALUES
(1, 'Carrie', 'F'),
(2, 'Pan', '456');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE IF NOT EXISTS `html` (
  `idhtml` int(11) NOT NULL AUTO_INCREMENT,
  `html` text NOT NULL,
  PRIMARY KEY (`idhtml`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`idhtml`, `html`) VALUES
(1, '<h1>John &amp; &#039;Adams&#039;</h1>');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `idtest` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(3) NOT NULL,
  PRIMARY KEY (`idtest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`idtest`, `position`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `idtest1` int(11) NOT NULL AUTO_INCREMENT,
  `key` text NOT NULL,
  PRIMARY KEY (`idtest1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`idtest1`, `key`) VALUES
(1, '1#2'),
(2, '2#1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
