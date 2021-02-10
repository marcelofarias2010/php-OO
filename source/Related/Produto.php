<?php

namespace Source\Related;

/**
 * Description of Produto
 *
 * @author Marcelo
 */
class Produto {

    //put your code here
    private $nome;
    private $preco;

    function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    /**
     * 
     * @return mixe
     */
    function getNome() {
        return $this->nome;
    }
    /**
     * 
     * @return mixe
     */
    function getPreco() {
        return number_format($this->preco, "2", ".", ",");
    }

    /**
     * 
     * @param mixe $nome
     */
    function setNome($nome) {
        $this->nome = $nome;
    }
    /**
     * 
     * @param mixe $preco
     */
    function setPreco($preco) {
        $this->preco = $preco;
    }

}
