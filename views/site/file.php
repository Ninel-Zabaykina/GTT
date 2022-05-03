<?php
/* @var $this yii\web\View */
/* @var $audio app\models\UploadAudio */

use yii\widgets\ActiveForm;

?>

<?php $form_a = ActiveForm::begin(['options' => []]) ?>
    <?= $form_a->field($audio, 'file')->fileInput() ?>
<?php ActiveForm::end() ?>