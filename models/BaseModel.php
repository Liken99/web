<?php


namespace app\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class'=>TimestampBehavior::class,
                'createdAtAttribute'=>'createdAt',
                'updatedAtAttribute'=>'updatedAt',
                'value'=> date('Y-m-d H:i:s')
            ]
        ];
    }
}