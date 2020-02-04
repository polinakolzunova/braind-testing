SELECT COUNT(pd.id)
FROM
  product AS pd
  INNER JOIN
  product_prop AS val1 ON
                         pd.id = val1.product_id AND
                         val1.property_id = (SELECT id
                                             FROM property
                                             WHERE title = "Цвет") AND
                         val1.value = "зелёный"
  INNER JOIN
  product_prop AS val2 ON
                         pd.id = val2.product_id AND
                         val2.property_id = (SELECT id
                                             FROM property
                                             WHERE title = "Новинка") AND
                         val2.value = 1