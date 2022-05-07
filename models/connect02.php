<?php
	# Erros
	ini_set("display_errors", 1);

	# Váriaveis de controle
		$host = "ec2-3-234-131-8.compute-1.amazonaws.com";
		$database = "d1slqiglk642d7";
		$user = "jjlvomcdpduery";
		$password = "fab866ce1a3d1a696669a409410d3d46f60100e64ef8cb466de28a7a0623bbca";

	try {
		# Função de conexão
		$conn = pg_connect("host=$host port=5432 dbname=$database user=$user password=$password") or die("Não foi possível conectar ao servidor PostGreSQL");
	} catch (PDOException $e){
		echo $e->getMessage();
	}	
?>