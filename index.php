<?php

/**
 * Convert stdObject to Array
 *
 * @param stdObject|array $d
 * @return array
 * @see http://www.if-not-true-then-false.com/2009/php-tip-convert-stdclass-object-to-multidimensional-array-and-convert-multidimensional-array-to-stdclass-object/
 *
 */
function objectToArray($d)
{
    if (is_object($d)) {
        // Gets the properties of the given object
        // with get_object_vars function
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        /*
         * Return array converted to object Using __FUNCTION__ (Magic constant) for recursive call
         */
        return array_map(__FUNCTION__, $d);
    } else {
        // Return array
        return $d;
    }
}

/**
 * Read data from json file and return array
 *
 * @param string $filename
 * @return array:
 */
function readJsonFile($filename) {
    $content = file_get_contents($filename);
    $content = json_decode($content);
    $content = objectToArray($content);

    return $content;
}

/**
 * Write to file
 *
 * @param string $filename
 * @param array $array
 * @param int $mode
 */
function makeDataFile($filename, $array, $mode) {
    $content = '<?php ' . PHP_EOL . PHP_EOL;
    $content .= '$data = ' . var_export($array, true) . ';' . PHP_EOL . PHP_EOL;
    $content .= 'return $data;' . PHP_EOL;

    file_put_contents($filename, $content);
    chmod($filename, 0666);
}


/**
 * Config
 */
$jsonDataDir = 'Data/json/main';
$phpDataDir = 'Data/php';
$modeFile = 0666;
$modeDir = 0777;
$onefile = false;

/**
 * Convert
 */
if ($handle = opendir($jsonDataDir)) {
    while (false !== ($entry = readdir($handle))) {
        if(is_dir($jsonDataDir . '/' .$entry) && $entry !== '.' && $entry !== '..') {
            $locale = $entry;
            $localeDir = $jsonDataDir . '/' . $entry;
            $allData = array();
            if ($handle2 = opendir($localeDir)) {
                mkdir($phpDataDir . '/' . $locale, $modeDir);
                while (false !== ($entry2 = readdir($handle2))) {
                    if(is_file($localeDir . '/' . $entry2) && strpos($entry2, '.json') > 0) {
                        $data = readJsonFile($localeDir . '/' .$entry2);
                        $phpfile = $phpDataDir . '/' . $locale . '/' . str_replace('.json', '.php', $entry2);
                        unset($data['main'][$locale]['identity']);
                        makeDataFile($phpfile, $data, $mode);
                        $allData = array_merge_recursive($allData, $data);
                    }
                }
            }

            if($allData !== array() && $onefile === true) {
                $phpfile = $phpDataDir . '/' . $locale . '.php';
                //$allData = $allData['main'][$locale];
                makeDataFile($phpfile, $allData);
            }
        }
    }
}

/**
 * Done
 */
echo 'Done.';