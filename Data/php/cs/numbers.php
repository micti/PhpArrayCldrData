<?php
$data = array(
    'main' => array(
        'cs' => array(
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
                            '1000-count-one' => '0',
                            '1000-count-few' => '0',
                            '1000-count-other' => '0',
                            '10000-count-one' => '00 tisíc',
                            '10000-count-few' => '00 tisíc',
                            '10000-count-other' => '00 tisíc',
                            '100000-count-one' => '000 tisíc',
                            '100000-count-few' => '000 tisíc',
                            '100000-count-other' => '000 tisíc',
                            '1000000-count-one' => '0 milion',
                            '1000000-count-few' => '0 miliony',
                            '1000000-count-other' => '0 milionů',
                            '10000000-count-one' => '00 milionů',
                            '10000000-count-few' => '00 milionů',
                            '10000000-count-other' => '00 milionů',
                            '100000000-count-one' => '000 milionů',
                            '100000000-count-few' => '000 milionů',
                            '100000000-count-other' => '000 milionů',
                            '1000000000-count-one' => '0 miliarda',
                            '1000000000-count-few' => '0 miliardy',
                            '1000000000-count-other' => '0 miliard',
                            '10000000000-count-one' => '00 miliard',
                            '10000000000-count-few' => '00 miliard',
                            '10000000000-count-other' => '00 miliard',
                            '100000000000-count-one' => '000 miliard',
                            '100000000000-count-few' => '000 miliard',
                            '100000000000-count-other' => '000 miliard',
                            '1000000000000-count-one' => '0 bilion',
                            '1000000000000-count-few' => '0 biliony',
                            '1000000000000-count-other' => '0 bilionů',
                            '10000000000000-count-one' => '00 bilionů',
                            '10000000000000-count-few' => '00 bilionů',
                            '10000000000000-count-other' => '00 bilionů',
                            '100000000000000-count-one' => '000 bilionů',
                            '100000000000000-count-few' => '000 bilionů',
                            '100000000000000-count-other' => '000 bilionů'
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
