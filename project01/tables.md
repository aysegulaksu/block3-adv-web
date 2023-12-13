I updated the table based on your feedback, I hope that is better now

# PET PRODUCTS TABLE

# productType Table

| typeID (PK) | type    |
|-------------|---------|
| 1           | PetFood | 
| 2           | PetToys |

# productCategory Table

| categoryID (PK) | category | 
|-----------------|----------|
| 1               | cat      | 
| 2               | dog      |


# Brand Table

| brandID (PK) | brand |
|--------------|-------|
|              |       |

# petProduct Table

| productID (PK) | productName |  typeID (FK)   |categoryID(FK)|brandID (FK) |
|----------------|-------------|----------------|--------------|-------------|
| 01             | ab          |                |              |             |
# Pricing Table
| PricingID | ProductID |     cost   | Price | Tax |
|-----------|------     |------------------- |-------|
|           |            |           |       |       |
# petFoodSpesifics Table 
| ProductID | Expiration | Number of Item | Date Added |
|-----------|------------|-----------------|-----------|
|           |            |                 |           |
# PetToys Table (Type-ID - 02)

| ProductID | Number of Item | Date Added |
|-----------|-----------------|------------|
|           |                 |            |

# Inventory Table
| TypeID (FK) | CategoryID (FK) | ProductID (FK) | Inventory  |
|-------------|------------------|-----------------|--------  |
|             |                  |                 |          |


