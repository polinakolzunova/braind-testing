<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:36
 */

define("SITE_DIR", $_SERVER['DOCUMENT_ROOT'] . '/');
define("PROJECT_NAME", 'task3');
define("SITE_URL", $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/task3');

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';
exit;*/

require SITE_DIR . PROJECT_NAME . '/vendor/zmp/Loader.php';
$loader = new zmp\Loader();
spl_autoload_register([$loader, 'loadClass']);

$router = new zmp\Router();
$router->start();