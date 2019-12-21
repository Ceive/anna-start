<?php

// получение ранее добавленных сообщений
if(file_exists('messages.data')){
	// по пути messages.data будет находится закодированный массив,
	// который будет извлекаться и разкодироваться в пхп значение(массив)
	$messages = unserialize(file_get_contents('messages.data'));
}else{
	// если файла нет - то массив будет пустым(без сообщений)
	$messages = [];
}

// удаление всех сообщений
if(isset($_GET["toDelete"])){
	$messages = [];
}

// получение сообщения из запроса (получение отправленного сообщения)
if(isset($_GET["message"])){
	$message = $_GET["message"];
	
	// добавление пришедшего сообщения в общий массив сообщений
	$messages[]= $message;
}else{
	$message = null;
}

// Сохранение сообщения
// кодирование массива сообщений в хранимый вид(строку). И сохранение по пути messages.data
$encoded_messages = serialize($messages);
file_put_contents('messages.data', $encoded_messages);


?>
<br/>
<form method="get" style="padding:20px;border:1px solid; margin:10px auto; display:block; width:30%">
	<div>
		<label>Сообщение:</label> <br/>
		<textarea name="message" placeholder="Введите сообщение...." style="width:100%"></textarea>
	</div>
	<div>
		<button type="submit">Отправить</button><a href="/?toDelete=1">Очистить</a>
	</div>
</form>
<?
// Итерирования(Перебор) массива сообщений для отображения отдельно каждого
foreach($messages as $i => $msg){
	// подстановка каждого сообщения в верстку(переменная $msg), верстку которая отобразится в браузере
	?><div style="font-size:40px;color:crimson;text-align: center;"> <?=$msg?></div><?
}
?>

