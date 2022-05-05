<?php
	class Connect{

		public static $instance;
		public function __construct(){
		}
		
		public static function get_instance(){
			$host = "ec2-18-210-64-223.compute-1.amazonaws.com";
			$database = "d53cajnleqmdum";
			$user = "xcaxyepmxscvsd";
			$password = "154ea5e93ff01f67806eaf84b3aa1cc33740fb833e3b761aee06e1aaf939547b";


			if(!isset(self::$instance)){
				self::$instance = new PDO("pgsql:host=$host;dbname=$database;", $user, $password);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
	}
?>
