<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'GuitarToTab';

AppAsset::register($this);
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <audio controls>
            <source src="/audio/music.ogg" type="audio/ogg; codecs=vorbis">
            <source src="/audio/music.mp3" type="audio/mpeg">
            Тег audio не поддерживается вашим браузером.
            <a href="/audio/music.mp3">Скачайте музыку</a>
        </audio>
        <button type="button" class="btn btn-secondary" style="width: 100px;">Convert</button>
    </div>

    <div class="body-content">
        <p><img src="<?php echo Url::base(''); ?>/img/audiowaves/awave.jpg" alt="audiowave"></p>
        <p><img src="<?php echo Url::base(''); ?>/img/tabs/tab.jpg" alt="audiowave"></p>
    </div>
</div>
