<?php
	class Connect{

		public static $instance;
		public function __construct(){
		}
		
		public static function get_instance(){
			$host = "ec2-3-234-131-8.compute-1.amazonaws.com";
			$database = "d1slqiglk642d7";
			$user = "jjlvomcdpduery";
			$password = "fab866ce1a3d1a696669a409410d3d46f60100e64ef8cb466de28a7a0623bbca";


			if(!isset(self::$instance)){
				self::$instance = new PDO("pgsql:host=$host;dbname=$database;", $user, $password);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
	}
?>
