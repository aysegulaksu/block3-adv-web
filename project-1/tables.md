
# Tables: Project-1 

# Table: Pet
| pet_id | pet |
|--------|-----|
| 001    | cat |
| 002    | dog |

# Table: Category
| category_id | category     |
|-------------|--------------|
| 201         | Cat Food     |
| 202         | Dog Food     |
| 203         | Cat Toy      |
| 204         | Dog Toy      |

# Table: Product
| product_id | product_type | brand_id | pricing_id |
|------------|--------------|----------|------------|
| 101        | food         | 301      | 401        |
| 102        | toy          | 303      | 402        |

# Table: Brand
| brand_id | name       |
|----------|------------|
| 301      | Wellness   |
| 302      | Faim Museau|
| 303      | Kong       |

# Table: Pricing
| pricing_id | purchase_price | sale_price |
|------------|----------------|------------|
| 401        | 10.00          | 15.00      |
| 402        | 12.00          | 18.00      |

# Table: Tax
| tax_id | qst_rate | gst_rate |
|--------|----------|----------|
| 1      | 9.975    | 5.00     |

# Table: ProductCategory (Junction Table)
| product_id | category_id |
|------------|-------------|
| 101        | 201         |
| 101        | 202         |
| 102        | 203         |
| 102        | 204         |
