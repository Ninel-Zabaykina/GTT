<?php
use app\models\User;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$model = new User();
?>

<?php $form = ActiveForm::begin(['id'=>'form-signup']); ?>
    <?= $form->field($model, 'email')->textInput(['autofocus'=>true]) ?>
    <?= $form->field($model, 'login')->textInput() ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div>
        <?= Html::submitButton('Registration', ['class'=>'btn btn-success']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
