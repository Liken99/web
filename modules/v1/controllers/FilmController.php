<?php

namespace app\modules\v1\controllers;
use app\models\Film;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

class FilmController extends ApiController
{
    public $modelClass= 'app\models\Film';
}