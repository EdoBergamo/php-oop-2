<?php
class Prodotto
{
  public $id;
  public $nome;
  public $prezzo;
  public $categoria;

  public function __construct($id, $nome, $prezzo, $categoria)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->categoria = $categoria;
  }
}

class ProdottoAlimentare extends Prodotto
{
  public $tipo;

  public function __construct($id, $nome, $prezzo, $categoria, $tipo)
  {
    parent::__construct($id, $nome, $prezzo, $categoria);
    $this->tipo = $tipo;
  }
}

class ProdottoAccessorio extends Prodotto
{
  public $materiale;

  public function __construct($id, $nome, $prezzo, $categoria, $materiale)
  {
    parent::__construct($id, $nome, $prezzo, $categoria);
    $this->materiale = $materiale;
  }
}

class Categoria
{
  public $id;
  public $nome;

  public function __construct($id, $nome)
  {
    $this->id = $id;
    $this->nome = $nome;
  }

  // https://stackoverflow.com/questions/5172261/where-and-why-do-we-use-tostring-in-php
  public function __toString()
  {
    return $this->nome;
  }
}