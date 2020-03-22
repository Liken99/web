<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commentss".
 *
 * @property int $id
 * @property string $text
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $newsId
 *
 * @property News $news
 */
class Commentss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'commentss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'text', 'createdAt', 'updatedAt', 'newsId'], 'required'],
            [['id', 'newsId'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
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
            'text' => 'Text',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'newsId' => 'News ID',
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
