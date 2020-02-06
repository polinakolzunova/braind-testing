<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:46
 */

namespace zmp;

class Router
{

    private $routing = [
        '/' => ['Main', 'index'],
        '/test' => ['Main', 'test'],
    ];

    public function start()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $route = str_replace('/' . PROJECT_NAME, '', $route);

        if (isset($this->routing[$route])) {
            $controller = 'app\\controllers\\' . $this->routing[$route][0] . 'Controller';
            $action = $this->routing[$route][1];
            $controller_obj = new $controller();
            $controller_obj->$action();
        } else {
            echo "This path dosn't exist (or router dosn't work correctly)";
        }
    }

}