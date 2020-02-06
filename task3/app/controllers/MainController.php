<?php
/**
 * Created by PhpStorm.
 * User: PolinaKolzunova
 * Date: 06.02.2020
 * Time: 10:42
 */

namespace app\controllers;

use \App;
use zmp\Controller;
use zmp\DB;


class MainController extends Controller
{

    public function index()
    {
        $result = (DB::getConnection())->query('SELECT * FROM city');
        $this->render('index', ['model' => $result]);
    }

    public function test()
    {
        $this->render('test');
    }
}