
-- ###########Table structure for table `productType` ###########
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
-- Indexes for table `productType`
--
ALTER TABLE `productType`
  ADD PRIMARY KEY (`typeID`);

-- AUTO_INCREMENT for table `productType`
--
ALTER TABLE `productType`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

--
-- #############Table structure for table `productCategory`#########
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


--
-- Indexes for table `productCategory`
--
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`categoryID`);

--
-- AUTO_INCREMENT for table `productCategory`
--
ALTER TABLE `productCategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

-- ##########Table structure for table `productBrand` ########
--

CREATE TABLE `productBrand` (
  `brandID` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productBrand`
--

INSERT INTO `productBrand` (`brandID`, `brand`) VALUES
(1, 'Wellness'),
(2, 'FormulaRaw'),
(3, 'Jackson Galaxy'),
(4, 'Ruffwear');


-- Indexes for table `productBrand`
--
ALTER TABLE `productBrand`
  ADD PRIMARY KEY (`brandID`);


--
-- AUTO_INCREMENT for table `productBrand`
--
ALTER TABLE `productBrand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

--########################Table for productSize 

CREATE TABLE `productSize` (
  `sizeID` int(11) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `productSize`
--

INSERT INTO `productSize` (`sizeID`, `size`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productSize`
--
ALTER TABLE `productSize`
  ADD PRIMARY KEY (`sizeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productSize`
--
ALTER TABLE `productSize`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

--
-- Table structure for table `petProduct`
--

CREATE TABLE `petProduct` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `typeID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `sizeID` int(11) NOT NULL,
  `cost` float NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petProduct`
--
ALTER TABLE `petProduct`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `typeID` (`typeID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`),
  ADD KEY `sizeID` (`sizeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petProduct`
--
ALTER TABLE `petProduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petProduct`
--
ALTER TABLE `petProduct`
  ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `productBrand` (`brandID`),
  ADD CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `productCategory` (`categoryID`),
  ADD CONSTRAINT `sizeID` FOREIGN KEY (`sizeID`) REFERENCES `productSize` (`sizeID`),
  ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType` (`typeID`);
COMMIT;








INSERT INTO `productSize` (`sizeID`, `size`) VALUES (NULL, 'Small'), (NULL, 'Medium'), (NULL, 'Large');

ALTER TABLE `petProduct` ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType`(`typeID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `petProduct` ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `productBrand`(`brandID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `petProduct` ADD CONSTRAINT `sizeID` FOREIGN KEY (`sizeID`) REFERENCES `productSize`(`sizeID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `petProduct` ADD CONSTRAINT `categoryID` FOREIGN KEY (`categoryID`) REFERENCES `productCategory`(`categoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `petProduct` (`productID`, `productName`, `typeID`, `categoryID`, `brandID`, `sizeID`, `cost`, `price`) VALUES (NULL, 'Chicken Pate 160gr', '1', '1', '1', '2', '2.25', '3.25');

UPDATE `petProduct` SET `productName` = 'RuffBall', `typeID` = '2', `categoryID` = '2', `brandID` = '4', `sizeID` = '3', `cost` = '25', `price` = '50' WHERE `petProduct`.`productID` = 11;



-- #############Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qnty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;



