<?php
   class Cat
    {
     public $length = 600;
     public $color = 'grey';
     public $eyes = 'green';
     public $breed = 'british';
     public $weight = 6000;

     public function printWeight()
     {
         echo $this->weight;
     }

     public function printColor()
     {
         echo $this->color;
     }

     public function  changeLength()
     {
       $this->length = 800;
     }

     public function printBreed()
     {
       echo $this->breed;
     }


   }

   $myObject = new Cat();
   echo $myObject->printWeight();
   echo $myObject->printColor();
   echo $myObject->changeLength();
   echo $myObject->length;
   echo $myObject->printBreed();

   class NewCat
    {
      public $length = 600;
      public $color = 'grey';
      public $eyes = 'green';
      public $breed = 'british';
      public $weight = 6000;


          public function  __construct($color, $eyes, $breed)
          {
            $this->color = $color;
            $this->eyes = $eyes;
            $this->breed = $breed;
          }

   }
   $cat = new Ball('grey', 'green', 'british');
   echo $cat->breed;

?>
