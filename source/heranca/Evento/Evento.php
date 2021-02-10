<?php

namespace Source\Heranca\Evento;

/**
 * Description of Evento
 *
 * @author Marcelo
 */
class Evento {

    //put your code here
    private $evento;
    private $data;
    private $preco;
    private $registro;
    protected $vaga;

    function __construct($evento, $data, $preco, $vaga) {
        $this->evento = $evento;
        $this->data = $data;
        $this->preco = $preco;
        $this->vaga = $vaga;
    }

    public function register($nome, $email) {
        if ($this->vaga >= 1) {
            $this->vaga -= 1;
            $this->setRegistro($nome, $email);
            echo "<p>Parabens {$nome}, vaga garantida!</p>";
        } else {
            echo "<p>Desculpe {$nome}, mas as vagas esgotaram!</p>";
        }
    }
    /**
     * @param mixe $register
     */
    protected function setRegistro($nome, $email) {
        $this->registro = [
            "name" => $nome,
            "email" => $email
        ];
    }

    function getEvento() {
        return $this->evento;
    }

    function getData() {
        return $this->data;
    }

    function getPreco() {
        return number_format($this->preco,"2",",",".");
    }

    function getRegistro() {
        return $this->registro;
    }

    function getVaga() {
        return $this->vaga;
    }

}
