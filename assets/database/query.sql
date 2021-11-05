CREATE DATABASE IF NOT EXISTS perfectcup;
USE perfectcup;

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'John', 'Smith', 'john@test3.com', '$2y$12$.Tv/Cn55yl0lMa1OJBG0H.s/EAHei.5B.09r5VEgMw6VJx2dCn/b2'),
(2, 'Joe', 'Bob', 'jb@gmail.com', '$2y$12$i2t2T46owP4H2kCgLxvZ0uRm3tt8HZHHSC5fFvib/AZYcWM0EnBda');
