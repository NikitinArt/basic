<?php

namespace app\controllers;

use app\models\Users;
use yii\web\Controller;


class UsersController extends Controller
{
    public function actionLogin(){
        $user = new Users();
    }
}