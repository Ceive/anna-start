<?php

$_GET = [
	//Параметр/Ключ/Индекс => значение ('строка', 5(число), )
	'message'               => 'Аня сьела 2 яблока в пол 11 ого вечера.',
	'Фрукт'                 => 'Банан'
];

$message = $_GET['message'];//получение значения из $_GET по ключу('message')
echo $message . "<br/>";
/////////////////////


$x = [
	'ABC',
	'ZMX',
	'BMW'
];

/**
 * @var array|integer|float|null $x
 */

if(is_array($x)){
	$b = '';
	foreach($x as $value){
		$b = $b .  "|" . $value;
	}
	
	if(is_string($b)){
		echo "\$b === строке<br/>";
	}
	echo $b;
}else if(is_integer($x)){
	echo '$x равно число';
}else if(is_float($x)){
	echo '$x равно число с плавоющей точкой';
}else if($x === null){
	echo '$x равно NULL';
}else{
	echo 'Неожиданный тип значения ' . gettype($x);
}


echo '<p>gettype($x) вернуло результат "' . gettype($x) . '"';
















?>
