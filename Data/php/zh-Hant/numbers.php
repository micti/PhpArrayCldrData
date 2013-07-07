<?php
$data = array(
    'main' => array(
        'zh-Hant' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'hanidec',
                    'traditional' => 'hant',
                    'finance' => 'hantfin'
                ),
                'symbols-numberSystem-hanidec' => array(
                    'decimal' => '.',
                    'group' => ',',
                    'list' => ';',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'E',
                    'perMille' => '‰',
                    'infinity' => '∞',
                    'nan' => '非數值'
                ),
                'symbols-numberSystem-latn' => array(
                    'decimal' => '.',
                    'group' => ',',
                    'list' => ';',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'E',
                    'perMille' => '‰',
                    'infinity' => '∞',
                    'nan' => '非數值'
                ),
                'decimalFormats-numberSystem-hanidec' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0',
                            '10000-count-other' => '0萬',
                            '100000-count-other' => '00萬',
                            '1000000-count-other' => '000萬',
                            '10000000-count-other' => '0000萬',
                            '100000000-count-other' => '0億',
                            '1000000000-count-other' => '00億',
                            '10000000000-count-other' => '000億',
                            '100000000000-count-other' => '0000億',
                            '1000000000000-count-other' => '0兆',
                            '10000000000000-count-other' => '00兆',
                            '100000000000000-count-other' => '000兆'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0K',
                            '10000-count-other' => '00K',
                            '100000-count-other' => '000K',
                            '1000000-count-other' => '0M',
                            '10000000-count-other' => '00M',
                            '100000000-count-other' => '000M',
                            '1000000000-count-other' => '0G',
                            '10000000000-count-other' => '00G',
                            '100000000000-count-other' => '000G',
                            '1000000000000-count-other' => '0T',
                            '10000000000000-count-other' => '00兆',
                            '100000000000000-count-other' => '000T'
                        )
                    )
                ),
                'decimalFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0',
                            '10000-count-other' => '0萬',
                            '100000-count-other' => '00萬',
                            '1000000-count-other' => '000萬',
                            '10000000-count-other' => '0000萬',
                            '100000000-count-other' => '0億',
                            '1000000000-count-other' => '00億',
                            '10000000000-count-other' => '000億',
                            '100000000000-count-other' => '0000億',
                            '1000000000000-count-other' => '0兆',
                            '10000000000000-count-other' => '00兆',
                            '100000000000000-count-other' => '000兆'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0K',
                            '10000-count-other' => '00K',
                            '100000-count-other' => '000K',
                            '1000000-count-other' => '0M',
                            '10000000-count-other' => '00M',
                            '100000000-count-other' => '000M',
                            '1000000000-count-other' => '0G',
                            '10000000000-count-other' => '00G',
                            '100000000000-count-other' => '000G',
                            '1000000000000-count-other' => '0T',
                            '10000000000000-count-other' => '00兆',
                            '100000000000000-count-other' => '000T'
                        )
                    )
                ),
                'scientificFormats-numberSystem-hanidec' => array(
                    'standard' => array(
                        'scientificFormat' => array(
                            'pattern' => '#E0'
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
                'percentFormats-numberSystem-hanidec' => array(
                    'standard' => array(
                        'percentFormat' => array(
                            'pattern' => '#,##0%'
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
                'currencyFormats-numberSystem-hanidec' => array(
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
                            'pattern' => '¤#,##0.00'
                        )
                    ),
                    'unitPattern-count-other' => '{0} {1}'
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
                            'pattern' => '¤#,##0.00'
                        )
                    ),
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
