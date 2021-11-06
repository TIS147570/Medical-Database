-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 09:05 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `c_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `gender` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`c_id`, `name`, `dob`, `mobile`, `address`, `bloodgroup`, `status`, `gender`, `email`, `type`) VALUES
('D-1533508', 'Saim Islam', '1989-06-09', '01711100011', 'Badda', 'AB+', 'active', 'male', 'wefh11@gmail.com', 'Liver'),
('D-2151936', 'Naima Islam', '1989-06-08', '01700000011', 'Badda,Dhaka', 'O-', 'active', 'female', 'we@gmail.com', 'Blood'),
('D-2625351', 'Saim Islam', '1988-06-03', '01711000011', 'Badda,Dhaka', 'O+', 'active', 'male', 'we1211@gmail.com', 'Liver'),
('D-5332074', 'Saif Khan', '1987-02-13', '01711101110', 'BADDA', 'AB+', 'active', 'male', 'w12345l@gmail.com', 'Platilete'),
('D-5447074', 'Saim Khan', '1990-02-13', '01732001110', 'MIRPUR', 'AB+', 'active', 'male', 'we32123l@gmail.com', 'Liver'),
('D-5557074', 'Ahsan Selim', '1992-02-13', '01700001110', 'MIRPUR', 'AB+', 'active', 'male', 'wegm123l@gmail.com', 'Blood'),
('D-5557123', 'Ahsan Ullah', '1988-02-13', '01702201110', 'BADDA', 'A+', 'active', 'male', 'we12m123l@gmail.com', 'Liver'),
('D-7367074', 'Ahsana Shewli', '1995-02-13', '01700000000', 'MIRPUR', 'A+', 'active', 'female', 'wegmail@gmail.com', 'Blood'),
('D-8041219', 'Naim Islam', '1987-06-16', '01722000011', 'Badda,Dhaka', 'AB+', 'active', 'male', 'we11@gmail.com', 'Platilete');

-- --------------------------------------------------------

--
-- Table structure for table `medical_test`
--

CREATE TABLE `medical_test` (
  `MT_ID` varchar(30) NOT NULL,
  `MT_NAME` varchar(30) NOT NULL,
  `MT_TYPE` varchar(30) NOT NULL,
  `MT_DATE` varchar(30) NOT NULL,
  `MT_RESULT` varchar(30) NOT NULL,
  `MT_OBSERVATION` varchar(30) NOT NULL,
  `A_ID` varchar(30) NOT NULL,
  `D_ID` varchar(30) NOT NULL,
  `PA_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_test`
--

INSERT INTO `medical_test` (`MT_ID`, `MT_NAME`, `MT_TYPE`, `MT_DATE`, `MT_RESULT`, `MT_OBSERVATION`, `A_ID`, `D_ID`, `PA_ID`) VALUES
('MT-2027394', 'BLOOD TEST', 'GROUP INFORMATION', '2021-06-01', 'LACKAGE OF RCB', 'IRON DEFICIENCY', 'A-4150035', 'D-4176937', 'PA-3654386'),
('MT-2543490', 'BLOOD TEST', 'GROUP INFORMATION', '2021-06-15', 'O+ BLOOD', 'ALL OK', 'A-4150035', 'D-6397043', 'PA-2503403'),
('MT-2599570', 'BLOOD TEST', 'GROUP INFORMATION', '2021-06-03', 'A+ BLOOD', 'ALL OK', 'A-3451435', 'D-4176937', 'PA-3654386'),
('MT-3232666', 'BLOOD TEST', 'GROUP INFORMATION', '2021-06-05', 'AB+ BLOOD', 'ALL OK', 'A-4150035', 'D-5088517', 'PA-3665957'),
('MT-3504257', 'BLOOD TEST', 'BLOOD CULTURE', '2021-06-08', 'O+ BLOOD', 'ALL OK', 'A-4150035', 'D-4176937', 'PA-3665957'),
('MT-3526385', 'BLOOD TEST', 'BLOOD CULTURE', '2021-06-08', 'A+ BLOOD', 'ALL OK', 'A-4150035', 'D-4176937', 'PA-3665957'),
('MT-3558040', 'BLOOD TEST', 'GROUP INFORMATION', '2021-06-08', 'AB- BLOOD', 'ALL OK', 'A-5793125', 'D-6516741', 'PA-3810846'),
('MT-4321885', 'BLOOD TEST', 'BLOOD CULTURE', '2021-06-01', 'LACKAGE OF RCB', 'IRON DEFICIENCY', 'A-3451435', 'D-4176937', 'PA-3654386'),
('MT-616408', 'ALLERGY TEST', 'BLOOD CULTURE', '1999-06-10', 'PRAWN ALLERGY', 'ALL OK', 'A-4213272', 'D-6397043', 'PA-2503403'),
('MT-7431202', 'BLOOD TEST', 'BLOOD CULTURE', '2021-06-02', 'O+ BLOOD', 'ALL OK', 'D-6397043', 'A-4213272', 'PA-3665957');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MED_ID` varchar(30) NOT NULL,
  `MED_NAME` varchar(30) NOT NULL,
  `MED_POWER` varchar(30) NOT NULL,
  `MED_TIME` varchar(30) NOT NULL,
  `MED_PRICE` varchar(30) NOT NULL,
  `PR_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`MED_ID`, `MED_NAME`, `MED_POWER`, `MED_TIME`, `MED_PRICE`, `PR_ID`) VALUES
('MD-12345', 'NAPA', '200mg', '3', '6', 'PR-13455'),
('MED-1493677', 'Paracetamol', '500mg', '3', '5', 'PR-7577383'),
('MED-1652877', 'Paracetamol', '500mg', '3', '5', 'PR-8614654'),
('MED-2220893', 'Acifix', '2 mg', '3', '5', 'PR-7963180'),
('MED-2801051', 'Paracetamol', '600mg', '3', '5', 'PR-2861107'),
('MED-3321679', 'ESZOPICLONE', '2 mg', '1', '2', 'PR-4466349'),
('MED-5560524', 'Paracetamol', '500mg', '3', '2', 'PR-2256657'),
('MED-5840508', 'Acifix', '20 MG', '3', '5', 'PR-2501662'),
('MED-6343423', 'Paracetamol', '500mg', '3', '5', 'PR-3026867'),
('MED-7060044', 'Acifix', '2 mg', '3', '5', 'PR-7186551'),
('MED-7772564', 'Paracetamol', '600mg', '3', '5', 'PR-7186551'),
('MED-9017307', 'Paracetamol', '200mg', '3', '5', 'PR-2861107'),
('MED-9251278', 'Paracetamol', '200mg', '3', '5', 'PR-7839029');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `PR_ID` varchar(30) NOT NULL,
  `DISEASE` varchar(30) NOT NULL,
  `UPDATE_DATE` varchar(30) NOT NULL,
  `A_ID` varchar(30) NOT NULL,
  `D_ID` varchar(30) NOT NULL,
  `PHID` varchar(30) NOT NULL,
  `PA_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`PR_ID`, `DISEASE`, `UPDATE_DATE`, `A_ID`, `D_ID`, `PHID`, `PA_ID`) VALUES
