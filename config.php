<?php

//config SQL//******************************************************************/
$bdd='exoFdj';
$sqlServer='127.0.0.1';
$userSQL='sch1m';
$mdp='120180';

try {
	$pdo = new PDO('mysql:host='.$sqlServer.';dbname='.$bdd, $userSQL, $mdp);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//foreach($pdo->query('SELECT * from FOO') as $row) {
		//print_r($row);
	//}
	//$pdo = null;
} catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}

/******************************************************************************/
/***************************Config Paramètres globaux**************************/
$title='ExoFDJ';
?>