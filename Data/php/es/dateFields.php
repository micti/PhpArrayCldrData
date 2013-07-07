<?php
$data = array(
    'main' => array(
        'es' => array(
            'dates' => array(
                'fields' => array(
                    'era' => array(
                        'displayName' => 'era'
                    ),
                    'year' => array(
                        'displayName' => 'año',
                        -1 => 'el año pasado',
                        0 => 'este año',
                        1 => 'el próximo año'
                    ),
                    'month' => array(
                        'displayName' => 'mes',
                        -1 => 'el mes pasado',
                        0 => 'este mes',
                        1 => 'el próximo mes'
                    ),
                    'week' => array(
                        'displayName' => 'semana',
                        -1 => 'la semana pasada',
                        0 => 'esta semana',
                        1 => 'la próxima semana'
                    ),
                    'day' => array(
                        'displayName' => 'día',
                        -2 => 'antes de ayer',
                        -1 => 'ayer',
                        0 => 'hoy',
                        1 => 'mañana',
                        2 => 'pasado mañana'
                    ),
                    'weekday' => array(
                        'displayName' => 'día de la semana'
                    ),
                    'dayperiod' => array(
                        'displayName' => 'periodo del día'
                    ),
                    'hour' => array(
                        'displayName' => 'hora'
                    ),
                    'minute' => array(
                        'displayName' => 'minuto'
                    ),
                    'second' => array(
                        'displayName' => 'segundo'
                    ),
                    'zone' => array(
                        'displayName' => 'zona'
                    )
                )
            )
        )
    )
);

return $data;
