-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 06:19 PM
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
-- Database: `jeca`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `syllabus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`ID`, `name`, `photo`, `syllabus`) VALUES
(1, 'C Programming', 'assets/images/c_programming.jpg', 'Variables and Data types, IO Operations, Operators and Expressions,\r\nControl Flow statements, Functions, Array, Pointers, String Handling, Structures and Unions,\r\nFiles Handling, Pre-Processor Directives, Command Line Arguments.'),
(2, 'Object Oriented Programming', 'assets/images/oop.jpg', 'Data Types, If / Else If / Else, Loops, Function, Switch case,\r\nPointer, Structure, Array, String, Function Overloading, Function templates, SCOPE of\r\nvariable, Type aliases (typedef / using), Unions, Enumerated types (enum), Class,\r\nConstructors, Overloading Constructors, Member initialization in constructors, Pointers to\r\nclasses, Overloading Operators, Keyword ‘this’, Static Members, Const Member Functions,\r\nClass Templates, Template Specialization, Namespace, Friendship (Friend Functions &\r\nFriend Classes), Inheritance, Polymorphism, Virtual Members, Abstract base class.'),
(3, 'Unix', 'assets/images/unix.jpg', 'Following commands and its different options: Is, ps, pwd, mv, cp, touch, cat, time, cal,\r\nbc, sort, diff, wc, comm, In, du, kill, sleep, chmod, chown, chgrp, top, nice, renice, cut, paste,\r\ngrep, file, whereis, which, echo, env, PATH, CLASSPATH, find.'),
(4, 'Data Structure', 'assets/images/ds.jpg', 'Searching, Sorting, Stack, Queue, Linked List, Tree, Graph.'),
(5, 'Introduction of Computers', 'assets/images/ioc.jpg', 'Bus structure, Basic I/O, Subroutines, Interrupt, DMA, RAM,\r\nROM, pipeline, system calls.'),
(6, 'Operating System', 'assets/images/os.jpg', 'Process, Thread, CPU Scheduling, Deadlock, Synchronization, Memory\r\nManagement, Disk Management, File Management.'),
(7, 'Computer Network', 'assets/images/cn.jpg', 'Concepts of networking, Application areas, Classification, Reference\r\nmodels, Transmission environment & technologies, Routing algorithms, IP, UDP & TCP\r\nprotocols, IPv4 and IPv6, Reliable data transferring methods, Application protocols,\r\nNetwork Security, Management systems, Perspectives of communication networks.'),
(8, 'Database Management System', 'assets/images/dbms.jpg', 'Introductions to Databases, ER diagram, Relational\r\nAlgebra, Relational Calculus, SQL, Normalization, Transactions, Indexing, Query\r\noptimization.'),
(9, 'Software Engineering', 'assets/images/se.jpg', 'Introduction to Software Engineering, A Generic view of process,\r\nProcess models, Software Requirements, Requirements engineering process, System\r\nmodels, Design Engineering, Testing Strategies, Product metrices, Metrices for Process &\r\nProducts, Risk management, Quality Management.'),
(10, 'Machine Learning', 'assets/images/ml.jpg', 'Classification, Decision Tree Learning, Artificial Neural Networks,\r\nSupport Vector Machines, Bayesian Learning, Clustering, Hidden Markov Models.');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` varchar(255) DEFAULT NULL,
  `option_a` varchar(255) DEFAULT NULL,
  `option_b` varchar(255) DEFAULT NULL,
  `option_c` varchar(255) DEFAULT NULL,
  `option_d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(1) DEFAULT NULL,
  `chapter_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `chapter_id`) VALUES
