<?php
   class Vase
    {
     public $diameter = 200;
     public $color = 'pink';
     public $material = 'glass';
     public $form = 'cylinder';
     public $weight = 800;

     public function  changeMaterial()
     {
       $this->material = 'earthenware';
     }

     public function echoColor() {
         echo $this->color;
     }

     public function  changeDiameter()
     {
       $this->diameter = 900;
     }

     public function echoMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Vase();
   echo $myObject->changeMaterial();
   echo $myObject->echoColor();
   echo $myObject->changeDiameter();
   echo $myObject->diameter;
   echo $myObject->echoMaterial();

   class NewVase
    {
      public $diameter = 200;
      public $color = 'pink';
      public $material = 'glass';
      public $form = 'cylinder';
      public $weight = 800;


          public function  __construct($diameter, $color, $form)
          {
            $this->diameter = $diameter;
            $this->color = $color;
            $this->form = $form;
          }

   }
   $vase = new Vase('200', 'pink', 'cylinder');
   echo $vase->diameter;

?>
