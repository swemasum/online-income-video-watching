-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 02:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `image_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `title`, `date`, `image_name`) VALUES
(1, '', '2019-04-03', '1554315254-9834-55881749_577557539393853_5482832933699977216_n.png'),
(2, '', '2019-04-03', '1554315261-2566-55881749_577557539393853_5482832933699977216_n.png'),
(3, '', '2019-04-03', '1554315266-2020-55881749_577557539393853_5482832933699977216_n.png'),
(4, '', '2019-04-03', '1554315273-5517-55881749_577557539393853_5482832933699977216_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `l_id` int(11) NOT NULL,
  `fb` text NOT NULL,
  `email` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`l_id`, `fb`, `email`, `youtube`) VALUES
(1, 'http://www.facebook.com/groups/339205579997646/', 'info.incomeonlinebd@gmail.com', 'https://www.youtube.com/channel/UCkZJxnojArLpoDDUL_ArFGw');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `phone`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Md Masum Billah', '01708611106', 'masum.swe.ndc@gmail.com', 'How are you', 'How is going everything', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `notice` text NOT NULL,
  `date` date NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `title`, `short_description`, `notice`, `date`, `file_name`) VALUES
(5, 'Upgrading payment', '', 'Great news everyone! We are increasing payment per video.\r\n              ', '2024-01-02', '1704222120-5372-Learning Journal 7 - MB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `n_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `notice` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payed`
--

CREATE TABLE `payed` (
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mayment_method` text NOT NULL,
  `pay_id` text NOT NULL,
  `payed_amount` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payed`
--

INSERT INTO `payed` (`p_id`, `user_id`, `mayment_method`, `pay_id`, `payed_amount`, `date`) VALUES
(20, 23, 'Hand Cash', '', 40, '2024-01-02'),
(22, 23, 'Bkash', '10', 15, '2024-01-02'),
(23, 23, 'DBBL', '', 5, '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `amount`, `date`) VALUES
(1, 30, '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `r_id` int(11) NOT NULL,
  `refered_by_id` int(11) NOT NULL,
  `refered_id` text NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`r_id`, `refered_by_id`, `refered_id`, `amount`, `date`) VALUES
(14, 24, '8h9oBL', 50, '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `reg_amount`
--

CREATE TABLE `reg_amount` (
  `r_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reg_amount`
--

INSERT INTO `reg_amount` (`r_id`, `amount`, `date`) VALUES
(1, 50, '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `r_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`r_id`, `user_id`, `date`) VALUES
(6, 23, '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone_no` text NOT NULL,
  `email` text NOT NULL,
  `payment_type` text NOT NULL,
  `bd_no` text NOT NULL,
  `password` text NOT NULL,
  `security_ans` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL,
  `ref_num` text NOT NULL,
  `reg_payment_type` text NOT NULL,
  `txid` text NOT NULL,
  `ref_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `address`, `phone_no`, `email`, `payment_type`, `bd_no`, `password`, `security_ans`, `status`, `date`, `ref_num`, `reg_payment_type`, `txid`, `ref_id`) VALUES
(23, 'Md Masum Billah', 'Yo-Kila 11 C 10', '+358 417216890', 'masum.swe.ndc@gmail.com', 'DBBL', '01708611106', '112323', 'Red', 'active', '2024-01-02', '8h9oBL', 'DBBL', '1DBXA2', ''),
(24, 'Farhana Tuly', 'dhaka', '0137555589', 'tultuly@gmail.com', 'DBBL', '0137555589', '112323', 'Green', 'active', '2024-01-02', 'rHkH93', 'DBBL', '1DBXA2', '8h9oBL');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `title`, `description`, `link`, `image`, `date`) VALUES
(77, 'Sesh Dekha | ??? ????', 'Song : Sesh Dekha\r\nSinger : Topu \r\nLyric & Tune : Topu\r\nMusic : Rafa\r\nAlbum : Shey ke\r\nLanguage : Bangla\r\nLabel : Agniveena', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yci475Vwc10?si=_vKrre4ii_2EEyHe\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1704218181-6507-vr-travel-tourism.jpg', '2024-01-02'),
(81, 'Tore Mon Diya (Protikkhar Prohor)', 'This song was First time Released in 2009 as an unreleased track @ Radio Amar \r\n\r\nMoruvumi\'s debut album \"Jiboner Srote\" is available on, \r\nRelease Date: 21th June, 2013\r\nCopyright © 2013 Moruvumi. All Rights Reserved.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eMCzy25hqxk?si=P6ywmEuqrGtFWmJK&amp;start=288\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1704222656-9981-Screenshot 2024-01-02 220712.png', '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `v_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`v_id`, `user_id`, `video_id`, `amount`, `date`) VALUES
(6806, 23, 77, 30, '2024-01-02'),
(6807, 23, 81, 30, '2024-01-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `payed`
--
ALTER TABLE `payed`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `reg_amount`
--
ALTER TABLE `reg_amount`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT for table `payed`
--
ALTER TABLE `payed`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reg_amount`
--
ALTER TABLE `reg_amount`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6808;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
