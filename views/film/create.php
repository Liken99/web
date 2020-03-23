<?php
use yii\helpers\Html;
/*@var $data array */
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <p>Запись добавлена</p>
<?php endif; ?>
<?= Html::beginForm() ?>
    <div class="form-group">
        <input name="title" placeholder="Заголовок">
    </div>
    <div class="form-group">
        <input name="categoriesId" type="password" placeholder="Категория">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Создать</button>
    </div>
<?= Html::endForm()?>
