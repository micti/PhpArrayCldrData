<?php

if (!defined('IN')) {
    die('Not in target!');
}

/* convert */

echo 'Building ...' . '</br></br>' . PHP_EOL . PHP_EOL;

echo 'Main data' . '</br>' . PHP_EOL;

foreach ($locale as $l) {

    if (!is_dir($phpDataDir . DIRECTORY_SEPARATOR . $l)) {
        mkdir($phpDataDir . DIRECTORY_SEPARATOR . $l);
    }

    foreach ($field as $f) {
        $jsonFile = $jsonDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.json';
        $phpFile = $phpDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.php';


        if (is_readable($jsonFile)) {
            // Read json data
            $data = readJsonFile($jsonFile);

            // Process data
            unset($data['main'][$l]['identity']);
            $data = $data['main'][$l];

            // Save new php array data
            makeDataFile($phpFile, $data);

            echo '[+] ' . $l . ' : ' . $f . PHP_EOL;
        } else {
            echo '[-] ' . $l . ' : ' . $f . PHP_EOL;
        }
    }
}

echo PHP_EOL . 'Main data' . PHP_EOL;

foreach ($supplemental as $s) {

    $jsonFile = $jsonSupplementalDataDir . DIRECTORY_SEPARATOR . $s . '.json';
    $phpFile = $phpDataDir . DIRECTORY_SEPARATOR . $s . '.php';


    if (is_readable($jsonFile)) {
        // Read json data
        $data = readJsonFile($jsonFile);

        // Process data
        unset($data['supplemental']['version']);
        unset($data['supplemental']['generation']);

        if ($s == 'characterFallbacks') {
            $ri = 'characters';
        } elseif ($s == 'dayPeriods') {
            $ri = 'dayPeriodRuleSet';
        } elseif ($s == 'ordinals') {
            $ri = 'plurals-type-ordinal';
        } elseif ($s == 'plurals') {
            $ri = 'plurals-type-cardinal';
        } else {
            $ri = $s;
        }

        $data = $data['supplemental'][$ri];

        // Save new php array data
        makeDataFile($phpFile, $data);

        echo '[+] ' . $s . PHP_EOL;
    } else {
        echo '[-] ' . $s . PHP_EOL;
    }
}

echo 'Done.';
