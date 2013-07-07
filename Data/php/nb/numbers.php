<?php
$data = array(
    'main' => array(
        'nb' => array(
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
                            '1000-count-one' => '0 tusen',
                            '1000-count-other' => '0 tusen',
                            '10000-count-one' => '00 tusen',
                            '10000-count-other' => '00 tusen',
                            '100000-count-one' => '000 tusen',
                            '100000-count-other' => '000 tusen',
                            '1000000-count-one' => '0 million',
                            '1000000-count-other' => '0 millioner',
                            '10000000-count-one' => '00 million',
                            '10000000-count-other' => '00 millioner',
                            '100000000-count-one' => '000 million',
                            '100000000-count-other' => '000 millioner',
                            '1000000000-count-one' => '0 milliard',
                            '1000000000-count-other' => '0 milliarder',
                            '10000000000-count-one' => '00 milliard',
                            '10000000000-count-other' => '00 milliarder',
                            '100000000000-count-one' => '000 milliard',
                            '100000000000-count-other' => '000 milliarder',
                            '1000000000000-count-one' => '0 billion',
                            '1000000000000-count-other' => '0 billioner',
                            '10000000000000-count-one' => '00 billion',
                            '10000000000000-count-other' => '00 billioner',
                            '100000000000000-count-one' => '000 billion',
                            '100000000000000-count-other' => '000 billioner'
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
                            '1000000-count-one' => '0 mill',
                            '1000000-count-other' => '0 mill',
                            '10000000-count-one' => '00 mill',
                            '10000000-count-other' => '00 mill',
                            '100000000-count-one' => '000 mill',
                            '100000000-count-other' => '000 mill',
                            '1000000000-count-one' => '0 mrd',
                            '1000000000-count-other' => '0 mrd',
                            '10000000000-count-one' => '00 mrd',
                            '10000000000-count-other' => '00 mrd',
                            '100000000000-count-one' => '000 mrd',
                            '100000000000-count-other' => '000 mrd',
                            '1000000000000-count-one' => '0 bill',
                            '1000000000000-count-other' => '0 bill',
                            '10000000000000-count-one' => '00 bill',
                            '10000000000000-count-other' => '00 bill',
                            '100000000000000-count-one' => '000 bill',
                            '100000000000000-count-other' => '000 bill'
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
                            'pattern' => '¤ #,##0.00'
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
