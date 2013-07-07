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
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        return array_map(__FUNCTION__, $d);
    } else {
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
    chmod($filename, $mode);
}
