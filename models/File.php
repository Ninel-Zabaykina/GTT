<?php

namespace app\models;

define ('SITE_ROOT', realpath(dirname(__FILE__)));

use yii\base\Model;
use yii\db\ActiveRecord;

class File extends ActiveRecord
{
    public $audioFile;
    public $path = '';

    public function rules()
    {
        return [
            [['audioFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'wav, mp3'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->path='uploads/' . $this->audioFile->baseName . '.' . $this->audioFile->extension;
            $this->audioFile->saveAs($this->path);
            return true;
        } else {
            return false;
        }
    }
}

?>
