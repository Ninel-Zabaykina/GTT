<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class SignupForm extends User {

    public function rules()
    {
        return [
            [['email', 'login', 'password'], 'required', 'message' => 'Fill in the empty fields'],
            [['email'], 'email'],
            [['email'], 'unique','targetClass'=>'app\models\User', 'message' => 'syshestvyet'],
            [['login'], 'unique','targetClass'=>'app\models\User'],
            [['password'], 'string','min'=>2, 'max'=>10]
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

}