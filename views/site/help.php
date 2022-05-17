<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Help';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-main">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>About project</h2>

                <p>GuitarToTab is an assistant for people who want to work out a piece of music from a recording, in order
                    to write it out, or play it themselves, or both. It doesn't do the transcribing for you, but it is essentially
                    a specialised player program which is optimised for the purpose of transcription. It has many transcription-specific
                    features not found on conventional music players. It is also used by many people for play-along practice. </p>

            </div>
            <div class="col-lg-6">
                <h2>Manual</h2>

                <p>The manual section is designed to familiarize you with the basics of working with our service. You should also
                    contact him if you have any problems while working with the service. This section provides step by step steps
                    for proper operation in our web service. It can also solve most of the problems that arise when using
                    GuitarToTab.</p>

                <?php Pjax::begin(); ?>
                <?= Html::a("Go to manual", ['site/manual'], ['class' => 'btn btn-outline-secondary', 'options'=>'style: ']) ?>
                <?php Pjax::end(); ?>
            </div>

            <div class="col-lg-6">
                <h2>Support</h2>
                <?php $form = ActiveForm::begin() ?>
                    <?= $form->field($support_model, 'name') ?>
                    <?= $form->field($support_model, 'email') ?>
                    <?= $form->field($support_model, 'text')-> textarea() ?>
                    <?= $form->field($support_model, 'photo')->fileInput() ?>
                    <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
                <?php ActiveForm::end() ?>
            </div>

            <div class="col-lg-6" style="margin-top: 10px ">
                <h2>FAQ</h2>

                <p>If you have any difficulties while working with our application and you could not solve them using the
                    manual section, try referring to the Frequently Asked Questions section, maybe someone has already
                    solved your problem. If the Faq section did not help you in solving the problem, please contact the
                    support service using the form below.</p>

                <?php Pjax::begin(); ?>
                <?= Html::a("Go to FAQ", ['site/faq'], ['class' => 'btn btn-outline-secondary']) ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>



