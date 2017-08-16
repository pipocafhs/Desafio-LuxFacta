<?php

/*******************************************************************************
  A classe LuxFacta recebe um parâmetro no seu construtor que é sempre um número
   inteiro.
  Com base nesse numero n, escreva o corpo do método say, de forma que:
    - Se o número n for divisível por 3, o retorno deve ser "Lux"
    - Se o número n for divisível por 5, o retorno deve ser "Facta"
    - Se o número n for divisível por 3 e por 5, o retorno deve ser "LuxFacta"
    - Qualquer outra condição o retorno deve ser o próprio número n;
*******************************************************************************/

class LuxFacta {

  private $n;

  public function __construct($n) {
    $this->n = $n;
  }

  public function say() {
    switch ($this->n) { 
      case ($this->n%3==0) && ($this->n%5==0) :
      return 'LuxFacta';
        
        break;
      case ($this->n%5==0){
        return 'Facta';
        break;
      }
      case ($this->n%3==0){
        return 'Lux';
        break;
      }
      default:
        return $this->n;
        break;
    }
  }
}
