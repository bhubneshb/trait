<?php

         trait hi
     {
     	private function disp()
     	{
     		echo "bhubnesh prasad behera <br>";
     	}
     }

     class bhuvi
     {
     	use hi
     	{
     		hi::disp as public;
     	}
     }

  $a= new bhuvi();
  $a-> disp();

?>