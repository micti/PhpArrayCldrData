<?php 

$data = array (
  'main' => 
  array (
    'ko' => 
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
          'decimal' => '.',
          'group' => ',',
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
              '1000-count-other' => '0000',
              '10000-count-other' => '0만',
              '100000-count-other' => '00만',
              '1000000-count-other' => '000만',
              '10000000-count-other' => '0000만',
              '100000000-count-other' => '0억',
              '1000000000-count-other' => '00억',
              '10000000000-count-other' => '000억',
              '100000000000-count-other' => '0000억',
              '1000000000000-count-other' => '0조',
              '10000000000000-count-other' => '00조',
              '100000000000000-count-other' => '000조',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0000',
              '10000-count-other' => '0만',
              '100000-count-other' => '00만',
              '1000000-count-other' => '000만',
              '10000000-count-other' => '0000만',
              '100000000-count-other' => '0억',
              '1000000000-count-other' => '00억',
              '10000000000-count-other' => '000억',
              '100000000000-count-other' => '0000억',
              '1000000000000-count-other' => '0조',
              '10000000000000-count-other' => '00조',
              '100000000000000-count-other' => '000조',
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
          'accounting' => '¤#,##0.00;(¤#,##0.00)',
          'standard' => '¤#,##0.00',
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
