<?php
// смотрим есть ли файл и перекодируем его в пхп массив
if (file_exists("messages3.data")) {
	$messages= unserialize (file_get_contents ('messages3.data'));
} else {
	$messages=[];
}


if(isset($_GET ['message'])){
	$messages[] = $message= $_GET ['message'];
}
else {
	$message=null;
}

$encoded_messages= serialize($messages);
file_put_contents('messages3.data', $encoded_messages);

echo $message;







 foreach($messages as $msg){
	?>
	<div style="color: #000000" >
		<? echo $msg?>
	</div>
	<?
}



?>
<form >
	<p ><input style="color: #1000ff" placeholder="Введите сообщение...." type="text" name="message"></p>
	<button>Отправить</button>
</form>
