<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Modal;
use yii\captcha\Captcha;
use yii\widgets\ActiveForm;

Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => [
        'label' => 'click me',
        'tag' => 'button',
        'class' => 'btn btn-success',
    ],
    'footer' => 'Низ окна',
]);
?>
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'subject') ?>

<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php Modal::end(); ?>