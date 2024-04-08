<?php
$people = [
    ['Taro','25','men'],
    ['Jiro','20','men'],
    ['Saburo','16','womem'],
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ' )' . '<br />';
}