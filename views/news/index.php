<?php
use yii\helpers\Html;
/* @var $news \app\models\News[]*/

?>

<h1>Новости</h1>
<?php foreach ($news as $new): ?>
<article>

    <h3>
       <?= Html::a($new->title, ['new/view', 'id'=>$new->id])?>
    </h3>
    <p><?= $new->id?></p>
</article>
<?php endforeach;?>