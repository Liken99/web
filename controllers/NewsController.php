<?php


namespace app\controllers;


use app\models\Categories;
use app\models\NewsComment;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $categories = Categories::find()
            ->orderBy(['createdAt'=>SORT_DESC])
            ->all();
        return $this->render('index',[
            'categories' =>$categories
        ]);
    }

    /**
     * Просмотр новостей
     * @param int $id ID новости
     * @return string
     */
    public function actionView($id)
    {
        $news = News::findOne(['id'=>$id]);
        $comments = NewsComment::find()
            ->where(['newsId'=>$id])
            ->all();
        return $this->render('view',[
            'news' =>$news,
            'comments'=>$comments
        ]);
    }

    /**
     * @return string просмотр комент к фильмам
     */
}