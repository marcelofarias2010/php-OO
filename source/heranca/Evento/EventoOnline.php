<?php


namespace Source\Heranca\Evento;

/**
 * Description of EventoOnline
 *
 * @author Marcelo
 */
class EventoOnline extends Evento{
    
    private $link;
    
    public function __construct($evento, $data, $preco,$link, $vaga) {
        parent::__construct($evento, $data, $preco, $vaga);
        $this->link = $link;
    }
    public function register($nome, $email) {
        $this->vaga += 1;
        $this->setRegistro($nome, $email);
        echo "<p>Show {$nome}, cadastrado com sucesso!</p>";
    }

}
