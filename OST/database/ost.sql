-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 04:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ost`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(12) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(10) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(1, 'Manjeet', 'manjeet@gamil.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sortings`
--

CREATE TABLE `sortings` (
  `bubble_sort` longtext NOT NULL,
  `quick_sort` longtext NOT NULL,
  `merge_sort` longtext NOT NULL,
  `selection_sort` longtext NOT NULL,
  `insertion_sort` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sortings`
--

INSERT INTO `sortings` (`bubble_sort`, `quick_sort`, `merge_sort`, `selection_sort`, `insertion_sort`) VALUES
('1.  Initialization \r\n        Set i = 0\r\n2.  For Loop until i < N \r\n3.  Set j = 0\r\n4.  For Loop until j < (N-1)-1\r\n5.  If A[j] > A[j+1] then \r\n        Set temp = A[j] \r\n        Set A[j] = A[j+1]\r\n        Set A[j+1] = temp  \r\n6.  End If \r\n7.  Exit', '1:  [Initially] \r\n        low = l\r\n        high = h        \r\n        key = a[(l+ h)/2] [Middle element of the element of the list]       \r\n        2:  Repeat through step 7 while (low<=high)        \r\n3:  Repeat step 4 while (a([low]<key))        \r\n4:  low=low+1        \r\n5:  Repeat step 6 while (a([high]<key))       \r\n6:  high = high -1        \r\n7:  if(low<=high)        \r\n        temp =a[low]        \r\n        a[low]=a[high]        \r\n        a[high]=temp       \r\n        low-low+1        \r\n        high-high-1        \r\n8:  if (l<high) Quick_sort (a, l, high)\r\n9:  if (low<h) Quick_sort (a, low, h)\r\n10: Exit', '1:  [INITIALIZE] SET I = BEG, J = MID + 1, INDEX = 0\r\n2:  Repeat while (I <= MID) AND (J<=END)\r\n            IF ARR[I] < ARR[J]\r\n                SET TEMP[INDEX] = ARR[I]\r\n                SET I = I + 1\r\n            ELSE\r\n                SET TEMP[INDEX] = ARR[J]\r\n                SET J = J + 1\r\n            [END OF IF]\r\n            SET INDEX = INDEX + 1\r\n        [END OF LOOP]\r\n3:  [Copy the remaining elements of right sub-array, if any]\r\n        IF I > MID\r\n            Repeat while J <= END\r\n                SET TEMP[INDEX] = ARR[J]\r\n                SET INDEX = INDEX + 1, SET J = J + 1\r\n            [END OF LOOP]\r\n        [Copy the remaining elements of left sub-array, if any]\r\n        ELSE\r\n            Repeat while I <= MID\r\n                SET TEMP[INDEX] = ARR[I]\r\n                SET INDEX = INDEX + 1, SET I = I + 1\r\n            [END OF LOOP]\r\n        [END OF IF]\r\n4:  [Copy the contents of TEMP back to ARR] SET K = 0\r\n5:  Repeat while K < INDEX\r\n            SET ARR[K] = TEMP[K]\r\n            SET K = K + 1\r\n        [END OF LOOP]\r\n6:  Exit', '1:  [INITIALIZE] min = a[0]\r\n2:  For i = 0 to (n-1)\r\n        Set min = a[i]\r\n        Set loc = i\r\n        For j=i+1 to (n-1)\r\n            If a[j]<min\r\n                Set min = a[j]\r\n                Set loc = j\r\n            [End of If]\r\n        [End of For Loop Structure]\r\n        If loc!=i\r\n            Set temp = a[i]\r\n            Set a[i] = a[loc]\r\n            Set a[loc] = temp\r\n        [End of If]\r\n    [End of For loop Structure]\r\n3:  Exit', '1:  Set k = 1.\r\n2:  For k = 1 to (n-1)\r\n        Set temp = a[ k]\r\n        Set j = k - 1\r\n        While temp < a[j] and (i >= 0) perform the following steps.\r\n            Set a[j+1] = a[j]\r\n        [End of loop structure]\r\n        Assign the value of temp to a[j+1]\r\n    [End of for loop structure]\r\n3:  Exit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
