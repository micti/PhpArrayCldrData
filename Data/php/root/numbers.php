<?php
$data = array(
    'main' => array(
        'root' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'latn'
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
                            '10000000000000-count-other' => '00T',
                            '100000000000000-count-other' => '000T'
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
                            '10000000000000-count-other' => '00T',
                            '100000000000000-count-other' => '000T'
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
                            'pattern' => '¤ #,##0.00'
                        )
                    ),
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
