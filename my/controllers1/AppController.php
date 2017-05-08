<?php
/**
 * Created by PhpStorm.
 * User: marlb
 * Date: 01.04.2017
 * Time: 14:06
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debag($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}

