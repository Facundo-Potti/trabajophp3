<html>
<head>
    <link rel="stylesheet" href="FACUNDO POTTI ESTILOS.css">
</head>
<body>

<?php

$llamadas= $_POST["llamadas"];
$dia= $_POST["dia"];
$turnos= $_POST["turnos"];
$precio=0;


if ($llamadas <= "5")
{
	$llamadas= $_POST["llamadas"];
	$precio=1;
}

 if  ($llamadas > "5" && $llamadas <= "8")
{
    $llamadas= $_POST["llamadas"];
    $precio=50;
}

 if  ($llamadas > "8" && $llamadas <= "10")
{
    $llamadas= $_POST["llamadas"];
    $precio=20;
}

 if ($llamadas > "10")
{
    $llamadas= $_POST["llamadas"];
    $precio=10;
}

if($dia == "domingo")
{
    $dia= $_POST["dia"];
	$precio= $precio + ($precio*3/100);
}

if($turnos == "mañana")
{
    $turnos= $_POST["turnos"];
	$precio= $precio + ($precio*15/100);
}

if($turnos == "tarde")
{
    $turnos= $_POST["turnos"];
	$precio= $precio + ($precio*10/100);
}


echo ("El valor final de su llamada es de: $"), $precio;

?>

</body>
</html>
