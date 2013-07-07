<?php
$data = array(
    'main' => array(
        'ja' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'latn',
                    'traditional' => 'jpan',
                    'finance' => 'jpanfin'
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
                'decimalFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0千',
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
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
                            '1000-count-other' => '0千',
                            '10000-count-other' => '0万',
                            '100000-count-other' => '00万',
                            '1000000-count-other' => '000万',
                            '10000000-count-other' => '0000万',
                            '100000000-count-other' => '0億',
                            '1000000000-count-other' => '00億',
                            '10000000000-count-other' => '000億',
                            '100000000000-count-other' => '0000億',
                            '1000000000000-count-other' => '0兆',
                            '10000000000000-count-other' => '00兆',
                            '100000000000000-count-other' => '000兆'
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
