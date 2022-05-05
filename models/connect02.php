<?php
	# Erros
	ini_set("display_errors", 1);

	# Váriaveis de controle
	$host = "ec2-18-210-64-223.compute-1.amazonaws.com";
	$database = "d53cajnleqmdum";
	$user = "xcaxyepmxscvsd";
	$password = "154ea5e93ff01f67806eaf84b3aa1cc33740fb833e3b761aee06e1aaf939547b";

	try {
		# Função de conexão
		$conn = pg_connect("host=$host port=5432 dbname=$database user=$user password=$password") or die("Não foi possível conectar ao servidor PostGreSQL");
	} catch (PDOException $e){
		echo $e->getMessage();
	}	
?>