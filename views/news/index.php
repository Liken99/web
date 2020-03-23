<?php
use yii\helpers\Html;
/* @var $categories \app\models\Categories[]*/

?>

<h1>Категории</h1>
<?php foreach ($categories as $categ): ?>
<article>

    <h3>
       <?= Html::a($categ->title, ['categ/view', 'id'=>$categ->id])?>
    </h3>
    <p><?= $categ->id?></p>
</article>
<?php endforeach;?>