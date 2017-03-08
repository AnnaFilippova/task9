<?php
   class Book
    {
     public $price = 800;
     public $color = 'black';
     public $material = 'paper';
     public $form = 'rectangle';
     public $weight = 300;

     public function Metod() {
         return 'Результат';
     }

     public function getColor() {
         echo $this->color;
     }

     public function  changePrice()
     {
       $this->price = 1000;
     }

     public function getMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Book();
   echo $myObject->Metod();
   echo $myObject->getColor();
   echo $myObject->changePrice();
   echo $myObject->price;
   echo $myObject->getMaterial();

   class NewBook
    {
      public $price = 800;
      public $color = 'black';
      public $material = 'paper';
      public $form = 'rectangle';
      public $weight = 300;


          public function  __construct($price, $color, $form)
          {
            $this->price = $price;
            $this->color = $color;
            $this->form = $form;
          }

   }
   $book = new Book('400', 'green', 'circle');
   echo $book->price;

?>
