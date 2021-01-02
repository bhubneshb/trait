<?php

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
          hello::disp as newdisp;
          }
     }

  $a= new bhuvi();
  $a-> disp();
  $a-> newdisp();

?>