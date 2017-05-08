<?php
/**
 * Created by PhpStorm.
 * User: marlb
 * Date: 26.03.2017
 * Time: 15:22
 */

namespace app\controllers;




class MyController extends AppController
{
  public function actionIndex(){
      $hi = 'hello world';
      $names = ['ivanov', 'petrov' , 'sidorov'];
      return $this->render('index',['hello' => $hi , 'names' => $names]);
  }
  public function actionBlogPost(){
      return 'Blog Post';
  }
}