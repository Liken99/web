<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $text Текст
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 * @property int $filmId Фильм
 *
 * @property Film $film
 */
class Comment extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'filmId'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['filmId'], 'integer'],
            [['text'], 'string', 'max' => 256],
            [['filmId'], 'exist', 'skipOnError' => true, 'targetClass' => Film::class, 'targetAttribute' => ['filmId' => 'id']],
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
            'filmId' => 'Фильм',
        ];
    }

    /**
     * Gets query for [[Film]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::class, ['id' => 'filmId']);
    }
}
