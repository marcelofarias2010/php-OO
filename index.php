<?php

//require __DIR__."/source/loading/Carro.php";
//require __DIR__."/source/loading/Fiat.php";
//require __DIR__."/source/loading/Ford.php";

require __DIR__."/source/autoload.php";

$car = new Source\Loading\Carro();
$fiat = new Source\Loading\Fiat();
$ford = new Source\Loading\Ford();

var_dump($ford,$fiat,$car);

// autoload com composer

require __DIR__."/vendor/autoload.php";

$mail = new PHPMailer\PHPMailer\PHPMailer();

var_dump($mail);