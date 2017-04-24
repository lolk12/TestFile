<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 22.04.2017
 * Time: 16:00
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{

    public function actionIndex ()
    {

        return $this->render("index");
    }
}