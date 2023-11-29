I could not understand exactly what you wanted us to do in the instructions, so I did something basic based on my understanding of the instructions.

This fictional pet boutique does not sell animals due to its commitment to animal rights. Furthermore, it is based in Montreal. Montreal, Quebec, banned the sale of dogs, cats, and rabbits in pet stores in 2020.

Instead of creating categories for cats and dogs to classify products, I used petfood and pettoy because profit margins, product turnover rate, etc., are more related to these in the pet industry. If you would like me to expand the tables, I can create accessories and include toys, beds, etc. or I can add types for food such as wet, dry, dehydrated, or for toys, puzzle, games, etc.
# PET PRODUCTS TABLE

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

# Brand Table
|#Brand ID    |.  Brand |
|-------------|---------|

# PetProduct Table

| ProductID (PK) | Name          | Type_id (FK) |Category_id(FK)  | Brand ID
| -------------- | --------------| -------------| --------------- | ----------|
| 01             |  ab           |              |                 |           |




# Pricing Table

| ProductID          | Price | Tax |
| ------------------ | ----- | --- |
|                    |       |     |

# PetFood  -Type-ID -01 Table.    ( I did not create seperate size table with id, because that is not possible classify really, grs, changes so often and it is not standard always. instead i see size as part of name.. )

| ProductID          | Expiration |
| ------------------ | ---------- |
|                    |            |

# PetToys Table Type-ID -02 Table.   ( toy size classifications changes based on toy type and company from numbers to s, m,l or letter codes, grs etc.It is not managable with creating size, instead i see that as part of name)

| ProductID          |
| ------------------ |
|                    |

