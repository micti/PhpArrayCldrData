<?php

require 'function.php';

$jsonDataDir = '/home/nhatanh/Downloads/main';
$jsonSupplementalDataDir = '/home/nhatanh/Downloads/supplemental';
$phpDataDir = 'Data/php';
$fileMode = 0666;
$locale = array(
    'ar',
    'bg',
    'bn',
    'ca',
    'cs',
    'da',
    'de',
    'el',
    'en',
    'en-AU',
    'en-CA',
    'en-GB',
    'en-HK',
    'en-IN',
    'es',
    'fi',
    'fr',
    'he',
    'hi',
    'hr',
    'hu',
    'it',
    'ja',
    'ko',
    'ml',
    'nb',
    'nl',
    'pl',
    'pt',
    'pt-PT',
    'ro',
    'ru',
    'sk',
    'sl',
    'sr',
    'sv',
    'th',
    'uk',
    'vi',
    'zh',
    'zh-Hant'
);
$field = array(
    'ca-buddhist',
    'ca-chinese',
    'ca-coptic',
    'ca-dangi',
    'ca-ethiopic-amete-alem',
    'ca-ethiopic',
    'ca-generic',
    'ca-gregorian',
    'ca-hebrew',
    'ca-indian',
    'ca-islamic-civil',
    'ca-islamic',
    'ca-japanese',
    'ca-persian',
    'ca-roc',
    'characters',
    'contextTransforms',
    'currencies',
    'dateFields',
    'delimiters',
    'languages',
    'layout',
    'listPatterns',
    'localeDisplayNames',
    'measurementSystemNames',
    'numbers',
    'posix',
    'scripts',
    'territories',
    'timeZoneNames',
    'transformNames',
    'units',
    'variants'
);
$supplemental = array(
    'plurals',
    'weekData'
);

$skiplocaleindex = false;
$skipsupplementalindex = false;

define('IN', true);

require 'convert.php';
