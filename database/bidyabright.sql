-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 11:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidyabright`
--

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_animation`
--

CREATE TABLE `html_sql_table_animation` (
  `id` int(50) NOT NULL,
  `Animation_Heading` varchar(100) NOT NULL,
  `Animation_Paragraph` varchar(256) NOT NULL,
  `Animation_Code` varchar(256) NOT NULL,
  `Animation_Output` varchar(256) NOT NULL,
  `Animation_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_animation`
--

INSERT INTO `html_sql_table_animation` (`id`, `Animation_Heading`, `Animation_Paragraph`, `Animation_Code`, `Animation_Output`, `Animation_Note`) VALUES
(4, 'ANIMATION', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s'),
(5, 'ANIMATION1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_codeingtags`
--

CREATE TABLE `html_sql_table_codeingtags` (
  `id` int(50) NOT NULL,
  `Codeing_Tag_Heading` varchar(100) NOT NULL,
  `Codeing_Tag_Paragraph` varchar(256) NOT NULL,
  `Codeing_Tag_Code` varchar(256) NOT NULL,
  `Codeing_Tag_Output` varchar(256) NOT NULL,
  `Codeing_Tag_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_codeingtags`
--

INSERT INTO `html_sql_table_codeingtags` (`id`, `Codeing_Tag_Heading`, `Codeing_Tag_Paragraph`, `Codeing_Tag_Code`, `Codeing_Tag_Output`, `Codeing_Tag_Note`) VALUES
(81, 'Codeing Tags', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol', '&lt;script type=&quot;text/javascript&quot;&gt;&lt;br /&gt;<br />\r\n&lt;!--&lt;br /&gt;<br />\r\nfunction displayMsg()&lt;br /&gt;<br />\r\n{&lt;br /&gt;<br />\r\nalert(&quot;Hello World!&quot;)&lt;br /&gt;<br />\r\n}&lt;br /&gt;<br />\r\n//--&gt;&lt;br /&gt;<br />\r\n', 'output.jpg', 'et, convallis sodales mi. Nulla in imperdiet eros, nec convallis turpis. Curabitur ullamcorper enim sit amet velit venenatis tincidunt. Duis molestie, felis posuere tristique dictum, ligula dui lobortis dolor, sit'),
(82, 'Codeing Tags', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol', '&lt;script type=&quot;text/javascript&quot;&gt;<br />\r\n&lt;!--<br />\r\nfunction displayMsg()<br />\r\n{<br />\r\nalert(&quot;Hello World!&quot;)<br />\r\n}<br />\r\n//--&gt;<br />\r\n&lt;/script&gt; ', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol'),
(83, 'Link1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'o tortor sollicitudin lectus, nec dapibus nisi lorem ut libero. Duis finibus consectetur leo, id tempus erat efficitur sed. Aliquam erat volutpat. Ut sollicitudin odio libero, at lacinia diam vehicula nec. Etiam venenatis malesuada dictum. In leo justo, ph'),
(84, 'GRID VIEW1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_font`
--

CREATE TABLE `html_sql_table_font` (
  `id` int(50) NOT NULL,
  `Font_Heading` varchar(100) NOT NULL,
  `Font_Paragraph` varchar(256) NOT NULL,
  `Font_Code` varchar(256) NOT NULL,
  `Font_Output` varchar(256) NOT NULL,
  `Font_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_font`
--

INSERT INTO `html_sql_table_font` (`id`, `Font_Heading`, `Font_Paragraph`, `Font_Code`, `Font_Output`, `Font_Note`) VALUES
(4, 'FONT', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'tudin lectus, nec dapibus nisi lorem ut libero. Duis finibus consectetur leo, id tempus erat efficitur sed. Aliquam erat volutpat. Ut sollicitudin odio libero, at lacinia diam vehicula nec. Etiam venenatis malesuada dictum. In leo justo, pharetr'),
(5, 'FONT1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'rutrum vitae. Aliquam malesuada nulla urna, ac maximus est gravida eget. Vestibulum tempor neque id est pulvinar ullamcorper. Duis rhoncus, risus scelerisque cursus consequat, libero tortor sollicitudin lectus, nec dapibus nisi lorem ut libero. Duis finibu');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_form`
--

CREATE TABLE `html_sql_table_form` (
  `id` int(50) NOT NULL,
  `Form_Heading` varchar(100) NOT NULL,
  `Form_Paragraph` varchar(256) NOT NULL,
  `Form_Code` varchar(256) NOT NULL,
  `Form_Output` varchar(256) NOT NULL,
  `Form_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_form`
--

INSERT INTO `html_sql_table_form` (`id`, `Form_Heading`, `Form_Paragraph`, `Form_Code`, `Form_Output`, `Form_Note`) VALUES
(1, 'Form', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol', '&lt;script type=&quot;text/javascript&quot;&gt;<br />\r\n&lt;!--<br />\r\nfunction displayMsg()<br />\r\n{<br />\r\nalert(&quot;Hello World!&quot;)<br />\r\n}<br />\r\n//--&gt;<br />\r\n&lt;/script&gt;', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol'),
(2, 'FormA1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol', '<script type=\"text/javascript\"><br /><!--<br />function displayMsg()<br />{<br />alert(\"Hello World!\")<br />}<br />//--><br /></script>', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in posuere felis. Aenean vel tristique libero. Nullam elementum est ipsum, quis blandit magna faucibus blandit. Etiam venenatis condimentum massa, vitae sagittis massa tempus in. Fusce non mol');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_frame`
--

CREATE TABLE `html_sql_table_frame` (
  `id` int(50) NOT NULL,
  `Frame_Heading` varchar(100) NOT NULL,
  `Frame_Paragraph` varchar(256) NOT NULL,
  `Frame_Code` varchar(256) NOT NULL,
  `Frame_Output` varchar(256) NOT NULL,
  `Frame_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_frame`
--

INSERT INTO `html_sql_table_frame` (`id`, `Frame_Heading`, `Frame_Paragraph`, `Frame_Code`, `Frame_Output`, `Frame_Note`) VALUES
(1, 'safsf', 'safsaf', 'safsafsa', '', 'fsafsa');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_gridview`
--

CREATE TABLE `html_sql_table_gridview` (
  `id` int(50) NOT NULL,
  `Gridview_Heading` varchar(100) NOT NULL,
  `Gridview_Paragraph` varchar(256) NOT NULL,
  `Gridview_Code` varchar(256) NOT NULL,
  `Gridview_Output` varchar(256) NOT NULL,
  `Gridview_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_gridview`
--

INSERT INTO `html_sql_table_gridview` (`id`, `Gridview_Heading`, `Gridview_Paragraph`, `Gridview_Code`, `Gridview_Output`, `Gridview_Note`) VALUES
(3, 'GRID VIEW', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />\r\n', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis'),
(4, 'GRID VIEW2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />\r\n', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis'),
(5, 'GRID VIEW 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />\r\n', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis'),
(6, 'GRID CIEW 4', '\nv,mx\nvLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />\r\n', 'output.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non nisi sit amet magna vehicula posuere. Phasellus consectetur aliquam nunc vel elementum. Morbi egestas erat feugiat nulla dignissim, et dictum elit finibus. Donec bibendum condimentum dignis');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_link`
--

CREATE TABLE `html_sql_table_link` (
  `id` int(50) NOT NULL,
  `Link_Heading` varchar(100) NOT NULL,
  `Link_Paragraph` varchar(256) NOT NULL,
  `Link_Code` varchar(256) NOT NULL,
  `Link_Output` varchar(256) NOT NULL,
  `Link_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_link`
--

INSERT INTO `html_sql_table_link` (`id`, `Link_Heading`, `Link_Paragraph`, `Link_Code`, `Link_Output`, `Link_Note`) VALUES
(4, 'LINK', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam malesuada nulla urna, ac maximus est gravida eget. Vestibulum tempor neque id est pulvinar ullamcorper. Duis rhoncus, risus scelerisque cursus consequat, libero tortor sollicitudin lectus, nec dapibus nisi lorem ut libero. Duis finibus consectetur '),
(5, 'LINK1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'm rutrum vitae. Aliquam malesuada nulla urna, ac maximus est gravida eget. Vestibulum tempor neque id est pulvinar ullamcorper. Duis rhoncus, risus scelerisque cursus consequat, libero tortor sollicitudin lectus, nec dapibus nisi lorem ut libero. Duis fini');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_others`
--

CREATE TABLE `html_sql_table_others` (
  `id` int(50) NOT NULL,
  `Other_Heading` varchar(100) NOT NULL,
  `Other_Paragraph` varchar(256) NOT NULL,
  `Other_Code` varchar(256) NOT NULL,
  `Other_Output` varchar(256) NOT NULL,
  `Other_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_others`
--

INSERT INTO `html_sql_table_others` (`id`, `Other_Heading`, `Other_Paragraph`, `Other_Code`, `Other_Output`, `Other_Note`) VALUES
(1, 'OTHERS', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s'),
(2, 'OTHERS1', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s', '&lt;a href=&quot;mailto:someone@example.com?cc=someoneelse@example.com&amp;bcc=andsomeoneelse@example.com<br />\r\n&amp;subject=Summer%20Party&amp;body=You%20are%20invited%20to%20a%20big%20summer%20party!&quot;&gt;Send mail!&lt;/a&gt;<br />', 'output.jpg', 'Aliquam egestas venenatis nunc, at placerat lectus sollicitudin eu. Nam urna justo, dictum non turpis vel, laoreet auctor nibh. In quis vulputate quam, quis malesuada risus. Proin a dolor tristique, dictum diam in, fermentum nisi. Nullam ultricies tortor s');

-- --------------------------------------------------------

--
-- Table structure for table `html_sql_table_plugins`
--

CREATE TABLE `html_sql_table_plugins` (
  `id` int(50) NOT NULL,
  `Plugins_Heading` varchar(100) NOT NULL,
  `Plugins_Paragraph` varchar(256) NOT NULL,
  `Plugins_Code` varchar(256) NOT NULL,
  `Plugins_Output` varchar(256) NOT NULL,
  `Plugins_Note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html_sql_table_plugins`
--

INSERT INTO `html_sql_table_plugins` (`id`, `Plugins_Heading`, `Plugins_Paragraph`, `Plugins_Code`, `Plugins_Output`, `Plugins_Note`) VALUES
(7, 'gjhkgjhgjhg', 'jghkjgkjhkj', 'jhlkjhlkjlkjljl', 'IMG_20180902_171457.jpg', ''),
(8, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'balakrishna', 'balakrishnadas100@gmail.com', '2591149fd1bb138104ab5b774e0e8338', '2018-12-11 01:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `html_sql_table_animation`
--
ALTER TABLE `html_sql_table_animation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_codeingtags`
--
ALTER TABLE `html_sql_table_codeingtags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_font`
--
ALTER TABLE `html_sql_table_font`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_form`
--
ALTER TABLE `html_sql_table_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_frame`
--
ALTER TABLE `html_sql_table_frame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_gridview`
--
ALTER TABLE `html_sql_table_gridview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_link`
--
ALTER TABLE `html_sql_table_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_others`
--
ALTER TABLE `html_sql_table_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html_sql_table_plugins`
--
ALTER TABLE `html_sql_table_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `html_sql_table_animation`
--
ALTER TABLE `html_sql_table_animation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `html_sql_table_codeingtags`
--
ALTER TABLE `html_sql_table_codeingtags`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `html_sql_table_font`
--
ALTER TABLE `html_sql_table_font`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `html_sql_table_form`
--
ALTER TABLE `html_sql_table_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `html_sql_table_frame`
--
ALTER TABLE `html_sql_table_frame`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `html_sql_table_gridview`
--
ALTER TABLE `html_sql_table_gridview`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `html_sql_table_link`
--
ALTER TABLE `html_sql_table_link`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `html_sql_table_others`
--
ALTER TABLE `html_sql_table_others`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `html_sql_table_plugins`
--
ALTER TABLE `html_sql_table_plugins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
