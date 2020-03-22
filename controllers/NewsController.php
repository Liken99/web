<?php


namespace app\controllers;


use app\models\Commentss;
use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $news = News::find()
            ->orderBy(['createdAt'=>SORT_DESC])
            ->all();
        return $this->render('index',[
            'news' =>$news
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
        $comments = Commentss::find()
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
    public function actionComment($id)
    {
        $news = News::findOne(['id'=>$id]);
        $comments = Commentss::find()
            ->orderBy(['createdAt'=>SORT_DESC])
            ->where(['newsId'=>$id])
            ->all();
        return $this->render('comments',[
            'news' =>$news,
            'comments'=>$comments
        ]);
    }

}