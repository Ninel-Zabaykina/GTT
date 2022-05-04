<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class SignupForm extends Model {

    public $email;
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['email', 'login', 'password'], 'required', 'message' => 'Fill in the empty fields'],
            ['email', 'email'],
            ['email', 'unique','targetClass'=>'app\models\User'],
            ['login', 'unique','targetClass'=>'app\models\User'],
            ['password', 'string','min'=>2,'max'=>10]
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

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->login = $this->login;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }



}