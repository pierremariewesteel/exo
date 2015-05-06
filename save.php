<?php

<div class="col-md-1">
<p><img src="images/<?php echo $cycliste->getPhoto();?>" alt="photo_cycliste" class=".img-thumbnail evenement_photo "/><p>
</div>
 
<div class="text col-md-9">
<p>
<span class="evenement_titre"><?php echo date('d-M-Y',strtotime($evt->getDate())); ?> : </span>
	    	<span class="evenement_titre"><?php echo $evt->getActivite_text(); ?> ; </span>
	    	<span class="evenement_titre"><?php echo $evt->getType_text(); ?></span>
	    	</p>
	    	
	    	<p>
		    	<span class="evenement_details"><img src="images/chrono.png" alt="icone_chrono" class="evenement_icone"/>
		    	<?php echo $evt->getDuree_text(); ?>
		    	</span>
		    	
		    	<span class="evenement_details"><img src="images/map.png" alt="icone_map" class="evenement_icone"/>
		    	<?php echo $evt->getDistance_text(); ?> km
		    	</span>
		    	
		    	<span class="evenement_details"><img src="images/montagne.png" alt="icone_montagne" class="evenement_icone"/>
		    	<?php echo $evt->getDifficulte_text(); ?>
		    	</span>
	
		    	<span class="evenement_details"><img src="images/trimps.png" alt="icone_trimps" class="evenement_icone"/>
		    	<?php echo $evt->getTrimps(); ?> Trimps
		    	</span>
		
		    	<span class="evenement_details"><img src="images/perf.png" alt="icone_perfs" class="evenement_icone"/> Perf. :
		    	<?php echo $evt->getPerformance_text(); ?> 
		    	</span>    	
		    	
		    	<span class="evenement_details"><img src="images/epuisement.png" alt="icone_perfs" class="evenement_icone"/> Epuisement :
		    	<?php echo $evt->getEpuisement_text(); ?> 
		    	</span>
		    	<br>
		    	<span class="evenement_details">
		    	<?php echo $evt->getCommentaire_text(); ?>

		    	 
		    	</span>
		    		    <hr><hr>
	    	</p>
	    </div>