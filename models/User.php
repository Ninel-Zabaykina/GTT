<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string $login
 * @property string $password
 *
 * @property File[] $file
 * @property Message[] $message
 */


class User extends ActiveRecord implements IdentityInterface
{

    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['email', 'login', 'password'], 'required'],
            [['email', 'login', 'password'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }


    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */

    public static function findByUsername($username)
    {
        return self::find()->where(['login' => $username])->one();
    }

    /**
     * {@inheritdoc}
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */

    public function getAuthKey()
    {
    }

    /**
     * {@inheritdoc}
     */

    public function validateAuthKey($authKey)
    {
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */

    public function validatePassword($password)
    {
        return $this->password === $password;
    }


}
