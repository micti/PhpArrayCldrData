<?php
$data = array(
    'main' => array(
        'bg' => array(
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
                            '1000-count-one' => '0 хиляда',
                            '1000-count-other' => '0 хиляди',
                            '10000-count-one' => '00 хиляди',
                            '10000-count-other' => '00 хиляди',
                            '100000-count-one' => '000 Х',
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
                            '100000000000000-count-other' => '000 трилиона'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 Х',
                            '1000-count-other' => '0 Х',
                            '10000-count-one' => '00 Х',
                            '10000-count-other' => '00 Х',
                            '100000-count-one' => '000 Х',
                            '100000-count-other' => '000 Х',
                            '1000000-count-one' => '0 М',
                            '1000000-count-other' => '0 М',
                            '10000000-count-one' => '00 М',
                            '10000000-count-other' => '00 М',
                            '100000000-count-one' => '000 М',
                            '100000000-count-other' => '000 М',
                            '1000000000-count-one' => '0 Б',
                            '1000000000-count-other' => '0 Б',
                            '10000000000-count-one' => '00 Б',
                            '10000000000-count-other' => '00 Б',
                            '100000000000-count-one' => '000 Б',
                            '100000000000-count-other' => '000 Б',
                            '1000000000000-count-one' => '0 Т',
                            '1000000000000-count-other' => '0 Т',
                            '10000000000000-count-one' => '00 Т',
                            '10000000000000-count-other' => '00 Т',
                            '100000000000000-count-one' => '000 Т',
                            '100000000000000-count-other' => '000 Т'
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
                            'pattern' => '#,##0%'
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
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
