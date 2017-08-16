<?php

/*******************************************************************************
  Escreva o método cd (change directory) para um sistema de arquivos abstrato.
    O diretório raiz é '/'
    O separador é '/'
    O diretório pai é acessível através de '..'
    O nome de um diretório contém apenas letras (A-Za-z)
    Quando um path for inválido, o método deverá lançar a exceção do tipo InvalidPathException

  Por exemplo:
    $path = new Path('/a/b/c/d');
    echo $path->cd('e/f')->currentPath;   //exibe '/a/b/c/d/e/f
    echo $path->cd('../x')->currentPath;  //exibe '/a/b/c/d/e/x'
    echo $path->cd('/d')->currentPath;    //exibe '/d'
    echo $path->cd('/?')->currentPath;    //InvalidPathException é lançada

*******************************************************************************/
class InvalidPathException extends Exception
{
}

class Path {

  public $currentPath;

  public function __construct($path) {
    $this->currentPath = $path;
  }

  public function cd($path) {
    echo "\n";
    echo $path;
    echo ' ';
    $cmds = explode('/', $path);

    if($cmds[0] == '')
      $this->clrPath();

    foreach ($cmds as $cmd) {
      if($cmd == '..')
      {
        $this->delPath();
        continue;
      }
      if(ctype_alpha($cmd))
      {
        $this->addPath($cmd);
        continue;
      }
        throw new InvalidPathException('Caminho inválido');
    }

    return $this;
  }
  private function clrPath()
  {
      $this->currentPath = '';
  }

  private function delPath()
  {
    $parts = explode('/', $this->currentPath);
    $last = array_pop($parts);
    $parts = array(implode('/', $parts), $last);
    $this->currentPath = $parts[0];
  }

  private function addPath($path)
  {
    $this->currentPath .= '/'.$path;
  }

}
