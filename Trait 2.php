<?php
/**
using multi trait
*/
    trait hi
     {
     	public function disp()
     	{
     		echo "bhubnesh prasad behera <br>";
     	}
     }

         trait hello
     {
     	public function demo()
     	{
     		echo "lipsa mohanty <br>";
     	}
     }

       class bhuvi
     {
     	use hi;
     	use hello;
     }

         class lipsa
     {
     	use hi;
     	use hello;
     }

  $a= new bhuvi();
  $a-> disp();
  $a-> demo(); 

  $b= new lipsa();
  $b-> disp();
  $b-> demo(); 
?>