<?php

require __DIR__ . "/source/autoload.php";

//Classe PAI
echo "<h2>Aplicando Classe Pai</h2><br>";
$event = new Source\Heranca\Evento\Evento("workshop PHP", "10/12/2020", 1500, 3);
var_dump($event);

$event->register("Paulo Silva", "paulinho@hotmail.com");
$event->register("Marcos Silva", "marquinho@hotmail.com");
$event->register("Julia da Silva", "juju@hotmail.com");
$event->register("Marcelo da Silva", "cecelo@hotmail.com");

//Classe FILHA
echo "<h2>Aplicando Classe Filha</h2><br>";
$end = new Source\Heranca\Endereco("Vicente Pires", "CH 12");
$event = new Source\Heranca\Evento\EventoLive("workshop PHP", "10/12/2020", 1500, 3, $end);
var_dump($event);
$event->register("Paulo Silva", "paulinho@hotmail.com");
$event->register("Marcos Silva", "marquinho@hotmail.com");
$event->register("Julia da Silva", "juju@hotmail.com");
$event->register("Marcelo da Silva", "cecelo@hotmail.com");

//Polimorfismo
echo "<h2>Aplicando Polimorfismo</h2><br>";
$event = new Source\Heranca\Evento\EventoOnline(
        "workshop PHP", 
        "10/12/2020", 
        155,
        "http://senac.com.br/aovivo", 
        4,
        $end
);
var_dump($event);
$event->register("Paulo Silva", "paulinho@hotmail.com");
$event->register("Marcos Silva", "marquinho@hotmail.com");
$event->register("Julia da Silva", "juju@hotmail.com");
$event->register("Marcelo da Silva", "cecelo@hotmail.com");