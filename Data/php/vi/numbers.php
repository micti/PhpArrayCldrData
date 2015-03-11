<?php 

$data = array (
  'main' => 
  array (
    'vi' => 
    array (
      'numbers' => 
      array (
        'defaultNumberingSystem' => 'latn',
        'otherNumberingSystems' => 
        array (
          'native' => 'latn',
        ),
        'minimumGroupingDigits' => '1',
        'symbols-numberSystem-latn' => 
        array (
          'decimal' => ',',
          'group' => '.',
          'list' => ';',
          'percentSign' => '%',
          'plusSign' => '+',
          'minusSign' => '-',
          'exponential' => 'E',
          'superscriptingExponent' => '×',
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
              '1000-count-other' => '0 nghìn',
              '10000-count-other' => '00 nghìn',
              '100000-count-other' => '000 nghìn',
              '1000000-count-other' => '0 triệu',
              '10000000-count-other' => '00 triệu',
              '100000000-count-other' => '000 triệu',
              '1000000000-count-other' => '0 tỷ',
              '10000000000-count-other' => '00 tỷ',
              '100000000000-count-other' => '000 tỷ',
              '1000000000000-count-other' => '0 nghìn tỷ',
              '10000000000000-count-other' => '00 nghìn tỷ',
              '100000000000000-count-other' => '000 nghìn tỷ',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0 N',
              '10000-count-other' => '00 N',
              '100000-count-other' => '000 N',
              '1000000-count-other' => '0 Tr',
              '10000000-count-other' => '00 Tr',
              '100000000-count-other' => '000 Tr',
              '1000000000-count-other' => '0 T',
              '10000000000-count-other' => '00 T',
              '100000000000-count-other' => '000 T',
              '1000000000000-count-other' => '0 NT',
              '10000000000000-count-other' => '00 NT',
              '100000000000000-count-other' => '000 NT',
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
          'accounting' => '#,##0.00 ¤',
          'standard' => '#,##0.00 ¤',
          'unitPattern-count-other' => '{0} {1}',
        ),
        'miscPatterns-numberSystem-latn' => 
        array (
          'atLeast' => '{0}+',
          'range' => '{0}-{1}',
        ),
      ),
    ),
  ),
);

return $data;
