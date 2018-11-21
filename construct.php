<?php

class Human
{
  private $name;
  private $surname;

  public function_construct ($name, $surname) {
    echo 'Конструктор';
    $this->name = $name;
    $this->surname = $surname;
  }
  function present(){
    echo 'Меня зовут'. $this->name.' '.'$this->surname';
  }
}
$object = new Human ('Вася', 'Пупкин');
$object -> present();
?>


