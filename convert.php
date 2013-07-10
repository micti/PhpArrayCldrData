<?php

if (!defined('IN')) {
    die('Not in target!');
}

/* convert */

echo 'Building ...' . '</br></br>' . PHP_EOL . PHP_EOL;

echo 'Main data' . '</br>' . PHP_EOL;

foreach ($locale as $l) {

    if (!is_dir($phpDataDir . DIRECTORY_SEPARATOR . $l)) {
        mkdir($phpDataDir . DIRECTORY_SEPARATOR . $l, 0777);
    }

    foreach ($field as $f) {
        $jsonFile = $jsonDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.json';
        $phpFile = $phpDataDir . DIRECTORY_SEPARATOR . $l . DIRECTORY_SEPARATOR . $f . '.php';


        if (is_readable($jsonFile)) {
            // Read json data
            $data = readJsonFile($jsonFile);

            // Process data
            unset($data['main'][$l]['identity']);
            if ($skiplocaleindex) {
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

echo '</br>' . PHP_EOL . 'Main data' . '</br>' . PHP_EOL;

foreach ($supplemental as $s) {

    $jsonFile = $jsonSupplementalDataDir . DIRECTORY_SEPARATOR . $s . '.json';
    $phpFile = $phpDataDir . DIRECTORY_SEPARATOR . $s . '.php';


    if (is_readable($jsonFile)) {
        // Read json data
        $data = readJsonFile($jsonFile);

        // Process data
        unset($data['supplemental']['version']);
        unset($data['supplemental']['generation']);
        if ($skipsupplementalindex) {
            $data = $data['supplemental'][$s];
        }

        // Save new php array data
        makeDataFile($phpFile, $data, $fileMode);

        echo '[+] ' . $s . '</br>' . PHP_EOL;
    } else {
        echo '[-] ' . $s . '</br>' . PHP_EOL;
    }
}

echo 'Done.';
