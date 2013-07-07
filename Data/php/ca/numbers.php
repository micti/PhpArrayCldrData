<?php
$data = array(
    'main' => array(
        'ca' => array(
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
                            '1000000-count-one' => '0 milió',
                            '1000000-count-other' => '0 milions',
                            '10000000-count-one' => '00 milió',
                            '10000000-count-other' => '00 milions',
                            '100000000-count-one' => '000 milió',
                            '100000000-count-other' => '000 milions',
                            '1000000000-count-one' => '0 miliard',
                            '1000000000-count-other' => '0 miliards',
                            '10000000000-count-one' => '00 miliards',
                            '10000000000-count-other' => '00 miliards',
                            '100000000000-count-one' => '000 miliard',
                            '100000000000-count-other' => '000 miliards',
                            '1000000000000-count-one' => '0 bilions',
                            '1000000000000-count-other' => '0 bilions',
                            '10000000000000-count-one' => '00 bilions',
                            '10000000000000-count-other' => '00 bilions',
                            '100000000000000-count-one' => '000 bilions',
                            '100000000000000-count-other' => '000 bilions'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 K',
                            '1000-count-other' => '0 K',
                            '10000-count-one' => '00 K',
                            '10000-count-other' => '00 K',
                            '100000-count-one' => '000 K',
                            '100000-count-other' => '000 K',
                            '1000000-count-one' => '0 M',
                            '1000000-count-other' => '0 M',
                            '10000000-count-one' => '00 M',
                            '10000000-count-other' => '00 M',
                            '100000000-count-one' => '000 M',
                            '100000000-count-other' => '000 M',
                            '1000000000-count-one' => '0000 M',
                            '1000000000-count-other' => '0000 M',
                            '10000000000-count-one' => '00k M',
                            '10000000000-count-other' => '00k M',
                            '100000000000-count-one' => '000k M',
                            '100000000000-count-other' => '000k M',
                            '1000000000000-count-one' => '0 B',
                            '1000000000000-count-other' => '0 B',
                            '10000000000000-count-one' => '00 B',
                            '10000000000000-count-other' => '00 B',
                            '100000000000000-count-one' => '000 B',
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
