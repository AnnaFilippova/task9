<?php
   class Ball
    {
     public $diameter = 400;
     public $color = 'green';
     public $material = 'rubber';
     public $form = 'circle';
     public $weight = 500;

     public function Metod() {
         return 'Результат';
     }

     public function getColor() {
         echo $this->color;
     }

     public function  changeDiameter()
     {
       $this->diameter = 200;
     }

     public function getMaterial()
     {
       echo $this->material;
     }


   }

   $myObject = new Ball();
   echo $myObject->Metod();
   echo $myObject->getColor();
   echo $myObject->changeDiameter();
   echo $myObject->diameter;
   echo $myObject->getMaterial();

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
