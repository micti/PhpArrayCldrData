<?php
$data = array(
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
                    '1000-count-other' => '0',
                    '10000-count-other' => '0만',
                    '100000-count-other' => '00만',
                    '1000000-count-other' => '000만',
                    '10000000-count-other' => '0000만',
                    '100000000-count-other' => '0억',
                    '1000000000-count-other' => '00억',
                    '10000000000-count-other' => '000억',
                    '100000000000-count-other' => '0000억',
                    '1000000000000-count-other' => '0조',
                    '10000000000000-count-other' => '00조',
                    '100000000000000-count-other' => '000조'
                )
            ),
            'short' => array(
                'decimalFormat' => array(
                    '1000-count-other' => '0',
                    '10000-count-other' => '0만',
                    '100000-count-other' => '00만',
                    '1000000-count-other' => '000만',
                    '10000000-count-other' => '0000만',
                    '100000000-count-other' => '0억',
                    '1000000000-count-other' => '00억',
                    '10000000000-count-other' => '000억',
                    '100000000000-count-other' => '0000억',
                    '1000000000000-count-other' => '0조',
                    '10000000000000-count-other' => '00조',
                    '100000000000000-count-other' => '000조'
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
            'unitPattern-count-other' => '{0} {1}'
        )
    )
);

return $data;
