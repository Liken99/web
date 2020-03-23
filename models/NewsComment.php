<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "NewsComments".
 *
 * @property int $id
 * @property string $text Текст
 * @property string $createdAt Дата создания
 * @property string $updatedAt Дата изменения
 * @property int $newsId Новости
 *
 * @property News $news
 */
class NewsComment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'NewsComments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'createdAt', 'updatedAt', 'newsId'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['newsId'], 'integer'],
            [['text'], 'string', 'max' => 256],
            [['newsId'], 'exist', 'skipOnError' => true, 'targetClass' => News::class(), 'targetAttribute' => ['newsId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Текст',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
            'newsId' => 'Новости',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::class(), ['id' => 'newsId']);
    }
}
