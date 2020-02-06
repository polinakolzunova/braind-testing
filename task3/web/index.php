<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:36
 */

define("SITE_DIR", $_SERVER['DOCUMENT_ROOT'] . '/');
define("PROJECT_NAME", 'task3');

require SITE_DIR . PROJECT_NAME . '/vendor/zmp/Loader.php';
$loader = new zmp\Loader();
spl_autoload_register([$loader, 'loadClass']);

$router = new zmp\Router();
$router->start();