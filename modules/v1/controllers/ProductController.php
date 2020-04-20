<?php

namespace app\modules\v1\controllers;

use app\models\Products;
use app\models\Reviews;
use yii\rest\ActiveController;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';
}