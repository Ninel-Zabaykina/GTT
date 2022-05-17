<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'GuitarToTab';

AppAsset::register($this);
?>

<?php if (Yii::$app->user->isGuest) { ?>
<div class="hellotext">
    <h1 style="text-align: center">
    <br>We are pleased to welcome you to the site GuitarToTab. </br>
    Our service will help you quickly and easily get the tablature of any audio recording.
        In order to use our application you just need to register or log in if you already have a network account.
    </h1>
    <div style="text-align: center">
        <button type="button" class="btn btn-secondary btn-lg" style="width: 250px; margin: 15px; ">Registration</button>
    </div>
    <div> </div>
    <div style="text-align: center">
        <button type="button" class="btn btn-secondary btn-lg" style="width: 250px;">Authorization</button>
    </div>
</div>
<?php } ?>

<?php if (!Yii::$app->user->isGuest) { ?>
<div class="row">
    <div class="col">
        <div>
            <?php $form_a = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                <button type="button" class="btn btn-secondary" style="width: 100px;">Record</button>
                <?php echo $form_a->field($audio, 'audioFile')->fileInput() ?>
                <button type="submit" class="btn btn-secondary">Submit</button>
            <?php ActiveForm::end() ?>
        </div>
    </div>
    <div class="col" id="buttonright">
        <button type="button" class="btn btn-secondary" style="width: 100px; float: right;">ClearAll</button>
    </div>
</div>

<?php if ($audio->path){ ?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent"> -->
          <div class="row">
              <div class="col">

                  <audio controls style="float: right;">
                   <source src="--><?php //echo Url::base(''); ?><!--/audio/1.mp3" type="audio/mpeg" >-->
                    <source src="<?php echo Url::base('') . '/' . $audio->path; ?>" type="audio/mpeg" >
                </audio>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary" style="width: 100px; float: left;">Convert</button>
            </div>
        </div>
        <\


    <div class="body-content">
        <p><img src="<?php echo Url::base(''); ?>/img/audiowaves/awave.jpg" alt="audiowave"></p>
        <p><img src="<?php echo Url::base(''); ?>/img/tabs/tab.jpg" alt="audiowave"></p>
    </div>
</div>
<?php } ?>
    <?php } ?>
