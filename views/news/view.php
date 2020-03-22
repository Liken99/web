<?php
/* @var $news \app\models\News*/
/* @var $comments \app\models\Commentss[]*/

?>

<article>
    <h3><?= $news->title?></h3>
    <p><?= $news->id?></p>
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
