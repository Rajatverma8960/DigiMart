-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 11:32 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_id_list`
--

CREATE TABLE `auction_id_list` (
  `owner_id` varchar(255) NOT NULL,
  `prod_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auction_product`
--

CREATE TABLE `auction_product` (
  `prod_name` varchar(300) NOT NULL,
  `prod_id` varchar(15) NOT NULL,
  `prod_format` varchar(50) NOT NULL,
  `prod_type` varchar(10) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `soft` varchar(300) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `short_disp` varchar(1500) NOT NULL,
  `long_disp` varchar(1500) NOT NULL,
  `upload_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction_product`
--

INSERT INTO `auction_product` (`prod_name`, `prod_id`, `prod_format`, `prod_type`, `product`, `soft`, `cost`, `short_disp`, `long_disp`, `upload_date`, `start_date`, `end_date`) VALUES
('poushe', '918', 'jpg', 'Image', 'auction_upload/rajatverma8960@gmail.com/Porsche-911-turbo-S-911-2013-drive-my-test_54.jpg', 'photoshop', '896503', 'Whether youre new to programming or an experienced developer\r\n', 'Whether youre new to programming or an experienced developer, we have a range of courses to teach you Android app development, from getting started to optimizing app performance.', '2017-09-18', '2017-09-01', '2017-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `name` varchar(25) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`name`, `id`) VALUES
('Bussiness', 666),
('Digital marketing', 222),
('Graphic Design', 111),
('Programming & Tech', 555),
('Video & Animation', 444),
('Writing & Tranlation', 333);

-- --------------------------------------------------------

--
-- Table structure for table `gmailusers`
--

CREATE TABLE `gmailusers` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gmailusers`
--

