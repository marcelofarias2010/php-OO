<?php


namespace Source\Related;

/**
 * Description of Company
 *
 * @author Marcelo
 */
class Company {
    //put your code here
    private $nome;
    private $endereco;
    private $time;
    private $produtos;
    
    public function bootCompany($nome, $endereco){
        $this->nome = $nome;
        $this->endereco = $endereco;
    }
    public function boot($nome, Endereco $endereco){
        $this->nome = $nome;
        $this->endereco = $endereco;
    }
    public function addProduto(Produto $product){
        $this->produtos[] = $product;
    }
    public function addMembroTime($trabalho,$nome,$sobrenome){
        $this->time[] = new Usuario($trabalho, $nome, $sobrenome);
    }
            function getNome() {
        return $this->nome;
    }

    function getEndereco(): Endereco {
        return $this->endereco;
    }

    function getTime() {
        return $this->time;
    }

    /**
     * 
     * @return array
     */
    function getProdutos() {
        return $this->produtos;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setProdutos($produtos) {
        $this->produtos = $produtos;
    }


    
}
