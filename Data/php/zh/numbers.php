<?php
$data = array(
    'main' => array(
        'zh' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'hanidec',
                    'traditional' => 'hans',
                    'finance' => 'hansfin'
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
                    'nan' => 'NaN'
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
                    'nan' => 'NaN'
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
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
                            '100000000-count-other' => '0亿',
                            '1000000000-count-other' => '00亿',
                            '10000000000-count-other' => '000亿',
                            '100000000000-count-other' => '0000亿',
                            '1000000000000-count-other' => '0万亿',
                            '10000000000000-count-other' => '00万亿',
                            '100000000000000-count-other' => '000万亿'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0',
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
                            '100000000-count-other' => '0亿',
                            '1000000000-count-other' => '00亿',
                            '10000000000-count-other' => '000亿',
                            '100000000000-count-other' => '0000亿',
                            '1000000000000-count-other' => '0万亿',
                            '10000000000000-count-other' => '00万亿',
                            '100000000000000-count-other' => '000万亿'
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
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
                            '100000000-count-other' => '0亿',
                            '1000000000-count-other' => '00亿',
                            '10000000000-count-other' => '000亿',
                            '100000000000-count-other' => '0000亿',
                            '1000000000000-count-other' => '0万亿',
                            '10000000000000-count-other' => '00万亿',
                            '100000000000000-count-other' => '000万亿'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0',
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
                            '100000000-count-other' => '0亿',
                            '1000000000-count-other' => '00亿',
                            '10000000000-count-other' => '000亿',
                            '100000000000-count-other' => '0000亿',
                            '1000000000000-count-other' => '0万亿',
                            '10000000000000-count-other' => '00万亿',
                            '100000000000000-count-other' => '000万亿'
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
                            'pattern' => '¤#,##0.00;(¤#,##0.00)'
                        )
                    ),
                    'unitPattern-count-other' => '{0}{1}'
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
                            'pattern' => '¤#,##0.00;(¤#,##0.00)'
                        )
                    ),
                    'unitPattern-count-other' => '{0}{1}'
                )
            )
        )
    )
);

return $data;
