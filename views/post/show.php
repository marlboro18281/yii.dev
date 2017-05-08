<?php
//$this->title = 'Одна статья';
use app\components\MyWidget;

?>

<?php $this->beginBlock('block1'); ?>

<h1>Заголовок страницы</h1>

<?php $this->endBlock(); ?>
<h1>Show Action</h1>

<?php //echo MyWidget::widget(['name'=>'Вася']);?>
<?php MyWidget::begin(); ?>
<h1>привет мир </h1>
<?php MyWidget::end(); ?>

<?php /*foreach ($cats as $cat) {
    echo '<ul>';
    echo '<li>' .$cat->category_id . '</li>';
    $productsId = $cat->productsId;
    foreach ($productsId as $productId){
        echo '<ul>';
        echo '<li>' .$productId->product_id . '</li>';
        echo '</ul>';
    }
    echo '</ul>';
} */ ?>

<?php // debag($cats); ?>
<?php //  debag($cats[0]->productsId); ?>


<button class="btn btn-success" id="btn">
    Click me ...
</button>

<?php //$this->registerJsFile('@web/js/scripts.js',
//    ['depends' => 'yii\web\YiiAsset']) ?>

<?php //$this->registerJs("$('.container').append('<p>SHOW !!!  </p>');", \yii\web\View::POS_LOAD) ?>

<?php $this->registerCss('.container {background: #ccc;}') ?>
<!--тут закончил -->
<?php
$js = <<<JS
$('#btn').on('click', function() {
  $.ajax({
      url: 'index.php?r=post/index',
      data: { test:'123'},
      type: 'POST',
      success: function(res) {
        console.log(res); 
      },
      error: function() {
        alert('Error !!!'); 
      }
  });
})
JS;

$this->registerJS("$js");
?>
