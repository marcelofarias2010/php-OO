<?php

require __DIR__."/source/autoload.php";
/*[Associacao] Eh a associacao mais comum entre objetos onde o objeto tera um 
 *             atributo apontando e dando acesso ao outro objeto*/
echo '<h1>Exemplo com Associação</h1><br>';
$company = new Source\Related\Company();
$company->bootCompany("Senac", "Jesse Freire");

var_dump($company);

$end = new Source\Related\Endereco("Quadra 06","1229","Edificio Jesse Freire");

$company->boot("Senac",$end);
var_dump($end);

echo "<p>O {$company->getNome()} tem sede na "
. "{$company->getEndereco()->getRua()} no "
. "{$company->getEndereco()->getComplemento()}</p>";

// [Agregacao] Em agregacao tornamos um objeto externo parte do objeto base, 
//             contudo nao o referenciamos em uma propriedade como na associacao
echo '<h1>Exemplo com Agregação</h1><br>';
$cursoA = new Source\Related\Produto("PHP OO", 1999);
$cursoB = new Source\Related\Produto("Java OO", 2999);
var_dump($cursoA,$cursoB);

$company->addProduto($cursoA);
$company->addProduto($cursoB);
$company->addProduto(new Source\Related\Produto("HTML5", 999));
var_dump($company);

/**
 * @var \Source\Related\Produto $product
 */
foreach ($company->getProdutos() as $product){
    //var_dump($product);
    echo "<p>{$product->getNome()} por R$ {$product->getPreco()}</p>";
}

/* [Composicao] Em composicao temos um objeto base que eh responsavel por 
 *              instanciar o objeto parte, que so existe enquanto o base existir*/
echo '<h1>Exemplo com Composição</h1><br>';
$company->addMembroTime("Gerente", "Osney", "Silva");
$company->addMembroTime("Secretaria", "Nayara", "Pereira");
$company->addMembroTime("Coordenadora", "Ana", "Goncalves");
$company->addMembroTime("Instrutor", "Marcelo", "Farias");
var_dump($company);