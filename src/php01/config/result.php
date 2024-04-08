<?php
$name . $set . $number = htmlspecialchars($_POST['name'],ENT_QUOTES);
print "私の名前は" . $name . '<br>' .
"ご希望の商品は、" . $set . '<br>' .
"ご注文数は、" . $number;