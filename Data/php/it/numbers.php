<?php
$data = array(
    'main' => array(
        'it' => array(
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
                            '1000-count-one' => '0 migliaio',
                            '1000-count-other' => '0 migliaia',
                            '10000-count-one' => '00 migliaia',
                            '10000-count-other' => '00 migliaia',
                            '100000-count-one' => '000 migliaia',
                            '100000-count-other' => '000 migliaia',
                            '1000000-count-one' => '0 milione',
                            '1000000-count-other' => '0 milioni',
                            '10000000-count-one' => '00 milioni',
                            '10000000-count-other' => '00 milioni',
                            '100000000-count-one' => '000 milioni',
                            '100000000-count-other' => '000 milioni',
                            '1000000000-count-one' => '0 miliardi',
                            '1000000000-count-other' => '0 miliardi',
                            '10000000000-count-one' => '00 miliardi',
                            '10000000000-count-other' => '00 miliardi',
                            '100000000000-count-one' => '000 miliardi',
                            '100000000000-count-other' => '000 miliardi',
                            '1000000000000-count-one' => '0 bilione',
                            '1000000000000-count-other' => '0 bilioni',
                            '10000000000000-count-one' => '00 bilioni',
                            '10000000000000-count-other' => '00 bilioni',
                            '100000000000000-count-one' => '000 bilioni',
                            '100000000000000-count-other' => '000 bilioni'
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
                            '1000000-count-one' => '0 Mln',
                            '1000000-count-other' => '0 Mln',
                            '10000000-count-one' => '00 Mln',
                            '10000000-count-other' => '00 Mln',
                            '100000000-count-one' => '000 Mln',
                            '100000000-count-other' => '000 Mln',
                            '1000000000-count-one' => '0 Mld',
                            '1000000000-count-other' => '0 Mld',
                            '10000000000-count-one' => '00 Mld',
                            '10000000000-count-other' => '00 Mld',
                            '100000000000-count-one' => '000 Mld',
                            '100000000000-count-other' => '000 Mld',
                            '1000000000000-count-one' => '0 Bln',
                            '1000000000000-count-other' => '0 Bln',
                            '10000000000000-count-one' => '00 Bln',
                            '10000000000000-count-other' => '00 Bln',
                            '100000000000000-count-one' => '000 Bln',
                            '100000000000000-count-other' => '000 Bln'
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
                    'unitPattern-count-one' => '{0} {1}',
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
