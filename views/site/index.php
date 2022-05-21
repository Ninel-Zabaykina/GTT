<?php

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'GuitarToTab';

AppAsset::register($this);
?>

<?php if (!Yii::$app->user->isGuest) { ?>
<div class="hellotext">
    <h1 style="text-align: center">
    <br>We are glad to welcome you to the site GuitarToTab. </br>
    Our service will help you quickly and easily get the tablature of any audio recording.
        In order to use our application you just need to register or log in if you already have a network account.
    </h1>
    <div style="text-align: center">
        <?php Pjax::begin(); ?>
        <?= Html::a("Registration", ['user/create'], ['class' => 'btn btn-secondary btn-lg', 'style'=>'width: 250px; margin: 15px;']) ?>
        <?php Pjax::end(); ?>
    </div>
    <div> </div>
    <div style="text-align: center">
        <?php Pjax::begin(); ?>
        <?= Html::a("Authorization", ['site/login'], ['class' => 'btn btn-secondary btn-lg', 'style'=>'width: 250px; margin: 15px;']) ?>
        <?php Pjax::end(); ?>
    </div>
</div>
<?php } ?>

<?php if (Yii::$app->user->isGuest) { ?>
<div class="row">
    <div class="col">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <div class="example-2">
            <div class="form-group">
                <input type="file" name="file" id="file" class="input-file">
                <label for="file" class="btn btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName"><big><big>Download file</big></big></span>
                </label>
            </div>
        </div>

    </div>
    <div class="col-sm-1">
    <button type="button" class="btn btn-secondary" style="width: 200px; margin-right: 20px;"><big>ClearAll</big></button>
    </div>
</div>

<?php /*if ($audio->path){ */?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
          <div class="row">
              <div class="col-sm-11">
                  <h5>Los Lobos - Cancion del Mariachi</h5>
              </div>
              <div class="col-sm-1">
                  <button type="button" class="btn btn-secondary" style="width: 200px; "><big>Convert</big></button>
              </div>
          </div>
        <div class="row">
            <div class="col-sm-11">
                <audio controls>
                    <source src="<?php echo Url::base(''); ?>../audio/1.mp3" type="audio/mpeg" >
                    <source src="<?php /*echo Url::base('') . '/' . $audio->path; */?>" type="audio/mpeg" >
                </audio>
            </div>
        </div>

        <div class="row">
            <p ><img src="<?php echo Url::base(''); ?>/img/audiowaves/spec1.jpg" alt="audiowave" ></p>
        </div>

        <div class="row">
            <div class="col-sm-11">
                <h4 style="align-content: center">Tablature</h4>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn btn-secondary" style="width: 200px; "><big>Save tabs</big></button>
            </div>
        </div>


    <?php
/*    $path_to_wav_file = 'C:/xampp/htdocs/GTT/web/uploads/00_BN1-129-Eb_comp_mic.wav';
    $au = shell_exec('draw.py');
    echo $au;
    /*$var = shell_exec('dir');
    echo $var;*/
    ?><!--

       --><?php
/*         $file_array = file( 'C:\xampp\htdocs\GTT\views\site\template.txt' );
       foreach ($file_array as $line_num => $line) {
           echo htmlspecialchars($line) . "<br />\n";
       }
            */?>

    <div class="body-content">
       <!-- <p><img src="<?php /*echo Url::base(''); */?>/img/audiowaves/awave.jpg" alt="audiowave"></p>-->
       <p><img src="<?php echo Url::base(''); ?>/img/tabs/tab.jpg" alt="tab" style="width: 900px; height: 450px; "></p>
    </div>



</div>
<?php } ?>
<!--    --><?php /*} */?>
