<?php

namespace app\models;

use yii\base\Model;

class SupportForm extends Model
{
    public $name;
    public $email;
    public $text;
    public $photo;

    public function rules()
    {
        return [
          [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->photo->saveAs('/web/img/support_img/' . $this->photo->baseName . '.' . $this->photo->extension);
            return true;
        } else {
            return false;
        }
    }
}