<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
</head>
<body>



	<?php

		if (is_numeric( $_GET['num1'])) {
				$var1 = floatval( $_GET['num1']);
			}else{

				$var1=null;
				echo "No se puede convertir en entero <br>";
			}


		if (is_numeric( $_GET['num2'])) {
				$var2 = floatval( $_GET['num2']);
			}else{

				$var2=null;
				echo "No se puede convertir en entero <br>";
			}


			var_dump($var1);
			echo "<br>";
			var_dump($var2);

echo "<br>";

		//Isset sirve para comprobar que la variable existe
		if (isset($_GET["operacion"])) {
			$operacion=$_GET["operacion"];
		}else{

			$operacion="";
		}

			echo $operacion;

echo "<br>";
/*
			if ($operacion=="suma") {
				
				echo "$var1 + $var2 = ".($var1 + $var2); 

			}elseif ($operacion=="resta") {

				echo "$var1 - $var2 = ".($var1 - $var2);
				
			}elseif ($operacion=="mult") {

				echo "$var1 * $var2 = ".($var1 * $var2);

			}elseif ($operacion=="div") {
				

				echo "$var1 / $var2 = ".($var1 / $var2);

			}
*/

	switch ($operacion) {
/*
    case "suma":
        echo "$var1 + $var2 = ".($var1 + $var2);
        break;
        */
    case "resta":
        echo "$var1 - $var2 = ".($var1 - $var2);
        break;
        /*
    case "mult":
        echo "$var1 * $var2 = ".($var1 * $var2);
        break;

    case "div":
    	echo "$var1 / $var2 = ".($var1 / $var2);
    	break;
*/
    default:
       echo "No se ha seleccionado ninguna operación";
}


	?>

</body>
</html>