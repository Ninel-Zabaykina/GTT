<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class SignupForm extends Model {
    public $name;
    public $email;
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['name', 'email', 'login', 'password'], 'required', 'message' => 'Fill in the empty fields'],
            ['email', 'email'],
            ['email', 'unique','targetClass'=>'app\models\User'],
            ['login', 'unique','targetClass'=>'app\models\User'],
            ['password', 'string','min'=>2,'max'=>10]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    public function signup()
    {
           $user = new User();
           $user->name = $this->name;
           $user->email = $this->email;
           $user->login = $this->login;
           $user->password = $this->password;
           $user->save();
    }

}