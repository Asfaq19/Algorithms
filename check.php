<?php 
	
	class check {

		public $a=1;
		public $b=2;
		public $c=3;
		public $d = [1,2,3];
		public $e = [];

		// public function __construct($value)
		// {

		// 	print_r($value);
		// }


		public function returnFunction()
		{
			$a = 10*2;
			$b = 20*4;
			$c = $a+$b;
			$d = [0,1,2,3];

			// return "I am from return function";
			echo $c."\n";
			// return $a;

			return $d[1];
		}

		public function check_this()
		{
			// echo $this->a;
			// echo $this;
			print_r($this);
			// var_dump($this);
			echo $this->c;
			echo "\n";
			echo $enter = 50;
			echo "\n";

			// print_r($this->d);

			// return $this->a;
			// return "I am Asfaq Ar Rafi";
			return $this->returnFunction();
		}
	}

	// $object = new check(2);
	$object = new check();
	echo $object->check_this();
	// echo $object->a;

	


?>