<?php
$data = array(
    'main' => array(
        'pt' => array(
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
                            '1000-count-one' => '0 mil',
                            '1000-count-other' => '0 mil',
                            '10000-count-one' => '00 mil',
                            '10000-count-other' => '00 mil',
                            '100000-count-one' => '000 mil',
                            '100000-count-other' => '000 mil',
                            '1000000-count-one' => '0 milhão',
                            '1000000-count-other' => '0 milhões',
                            '10000000-count-one' => '00 milhão',
                            '10000000-count-other' => '00 milhões',
                            '100000000-count-one' => '000 milhão',
                            '100000000-count-other' => '000 milhões',
                            '1000000000-count-one' => '0 bilhão',
                            '1000000000-count-other' => '0 bilhões',
                            '10000000000-count-one' => '00 bilhão',
                            '10000000000-count-other' => '00 bilhões',
                            '100000000000-count-one' => '000 bilhão',
                            '100000000000-count-other' => '000 bilhões',
                            '1000000000000-count-one' => '0 trilhão',
                            '1000000000000-count-other' => '0 trilhões',
                            '10000000000000-count-one' => '00 trilhão',
                            '10000000000000-count-other' => '00 trilhões',
                            '100000000000000-count-one' => '000 trilhão',
                            '100000000000000-count-other' => '000 trilhões'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 mil',
                            '1000-count-other' => '0 mil',
                            '10000-count-one' => '00 mil',
                            '10000-count-other' => '00 mil',
                            '100000-count-one' => '000 mil',
                            '100000-count-other' => '000 mil',
                            '1000000-count-one' => '0 mi',
                            '1000000-count-other' => '0 mi',
                            '10000000-count-one' => '00 mi',
                            '10000000-count-other' => '00 mi',
                            '100000000-count-one' => '000 mi',
                            '100000000-count-other' => '000 mi',
                            '1000000000-count-one' => '0 bi',
                            '1000000000-count-other' => '0 bi',
                            '10000000000-count-one' => '00 bi',
                            '10000000000-count-other' => '00 bi',
                            '100000000000-count-one' => '000 bi',
                            '100000000000-count-other' => '000 bi',
                            '1000000000000-count-one' => '0 tri',
                            '1000000000000-count-other' => '0 tri',
                            '10000000000000-count-one' => '00 tri',
                            '10000000000000-count-other' => '00 tri',
                            '100000000000000-count-one' => '000 tri',
                            '100000000000000-count-other' => '000 tri'
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
                            'pattern' => '¤#,##0.00;(¤#,##0.00)'
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
