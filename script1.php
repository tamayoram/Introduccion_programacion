<?php
//esto es una línea de comentario
/*esto es un comentario
de varias
líneas */

$a=1; // las variables se le antepone el símbolo $ para declararlas y se termina la línea con ; a menos que si son condicionales o ciclos
$A=1; // php es sensitivo

$a="Hola";

// se pueden definir constantes usando define
define("c",2);

$b=56;

//operaciones aritmeticas
$d=c*$b; // atención c es una constante

// como imprimir un resultado y verlo en pantalla
echo $d;

// manejo de condicionales. Se usa if (argumentos){}
// para concatenar se usa el símbolo .


echo "<hr>";
if ($d>100)
{

echo "El valor ".$d." es mayor que 100";
}

else

{
	echo "El valor".$d." es menor o igual a 100";
}

echo "<hr>"; // separador

// modo resumido del ejemplo if anterior

$txt="El valor ".$d." es mayor que 100";

if($d<=100)
	{
		$txt="El valor".$d." es menor o igual a 100";
	} 
echo $txt;

echo"<hr>";

//manejo de ciclos
// el ciclo for: for (inicio;fin;incremental) {}

for ($i=10; $i<=100 ; $i+=5)
{
echo $i."<br>";
} 

