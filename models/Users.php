<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $login
 * @property string $login_name
 * @property string $password
 *
 * @property Tasks[] $tasks
 */
class Users extends \yii\db\ActiveRecord
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
            [['login_name', 'password'], 'required'],
            [['login_name', 'password'], 'string', 'max' => 30],
            [['login_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Login',
            'login_name' => 'Login Name',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::class, ['user_login' => 'login']);
    }
}
