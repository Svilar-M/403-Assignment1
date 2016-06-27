<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

  <?php

   $whatsit = "0";
   echo 'Value is '.get_var_type($whatsit).'<br>';
   $whatsit = (double)0;
   echo 'Value is '.get_var_type($whatsit).'<br>';
   $whatsit = false;
   echo 'Value is '.get_var_type($whatsit).'<br>';
   $whatsit = 0;
   echo 'Value is '.get_var_type($whatsit).'<br>';
   $whatsit = NULL;
   echo 'Value is '.get_var_type($whatsit).'<br>';

   function get_var_type($some){
   	return gettype($some);
   }


  ?>

	
</body>
</html>