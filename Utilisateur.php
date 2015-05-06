<?php

class Utilisateur{
private $login;
private $pass;
private $nom;
private $prenom;
private $email;
private $photo;
private $identifiaction;

	public function __construct($id){
		include 'config.php';
		//function recupération des données dans la BDD
		$select='SELECT `nom`, `prenom`, `login`, `email`, `photo` FROM `utilisateurs` WHERE `id`='.$id;
		$recuperation=$pdo->query($select);
		while($user=$recuperation->fetch(PDO::FETCH_OBJ)){
			$this->nom=$user->nom;
			$this->prenom=$user->prenom;
			$this->photo=$user->photo;
		}
		
		
	}
	
	//function test de login
	public function identifiaction($login, $pass){
		if($login==$this->login && $pass==$this->pass){
			$this->identification=true;
			return true;
		}
	return false;
	}
	
	public function getNom(){
		return $this->nom;
	}
	
	public function getPrenom(){
		return $this->prenom;
	}
	
	public function getPhoto(){
		return $this->photo;
	}
	
	
}