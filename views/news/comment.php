<?php
/* @var $news \app\models\News */
/* @var $commentss \app\models\Commentss*/

?>

<article>
    <h3><?= $news->title?></h3>
    <p><?= $news->id?></p>

</article>
<ul>
<?php foreach ($commentss as $comments): ?>
    <li><?= $comments->text?></li>
<?php endforeach;?>
</ul>
