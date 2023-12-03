CREATE TABLE productType (
    typeID INT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    profitMargin DECIMAL(10, 2) NOT NULL
);

CREATE TABLE productCategory (
    categoryID INT PRIMARY KEY,
    category VARCHAR(255) NOT NULL,
    typeID INT,
    FOREIGN KEY (typeId) REFERENCES productType(typeID)
);

CREATE TABLE productBrand (
    brandID INT PRIMARY KEY,
    brandName VARCHAR(255) NOT NULL,

);


CREATE TABLE petProduct (
    productID INT PRIMARY KEY,
    productName VARCHAR(255) NOT NULL,
    brandID INT,
    FOREIGN KEY (brandID) REFERENCES producBrand(brandID),
    categoryID INT, 
    FOREIGN KEY (categoryID) REFERENCES productCategory(categoryID)
);

CREATE TABLE productPricing (
    pricingID INT PRIMARY KEY,
    productID INT,
    FOREIGN KEY (productID) REFERENCES petProduct(productID),
    cost DECIMAL(10, 0) NOT NULL,
    price DECIMAL(10, 0) NOT NULL
);

--- 
inventory table does not make any sense... i think this will be just a joint table.. 

///////////CREATE TABLE productInventory (
    inventoryID INT PRIMARY KEY,
    productID INT,
    FOREIGN KEY (productID) REFERENCES petProduct(productID),
    quantity INT NOT NULL
);///////////////



ALTER TABLE `productCategory` ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType`(`typeID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

CREATE TABLE productBrand (
    brandID INT PRIMARY KEY,
    brand VARCHAR(255) NOT NULL,
);

ALTER TABLE `productBrand` ADD `productID` INT NOT NULL AFTER `brand`;

ALTER TABLE `productCategory` ADD CONSTRAINT `typeID` FOREIGN KEY (`typeID`) REFERENCES `productType`(`typeID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `productCategory` (`categoryID`, `category`, `typeID`) VALUES (NULL, 'Cat Food', '1'), (NULL, 'Dog Food', '1');
UPDATE `productCategory` SET `category` = 'Dog Toys', `typeID` = '2' WHERE `productCategory`.`categoryID` = 4;

INSERT INTO `productBrand` (`brandID`, `brand`) VALUES (NULL, 'Wellness'), (NULL, 'FormulaRaw');

UPDATE `petProduct` SET `productName` = 'Ball', `brandID` = '4', `categoryID` = '4' WHERE `petProduct`.`productID` = 9;

SELECT * FROM `petProduct` JOIN productType WHERE 1;

SELECT * FROM `inventory` JOIN productPricing WHERE 1;