<?php


namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            debag(Yii::$app->request->post());
            return 'test';
        }

//        $post = TestForm::findOne(8 );
//        $post->email = 'degb@mail.com';
//        $post->save();
//        $post->delete();

//        TestForm::deleteAll();
       // TestForm::deleteAll(['>', 'id', 3]);


        $model = new TestForm();
//        $model->name = 'Автор';
//        $model->email = 'antonkill@mail.ru';
//        $model->text = 'Текст сообщения';
//        $model->save();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'ошибка');
            }
        }

        $this->view->title = 'все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
        // $this->layout = 'basic';
        $this->view->title = 'один страниц';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевик']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описсание страницы...']);


//        $query = "SELECT * FROM `oc_category_description` WHERE `name` LIKE :search";// безопасный запрос
//        $cats =Category::findBySql($query,[':search' => '%test%'])->all(); // безопасный запрос

        //$query = "SELECT * FROM `oc_category_description` WHERE `name` LIKE '%test%'";
        //$cats =Category::findBySql($query)->all();

        //$cats = Category::findAll(['parent_id' => 34]);
        //$cats = Category::findOne(['parent_id' => 34]);
        //$cats = Category::find()->asArray()->where('parent_id = 34')->count();
        //$cats = Category::find()->asArray()->where('parent_id = 20')->limit(1)->one(); // не многомерный массив
        //$cats = Category::find()->asArray()->where('parent_id = 20')->limit(1)->all();
        //$cats = Category::find()->asArray()->where(['<=','category_id', 26])->all(); //от 26 и ниже
        //$cats = Category::find()->asArray()->where(['like','name', 'test'])->all();// поиск по названию
        //$cats = Category::find()->asArray()->where(['parent_id' => 20])->all();
        //$cats = Category::find()->asArray()->where('parent_id = 20')->all();
        //$cats = Category::find()->asArray()->all(); // получение данных ввиде массива $cat['name']
        //$cats = Category::find()->orderBy(['category_id'=> SORT_DESC])->all(); // сортировка по чему либо (ASC, DESC)
        //$cats = Category::find()->all(); // вытаскиваем все и получаем в виде $cat->name

        //$cats = Category::findOne(34);
        // $cats = Category::find()->with('productsId')->where('category_id = 20')->all();
        //$cats = Category::find()->all(); // ленивая(отложаная) загрузка
        $cats = Category::find()->with('productsId')->all(); // жадная

        return $this->render('show', compact('cats'));
    }
}