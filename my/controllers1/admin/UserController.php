<?php
/**
 * Created by PhpStorm.
 * User: marlb
 * Date: 26.03.2017
 * Time: 16:20
 */

namespace app\controllers\admin;


use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex(){
        return $this->render('index'); 
    }
}