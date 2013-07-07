<?php
$data = array(
    'dates' => array(
        'fields' => array(
            'era' => array(
                'displayName' => 'Thời đại'
            ),
            'year' => array(
                'displayName' => 'Năm',
                -1 => 'Năm ngoái',
                0 => 'Năm nay',
                1 => 'Năm sau'
            ),
            'month' => array(
                'displayName' => 'Tháng',
                -1 => 'Tháng trước',
                0 => 'Tháng này',
                1 => 'Tháng sau'
            ),
            'week' => array(
                'displayName' => 'Tuần',
                -1 => 'Tuần trước',
                0 => 'Tuần này',
                1 => 'Tuần sau'
            ),
            'day' => array(
                'displayName' => 'Ngày',
                -2 => 'Ngày hôm kia',
                -1 => 'Ngày hôm qua',
                0 => 'Hôm nay',
                1 => 'Ngày mai',
                2 => 'Ngày kia'
            ),
            'weekday' => array(
                'displayName' => 'Ngày trong tuần'
            ),
            'dayperiod' => array(
                'displayName' => 'SA/CH'
            ),
            'hour' => array(
                'displayName' => 'Giờ'
            ),
            'minute' => array(
                'displayName' => 'Phút'
            ),
            'second' => array(
                'displayName' => 'Giây'
            ),
            'zone' => array(
                'displayName' => 'Múi giờ'
            )
        )
    )
);

return $data;
