<?php

class pessoa{
  public $name; //propriedades
  
  public function seuNome($novoNome) { //ação método
    $this->name=$novoNome;

  }
}

$nomeAluno = new pessoa();
$nomeAluno->seuNome('Rai');

echo $nomeAluno->name;

?>