<?php

require_once '../vendor/autoload.php';

$hello = new \App\Wcs\Hello();
echo $hello->talk();
echo "<br>";
$helloAgain = new \HelloWorld\SayHello();
echo $helloAgain->world();