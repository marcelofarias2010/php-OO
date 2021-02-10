<?php


namespace Source\Heranca;

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
    
    function __construct($rua, $numero, $complemento = null) {
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


}
