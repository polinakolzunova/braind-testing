<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:42
 */

namespace app\controllers;

use zmp\Controller;

class MainController extends Controller
{

    public function index()
    {
        $this->render('index', ['a' => 1, 'b' => 2]);
    }

    public function test()
    {
        $this->render('test');
    }
}