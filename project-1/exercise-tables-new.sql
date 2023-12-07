
-- ###########Table structure for table `productType` ###########
CREATE TABLE `productType` (
  `typeID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- Dumping data for table `productType`
INSERT INTO `productType` (`typeID`, `type`) VALUES
(1, 'Pet Food'),
(2, 'Pet Toys');
-- Indexes for table `productType`
ALTER TABLE `productType`
  ADD PRIMARY KEY (`typeID`);
-- AUTO_INCREMENT for table `productType`
ALTER TABLE `productType`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

-- #############Table structure for table `productCategory`#########
CREATE TABLE `productCategory` (
  `categoryID` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- Dumping data for table `productCategory`
INSERT INTO `productCategory` (`categoryID`, `category`) VALUES
(1, 'Cat Products'),
(2, 'Dog Products');
-- Indexes for table `productCategory`
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`categoryID`);
-- AUTO_INCREMENT for table `productCategory`
ALTER TABLE `productCategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- ##########Table structure for table `productBrand` ########
CREATE TABLE `productBrand` (
  `brandID` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table `productBrand`
INSERT INTO `productBrand` (`brandID`, `brand`) VALUES
(1, 'Wellness'),
(2, 'FormulaRaw'),
(3, 'Jackson Galaxy'),
(4, 'Ruffwear');
-- Indexes for table `productBrand`

ALTER TABLE `productBrand`
  ADD PRIMARY KEY (`brandID`);
-- AUTO_INCREMENT for table `productBrand`
ALTER TABLE `productBrand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

----########## Table structure for table `petToySize`
CREATE TABLE `petToySize` (
  `sizeID` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- Dumping data for table `petToySize`
INSERT INTO `petToySize` (`sizeID`, `size`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');
-- Indexes for table `petToySize`
ALTER TABLE `petToySize`
  ADD PRIMARY KEY (`sizeID`);
-- AUTO_INCREMENT for table `petToySize`
--
ALTER TABLE `petToySize`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


--########### Table structure for table `petFoodExpiration`
CREATE TABLE `petFoodExpiration` (
  `expID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `expirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Indexes for table `petFoodExpiration`
ALTER TABLE `petFoodExpiration`
  ADD PRIMARY KEY (`expID`);
-- AUTO_INCREMENT for table `petFoodExpiration`
ALTER TABLE `petFoodExpiration`
  MODIFY `expID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

-----#########Table structure for table `petProduct`
CREATE TABLE `petProduct` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `typeID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `cost` float NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `petProduct` (`productID`, `productName`, `typeID`, `categoryID`, `brandID`, `cost`, `price`) VALUES
(10, 'Chicken Pate 160gr', 1, 1, 1, 2.25, 3.25),
(11, 'RuffBall', 2, 2, 4, 25, 50);
-- Indexes for table `petProduct`
--
ALTER TABLE `petProduct`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `typeID` (`typeID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`);

-- AUTO_INCREMENT for dumped tables
-- AUTO_INCREMENT for table `petProduct`
ALTER TABLE `petProduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
-- Constraints for table `petProduct`
ALTER TABLE `petProduct`
  ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `productBrand` (`brandID`),
  ADD CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `productCategory` (`categoryID`),
  ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType` (`typeID`);
COMMIT;

-- #############Table structure for table `inventory`
CREATE TABLE `inventory` (
  `inventoryID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qnty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- Indexes for table `inventory`
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryID`);
-- AUTO_INCREMENT for table `inventory`
ALTER TABLE `inventory`
  MODIFY `inventoryID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


----
ALTER TABLE `inventory` ADD CONSTRAINT `productID` FOREIGN KEY (`productID`) REFERENCES `petProduct`(`productID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `petProduct` (`productID`, `productName`, `typeID`, `categoryID`, `brandID`, `qnty`, `cost`, `price`) VALUES (NULL, 'Raw beef blend 5.6kg', '1', '2', '2', '2', '178', '250'), (NULL, 'Go fish puzzle feeder', '2', '1', '3', '2', '30', '60');

SELECT * FROM petProduct NATURAL JOIN productCategory WHERE productCategory.categoryID = petProduct.categoryID;


SELECT * FROM petProduct JOIN productType ON petProduct.typeID = productType.typeID;

SELECT * FROM petProduct NATURAL JOIN inventory WHERE inventory.productID = petProduct.productID;