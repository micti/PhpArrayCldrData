<?php
$data = array(
    'dates' => array(
        'fields' => array(
            'era' => array(
                'displayName' => '연호'
            ),
            'year' => array(
                'displayName' => '년',
                -1 => '지난해',
                0 => '올해',
                1 => '내년'
            ),
            'month' => array(
                'displayName' => '월',
                -1 => '지난달',
                0 => '이번 달',
                1 => '다음 달'
            ),
            'week' => array(
                'displayName' => '주',
                -1 => '지난주',
                0 => '이번 주',
                1 => '다음 주'
            ),
            'day' => array(
                'displayName' => '일',
                -2 => '그저께',
                -1 => '어제',
                0 => '오늘',
                1 => '내일',
                2 => '모레'
            ),
            'weekday' => array(
                'displayName' => '요일'
            ),
            'dayperiod' => array(
                'displayName' => '오전/오후'
            ),
            'hour' => array(
                'displayName' => '시'
            ),
            'minute' => array(
                'displayName' => '분'
            ),
            'second' => array(
                'displayName' => '초'
            ),
            'zone' => array(
                'displayName' => '시간대'
            )
        )
    )
);

return $data;
