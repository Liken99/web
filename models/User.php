<?php

namespace app\models;

use Yii;

/**
* This is the model class for table "users".
 *
 * @property int $id
* @property string $login Логин
* @property string $password Пароль
* @property string $accessToken Access Token
* @property string $createdAt Дата создания
* @property string|null $updatedAt Дата изменения
*/

class User extends BaseModel
{
    /**
    * {@inheritdoc}
         */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['login', 'password', 'accessToken'], 'string', 'max' => 128],
            [['login'], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
            'accessToken' => 'Access Token',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * {@inheritdoc}
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->accessToken = Yii::$app->security->generateRandomString();
        $this->password = yii::$app->security->generatePasswordHash($this->password);

        return true;
    }
}