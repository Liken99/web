<?php
/* @var $film \app\models\Film*/
/* @var $comments \app\models\Comment[]*/

?>

<article>
    <h3><?= $film->title?></h3>
    <p><?= $film->id?></p>
</article>

<ul>
    <?php foreach ($comments as $comment): ?>
        <li>

            <time class="small text-muted">
                <?= date('d.m.Y',strtotime($comment->createdAt))?>
            </time>
            &nbsp;  <?= $comment->text?>
        </li>
    <?php endforeach;?>
</ul>
