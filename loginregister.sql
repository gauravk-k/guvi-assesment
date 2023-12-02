SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tb_user` (
  `fname` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_user` (`id`, `fname`, `lname`, `email`,`phoneno`,`password`,`dob`,`age`,`country`) VALUES
(1, 'Gaurav', 'kumar','gaurav@gmail.com', '9876543210','12345678','2000/01/01','22','india');


ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

