<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 09.05.18
     * Time: 21:27
     */




$pat='/([0-3][0-9]\.[01][0-2]\.\d{4})|([A-Z]{2}\d{6})|(\d{12})/m';
$search = 'Some text with birth date 08.02.1981 passport No.CH123456 and ID No 123456789012...' . PHP_EOL .
    'Another one text CA654879 string';
preg_match_all($pat, $search, $m, PREG_PATTERN_ORDER);

echo '<em>' . $pat . '</em><br>';
echo '<strong>' . $search . '</strong><br>';
echo '<pre>' . var_export($m, 1) . '</pre>';