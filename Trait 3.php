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
     	public function disp()
     	{
     		echo "lipsa mohanty <br>";
     	}
     }
       class bhuvi
     {
     	use hi,hello
     	{
     	hi:: disp insteadof hello;
        }
     }

  $a= new bhuvi();
  $a-> disp();

?>