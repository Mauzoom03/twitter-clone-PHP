<?php  //siempre empezar asi //


 $numero = 5 ;

$decimal = 1.56;

$nombre = "Mauro";

echo "Hola me llamo $nombre como estas";

$verdadero = true;
$falso = false;

$nulo=null;

$array = [
    'manzana',
    'limon',
    'mango',
    'guayaba',
    'fresa'
];

print_r($array);

$character = [
    "name" => 'Jack Sparrow',
    "age" => '10'
];

$character["age"] = 25;
print_r($character);

$firstName = 'Jon';
$lastName = 'Snow';
$age = 25;

echo "Hola me llamo $firstName $lastName y tengo $age años y me gustan los lobos";


$multi = 10 * 6 ;

echo "<br>";

echo "$multi";

$cars = ["Saab","Volvo","BMW"];

echo "$cars[1]";


$cars = ['Saab','Volvo','BMW'];

$cars[0] = "Ford";

print_r($cars); 

$titulo=$_GET['titulo'];

require_once "template.html";

function sumar($num1,$num2)
{
    $resultado = $num1 + $num2;
    return $resultado;
}
$res = sumar(num1:4,num2:6);
    echo"<br>El resultado de la funcion es $res";
