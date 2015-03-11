<?php 

$data = array (
  'main' => 
  array (
    'nl' => 
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
              '1000-count-one' => '0 duizend',
              '1000-count-other' => '0 duizend',
              '10000-count-one' => '00 duizend',
              '10000-count-other' => '00 duizend',
              '100000-count-one' => '000 duizend',
              '100000-count-other' => '000 duizend',
              '1000000-count-one' => '0 miljoen',
              '1000000-count-other' => '0 miljoen',
              '10000000-count-one' => '00 miljoen',
              '10000000-count-other' => '00 miljoen',
              '100000000-count-one' => '000 miljoen',
              '100000000-count-other' => '000 miljoen',
              '1000000000-count-one' => '0 miljard',
              '1000000000-count-other' => '0 miljard',
              '10000000000-count-one' => '00 miljard',
              '10000000000-count-other' => '00 miljard',
              '100000000000-count-one' => '000 miljard',
              '100000000000-count-other' => '000 miljard',
              '1000000000000-count-one' => '0 biljoen',
              '1000000000000-count-other' => '0 biljoen',
              '10000000000000-count-one' => '00 biljoen',
              '10000000000000-count-other' => '00 biljoen',
              '100000000000000-count-one' => '000 biljoen',
              '100000000000000-count-other' => '000 biljoen',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0K',
              '1000-count-other' => '0K',
              '10000-count-one' => '00K',
              '10000-count-other' => '00K',
              '100000-count-one' => '000K',
              '100000-count-other' => '000K',
              '1000000-count-one' => '0 mln\'.\'',
              '1000000-count-other' => '0 mln\'.\'',
              '10000000-count-one' => '00 mln\'.\'',
              '10000000-count-other' => '00 mln\'.\'',
              '100000000-count-one' => '000 mln\'.\'',
              '100000000-count-other' => '000 mln\'.\'',
              '1000000000-count-one' => '0 mld\'.\'',
              '1000000000-count-other' => '0 mld\'.\'',
              '10000000000-count-one' => '00 mld\'.\'',
              '10000000000-count-other' => '00 mld\'.\'',
              '100000000000-count-one' => '000 mld\'.\'',
              '100000000000-count-other' => '000 mld\'.\'',
              '1000000000000-count-one' => '0 bln\'.\'',
              '1000000000000-count-other' => '0 bln\'.\'',
              '10000000000000-count-one' => '00 bln\'.\'',
              '10000000000000-count-other' => '00 bln\'.\'',
              '100000000000000-count-one' => '000 bln\'.\'',
              '100000000000000-count-other' => '000 bln\'.\'',
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
          'accounting' => '¤ #,##0.00;(¤ #,##0.00)',
          'standard' => '¤ #,##0.00;¤ #,##0.00-',
          'unitPattern-count-one' => '{0} {1}',
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
