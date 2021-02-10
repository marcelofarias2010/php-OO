<?php


namespace Source\Heranca\Evento;
use Source\Heranca\Endereco;


class EventoLive extends Evento{

    /**
     *
     * @var Endereco
     */
    private $endereco;
    
    public function __construct($evento, $data, $preco, $vaga, Endereco $endereco) {
        parent::__construct($evento, $data, $preco, $vaga);
        $this->endereco = $endereco;
    }
    /**
     * 
     * @return Endereco
     */
    function getEndereco(): Endereco {
        return $this->endereco;
    }


}
