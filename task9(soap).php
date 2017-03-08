<?php
   class Soap
    {
     public $diameter = 400;
     public $color = 'white';
     public $material = 'soap';
     public $form = 'circle';
     public $weight = 300;

     public function Metod() {
         return 'Результат';
     }

     public function getColor() {
         echo $this->color;
     }

     public function  changeDiameter()
     {
       $this->diameter = 500;
     }

     public function getMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Soap();
   echo $myObject->Metod();
   echo $myObject->getColor();
   echo $myObject->changeDiameter();
   echo $myObject->diameter;
   echo $myObject->getMaterial();

   class NewSoap
    {
      public $diameter = 400;
      public $color = 'white';
      public $material = 'soap';
      public $form = 'circle';
      public $weight = 300;


          public function  __construct($diameter, $color, $form)
          {
            $this->diameter = $diameter;
            $this->color = $color;
            $this->form = $form;
          }

   }
   $soap = new Soap('400', 'white', 'circle');
   echo $soap->diameter;

?>
