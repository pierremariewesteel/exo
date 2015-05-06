/**
 *  Ensemble des fonction de selecion des événements
 *  page affichage : index.php
 *  page traitement : selection_evt.php
 */

function selection_type_evt(){//affichage formulaire
	$.ajax({
           type: "POST",
           dataType:"text",
           url: "php/selection_evt.php",
           data: {champ:'type'},
           success: function(reponse){$("#selection_form_evt_type").html(reponse);}
       });

};

function selection_date_evt(resultat){
	$.ajax({
           type: "POST",
           dataType:"text",
           url: "php/selection_evt.php",
           data: {champ:'date'},
           success: function(reponse){$("#selection_form_evt_date").html(reponse);}
      });

};

function selection_activite(){
			var requete=$("#type").val();
			$.ajax({
				type: "POST",
		           dataType:"text",
		           url: "php/selection_evt.php",
		           data: {champ:'activites', requete: requete},
		           success: function(reponse){$("#evenement_block").html(reponse);}
			});

}

