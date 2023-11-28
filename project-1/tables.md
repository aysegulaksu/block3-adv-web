I could not understand exactly what you wanted us to do in the instructions, so I did something basic based on my understanding of the instructions.

This fictional pet boutique does not sell animals due to its commitment to animal rights. Furthermore, it is based in Montreal. Montreal, Quebec, banned the sale of dogs, cats, and rabbits in pet stores in 2020.

Instead of creating categories for cats and dogs to classify products, I used petfood and pettoy because profit margins, product turnover rate, etc., are more related to these in the pet industry. If you would like me to expand the tables, I can create accessories and include toys, beds, etc. or I can add types for food such as wet, dry, dehydrated, or for toys, puzzle, games, etc.

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
| 3                  |cat toy.      |.              |
|4                   |dog toy.      |.              |

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

