CREATE TABLE `danial` (
  
  `name` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofbirth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `danial` (`name`, `ic`, `nationality`, `gender`, `dateofbirth`, `age`, `address`, `language`,`email`, `hobbies`, `team`,`images`) VALUES
('Muhammad Danial Bin Abdul Majid', '011007010353', 'Malaysia', 'Male', '07/10/2001', '22 Years Old', 'Jalan 5/56 Au3 Keramat, KL', 'Malay, English, Mandarin', 'danialmajid01@gmail.com', 'Football, Go-Karting', 'Manchester United',  'picture.jpg');
