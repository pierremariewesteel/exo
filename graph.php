<?php 
include 'config.php';



include 'menu_1.php';

include 'Evenement.php';
?>



    <div id="chart1" style="width:600px; height:250px;"></div>



    <div id="chart2" style="width:400px; height:300px;"></div>



<input type="hidden" id="IDevenement" value="<?php echo $_GET['id']?>"/>
  

<script class="code" type="text/javascript">

	$(document).ready(function(){
	    // A Bar chart from a single series will have all the bar colors the same.
	   var IDevenement=$("#IDevenement").val();
	    $.ajax({
	           type: "POST",
	           dataType:"text",
	           url: "php/graph_evt.php",
	           data: {IDevenement: IDevenement},
	           success: function(reponse){
		           var tab=jQuery.parseJSON(reponse);
		           var line=new Array();
						for(val in tab){
							tab[val]=parseInt(tab[val]);
						 line.push([val,tab[val]]);
						
						}
						 
						 console.log(line);
						 graph_zone(line,1,'Temps passé dans chaque zone de puissance');
	           }
	      });
	    
	   var line = [['Nissan', 4],['Porche', 6],['Acura', 2],['Aston Martin', 5],['Rolls Royce', 6]];
	    graph_zone(line,2,'pc');

	});


	function graph_zone(line1,i,titre){
		alert('chart'+i);
		    $('#chart'+i).jqplot([line1], {
	        title:titre,
	        seriesDefaults:{
	            renderer:$.jqplot.BarRenderer
	        },
	        axes:{
	            xaxis:{
	                renderer: $.jqplot.CategoryAxisRenderer
	            }
	        }
	    });
	};
	
</script>


<?php 

include 'end.php';
?>