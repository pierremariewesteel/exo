<?php
include '../config.php';


if(isset($_POST['pc_records'])){
	$IDevenement=(isset($_POST['IDevenement']))?filter_input(INPUT_POST,'IDevenement',FILTER_SANITIZE_SPECIAL_CHARS):'';
	$s1='SELECT * FROM pc_records WHERE id_evenement='.$IDevenement;
	$r1=$pdo->query($s1);
	while($obj=$r1->fetch(PDO::FETCH_OBJ)){
		$var[$obj->duree]=$obj->pc;
	}
	echo json_encode($var);
}
else{
	$IDevenement=(isset($_POST['IDevenement']))?filter_input(INPUT_POST,'IDevenement',FILTER_SANITIZE_SPECIAL_CHARS):'';
	$s1='SELECT * FROM temps_zones WHERE id_evenement='.$IDevenement;
	$r1=$pdo->query($s1);
	while($obj=$r1->fetch(PDO::FETCH_OBJ)){
		$var[$obj->intitule]=$obj->temps;
	}
	echo json_encode($var);
}
