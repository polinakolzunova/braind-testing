<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:42
 */

/**
 * Файл конфигурации для сайта
 * @return array Массив настроек
 */

return $config = [
    /**
     * данные для подключения к бд
     */
    'db' => [
        'host' => 'localhost',
        'dbname' => 'task3_city',
        'username' => 'root',
        'password' => '',
    ],

    /**
     * маршруты приложения
     */
    'routing' => [
        '/' => ['Main', 'index'],
        '/create' => ['Main', 'create'],
    ],
];