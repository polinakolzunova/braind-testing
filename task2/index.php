<?php

define("COUNT_ON_PAGE", 3);

try {
    $message = "";

    // подключение к бд
    $config = json_decode(file_get_contents("assets/data/config.json"), true);
    $mysqli = new Mysqli(
        $config['host'],
        $config['username'],
        $config['password'],
        $config['dbname']
    );

    // пагинация
    // общее количество строк
    $query = file_get_contents("assets/data/query_count.sql");
    $result = $mysqli->query($query);
    $row_count = $result->fetch_row()[0];

    if ($row_count > 0) {
        // номер текущей страницы
        $page = ($_GET['page']) ? $_GET['page'] : 1;
        // позиция первой записи
        $start = ($page - 1) * COUNT_ON_PAGE;
        // количество страниц
        $page_count = ceil($row_count / COUNT_ON_PAGE);
        // формирование запроса
        $query = file_get_contents("assets/data/query_rows.sql") . " LIMIT $start, " . COUNT_ON_PAGE;
        $result = $mysqli->query($query);
    } else {
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
    <link rel="stylesheet" href="assets/css/style.css">
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
            <span>НАЗВАНИЕ</span>
            <span>РАЗМЕР</span>
            <span>ЦВЕТ</span>
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
    <div class="pagination">
        <?php for ($i = 1; $i <= $page_count; $i++): ?>
            <a <?= ($i == $page) ? "class='active'" : ""; ?> href="index.php?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endfor; ?>
    </div>
</div>
</body>
</html>
