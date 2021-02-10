<?php


namespace Source\Related;

/**
 * Description of Endereco
 *
 * @author Marcelo
 */
class Endereco {
    //put your code here
    private $rua;
    private $numero;
    private $complemento;
    
    function __construct($rua, $numero, $complemento) {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }
    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }


}
