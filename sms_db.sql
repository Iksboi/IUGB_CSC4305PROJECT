-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 déc. 2023 à 17:39
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sms_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `u_id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `admin_creat_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `admin_update_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`u_id`, `username`, `password`, `fname`, `lname`, `date_of_birth`, `admin_creat_date`, `admin_update_date`) VALUES
(81960, 'admin', 'admin', 'admin', 'admina', '2023-10-30', '2023-11-24 14:39:55.000000', '2023-12-04 15:40:57.000000'),
(806043, 'Tom', '12345', 'Tom', 'Cain', '1983-10-30', '2023-11-30 18:59:04.000000', '2023-12-04 15:42:38.000000');

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_creat_date` datetime(6) NOT NULL,
  `course_description` varchar(500) NOT NULL,
  `course_update_date` datetime(6) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_creat_date`, `course_description`, `course_update_date`, `teacher_id`) VALUES
(3733, 'Test course 2', '2023-12-06 23:02:17.000000', 'This course is created to test and evaluate the accuracy of my software engineering project', '2023-12-06 23:04:27.000000', 905914),
(31463, 'Mechanical engineering ', '2023-12-07 01:58:18.000000', 'Mechanical engineering involves the design, analysis, and manufacturing of mechanical systems, encompassing a wide range of industries and applications.', NULL, 906282),
(32739, 'Principles of data science', '2023-12-07 13:20:30.000000', 'This course we are going to teach different techniques that we use in data science', NULL, 905914),
(34187, 'Computer Architechture', '2023-12-06 23:02:35.000000', 'A computer architecture class delves into the design and organization of computer systems. It covers fundamental components like the CPU, memory, and I/O devices, along with instruction set architecture. Students explore processor design, memory hierarchy, and input/output systems. The course addresses parallelism, pipelining, and computer networks, emphasizing both theoretical concepts and practical applications. Performance evaluation techniques, including benchmarking, are also introduced. Th', NULL, 904984),
(34784, 'Supertest', '2023-12-07 00:05:38.000000', 'Calculus 1 introduces fundamental concepts like limits, derivatives, and integrals, providing a foundational understanding of rates of change and accumulation. Students learn to analyze and model functions, setting the groundwork for more advanced calculus studies. The course is essential for various fields, including physics, engineering, and economics.', NULL, 905914),
(37217, 'Calculus I', '2023-12-06 23:13:39.000000', 'This course is created to test and evaluate the accuracy of my software engineering project', NULL, 905914);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `student_id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `student_creat_date` date NOT NULL,
  `u_id` int(6) NOT NULL,
  `student_update_date` datetime(6) DEFAULT NULL,
  `lname` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`student_id`, `username`, `password`, `fname`, `date_of_birth`, `student_creat_date`, `u_id`, `student_update_date`, `lname`) VALUES
(103533, 'Koita', '1234', 'ibrahim', '2000-05-31', '2023-12-07', 0, NULL, 'Koita'),
(104748, 'Test', 'Pass', 'Hassan', '1989-02-12', '2023-11-19', 0, '2023-11-19 17:51:45.000000', 'II Vérité Loinvoyant'),
(106090, 'Erica', '007lol', 'Eric', '2023-11-08', '2023-11-24', 0, '2023-11-24 14:52:27.000000', 'Diakité'),
(109995, 'Solid', '4321', 'Jack', '1993-06-25', '2023-11-25', 0, NULL, 'Hayter');

-- --------------------------------------------------------

--
-- Structure de la table `student_course`
--

CREATE TABLE `student_course` (
  `student_id` int(6) NOT NULL,
  `course_id` int(4) NOT NULL,
  `midterm_grade` int(3) DEFAULT NULL,
  `final_grade` int(3) DEFAULT NULL,
  `enrollment_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `student_course`
--

INSERT INTO `student_course` (`student_id`, `course_id`, `midterm_grade`, `final_grade`, `enrollment_id`) VALUES
(104748, 34784, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `teacher_creat_date` date NOT NULL,
  `lname` varchar(55) NOT NULL,
  `teacher_update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `fname`, `teacher_creat_date`, `lname`, `teacher_update_date`) VALUES
(904984, 'Umbre', 'test', 'Umbre', '2023-12-06', 'Tombetoile', NULL),
(905914, 'teacher', 'teacher', 'Teacher', '2023-12-06', 'Teacher', NULL),
(906282, 'Kone', 'Kone', 'Oumar', '2023-12-07', 'Kone', NULL),
(906569, 'teacher2', 'teacher', 'Harry', '2023-12-06', 'Jédusor', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD KEY `u_id` (`u_id`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `teacher_id_2` (`teacher_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Index pour la table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Contraintes pour la table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `FK_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `FK_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
