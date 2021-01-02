<?php

    trait hi
     {
     	public function disp()
     	{
     		echo "bhubnesh prasad behera <br>";
     	}
     }
   
    class bhuvi
     {
     	use hi;
     }

         class lipsa
     {
     	use hi;
     }

         class suchi
     {
     	use hi;
     }

  $a= new bhuvi();
  $a-> disp(); 

  $b= new lipsa();
  $b-> disp(); 

  $c= new suchi();
  $c-> disp(); 
?>