('PR-13455', 'COLD', '11-06-1998', 'A-4213272', 'D-6397043', 'PH-2431842', 'PA-2503403'),
('PR-1885761', 'GASTRIC', '2021-06-08', 'A-5793125', 'D-5088517', '0', 'PA-2503403'),
('PR-2256657', 'FEVER', '2021-06-02', 'A-4150035', 'D-5088517', '0', 'PA-3665957'),
('PR-2501662', 'GASTRIC', '2021-06-02', 'A-5793125', 'D-6516741', '0', 'PA-3810846'),
('PR-2861107', 'FEVER', '2021-06-13', 'A-4213272', 'D-6397043', '0', 'PA-2503403'),
('PR-4466349', 'INSOMNIA', '2021-06-08', 'A-3451435', 'D-4176937', '0', 'PA-3654386'),
('PR-7186551', 'GASTRIC', '2021-06-08', 'A-4150035', 'D-6397043', '0', 'PA-2503403'),
('PR-7231958', 'INSOMNIA', '2021-06-01', 'A-5793125', 'D-6397043', '0', 'PA-2503403'),
('PR-7577383', 'FEVER', '2021-06-15', 'A-4150035', 'D-6397043', '0', 'PA-2503403'),
('PR-7839029', 'FEVER', '2021-06-14', 'A-4213272', 'D-6397043', '0', 'PA-2503403'),
('PR-7963180', 'GASTRIC', '2021-06-17', 'D-6397043', 'A-5793125', '0', 'PA-3665957'),
('PR-8028843', 'FEVER', '2021-06-22', 'A-4213272', 'D-6397043', '0', 'PA-3654386'),
('PR-8614654', 'FEVER', '2021-06-02', 'A-4150035', 'D-6397043', '0', 'PA-2503403'),
('PR-8728410', 'GASTRIC', '2021-06-08', 'A-5793125', 'D-6397043', '0', 'PA-2503403'),
('PR-910849', 'GASTRIC', '2021-06-14', 'A-4213272', 'D-4176937', '0', 'PA-2503403');

