<?php
use yii\bootstrap4\Modal;

Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => [
        'label' => 'окно файл',
    ],
    'footer' => 'Низ окна',
]);

echo 'какие-то штуки для файла';

Modal::end(); ?>
