<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "私の名前は、" . $name . "<br>";

$item = htmlspecialchars($_POST["item"],ENT_QUOTES);
print "注文商品は、" . $item . "<br>";

$number = htmlspecialchars($_POST["number"],ENT_QUOTES);
print "注文数は、" . $number;