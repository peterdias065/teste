<?php

	$conn = new PDO("mysql:host=localhost; dbname=loja", "root", "senha");
	$stmt = $conn->prepare("SELECT * FROM empregados");
	$stmt->execute();

	$results = $stmt->fetchall(PDO::FETCH_ASSOC);

	foreach($results as $row){
		foreach($row as $key => $value){
			echo $key. ": " . $value . " ";
		}
	}
?>