	<?php
	include '../config.php';
	include '../Utilisateur.php';
;
	
	$requete=(isset($_POST['requete']))?filter_input(INPUT_POST,'requete',FILTER_SANITIZE_SPECIAL_CHARS):'tous';  
	
include '../Evenement.php';
switch ($_POST['champ']){
case 'type':

	?>


	<form id="selection_evt" class="col-md-3  selection_form">
 	 <div class="form-group col-sm-12 ">
    <label for="" class="col-sm-5 control-label"><b>Type d'événement</b></label>
    <div class="col-sm-7">
      <select class="form-control" name="type" ID="type">
      	<option value="tous">Tous</option>
      	<?php $query2="SELECT * FROM types";
	    	$resultat2=$pdo->query($query2);
	    	while($obj2=$resultat2->fetch(PDO::FETCH_OBJ)){

	    		echo '<option value="'.$obj2->ID_type.'">'.utf8_encode($obj2->intitule).'</option>';
	    	}
	    	?>
      </select>
    </div>
 	 </div>
	</form>


	<?php 
	;
break;
	
case 'date':
	?>
	<div id="selection_evt" class="col-md-3  selection_form">
  		<div class="form-group col-sm-12">
   			<label for="" class="col-sm-5 control-label"><span class="glyphicon glyphicon-cog"></span> Période
   			</label>
		</div>
	</div>
	
	
	<?php 
	;
break;
	
	case 'activites':

		if($requete=="tous"){
			$select='SELECT * FROM `evenements`';
		}
			else{
		$select='SELECT * FROM `evenements` WHERE `type`='.$requete;
		}
	
		$result=$pdo->query($select);
		
		while($evenement=$result->fetch(PDO::FETCH_OBJ)){
		
		$evt=new Evenement($evenement->IDevenement);
		$cycliste=new Utilisateur($evenement->ID_utilisateur);
		
	
		echo '<div class="evenement_block row" id="evenement_block">'
    	.'<div class="col-md-1">'
    	.'<p><img src="images/'.$cycliste->getPhoto().'" alt="photo_cycliste" class=".img-thumbnail evenement_photo "/><p>'
    	.'</div>'
    	
    	.'<div class="text col-md-9">'
	    	.'<p>'
	    		.'<a href="graph.php?id='.$evt->getID().'">'	
	   			.'<span class="evenement_titre">'.date('d-M-Y',strtotime($evt->getDate())).'</span> : '
	    		.'<span class="evenement_titre">'.$evt->getActivite_text().'</span> ; '
	    		.'<span class="evenement_titre">'.$evt->getType_text().'</span>'
				.'</a>'
	    	.'</p>'

    		.'<p>'
				.'<span class="evenement_details"><img src="images/chrono.png" alt="icone_chrono" class="evenement_icone"/>'
				.$evt->getDuree_text()
				.'</span>'
		    	
				.'<span class="evenement_details"><img src="images/map.png" alt="icone_map" class="evenement_icone"/>'
				.$evt->getDistance_text().'</span>'
		    	
		    	.'<span class="evenement_details"><img src="images/montagne.png" alt="icone_montagne" class="evenement_icone"/>'
		    	.$evt->getDifficulte_text().'</span>'
	
		    	.'<span class="evenement_details"><img src="images/trimps.png" alt="icone_trimps" class="evenement_icone"/>'
		    	.$evt->getTrimps().'Trimps</span>'
		
		    	.'<span class="evenement_details"><img src="images/perf.png" alt="icone_perfs" class="evenement_icone"/> Perf. :'
		    	.$evt->getPerformance_text().'</span>'    	
		    	
		    	.'<span class="evenement_details"><img src="images/epuisement.png" alt="icone_perfs" class="evenement_icone"/> Epuisement :'
		    	.$evt->getEpuisement_text().'</span>'
		    	
		    	.'<br><span class="evenement_details">'
		    	.$evt->getCommentaire_text().'</span>'

		    	.'<hr><hr>'
	    	.'</p>'
	    .'</div>'
		.'</div>';
    
	} ;
    break;

}
?>