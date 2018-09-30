<html>
<header>
	
<title>Array de numeros</title>

</header>

<body>
	<center>
		<?php
		$paises = array( "Italy" => "Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=> "Vienna", "Poland"=>"Warsaw") ;
        //Metodo para ordenar de forma A
		ksort($paises);

		//Recorro el array paises , apunto la clave al valor correspondiente
		foreach($paises as $pais => $capital){


       //Imprimo el array de paises
        echo "Pais= ". $pais ."\n"."Capital= ". $capital."\n";

    }

     echo "<br><br>";
     echo "<br><br>";
     echo "<br><br>";
		


        //Array de numeros
		$arrayNumeros = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
		//Variable que calcula el promedio
		$promedio_Total= array_sum($arrayNumeros) / count($arrayNumeros);
		echo "$promedio_Total";
		  
        echo "<br><br>";
        sort ($arrayNumeros);
        $salida = array_slice($arrayNumeros, 0, 7);
        foreach($salida as $salida)
        {
        echo  $salida . ", ";
        }
        echo "<br><br>";

        krsort($arrayNumeros);
        $salida = array_slice($arrayNumeros, 0, 7);
        foreach($salida as $salida)
        {
        echo  $salida . ", ";
        }
        echo "<br><br>";
			

		?>
	</center>
	
</body>



</html>