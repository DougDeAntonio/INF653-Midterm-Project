-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 09:13 PM
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
-- Database: `quotes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'Winston Churchill'),
(2, 'Walt Disney'),
(3, 'Nelson Mandela'),
(4, 'Steve Jobs'),
(5, 'Theodore Roosevelt'),
(6, 'Henry Ford'),
(7, 'Maya Angelou'),
(8, 'Franklin D. Roosevelt'),
(9, 'Helen Keller'),
(10, 'Albert Einstein'),
(11, 'Martin Luther King Jr.'),
(12, 'John Wooden'),
(13, 'Mark Twain'),
(14, 'Thomas A. Edison'),
(15, 'Colin Powell'),
(16, 'Vince Lombardi'),
(17, 'William James'),
(18, 'Ayn Rand'),
(19, 'Michael Jordan'),
(20, 'Abraham Lincoln'),
(21, 'Winston Churchill'),
(22, 'Walt Disney'),
(23, 'Nelson Mandela'),
(24, 'Steve Jobs'),
(25, 'Theodore Roosevelt'),
(26, 'Henry Ford'),
(27, 'Maya Angelou'),
(28, 'Franklin D. Roosevelt'),
(29, 'Helen Keller'),
(30, 'Albert Einstein'),
(31, 'Martin Luther King Jr.'),
(32, 'John Wooden'),
(33, 'Mark Twain'),
(34, 'Thomas A. Edison'),
(35, 'Colin Powell'),
(36, 'Vince Lombardi'),
(37, 'William James'),
(38, 'Ayn Rand'),
(39, 'Michael Jordan'),
(40, 'Abraham Lincoln'),
(41, 'Franklin D. Roosevelt'),
(42, 'Sam Levenson'),
(43, 'Walt Whitman'),
(44, 'Eleanor Roosevelt'),
(45, 'Confucius'),
(46, 'George Addair'),
(47, 'Arthur Ashe'),
(48, 'Shelby Foote'),
(49, 'Norman Vaughan'),
(50, 'Walt Disney'),
(51, 'Steve Jobs'),
(52, 'William James'),
(53, 'Theodore Roosevelt'),
(54, 'C.S. Lewis'),
(55, 'Japanese Proverb'),
(56, 'Roy T. Bennett'),
(57, 'Ralph Marston'),
(58, 'Nelson Mandela'),
(59, 'Zig Ziglar'),
(60, 'Franklin D. Roosevelt'),
(61, 'Sam Levenson'),
(62, 'Walt Whitman'),
(63, 'Eleanor Roosevelt'),
(64, 'Confucius'),
(65, 'George Addair'),
(66, 'Arthur Ashe'),
(67, 'Shelby Foote'),
(68, 'Norman Vaughan'),
(69, 'Walt Disney'),
(70, 'Steve Jobs'),
(71, 'William James'),
(72, 'Theodore Roosevelt'),
(73, 'C.S. Lewis'),
(74, 'Japanese Proverb'),
(75, 'Roy T. Bennett'),
(76, 'Ralph Marston'),
(77, 'Nelson Mandela'),
(78, 'Zig Ziglar'),
(79, 'Franklin D. Roosevelt'),
(80, 'Sam Levenson'),
(81, 'Walt Whitman'),
(82, 'Eleanor Roosevelt'),
(83, 'Confucius'),
(84, 'George Addair'),
(85, 'Arthur Ashe'),
(86, 'Shelby Foote'),
(87, 'Norman Vaughan'),
(88, 'Walt Disney'),
(89, 'Steve Jobs'),
(90, 'William James'),
(91, 'Theodore Roosevelt'),
(92, 'C.S. Lewis'),
(93, 'Japanese Proverb'),
(94, 'Roy T. Bennett'),
(95, 'Ralph Marston'),
(96, 'Nelson Mandela'),
(97, 'Zig Ziglar'),
(98, 'Bethenny Frankel'),
(99, 'Michael Pollan'),
(100, 'Ann Wigmore'),
(101, 'Hippocrates'),
(102, 'Unknown'),
(103, 'Jim Rohn'),
(104, 'Robert Urich'),
(105, 'La Rochefoucauld'),
(106, 'Chinese Proverb'),
(107, 'Ralph Waldo Emerson'),
(108, 'Auguste Escoffier'),
(109, 'Anonymous'),
(110, 'Maimonides'),
(111, 'Mahatma Gandhi'),
(112, 'Winston Churchill'),
(113, 'Heather Morgan'),
(114, 'Bill Gates'),
(115, 'Steve Jobs'),
(116, 'Douglas Adams'),
(117, 'Grace Hopper'),
(118, 'Sydney J. Harris'),
(119, 'Nathan Myhrvold'),
(120, 'Unknown'),
(121, 'Isaac Asimov'),
(122, 'Mark Zuckerberg'),
(123, 'Stewart Brand'),
(124, 'Arthur C. Clarke'),
(125, 'Nicholas Negroponte'),
(126, 'Donald Knuth'),
(127, 'Franklin D. Roosevelt'),
(128, 'Sam Levenson'),
(129, 'Walt Whitman'),
(130, 'Eleanor Roosevelt'),
(131, 'Confucius'),
(132, 'George Addair'),
(133, 'Arthur Ashe'),
(134, 'Shelby Foote'),
(135, 'Norman Vaughan'),
(136, 'Walt Disney'),
(137, 'Steve Jobs'),
(138, 'William James'),
(139, 'Theodore Roosevelt'),
(140, 'C.S. Lewis'),
(141, 'Japanese Proverb'),
(142, 'Roy T. Bennett'),
(143, 'Ralph Marston'),
(144, 'Nelson Mandela'),
(145, 'Zig Ziglar'),
(146, 'Bethenny Frankel'),
(147, 'Michael Pollan'),
(148, 'Ann Wigmore'),
(149, 'Hippocrates'),
(150, 'Unknown'),
(151, 'Jim Rohn'),
(152, 'Robert Urich'),
(153, 'La Rochefoucauld'),
(154, 'Chinese Proverb'),
(155, 'Ralph Waldo Emerson'),
(156, 'Auguste Escoffier'),
(157, 'Anonymous'),
(158, 'Maimonides'),
(159, 'Mahatma Gandhi'),
(160, 'Winston Churchill'),
(161, 'Heather Morgan'),
(162, 'Bill Gates'),
(163, 'Steve Jobs'),
(164, 'Douglas Adams'),
(165, 'Grace Hopper'),
(166, 'Sydney J. Harris'),
(167, 'Nathan Myhrvold'),
(168, 'Unknown'),
(169, 'Isaac Asimov'),
(170, 'Mark Zuckerberg'),
(171, 'Stewart Brand'),
(172, 'Arthur C. Clarke'),
(173, 'Nicholas Negroponte'),
(174, 'Donald Knuth'),
(175, 'Peter Drucker');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Motivational'),
(2, 'Motivational'),
(3, 'motivational'),
(4, 'motivational'),
(5, 'motivational'),
(6, 'diet'),
(7, 'computers'),
(8, 'motivational'),
(9, 'diet'),
(10, 'computers');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `author_id`, `category_id`) VALUES
(24, 'The only limit to our realization of tomorrow is our doubts of today.', 1, 1),
(25, 'Don\'t watch the clock; do what it does. Keep going.', 2, 1),
(26, 'Keep your face always toward the sunshine—and shadows will fall behind you.', 3, 1),
(27, 'The future belongs to those who believe in the beauty of their dreams.', 4, 1),
(28, 'It does not matter how slowly you go as long as you do not stop.', 5, 1),
(29, 'Everything you’ve ever wanted is on the other side of fear.', 6, 1),
(30, 'Start where you are. Use what you have. Do what you can.', 7, 1),
(31, 'Uncertainty makes life interesting, uncertainty is essential to growth. Let go of the notion that you must be sure of what you are doing.', 8, 1),
(32, 'Dream big and dare to fail.', 9, 1),
(33, 'If you can dream it, you can do it.', 10, 1),
(34, 'Your time is limited, so don’t waste it living someone else’s life.', 11, 1),
(35, 'Act as if what you do makes a difference. It does.', 12, 1),
(36, 'Believe you can and you\'re halfway there.', 13, 1),
(37, 'Hardships often prepare ordinary people for an extraordinary destiny.', 14, 1),
(38, 'Fall seven times and stand up eight.', 15, 1),
(39, 'Keep your eyes on the stars, and your feet on the ground.', 13, 1),
(40, 'Success is not how high you have climbed, but how you make a positive difference to the world.', 16, 1),
(41, 'What you do today can improve all your tomorrows.', 17, 1),
(42, 'It always seems impossible until it\'s done.', 18, 1),
(43, 'You don\'t have to be great to start, but you have to start to be great.', 19, 1),
(44, 'The only limit to our realization of tomorrow is our doubts of today.', 1, 1),
(45, 'Don\'t watch the clock; do what it does. Keep going.', 2, 1),
(46, 'Keep your face always toward the sunshine—and shadows will fall behind you.', 3, 1),
(47, 'The future belongs to those who believe in the beauty of their dreams.', 4, 1),
(48, 'It does not matter how slowly you go as long as you do not stop.', 5, 1),
(49, 'Everything you’ve ever wanted is on the other side of fear.', 6, 1),
(50, 'Start where you are. Use what you have. Do what you can.', 7, 1),
(51, 'Uncertainty makes life interesting, uncertainty is essential to growth. Let go of the notion that you must be sure of what you are doing.', 8, 1),
(52, 'Dream big and dare to fail.', 9, 1),
(53, 'If you can dream it, you can do it.', 10, 1),
(54, 'Your time is limited, so don’t waste it living someone else’s life.', 11, 1),
(55, 'Act as if what you do makes a difference. It does.', 12, 1),
(56, 'Believe you can and you\'re halfway there.', 13, 1),
(57, 'Hardships often prepare ordinary people for an extraordinary destiny.', 14, 1),
(58, 'Fall seven times and stand up eight.', 15, 1),
(59, 'Keep your eyes on the stars, and your feet on the ground.', 13, 1),
(60, 'Success is not how high you have climbed, but how you make a positive difference to the world.', 16, 1),
(61, 'What you do today can improve all your tomorrows.', 17, 1),
(62, 'It always seems impossible until it\'s done.', 18, 1),
(63, 'You don\'t have to be great to start, but you have to start to be great.', 19, 1),
(64, 'Your diet is a bank account. Good food choices are good investments.', 1, 1),
(65, 'Eat food, not too much, mostly plants.', 2, 1),
(66, 'The food you eat can be either the safest and most powerful form of medicine or the slowest form of poison.', 3, 1),
(67, 'Let food be thy medicine and medicine be thy food.', 4, 1),
(68, 'You are what you eat.', 5, 1),
(69, 'Take care of your body; it\'s the only place you have to live.', 6, 1),
(70, 'A healthy outside starts from the inside.', 7, 1),
(71, 'To eat is a necessity, but to eat intelligently is an art.', 8, 1),
(72, 'He who takes medicine and neglects diet wastes the skill of his doctors.', 9, 1),
(73, 'The first wealth is health.', 10, 1),
(74, 'Good food is the foundation of genuine happiness.', 11, 1),
(75, 'You can\'t out-exercise a bad diet.', 12, 1),
(76, 'Let nothing which can be treated by diet be treated by medicine.', 13, 1),
(77, 'It is health that is real wealth and not pieces of gold and silver.', 14, 1),
(78, 'Healthy citizens are the greatest asset any country can have.', 15, 1),
(79, 'Healthy eating is a way of life, so it\'s important to establish routines that are simple, realistically, and ultimately livable.', 5, 1),
(80, 'Let food be nourishment, not therapy.', 5, 1),
(81, 'Your body deserves the best.', 5, 1),
(82, 'Invest in your health. It pays the best interest.', 5, 1),
(83, 'What you eat today will shape your tomorrow.', 5, 1),
(84, 'The only limit to our realization of tomorrow is our doubts of today.', 1, 1),
(85, 'Don\'t watch the clock; do what it does. Keep going.', 2, 1),
(86, 'Keep your face always toward the sunshine—and shadows will fall behind you.', 3, 1),
(87, 'The future belongs to those who believe in the beauty of their dreams.', 4, 1),
(88, 'It does not matter how slowly you go as long as you do not stop.', 5, 1),
(89, 'Everything you’ve ever wanted is on the other side of fear.', 6, 1),
(90, 'Start where you are. Use what you have. Do what you can.', 7, 1),
(91, 'Uncertainty makes life interesting, uncertainty is essential to growth. Let go of the notion that you must be sure of what you are doing.', 8, 1),
(92, 'Dream big and dare to fail.', 9, 1),
(93, 'If you can dream it, you can do it.', 10, 1),
(94, 'Your time is limited, so don’t waste it living someone else’s life.', 11, 1),
(95, 'Act as if what you do makes a difference. It does.', 12, 1),
(96, 'Believe you can and you\'re halfway there.', 13, 1),
(97, 'Hardships often prepare ordinary people for an extraordinary destiny.', 14, 1),
(98, 'Fall seven times and stand up eight.', 15, 1),
(99, 'Keep your eyes on the stars, and your feet on the ground.', 13, 1),
(100, 'Success is not how high you have climbed, but how you make a positive difference to the world.', 16, 1),
(101, 'What you do today can improve all your tomorrows.', 17, 1),
(102, 'It always seems impossible until it\'s done.', 18, 1),
(103, 'You don\'t have to be great to start, but you have to start to be great.', 19, 1),
(104, 'Your diet is a bank account. Good food choices are good investments.', 1, 1),
(105, 'Eat food, not too much, mostly plants.', 2, 1),
(106, 'The food you eat can be either the safest and most powerful form of medicine or the slowest form of poison.', 3, 1),
(107, 'Let food be thy medicine and medicine be thy food.', 4, 1),
(108, 'You are what you eat.', 5, 1),
(109, 'Take care of your body; it\'s the only place you have to live.', 6, 1),
(110, 'A healthy outside starts from the inside.', 7, 1),
(111, 'To eat is a necessity, but to eat intelligently is an art.', 8, 1),
(112, 'He who takes medicine and neglects diet wastes the skill of his doctors.', 9, 1),
(113, 'The first wealth is health.', 10, 1),
(114, 'Good food is the foundation of genuine happiness.', 11, 1),
(115, 'You can\'t out-exercise a bad diet.', 12, 1),
(116, 'Let nothing which can be treated by diet be treated by medicine.', 13, 1),
(117, 'It is health that is real wealth and not pieces of gold and silver.', 14, 1),
(118, 'Healthy citizens are the greatest asset any country can have.', 15, 1),
(119, 'Healthy eating is a way of life, so it\'s important to establish routines that are simple, realistically, and ultimately livable.', 5, 1),
(120, 'Let food be nourishment, not therapy.', 5, 1),
(121, 'Your body deserves the best.', 5, 1),
(122, 'Invest in your health. It pays the best interest.', 5, 1),
(123, 'What you eat today will shape your tomorrow.', 5, 1),
(124, 'The computer is the most remarkable tool that we have ever come up with.', 1, 1),
(125, 'Innovation distinguishes between a leader and a follower.', 2, 1),
(126, 'Computers are incredibly fast, accurate and stupid; humans are incredibly slow, inaccurate and brilliant.', 3, 1),
(127, 'A computer once beat me at chess, but it was no match for me at kickboxing.', 4, 1),
(128, 'The real danger is not that computers will begin to think like men, but that men will begin to think like computers.', 5, 1),
(129, 'Software is a gas; it expands to fill its container.', 6, 1),
(130, 'I do not fear computers. I fear the lack of them.', 8, 1),
(131, 'Computers are like cars; if you don\'t maintain them, they\'re going to break down.', 7, 1),
(132, 'Computers are the bicycles of our minds.', 2, 1),
(133, 'The Internet is becoming the town square for the global village of tomorrow.', 1, 1),
(134, 'We are stuck with technology when what we really want is just stuff that works.', 3, 1),
(135, 'Once a new technology rolls over you, if you\'re not part of the steamroller, you\'re part of the road.', 10, 1),
(136, 'The advance of technology is based on making it fit in so that you don\'t really even notice it, so it\'s part of everyday life.', 1, 1),
(137, 'Any sufficiently advanced technology is equivalent to magic.', 11, 1),
(138, 'The computer was born to solve problems that did not exist before.', 9, 1),
(139, 'Talking to a computer is the closest you can get to talking to your future self.', 7, 1),
(140, 'Computers are like bikinis: they save a lot of guesswork.', 7, 1),
(141, 'Computing is not about computers any more. It\'s about living.', 12, 1),
(142, 'In technology, the time to act is never later than now.', 7, 1),
(143, 'The art of programming is the art of organizing complexity.', 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `quotes_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
