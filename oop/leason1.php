<?php
/**
 * @Creator Alexey Kutuzov <lexus27.khv@gmail.com>
 * @Author: Alexey Kutuzov <lexus27.khv@gmai.com>
 * @Project: anna.start
 */

/**
 * ООП на php
 */

/**
 * Интерфейсы объектов - это список методов с аргументами для работы с обьектом.
 */
interface MyInterface{
	
	public function myFunc($a = []);
	
}

/**
 * Класс - определяет поведение каждого созданного объекта
 * Класс - это классификация обьекта, которая определяется до его создания
 *
 *
 * Класс нужен для того чтобы указать поведение созданных от него объектов
 * Поведение указывается в методах
 *
 */
class MyClass{
	
	public $objectName;// пустое свойство
	
	public $x = 1;
	
	public $a = 100;
	
	public $b = 'Аня';
	
	public $c;// пустое свойство
	
	/**
	 * MyClass constructor.
	 * Вызывается при создании объекта класса MyClass
	 */
	public function __construct($name){
		//$object = $this;
		
		$this->objectName = $name;
		
		echo 'Создался объект класса MyClass';
	}
	
}

/**
 * Создание объекта, класса MyClass
 * new MyClass
 */
$object = new MyClass('Объект 1');



/**
 * Изменение свойства объекта
 * $object->x
 */
$object->x = 2;
$object->x+=5;
$object->x-=1;
$object->x*=2;


/**
 * Получение свойста объекта
 */


$_uznatyChtoTam = $object->b;


$a=1;
