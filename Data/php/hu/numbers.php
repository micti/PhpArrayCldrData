<?php
$data = array(
    'main' => array(
        'hu' => array(
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
                            '1000-count-other' => '0 ezer',
                            '10000-count-other' => '00 ezer',
                            '100000-count-other' => '000 ezer',
                            '1000000-count-other' => '0 millió',
                            '10000000-count-other' => '00 millió',
                            '100000000-count-other' => '000 millió',
                            '1000000000-count-other' => '0 milliárd',
                            '10000000000-count-other' => '00 milliárd',
                            '100000000000-count-other' => '000 milliárd',
                            '1000000000000-count-other' => '0 billió',
                            '10000000000000-count-other' => '00 billió',
                            '100000000000000-count-other' => '000 billió'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0 E',
                            '10000-count-other' => '00 E',
                            '100000-count-other' => '000 E',
                            '1000000-count-other' => '0 M',
                            '10000000-count-other' => '00 M',
                            '100000000-count-other' => '000 M',
                            '1000000000-count-other' => '0 Mrd',
                            '10000000000-count-other' => '00 Mrd',
                            '100000000000-count-other' => '000 Mrd',
                            '1000000000000-count-other' => '0 B',
                            '10000000000000-count-other' => '00 B',
                            '100000000000000-count-other' => '000 B'
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
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
