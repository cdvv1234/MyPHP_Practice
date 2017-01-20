<?php
class Car
{
	public $doors = "4";
	public $wheels = "2";

	public function drive()
	{
		echo $this->doors."<br>";
	}

	public static $light ="4";

	public static function OpenLight()
	{
		echo self::$light."<br>";
	}
}

$myCar = new Car();

echo $myCar->wheels."<br>";

$myCar->drive();

echo Car::$light;

?>