INSERT INTO `gmailusers` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(0, 'google', '105657170975563570176', 'rajatvermaitworks', '1647238', 'rajat.verma@mca.christuniversity.in', 'male', 'en', 'https://lh5.googleusercontent.com/-Iq5eR3BeR3w/AAAAAAAAAAI/AAAAAAAAAE0/EyWYROiVGy4/photo.jpg', 'https://plus.google.com/105657170975563570176', '2017-09-11 19:34:39', '2017-09-22 20:58:07'),
(0, 'google', '115261033890736297467', 'rajat', 'verma', 'rajatverma8960@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/-owrkGm8nfG0/AAAAAAAAAAI/AAAAAAAAADo/c8pQWFvH4RY/photo.jpg', '', '2017-09-11 19:37:13', '2017-09-25 16:49:27'),
(0, 'google', '113340213766513949360', 'PRATIKSHA RAMESH SISODIA', '1647237', 'pratiksha.sisodia@mca.christuniversity.in', '', 'en', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '2017-09-14 07:34:19', '2017-09-14 07:34:19'),
(0, 'google', '114999831650048875101', 'KEVIN SAVIO DSOUZA', '1647219', 'kevin.dsouza@mca.christuniversity.in', '', 'en', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '2017-09-14 07:47:22', '2017-09-14 07:47:22'),
(0, 'google', '115656783334101982678', 'Rajat', 'Verma', 'rajatroxx480@gmail.com', 'male', 'en', 'https://lh4.googleusercontent.com/-uk4TRPIBcmU/AAAAAAAAAAI/AAAAAAAAAoY/8oVckweuN90/photo.jpg', 'https://plus.google.com/115656783334101982678', '2017-09-22 17:37:36', '2017-09-23 17:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `message_module`
--

CREATE TABLE `message_module` (
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `prod_id` varchar(10) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date_x` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_module`
--

INSERT INTO `message_module` (`sender`, `reciever`, `prod_id`, `message`, `date_x`, `status`) VALUES
('rajatroxx480@gmail.com', 'rajatverma8960@gmail.com', 'M5', 'With our smart retry system, these steps can be avoided and instead the customer \nis redirected to an intermediary page showing the reason of the failure. He \ngets up to three attempts to use the same payment option or choose an \nalternate payment option to complete the purchase successfully.', '2017-09-21', '1'),
('rajatroxx480@gmail.com', 'rajatverma8960@gmail.com', 'GT3', 'Manufacturerâ€™s Suggested Retail Price. Excludes options; taxes; title; registration; delivery, processing and handling fee; dealer charges. Dealer sets actual selling price', '2017-09-22', '0'),
('rajatroxx480@gmail.com', 'rajatverma8960@gmail.com', 'GT3', 'Manufacturerâ€™s Suggested Retail Price. Excludes options; taxes; title; registration; delivery, processing and handling fee; dealer charges. Dealer sets actual selling price', '2017-09-22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_id_list`
--

CREATE TABLE `product_id_list` (
  `owner_id` varchar(255) NOT NULL,
  `prod_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_id_list`
--

INSERT INTO `product_id_list` (`owner_id`, `prod_id`) VALUES
('rajatverma8960@gmail.com', 'GT3'),
('rajatverma8960@gmail.com', 'M5');

-- --------------------------------------------------------

--
-- Table structure for table `product_upload`
--

CREATE TABLE `product_upload` (
  `prod_name` varchar(50) NOT NULL,
  `prod_id` varchar(10) NOT NULL,
  `prod_format` varchar(10) NOT NULL,
  `prod_type` varchar(10) NOT NULL,
  `product` varchar(500) NOT NULL,
  `soft` varchar(500) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `short_disp` varchar(3000) NOT NULL,
  `long_disp` varchar(5000) NOT NULL,
  `sub_cat_id` varchar(10) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_upload`
--

INSERT INTO `product_upload` (`prod_name`, `prod_id`, `prod_format`, `prod_type`, `product`, `soft`, `cost`, `short_disp`, `long_disp`, `sub_cat_id`, `upload_date`) VALUES
('pourche', '154', 'jpg', 'Image', 'pro_upload/rajatverma8960@gmail.com/1.jpg', 'maya', '4582655', 'The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.', 'The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.', '1111', '2017-09-19'),
('poushe', '918', 'jpg', 'Image', 'pro_upload/rajatverma8960@gmail.com/Porsche-911-turbo-S-911-2013-drive-my-test_54.jpg', 'maya', '457896', 'Whether youre new to programming or an experienced developer, we have a range of courses to teach you Android app development, from getting started to optimizing app performance.', 'Whether youre new to programming or an experienced developer, we have a range of courses to teach you Android app development, from getting started to optimizing app performance.', 'Logo Desig', '2017-09-17'),
('pourche', 'GT3', 'jpg', 'Image', 'pro_upload/rajatverma8960@gmail.com/porsche-model.png', 'photoshop', '458', 'Manufacturerâ€™s Suggested Retail Price. Excludes options; taxes; title; registration; delivery, processing and handling fee; dealer charges. Dealer sets actual selling price', 'Manufacturerâ€™s Suggested Retail Price. Excludes options; taxes; title; registration; delivery, processing and handling fee; dealer charges. Dealer sets actual selling price', '1117', '2017-09-22'),
('BMW', 'M5', 'jpg', 'image', 'pro_upload/rajatverma8960@gmail.com/1.jpg', 'maya', '89562', 'x2', 'x3', '1115', '2017-09-21'),
('BMW', 'z4', 'jpg', 'image', 'pro_upload/rajatverma8960@gmail.com/1.jpg', 'maya', '89562', 'x2', 'x3', '1115', '2017-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_table`
--

CREATE TABLE `sub_category_table` (
  `sub_cat_name` varchar(25) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `sub_cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_table`
--

INSERT INTO `sub_category_table` (`sub_cat_name`, `cat_id`, `sub_cat_id`) VALUES
('Logo', 111, 1111),
('Bussiness card', 111, 1112),
('Illustration', 111, 1113),
('Cartoon', 111, 1114),
('Book cover', 111, 1115),
('Photoshop', 111, 1116),
('2d & 3d model', 111, 1117),
('Email Marketing', 222, 2221),
('SEO', 222, 2222),
('Content making', 222, 2223),
('Mobile advertisement', 222, 2224),
('Proof Reading & editing', 333, 3331),
('Translation', 333, 3332),
('Resume & cover letter', 333, 3333),
('Creative writing', 333, 3334),
('Article & Blog Post', 333, 3335),
('Promotional & brand video', 444, 4441),
('Animation Character & Mod', 444, 4442),
('Spoke person & testimonia', 444, 4443),
('Worpress', 555, 5551),
('Website builder', 555, 5552),
('E-commerce', 555, 5553),
('User testing', 555, 5554),
('Quality Accurance', 555, 5555),
('Career Advice', 666, 6661),
('Presentation', 666, 6662),
('Market Research', 666, 6663),
('Bussiness Tips', 666, 6664),
('Legal Consultancy', 666, 6665),
('Finance', 666, 6666);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '1399120846843212', 'Rajat', 'Verma', 'rajatroxx480@gmail.com', 'male', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/15698225_1195861837169115_4280883750410170592_n.jpg?oh=82373fade38a8f3b1419e1ed34f22ba4&oe=5A60C6F8', 'https://www.facebook.com/app_scoped_user_id/1399120846843212/', '2017-09-11 21:20:08', '2017-09-11 21:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_cat_disp`
--

CREATE TABLE `user_cat_disp` (
  `user_id` varchar(255) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `disp` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cat_disp`
--

INSERT INTO `user_cat_disp` (`user_id`, `cat_name`, `disp`) VALUES
('rajat.verma@mca.christuniversity.in', 'Graphic Design', 'You saw before that a Python list can contain practically anything; even other lists! To subset lists of lists, you can use the same technique as before: square brackets. Try out the commands in the following code sample in the IPython Shell:'),
('rajatverma8960@gmail.com', 'Bussiness', 'You saw before that a Python list can contain practically anything; even other lists! To subset lists of lists, you can use the same technique as before: square brackets. Try out the commands in the following code sample in the IPython Shell:'),
('rajatroxx480@gmail.com', 'Graphic Design', 'All the products will be fetched from the products table and listed with PayPal Buy Now button. To use PayPal standard payment gateway, you need to submit a form with some predefined PayPal HTML form field variable'),
('rajatroxx480@gmail.com', 'Writing & Tranlation', 'All the products will be fetched from the products table and listed with PayPal Buy Now button. To use PayPal standard payment gateway, you need to submit a form with some predefined PayPal HTML form field variable');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(10) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `user_type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`fname`, `lname`, `dob`, `country`, `email_id`, `contact`, `experience`, `description`, `user_type`) VALUES
('rajatvermaitworks', '1647238', '1993-10-01', 'india', 'rajat.verma@mca.christuniversity.in', '8960516166', '1 yr', 'You saw before that a Python list can contain practically anything; even other lists! To subset lists of lists, you can use the same technique as before: square brackets. Try out the commands in the following code sample in the IPython Shell:', 1),
('rajat', 'verma', '1993-10-10', 'india', 'rajatverma8960@gmail.com', '860516166', '1 yr', 'You saw before that a Python list can contain practically anything; even other lists! To subset lists of lists, you can use the same technique as before: square brackets. Try out the commands in the following code sample in the IPython Shell:', 1),
('PRATIKSHA RAMESH SIS', '1647237', '1995-01-03', 'India', 'pratiksha.sisodia@mca.christuniversity.in', '155482215', 'null', 'hfusirfw', 1),
('KEVIN SAVIO DSOUZA', '1647219', '1994-08-27', 'India', 'kevin.dsouza@mca.christuniversity.in', '987654432', 'asd', 'asdsafasd', 1),
('Rajat', 'Verma', '1993-10-01', 'india', 'rajatroxx480@gmail.com', '8960516166', '1 year', 'jsdf ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_cat`
--

CREATE TABLE `user_sub_cat` (
  `user_id` varchar(255) NOT NULL,
  `sub_cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_cat`
--

INSERT INTO `user_sub_cat` (`user_id`, `sub_cat_id`) VALUES
('rajat.verma@mca.christuniversity.in', 1113),
('rajat.verma@mca.christuniversity.in', 1114),
('rajatverma8960@gmail.com', 6661),
('rajatverma8960@gmail.com', 6662),
('pratiksha.sisodia@mca.christuniversity.in', 1112),
('pratiksha.sisodia@mca.christuniversity.in', 2223),
('pratiksha.sisodia@mca.christuniversity.in', 3331),
('pratiksha.sisodia@mca.christuniversity.in', 3334),
('pratiksha.sisodia@mca.christuniversity.in', 4442),
('pratiksha.sisodia@mca.christuniversity.in', 5554),
('pratiksha.sisodia@mca.christuniversity.in', 6663),
('kevin.dsouza@mca.christuniversity.in', 1116);

-- --------------------------------------------------------

--
-- Table structure for table `user_uploads`
--

CREATE TABLE `user_uploads` (
  `user_id` varchar(225) NOT NULL,
  `sub_cat_id` varchar(10) NOT NULL,
  `link` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_uploads`
--

INSERT INTO `user_uploads` (`user_id`, `sub_cat_id`, `link`, `type`) VALUES
('rajatverma8960@gmail.com', '6661', 'uploads/rajatverma8960@gmail.com/porsche-carbon-braided-wheels-article-ogi.jpg', 'image'),
('rajatverma8960@gmail.com', '6661', 'uploads/rajatverma8960@gmail.com/Porsche-911-turbo-S-911-2013-drive-my-test_54.jpg', 'video'),
('rajatverma8960@gmail.com', '6661', 'uploads/rajatverma8960@gmail.com/DMT.pdf', 'file'),
('rajatverma8960@gmail.com', '6661', 'https://stackoverflow.com/questions/2701041/how-to-set-form-action-through-javascript', 'link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_id_list`
--
ALTER TABLE `auction_id_list`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `auction_product`
--
ALTER TABLE `auction_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product_id_list`
--
ALTER TABLE `product_id_list`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_upload`
--
ALTER TABLE `product_upload`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `sub_category_table`
--
ALTER TABLE `sub_category_table`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD UNIQUE KEY `sub_cat_name` (`sub_cat_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
