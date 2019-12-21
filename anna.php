<?php
// получение ранее добавленных сообщений
if(file_exists('messages2.data')){
	// по пути messages.data будет находится закодированный массив,
	// который будет извлекаться и разкодироваться в пхп значение(массив)
	$messages = unserialize(file_get_contents('messages2.data'));
}else{
	// если файла нет - то массив будет пустым(без сообщений)
	$messages = [];
}   //это у нас получение ОТПРАВЛЕННОГО сообщения
if(isset($_GET['message'])){
	$message= $_GET['message'];

$messages[]=$message;}
else {
	$message=null;
	
}
//закодируем сообщение
$encoded_messages = serialize($messages);
	//сохраняем текст
file_put_contents('messages2.data', $encoded_messages);

?>
<div style="color: gold"><?= $message?></div>
<form method="get">
	<p ><input style="color: darkorange" placeholder="Введите сообщение...."type="text" name="message"></p>
	
	<button>ОТПРАВИТЬ</button>
	
</form>
<?
foreach($messages as $message){
	?><div style="font-size:40px;color:crimson;text-align: center;"> <?=$message?></div><?
}
?>


