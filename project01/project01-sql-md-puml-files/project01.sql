----- UPDATED ALL TABLES--------

--------NEW TABLES------
--PK (Primary Key), FK (Foreign Key)

-- Table structure for table `petFood`
CREATE TABLE `petFood` (
  `petFoodID` int(11) NOT NULL,--PK
  `categoryID` int(11) NOT NULL, --FK
  `brandID` int(11) NOT NULL, --FK
  `FoodName` varchar(255) NOT NULL,
  `expID` int(11) NOT NULL, --FK
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------
-- Table structure for table `petFoodExpiration`
CREATE TABLE `petFoodExpiration` (
  `expID` int(11) NOT NULL, --PK
  `expirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------
-- Table structure for table `petToy`
CREATE TABLE `petToy` (
  `petToyID` int(11) NOT NULL,--PK
  `categoryID` int(11) NOT NULL, --FK
  `brandID` int(11) NOT NULL, --FK
  `toyName` varchar(255) NOT NULL,
  `sizeID` int(11) NOT NULL --FK
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------
-- Table structure for table `petToySize`
CREATE TABLE `petToySize` (
  `sizeID` int(11) NOT NULL, --PK
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------
-- Table structure for table `productBrand`
CREATE TABLE `productBrand` (
  `brandID` int(11) NOT NULL, --PK
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------
-- Table structure for table `productCategory`
CREATE TABLE `productCategory` (
  `categoryID` int(11) NOT NULL, --PK
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- ------------------------#####------------------------------

-- Indexes for table `petFood`
ALTER TABLE `petFood`
  ADD PRIMARY KEY (`petFoodID`),
  ADD KEY `expID` (`expID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`);
-- Indexes for table `petFoodExpiration`
ALTER TABLE `petFoodExpiration`
  ADD PRIMARY KEY (`expID`);
-- Indexes for table `petToy`
ALTER TABLE `petToy`
  ADD PRIMARY KEY (`petToyID`),
  ADD KEY `sizeID` (`sizeID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `brandID` (`brandID`);
-- Indexes for table `petToySize`
ALTER TABLE `petToySize`
  ADD PRIMARY KEY (`sizeID`);
-- Indexes for table `productBrand`
ALTER TABLE `productBrand`
  ADD PRIMARY KEY (`brandID`);
-- Indexes for table `productCategory`
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`categoryID`);
-- Indexes for table `productType`
ALTER TABLE `productType`
  ADD PRIMARY KEY (`typeID`);
--------#######-----------

-- AUTO_INCREMENT for dumped tables
-- AUTO_INCREMENT for table `petFood`
ALTER TABLE `petFood`
  MODIFY `petFoodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- AUTO_INCREMENT for table `petFoodExpiration`
ALTER TABLE `petFoodExpiration`
  MODIFY `expID` int(11) NOT NULL AUTO_INCREMENT;
-- AUTO_INCREMENT for table `petToy`
ALTER TABLE `petToy`
  MODIFY `petToyID` int(11) NOT NULL AUTO_INCREMENT;
-- AUTO_INCREMENT for table `petToySize`
ALTER TABLE `petToySize`
  MODIFY `sizeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
-- AUTO_INCREMENT for table `productBrand`
ALTER TABLE `productBrand`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
-- AUTO_INCREMENT for table `productCategory`
ALTER TABLE `productCategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
-- Constraints for dumped tables
-- Constraints for table `petFood`
ALTER TABLE `petFood`
  ADD CONSTRAINT `petFood_ibfk_1` FOREIGN KEY (`expID`) REFERENCES `petFoodExpiration` (`expID`),
  ADD CONSTRAINT `petFood_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `productCategory` (`categoryID`),
  ADD CONSTRAINT `petFood_ibfk_3` FOREIGN KEY (`brandID`) REFERENCES `productBrand` (`brandID`);
-- Constraints for table `petToy`
ALTER TABLE `petToy`
  ADD CONSTRAINT `petToy_ibfk_1` FOREIGN KEY (`sizeID`) REFERENCES `petToySize` (`sizeID`),
  ADD CONSTRAINT `petToy_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `productCategory` (`categoryID`),
  ADD CONSTRAINT `petToy_ibfk_3` FOREIGN KEY (`brandID`) REFERENCES `productBrand` (`brandID`);
COMMIT;
-----------#######---------
-- Dumping data for table `petToySize`
INSERT INTO `petToySize` (`sizeID`, `size`) VALUES
(16, 'XL'),
(17, 'L'),
(18, 'M'),
(19, 'S'),
(20, 'XS');
-- Dumping data for table `productBrand`
INSERT INTO `productBrand` (`brandID`, `brand`) VALUES
(1, 'WELLNESS'),
(2, 'FORMULA RAW'),
(11, 'ORIJEN'),
(15, 'WERUVA'),
(17, 'kong'),
(21, 'royal '),
(22, 'N&D'),
(23, 'Outward Hound'),
(24, 'Go'),
(25, 'hello');
-- Dumping data for table `productCategory`
INSERT INTO `productCategory` (`categoryID`, `category`) VALUES
(1, 'Cat Products'),
(2, 'Dog Products');

------OLD TABLES---------
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
  `brandID` int(11) NOT NULL,
  `pricingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(21, 'royal '),
(22, 'N&D'),
(23, 'Outward Hound');

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
-- Table structure for table `productPricing`
--

CREATE TABLE `productPricing` (
  `pricingID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  ADD KEY `brandID` (`brandID`),
  ADD KEY `pricingID` (`pricingID`);

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
-- Indexes for table `productPricing`
--
ALTER TABLE `productPricing`
  ADD PRIMARY KEY (`pricingID`),
  ADD KEY `productID` (`productID`);

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
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productCategory`
--
ALTER TABLE `productCategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productPricing`
--
ALTER TABLE `productPricing`
  MODIFY `pricingID` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `petProduct_ibfk_1` FOREIGN KEY (`pricingID`) REFERENCES `productPricing` (`pricingID`),
  ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType` (`typeID`);

--
-- Constraints for table `petToySize`
--
ALTER TABLE `petToySize`
  ADD CONSTRAINT `petToySize_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `petProduct` (`productID`);

--
-- Constraints for table `productPricing`
--
ALTER TABLE `productPricing`
  ADD CONSTRAINT `productPricing_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `petProduct` (`productID`);
COMMIT;

SELECT * FROM petProduct NATURAL JOIN productCategory WHERE productCategory.categoryID = petProduct.categoryID;


SELECT * FROM petProduct JOIN productType ON petProduct.typeID = productType.typeID;

SELECT * FROM petProduct NATURAL JOIN inventory WHERE inventory.productID = petProduct.productID;

INSERT INTO `petProduct` (`productID`, `productName`, `typeID`, `categoryID`, `brandID`) VALUES (NULL, 'Chicken Pate 156gr', '1', '1', '1'), (NULL, 'Raw Beef Cubes', '1', '2', '2');