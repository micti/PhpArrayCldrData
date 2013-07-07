<?php

require 'function.php';

$jsonDataDir = '/WebServer/CLDR/json/main';
$phpDataDir = 'Data/php-custom';
$fileMode = 0666;
$locale = array(
    'en',
    'vi',
    'ko'
);
$field = array(
    'ca-gregorian',
    'dateFields',
    'listPatterns',
    'numbers',
    'units'
);
$skiplocaleindex = true;

define('IN', true);

require 'convert.php';
