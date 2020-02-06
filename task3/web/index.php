<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:36
 */

require '../vendor/zmp/Loader.php';
$loader = new zmp\Loader();
spl_autoload_register([$loader, 'loadClass']);

$router = new zmp\Router();
$router->start();