I updated the table based on your feedback, I hope that is better now

# PET PRODUCTS TABLE

# productType Table

| typeID (PK) | type    |
|-------------|---------|
| 1           | Food | 
| 2           | Toys |

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
|                |             |                |              |             |  

# petFoodExpiration Table 
| expirationID (PK) | expirationDate | productID (FK) |
|-------------------|----------------|----------------|
|                   |                |                |

# PetToySize (Type-ID - 02)

|SizeID (PK)|Size             | productID (FK) |
|-----------|-----------------|----------------|
|           |                 |                |





