<?php
$data = array(
    'main' => array(
        'fi' => array(
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
                    'nan' => 'epäluku'
                ),
                'decimalFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 tuhat',
                            '1000-count-other' => '0 tuhatta',
                            '10000-count-one' => '00 tuhatta',
                            '10000-count-other' => '00 tuhatta',
                            '100000-count-one' => '000 tuhatta',
                            '100000-count-other' => '000 tuhatta',
                            '1000000-count-one' => '0 miljoona',
                            '1000000-count-other' => '0 miljoonaa',
                            '10000000-count-one' => '00 miljoonaa',
                            '10000000-count-other' => '00 miljoonaa',
                            '100000000-count-one' => '000 miljoonaa',
                            '100000000-count-other' => '000 miljoonaa',
                            '1000000000-count-one' => '0 miljardi',
                            '1000000000-count-other' => '0 miljardia',
                            '10000000000-count-one' => '00 miljardia',
                            '10000000000-count-other' => '00 miljardia',
                            '100000000000-count-one' => '000 miljardia',
                            '100000000000-count-other' => '000 miljardia',
                            '1000000000000-count-one' => '0 biljoona',
                            '1000000000000-count-other' => '0 biljoonaa',
                            '10000000000000-count-one' => '00 biljoonaa',
                            '10000000000000-count-other' => '00 biljoonaa',
                            '100000000000000-count-one' => '000 biljoonaa',
                            '100000000000000-count-other' => '000 biljoonaa'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 t\'.\'',
                            '1000-count-other' => '0 t\'.\'',
                            '10000-count-one' => '00 t\'.\'',
                            '10000-count-other' => '00 t\'.\'',
                            '100000-count-one' => '000 t\'.\'',
                            '100000-count-other' => '000 t\'.\'',
                            '1000000-count-one' => '0 milj\'.\'',
                            '1000000-count-other' => '0 milj\'.\'',
                            '10000000-count-one' => '00 milj\'.\'',
                            '10000000-count-other' => '00 milj\'.\'',
                            '100000000-count-one' => '000 milj\'.\'',
                            '100000000-count-other' => '000 milj\'.\'',
                            '1000000000-count-one' => '0 mrd\'.\'',
                            '1000000000-count-other' => '0 mrd\'.\'',
                            '10000000000-count-one' => '00 mrd\'.\'',
                            '10000000000-count-other' => '00 mrd\'.\'',
                            '100000000000-count-one' => '000 mrd\'.\'',
                            '100000000000-count-other' => '000 mrd\'.\'',
                            '1000000000000-count-one' => '0 bilj\'.\'',
                            '1000000000000-count-other' => '0 bilj\'.\'',
                            '10000000000000-count-one' => '00 bilj\'.\'',
                            '10000000000000-count-other' => '00 bilj\'.\'',
                            '100000000000000-count-one' => '000 bilj\'.\'',
                            '100000000000000-count-other' => '000 bilj\'.\''
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
