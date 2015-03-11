<?php 

$data = array (
  'supplemental' => 
  array (
    'plurals-type-cardinal' => 
    array (
      'af' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ak' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'am' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ar' => 
      array (
        'pluralRule-count-zero' => 'n = 0 @integer 0 @decimal 0.0, 0.00, 0.000, 0.0000',
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-few' => 'n % 100 = 3..10 @integer 3~10, 103~110, 1003, … @decimal 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 103.0, 1003.0, …',
        'pluralRule-count-many' => 'n % 100 = 11..99 @integer 11~26, 111, 1011, … @decimal 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 17.0, 18.0, 111.0, 1011.0, …',
        'pluralRule-count-other' => ' @integer 100~102, 200~202, 300~302, 400~402, 500~502, 600, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.1, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'asa' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ast' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'az' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'be' => 
      array (
        'pluralRule-count-one' => 'n % 10 = 1 and n % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 1.0, 21.0, 31.0, 41.0, 51.0, 61.0, 71.0, 81.0, 101.0, 1001.0, …',
        'pluralRule-count-few' => 'n % 10 = 2..4 and n % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, … @decimal 2.0, 3.0, 4.0, 22.0, 23.0, 24.0, 32.0, 33.0, 102.0, 1002.0, …',
        'pluralRule-count-many' => 'n % 10 = 0 or n % 10 = 5..9 or n % 100 = 11..14 @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => '   @decimal 0.1~0.9, 1.1~1.7, 10.1, 100.1, 1000.1, …',
      ),
      'bem' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bez' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bg' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bh' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bm' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bn' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'br' => 
      array (
        'pluralRule-count-one' => 'n % 10 = 1 and n % 100 != 11,71,91 @integer 1, 21, 31, 41, 51, 61, 81, 101, 1001, … @decimal 1.0, 21.0, 31.0, 41.0, 51.0, 61.0, 81.0, 101.0, 1001.0, …',
        'pluralRule-count-two' => 'n % 10 = 2 and n % 100 != 12,72,92 @integer 2, 22, 32, 42, 52, 62, 82, 102, 1002, … @decimal 2.0, 22.0, 32.0, 42.0, 52.0, 62.0, 82.0, 102.0, 1002.0, …',
        'pluralRule-count-few' => 'n % 10 = 3..4,9 and n % 100 != 10..19,70..79,90..99 @integer 3, 4, 9, 23, 24, 29, 33, 34, 39, 43, 44, 49, 103, 1003, … @decimal 3.0, 4.0, 9.0, 23.0, 24.0, 29.0, 33.0, 34.0, 103.0, 1003.0, …',
        'pluralRule-count-many' => 'n != 0 and n % 1000000 = 0 @integer 1000000, … @decimal 1000000.0, 1000000.00, 1000000.000, …',
        'pluralRule-count-other' => ' @integer 0, 5~8, 10~20, 100, 1000, 10000, 100000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, …',
      ),
      'brx' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'bs' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 or f % 10 = 1 and f % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 or f % 10 = 2..4 and f % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, … @decimal 0.2~0.4, 1.2~1.4, 2.2~2.4, 3.2~3.4, 4.2~4.4, 5.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ca' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'cgg' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'chr' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ckb' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'cs' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-few' => 'i = 2..4 and v = 0 @integer 2~4',
        'pluralRule-count-many' => 'v != 0   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
      ),
      'cy' => 
      array (
        'pluralRule-count-zero' => 'n = 0 @integer 0 @decimal 0.0, 0.00, 0.000, 0.0000',
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-few' => 'n = 3 @integer 3 @decimal 3.0, 3.00, 3.000, 3.0000',
        'pluralRule-count-many' => 'n = 6 @integer 6 @decimal 6.0, 6.00, 6.000, 6.0000',
        'pluralRule-count-other' => ' @integer 4, 5, 7~20, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'da' => 
      array (
        'pluralRule-count-one' => 'n = 1 or t != 0 and i = 0,1 @integer 1 @decimal 0.1~1.6',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 2.0~3.4, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'de' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'dsb' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 100 = 1 or f % 100 = 1 @integer 1, 101, 201, 301, 401, 501, 601, 701, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-two' => 'v = 0 and i % 100 = 2 or f % 100 = 2 @integer 2, 102, 202, 302, 402, 502, 602, 702, 1002, … @decimal 0.2, 1.2, 2.2, 3.2, 4.2, 5.2, 6.2, 7.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-few' => 'v = 0 and i % 100 = 3..4 or f % 100 = 3..4 @integer 3, 4, 103, 104, 203, 204, 303, 304, 403, 404, 503, 504, 603, 604, 703, 704, 1003, … @decimal 0.3, 0.4, 1.3, 1.4, 2.3, 2.4, 3.3, 3.4, 4.3, 4.4, 5.3, 5.4, 6.3, 6.4, 7.3, 7.4, 10.3, 100.3, 1000.3, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'dv' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'dz' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ee' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'el' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'en' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'eo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'es' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'et' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'eu' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fa' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ff' => 
      array (
        'pluralRule-count-one' => 'i = 0,1 @integer 0, 1 @decimal 0.0~1.5',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 2.0~3.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fi' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fil' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i = 1,2,3 or v = 0 and i % 10 != 4,6,9 or v != 0 and f % 10 != 4,6,9 @integer 0~3, 5, 7, 8, 10~13, 15, 17, 18, 20, 21, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.3, 0.5, 0.7, 0.8, 1.0~1.3, 1.5, 1.7, 1.8, 2.0, 2.1, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 4, 6, 9, 14, 16, 19, 24, 26, 104, 1004, … @decimal 0.4, 0.6, 0.9, 1.4, 1.6, 1.9, 2.4, 2.6, 10.4, 100.4, 1000.4, …',
      ),
      'fo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fr' => 
      array (
        'pluralRule-count-one' => 'i = 0,1 @integer 0, 1 @decimal 0.0~1.5',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 2.0~3.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fur' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'fy' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ga' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-few' => 'n = 3..6 @integer 3~6 @decimal 3.0, 4.0, 5.0, 6.0, 3.00, 4.00, 5.00, 6.00, 3.000, 4.000, 5.000, 6.000, 3.0000, 4.0000, 5.0000, 6.0000',
        'pluralRule-count-many' => 'n = 7..10 @integer 7~10 @decimal 7.0, 8.0, 9.0, 10.0, 7.00, 8.00, 9.00, 10.00, 7.000, 8.000, 9.000, 10.000, 7.0000, 8.0000, 9.0000, 10.0000',
        'pluralRule-count-other' => ' @integer 0, 11~25, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.1, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'gd' => 
      array (
        'pluralRule-count-one' => 'n = 1,11 @integer 1, 11 @decimal 1.0, 11.0, 1.00, 11.00, 1.000, 11.000, 1.0000',
        'pluralRule-count-two' => 'n = 2,12 @integer 2, 12 @decimal 2.0, 12.0, 2.00, 12.00, 2.000, 12.000, 2.0000',
        'pluralRule-count-few' => 'n = 3..10,13..19 @integer 3~10, 13~19 @decimal 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 13.0, 14.0, 15.0, 16.0, 17.0, 18.0, 19.0, 3.00',
        'pluralRule-count-other' => ' @integer 0, 20~34, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.1, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'gl' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'gsw' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'gu' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'guw' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'gv' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 @integer 1, 11, 21, 31, 41, 51, 61, 71, 101, 1001, …',
        'pluralRule-count-two' => 'v = 0 and i % 10 = 2 @integer 2, 12, 22, 32, 42, 52, 62, 72, 102, 1002, …',
        'pluralRule-count-few' => 'v = 0 and i % 100 = 0,20,40,60,80 @integer 0, 20, 40, 60, 80, 100, 120, 140, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-many' => 'v != 0   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 3~10, 13~19, 23, 103, 1003, …',
      ),
      'ha' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'haw' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'he' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-two' => 'i = 2 and v = 0 @integer 2',
        'pluralRule-count-many' => 'v = 0 and n != 0..10 and n % 10 = 0 @integer 20, 30, 40, 50, 60, 70, 80, 90, 100, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-other' => ' @integer 0, 3~17, 101, 1001, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'hi' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'hr' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 or f % 10 = 1 and f % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 or f % 10 = 2..4 and f % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, … @decimal 0.2~0.4, 1.2~1.4, 2.2~2.4, 3.2~3.4, 4.2~4.4, 5.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'hsb' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 100 = 1 or f % 100 = 1 @integer 1, 101, 201, 301, 401, 501, 601, 701, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-two' => 'v = 0 and i % 100 = 2 or f % 100 = 2 @integer 2, 102, 202, 302, 402, 502, 602, 702, 1002, … @decimal 0.2, 1.2, 2.2, 3.2, 4.2, 5.2, 6.2, 7.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-few' => 'v = 0 and i % 100 = 3..4 or f % 100 = 3..4 @integer 3, 4, 103, 104, 203, 204, 303, 304, 403, 404, 503, 504, 603, 604, 703, 704, 1003, … @decimal 0.3, 0.4, 1.3, 1.4, 2.3, 2.4, 3.3, 3.4, 4.3, 4.4, 5.3, 5.4, 6.3, 6.4, 7.3, 7.4, 10.3, 100.3, 1000.3, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'hu' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'hy' => 
      array (
        'pluralRule-count-one' => 'i = 0,1 @integer 0, 1 @decimal 0.0~1.5',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 2.0~3.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'id' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ig' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ii' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'in' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'is' => 
      array (
        'pluralRule-count-one' => 't = 0 and i % 10 = 1 and i % 100 != 11 or t != 0 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1~1.6, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'it' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'iu' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'iw' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-two' => 'i = 2 and v = 0 @integer 2',
        'pluralRule-count-many' => 'v = 0 and n != 0..10 and n % 10 = 0 @integer 20, 30, 40, 50, 60, 70, 80, 90, 100, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-other' => ' @integer 0, 3~17, 101, 1001, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ja' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'jbo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'jgo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ji' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'jmc' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'jv' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'jw' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ka' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kab' => 
      array (
        'pluralRule-count-one' => 'i = 0,1 @integer 0, 1 @decimal 0.0~1.5',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 2.0~3.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kaj' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kcg' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kde' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kea' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kk' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kkj' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kl' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'km' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kn' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ko' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ks' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ksb' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ksh' => 
      array (
        'pluralRule-count-zero' => 'n = 0 @integer 0 @decimal 0.0, 0.00, 0.000, 0.0000',
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ku' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'kw' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ky' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lag' => 
      array (
        'pluralRule-count-zero' => 'n = 0 @integer 0 @decimal 0.0, 0.00, 0.000, 0.0000',
        'pluralRule-count-one' => 'i = 0,1 and n != 0 @integer 1 @decimal 0.1~1.6',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 2.0~3.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lb' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lg' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lkt' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ln' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lt' => 
      array (
        'pluralRule-count-one' => 'n % 10 = 1 and n % 100 != 11..19 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 1.0, 21.0, 31.0, 41.0, 51.0, 61.0, 71.0, 81.0, 101.0, 1001.0, …',
        'pluralRule-count-few' => 'n % 10 = 2..9 and n % 100 != 11..19 @integer 2~9, 22~29, 102, 1002, … @decimal 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 22.0, 102.0, 1002.0, …',
        'pluralRule-count-many' => 'f != 0   @decimal 0.1~0.9, 1.1~1.7, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-other' => ' @integer 0, 10~20, 30, 40, 50, 60, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 10.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'lv' => 
      array (
        'pluralRule-count-zero' => 'n % 10 = 0 or n % 100 = 11..19 or v = 2 and f % 100 = 11..19 @integer 0, 10~20, 30, 40, 50, 60, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 10.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-one' => 'n % 10 = 1 and n % 100 != 11 or v = 2 and f % 10 = 1 and f % 100 != 11 or v != 2 and f % 10 = 1 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.0, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-other' => ' @integer 2~9, 22~29, 102, 1002, … @decimal 0.2~0.9, 1.2~1.9, 10.2, 100.2, 1000.2, …',
      ),
      'mas' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mg' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mgo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mk' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 or f % 10 = 1 @integer 1, 11, 21, 31, 41, 51, 61, 71, 101, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-other' => ' @integer 0, 2~10, 12~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.2~1.0, 1.2~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ml' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mo' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-few' => 'v != 0 or n = 0 or n != 1 and n % 100 = 1..19 @integer 0, 2~16, 101, 1001, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 20~35, 100, 1000, 10000, 100000, 1000000, …',
      ),
      'mr' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ms' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'mt' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-few' => 'n = 0 or n % 100 = 2..10 @integer 0, 2~10, 102~107, 1002, … @decimal 0.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 10.0, 102.0, 1002.0, …',
        'pluralRule-count-many' => 'n % 100 = 11..19 @integer 11~19, 111~117, 1011, … @decimal 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 17.0, 18.0, 111.0, 1011.0, …',
        'pluralRule-count-other' => ' @integer 20~35, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.1, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'my' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nah' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'naq' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nb' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nd' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ne' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nl' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nnh' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'no' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nqo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nr' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nso' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ny' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'nyn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'om' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'or' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'os' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'pa' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'pap' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'pl' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, …',
        'pluralRule-count-many' => 'v = 0 and i != 1 and i % 10 = 0..1 or v = 0 and i % 10 = 5..9 or v = 0 and i % 100 = 12..14 @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-other' => '   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'prg' => 
      array (
        'pluralRule-count-zero' => 'n % 10 = 0 or n % 100 = 11..19 or v = 2 and f % 100 = 11..19 @integer 0, 10~20, 30, 40, 50, 60, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 10.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-one' => 'n % 10 = 1 and n % 100 != 11 or v = 2 and f % 10 = 1 and f % 100 != 11 or v != 2 and f % 10 = 1 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.0, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-other' => ' @integer 2~9, 22~29, 102, 1002, … @decimal 0.2~0.9, 1.2~1.9, 10.2, 100.2, 1000.2, …',
      ),
      'ps' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'pt' => 
      array (
        'pluralRule-count-one' => 'n = 0..2 and n != 2 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'pt-PT' => 
      array (
        'pluralRule-count-one' => 'n = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'rm' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ro' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-few' => 'v != 0 or n = 0 or n != 1 and n % 100 = 1..19 @integer 0, 2~16, 101, 1001, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 20~35, 100, 1000, 10000, 100000, 1000000, …',
      ),
      'rof' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'root' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ru' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, …',
        'pluralRule-count-many' => 'v = 0 and i % 10 = 0 or v = 0 and i % 10 = 5..9 or v = 0 and i % 100 = 11..14 @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-other' => '   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'rwk' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sah' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'saq' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'se' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'seh' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ses' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sg' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sh' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 or f % 10 = 1 and f % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 or f % 10 = 2..4 and f % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, … @decimal 0.2~0.4, 1.2~1.4, 2.2~2.4, 3.2~3.4, 4.2~4.4, 5.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'shi' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-few' => 'n = 2..10 @integer 2~10 @decimal 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 2.00, 3.00, 4.00, 5.00, 6.00, 7.00, 8.00',
        'pluralRule-count-other' => ' @integer 11~26, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~1.9, 2.1~2.7, 10.1, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'si' => 
      array (
        'pluralRule-count-one' => 'n = 0,1 or i = 0 and f = 1 @integer 0, 1 @decimal 0.0, 0.1, 1.0, 0.00, 0.01, 1.00, 0.000, 0.001, 1.000, 0.0000, 0.0001, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.2~0.9, 1.1~1.8, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sk' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-few' => 'i = 2..4 and v = 0 @integer 2~4',
        'pluralRule-count-many' => 'v != 0   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
      ),
      'sl' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 100 = 1 @integer 1, 101, 201, 301, 401, 501, 601, 701, 1001, …',
        'pluralRule-count-two' => 'v = 0 and i % 100 = 2 @integer 2, 102, 202, 302, 402, 502, 602, 702, 1002, …',
        'pluralRule-count-few' => 'v = 0 and i % 100 = 3..4 or v != 0 @integer 3, 4, 103, 104, 203, 204, 303, 304, 403, 404, 503, 504, 603, 604, 703, 704, 1003, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
      ),
      'sma' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'smi' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'smj' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'smn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sms' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-two' => 'n = 2 @integer 2 @decimal 2.0, 2.00, 2.000, 2.0000',
        'pluralRule-count-other' => ' @integer 0, 3~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'so' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sq' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sr' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 or f % 10 = 1 and f % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, … @decimal 0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 or f % 10 = 2..4 and f % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, … @decimal 0.2~0.4, 1.2~1.4, 2.2~2.4, 3.2~3.4, 4.2~4.4, 5.2, 10.2, 100.2, 1000.2, …',
        'pluralRule-count-other' => ' @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0, 0.5~1.0, 1.5~2.0, 2.5~2.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ss' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ssy' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'st' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sv' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'sw' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'syr' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ta' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'te' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'teo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'th' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ti' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'tig' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'tk' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'tl' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i = 1,2,3 or v = 0 and i % 10 != 4,6,9 or v != 0 and f % 10 != 4,6,9 @integer 0~3, 5, 7, 8, 10~13, 15, 17, 18, 20, 21, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.3, 0.5, 0.7, 0.8, 1.0~1.3, 1.5, 1.7, 1.8, 2.0, 2.1, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
        'pluralRule-count-other' => ' @integer 4, 6, 9, 14, 16, 19, 24, 26, 104, 1004, … @decimal 0.4, 0.6, 0.9, 1.4, 1.6, 1.9, 2.4, 2.6, 10.4, 100.4, 1000.4, …',
      ),
      'tn' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'to' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'tr' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ts' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'tzm' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 or n = 11..99 @integer 0, 1, 11~24 @decimal 0.0, 1.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 17.0, 18.0, 19.0, 20.0, 21.0, 22.0, 23.0, 24.0',
        'pluralRule-count-other' => ' @integer 2~10, 100~106, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ug' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'uk' => 
      array (
        'pluralRule-count-one' => 'v = 0 and i % 10 = 1 and i % 100 != 11 @integer 1, 21, 31, 41, 51, 61, 71, 81, 101, 1001, …',
        'pluralRule-count-few' => 'v = 0 and i % 10 = 2..4 and i % 100 != 12..14 @integer 2~4, 22~24, 32~34, 42~44, 52~54, 62, 102, 1002, …',
        'pluralRule-count-many' => 'v = 0 and i % 10 = 0 or v = 0 and i % 10 = 5..9 or v = 0 and i % 100 = 11..14 @integer 0, 5~19, 100, 1000, 10000, 100000, 1000000, …',
        'pluralRule-count-other' => '   @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'ur' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'uz' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      've' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'vi' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'vo' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'vun' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'wa' => 
      array (
        'pluralRule-count-one' => 'n = 0..1 @integer 0, 1 @decimal 0.0, 1.0, 0.00, 1.00, 0.000, 1.000, 0.0000, 1.0000',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 0.1~0.9, 1.1~1.7, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'wae' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'wo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'xh' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'xog' => 
      array (
        'pluralRule-count-one' => 'n = 1 @integer 1 @decimal 1.0, 1.00, 1.000, 1.0000',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~0.9, 1.1~1.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'yi' => 
      array (
        'pluralRule-count-one' => 'i = 1 and v = 0 @integer 1',
        'pluralRule-count-other' => ' @integer 0, 2~16, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'yo' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'zh' => 
      array (
        'pluralRule-count-other' => ' @integer 0~15, 100, 1000, 10000, 100000, 1000000, … @decimal 0.0~1.5, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
      'zu' => 
      array (
        'pluralRule-count-one' => 'i = 0 or n = 1 @integer 0, 1 @decimal 0.0~1.0, 0.00~0.04',
        'pluralRule-count-other' => ' @integer 2~17, 100, 1000, 10000, 100000, 1000000, … @decimal 1.1~2.6, 10.0, 100.0, 1000.0, 10000.0, 100000.0, 1000000.0, …',
      ),
    ),
  ),
);

return $data;
