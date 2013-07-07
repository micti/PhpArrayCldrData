<?php
$data = array(
    'main' => array(
        'sk' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'latn'
                ),
                'symbols-numberSystem-latn' => array(
                    'decimal' => ',',
                    'group' => ' ',
                    'list' => ';',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'E',
                    'perMille' => '‰',
                    'infinity' => '∞',
                    'nan' => 'NaN'
                ),
                'decimalFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 tisíc',
                            '1000-count-few' => '0 tisíc',
                            '1000-count-other' => '0 tisíc',
                            '10000-count-one' => '00 tisíc',
                            '10000-count-few' => '00 tisíc',
                            '10000-count-other' => '00 tisíc',
                            '100000-count-one' => '000 tisíc',
                            '100000-count-few' => '000 tisíc',
                            '100000-count-other' => '000 tisíc',
                            '1000000-count-one' => '0 milión',
                            '1000000-count-few' => '0 milióny',
                            '1000000-count-other' => '0 miliónov',
                            '10000000-count-one' => '00 milión',
                            '10000000-count-few' => '00 milióny',
                            '10000000-count-other' => '00 miliónov',
                            '100000000-count-one' => '000 milión',
                            '100000000-count-few' => '000 milióny',
                            '100000000-count-other' => '000 miliónov',
                            '1000000000-count-one' => '0 miliarda',
                            '1000000000-count-few' => '0 miliardy',
                            '1000000000-count-other' => '0 miliard',
                            '10000000000-count-one' => '00 miliarda',
                            '10000000000-count-few' => '00 miliárdy',
                            '10000000000-count-other' => '00 miliárd',
                            '100000000000-count-one' => '000 miliarda',
                            '100000000000-count-few' => '000 miliárdy',
                            '100000000000-count-other' => '000 miliárd',
                            '1000000000000-count-one' => '0 bilión',
                            '1000000000000-count-few' => '0 bilióny',
                            '1000000000000-count-other' => '0 biliónov',
                            '10000000000000-count-one' => '00 bilión',
                            '10000000000000-count-few' => '00 bilióny',
                            '10000000000000-count-other' => '00 biliónov',
                            '100000000000000-count-one' => '000 bilión',
                            '100000000000000-count-few' => '000 bilióny',
                            '100000000000000-count-other' => '000 biliónov'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 tis\'.\'',
                            '1000-count-few' => '0 tis\'.\'',
                            '1000-count-other' => '0 tis\'.\'',
                            '10000-count-one' => '00 tis\'.\'',
                            '10000-count-few' => '00 tis\'.\'',
                            '10000-count-other' => '00 tis\'.\'',
                            '100000-count-one' => '000 tis\'.\'',
                            '100000-count-few' => '000 tis\'.\'',
                            '100000-count-other' => '000 tis\'.\'',
                            '1000000-count-one' => '0 mil\'.\'',
                            '1000000-count-few' => '0 mil\'.\'',
                            '1000000-count-other' => '0 mil\'.\'',
                            '10000000-count-one' => '00 mil\'.\'',
                            '10000000-count-few' => '00 mil\'.\'',
                            '10000000-count-other' => '00 mil\'.\'',
                            '100000000-count-one' => '000 mil\'.\'',
                            '100000000-count-few' => '000 mil\'.\'',
                            '100000000-count-other' => '000 mil\'.\'',
                            '1000000000-count-one' => '0 mld\'.\'',
                            '1000000000-count-few' => '0 mld\'.\'',
                            '1000000000-count-other' => '0 mld\'.\'',
                            '10000000000-count-one' => '00 mld\'.\'',
                            '10000000000-count-few' => '00 mld\'.\'',
                            '10000000000-count-other' => '00 mld\'.\'',
                            '100000000000-count-one' => '000 mld\'.\'',
                            '100000000000-count-few' => '000 mld\'.\'',
                            '100000000000-count-other' => '000 mld\'.\'',
                            '1000000000000-count-one' => '0 bil\'.\'',
                            '1000000000000-count-few' => '0 bil\'.\'',
                            '1000000000000-count-other' => '0 bil\'.\'',
                            '10000000000000-count-one' => '00 bil\'.\'',
                            '10000000000000-count-few' => '00 bil\'.\'',
                            '10000000000000-count-other' => '00 bil\'.\'',
                            '100000000000000-count-one' => '000 bil\'.\'',
                            '100000000000000-count-few' => '000 bil\'.\'',
                            '100000000000000-count-other' => '000 bil\'.\''
                        )
                    )
                ),
                'scientificFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'scientificFormat' => array(
                            'pattern' => '#E0'
                        )
                    )
                ),
                'percentFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'percentFormat' => array(
                            'pattern' => '#,##0 %'
                        )
                    )
                ),
                'currencyFormats-numberSystem-latn' => array(
                    'currencySpacing' => array(
                        'beforeCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        ),
                        'afterCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        )
                    ),
                    'standard' => array(
                        'currencyFormat' => array(
                            'pattern' => '#,##0.00 ¤'
                        )
                    ),
                    'unitPattern-count-one' => '{0} {1}',
                    'unitPattern-count-few' => '{0} {1}',
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
