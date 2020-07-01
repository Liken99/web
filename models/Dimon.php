<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "Dimons".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property string $createdAt
 * @property string $updatedAt
 */
class Dimon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Dimons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'text', 'image', 'createdAt', 'updatedAt'], 'required'],
            [['id'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 256],
            [['text', 'image'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'image' => 'Image',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
