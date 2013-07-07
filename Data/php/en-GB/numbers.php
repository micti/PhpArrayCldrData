<?php
$data = array(
    'main' => array(
        'en-GB' => array(
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
                            '1000-count-one' => '0 thousand',
                            '1000-count-other' => '0 thousand',
                            '10000-count-one' => '00 thousand',
                            '10000-count-other' => '00 thousand',
                            '100000-count-one' => '000 thousand',
                            '100000-count-other' => '000 thousand',
                            '1000000-count-one' => '0 million',
                            '1000000-count-other' => '0 million',
                            '10000000-count-one' => '00 million',
                            '10000000-count-other' => '00 million',
                            '100000000-count-one' => '000 million',
                            '100000000-count-other' => '000 million',
                            '1000000000-count-one' => '0 billion',
                            '1000000000-count-other' => '0 billion',
                            '10000000000-count-one' => '00 billion',
                            '10000000000-count-other' => '00 billion',
                            '100000000000-count-one' => '000 billion',
                            '100000000000-count-other' => '000 billion',
                            '1000000000000-count-one' => '0 trillion',
                            '1000000000000-count-other' => '0 trillion',
                            '10000000000000-count-one' => '00 trillion',
                            '10000000000000-count-other' => '00 trillion',
                            '100000000000000-count-one' => '000 trillion',
                            '100000000000000-count-other' => '000 trillion'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0K',
                            '1000-count-other' => '0K',
                            '10000-count-one' => '00K',
                            '10000-count-other' => '00K',
                            '100000-count-one' => '000K',
                            '100000-count-other' => '000K',
                            '1000000-count-one' => '0M',
                            '1000000-count-other' => '0M',
                            '10000000-count-one' => '00M',
                            '10000000-count-other' => '00M',
                            '100000000-count-one' => '000M',
                            '100000000-count-other' => '000M',
                            '1000000000-count-one' => '0B',
                            '1000000000-count-other' => '0B',
                            '10000000000-count-one' => '00B',
                            '10000000000-count-other' => '00B',
                            '100000000000-count-one' => '000B',
                            '100000000000-count-other' => '000B',
                            '1000000000000-count-one' => '0T',
                            '1000000000000-count-other' => '0T',
                            '10000000000000-count-one' => '00T',
                            '10000000000000-count-other' => '00T',
                            '100000000000000-count-one' => '000T',
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
                            'pattern' => '¤#,##0.00'
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