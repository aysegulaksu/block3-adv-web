
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `petFoodExpiration`
--

CREATE TABLE `petFoodExpiration` (
  `expID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `expirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petProduct`
--

CREATE TABLE `petProduct` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `typeID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `petProduct`
--

INSERT INTO `petProduct` (`productID`, `productName`, `typeID`, `categoryID`, `brandID`) VALUES
(10, 'Chicken Pate 160gr', 1, 1, 1),
(11, 'RuffBall', 2, 2, 4),
(13, 'Raw beef blend 5.6kg', 1, 2, 2),
(14, 'Go fish puzzle feeder', 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `petToySize`
--

CREATE TABLE `petToySize` (
  `sizeID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productBrand`
--

CREATE TABLE `productBrand` (
  `brandID` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productBrand`
--

INSERT INTO `productBrand` (`brandID`, `brand`) VALUES
(1, 'WELLNESS'),
(2, 'FORMULA RAW'),
(3, 'JACKSON GALAXY'),
(4, 'RUFFWEAR'),
(10, 'PLANET DOG'),
(11, 'ORIJEN'),
(14, 'ACANA'),
(15, 'WERUVA'),
(16, 'NINA OTTOSON'),
(17, 'kong'),
(18, 'Hello'),
(19, 'oo00000'),
(20, 'ZIWI PEAK'),
(21, 'royal ');

-- --------------------------------------------------------

--
-- Table structure for table `productCategory`
--

CREATE TABLE `productCategory` (
  `categoryID` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productCategory`
--

INSERT INTO `productCategory` (`categoryID`, `category`) VALUES
(1, 'Cat Products'),
(2, 'Dog Products');

-- --------------------------------------------------------

--
-- Table structure for table `productType`
--

CREATE TABLE `productType` (
  `typeID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productType`
--

INSERT INTO `productType` (`typeID`, `type`) VALUES
(1, 'Pet Food'),
(2, 'Pet Toys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petFoodExpiration`
--
ALTER TABLE `petFoodExpiration`
  ADD PRIMARY KEY (`expID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `petProduct`
--
ALTER TABLE `petProduct`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `typeID` (`typeID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`);

--
-- Indexes for table `petToySize`
--
ALTER TABLE `petToySize`
  ADD PRIMARY KEY (`sizeID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `productBrand`
--
ALTER TABLE `productBrand`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `productCategory`
--
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `productType`
--
ALTER TABLE `productType`
  ADD PRIMARY KEY (`typeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petFoodExpiration`
--
ALTER TABLE `petFoodExpiration`
  MODIFY `expID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petProduct`
--
ALTER TABLE `petProduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `petToySize`
--
ALTER TABLE `petToySize`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productBrand`
--
ALTER TABLE `productBrand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `productCategory`
--
ALTER TABLE `productCategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productType`
--
ALTER TABLE `productType`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petFoodExpiration`
--
ALTER TABLE `petFoodExpiration`
  ADD CONSTRAINT `petFoodExpiration_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `petProduct` (`productID`);

--
-- Constraints for table `petProduct`
--
ALTER TABLE `petProduct`
  ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `productBrand` (`brandID`),
  ADD CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `productCategory` (`categoryID`),
  ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType` (`typeID`);

--
-- Constraints for table `petToySize`
--
ALTER TABLE `petToySize`
  ADD CONSTRAINT `petToySize_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `petProduct` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
