<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "Economics".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 */
class Economic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Economics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'image'], 'required'],
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
        ];
    }
}
