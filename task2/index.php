<?php

$products = [
    ['id' => 1, 'title' => 'Product 1', 'size' => 'маленький', 'color' => 'зелёный', 'new' => 0, 'category' => 'category 1', 'price' => '200'],
    ['id' => 1, 'title' => 'Product 1', 'size' => 'маленький', 'color' => 'зелёный', 'new' => 0, 'category' => 'category 1', 'price' => '200'],
    ['id' => 1, 'title' => 'Product 1', 'size' => 'маленький', 'color' => 'зелёный', 'new' => 0, 'category' => 'category 1', 'price' => '200'],
];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #eee;
            border-radius: 20px;
        }
        li {
            margin: 5px 0;
            padding: 10px 15px;
            background-color: #d4d4d4;
            border-radius: 10px;
            display: flex;
            justify-content: space-around;
        }
        h1 {
            margin: 30px;
            text-align: center;
        }
        span {
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Товары: новинки зелёного цвета</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <span><?=$product['title'];?></span>
                <span><?=$product['size'];?></span>
                <span><?=$product['new'];?></span>
                <span><?=$product['color'];?></span>
                <span><?=$product['category'];?></span>
                <span><?=$product['price'];?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
