<?php

require 'function.php';

$jsonDataDir = '/WebServer/CLDR/json/main';
$jsonSupplementalDataDir = '/WebServer/CLDR/json/supplemental';
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
$supplemental = array(
    'plurals'
);
$skiplocaleindex = true;
$skipsupplementalindex = true;

define('IN', true);

require 'convert.php';
