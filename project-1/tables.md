I updated the table based on your feedback, I hope that is better now

# PET PRODUCTS TABLE

# Type Table

| TypeID (PK) | Type    | Profit Margin |
|-------------|---------|---------------|
| 1           | PetFood | 35%           |
| 2           | PetToys | 50%           |

# Category Table

| CategoryID (PK) | Category | Type_Id (FK) |
|-----------------|----------|--------------|
| 1               | cat food | 1            |
| 2               | dog food | 1            |
| 3               | cat toy  | 2            |
| 4               | dog toy  | 2            |

# Brand Table

| Brand ID | Brand |
|----------|-------|
|          |       |

# PetProduct Table

| ProductID (PK) | Name | Type_id (FK) | Category_id(FK) | Brand ID |
|----------------|------|--------------|-----------------|----------|
| 01             | ab   |              |                 |          |
# Pricing Table
| ProductID | Cost | Type_id           | Price | Tax |
|-----------|------|-------------------|-------|-----|
|           |      |                   |       |     |
# PetFood Table (Type-ID - 01)
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