(20, 'What is the time complexity of binary search algorithm in the worst-case scenario?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'B', 4),
(21, 'Which of the following sorting algorithms has a worst-case time complexity of O(n^2)?', 'Quick sort', 'Merge sort', 'Bubble sort', 'Radix sort', 'C', 4),
(22, 'Which data structure follows the \"last in, first out\" (LIFO) principle?', 'Stack', 'Queue', 'Linked List', 'Tree', 'A', 4),
(23, 'Which data structure follows the \"first in, first out\" (FIFO) principle?', 'Stack', 'Queue', 'Linked List', 'Tree', 'B', 4),
(24, 'Which data structure can be used to implement a hash table?', 'Stack', 'Queue', 'Linked List', 'Array', 'D', 4),
(25, 'Which of the following is not a type of tree?', 'Binary tree', 'AVL tree', 'Trie tree', 'Bubble tree', 'D', 4),
(26, 'Which data structure is used to represent a hierarchical structure in computer science?', 'Stack', 'Queue', 'Linked List', 'Tree', 'D', 4),
(27, 'Which data structure is used to represent a non-linear relationship between data?', 'Stack', 'Queue', 'Linked List', 'Graph', 'D', 4),
(28, 'Which data structure is used to implement recursion?', 'Stack', 'Queue', 'Linked List', 'Tree', 'A', 4),
(29, 'Which data structure is used to perform breadth-first search in a graph?', 'Stack', 'Queue', 'Linked List', 'Tree', 'B', 4),
(30, 'What is the time complexity of binary search algorithm in the worst-case scenario?', 'O(1)', 'O(log n)', 'O(n)', 'O(n^2)', 'B', 4),
(31, 'Which of the following sorting algorithms has a worst-case time complexity of O(n^2)?', 'Quick sort', 'Merge sort', 'Bubble sort', 'Radix sort', 'C', 4),
(32, 'Which data structure follows the \"last in, first out\" (LIFO) principle?', 'Stack', 'Queue', 'Linked List', 'Tree', 'A', 4),
(33, 'Which data structure follows the \"first in, first out\" (FIFO) principle?', 'Stack', 'Queue', 'Linked List', 'Tree', 'B', 4),
(34, 'Which data structure can be used to implement a hash table?', 'Stack', 'Queue', 'Linked List', 'Array', 'D', 4),
(35, 'Which of the following is not a type of tree?', 'Binary tree', 'AVL tree', 'Trie tree', 'Bubble tree', 'D', 4),
(36, 'Which data structure is used to represent a hierarchical structure in computer science?', 'Stack', 'Queue', 'Linked List', 'Tree', 'D', 4),
(37, 'Which data structure is used to represent a non-linear relationship between data?', 'Stack', 'Queue', 'Linked List', 'Graph', 'D', 4),
(38, 'Which data structure is used to implement recursion?', 'Stack', 'Queue', 'Linked List', 'Tree', 'A', 4),
(39, 'Which data structure is used to perform breadth-first search in a graph?', 'Stack', 'Queue', 'Linked List', 'Tree', 'B', 4),
(40, 'Which of the following is a stable sorting algorithm?', 'Quick sort', 'Merge sort', 'Heap sort', 'Selection sort', 'B', 4),
(41, 'Which of the following is not an application of a stack?', 'Parenthesis matching', 'Expression evaluation', 'Backtracking', 'Graph traversal', 'D', 4),
(42, 'Which of the following is not an application of a queue?', 'Simulation of real-world systems', 'Buffering of data', 'Scheduling of tasks', 'Expression evaluation', 'D', 4),
(43, 'Which of the following is not a property of a binary search tree?', 'Each node can have at most two children.', 'The left subtree of a node contains only smaller elements.', 'The right subtree of a node contains only larger elements.', 'The height of the tree can be greater than log n.', 'D', 4),
(44, 'Which of the following algorithms uses divide and conquer approach?', 'Bubble sort', 'Insertion sort', 'Merge sort', 'Selection sort', 'C', 4),
(45, 'Which of the following is a data structure that allows efficient insertion and deletion at both ends?', 'Stack', 'Queue', 'Linked List', 'Tree', 'C', 4),
(46, 'Which of the following is a type of graph traversal algorithm?', 'Bubble sort', 'Merge sort', 'Depth-first search', 'Radix sort', 'C', 4),
(47, 'Which data structure is used to implement a priority queue?', 'Stack', 'Queue', 'Linked List', 'Heap', 'D', 4),
(48, 'Which of the following is a type of tree where each node has at most two children?', 'AVL tree', 'Binary tree', 'Red-black tree', 'Splay tree', 'B', 4),
(49, 'Which of the following is not a valid data type in C programming?', 'float', 'double', 'real', 'int', 'C', 1),
(50, 'What will be the output of the following code? \n\n#include<stdio.h> \nint main() { \n int a = 5; \n printf(\"%d\", a++); \n printf(\"%d\", ++a); \n return 0; \n}', '56', '66', '57', '67', 'C', 1),
(51, 'Which of the following is not a valid data type in C programming?', 'float', 'long double', 'char double', 'unsigned int', 'C', 1),
(52, 'What will be the output of the following code? \n\n#include<stdio.h> \nint main() { \n int a = 5, b = 10; \n int c = a++ + b--; \n printf(\"%d\", c); \n return 0; \n}', '14', '15', '16', '17', 'A', 1),
(53, 'What is the output of the following code? \n\n#include<stdio.h> \nint main() { \n int i; \n for(i=1; i<=5; i++) { \n printf(\"%d\", i); \n } \n return 0; \n}', '12345', '54321', '11111', '55555', 'A', 1),
(54, 'What is encapsulation in object oriented programming?', 'Combining data and functions into a single unit', 'Hiding data and functions from other units', 'Exposing data and functions to other units', 'Storing data and functions in separate units', 'B', 2),
(55, 'What is inheritance in object oriented programming?', 'The ability of an object to take on many forms', 'The ability of a subclass to override a method of its superclass', 'The ability to hide data and functions from other units', 'The ability to store data and functions in separate units', 'B', 2),
(56, 'What is polymorphism in object oriented programming?', 'The ability of an object to take on many forms', 'The ability of a subclass to override a method of its superclass', 'The ability to hide data and functions from other units', 'The ability to store data and functions in separate units', 'A', 2),
(57, 'What is a class in object oriented programming?', 'A blueprint for creating objects', 'An instance of a class', 'A function that returns a value', 'A variable that holds multiple values', 'A', 2),
(58, 'What is an object in object oriented programming?', 'An instance of a class', 'A blueprint for creating objects', 'A function that returns a value', 'A variable that holds multiple values', 'A', 2),
(59, 'What is method overloading in object oriented programming?', 'Creating a method with the same name as an existing method in a class', 'Creating a method with the same name and parameters as an existing method in a class', 'Creating a method with a different name than an existing method in a class', 'Creating a method with a different number of parameters than an existing method in a class', 'B', 2),
(60, 'Which of the following is not a feature of object-oriented programming?', 'Inheritance', 'Polymorphism', 'Abstraction', 'Procedural', 'D', 2),
(61, 'Which of the following is not a feature of object-oriented programming?', 'Inheritance', 'Polymorphism', 'Abstraction', 'Procedural', 'D', 2),
(62, 'Which of the following is an example of encapsulation?', 'A class with private data members', 'A class with public data members', 'A class with protected data members', 'A class with static data members', 'A', 2),
(63, 'What is polymorphism in object-oriented programming?', 'The ability to hide the complexity of an object from outside users', 'The ability to contain objects of other classes', 'The ability of a class to inherit properties and methods from another class', 'The ability of an object to take on many forms', 'D', 2),
(64, 'Which command is used to display the contents of a file on the terminal?', 'cat', 'ls', 'rm', 'mkdir', 'A', 3),
(65, 'Which command is used to display the current directory?', 'pwd', 'cd', 'ls', 'chmod', 'A', 3),
(66, 'What command is used to search for a particular text string in a file?', 'grep', 'sed', 'awk', 'cut', 'A', 3),
(67, 'Which command is used to list all files and directories including hidden ones?', 'ls -a', 'ls -l', 'ls -s', 'ls -t', 'A', 3),
(68, 'Which command is used to create a new directory?', 'mkdir', 'touch', 'rm', 'mv', 'A', 3),
(69, 'Which of the following is NOT a type of computer?', 'Smartphone', 'Mainframe', 'Supercomputer', 'Ultrabook', 'A', 5),
(70, 'What is the main function of an operating system?', 'To manage computer hardware and software resources', 'To provide access to the Internet', 'To create and edit text documents', 'To scan and remove viruses', 'A', 5),
(71, 'What is the purpose of a motherboard?', 'To connect all computer components together', 'To create and edit text documents', 'To provide access to the Internet', 'To scan and remove viruses', 'A', 5),
(72, 'Which type of memory is volatile?', 'RAM', 'ROM', 'Flash memory', 'Cache memory', 'A', 5),
(73, 'What is the function of a CPU?', 'To execute instructions', 'To store data permanently', 'To display images on a screen', 'To provide Internet access', 'A', 5),
(74, 'What is the main function of an operating system?', 'To manage computer hardware and software resources', 'To provide access to the Internet', 'To create and edit text documents', 'To scan and remove viruses', 'A', 6),
(75, 'Which of the following is NOT an operating system?', 'Microsoft Office', 'Windows', 'macOS', 'Linux', 'A', 6),
(76, 'What is the role of the kernel in an operating system?', 'To manage hardware resources and provide services to other software', 'To provide access to the Internet', 'To create and edit text documents', 'To scan and remove viruses', 'A', 6),
(77, 'What is virtual memory?', 'A space in the hard disk that is used as an extension of RAM', 'A type of memory that is faster than RAM', 'A type of memory that is used to store long-term data', 'A type of memory that is only used by the kernel', 'A', 6),
(78, 'What is the difference between a process and a thread?', 'A process is a program in execution, while a thread is a subset of a process', 'A thread is a program in execution, while a process is a subset of a thread', 'A process can only execute one task at a time, while a thread can execute multiple tasks at the same time', 'A thread can only execute one task at a time, while a process can execute multiple tasks at the same time', 'A', 6),
(79, 'What is a deadlock?', 'A situation where two or more processes are waiting for each other to release resources', 'A situation where a process takes up too much CPU time', 'A situation where a program crashes due to a memory leak', 'A situation where a virus infects the operating system', 'A', 6),
(80, 'What is the maximum data transfer rate of Category 6 Ethernet cable?', '1 Gbps', '10 Gbps', '100 Mbps', '1 Tbps', 'B', 7),
(81, 'Which protocol is used for sending email over the Internet?', 'FTP', 'HTTP', 'SMTP', 'POP3', 'C', 7),
(82, 'What is the default subnet mask for a Class B IP address?', '255.0.0.0', '255.255.0.0', '255.255.255.0', '255.255.255.255', 'B', 7),
(83, 'What is the primary function of a router?', 'To connect multiple devices within a network', 'To translate IP addresses to domain names', 'To filter network traffic based on IP addresses', 'To connect multiple networks together', 'D', 7),
(84, 'Which layer of the OSI model is responsible for reliable end-to-end delivery of data?', 'Transport layer', 'Data link layer', 'Network layer', 'Session layer', 'A', 7),
(85, 'Which type of cable is typically used for connecting two devices directly to each other?', 'Coaxial cable', 'Fiber optic cable', 'UTP cable', 'Crossover cable', 'D', 7),
(86, 'Which network topology is characterized by a single central node connecting all other nodes?', 'Bus', 'Star', 'Ring', 'Mesh', 'B', 7),
(87, 'Which protocol is used for secure file transfer over the Internet?', 'FTP', 'HTTP', 'SMTP', 'SFTP', 'D', 7),
(88, 'What is the purpose of a primary key in a database table?', 'To uniquely identify each row in the table', 'To sort the rows in the table', 'To group the rows in the table', 'To aggregate the rows in the table', 'A', 8),
(89, 'What is a foreign key in a database table?', 'A field that uniquely identifies each row in the table', 'A field that references a primary key in another table', 'A field that calculates a value based on other fields', 'A field that indicates whether a row is active or inactive', 'B', 8),
(90, 'What is the difference between a clustered and non-clustered index in a database?', 'A clustered index is used for searching, while a non-clustered index is used for sorting', 'A clustered index physically reorders the data in the table, while a non-clustered index does not', 'A clustered index is stored in a separate table, while a non-clustered index is stored in the same table', 'A clustered index is created automatically when a table is created, while a non-clustered index is created manually', 'B', 8),
(91, 'What is normalization in a database?', 'The process of breaking up a large table into smaller, related tables', 'The process of creating a new table based on an existing table', 'The process of adding new data to a table', 'The process of deleting data from a table', 'A', 8),
(92, 'What is the purpose of a transaction in a database?', 'To group multiple SQL statements together into a single unit of work', 'To create a new database object, such as a table or view', 'To modify the structure of an existing table', 'To retrieve data from a table', 'A', 8),
(93, 'What is the purpose of the software requirements specification document?', 'To define the features and functions of the software', 'To identify potential issues and risks', 'To provide a roadmap for the development team', 'All of the above', 'A', 9),
(94, 'What is the purpose of software design?', 'To define the architecture of the system', 'To provide a detailed plan for implementation', 'To identify potential issues and risks', 'All of the above', 'D', 9),
(95, 'What is the purpose of software testing?', 'To ensure that the software meets the requirements', 'To identify and fix defects in the software', 'To improve the quality of the software', 'All of the above', 'D', 9),
(96, 'What is the difference between verification and validation in software testing?', 'Verification ensures that the software meets the requirements, while validation ensures that the software is fit for its intended use.', 'Verification ensures that the software is fit for its intended use, while validation ensures that the software meets the requirements.', 'Verification and validation are the same thing.', 'None of the above', 'A', 9),
(97, 'What is the purpose of version control in software development?', 'To track changes to the software codebase', 'To enable collaboration between developers', 'To maintain different versions of the software', 'All of the above', 'D', 9),
(98, 'What is the waterfall model of software development?', 'A linear, sequential approach to software development', 'An iterative approach to software development', 'A hybrid approach to software development', 'None of the above', 'A', 9),
(99, 'What is the agile model of software development?', 'An iterative approach to software development', 'A linear, sequential approach to software development', 'A hybrid approach to software development', 'None of the above', 'A', 9),
(100, 'Which of the following is a supervised learning algorithm?', 'K-means', 'Decision Tree', 'PCA', 'SVM', 'B', 10),
(101, 'Which of the following is used for dimensionality reduction in machine learning?', 'K-means', 'Decision Tree', 'PCA', 'SVM', 'C', 10),
(102, 'Which of the following is an unsupervised learning algorithm?', 'K-means', 'Decision Tree', 'Random Forest', 'SVM', 'A', 10),
(103, 'What is the difference between regression and classification?', 'Regression is used for predicting continuous values while classification is used for predicting discrete values', 'Classification is used for predicting continuous values while regression is used for predicting discrete values', 'Both regression and classification are used for predicting continuous values', 'Both regression and classification are used for predicting discrete values', 'A', 10),
(104, 'Which of the following is a popular deep learning framework?', 'Scikit-Learn', 'PyTorch', 'TensorFlow', 'Keras', 'C', 10),
(105, 'Which of the following is an example of a reinforcement learning algorithm?', 'Random Forest', 'Decision Tree', 'Q-Learning', 'SVM', 'C', 10),
(106, 'Which of the following is a measure of how well a model is able to generalize to new data?', 'Bias', 'Variance', 'Underfitting', 'Overfitting', 'B', 10),
(107, 'What is the process of selecting the best model for a given problem?', 'Model tuning', 'Model fitting', 'Model selection', 'Model validation', 'C', 10),
(108, 'Which of the following is used for text classification in machine learning?', 'Naive Bayes', 'Logistic Regression', 'Linear Regression', 'Decision Tree', 'A', 10);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `name`, `username`, `email`, `phone`, `password`) VALUES
(9, 'John Doe', 'johndoe', 'johndoe@gmail.com', '1234567890', '$2y$10$7zC1HDaqhHe2FhvOXEuNGO0PaaNUYhP1IvGQA.57JgKN5NCKwxaE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
