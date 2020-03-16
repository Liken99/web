<?php
/* @var $film \app\models\Film */
/* @var $comments \app\models\Comment*/

?>

<article>
    <h3><?= $film->title?></h3>
    <p><?= $film->id?></p>

</article>
<ul>
<?php foreach ($comments as $comment): ?>
    <li><?= $comment->text?></li>
<?php endforeach;?>
</ul>
