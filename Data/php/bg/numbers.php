<?php 

$data = array (
  'main' => 
  array (
    'bg' => 
    array (
      'numbers' => 
      array (
        'defaultNumberingSystem' => 'latn',
        'otherNumberingSystems' => 
        array (
          'native' => 'latn',
        ),
        'minimumGroupingDigits' => '2',
        'symbols-numberSystem-latn' => 
        array (
          'decimal' => ',',
          'group' => ' ',
          'list' => ';',
          'percentSign' => '%',
          'plusSign' => '+',
          'minusSign' => '-',
          'exponential' => 'E',
          'superscriptingExponent' => '.',
          'perMille' => '‰',
          'infinity' => '∞',
          'nan' => 'NaN',
          'timeSeparator' => ':',
        ),
        'decimalFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0.###',
          'long' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 хиляда',
              '1000-count-other' => '0 хиляди',
              '10000-count-one' => '00 хиляди',
              '10000-count-other' => '00 хиляди',
              '100000-count-one' => '000 хиляди',
              '100000-count-other' => '000 хиляди',
              '1000000-count-one' => '0 милион',
              '1000000-count-other' => '0 милиона',
              '10000000-count-one' => '00 милиона',
              '10000000-count-other' => '00 милиона',
              '100000000-count-one' => '000 милиона',
              '100000000-count-other' => '000 милиона',
              '1000000000-count-one' => '0 милиард',
              '1000000000-count-other' => '0 милиарда',
              '10000000000-count-one' => '00 милиарда',
              '10000000000-count-other' => '00 милиарда',
              '100000000000-count-one' => '000 милиарда',
              '100000000000-count-other' => '000 милиарда',
              '1000000000000-count-one' => '0 трилион',
              '1000000000000-count-other' => '0 трилиона',
              '10000000000000-count-one' => '00 трилиона',
              '10000000000000-count-other' => '00 трилиона',
              '100000000000000-count-one' => '000 трилиона',
              '100000000000000-count-other' => '000 трилиона',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 хил\'.\'',
              '1000-count-other' => '0 хил\'.\'',
              '10000-count-one' => '00 хил\'.\'',
              '10000-count-other' => '00 хил\'.\'',
              '100000-count-one' => '000 хил\'.\'',
              '100000-count-other' => '000 хил\'.\'',
              '1000000-count-one' => '0 млн\'.\'',
              '1000000-count-other' => '0 млн\'.\'',
              '10000000-count-one' => '00 млн\'.\'',
              '10000000-count-other' => '00 млн\'.\'',
              '100000000-count-one' => '000 млн\'.\'',
              '100000000-count-other' => '000 млн\'.\'',
              '1000000000-count-one' => '0 млрд\'.\'',
              '1000000000-count-other' => '0 млрд\'.\'',
              '10000000000-count-one' => '00 млрд\'.\'',
              '10000000000-count-other' => '00 млрд\'.\'',
              '100000000000-count-one' => '000 млрд\'.\'',
              '100000000000-count-other' => '000 млрд\'.\'',
              '1000000000000-count-one' => '0 трлн\'.\'',
              '1000000000000-count-other' => '0 трлн\'.\'',
              '10000000000000-count-one' => '00 трлн\'.\'',
              '10000000000000-count-other' => '00 трлн\'.\'',
              '100000000000000-count-one' => '000 трлн\'.\'',
              '100000000000000-count-other' => '000 трлн\'.\'',
            ),
          ),
        ),
        'scientificFormats-numberSystem-latn' => 
        array (
          'standard' => '#E0',
        ),
        'percentFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0%',
        ),
        'currencyFormats-numberSystem-latn' => 
        array (
          'currencySpacing' => 
          array (
            'beforeCurrency' => 
            array (
              'currencyMatch' => '[:^S:]',
              'surroundingMatch' => '[:digit:]',
              'insertBetween' => ' ',
            ),
            'afterCurrency' => 
            array (
              'currencyMatch' => '[:^S:]',
              'surroundingMatch' => '[:digit:]',
              'insertBetween' => ' ',
            ),
          ),
          'accounting' => '#,##0.00 ¤;(#,##0.00 ¤)',
          'standard' => '#,##0.00 ¤',
          'unitPattern-count-one' => '{0} {1}',
          'unitPattern-count-other' => '{0} {1}',
        ),
        'miscPatterns-numberSystem-latn' => 
        array (
          'atLeast' => '⩾ {0}',
          'range' => '{0} – {1}',
        ),
      ),
    ),
  ),
);

return $data;
