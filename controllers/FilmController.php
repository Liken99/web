<?php


namespace app\controllers;


use app\models\Comment;
use app\models\Film;
use yii\helpers\Html;
use yii\web\Controller;

class FilmController extends Controller
{
    public function actionIndex()
    {
        $films = Film::find()
            ->orderBy(['createdAt'=>SORT_DESC])
            ->all();
        return $this->render('index',[
            'films' =>$films
        ]);
    }

    /**
     * Просмотр фильма
     * @param int $id ID фильма
     * @return string
     */
    public function actionView($id)
    {
        $film = Film::findOne(['id'=>$id]);
        $comments = $film->comments;
        return $this->render('view',[
            'film' =>$film,
            'comments'=>$comments
        ]);
    }

    /**
     * @return string просмотр комент к фильмам
     */
    public function actionComment($id)
    {
       $film = Film::findOne(['id'=>$id]);
       $comments = Comment::find()
           ->orderBy(['createdAt'=>SORT_DESC])
           ->where(['filmId'=>$id])
           ->all();
        return $this->render('comment',[
            'film' =>$film,
            'comments'=>$comments
        ]);
    }

    public function actionCreate()
    {
        $model = new Film();
        $model->load(\Yii::$app->request->post(), ''); //загружаем данные

        if($model->save()){//загружаем
            \Yii::$app->session->setFlash("success");//говорим что успешно
        return $this->refresh();//перезагружаем страницу
        }
        return $this->render('create');
    }

}