<?php
use yii\helpers\Html;
/* @var $films \app\models\Film[]*/

?>

<h1>Фильмы</h1>
<?php foreach ($films as $film): ?>
<article>

    <h3>
       <?= Html::a($film->title, ['film/view', 'id'=>$film->id])?>
    </h3>
    <p><?= $film->id?></p>
</article>
<?php endforeach;?>