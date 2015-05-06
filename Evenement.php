<?php
class Evenement{
	private $IDevenement;
	private $activite;
	private $type;
	private $date;
	private $duree;
	private $distance;
	private $difficulte;
	private $trimps;
	private $perf;
	private $epuisement;
	private $commentaire;

	
	public function __construct($id){
		include 'config.php';
		//function recup�ration des donn�es dans la BDD
		$select='SELECT * FROM evenements WHERE IDevenement='.$id;
		$recuperation=$pdo->query($select);
		while($evt=$recuperation->fetch(PDO::FETCH_OBJ)){
			$this->IDevenement=$evt->IDevenement;
			$this->activite=$evt->activite;
			$this->type=$evt->type;
			$this->date=$evt->date;
			$this->duree=$evt->duree;
			$this->distance=$evt->distance;
			$this->difficulte=$evt->difficulte;
			$this->trimps=$evt->trimps;
			$this->perf=$evt->perf;
			$this->epuisement=$evt->epuisement;
			$this->commentaire=$evt->commentaire;
			
		}
	}
	
	public function saveSQL(){
		//function enregistrement evenement 
		//retourne 1 si OK
		$exec='';
		$insertion=$pdo->exec($exec);
		return $insertion;
	}
	
	public function getActivite(){
		return $this->activite;
	}
	
	public function getType(){
		return $this->type;
	}
	
	public function getDate(){
		return $this->date;
	}
	
	public function getDuree(){
		return $this->duree;
	}
	
	public function getDistance(){
		return $this->distance;
	}
	
	public function getDifficulte(){
		return $this->difficulte;
	}
	
	public function getTrimps(){
		return $this->trimps;
	}
	
	public function getPerf(){
		return $this->perf;
	}
	
	public function getEpuisement(){
		return $this->epuisement;
	}
	
	public function getID(){
		return $this->IDevenement;
	}
	
	public function getCommentaire_text(){
		include 'config.php';
		//les coms de l'�v�nement
		$s1='SELECT * FROM commentaires WHERE IDevenement='.$this->IDevenement;
		$r1=$pdo->query($s1);
		while($o1=$r1->fetch(PDO::FETCH_OBJ)){
			return $com=utf8_encode($o1->texte).'<br><i><small text-default>'.date('d-m-Y - H:m:s',strtotime($o1->date)).'</i></small>';
		}
	}
	
	public function getDifficulte_text(){
		include 'config.php';
		//difficulte_text
		$s1='SELECT intitule FROM difficultes WHERE IDdifficulte='.$this->difficulte;
		$r1=$pdo->query($s1);
		while($o1=$r1->fetch(PDO::FETCH_OBJ)){
			return utf8_encode($o1->intitule);
		}
	}
		
	public function getEpuisement_text(){
		include 'config.php';
		//epuisement_text
		$s2='SELECT intitule FROM epuisements WHERE IDepuisement='.$this->epuisement;
		$r2=$pdo->query($s2);
		while($o2=$r2->fetch(PDO::FETCH_OBJ)){
			return utf8_encode($o2->intitule);
		}
	}
	
	public function getPerformance_text(){
		include 'config.php';
		//performance_text
		$s4='SELECT intitule FROM perfs WHERE IDperf='.$this->perf;
		$r4=$pdo->query($s4);
		while($o4=$r4->fetch(PDO::FETCH_OBJ)){
			return utf8_encode($o4->intitule);
		}
	}
		
	public function getActivite_text(){
		include 'config.php';
		//activite_text
		$s5='SELECT intitule FROM activites WHERE ID_activite='.$this->activite;
		$r5=$pdo->query($s5);
		while($o5=$r5->fetch(PDO::FETCH_OBJ)){
			return utf8_encode($o5->intitule);
		}
	}
	
	public function getType_text(){
		include 'config.php';
		//type_text
		$s6='SELECT intitule FROM types WHERE ID_type='.$this->type;
		$r6=$pdo->query($s6);
		while($o6=$r6->fetch(PDO::FETCH_OBJ)){
			return utf8_encode($o6->intitule);
		}
		

	}

	public function getDistance_text(){
		return $this->distance/1000;
	}
	
	public function getDuree_text(){
		$h=floor($this->duree/3600);
		
		$mn=floor(($this->duree-($h*3600))/60);
		
		$sc=floor($this->duree-($h*3600)-($mn*60));
		return $duree_text=$h.':'.$mn.':'.$sc;
	}
	
}
