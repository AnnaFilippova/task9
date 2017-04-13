<?php
   class Ball
    {
     public $diameter = 400;
     public $color = 'green';
     public $material = 'rubber';
     public $form = 'circle';
     public $weight = 500;

     public function changeWeightTo900() {
          $this->weight = 900;
     }

     public function printColor() {
         echo $this->color;
     }

     public function  changeDiameterTo200()
     {
       $this->diameter = 200;
     }

     public function echoMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Ball();
   echo $myObject->changeWeightTo900();
   echo $myObject->printColor();
   echo $myObject->changeDiameterTo200();
   echo $myObject->diameter;
   echo $myObject->echoMaterial();

   class NewBall
    {
     public $diameter = 400;
     public $color = 'green';
     public $material = 'rubber';
     public $form = 'circle';
     public $weight = 500;


          public function  __construct($diameter, $color, $form)
          {
            $this->diameter = $diameter;
            $this->color = $color;
            $this->form = $form;
          }

   }
   $ball = new Ball('400', 'green', 'circle');
   echo $ball->diameter;

?>
