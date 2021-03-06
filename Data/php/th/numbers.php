<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'latn',
    'otherNumberingSystems' => [
      'native' => 'thai',
    ],
    'minimumGroupingDigits' => '1',
    'symbols-numberSystem-latn' => [
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
    ],
    'symbols-numberSystem-thai' => [
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
    ],
    'decimalFormats-numberSystem-latn' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0 พัน',
          '10000-count-other' => '0 หมื่น',
          '100000-count-other' => '0 แสน',
          '1000000-count-other' => '0 ล้าน',
          '10000000-count-other' => '00 ล้าน',
          '100000000-count-other' => '000 ล้าน',
          '1000000000-count-other' => '0 พันล้าน',
          '10000000000-count-other' => '0 หมื่นล้าน',
          '100000000000-count-other' => '0 แสนล้าน',
          '1000000000000-count-other' => '0 ล้านล้าน',
          '10000000000000-count-other' => '00 ล้านล้าน',
          '100000000000000-count-other' => '000 ล้านล้าน',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0 พ\'.\'',
          '10000-count-other' => '0 ม\'.\'',
          '100000-count-other' => '0 ส\'.\'',
          '1000000-count-other' => '0 ล\'.\'',
          '10000000-count-other' => '00 ล\'.\'',
          '100000000-count-other' => '000 ล\'.\'',
          '1000000000-count-other' => '0 พ\'.\'ล\'.\'',
          '10000000000-count-other' => '0 ม\'.\'ล\'.\'',
          '100000000000-count-other' => '0 ส\'.\'ล\'.\'',
          '1000000000000-count-other' => '0 ล\'.\'ล\'.\'',
          '10000000000000-count-other' => '00 ล\'.\'ล\'.\'',
          '100000000000000-count-other' => '000 ล\'.\'ล\'.\'',
        ],
      ],
    ],
    'decimalFormats-numberSystem-thai' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0 พัน',
          '10000-count-other' => '0 หมื่น',
          '100000-count-other' => '0 แสน',
          '1000000-count-other' => '0 ล้าน',
          '10000000-count-other' => '00 ล้าน',
          '100000000-count-other' => '000 ล้าน',
          '1000000000-count-other' => '0 พันล้าน',
          '10000000000-count-other' => '0 หมื่นล้าน',
          '100000000000-count-other' => '0 แสนล้าน',
          '1000000000000-count-other' => '0 ล้านล้าน',
          '10000000000000-count-other' => '00 ล้านล้าน',
          '100000000000000-count-other' => '000 ล้านล้าน',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0 พ\'.\'',
          '10000-count-other' => '0 ม\'.\'',
          '100000-count-other' => '0 ส\'.\'',
          '1000000-count-other' => '0 ล\'.\'',
          '10000000-count-other' => '00 ล\'.\'',
          '100000000-count-other' => '000 ล\'.\'',
          '1000000000-count-other' => '0 พ\'.\'ล\'.\'',
          '10000000000-count-other' => '0 ม\'.\'ล\'.\'',
          '100000000000-count-other' => '0 ส\'.\'ล\'.\'',
          '1000000000000-count-other' => '0 ล\'.\'ล\'.\'',
          '10000000000000-count-other' => '00 ล\'.\'ล\'.\'',
          '100000000000000-count-other' => '000 ล\'.\'ล\'.\'',
        ],
      ],
    ],
    'scientificFormats-numberSystem-latn' => [
      'standard' => '#E0',
    ],
    'scientificFormats-numberSystem-thai' => [
      'standard' => '#E0',
    ],
    'percentFormats-numberSystem-latn' => [
      'standard' => '#,##0%',
    ],
    'percentFormats-numberSystem-thai' => [
      'standard' => '#,##0%',
    ],
    'currencyFormats-numberSystem-latn' => [
      'currencySpacing' => [
        'beforeCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
        'afterCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
      ],
      'accounting' => '¤#,##0.00;(¤#,##0.00]',
      'standard' => '¤#,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'currencyFormats-numberSystem-thai' => [
      'currencySpacing' => [
        'beforeCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
        'afterCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
      ],
      'accounting' => '¤#,##0.00;(¤#,##0.00]',
      'standard' => '¤#,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '{0}+',
      'range' => '{0}-{1}',
    ],
    'miscPatterns-numberSystem-thai' => [
      'atLeast' => '{0}+',
      'range' => '{0}-{1}',
    ],
  ],
];
