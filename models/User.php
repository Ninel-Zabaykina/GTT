<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


class User extends ActiveRecord implements IdentityInterface
{
    public $login;

    /**
     * @var mixed|null
     */

    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */


    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public static function findByUsername($login)
    {
        return self::find()->where(['login' => $login])->one();
    }

    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }


}
