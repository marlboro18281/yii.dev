<?php
/**
 * Created by PhpStorm.
 * User: marlb
 * Date: 03.05.2017
 * Time: 0:17
 */

namespace app\models;


use yii\db\ActiveRecord;

class ProductToCategory extends ActiveRecord
{
    public static function tableName()
    {
        return 'oc_product_to_category';
        //  return parent::tableName(); // TODO: Change the autogenerated stub
    }

   /* public function getCategories()
    {
        return $this->hasMany(Category::className(), ['category_id' => 'category_id']);
    }*/
}

