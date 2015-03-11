<?php 

$data = array (
  'main' => 
  array (
    'zh' => 
    array (
      'numbers' => 
      array (
        'defaultNumberingSystem' => 'latn',
        'otherNumberingSystems' => 
        array (
          'native' => 'hanidec',
          'traditional' => 'hans',
          'finance' => 'hansfin',
        ),
        'minimumGroupingDigits' => '1',
        'symbols-numberSystem-hanidec' => 
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
        'decimalFormats-numberSystem-hanidec' => 
        array (
          'standard' => '#,##0.###',
          'long' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0千',
              '10000-count-other' => '0万',
              '100000-count-other' => '00万',
              '1000000-count-other' => '000万',
              '10000000-count-other' => '0000万',
              '100000000-count-other' => '0亿',
              '1000000000-count-other' => '00亿',
              '10000000000-count-other' => '000亿',
              '100000000000-count-other' => '0000亿',
              '1000000000000-count-other' => '0兆',
              '10000000000000-count-other' => '00兆',
              '100000000000000-count-other' => '000兆',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0千',
              '10000-count-other' => '0万',
              '100000-count-other' => '00万',
              '1000000-count-other' => '000万',
              '10000000-count-other' => '0000万',
              '100000000-count-other' => '0亿',
              '1000000000-count-other' => '00亿',
              '10000000000-count-other' => '000亿',
              '100000000000-count-other' => '0000亿',
              '1000000000000-count-other' => '0兆',
              '10000000000000-count-other' => '00兆',
              '100000000000000-count-other' => '000兆',
            ),
          ),
        ),
        'decimalFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0.###',
          'long' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0千',
              '10000-count-other' => '0万',
              '100000-count-other' => '00万',
              '1000000-count-other' => '000万',
              '10000000-count-other' => '0000万',
              '100000000-count-other' => '0亿',
              '1000000000-count-other' => '00亿',
              '10000000000-count-other' => '000亿',
              '100000000000-count-other' => '0000亿',
              '1000000000000-count-other' => '0兆',
              '10000000000000-count-other' => '00兆',
              '100000000000000-count-other' => '000兆',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-other' => '0千',
              '10000-count-other' => '0万',
              '100000-count-other' => '00万',
              '1000000-count-other' => '000万',
              '10000000-count-other' => '0000万',
              '100000000-count-other' => '0亿',
              '1000000000-count-other' => '00亿',
              '10000000000-count-other' => '000亿',
              '100000000000-count-other' => '0000亿',
              '1000000000000-count-other' => '0兆',
              '10000000000000-count-other' => '00兆',
              '100000000000000-count-other' => '000兆',
            ),
          ),
        ),
        'scientificFormats-numberSystem-hanidec' => 
        array (
          'standard' => '#E0',
        ),
        'scientificFormats-numberSystem-latn' => 
        array (
          'standard' => '#E0',
        ),
        'percentFormats-numberSystem-hanidec' => 
        array (
          'standard' => '#,##0%',
        ),
        'percentFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0%',
        ),
        'currencyFormats-numberSystem-hanidec' => 
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
          'standard' => '¤ #,##0.00',
          'unitPattern-count-other' => '{0}{1}',
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
          'standard' => '¤ #,##0.00',
          'unitPattern-count-other' => '{0}{1}',
        ),
        'miscPatterns-numberSystem-hanidec' => 
        array (
          'atLeast' => '{0}+',
          'range' => '{0}-{1}',
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
