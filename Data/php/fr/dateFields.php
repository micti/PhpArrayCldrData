<?php
$data = array(
    'main' => array(
        'fr' => array(
            'dates' => array(
                'fields' => array(
                    'era' => array(
                        'displayName' => 'ère'
                    ),
                    'year' => array(
                        'displayName' => 'année',
                        -1 => 'l’année dernière',
                        0 => 'cette année',
                        1 => 'l’année prochaine'
                    ),
                    'month' => array(
                        'displayName' => 'mois',
                        -1 => 'le mois dernier',
                        0 => 'ce mois-ci',
                        1 => 'le mois prochain'
                    ),
                    'week' => array(
                        'displayName' => 'semaine',
                        -1 => 'la semaine dernière',
                        0 => 'cette semaine',
                        1 => 'la semaine prochaine'
                    ),
                    'day' => array(
                        'displayName' => 'jour',
                        -2 => 'avant-hier',
                        -1 => 'hier',
                        0 => 'aujourd’hui',
                        1 => 'demain',
                        2 => 'après-demain'
                    ),
                    'weekday' => array(
                        'displayName' => 'jour de la semaine'
                    ),
                    'dayperiod' => array(
                        'displayName' => 'cadran'
                    ),
                    'hour' => array(
                        'displayName' => 'heure'
                    ),
                    'minute' => array(
                        'displayName' => 'minute'
                    ),
                    'second' => array(
                        'displayName' => 'seconde'
                    ),
                    'zone' => array(
                        'displayName' => 'fuseau horaire'
                    )
                )
            )
        )
    )
);

return $data;
