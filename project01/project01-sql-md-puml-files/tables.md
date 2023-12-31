# GOING BACK TO THE ORIGINAL TABLE STRUCTURE 

## Table: petFoodExpiration
| expID | productID | expirationDate |
|-------|-----------|-----------------|
| int   | int       | date            |

## Table: petProduct
| productID | productName | typeID | categoryID | brandID |
|-----------|-------------|--------|------------|---------|
| int       | varchar     | int    | int        | int     |

## Table: petToySize
| sizeID | size      | productID |
|--------|-----------|-----------|
| int    | varchar   | int       |

## Table: productBrand
| brandID | brand   |
|---------|---------|
| int     | varchar |

## Table: productCategory
| categoryID | category   |
|------------|------------|
| int        | varchar    |

## Table: productPrice
| pricingID | productID | price |
|-----------|-----------|-------|
| int       | int       | float |

## Table: productType
| typeID | type    |
|--------|---------|
| int    | varchar |







# ONE OF THE PREVIOUS TABLE STRUCTURE - 

# Table: productBrand
| brandID | brand                     |
|---------|---------------------------|
| 1       | Brand 1                   |
| 2       | Brand 2                   |
| 3       | Another Brand             |

# Table: productCategory
| categoryID | category               |
|------------|------------------------|
| 1          | Category 1             |
| 2          | Category 2             |
| 3          | Another Category       |

# Table: petToySize
| sizeID | size                     |
|--------|--------------------------|
| 1      | Small                    |
| 2      | Medium                   |
| 3      | Large                    |

# Table: petToy
| petToyID | categoryID | brandID | toyName                     | sizeID |
|----------|------------|---------|-----------------------------|--------|
| 1        | 1          | 1       | Sample Toy 1                |        |

# Table: petFood
| petFoodID | categoryID | brandID | FoodName                    | expDate     |
|-----------|------------|---------|-----------------------------|-------------|
| 1         | 1          | 1       | Sample Food 1               | 2023-01-01  |
| 2         | 2          | 2       | Sample Food 2               | 2023-01-15  |
| 3         | 1          | 2       | Another Food                | 2023-02-01  |

