<?php 
include 'config.php';
include 'menu_1.php';
include 'Evenement.php';
?>

  <div id="corps">
  <br><br>
  <h3 class="text-danger">Activité de l'équipe</h3>
  <br>
  
  <div class="row">
  	<div id="selection_form_evt_type" class=""></div>
  	<div id="selection_form_evt_date" class="row"></div>
  </div>

  <hr><hr>
    <?php
    
    $select='SELECT * FROM evenements';
    $result=$pdo->query($select);
    while($evenement=$result->fetch(PDO::FETCH_OBJ)){
    	$evt=new Evenement($evenement->IDevenement);
		$cycliste=new Utilisateur($evenement->ID_utilisateur);
    ?>
    <div class="evenement_block row" id="evenement_block">


    </div>
	<?php }?>
    <p>I Am Now A Mobile Developer!!</p>
  </div>

  <div id="footer">

  </div>

<script type="text/javascript" src="js/selection_evt.js"></script>
 
<script type="text/javascript">
selection_type_evt();
selection_date_evt();

$(document).ready(function(){
	selection_activite();
});

$("#selection_form_evt_type").change(function(){
	selection_activite();//realise la requete des activite en fontion de la selection du type & de la periode
});
</script>
<?php include 'end.php';?>