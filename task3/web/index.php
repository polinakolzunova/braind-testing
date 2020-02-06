<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:36
 */

// корневая директория сайта
define("SITE_DIR", $_SERVER['DOCUMENT_ROOT'] . '/');
// название папки проекта
define("PROJECT_NAME", 'task3');
// корневая директория прокта
define("PROJECT_PATH", SITE_DIR . PROJECT_NAME);
// url адрес сайта
define("SITE_URL", $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . PROJECT_NAME);

// запуск приложения
require PROJECT_PATH . '/vendor/zmp/App.php';
App::start();