<?php
   class Book
    {
     public $price = 800;
     public $color = 'black';
     public $material = 'paper';
     public $form = 'rectangle';
     public $weight = 300;

     public function  changeForm()
     {
       $this->form = 'square';
     }
     public function echoColor()
     {
         echo $this->color;
     }

     public function  changePrice()
     {
       $this->price = 1000;
     }

     public function printMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Book();
   echo $myObject->changeForm();
   echo $myObject->echoColor();
   echo $myObject->changePrice();
   echo $myObject->price;
   echo $myObject->printMaterial();

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
