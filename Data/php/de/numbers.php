<?php
$data = array(
    'main' => array(
        'de' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'latn'
                ),
                'symbols-numberSystem-latn' => array(
                    'decimal' => ',',
                    'group' => '.',
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
                            '1000-count-one' => '0 Tausend',
                            '1000-count-other' => '0 Tausend',
                            '10000-count-one' => '00 Tausend',
                            '10000-count-other' => '00 Tausend',
                            '100000-count-one' => '000 Tausend',
                            '100000-count-other' => '000 Tausend',
                            '1000000-count-one' => '0 Million',
                            '1000000-count-other' => '0 Millionen',
                            '10000000-count-one' => '00 Millionen',
                            '10000000-count-other' => '00 Millionen',
                            '100000000-count-one' => '000 Millionen',
                            '100000000-count-other' => '000 Millionen',
                            '1000000000-count-one' => '0 Milliarde',
                            '1000000000-count-other' => '0 Milliarden',
                            '10000000000-count-one' => '00 Milliarden',
                            '10000000000-count-other' => '00 Milliarden',
                            '100000000000-count-one' => '000 Milliarden',
                            '100000000000-count-other' => '000 Milliarden',
                            '1000000000000-count-one' => '0 Billion',
                            '1000000000000-count-other' => '0 Billionen',
                            '10000000000000-count-one' => '00 Billionen',
                            '10000000000000-count-other' => '00 Billionen',
                            '100000000000000-count-one' => '000 Billionen',
                            '100000000000000-count-other' => '000 Billionen'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0',
                            '1000-count-other' => '0',
                            '10000-count-one' => '0',
                            '10000-count-other' => '0',
                            '100000-count-one' => '0',
                            '100000-count-other' => '0',
                            '1000000-count-one' => '0 Mio',
                            '1000000-count-other' => '0 Mio',
                            '10000000-count-one' => '00 Mio',
                            '10000000-count-other' => '00 Mio',
                            '100000000-count-one' => '000 Mio',
                            '100000000-count-other' => '000 Mio',
                            '1000000000-count-one' => '0 Mrd',
                            '1000000000-count-other' => '0 Mrd',
                            '10000000000-count-one' => '00 Mrd',
                            '10000000000-count-other' => '00 Mrd',
                            '100000000000-count-one' => '000 Mrd',
                            '100000000000-count-other' => '000 Mrd',
                            '1000000000000-count-one' => '0 Bio',
                            '1000000000000-count-other' => '0 Bio',
                            '10000000000000-count-one' => '00 Bio',
                            '10000000000000-count-other' => '00 Bio',
                            '100000000000000-count-one' => '000 Bio',
                            '100000000000000-count-other' => '000 Bio'
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
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
