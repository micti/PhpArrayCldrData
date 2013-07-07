<?php
$data = array(
    'main' => array(
        'ca' => array(
            'dates' => array(
                'fields' => array(
                    'era' => array(
                        'displayName' => 'era'
                    ),
                    'year' => array(
                        'displayName' => 'any',
                        -1 => 'Últim any',
                        0 => 'Aquest any',
                        1 => 'Any següent'
                    ),
                    'month' => array(
                        'displayName' => 'mes',
                        -1 => 'Últim mes',
                        0 => 'Aquest mes',
                        1 => 'Mes següent'
                    ),
                    'week' => array(
                        'displayName' => 'setmana',
                        -1 => 'Última setmana',
                        0 => 'Aquesta setmana',
                        1 => 'Setmana següent'
                    ),
                    'day' => array(
                        'displayName' => 'dia',
                        -2 => 'abans d\'ahir',
                        -1 => 'ahir',
                        0 => 'avui',
                        1 => 'demà',
                        2 => 'demà passat'
                    ),
                    'weekday' => array(
                        'displayName' => 'dia de la setmana'
                    ),
                    'dayperiod' => array(
                        'displayName' => 'a.m./p.m.'
                    ),
                    'hour' => array(
                        'displayName' => 'hora'
                    ),
                    'minute' => array(
                        'displayName' => 'minut'
                    ),
                    'second' => array(
                        'displayName' => 'segon'
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
