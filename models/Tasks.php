<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $task
 * @property string $date_of_creation
 * @property string $time_of_creation
 * @property int|null $user_login
 * @property string $title
 *
 * @property Users $userLogin
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task', 'date_of_creation', 'time_of_creation', 'title'], 'required'],
            [['task'], 'string'],
            [['date_of_creation', 'time_of_creation'], 'safe'],
            [['user_login'], 'default', 'value' => null],
            [['user_login'], 'integer'],
            [['title'], 'string', 'max' => 40],
            [['user_login'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['user_login' => 'login']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task' => 'Task',
            'date_of_creation' => 'Date Of Creation',
            'time_of_creation' => 'Time Of Creation',
            'user_login' => 'User Login',
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[UserLogin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserLogin()
    {
        return $this->hasOne(Users::class, ['login' => 'user_login']);
    }
}
