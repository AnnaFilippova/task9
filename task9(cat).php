<?php
   class Cat
    {
     public $length = 600;
     public $color = 'grey';
     public $eyes = 'green';
     public $breed = 'british';
     public $weight = 6000;

     public function Metod() {
         return 'Результат';
     }

     public function getColor() {
         echo $this->color;
     }

     public function  changeLength()
     {
       $this->length = 800;
     }

     public function getBreed()
     {
       echo $this->breed;
     }


   }

   $myObject = new Cat();
   echo $myObject->Metod();
   echo $myObject->getColor();
   echo $myObject->changeLength();
   echo $myObject->length;
   echo $myObject->getBreed();

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
