<?php
ini_set('display_errors', true);

define('YII_DEBUG', true);
// Запуск самого фрейма
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
// Отримання конфігурації
$config = require(__DIR__ . '/../config/web.php');
// Створення і запуск фрейма
(new yii\web\Application($config))->run();