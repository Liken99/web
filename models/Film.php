<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $createdAt Дата созданя
 * @property string|null $updatedAt Дата изменения
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'createdAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'createdAt' => 'Дата созданя',
            'updatedAt' => 'Дата изменения',
        ];
    }
}
