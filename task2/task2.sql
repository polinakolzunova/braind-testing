SELECT 
	pd.id, 
	pd.title, 
	val1.value AS color, 
	val3.value AS size
FROM 
	product as pd
INNER JOIN
	product_prop as val1 ON 
    pd.id = val1.product_id AND 
    val1.property_id = (SELECT id FROM property WHERE title="Цвет") AND 
    val1.value = "зелёный"
INNER JOIN
	product_prop as val2 ON 
    pd.id = val2.product_id AND 
    val2.property_id = (SELECT id FROM property WHERE title="Новинка") AND 
    val2.value = 1
INNER JOIN
	product_prop as val3 ON 
    pd.id = val3.product_id AND 
    val3.property_id = (SELECT id FROM property WHERE title="Размер");