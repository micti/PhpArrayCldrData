<?php
$data = array(
    'main' => array(
        'pt-PT' => array(
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
                            '1000-count-one' => '0 mil',
                            '1000-count-other' => '0 mil',
                            '10000-count-one' => '00 mil',
                            '10000-count-other' => '00 mil',
                            '100000-count-one' => '000 mil',
                            '100000-count-other' => '000 mil',
                            '1000000-count-one' => '0 milhão',
                            '1000000-count-other' => '0 milhões',
                            '10000000-count-one' => '00 milhões',
                            '10000000-count-other' => '00 milhões',
                            '100000000-count-one' => '000 milhões',
                            '100000000-count-other' => '000 milhões',
                            '1000000000-count-one' => '0 mil milhões',
                            '1000000000-count-other' => '0 mil milhões',
                            '10000000000-count-one' => '00 mil milhões',
                            '10000000000-count-other' => '00 mil milhões',
                            '100000000000-count-one' => '000 mil milhões',
                            '100000000000-count-other' => '000 mil milhões',
                            '1000000000000-count-one' => '0 biliões',
                            '1000000000000-count-other' => '0 biliões',
                            '10000000000000-count-one' => '00 biliões',
                            '10000000000000-count-other' => '00 biliões',
                            '100000000000000-count-one' => '000 biliões',
                            '100000000000000-count-other' => '000 biliões'
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
                            '1000000-count-one' => '0 M',
                            '1000000-count-other' => '0 M',
                            '10000000-count-one' => '00 M',
                            '10000000-count-other' => '00 M',
                            '100000000-count-one' => '000 M',
                            '100000000-count-other' => '000 M',
                            '1000000000-count-one' => '0 MM',
                            '1000000000-count-other' => '0 MM',
                            '10000000000-count-one' => '00 MM',
                            '10000000000-count-other' => '00 MM',
                            '100000000000-count-one' => '000 MM',
                            '100000000000-count-other' => '000 MM',
                            '1000000000000-count-one' => '0 Bi',
                            '1000000000000-count-other' => '0 Bi',
                            '10000000000000-count-one' => '00 Bi',
                            '10000000000000-count-other' => '00 Bi',
                            '100000000000000-count-one' => '000 Bi',
                            '100000000000000-count-other' => '000 Bi'
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
                    'unitPattern-count-one' => '{0} {1}',
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;
