<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'File', 'options' => ['data-toggle'=> "modal", 'data-target' => "#filemodal"]],
            ['label' => 'Record', 'options' => ['data-toggle'=> "modal", 'data-target' => "#recordmodal"]],
            ['label' => 'Tabs', 'options' => ['data-toggle'=> "modal", 'data-target' => "#tabmodal"]],
            ['label' => 'Settings', 'options' => ['data-toggle'=> "modal", 'data-target' => "#settingsmodal"]],
            ['label' => 'Help', 'url' => ['/site/help']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['data-target'=>'#loginRight']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">Zabaykina Inc. <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<!-- Modal File -->
<?php
    Modal::begin([
            'title'=>'File',
            'footer' => 'tratata',
            'id' => 'filemodal',
    ])
?>
<div class="btn-in-modal">
    <?= Html::Button('Download', ['class' => 'btn btn-secondary', 'name' => 'download-file-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
    <?= Html::Button('Create', ['class' => 'btn btn-secondary', 'name' => 'open-file-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
    <?= Html::Button('Save', ['class' => 'btn btn-secondary', 'name' => 'save-file-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
    <?= Html::Button('Delete', ['class' => 'btn btn-secondary', 'name' => 'delete-file-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
</div>
<?php Modal::end() ?>

<!-- Modal Record -->
<?php
Modal::begin([
    'title'=>'Record',
    'footer' => 'tratata',
    'id' => 'recordmodal',
])
?>
<div class="btn-in-modal">
    <?= Html::Button('Create', ['class' => 'btn btn-secondary', 'name' => 'create-record-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
    <?= Html::Button('Save', ['class' => 'btn btn-secondary', 'name' => 'save-record-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
</div>
<?php Modal::end() ?>

<!-- Modal Tabs -->
<?php
Modal::begin([
    'title'=>'Tab',
    'footer' => 'tratata',
    'id' => 'tabmodal',
])
?>
<div class="btn-in-modal">
    <?= Html::Button('Save', ['class' => 'btn btn-secondary', 'name' => 'save-tab-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
    <?= Html::Button('Delete', ['class' => 'btn btn-secondary', 'name' => 'delete-tab-btn', 'style' => 'width: 100px; margin-left: 25px:']) ?>
</div>
<?php Modal::end() ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
