<?php
$data = array(
    'main' => array(
        'el' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'latn',
                    'traditional' => 'grek'
                ),
                'symbols-numberSystem-latn' => array(
                    'decimal' => ',',
                    'group' => '.',
                    'list' => ',',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'e',
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
                            '1000-count-one' => '0 χιλιάδα',
                            '1000-count-other' => '0 χιλιάδες',
                            '10000-count-one' => '00 χιλιάδες',
                            '10000-count-other' => '00 χιλιάδες',
                            '100000-count-one' => '000 χιλιάδες',
                            '100000-count-other' => '000 χιλιάδες',
                            '1000000-count-one' => '0 εκατομμύριο',
                            '1000000-count-other' => '0 εκατομμύρια',
                            '10000000-count-one' => '00 εκατομμύρια',
                            '10000000-count-other' => '00 εκατομμύρια',
                            '100000000-count-one' => '000 εκατομμύρια',
                            '100000000-count-other' => '000 εκατομμύρια',
                            '1000000000-count-one' => '0 δισεκατομμύριο',
                            '1000000000-count-other' => '0 δισεκατομμύρια',
                            '10000000000-count-one' => '00 δισεκατομμύρια',
                            '10000000000-count-other' => '00 δισεκατομμύρια',
                            '100000000000-count-one' => '000 δισεκατομμύρια',
                            '100000000000-count-other' => '000 δισεκατομμύρια',
                            '1000000000000-count-one' => '0 τρισεκατομμύριο',
                            '1000000000000-count-other' => '0 τρισεκατομμύρια',
                            '10000000000000-count-one' => '00 τρισεκατομμύρια',
                            '10000000000000-count-other' => '00 τρισεκατομμύρια',
                            '100000000000000-count-one' => '000 τρισεκατομμύρια',
                            '100000000000000-count-other' => '000 τρισεκατομμύρια'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-one' => '0 χιλ\'.\'',
                            '1000-count-other' => '0 χιλ\'.\'',
                            '10000-count-one' => '00 χιλ\'.\'',
                            '10000-count-other' => '00 χιλ\'.\'',
                            '100000-count-one' => '000 χιλ\'.\'',
                            '100000-count-other' => '000 χιλ\'.\'',
                            '1000000-count-one' => '0 εκ\'.\'',
                            '1000000-count-other' => '0 εκ\'.\'',
                            '10000000-count-one' => '00 εκ\'.\'',
                            '10000000-count-other' => '00 εκ\'.\'',
                            '100000000-count-one' => '000 εκ\'.\'',
                            '100000000-count-other' => '000 εκ\'.\'',
                            '1000000000-count-one' => '0 δις',
                            '1000000000-count-other' => '0 δις',
                            '10000000000-count-one' => '00 δις',
                            '10000000000-count-other' => '00 δις',
                            '100000000000-count-one' => '000 δις',
                            '100000000000-count-other' => '000 δις',
                            '1000000000000-count-one' => '0 τρις',
                            '1000000000000-count-other' => '0 τρις',
                            '10000000000000-count-one' => '00 τρις',
                            '10000000000000-count-other' => '00 τρις',
                            '100000000000000-count-one' => '000 τρις',
                            '100000000000000-count-other' => '000 τρις'
                        )
                    )
                ),
                'scientificFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'scientificFormat' => array(
                            'pattern' => '[#E0]'
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
