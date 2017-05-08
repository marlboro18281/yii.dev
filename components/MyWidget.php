<?php
/**
 * Created by PhpStorm.
 * User: marlb
 * Date: 04.05.2017
 * Time: 0:10
 */

namespace app\components;


use yii\base\Widget;

class MyWidget extends Widget
{

    public $name;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
//        if ($this->name === null) $this->name = 'Гость';
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        $content = mb_strtoupper($content, 'utf-8');
        //$content = mb_strtoupper($content);
        //return $this->render('my', ['name'=>$this->name]);
        return $this->render('my', compact('content'));
        // parent::run(); // TODO: Change the autogenerated stub
    }


}