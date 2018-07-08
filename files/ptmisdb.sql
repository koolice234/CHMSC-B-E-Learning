-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 01:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptmisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`backup_id`, `remarks`, `date`) VALUES
(1, 'Successfully exported database', 'February 10, 2018, 1:31 pm'),
(2, 'Successfully exported database', 'February 10, 2018, 1:33 pm'),
(3, 'Successfully exported database', 'February 10, 2018, 1:34 pm'),
(4, 'Successfully exported database', 'February 10, 2018, 1:35 pm'),
(5, 'Successfully exported database', 'February 10, 2018, 1:36 pm'),
(6, 'Successfully imported database', 'February 10, 2018, 1:37 pm'),
(7, 'Successfully imported database', 'February 10, 2018, 1:42 pm'),
(8, 'Successfully exported database', 'February 10, 2018, 2:15 pm'),
(9, 'Successfully imported database', 'February 10, 2018, 8:20 pm');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipID` int(8) NOT NULL,
  `EquipName` text NOT NULL,
  `EquipQty` int(3) NOT NULL,
  `EquipStatus` text NOT NULL,
  `EquipUsed` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `EvalID` int(11) NOT NULL,
  `PatientID` varchar(11) NOT NULL,
  `EvalPT` varchar(30) NOT NULL,
  `EvalSessionQty` int(2) NOT NULL,
  `EvalChiefComplaint` varchar(50) NOT NULL,
  `EvalHistoryIllness` varchar(100) NOT NULL,
  `EvalSpeech` varchar(15) NOT NULL,
  `EvalEdema` varchar(15) NOT NULL,
  `EvalEndurance` varchar(15) NOT NULL,
  `EvalVision` varchar(15) NOT NULL,
  `EvalMuscleTone` varchar(15) NOT NULL,
  `EvalPosture` varchar(15) NOT NULL,
  `EvalHearing` varchar(15) NOT NULL,
  `EvalCoordination` varchar(15) NOT NULL,
  `EvalSkin` varchar(15) NOT NULL,
  `Eval_Date` date NOT NULL,
  `ROMLeftShoulder` int(2) NOT NULL,
  `ROMRightShoulder` int(2) NOT NULL,
  `ROMLeftElbow` int(2) NOT NULL,
  `ROMRightElbow` int(2) NOT NULL,
  `ROMLeftForearm` int(2) NOT NULL,
  `ROMRightForearm` int(2) NOT NULL,
  `ROMLefthandFingers` int(2) NOT NULL,
  `ROMRighthandFingers` int(2) NOT NULL,
  `ROMLeftWrist` int(2) NOT NULL,
  `ROMRightWrist` int(2) NOT NULL,
  `ROMLeftTrunk` int(2) NOT NULL,
  `ROMRightTrunk` int(2) NOT NULL,
  `ROMHip` int(2) NOT NULL,
  `ROMLeftKnee` int(2) NOT NULL,
  `ROMRightKnee` int(2) NOT NULL,
  `ROMLeftAnkle` int(2) NOT NULL,
  `ROMRightAnkle` int(2) NOT NULL,
  `ROMNeck` int(2) NOT NULL,
  `MMTLeftShoulder` int(2) NOT NULL,
  `MMTRightShoulder` int(2) NOT NULL,
  `MMTLeftElbow` int(2) NOT NULL,
  `MMTRightElbow` int(2) NOT NULL,
  `MMTLeftForearm` int(2) NOT NULL,
  `MMTRightForearm` int(2) NOT NULL,
  `MMTLefthandFingers` int(2) NOT NULL,
  `MMTRighthandFingers` int(2) NOT NULL,
  `MMTLeftWrist` int(2) NOT NULL,
  `MMTRightWrist` int(2) NOT NULL,
  `MMTLeftTrunk` int(2) NOT NULL,
  `MMTRightTrunk` int(2) NOT NULL,
  `MMTHip` int(2) NOT NULL,
  `MMTLeftKnee` int(2) NOT NULL,
  `MMTRightKnee` int(2) NOT NULL,
  `MMTLeftAnkle` int(2) NOT NULL,
  `MMTRightAnkle` int(2) NOT NULL,
  `MMTNeck` int(2) NOT NULL,
  `Remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvalID`, `PatientID`, `EvalPT`, `EvalSessionQty`, `EvalChiefComplaint`, `EvalHistoryIllness`, `EvalSpeech`, `EvalEdema`, `EvalEndurance`, `EvalVision`, `EvalMuscleTone`, `EvalPosture`, `EvalHearing`, `EvalCoordination`, `EvalSkin`, `Eval_Date`, `ROMLeftShoulder`, `ROMRightShoulder`, `ROMLeftElbow`, `ROMRightElbow`, `ROMLeftForearm`, `ROMRightForearm`, `ROMLefthandFingers`, `ROMRighthandFingers`, `ROMLeftWrist`, `ROMRightWrist`, `ROMLeftTrunk`, `ROMRightTrunk`, `ROMHip`, `ROMLeftKnee`, `ROMRightKnee`, `ROMLeftAnkle`, `ROMRightAnkle`, `ROMNeck`, `MMTLeftShoulder`, `MMTRightShoulder`, `MMTLeftElbow`, `MMTRightElbow`, `MMTLeftForearm`, `MMTRightForearm`, `MMTLefthandFingers`, `MMTRighthandFingers`, `MMTLeftWrist`, `MMTRightWrist`, `MMTLeftTrunk`, `MMTRightTrunk`, `MMTHip`, `MMTLeftKnee`, `MMTRightKnee`, `MMTLeftAnkle`, `MMTRightAnkle`, `MMTNeck`, `Remarks`) VALUES
(13, '2', 'Ryan Jay', 1, 'rawrawr', 'Blood Transfusion, Coronary Artery Disease, Emphysema, ', 'sample', 'sample', 'sample', 'rawrawr', 'sample', 'sample', 'sample', 'sample', 'sample', '2018-02-05', 9, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'old'),
(14, '3', 'Nikko Pula', 2, 'chief', 'Blood Clot, Cancer, Eye Disease, Gout, Hypercholesterolemia, Osteoporosis/Osteopenia, ', 'speech', 'edema', 'endurance', 'chief', 'vision', 'muslce', 'hearing', 'cooring', 'skin', '2018-02-08', 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'recurring'),
(17, '1', 'Ryan Jay', 2, 'Sakit akon Tiyan', 'Alcholism, Bronchitis, Congestive Heart Failure, Emphysema, Liver Disorder-Hepatiti, ', 'disorder', 'okay', 'asd', 'Sakit akon Tiya', 'leo', 'biceps', 'okay', 'oka', 'not okay', '2018-03-02', 3, 4, 8, 4, 6, 7, 4, 8, 8, 4, 5, 6, 6, 6, 6, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'New'),
(20, '4', 'Hans Buglosa', 2, 'sam', 'Anxiety, Asthma, ', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', '2018-02-06', 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'Old'),
(21, '8', 'Roz Stoddart', 4, 'had a lower injury in back', 'Alcholism, Anxiety, Asthma, ', 'speech ', 'sample', 'sample', 'had a lower inj', 'sample', 'sample', 'sample', 'sample', 'sample', '2018-02-07', 124, 115, 160, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 3, 3, 3, 3, 3, 'New'),
(22, '26', 'Roz Stoddart', 3, 'having some minor pain in the lower area of knee', 'Asthma, Diabetes, Depression, Gout, ', 'sample', 'sample', 'sample', 'having some min', 'sample', 'sample', 'sample', 'sample', 'sample', '2018-02-07', 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'New'),
(23, '9', 'Roz Stoddart', 4, 'having a back problem issues & minor pain in lower', 'Alcholism, Anxiety, Diabetes, Depression, ', 'dysarthria ', ' Deep Vein Thro', 'good endurance', 'having a back p', 'nystagmus with ', 'atrophy of the ', 'air conduction ', 'parkinsons dse\r', 'petechiae', '2018-02-07', 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 'New'),
(24, '37', 'Piayao Apurado', 4, 'having problem in breathing ', 'Alcholism, Diabetes, Depression, ', 'sample', 'sample', 'sample', 'having problem ', 'sample', 'sample', 'sample', 'sample', 'sample', '2018-02-07', 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 110, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `PatientName` text NOT NULL,
  `PatientAddress` text NOT NULL,
  `PatientGender` text NOT NULL,
  `PatientBirthdate` date NOT NULL,
  `PatientCivilStatus` text NOT NULL,
  `PatientProfession` text NOT NULL,
  `PatientDoctor` text NOT NULL,
  `PatientHospital` text NOT NULL,
  `PatientReferralAddress` text NOT NULL,
  `PatientTelephone` int(11) NOT NULL,
  `PatientContactPerson` text NOT NULL,
  `PatientCases` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `PatientName`, `PatientAddress`, `PatientGender`, `PatientBirthdate`, `PatientCivilStatus`, `PatientProfession`, `PatientDoctor`, `PatientHospital`, `PatientReferralAddress`, `PatientTelephone`, `PatientContactPerson`, `PatientCases`, `month`, `year`) VALUES
(1, 'steven paul', 'handumanan', 'Male', '2018-02-10', 'Married', 'marketing associate', 'jan bayud', 'riverside1', 'handumanan', 4644111, 'adela donan', 'cases12', 'Jan', '2018'),
(2, 'James Bayud', 'handumanan', 'Male', '2017-12-02', 'Widowed', 'Driver', 'bunso ungo', 'lady of mercy', 'villamonte bacolod city', 44555111, 'vicmar yanson', 'Frozen Shoulder', 'Jan', '2018'),
(3, 'Ivan Buglosa', 'mansilingan bacolod city', 'Male', '1996-03-06', 'Married', 'Student', 'Dr. Shitty ', 'Doctors Hospital', 'Bago City', 4410025, 'Marlyn Yanson', 'wrinkle cases', 'Jan', '2018'),
(4, 'Fokwen Bagin', 'Mansilingan Bacolod City', 'Male', '1996-01-06', 'Single', 'Housewife', 'Wuasheley', 'Doctors Hospital', 'Shopping', 2147483647, 'Maria Elena Yanson', 'Heart Failure', 'Jan', '2018'),
(5, 'Mico Cats', 'asd', 'Male', '2018-01-16', 'Single', 'asdasd', 'asd', 'asd', 'asd', 0, 'asd', 'asd', 'Jan', '2018'),
(6, 'Nikko Red', 'asdadsas', 'Male', '1999-02-04', 'Single', 'asdasd', 'asdasdasd', 'asdasd', 'dasdad', 0, 'sdadas', 'sdasdad', 'Jan', '2018'),
(7, 'Josh Tee', 'Bago City', 'Male', '1992-12-16', 'Single', 'Developer', 'ssss', 'ssss', 'ssss', 0, 'ssss', 'Structure', 'Jan', '2018'),
(8, 'Rocky Bagayo', 'Bago City', 'Male', '1997-02-13', 'Single', 'Teacher', 'Dr. Taguro Bago', 'Riverside Hospital', 'Bacolod City', 92, 'Maria Nancy Diente', 'Stroke', 'Jan', '2018'),
(9, 'Precious Apurado', 'La carlota City', 'Female', '2018-02-14', 'Married', 'Celebrity', 'Dr. Jade Jong', 'Bago Hopistal', 'Bago City', 637251, 'James Petron', 'Low Back Pains', 'Jan', '2018'),
(10, 'James Guanzon', 'Bacolod City', 'Male', '1997-10-03', 'Married', 'Photographer', '', '', '', 0, '', 'Frozen Shoulder', 'Jan', '2018'),
(11, 'Alexa Schmidt', 'Bago City', 'Female', '2018-10-16', 'Single', 'Media Producer ', '', '', '', 0, '', 'Stroke', 'Jan', '2018'),
(12, 'Alize Conroy', 'Bago City', 'Female', '2018-03-06', 'Single', 'School Principal', 'Dr. Mico Catibog', 'Riverside Hospital', 'Bacolod City', 759, 'Jade Apurado', 'Stroke', 'Feb', '2018'),
(13, 'Winfield Roob', 'Bago City', 'Male', '2018-04-11', 'Single', 'Singer', '', '', '', 0, '', 'Spinal Cord Injuries', 'Feb', '2018'),
(14, 'Marguerite Vandervort', 'Bago City', 'Male', '2018-09-05', 'Single', 'Software Designer', '', '', '', 0, '', 'Fractures', 'Feb', '2018'),
(15, 'Jamil Romaguera PhD', 'Bago City', 'Male', '2018-11-02', 'Single', 'Surgeon', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(16, 'Eleanora Bahringer', 'Municipality of Villadolid ', 'Female', '1997-12-17', 'Single', 'Tailor', '', '', '', 0, '', 'Stroke', 'Feb', '2018'),
(17, 'Dicksan Gordon', 'Bacolod City', 'Male', '1997-02-06', 'Married', 'Board member', '', '', '', 0, '', 'Traumatic Brain Injuries', 'Feb', '2018'),
(18, 'Leah Lastima', 'Bago City', 'Male', '1983-07-02', 'Single', 'Telemarketer', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(19, 'Josephine Gibson', 'Bago City', 'Male', '1990-02-08', 'Single', 'Travel Agent ', '', '', '', 0, '', 'Stroke', 'Jan', '2018'),
(20, 'Devin Cummerata', 'Bacolod City', 'Male', '1997-12-31', 'Single', 'Translator', '', '', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(21, 'Antoinette Mayer', 'Bago City', 'Female', '1983-07-12', 'Single', 'Student Counsellor ', 'Dr. Jade Jong', 'Riverside Hospital', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(22, 'Desiree Parker', 'Bago City', 'Male', '1984-06-06', 'Separated', 'Shoemaker', '', '', '', 0, '', 'Fractures', 'Feb', '2018'),
(23, 'Jordane Johns', 'Bago City', 'Female', '1990-09-13', 'Single', 'School Principal', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(24, 'Nancy Diente', 'Bago City', 'Female', '1976-08-10', 'Single', 'Bussinesswoman', '', '', '', 0, '', 'Arthritis', 'Jan', '2018'),
(25, 'Jerry Diente', 'Bacolod City', 'Male', '1991-02-01', 'Single', 'Bussinessman', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(26, 'Daniel Bagayo', 'Bago City', 'Male', '1993-10-24', 'Single', 'Pastor', '', '', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(27, 'Tures Mambo', 'Bago City', 'Male', '1997-07-15', 'Single', 'Security', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(28, 'Tures Mambo', 'Bago City', 'Male', '1997-07-15', 'Single', 'Security', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(31, 'Sheena Thunder', 'Bacolod City', 'Female', '1997-02-14', 'Single', 'Dealer', '', '', '', 0, '', 'Traumatic Brain Injuries', 'Feb', '2018'),
(32, 'Rizza Guanzon', 'Bacolod City', 'Female', '1994-10-27', 'Married', 'Barrista', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(33, 'Juvilyn Ibanez', 'Bacolod City', 'Female', '1997-02-12', 'Married', 'Pastora', '', '', '', 0, '', 'Cerebral Palsy', '', ''),
(34, 'Jonalyn Cofino', 'Bacolod City', 'Female', '2018-01-05', 'Married', 'Pastry Chef', 'Dr. Precious Apurado', 'Riverside Hospital', '', 0, 'Geoff Cofino', 'Myofascial Pain Syndrome', '', ''),
(35, 'Jose Brodit III', 'Bacolod City', 'Male', '1997-11-13', 'Separated', 'Dance Instructor', 'Dr. Precious Apurado', 'St. Luke Medical Hospital', '', 0, 'Jade Jong', 'Spinal Cord Injuries', '', ''),
(36, 'Michelle Dianabelle Bond', 'San Enrique', 'Male', '2018-06-03', 'Single', 'Student', 'Dr. Precious Apurado', 'Riverside Hospital', '', 0, 'Michelle Bond', 'Cerebral Palsy', '', ''),
(37, 'Alvin Yanson', 'Bago City', 'Male', '2018-02-01', 'Single', 'Dance Instructor', '', '', '', 0, '', 'Stroke', 'Feb', '2018'),
(38, 'Brix Handler', 'BacolodCity', 'Male', '2018-01-01', 'Single', 'Programmer', 'Dr.MicoCatibog', 'RiverSide', 'BacolodCity', 444, 'IvanBuglosa', 'Storke', 'Jan', '2018'),
(39, 'Aracely Aufderhar PhD', 'Bacolod City', 'Female', '0000-00-00', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(40, 'Tod Wisozk', 'Bago City', 'Male', '0000-00-00', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(41, 'Hermina Schroeder', 'Bago City', 'Female', '0000-00-00', 'Single', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(42, 'Ignatius Brekke', 'Bago City', 'Male', '0000-00-00', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(43, 'Abraham Eichmann', 'Bago City', 'Female', '0000-00-00', 'Single', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(44, 'Donato Gerlach', 'Bago City', 'Male', '0000-00-00', 'Single', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(45, 'Filepe Demamon', 'Bago City', 'Female', '0000-00-00', 'Single', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(46, 'Agustus Morer', 'Bago City', 'Male', '0000-00-00', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(47, 'Asyong Utotong', 'Bago City', 'Female', '0000-00-00', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(48, 'Draco Bukog', 'Bago City', 'Male', '0000-00-00', 'Single', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(49, 'Elsa Magandadato', 'Bago City', 'Female', '0000-00-00', 'Single', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(50, 'Abdula Spertecra', 'Bago City', 'Female', '0000-00-00', 'Single', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(51, 'Mamita Luna', 'Bago City', 'Male', '0000-00-00', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(52, 'July Bago', 'Bago City', 'Female', '0000-00-00', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(53, 'Sadam Lazaro', 'Bago City', 'Male', '0000-00-00', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(54, 'Emely Gislason', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(55, 'Vicmar Marson', 'Bago City', 'Male', '1988-01-27', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(56, 'Daniel Senson', 'Bago City', 'Male', '1994-09-30', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(57, 'Arcana Siklab', 'Bacolod City', 'Male', '1987-03-15', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(58, 'Clide Bismark', 'Bago City', 'Female', '1984-06-12', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(59, 'James Dormedo', 'Bago City', 'Male', '1990-12-10', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(60, 'Pepito Manaloto', 'Bago City', 'Male', '1990-06-10', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(61, 'Portico Sandigan', 'Bago City', 'Male', '1990-12-10', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(62, 'Amor Agustita', 'Bacolod City', 'Female', '1984-05-13', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(63, 'Merkado Tukog', 'Bacolod City', 'Male', '1985-12-13', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(64, 'Abdul Singcangs', 'Bacolod City', 'Male', '1985-03-10', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(65, 'Sentina Mercado', 'Bago City', 'Female', '1987-06-11', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(66, 'Jose Lamoda', 'Bago City', 'Male', '1978-01-12', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(67, 'Junie Cong', 'Bago City', 'Female', '1988-06-13', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(68, 'Lazaron Mersedez', 'Bago City', 'Female', '1988-08-13', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(69, 'Erul Ubas', 'Bago', 'Male', '1997-02-04', 'Single', 'School Principal', '', '', '', 0, '', 'Guillane Barre Syndorme', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `planofcare`
--

CREATE TABLE `planofcare` (
  `POCID` int(8) NOT NULL,
  `PatientID` varchar(11) NOT NULL,
  `POCPT` text NOT NULL,
  `POCSessionDate` date NOT NULL,
  `POCTreatment` text NOT NULL,
  `POCRepeatitions` int(11) NOT NULL,
  `POCSets` int(11) NOT NULL,
  `POCBloodPressure` text NOT NULL,
  `POCHeartRate` text NOT NULL,
  `POCRespiratoryRate` text NOT NULL,
  `POCPulse` text NOT NULL,
  `POCAssessment` text NOT NULL,
  `POCPlan` text NOT NULL,
  `POCNextSchedDate` varchar(20) NOT NULL,
  `POCTime` varchar(15) NOT NULL,
  `POCTreatmentBill` int(5) NOT NULL,
  `POCStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planofcare`
--

INSERT INTO `planofcare` (`POCID`, `PatientID`, `POCPT`, `POCSessionDate`, `POCTreatment`, `POCRepeatitions`, `POCSets`, `POCBloodPressure`, `POCHeartRate`, `POCRespiratoryRate`, `POCPulse`, `POCAssessment`, `POCPlan`, `POCNextSchedDate`, `POCTime`, `POCTreatmentBill`, `POCStatus`) VALUES
(26, '3', 'Hans Buglosa', '2018-02-06', 'sample training', 1, 1, '150/90', '150', '150', '150', 'sample', 'sample', '0000-00-00', '01:00 AM', 3, 'Paid'),
(27, '6', 'Hans Buglosa', '2018-02-06', 'Push Up', 1, 1, '155/20', '150', '50', '50', 'sample', 'sample', '2018-01-12', '01:00 AM', 250, 'Unpaid'),
(28, '3', 'Hans Buglosa', '2018-02-06', 'Push Up', 1, 1, '140/90', '140', '50', '40', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Unpaid'),
(29, '5', 'Hans Buglosa', '2018-02-06', 'sample training', 12, 12, 'qwe', 'qwe', 'qwe', 'qwe', 'sample', 'sample', '2018-01-12', '01:00 AM', 250, 'Unpaid'),
(30, '2', 'Hans Buglosa', '2018-02-06', 'sample training', 1, 1, '1', '1', '1', '1', 'sample', 'sample', '2018-01-19', '01:00 AM', 2, 'Paid'),
(33, '6', 'Hans Buglosa', '2018-02-06', 'Push Up', 1, 1, '1', '1', '1', '1', 'sample', 'sample', '2018-01-17', '01:00 AM', 5, 'Unpaid'),
(37, '8', 'Roz Stoddart', '2018-02-07', 'Bed Mobility', 12, 3, '120/80', '120', '40', '38', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Unpaid'),
(39, '9', 'Roz Stoddart', '2018-02-07', 'Balance Training', 12, 2, '120/80', '135', '48', '38', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Unpaid'),
(40, '37', 'Paprika Jong', '2018-02-07', 'Cognitive Therapy ', 12, 4, '120/80', '120', '48', '39', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Paid'),
(41, '2', 'Piayao Apurado', '2018-02-10', 'Melodic Intonation Therapy', 1, 1, '120/80', '120', '39', '28', 'sample', 'sample', '1970-01-01', '01:00 AM', 111, 'Unpaid'),
(42, '3', 'Piayao Apurado', '2018-02-10', 'Melodic Intonation Therapy', 1, 1, '120/80', '120', '4', '33', 'sample', 'sample', '1970-01-01', '01:00 AM', 120, 'Unpaid'),
(43, '37', 'Piayao Apurado', '2018-02-10', 'Melodic Intonation Therapy', 14, 4, '120/80', '120', '49', '39', 'sample', 'sample', '1970-01-01', '01:00 AM', 150, 'Paid'),
(44, '3', 'Stephanie Esgana', '2018-02-10', 'Melodic Intonation Therapy', 12, 3, '123', '123', '123', '123', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Unpaid'),
(45, '37', 'Paprika Jong', '2018-02-10', 'Cognitive Therapy ', 13, 4, '120/80', '120', '39', '40', 'sample', 'sample', '1970-01-01', '01:00 AM', 230, 'Unpaid'),
(46, '2', 'Piayao Apurado', '2018-02-10', 'Static Stretching', 12, 3, '120/80', '120', '39', '40', 'sample', 'sample', '1970-01-01', '01:00 AM', 250, 'Unpaid'),
(47, '3', 'Stephanie Esgana', '2018-02-10', 'Cognitive Therapy ', 12, 3, '120/80', '120', '12', '21', 'sample', 'sample', '1970-01-01', '01:00 AM', 1500, 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `PT_ID` int(11) NOT NULL,
  `PT_Name` varchar(30) NOT NULL,
  `PT_Address` varchar(30) NOT NULL,
  `PT_Gender` varchar(7) NOT NULL,
  `PT_Birthday` date NOT NULL,
  `PT_CivilStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`PT_ID`, `PT_Name`, `PT_Address`, `PT_Gender`, `PT_Birthday`, `PT_CivilStatus`) VALUES
