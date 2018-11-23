<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<?php 
include "cart.php"; 

class Basket
{
  public $items;
  public $sum;
  public $discount;
  public $count;

  
   function __construct($name = null, $count = null)
  {
    $item = [];
    if ($name != NULL && $count != NULL) {
       $item ['name'] = $name;
       $item ['count'] = $count;
       $this -> count = $count;
       foreach ($products as $key => $value) {
                 if ($value['name'] == $name) {
                       $this -> sum = $value['price'] * $count;
                 };
         };
    } elseif ($name == NULL) {
             echo 'Выберите товар  <br>';
      }
     elseif ($count == NULL) {
             echo 'Выберите количество  <br>';      
      } 

  if ($this -> count > 10) {
      $this -> discount = 10;
      $this -> sum = $this -> sum * (100 - $this -> discount)/100;
  } 

  $this -> items [] = $item;
    
  }
   
  function getItems () {
    var_dump ('<pre>', $this -> items);
  }

  function getCount () {
    echo $this -> count . '<br>';
  }

  function getDiscount () {
    echo $this -> discount . '<br>';
  }

  function getSum () {
    echo $this -> sum . '<br>';
  }



}

$basket = new Basket ('rubashka',20);
$basket -> getItems ();
$basket -> getCount ();
$basket -> getSum ();
$basket -> getDiscount ();
?>





</body>
</html>