<?php

/*******************************************************************************
  Uma palíndroma é uma palavra que se lê da mesma forma de trás para frente.

  Escreva o corpo do método isPalindrome que verifica se uma palavra é
  palíndroma. A validação deve desconsiderar diferença entre maiúsculas e
  minúsculas (case insensitive).

  Por exemplo, isPalindrome(“Deleveled”) deve retornar true.
*******************************************************************************/


class Palindrome {

  public static function isPalindrome($word) {
    $word = strtolower($word);

    $palavra =str_split($word);
    $reversa = [];
    $tamanho = strlen($word);

    for ($i=($tamanho-1); $i >= 0; $i--) { 
      $reversa[] = $palavra[$i];
    }
    for ($i=0; $i < $tamanho; $i++) { 
  		if($reversa[$i] != $palavra[$i])
  			return false;
  	}

    return true;
  }

}