(1, 'Hans Buglosano', 'Bacolod City', 'Male', '1970-01-01', 'Single'),
(2, 'Roz Stoddart', 'Bacolod City', 'Female', '2018-11-08', 'Married'),
(3, 'Mico Hubert Catibog', 'Bacolod City', 'Male', '1994-05-13', 'Single'),
(4, 'Princess Antoinette Donabelle ', 'Bago City', 'Female', '1990-09-30', 'Married'),
(5, 'Jimza Guanzon', 'Bacolod City', 'Female', '2018-04-28', 'Single'),
(6, 'Paprika Jong', 'Hinigaran', 'Male', '2018-09-18', 'Single'),
(7, 'Piayao Apurado', 'Bacolod City', 'Male', '2018-04-28', 'Single'),
(8, 'Stephanie Esgana', 'Bacolod City', 'Female', '1997-02-13', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `RefID` int(8) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `RefDoctor` text NOT NULL,
  `RefHospital` text NOT NULL,
  `RefAddress` text NOT NULL,
  `RefTelephone` int(11) NOT NULL,
  `RefContactPerson` text NOT NULL,
  `RefCases` text NOT NULL,
  `RefCasesDec` text NOT NULL,
  `Ref_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`RefID`, `PatientID`, `RefDoctor`, `RefHospital`, `RefAddress`, `RefTelephone`, `RefContactPerson`, `RefCases`, `RefCasesDec`, `Ref_Date`) VALUES
(1, 2, 'nikko pula', 'riverside', 'bacolod city', 123451, 'joseph ryan', 'Stroke', 'sample description', '0000-00-00'),
(2, 1, 'sample', 'sample', 'sample', 4461039, 'sample', 'sample', 'sample', '0000-00-00'),
(3, 8, 'Dr. Taguro Bago', 'Bacolod Hospital', 'Bacolod City', 992, 'Maria Elena Yanson', 'Stroke', 'Done Several Treatment', '0000-00-00'),
(4, 2, 'Dr. Taguro Bago', 'Riverside Hospital', 'Bacolod City', 2147483647, 'James Petron', 'Stroke', 'done already first sessions', '0000-00-00'),
(5, 37, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 44555111, 'Jade Apurado', 'Stroke', 'Done several sessions, have a problems in chest pain', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_ID` int(11) NOT NULL,
  `training_Name` varchar(30) NOT NULL,
  `training_Desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_ID`, `training_Name`, `training_Desc`) VALUES
(1, 'Bed Mobility', 'Bed Mobility'),
(2, 'Push Up', 'Push Up'),
(3, 'Balance Training', 'Balance Training'),
(4, 'Agility training', 'Agility training'),
(5, 'Balance training', 'Balance training'),
(6, 'Manual Stretching', 'The clinician provides the ext'),
(7, 'Static Stretching', 'A method by which the muscle i'),
(8, 'Ballistic Stretching ', 'Ballistic stretching has falle'),
(9, 'Dynamic Stretching', ' Static stretching immediately'),
(10, 'Cognitive Therapy ', 'Cognitive Therapy '),
(11, 'Melodic Intonation Therapy', 'Melodic intonation therapy is ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(8) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `userType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userType`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pt', 'pt', 'pt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EvalID`),
  ADD UNIQUE KEY `PatientID` (`PatientID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `planofcare`
--
ALTER TABLE `planofcare`
  ADD PRIMARY KEY (`POCID`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`PT_ID`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`RefID`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `backup_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `EvalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `planofcare`
--
ALTER TABLE `planofcare`
  MODIFY `POCID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `PT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `RefID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
