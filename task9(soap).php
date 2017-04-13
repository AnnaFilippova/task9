<?php
   class Soap
    {
     public $diameter = 400;
     public $color = 'white';
     public $material = 'soap';
     public $form = 'circle';
     public $weight = 300;

     public function  changeForm()
     {
       $this->form = 'square';
     }

     public function printColor()
     {
         echo $this->color;
     }

     public function  changeDiameter()
     {
       $this->diameter = 500;
     }

     public function printMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Soap();
   echo $myObject->changeForm();
   echo $myObject->printColor();
   echo $myObject->changeDiameter();
   echo $myObject->diameter;
   echo $myObject->printMaterial();

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