-- --------------------------------------------------------

--
-- Table structure for table `pres_medicine`
--

CREATE TABLE `pres_medicine` (
  `PMED_ID` varchar(30) NOT NULL,
  `PRES_ID` varchar(30) NOT NULL,
  `MED_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` varchar(30) NOT NULL,
  `U_NID` varchar(30) NOT NULL,
  `U_TYPE` varchar(30) NOT NULL,
  `U_NAME` varchar(50) NOT NULL,
  `U_PASSWORD` varchar(255) NOT NULL,
  `U_EMAIL` varchar(50) NOT NULL,
  `U_GENDER` varchar(30) NOT NULL,
  `HOSPITAL_Location` varchar(50) NOT NULL,
  `U_CONTACT` varchar(20) NOT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `U_NID`, `U_TYPE`, `U_NAME`, `U_PASSWORD`, `U_EMAIL`, `U_GENDER`, `HOSPITAL_Location`, `U_CONTACT`, `dob`, `join_date`) VALUES
('0', '0', '0', '0', '0', '0', '0', '', '0', '0', '2021-03-11'),
('1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-06-13'),
('A-3451435', '54345678734', 'assistant', 'BLAKE WOOD', '325231', 'AbbL123@GMAIL.COM', 'female', 'Mirpur', '01399555555', '1986-06-10', '2021-03-11'),
('A-4150035', '2356765456', 'assistant', 'ARON SMITH', '$2y$10$E24k07MioPsW.jLSQyYtGObUBX/xiM/rorHeK0bf.mBZhLmLb4ja.', 'ARON@GMAIL.COM', 'male', 'FARMGATE', '01355555556', '1988-06-15', '2021-04-11'),
('A-4213272', '345678987654', 'assistant', 'ARON COWELL', '1234567', 'ARON@GMAIL.COM', 'male', 'Mirpur', '01355555566', '1999-06-16', '2021-05-11'),
('A-5608775', '5124532347', 'assistant', 'ASIF ALI', '$2y$10$6bQCdEnbm2wds7Yy7JVw6.PAtRHgpvFgmkq3h2d1gJJRmIu.4/v1K', 'ASIF@GMAIL.COM', 'male', 'FARMGATE', '01353355556', '1998-06-20', '2021-06-15'),
('A-5793125', '5434786787', 'assistant', 'SIMON BELL', '1234567', 'ARO111211@GMAIL.COM', 'male', 'AKAWRA', '01378755555', '1987-06-28', '2021-06-11'),
('AD-2234', '345433341', 'admin', 'CLARK KENT', '$2y$10$03lxakkYi2q1WZC26npSSOJJxgmYigluqMBBcstSBPA0jxl.2PHDi', 'CKENT231@GMAIL.COM', 'MALE', 'BIKRAMPUR', '01754444444', '12-3-1998', '2021-06-11'),
('D-3540587', '4312512347', 'doctor', 'ARAFAT KHAN', '$2y$10$sE7eCPwYXSTfYtjIxcbHu.mnRRSgN5AhWZ/WTNyL8hMyGkZmtxVWm', '123ARON@GMAIL.COM', 'male', 'BADDA', '01354455556', '1988-06-15', '2021-06-15'),
('D-4176937', '5124512347', 'doctor', 'GREGORY HOUSE', '1234567', 'HOUSE123@GMAIL.COM', 'male', 'Mirpur', '01323455556', '1985-06-28', '2021-06-11'),
('D-5088517', '5434512347', 'doctor', 'MARK SOLAN', '654321', 'SOLAN11N@GMAIL.COM', 'male', 'BADDA', '01355555777', '1989-06-15', '2021-06-11'),
('D-6397043', '345678987', 'doctor', 'ARAF AHSAN', '$2y$10$QIbmscfH/C.6xQWKAb1TaOgZ6vklDQ52ATCh7WxE8YKXRdoXRgzni', 'ARAF@GMAIL.COM', 'male', 'RAMPURA', '01355354555', '1988-06-13', '2021-06-11'),
('D-6516741', '543471248712', 'doctor', 'CHRISTINA YANG', '654321', 'YANG111211@GMAIL.COM', 'female', 'FARMGATE', '01712311111', '1990-06-08', '2021-06-11'),
('PA-2503403', '345678955', 'patient', 'SHARON COOPER', '$2y$10$zoGF3yPP66ygewiHF4ZtrOSgtg7Nbwgu3.i71yWqCK.6XEhUyZ56m', 'SHARON@GMAIL.COM', 'female', 'ASHURA', '01344554555', '1999-06-29', '2021-06-11'),
('PA-3654386', '543456787', 'patient', 'ARON JOST', '1234567', 'ARO11N@GMAIL.COM', 'male', 'Mirpur', '01355555556', '1999-06-29', '2021-06-11'),
('PA-3665957', '765433454345', 'patient', 'DONNA REED', '654321', 'DONA@GMAIL.COM', 'female', 'RAMPURA', '01711111133', '1993-06-19', '2021-06-11'),
('PA-3810846', '543478678712', 'patient', 'SYLIVA MOON', '325231', 'MOON123@GMAIL.COM', 'female', 'AKAWRA', '01354455556', '1997-06-23', '2021-06-11'),
('PA-9369015', '4222512347', 'patient', 'LABONI SORKAR', '$2y$10$R58SfeLXE4Lc0JtWmN.JC.qgHUrmXm34IQj.C1dM8X7sSI37diG/2', 'LAQBONI@GMAIL.COM', 'female', 'BADDA', '01356755555', '1988-06-09', '2021-06-15'),
('PH-1904788', '4324512347', 'pharmacist', 'ZINAT KHAN', '1234567', 'ZINAT23@GMAIL.COM', 'female', 'Mirpur', '01352355555', '1987-06-14', '2021-06-11'),
('PH-2431842', '5121232347', 'pharmacist', 'TOM HARRIS', '$2y$10$s0oqPVzOFk0CZT86rCbP5OXClmRVZt05rc/k2EeCyjGYfm4aCq5RO', 'TOM111211@GMAIL.COM', 'male', 'RAMPURA', '01357775555', '1996-06-21', '2021-06-11'),
('PH-2570052', '54345678776', 'pharmacist', 'AKRAM KHAN', '98765', 'AKR111211@GMAIL.COM', 'male', 'FARMGATE', '01352332555', '1992-06-24', '2021-06-11'),
('PH-6102220', '34567898766', 'pharmacist', 'RATUL ISLAM', '325231', 'RATUL@GMAIL.COM', 'male', 'BADDA', '01711111111', '1992-06-26', '2021-06-11'),
('PH-887409', '4222512678', 'pharmacist', 'MONJOR ALI ', '$2y$10$GOHZH8gLToj7MikVLZJNXOd1nR/1omVD8I3hODLOcxatmv4NP7U0u', 'ALI456@GMAIL.COM', 'male', 'RAMPURA', '01712211133', '1990-06-29', '2021-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `medical_test`
--
ALTER TABLE `medical_test`
  ADD PRIMARY KEY (`MT_ID`),
  ADD KEY `FK_AID11` (`A_ID`),
  ADD KEY `FK_DID1` (`D_ID`),
  ADD KEY `FK_PA_ID1` (`PA_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`MED_ID`),
  ADD KEY `FK_PRID` (`PR_ID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`PR_ID`),
  ADD KEY `FK_AID111` (`A_ID`),
  ADD KEY `FK_DID11` (`D_ID`),
  ADD KEY `FK_PA_ID11` (`PA_ID`),
  ADD KEY `FK_PHID` (`PHID`);

--
-- Indexes for table `pres_medicine`
--
ALTER TABLE `pres_medicine`
  ADD PRIMARY KEY (`PMED_ID`),
  ADD KEY `FK_PRES_ID` (`PRES_ID`),
  ADD KEY `FK_MED_ID` (`MED_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_test`
--
ALTER TABLE `medical_test`
  ADD CONSTRAINT `FK_AID11` FOREIGN KEY (`A_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `FK_DID1` FOREIGN KEY (`D_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `FK_PA_ID1` FOREIGN KEY (`PA_ID`) REFERENCES `users` (`U_ID`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `FK_AID111` FOREIGN KEY (`A_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `FK_DID11` FOREIGN KEY (`D_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `FK_PA_ID11` FOREIGN KEY (`PA_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `FK_PHID` FOREIGN KEY (`PHID`) REFERENCES `users` (`U_ID`);

--
-- Constraints for table `pres_medicine`
--
ALTER TABLE `pres_medicine`
  ADD CONSTRAINT `FK_MED_ID` FOREIGN KEY (`MED_ID`) REFERENCES `medicine` (`MED_ID`),
  ADD CONSTRAINT `FK_PRES_ID` FOREIGN KEY (`PRES_ID`) REFERENCES `prescription` (`PR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
