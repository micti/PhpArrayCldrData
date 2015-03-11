<?php 

$data = array (
  'main' => 
  array (
    'fr' => 
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
          'group' => ' ',
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
              '1000-count-one' => '0 millier',
              '1000-count-other' => '0 mille',
              '10000-count-one' => '00 millier',
              '10000-count-other' => '00 mille',
              '100000-count-one' => '000 millier',
              '100000-count-other' => '000 mille',
              '1000000-count-one' => '0 million',
              '1000000-count-other' => '0 millions',
              '10000000-count-one' => '00 million',
              '10000000-count-other' => '00 millions',
              '100000000-count-one' => '000 million',
              '100000000-count-other' => '000 millions',
              '1000000000-count-one' => '0 milliard',
              '1000000000-count-other' => '0 milliards',
              '10000000000-count-one' => '00 milliard',
              '10000000000-count-other' => '00 milliards',
              '100000000000-count-one' => '000 milliards',
              '100000000000-count-other' => '000 milliards',
              '1000000000000-count-one' => '0 billion',
              '1000000000000-count-other' => '0 billions',
              '10000000000000-count-one' => '00 billions',
              '10000000000000-count-other' => '00 billions',
              '100000000000000-count-one' => '000 billions',
              '100000000000000-count-other' => '000 billions',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 k',
              '1000-count-other' => '0 k',
              '10000-count-one' => '00 k',
              '10000-count-other' => '00 k',
              '100000-count-one' => '000 k',
              '100000-count-other' => '000 k',
              '1000000-count-one' => '0 M',
              '1000000-count-other' => '0 M',
              '10000000-count-one' => '00 M',
              '10000000-count-other' => '00 M',
              '100000000-count-one' => '000 M',
              '100000000-count-other' => '000 M',
              '1000000000-count-one' => '0 Md',
              '1000000000-count-other' => '0 Md',
              '10000000000-count-one' => '00 Md',
              '10000000000-count-other' => '00 Md',
              '100000000000-count-one' => '000 Md',
              '100000000000-count-other' => '000 Md',
              '1000000000000-count-one' => '0 Bn',
              '1000000000000-count-other' => '0 Bn',
              '10000000000000-count-one' => '00 Bn',
              '10000000000000-count-other' => '00 Bn',
              '100000000000000-count-one' => '000 Bn',
              '100000000000000-count-other' => '000 Bn',
            ),
          ),
        ),
        'scientificFormats-numberSystem-latn' => 
        array (
          'standard' => '#E0',
        ),
        'percentFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0 %',
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
          'atLeast' => 'au moins {0}',
          'range' => '{0}–{1}',
        ),
      ),
    ),
  ),
);

return $data;
