<?php

try {
    $message = "";
    $config = json_decode(file_get_contents("config.json"), true);
    $mysqli = new Mysqli(
        $config['host'],
        $config['username'],
        $config['password'],
        $config['dbname']
    );
    $query = file_get_contents("task2.sql");
    $result = $mysqli->query($query);
    if ( !$result->num_rows > 0) {
        $message = "Не найдено ни одной записи";
    }

} catch (Exception $exept) {
    echo 'Выброшено исключение: ', $exept->getMessage(), "\n";
}

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
            background-color: #eeeeee;
            border-radius: 20px;
        }

        h1 {
            margin: 30px;
            text-align: center;
        }

        li {
            margin: 5px 0;
            padding: 10px 15px;
            background-color: #d4d4d4;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
        }

        li.head {
            background-color: #555555;
            color: #d4d4d4;
        }

        li span {
            padding: 0 7px;
            display: inline-block;
        }

        li span:nth-of-type(2) {
            flex-grow: 1;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Товары: новинки зелёного цвета</h1>
    <?php if ($message): ?>
        <p><?= $message; ?></p>
    <?php endif; ?>
    <ul>
        <li class="head">
            <span>ID</span>
            <span>TITLE</span>
            <span>SIZE</span>
            <span>COLOR</span>
        </li>
        <?php while ($product = $result->fetch_assoc()): ?>
            <li>
                <span><?= $product['id']; ?></span>
                <span><?= $product['title']; ?></span>
                <span><?= $product['size']; ?></span>
                <span><?= $product['color']; ?></span>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
</body>
</html>
