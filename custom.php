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

/* convert */

echo 'Building ...' . '</br>' . PHP_EOL;

foreach($locale as $l) {

    mkdir($phpDataDir . DIRECTORY_SEPARATOR . $l, 0777);

    foreach($field as $f) {
        $jsonFile = $jsonDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.json';
        $phpFile = $phpDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.php';


        if(is_readable($jsonFile)) {
            // Read json data
            $data = readJsonFile($jsonFile);

            // Process data
            unset($data['main'][$l]['identity']);
            if($skiplocaleindex) {
                $data = $data['main'][$l];
            }

            // Save new php array data
            makeDataFile($phpFile, $data, $fileMode);

            echo '[+] ' . $l . ' : ' . $f . '</br>' . PHP_EOL;
        } else {
            echo '[-] ' . $l . ' : ' . $f . '</br>' . PHP_EOL;
        }
    }
}

echo 'Done.';
