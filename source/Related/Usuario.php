<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Source\Related;

/**
 * Description of Usuario
 *
 * @author Marcelo
 */
class Usuario {

    //put your code here
    private $trabalho;
    private $nome;
    private $sobrenome;

    function __construct($trabalho, $nome, $sobrenome) {
        $this->trabalho = $trabalho;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    function getTrabalho() {
        return $this->trabalho;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function setTrabalho($trabalho) {
        $this->trabalho = $trabalho;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

}
