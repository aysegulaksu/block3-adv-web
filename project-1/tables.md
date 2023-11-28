This pet boutique does not sell animals due to their commitment to animal rights. Furthermore, they are based in Montreal. Montreal, Quebec banned the sale of dogs, cats and rabbits in pet stores in 2020. 

# Type
| TypeID (PK)        | Type          | 
| ------------------ | --------------|
| 1                  | PetFood       |  
| 2                  | PetToys       | 


# Category 
|CategoryID (PK)     |Category.      |   Type_Id (FK)|
|--------------------|---------------|---------------|
| 1                  |cat food.      |.              |
| 2                  |dog food.      |.              |
| 3                  |cat toys.      |.              |
|4                   |dog toys.      |.              |

# PetProduct Table

| ProductID (PK) | Name          | Type_id (FK) |Category_id(FK)  | 
| -------------- | --------------| -------------| --------------- | 
| 01             |  ab           |              |                 |      



# Pricing Table

| ProductID          | Price | Tax |
| ------------------ | ----- | --- |
|                    |       |     |

# PetFood Table

| ProductID          | Expiration |
| ------------------ | ---------- |
|                    |            |

# PetToys Table

| ProductID          |
| ------------------ |
|                    |

